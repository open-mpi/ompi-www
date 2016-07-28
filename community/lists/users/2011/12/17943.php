<?
$subject_val = "Re: [OMPI users] Specifying GPU on mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 12 15:53:12 2011" -->
<!-- isoreceived="20111212205312" -->
<!-- sent="Mon, 12 Dec 2011 14:53:08 -0600" -->
<!-- isosent="20111212205308" -->
<!-- name="Erin Rasmussen" -->
<!-- email="erin.rasmussen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Specifying GPU on mpi" -->
<!-- id="4EE669B4.8050307_at_icecube.wisc.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20111212204940.GA27750_at_rei.informatik.uni-erlangen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Specifying GPU on mpi<br>
<strong>From:</strong> Erin Rasmussen (<em>erin.rasmussen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-12 15:53:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17944.php">Andreas Schäfer: "Re: [OMPI users] Specifying GPU on mpi"</a>
<li><strong>Previous message:</strong> <a href="17942.php">Andreas Sch&#228;fer: "Re: [OMPI users] Specifying GPU on mpi"</a>
<li><strong>In reply to:</strong> <a href="17942.php">Andreas Sch&#228;fer: "Re: [OMPI users] Specifying GPU on mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17944.php">Andreas Schäfer: "Re: [OMPI users] Specifying GPU on mpi"</a>
<li><strong>Reply:</strong> <a href="17944.php">Andreas Schäfer: "Re: [OMPI users] Specifying GPU on mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm working with a cluster that has both CPUs and GPUs, and I'm trying 
<br>
to run the High Performance Linpack benchmark on it. Before I can do a 
<br>
full system run, I have to figure out how to get the benchmark to run on 
<br>
both GPUs and CPUs at the same time. I have HPL working fine with 
<br>
openmpi using multiple nodes, but now I'm trying to use it on our system 
<br>
with multiple nodes with CPUs and GPUs.
<br>
<p>On 12/12/2011 02:49 PM, Andreas Sch&#228;fer wrote:
<br>
<span class="quotelev1">&gt; Hi Erin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; uhm, I don't think this is related to MPI as MPI is completely
</span><br>
<span class="quotelev1">&gt; orthogonal to GPU programming. MPI doesn't even know about GPUs. Just
</span><br>
<span class="quotelev1">&gt; select the GPU like you weren't using MPI at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 14:44 Mon 12 Dec     , Erin Rasmussen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have multiple GPUs on a node in my cluster and am trying to run some
</span><br>
<span class="quotelev2">&gt;&gt; benchmarks on the system. However, since my department is in research
</span><br>
<span class="quotelev2">&gt;&gt; and has a job system set up, I can only take one GPU offline to test
</span><br>
<span class="quotelev2">&gt;&gt; until I are sure I know what I are doing. My problem is trying to set up
</span><br>
<span class="quotelev2">&gt;&gt; the mpirun command to specify a single GPU. I understand how to use
</span><br>
<span class="quotelev2">&gt;&gt; mpirun to run programs on specific processors on different nodes, but
</span><br>
<span class="quotelev2">&gt;&gt; the GPUs show up as devices and not processors. How do I set up my
</span><br>
<span class="quotelev2">&gt;&gt; mpirun command to use a specific GPU, or is that even possible?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17943/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17944.php">Andreas Schäfer: "Re: [OMPI users] Specifying GPU on mpi"</a>
<li><strong>Previous message:</strong> <a href="17942.php">Andreas Sch&#228;fer: "Re: [OMPI users] Specifying GPU on mpi"</a>
<li><strong>In reply to:</strong> <a href="17942.php">Andreas Sch&#228;fer: "Re: [OMPI users] Specifying GPU on mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17944.php">Andreas Schäfer: "Re: [OMPI users] Specifying GPU on mpi"</a>
<li><strong>Reply:</strong> <a href="17944.php">Andreas Schäfer: "Re: [OMPI users] Specifying GPU on mpi"</a>
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
