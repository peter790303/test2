function add_div() {

                   
    var div = document.createElement("div");
    div.className = "container-fluid";
    div.style.height = "300px";
    div.style.marginTop="3rem";
    /*編輯set按鈕*/
    var setdiv =document.createElement('div');
    setdiv.style.width="100%";
    setdiv.id="setdiv";
    setdiv.className="setdiv_container";
    setdiv.style.display="flex";
    setdiv.style.justifyContent="flex-end";
    // setdiv.style.position="absolute";
    // setdiv.style.top="0px";
    // setdiv.style.left="-15px";
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
    setbtn_a_1.className="dropdown-item edit container";
    setbtn_a_1.innerText="編輯";
    setbtn_a_1.setAttribute("data-toggle","modal");
    setbtn_a_1.setAttribute("data-target","#exampleModal");
    var setbtn_a_2 = document.createElement("a");
    setbtn_a_2.className="dropdown-item clear container";
    setbtn_a_2.innerText="刪除";
    div.appendChild(setdiv);
    setdiv.appendChild(setbtn);
    setbtn.appendChild(setbtn_a);
    setbtn.appendChild(setbtn_div);
    setbtn_div.appendChild(setbtn_a_1);
    setbtn_div.appendChild(setbtn_a_2);
    /*編輯set按鈕*/





    var btn_Div = document.createElement("div");
    btn_Div.id = "add_btn";
    btn_Div.style.textAlign = "center";

    var btn0 = document.createElement("a");
    btn0.className = "btn btn-outline-primary row_1";
    btn0.setAttribute('onclick', 'add_row();');
    btn0.innerText = "row_1";

    var btn1 = document.createElement("a");
    btn1.className = "btn btn-outline-primary row_2";
    btn1.setAttribute('onclick', 'add_row();');
    btn1.innerText = "row_2";

    var btn2 = document.createElement("a");
    btn2.className = "btn btn-outline-primary row_3";
    btn2.setAttribute('onclick', 'add_row();');
    btn2.innerText = "row_3";

    var btn3 = document.createElement("a");
    btn3.className = "btn btn-outline-primary row_5_7";
    btn3.setAttribute('onclick', 'add_row();');
    btn3.innerText = "row_5_7";

    var btn4 = document.createElement("a");
    btn4.className = "btn btn-outline-primary row_7_5";
    btn4.setAttribute('onclick', 'add_row();');
    btn4.innerText = "row_7_5";

    document.getElementById("main").appendChild(div);
    div.appendChild(btn_Div);
    btn_Div.appendChild(btn0);
    btn_Div.appendChild(btn1);
    btn_Div.appendChild(btn2);
    btn_Div.appendChild(btn3);
    btn_Div.appendChild(btn4);
 var nub =document.getElementsByClassName("container-fluid").length;

    for(var i=0 ;i < nub;i++)
        {
            
            document.getElementsByClassName("container-fluid")[i].id="con"+i;
            document.getElementsByClassName("container-fluid")[i].setAttribute("data-id","Lv"+i);
            document.getElementsByClassName("dropdown-item edit container")[i].id="setbtn_edit"+i;
            document.getElementsByClassName("dropdown-item edit container")[i].setAttribute("data-id","Lv"+i);
            document.getElementsByClassName("dropdown-item clear container")[i].id="setbtn_delet"+i;
          
          var container_i=   document.getElementById("con"+i);
          var setbtnedit_i=  document.getElementById("setbtn_edit"+i);
          var setbtndelet_i=  document.getElementById("setbtn_delet"+i);
          console.log();
          
        }
 
        container_i.removeEventListener("click",add_div);
/*刪除container-fluid*/
    setbtndelet_i.addEventListener("click",function(){
        event.toElement.parentElement.parentElement.parentElement.parentElement.remove();
    },false);
/*刪除container-fluid*/

/*編輯container-fluid*/

    setbtnedit_i.addEventListener("click",function(){
            
            var now_container_mt= event.toElement.parentElement.parentElement.parentElement.parentElement.style.marginTop;  
                document.getElementById("mt").value=now_container_mt;
                
                container_setbtn_edit_session=this; //觸發塞到全域變數
                container_session=this.parentElement.parentElement.parentElement.parentElement; 
                // console.log(b);
                 
            },false);
/*編輯container-fluid*/
}

/*更新資料表單*/

function a123(e)
        {
            var session_container= container_setbtn_edit_session.getAttribute("data-id");
            var session_setbtnedit =container_session.getAttribute("data-id");
                
            if(session_container == session_setbtnedit)
                {
                    container_session.style.marginTop=document.getElementById("mt").value;
                }  

                
            }  
/*更新資料表單*/