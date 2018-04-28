@extends('layout')

@section('content')

<!-- ジャンボトロン -->
<div class="jumbotron row-space-0" style="margin-top: -20px; background: none;">

  <!-- カルーセル -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- リストの点 -->
     @if( count($photos) > 1)
      <ol class="carousel-indicators">
        @foreach($photos as $photo)
          <li data-target="#myCarousel" data-slide-to="{{$photo->id }}"></li>
        @endforeach
      </ol>
    @endif

    <div class="carousel-inner" role="listbox">
      @if(@photos)
        @foreach($photos as $num => $photo)
          @if($photo->id == $photos[0]->id)
            <div class='item active listinge-picture'>
              {{ Html::image("images/{$photo->image}",'a picture') }}
            </div>
          @else
            <div class='item listinge-picture'>
              {{ Html::image("images/{$photo->image}",'a picture') }}
            </div>
          @endif
        @endforeach
      @endif

    </div>

    <!-- 左右の矢印 -->
    @if( count($photos) > 1)
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    @endif
  </div>

</div>

<!-- サマリー -->
<div class="container-fluid container-listing-show">
    <div class="container">
        <div class="listing-summary row-space-3 row-space-top-3">
            <div class="row">
                <div class="col-md-3 text-center row-space-2">
                    <a href="/users/{{ $listing->user->id }}">
                      {{ Html::image("images/{$listing->user->avatar}",'a picture', array('class' => "img-circle profile-2")) }}
                    </a>
                    <h5>{{ $listing->user->name }}</h5>
                </div>
                <div class="col-md-6">
                    <div class="listing-title" style="font-size:24px;">
                        {{ $listing->listing_title }}
                    </div>
                    <div class="row row-space-top-4">
                        <div class="col-sm-3 col-xs-3 text-center">
                            <i class="fa fa-home fa-3x"></i>
                            <h5>{{ $listing->home_type }}</h5>
                        </div>
                        <div class="col-sm-3 col-xs-3 text-center">
                            <i class="fa fa-linux fa-3x" aria-hidden="true"></i>
                            <h5>{{ $listing->pet_type }}</h5>
                        </div>
                        <div class="col-sm-3 col-xs-3 text-center">
                            <i class="fa fa-bug fa-3x" aria-hidden="true"></i>
                            <h5>{{ $listing->pet_size }}</h5>
                        </div>
                        <div class="col-sm-3 col-xs-3 text-center">
                            <i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
                            <h5>{{ $listing->breeding_years }}年</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-default panel-show">
                        <div class="panel-heading">
                                <span style="font-size:16px;">{{ $listing->price_pernight}}円（一晩あたり）</span>
                        </div>

                        <div class="panel-body panel-real">
                          {{ Form::open(['url' => '/listings', 'method' => 'post']) }}
                                <div class="actions text-center">
                                  <input type="submit" value="この日程で予約する" class= "btn btn-danger btn-wide">
                                </div>
                          {{ Form::close() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- メインコンテント -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3 class="row-space-3">このリスティングについて</h3>
                <p>{{$listing->listing_content }}{{$listing->listing_content }} {{$listing->listing_content }} {{$listing->listing_content }} {{$listing->listing_content }}
                </p>
        </div>

        <div class="col-md-4">

        </div>
    </div>


    <!-- レビュー    -->
    <div class="row">
        <div class="col-md-8">
            <h3 class="row-space-3">このリスティングについて</h3>
            <p>{{ $listing->listing_content}}{{$listing->listing_content }} {{$listing->listing_content }} {{$listing->listing_content }} {{$listing->listing_content }} {{$listing->listing_content }}
            </p>
        </div>

        <div class="col-md-4">

        </div>
    </div>

</div>

@endsection