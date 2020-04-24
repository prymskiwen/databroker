@extends('layouts.admin')

@section('additional_css')
    <link rel="stylesheet" href="{{ asset('adminpanel/assets/vendors/custom/datatables/datatables.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
@endsection

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator"><b style="color: #9102f7;">{{ $communityName }}</b> Use Cases List</h3>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="{{ route('admin.usecases.add_new', [ 'id' => $communityIdx ]) }}" class="btn btn-focus m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
                                    <span>
                                        <i class="la la-cart-plus"></i>
                                        <span>New Article</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <table class="table table-striped- table-bordered table-hover table-checkable" id="board_table">
                    <thead>
                        <tr>
                            <th>Thumbnails</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Reg.Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($boards as $board)                      
                            <tr>
                                <td>
                                    @if(file_exists(public_path("uploads/usecases/tiny/".$board->articleIdx.".jpg"))) 
                                        {{ asset("uploads/usecases/tiny/".$board->articleIdx.".jpg") }}
                                    @else 
                                        {{ asset("uploads/usecases/default.png") }}
                                    @endif
                                </td>
                                <td>{{ $board->articleTitle }}</td>
                                <td>{{ $board->community->communityName }}</td>
                                <td>{{ $board->published? date('d/m/Y', strtotime($board->published)): ""}}</td>
                                <td>{{ $board->articleIdx }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <input type="file" id="upload_attach" accept=".gif,.jpg,.jpeg,.png" style="display: none;">
        <input type="hidden" name="communityIdx" value="{{$communityIdx}}">
    </div>
</div>

@endsection

@section('additional_javascript')
    <script src="{{ asset('adminpanel/assets/vendors/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert.min.js') }}"></script>
    <script src="{{ asset('adminpanel/js/usecases.js') }}"></script>            
@endsection

