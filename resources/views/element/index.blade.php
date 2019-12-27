<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/menutest/menutest.css') }}">
    <script src="{{ URL::asset('js/menutest/menutest.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/imageupload/imageupload.css') }}">
    <script src="{{ URL::asset('js/imageupload/imageupload.js') }}"></script><!--照片-->
    <script src="{{ URL::asset('js/add_div/add_div.js') }}"></script><!--增加按鈕-->
    <script src="{{ URL::asset('js/edit_css/edit_css.js') }}"></script><!--編輯css-->
</head>

<body>
    <!--彈出視窗-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action=""method="">
                          <label for="">margin-top</label>
                        <input  id="mt" type="text" value="">
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" id="form_submit" class="btn btn-primary"onclick="a123(this)">Save changes</button>
                    </div>
                  </div>
                </div>
         </div> 


         <div class="modal fade" id="element_css" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Element_Css</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action=""method="">
                        <label for="">width</label>
                        <input  id="css_edit_width" type="text" value=""><br>
                        <label for="">height</label>
                        <input  id="css_edit_height" type="text" value=""><br>
                        <label for="">標題</label>
                        <input  id="css_edit_h1" type="text" value="">


                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" id="form_submit" class="btn btn-primary"onclick="edit_css(this)">Save changes</button>
                    </div>
                  </div>
                </div>
         </div> 
     <!--彈出視窗-->
    
    <div style="position:fixed; bottom:0px;width:100%;display:flex;justify-content:center;">
        <button id="add_div" onclick="add_div();">＋</button>

    </div>
    <div id="main"style="width:100%;">
    </div>
    {{-- menu--}}
    <div class="div"></div>
     <div id="menu" class="menu-inner" data-role="drag-drop-container" style="z-index:10;">
                <div class="hamburger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
     <div id="Element-email" class="Element-email"draggable="true" style="width:100px;height:100px;background-image:url(//cdn.doublemax.net/image/creative/20190214/template-email-subscribe-form-vector-illustration-submit-website-letter-banner-icon-91828037.jpg);background-position: center center;  background-repeat: no-repeat;background-size: cover;">
        <p style="position:relative;top:100px;color:black;text-align:center"> E-mail</p>
    </div>
    <div id="Element-image" class="Element-image" draggable="true"  style="width:100px;height:100px;position: absolute;top:0;right:60px;background-image:url(//cdn.doublemax.net/image/creative/20190214/template-email-subscribe-form-vector-illustration-submit-website-letter-banner-icon-91828037.jpg);background-position: center center;  background-repeat: no-repeat;background-size: cover;">
        <p style="position:relative;top:100px;color:black;text-align:center"> Image</p>
    </div>
    <div id="text_h1" class="text_h1" draggable="true"  style="width:100px;height:100px;position: absolute;top:160px;left:0px;background-image:url(//cdn.doublemax.net/image/creative/20190214/template-email-subscribe-form-vector-illustration-submit-website-letter-banner-icon-91828037.jpg);background-position: center center;  background-repeat: no-repeat;background-size: cover;">
      <p style="position:relative;top:100px;color:black;text-align:center"> 標題</p>
  </div>
     {{-- menu--}}
     </div>
    {{csrf_field()}}
