<?
$subject_val = "[OMPI devel] RFC: WinVerbs BTL component";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 06:28:31 2011" -->
<!-- isoreceived="20110222112831" -->
<!-- sent="Tue, 22 Feb 2011 12:28:27 +0100" -->
<!-- isosent="20110222112827" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: WinVerbs BTL component" -->
<!-- id="4D639DDB.6060807_at_hlrs.de" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: WinVerbs BTL component<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 06:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9008.php">Tony Lam: "[OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
<li><strong>Previous message:</strong> <a href="9006.php">Barrett, Brian W: "[OMPI devel] trunk hwloc &amp; static builds"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: A new BTL component using WinVerbs API
<br>
<p>WHY: Support Infiniband on Windows
<br>
<p>WHERE: in ompi/mca/btl/wv
<br>
<p>WHEN: Next Tuesday, 1st March 2011
<br>
<p>======================================
<br>
<p>The openib component was working for windows using the WinOF libibverbs 
<br>
driver, which is based on WinVerbs. However, directly using WinVerbs API 
<br>
will principally gain more performance. A new WinVerbs component was 
<br>
built and optimized only for Windows platforms.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9007/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9008.php">Tony Lam: "[OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
<li><strong>Previous message:</strong> <a href="9006.php">Barrett, Brian W: "[OMPI devel] trunk hwloc &amp; static builds"</a>
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
