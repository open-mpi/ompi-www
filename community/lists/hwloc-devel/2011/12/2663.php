<?
$subject_val = "[hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 00:28:58 2011" -->
<!-- isoreceived="20111221052858" -->
<!-- sent="Tue, 20 Dec 2011 21:28:34 -0800" -->
<!-- isosent="20111221052834" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue" -->
<!-- id="4EF16E82.8070009_at_lbl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 00:28:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2664.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue"</a>
<li><strong>Previous message:</strong> <a href="2662.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.2rc1r4094)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2664.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue"</a>
<li><strong>Reply:</strong> <a href="2664.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When configuring hwloc-1.3.1rc1 on anything but x86 or x86-64 one sees 
<br>
the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;checking which CPU support to include... checking size of unsigned 
<br>
long... 4
<br>
<p>The patch below will change that to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking which CPU support to include... unknown
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking size of unsigned long... 4
<br>
<p>-Paul
<br>
<p><p>--- hwloc-1.3.1rc1/config/hwloc.m4~     2011-12-20 21:16:22.000000000 -0800
<br>
+++ hwloc-1.3.1rc1/config/hwloc.m4      2011-12-20 21:18:08.000000000 -0800
<br>
@@ -247,6 +247,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([unknown -- assuming x86_64])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;esac
<br>
+        ;;
<br>
+      *)
<br>
+        AC_MSG_RESULT([unknown])
<br>
+        ;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;esac
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_SIZEOF([unsigned long])
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
<li><strong>Next message:</strong> <a href="2664.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue"</a>
<li><strong>Previous message:</strong> <a href="2662.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.2rc1r4094)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2664.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue"</a>
<li><strong>Reply:</strong> <a href="2664.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1rc1: cosmetic configure issue"</a>
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
