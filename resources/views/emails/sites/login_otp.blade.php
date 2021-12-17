@component('mail::message')
Selamat akun anda sudah terdaftar di SABA-Store.


Agar anda segera dapat berbelanja di SABA-store lakukan login dan masukkan 
Kode OTP yang akan dikirimkan ke email anda.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/user/login'])
Klik Disini
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
