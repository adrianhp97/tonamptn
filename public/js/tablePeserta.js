$(function () {
  $('#table').bootstrapTable({
      idField: 'name',
      url: '/getPeserta',
      queryParams: 'queryParams',
      pagination: 'true',
      pageList: '[5,10,15,20]',
      pageSize: 10,
      showColumns: 'true',
      showToggle: 'true',
      search: 'true',
      columns: [{
          field: 'no_peserta',
          title: 'No. Peserta',
          sortable: 'true'
      }, {
          field: 'nama',
          title: 'Nama Peserta',
          sortable: 'true'
      }, {
          field: 'asal_sekolah',
          title: 'Asal Sekolah',
          sortable: 'true'
      }, {
          field: 'login',
          title: 'Login',
          sortable: 'true'
      }]
  });
});