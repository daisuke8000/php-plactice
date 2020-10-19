<?php

function validation($data){
    
$error = [];
//name
    if (empty($data['your_name']) || 20 < mb_strlen($data['your_name'])){
        $error[] = 'NAME : 氏名は20文字以内で入力してください。';
    }
//gender
    if(!isset($data['gender'])){
        $error[] = 'Gender : 性別は必須項目です。';
    }
//mailaddress
    if(empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
        $error[] = 'EMAIL : メールアドレスを正しい形式でご入力下さい。';
    }
//url
    if(empty($data['url'])){
        if(!filter_var($data['url'], FILTER_VALIDATE_URL)){
            $error[] = 'HomePage : ホームページは正しい形式で入力して下さい。';
        }
    }
    
//age
    if(empty($data['age']) || $data['age'] > 6){
        $error[] = 'Age : 選択されていません。';
    }
    
//contact
    if (empty($data['contact']) || 200 < mb_strlen($data['contact'])){
        $error[] = 'Detail : 詳細内容は100文字以内で入力してください。';
    }
//cation
    if ($data['caution'] !== '1') {
        $error[] = 'Cation : 注意事項をご確認下さい。';
    }
    
    return $error;
    
}

?>