
  $("#cmdRegresar").click(function () {
    var action = $(this).attr('data-action');
    var path = $("#path").val();
    $("#frm1").attr('action', path + action);
    document.getElementById("frm1").submit();
  });

  function clickBtn(id, action, ruta, frm) {
    try{
        
      var path = $("#path").val();
      if (action == "delete") {
          var r = confirm(unescape("¿Desea eliminar el registro?"));
          if (r == false) {
              return false;
          }
      }
      $("#idReg").val(id);
      $("#Action").val(action);
      $("#" + frm).attr('action', path + ruta);
      $("#" + frm).submit();
    }catch(e){alert(e);}

  }

  $(".cmdDesplegarChange").click(function () {
    var dataTableID = $(this).attr("data-tableid");
    var path = $("#path").val();
    $.ajax({
      url: path + "includes/ajax/desplegarChange.php",
      data: {
        dataTableID: dataTableID,
      },
      type: "POST",
      dataType: "json",
    });
  });
  
  $(".imgPrincipal").click(function () {
    var dataTableID = $(this).attr("data-tableid");
    var path = $("#path").val();
    activar = 0;
    if ($(this).is(":checked")) {
      activar = 1;
    }

    $.ajax({
      url: path + "includes/ajax/updateIMGTable.php",
      data: {
        dataTableID: dataTableID,
        activar: activar,
      },
      type: "POST",
      dataType: "json",
    });
  });

  $(".pdfPrincipal").click(function () {
    var dataTableID = $(this).attr("data-tableid");
    var path = $("#path").val();
    activar = 0;
    if ($(this).is(":checked")) {
      activar = 1;
    }

    $.ajax({
      url: path + "includes/ajax/updatePDFTable.php",
      data: {
        dataTableID: dataTableID,
        activar: activar,
      },
      type: "POST",
      dataType: "json",
    });
  });

  $(".viewTable").click(function () {
    var dataType = $(this).attr("data-type");
    var dataFieldID = $(this).attr("data-fieldid");
    var dataTableID = $(this).attr("data-tableid");
    var path = $("#path").val();
    activar = 0;
    if ($(this).is(":checked")) {
      activar = 1;
    }

    $.ajax({
      url: path + "includes/ajax/updateView.php",
      data: {
        dataFieldID: dataFieldID,
        dataTableID: dataTableID,
        activar: activar,
        dataType: dataType,
      },
      type: "POST",
      dataType: "json",
    });
  });

  $(".txtNameFiell").blur(function () {
    var dataFieldID = $(this).attr("data-fieldid");
    var namFiled = $(this).val();
    var path = $("#path").val();
    $.ajax({
      url: path + "includes/ajax/updateNamFille.php",
      data: {
        dataFieldID: dataFieldID,
        namFiled: namFiled,
      },
      type: "POST",
      dataType: "json",
    });
  });
  $(".txtNumFile").blur(function () {
    var dataTableID = $(this).attr("data-tableid");
    var numFile = $(this).val();
    var path = $("#path").val();
    $.ajax({
      url: path + "includes/ajax/updateNumFiles.php",
      data: {
        dataTableID: dataTableID,
        numFile: numFile,
      },
      type: "POST",
      dataType: "json",
    });
  });
  $(".txtNameEntity").blur(function () {
    var dataTableID = $(this).attr("data-tableid");
    var newName = $(this).val();
    var path = $("#path").val();
    $.ajax({
      url: path + "includes/ajax/updateNameEntity.php",
      data: {
        dataTableID: dataTableID,
        newName: newName,
      },
      type: "POST",
      dataType: "json",
    });
  });









