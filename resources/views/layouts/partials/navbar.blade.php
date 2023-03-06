<style>
  .header {
    background: #155ba6;
    position: relative;
    padding: 0.1875rem 0;
    display: flex;
    box-sizing: border-box;
  }
  .header-title {
    font-size: 1.25rem;
    margin: 0;
    text-align: right;
    padding: 0 0 0 3.5rem;
    -webkit-box-flex: 1;
    flex: 1;
    height: 2.5rem;
    width: auto;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .header-title img {
    height: 0.875rem;
    width: 1.03125rem;
    position: absolute;
    left: 0.75rem;
    top: 50%;
    margin-top: -0.4375rem;
  }
  .header-title span {
    display: inline-block;
    white-space: nowrap;
    line-height: 2.5rem;
    text-align: center;
    font-size: 1.125rem;
    font-weight: 400;
    color: #fff;
  }
  .header-right {
    position: relative;
    top: 0;
    right: 0;
    padding: 0 0.625rem;
    display: flex;
  }
  .header-right span {
    font-size: 0.75rem;
    color: #fefefe;
  }
  .refresh-icon img {
    width: 0.9rem !important;
    height: 0.9rem !important;
  }

</style>

<header class="header"> 
  <h1 class="header-title">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAAA4CAYAAABJ7S5PAAAAgElEQVRoBe3ZsQEAEAxFQbH/zlFI8yegOF3a8yio7u5lrc3gCoCYEkCAyEtBEelhIkCAAAECBAgQIECAAAECBAgQIEDgrUD54Lkb4PF2QgQBIu8kRSgiizARIECAAAECBAgQIECAAAECBAgQIPCFgA+e2Qav2CDyRCpCEYpIgZkOi3wMFjlM7XkAAAAASUVORK5CYII=" class="overwrite-left"> 
    <span>Makemoney</span>
  </h1>
  <div class="header-right">
    <div class="">
      <span>{{ isset($user) ? $user->cost : 0 }}</span> 
      <img src="{{URL::asset('/image/1012.01725b9.png')}}" style="width: 1.1rem;"alt=""> 
      <span class="refresh-icon">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAYFBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////98JRy6AAAAH3RSTlMAwEL4zce5IDwFpJw0EtusXCsL7OSRdmxjGLJ9VkqKCMWapwAAARNJREFUOMvN01lygzAURNEGiXk2GEM83P3vMha2HFdQ/J1TxdfrB4hq9GbN5zKxUbXUCsk7XsZzpk0x+PHwBdhjn+fXuZuAWU7Hc35yW428OAWbSWqfgSNUhd7FE6aWEvz8ol+KCDLZLbBArr0vxsc7rNArxHIsXSCiVNABjJEG0B96GN2jbvvdMnJSMGrgsAtkvCim1V4WP9W6UemjIV71rxVppI9WUB95F+1csWrxUu0knO4X7RA7ReiLFy5gGoVFVO4uKaOCFigkS1aSKiCHXi7QyFAG55W2QKzakGT7NnXyAQ0TnN57U6f4Gkxb5Q8dmHO9HafILq5ri//p0sfm1XI3JUlrAFMGjl5XLRtj55/xN6DMF7WD+n0LAAAAAElFTkSuQmCC" alt="" class="">
      </span>
    </div>
  </div> 
  </div>
  
  
</header>
<!--  
<div class="vux-popup-dialog vux-popup-left vux-popup-show" style="width: 10.9375rem; z-index: 1000;">
    <div class="info">
      <div class="head">
        <a href="#/" class="router-link-exact-active router-link-active">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAiCAMAAAANmfvwAAAAWlBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////9ZMre9AAAAHXRSTlMA8aIGDLfr59XaxK4S99+de0zOp14pF4+KaUI9HcAeRf4AAACuSURBVDjLxdLbDoMgEEXRA6iAd6211/n/36wNpRTr4FPT9UayMwmTQazXwgxI6ejpkiycHpyKvDNbBCdsyemTZIugwooqaS1XiIz0zSh2RmhqeLWhbfroZ7TEaVwzG+KJ61LcNSUNgKUdN9AeuZ9MGIxuiKWtOwxJHOGX1/EJnNSU7FdJYVvbskn4QZlKtL9zPikUFvkfkwObNIkkvJ2J3rJ4LxKeFC9WRc9xxuIBSnVOV+t+gDQAAAAASUVORK5CYII=" alt=""> 
          <span>Trang chủ</span>
        </a>
      </div>  
      <div class="link-group">
        <a href="#/userCenter" class="">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAMAAACelLz8AAAAh1BMVEUAAADx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fER0nD2AAAALHRSTlMABCD66Pbyz8W1r6NcWT7t3MCooIF3ZDoxKg8IuKyOjG1gUEwV05iTdW5UJ8czNDMAAADYSURBVCjPbZFXcsMwDESXItUlS7KaSxyXOH3vf75MXDRrWu+HwDwWgMBE0Ceu+T7jiW1OMiL56ptNzXw0wJiy8VTM4RZ9cQ+llHtyrlQ5SsIXfYmpZDUlWfMg2ZJGWmInKlVlWIuKKgiZVLVgryqgm+IwxAMdk+AS/MZc4JHC2vZ4GlraNXxSXnHeIfNJvn8cyqLfhawKbdmxGe/TGSyXUh91o8mnX9xUflH7+7mEb/DIWP4vK2bwMTa8DtjgiSNPwJk7zMAY+JGXhIRAy2BOdQSyaDunygh/PJMRs0CGWSEAAAAASUVORK5CYII=" alt=""> 
          <span class=""> Trung tâm thành viên</span>
        </a> 
        <a href="#/noterecord" class="">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAMAAACelLz8AAAAilBMVEUAAADx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fF68Rf+AAAALXRSTlMAx7E/UA6TwGdFDfPTSgmUd3M0HhT21s+2rJiHflQ5MCoa3cRvaSPx66KAfF5kOdXzAAAA3ElEQVQoz23R2ZKCMBCF4SPIIATZ12EQcNRZz/u/npVKxGD4q+++6s5FgHlHuwNkDZ3OWded6UriJ6xyZprmvdkwIVAXuUPKVb5BnruqwHEhqyedkuRtKUn+jYMXrmoNQuyFoRyVPHjVZLVnpun4jkBODF08xJp6IiX+WGKxUhNCPbryTB423yoEM59bNJEjpi0qyROwtVVUSjKLRnKUkuKVCjKXcsUrzRVdoOUHFPmLeN9qRwvYmN8k5QJdR/ElhKjEgJ63W8tfLPVRHUVR3QSoSaprVj+Rk+Z4dAdClB8gyG9OJgAAAABJRU5ErkJggg==" alt=""> 
          <span class=""> Tuyên bố đặt cược</span>
        </a> 
        <a href="#/userReport" class="">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAMAAACelLz8AAAAbFBMVEUAAADx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHQRqXqAAAAI3RSTlMABsKrm7lHilAvAvK9oRDd1jOXKfjs5drRzKd8ZSB5bjsjF3MUW4cAAACdSURBVCjPrc7JDoMwDEXRBAptMxKgjKXT+/9/LAssgoUqFj0Lb65sWRzy0Gjuu2WANsBeC7DzNHAiZlsnO6Dtfd8ARoRupILaSX0rNIB5FiIAS0IiGFdQsoLLKKW8yCRKUw3i1TZ90oyULG0cT+8rmViqsJLb5MYzef7lDZlfSK4Ov6FeOQnxwUEwyqxbHG152PIUKzMsqfLgjPjtC9bsEiuL0REOAAAAAElFTkSuQmCC" alt=""> 
          <span class="">Thống kê</span>
        </a>
      </div> 
      <div class="link-group">
        <div class="link-box">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAMAAACelLz8AAAAgVBMVEUAAADx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHQgafCAAAAKnRSTlMAfncFmA60j3NhUEcrIhz46+fd1rmrVhXv4dPBr6GdiYg78uDHhmpZOjEbPIp1AAAAzklEQVQoz5WQWRKCQAxERUBZFRHBXXH33f+ADlAQYODDfCRd9So9nZm0y4+9yUhdmY+hKcY/KH8YgsJ9y9aDuaAANjVR+tU2DHecK2JGON23shtuKSxm/RgfsNWw1dASzkojVy1pKCBW/Ug+8Bsxqq0wmyNW71qeCsRSDjQbdamRlCAxlBLDhGAArQvkYOlkQaR6BraGNhjl0NdCyKplfO2lZyV88NrAPsjfuWDJBemWgxrCIudb0EWawLET9gywuy+BfdoPNU22wNpqIv0ADCYS1LEosSUAAAAASUVORK5CYII=" alt=""> 
          <span>đăng xuất</span>
        </div>
      </div>
    </div>
  </div> 
-->