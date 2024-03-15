const currentUrl = window.location.origin;
var staticData = [
    { "Quote": "Q1", "Product": "Product A", "Business": "Business A", "Policy": "Policy A", "Premium": "$1000", "Status": "Active", "Updated": "2023-01-01" },
    { "Quote": "Q2", "Product": "Product B", "Business": "Business B", "Policy": "Policy B", "Premium": "$1500", "Status": "Inactive", "Updated": "2023-02-01" },
    { "Quote": "Q3", "Product": "Product C", "Business": "Business C", "Policy": "Policy C", "Premium": "$1200", "Status": "Active", "Updated": "2023-03-01" },
    // Add more data as needed
];

// Users datatable
var userstable = $('#users').DataTable({
    ajax: {
        url: url('user'),
        dataSrc: '',
    },
    columns: [
        {
            data: 'id',
            render: function (data, type, row, meta) {
                return meta.row + 1;
            }
        },
        { data: 'name' },
        { data: 'email' },
        { data: 'status' },
        { data: 'country' },
        { data: 'created_at' },
        { data: 'updated_at' },
        {
            data: 'actions',
            render: function (data, type, row) {
                var actionsHtml = '<a href="' + data.edit + '" class="action-link"><span><i class="mdi mdi-grease-pencil"></i> </span></a>   <a class="action-link" href="' + data.delete + '"><span><i class="text-danger mdi mdi-delete-forever "</i></span></a>';
                // Add more actions as needed
                return actionsHtml;
            }
        }
    ],
    order: [[0, 'asc']],
    paging: false,
    ordering: true,
    info: false,
    filter: false,
    select: {
        style: 'os',
        selector: 'td:first-child'
    }
});


// Users datatable
var productstable = $('#products').DataTable({
    "data": staticData,
    "columns": [
        { "data": "Quote" },
        { "data": "Product" },
        { "data": "Business" },
        { "data": "Policy" },
        { "data": "Premium" },
        { "data": "Status" },
        { "data": "Updated" },
        {
            "className": 'actions',
            "orderable": false,
            "data": null,
            "defaultContent": '<a href="#" class="edit"><span><i class="mdi mdi-grease-pencil"> mdi mdi-grease-pencil</i>  Edit</span </a> / <a href="#" class="delete"><span><i class="mdi mdi-delete-forever">mdi mdi-delete-forever</i> Delete</span></a>'
        }
    ],
    "order": [[1, 'asc']],
    "paging": false,
    "ordering": true,
    "info": false,
    "filter": false,
    columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
    }],
    select: {
        style: 'os',
        selector: 'td:first-child'
    }
});

// $('#example tbody').on('click', 'td.details-control', function () {
//     var tr = $(this).closest('tr');
//     var row = table.row(tr);

//     if (row.child.isShown()) {
//         // This row is already open - close it
//         row.child.hide();
//         tr.removeClass('shown');
//     }
//     else {
//         // Open this row
//         row.child(format(row.data())).show();
//         tr.addClass('shown');
//     }
// });


function format(d) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="width:100%;">' +
        '<tr class="expanded-row">' +
        '<td colspan="8" class="row-bg"><div><div class="d-flex justify-content-between"><div class="cell-hilighted"><div class="d-flex mb-2"><div class="mr-2 min-width-cell"><p>Policy start date</p><h6>25/04/2020</h6></div><div class="min-width-cell"><p>Policy end date</p><h6>24/04/2021</h6></div></div><div class="d-flex"><div class="mr-2 min-width-cell"><p>Sum insured</p><h5>$26,000</h5></div><div class="min-width-cell"><p>Premium</p><h5>$1200</h5></div></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Quote no.</p><h6>Incs234</h6></div><div class="mr-2"><p>Vehicle Reg. No.</p><h6>KL-65-A-7004</h6></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Policy number</p><h6>Incsq123456</h6></div><div class="mr-2"><p>Policy number</p><h6>Incsq123456</h6></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-3 d-flex"><div class="highlighted-alpha"> A</div><div><p>Agent / Broker</p><h6>Abcd Enterprices</h6></div></div><div class="mr-2 d-flex"> <img src="../../images/faces/face5.jpg" alt="profile"/><div><p>Policy holder Name & ID Number</p><h6>Phillip Harris / 1234567</h6></div></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Branch</p><h6>Koramangala, Bangalore</h6></div></div><div class="expanded-table-normal-cell"><div class="mr-2 mb-4"><p>Channel</p><h6>Online</h6></div></div></div></div></td>'
    '</tr>' +
        '</table>';
}

function url(path, api = true) {
    let pathname = '';
    if (api) {
        pathname = '/api/' + path
    } else {
        pathname = '/admin/' + path
    }
    return currentUrl + pathname;
}