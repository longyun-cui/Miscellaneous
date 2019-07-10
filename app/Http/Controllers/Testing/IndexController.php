<?php

namespace App\Http\Controllers\Testing;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Image;

use App\Models\RootTesting;

class IndexController extends Controller
{
    //
    private $service;
    private $repo;
    public function __construct()
    {
    }


    public function seo_youbangyun()
    {
        $post_data['content'] = json_encode(request()->all());
//        dd($post_data);

        $mine = new RootTesting;
        $bool = $mine->fill($post_data)->save();
        if($bool) echo 1;
        else echo 2;
    }


    public function seo_youbangyun_get()
    {

        $data = RootTesting::select("*")->get();

        $dataX = array();
        foreach ($data as $k => $v) {
            $dataX[$k] = json_decode($v->content,true);
        }

        dd($dataX);
    }

    public function image()
    {
        $string = 'The quick brown fox 你好 over the lazy dog.';
        $encode = mb_detect_encoding($string, array("ASCII","UTF-8","GB2312","GBK","BIG5"));
//        dd($encode);

        $string = utf8_encode('The quick brown fox 你好 <br> over the lazy dog.');
//        dd($string);

//        $de = file_exists(public_path().'/fonts/Apple Braille Pinpoint 8 Dot.ttf');
//        dd($de);

//        $img->text('The quick brown \r\n fox jumps over the lazy dog.');

        $font_file = public_path().'/fonts/huawenkaiti.ttf';
        $font_2 = public_path().'/fonts/huawenkaiti.ttf';

        $img = Image::canvas(400, 500, '#fafafa');

//        $string1 = "上海如哉网络科技有限公司技术支持";
//        $img->text($string1, 100, 100, function($font) {
//            $font->file(public_path().'/fonts/huawenkaiti.ttf');
//            $font->size(16);
//            $font->color('#111');
//            $font->align('center');
//            $font->valign('top');
//            $font->angle(45);
//        });


        $type = '活动';
        $img->text($type, 200, 50, function($font) use ($font_file) {
            $font->file($font_file);
            $font->size(16);
            $font->color('#111');
            $font->align('center');
            $font->valign('bottom');
        });

        $points1 = array(
            30,  60,  // Point 1 (x, y)
            370,  60, // Point 2 (x, y)
            30,  60,  // Point 3 (x, y)
        );
        $img->polygon($points1, function ($draw) {
            $draw->background('#0000ff');
            $draw->border(1, '#000');
        });


        $title = "2017天津How I Treat和淋巴瘤转化医学国际研讨会";
        $title = $this->autowrap(16, 0, $font_file, $title, 280); // 自动换行处理
        $img->text($title, 200, 100, function($font) use ($font_file) {
            $font->file($font_file);
            $font->size(24);
            $font->color('#111');
            $font->align('center');
            $font->valign('top');
        });

        $qrcode = Image::make(storage_path('/resource/org/1/unique/articles/qrcode_article_1c0305df.png'));
        $img->insert($qrcode, 'bottom-right',120, 80);

        $logo = Image::make(storage_path('/resource/org/1/common/logo/bad6e5419672af95690d4664fb849961.png'));
        $logo->resize(40, 40);

        // define polygon points
        $points = array(
            1,  1,  // Point 1 (x, y)
            39,  1, // Point 2 (x, y)
            39,  39,  // Point 3 (x, y)
            1, 39,  // Point 4 (x, y)
        );
        $logo->polygon($points, function ($draw) {
//            $draw->background('#0000ff');
            $draw->border(1, '#ffffff');
        });
        $img->insert($logo, 'bottom-right',180, 140);

        $org_name = "上海如哉网络科技有限公司";
        $img->text($org_name, 200, 450, function($font) use ($font_file) {
            $font->file($font_file);
            $font->size(16);
            $font->color('#111');
            $font->align('center');
            $font->valign('top');
        });

        return $img->response('png');

//        $text="2017天津How I Treat和淋巴瘤转化医学国际研讨会";//显示的文字
//        $size=12;//字体大小
//        $font=public_path().'/fonts/huawenkaiti.ttf';//字体类型，这里为黑体，具体请在windows/fonts文件夹中，找相应的font文件
//        $img=imagecreate(200,44);//创建一个长为500高为16的空白图片
//        imagecolorallocate($img,0xff,0xff,0xff);//设置图片背景颜色，这里背景颜色为#ffffff，也就是白色
//        $black=imagecolorallocate($img,0x00,0x00,0x00);//设置字体颜色，这里为#000000，也就是黑色
//        imagettftext($img,$size,0,0,16,$black,$font,$text);//将ttf文字写到图片中
//        header('Content-Type: image/png');//发送头信息
//        imagepng($img);//输出图片，输出png使用imagepng方法，输出gif使用imagegif方法


//        header ("Content-type: image/png");
//        mb_internal_encoding("UTF-8"); // 设置编码
//
//        $bg = imagecreatetruecolor(300, 300); // 创建画布
//        $black = imagecolorallocate($bg, 0, 0, 0); // 创建白色
//        $white = imagecolorallocate($bg, 255, 255, 255); // 创建白色
//        $text = "前段时间练习使用 PHP 的 GD 库时，为了文本的";
//
//        $text = $this->autowrap(16, 0, $font_face, $text, 280); // 自动换行处理
//// 若文件编码为 GB2312 请将下行的注释去掉
//// $text = iconv("GB2312", "UTF-8", $text);
//        imagettftext($bg, 16, 0, 10, 30, $white, $font_face, $text);
//        imagepng($bg);
//        imagedestroy($bg);

    }

    public function autowrap($font_size, $angle, $font_face, $string, $width)
    {
//        这几个变量分别是 字体大小, 角度, 字体名称, 字符串, 预设宽度
        $content = "";

        // 将字符串拆分成一个个单字 保存到数组 letter 中
        for ($i=0;$i<mb_strlen($string);$i++)
        {
            $letter[] = mb_substr($string, $i, 1);
        }

        foreach ($letter as $l)
        {
            $test_str = $content." ".$l;
            $test_box = imagettfbbox($font_size, $angle, $font_face, $test_str);

            // 判断拼接后的字符串是否超过预设的宽度
            if (($test_box[2] > $width) && ($content !== ""))
            {
                $content .= "\n";
            }
            $content .= $l;
        }
        return $content;
    }


    public function write_log(){

//设置目录时间

        $years = date('Y-m');

//设置路径目录信息

        $url  = './public/log/texlog/'.$years.'/'.$years.'_request_log.txt';

//取出目录路径中目录(不包括后面的文件)

        $dir_name = dirname($url);

//如果目录不存在就创建

        if(!file_exists($dir_name)) {

//iconv防止中文乱码

            $res = mkdir(iconv("UTF-8","GBK",$dir_name),0777,true);

        }

//$fp = fopen($url,"a");//打开文件资源通道 不存在则自动创建

        fwrite($fp,var_export($data,true)."\r\n");//写入文件

        fclose($fp);//关闭资源通道

    }



}
