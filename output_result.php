<?php
date_default_timezone_set('Asia/Tokyo');

include_once "lib/eiseXLSX/eiseXLSX.php";

$row_no = "3";
$result = array(
    'status' => 'error',
    'msg' => 'エラーが発生しました。',
    'no' => 1,
    'info' => array()
);

$excel_directory_path = "output";

if(isset($_GET["user_data"]) && $_GET["user_data"] != ""){
    $user_data = $_GET["user_data"];
    $row_no = 3;
    if(is_dir($excel_directory_path)){
        foreach(scandir($excel_directory_path) as $key => $file_name){
            $xls_file_path = $excel_directory_path."/".$file_name;
            if(is_file($xls_file_path)){
                $path_parts = pathinfo($xls_file_path);
                if($path_parts['extension'] == 'xlsx'){
                    try { 
                        $xlsx = new eiseXLSX($xls_file_path);
                    } catch(eiseXLSX_Exception $e) {
                        $result = array(
                            'status' => 'error',
                            'msg' => 'xlsxファイルの読み込みに失敗しました。',
                            'no' => $row_no-2,
                            'info' => array()
                        );                        
                        echo(json_encode($result));
                        exit;
                    }

                    //output selected content to the Sheet1---------------------------------------------->
                    // row_noを得る。
                    while($xlsx->data("B".$row_no) != ""){
                        $row_no ++;
                    }

                    // 現在の時刻を得る。
                    $cur_time = date("Y/n/j H:i:s");
                    
                    $answer_array = explode("____", $user_data);

                    // 変更情報をexcelファイルへの書き込みである。
                    $xlsx->data("B".$row_no, $cur_time); // 更新時間書くならない。
                    $xlsx->data("C".$row_no, str_replace("@@@@", ", ", $answer_array[0]));
                    $xlsx->data("D".$row_no, str_replace("@@@@", ", ", $answer_array[1]));
                    $xlsx->data("E".$row_no, str_replace("@@@@", ", ", $answer_array[2]));
                    $xlsx->data("F".$row_no, str_replace("@@@@", ", ", $answer_array[3]));
                    $xlsx->data("G".$row_no, str_replace("@@@@", ", ", $answer_array[4]));
                    $xlsx->data("H".$row_no, str_replace("@@@@", ", ", $answer_array[5]));
                    $xlsx->data("I".$row_no, str_replace("@@@@", ", ", $answer_array[6]));
                    $xlsx->data("J".$row_no, str_replace("@@@@", ", ", $answer_array[7]));
                    $xlsx->data("K".$row_no, str_replace("@@@@", ", ", $answer_array[8]));
                    $xlsx->data("L".$row_no, str_replace("@@@@", ", ", $answer_array[9]));
                    $xlsx->data("M".$row_no, str_replace("@@@@", ", ", $answer_array[10]));
                    $xlsx->data("N".$row_no, str_replace("@@@@", ", ", $answer_array[11]));
                    $xlsx->data("O".$row_no, str_replace("@@@@", ", ", $answer_array[12]));
                    $xlsx->data("P".$row_no, str_replace("@@@@", ", ", $answer_array[13]));
                    $xlsx->data("Q".$row_no, str_replace("@@@@", ", ", $answer_array[14]));
                    $xlsx->data("R".$row_no, str_replace("@@@@", ", ", $answer_array[15]));
                    $xlsx->data("S".$row_no, str_replace("@@@@", ", ", $answer_array[16]));
                    $xlsx->data("T".$row_no, str_replace("@@@@", ", ", $answer_array[17]));
                    $xlsx->data("U".$row_no, str_replace("@@@@", ", ", $answer_array[18]));
                    $xlsx->data("V".$row_no, str_replace("@@@@", ", ", $answer_array[19]));
                    $xlsx->data("W".$row_no, str_replace("@@@@", ", ", $answer_array[20]));
                    $xlsx->data("X".$row_no, str_replace("@@@@", ", ", $answer_array[21]));

                    $xlsx->Output($xls_file_path, "F"); // ファイルを保存する。
                }
            }
        }
    }
}

