<?
$subject_val = "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 17:50:28 2015" -->
<!-- isoreceived="20151002215028" -->
<!-- sent="Fri, 2 Oct 2015 14:49:25 -0700" -->
<!-- isosent="20151002214925" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes" -->
<!-- id="F329011F-BF38-471E-A166-F02FB9DA8395_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="560EA1D7.9030406_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-02 17:49:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27775.php">Ralph Castain: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
<li><strong>Previous message:</strong> <a href="27773.php">Surivinta Surivinta: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
<li><strong>In reply to:</strong> <a href="27770.php">Marcin Krotkiewski: "[OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27776.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27776.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you please send me the allocation request you made (so I can see what you specified on the cmd line), and the mpirun cmd line?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Oct 2, 2015, at 8:25 AM, Marcin Krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I fail to make OpenMPI bind to cores correctly when running from within SLURM-allocated CPU resources spread over a range of compute nodes in an otherwise homogeneous cluster. I have found this thread
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24682.php">http://www.open-mpi.org/community/lists/users/2014/06/24682.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and did try to use what Ralph suggested there (--hetero-nodes), but it does not work (v. 1.10.0). When running with --report-bindings I get messages like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [compute-9-11.local:27571] MCW rank 10 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for all ranks outside of my first physical compute node. Moreover, everything works as expected if I ask SLURM to assign entire compute nodes. So it does look like Ralph's diagnose presented in that thread is correct, just the --hetero-nodes switch does not work for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have written a short code that uses sched_getaffinity to print the effective bindings: all MPI ranks except of those on the first node are bound to all CPU cores allocated by SLURM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do I have to do something except of --hetero-nodes, or is this a problem that needs further investigation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Marcin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27770.php">http://www.open-mpi.org/community/lists/users/2015/10/27770.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27775.php">Ralph Castain: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
<li><strong>Previous message:</strong> <a href="27773.php">Surivinta Surivinta: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
<li><strong>In reply to:</strong> <a href="27770.php">Marcin Krotkiewski: "[OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27776.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27776.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
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
