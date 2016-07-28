<?
$subject_val = "[OMPI devel] Dead code in opal_config_asm.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 06:35:01 2015" -->
<!-- isoreceived="20150424103501" -->
<!-- sent="Fri, 24 Apr 2015 03:34:48 -0700" -->
<!-- isosent="20150424103448" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Dead code in opal_config_asm.4" -->
<!-- id="CAAvDA16e2fW+5LQgQChR_4Nr_Z1L+wEA1KxCUwfdE7YhLHmJgQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] Dead code in opal_config_asm.4<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-24 06:34:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17357.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Dead code in opal_config_asm.4"</a>
<li><strong>Previous message:</strong> <a href="17355.php">Nysal Jan K A: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17357.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Dead code in opal_config_asm.4"</a>
<li><strong>Reply:</strong> <a href="17357.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Dead code in opal_config_asm.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a block of code near the start of the OPAL_CONF_ASM which begins:
<br>
&nbsp;&nbsp;# OS X Leopard ld bus errors if ...
<br>
<p>However, Leopard is OS X 10.5 and the minimum supported by Open MPI is 10.6.
<br>
So, that code should be unreachable at this time (and since Jan 2014
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13697.php">http://www.open-mpi.org/community/lists/devel/2014/01/13697.php</a>)
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17356/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17357.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Dead code in opal_config_asm.4"</a>
<li><strong>Previous message:</strong> <a href="17355.php">Nysal Jan K A: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17357.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Dead code in opal_config_asm.4"</a>
<li><strong>Reply:</strong> <a href="17357.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Dead code in opal_config_asm.4"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
