export default function() {

    $(window).on('load', function() {
        
        $.ajax({
          url: 'https://jsonplaceholder.typicode.com/users',
          type: 'GET',
          dataType: 'json',
          success: function(data) {
            $.each(data, function(index, item) {
              if (/\(|\)/.test(item.phone)) { // verifica se o telefone possui algum caractere de parênteses
                $('#employees tbody').append('<tr><td>' + item.name + '</td><td>' + item.phone + '</td><td>' + item.email + '</td></tr>');
              }
            });
          },
          error: function(xhr, status, error) {
            console.log('Erro ao obter dados dos funcionários: ' + error.message);
          }
        });
        
    });
}