Click here to reset your password: <br>
<a href="">{{$link}}</a>{{$link=url('password/reset',$token).'?email='.urlencode($user->getEmailForPasswordReset())}}