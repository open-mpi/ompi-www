<?
$subject_val = "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 12:06:06 2011" -->
<!-- isoreceived="20110804160606" -->
<!-- sent="Thu, 04 Aug 2011 18:05:59 +0200" -->
<!-- isosent="20110804160559" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?" -->
<!-- id="4E3AC367.2050507_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110804154847.GL4409_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2011-08-04 12:05:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2274.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2272.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>In reply to:</strong> <a href="2272.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2274.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/08/2011 17:48, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Thu 04 Aug 2011 17:47:17 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; /home/bgoglin/SOFT/hwloc/branch-1.2/build/src/.libs/libhwloc.a(topology-linux.o):
</span><br>
<span class="quotelev2">&gt;&gt; In function `hwloc_linux_set_thread_cpubind':
</span><br>
<span class="quotelev2">&gt;&gt; topology-linux.c:(.text+0x1070): undefined reference to `pthread_self'
</span><br>
<span class="quotelev1">&gt; Odd. This should be in libc.so.6... Doesn't libc provide it on that machine?
</span><br>
<p>It's in libc.so.6 but not in libc.a
<br>
<p>objdump -t /usr/lib/x86_64-linux-gnu/libc.a | grep pthread_self =&gt; nothing
<br>
<p>ii  libc6          2.13-10
<br>
ii  libc6-dev      2.13-10
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2274.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2272.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>In reply to:</strong> <a href="2272.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2274.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
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
