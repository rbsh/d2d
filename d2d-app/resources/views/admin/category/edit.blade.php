@extends('admin.master')
@section('title', 'Add Category')
@section('content')

@if(isset($success))
  @include('admin.edit-msg')
@endif

<!-- BEGIN PAGE HEADER-->
<!-- BEGIN THEME PANEL -->
<!-- END THEME PANEL -->
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{url('la-admin/blank')}}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Category</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Edit Catgory</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Edit
<small>Category</small>
</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
{{-- <div class="note note-info">
    <p> A black page template with a minimal dependency assets to use as a base for any custom page you create </p>
</div>
 --}}
<form action="{{ url('la-admin/category/'.$cat->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PUT') }}

@include('admin.category.form')

</form>
@endsection