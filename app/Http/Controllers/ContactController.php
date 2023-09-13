<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function formsubmission(Request $request)
    {

        $validated = $request->validate([
            'username' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
            'subject' => ['required']
        ]);
        $name = $request->username;
        $mobile = $request->phone;
        $email = $request->email;
        $service = $request->subject;
        $message1 = $request->message;

        $to = "gokulnath@freshmindz.in";

        $subject = "New Requirement Form Submission";

            $message = "
            <html>
            <head>
            <title>Form Submission</title>
            </head>
            <body>
            <h4>Ganesan Enterprises Form Submission</h4>
            <table>
            <tr>
            <th>Name :</th>
            <td>".$name."</td>
            </tr>
            <tr>
            <th>Mobile Number :</th>
            <td>".$mobile."</td>
            </tr>
            <tr>
            <th>E-mail :</th>
            <td>".$email."</td>
            </tr>
            <tr>
            <th>Service :</th>
            <td>".$service."</td>
            </tr>
            <tr>
            <th>Message :</th>
            <td>".$message1."</td>
            </tr>
            </table>
            </body>
            </html>
            ";

// Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


    $headers .= 'From: <Sai Techno solutions @example.com>' . "\r\n";

    $mail = mail($to,$subject,$message,$headers);

    if($mail)
    {
        return back()->with('success','Mail Sent Successfully');
    }

    }

}