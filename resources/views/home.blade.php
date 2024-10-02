@extends('layout')
@section('title')
    Trang chủ
@endsection
@section('content')
    <div class="hero-image" style="background-image: url('{{ asset('img/banner-o-nha-doc-sach-trong-cay-1-1627487013381174269931.webp') }}'); height: 600px; background-size: cover; background-position: center;">
        <div class="text-center d-flex flex-column justify-content-center align-items-center h-100">
            
        </div>
    </div>

<!-- Danh sách sản phẩm -->
<div class="container my-5">
    <h2 class="text-center mb-4">Sản phẩm nổi bật</h2>
    <div class="row">
        @foreach ($bookdesc as $book)
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href="{{ route('page.detail', $book->id) }}"><img src="{{ $book->thumbnail }}" class="card-img-top" alt="Sản phẩm 1"></a>
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">{{ $book->Price }}</p>
                    <a href="#" class="btn btn-primary">Chi tiết</a>
                </div>
            </div>
        </div>
        @endforeach
       
    </div>
</div>
    @endsection