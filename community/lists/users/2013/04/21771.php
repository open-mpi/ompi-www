<?
$subject_val = "Re: [OMPI users] OpenMPI at scale on Cray XK7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 23 13:09:21 2013" -->
<!-- isoreceived="20130423170921" -->
<!-- sent="Tue, 23 Apr 2013 11:09:17 -0600" -->
<!-- isosent="20130423170917" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI at scale on Cray XK7" -->
<!-- id="20130423170917.GB98728_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6b54dfd063c0b416d6a52c2943f0c410_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-04-23 13:09:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21772.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21770.php">Nick Edmonds: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>In reply to:</strong> <a href="21768.php">&#208;&#148;&#208;&#181;&#209;&#128;&#208;&#177;&#209;&#131;&#208;&#189;&#208;&#190;&#208;&#178;&#208;&#184;&#209;&#135; &#208;&#144;&#208;&#189;&#208;&#180;&#209;&#128;&#208;&#181;&#208;&#185;: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21772.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21772.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 23, 2013 at 12:21:49PM +0400, ???????????????????? ???????????? wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan,  could you please advise what is expected startup time for OpenMPI
</span><br>
<span class="quotelev1">&gt; job at such scale (128K ranks)? I'm interesting in
</span><br>
<span class="quotelev1">&gt; 1) time from mpirun start to completion of MPI_Init()
</span><br>
<p>It takes less than a minute to run:
<br>
<p>mpirun -n 131072 /bin/true
<br>
<p><p><span class="quotelev1">&gt; 2) time from MPI_Init() start to completion of MPI_Init()
</span><br>
<p>A simple MPI application took about about 1.25 mins to run. If you want to see our setup you can take a look at contrib/platform/lanl/cray_xe6.
<br>
<p><span class="quotelev2">&gt; &gt;From my experience for 52800 rank job
</span><br>
<span class="quotelev1">&gt; 1) took around 20 min
</span><br>
<span class="quotelev1">&gt; 2) took around 12 min
</span><br>
<span class="quotelev1">&gt; that actually looks like a hung.
</span><br>
<p>How many nodes? I have never seen launch times that bad on Cielo. You could try adding -mca routed debruijn -novm and see if that helps. It will reduce the amount of communication between compute nodes and the login node.
<br>
<p><span class="quotelev1">&gt; Any advice how to improve startup times of large scale jobs would be very
</span><br>
<span class="quotelev1">&gt; much appreciated.
</span><br>
<p>The bottleneck for launching at scale is the initial communication between the orteds and mpirun. At this time I don't know what can be done to improve that (I have some ideas but nothing has been implemented yet). At 8192 nodes this takes less than a minute. Everything else should be fairly quick.
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21772.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21770.php">Nick Edmonds: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>In reply to:</strong> <a href="21768.php">&#208;&#148;&#208;&#181;&#209;&#128;&#208;&#177;&#209;&#131;&#208;&#189;&#208;&#190;&#208;&#178;&#208;&#184;&#209;&#135; &#208;&#144;&#208;&#189;&#208;&#180;&#209;&#128;&#208;&#181;&#208;&#185;: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21772.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21772.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
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
