<?
$subject_val = "[OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 10 12:14:20 2013" -->
<!-- isoreceived="20130710161420" -->
<!-- sent="Wed, 10 Jul 2013 09:14:14 -0700 (PDT)" -->
<!-- isosent="20130710161414" -->
<!-- name="Tim Carlson" -->
<!-- email="tim.carlson_at_[hidden]" -->
<!-- subject="[OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts" -->
<!-- id="alpine.LRH.2.00.1307100901330.18909_at_scorpion.emsl.pnl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.LRH.2.00.1307090956240.2578_at_scorpion.emsl.pnl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts<br>
<strong>From:</strong> Tim Carlson (<em>tim.carlson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-10 12:14:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22311.php">Ralph Castain: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<li><strong>Previous message:</strong> <a href="22309.php">Mike Dubman: "Re: [OMPI users] using the xrc queues"</a>
<li><strong>In reply to:</strong> <a href="22304.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22311.php">Ralph Castain: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<li><strong>Reply:</strong> <a href="22311.php">Ralph Castain: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've polluted the previous thread on GPU abilites with so much Intel/Phi 
<br>
bits that I decided a few new threads might be a good idea.  First off I 
<br>
think the following could be a FAQ entry.
<br>
<p>If you have cluster with Phi cards and are using the SCIF interface with 
<br>
OFED, OpenMPI between two hosts (not two Phi cards) is going to 
<br>
choose the wrong interface at runtime. I'll show this by example.
<br>
<p>On a node that has a Phi card and has ofed-mic enabled, you end up with 
<br>
two IB interfaces.
<br>
<p>tim_at_phi001 osu]$ ibv_devices
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;device                 node GUID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;------              ----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scif0               4c79bafffe300005
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mlx4_0              003048ffff95f98c
<br>
<p>The scif0 interface is not the one you want to use but it is the one that 
<br>
shows up first in the list. By default OpenMPI won't even know what to do 
<br>
with this interface.
<br>
<p>$ mpicc osu_bw.c -o osu_bw.openmpi.x
<br>
<p>$ mpirun -np 2 -hostfile hosts.nodes osu_bw.openmpi.x
<br>
--------------------------------------------------------------------------
<br>
WARNING: No preset parameters were found for the device that Open MPI
<br>
detected:
<br>
<p>&nbsp;&nbsp;&nbsp;Local host:            phi002.local
<br>
&nbsp;&nbsp;&nbsp;Device name:           scif0
<br>
&nbsp;&nbsp;&nbsp;Device vendor ID:      0x8086
<br>
&nbsp;&nbsp;&nbsp;Device vendor part ID: 0
<br>
<p><p>It completely fails. However if you specify the correct interface (mlx4_0) 
<br>
you get the expected results.
<br>
<p>$ mpirun -np 2 -hostfile hosts.nodes --mca btl openib,self,sm -mca btl_openib_if_include mlx4_0 osu_bw.openmpi.x
<br>
# OSU MPI Bandwidth Test
<br>
# Size        Bandwidth (MB/s)
<br>
1                         3.25
<br>
2                         6.40
<br>
4                        12.65
<br>
8                        25.53
<br>
16                       50.42
<br>
32                       97.06
<br>
64                      187.02
<br>
128                     357.88
<br>
256                     663.64
<br>
512                    1228.23
<br>
1024                   2142.46
<br>
2048                   3128.06
<br>
4096                   4110.78
<br>
8192                   4870.81
<br>
16384                  5864.45
<br>
32768                  6135.67
<br>
65536                  6264.35
<br>
131072                 6307.70
<br>
262144                 6340.24
<br>
524288                 6329.59
<br>
1048576                6343.71
<br>
2097152                6315.45
<br>
4194304                6322.65
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22311.php">Ralph Castain: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<li><strong>Previous message:</strong> <a href="22309.php">Mike Dubman: "Re: [OMPI users] using the xrc queues"</a>
<li><strong>In reply to:</strong> <a href="22304.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22311.php">Ralph Castain: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<li><strong>Reply:</strong> <a href="22311.php">Ralph Castain: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
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
