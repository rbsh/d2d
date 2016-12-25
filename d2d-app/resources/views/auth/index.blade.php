@extends('admin.master')
@section('title', 'Blank Page')
@section('content')
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
            <a href="#">Manage Your Item</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Manage Item</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Manage Your Item
<small>Manage Item</small>
</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="portlet box green">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-cogs"></i>List of item </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                            <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body flip-scroll">
                                        {{-- <table class="table table-bordered table-striped table-condensed flip-content"> --}}
                                            <table class="table table-hover table-striped">
                    <tr>
                      <th width="10">ID</th>
                      <th width="30">Photo</th>
                      <th>Name</th>
                      <th width="10">Order</th>
                      <th width="10">Active</th>
{{--                       <th width="10"></th>
 --}}                      <th width="10"></th>
                    </tr>



                    @foreach($users as $one)
                    <tr>
                      <td>{{$one->id}}</td>
                      <td><img src="" height="25"></td>
                      <td>{{$one->fullname}}</td>
                      <td>{{$one->row_order}}</td>
                      <td>

                      @if($one->row_status==0)
                      <form method="post" action="{{url('la-admin/auth/change-status/'.$one->id.'?status='.$one->status)}}">
                      <input type="submit" value="NO" class="btn btn-xs btn-danger"> 
                      {{ csrf_field() }}
                      </form>
                      @else
                      <form method="post" action="{{url('la-admin/auth/change-status/'.$one->id.'?status='.$one->status)}}">

                      <input type="submit" value="YES" class="btn btn-xs btn-success"> 
                      {{ csrf_field() }}
                      </form>
                      @endif
                      </td>
{{--                       <td><a href="{{url('la-admin/item/'.$one->id)}}" class="btn btn-xs btn-warning">EDIT</a></td>
 --}}                      <td><form method="post" action="{{url('la-admin/auth/'.$one->id)}}">
                      <button class="btn btn btn-xs btn-danger" data-toggle="confirmation" data-original-title="Are you sure ?" title="">DELETE</button>
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      </form></td>
                    </tr>

                      @endforeach








                          <tr bgcolor="#f4f4f4">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>

                  
                  </table>
                                    </div>
                                </div>

@endsection











