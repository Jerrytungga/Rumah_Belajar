<!doctype html>
<html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <title>Edit Kehadiran Mentor</title>
   </head>
   <body>
     <div class="container mt-5">
       <!-- Card Presensi -->
       <div class="card">
         <h5 class="card-header bg-warning text-dark">Edit Presensi Rumah Belajar Mimika</h5>
         <div class="card-body">
           <h5 class="card-title">Edit Kehadiran Mentor</h5>
           
           <!-- Form Edit Kehadiran -->
           <form method="post" action="{{ route('presensi.update', $mentor->id) }}" class="mt-4">
             @csrf
             @method('PUT') <!-- This tells Laravel to treat this as a PUT request -->

             <div class="form-group">
               <label for="nama">Mentor</label>
               <select class="form-control" name="nama" id="nama" required>
                 <option value="">Silahkan Pilih</option>
                 <option value="Yenny Marijanti" {{ $mentor->nama == 'Yenny Marijanti' ? 'selected' : '' }}>Yenny Marijanti</option>
                 <option value="Minar Situmeang" {{ $mentor->nama == 'Minar Situmeang' ? 'selected' : '' }}>Minar Situmeang</option>
                 <option value="Surianti" {{ $mentor->nama == 'Surianti' ? 'selected' : '' }}>Surianti</option>
                 <option value="Novita Wahyuni" {{ $mentor->nama == 'Novita Wahyuni' ? 'selected' : '' }}>Novita Wahyuni</option>
                 <option value="Rosa Delima Makina Moyuend" {{ $mentor->nama == 'Rosa Delima Makina Moyuend' ? 'selected' : '' }}>Rosa Delima Makina Moyuend</option>
                 <option value="Yunety wamona" {{ $mentor->nama == 'Yunety wamona' ? 'selected' : '' }}>Yunety wamona</option>
                 <option value="Heny Kusumawardani" {{ $mentor->nama == 'Heny Kusumawardani' ? 'selected' : '' }}>Heny Kusumawardani</option>
                 <option value="Jerri Christian Gedeon Tungga" {{ $mentor->nama == 'Jerri Christian Gedeon Tungga' ? 'selected' : '' }}>Jerri Christian Gedeon Tungga</option>
                 <option value="Supadmi" {{ $mentor->nama == 'Supadmi' ? 'selected' : '' }}>Supadmi</option>
                 <option value="Mega Belau" {{ $mentor->nama == 'Mega Belau' ? 'selected' : '' }}>Mega Belau</option>
                 <option value="Linda Sianturi" {{ $mentor->nama == 'Linda Sianturi' ? 'selected' : '' }}>Linda Sianturi</option>
               </select>
             </div>

             <div class="form-group">
               <label for="distrik">Distrik</label>
               <select class="form-control" name="distrik" id="distrik" required>
                 <option value="">Silahkan Pilih</option>
                 <option value="Wania" {{ $mentor->distrik == 'Wania' ? 'selected' : '' }}>Wania</option>
                 <option value="Panimbar" {{ $mentor->distrik == 'Panimbar' ? 'selected' : '' }}>Panimbar</option>
               </select>
             </div>

             <div class="form-group">
               <label for="status">Status Kehadiran</label>
               <select class="form-control" name="status_kehadiran" id="status" required>
                 <option value="">Silahkan Pilih</option>
                 <option value="Hadir" {{ $mentor->status_kehadiran == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                 <option value="Tidak Hadir" {{ $mentor->status_kehadiran == 'Tidak Hadir' ? 'selected' : '' }}>Tidak Hadir</option>
               </select>
             </div>

             <div class="form-group">
               <label for="mapel">Mata Pelajaran</label>
               <select class="form-control" name="mapel" id="mapel" required>
                 <option value="">Silahkan Pilih</option>
                 <option value="Matematika" {{ $mentor->mapel == 'Matematika' ? 'selected' : '' }}>Matematika</option>
                 <option value="Bahasa Inggris" {{ $mentor->mapel == 'Bahasa Inggris' ? 'selected' : '' }}>Bahasa Inggris</option>
               </select>
             </div>

             <div class="form-group">
               <label for="catatan">Catatan</label>
               <textarea name="catatan" class="form-control" placeholder="Catatan ini bisa digunakan untuk memberi masukan untuk mentor selanjutnya yang mengajar" required>{{ $mentor->catatan }}</textarea>
             </div>
             <a href="{{route('tampil.data')}}" class="btn btn-info">Kembali</a>
             <button type="submit" class="btn btn-primary">Update Kehadiran</button>
           </form>
         </div>
       </div>
     </div>

     <!-- jQuery -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

     <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
   </body>
</html>
