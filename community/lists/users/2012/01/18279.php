<?
$subject_val = "Re: [OMPI users] How to determine MPI rank/process number local to a socket/node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 26 13:04:01 2012" -->
<!-- isoreceived="20120126180401" -->
<!-- sent="Thu, 26 Jan 2012 11:03:53 -0700" -->
<!-- isosent="20120126180353" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to determine MPI rank/process number local to a socket/node" -->
<!-- id="28FCFCD0-C6F5-4FB8-B66A-64662273A9B5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKpxCzJhsz7w0Z=_5aUc5UvzfYdOqoWm59ya4fOQ-HpuZUBegg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to determine MPI rank/process number local to a socket/node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-26 13:03:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18280.php">Jeff Squyres: "Re: [OMPI users] Cant build OpenMPI!"</a>
<li><strong>Previous message:</strong> <a href="18278.php">Frank: "[OMPI users] How to determine MPI rank/process number local to a socket/node"</a>
<li><strong>In reply to:</strong> <a href="18278.php">Frank: "[OMPI users] How to determine MPI rank/process number local to a socket/node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We don't provide a mechanism for determining the node number - never came up before as you can use gethostname to find out what node you are on.
<br>
<p>We do provide an envar that tells you the process rank within the node: OMPI_COMM_WORLD_LOCAL_RANK is what you are probably looking for.
<br>
<p><p>On Jan 26, 2012, at 10:51 AM, Frank wrote:
<br>
<p><span class="quotelev1">&gt; Say, I run a parallel program using MPI. Execution command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 8 -npernode 2 &lt;prg&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; launches 8 processes in total. That is 2 processes per node and 4
</span><br>
<span class="quotelev1">&gt; nodes in total. (OpenMPI 1.5). Where a node comprises 1 CPU (dual
</span><br>
<span class="quotelev1">&gt; core) and network interconnect between nodes is InfiniBand.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, the rank number (or process number) can be determined with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int myrank;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This returns a number between 0 and 7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, How can I determine the node number (in this case a number
</span><br>
<span class="quotelev1">&gt; between 0 and 3) and the process number within a node (number between
</span><br>
<span class="quotelev1">&gt; 0 and 1)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can find this question on stackoverflow (if you prefer to answer
</span><br>
<span class="quotelev1">&gt; through their interface):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://stackoverflow.com/questions/9022496/how-to-determine-mpi-rank-process-number-local-to-a-socket-node">http://stackoverflow.com/questions/9022496/how-to-determine-mpi-rank-process-number-local-to-a-socket-node</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
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
<li><strong>Next message:</strong> <a href="18280.php">Jeff Squyres: "Re: [OMPI users] Cant build OpenMPI!"</a>
<li><strong>Previous message:</strong> <a href="18278.php">Frank: "[OMPI users] How to determine MPI rank/process number local to a socket/node"</a>
<li><strong>In reply to:</strong> <a href="18278.php">Frank: "[OMPI users] How to determine MPI rank/process number local to a socket/node"</a>
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
