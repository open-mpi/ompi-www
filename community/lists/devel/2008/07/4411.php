<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 11:32:08 2008" -->
<!-- isoreceived="20080723153208" -->
<!-- sent="Wed, 23 Jul 2008 11:32:01 -0400" -->
<!-- isosent="20080723153201" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM" -->
<!-- id="2B3E39C6-BA24-4D43-8949-56F3562F9CB6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48874219.4060308_at_sun.com" -->
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
<strong>Date:</strong> 2008-07-23 11:32:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4412.php">Lenny Verkhovsky: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4410.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4407.php">Terry Dontje: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4412.php">Lenny Verkhovsky: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Reply:</strong> <a href="4412.php">Lenny Verkhovsky: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Reply:</strong> <a href="4413.php">Terry Dontje: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM"</a>
<li><strong>Reply:</strong> <a href="4414.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2008, at 10:37 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; This seems to work for me too.  What is interesting is my  
</span><br>
<span class="quotelev1">&gt; experiments have shown that if you run on RH5.1 you don't need to  
</span><br>
<span class="quotelev1">&gt; set mpi_yield_when_idle to 0.
</span><br>
<p>Yes, this makes sense -- on RHEL5.1, it's a much newer Linux kernel  
<br>
and PLPA works as expected there.  So ODLS uses the values that PLPA  
<br>
passes back and all is good.
<br>
<p>On older Linux kernels, we're effectively returning &quot;not supported&quot;  
<br>
from paffinity, and therefore ODLS (rightly) assumes that it can't  
<br>
know anything and puts us into the &quot;oversubscribed&quot; state.
<br>
<p>I'm working on a fix.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4412.php">Lenny Verkhovsky: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4410.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4407.php">Terry Dontje: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4412.php">Lenny Verkhovsky: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Reply:</strong> <a href="4412.php">Lenny Verkhovsky: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Reply:</strong> <a href="4413.php">Terry Dontje: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250:	Performance	problem on SM"</a>
<li><strong>Reply:</strong> <a href="4414.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance	problem on SM"</a>
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
