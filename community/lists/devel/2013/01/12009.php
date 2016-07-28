<?
$subject_val = "[OMPI devel] One-line patch for warning in 1.7rc6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 21:16:55 2013" -->
<!-- isoreceived="20130126021655" -->
<!-- sent="Fri, 25 Jan 2013 18:16:51 -0800" -->
<!-- isosent="20130126021651" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] One-line patch for warning in 1.7rc6" -->
<!-- id="CAAvDA143yRmL3tb2nFAp6nxSVMLmU8+hEPu8wY_S_jdjxqZz4A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] One-line patch for warning in 1.7rc6<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-25 21:16:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12010.php">Ralph Castain: "Re: [OMPI devel] One-line patch for warning in 1.7rc6"</a>
<li><strong>Previous message:</strong> <a href="12008.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12010.php">Ralph Castain: "Re: [OMPI devel] One-line patch for warning in 1.7rc6"</a>
<li><strong>Reply:</strong> <a href="12010.php">Ralph Castain: "Re: [OMPI devel] One-line patch for warning in 1.7rc6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While building 1.7rc6 on a i386 w/ InfiniBand I saw numerous instances of
<br>
this warning:
<br>
&nbsp;&nbsp;&nbsp;../../../../../orte/mca/oob/ud/oob_ud.h:93: warning: cast from pointer
<br>
to integer of different size
<br>
<p>The following 1-line change fixes this.
<br>
Alternatively, a single cast to type uintptr_t is probably sufficient.
<br>
<p>--- openmpi-1.7rc6/orte/mca/oob/ud/oob_ud.h~    2013-01-25
<br>
18:03:20.000000000 -0800
<br>
+++ openmpi-1.7rc6/orte/mca/oob/ud/oob_ud.h     2013-01-25
<br>
18:03:37.000000000 -0800
<br>
@@ -90,7 +90,7 @@ static inline void mca_oob_ud_fill_recv_
<br>
&nbsp;static inline void mca_oob_ud_fill_sge (struct ibv_sge *sge, void *addr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint32_t length, uint32_t lkey)
<br>
&nbsp;{
<br>
-    sge-&gt;addr   = (uint64_t)addr;
<br>
+    sge-&gt;addr   = (uint64_t)(uintptr_t)addr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sge-&gt;length = length;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sge-&gt;lkey   = lkey;
<br>
&nbsp;}
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12009/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12010.php">Ralph Castain: "Re: [OMPI devel] One-line patch for warning in 1.7rc6"</a>
<li><strong>Previous message:</strong> <a href="12008.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12010.php">Ralph Castain: "Re: [OMPI devel] One-line patch for warning in 1.7rc6"</a>
<li><strong>Reply:</strong> <a href="12010.php">Ralph Castain: "Re: [OMPI devel] One-line patch for warning in 1.7rc6"</a>
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
