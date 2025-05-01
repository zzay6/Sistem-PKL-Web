@extends('layouts.app')
@section("content")
<main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Perusahaan</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Perusahaan</li>
                    </ol>
                    <!-- <div class="buatl">
                            <h2 class="lowonganp1">Finance & Tax Junior Staff</h2>
                            <p>PT. Bakti bersama</p>
                        </div> -->
                    <form>
                        <div class="form-row mb-3">
                                <input type="text" class="form-control" placeholder="Nama Perusahaan">
                            </div>  
                            <div class="form-row mb-3">
                                    <input type="text" class="form-control" placeholder="Alamat perusahaan">
                                </div>
                                <a class="btn btn-primary" href="perusahaan.html" role="button">Kirim</a>
                    </form>
                    <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                            </div>
                        </div> -->
                    <div style="height: 100vh"></div>
                    
                </div>
            </main>
@endsection