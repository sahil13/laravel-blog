@extends('layouts.app');
@section('main')
             <div class="content">
                <h1 class="text-center">
                    Cars
                </h1>
                @foreach($markets as $market)
                <a href="description">
                <div class="cars">
                <div>
                <img src="{{ asset('images') }}/{{$market -> product_img}}" alt="Maruti 800" /></div>
                  <div>  {{ $market -> product_name}}</div>
                  </div>
                  </a>
                @endforeach
            </div>
    
  