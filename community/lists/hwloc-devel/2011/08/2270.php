<?
$subject_val = "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 11:46:50 2011" -->
<!-- isoreceived="20110804154650" -->
<!-- sent="Thu, 04 Aug 2011 17:46:45 +0200" -->
<!-- isosent="20110804154645" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?" -->
<!-- id="4E3ABEE5.5060002_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110804150319.GH4409_at_type.bordeaux.inria.fr" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 11:46:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2271.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2269.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>In reply to:</strong> <a href="2266.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2267.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/08/2011 17:03, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Thu 04 Aug 2011 16:58:19 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; While playing with static hwloc libraries and binaries [1], I had to
</span><br>
<span class="quotelev2">&gt;&gt; manually add -lpthread to LIBS to get the fully-static binaries to link
</span><br>
<span class="quotelev2">&gt;&gt; properly.
</span><br>
<span class="quotelev1">&gt; What was the missing reference?
</span><br>
<p>&nbsp;&nbsp;CCLD   lstopo
<br>
/home/bgoglin/SOFT/hwloc/branch-1.2/build/src/.libs/libhwloc.a(topology-linux.o):
<br>
In function `hwloc_linux_set_thread_cpubind':
<br>
topology-linux.c:(.text+0x1070): undefined reference to `pthread_self'
<br>
/home/bgoglin/SOFT/hwloc/branch-1.2/build/src/.libs/libhwloc.a(topology-linux.o):
<br>
In function `hwloc_linux_get_thread_cpubind':
<br>
topology-linux.c:(.text+0x124d): undefined reference to `pthread_self'
<br>
collect2: ld returned 1 exit status
<br>
<p>Same on Debian testing and SLES11.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2271.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2269.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>In reply to:</strong> <a href="2266.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2267.php">Jeff Squyres: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
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
