@extends("master",['title' => 'เกี่ยวกับ'])
@section('style')
 {{HTML::style('css/about.css')}}
 @stop
@section('content')

  <section id='cover'>
   <div class='cover'>
    <div class='coverBackground'></div>

    <div class='logo'>
{{ HTML::image('img/logo4.png', 'ของกินของขวัญ') }}
    <!-- <h1>ของกินของขวัญ</h1> -->
    <h1>"คิดถึงของกิน คิดถึงของกินของขวัญ"</h1>
  </div> 
</section>
<section id='container'>

  <div class='historical'>
    <h1>ประวัติความเป็นมา</h1>
    <p>เนื่องจากเพื่อนๆมักจะเข้ามาถามหาร้านของกินกับขวัญฤทัย ขวัญฤทัยจึงเปิดเป็นเพจใน facebook ชื่อเพจของกินของขวัญ ซึ่งเป็นเพจรวบรวมร้านอาหารที่น่าสนใจและร้านอาหารที่ขวัญฤทัยเคยไปชิม แต่หลังจากที่เปิดเพจของกินของขวัญแล้ว พบว่ายังมีเพื่อนๆเข้ามาสอบถามหาร้านของกินอยู่ดี เพื่อลดภาระในการตอบคำถามและเพื่อความสะดวกสบายรวดเร็ว จึงมีความคิดที่จะเปิดเป็นเว็บแอพพลิเคชันที่มีลักษณะเป็น expert system ที่คอยแนะนำร้านอาหารให้กับผู้ที่สนใจ</p>
  </div>
  
  <div class='function'>
    <h1>คุณสมบัติ</h1>
    <div class='detail'>
      {{ HTML::image('img/fancy.png') }}
      <h2>รีวิวอาหาร</h2>
      <p>สามารถอ่านรีวิวอาหารได้จากลิงค์บทความที่มีการไปชิมแล้วได้</p>
    </div>
    <div class='detail'>
      {{ HTML::image('img/contacts.png')}}
      <h2>Live Chat</h2>
      <p>มีระบบ live chat สามารถพูดคุยขอคำแนะนำในกรณีที่ขวัญฤทัยออนไลน์อยู่ได้โดยตรง</p>
    </div>
    <div class='detail'>
      {{ HTML::image('img/messages.png')}}
      <h2>Robot Chat</h2>
      <p>ในกรณีที่ขวัญฤทัยไม่อยู่ สามารถสอบถามข้อมูลร้านอาหารกับขวัญฤบอท (โรบอทตอบคำถาม) แทนได้นะ</p>
    </div>
    <div class='detail'>
      {{ HTML::image('img/maps2.png')}}
      <h2>แผนที่</h2>
      <p>แสดงแผนที่ร้านอาหารที่ขวัญฤทัยแนะนำเพื่อให้ไปถึงได้อย่างง่ายดาย</p>
    </div>
    
  </section> 
@stop