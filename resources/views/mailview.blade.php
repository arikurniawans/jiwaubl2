<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Aktivasi Akun Inovator | jiwaubl.ubl.ac.id</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
  </head>
  <body style="margin: 0; padding: 0; box-sizing: border-box;">
    <table align="center" cellpadding="0" cellspacing="0" width="95%">
      <tr>
        <td align="center">
          <table align="center" cellpadding="0" cellspacing="0" width="600" style="border-spacing: 2px 5px;" bgcolor="#fff">
            <tr>
              <td align="center" style="padding: 5px 5px 5px 5px;">
                <a href="{{route('login')}}" target="_blank">
                  <img src="{{asset('public/logoppikmail.jpg')}}" style="width:420px; margin: -100px -100px; border:0;"/>
                </a>
              </td>
            </tr>
            <tr>
              <td bgcolor="#fff">
                <table cellpadding="0" cellspacing="0" width="100%%">
                  <tr>
                    <td style="padding: 10px 0 10px 0; font-family: Nunito, sans-serif; font-size: 20px; font-weight: 900">
                      Aktivasi Akun Inovator JIWAUBL
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td bgcolor="#fff">
                <table cellpadding="0" cellspacing="0" width="100%%">
                  <tr>
                    <td style="padding: 20px 0 20px 0; font-family: Nunito, sans-serif; font-size: 16px;">
                      Halo, {{$details['name']}}
                    </td>
                  </tr>
                  <tr>
                    <td style="padding: 0; font-family: Nunito, sans-serif; font-size: 16px;">
                      Terima kasih telah mendaftar sebagai Inovator di jiwaubl.ac.id. Mohon konfirmasi email ini untuk mengaktifkan akun Inovator Anda.
                    </td>
                  </tr>
                  <tr>
                    <td style="padding: 20px 0 20px 0; font-family: Nunito, sans-serif; font-size: 16px; text-align: center;">
                      <button style="background-color: #f8bc40; border: none; color: white; padding: 15px 40px; text-align: center; display: inline-block; font-family: Nunito, sans-serif; font-size: 18px; font-weight: bold; cursor: pointer;">
                        Konfimasi Email
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td style="padding: 0; font-family: Nunito, sans-serif; font-size: 16px;">
                      Jika Anda kesulitan mengklik tombol "Konfirmasi Email", copy dan paste URL di bawah ke dalam browser Anda:
                      <p id="url">&#60;URL&#62;</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="padding: 50px 0; font-family: Nunito, sans-serif; font-size: 16px;">
                      Regards,
                      <p>Tim JIWAUBL</p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>