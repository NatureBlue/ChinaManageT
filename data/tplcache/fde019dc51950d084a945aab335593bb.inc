<tr>
        <td align="left" class="newsTitle"><a href="{dede:field name='typeurl'/}">{dede:field name='typename'/}</a></td>
      </tr>
      <tr>
        <td align="left" valign="top"><div class="newst"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="line-i">
{dede:arclist row=6 titlelen=46 }
<tr><td align="left"  class="line-i">&nbsp;<img src="[field:global.cfg_templeturl/]/skin/images/ico.gif"/>&nbsp;<a href="[field:arcurl /]" title="���⣺[field:fulltitle function='html2text(@me)'/]
���ߣ�[field:writer /]
���£�[field:pubdate function='GetDateTimeMK(@me)'/]
�����[field:click/]" target="_blank">[field:title /]</a></td>
<td align="right"  class="line-i"><font color="#999999">[</font><font color="#999999">[field:pubdate function="MyDate('Y-m-d',@me)"/]</font><font color="#999999">]</font></td></tr>
{/dede:arclist}
</table></div></td>
      </tr>