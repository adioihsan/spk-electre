@php
        $alert = $alert ?? null;
        $page_ref = [
            array("title"=>"Jurusan","route"=>"jurusan"),
        ];
@endphp
<x-layout bodyClass="g-sidenav-show bg-gray-200"  :alert="$alert">
    <x-navbars.sidebar activePage="Jurusan"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage='Tambah Jurusan' :page_ref="$page_ref" ></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <!-- <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div> -->
            <div class="card card-body mx-3 mx-md-4 mt-6">
                <form method='POST' action='{{ route('create-jurusan') }}' enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Nama Jurusan</label>
                                <input type="text" name="nama" class="form-control border border-2 p-2"   value="{{ old('nama') }}">
                                @error('nama')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Kode Jurusan</label>
                                <input type="text" name="kode" class="form-control border border-2 p-2" value="{{ old('kode') }}">
                                @error('kode')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control border border-2 p-2" name="deskripsi" rows="5" id="text-editor" placeholder="Deskripsikan tentang jurusan." spellcheck="false" >{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label class="form-label">Logo Jurusan</label>
                                <input type="file" name="logo"  class="form-control border border-2 p-2" accept="image/png, image/jpeg" value="{{ old('logo') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label class="form-label">Website Jurusan</label>
                                <input type="url" name="website"  class="form-control border border-2 p-2" accept="image/png, image/jpeg" value="{{ old('website') }}">
                                @error('website')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn bg-gradient-dark">Tambahkan</button>
                </form>
            </div>
            
        </div>
    </div>
    <x-plugins></x-plugins>
</x-layout>
