<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 28 02:55:43 2014" -->
<!-- isoreceived="20140228075543" -->
<!-- sent="Fri, 28 Feb 2014 08:55:45 +0100" -->
<!-- isosent="20140228075545" -->
<!-- name="Bernd Dammann" -->
<!-- email="bd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="53104101.4030006_at_cc.dtu.dk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A9A335FC-833F-46C2-AC34-7608F027DB9D_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] slowdown with infiniband and latest CentOS kernel<br>
<strong>From:</strong> Bernd Dammann (<em>bd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-28 02:55:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23713.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23711.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23684.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23688.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/27/14 14:06 PM, Noam Bernstein wrote:
<br>
<span class="quotelev1">&gt; On Feb 27, 2014, at 2:36 AM, Patrick Begou &lt;Patrick.Begou_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bernd Dammann wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using the workaround '--bind-to-core' does only make sense for those jobs, that allocate full nodes, but the majority of our jobs don't do that.
</span><br>
<span class="quotelev2">&gt;&gt; Why ?
</span><br>
<span class="quotelev2">&gt;&gt; We still use this option in OpenMPI (1.6.x, 1.7.x) with OpenFOAM and other applications to attach each process on its core because sometimes linux move processes and 2 process can run on the same core, slowing the application. Even if we do not use full nodes.
</span><br>
<span class="quotelev2">&gt;&gt; '--bind-to-core' is only not applicable if you mix OpenMP and MPI as all your threads will be binded to the same core but I do not remember that OpenFOAM does this yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if your jobs don't allocate full nodes and there are two jobs on the same node
</span><br>
<span class="quotelev1">&gt; they can end up bound to the same subset of cores.
</span><br>
<p>Exactly, that's our problem!
<br>
<p><span class="quotelev1">&gt; Torque cpusets should in
</span><br>
<span class="quotelev1">&gt; principle be able to do this (queuing system allocates distinct sets of cores to
</span><br>
<span class="quotelev1">&gt; distinct jobs), but I've never used them myself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We started to use them at some point, but it had some side effects 
<br>
(leaving dangling jobs/processes), so we stopped using them.  And 
<br>
certain ISV applications has issues as well.
<br>
<p><span class="quotelev1">&gt; Here we've just basically given up on jobs that allocate a non-integer # of
</span><br>
<span class="quotelev1">&gt; nodes.  In principle they can (and then I turn off bind by core), but hardly anyone
</span><br>
<span class="quotelev1">&gt; does it except for some serial jobs.  Then again, we have a mix of 8 and 16 core
</span><br>
<span class="quotelev1">&gt; nodes.  If we had only 32 or 64 core nodes we might be less tolerant of this
</span><br>
<span class="quotelev1">&gt; restriction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We are running a system with a very inhomogeneous workload, i.e. 
<br>
in-house applications, or applications which we compile ourselves, but 
<br>
also 3rd party applications, that not always are designed with a 
<br>
(multi-user) cluster in mind.
<br>
<p>Rgds,
<br>
Bernd
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23713.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23711.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23684.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23688.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
