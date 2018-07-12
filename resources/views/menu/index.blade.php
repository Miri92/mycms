@extends('mycms::master')

@section('content')
    {{--{{ dd(config('mycms.crud')) }}--}}

    <div class="page-content">
        <div class="page-header">
            <h1>
                Menus
            </h1>
        </div><!-- /.page-header -->

        {{--{{$errors}}--}}
        @if (isset($errors) && count($errors) > 0)
            <div class="clearfix">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        {{--errors end--}}

        <div class="row">

            <div class="col-xs-4">
                <form method="post" action="{{route('menus.create')}}">

                    {{--title--}}
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name" value="name">
                    </div>

                    <div class="form-group">
                        <input type="text" name="url" class="form-control" placeholder="Slug" value="slug">
                    </div>

                    <div class="form-group">
                        <input type="text" name="parent_id" class="form-control" placeholder="Parent" value="">
                    </div>


                    <div class="form-group">
                        <button class="btn btn-primary">Ok</button>
                    </div>
                </form>
            </div>
            <div class="col-xs-8">


                    <div class="dd" id="nestable">
                        @include('mycms::menu.menutree',['class'=>'dd-list'])
                        <div>
                            <buttun id="saveMenu" class="btn btn-primary pull-right">Save </buttun>
                        </div>
                    </div>


            </div> {{--col-xs-8--}}

            <div class="col-xs-12" style="display:none">
                <div class="row output-container">
                    <div class="col-md-offset-1 col-md-10">
                        <h2 class="text-center">Output:</h2>
                        <form class="form">
                            <textarea class="form-control" id="json-output" rows="5"></textarea>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">id</label>
                        <input type="text" class="form-control" id="edit_id">
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="edit_name">
                    </div>
                    <div class="form-group">
                        <label for="">ikom</label>
                        <input type="text" class="form-control" id="edit_icon">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="modal_edit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    @push('script-links')
        <script src="{{asset('ace/js/jquery.nestable.min.js')}}"></script>

    @endpush

    @push('scripts')
        <script type="text/javascript">
            var route = "{{route('menu_update')}}";
            jQuery(function($){

                //console.log($('.dd').nestable('serialize'));

                $('[data-rel="tooltip"]').tooltip();


                //send route param for ajax


            });


        </script>

        <script src="{{asset('mycms/js/custom-nestable.js')}}"></script>
    @endpush

@endsection