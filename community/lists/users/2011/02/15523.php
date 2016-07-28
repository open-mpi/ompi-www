<?
$subject_val = "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  7 00:56:48 2011" -->
<!-- isoreceived="20110207055648" -->
<!-- sent="Sun, 6 Feb 2011 22:56:37 -0700" -->
<!-- isosent="20110207055637" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with SLURM and non-local nodes" -->
<!-- id="F36608DF-F5B7-4F3C-AB27-C8442EE31394_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9AB80F59-D627-44B6-B877-813631AE94B8_at_monash.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault with SLURM and non-local nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-07 00:56:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15524.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15522.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15522.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15524.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The 1.4 series is regularly tested on slurm machines after every modification, and has been running at LANL (and other slurm installations) for quite some time, so I doubt that's the core issue. Likewise, nothing in the system depends upon the FQDN (or anything regarding hostname) - it's just used to print diagnostics.
<br>
<p>Not sure of the issue, and I don't have an ability to test/debug slurm any more, so I'll have to let Sam continue to look into this for you. It's probably some trivial difference in setup, unfortunately. I don't know if you said before, but it might help to know what slurm version you are using. Slurm tends to change a lot between versions (even minor releases), and it is one of the more finicky platforms we support.
<br>
<p><p>On Feb 6, 2011, at 9:12 PM, Michael Curtis wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/02/2011, at 12:36 PM, Michael Curtis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 04/02/2011, at 9:35 AM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just tried to reproduce the problem that you are experiencing and was unable to.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM 2.1.15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI 1.4.3 configured with: --with-platform=./contrib/platform/lanl/tlcc/debug-nopanasas
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I compiled OpenMPI 1.4.3 (vanilla from source tarball) with the same platform file (the only change was to re-enable btl-tcp).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, the result is the same:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To reply to my own post again (sorry!), I tried OpenMPI 1.5.1.  This works fine:
</span><br>
<span class="quotelev1">&gt; salloc -n16 ~/../openmpi/bin/mpirun --display-map mpi
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 151
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: ipc3	Num procs: 8
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 0
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 1
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 2
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 3
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 4
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 5
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 6
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: ipc4	Num procs: 8
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 8
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 9
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 10
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 11
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 12
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 13
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 14
</span><br>
<span class="quotelev1">&gt; 	Process OMPI jobid: [3365,1] Process rank: 15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; Process 2 on eng-ipc3.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; Process 4 on eng-ipc3.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; Process 5 on eng-ipc3.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; Process 0 on eng-ipc3.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; Process 1 on eng-ipc3.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; Process 6 on eng-ipc3.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; Process 3 on eng-ipc3.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; Process 7 on eng-ipc3.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; Process 8 on eng-ipc4.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; Process 11 on eng-ipc4.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; Process 12 on eng-ipc4.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; Process 14 on eng-ipc4.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; Process 15 on eng-ipc4.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; Process 10 on eng-ipc4.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; Process 9 on eng-ipc4.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; Process 13 on eng-ipc4.{FQDN} out of 16
</span><br>
<span class="quotelev1">&gt; salloc: Relinquishing job allocation 151
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does seem very much like there is a bug of some sort in 1.4.3?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15524.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15522.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15522.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15524.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
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
