<?
$subject_val = "Re: [OMPI users] OpenMPI at scale on Cray XK7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 23 13:45:27 2013" -->
<!-- isoreceived="20130423174527" -->
<!-- sent="Tue, 23 Apr 2013 11:45:23 -0600" -->
<!-- isosent="20130423174523" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI at scale on Cray XK7" -->
<!-- id="20130423174523.GC98728_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="38B2341B-3278-49BA-A380-AED9708CA5F3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI at scale on Cray XK7<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-23 13:45:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21774.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21772.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21772.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21774.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21774.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 23, 2013 at 10:17:46AM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2013, at 10:09 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Apr 23, 2013 at 12:21:49PM +0400, ???????????????????? ???????????? wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nathan,  could you please advise what is expected startup time for OpenMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; job at such scale (128K ranks)? I'm interesting in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1) time from mpirun start to completion of MPI_Init()
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It takes less than a minute to run:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -n 131072 /bin/true
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2) time from MPI_Init() start to completion of MPI_Init()
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A simple MPI application took about about 1.25 mins to run. If you want to see our setup you can take a look at contrib/platform/lanl/cray_xe6.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From my experience for 52800 rank job
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1) took around 20 min
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2) took around 12 min
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that actually looks like a hung.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; How many nodes? I have never seen launch times that bad on Cielo. You could try adding -mca routed debruijn -novm and see if that helps. It will reduce the amount of communication between compute nodes and the login node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe the debrujin module was turned off a while ago due to a bug that wasn't fixed. However, try using
</span><br>
<p>Was it turned off or was the priority lowered? If it was lowered then -mca routed debruijn should work. The -novm is to avoid the bug (as I understand it). I am working on fixing the bug now in hope it will be ready for 1.7.2.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21774.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21772.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21772.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21774.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21774.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
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
