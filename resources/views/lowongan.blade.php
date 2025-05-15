@extends('layouts.app')
@section("content")
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Lowongan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Lowongan</li>
        </ol>
        <div class="lamaran1 mb-4">
            <a class="btn btn-primary" href="/tambah-perusahaan" role="button">Buat Lowongan</a>
        </div>

        <div class="card mb-4">
            <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Judul Lowongan</th>
                            <th>Deskripsi</th>
                            <th>Status</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Judul Lowongan</th>
                            <th>Deskripsi</th>
                            <th>Status</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>15</td>
                            <td>Pelajar</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>
@endsection