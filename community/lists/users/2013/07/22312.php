<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 10 12:34:13 2013" -->
<!-- isoreceived="20130710163413" -->
<!-- sent="Wed, 10 Jul 2013 16:32:52 +0000" -->
<!-- isosent="20130710163252" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts" -->
<!-- id="CE02E8A0.11FDF%bwbarre_at_sandia.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7E930CBB-BDE8-43F9-B50E-FD97E5AAC9FB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-10 12:32:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22313.php">Tim Carlson: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<li><strong>Previous message:</strong> <a href="22311.php">Ralph Castain: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<li><strong>In reply to:</strong> <a href="22311.php">Ralph Castain: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22313.php">Tim Carlson: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Although this particular bug should be fixed in 1.6.5 and 1.7.2; which
<br>
version of Open MPI are you using?
<br>
<p>Brian
<br>
<p>On 7/10/13 10:29 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Yeah, we discussed taking things from your thread, plus the wiki page on
</span><br>
<span class="quotelev1">&gt;cross-compiling OMPI, and creating a new FAQ area. I'll do so - thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jul 10, 2013, at 9:14 AM, Tim Carlson &lt;tim.carlson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've polluted the previous thread on GPU abilites with so much
</span><br>
<span class="quotelev2">&gt;&gt;Intel/Phi bits that I decided a few new threads might be a good idea.
</span><br>
<span class="quotelev2">&gt;&gt;First off I think the following could be a FAQ entry.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you have cluster with Phi cards and are using the SCIF interface
</span><br>
<span class="quotelev2">&gt;&gt;with OFED, OpenMPI between two hosts (not two Phi cards) is going to
</span><br>
<span class="quotelev2">&gt;&gt;choose the wrong interface at runtime. I'll show this by example.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On a node that has a Phi card and has ofed-mic enabled, you end up with
</span><br>
<span class="quotelev2">&gt;&gt;two IB interfaces.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; tim_at_phi001 osu]$ ibv_devices
</span><br>
<span class="quotelev2">&gt;&gt;    device                 node GUID
</span><br>
<span class="quotelev2">&gt;&gt;    ------              ----------------
</span><br>
<span class="quotelev2">&gt;&gt;    scif0               4c79bafffe300005
</span><br>
<span class="quotelev2">&gt;&gt;    mlx4_0              003048ffff95f98c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The scif0 interface is not the one you want to use but it is the one
</span><br>
<span class="quotelev2">&gt;&gt;that shows up first in the list. By default OpenMPI won't even know what
</span><br>
<span class="quotelev2">&gt;&gt;to do with this interface.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpicc osu_bw.c -o osu_bw.openmpi.x
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 2 -hostfile hosts.nodes osu_bw.openmpi.x
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;-
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: No preset parameters were found for the device that Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; detected:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Local host:            phi002.local
</span><br>
<span class="quotelev2">&gt;&gt;  Device name:           scif0
</span><br>
<span class="quotelev2">&gt;&gt;  Device vendor ID:      0x8086
</span><br>
<span class="quotelev2">&gt;&gt;  Device vendor part ID: 0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It completely fails. However if you specify the correct interface
</span><br>
<span class="quotelev2">&gt;&gt;(mlx4_0) you get the expected results.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 2 -hostfile hosts.nodes --mca btl openib,self,sm -mca
</span><br>
<span class="quotelev2">&gt;&gt;btl_openib_if_include mlx4_0 osu_bw.openmpi.x
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Bandwidth Test
</span><br>
<span class="quotelev2">&gt;&gt; # Size        Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt;&gt; 1                         3.25
</span><br>
<span class="quotelev2">&gt;&gt; 2                         6.40
</span><br>
<span class="quotelev2">&gt;&gt; 4                        12.65
</span><br>
<span class="quotelev2">&gt;&gt; 8                        25.53
</span><br>
<span class="quotelev2">&gt;&gt; 16                       50.42
</span><br>
<span class="quotelev2">&gt;&gt; 32                       97.06
</span><br>
<span class="quotelev2">&gt;&gt; 64                      187.02
</span><br>
<span class="quotelev2">&gt;&gt; 128                     357.88
</span><br>
<span class="quotelev2">&gt;&gt; 256                     663.64
</span><br>
<span class="quotelev2">&gt;&gt; 512                    1228.23
</span><br>
<span class="quotelev2">&gt;&gt; 1024                   2142.46
</span><br>
<span class="quotelev2">&gt;&gt; 2048                   3128.06
</span><br>
<span class="quotelev2">&gt;&gt; 4096                   4110.78
</span><br>
<span class="quotelev2">&gt;&gt; 8192                   4870.81
</span><br>
<span class="quotelev2">&gt;&gt; 16384                  5864.45
</span><br>
<span class="quotelev2">&gt;&gt; 32768                  6135.67
</span><br>
<span class="quotelev2">&gt;&gt; 65536                  6264.35
</span><br>
<span class="quotelev2">&gt;&gt; 131072                 6307.70
</span><br>
<span class="quotelev2">&gt;&gt; 262144                 6340.24
</span><br>
<span class="quotelev2">&gt;&gt; 524288                 6329.59
</span><br>
<span class="quotelev2">&gt;&gt; 1048576                6343.71
</span><br>
<span class="quotelev2">&gt;&gt; 2097152                6315.45
</span><br>
<span class="quotelev2">&gt;&gt; 4194304                6322.65
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tim
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
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22312/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22313.php">Tim Carlson: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<li><strong>Previous message:</strong> <a href="22311.php">Ralph Castain: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<li><strong>In reply to:</strong> <a href="22311.php">Ralph Castain: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22313.php">Tim Carlson: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
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
