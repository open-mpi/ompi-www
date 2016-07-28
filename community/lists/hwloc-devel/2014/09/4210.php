<?
$subject_val = "[hwloc-devel] Interesting warning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 20:41:57 2014" -->
<!-- isoreceived="20140911004157" -->
<!-- sent="Wed, 10 Sep 2014 17:41:17 -0700" -->
<!-- isosent="20140911004117" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[hwloc-devel] Interesting warning" -->
<!-- id="B216DC1C-2D8B-48D3-A2CA-D1340ABB2EDA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] Interesting warning<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-10 20:41:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4211.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-211-gddefb2f)"</a>
<li><strong>Previous message:</strong> <a href="4209.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Stop updating Trac wiki (Github migration)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4212.php">Samuel Thibault: "Re: [hwloc-devel] Interesting warning"</a>
<li><strong>Reply:</strong> <a href="4212.php">Samuel Thibault: "Re: [hwloc-devel] Interesting warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just got this from Clang 3.4.2 on Linux x86-64:
<br>
<p>In file included from topology-x86.c:23:
<br>
/home/common/openmpi/svn-trunk/opal/mca/hwloc/hwloc191/hwloc/include/private/cpuid-x86.h:67:3: warning: extension used [-Wlanguage-extension-token]
<br>
&nbsp;&nbsp;asm(
<br>
&nbsp;&nbsp;^
<br>
1 warning generated.
<br>
<p><p>Guess it doesn't like that assembler in there
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4210/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4211.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-211-gddefb2f)"</a>
<li><strong>Previous message:</strong> <a href="4209.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Stop updating Trac wiki (Github migration)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4212.php">Samuel Thibault: "Re: [hwloc-devel] Interesting warning"</a>
<li><strong>Reply:</strong> <a href="4212.php">Samuel Thibault: "Re: [hwloc-devel] Interesting warning"</a>
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
