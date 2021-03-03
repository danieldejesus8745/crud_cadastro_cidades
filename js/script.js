function deleteCity(id) {
    $confirmation = confirm('Confirma exclusão do registro?\nClique em "OK" para confirmar ou clique em "Cancelar"');
    if ($confirmation === true) {
        window.location.href = `app/model/delete-city.php?id=${id}`;
    } else {
        window.location.href = 'index.php';
    }
}