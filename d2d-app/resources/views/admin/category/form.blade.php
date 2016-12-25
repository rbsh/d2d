<div class="col-md-12">
  <div class="portlet box blue">
    <div class="portlet-title">
      <div class="caption">
      <i class="fa fa-gift"></i>Add Categories </div>
      <div class="tools">
        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
      </div>
    </div>
    <div class="portlet-body form">
      <!-- BEGIN FORM-->
      <form action="#">
        <div class="form-actions top">
          <div class="btn-set pull-right">
            <button type="submit" name="submit" class="btn btn-primary mt-ladda-btn ladda-button" data-style="expand-right" value="red"><span class="ladda-label">Submit</span>
                                                    <span class="ladda-spinner"></span></button>
            <button type="button" class="btn default" value="red">Cancel</button>
          </div>
{{--           <div class="btn-set pull-right">
            <button type="button" class="btn default">Action 1</button>
            <button type="button" class="btn red">Action 2</button>
            <button type="button" class="btn yellow">Action 3</button>
          </div>
 --}}        </div>


        <div class="form-body">
          
          <?php 
          $catList = DB::table('categories')->get(); 
          ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Select Categories</label>
            <select class="form-control" name="menu_levels">
              <?php $first = DB::table('categories')->where('menu_levels','0')->get(); ?>
              <option value="0">Create First level categories (Level)</option>
                @foreach($first as $one)
                  <option value="{{$one->id}}">01 - {{$one->name}}</option>
                  
                  <?php $second = DB::table('categories')->where('menu_levels',$one->id)->where('user_levels','1')->get(); ?>
                  @foreach($second as $two)
                  <option value="{{$two->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;02 - {{$two->name}}</option>
                  
                  <?php $third = DB::table('categories')->where('menu_levels',$two->id)->where('user_levels','2')->get(); ?>
                  @foreach($third as $three)
                  <option value="{{$three->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;03- {{$three->name}}</option>
                  @endforeach
                  @endforeach
                @endforeach
            </select>
          </div>

          
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" value="{{$cat->name or ''}}" name="name" required="" class="form-control" placeholder="Enter Text 01">
          </div>
          @if(isset($cat->status)!="")
          <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status" required="">
              <option value="1" @if($cat->status=="1") selected @endif>Yes</option>
              <option value="0" @if($cat->status=="0") selected @endif>No</option>
            </select>
          </div>
          @else
          <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status" required="">
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
          </div>
          @endif
          
          <div class="form-group">
            <label for="exampleInputEmail1">Order</label>
            <input type="number" value="{{$cat->row_order or ''}}" name="row_order" class="form-control"  placeholder="Row Order">
          </div>
          <div class="btn btn-default btn-file">
            <i class="fa fa-picture-o"></i> Upload Slider Image
            <input type="file" name="photo">
          </div>

                </div>
              </form>
              <!-- END FORM-->
            </div>
          </div>
        </div>
<div style="margin-bottom: 20px"></div>
        <br><br>
<br>
        
