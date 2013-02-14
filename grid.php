<script type="text/javascript">$(document).ready(function(){$(".ag").click(function(){$(".layout, .grid").toggleClass("on");$(this).toggleClass("on"); return false;})})</script>

<style type="text/css">
.layout.on{visibility:hidden;}.layout{width:940px;height:100%;position:fixed;left:50%;top:0;margin:0 0 0 -470px;visibility:visible;}.grid.on{height:100%;left:0;position:absolute;top:0;width:100%;opacity:1;visbility:visible;}.grid .columns{background:none repeat scroll 0 0 rgba(0,0,0,0.3);float:left;height:1000%;position:relative;z-index:9999;}.grid{opacity:0;visbility:hidden;-webkit-transition:all .3s ease;-moz-transition:all .3s ease;-moz-transition:all .3s ease;-ms-transition:all .3s ease;-o-transition:all .3s ease;transition:all .3s ease;}.ag{content:"On";background-color:#3BB3E0;background-image:-moz-linear-gradient(center bottom,#2CA0CA 0,#3EB8E5 100%);border-radius:5px 5px 5px 5px;box-shadow:0 1px 0 #2AB7EC inset,0 5px 0 0 #156785,0 7px 4px #999;color:#FFF;font-family:'Open Sans',sans-serif;font-size:12px;padding:10px 0;width:50px;height:30px;position:fixed;text-decoration:none;z-index:10000;display:block;text-align:center;right:0;top:0;}.ag.on:after{content:"Grid";}.ag:after{content:"Hide";}.layout *,.ag{box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;}.grid .columns{width:40px;}.grid .columns.gutter{margin:0 20px 0 0;}

@media only screen and (min-width: 320px) { .layout {width:300px; margin-left:-150px;} .grid .columns { width: 300px; }}
@media only screen and (min-width: 768px) { .layout {width:768px; margin-left:-384px;} .grid .columns.gutter:nth-child(13){margin:0;} .grid .columns { width: 40px; }}
@media only screen and (min-width: 964px) { .layout {width:940px; margin-left:-470px;}.grid .columns.gutter:nth-child(13){margin-right:20px;}}.grid .columns.gutter:last-child{margin:0;}}

</style>
 
<a class="ag on" href="#"></a>
<div class="layout on">
  <div class="grid">
		<?php for($i=0;$i<16;$i++) { ?> 
			<div class="columns gutter">&nbsp;</div>
		<?php } ?>
	</div>
</div>
