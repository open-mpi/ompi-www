<?
$subject_val = "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 09:37:13 2009" -->
<!-- isoreceived="20090921133713" -->
<!-- sent="Mon, 21 Sep 2009 09:37:08 -0400" -->
<!-- isosent="20090921133708" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX" -->
<!-- id="F94A5770-63B8-41BB-A3F2-D2591404E10F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AB77B80.7050602_at_inria.fr" -->
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
<strong>Date:</strong> 2009-09-21 09:37:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6861.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Previous message:</strong> <a href="6859.php">Terry Dontje: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>In reply to:</strong> <a href="6856.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6861.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Reply:</strong> <a href="6861.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you just want to wait for the ummunotify stuff in OMPI?  I'm half  
<br>
done making a merged &quot;linux&quot; memory component (i.e., it merges the  
<br>
ptmalloc2 component with the new ummunotify stuff).
<br>
<p>It won't help for kernels &lt;2.6.32, of course.  :-)
<br>
<p><p>On Sep 21, 2009, at 9:11 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 21, 2009, at 5:50 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am playing with mx__regcache_clean() in Open-MX so as to have  
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cleanup the Open-MX regcache when needed. It causes some  
</span><br>
<span class="quotelev1">&gt; deadlocks since
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OpenMPI intercepts Open-MX' own free() calls. Is there a &quot;safe&quot;  
</span><br>
<span class="quotelev1">&gt; way to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have Open-MX free/munmap calls not invoke OpenMPI interception  
</span><br>
<span class="quotelev1">&gt; hooks?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Not ATM, no.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is there a way to detect the caller of free/munmap so that my
</span><br>
<span class="quotelev3">&gt; &gt;&gt; regcache_clean does nothing in this case? Otherwise, I guess I'll  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to add a private malloc implementation inside Open-MX and hope  
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; won't see it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you structure your code to not call free/munmap inside the  
</span><br>
<span class="quotelev1">&gt; handler?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first problem is actually about thread-safety. Most Open-MX
</span><br>
<span class="quotelev1">&gt; functions, including mx_regcache_clean(), take a pthread mutex. So I
</span><br>
<span class="quotelev1">&gt; would have to move all free/munmap outside of the locked section.  
</span><br>
<span class="quotelev1">&gt; That's
</span><br>
<span class="quotelev1">&gt; probably feasible but requires a lot of work :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6861.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Previous message:</strong> <a href="6859.php">Terry Dontje: "Re: [OMPI devel] MPIR_Breakpoint visibility"</a>
<li><strong>In reply to:</strong> <a href="6856.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6861.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
<li><strong>Reply:</strong> <a href="6861.php">Brice Goglin: "Re: [OMPI devel] detecting regcache_clean deadlocks in Open-MX"</a>
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
