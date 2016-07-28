<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 10:24:47 2014" -->
<!-- isoreceived="20140227152447" -->
<!-- sent="Thu, 27 Feb 2014 07:22:56 -0800" -->
<!-- isosent="20140227152256" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="3E6BD7D8-0B2C-426B-AA42-F4A296C9281E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 10:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23686.php">John Hearns: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23684.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23684.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23686.php">John Hearns: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 27, 2014, at 5:06 AM, Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 27, 2014, at 2:36 AM, Patrick Begou &lt;Patrick.Begou_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; they can end up bound to the same subset of cores.  Torque cpusets should in 
</span><br>
<span class="quotelev1">&gt; principle be able to do this (queuing system allocates distinct sets of cores to
</span><br>
<span class="quotelev1">&gt; distinct jobs), but I've never used them myself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here we've just basically given up on jobs that allocate a non-integer # of 
</span><br>
<span class="quotelev1">&gt; nodes.  In principle they can (and then I turn off bind by core), but hardly anyone 
</span><br>
<span class="quotelev1">&gt; does it except for some serial jobs.  Then again, we have a mix of 8 and 16 core
</span><br>
<span class="quotelev1">&gt; nodes.  If we had only 32 or 64 core nodes we might be less tolerant of this 
</span><br>
<span class="quotelev1">&gt; restriction.
</span><br>
<p>I don't know if the original poster is using a resource manager or not, but we can support multi-tenant operations regardless. If you are using a resource manager, you can ask the RM to bind your allocation to a specific number of cores on each node. OMPI will then respect that restriction, binding your processes to cores within it.
<br>
<p>If you aren't using a resource manager, or simply want to run multiple jobs on your own dedicated nodes, you can impose the restriction yourself by just adding the --cpu-set option to your cmd line:
<br>
<p>mpirun --cpu-set 0-3 ...
<br>
<p>will restrict OMPI to using the first four cores on each node. Any comma-delimited set of ranges can be provided.
<br>
<p>Even more mapping and binding options are provided in the 1.7 series, so you might want to look at it.
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 											Noam
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23686.php">John Hearns: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23684.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23684.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23686.php">John Hearns: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
