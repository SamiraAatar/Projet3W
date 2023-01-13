
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
  var loaderbtn = $("#contactsubmitbtn");
  var loaderbtnText = loaderbtn.text();
  ajaxPost($(this).attr('action'), $(this).serialize(), (response)=>{
    if(response.msg){
      console.log(response.msg)
      $(loaderbtn).text(loaderbtnText)

    }
  }, (error)=>{
    console.log(error.message)
  }, loaderbtn,`<img src="https://s2.svgbox.net/loaders.svg?ic=spinner&color=ffffff" width="25" height="25">`)
})
