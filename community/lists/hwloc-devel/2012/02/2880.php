<?
$subject_val = "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 19 13:54:18 2012" -->
<!-- isoreceived="20120219185418" -->
<!-- sent="Sun, 19 Feb 2012 19:54:10 +0100" -->
<!-- isosent="20120219185410" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk" -->
<!-- id="20120219185410.GV4383_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1266644992.872468.1329523107798.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-19 13:54:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2881.php">Paul H. Hargrove: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Previous message:</strong> <a href="2879.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.3a1r4322)"</a>
<li><strong>Maybe in reply to:</strong> <a href="2876.php">Paul H. Hargrove: "[hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2881.php">Paul H. Hargrove: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Reply:</strong> <a href="2881.php">Paul H. Hargrove: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul H. Hargrove, le Sat 18 Feb 2012 00:58:27 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I am not sure of the risk/reward on applying this change, however.
</span><br>
<span class="quotelev1">&gt; Gcc seems to be happy enough either way as far as I could tell.
</span><br>
<p><span class="quotelev1">&gt; -static __hwloc_inline const char * __hwloc_attribute_pure
</span><br>
<span class="quotelev1">&gt; +static __hwloc_inline __hwloc_attribute_pure const char *
</span><br>
<span class="quotelev1">&gt;  hwloc_obj_get_info_by_name(hwloc_obj_t obj, const char *name)
</span><br>
<p>Does it still complain if using the following?
<br>
<p><span class="quotelev1">&gt; static __hwloc_inline const char *
</span><br>
<span class="quotelev1">&gt;  hwloc_obj_get_info_by_name(hwloc_obj_t obj, const char *name) __hwloc_attribute_pure 
</span><br>
<p>That'd be safer to make sure that the attribute is applied to the
<br>
function, not something else.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2881.php">Paul H. Hargrove: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Previous message:</strong> <a href="2879.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.3a1r4322)"</a>
<li><strong>Maybe in reply to:</strong> <a href="2876.php">Paul H. Hargrove: "[hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2881.php">Paul H. Hargrove: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
<li><strong>Reply:</strong> <a href="2881.php">Paul H. Hargrove: "Re: [hwloc-devel] excessive warnings from xlc w/ hwloc-trunk"</a>
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
