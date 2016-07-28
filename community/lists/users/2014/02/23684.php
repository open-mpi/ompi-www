<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 08:06:02 2014" -->
<!-- isoreceived="20140227130602" -->
<!-- sent="Thu, 27 Feb 2014 08:06:02 -0500" -->
<!-- isosent="20140227130602" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="A9A335FC-833F-46C2-AC34-7608F027DB9D_at_nrl.navy.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="530EEAF4.1000209_at_legi.grenoble-inp.fr" -->
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
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 08:06:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23685.php">Ralph Castain: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23683.php">Patrick Begou: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23683.php">Patrick Begou: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23685.php">Ralph Castain: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23685.php">Ralph Castain: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23686.php">John Hearns: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23712.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 27, 2014, at 2:36 AM, Patrick Begou &lt;Patrick.Begou_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Bernd Dammann wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Using the workaround '--bind-to-core' does only make sense for those jobs, that allocate full nodes, but the majority of our jobs don't do that.
</span><br>
<span class="quotelev1">&gt; Why ?
</span><br>
<span class="quotelev1">&gt; We still use this option in OpenMPI (1.6.x, 1.7.x) with OpenFOAM and other applications to attach each process on its core because sometimes linux move processes and 2 process can run on the same core, slowing the application. Even if we do not use full nodes.
</span><br>
<span class="quotelev1">&gt; '--bind-to-core' is only not applicable if you mix OpenMP and MPI as all your threads will be binded to the same core but I do not remember that OpenFOAM does this yet.
</span><br>
<p>But if your jobs don't allocate full nodes and there are two jobs on the same node
<br>
they can end up bound to the same subset of cores.  Torque cpusets should in 
<br>
principle be able to do this (queuing system allocates distinct sets of cores to
<br>
distinct jobs), but I've never used them myself.
<br>
<p>Here we've just basically given up on jobs that allocate a non-integer # of 
<br>
nodes.  In principle they can (and then I turn off bind by core), but hardly anyone 
<br>
does it except for some serial jobs.  Then again, we have a mix of 8 and 16 core
<br>
nodes.  If we had only 32 or 64 core nodes we might be less tolerant of this 
<br>
restriction.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23685.php">Ralph Castain: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23683.php">Patrick Begou: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23683.php">Patrick Begou: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23685.php">Ralph Castain: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23685.php">Ralph Castain: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23686.php">John Hearns: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23712.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
