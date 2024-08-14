@extends('template')

@section('title', '| Detail')

@section('content')
<div>
    <div class="nav-clone"></div>
    <div class="detail" style="background-image: url({{$tourist->image}}); background-size: cover; background-position: center center"></div>
    <div class="container">
        <div class="fw-bold fs-1 py-2">
            {{$tourist->name}}
        </div>
        <p class="detail-desc">
            {{$tourist->description}}
        </p>
        <div class="bg-light text-dark rounded p-2 mb-4 mt-5">
            <div class="d-flex justify-content-between align-items-center" id="title-label">
                <div class="fw-bold fs-4 d-flex align-items-center"><span class="bg-success rounded-circle me-2" style="display:inline-block; width:20px; height:20px;"></span>Lokasi</div>
                <div class="dropdown-toggle"></div>
            </div>
            
            <div class="temp-value-label" id="value-label">
                {{$tourist->description}}
            </div>
        </div>
        <div class="bg-light text-dark rounded p-2 mb-4"  id="title-label-2">
            <div class="d-flex justify-content-between align-items-center" id="title-label">
                <div class="fw-bold fs-4 d-flex align-items-center"><span class="bg-success rounded-circle me-2" style="display:inline-block; width:20px; height:20px;"></span>Harga Tiket</div>
                <div class="dropdown-toggle"></div>
            </div>
            <div class="temp-value-label" id="value-label-2">
                {{$tourist->price_estimate}}
            </div>
        </div>
        <div class="bg-light text-dark rounded p-2 mb-4" id="title-label-3">
            <div class="d-flex justify-content-between align-items-center" id="title-label">
                <div class="fw-bold fs-4 d-flex align-items-center"><span class="bg-success rounded-circle me-2" style="display:inline-block; width:20px; height:20px;"></span>Waktu Operasional</div>
                <div class="dropdown-toggle"></div>
            </div>
            <div class="temp-value-label" id="value-label-3">
                {{$tourist->time}} (WIB)
            </div>
        </div>
    </div>

    {{-- Review --}}
    <div class="container my-5">
        <div class="fs-1 fw-bold custom-txt mb-3">Review</div>
        {{-- Tempat looping review --}}
        <div class="ctr-rev">
            <div class="frontend-view pe-3">
                @if (!$post)
                    <div>
                        No data
                    </div>
                @else
                    @foreach ($post as $data)
                        <div class="bor-btm ps-1 mb-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="w-50 d-flex">
                                    <div class="rounded rounded" style="width: 70px; height: 70px; background-image: url({{asset('storage/avatars/' . $data->post_belongsTo_user->image)}}); background-size: cover; background-position: center center"></div>
                                    <div class="ps-3 d-flex flex-column justify-content-center">
                                        <div class="fw-bold custom-txt fs-4">{{$data->post_belongsTo_user->name}}</div>
                                        <div class="date">{{$data->time}}</div>
                                    </div>
                                </div>
                                @if(Auth::user()->id == $data->user_id)
                                    <div class=" me-3">
                                        <form action="{{route('post_delete_logic', ['id' => $data->id])}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="custom-bg text-light fw-bold p-1 rounded border-0" type="submit">Hapus</button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                            <div class="ps-3 py-3" style="margin-left: 70px">
                                <div class="d-flex justify-content-between me-3">
                                    <div>
                                        {{$data->review}}
                                    </div>
                                    @if(Auth::user()->id == $data->user_id)
                                        <div class="rounded text-center btn-edit-2" id="btn-edit-comment">
                                            &#9998;
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    @if(Auth::user()->id == $data->user_id)
                                        <form id="btn-form-edit-comment" action="{{route('post_edit_logic')}}" class="temp-value-label position-relative mt-2" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('patch')
                                            <div class="d-flex justify-content-between me-3">
                                                <input type="text" style="visibility: hidden; display: none" name="id" value="{{$data->id}}">
                                                <input type="text" class="edit" name="review" placeholder="ubah review Anda" id="review">
                                                <button type="submit" class="btn-edit">Ubah</button>
                                            </div>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            {{-- input review --}}
            <form action="{{route('insert_review')}}" class="d-flex gap-3 pt-3" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="user_id" style="visibility: hidden; display: none" value="{{Auth::user()->id}}">
                <input type="text" name="tourist_attraction_id" style="visibility: hidden; display: none" value="{{$tourist->id}}">
                <input class="comment-view" type="text" name="review" placeholder="Masukkan review Anda">
                <button class="send-review" type="submit">&#10146;</button>
            </form>
        </div>
    </div>
</div>

<!-- 
1 User has many Post

1 Post belongsTo User

TouristAttraction
 -->
@endsection