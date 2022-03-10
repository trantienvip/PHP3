<link rel="stylesheet" href="{{asset('front-end/boostrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('front-end/css/footer.css')}}">
<link rel="stylesheet" href="{{asset('front-end/themify-icons/themify-icons.css')}}">

<link rel="stylesheet" href="{{asset('front-end/css/app.css')}}">
<link rel="stylesheet" href="{{asset('front-end/owlcarousel/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('front-end/owlcarousel/assets/owl.theme.default.min.css')}}">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('front-end/owlcarousel/owl.carousel.min.js')}}"></script>

<style>
    div#navbarSupportedContent {
        justify-content: space-between;
    }
    .nav-item.name_ss_all {
        display: flex;
    }
    .name_ss{
        color: #f7931a !important;
        font-weight: 550;
        background: rgb(88 88 88 / 50%);
        border-radius: 5px;
    }
    .name_ss:hover{
        color: #ffffff !important;
    }
    .user_information {
        position: absolute;
        right: 18px;
    }
    .user_information::after {
        content: "";
        background-color: #10d25e;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        position: absolute;
        right: -3px;
        box-shadow: 1px 1px 10px #12e9ff;
    }
    .user_information img {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        box-shadow: 1px 1px 8px #f7931a;
        cursor: pointer;
    }
    .user_information_sm:after {
        content: "";
        border-width: 12px;
        border-color: transparent transparent #202429;
        position: absolute;
        border-style: solid;
        top: -24px;
        right: 5px;
    }
    .user_information_sm {
        background: #202429;
        width: 180px;
        max-height: 200px;
        position: absolute;
        right: 0;
        top: 150%;
        display: flex;
        justify-content: center;
        flex-direction: column;
        border-radius: 0 0 5px 5px;
        opacity: 0;
        transition: all .2s cubic-bezier(0.4, 0, 1, 1);
        pointer-events: none;
        z-index: 1;
    }
    .user_information_sm.active{
        pointer-events: all;
        opacity: 1;
        top: 54px;
    }
    .user_information_sm_hi {
        color: #fff;
        align-self: center;
        padding-top: 10px;
    }
    .user_information_sm_cp{
        padding-left: 1px;
        font-weight: 400;
        color: #adb5bd;
        font-size: 15px;
        margin:0;
        list-style: none;
        margin-top: 5px;
    }
    .user_information_sm_cp li{
        margin-top: 5px;
        font-size: 14px;
        padding: 6px 14px;
    }
    .user_information_sm_cp li:hover{
        background-color: rgb(57 57 57);
    }
    .user_information_sm_cp li a{
        text-decoration: none;
        color: rgb(161, 161, 161);
    }
</style>