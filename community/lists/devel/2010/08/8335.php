<?
$subject_val = "[OMPI devel] Success on FreeBSD-8.0 (both 1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 22:24:16 2010" -->
<!-- isoreceived="20100825022416" -->
<!-- sent="Tue, 24 Aug 2010 19:23:57 -0700" -->
<!-- isosent="20100825022357" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Success on FreeBSD-8.0 (both 1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C747EBD.2010701_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Success on FreeBSD-8.0 (both 1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 22:23:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8336.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Previous message:</strong> <a href="8334.php">Paul H. Hargrove: "[OMPI devel] README nit pick (both 1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
By this point you all must either love or hate me, but I still have more 
<br>
platforms to test...
<br>
<p>This time it is FreeBSD-8.0 on an i386, and I can report that both RCs 
<br>
are successful.
<br>
<p>However, the build of 1.4.3rc1 produces MANY instances of the following:
<br>
<p>In file included from [SOMEFILE:SOMELINE]:
<br>
../../opal/include/opal/sys/cache.h:33:1: warning: &quot;CACHE_LINE_SIZE&quot; 
<br>
redefined
<br>
In file included from /usr/include/sys/param.h:110,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../opal/include/opal_config_bottom.h:311,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../opal/include/opal_config.h:1658,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from [SOMEFILE:SOMELINE]:
<br>
/usr/include/machine/param.h:89:1: warning: this is the location of the 
<br>
previous definition
<br>
<p>This warning is NOT seen with 1.5rc5.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8336.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Previous message:</strong> <a href="8334.php">Paul H. Hargrove: "[OMPI devel] README nit pick (both 1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
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
