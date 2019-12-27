@extends('layouts.header')
@section('content')

<div id="app">
    <div class="dropdown mb-3" >
        <button class="btn btn-outline-secondary dropdown-toggle" id="statusButton"type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-filter"></i>
            選擇狀態
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item statusItem" href="#"> <i class="fa fa-circle" name="Wait" style="color:#FFC107;"></i>排件中</a>
          <a class="dropdown-item statusItem" href="#"> <i class="fa fa-circle" name="Develop"style="color:#42d242;"></i>開發中</a>
          <a class="dropdown-item statusItem" href="#"> <i class="fa fa-circle" name="complete"></i>已完成</a>
        </div>
      </div>

        <table id="orderTable"class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">目前狀態</th>
                    <th scope="col">申請人員</th>
                    <th scope="col">廣告專案</th>
                    <th scope="col">廣告形式</th>
                    <th scope="col">公版/非公版</th>
                    <th scope="col">客製化說明</th>
                    <th scope="col">數量</th>
                    <th scope="col">申請時間</th>
                    <th scope="col">負責PM</th>
                    <th scope="col">負責RD</th>
                    <th scope="col">更新</th>
                  </tr>
                </thead>

          </table>
           
          <div class="modal fade" id="updateOrder" tabindex="-1" role="dialog" aria-labelledby="updateOrderLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="updateOrderLabel">訂單資料</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                      <div class="form-group">
                          <label for="recipient-name" class="col-form-label">訂單編號</label>
                          <p id="orderNumber"></p>
                        </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">申請人員</label>
                      <input type="text" class="form-control" id="upDateOrderName">
                    </div>
                    <div>
                        
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">目前狀態</label>
                      <select id="upDateStatus" class="form-control custom-select" required>
                        <option value="">請選擇狀態</option>
                        <option value="0">排件中</option>
                        <option value="1">開發中</option>
                        <option value="2">已完成</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">專案名稱</label>
                      <input type="text" class="form-control" id="upDateProjectName">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">廣告形式</label>
                      <input type="text" class="form-control" id="updateAdForm">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">公版/非公版</label>
                      <input type="text" class="form-control" id="upDateTemplate">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">數量</label>
                      <input type="text" class="form-control" id="upDateNumber">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">PM</label>
                      <input type="text" class="form-control" id="upDatePM">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">負責RD</label>
                      <select name="upDateRD"  id="upDateRD"class="form-control custom-select" required>
                        <option value="">請指派人員</option>
                        <option value="Henry">Henry</option>
                        <option value="Peter">Peter</option>
                      </select>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" id="formClose"class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" id="upDateButton"class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
    </div>
<script>
    var getData = "{{route('getdateOrders',['id'=>'__rowId__'])}}"; 
    var upData = "{{route('updateOrders',['id'=>'__rowId__'])}}";
    $('body').on("click",'.statusItem',function(e){
      // console.log(e.target.childNodes[1]);
      // document.getElementById("statusButton").append(e.target.childNodes[1]);
      console.log(e);
      
      console.log(e.currentTarget.childNodes[1].attributes[1].nodeValue);
      
    });

    $(document).ready(function() {

     $table = $('#orderTable').DataTable({
        "processing": true,
        "serverSide": true,
        "pageLength": 10,
        "ajax": {
            "url": '{{ route("getOrders") }}',
            "type": "POST",
            "data": {
              "_token": '{{csrf_token()}}',
              
            }
        },
        "columns": [          
          { data:"id" },
          { data:"name" },
          { data:"project" },
          { data:"adForm" },
          { data:"template" },
          { data:"description" },
          { data:"number" },
          { data:"created_at" },
          { data:"principalPM" },
          { data:"principalRD" },
          { 
            "data":"id",
            "orderable": false,
            "defaultContent":"",
            "width":"10%",
            "render": function(data,type,row,meta){                   
                  let b = getData.replace("__rowId__",data);
                  return data = `
                  <div class="dataList" data-id="${data}" data-route="${ b }" data-toggle="modal" data-target="#updateOrder">
                  <button class="btn btn-info btn-sm" >
                  <i class="fa fa-pencil">Edit</i>
                  </button>
                  </div>`;
              } 
                   
          },

        ]
      
    });
    
    $('body').on('click', '.dataList', function(e) {
      var number =e.currentTarget.attributes[1].value;
      let b = getData.replace("__rowId__",number)
      $.ajax({
         url: b,
         success: function(response) {               
            document.getElementById("orderNumber").innerHTML=number;  
            document.getElementById("upDateOrderName").value=response.data.name;
            document.getElementById("upDateProjectName").value=response.data.project;
            document.getElementById("upDateStatus").value=response.data.status;
            document.getElementById("updateAdForm").value=response.data.adForm;
            document.getElementById("upDateTemplate").value=response.data.template;
            document.getElementById("upDateNumber").value=response.data.number;
            document.getElementById("upDatePM").value=response.data.principalPM;
            document.getElementById("upDateRD").value=response.data.principalRD;
         }

      }); 

    })
    $('body').on('click', '#upDateButton', function(e) {
      let upDateName = document.getElementById("upDateOrderName").value;
      let number = document.getElementById("orderNumber").innerHTML;
      let project = document.getElementById("upDateProjectName").value
      let adForm = document.getElementById("updateAdForm").value;
      let template = document.getElementById("upDateTemplate").value;
      let orderNumber = document.getElementById("upDateNumber").value;
      let PM = document.getElementById("upDatePM").value;
      let RD = document.getElementById("upDateRD").value;
      let upDateStatus = document.getElementById("upDateStatus").value;
      let b = upData.replace("__rowId__",number);
      $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    
      $.ajax({
          type: "put",
          url: b,
          data: {
            "id":number,
            "upDateName":upDateName,
            'project': project,
            'adForm': adForm,
            'template': template,
            'orderNumber': orderNumber,
            'PM': PM,
            'RD': RD,
            'upDateStatus':upDateStatus,
              "_token": '{{csrf_token()}}',
          },
         success: function(data) { 
          $table.draw();
          $('#formClose').click();
         }

      }); 

    })
   
});

</script>

@endsection