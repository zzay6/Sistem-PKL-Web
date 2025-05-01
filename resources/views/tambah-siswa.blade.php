@extends('layouts.app')
@section("content")
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Siswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <form>
                            <div class="form-group mb-3">
                              <label for="exampleFormControlFile1">file</label>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <a class="btn btn-primary" href="data-siswa.html" role="button">Kirim</a>
                          </form>
                        
                        
                    </div>
                </main>
@endsection
