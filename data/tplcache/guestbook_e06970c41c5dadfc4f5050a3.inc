<?php
if(!isset($GLOBALS['_vars'])) $GLOBALS['_vars'] = array(); 
$fields = array();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $GLOBALS['cfg_soft_lang']; ?>" />
<title>��������_<?php echo $GLOBALS['cfg_webname']; ?></title>
<meta name="keywords" content="<?php echo $fields['keywords']; ?>" />
<meta name="description" content="<?php echo html2text($fields['description']); ?>" />
<link href="<?php echo $GLOBALS['cfg_templeturl']; ?>/skin/css/Css0.Css" rel="stylesheet" type="text/css" />
</head>
<body>
<script src='/plus/mytag_js.php?aid=2' language='javascript'></script>
<table width="1002"   border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
<tr>
<!--���-->

<td width="688" valign="top" bgcolor="#ffffff">

<div align="center" >
<table border="0" width="98%" cellpadding="0" cellspacing="0">
<tr>
<td width="100%" valign="top"> 
 <?php
$atts = array();
$atts['tagname'] = 'datalist';
$blockValue = $this->refObj->GetArcList($atts,$this->refObj,$fields); 
if(is_array($blockValue)){
foreach( $blockValue as $key=>$fields )
{
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="left" style="border:1px #cccccc solid;">
  <tr>
  <td> 
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">
		<tr> 
		<td align="left" valign="top" style="border-bottom:1px #cccccc solid;"> 
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
				<tr> 
				<td height="30"><font color=green>&nbsp;&nbsp;����</font>:&nbsp;<?php echo $fields['title']; ?></td>
				<td width="165"> <img src="guestbook/images/posttime.gif" width="11" height="11" align="absmiddle"><font color="#006633">��<?php echo MyDate('m-d H:i',$fields['dtime']); ?></font> </td>
				</tr>
			</table>
		</td>
		</tr>
		<tr class="bg"> 
			<td align="center" height="133" valign="top"> 
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr > 
				<td width="100" align="center" height="110" valign="top"> 
					<table width="100%" border="0" cellspacing="0" cellpadding="3" align="center" >
						<tr> 
						<td valign="middle" align="center" width="100%">
						<img src="guestbook/images/<?php echo $fields['face']?>.gif" width="80" height="90" border=0><br><br>
						<?php echo $fields['uname'];  echo GetIsCheck($fields['ischeck'],$fields['id'])?>
						</td>
						</tr>
					</table>
				</td>
<td align="center" height="133" width="1" bgcolor="#B4C9E7"></td>
<td> 
	<table width="100%" border="0" cellpadding="6" cellspacing="0" class="saytext" height="105" style="TABLE-LAYOUT: fixed">
	<tr> 
	<td align="left" valign="top">
	<?php echo $fields['msg']; ?>
	</td>
	</tr></table>
	<?php if($g_isadmin) { ?>
	<table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#cccccc">
		<tr><td></td></tr>
	</table>
	<table width="100%" border="0" cellpadding="0" cellspacing="3">
	<tr>
	<td>
		<a href="http://<?php echo $fields['homepage']?>" target="_blank"><img src="guestbook/images/home.gif" width=16 height=16 border=0 style="vertical-align:bottom;"> ��ҳ</a>
		<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $fields['qq']?>&amp;Site=123&amp;Menu=yes" title="�������QQ��Ϣ��" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $fields['qq']?>:4" border=0 width=20 height=16 align="absmiddle">  QQ</a>	
		<a href="mailto:<?php echo $fields["email"]?>" target="_blank"><img src="guestbook/images/email.gif" width=16 height=16 border=0 style="vertical-align:middle;" > ����</a>
	   <a href="guestbook.php?action=admin&id=<?php echo $fields['id']; ?>"><img src="guestbook/images/reply.gif" width=16 height=16 border=0 alt="�ظ���������" style="vertical-align:middle;">�ظ�</a>	   
	   <a href='guestbook.php?action=admin&id=<?php echo $fields['id']; ?>&job=del'><img src='guestbook/images/del.gif' border=0 height=16 width=16  style="vertical-align:middle;"/>[ɾ��]</a>
	  </td></tr>
   </table>
 <?php }  ?></td>
				</tr>
			</table>
		</td>
		</tr>
	</table>

</td>
</tr>
</table>
<div style="clear:both;"></div>
 <?php
}
}?>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td> 
			<div id="showpage" class="showpage">
			<br><br>
<?php
$atts = array();
$atts['tagname'] = 'pagelist';
$atts['listsize'] = '5';
 echo $this->refObj->GetPageList($atts,$this->refObj,$fields); 
?>
 
