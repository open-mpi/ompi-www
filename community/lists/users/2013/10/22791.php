<?
$subject_val = "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 14 13:09:08 2013" -->
<!-- isoreceived="20131014170908" -->
<!-- sent="Mon, 14 Oct 2013 10:09:04 -0700" -->
<!-- isosent="20131014170904" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts" -->
<!-- id="2861C561-896D-4F6B-AEE6-30BF744C3207_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.00.1307101004350.20855_at_scorpion.emsl.pnl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-14 13:09:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22792.php">San B: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22790.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22313.php">Tim Carlson: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looping back to this thread: I just added the required locality infrastructure to support OMPI's direct use of the SCIF interface, and Nathan has a branch with the required BTL. So we should have full Phi support shortly, and it will be included in the 1.7.4 release.
<br>
<p>We'll send out an announcement to the user list when complete.
<br>
<p><p>On Jul 10, 2013, at 10:05 AM, Tim Carlson &lt;tim.carlson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 10 Jul 2013, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And as was pointed out in a followup email, this problem was corrected in 1.6.5. I was using 1.6.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, we discussed taking things from your thread, plus the wiki page on cross-compiling OMPI, and creating a new FAQ area. I'll do so - thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 10, 2013, at 9:14 AM, Tim Carlson &lt;tim.carlson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've polluted the previous thread on GPU abilites with so much Intel/Phi bits that I decided a few new threads might be a good idea.  First off I think the following could be a FAQ entry.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you have cluster with Phi cards and are using the SCIF interface with OFED, OpenMPI between two hosts (not two Phi cards) is going to choose the wrong interface at runtime. I'll show this by example.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On a node that has a Phi card and has ofed-mic enabled, you end up with two IB interfaces.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tim_at_phi001 osu]$ ibv_devices
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   device                 node GUID
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ------              ----------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   scif0               4c79bafffe300005
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mlx4_0              003048ffff95f98c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The scif0 interface is not the one you want to use but it is the one that shows up first in the list. By default OpenMPI won't even know what to do with this interface.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpicc osu_bw.c -o osu_bw.openmpi.x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 2 -hostfile hosts.nodes osu_bw.openmpi.x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: No preset parameters were found for the device that Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; detected:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local host:            phi002.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Device name:           scif0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Device vendor ID:      0x8086
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Device vendor part ID: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It completely fails. However if you specify the correct interface (mlx4_0) you get the expected results.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 2 -hostfile hosts.nodes --mca btl openib,self,sm -mca btl_openib_if_include mlx4_0 osu_bw.openmpi.x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # OSU MPI Bandwidth Test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1                         3.25
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2                         6.40
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4                        12.65
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8                        25.53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16                       50.42
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32                       97.06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 64                      187.02
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 128                     357.88
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 256                     663.64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 512                    1228.23
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1024                   2142.46
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2048                   3128.06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4096                   4110.78
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8192                   4870.81
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16384                  5864.45
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32768                  6135.67
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 65536                  6264.35
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 131072                 6307.70
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 262144                 6340.24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 524288                 6329.59
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1048576                6343.71
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2097152                6315.45
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4194304                6322.65
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22792.php">San B: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22790.php">Jeff Squyres (jsquyres): "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22313.php">Tim Carlson: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
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
