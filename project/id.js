function user(length){
    let $User_id='';
    const cha='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const chalen=cha.length;
    let counter=0;
    while(counter<length){
        $User_id=$User_id+cha.charAt(Math.floor(Math.random()*chalen));
        counter=counter+1;
    };
    return $User_id;
}
let id = user(5);
let $admin = document.getElementById('admin');
$admin.value = id;
