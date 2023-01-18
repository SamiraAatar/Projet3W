
/* --------------Nav -------------------------------- */

const doc = document;
const menuOpen = doc.querySelector(".CacheMenuBurgerOrdi");
const menuClose = doc.querySelector(".close");
const ContenairMenuBurgerMobile = doc.querySelector(".ContenairMenuBurgerMobile");

menuOpen.addEventListener("click", () => {
  ContenairMenuBurgerMobile.classList.add("ContenairMenuBurgerMobile--active");
});

menuClose.addEventListener("click", () => {
  ContenairMenuBurgerMobile.classList.remove("ContenairMenuBurgerMobile--active");
});

/* ------------------formulaire---------------*/

function ajaxPost(url, data, success, error, loaderParent = "", loadingtext = "") {
  // var $this = $this;
  $.ajax({
      url: url,

      method: 'POST',
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      // contentType: "application/json; charset=utf-8",
      dataType: 'JSON',
      beforeSend: function () {
          /** customize submit button to append loader animation*/
          $(loaderParent).html(`${loadingtext}`);
      },
      data: data
  }).done(success).fail(error);
}


//form submition with jquery
$("#contact").on("submit",function(e){
  e.preventDefault();
  
  var loaderbtnText = $("#contactsubmitbtn").text();
  $("#contact-form-error").hide();
  $("#contact-form-status").hide();

  ajaxPost($(this).attr('action'), $(this).serialize(), (response)=>{

    if(response.ok){
      console.log(response)
      $("#contact-form-status").show();
      $("#contactsubmitbtn").html(loaderbtnText)
      var form = document.getElementById("contact");
      form.reset()

    }else{
      $("#contact-form-error").show();

    }
  }, (error)=>{
    $("#contact-form-error").show();
    $("#contactsubmitbtn").html(loaderbtnText)

  }, "#contactsubmitbtn",`<img src="https://s2.svgbox.net/loaders.svg?ic=spinner&color=ffffff" width="25" height="25">`)
})



//prestation reservation request
$("#reservation-form").on("submit",function(e){
  e.preventDefault();
  
  var loaderbtnText = $("#reservation-form button[type='submit']").text();

  $("#contact-form-error").hide();
  $("#contact-form-status").hide();

  ajaxPost($(this).attr('action'), $(this).serialize(), (response)=>{

    if(response.status){
      console.log(response)
      $("#reservation-form-status").show();
      $("#reservation-form button[type='submit']").html(loaderbtnText)
      var form = document.getElementById("reservation-form");
      form.reset()

    }else{
      $("#reservation-form-error").show();

    }
  }, (error)=>{
    $("#reservation-form-error").show();
    $("#reservation-form button[type='submit']").html(loaderbtnText)

  }, "#reservation-form button[type='submit']",`<img src="https://s2.svgbox.net/loaders.svg?ic=spinner&color=B53B7D" width="25" height="25">`)
})
