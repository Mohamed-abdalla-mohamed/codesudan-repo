function updateCartItem(obj, id) {
    $.get("../cart/cartAction.php", {
      action: "updateCartItem",
      id: id,
      qty: obj.value
    }, function(data) {
      if (data == 'ok') {
        location.reload();
      } else {
        alert('Cart update failed, please try again.');
      }
    });
  }