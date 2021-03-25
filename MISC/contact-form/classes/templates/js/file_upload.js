  function form_submited(form) {
    var form_data = new FormData(form)

    var data = {
        action: 'my_action',
        security : MyAjax.security
      };

    for (var pair of form_data.entries()) {
        console.log(pair[0] + ': ' + pair[1])
        data[pair[0]] = pair[1]
    }

    $.post(MyAjax.ajaxurl, data, function(response) {
        alert(response);
      });
    

  }


  $('.dpicker').datepicker({
    autoClose: true
    })