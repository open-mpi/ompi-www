<?
$subject_val = "Re: [OMPI users] Checkpointing an MPI application with OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 10:59:03 2013" -->
<!-- isoreceived="20130128155903" -->
<!-- sent="Mon, 28 Jan 2013 07:58:55 -0800" -->
<!-- isosent="20130128155855" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing an MPI application with OMPI" -->
<!-- id="8355B958-93C1-4348-945E-91367F45EA0C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51069D7F.7030009_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpointing an MPI application with OMPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 10:58:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21245.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Previous message:</strong> <a href="21243.php">Maxime Boissonneault: "[OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>In reply to:</strong> <a href="21243.php">Maxime Boissonneault: "[OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21245.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Reply:</strong> <a href="21245.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Our c/r person has moved on to a different career path, so we may not have anyone who can answer this question.
<br>
<p>What we can say is that checkpointing at any significant scale will always be a losing proposition. It just takes too long and hammers the file system. People have been working on extending the capability with things like &quot;burst buffers&quot; (basically putting an SSD in front of the file system to absorb the checkpoint surge), but that hasn't become very common yet.
<br>
<p>Frankly, what people have found to be the &quot;best&quot; solution is for your app to periodically write out its intermediate results, and then take a flag that indicates &quot;read prior results&quot; when it starts. This minimizes the amount of data being written to the disk. If done correctly, you would only lose whatever work was done since the last intermediate result was written - which is about equivalent to losing whatever works was done since the last checkpoint.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Jan 28, 2013, at 7:47 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am doing checkpointing tests (with BLCR) with an MPI application compiled with OpenMPI 1.6.3, and I am seeing behaviors that are quite strange.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, some details about the tests :
</span><br>
<span class="quotelev1">&gt; - The only filesystem available on the nodes are 1) one tmpfs, 2) one lustre shared filesystem (tested to be able to provide ~15GB/s for writing and support ~40k IOPs).
</span><br>
<span class="quotelev1">&gt; - The job was running with 8 or 16 MPI ranks on nodes with 8 cores (1 or 2 nodes). Each MPI rank was using approximately 200MB of memory.
</span><br>
<span class="quotelev1">&gt; - I was doing checkpoints with ompi-checkpoint and restarting with ompi-restart.
</span><br>
<span class="quotelev1">&gt; - I was starting with mpirun -am ft-enable-cr
</span><br>
<span class="quotelev1">&gt; - The nodes are monitored by ganglia, which allows me to see the number of IOPs and the read/write speed on the filesystem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried a few different mca settings, but I consistently observed that :
</span><br>
<span class="quotelev1">&gt; - The checkpoints lasted ~4-5 minutes each time
</span><br>
<span class="quotelev1">&gt; - During checkpoint, each node (8 ranks) was doing ~500 IOPs, and writing at ~15MB/s.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am worried by the number of IOPs and the very slow writing speed. This was a very small test. We have jobs running with 128 or 256 MPI ranks, each using 1-2 GB of ram per rank. With such jobs, the overall number of IOPs would reach tens of thousands and would completely overload our lustre filesystem. Moreover, with 15MB/s per node, the checkpointing process would take hours.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I improve on that ? Is there an MCA setting that I am missing ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev1">&gt; Ph. D. en physique
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="21245.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Previous message:</strong> <a href="21243.php">Maxime Boissonneault: "[OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>In reply to:</strong> <a href="21243.php">Maxime Boissonneault: "[OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21245.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Reply:</strong> <a href="21245.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
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
