@extends('layouts.app-header-no-footer')

@section('content')
<style>
.creditIndex .creditWrap .item {
    margin: 0.3125rem 0.375rem;
    border: 0.0625rem solid #e6e6e6;
    border-bottom-left-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
    background: #fff;
}
.creditIndex .creditWrap .item .itemName {
    font-size: 0.875rem;
    margin-right: 0;
    color: #5c5c5c;
    font-weight: bold;
    height: 1.625rem;
    line-height: 1.625rem;
    text-align: center;
    border-bottom: 0.0625rem solid #e6e6e6;
    background: #f7f7f7;
}
.creditIndex .creditWrap .item .itemContent {
    padding: 0.3125rem;
}
.vux-flex-row {
    box-direction: row;
    box-orient: horizontal;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    flex-direction: row;
}
 
.vux-flexbox {
    width: 100%;
    text-align: left;
    display: -webkit-box;
    display: flex;
    display: -webkit-flex;
    box-align: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
}
.creditIndex .creditWrap .item .itemContent .vux-flexbox .vux-flexbox-item {
    padding: 0 0.25rem;
    box-sizing: border-box;
    margin-bottom: 0.4375rem;
}
 
.vux-flexbox .vux-flexbox-item:first-child {
    margin-left: 0!important;
    margin-top: 0!important;
} 
.vux-flexbox .vux-flexbox-item {
    -webkit-box-flex: 1;
    flex: 1;
    -webkit-flex: 1;
    min-width: 1.25rem;
    width: 0%;
}
.creditIndex .creditWrap .item .itemContent .vux-flexbox .vux-flexbox-item .itemBall {
    border: 0.0625rem solid #e6e6e6;
    background: #fff;
    text-align: center;
    border-radius: 0.25rem;
    padding: 0.25rem 0;
}
.creditIndex .creditWrap .item .itemContent .vux-flexbox .vux-flexbox-item .itemBall .number {
    font-size: 0.8125rem;
    font-weight: bold;
    color: #d91d37;
}
.creditIndex .creditWrap .item .itemContent .vux-flexbox .vux-flexbox-item.select .itemBall {
    border: 0.0625rem solid #d91d37;
    background: #d91d37;
}
.creditIndex .creditWrap .item .itemContent .vux-flexbox .vux-flexbox-item.select .itemBall .number, .creditIndex .creditWrap .item .itemContent .vux-flexbox .vux-flexbox-item.select .itemBall .odds {
    color: #fff;
}
p {
    margin-top: 0;
    margin-bottom: 0;
}
/* // */

.ks .lotteryNumber > div, .more .lotteryNumber > div {
    display: inline-block;
    width: 1.5625rem;
    height: 1.5625rem;
    margin-left: 0.3125rem;
    background-repeat: no-repeat;
    background-size: 3.125rem 9.375rem;
    background-position-x: 0;
}
.ks .lotteryNumber > div.one, .more .lotteryNumber > div.one {
    background-position-y: 0;
}
.ks .lotteryNumber > div.two, .more .lotteryNumber > div.two {
    background-position-y: -1.5625rem;
} 
.ks .lotteryNumber > div.three, .more .lotteryNumber > div.three {
    background-position-y: -3.125rem;
}
.ks .lotteryNumber > div.four, .more .lotteryNumber > div.four {
    background-position-y: -4.6875rem;
}
.ks .lotteryNumber > div.five, .more .lotteryNumber > div.five {
    background-position-y: -6.25rem;
}
.ks .lotteryNumber > div.six, .more .lotteryNumber > div.six {
    background-position-y: -7.8125rem;
}
.ks .lotteryNumber.noOpen div, .more .lotteryNumber.noOpen div {
    background-position-x: -1.5625rem;
    -webkit-animation: roling-data-v-377da92b 0.2s steps(1, start) infinite;
    animation: roling-data-v-377da92b 0.2s steps(1, start) infinite;
}
.ks .lotteryNumber.noOpen div,
.more .lotteryNumber.noOpen div {
  background-position-x: -1.5625rem;
  -webkit-animation: roling-data-v-377da92b 0.2s steps(1, start) infinite;
          animation: roling-data-v-377da92b 0.2s steps(1, start) infinite;
}
@-webkit-keyframes roling-data-v-377da92b {
    0% {
        background-position-y: 0;
    }
    33% {
        background-position-y: -1.5625rem;
    }
    66% {
        background-position-y: -3.125rem;
    }
    100% {
        background-position-y: -4.6875rem;
    }
}
@keyframes roling-data-v-377da92b {
    0% {
        background-position-y: 0;
    }
    33% {
        background-position-y: -1.5625rem;
    }
    66% {
        background-position-y: -3.125rem;
    }
    100% {
        background-position-y: -4.6875rem;
    }
}
.lotteryMainTab {
    position: absolute;
    height: 2.5rem;
    box-sizing: border-box;
    top: 4.875rem;
    left: 0;
    z-index: 101;
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: space-around;
    justify-content: space-around;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    align-items: flex-end;
    font-size: 0.875rem;
    color: #fbb6b6;
}
.lotteryMainTab .left {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    flex: 1;
}
 
