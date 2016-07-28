<?
$subject_val = "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 12:14:34 2011" -->
<!-- isoreceived="20110804161434" -->
<!-- sent="Thu, 4 Aug 2011 18:14:29 +0200" -->
<!-- isosent="20110804161429" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?" -->
<!-- id="20110804161429.GM4409_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="277979399.1946888.1312473984775.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-08-04 12:14:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2275.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2273.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2265.php">Brice Goglin: "[hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2275.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Reply:</strong> <a href="2275.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Thu 04 Aug 2011 18:06:24 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 04/08/2011 17:48, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Brice Goglin, le Thu 04 Aug 2011 17:47:17 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /home/bgoglin/SOFT/hwloc/branch-1.2/build/src/.libs/libhwloc.a(topology-linux.o):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In function `hwloc_linux_set_thread_cpubind':
</span><br>
<span class="quotelev3">&gt; &gt;&gt; topology-linux.c:(.text+0x1070): undefined reference to `pthread_self'
</span><br>
<span class="quotelev2">&gt; &gt; Odd. This should be in libc.so.6... Doesn't libc provide it on that machine?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's in libc.so.6 but not in libc.a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; objdump -t /usr/lib/x86_64-linux-gnu/libc.a | grep pthread_self =&gt; nothing
</span><br>
<p>Hum, that's poor support for pthread stubs in glibc then.  I've
<br>
committed an additional check for a weak pthread_self reference.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2275.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Previous message:</strong> <a href="2273.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2265.php">Brice Goglin: "[hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2275.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>Reply:</strong> <a href="2275.php">Brice Goglin: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
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
