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
            <a href="#">Manage Your Registered users</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Manage Users</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Manage Your user
<small>Manage Users</small>
</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="portlet box green">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-cogs"></i>List of Users </div>
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
                      <th width="30">Email</th>
                      <th>Full Name</th>
                      <th>Mobile</th>
                      <th>address</th>
                      <th>city</th>
                      <th>Country</th>
                      <th width="10">Active</th>
                    </tr>



                    @foreach($users as $one)
                    <tr>
                      <td>{{$one->id}}</td>
                      <td>{{$one->email}}</td>
                      <td>{{$one->fullname}}</td>
                      <td>{{$one->mobile}}</td>
                      <td>{{$one->address}}</td>
                      <td>{{$one->city}}</td>
                      <td>{{$one->country}}</td>
                      <td>


                      @if($one->email!="admin@admin.com")
                      @if($one->row_status=="0")
                      <form method="post" action="{{url('la-admin/user/change-status/'.$one->id.'?status='.$one->row_status)}}">
                      <input type="submit" value="NO" class="btn btn-xs btn-danger"> 
                      {{ csrf_field() }}
                      </form>
                      @else
                      <form method="post" action="{{url('la-admin/user/change-status/'.$one->id.'?status='.$one->row_status)}}">

                      <input type="submit" value="YES" class="btn btn-xs btn-success"> 
                      {{ csrf_field() }}
                      </form>
                      @endif
                      @endif

                      </td>
{{--                       <td><a href="{{url('la-admin/item/'.$one->id)}}" class="btn btn-xs btn-warning">EDIT</a></td>
 --}}                      
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