if(isset($_GET["user_data_value"]) && $_GET["user_data_value"] != ""){
    $user_data_value = $_GET["user_data_value"];
    $row_no = 3;
    if(is_dir($excel_directory_path)){
        foreach(scandir($excel_directory_path) as $key => $file_name){
            $xls_file_path = $excel_directory_path."/".$file_name;
            if(is_file($xls_file_path)){
                $path_parts = pathinfo($xls_file_path);
                if($path_parts['extension'] == 'xlsx'){
                    try { 
                        $xlsx = new eiseXLSX($xls_file_path);
                    } catch(eiseXLSX_Exception $e) {
                        $result = array(
                            'status' => 'error',
                            'msg' => 'xlsxファイルの読み込みに失敗しました。',
                            'no' => $row_no-2,
                            'info' => array()
                        );                        
                        echo(json_encode($result));
                        exit;
                    }
                    //output selected content to the Sheet2--------------------------------------------->
                    $xlsx->selectSheet(2);
                    while($xlsx->data("B".$row_no) != ""){
                        $row_no ++;
                    }

                    // 現在の時刻を得る。
                    $cur_time = date("Y/n/j H:i:s");
                    
                    $answer_array = explode("____", $user_data_value);

                    // 変更情報をexcelファイルへの書き込みである。
                    $xlsx->data("B".$row_no, $cur_time); // 更新時間書くならない。
                    $xlsx->data("C".$row_no, str_replace("@@@@", ", ", $answer_array[0]));
                    $xlsx->data("D".$row_no, str_replace("@@@@", ", ", $answer_array[1]));
                    $xlsx->data("E".$row_no, str_replace("@@@@", ", ", $answer_array[2]));
                    $xlsx->data("F".$row_no, str_replace("@@@@", ", ", $answer_array[3]));
                    $xlsx->data("G".$row_no, str_replace("@@@@", ", ", $answer_array[4]));
                    $xlsx->data("H".$row_no, str_replace("@@@@", ", ", $answer_array[5]));
                    $xlsx->data("I".$row_no, str_replace("@@@@", ", ", $answer_array[6]));
                    $xlsx->data("J".$row_no, str_replace("@@@@", ", ", $answer_array[7]));
                    $xlsx->data("K".$row_no, str_replace("@@@@", ", ", $answer_array[8]));
                    $xlsx->data("L".$row_no, str_replace("@@@@", ", ", $answer_array[9]));
                    $xlsx->data("M".$row_no, str_replace("@@@@", ", ", $answer_array[10]));
                    $xlsx->data("N".$row_no, str_replace("@@@@", ", ", $answer_array[11]));
                    $xlsx->data("O".$row_no, str_replace("@@@@", ", ", $answer_array[12]));
                    $xlsx->data("P".$row_no, str_replace("@@@@", ", ", $answer_array[13]));
                    $xlsx->data("Q".$row_no, str_replace("@@@@", ", ", $answer_array[14]));
                    $xlsx->data("R".$row_no, str_replace("@@@@", ", ", $answer_array[15]));
                    $xlsx->data("S".$row_no, str_replace("@@@@", ", ", $answer_array[16]));
                    $xlsx->data("T".$row_no, str_replace("@@@@", ", ", $answer_array[17]));
                    $xlsx->data("U".$row_no, str_replace("@@@@", ", ", $answer_array[18]));
                    $xlsx->data("V".$row_no, str_replace("@@@@", ", ", $answer_array[19]));
                    $xlsx->data("W".$row_no, str_replace("@@@@", ", ", $answer_array[20]));
                    $xlsx->data("X".$row_no, str_replace("@@@@", ", ", $answer_array[21]));
                    
                    $xlsx->Output($xls_file_path, "F"); // ファイルを保存する。
                }
            }
        }
    }
}
?>