<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 11:50:34 2008" -->
<!-- isoreceived="20080723155034" -->
<!-- sent="Wed, 23 Jul 2008 11:50:28 -0400" -->
<!-- isosent="20080723155028" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM" -->
<!-- id="C0E86069-395F-4B36-94A9-7EAA02F36DCA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2B3E39C6-BA24-4D43-8949-56F3562F9CB6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 11:50:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4415.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4413.php">Terry Dontje: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4411.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in r19001.  Please re-test; it fixes the problem for me (i.e.,  
<br>
no need to manually specify sched_yield=0).
<br>
<p>BTW, this never came up before because:
<br>
<p>- the ODLS used to use paffinity, but before PLPA supported the  
<br>
topology stuff and therefore always returned the number of processors
<br>
- when we updated PLPA, the ODLS wasn't using paffinity anymore
<br>
- we only re-updated ODLS to use paffinity recently, and that's when  
<br>
this problem surfaced
<br>
<p><p>On Jul 23, 2008, at 11:32 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 23, 2008, at 10:37 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This seems to work for me too.  What is interesting is my  
</span><br>
<span class="quotelev2">&gt;&gt; experiments have shown that if you run on RH5.1 you don't need to  
</span><br>
<span class="quotelev2">&gt;&gt; set mpi_yield_when_idle to 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, this makes sense -- on RHEL5.1, it's a much newer Linux kernel  
</span><br>
<span class="quotelev1">&gt; and PLPA works as expected there.  So ODLS uses the values that PLPA  
</span><br>
<span class="quotelev1">&gt; passes back and all is good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On older Linux kernels, we're effectively returning &quot;not supported&quot;  
</span><br>
<span class="quotelev1">&gt; from paffinity, and therefore ODLS (rightly) assumes that it can't  
</span><br>
<span class="quotelev1">&gt; know anything and puts us into the &quot;oversubscribed&quot; state.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working on a fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4415.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4413.php">Terry Dontje: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4411.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
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
