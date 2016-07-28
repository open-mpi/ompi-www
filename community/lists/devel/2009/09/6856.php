<?
$subject_val = "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 09:12:14 2009" -->
<!-- isoreceived="20090921131214" -->
<!-- sent="Mon, 21 Sep 2009 15:11:28 +0200" -->
<!-- isosent="20090921131128" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX" -->
<!-- id="4AB77B80.7050602_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A1933E96-240E-4677-BBBD-D8952506DA5B_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 09:11:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6857.php">Ralph Castain: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Previous message:</strong> <a href="6855.php">Terry Dontje: "[OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>In reply to:</strong> <a href="6853.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6860.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Reply:</strong> <a href="6860.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 21, 2009, at 5:50 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am playing with mx__regcache_clean() in Open-MX so as to have OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; cleanup the Open-MX regcache when needed. It causes some deadlocks since
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI intercepts Open-MX' own free() calls. Is there a &quot;safe&quot; way to
</span><br>
<span class="quotelev2">&gt;&gt; have Open-MX free/munmap calls not invoke OpenMPI interception hooks?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not ATM, no.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or
</span><br>
<span class="quotelev2">&gt;&gt; is there a way to detect the caller of free/munmap so that my
</span><br>
<span class="quotelev2">&gt;&gt; regcache_clean does nothing in this case? Otherwise, I guess I'll have
</span><br>
<span class="quotelev2">&gt;&gt; to add a private malloc implementation inside Open-MX and hope OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; won't see it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you structure your code to not call free/munmap inside the handler?
</span><br>
<p>The first problem is actually about thread-safety. Most Open-MX
<br>
functions, including mx_regcache_clean(), take a pthread mutex. So I
<br>
would have to move all free/munmap outside of the locked section. That's
<br>
probably feasible but requires a lot of work :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6857.php">Ralph Castain: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>Previous message:</strong> <a href="6855.php">Terry Dontje: "[OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>In reply to:</strong> <a href="6853.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6860.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Reply:</strong> <a href="6860.php">Jeff Squyres: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
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
