<?
$subject_val = "Re: [OMPI users] worse latency in 1.8 c.f. 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 13:45:31 2015" -->
<!-- isoreceived="20150929174531" -->
<!-- sent="Tue, 29 Sep 2015 20:45:30 +0300" -->
<!-- isosent="20150929174530" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] worse latency in 1.8 c.f. 1.6" -->
<!-- id="CAAO1Kyb2EGZMGt7-+GdGEHcEJcDcXnn6koRQqvSbe6G2UcTN5g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87twqdxm2d.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-29 13:45:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27716.php">marcin.krotkiewski: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Previous message:</strong> <a href="27714.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27712.php">Dave Love: "[OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27722.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>Reply:</strong> <a href="27722.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27801.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
what is your command line and setup? (ofed version, distro)
<br>
<p>This is what was just measured w/ fdr on haswell with v1.8.8 and mxm and UD
<br>
<p>+ mpirun -np 2 -bind-to core -display-map -mca rmaps_base_mapping_policy
<br>
dist:span -x MXM_RDMA_PORTS=mlx5_3:1 -mca rmaps_dist_device mlx5_3:1  -x
<br>
MXM_TLS=self,shm,ud osu_latency
<br>
&nbsp;Data for JOB [65499,1] offset 0
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: clx-orion-001   Num slots: 28   Max slots: 0    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [65499,1] App: 0 Process rank: 0
<br>
<p>&nbsp;Data for node: clx-orion-002   Num slots: 28   Max slots: 0    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [65499,1] App: 0 Process rank: 1
<br>
<p>&nbsp;=============================================================
<br>
# OSU MPI Latency Test v4.4.1
<br>
# Size          Latency (us)
<br>
0                       1.18
<br>
1                       1.16
<br>
2                       1.19
<br>
4                       1.20
<br>
8                       1.19
<br>
16                      1.19
<br>
32                      1.21
<br>
64                      1.27
<br>
<p><p>and w/ ob1, openib btl:
<br>
<p>mpirun -np 2 -bind-to core -display-map -mca rmaps_base_mapping_policy
<br>
dist:span  -mca rmaps_dist_device mlx5_3:1  -mca btl_if_include mlx5_3:1
<br>
-mca pml ob1 -mca btl openib,self osu_latency
<br>
<p># OSU MPI Latency Test v4.4.1
<br>
# Size          Latency (us)
<br>
0                       1.13
<br>
1                       1.17
<br>
2                       1.17
<br>
4                       1.17
<br>
8                       1.22
<br>
16                      1.23
<br>
32                      1.25
<br>
64                      1.28
<br>
<p><p>On Tue, Sep 29, 2015 at 6:49 PM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've just compared IB p2p latency between version 1.6.5 and 1.8.8.  I'm
</span><br>
<span class="quotelev1">&gt; surprised to find that 1.8 is rather worse, as below.  Assuming that's
</span><br>
<span class="quotelev1">&gt; not expected, are there any suggestions for debugging it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is with FDR Mellanox, between two Sandybridge nodes on the same
</span><br>
<span class="quotelev1">&gt; blade chassis switch.  The results are similar for IMB pingpong and
</span><br>
<span class="quotelev1">&gt; osu_latency, and reproducible.  I'm running both cases the same way as
</span><br>
<span class="quotelev1">&gt; far as I can tell (e.g. core binding with 1.6 and not turning it off
</span><br>
<span class="quotelev1">&gt; with 1.8) just rebuilding the test against between OMPI versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The initial osu_latency figures for 1.6 are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   # OSU MPI Latency Test v5.0
</span><br>
<span class="quotelev1">&gt;   # Size          Latency (us)
</span><br>
<span class="quotelev1">&gt;   0                       1.16
</span><br>
<span class="quotelev1">&gt;   1                       1.24
</span><br>
<span class="quotelev1">&gt;   2                       1.23
</span><br>
<span class="quotelev1">&gt;   4                       1.23
</span><br>
<span class="quotelev1">&gt;   8                       1.26
</span><br>
<span class="quotelev1">&gt;   16                      1.27
</span><br>
<span class="quotelev1">&gt;   32                      1.30
</span><br>
<span class="quotelev1">&gt;   64                      1.36
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and for 1.8:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   # OSU MPI Latency Test v5.0
</span><br>
<span class="quotelev1">&gt;   # Size          Latency (us)
</span><br>
<span class="quotelev1">&gt;   0                       1.48
</span><br>
<span class="quotelev1">&gt;   1                       1.46
</span><br>
<span class="quotelev1">&gt;   2                       1.42
</span><br>
<span class="quotelev1">&gt;   4                       1.43
</span><br>
<span class="quotelev1">&gt;   8                       1.46
</span><br>
<span class="quotelev1">&gt;   16                      1.47
</span><br>
<span class="quotelev1">&gt;   32                      1.48
</span><br>
<span class="quotelev1">&gt;   64                      1.54
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27712.php">http://www.open-mpi.org/community/lists/users/2015/09/27712.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27715/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27716.php">marcin.krotkiewski: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Previous message:</strong> <a href="27714.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27712.php">Dave Love: "[OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27722.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>Reply:</strong> <a href="27722.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27801.php">Dave Love: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
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
