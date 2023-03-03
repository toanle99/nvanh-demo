@extends('layouts.app-master')

@section('content')
<style>
    .comment-text {
        background: #fff;
        border-radius: 10px;
        padding: 5px;
    }
    .pointer {
        cursor: pointer;
        background: aliceblue;
        border-radius: 7px;
    }
    .hidden {
        display: none;
    }
    .liked {
        color: blue;
    }
    .hotTag {
        position: absolute;
        top: 0.75rem;
        right: 0.375rem;
        width: 1.5rem;
        height: 0.9375rem;
        line-height: 0.9375rem;
        text-align: center;
        background: #f12c20;
        border-radius: 0.3125rem;
    }
    .hot_lottery {
        margin: 0;
        padding: 0;
    }
    .weui-grids {
        position: relative;
        overflow: hidden;
    }
    .weui-grid { 
        display: flex;
        padding: 0.5rem 0 0.25rem 0;
        text-align: center;
        background-color: white;
        color: #000;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        margin-top: 0.0625rem;
    }
    .hot_lottery a {
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        padding: 0.5rem 0 0.25rem 0;
        text-align: center;
        background-color: white;
        color: #000;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        margin-top: 0.0625rem; 
    }
    .head { 
        display: flex;
        -webkit-box-align: center; 
        align-items: center;
        height: 2.5625rem;
        line-height: 0.75rem; 
        border-bottom: solid 0.04375rem #F8F8F8;
    }
    .head > span {
        background-color: white;
        font-size: 0.8125rem;
        display: block;
        color: #333;
        font-weight: 600; 
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        flex: 1;
        text-align: center;
        height: 100%;
        line-height: 2.5625rem;
        vertical-align: middle;
    }
    .head span img {
        width: 0.9375rem;
        height: 0.9375rem;
        margin-right: 0.1875rem;
        margin-bottom: 0.125rem;
        vertical-align: middle;
    } 
    .hot_lottery a span {
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .hot_lottery a {
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        padding: 0.5rem 0 0.25rem 0;
        text-align: center;
        background-color: white;
        color: #000;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        margin-top: 0.0625rem;
        /* position: relative; */
    }
    .weui-grid {
        position: relative;
        float: left;
        padding: 20px 10px;
        width: 33.33333333%;
        box-sizing: border-box;
    }
    .hot_lottery a {
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        padding: 0.5rem 0 0.25rem 0;
        text-align: center;
        background-color: white;
        color: #000;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -webkit-align-items: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        margin-top: 0.0625rem;
        /* position: relative; */
    }
    .hot_lottery a span img {
        width: 2.8125rem;
        height: 2.8125rem;
        border-radius: 50%;
    }
    .hot_lottery a .hotTag {
        background: none !important;
    }

    .hot_lottery a span .lottery_name {
        font-size: 0.875rem;
        margin: 0.1875rem 0;
        color: #333;
    } 
    .hot_lottery a .hotTag img {
        width: 1rem;
        height: 1.0625rem;
        border-radius: 0;
    }
    .hot_lottery .head .redbor {
        display: inline-block;
        height: 100%;
        border-bottom: solid #ff0000 0.03125rem;
        color: #E80101;
    }
</style>
<div class="container pb-4 mb-4">
    <div class="">
        <div class="hot_lottery" style="padding-bottom: 0px;">
            <div class="head">
                <span>
                    <img src="{{URL::asset('/image/btn_hot.f8f5255.png')}}" alt=""> 
                    <span class="redbor">Nhiệm vụ hấp dẫn</span>
                </span> 
            </div> 
            <div class="weui-grids">
                <a href="{{url('event')}}" class="weui-grid"> 
                    <span class="grid-center" style="min-height: 125px;">
                        <img src="{{URL::asset('/image/384b6b3d469fbd6b8e204e39877aab0d.png')}}" alt=""> 
                        <p class="lottery_name">Nhiệm vụ ngày</p>
                    </span> 
                    <div class="hotTag tag">
                        <span>
                            <img src="data:image/gif;base64,R0lGODlheAB4AMQRAPjUAP1nAPujAPfqAPm8APjfAPf1AP4/APyHAP4kAPx4APqwAPnIAP1UAPuWAP8AAPb/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh+QQJFAARACwAAAAAeAB4AAAF/2AkjmRpnmiqrmzrvnAsz3Rt33iu73zv/8CgcEgsGo/IpHJpgzif0Kh0Sq1ar9hsFqbter/gcJQrLpvPXzJ6zW6r2/B4+iWv26/vu/6e3/vhfX+CZ4GDhmCFh4pbdIuOXomPklCRk5OVlo+YmYubnIeen4Ohon+kpXunqHyNq5etrpqwsZ2ztKC2t6O5BQC+v1gGv78DXgMEAgHKCgIMBlnCw9LT1L7FT4EBD9vcWADc3ALQCwfg5g8KBFff5+3u4ZS52ube5+JXDAnv5g0FVez7Am675yTbuXrmCFJBIPCcuikAG75TaJDeOntWGEo09zBKxI0Ysck7eDFhFY0gwf91fPIxJTyRLqbMA4cQnEIoDNwFIHCtALl2Ca49iUatwblqAIRCqEizpE0q5c4tmGIAJTgEXWZ2YxRTitZtNV9GWdBupRSr3JRa+fpAC9OtVlredBIVnAMsdblhzcLW7UiLcUNCKdDuGb5zCbT05dpCJsnAJqMIOLcX71G+j/H8bQr5aRS2DLQ4ELw2s5W3YJ2KfaLPnGEsOc0pwAxYc9fPLtvNRdyFsLkAtDnbbuw1N2kIvsEB78Iby2IsqI3fbLlcS7vgcIezcGzcM8tz1bNcd266SvTc08F7GX/lufYV3JUrm09fmdHITwaoZ27uAPbU0G2WHRVyScFeWNuEV4X/e6cJCOA/x0GQ1zb+ZEGWOZWVVluDt0HBIEQRKuCQFmg9MBV5G5rnYFuqDSTFheDMlkVr4FTYXnlURIfgA3Ppd45aUxBwjn//sRhgh098KEWBxf12hQE0rqahcBwSh1uKS0YIgZBSWSHij4rhOIWOLfJIxX34QWHAl+bcFSaWY66441xOJNcfT3UKECU3B7yGIpUqIumEkh5p6QSMudlYpF+CQkAoFEwuZJxZfw4YqJUeigmpoU9MBlICoX3x6BhylkmnRxO+EwCQizK2XZOAZpmmFQSg2Y4CAJQxajyN9iJNMNOwWsUxAiigDALN+BmGr8MwiqkuhqgC7RrSTktInC7W6lFttmJsyy0i2H4rh7fidkFuua7Ch6624a5LbbvuXttovO/OS6+8z95bb7764vtqv2ycCzBM/A4chsAGIzywwgB7wsTDMaQL8cQoHEnxxRVXifHGJGjM8ceXfixyjiKXLEKcJpcsRcopk8qyygS/DHJBMptMc80q46zzzjz37PPPQAct9NBEF2300UgnrfTSTDft9NNQR11zCAAh+QQFFAARACwAAAAAeAB4AAAF/2AkjmRpnmiqrmzrvnAsz3Rt33iu73zv/8CgcEgsGo/IpHLJbDqfUCBkSq1ar9isdsvter2wr3hMLput4bN6zSan2/C4/C2v292vu37PpfP/fH6Ag3WChIdshoiLZYqMj2B5kJNjjpSXVZaYmJqblJ2ekKChjKOkiKanhKmqgKytgZKwnLKzn7W2ori5pbu8qL4FAMPEXQbExANjAwQCAc8KAgwGXsfI19jZw8pUhgEP4OFdAOHhAtULB+XrDwoEXOTs8vPmmb7f6+Ps51wMCfTrGhTQEg+gQXD8pnhjp29dwiwIDrJ7h6WgRHoPF+aDt29LxIvrKFqxCLJjt3sMOf861PKxZDmRVEi6rHfSBRZ85RqWe1iFwbwABLgVSCcvATcq1rI1YKcNwFEIGnOq3JlFHbsFWAy0LIdADE5xkWxe+QpOJ00rC+TBvLI13NMtZB98iQp2i0yeU6yWc9BFb7iuXuLORbnRrskqBeRR68cuwRfBYVvcTGl4pRUB7AD3ZRqYch/CUitTtRKXwRcHh+F63kK37NSzVP6tW9zF5zoFnQt/Fkt6pjy8jcUkXhcgd+jdksf6Tg1heLniYoJ3gdyl9XKeMqF/kWe8LnIWk5ePjslOuxfu01drse4be/kx6LlQ/74i/PNn+PM/W2qZyoD30a1zQHeuVQead1ncdUX/fGaBY54W87F2YIEEMQeBX+AM5EVa62immm4S8lZFhBVZqMBEX7T1AFbpgbjehHK9htAVHJaDmxeylaOhfOplYV2DD+D1HztvYUEAOwMSGKOBIlJB4hUKKkccFwbkCNuHx4WYXG8uQmkhBEdetcWJRD7WIxY/yhhkFvz1V4UBZK7Dl5ldogkjkHhN4ZyAQekpgJXhHEBbi1m+2OQUT4705RQ1+rajkoMdCkGiVUQJ0XJrEYqgoVuOeGali1KBWUkJmEYGpWjcqWaeI2FITwBFQhoZeFIW6qWbWxDQpjwKAKAGqvZIKsw1xmATqxbMCKDAMwhIM6gZwyITaae/LPJKmrVwXIttIr5s+4e23p4BbriNdEvuHeOeK0a66s5aX7vfmgtvtvLOy62k9tKLb773Usuvvv7+2y+tAsfBbsE1BYywGQcv3DDCDxc8ShQUn+BuxRQzifHG9G2cMaceYwxyyBX7SHLIdp7s8RUqk5xqyysnDLPICs2MMlQ2o5zzzjz37PPPQAct9NBEF2300UgnrfTSTDft9NMehwAAOw==">
                        </span>
                    </div> 
                </a>
                <a href="{{url('event')}}" class="weui-grid"> 
                    <span class="grid-center" style="min-height: 125px;">
                        <img src="{{URL::asset('/image/49cab372721119fcaeb0ae6ce9d8dcdc.png')}}" alt=""> 
                        <p class="lottery_name">Nhiệm vụ tài lộc</p>
                    </span> 
                    <div class="hotTag tag">
                        <span>
                        <img src="data:image/gif;base64,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">
                    </span>
                    </div> 
                </a>
                <a href="{{url('event')}}" class="weui-grid"> 
                    <span class="grid-center" style="min-height: 125px;">
                        <img src="{{URL::asset('/image/7bc67476593bbfed558476586bdf03c8.png')}}" alt=""> 
                        <p class="lottery_name">Nhiệm vụ đặc biệt</p>
                    </span> 
                    <div class="hotTag tag">
                        <span>
                            <img src="data:image/gif;base64,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">
                        </span>
                    </div>  
                </a> 
            </div>
        </div> 
    </div>
</div> 
@endsection 
