<?
$subject_val = "Re: [OMPI users] worse latency in 1.8 c.f. 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 05:56:20 2015" -->
<!-- isoreceived="20150930095620" -->
<!-- sent="Wed, 30 Sep 2015 10:56:18 +0100" -->
<!-- isosent="20150930095618" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] worse latency in 1.8 c.f. 1.6" -->
<!-- id="87fv1wxmbh.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAAO1Kyb2EGZMGt7-+GdGEHcEJcDcXnn6koRQqvSbe6G2UcTN5g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] worse latency in 1.8 c.f. 1.6<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 05:56:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27723.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27721.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27715.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27731.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>Reply:</strong> <a href="27731.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike Dubman &lt;miked_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; what is your command line and setup? (ofed version, distro)
</span><br>
<p>It's on up-to-date SL6 (so using whatever RHEL6 ships) running the
<br>
commands below for the 1.6 and 1.8 cases respectively.  The HCA is
<br>
reported as mlx4_0.  Core binding is configured for 1.6.  I think they
<br>
both had mxm available.
<br>
<p>mpirun -np 2 --loadbalance ./osu_latency-16
<br>
mpirun -np 2 --map-by node ./osu_latency-18
<br>
<p><span class="quotelev1">&gt; This is what was just measured w/ fdr on haswell with v1.8.8 and mxm and UD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + mpirun -np 2 -bind-to core -display-map -mca rmaps_base_mapping_policy
</span><br>
<span class="quotelev1">&gt; dist:span -x MXM_RDMA_PORTS=mlx5_3:1 -mca rmaps_dist_device mlx5_3:1  -x
</span><br>
<span class="quotelev1">&gt; MXM_TLS=self,shm,ud osu_latency
</span><br>
<p>Thanks.  However, I don't know what all that and the other version is
<br>
about -- I can't keep up with the continual changes in MCA stuff that
<br>
one apparently has to know -- but it bothers me if I don't get
<br>
reasonable results from the simplest micro-benchmark with default
<br>
parameters.
<br>
<p>I'll try some variations like that when I can get complete nodes on the
<br>
chassis.
<br>
<p><span class="quotelev1">&gt;  Data for JOB [65499,1] offset 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: clx-orion-001   Num slots: 28   Max slots: 0    Num procs: 1
</span><br>
<span class="quotelev1">&gt;         Process OMPI jobid: [65499,1] App: 0 Process rank: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: clx-orion-002   Num slots: 28   Max slots: 0    Num procs: 1
</span><br>
<span class="quotelev1">&gt;         Process OMPI jobid: [65499,1] App: 0 Process rank: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  =============================================================
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test v4.4.1
</span><br>
<span class="quotelev1">&gt; # Size          Latency (us)
</span><br>
<span class="quotelev1">&gt; 0                       1.18
</span><br>
<span class="quotelev1">&gt; 1                       1.16
</span><br>
<span class="quotelev1">&gt; 2                       1.19
</span><br>
<span class="quotelev1">&gt; 4                       1.20
</span><br>
<span class="quotelev1">&gt; 8                       1.19
</span><br>
<span class="quotelev1">&gt; 16                      1.19
</span><br>
<span class="quotelev1">&gt; 32                      1.21
</span><br>
<span class="quotelev1">&gt; 64                      1.27
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and w/ ob1, openib btl:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -bind-to core -display-map -mca rmaps_base_mapping_policy
</span><br>
<span class="quotelev1">&gt; dist:span  -mca rmaps_dist_device mlx5_3:1  -mca btl_if_include mlx5_3:1
</span><br>
<span class="quotelev1">&gt; -mca pml ob1 -mca btl openib,self osu_latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test v4.4.1
</span><br>
<span class="quotelev1">&gt; # Size          Latency (us)
</span><br>
<span class="quotelev1">&gt; 0                       1.13
</span><br>
<span class="quotelev1">&gt; 1                       1.17
</span><br>
<span class="quotelev1">&gt; 2                       1.17
</span><br>
<span class="quotelev1">&gt; 4                       1.17
</span><br>
<span class="quotelev1">&gt; 8                       1.22
</span><br>
<span class="quotelev1">&gt; 16                      1.23
</span><br>
<span class="quotelev1">&gt; 32                      1.25
</span><br>
<span class="quotelev1">&gt; 64                      1.28
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27723.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27721.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27715.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27731.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>Reply:</strong> <a href="27731.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
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