.lotteryMainTab .left, .lotteryMainTab .right {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: space-around;
    justify-content: space-around;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    align-items: flex-end;
}
.lotteryMainTab {
    background: #155ba6;
}
.lotteryMainTab .tabItem.active {
    border-bottom: 0.1875rem solid #fff;
    color: #fff;
}

.lotteryMainTab .tabItem {
    line-height: 2rem;
    height: 2rem;
    box-sizing: border-box;
}
.lotteryMainTab .tabItem {
    line-height: 2rem;
    height: 2rem;
    box-sizing: border-box;
}
.lotteryMsgBox {
    position: absolute;
    top: 5.375rem;
    left: 0;
    z-index: 100;
    width: 100%;
}
.lotteryMsg {
    position: relative;
    z-index: 3;
    background: #f7f7f7;
    width: 100%;
    height: 3.875rem;
    font-size: 0.8125rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    box-shadow: 0 0.0625rem 0.3125rem #dfdfdf;
}
.lotteryMsg .top {
    height: 3.875rem;
    width: 50%;
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-shrink: 0;
    flex-shrink: 0;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    box-sizing: border-box;
    text-align: center;
    border-right: 0.0625rem solid #e6e6e6;
}
.lotteryMsg .top .time .periods_time {
    color: #dc3b40;
    font-size: 1.375rem;
    line-height: 1.5625rem;
}
.lotteryMsg .openInfo {
    width: 100%;
    height: 3.875rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    font-size: 0.75rem;
    color: #333;
}
.lotteryMsg .openInfo .foot {
    text-align: center;
}
.lotteryMsgBox .more {
    position: absolute;
    left: 0;
    width: 100%;
    background: #fff;
    font-size: 0.8125rem;
    z-index: 2;
}
.lotteryMsgBox .more .thead {
    line-height: 1.875rem;
    border-bottom: 0.0625rem solid #e6e6e6;
    background: #ecebe6;
} 
.lotteryMsgBox .more .thead, .lotteryMsgBox .more .more_item {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    text-align: center;
}
.lotteryMsgBox .more .thead .periods, .lotteryMsgBox .more .more_item .periods {
    -webkit-flex-shrink: 0;
    flex-shrink: 0;
    width: 22%;
}
.lotteryMsgBox .more .thead .lotteryNumber, .lotteryMsgBox .more .more_item .lotteryNumber {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    flex: 1;
    padding-left: 1em;
    box-sizing: border-box;
}
.lotteryMsgBox .more .tbody {
    width: 100%;
    color: #777;
    overflow-y: scroll;
    overflow-x: hidden;
    height: 12.5rem;
}
.lotteryMsgBox .more .tbody .more_item {
    height: 1.875rem;
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
    position: relative;
    background: #fff;
} 
.lotteryMain .lotteryMsgBox .more {
    position: absolute;
    width: 100%;
    background: #fff;
    font-size: 0.8125rem;
}
.more {
    display: none;
}
.more.showMore {
    display: block;
}
.lotteryMsgBox .more .tbody .more_item .lotteryNumber {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    position: relative;
}
.more .lotteryred {
    color: red;
    margin-right: 1.25rem;
    width: 1.625rem;
}
.lotteryMsgBox .more .more_item .openTime {
    -webkit-flex-shrink: 0;
    flex-shrink: 0;
    width: 20%;
}
.lotteryMsgBox .more .goHistory {
    height: 3rem;
    padding: 0.625rem 0;
}
.lotteryMsgBox .more .goHistory div {
    margin: auto;
    width: 45%;
    line-height: 1.875rem;
    background: #ecebe6;
    text-align: center;
    border-radius: 0.9375rem;
}
a {
    text-decoration: none;
    color: #000;
}
.creditFooter {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  z-index: 99;
}
.creditFooter .setting {
  display: -webkit-box;
  display: -webkit-flex;
  display: flex;
  background: #fff;
  height: 2.5rem;
  border-top: 0.0625rem solid #e6e6e6;
  border-bottom: 0.0625rem solid #e6e6e6;
}
.creditFooter .setting .setMoney {
  margin-left: 0.625rem;
  -webkit-box-align: center;
  -webkit-align-items: center;
  align-items: center;
  display: -webkit-box;
  display: -webkit-flex;
  display: flex;
  font-size: 0.8125rem;
}
.creditFooter .btnGroup {
  height: 3.75rem;
  display: -webkit-box;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  justify-content: space-between;
  -webkit-box-align: center;
  -webkit-align-items: center;
  align-items: center;
  background: #333333;
  color: #f7f7f7;
  font-size: 0.9375rem;
  text-align: center;
}
.creditFooter .btnGroup {
  color: #f7f7f7;
  font-size: 0.9375rem;
  text-align: center;
}
.creditFooter .btnGroup .clearBtn {
  margin-left: 0.625rem;
  width: 3.4375rem;
  height: 1.875rem;
  line-height: 1.875rem;
  border: 0.0625rem solid #9a9a9a;
  border-radius: 0.1875rem;
}
.creditFooter .btnGroup .notes {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
  flex-grow: 1;
  padding: 0 0.75rem;
}
.creditFooter .btnGroup .bettingBtn.disabled {
  background: #aaa !important;
}
.creditFooter .btnGroup .bettingBtn {
  background: #e54042;
  height: 3.75rem;
  line-height: 1.2;
  width: 6.25rem;
  display: -webkit-box;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  align-items: center;
}
.creditFooter .btnGroup .notes strong {
  color: red;
  margin: 0 0.25rem;
} 
.keyboardInput {
  width: 6.125rem;
  height: 1.875rem;
  line-height: 1.875rem;
  text-align: center;
  border: 0.0625rem solid #c5c5c1;
  border-radius: 0.1875rem;
  padding: 0 0.1875rem; 
  display: flex;
  -webkit-box-align: center; 
  align-items: center;
  -webkit-box-pack: center; 
  justify-content: center;
  margin-right: 0.5rem;
}
</style>
<div class="lotteryMainTab">
    <div class="left">
        <div class="tabItem active">?????t c?????c</div>
        <div class="tabItem">l???ch s??? nhi???m v???</div>
    </div>  
