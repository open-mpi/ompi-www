<?
$subject_val = "Re: [OMPI users] oversubscription of slots with GridEngine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 10:09:47 2014" -->
<!-- isoreceived="20141111150947" -->
<!-- sent="Tue, 11 Nov 2014 15:09:34 +0000" -->
<!-- isosent="20141111150934" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oversubscription of slots with GridEngine" -->
<!-- id="87ppctn58x.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="814E6D361B66804FBF146E8AB57FE1CC2E31C902_at_CISAMRMBS02.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] oversubscription of slots with GridEngine<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 10:09:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25747.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25745.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25718.php">SLIM H.A.: "[OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;SLIM H.A.&quot; &lt;h.a.slim_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; We switched on hyper threading on our cluster with two eight core
</span><br>
<span class="quotelev1">&gt; sockets per node (32 threads per node).
</span><br>
<p>Assuming that's Xeon-ish hyperthreading, the best advice is not to.  It
<br>
will typically hurt performance of HPC applications, not least if it
<br>
defeats core binding, and it is likely to confusion with resource
<br>
managers.  If there are specific applications which benefit from it,
<br>
under Linux you can switch it on on the relevant cores for the duration
<br>
of jobs which ask for it.
<br>
<p><span class="quotelev1">&gt; We configured  gridengine with 16 slots per node to allow the 16 extra
</span><br>
<span class="quotelev1">&gt; threads for kernel process use
</span><br>
<p>Have you actually measured that?  We did, and we switch off HT at boot
<br>
time.  We've never had cause to turn it on, though there might be a few
<br>
jobs which could use it.
<br>
<p><span class="quotelev1">&gt; but this apparently does not work. Printout of the gridengine hostfile
</span><br>
<span class="quotelev1">&gt; shows that for a 32 slots job, 16 slots are placed on each of two
</span><br>
<span class="quotelev1">&gt; nodes as expected. Including the openmpi --display-map option shows
</span><br>
<span class="quotelev1">&gt; that all 32 processes are incorrectly placed on the head node. Here is
</span><br>
<span class="quotelev1">&gt; part of the output
</span><br>
<p>If OMPI is scheduling by thread, then that's what you'd expect.  (As far
<br>
as I know, SGE will DTRT, binding a cores per slot in that case, but
<br>
I'll look at bug reports if not.)
<br>
<p><span class="quotelev1">&gt; I found some related mailings about a new warning in 1.8.2 about oversubscription and  I tried a few options to avoid the use of the extra threads for MPI tasks by openmpi without success, e.g. variants of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --cpus-per-proc 1 
</span><br>
<span class="quotelev1">&gt; --bind-to-core 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and some others. Gridengine treats hw threads as cores==slots (?)
</span><br>
<p>What a slot is is up to you, but if you want to do core binding at all
<br>
sensibly, it needs to correspond to a core.  You can fiddle things in
<br>
the job itself (see the recent thread that Mark started for OMPI --np !=
<br>
SGE NSLOTS).
<br>
<p><span class="quotelev1">&gt; but the content of $PE_HOSTFILE suggests it distributes the slots
</span><br>
<span class="quotelev1">&gt; sensibly  so it seems there is an option for openmpi required to get
</span><br>
<span class="quotelev1">&gt; 16 cores per node?
</span><br>
<p>I'm not sure precisely what you want, but with OMPI 1.8, you should be
<br>
able to lay out the job by core if that's what you want.  That may
<br>
requires exclusive node access, which makes SGE core binding a null
<br>
operation.
<br>
<p><span class="quotelev1">&gt; I tried both 1.8.2, 1.8.3 and also 1.6.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for some clarification that anyone can give.
</span><br>
<p>The above is for the current SGE with a recent hwloc.  If Durham are
<br>
still using an ancient version, it may not apply, but that should be
<br>
irrelevant with -l exclusive or a fixed-count PE.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25747.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25745.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25718.php">SLIM H.A.: "[OMPI users] oversubscription of slots with GridEngine"</a>
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
