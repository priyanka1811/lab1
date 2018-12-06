<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Request for new account</title>
</head>

<body style="margin:0px; padding:0px;">
<table border="0" cellpadding="0" cellspacing="0" style="margin:0px auto; background:#eee; box-shadow:inset 0px 0px 100px #fafafa; max-width:100%; padding:20px; font-family:Arial, Helvetica, sans-serif;">
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" style="margin:10px auto; background:#fff; box-shadow:inset 0px 0px 100px #fafafa; width:600px; padding:20px; font-family:Arial, Helvetica, sans-serif;">
        <tr>
          <td><h1>App Name</h1></td>
        </tr>
        <tr>
          <td colspan="2"><hr style="margin:10px 0px; padding:0px; height:1px; background:#ddd; border:none;"></td>
        </tr>
        <tr>
          <td colspan="2"><p> Dear Admin,</p>
            <p>New request for create lab account</p>
            <p>User Detals :</p>
            <p>{{$user->name}}</p>
            <p>{{$user->email}}</p>
            <p>{{$userdetails->phone}}</p>
            </td>
        </tr>
        <tr>
          <td colspan="2"><hr style="margin:20px 0px; padding:0px; height:1px; background:#ddd; border:none;">
            <p style="font-family:Arial, Helvetica, sans-serif; color:#555; font-size:12px; line-height:18px; font-weight:600;">This email was sent from a notification-only address that can’t accept incoming e-mail. Please don’t reply to this message. </p>
            <p style="font-family:Arial, Helvetica, sans-serif; color:#555; font-size:12px; line-height:18px; font-weight:600;">© {{ config('app.name') }} {{ date('Y') }} All Rights Reserved.</p></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
