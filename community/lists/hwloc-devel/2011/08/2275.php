<?
$subject_val = "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 12:20:57 2011" -->
<!-- isoreceived="20110804162057" -->
<!-- sent="Thu, 04 Aug 2011 18:20:52 +0200" -->
<!-- isosent="20110804162052" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?" -->
<!-- id="4E3AC6E4.7030400_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110804161429.GM4409_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2011-08-04 12:20:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2276.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3586"</a>
<li><strong>Previous message:</strong> <a href="2274.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>In reply to:</strong> <a href="2274.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/08/2011 18:14, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Thu 04 Aug 2011 18:06:24 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Le 04/08/2011 17:48, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice Goglin, le Thu 04 Aug 2011 17:47:17 +0200, a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/bgoglin/SOFT/hwloc/branch-1.2/build/src/.libs/libhwloc.a(topology-linux.o):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In function `hwloc_linux_set_thread_cpubind':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; topology-linux.c:(.text+0x1070): undefined reference to `pthread_self'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Odd. This should be in libc.so.6... Doesn't libc provide it on that machine?
</span><br>
<span class="quotelev2">&gt;&gt; It's in libc.so.6 but not in libc.a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; objdump -t /usr/lib/x86_64-linux-gnu/libc.a | grep pthread_self =&gt; nothing
</span><br>
<span class="quotelev1">&gt; Hum, that's poor support for pthread stubs in glibc then.  I've
</span><br>
<span class="quotelev1">&gt; committed an additional check for a weak pthread_self reference.
</span><br>
<p>Works fine, thanks.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2276.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3586"</a>
<li><strong>Previous message:</strong> <a href="2274.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
<li><strong>In reply to:</strong> <a href="2274.php">Samuel Thibault: "Re: [hwloc-devel] -lpthread in LIBS and REQUIRES?"</a>
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
