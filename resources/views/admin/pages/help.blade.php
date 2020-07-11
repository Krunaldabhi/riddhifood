@extends('admin.layouts.app')
@section('content')
<div class="card" >
 <div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <div class="card-header" >
            <h3>Help</h3>
            </div>
            <div class="card-body collapse in" >
            <div className="row">
                <form action="{{ route('admin.pages.update') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="page" value="about">

                    <div class="row">
                        <div class="col-xs-12">
                            <textarea name="content" id="myeditor">{{ Setting::get('about') }}</textarea>
                        </div>
                    </div>

                    <br>

            <div class="col-xs-12 mb-2">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                    </a>
                     <button type="button" onclick="return usercreate();"  class="btn btn-primary">
                        <i class="fa fa-check-square-o"></i> Update
                    </button>
                </div>

                </form>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('scripts')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('myeditor');
</script>
@endsection