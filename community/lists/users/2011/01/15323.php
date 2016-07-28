<?
$subject_val = "Re: [OMPI users] mpirun --nice 10 prog ??";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 12:43:21 2011" -->
<!-- isoreceived="20110107174321" -->
<!-- sent="Fri, 07 Jan 2011 09:43:17 -0800" -->
<!-- isosent="20110107174317" -->
<!-- name="David Mathog" -->
<!-- email="mathog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun --nice 10 prog ??" -->
<!-- id="E1PbGLN-0006fT-Gk_at_mendel.bio.caltech.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] mpirun --nice 10 prog ??" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun --nice 10 prog ??<br>
<strong>From:</strong> David Mathog (<em>mathog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-07 12:43:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15324.php">Eugene Loh: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>Previous message:</strong> <a href="15322.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Maybe in reply to:</strong> <a href="15296.php">David Mathog: "[OMPI users] mpirun --nice 10 prog ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15324.php">Eugene Loh: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>Reply:</strong> <a href="15324.php">Eugene Loh: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Afraid not - though you could alias your program name to be &quot;nice --10
</span><br>
prog&quot;
<br>
<span class="quotelev1">&gt; 
</span><br>
<p>Is there an OMPI wish list?  If so, can we please add to it &quot;a method
<br>
to tell mpirun  what nice values to use when it starts programs on
<br>
nodes&quot;?  Minimally, something like this:
<br>
<p>&nbsp;&nbsp;--nice  12   #nice value used on all nodes
<br>
&nbsp;&nbsp;--mnice 5    #nice value for master (first) node
<br>
&nbsp;&nbsp;--wnice 10   #nice value for worker (worker) nodes
<br>
<p>For my purposes that would be enough, as the only distinction is
<br>
master/worker.  For more complex environments more flexibility might be
<br>
desired, for instance, in a large cluster, where a subset of nodes
<br>
integrate data from worker subsets, effectively acting as &quot;local masters&quot;.
<br>
<p>Obviously for platforms without nice mpirun would try to use whatever
<br>
priority scheme was available, and failing that, just run the program as
<br>
it does now.
<br>
<p>Or are we the only site where quick high priority jobs must run on the
<br>
same nodes where long term low priority jobs are also running?
<br>
<p>Thanks,
<br>
<p>David Mathog
<br>
mathog_at_[hidden]
<br>
Manager, Sequence Analysis Facility, Biology Division, Caltech
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15324.php">Eugene Loh: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>Previous message:</strong> <a href="15322.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Maybe in reply to:</strong> <a href="15296.php">David Mathog: "[OMPI users] mpirun --nice 10 prog ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15324.php">Eugene Loh: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
<li><strong>Reply:</strong> <a href="15324.php">Eugene Loh: "Re: [OMPI users] mpirun --nice 10 prog ??"</a>
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
