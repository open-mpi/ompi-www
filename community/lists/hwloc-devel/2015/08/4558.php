<?
$subject_val = "[hwloc-devel] Fixes for the annoying Windows warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 11:09:30 2015" -->
<!-- isoreceived="20150818150930" -->
<!-- sent="Tue, 18 Aug 2015 15:09:26 +0000" -->
<!-- isosent="20150818150926" -->
<!-- name="Tannenbaum, Barry M" -->
<!-- email="barry.m.tannenbaum_at_[hidden]" -->
<!-- subject="[hwloc-devel] Fixes for the annoying Windows warnings" -->
<!-- id="6B86B7F2A4026246AA81BA1ABF9756906A7B42D5_at_fmsmsx107.amr.corp.intel.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Fixes for the annoying Windows warnings<br>
<strong>From:</strong> Tannenbaum, Barry M (<em>barry.m.tannenbaum_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-18 11:09:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4559.php">Tannenbaum, Barry M: "[hwloc-devel] Fix for the unused variable warnings on Windows"</a>
<li><strong>Previous message:</strong> <a href="4557.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-677-g791e970)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/09/4596.php">Brice Goglin: "Re: [hwloc-devel] Fixes for the annoying Windows warnings"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/09/4596.php">Brice Goglin: "Re: [hwloc-devel] Fixes for the annoying Windows warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I hope I exported them from my local Mercural repository properly. Let me know if you need them in a different format.
<br>
<p>There are still warnings from:
<br>
<p>*        __dummy_nolocale creating an unreferenced local variable, which I'll probably try to diddle with some more.
<br>
<p>*        The DWORD_PTR to unsigned long issue in topology-windows.c which we discussed.
<br>
<p>I've also upgraded the projects to VS2013 since that's what's on my system. I haven't included those files because I'm not sure that you want them.
<br>
<p>Why was libhwloc.dll being put into a different directory than the executables? If it's in the same directory as the executables, you can just run the executables in the debugger.
<br>
<p><p>-        Barry (who believes that clean builds are happy builds)
<br>
<p><p>
<p>






<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4558/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4558/C4018-fixes.patch">C4018-fixes.patch</a>
</ul>
<!-- attachment="C4018-fixes.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4558/C4244-fixes.patch">C4244-fixes.patch</a>
</ul>
<!-- attachment="C4244-fixes.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4558/C4267-fixes.patch">C4267-fixes.patch</a>
</ul>
<!-- attachment="C4267-fixes.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4558/execvp-fixes.patch">execvp-fixes.patch</a>
</ul>
<!-- attachment="execvp-fixes.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4558/lstopo-ascii-fixes.patch">lstopo-ascii-fixes.patch</a>
</ul>
<!-- attachment="lstopo-ascii-fixes.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4558/bad-function-pointer-types.patch">bad-function-pointer-types.patch</a>
</ul>
<!-- attachment="bad-function-pointer-types.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4558/lstopo-draw-fixes.patch">lstopo-draw-fixes.patch</a>
</ul>
<!-- attachment="lstopo-draw-fixes.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4559.php">Tannenbaum, Barry M: "[hwloc-devel] Fix for the unused variable warnings on Windows"</a>
<li><strong>Previous message:</strong> <a href="4557.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-677-g791e970)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/09/4596.php">Brice Goglin: "Re: [hwloc-devel] Fixes for the annoying Windows warnings"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/09/4596.php">Brice Goglin: "Re: [hwloc-devel] Fixes for the annoying Windows warnings"</a>
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
