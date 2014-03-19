function show_processos_usuario(table_array){

  if (table_array.length <= 0){
        $("#tabela_processos_usuario").html("<em>Nenhum processo cadastrado.</em>");
        return false;
    }

    var table = '<table class="table table-striped table-bordered">'
          + '<thead>'
            + '<tr>'
              + '<th>Processo</th>'
              + '<th>Tribunal</th>'
                    + '<th>Situação</th>'
                    + '<th>Cliente</th>'
                    + '<th>Ações</th>'
                + '</tr>'
              + '</thead>'
              + '<tbody>';

    for (var i = 0; i < table_array.length; i++) {

      row = table_array[i];

        table += '<tr>'
                + '<td>' + row['numeroProcesso'] + '</td>'
                + '<td>' + row['tribunal'] + '</td>'
                + '<td>' + row['situacao'] + '</td>'
                + '<td>' + row['cliente'] + '</td>'
                + '<td width=250>'
                + '<a class="btn btn-info btn-xs" href="detalhes.php?numeroProcesso=' + row['numeroProcesso'] + '">Detalhes</a>'
                + ' '
                + '<a class="btn btn-primary btn-xs" href="#">Editar</a>'
                + ' '
                + '<a class="btn btn-danger btn-xs" href="delete.php?id=' + row['id'] + '">Deletar</a>'
                + '</td>'
                + '</tr>';
    }

    table += '</tbody></table>';
    $("#tabela_processos_usuario").html(table);
}