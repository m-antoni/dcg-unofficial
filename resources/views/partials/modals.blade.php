{{-- MODAL CONTENT --}}
<!--iziModal for HOMEPAGE-->
<div id="triggerHome" data-iziModal-title="DC Group of Companies" 
        data-iziModal-subTitle="About" 
        data-iziModal-icon="icon-home"
        data-izimodal-transitionin="bounceInDown"
        data-izimodal-transitionout="bounceOutUp">
    <div class="modal-inside">
        <div class="container">
            <div class="row">
                <div id="homeModal" class="col-md-12 py-3">
    				<h4>DC Group of Companies </h4>
    				<p class="text-justify">
    						 is an international investment banking conglomerate headquartered in Singapore and, is primarily in the business of venture capital, mergers & acquisitions by means of internally generated private equity, assets & holdings.
    				</p>
    				<h4>What We Do</h4> 
    				<p class="text-justify">
    						The DC Group, with the mission of building lives by innovating and establishing its foothold in various industries and emerging markets, aids its clients, primarily, by providing efficient, effective and quality products, services and solutions to essential problems, matters and difficulties that affect lives, organizations and communities, as a whole, thru our diversified corporate members, subsidiaries and affiliate-holdings.
    				</p>		
                </div>
            </div>
        </div>
    </div>
</div><!--iziModal -->


{{-- AGRICULTURE  --}}
<div id="agri" data-iziModal-title="Agriculture" 
        data-iziModal-subTitle="Corporate Members, Subsidiaries & Affiliate - Holdings" 
        data-iziModal-icon="icon-home"
        data-izimodal-transitionin="bounceInDown"
        data-izimodal-transitionout="bounceOutUp">
    <div class="modal-inside">
        <div class="container py-3">
            <div class="row justify-content-center no-gutters">
                @for($a=1;$a<=4;$a++)
                    <div class="col-md-2">
                        <img class="img-thumbnail" src="/img/corporate/agri/{{$a}}.jpg" alt="{{$a}}_image">    
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div><!--iziModal -->

{{-- CORPORATE & LEGAL SERVICES  --}}
<div id="legal" data-iziModal-title="Corporate and Legal Services" 
        data-iziModal-subTitle="Corporate Members, Subsidiaries & Affiliate - Holdings" 
        data-iziModal-icon="icon-home"
        data-izimodal-transitionin="bounceInDown"
        data-izimodal-transitionout="bounceOutUp">
    <div class="modal-inside">
        <div class="container py-3">
            <div class="row justify-content-center no-gutters">
                @for($l=1;$l<=5;$l++)
                    <div class="col-md-2">
                        <img class="img-thumbnail" src="/img/corporate/legal/{{$l}}.jpg" alt="{{$l}}_image">    
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div><!--iziModal -->


{{-- FOODS  --}}
<div id="food" data-iziModal-title="Food and Beferage" 
        data-iziModal-subTitle="Corporate Members, Subsidiaries & Affiliate - Holdings" 
        data-iziModal-icon="icon-home"
        data-izimodal-transitionin="bounceInDown"
        data-izimodal-transitionout="bounceOutUp">
    <div class="modal-inside">
        <div class="container py-3">
            <div class="row justify-content-center no-gutters">
                @for($f=1;$f<=6;$f++)
                    <div class="col-md-2">
                        <img class="img-thumbnail" src="/img/corporate/foods/{{$f}}.jpg" alt="{{$f}}_image">  
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div><!--iziModal -->


{{-- LEISURE --}}
<div id="leisure" data-iziModal-title="Leisure and Hospitality" 
        data-iziModal-subTitle="Corporate Members, Subsidiaries & Affiliate - Holdings" 
        data-iziModal-icon="icon-home"
        data-izimodal-transitionin="bounceInDown"
        data-izimodal-transitionout="bounceOutUp">
    <div class="modal-inside">
        <div class="container py-3">
            <div class="row justify-content-center no-gutters">
                @for($l=1;$l<=5;$l++)
                    <div class="col-md-2">
                        <img class="img-thumbnail" src="/img/corporate/leisure/{{$l}}.jpg" alt="{{$l}}_image">  
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div><!--iziModal -->


