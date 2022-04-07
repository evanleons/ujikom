$('#example').DataTable( {
    data:           dataList,
    deferRender:    true,
    scrollX:        true,
    scrollY:        200,
    scrollCollapse: true,
    scroller:       true,
    searching:      false,
    paging:         true,
    info:           false,
    columns: [
            { title: "ID", data: "ID" },
            { title: "First Name", data: "FirstName" },
            { title: "Change Summary", data: "LastName"},
            { title: "Details", data: "Details" },
            { title: "Country", data: "Country" }
        ],
        columnDefs: [
            {
                render: function (data, type, full, meta) {
                    return "<div class='text-wrap width-200'>" + data + "</div>";
                },
                targets: 3
            }
         ]
} );
