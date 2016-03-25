<?php
	class Database{
	 	public $server;
		public $username;
		public $userpass;
		public $dbname;
		public $connection;

		public function __construct($server, $username, $userpass, $dbname){
			$this->server=$server;
			$this->username=$username;
			$this->userpass=$userpass;
			$this->dbname=$dbname;
			$this->db_connect();
			if($this->connection){
			}else{
				echo "error";
			}
		}
		function db_connect(){
			$this->connection=mysqli_connect($this->server, $this->username, $this->userpass, $this->dbname);
		}
	}

	class News{
		public $newsTitle;
		public $newsDesc;
		public $newsDate;
		public $newsStatus;
		public $newsText;
		public $newsTime;
			public $file_name;
			public $file_type;
			public $file_tmp;
			public $file_ext;
			public $file_dir;
			public $file_new_name;
			public $file_path;
		public function __construct($newsTitle, $newsDesc, $newsImg, $newsThumb, $newsDate, $newsStatus, $newsText, $newsTime){
				$this->newsTitle=$newsTitle;
				$this->newsDesc=$newsDesc;
				$this->newsDate=$newsDate;
				$this->newsStatus=$newsStatus;
				$this->newsText=$newsText;
				$this->newsTime=$newsTime;
			$this->file_name=$newsThumb['name'];
			$this->file_type=$newsThumb['type'];
			$this->file_tmp=$newsThumb['tmp_name'];
			$this->file_ext=explode(".", $this->file_name)[1];
			$this->file_dir=explode("/", $this->file_type)[0];
			$this->file_new_name="file".rand();
			$this->file_path=$this->file_dir."/".$this->file_new_name.".".$this->file_ext;
			move_uploaded_file($this->file_tmp, $this->file_dir."/".$this->file_new_name.".".$this->file_ext);

		}
		public function insertData($connection){
			$sql="INSERT INTO xeber (news_title,news_desc,news_text,news_thumb,news_img,news_date, news_time, news_status)
        VALUES ('$this->newsTitle','$this->newsDesc','$this->newsText','$this->file_path','$this->file_path','$this->newsDate','$this->newsTime', '$this->newsStatus')";
        mysqli_query($connection, $sql);
		}
	}
	class ShowDesc{
		    public function __construct($connection){
		 	$sql= "SELECT * FROM xeber WHERE news_status=1";
		 	$showQuery = mysqli_query($connection, $sql);
		 	if($showQuery){
		 		while ($row=mysqli_fetch_assoc($showQuery)) {
		 	    $newTitle=$row['news_title'];
		 	    $newThumb=$row['news_thumb'];
		 	    $newDesc=$row['news_desc'];
		 	    $newId=$row['news_id'];
		 	    $newTime=$row['news_time'];
		 	    $newDate=$row['news_date'];
		 	    $stringD = date("d", strtotime($newDate));
		 	    $stringM= date("m", strtotime($newDate));
		 	    switch ($stringM) {
					    case 0:
					        $stringM="YAN";
					        break;
					    case 1:
					        $stringM="FEV";
					        break;
					    case 2:
					        $stringM="MAR";
					        break;
					    case 3:
					        $stringM="APR";
					        break;
					    case 4:
					        $stringM="MAY";
					        break;
					    case 5:
					        $stringM="IYN";
					        break;
					    case 6:
					        $stringM="IYL";
					        break;
					    case 7:
					        $stringM="AVQ";
					        break;
					    case 8:
					        $stringM="SEN";
					        break;
					    case 9:
					        $stringM="OKT";
					        break;
					    case 10:
					        $stringM="NOY";
					        break;
					    case 11:
					        $stringM="DEK";
					        break;
				}
		 	    echo "
		 	    <a class='link' href='news.php?id=$newId'>
						<div class='col s12 m4'>
							          <div class='card'>
							            <div class='card-image'>
							            	<div class='date'>
												<span>$stringD <br> $stringM </span>
												<span>$newTime</span>
							            	</div>
							              <img class='thumb' src=$newThumb>
							            </div>
							            <div class='card-content customDiv'>
							              <h5>$newTitle</h5>
							              <p>$newDesc</p>
							            </div>
							            <div class='card-action'>
							              <a class='waves-effect waves-light btn'><i class='large material-icons'>thumb_up</i></a>
										  <a class='waves-effect waves-light btn'><i class='large material-icons'>thumb_down</i></a>
									      <a class='waves-effect waves-light btn'><i class='large material-icons'>visibility</i></a>
							            </div>
							          </div>
				        </div>
				</a>
		 	    ";
		 	}

		 	}else{
		 		echo 'query error';
		 	}
		 }
	}
	class ShowFull{
		public function __construct($connection, $fullId){
			$showSql = "SELECT * FROM xeber WHERE news_id=$fullId";
			$showFullQuery = mysqli_query($connection, $showSql);
			if($showFullQuery){
				$fullRow = mysqli_fetch_assoc($showFullQuery);
				$fullTitle=$fullRow['news_title'];
		 	    $fullThumb=$fullRow['news_thumb'];
		 	    $fullText=$fullRow['news_text'];
				echo "
						<div class='newsWrapper col m12'>
							<div class='imageWrapper col m12'><img class='fullImg' src=$fullThumb></div>
							<br>
							<div class='textWrapper col m12'>
								<h2>$fullTitle</h2>
								<br>
								<p>$fullText</p>
							</div>
						</div>
				";
			}else{
				echo "query error";
			}
		}
	}



















 ?>
