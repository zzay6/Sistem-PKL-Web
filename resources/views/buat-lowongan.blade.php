@extends('layouts.app')
@section("content")
<main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Buat Lowongan</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="p-4 border rounded shadow-sm">  <!-- box model -->
                          <div class="col-md-4 mb-3">
                        
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Judul" required>
                            <div class="valid-feedback">
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            
                            <input type="number" class="form-control" id="validationCustom02" placeholder="Jumlah Kebutuhan" required>
                            <div class="valid-feedback">
                            </div>
                              </div>
                              <div class="form-group ">
                
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Deskripsi" ></textarea>
                            </div>
                            <a href="#" class="btn btn-primary mt-3">Lamar Sekarang</a>
                        </div>
            
        </div>
        </main>
@endsection
