<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ResturantTableSeeder');
	}
}
class ResturantTableSeeder extends Seeder {

	public function run()
	{
		$resturantNames = [ 'Katsu King DIGITAL GATEWAY',' Kaizen Sushi & Hibachiราชเทวี','AkiyoshiSiam Square One','The Red Sun Thailand Tokpokki','โชคดีติ่มซำถนนบรรทัดทอง','skip','Unna Cake im park','eden'];
		$maps = ['13.7455103,100.5332882','null','13.745051,100.53388','13.743919,100.532679','13.743704,100.523721','13.735393,100.5267','null','13.734997,100.527001'];
		$reviews = ['สำหรับโปรโมชั่น ลด 50% 10 เมนู นับว่าคุ้มมากๆ เพราะมีทั้งชาเขียวรัฟิล และไอติม1ลูกเพิ่มเข้ามาในชุด ที่สั่งไปเป็น หมูบดปรุงรสทอด ราชาติก็มาตราฐาน กรอบ ใช้ได้ น้ำสลัดที่ให้มาก็ดี โดยรวมราคาร้อยนิดๆคือคุ้มสุดๆ ตรงที่มีทั้งน้ำและของหวานเนี่ยแหละ','กินร้านนี้บ่อยมากกกกกกกกกก มาทุกทีก็ไม่พลาด sexy roll ปลาสดอร่อย โรลทำดีสวยงาม',
		'สุกี้น้ำดำแบบบุฟเฟต์ พอเนื้อมาถึง พนักงานจะถามว่าอยากให้ผัดให้หรือใส่น้ำลงต้มเลย ทดลองให้ผัดให้ การผัดก็จะเริ่มจากใส่ผัดลงไปในหม้อที่มีน้ำมัน ให้ผักเกรียมๆ และลงเนื้อสัตว์ให้เกรียมๆหน่อย ก่อนจะเทน้ำซุปลงไป การผัดก่อนทำให้หอมมากขึ้นเยอะ อร่อยมาก','ร้านอาหารแฟรนไชน์นำเข้าจากเกาหลีโดยดาราดัง อาหารหลักคือ ต็อกต้มรวมกะเครื่องคล้ายๆสุกี้ มีหลายรูปแบบให้เลือก อาหารเด็ดคือต้มต็อก ข้าวผัด3หน้า และไก่ทอด' 
		,'ตึ่มซำโดยเฉลี่ยเช่งละ30บาท ส่วนมากก็จะกินพร้อมกับเก็กฮวยรีฟิล ของอื่นๆนอกจากตึ่มซำก็จะมีพวก บักกุเต๋ เวลาสั่งก็ต้องระวังๆเดี๋ยวสั่งเพลิน พวกของทอดกรอบร้อนอร่อยดี ทอดมาใหม่ๆ','skip เป็นร้านอาหารญี่ปุ่น - อื่นๆ ที่ถูกและดีและคุ้มและอร่อย เมนูที่ถูกและโดนใจคือข้าวหน้าไก่โตเกียว45บาท แต่ปกติมักจะสั่งเซตแซลมอนเทริยากิมากกว่า 100กว่าบาท ชาเขียวรีฟิลของที่นี่มีน้ำหวานให้พร้อม อาหารพวกหมูย่างบางทีจะเหนียว แต่ถ้าสั่งพวกทอดจะอร่อยมาก ข้าวปั้นรสชาติพอใช้'
		,'เครปเค้กถูกและดี ชิ้นละ45บาท','ร้านไก่ทอดที่มีดีที่ของทานเล่น ปกติไม่ค่อยได้สั่งเซตข้าว ปกติสั่งแต่ของทานเล่น เช่น ไก่ทอดดาวลูกไก่ จะเป็นไก่ทอด7ชิ้นเล็กๆกับซอส7แบบของร้าน ซึ่งคุ้มมาก และยังมีเซตไก่ทอดอีกด้วย'];
		$images=['http://photo.wongnai.com/photos/2014/10/10/b37a4f9c61fe4502b619b04221b1d7b7-s.jpg',
		'http://photo.wongnai.com/photos/2014/08/29/219893dfa2724bbb9784d8f3a75d64dd-s.jpg',
		'http://photo.wongnai.com/photos/2014/07/28/c9caa12a315f4093afb836b354ba8173-s.jpg',
		'http://photo.wongnai.com/photos/2014/07/28/71dcfb645296437ba762c53bc9109f75-s.jpg',
		'http://photo.wongnai.com/photos/2014/10/10/a51585aeaa5b4c22bc2b004e961dc92f-s.jpg',
		'http://photo.wongnai.com/photos/2014/07/16/790bc279192543d3a3a29f3f61f97c8f-s.jpg',
		'http://photo.wongnai.com/photos/2014/10/10/ceabdbcdfe8a42f6a3ae1e02d2d3bc45-s.jpg',
		'http://photo.wongnai.com/photos/2014/10/10/3aa6cbb5b8494f2b8401a47507b7fc3d-s.jpg'];
		$types=['คาว','คาว','คาว','คาว','คาว','คาว','หวาน','คาว'];
		$subtypes=['ญี่ปุ่น','ญี่ปุ่น','ชาบู','อื่นๆ','จีน','ญี่ปุ่น','null','อื่นๆ'];
		$sections=['สยาม','สยาม','สยาม','สยาม','สามย่าน','สามย่าน','สามย่าน','สามย่าน'];


		for ($i=0; $i <8 ; $i++) { 
			$resturant = new Resturant;  
			$resturant->resturantName =$resturantNames[$i];
			$resturant->map =$maps[$i];
			$resturant->review =$reviews[$i];
			$resturant->image =$images[$i];
			$resturant->type =$types[$i];
			$resturant->subtype =$subtypes[$i];
			$resturant->section =$sections[$i];
			$resturant->save();
			if(! $resturant->save()) {
				Log::info('Unable to create resturant '.$resturant->resturantName);
			} else {
				Log::info('Created resturant "'.$resturant->resturantName);
			}

		}
	}
}	