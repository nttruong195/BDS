<?php
	/**
	* 
	*/
	//require (PATH_ROOT.'/admin/models/model_entity.php');
	class index_model
	{
		function __construct()
		{
			$this->temp=new DB_connect();
		}
		function Login($un, $pa)
		{
			$qr = "SELECT * FROM user WHERE username ='" . $un . "' AND password ='" . $pa . "' ";
	        $rs = $this->temp->DB_Query($qr);
	        if (mysqli_num_rows($rs) != null) {
	            return 1;
	        } else {
	            return 0;
	        }
		}
		function Quyen($un)
		{
			$qr = "SELECT * FROM user WHERE username ='" . $un . "' ";
	        $rs = $this->temp->DB_Query($qr);
	        $quyen=mysqli_fetch_assoc($rs)['quyen'];
	        return $quyen;
		}
		function ThemUser($ho_ten,$username,$password,$dia_chi,$sdt,$mail,$ngay_sinh,$quyen)
		{
			$qr="ALTER TABLE `user` AUTO_INCREMENT = 1";
			$rs=$this->temp->DB_Query($qr);
			
			$qr="SELECT * FROM user WHERE username='$username'";
			$rs=$this->temp->DB_Query($qr);
			if (mysqli_num_rows($rs) != "") {
				return 0;
			}
			else
			{
				$qr="INSERT INTO `user`(`id`, `ho_ten`, `username`, `password`, `dia_chi`, `sdt`, `mail`, `ngay_sinh`, `quyen`) VALUES (NULL,'$ho_ten','$username','$password','$dia_chi','$sdt','$mail','$ngay_sinh','$quyen')";
				//var_dump($qr);
				$rs=$this->temp->DB_Query($qr);
				if ($rs) {
	                return 1;
	            } else
	                return 0;
			}
		}
		function SelectHang()
		{
			$qr="SELECT * FROM hang_sx ORDER BY id_hangsx";
			$rs = $this->temp->DB_Query($qr);
			$list=array();
			while ($row = $this->temp->DB_Fetch($rs)) {
				$hang_sx=new model_entity($row);
				$list[]=$hang_sx;
			}
			//var_dump($list);
			return $list;
		}
		function SelectCL()
		{
			$qr="SELECT * FROM chung_loai_sp ORDER BY id_clsp";
			$rs = $this->temp->DB_Query($qr);
			$list=array();
			while ($row = $this->temp->DB_Fetch($rs)) {
				$chungloaisp=new model_entity($row);
				$list[]=$chungloaisp;
			}
			//var_dump($list);
			return $list;
		}
		function SelectLspWithclsp($clsp)
		{
			$qr="SELECT * FROM loai_sp WHERE id_clsp='$clsp' ORDER BY id_loaisp";
			$rs = $this->temp->DB_Query($qr);
			$list=array();
			while ($row = $this->temp->DB_Fetch($rs)) {
				$loaisp=new model_entity($row);
				$list[]=$loaisp;
			}
			//var_dump($list);
			return $list;
		}
		function SelectLsp()
		{
			$qr="SELECT * FROM loai_sp ORDER BY id_loaisp";
			$rs = $this->temp->DB_Query($qr);
			$list=array();
			while ($row = $this->temp->DB_Fetch($rs)) {
				$loaisp=new model_entity($row);
				$list[]=$loaisp;
			}
			//var_dump($list);
			return $list;
		}
		function Search($value)
		{
			$qr="SELECT * FROM san_pham WHERE ten_sp LIKE '%$value%'";
			$rs=$this->temp->DB_Query($qr);
			$list=array();
			while ($row = $this->temp->DB_Fetch($rs)) {
				$sanpham=new model_entity($row);
				$list[]=$sanpham;
			}
			return $list;
		}
		function getUserById($un)
		{
			$qr = "SELECT * FROM user WHERE username = '$un'";
	        $rs = $this->temp->DB_Query($qr);
	        return $this->temp->DB_Fetch($rs);
		}
	}
?>