</div>

<div class="lotteryMsgBox" style="position: absolute; top: 7.375rem;">
    <div class="lotteryMsg">
        <div class="top">
            <div class="time">
                <p class="id-now" d-id="0" d-date="{{date('Ymd')}}">l???ch s???</p> 
                <div data-v-6bb17ab0="" class="count_down" showgame="true">
                    <div data-v-6bb17ab0="" class="periods_time">
                        <div data-v-6bb17ab0="" class="showGame">
                            <div data-v-6bb17ab0="">
                                <p id="demo"></p>
                                <!-- <div id="countdown">00:05</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="ks openInfo">
            <div class="foot">
                @foreach($events as $event)
                <div>
                    <div class="periods">{{date('Ymd').$event->id}} k???t qu??? nhi???m v???
                        <svg type="ios-arrow-down" size="13" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 512 512" class="vux-x-icon vux-x-icon-ios-arrow-down">
                            <path d="M396.6 160l19.4 20.7L256 352 96 180.7l19.3-20.7L256 310.5z"></path>
                        </svg>
                    </div> 
                    <div class="lotteryNumber show-event">
                        <div class="one" style="background-image: url(&quot;{{URL::asset('/image/diceIcon.f2d1a6a.png')}}&quot;);"></div>
                        <div class="two" style="background-image: url(&quot;{{URL::asset('/image/diceIcon.f2d1a6a.png')}}&quot;);"></div>
                        <div class="three" style="background-image: url(&quot;{{URL::asset('/image/diceIcon.f2d1a6a.png')}}&quot;);"></div>
                    </div>
                </div>
                @break
                @endforeach
            </div>
        </div>
    </div> 
    <div class="more">
        <div class="thead">
            <div class="periods">c??u h???i</div> 
            <div class="lotteryNumber">k???t qu???</div>  
            <div class="openTime">Th???i gian m??? th?????ng</div>
        </div> 
        <div class="tbody">
            @foreach($events as $event)
            <div class="more_item">
                <div class="periods">{{date('Ymd').$event->id}}</div> 
                <div class="lotteryNumber">
                    <div class="{{$event->one==1?'one':($event->one==2?'two':($event->one==3?'three':($event->one==4?'four':($event->one==5?'five':'six'))))}}" style="background-image: url(&quot;{{URL::asset('/image/diceIcon.f2d1a6a.png')}}&quot;);"></div>
                    <div class="{{$event->two==1?'one':($event->two==2?'two':($event->two==3?'three':($event->two==4?'four':($event->two==5?'five':'six'))))}}" style="background-image: url(&quot;{{URL::asset('/image/diceIcon.f2d1a6a.png')}}&quot;);"></div>
                    <div class="{{$event->three==1?'one':($event->three==2?'two':($event->three==3?'three':($event->three==4?'four':($event->three==5?'five':'six'))))}}" style="background-image: url(&quot;{{URL::asset('/image/diceIcon.f2d1a6a.png')}}&quot;);"></div>
                </div> 
                <div class="lotteryred">{{($event->one+$event->two+$event->three)<11?'X???U':'T??I'}}</div> 
                <div class="lotteryred">{{($event->one+$event->two+$event->three)%2==0?'CH???N':'L???'}}</div> 
                <div class="openTime">{{date('H:i:s', strtotime($event->updated_at))}}</div>
            </div>
            @endforeach
        </div> 
        <div class="goHistory">
            <div><a href="{{route('event.history')}}">xem th??m</a></div>
        </div> 
    </div>


