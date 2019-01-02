<?php
namespace app\home\command;
use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\Db;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/**
 * 友情链接
 * Class Link
 * @package app\console\Command
 */
class Email extends Command
{
    protected $mail;
    protected function configure()
    {
        $this->setName('email')->setDescription('Here is Email');
    }
    protected function execute(Input $input, Output $output, $time = 0)
    {
        $this->mail = new PHPMailer(true);
            //halt($pc_count);
            try {
            // 服务器设置
            $this->mail->Charset='UTF-8';
            $this->mail->SMTPDebug = 2;                                    // 开启Debug
            $this->mail->isSMTP();                                        // 使用SMTP
            $this->mail->Host = 'smtp.163.com';                        // 服务器地址
            $this->mail->SMTPAuth = true;                                    // 开启SMTP验证
            $this->mail->Username = 'tingyumomo@163.com';                // SMTP 用户名（你要使用的邮件发送账号）
            $this->mail->Password = 'zimomo521';                                // SMTP 密码
            /*$this->mail->SMTPSecure = 'tls';                                // 开启TLS 可选
            $this->mail->Port = 25; */
            $this->mail->SMTPSecure = 'ssl';
            $this->mail->Port = 465;                                       // 端口
            $this->mail->setFrom('tingyumomo@163.com', '天堂一枝花');
            $this->mail->addAddress('yulimail163@163.com');        // 添加一个收件人
            $this->mail->addAddress('18363857053@163.com');        // 添加一个收件人
            //$this->mail->addAddress('23275429@qq.com');                        // 可以只传邮箱地址
            $this->mail->addReplyTo('tingyumomo@163.com');        // 回复地址
            // $this->mail->addCC('cc@example.com');
            // $this->mail->addBCC('bcc@example.com');
            // 附件
            //$this->mail->addAttachment($path.$filename.".xlsx");                // 添加附件
            //$this->mail->addAttachment('/tmp/image.jpg', 'new.jpg');            // 可以设定名字
            // 内容
            //$this->mail->isHTML(true);                                        // 设置邮件格式为HTML
            $this->mail->Subject = '你是猪吗？';
            $this->mail->Body    = '猪，你的鼻子有两个孔';
            $this->mail->AltBody = '猪吗？';
            $this->mail->send();
            $output->writeln("发送成功");
            //echo '邮件发送成功。<br>';
        } catch (Exception $e) {
            $output->writeln("发送失败");
            echo 'Mailer Error: ' . $this->mail->ErrorInfo;
        }  
            
        $output->writeln("over");
    }
     

}