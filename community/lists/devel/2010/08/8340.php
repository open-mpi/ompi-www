<?
$subject_val = "[OMPI devel] Success (with warnings) on NetBSD 5.0.2/i386";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 23:18:06 2010" -->
<!-- isoreceived="20100825031806" -->
<!-- sent="Tue, 24 Aug 2010 20:17:49 -0700" -->
<!-- isosent="20100825031749" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Success (with warnings) on NetBSD 5.0.2/i386" -->
<!-- id="4C748B5D.4070103_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Success (with warnings) on NetBSD 5.0.2/i386<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 23:17:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8341.php">Paul H. Hargrove: "[OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Previous message:</strong> <a href="8339.php">Paul H. Hargrove: "[OMPI devel] OpenBSD-4.6/i386 warns malloc.h is obsolete for 1.4.3rc1 and 1.5rc5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Both 1.5rc5 and 1.4.3rc1 build and pass &quot;gmake check&quot; on my NetBSD/i386 
<br>
platform.
<br>
However, for 1.4.3rc1 (but NOT for 1.5rc5) I see numerous instances of
<br>
<p>In file included from [SOMEFILE:SOMELINE]:
<br>
../../opal/include/opal/sys/cache.h:33:1: warning: &quot;CACHE_LINE_SIZE&quot; 
<br>
redefined
<br>
In file included from ../../opal/include/opal_config_bottom.h:311,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../opal/include/opal_config.h:1658,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from [SOMEFILE:SOMELINE]:
<br>
/usr/include/sys/param.h:172:1: warning: this is the location of the 
<br>
previous definition
<br>
<p>Which is nearly identical to the warnings I reported for FreeBSD-8.0 in 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8335.php">http://www.open-mpi.org/community/lists/devel/2010/08/8335.php</a>
<br>
<p>-Paul (who /still/ has more platforms to test tonight)
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
<li><strong>Next message:</strong> <a href="8341.php">Paul H. Hargrove: "[OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Previous message:</strong> <a href="8339.php">Paul H. Hargrove: "[OMPI devel] OpenBSD-4.6/i386 warns malloc.h is obsolete for 1.4.3rc1 and 1.5rc5"</a>
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
