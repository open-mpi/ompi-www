<?
$subject_val = "[hwloc-devel] excessive warnings from xlc w/ hwloc-trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 18:58:08 2012" -->
<!-- isoreceived="20120217235808" -->
<!-- sent="Fri, 17 Feb 2012 15:57:57 -0800" -->
<!-- isosent="20120217235757" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] excessive warnings from xlc w/ hwloc-trunk" -->
<!-- id="4F3EE985.8010003_at_lbl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 18:57:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2877.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4320)"</a>
<li><strong>Previous message:</strong> <a href="2875.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.3a1r4309)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2880.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Maybe reply:</strong> <a href="2880.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Maybe reply:</strong> <a href="2882.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The patch below is required to avoid xlc-11.1 on Linux/ppc64 from 
<br>
issuing lots of warnings:
<br>
<p>&quot;[srcdir]/hwloc-trunk/include/hwloc.h&quot;, line 1245.34: 1506-1385 (W) The 
<br>
attribute &quot;pure&quot; is not a valid type attribute.
<br>
<p>The problem appears to be that when the function returns a pointer type, 
<br>
XLC thinks the attribute is being applied to the return type rather than 
<br>
the function.  That is why no other instances of __hwloc_attribute_pure 
<br>
need to be reordered.
<br>
<p>I am not sure of the risk/reward on applying this change, however.
<br>
Gcc seems to be happy enough either way as far as I could tell.
<br>
<p>-Paul
<br>
<p>--- hwloc-1.5a1r4308/include/hwloc.h~   2012-02-17 17:45:45.000000000 -0600
<br>
+++ hwloc-1.5a1r4308/include/hwloc.h    2012-02-17 17:52:20.000000000 -0600
<br>
@@ -1242,7 +1242,7 @@
<br>
&nbsp;&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;&nbsp;* \return \c NULL if no such key exists.
<br>
&nbsp;&nbsp;&nbsp;*/
<br>
-static __hwloc_inline const char * __hwloc_attribute_pure
<br>
+static __hwloc_inline __hwloc_attribute_pure const char *
<br>
&nbsp;&nbsp;hwloc_obj_get_info_by_name(hwloc_obj_t obj, const char *name)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned i;
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
<li><strong>Next message:</strong> <a href="2877.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4320)"</a>
<li><strong>Previous message:</strong> <a href="2875.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.3a1r4309)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2880.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Maybe reply:</strong> <a href="2880.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Maybe reply:</strong> <a href="2882.php">Samuel Thibault: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
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