<div class="creditIndex">
    <div  class="creditWrap ks">
        <div  class="item">
            <div  class="itemName">3 qu??n</div> 
            <div  class="itemContent">
                <div  class="vux-flexbox vux-flex-row" style="flex-wrap: wrap;">
                <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                    <div class="itemBall" d-data="3x1">
                        <p class="number">1</p>
                    </div>
                </div>
                <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                    <div class="itemBall" d-data="3x2">
                        <p class="number">2</p>
                    </div>
                </div>
                <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                    <div class="itemBall" d-data="3x3">
                        <p class="number">3</p>
                    </div>
                </div>
                <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                    <div class="itemBall" d-data="3x4">
                        <p class="number">4</p>
                    </div>
                </div>
                <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                    <div class="itemBall" d-data="3x5">
                        <p class="number">5</p>
                    </div>
                </div>
                <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                    <div class="itemBall" d-data="3x6">
                        <p class="number">6</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="item">
        <div  class="itemName">T???ng h???p</div> 
            <div  class="itemContent">
                <div  class="vux-flexbox vux-flex-row" style="flex-wrap: wrap;">
                    <div style="flex: 0 0 25%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="Tai">
                            <p class="number">T??I</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 25%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="Xiu">
                            <p class="number">X???U</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 25%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="Chan">
                            <p class="number">CH???N</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 25%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="Le">
                            <p class="number">L???</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  class="item">
            <div  class="itemName"></div> 
            <div  class="itemContent">
                <div  class="vux-flexbox vux-flex-row" style="flex-wrap: wrap;">
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="4">
                            <p class="number">4</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="5">
                            <p class="number">5</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="6">
                            <p class="number">6</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="7">
                            <p class="number">7</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="8">
                            <p class="number">8</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="9">
                            <p class="number">9</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="10">
                            <p class="number">10</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="11">
                            <p class="number">11</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="12">
                            <p class="number">12</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="13">
                            <p class="number">13</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="14">
                            <p class="number">14</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="15">
                            <p class="number">15</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="16">
                            <p class="number">16</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall" d-data="17">
                            <p class="number">17</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div> 
<div class="creditFooter">
    <div class="setting">
        <div class="setMoney"> 
            <input type="number" class="keyboardInput" min="0">  
            <p>VN??</p>
        </div>
    </div> 
    <div class="btnGroup">
        <div class="clearBtn">X??a b???</div> 
        <div class="notes">
            <p>c???ng<span><strong>0</strong>ghi ch??,c???ng</span> <span><strong>0</strong>VN??</span></p>
        </div> 
        <div class="bettingBtn btn disabled">x??c nh???n nhi???m v???</div>
    </div>
