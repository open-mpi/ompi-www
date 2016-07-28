<?
$subject_val = "[hwloc-devel] compiler warnings in 1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 11:49:18 2011" -->
<!-- isoreceived="20110427154918" -->
<!-- sent="Wed, 27 Apr 2011 11:49:13 -0400" -->
<!-- isosent="20110427154913" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] compiler warnings in 1.2" -->
<!-- id="37AE7683-10CF-4EA5-A507-CBA84B2B1CF4_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] compiler warnings in 1.2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-27 11:49:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2165.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Previous message:</strong> <a href="2163.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2.1rc1r3479)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2165.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Maybe reply:</strong> <a href="2165.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Maybe reply:</strong> <a href="2167.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see these in the 1.2 tarball:
<br>
<p>topology-x86.c: In function ?\200\230summarize?\200\231:
<br>
topology-x86.c:273:21: warning: ?\200\230one?\200\231 may be used uninitialized in this function
<br>
topology-x86.c: In function ?\200\230look_proc?\200\231:
<br>
topology-x86.c:222:61: warning: ?\200\230apic_id?\200\231 may be used uninitialized in this function
<br>
<p>It's not immediately obvious to me what you want to do if these values are not initialized.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2165.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Previous message:</strong> <a href="2163.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2.1rc1r3479)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2165.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Maybe reply:</strong> <a href="2165.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
<li><strong>Maybe reply:</strong> <a href="2167.php">Samuel Thibault: "Re: [hwloc-devel] compiler warnings in 1.2"</a>
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
