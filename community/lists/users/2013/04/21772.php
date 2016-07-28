<?
$subject_val = "Re: [OMPI users] OpenMPI at scale on Cray XK7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 23 13:17:53 2013" -->
<!-- isoreceived="20130423171753" -->
<!-- sent="Tue, 23 Apr 2013 10:17:46 -0700" -->
<!-- isosent="20130423171746" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI at scale on Cray XK7" -->
<!-- id="38B2341B-3278-49BA-A380-AED9708CA5F3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130423170917.GB98728_at_panthera.lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-23 13:17:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21773.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21771.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21771.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21773.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21773.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 23, 2013, at 10:09 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Apr 23, 2013 at 12:21:49PM +0400, ???????????????????? ???????????? wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Nathan,  could you please advise what is expected startup time for OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; job at such scale (128K ranks)? I'm interesting in
</span><br>
<span class="quotelev2">&gt;&gt; 1) time from mpirun start to completion of MPI_Init()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It takes less than a minute to run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 131072 /bin/true
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2) time from MPI_Init() start to completion of MPI_Init()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A simple MPI application took about about 1.25 mins to run. If you want to see our setup you can take a look at contrib/platform/lanl/cray_xe6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From my experience for 52800 rank job
</span><br>
<span class="quotelev2">&gt;&gt; 1) took around 20 min
</span><br>
<span class="quotelev2">&gt;&gt; 2) took around 12 min
</span><br>
<span class="quotelev2">&gt;&gt; that actually looks like a hung.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How many nodes? I have never seen launch times that bad on Cielo. You could try adding -mca routed debruijn -novm and see if that helps. It will reduce the amount of communication between compute nodes and the login node.
</span><br>
<p>I believe the debrujin module was turned off a while ago due to a bug that wasn't fixed. However, try using
<br>
<p>&quot;-mca routed radix -mca routed_radix 64&quot;
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any advice how to improve startup times of large scale jobs would be very
</span><br>
<span class="quotelev2">&gt;&gt; much appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The bottleneck for launching at scale is the initial communication between the orteds and mpirun. At this time I don't know what can be done to improve that (I have some ideas but nothing has been implemented yet). At 8192 nodes this takes less than a minute. Everything else should be fairly quick.
</span><br>
<p>I mentioned this to Pasha on the phone call today. We had previously collaborated to get a pretty fast startup time on this machine - I believe we used static ports to reduce the initial comm scaling. You might want to check with him.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
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
<li><strong>Next message:</strong> <a href="21773.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21771.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21771.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21773.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21773.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
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