{{-- HEALTHCARE --}}
<div id="health" data-iziModal-title="Health" 
        data-iziModal-subTitle="Corporate Members, Subsidiaries & Affiliate - Holdings" 
        data-iziModal-icon="icon-home"
        data-izimodal-transitionin="bounceInDown"
        data-izimodal-transitionout="bounceOutUp">
    <div class="modal-inside">
        <div class="container py-3">
            <div class="row justify-content-center no-gutters">
                @for($h=1;$h<=4;$h++)
                    <div class="col-md-2">
                        <img class="img-thumbnail" src="/img/corporate/health/{{$h}}.jpg" alt="{{$h}}_image">  
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div><!--iziModal -->


{{-- IT --}}
<div id="it" data-iziModal-title="Multimedia and Information Technology" 
        data-iziModal-subTitle="Corporate Members, Subsidiaries & Affiliate - Holdings" 
        data-iziModal-icon="icon-home"
        data-izimodal-transitionin="bounceInDown"
        data-izimodal-transitionout="bounceOutUp">
    <div class="modal-inside">
        <div class="container py-3">
            <div class="row justify-content-center no-gutters">
                @for($h=1;$h<=4;$h++)
                    <div class="col-md-2">
                        <img class="img-thumbnail" src="/img/corporate/it/{{$h}}.jpg" alt="{{$h}}_image">  
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div><!--iziModal -->


{{-- Print --}}
<div id="print" data-iziModal-title="Printing and Publishing" 
        data-iziModal-subTitle="Corporate Members, Subsidiaries & Affiliate - Holdings" 
        data-iziModal-icon="icon-home"
        data-izimodal-transitionin="bounceInDown"
        data-izimodal-transitionout="bounceOutUp">
    <div class="modal-inside">
        <div class="container py-3">
            <div class="row justify-content-center no-gutters">
                @for($p=1;$p<=3;$p++)
                    <div class="col-md-2">
                        <img class="img-thumbnail" src="/img/corporate/print/{{$p}}.jpg" alt="{{$p}}_image">  
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div><!--iziModal -->


{{-- Real Estate and Utilities --}}
<div id="real" data-iziModal-title="Real Estate and Utilities" 
        data-iziModal-subTitle="Corporate Members, Subsidiaries & Affiliate - Holdings" 
        data-iziModal-icon="icon-home"
        data-izimodal-transitionin="bounceInDown"
        data-izimodal-transitionout="bounceOutUp">
    <div class="modal-inside">
        <div class="container py-3">
            <div class="row justify-content-center no-gutters">
                @for($r=1;$r<=5;$r++)
                    <div class="col-md-2">
                        <img class="img-thumbnail" src="/img/corporate/real/{{$r}}.jpg" alt="{{$r}}_image">  
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div><!--iziModal -->


{{-- Trading and Distribution --}}
<div id="trading" data-iziModal-title="Trading and Distribution" 
        data-iziModal-subTitle="Corporate Members, Subsidiaries & Affiliate - Holdings" 
        data-iziModal-icon="icon-home"
        data-izimodal-transitionin="bounceInDown"
        data-izimodal-transitionout="bounceOutUp">
    <div class="modal-inside">
        <div class="container py-3">
            <div class="row justify-content-center no-gutters">
                @for($t=1;$t<=5;$t++)
                    <div class="col-md-2">
                        <img class="img-thumbnail" src="/img/corporate/trading/{{$t}}.jpg" alt="{{$t}}_image">  
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div><!--iziModal -->

{{-- Venture Capital --}}
<div id="venture" data-iziModal-title="Trading and Distribution" 
        data-iziModal-subTitle="Corporate Members, Subsidiaries & Affiliate - Holdings" 
        data-iziModal-icon="icon-home"
        data-izimodal-transitionin="bounceInDown"
        data-izimodal-transitionout="bounceOutUp">
    <div class="modal-inside">
        <div class="container py-3">
            <div class="row justify-content-center no-gutters">
                @for($v=1;$v<=3;$v++)
                    <div class="col-md-2">
                        <img class="img-thumbnail" src="/img/corporate/venture/{{$v}}.jpg" alt="{{$v}}_image">  
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div><!--iziModal -->