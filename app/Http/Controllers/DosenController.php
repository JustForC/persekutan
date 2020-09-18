<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosens;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \DB::table('dosen')->insert([
            'email' => $request->email,
            'nama' => $request->nama,
            'nip' => $request->nip,
            'password' => $request->password,
        ]);
        $mail->SMTPDebug = 0;                                	// Enable verbose debug output
                  $mail->isSMTP();                                     	// Set mailer to use SMTP
                  $mail->Host = 'smtp.gmail.com';												// Specify main and backup SMTP servers
                  $mail->SMTPAuth = true;                              	// Enable SMTP authentication
                  $mail->Username = 'ghemaallan@gmail.com';             // SMTP username
                  $mail->Password = '';              // SMTP password
                  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                  $mail->Port = 587;                                    // TCP port to connect to
  
                  //Recipients
                  $mail->setFrom('ghemaallan@gmail.com', 'Mailer');
                  $mail->addAddress($request->email, $request->nama);	// Add a recipient, Name is optional

  
                  //Attachments (optional)
                  // $mail->addAttachment('/var/tmp/file.tar.gz');			// Add attachments
                  // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');	// Optional name
  
                  //Content
                  $mail->isHTML(true); 																	// Set email format to HTML
                  $mail->Subject = ('Berhasil Bergabung');
                  $mail->Body    = ('Selamat anda telah berhasil mendaftar');						// message
  
                  $mail->send();
        return view('dosen.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function login(Request $request)
    {
        if (\DB::table('dosen')->where('email','=', $request->email)->exists())
        {
            $login = \DB::table('dosen')->where('email',$request->email)->first();
            if($login->password == $request->password)
            {
                \Session::put('emaildosen',$login->email);
                return redirect('dosen/home');
            }
            else{
                return view('dosen/login');
            }
            
        }
        else 
        {
            return view('dosen/login');
        }
    }

    public function logout()
    {
        \Session::forget('emaildosen');
        return view('home');
    }

    public function tambahmatkul(Request $request)
    {
        $email = \Session::get('emaildosen');
        $nip=\DB::table('dosen')->where('email','=',$email)->first();
        \DB::table('table_matkul')->insert([
            'nip' => $nip->nip,
            'nama_matkul' => $request->nama,
            'sks' => $request->sks,
        ]);

        return redirect('/dosen/home');
    }

    public function daftarmahasiswa($id)
    {
        $mahasiswas = \DB::table('table_daftar')
                         ->join('table_matkul','table_daftar.id_matkul','=', 'table_matkul.id')
                         ->join('mahasiswa','table_daftar.npm','=','mahasiswa.npm')
                         ->where('table_matkul.id','=',$id)
                         ->select('mahasiswa.npm','mahasiswa.nama','mahasiswa.email','mahasiswa.angkatan','mahasiswa.kelamin')
                         ->get();
        return view('dosen/daftarmahasiswa',compact('mahasiswas'));
    }

    public function editprofile(Request $request)
    {
        $email = \Session::get('emaildosen');
        $data = \DB::table('dosen')->where('email','=',$email)->first();
        $update = \DB::table('dosen')->where('nip','=',$request->nip)
                     ->update([
                         'nama' => $request->nama,
                         'password' => $request->password,
                         'email' => $request->email,
                     ]);
        $email = \DB::table('dosen')
                     ->where('nip','=',$request->nip)->first();
        \Session::put('emaildosen',$email->email);
        return redirect('/dosen/profile');

    }

    public function profile()
    {
        if(\Session::has('emaildosen')){
            $email = \Session::get('emaildosen');
            $dosen = \DB::table('dosen')->where('email','=',$email)->first();
            return view('/dosen/profile',compact('dosen'));
        }
        else
        {
            return redirect('/dosen/login');
        }
    }

    public function home()
    {
        if(\Session::has('emaildosen')){
            $email = \Session::get('emaildosen');
            $dosen = \DB::table('dosen')
                        ->where('email','=', $email)
                        ->first();
            $notifs = \DB::table('notif')
                         ->where('jenis_notif','=',1)
                         ->where('nip','=',$dosen->nip)
                         ->get();
            return view('dosen/home',compact('notifs'));
        }
        else
        {
            return redirect('/dosen/login');
        }
    }

    public function perwalian()
    {
        if(\Session::has('emaildosen')){
            $email = \Session::get('emaildosen');
            $dosen = \DB::table('dosen')->where('email','=',$email)->first();
            $mahasiswas = \DB::table('mahasiswa')
                            ->join('dosen','mahasiswa.nip','=','dosen.nip')
                            ->where('mahasiswa.nip','=',$dosen->nip)
                            ->select('mahasiswa.npm','mahasiswa.nama','mahasiswa.angkatan','mahasiswa.kelamin','mahasiswa.email')
                            ->get();
            $datas = \DB::table('mahasiswa')
                        ->where('nip','=',$dosen->nip)
                        ->select(
                            \DB::raw('kelamin as gender'),
                            \DB::raw('count(*) as number')
                        )
                        ->groupBy('gender')
                        ->get();
            $array[]=['Gender','Number'];
            foreach($datas as $key=> $data)
            { 
                $array[++$key] = [$data->gender,$data->number];
            }
            $angkatans = \DB::table('mahasiswa')
                        ->where('nip','=',$dosen->nip)
                        ->select(
                            \DB::raw('angkatan as angkatan'),
                            \DB::raw('count(*) as number')
                        )
                        ->groupBy('angkatan')
                        ->get();
            $array_angkatan[]=['Angkatan','Number'];
            foreach($angkatans as $key=> $value)
            {
                $array_angkatan[++$key] = [strval($value->angkatan),$value->number];
            }
            return view('dosen/perwalian',compact('mahasiswas'))
                 ->with('gender',json_encode($array))
                 ->with('angkatan',json_encode($array_angkatan));
        }
        else
        {
            return redirect('dosen/login');
        }
    }

    public function kelasdiajar()
    {
        if(\Session::has('emaildosen')){
            $email = \Session::get('emaildosen');
            $dosen = \DB::table('dosen')->where('email','=',$email)->first();
            $matkuls = \DB::table('table_matkul')
                          ->join('dosen','table_matkul.nip','=','dosen.nip')
                          ->where('table_matkul.nip','=',$dosen->nip)
                          ->select('table_matkul.nama_matkul','table_matkul.sks','table_matkul.id')
                          ->get();
            return view('dosen/kelasdiajar',compact('matkuls'));
        }
        else{
            return redirect('dosen/login');
        }
    }

    public function masuktambahmatkul()
    {
        if(\Session::has('emaildosen')){
            return view('dosen/tambahmatkul');
        }
        else{
            return redirect('dosen/login');
        }
    }

    public function masukeditprofile()
    {
        if(\Session::has('emaildosen')){
            $email = \Session::get('emaildosen');
            $dosen = \DB::table('dosen')->where('email','=',$email)->first();
            return view('dosen/editprofile',compact('dosen'));
        }
        else{
            return redirect('/dosen/login');
        }
    }

    public function masuklogin()
    {
        return view('dosen.login');
    }

    public function masukregister()
    {
        return view('dosen.register');
    }
}