</div>
          </td>
        </tr>
      </table>
	  <br> <br>
   <table width="100%" border="0" cellspacing="1" cellpadding="4" align="center" bgcolor="#dedede" class='writetable'>
      <form method="post" action="guestbook.php" name="form1">
        <input type='hidden' name='action' value='save' />
        <tr>
          <td colspan='4' class='writetd'><b>�������ԣ�</b><a name='write'></a></td>
        </tr>
        <tr bgcolor="#ffffff">
          <td width="10%" align="center" nowrap><font color="#FF0000">*</font>���⣺</td>
          <td width="40%" align="left"><input type="text" maxlength="50" name="title" size="30" class="ipt-txt"/></td>
          <td width="10%" align="center" nowrap>�� ֤ �룺</td>
          <td>
          	<table border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="70"><input name="validate" type="text" id="vdcode2" class="ipt-txt" style="width:60px;text-transform: uppercase;" /></td>
              <td><img src='../include/vdimgck.php'/></td>
            </tr>
          </table>
         </td>
        </tr>
        <tr bgcolor="#ffffff">
          <td width="10%" align="center" nowrap><font color="#FF0000">*</font>���������</td>
          <td width="40%" align="left"><input type="text" maxlength="10" name="uname" size="30" value="<?php echo $g_name; ?>" class="ipt-txt"/></td>
          <td width="10%" align="center" nowrap>OICQ���룺</td>
          <td width="40%" align="left"><input maxlength="20" type="text" name="qq" size="20" class="ipt-txt" /></td>
        </tr>
        <tr bgcolor="#ffffff">
          <td align="center" nowrap>&nbsp;�����ʼ���</td>
          <td align="left"><input maxlength="80" type="text" name="email" size="30" class="ipt-txt"/></td>
          <td align="center" nowrap height="12">������ҳ��</td>
          <td height="12" align="left"><input maxlength="80" type="text" name="homepage" size="20" class="ipt-txt" /></td>
        </tr>
		
        <tr bgcolor="#ffffff">
          <td align="center" nowrap width="10%"><font color="#FF0000">*</font>�������ݣ�<br />
            (1000����) </td>
          <td align="left" width="40%">
          	<textarea name="msg" cols="38" rows="5" class="textarea ipt-txt"></textarea>
          </td>
          <td align="center" nowrap height="2" width="10%">ѡ��ͷ��</td>
          <td nowrap height="2" width="40%">
          	<input type="radio" name="img" value="01" checked />
            <img src="guestbook/images/01.gif" width="25" height="25" />
            <input type="radio" name="img" value="02" />
            <img src="guestbook/images/02.gif" width="25" height="25" />
            <input type="radio" name="img" value="03" />
            <img src="guestbook/images/03.gif" width="25" height="25" />
            <input type="radio" name="img" value="04" />
            <img src="guestbook/images/04.gif" width="25" height="25" />
         
            <br /><br />
            <input type="radio" name="img" value="13" />
            <img src="guestbook/images/13.gif" width="25" height="25" />
            <input type="radio" name="img" value="14" />
            <img src="guestbook/images/14.gif" width="25" height="25" />
            <input type="radio" name="img" value="15" />
            <img src="guestbook/images/15.gif" width="25" height="25" />
            <input type="radio" name="img" value="16" />
            <img src="guestbook/images/16.gif" width="25" height="25" />
           
           </td>
        </tr>
        <tr bgcolor="#ffffff">
          <td colspan="4" align="center" nowrap><input maxlength="1000" type="submit" name="Submit" value="�� ��" class="btn-2" />
            &nbsp;&nbsp;
            <input type="reset" name="Submit2" value="ȡ ��" class="btn-2" /></td>
        </tr>
      </form>
    </table> 
    </td>
</tr>
</table>
</div>
</td>

<td width="312" background="<?php echo $GLOBALS['cfg_templeturl']; ?>/skin/images/right_bg.gif" valign="top" align="center">
	<div class="mBottom">
	<table width="299" border="0" align="center" cellpadding="0" cellspacing="0" class="rightBox">
      <tr>
        <td height="8" ><img src="<?php echo $GLOBALS['cfg_templeturl']; ?>/skin/images/rightBox_top.gif" width="299" height="8" /></td>
      </tr>
      <tr>
        <td  align="left" valign="top" background="<?php echo $GLOBALS['cfg_templeturl']; ?>/skin/images/rightBox_bg.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="15%" align="center"><img src="<?php echo $GLOBALS['cfg_templeturl']; ?>/skin/images/rightSearch.gif" /></td>
            <td width="85%" align="left">
		<table border="0" cellpadding="0" cellspacing="0">
	<form  name="formsearch" action="<?php echo $GLOBALS['cfg_cmsurl']; ?>/plus/search.php">
	<tr>
	  <td height="28" align="left" >
	   <input type="hidden" name="kwtype" value="0" />
	   <input type="text" name="q"size="25"  maxlength="60" value="����������..." onfocus="if(this.value=='����������...'){this.value='';}"  onblur="if(this.value==''){this.value='����������...';}" /><br /><br />
	   
		  <select name="searchtype" class="search-option" id="search-option">
               <option value="title" selected='1'>��������</option>
               <option value="titlekeyword">����ģ��</option>
           </select>&nbsp;&nbsp;&nbsp;
	   <input type="submit" name="Submit"  value="����" /></td>
	</tr>
</form></table>		
			</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="<?php echo $GLOBALS['cfg_templeturl']; ?>/skin/images/rightBox_bottom.gif" width="299" height="9" /></td>
      </tr>
    </table>
	</div>
	<script src='/plus/mytag_js.php?aid=3' language='javascript'></script>
</td>
<!--END ���-->
</tr>
</table>
<script src='/plus/mytag_js.php?aid=1' language='javascript'></script>
</body>
</html>