// после готовности документа
$(document).ready(function () {
  // загрузить первый тест
  $('#load-test1').click(function (event) {
    getTest(1)
  });

  // загрузить второй тест
  $('#load-test2').click(function (event) {
    getTest(2)
  });

  // загрузить третий тест
  $('#load-test3').click(function (event) {
    getTest(3)
  });

  function getTest(testId) {
    let testUri = 'http://lab4.local:8080/api/v1/test' + testId
    $.ajax({
      type: "GET",
      url: testUri,
      contentType: "application/json",
      cache: true,
      processData: false,
      success: function (data, status, xhr) {
        // если успешно
        if (xhr.status === 200) {
          try {
            let responseText = JSON.parse(xhr.responseText)
            document.getElementById("Sd").value = responseText['Sd'];
            document.getElementById("Sh").value = responseText['Sh'];
            document.getElementById("T").value = responseText['T'];
            document.getElementById("Wmean").value = responseText['Wmean'];
            document.getElementById("Wmax").value = responseText['Wmax'];
            document.getElementById("Wmin").value = responseText['Wmin'];
            document.getElementById("dt").value = responseText['dt'];
            document.getElementById("p").value = responseText['p'];
            document.getElementById("Tpr").value = responseText['Tpr'];
          }
          catch (e) {
            alert('Что-то пошло не так - попробуйте позже');
          }
        }
        // иначе что-то пошло не так
        else {
          swal('Что-то пошло не так - попробуйте позже');
        }
      },
      // при ошибке со стороны сервера
      error: function (xhr) {
        swal('Что-то пошло не так - попробуйте позже');
      },
    });
  }

  // очистить данные
  $('#clear-button').click(function (event) {
    document.getElementById("Sd").value = '';
    document.getElementById("Sh").value = '';
    document.getElementById("T").value = '';
    document.getElementById("Wmean").value = '';
    document.getElementById("Wmax").value = '';
    document.getElementById("Wmin").value = '';
    document.getElementById("dt").value = '';
    document.getElementById("p").value = '';
    document.getElementById("Tpr").value = '';
    document.getElementById("Q").value = '';
    document.getElementById("P").value = '';
    document.getElementById("b").value = '';
    document.getElementById("S").value = '';
    document.getElementById("K").value = '';
    document.getElementById("sigma").value = '';
  });

  // обработчик формы с исходными данными
  $('#source-form').submit(function (event) {
    // получаем форму
    let sourceForm = $('#source-form');
    // перехватываем стандартное поведение формы - блокируем отправку
    event.preventDefault();
    // получаем данные формы
    let formDataJson = {};
    let formData = new FormData(this)
    // формируем ассоциативный массив
    formData.forEach(function (value, key) {
      formDataJson[key] = value;
    });
    $.ajax({
      type: "POST",
      url: 'http://lab4.local:8080/api/v1/solve',
      data: JSON.stringify(formDataJson),
      contentType: "application/json",
      cache: false,
      processData: false,
      // если запрос успено отправлен
      success: function (data, status, xhr) {
        if (xhr.status === 200) {
          try {
            let responseText = JSON.parse(xhr.responseText)
            document.getElementById("Q").value = responseText['Q'];
            document.getElementById("P").value = responseText['P'];
            document.getElementById("b").value = responseText['b'];
            document.getElementById("S").value = responseText['S'];
            document.getElementById("K").value = responseText['K'];
            document.getElementById("sigma").value = responseText['sigma'];
          }
          catch (e) {
            alert('Что-то пошло не так - попробуйте позже');
          }
        }
        // иначе что-то пошло не так
        else {
          swal('Что-то пошло не так - попробуйте позже');
        }
      },
      // при ошибке со стороны сервера
      error: function (xhr) {
        swal('Что-то пошло не так - попробуйте позже');
      },
    });
  });
});
