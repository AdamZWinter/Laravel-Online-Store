const submit = function (){

    //$.post("iscat", {imageLink: "https://www.spoon-tamago.com/wp-content/uploads/2021/08/dinos-cat-table-3.jpeg"}, function (response){
    //$.post("api/iscat", {imageLink: "test"}, function (response){
    $.post("https://iscat.topsecondhost.com", {imageLink: "https://www.spoon-tamago.com/wp-content/uploads/2021/08/dinos-cat-table-3.jpeg"}, function (response){
        //$("#submitFeedback").html(response);
        try {
            console.log(response);
            let responseObj = JSON.parse(response);
            console.log("test");
            if (responseObj.error == true) {
                document.querySelector("#submitFeedback").innerHTML = responseObj.message;
                console.log(responseObj.message);
                console.log("error true");
            } else {
                console.log(responseObj.message);
                console.log("error false");
                document.querySelector("#submitFeedback").innerHTML = responseObj.message;
                // document.querySelector("#submitSummary").classList.add("d-none");
                // document.querySelector("#buttonDone").classList.remove("d-none");
                // document.querySelector("#photoForm").classList.add("d-none");
            }
        } catch (e) {
            $("#submitFeedback").html(response);
        }
    });
}

 const destructTimer = function(){
     window.location.href = "destroy";
 }

window.setTimeout(destructTimer, 1200000);

const submitButton = document.querySelector("#submitButton");
submitButton.addEventListener("click", ()=>{submit()}, false);