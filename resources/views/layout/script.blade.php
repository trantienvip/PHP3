{{-- <script src="{{ asset('front-end/boostrap/js/bootstrap.min.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>

<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

<script>
    var iconsearch = $('.iconsearch.ti-search');
    var formsearch = $('.form-search');
    iconsearch.click(function(){
        iconsearch.toggleClass('ti-search');
        iconsearch.toggleClass('ti-close');
        formsearch.toggleClass('active')
    });
    document.querySelector('.user_information_image').addEventListener('click', function(){
        $('.user_information_sm').toggleClass('active');
    })
</script>