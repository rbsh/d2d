@extends('admin.master')
@section('title', 'Add Item')
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
            <a href="{{url('la-admin/blank')}}">Item</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Item</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Edit Item</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Edit
<small>Item</small>
</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
{{-- <div class="note note-info">
    <p> A black page template with a minimal dependency assets to use as a base for any custom page you create </p>
</div>
 --}}
<form action="{{ url('la-admin/item/'.$item->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PUT') }}

@include('admin.item.form')

</form>
@endsection