</body>
<script>

    var container_session="";
    var container_setbtn_edit_session="";
    var element_select="";
    var file_img="";/*file照片*/
    var img_edit_btn="";
    var img_x="";

    function add_row() 
     {

            var container_tag = event.toElement.parentElement.parentElement;
            var add_btn_tag = event.toElement.parentElement;
            var x = event.toElement.className;
        
            switch (x) 
         {
                case 'btn btn-outline-primary row_1': /*一欄*/
                    var add_row = document.createElement('div');
                    add_row.className="row";
                    var row_div = document.createElement('div');
                    row_div.className="col";
                    row_div.style.width="100%";
                    row_div.style.height="300px";
                    row_div.style.border = "1px #ccc dashed";
                    row_div.setAttribute("data-role", "drag-drop-container");
                    container_tag.appendChild(add_row);
                    add_row.appendChild(row_div);
                    add_btn_tag.style.display = "none";
                break;

                case 'btn btn-outline-primary row_2':/*一行兩欄*/
                    var add_row = document.createElement('div');
                    add_row.className = "row";
                    var col_6 = document.createElement('div');
                    col_6.className = "col-md-6";
                    var col_6_1 = document.createElement('div');
                    col_6_1.className = "col-md-6 ";
                    var col_6_div = document.createElement('div');
                    col_6_div.style.width = "100%";
                    col_6_div.style.height = "300px";
                    col_6_div.style.border = "1px #ccc dashed";
                    col_6_div.className = "col_6_div";
                    col_6_div.setAttribute("data-role", "drag-drop-container");

                    var col_6_1_div = document.createElement('div');
                    col_6_1_div.style.width = "100%";
                    col_6_1_div.style.height = "300px";
                    col_6_1_div.style.border = "1px #ccc dashed";
                    col_6_1_div.className = "col_6_div";
                    col_6_1_div.setAttribute("data-role", "drag-drop-container");
                    container_tag.appendChild(add_row);
                    add_row.appendChild(col_6);
                    add_row.appendChild(col_6_1);
                    col_6.appendChild(col_6_div);
                    col_6_1.appendChild(col_6_1_div);
        
                    // console.log(add_btn_tag);


                    add_btn_tag.style.display = "none";
                    break;
                case 'btn btn-outline-primary row_3':/*一行三欄*/
                    var add_row = document.createElement('div');
                    add_row.className = "row";
                    var col_6 = document.createElement('div');
                    col_6.className = "col-md-4";
                    var col_6_1 = document.createElement('div');
                    col_6_1.className = "col-md-4";
                    var col_6_2 = document.createElement('div');
                    col_6_2.className = "col-md-4";
                    var col_6_div = document.createElement('div');
                    col_6_div.style.width = "100%";
                    col_6_div.style.height = "300px";
                    col_6_div.style.border = "1px #ccc dashed";
                    col_6_div.className = "col_6_div";
                    col_6_div.setAttribute("data-role", "drag-drop-container");
                    var col_6_1_div = document.createElement('div');
                    col_6_1_div.style.width = "100%";
                    col_6_1_div.style.height = "300px";
                    col_6_1_div.style.border = "1px #ccc dashed";
                    col_6_1_div.className = "col_6_div";
                    col_6_1_div.setAttribute("data-role", "drag-drop-container");
                    var col_6_2_div = document.createElement('div');
                    col_6_2_div.style.width = "100%";
                    col_6_2_div.style.height = "300px";
                    col_6_2_div.style.border = "1px #ccc dashed";
                    col_6_2_div.className = "col_6_div";
                    col_6_2_div.setAttribute("data-role", "drag-drop-container");
                    container_tag.appendChild(add_row);
                    add_row.appendChild(col_6);
                    add_row.appendChild(col_6_1);
                    add_row.appendChild(col_6_2);
                    col_6.appendChild(col_6_div);
                    col_6_1.appendChild(col_6_1_div);
                    col_6_2.appendChild(col_6_2_div);
                    // console.log(add_btn_tag);


                    add_btn_tag.style.display = "none";
                    break;

                    case 'btn btn-outline-primary row_5_7':/*一行兩欄*/
                    var add_row = document.createElement('div');
                    add_row.className = "row";
                    var col_6 = document.createElement('div');
                    col_6.className = "col-md-5";
                    var col_6_1 = document.createElement('div');
                    col_6_1.className = "col-md-7 ";
                    var col_6_div = document.createElement('div');
                    col_6_div.style.width = "100%";
                    col_6_div.style.height = "300px";
                    col_6_div.style.border = "1px #ccc dashed";
                    col_6_div.className = "col_6_div";
                    col_6_div.setAttribute("data-role", "drag-drop-container");

                    var col_6_1_div = document.createElement('div');
                    col_6_1_div.style.width = "100%";
                    col_6_1_div.style.height = "300px";
                    col_6_1_div.style.border = "1px #ccc dashed";
                    col_6_1_div.className = "col_6_div";
                    col_6_1_div.setAttribute("data-role", "drag-drop-container");
                    container_tag.appendChild(add_row);
                    add_row.appendChild(col_6);
                    add_row.appendChild(col_6_1);
                    col_6.appendChild(col_6_div);
                    col_6_1.appendChild(col_6_1_div);
                
                    add_btn_tag.style.display = "none";
                    break;
                    case 'btn btn-outline-primary row_7_5':/*一行兩欄*/
                    var add_row = document.createElement('div');
                    add_row.className = "row";
                    var col_6 = document.createElement('div');
                    col_6.className = "col-md-7";
                    var col_6_1 = document.createElement('div');
                    col_6_1.className = "col-md-5 ";
                    var col_6_div = document.createElement('div');
                    col_6_div.style.width = "100%";
                    col_6_div.style.height = "300px";
                    col_6_div.style.border = "1px #ccc dashed";
                    col_6_div.className = "col_6_div";
                    col_6_div.setAttribute("data-role", "drag-drop-container");

                    var col_6_1_div = document.createElement('div');
                    col_6_1_div.style.width = "100%";
                    col_6_1_div.style.height = "300px";
                    col_6_1_div.style.border = "1px #ccc dashed";
                    col_6_1_div.className = "col_6_div";
                    col_6_1_div.setAttribute("data-role", "drag-drop-container");
                    container_tag.appendChild(add_row);
                    add_row.appendChild(col_6);
                    add_row.appendChild(col_6_1);
                    col_6.appendChild(col_6_div);
                    col_6_1.appendChild(col_6_1_div);
        
                    add_btn_tag.style.display = "none";
                    break;

            }
     
  

                var dragSources = document.querySelectorAll('[draggable="true"]')
                dragSources.forEach(dragSource => {
                    dragSource.addEventListener('dragstart', dragStart)
                    
                })

                var dropTargets = document.querySelectorAll('[data-role="drag-drop-container"]')
                dropTargets.forEach(dropTarget => {
                    dropTarget.addEventListener('drop', dropped)
                    dropTarget.addEventListener('dragenter', cancelDefault)
                    dropTarget.addEventListener('dragover', cancelDefault)

                    dropTarget.removeAttribute("data-role")/*removeAttribute 移除參數*/
                })
         
                function cancelDefault(e) {
                    e.preventDefault()
                    
                    e.stopPropagation()
                
                    return false
                }

                function dragStart(e) {
            
                    
                    
                    e.dataTransfer.setData('text/plain', e.target.id)
                    sourceContainerId = this.parentElement.id
                    // console.log(this);
                    element_select = this.className;
                    
                }
                
            function dropped(e) 
            {
      
                if (this.id !== sourceContainerId)
                 {
                    cancelDefault(e)
             
                    
                    // console.log(this);
                    //表單送出
                  
                    // console.log(element_select);
                      switch(element_select)
                      {
                         case 'Element-email':
                                var form= document.createElement('form');
                                form.method="POST";
                                form.className="Emailform"
                                form.action="{{url('/element/sendmail')}}";
                                var form_ipt= document.createElement('input');
                                form_ipt.type="hidden";
                                form_ipt.name="_token";
                                var token = document.getElementsByName('_token')[0].value;
                                form_ipt.value=token;
                                var form_div= document.createElement('div');
                                form_div.className="form-group";

                                var form_label = document.createElement('label');
                                form_label.innerText="email";
                                var form_input = document.createElement('input');
                                form_input.type="text";
                                form_input.id="email";
                                form_input.name="email";
                                form_input.className="form-control";
                                var form_label_2 = document.createElement('label');
                                form_label_2.innerText="subject";
                                var form_input_2 = document.createElement('input');
                                form_input_2.type="text";
                                form_input_2.id="subject";
                                form_input_2.name="subject";
                                form_input_2.className="form-control";
                                var form_label_3 = document.createElement('label');
                                form_label_3.innerText="message";
                                var form_input_3 = document.createElement('input');
                                form_input_3.type="text";
                                form_input_3.id="message";
                                form_input_3.name="message";
                                form_input_3.className="form-control";
                                var form_sumbit= document.createElement('input');
                                form_sumbit.type="submit";
                                form_sumbit.value="message send";
                                form_sumbit.className="btn btn-success";

                                event.toElement.appendChild(form);
                                form.appendChild(form_div);
                                form.appendChild(form_ipt);
                                form_div.appendChild(form_label);
                                form_div.appendChild(form_input);
                                form_div.appendChild(form_label_2);
                                form_div.appendChild(form_input_2);
                                form_div.appendChild(form_label_3);
                                form_div.appendChild(form_input_3);
                                form.appendChild(form_sumbit);
                                //表單---結束

                                /*編輯set按鈕*/
                                var setdiv =document.createElement('div');
                                setdiv.style.width="100%";
                                setdiv.id="setdiv";
                                setdiv.className="setdiv";
                                setdiv.style.display="flex";
                                setdiv.style.position="absolute";
                                setdiv.style.top="0px";
                                setdiv.style.left="-15px";
                                setdiv.style.justifyContent="flex-end";
                                var setbtn =document.createElement('div');
                                setbtn.id="setbtn";
                                setbtn.className="btn-group dropleft";
                                setbtn.style.height="25px";
                                setbtn.style.width="25px";
                                setbtn.style.borderRadius="10px";
                                setbtn.style.backgroundPosition="center center";
                                setbtn.style.backgroundRepeat="no-repeat";
                                setbtn.style.backgroundSize="cover";
                                setbtn.style.backgroundImage="url(//cdn.doublemax.net/image/creative/20190212/c608f8d0582f331b1c0cb8d2c73b14749804.jpg)"
                                
                                var setbtn_a = document.createElement("a");
                                setbtn_a.className="btn dropdown-toggle";
                                setbtn_a.style.opacity="0.1";
                                setbtn_a.id="dropdownMenuLink";
                                setbtn_a.setAttribute("role","button");
                                setbtn_a.setAttribute("data-toggle","dropdown");
                                setbtn_a.setAttribute("aria-haspopup","true");
                                setbtn_a.setAttribute("aria-expanded","false");

                                var setbtn_div =document.createElement("div");
                                setbtn_div.className="dropdown-menu";

                                var setbtn_a_1 = document.createElement("a");
                                setbtn_a_1.className="dropdown-item edit";
                                setbtn_a_1.innerText="編輯";
                                var setbtn_a_2 = document.createElement("a");
                                setbtn_a_2.className="dropdown-item email_clear";
                                setbtn_a_2.innerText="刪除";
                                event.toElement.appendChild(setdiv);
                                setdiv.appendChild(setbtn);
                                setbtn.appendChild(setbtn_a);
                                setbtn.appendChild(setbtn_div);
                                setbtn_div.appendChild(setbtn_a_1);
                                setbtn_div.appendChild(setbtn_a_2);
                                /*編輯set按鈕*/
                            
                            /*刪除Email表單*/
                                var a = document.getElementsByClassName("dropdown-item email_clear").length;
                                var b= document.querySelectorAll(".dropdown-item.email_clear");
                                
                                function deleat_email(){
                                  this.parentElement.parentElement.parentElement.parentNode.getElementsByClassName("Emailform")[0].remove();
                                  this.parentElement.parentElement.parentElement.parentNode.getElementsByClassName("setdiv")[0].remove();
                                  
                                }
                                b.forEach(function(deleat){
                                deleat.removeEventListener("click",deleat_email,false);
                                deleat.addEventListener("click",deleat_email,true);  
                                });   
                            /*刪除Email表單*/

                            /*編輯Email表單*/
                                var a = document.getElementsByClassName("dropdown-item edit").length;
                                
                            
                                for(var i=0 ;i < a;i++){
                                var b= document.getElementsByClassName("dropdown-item edit")[i];
                
                                    
                                }
                                b.addEventListener("click",function(){
                                    
                                    },false);     
                            /*編輯Email表單*/    
                                break;
                         case 'Element-image':
                                var div_image = document.createElement('div');
                                div_image.className="userActions";
                                div_image.id="userActions";
                                var img_p =document.createElement('p');
                                img_p.innerText="Drag &amp; Drop Image";
                                var img_input=document.createElement('input');
                                img_input.type="file";
                                img_input.id="fileUpload";
                                var img = document.createElement('img');
                                img.id="imgPrime";
                                img.className="imgPrime";
                                   /*編輯set按鈕*/
                                var setdiv =document.createElement('div');
                                setdiv.style.width="100%";
                                setdiv.id="setdiv";
                                setdiv.className="setdiv";
                                setdiv.style.display="flex";
                                setdiv.style.position="absolute";
                                setdiv.style.top="0px";
                                setdiv.style.left="-15px";
                                setdiv.style.justifyContent="flex-end";
                                var setbtn =document.createElement('div');
                                setbtn.id="setbtn";
                                setbtn.className="btn-group dropleft";
                                setbtn.style.height="25px";
                                setbtn.style.width="25px";
                                setbtn.style.borderRadius="10px";
                                setbtn.style.backgroundPosition="center center";
                                setbtn.style.backgroundRepeat="no-repeat";
                                setbtn.style.backgroundSize="cover";
                                setbtn.style.backgroundImage="url(//cdn.doublemax.net/image/creative/20190212/c608f8d0582f331b1c0cb8d2c73b14749804.jpg)"
                                

                                var setbtn_a = document.createElement("a");
                                setbtn_a.className="btn dropdown-toggle";
                                setbtn_a.style.opacity="0.1";
                                setbtn_a.id="dropdownMenuLink";
                                setbtn_a.setAttribute("role","button");
                                setbtn_a.setAttribute("data-toggle","dropdown");
                                setbtn_a.setAttribute("aria-haspopup","true");
                                setbtn_a.setAttribute("aria-expanded","false");

                                var setbtn_div =document.createElement("div");
                                setbtn_div.className="dropdown-menu";

                                var setbtn_a_1 = document.createElement("a");
                                setbtn_a_1.className="dropdown-item edit_img";
                                setbtn_a_1.setAttribute("data-toggle","modal");
                                setbtn_a_1.setAttribute("data-target","#element_css")
                                setbtn_a_1.innerText="編輯";
                                var setbtn_a_2 = document.createElement("a");
                                setbtn_a_2.className="dropdown-item item-clear";
                                setbtn_a_2.innerText="刪除";
                                event.toElement.appendChild(setdiv);
                                setdiv.appendChild(setbtn);
                                setbtn.appendChild(setbtn_a);
                                setbtn.appendChild(setbtn_div);
                                setbtn_div.appendChild(setbtn_a_1);
                                setbtn_div.appendChild(setbtn_a_2);
                                /*編輯set按鈕*/
                        
                                event.toElement.appendChild(div_image);
                                div_image.appendChild(img_p);
                                div_image.appendChild(img_input);
                                event.toElement.appendChild(img);
                                a78();
                                var edit_imgs =document.getElementsByClassName("dropdown-item edit_img").length;

                               
                                
                                function css_edit(){
                                  this.setAttribute("data_imgedit_id","edit_img"+i);
                                    console.log(edit_img_tag);
                                    img_x =this.parentElement.parentElement.parentElement.parentElement.querySelectorAll("div > img")[0];                     
                                    img_edit_btn = this;
           
                                    
                                       var form_w_vale= document.getElementById("css_edit_width");
                                       var form_h_vale= document.getElementById("css_edit_height");

                                       form_w_vale.value=this.parentElement.parentElement.parentElement.parentElement.querySelectorAll("div > img")[0].style.width;
                                       form_h_vale.value=this.parentElement.parentElement.parentElement.parentElement.querySelectorAll("div > img")[0].style.height;

                                }
                                var edit_img_tag = document.querySelectorAll('.dropdown-item.edit_img');

                                edit_img_tag.forEach(function(elem) {
                                elem.removeEventListener("click", css_edit,false);
                                elem.addEventListener("click",css_edit,true);
                              });

                               /*刪除表單*/
                                var clear_length = document.getElementsByClassName("dropdown-item item-clear").length;

                                function clickimg(){
                                  console.log(this);
                                  this.parentElement.parentElement.parentElement.parentNode.querySelectorAll("div > img")[0].remove();
                                   this.parentElement.parentElement.parentElement.parentNode.getElementsByClassName("userActions")[0].remove();
                                   this.parentElement.parentElement.parentElement.parentNode.getElementsByClassName("setdiv")[0].remove();                                 
            
                                }

                                var clear_x = document.querySelectorAll('.dropdown-item.item-clear');

                                clear_x.forEach(function(bbb) {
                                bbb.removeEventListener("click", clickimg,false);
                                bbb.addEventListener("click",clickimg,true);
                              });
                             /*刪除表單*/
                                for(var i=0; i<document.getElementsByClassName('userActions').length;i++ )
                                {
                                    div_image.id="userActions"+i;
                                    img.id="imgPrime"+i;
                                    img_input.id="fileUpload"+i;
                                    document.getElementById("userActions"+i).querySelectorAll("input")[0].addEventListener("click",function(){  
                                        file_img=event.toElement;
          
                                    },false);
                                }
                                break;
                              

                                /*標題*/
                              case 'text_h1':
                                var txt_h1 = document.createElement('h1');
                                txt_h1.className="txt_h1";
                                txt_h1.id="txt_h1";
                                txt_h1.innerText="標題";
                                   /*編輯set按鈕*/
                                var setdiv =document.createElement('div');
                                setdiv.style.width="100%";
                                setdiv.id="setdiv";
                                setdiv.className="setdiv";
                                setdiv.style.display="flex";
                                setdiv.style.position="absolute";
                                setdiv.style.top="0px";
                                setdiv.style.left="-15px";
                                setdiv.style.justifyContent="flex-end";
                                var setbtn =document.createElement('div');
                                setbtn.id="setbtn";
                                setbtn.className="btn-group dropleft";
                                setbtn.style.height="25px";
                                setbtn.style.width="25px";
                                setbtn.style.borderRadius="10px";
                                setbtn.style.backgroundPosition="center center";
                                setbtn.style.backgroundRepeat="no-repeat";
                                setbtn.style.backgroundSize="cover";
                                setbtn.style.backgroundImage="url(//cdn.doublemax.net/image/creative/20190212/c608f8d0582f331b1c0cb8d2c73b14749804.jpg)"
                                

                                var setbtn_a = document.createElement("a");
                                setbtn_a.className="btn dropdown-toggle";
                                setbtn_a.style.opacity="0.1";
                                setbtn_a.id="dropdownMenuLink";
                                setbtn_a.setAttribute("role","button");
                                setbtn_a.setAttribute("data-toggle","dropdown");
                                setbtn_a.setAttribute("aria-haspopup","true");
                                setbtn_a.setAttribute("aria-expanded","false");

                                var setbtn_div =document.createElement("div");
                                setbtn_div.className="dropdown-menu";

                                var setbtn_a_1 = document.createElement("a");
                                setbtn_a_1.className="dropdown-item edit_h1";
                                setbtn_a_1.setAttribute("data-toggle","modal");
                                setbtn_a_1.setAttribute("data-target","#element_css")
                                setbtn_a_1.innerText="編輯";
                                var setbtn_a_2 = document.createElement("a");
                                setbtn_a_2.className="dropdown-item h1_clear";
                                setbtn_a_2.innerText="刪除";
                                event.toElement.appendChild(setdiv);
                                setdiv.appendChild(setbtn);
                                setbtn.appendChild(setbtn_a);
                                setbtn.appendChild(setbtn_div);
                                setbtn_div.appendChild(setbtn_a_1);
                                setbtn_div.appendChild(setbtn_a_2);
                                /*編輯set按鈕*/
                        
                                event.toElement.appendChild(txt_h1);
                     
                                var edit_h1 =document.getElementsByClassName("dropdown-item edit_h1").length;

                               
                                
                                function css_h1_edit(){
                                 
                                  this.setAttribute("data_h1_edit_id","edit_h1");
                                  console.log(this);
    
                                 var a= this.parentElement.parentElement.parentElement.parentNode.querySelectorAll('.txt_h1')[0].innerText;                             
                                    console.log(a);
                                    var form_h1_value = document.getElementById("css_edit_h1");
                                    form_h1_value.value= a;
                      
                                }
                                var edit_img_tag = document.querySelectorAll('.dropdown-item.edit_h1');

                                edit_img_tag.forEach(function(css_h1) {
                                css_h1.removeEventListener("click", css_h1_edit,false);
                                css_h1.addEventListener("click",css_h1_edit,true);
                                css_h1.removeEventListener("click", css_h1_edit,false);
                              });

                              

                               /*刪除表單*/
                                var clear_length = document.getElementsByClassName("dropdown-item h1_clear").length;

                                function clickh1(){
                                   this.parentElement.parentElement.parentElement.parentNode.getElementsByClassName("txt_h1")[0].remove();
                                   this.parentElement.parentElement.parentElement.parentNode.getElementsByClassName("setdiv")[0].remove();                                 
  
                                }

                                var clear_x = document.querySelectorAll('.dropdown-item.h1_clear');

                                clear_x.forEach(function(ckh1) {
                                ckh1.removeEventListener("click", clickh1,false);
                                ckh1.addEventListener("click",clickh1,true);
                              });
                             /*刪除表單*/
                                break;
                         }           
                 }
         }

     }       

</script>

