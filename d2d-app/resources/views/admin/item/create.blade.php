@extends('admin.master')
@section('title', 'Add Item')
@section('content')

@if(isset($success))
  @include('admin.add-msg')
@endif

<!-- BEGIN PAGE HEADER-->
<!-- BEGIN THEME PANEL -->
<!-- END THEME PANEL -->
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{url('la-admin/item')}}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Item</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Add Item</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Manage your Item
<small>Insert</small>
</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
{{-- <div class="note note-info">
    <p> A black page template with a minimal dependency assets to use as a base for any custom page you create </p>
</div>
 --}}
{{-- <form action="{{ url('la-admin/category')}}" method="post" enctype="multipart/form-data"> --}}

<form action="{{ url('la-admin/item')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('POST') }}

@include('admin.item.form')

</form>

@endsection