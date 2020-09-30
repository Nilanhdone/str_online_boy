@extends('layouts.mainreplyview')
@section('page_title', 'Reply view')
@section('content')

<div class="space-10"></div>
<!-- <div class="center animated fadeInDown">
  <img src="{{ url('images/amlio_logo.png') }}" width="140" style="margin-top: -10px;"/>
</div> -->
<div class="space-10"></div>
<!-- <div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('images/bg-images11.jpg'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ການເກັບກຳສະຖິຕິລາຍງານຕໍ່ເຈົ້າໜ້າທີ່ຕ່ຳຫຼວດ</strong> </h2>
  </blockquote>
</div> -->
<div class="row">

</div>
  <div class="row animated fadeInRight">
    <div class="col-xs-12 text-lo">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  		<div class="table-header" style="background-color: #98b9ce; background-image: url('images/bg-images11.jpg'); background-size: 100%;">
  			ບາງມາດຕາວ່າດ້ວຍ ການຕ້ານ ສະກັດກັ້ນ ການຟອກເງິນ ແລະ ການສະໜອງທຶນໃຫ້ແກ່ການກໍ່ການຮ້າຍ ສະບັບເລກທີ 50/ສພຊ ລົງວັນທີ 21 ກໍລະກົດ 2014 ທີ່ກ່ຽວກັບມາດຕະການຕ້ານ ສະກັດກັ້ນ ການຟອກເງິນ.
  		</div>

      <div style="background-color: #eee;">
        <div class="space-10"></div>
        <div class="col-sm-offset-1 col-sm-10">
          <strong>ມາດຕາ  22 ການເພີ່ມທະວີການເອົາໃຈໃສ່ລູກຄ້າ</strong>
          <p>ຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານຕ້ອງເອົາໃຈໃສ່ລູກຄ້າ ໃນກໍລະນີດັ່ງນີ້:</p>
          <ol>
            <li>ໃຫ້ການບໍລິການ ຫຼື ດຳເນີນທຸລະກຳກັບລູກຄ້າລາຍໃໝ່ຂອງຕົນ;</li>
            <li>ເຮັດທຸລະກຳເປັນບາງຄັ້ງ, ຄັ້ງດຽວ ຫຼື ຫຼາຍຄັ້ງ ທີ່ມີລັກສະນະພາໃຫ້ສົງໄສ;</li>
            <li>ມີທຸລະກຳທີ່ມີຄວາມສະຫຼັບສັບຊ້ອນ, ມີມູນຄ່າສູງ ແລະ ມີລັກສະນະຜິດປົກກະຕິ;</li>
            <li>ມີທຸລະກຳທີ່ສົງໄສວ່າເປັນການຟອກເງິນ ຫຼື ການສະໜອງທຶນໃຫ້ແກ່ການກໍ່ການຮ້າຍ;</li>
            <li>ມີຂໍ້ມູນໃນເອກະສານຢັ້ງຢືນກ່ຽວກັບລູກຄ້າບໍ່ຄົບຖ້ວນ ຫຼື ມີຂໍ້ສົງໄສວ່າບໍ່ຖືກຕ້ອງ.</li>
          </ol>
          <p>&nbsp;&nbsp;&nbsp;ນອກຈາກນີ້ ຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ ຕ້ອງເອົາໃຈໃສ່ລູກຄ້າຢ່າງຕໍ່ເນື່ອງ ເພື່ອຮັບປະກັນ ວ່າຂໍ້ມູນທີ່ລູກຄ້າສະໜອງໃຫ້ໃນເມື່ອກ່ອນນັ້ນ ຖືກຕ້ອງກັບຄວາມເປັນຈິງໃນປັດຈຸບັນ ແລະ ຮັບປະກັນວ່າການດຳເນີນທຸລະກຳ ຂອງລູກຄ້າ ແມ່ນ ຖືກຕ້ອງ ແລະ ສອດຄ່ອງກັບປະຫວັດ, ການດຳເນີນທຸລະກິດ ຂອງຜູ່ກ່ຽວ ລວມທັງການຊອກຮູ້ທີ່ມາຂອງທຶນ ຖ້າຫາກຈຳເປັນ.
          ຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ ຕ້ອງເອົາໃຈໃສ່ເປັນພິເສດຕໍ່ການພົວພັນທຸລະກິດ ຫຼື ເຮັດທຸລະກຳກັບ ບຸກຄົນ, ນິຕິບຸກຄົນ ຫຼື ການຈັດຕັ້ງ ຢູ່ປະເທດທີ່ບໍ່ມີລະບຽບກົດໝາຍກ່ຽວກັບການຕ້ານ ສະກັດກັ້ນ ການຟອກເງິນ ແລະ ການສະໜອງທຶນໃຫ້ແກ່ການກໍ່ການຮ້າຍ ຫຼື ມີແຕ່ຫາກການຈັດຕັ້ງປະຕິບັດລະບຽບກົດໝາຍດັ່ງກ່າວບໍ່ເຂັ້ມງວດ.
          ກົນໄກສຳລັບການປະຕິບັດຫຼັກການເພີ່ມທະວີການເອົາໃຈໃສ່ລູກຄ້າ ໄດ້ກຳນົດໄວ້ໃນລະບຽບການຕ່າງຫາກ.</p>

          <strong>ມາດຕາ  23 ການເກັບກຳຂໍ້ມູນລະອຽດກ່ຽວກັບລູກຄ້າ</strong>
           <p>&nbsp;&nbsp;&nbsp;ຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານຕ້ອງເກັບກຳ, ພິສູດ ແລະ ຢັ້ງຢືນຂໍ້ມູນກ່ຽວກັບລູກຄ້າ ທີ່ເປັນ ບຸກຄົນ ເຊັ່ນ ຊື່ ແລະ ນາມສະກຸນ,  ວັນ, ເດືອນ, ປີເກີດ, ສັນຊາດ, ທີ່ຢູ່ ແລະ ອາຊີບ ຂອງລູກຄ້າ.
          ສຳລັບລູກຄ້າທີ່ເປັນນິຕິບຸກຄົນນັ້ນ ຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ ຕ້ອງເກັບກຳ, ພິສູດ ແລະ ຢັ້ງຢືນ ຂໍ້ມູນກ່ຽວກັບຊື່ ແລະ ທີ່ຢູ່ຂອງບໍລິສັດ, ເອກະສານຢັ້ງຢືນຕົນຂອງຜູ່ອຳນວຍການ, ລາຍລະອຽດ ກ່ຽວກັບຜູ່ຖືຮຸ້ນ, ການເຄື່ອນໄຫວ ແລະ ຂະໜາດຂອງທຸລະກິດ.</p>
             <p>&nbsp;&nbsp;&nbsp;ໃນກໍລະນີ ທີ່ບໍ່ສາມາດເກັບກຳຂໍ້ມູນລະອຽດກ່ຽວກັບລູກຄ້າຕາມທີ່ໄດ້ກຳນົດໄວ້ໃນວັກ ໜຶ່ງ ແລະ ສອງ ຂອງມາດຕານີ້ ຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ ຕ້ອງຢຸດການໃຫ້ບໍລິການ ຫຼື ບໍ່ສ້າງສາຍພົວພັນທຸລະກິດກັບລູກຄ້າຜູ່ນັ້ນ ແລະ ໃຫ້ຖືວ່າເປັນທຸລະກຳທີ່ສົງໄສ ແລ້ວລາຍງານ ຕໍ່ສຳນັກງານຂໍ້ມູນຕ້ານການຟອກເງິນ ຕາມທີ່ໄດ້ກຳນົດໄວ້ໃນ ມາດຕາ 30 ແລະ 31 ຂອງກົດໝາຍສະບັບນີ້.</p>

          <strong>ມາດຕາ  24 ການເກັບກຳຂໍ້ມູນກ່ຽວກັບທຸລະກຳຂອງລູກຄ້າ</strong>
          <p>&nbsp;&nbsp;&nbsp;ຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ ຕ້ອງເກັບກຳຂໍ້ມູນກ່ຽວກັບຈຸດປະສົງ ແລະ ເປົ້າໝາຍຂອງລູກຄ້າ ໃນການໃຊ້ບໍລິການ ຫຼື ສ້າງສາຍພົວພັນທຸລະກິດກັບສະຖາບັນຂອງຕົນ.
          ຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ ຕ້ອງຊອກຮູ້ວ່າການພົວພັນທຸລະກິດ ຂອງລູກຄ້ານັ້ນ ແມ່ນໃນນາມລູກຄ້າເອງ ຫຼື ຜູ່ອື່ນ ເພື່ອຊອກຮູ້ຜູ່ໄດ້ຮັບຜົນປະໂຫຽດແທ້ຈິງ ເຊັ່ນ ເຈົ້າຂອງທຶນ ລວມທັງທຶນທີ່ປະກອບເຂົ້າໃນການສ້າງຕັ້ງວິສາຫະກິດ ຊຶ່ງເປັນຕົ້ນກຳເນີດ ຫຼື ບຸກຄົນທີ່ມີສິດອຳນາດຕົກລົງບັນຫາ.</p>

          <strong>ມາດຕາ 31 ການລາຍງານທຸລະກຳທີ່ສົງໄສ</strong>
          <p>&nbsp;&nbsp;&nbsp;ໃນກໍລະນີທີ່ມີຂໍ້ສົງໄສ ຫຼື ສາເຫດພາໃຫ້ສົງໄສວ່າທຸລະກຳຂອງລູກຄ້າອາດ ແມ່ນຜົນຈາກການກະທຳຜິດຕົ້ນ, ພົວພັນ ຫຼື ເຊື່ອມໂຍງກັບການຟອກເງິນ ແລະ ການສະໜອງທຶນໃຫ້ແກ່ການກໍ່ການຮ້າຍ ຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ ຕ້ອງລາຍງານທຸລະກຳດັ່ງກ່າວ ຕໍ່ສຳນັກງານຂໍ້ມູນຕ້ານການຟອກເງິນ ພາຍໃນ ສາມວັນ ລັດຖະການ ລວມທັງຄວາມພະຍາຍາມໃນການເຮັດທຸລະກຳຂອງລູກຄ້າທີ່ສຳເລັດ ຫຼື ບໍ່ສຳເລັດ ໂດຍບໍ່ຈຳກັດຈຳນວນເງິນ.</p>

          <strong>ມາດຕາ  32  ການຮັກສາຄວາມລັບຂອງການລາຍງານ</strong>
          <p>&nbsp;&nbsp;&nbsp;ຜູ່ບໍລິຫານ ແລະ ພະນັກງານຂອງຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ ຕ້ອງຮັກສາຄວາມລັບກ່ຽວກັບການລາຍງານທຸລະກຳທີ່ສົງໄສວ່າເປັນການຟອກເງິນ ແລະ ການສະໜອງທຶນໃຫ້ແກ່ການກໍ່ການຮ້າຍ ຫຼື ຂໍ້ມູນຕ່າງໆ ທີ່ໄດ້ລາຍງານ ຕໍ່ສຳນັກງານຂໍ້ມູນຕ້ານການຟອກເງິນ.</p>
          <p>&nbsp;&nbsp;&nbsp;ການຮັກສາຄວາມລັບຂອງລູກຄ້າ ຂອງຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ ຕາມທີ່ໄດ້ກຳນົດໄວ້ໃນກົດລະບຽບພາຍໃນ ຫຼື ສັນຍາໃດໜຶ່ງຂອງຕົນ ຕ້ອງໃຫ້ສອດຄ່ອງກັບກົດໝາຍສະບັບນີ້.</p>
          <p>&nbsp;&nbsp;&nbsp;ຜູ່ບໍລິຫານ ແລະ ພະນັກງານ ຂອງຫົວໜ່ວຍທີ່ມີໜ້າທີ່ລາຍງານ ຈະບໍ່ຖືກລົງວິໄນ ຫຼື ດໍາເນີນຄະດີ ໃນສະຖານເປີດເຜີຍຄວາມລັບຂອງລູກຄ້າ ຖ້າການລາຍງານ ຫຼື ການສະໜອງຂໍ້ມູນນັ້ນ ຫາກເຮັດດ້ວຍຄວາມບໍລິສຸດໃຈ, ສອດຄ່ອງກັບກົດໝາຍສະບັບນີ້ ແລະ ຈະບໍ່ມີຄວາມຮັບຜິດຊອບທາງກົດໝາຍແຕ່ຢ່າງໃດ.</p>
        </div>
      </div>
    </div>
  </div>



@stop
