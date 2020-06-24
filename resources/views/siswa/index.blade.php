@extends('layout.master')
@section('contain')

            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
              </div>
            @endif

            <div class="row">
                <div class="col-6">
                    <h1> Data Mahasiswa </h1>
                </div>
                <div class="col-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#staticBackdrop">
                        Tambah Data Siswa
                    </button>

                    </div>
                    {{-- {{ dd($data_siswa)}} --}}
                        <table class="table table-hover">
                            <tr>
                                <th> Nama Depan </th>
                                <th> Nama Belakang </th>
                                <th> Jenis Kelamin </th>
                                <th> Agama </th>
                                <th> Alamat </th>
                                <th> Aksi </th>
                            </tr>
                            @foreach ($data_siswa as $siswa)
                            <tr>
                                <td> {{$siswa->nama_depan}}</td>
                                <td>{{$siswa->nama_belakang}}</td>
                                <td>{{$siswa->jenis_kelamin}}</td>
                                <td> {{$siswa->agama}} </td>
                                <td> {{$siswa->alamat}} </td>
                                <td>
                                    <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data?')">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    {{-- Untuk aksi ke Routes --}}
                    <form action="siswa/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Depan</label>
                          <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Belakang</label>
                            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control"  id="exampleFormControlSelect1">
                              <option>L<Label>
                              <option>P</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>

                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
            </div>
            </div>
@endsection

