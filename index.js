// đoạn code sử dụng jquery

// khi gọi hoàn thành file html thì $document.ready sẽ được gọi
$(document).ready(function () {
  var slideIndex = 0;
  // gọi hàm
  showSlides();

  function showSlides() {
    // các slide được lấy thông qua $(".mySlides"), sau đó ẩn đi bằng cách sử dụng .hide().
    var slides = $(".mySlides");
    slides.hide();
    slideIndex++;
    // nếu slideIndex lớn hơn số lượng slide, slideIndex sẽ được đặt lại thành 1.
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    // Slide tại vị trí slideIndex - 1 được hiển thị bằng cách sử dụng .show().
    slides.eq(slideIndex - 1).show();
    // hàm showSlides() được gọi lại sau 5000ms (5 giây) bằng cách sử dụng setTimeout().
    setTimeout(showSlides, 5000);
  }
});

function scrollToSection(sectionId) {
  //Tất cả các phần <section> trên trang hiện tại sẽ được ẩn đi bằng cách sử dụng $("section").hide().
  $("section").hide();
  //Nếu sectionId là "all", tất cả các phần <section> sẽ được hiển thị bằng cách sử dụng $("section").show().
  if (sectionId === "all") {
    $("section").show();
  } else {
    //ngược lại, phần có id là sectionId sẽ được hiển thị bằng cách sử dụng $("#" + sectionId).show().
    $("#" + sectionId).show();
  }
}
// được gọi để hiển thị tất cả các phần <section> lúc ban đầu.
scrollToSection("all");