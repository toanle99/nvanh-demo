@extends('layouts.app-master')

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
</style>
<div class="lotteryMainTab">
    <div class="left">
        <div class="tabItem active">Đặt cược</div>
        <div class="tabItem">lịch sử nhiệm vụ</div>
    </div>  
</div>

<div class="lotteryMsgBox" style="position: absolute; top: 7.375rem;">
    <div class="lotteryMsg">
        <div class="top">
            <div class="time">
                <p>20230302235lịch sử</p> 
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
                <div>
                    <div class="periods">20230302234kết quả nhiệm vụ
                        <svg type="ios-arrow-down" size="13" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 512 512" class="vux-x-icon vux-x-icon-ios-arrow-down">
                            <path d="M396.6 160l19.4 20.7L256 352 96 180.7l19.3-20.7L256 310.5z"></path>
                        </svg>
                    </div> 
                    <div class="lotteryNumber">
                        <div class="one" style="background-image: url(&quot;{{URL::asset('/image/diceIcon.f2d1a6a.png')}}&quot;);"></div>
                        <div class="two" style="background-image: url(&quot;{{URL::asset('/image/diceIcon.f2d1a6a.png')}}&quot;);"></div>
                        <div class="three" style="background-image: url(&quot;{{URL::asset('/image/diceIcon.f2d1a6a.png')}}&quot;);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- <div class="more">
        <div class="thead">
            <div class="periods">câu hỏi</div> 
            <div class="lotteryNumber">kết quả</div> 
            <div class="lotteryblue">Xuân Hạ</div> 
            <div class="lotteryblue">Thu Đông</div> 
            <div class="openTime">Thời gian mở thưởng</div>
        </div> 
        <div class="tbody">
            <div class="more_item">
                <div class="periods">20230302234</div> 
                <div class="lotteryNumber">
                    <div class="six" style="background-image: url(&quot;./static/img/diceIcon.f2d1a6a.png&quot;);"></div>
                    <div class="six" style="background-image: url(&quot;./static/img/diceIcon.f2d1a6a.png&quot;);"></div>
                    <div class="five" style="background-image: url(&quot;./static/img/diceIcon.f2d1a6a.png&quot;);"></div>
                </div> 
                <div class="lotteryred">TÀI </div> 
                <div class="lotteryred">CHẴN </div> 
                <div class="openTime">11:42:00</div>
            </div>
            <div class="more_item">
                <div class="periods">20230302233</div> 
                <div class="lotteryNumber">
                    <div class="six" style="background-image: url(&quot;./static/img/diceIcon.f2d1a6a.png&quot;);"></div>
                    <div class="four" style="background-image: url(&quot;./static/img/diceIcon.f2d1a6a.png&quot;);"></div>
                    <div class="five" style="background-image: url(&quot;./static/img/diceIcon.f2d1a6a.png&quot;);"></div>
                </div> 
                <div class="lotteryred">TÀI </div> 
                <div class="lotteryred">CHẴN </div> 
                <div class="openTime">11:39:00</div>
            </div>
        </div> 
        <div class="goHistory">
            <div>xem thêm</div>
        </div> 
    </div> -->


<div class="creditIndex">
    <div  class="creditWrap ks">
        <div  class="item">
            <div  class="itemName">3 quân</div> 
            <div  class="itemContent">
                <div  class="vux-flexbox vux-flex-row" style="flex-wrap: wrap;">
                <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                    <div class="itemBall">
                        <p class="number">1</p>
                    </div>
                </div>
                <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                    <div class="itemBall">
                        <p class="number">2</p>
                    </div>
                </div>
                <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                    <div class="itemBall">
                        <p class="number">3</p>
                    </div>
                </div>
                <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                    <div class="itemBall">
                        <p class="number">4</p>
                    </div>
                </div>
                <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                    <div class="itemBall">
                        <p class="number">5</p>
                    </div>
                </div>
                <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                    <div class="itemBall">
                        <p class="number">6</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="item">
        <div  class="itemName">Tổng hợp</div> 
            <div  class="itemContent">
                <div  class="vux-flexbox vux-flex-row" style="flex-wrap: wrap;">
                    <div style="flex: 0 0 25%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">TÀI</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 25%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">XỈU</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 25%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">CHẴN</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 25%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">LẺ</p>
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
                        <div class="itemBall">
                            <p class="number">4</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">5</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">6</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">7</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">8</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">9</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">10</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">11</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">12</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">13</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">14</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">15</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">16</p>
                        </div>
                    </div>
                    <div style="flex: 0 0 20%;" class="vux-flexbox-item">
                        <div class="itemBall">
                            <p class="number">17</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<script> 
    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;
            display.text(minutes + ":" + seconds);
            if (--timer < 0) {
                timer = duration;
            }
        }, 1000);
    }

    $(document).ready(function () {
        var fiveMinutes = 60 * 4.5, display = $('#demo');
        startTimer(fiveMinutes, display);
        // startTimer(60 * 0.5, display);
    });
</script>
@endsection 

