@extends('mycms::master')

@section('content')
    {{--{{ dd(config('mycms.crud')) }}--}}

    <div class="page-content">
        <div class="page-header">
            <h1>
                Add New Post
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

        <form class="row" method="post" action="">




            <div class="col-xs-8">
                {{--title--}}
                <div class="form-group">
                    <input type="text"  name="title" class="form-control" placeholder="Title here" value="">
                </div>

                <h3 class="">Additional Fields</h3>
                @php
                    //$dataTypeRows = $dataType->{(isset($dataTypeContent->id) ? 'editRows' : 'addRows' )};
                    $exclude = ['title', 'body', 'excerpt', 'slug', 'status', 'category_id', 'author_id', 'featured_image', 'meta_description', 'meta_keywords', 'seo_title'];
                @endphp
                @foreach(config('mycms.crud.posts.fields') as $field)
                    @if(!in_array($field['name'], $exclude))
                    <div class="form-group">
                        {{--{{$field['name']}}--}}
                        @include('mycms::formfields.'.$field['type'], compact('field'))
                    </div>
                    @endif
                    {{--{{dd($field)}}--}}
                @endforeach

                <div class="form-group">
                    <button class="btn btn-primary">Ok</button>
                </div>
            </div>
        </form>
    </div>

@endsection