$(document).ready(function () {
    var countT = 0;
    var countF = 0;
    $('#sign_in').click(function () {

        $.ajax({
            url:"../ajax/sign_in.php",
            type: 'get',
            success: function (data) {
                $('.auth').html(data);
            }
        })

    })

    $('#registration').click(function () {
        $.ajax({
            url:"../ajax/registration.php",
            type: 'get',
            success: function (data) {
                $('.content').html(data);
            }
        })
    })

       $(document).on('click',".tourist",function () {
           if (countT == 0) {
               if (countF != 0){
                   $('.form').remove();
                   countF = 0;
               }
               $.ajax({
                   url: "../ajax/reg_tourists.php",
                   type: 'get',
                   success: function (data) {
                       $('.content').append(data);
                   }
               })
               countT++;
           }
        })

    $(document).on('click',".firm",function () {
        if (countF == 0) {
            if (countT != 0){
                $('.form').remove();
                countT = 0;
            }
            $.ajax({
                url: "../ajax/reg_firm.php",
                type: 'get',
                success: function (data) {
                    $('.content').append(data);
                }
            })
            countF++;
        }
    })

    $(document).on('click',"#general",function () {
        $('.content').empty();
            $.ajax({
                url: "../ajax/general.php",
                type: 'get',
                success: function (data) {
                    $('.content').append(data);
                }
            })
    })

    $(document).on('click','#sign_out',function () {
        $.ajax({
            url:"../ajax/exit.php",
            success: function () {
                location.reload()
            }
        })
    })


    $(document).on('click','#tours_firm',function () {
        $.ajax({
            url: "../ajax/tours_firm.php",
            type: 'get',
            success: function (data) {
                $('.content').html(data);
            }
        })
    })


    $(document).on("click","#lk",function () {
        $.ajax({
            type:'get',
            url: "../ajax/lk.php",
            success: function (data) {
                $(".content").html(data);
            }
        })
    })




})