</div>
<script> 
    // function startTimer(duration, display) {
    //     var timer = duration, minutes, seconds;
    //     setInterval(function () {
    //         minutes = parseInt(timer / 60, 10);
    //         seconds = parseInt(timer % 60, 10);
    //         minutes = minutes < 10 ? "0" + minutes : minutes;
    //         seconds = seconds < 10 ? "0" + seconds : seconds;
    //         display.text("00:" + minutes + ":" + seconds);
    //         if (--timer < 0) {
    //             timer = duration;
    //         }
    //     }, 1000);
    // }
    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            if( timer > 30){
                minutes = parseInt((timer - 30) / 60, 10);
                seconds = parseInt((timer - 30) % 60, 10);
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;
                display.text("00:" + minutes + ":" + seconds); 
            } else if (timer == 30) {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;
                display.text("00:" + minutes + ":" + seconds); 
            } else {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;
                display.text("00:" + minutes + ":" + seconds); 
            }
            
            if (--timer < 0) {
                $.ajax({
                    url: "/get-event-now", 
                    dataType:'JSON',
                    success: function(result){ 
                        console.log(result); 
                        $('.id-now').text($('.id-now').attr('d-date')+result.id+' l???ch s??? ');
                        $('.id-now').attr('d-id',+result.id);
                        const a = new Date(result.created_at),
                        b = new Date(),
                        difference = dateDiffInSeconds(a, b); 
                        console.log(difference + ' s') 
                        timer = difference;
                    }
                });
                $.ajax({
                    url: "/get-event-old-now", 
                    dataType:'JSON',
                    success: function(result){
                        console.log(result); 
                        
                        $('.ks.openInfo .foot .periods').html($('.id-now').attr('d-date')+result.id+' k???t qu??? nhi???m v??? <svg type="ios-arrow-down" size="13" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 512 512" class="vux-x-icon vux-x-icon-ios-arrow-down"><path d="M396.6 160l19.4 20.7L256 352 96 180.7l19.3-20.7L256 310.5z"></path></svg>');

                        console.log("one: "+ result.one +', two: '+ result.two +", three: " + result.three);
                        $('.lotteryNumber.show-event').addClass('noOpen');
                        display.text('??ang quay x??? s???');
                        $('.lotteryNumber.show-event').children().eq(0).attr('class', '');
                        $('.lotteryNumber.show-event').children().eq(1).attr('class', '');
                        $('.lotteryNumber.show-event').children().eq(2).attr('class', '');
                        switch (result.one) {
                            case 1: $('.lotteryNumber.show-event').children().eq(0).attr('class', 'one'); break;
                            case 2: $('.lotteryNumber.show-event').children().eq(0).attr('class', 'two'); break;
                            case 3: $('.lotteryNumber.show-event').children().eq(0).attr('class', 'three'); break;
                            case 4: $('.lotteryNumber.show-event').children().eq(0).attr('class', 'four'); break;
                            case 5: $('.lotteryNumber.show-event').children().eq(0).attr('class', 'five'); break;
                            case 6: $('.lotteryNumber.show-event').children().eq(0).attr('class', 'six'); break;
                        }
                        switch (result.two) {
                            case 1: $('.lotteryNumber.show-event').children().eq(1).attr('class', 'one'); break;
                            case 2: $('.lotteryNumber.show-event').children().eq(1).attr('class', 'two'); break;
                            case 3: $('.lotteryNumber.show-event').children().eq(1).attr('class', 'three'); break;
                            case 4: $('.lotteryNumber.show-event').children().eq(1).attr('class', 'four'); break;
                            case 5: $('.lotteryNumber.show-event').children().eq(1).attr('class', 'five'); break;
                            case 6: $('.lotteryNumber.show-event').children().eq(1).attr('class', 'six'); break;
                        }
                        switch (result.three) {
                            case 1: $('.lotteryNumber.show-event').children().eq(2).attr('class', 'one'); break;
                            case 2: $('.lotteryNumber.show-event').children().eq(2).attr('class', 'two'); break;
                            case 3: $('.lotteryNumber.show-event').children().eq(2).attr('class', 'three'); break;
                            case 4: $('.lotteryNumber.show-event').children().eq(2).attr('class', 'four'); break;
                            case 5: $('.lotteryNumber.show-event').children().eq(2).attr('class', 'five'); break;
                            case 6: $('.lotteryNumber.show-event').children().eq(2).attr('class', 'six'); break;
                        }
                        setTimeout(function () { $(".lotteryNumber.show-event").removeClass("noOpen"); }, 2000); 
                        $('.more .tbody').children('.more_item').last().remove();
                        var sum = result.one+result.two+result.three;
                        var taixiu, chanle;
                        if(sum > 10) {
                            taixiu = 'T??I';
                        }else {
                            taixiu = 'X???U';
                        }
                        if(sum % 2 == 0) {
                            chanle = 'CH???N';
                        }else {
                            chanle = 'L???';
                        }
                        $('.more .tbody').html('<div class="more_item"><div class="periods">'+$('.id-now').attr('d-date')+result.id+'</div> <div class="lotteryNumber"> <div class="'+$(".lotteryNumber.show-event").children().eq(0).attr("class")+'" style="background-image: url(&quot;{{URL::asset('/image/diceIcon.f2d1a6a.png')}}&quot;);"></div><div class="'+$(".lotteryNumber.show-event").children().eq(1).attr("class")+'" style="background-image: url(&quot;{{URL::asset('/image/diceIcon.f2d1a6a.png')}}&quot;);"></div><div class="'+$(".lotteryNumber.show-event").children().eq(2).attr("class")+'" style="background-image: url(&quot;{{URL::asset('/image/diceIcon.f2d1a6a.png')}}&quot;);"></div></div> <div class="lotteryred">'+taixiu+'</div> <div class="lotteryred">'+chanle+'</div> <div class="openTime">'+moment(result.updated_at).format('LTS')+'</div></div>' + $('.more .tbody').html());
                    }
                });  
            }
        }, 1000);
    }

    function dateDiffInSeconds(a, b) {
        const _MS_PER_DAY = 1000;
        // Discard the time and time-zone information.
        const utc1 = Date.UTC(a.getFullYear(), a.getMonth(), a.getDate(), a.getHours(), a.getMinutes(), a.getSeconds());
        const utc2 = Date.UTC(b.getFullYear(), b.getMonth(), b.getDate(), b.getHours(), b.getMinutes(), b.getSeconds());
        return Math.floor((utc1 - utc2 + 5*60*1000 ) / _MS_PER_DAY);
    }

    $(document).ready(function () {
        var fiveMinutes = 60 * 4.5, display = $('#demo');
        $.ajax({
            url: "/get-event-now", 
            dataType:'JSON',
            success: function(result){
                console.log(result); 
                $('.id-now').text($('.id-now').attr('d-date')+result.id+' l???ch s???');
                $('.id-now').attr('d-id', result.id);
                const a = new Date(result.created_at),
                b = new Date(),
                difference = dateDiffInSeconds(a, b);
                fiveMinutes = difference; 
                console.log(difference + ' s') 
                startTimer(difference, display); 
            }
        }); 
        $.ajax({
            url: "/get-event-old-now", 
            dataType:'JSON',
            success: function(result){
                console.log(result); 
                console.log("one: "+ result.one +', two: '+ result.two +", three: " + result.three);
                $('.lotteryNumber.show-event').children().eq(0).attr('class', '');
                $('.lotteryNumber.show-event').children().eq(1).attr('class', '');
                $('.lotteryNumber.show-event').children().eq(2).attr('class', '');
                
                switch (result.one) {
                    case 1: $('.lotteryNumber.show-event').children().eq(0).attr('class', 'one'); break;
                    case 2: $('.lotteryNumber.show-event').children().eq(0).attr('class', 'two'); break;
                    case 3: $('.lotteryNumber.show-event').children().eq(0).attr('class', 'three'); break;
                    case 4: $('.lotteryNumber.show-event').children().eq(0).attr('class', 'four'); break;
                    case 5: $('.lotteryNumber.show-event').children().eq(0).attr('class', 'five'); break;
                    case 6: $('.lotteryNumber.show-event').children().eq(0).attr('class', 'six'); break;
                }
                switch (result.two) {
                    case 1: $('.lotteryNumber.show-event').children().eq(1).attr('class', 'one'); break;
                    case 2: $('.lotteryNumber.show-event').children().eq(1).attr('class', 'two'); break;
                    case 3: $('.lotteryNumber.show-event').children().eq(1).attr('class', 'three'); break;
                    case 4: $('.lotteryNumber.show-event').children().eq(1).attr('class', 'four'); break;
                    case 5: $('.lotteryNumber.show-event').children().eq(1).attr('class', 'five'); break;
                    case 6: $('.lotteryNumber.show-event').children().eq(1).attr('class', 'six'); break;
                }
                switch (result.three) {
                    case 1: $('.lotteryNumber.show-event').children().eq(2).attr('class', 'one'); break;
                    case 2: $('.lotteryNumber.show-event').children().eq(2).attr('class', 'two'); break;
                    case 3: $('.lotteryNumber.show-event').children().eq(2).attr('class', 'three'); break;
                    case 4: $('.lotteryNumber.show-event').children().eq(2).attr('class', 'four'); break;
                    case 5: $('.lotteryNumber.show-event').children().eq(2).attr('class', 'five'); break;
                    case 6: $('.lotteryNumber.show-event').children().eq(2).attr('class', 'six'); break;
                }
                //.addClass('');
            }
        });  
         
    });
    $(document).ready(function () {
        var sum_select = 0, select_arr = []; 

        moment.locale('vi');        
        // $('.itemBall').click(function(e) {  
        //     if($(this).parents('.vux-flexbox-item').hasClass('select'))
        //         $(this).parents('.vux-flexbox-item').removeClass('select');
        //     else
        //         $(this).parents('.vux-flexbox-item').addClass('select');
        // });
        $('.itemBall').click(function(e) {  
            $(this).parents('.vux-flexbox-item').toggleClass('select');
            if($(this).parents('.vux-flexbox-item').hasClass('select')){
                sum_select ++;
            } else {
                sum_select --;
            }
            if(sum_select == 0) {
                $('.bettingBtn.btn').addClass('disabled');
            }
            if(sum_select == 1 && $('.keyboardInput').val() > 0) {
                $('.bettingBtn.btn').removeClass('disabled');
            }
            $('.notes').html('<p>c???ng<span><strong>'+sum_select+'</strong>ghi ch??,c???ng</span> <span><strong>'+sum_select*$('.keyboardInput').val()+'</strong>VN??</span></p>');
        });
        $(":input.keyboardInput").bind('keyup change click', function (e) {
            if (! $(this).data("previousValue") || $(this).data("previousValue") != $(this).val()) {
                if ($(this).val() > 0 && sum_select > 0 ) {
                    $('.bettingBtn.btn').removeClass('disabled');  
                } else {
                    $('.bettingBtn.btn').addClass('disabled');
                }
                $('.notes').html('<p>c???ng<span><strong>'+sum_select+'</strong>ghi ch??,c???ng</span> <span><strong>'+sum_select*$('.keyboardInput').val()+'</strong>VN??</span></p>');  
                $(this).data("previousValue", $(this).val());
            }
        });
        $('div.clearBtn').click(function(){
            sum_select = 0;
            $('.vux-flexbox-item.select').removeClass('select');
            $(":input.keyboardInput").val(0);
            $('.notes').html('<p>c???ng<span><strong>'+sum_select+'</strong>ghi ch??,c???ng</span> <span><strong>'+sum_select*$('.keyboardInput').val()+'</strong>VN??</span></p>');  
            $('.bettingBtn.btn').addClass('disabled');
        });
        $('.ks.openInfo').click(function(){
            $(".more").toggleClass("showMore");
        });
        $("div.bettingBtn.btn:not(.first-bar)").click(function(){
            select_arr = [] ; 
            $(".vux-flexbox-item.select").each(function() { 
                select_arr.push($(this).children().attr('d-data'));
            });
            console.log(select_arr);
            console.log( $('.id-now').attr('d-id'));
            $.ajax({ 
                type: 'post',
                url: "/post-user-event", 
                dataType:'JSON',
                data: { 'cost': $(":input.keyboardInput").val(), 'event':  $('.id-now').attr('d-id'),'data': select_arr, _token:'{{ csrf_token() }}'}, 
                success: function(result){
                    console.log(result);
                }
            });  
            // post-user-event
        });
    });
</script>
@endsection 

