
// var user_id = <?php echo $user_id ?>;



$(".cartadd").click(function(){
    
    
    var user_id = parseInt($(".profile_avatar").attr("data-id"));
    console.log(user_id);

    if(user_id){
        var prid = $(this).attr("data-prid");
        var currentCart = parseInt($(".cartbadge").text());

        $.ajax({
            url: "./pages/cartadd.php",
            data:{prid:prid,user:user_id},
            method: 'post',
            success: function(result){

                if(result==1){
                    
                    $(".cartbadge").html(currentCart+1);
                    $(".cartbadge").css("display","flex");
                    alert("added");
                }
                else if(result==0){
                    alert("Already exists");
                }
                else{
                    alert("Not added. Try again");
                }

            }
        });
    }
    else{
        window.location.href = './pages/signup.php';

    }
    
    
});