<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 12:58:44 2008" -->
<!-- isoreceived="20081008165844" -->
<!-- sent="Wed, 8 Oct 2008 12:58:38 -0400" -->
<!-- isosent="20081008165838" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="37E6EB7E-271B-467D-9A91-C69C5CEE2ECF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1223477892.11054.3.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 12:58:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6906.php">Sudhakar Mahalingam: "[OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>Previous message:</strong> <a href="6904.php">Terry Dontje: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>In reply to:</strong> <a href="6902.php">Ashley Pittman: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6896.php">Samuel Sarholz: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 8, 2008, at 10:58 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; You probably already know this but the obvious candidate here is the
</span><br>
<span class="quotelev1">&gt; memcpy() function, icc sticks in it's own which in some cases is much
</span><br>
<span class="quotelev1">&gt; better than the libc one.  It's unusual for compilers to have *huge*
</span><br>
<span class="quotelev1">&gt; differences from code optimisations alone.
</span><br>
<p><p>Yep -- memcpy is one of the things that we're looking at.  Haven't  
<br>
heard back on the results from the next round of testing yet (one of  
<br>
the initial suggestions we had was to separate openib vs. sm  
<br>
performance and see if one of them yielded an obvious difference).
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
<li><strong>Next message:</strong> <a href="6906.php">Sudhakar Mahalingam: "[OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>Previous message:</strong> <a href="6904.php">Terry Dontje: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>In reply to:</strong> <a href="6902.php">Ashley Pittman: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6896.php">Samuel Sarholz: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
