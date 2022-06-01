$(".cartadd").click(function(){
    console.log("peyechi");

    var user_id = 1;
    var prid = $(this).attr("data-prid");
    console.log("ashe");
    $.ajax({
        url: "../pages/cartadd.php",
        data:{prid:prid,user:user_id},
        method: 'post',
        success: function(result){

            if(result==1){
                alert("added");
            }
            else{
                alert("not added");
            }

        }
    });
});