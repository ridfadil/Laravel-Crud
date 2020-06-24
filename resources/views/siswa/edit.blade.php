@extends('layout.master')
@section('contain')
            <h1>Edit Data Siswa</h1>
            @if(session('sukses'))
            <div class="alert alert-primary" role="alert">
                {{session('sukses')}}
              </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                <form action="/siswa/{{$siswa->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Depan</label>
                      <input name="nama_depan" value="{{$siswa->nama_depan}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Belakang</label>
                        <input name="nama_belakang" value="{{$siswa->nama_belakang}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                      </div>

                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                        <select name="jenis_kelamin" valu class="form-control"  id="exampleFormControlSelect1">
                          <option @if($siswa->jenis_kelamin == 'L') selected @endif>L<Label>
                          <option @if($siswa->jenis_kelamin == 'P') selected @endif>P</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                      <input name="agama" value="{{$siswa->agama}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                      </div>

                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">
                            {{$siswa->alamat}}
                        </textarea>
                      </div>


                    </div>
                    <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <button type="submit" class="btn btn-primary btn-warning">Update</button>
                </form>
            </div>
            </div>
@endsection

