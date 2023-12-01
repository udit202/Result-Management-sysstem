let modal_div = document.getElementById("add");
        let close_btn = document.getElementById("close_btn");
        let open_addmodal_btn = document.getElementsByClassName('add_emp');
        function close_modal() {

            close_btn.addEventListener('click', function () {
                modal_div.style.display = "none";
                // modal_div.classList.toggle('close_div');

            })
        }
        function open_modal() {
            i = 0;
            while (i < open_addmodal_btn.length) {
                open_addmodal_btn[i].addEventListener('click', function () {
                    modal_div.style.display = "block";
                })
                i++;
            }
        }
        function notification() {
            let btn = document.getElementById("not_btn");
            btn.addEventListener('click', function () {
                let noti_div = document.getElementsByClassName('noti_div')
                i = 0;
                while (i < noti_div.length) {
                    noti_div[i].style.display = 'none';
                    i++;
                }
            })
        }
        function fetchdata() {
            let btn_add_Emp = document.getElementsByClassName('add_emp');
            // console.log(btn_add_Emp);
            i = 0;
            while (i < btn_add_Emp.length) {

                btn_add_Emp[i].addEventListener('click', function (e) {
                    let tr = e.target.parentNode.parentNode;
                    let Emp_id = tr.getElementsByTagName('td')[4].innerHTML;
                    let Emp_name = tr.getElementsByTagName('td')[0].innerHTML;
                    let Mobile_no = tr.getElementsByTagName('td')[1].innerHTML;
                    let Email = tr.getElementsByTagName('td')[2].innerHTML;
                    let password = tr.getElementsByTagName('td')[3].innerHTML;
                    let Emp_id_inp = document.getElementById('Request_id').value = Emp_id;
                    let Emp_name_inp = document.getElementById('regUsername').value = Emp_name;
                    let Emp_mobile_inp = document.getElementById('Mobile').value = Mobile_no;
                    let Emp_Email_inp = document.getElementById('regEmail').value = Email;
                    let Emp_password_inp = document.getElementById('regPassword').value = password;
                    // console.log(Emp_id,Emp_name,Mobile_no,Email,password,c_password);
                })
                i++;
            }

        }
        
        function open_req_del_modal() {
            let open_btn = document.getElementsByClassName('Req_del');
            let del_modal = document.getElementById('del_modal');
            i = 0;
            while (i < open_btn.length) {
                open_btn[i].addEventListener('click', function () {
                    del_modal.style.display = "block";
                })
                i++;
            }

        }
        function close_del_modal() {
            let close_del_modal_btn = document.getElementById('del_modal_close_btn');
            let cancel_del_btn = document.getElementById('cancel_del_btn');
            let del_modal = document.getElementById('del_modal');
            close_del_modal_btn.addEventListener('click', function () {
                del_modal.style.display = "none";
                // modal_div.classList.toggle('close_div');

            })
            cancel_del_btn.addEventListener('click', function () {
                del_modal.style.display = "none";
                // modal_div.classList.toggle('close_div');

            })
        }
        function fetch_for_del_req_modal(){
            let fetch_btn = document.getElementsByClassName('Req_del');
            i=0;
            while(i<fetch_btn.length){
                fetch_btn[i].addEventListener('click', function(e){
                    let tr = e.target.parentNode.parentNode;
                    let Emp_name = tr.getElementsByTagName('td')[0].innerHTML;
                    let Mobile_no = tr.getElementsByTagName('td')[1].innerHTML;
                    let input_del_mobile = document.getElementById('del_mobile').value = Mobile_no;
                    let name = document.getElementById('del_name').innerText = Emp_name;
                    console.log(name);
                    
                })
                i++;
            }
        }
        open_req_del_modal();   
        fetch_for_del_req_modal();
        close_del_modal()
        fetchdata();
        open_modal();
        close_modal();
        notification();
