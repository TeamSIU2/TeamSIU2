<!-- BEGIN: main -->
{FILE "header_only.tpl"}
{FILE "header_extended.tpl"}
<div class="row">
	[HEADER]
</div>

<div class="row">
    <div class="col-sm-12 col-md-13 col-sm-push-6 col-md-push-5">
		[NEWS]
    </div>
    <div class="col-sm-6 col-md-6 col-sm-push-6 col-md-push-5">
		[TOPHITS]
    </div>
	<div class="col-sm-6 col-md-5 col-sm-pull-18 col-md-pull-19">
		[ABOUT]
	</div>
</div>
<div class="row">
    <div class="col-sm-24 col-md-24">
		[INTRO]
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-6">
		[LAWS]
    </div>
	<div class="col-sm-18 col-md-18">
        {MODULE_CONTENT}
	</div>
</div>
<div class="row">
    <div class="col-sm-5 col-md-5">
		[STATISTICS]
    </div>
	<div class="col-sm-13 col-md-13">
        [BOTTOM_ADS]
	</div>
	<div class="col-sm-6 col-md-6">
        [VOTING]
	</div>
</div>
<div class="row">
	[FOOTER]
</div>
{FILE "footer_extended.tpl"}
{FILE "footer_only.tpl"}
<!-- END: main -->