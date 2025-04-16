$(function () {

  $('#compraSelect').on('change', function () {
      const id = $(this).val();
      if (!id) return;

      $.getJSON('/PlataformaPagos/Controller/PrincipalController.php',
                { accion: 'saldo', id: id })
       .done(res => {
          $('#saldoAnterior').val(res.saldo);
          validarAbono();
       });
  });


  $('#abono').on('input', validarAbono);

  function validarAbono () {
      const saldo = parseFloat($('#saldoAnterior').val()) || 0;
      const abono = parseFloat($('#abono').val()) || 0;

      if (abono > 0 && abono <= saldo) {
          $('#abono').removeClass('is-invalid');
          $('#btnAbonar').prop('disabled', false);
      } else {
          $('#abono').addClass('is-invalid');
          $('#btnAbonar').prop('disabled', true);
      }
  }
});
