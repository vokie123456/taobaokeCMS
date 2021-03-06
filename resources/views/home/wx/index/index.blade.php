@extends('home.wx.layouts.index')
@section('head')
  <title>{{ $TDK['title'] }}</title>
  <meta name="keywords" content="{{ $TDK['keywords'] }}" />
  <meta name="description" content="{{ $TDK['description'] }}" />
@stop
@section('content')
  <!--底部选项卡-->
  @include('home.wx.layouts._foot_tab_index')

  <div class="mui-content" id="home-index">
		  <!--幻灯片轮播-->
	    @include('home.wx.index._banner')

	    <!--搜索-->
      @include('home.wx.layouts._search_input')

	    <!--栏目导航-->
      @if(count($categorys)>0)
	       @include('home.wx.index._category')
      @endif

	    <!--品牌券-->
	    @include('home.wx.index._brand')

      <!-- 优惠券分类 -->
      @include('home.wx.index._coupon_category')

	    <!--魔方导航-->
	    <!-- include('home.wx.index._magic') -->

	    <!--文章展示-->
	    <!-- include('home.wx.index._artical') -->

	    <!--优惠券商品-->
	    @include('home.wx.index._coupon')

      <!--版权-->
      @include('home.wx.layouts._copy')
	</div>
@stop
