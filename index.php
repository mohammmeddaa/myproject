<?php 

             
        
       include './inc/db.php';
       include './inc/form.php';
       

       $sql = 'SELECT * FROM users ORDER BY RAND() limit 1';
       $result = mysqli_query($conn,$sql);
       $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

       

       mysqli_free_result($result);
       mysqli_close($conn);

?>

    <?php include_once './parts/header.php'?>

         
         
         <div class= "position-relative.overflow-hidden.p-3.p-md-5.m-md-3.text-center.bg-light">
         <div class="col-md-5 p-lg-5 mx-auto my-5">
          <img src="https://fedu.bu.edu.eg/media/k2/items/cache/c656ba03f52a5357cbe6c17dbf6cb0a8_Generic.jpg" width="400">
      <h1 class="display-4 fw-normal">اربح مع مبارك</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">للسحب على نسخة مجانية من البرنامج</p>
    </div>
    </div> 

    <h3> للدخول في السحب اتبع ما يلي : </h3>
    <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتي في تويتر</li>
 <hr>
  <li class="list-group-item"> ببث مباشر لمدة ساعة عبارة عن اسئلة و اجوبة</li>
 <hr>
  <li class="list-group-item"> التسجيل هنا ستقوم بتسجيل اسمك و ايميلك</li>
 <hr>
  <li class="list-group-item">بنهاية البث سيتم اختيار اسم من قاعدة البيانات بشكل عشوائي</li>
 <hr>
  <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
</ul>




<div class= "position-relative-left">
         <div class="col-md-5 p-lg-5 mx-auto my-5">
<form action="index.php" method="post">
    <h3>الرجاء ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"></div>
  </div>

  
<form class="mt-5">
    <h3> </h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"></div>
  </div>
  

  
<form class="mt-5">
    <h3></h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
    <input type="text"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"></div>
  </div>
  

  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>
    </div> 





        
    
    </div>
    



    <style>
    #countdown {
    color: blue;
    padding: 10px;
    border: 1px solid;
    border-radius: 5px;

}

#cards{
  display : none;
} 

  
   </style>
   <!-- Button trigger modal -->
   <div class="d-grid gap-2 col-3 mx-auto my-5">
<button type="button"  id="winner" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <h5 class="display-3 text-center modal-title " id = "modallabil">الرابح في المسابقة</h5>
       <hr>

      <div class="modal-header">
      <?php foreach( $users as $user): ?>
        <h5 class="display-3 text-center modal-title" id="exampleModalLabel"> <h1><?php echo htmlspecialchars($user['firstName']) .' '. htmlspecialchars($user['lastName']) .'<br>' /htmlspecialchars( $user['email']);/?></h1></h5>
        <?php  endforeach; ?>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 
    
    </div>
  </div>
</div>
   
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

      






      


     
      <div  id="cards" class="row mb-5 pb-5">
   
           <h1><?php echo htmlspecialchars($user['firstName']) .' '. htmlspecialchars($user['lastName']) .'<br>'. htmlspecialchars( $user['email']);?></h1>                                                                                                                                 
             
     
     <?php include_once './parts/footer.php';?>
