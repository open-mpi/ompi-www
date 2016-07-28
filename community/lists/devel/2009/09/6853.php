<?
$subject_val = "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 08:27:07 2009" -->
<!-- isoreceived="20090921122707" -->
<!-- sent="Mon, 21 Sep 2009 08:27:01 -0400" -->
<!-- isosent="20090921122701" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX" -->
<!-- id="A1933E96-240E-4677-BBBD-D8952506DA5B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AB74C6D.3020904_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 08:27:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6854.php">Jeff Squyres: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Previous message:</strong> <a href="6852.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>In reply to:</strong> <a href="6849.php">Brice Goglin: "[OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6856.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Reply:</strong> <a href="6856.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 21, 2009, at 5:50 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I am playing with mx__regcache_clean() in Open-MX so as to have  
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev1">&gt; cleanup the Open-MX regcache when needed. It causes some deadlocks  
</span><br>
<span class="quotelev1">&gt; since
</span><br>
<span class="quotelev1">&gt; OpenMPI intercepts Open-MX' own free() calls. Is there a &quot;safe&quot; way to
</span><br>
<span class="quotelev1">&gt; have Open-MX free/munmap calls not invoke OpenMPI interception hooks?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Not ATM, no.
<br>
<p><span class="quotelev1">&gt; Or
</span><br>
<span class="quotelev1">&gt; is there a way to detect the caller of free/munmap so that my
</span><br>
<span class="quotelev1">&gt; regcache_clean does nothing in this case? Otherwise, I guess I'll have
</span><br>
<span class="quotelev1">&gt; to add a private malloc implementation inside Open-MX and hope OpenMPI
</span><br>
<span class="quotelev1">&gt; won't see it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Can you structure your code to not call free/munmap inside the handler?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6854.php">Jeff Squyres: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Previous message:</strong> <a href="6852.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock with comm_create since cid allocator change"</a>
<li><strong>In reply to:</strong> <a href="6849.php">Brice Goglin: "[OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6856.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Reply:</strong> <a href="6856.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
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
