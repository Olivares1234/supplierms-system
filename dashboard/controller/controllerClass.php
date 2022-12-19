<?php

include("../../config/connection_db.php");
// include("class_loginConfig.php");

//setup connection db
class controllerClass{
    private $id;
    private $name;
    private $email;
    private $company;
    private $department;
    private $date_request;
    private $remarks;
    private $image;
    private $status;

    protected $con_Db;
 
 public function __construct($id=0, $name="", $email="", $company="", $department="", $date_request="", $remarks="", $image="", $status=""){
    $this->id=$id;
    $this->name=$name;
    $this->email=$email;
    $this->company=$company;
    $this->department=$department;
    $this->date_request=$date_request;
    $this->remarks=$remarks;
    $this->image=$image;
    $this->status=$status;
    $this->con_Db = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD,[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
    $this->con_Db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 
    // $this->dbCnx = new PDO("mysql:host=localhost;dbname=registration;", "root", "");
 }
   public function setId($id){
      $this->id=$id;
    }
    public function getId(){
      return $this->id;
    }
    public function setname($name){
      $this->name=$name;
    }
    public function getname(){
      return $this->name;
    }
   public function setemail($email){
      $this->email=$email;
    }
    public function getemail(){
      return $this->email;
    }
    public function setcompany($company){
       $this->company=$company;
    }
    public function getcompany(){
       return $this->company;
    }
    public function setdepartment($department){
      $this->department=$department;
    }
    public function getdepartment(){
      return $this->department;
    }
    public function setdate_request($date_request){
      $this->date_request=$date_request;
    }
    public function getdate_request(){
      return $this->getdate_request;
    }
    public function setremarks($remarks){
      $this->remarks=$remarks;
    }
    public function getremarks(){
      return $this->remarks;
    }
    public function setimage($image){
      $this->image=$image;
    }
    public function getimage(){
      return $this->image;
    }
    public function setstatus($status){
      $this->status=$status;
    }
    public function getstatus(){
      return $this->status;
    }
 
    public function insertData(){ // Inserting Data Request Form.

       try {
         
         // $files = $_FILES["file"];
				
         // $filename = $files["name"];
         // $fileerror = $files["error"];
         // $filetmp = $files["tmp_name"];

         // $fileext = explode(".",$filename);
         // $filecheck = strtolower(end($fileext));

         // $fileextstored = array("png","jpg","jpeg");

         // if(in_array($filecheck,$fileextstored)){
         //    $destinationfile = "upload/".$filename;
         //    move_uploaded_file($filetmp, $destinationfile);
        

     
       $stm = $this->con_Db->prepare("INSERT INTO tbl_request(name, email, company, department, date_request, remarks, image, status) values(?, ?, ?, ?, ?, ?, ?, ?)");
       $stm->execute([$this->name, $this->email, $this->company, $this->department, $this->date_request, $this->remarks, $this->image, $this->status]);
      //  echo "<script>alert('data saved successfully');document.location='../../index.php'</script>";
         //  }
       }catch(PDOException $ex){
       return $ex->getMessage();
       }
       
 
    }

    public function RetrieveAllDone(){

      try{
            $stm = $this->con_Db->prepare("SELECT * FROM tbl_request WHERE status=?");
            $stm->execute([$this->status = 'Done']);
             return $stm->fetchAll();
         }
         catch(PDOException $ex){
            return $ex->getMessage();
         }
   
   }

   public function RetrieveAllPending(){

      try{
         // $stm = $this->con_Db->prepare("SELECT *, DATE_FORMAT(date_request, '%m/%d/%Y') as date_request FROM tbl_request WHERE status=?");
            $stm = $this->con_Db->prepare("SELECT * FROM tbl_request WHERE status=?");
            $stm->execute([$this->status = 'Pending']);
             return $stm->fetchAll();
         }
         catch(PDOException $ex){
            return $ex->getMessage();
         }
   
   }

   public function fetchAll(){

   try{
         $stm = $this->con_Db->prepare("SELECT * FROM tbl_request");
         $stm->execute();
          return $stm->fetchAll();
      }
      catch(PDOException $ex){
         return $ex->getMessage();
      }

   }

   public function fetchOne(){
   
       try{
      $stm = $this->con_Db->prepare("SELECT * FROM tbl_request WHERE id=?");
          $stm->execute([$this->id]);
          return $stm->fetchAll();
 
       }
       catch(Exception $ex){
          return $ex->getMesssage();
       }
    }

   public function update(){
 
       try{
          $stm = $this->con_Db->prepare("UPDATE tbl_request SET name=?, company=?, department=?, date_request=?, remarks=?, status=? WHERE id =?");
          $stm->execute([$this->name,$this->company,$this->department,$this->date_request,$this->remarks,$this->status,$this->id]);
 
       }
       catch(PDOException $ex){
          return $ex->getMessage();
       }
    }

   public function delete(){
 
       try{
          $stm = $this->con_Db->prepare("DELETE FROM tbl_request WHERE id=?");
          $stm->execute([$this->id]);
          return $stm->fetchAll();
          echo "<script>alert('data deleted successfully');document.location='.php'</script>";
 
       }
       catch(PDOException $ex){
          return $ex->getMessage();
       }
    }

    public function recordAllDone(){
 
      try{

         $stm = $this->con_Db->prepare("SELECT * FROM tbl_request WHERE status=?"); 
         $stm->execute([$this->status='Done']); 
         $total = $stm->rowCount();
         return $total;
         // echo "<script>alert('data deleted successfully');document.location='.php'</script>";

      }
      catch(PDOException $ex){
         return $ex->getMessage();
      }
   }
   
    public function recordAllPending(){
 
      try{

         $stm = $this->con_Db->prepare("SELECT * FROM tbl_request WHERE status=?"); 
         $stm->execute([$this->status='pending']); 
         $total = $stm->rowCount();
         return $total;
         // echo "<script>alert('data deleted successfully');document.location='.php'</script>";

      }
      catch(PDOException $ex){
         return $ex->getMessage();
      }
   }

   public function retrieveRequestToday(){
 
      try{

         $stm = $this->con_Db->prepare("SELECT id, date_request FROM tbl_request WHERE date_request >= CURDATE() - 1");
         $stm->execute([$this->id,$this->date_request]); 
         $total = $stm->rowCount();
         return $total;
         // echo "<script>alert('data deleted successfully');document.location='.php'</script>";

      }
      catch(PDOException $ex){
         return $ex->getMessage();
      }
   }
}



?>