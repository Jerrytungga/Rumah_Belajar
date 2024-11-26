<!doctype html>
<html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <title>Edit Kehadiran Siswa</title>
   </head>
   <body>
     <div class="container mt-5">
       <!-- Card Presensi -->
       <div class="card">
         <h5 class="card-header bg-warning text-dark">Edit Presensi Rumah Belajar Mimika</h5>
         <div class="card-body">
           <h5 class="card-title">Edit Kehadiran Siswa</h5>
           
           <!-- Form Edit Kehadiran -->
           <form method="post" action="{{ route('presensisiswa.update', $siswa->id) }}" class="mt-4">
             @csrf
             @method('PUT') <!-- This tells Laravel to treat this as a PUT request -->

             <div class="form-group">
              <label for="nama">Nama siswa</label>
             <input type="text" class="form-control" value="{{$siswa->nama}}" name="nama">
            </div>

             <div class="form-group">
               <label for="distrik">Distrik</label>
               <select class="form-control" name="distrik" id="distrik" required>
                 <option value="">Silahkan Pilih</option>
                 <option value="Wania" {{ $siswa->distrik == 'Wania' ? 'selected' : '' }}>Wania</option>
                 <option value="Panimbar" {{ $siswa->distrik == 'Panimbar' ? 'selected' : '' }}>Panimbar</option>
               </select>
             </div>

             <div class="form-group">
               <label for="status">Status Kehadiran</label>
               <select class="form-control" name="status_kehadiran" id="status" required>
                 <option value="">Silahkan Pilih</option>
                 <option value="Hadir" {{ $siswa->status_kehadiran == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                 <option value="Tidak Hadir" {{ $siswa->status_kehadiran == 'Tidak Hadir' ? 'selected' : '' }}>Tidak Hadir</option>
               </select>
             </div>

             <div class="form-group">
               <label for="mapel">Mata Pelajaran</label>
               <select class="form-control" name="mapel" id="mapel" >
                 <option value="">Silahkan Pilih</option>
                 <option value="Matematika" {{ $siswa->mapel == 'Matematika' ? 'selected' : '' }}>Matematika</option>
                 <option value="Bahasa Inggris" {{ $siswa->mapel == 'Bahasa Inggris' ? 'selected' : '' }}>Bahasa Inggris</option>
               </select>
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
