<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <!-- SweetAlert2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.8/dist/sweetalert2.min.css" rel="stylesheet">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.8/dist/sweetalert2.all.min.js"></script>

    <title>Presensi RB</title>
  </head>
  <body>


  
    <div class="container mt-5">
      <!-- Card Presensi -->
      <div class="card">
        <h5 class="card-header bg-warning">Presensi Rumah Belajar Mimika</h5>
        <div class="card-body">
          <h5 class="card-title">Daftar Kehadiran Mentor</h5>
          <a href="{{route('form.mentor')}}" class="btn btn-success mb-3">Masukan Kehadiran Mentor</a>
          <p class="card-text">Tabel di bawah ini menunjukkan data kehadiran mentor.</p>
          
          <!-- Tabel Presensi -->
          <div class="table-responsive">
            <table id="presensiTable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Distrik</th>
                  <th>Status</th>
                  <th>Mapel</th>
                  <th>Catatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach($kehadiranMentor as $index => $data)
                      <tr>
                        <td>{{ $index + 1 }}</td> <!-- Menampilkan nomor urut -->
                        <td>{{ $data->tanggal }}</td> <!-- Kolom Name rata kiri -->
                        <td>{{ $data->nama }}</td> <!-- Kolom Batch rata kiri -->
                        <td>{{ $data->distrik }}</td> <!-- Kolom Semester rata kiri -->
                        <td>{{ $data->status_kehadiran }}</td> <!-- Kolom Nip rata kanan -->
                        <td>{{ $data->mata_pelajaran }}</td> <!-- Kolom Password rata kanan -->
                        <td>{{ $data->catatan }}</td> <!-- Kolom Status rata kiri -->
                        <td>
                        <a href="{{ route('edit.mentor', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        </td> <!-- Kolom Status rata kiri -->
                      
                      </tr>
                    @endforeach
              
                <!-- Tambahkan lebih banyak data di sini -->
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.8/dist/sweetalert2.all.min.js"></script>

<script>
    // Check if the session has a success message and show SweetAlert
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',  // Display the success message
            showConfirmButton: true
        });
    @endif
</script>

    <div class="container mt-5">
      <!-- Card Presensi -->
      <div class="card">
        <h5 class="card-header bg-info">Presensi Rumah Belajar Mimika</h5>
        <div class="card-body">
          <h5 class="card-title">Daftar Kehadiran Siswa</h5>
          <a href="{{route('form.siswa')}}" class="btn btn-success mb-3">Masukan Kehadiran Siswa</a>
          <p class="card-text">Tabel di bawah ini menunjukkan data kehadiran siswa.</p>
          
          <!-- Tabel Presensi -->
          <div class="table-responsive">
            <table id="presensiTable1" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Distrik</th>
                  <th>Status</th>
                  <th>Mapel</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach($kehadiranSiswa as $index => $data)
                      <tr>
                        <td>{{ $index + 1 }}</td> <!-- Menampilkan nomor urut -->
                        <td>{{ $data->tanggal }}</td> <!-- Kolom Name rata kiri -->
                        <td>{{ $data->nama }}</td> <!-- Kolom Batch rata kiri -->
                        <td>{{ $data->distrik }}</td> <!-- Kolom Semester rata kiri -->
                        <td>{{ $data->status_kehadiran }}</td> <!-- Kolom Nip rata kanan -->
                        <td>{{ $data->mata_pelajaran }}</td> <!-- Kolom Password rata kanan -->
                        <td>
                        <a href="{{ route('edit.siswa', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        </td> <!-- Kolom Status rata kiri -->
                      
                      </tr>
                    @endforeach
                <!-- Tambahkan lebih banyak data di sini -->
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>























    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

    <script>
      $(document).ready(function() {
        // Menginisialisasi DataTable
        $('#presensiTable').DataTable();
      });
    </script>
    <script>
      $(document).ready(function() {
        // Menginisialisasi DataTable
        $('#presensiTable1').DataTable();
      });
    </script>
  </body>
</html>
