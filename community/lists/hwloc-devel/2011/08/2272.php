<?
$subject_val = "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 11:48:52 2011" -->
<!-- isoreceived="20110804154852" -->
<!-- sent="Thu, 4 Aug 2011 17:48:47 +0200" -->
<!-- isosent="20110804154847" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?" -->
<!-- id="20110804154847.GL4409_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1130665079.1946761.1312472837288.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 11:48:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2273.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2271.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2265.php">Brice Goglin: "[hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2273.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Reply:</strong> <a href="2273.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Thu 04 Aug 2011 17:47:17 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; /home/bgoglin/SOFT/hwloc/branch-1.2/build/src/.libs/libhwloc.a(topology-linux.o):
</span><br>
<span class="quotelev1">&gt; In function `hwloc_linux_set_thread_cpubind':
</span><br>
<span class="quotelev1">&gt; topology-linux.c:(.text+0x1070): undefined reference to `pthread_self'
</span><br>
<p>Odd. This should be in libc.so.6... Doesn't libc provide it on that machine?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2273.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2271.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2265.php">Brice Goglin: "[hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2273.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Reply:</strong> <a href="2273.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
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
