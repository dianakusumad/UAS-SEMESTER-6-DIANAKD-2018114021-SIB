@extends('layout.main')
@section('title', 'MY PROFILE')
@section('content')


<div class="container">
<div class="jumbotron">
<center><h2><font size="6"> Hallo Create My Profile</font></h2></center
<hr class="my-3">
<form action="/profil" method="POST">

@csrf


<div class="form-group">
<label for="nama">Id</label>
<input type="text" class="form-control" id="nama"
                    name="id" placeholder="id"
                    value="">
</div>

<div class="form-group">
<label for="hobby">Hobby</label>
<select class="form-control" id="hobby"
                    name="hobby" >
<option value="Menyanyi">Berenang</option>
<option value="Dance">Karate</option>
<option value="Membaca">Muay Thai</option>
<option value="Olahraga">Olahraga</option>
<option value="Lain-lain">Lain-lain</option>
</select>
</div>
<div class="form-group">
<label for="cita_cita">Cita-Cita</label>
<input type="text" class="form-control" id="cita_cita"
                    name="cita_cita" placeholder="Silahkan diisi...."
                    value="">

</div>

<div class="form-group">
<label for="visi_misi">Goals</label>
<input type="text" class="form-control" id="visi_misi"
                    name="visi_misi" placeholder="Silahkan diisi...."
                    value="">


</select>
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
</form>
</div>
</div>

@endsection