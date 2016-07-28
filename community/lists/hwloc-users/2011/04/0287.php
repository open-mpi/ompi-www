<?
$subject_val = "[hwloc-users] Fwd: [OMPI devel] problem with absent L3 on AMD CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 10 07:06:11 2011" -->
<!-- isoreceived="20110410110611" -->
<!-- sent="Sun, 10 Apr 2011 07:05:57 -0400" -->
<!-- isosent="20110410110557" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-users] Fwd: [OMPI devel] problem with absent L3 on AMD CPU" -->
<!-- id="F8565609-A13B-4FD2-93D9-3AB846349FD4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DA16099.2030006_at_icyb.net.ua" -->
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
<strong>Subject:</strong> [hwloc-users] Fwd: [OMPI devel] problem with absent L3 on AMD CPU<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-10 07:05:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0288.php">Samuel Thibault: "Re: [hwloc-users] Fwd: [OMPI devel] problem with absent L3 on AMD CPU"</a>
<li><strong>Previous message:</strong> <a href="0286.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.1.2rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0288.php">Samuel Thibault: "Re: [hwloc-users] Fwd: [OMPI devel] problem with absent L3 on AMD CPU"</a>
<li><strong>Maybe reply:</strong> <a href="0288.php">Samuel Thibault: "Re: [hwloc-users] Fwd: [OMPI devel] problem with absent L3 on AMD CPU"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Moving this patch over to the hwloc users list...
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Andriy Gapon &lt;avg_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: April 10, 2011 3:47:37 AM EDT
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] problem with absent L3 on AMD CPU
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that lstopo can get mightly confused with AMD Athlon II processor
</span><br>
<span class="quotelev1">&gt; (family 10h) that doesn't have L3 cache.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe that the following patch should fix that:
</span><br>
<span class="quotelev1">&gt; --- src/topology-x86.c.orig	2011-04-10 10:38:39.370239628 +0300
</span><br>
<span class="quotelev1">&gt; +++ src/topology-x86.c	2011-04-10 10:38:44.573256245 +0300
</span><br>
<span class="quotelev1">&gt; @@ -59,10 +59,6 @@
</span><br>
<span class="quotelev1">&gt;   unsigned cachenum;
</span><br>
<span class="quotelev1">&gt;   unsigned size = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -  cachenum = infos-&gt;numcaches++;
</span><br>
<span class="quotelev1">&gt; -  infos-&gt;cache = realloc(infos-&gt;cache, infos-&gt;numcaches*sizeof(*infos-&gt;cache));
</span><br>
<span class="quotelev1">&gt; -  cache = &amp;infos-&gt;cache[cachenum];
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;   if (level == 1)
</span><br>
<span class="quotelev1">&gt;     size = ((cpuid &gt;&gt; 24)) &lt;&lt; 10;
</span><br>
<span class="quotelev1">&gt;   else if (level == 2)
</span><br>
<span class="quotelev1">&gt; @@ -72,6 +68,10 @@
</span><br>
<span class="quotelev1">&gt;   if (!size)
</span><br>
<span class="quotelev1">&gt;     return;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +  cachenum = infos-&gt;numcaches++;
</span><br>
<span class="quotelev1">&gt; +  infos-&gt;cache = realloc(infos-&gt;cache, infos-&gt;numcaches*sizeof(*infos-&gt;cache));
</span><br>
<span class="quotelev1">&gt; +  cache = &amp;infos-&gt;cache[cachenum];
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;   cache-&gt;type = 1;
</span><br>
<span class="quotelev1">&gt;   cache-&gt;level = level;
</span><br>
<span class="quotelev1">&gt;   if (level &lt;= 2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Otherwise, numcaches gets incremented and the cache array grows a new entry, but
</span><br>
<span class="quotelev1">&gt; that new entry is not initialized.  Maybe this is an OS or envrionment specific
</span><br>
<span class="quotelev1">&gt; problem, but at least here on FreeBSD the new memory is not zero-ed out and
</span><br>
<span class="quotelev1">&gt; POSIX doesn't require realloc to do that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This report is for the version 1.1.2.
</span><br>
<span class="quotelev1">&gt; Apologies for the noise if this problem is already fixed in newer code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Andriy Gapon
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="0288.php">Samuel Thibault: "Re: [hwloc-users] Fwd: [OMPI devel] problem with absent L3 on AMD CPU"</a>
<li><strong>Previous message:</strong> <a href="0286.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.1.2rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0288.php">Samuel Thibault: "Re: [hwloc-users] Fwd: [OMPI devel] problem with absent L3 on AMD CPU"</a>
<li><strong>Maybe reply:</strong> <a href="0288.php">Samuel Thibault: "Re: [hwloc-users] Fwd: [OMPI devel] problem with absent L3 on AMD CPU"</a>
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
