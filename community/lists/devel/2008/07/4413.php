<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 11:48:37 2008" -->
<!-- isoreceived="20080723154837" -->
<!-- sent="Wed, 23 Jul 2008 11:48:23 -0400" -->
<!-- isosent="20080723154823" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM" -->
<!-- id="488752C7.6080701_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 11:48:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4414.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4412.php">Lenny Verkhovsky: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4411.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4415.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM"</a>
<li><strong>Reply:</strong> <a href="4415.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 23, 2008, at 10:37 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This seems to work for me too.  What is interesting is my experiments 
</span><br>
<span class="quotelev2">&gt;&gt; have shown that if you run on RH5.1 you don't need to set 
</span><br>
<span class="quotelev2">&gt;&gt; mpi_yield_when_idle to 0.
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
Ok, so I thought I saw slow down with Solaris.  Not sure it is the same 
<br>
thing (wouldn't think so) but I'll test this out soon.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4414.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4412.php">Lenny Verkhovsky: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4411.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4415.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM"</a>
<li><strong>Reply:</strong> <a href="4415.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM"</a>
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
