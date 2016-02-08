<?php	
	require_once 'global/MCAPI.class.php';
	$api = new MCAPI('099593624030c308348f17e3511228b3-us2');	
	$merge_vars = array('FNAME'=>'Kaishi', 'LNAME'=>'User');
	
	$retval = $api->listSubscribe( 'dc9920c055', $_POST["email"], $merge_vars, 'html', false, true );
	
	if ($api->errorCode){ ?>
	<form name="mailing-list" id="mailing-list-form" class="mailing-list-form" method="post" action="">
      <h2>此网页出错误，请再次输入</h2>
      <div class="mailing-list-text-container">
        <label for="email" class="master-text-label">请输入邮箱地址</label>
        <input type="text" name="email" id="email" class="mailing-list-input master-text" value="" />
      </div>
      <div class="mailing-list-submit-container">
        <input type="submit" value="注册" class="mailing-list-submit" />
      </div>
    </form>
<?php
	} else {
		echo "<h4>谢谢，你的邮箱已经被加入邮件列表</h4>";
	}
?>
