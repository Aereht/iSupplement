String.prototype.permalink = function () {
  return this.toString().trim().toLowerCase().replace(/\s/g, '-');
};
$('.add-to-cart-btn').on('click', function () {

  $.ajax({
    url: BASE_URL + '/shop/add-to-cart',
    type: 'GET',
    dataType: 'html',
    data: { pid: $(this).data('id') },
    success: function (res) {
      window.location.reload();
    }
  });
});
$('.origin-text').on('focusout', function () {
  $('.target-text').val($(this).val().permalink());
});