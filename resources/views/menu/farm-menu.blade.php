<ul id="sidebarnav">
	<li class="nav-devider"></li>
	<li class="nav-label">Home</li>
<?php
$farms_user = explode(',', auth()->user()->status);
?>
@foreach($items as $menu_item)
	@if(auth()->user()->role_id == 1 || in_array($menu_item->parameters->farm, $farms_user))
	<li><a href="{{ $menu_item->link() }}"><i class="fa fa-bar-chart"></i>{{ $menu_item->title }}</a></li>
	@endif
@endforeach
</ul>