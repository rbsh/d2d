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
            <a href="{{url('la-admin/blank')}}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Blank Page</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Page Layouts</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> Blank Page Layout
<small>blank page layout</small>
</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="portlet box green">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-cogs"></i>List all categories </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                            <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                            <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                            <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body flip-scroll">
                                        {{-- <table class="table table-bordered table-striped table-condensed flip-content"> --}}
                                            <table class="table">
                    <tr>
                      <th width="10">ID</th>
                      <th width="30">Photo</th>
                      <th>Name</th>
                      <th width="10">Order</th>
                      <th width="10">Active</th>
                      <th width="10"></th>
                      <th width="10"></th>
                    </tr>



                    <?php 
                    $first = DB::table('categories')->where('menu_levels','0')->get();
                    ?>
                    @foreach($first as $one)
                    <tr bgcolor="#3599bb">
                      <td>{{$one->id}}</td>
                      <td><img src="{{url($one->photo)}}" height="25"></td>
                      <td>{{$one->name}}</td>
                      <td>{{$one->row_order}}</td>
                      <td>

                      @if($one->status=="0")
                      <form method="post" action="{{url('la-admin/category/change-status/'.$one->id.'?status='.$one->status)}}">
                      <input type="submit" value="NO" class="btn btn-xs btn-danger"> 
                      {{ csrf_field() }}
                      </form>
                      @else
                      <form method="post" action="{{url('la-admin/category/change-status/'.$one->id.'?status='.$one->status)}}">

                      <input type="submit" value="YES" class="btn btn-xs btn-success"> 
                      {{ csrf_field() }}
                      </form>
                      @endif
                      </td>
                      <td><a href="{{url('la-admin/category/'.$one->id)}}" class="btn btn-xs btn-warning">EDIT</a></td>
                      <td><form method="post" action="{{url('la-admin/category/'.$one->id)}}">
                      <button class="btn btn btn-xs btn-danger" data-toggle="confirmation" data-original-title="Are you sure ?" title="">DELETE</button>
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      </form></td>
                    </tr>

                              <?php 
                              $second = DB::table('categories')->where('menu_levels', $one->id)
                                                               ->where('user_levels', '1')
                                                               ->get();
                              ?>
                              @foreach($second as $two)
                              <tr>
                                <td>{{$two->id}}</td>
                                <td bgcolor="#bcbcbc"><img src="{{url($one->photo)}}" height="25"></td>
                                <td bgcolor="#bcbcbc">{{$two->name}}</td>
                                <td bgcolor="#bcbcbc">{{$two->row_order}}</td>
                                <td bgcolor="#bcbcbc">

                                @if($two->status=="0")
                                <form method="post" action="{{url('la-admin/category/change-status/'.$two->id.'?status='.$two->status)}}">
                                <input type="submit" value="NO" class="btn btn-xs btn-danger"> 
                                {{ csrf_field() }}
                                </form>
                                @else
                                <form method="post" action="{{url('la-admin/category/change-status/'.$two->id.'?status='.$two->status)}}">

                                <input type="submit" value="YES" class="btn btn-xs btn-success"> 
                                {{ csrf_field() }}
                                </form>
                                @endif
                                </td>
                                <td bgcolor="#bcbcbc"><a href="{{url('la-admin/category/'.$two->id)}}" class="btn btn-xs btn-warning">EDIT</a></td>
                                <td bgcolor="#bcbcbc"><form method="post" action="{{url('la-admin/category/'.$two->id)}}">
                                <button class="btn btn-xs btn-danger" data-toggle="confirmation" data-original-title="Are you sure ?" title="">DELETE</button>
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                </form></td>
                              </tr>

                                        <?php 
                                        $three = DB::table('categories')->where('menu_levels', $two->id)
                                                                         ->where('user_levels', '2')
                                                                         ->get();
                                        ?>
                                        @foreach($three as $third)
                                        <tr>
                                          <td>{{$third->id}}</td>
                                          <td><img src="{{url($third->photo)}}" height="25"></td>
                                          <td bgcolor="#e9e9e9">{{$third->name}}</td>
                                          <td bgcolor="#e9e9e9">{{$third->row_order}}</td>
                                          <td bgcolor="#e9e9e9">

                                          @if($third->status=="0")
                                          <form method="post" action="{{url('la-admin/category/change-status/'.$third->id.'?status='.$third->status)}}">
                                          <input type="submit" value="NO" class="btn btn-xs btn-danger"> 
                                          {{ csrf_field() }}
                                          </form>
                                          @else
                                          <form method="post" action="{{url('la-admin/category/change-status/'.$third->id.'?status='.$third->status)}}">

                                          <input type="submit" value="YES" class="btn btn-xs btn-success"> 
                                          {{ csrf_field() }}
                                          </form>
                                          @endif
                                          </td>
                                          <td bgcolor="#e9e9e9"><a href="{{url('la-admin/category/'.$third->id)}}" class="btn btn-xs btn-warning">EDIT</a></td>
                                          <td bgcolor="#e9e9e9"><form method="post" action="{{url('la-admin/category/'.$third->id)}}">
                                          <button class="btn btn-xs btn-danger" data-toggle="confirmation" data-original-title="Are you sure ?" title="">DELETE</button>
                                          {{ csrf_field() }}
                                          {{ method_field('DELETE') }}
                                          </form></td>
                                        </tr>
                                        @endforeach          
                              @endforeach          
                      @endforeach

                          <tr>
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











