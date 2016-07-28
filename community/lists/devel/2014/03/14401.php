<?
$subject_val = "Re: [OMPI devel] doubt on latency result with OpenMPI library";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 06:04:49 2014" -->
<!-- isoreceived="20140327100449" -->
<!-- sent="Thu, 27 Mar 2014 03:04:48 -0700" -->
<!-- isosent="20140327100448" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] doubt on latency result with OpenMPI library" -->
<!-- id="CAMD57odhFxz5RHnirPFBYww8qhYjXq+K7eG8zFJQdp8DjeDkGA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="90EBD3F3C2BD0E44804EEB54DD5003A45523315D_at_TC-MAIL-MB02.internal.baidu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] doubt on latency result with OpenMPI library<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 06:04:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14402.php">Wang,Yanfei(SYS): "[OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14400.php">Wang,Yanfei(SYS): "[OMPI devel] doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14400.php">Wang,Yanfei(SYS): "[OMPI devel] doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14402.php">Wang,Yanfei(SYS): "[OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14402.php">Wang,Yanfei(SYS): "[OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  doubt on latency result with OpenMPI library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try adding &quot;--map-by node&quot; to your command line to ensure the procs really
<br>
are running on separate nodes.
<br>
<p><p><p>On Thu, Mar 27, 2014 at 1:40 AM, Wang,Yanfei(SYS) &lt;wangyanfei01_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  Hi&#239;&#188;&#140;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HW Test Topology&#239;&#188;&#154;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ip&#239;&#188;&#154;192.168.72.4/24 &#226;&#128;&#147;192.168.72.4/24, enable vlan and RoCE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IB03 server 40G port-- - 40G Ethernet switch ----IB04 server 40G port&#239;&#188;&#154; configure
</span><br>
<span class="quotelev1">&gt; it as RoCE link
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IP: 192.168.71.3/24 ---192.168.71.4/24
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IB03 server 10G port &#226;&#128;&#147; 10G Ethernet switch &#226;&#128;&#147; IB04 server 10G port&#239;&#188;&#154; configure
</span><br>
<span class="quotelev1">&gt; it as normal TCP/IP Ethernet link&#239;&#188;&#154;&#239;&#188;&#136;server management interface&#239;&#188;&#137;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mpi configuration&#239;&#188;&#154;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *MPI Hosts file**&#239;&#188;&#154;*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 pt2pt]# cat hosts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ib03 slots=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ib04 slots=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *DNS hosts*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 pt2pt]# cat /etc/hosts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 192.168.71.3 ib03
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 192.168.71.4 ib04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 pt2pt]#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This configuration will create 2 nodes for MPI latency evaluation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Benchmark:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; osu-micro-benchmarks-4.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; result:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a.       Enable traffic go between 10G TCP/IP port using following
</span><br>
<span class="quotelev1">&gt; /etc/hosts file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; root_at_bb-nsi-ib04 pt2pt]# cat /etc/hosts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 192.168.71.3 ib03
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 192.168.71.4 ib04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The average latency is 4.5us of osu_latency, see log following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 pt2pt]# mpirun --hostfile hosts -np 2 osu_latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test v4.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Size          Latency (us)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0                       4.56
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1                       4.90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2                       4.90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4                       4.60
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 8                       4.71
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 16                      4.72
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 32                      5.40
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 64                      4.77
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 128                     6.74
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 256                     7.01
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 512                     7.14
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1024                    7.63
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2048                    8.22
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4096                   10.39
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 8192                   14.26
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 16384                  20.80
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 32768                  31.97
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 65536                  37.75
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 131072                 47.28
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 262144                 80.40
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 524288                137.65
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1048576               250.17
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2097152               484.71
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4194304               946.01
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b.       Enable traffic go between RoCE link using /etc/hosts as
</span><br>
<span class="quotelev1">&gt; following and mpirun &#226;&#128;&#147;mca btl openib,self,sm &#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 pt2pt]# cat /etc/hosts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 192.168.72.3 ib03
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 192.168.72.4 ib04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Result:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 pt2pt]# mpirun --hostfile hosts -np 2 --mca btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm --mca btl_openib_cpc_include rdmacm osu_latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test v4.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Size          Latency (us)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0                       4.83
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1                       5.17
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2                       5.12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4                       5.25
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 8                       5.38
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 16                      5.40
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 32                      5.19
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 64                      5.04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 128                     6.74
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 256                     7.04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 512                     7.34
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1024                    7.91
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2048                    8.17
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4096                   10.39
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 8192                   14.22
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 16384                  22.05
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 32768                  31.68
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 65536                  37.57
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 131072                 48.25
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 262144                 79.98
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 524288                137.66
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1048576               251.38
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2097152               485.66
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4194304               947.81
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_bb-nsi-ib04 pt2pt]#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Question:  *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *1.       **Why do they have similar latency, 5us, which is too small to
</span><br>
<span class="quotelev1">&gt; believe it! In our test environment, it will take more than 50 us to deal
</span><br>
<span class="quotelev1">&gt; with tcp sync and return sync_ack, and also x86 server will take more thans
</span><br>
<span class="quotelev1">&gt; 20us at average to do ip forwarding(test from professional HW tester), so
</span><br>
<span class="quotelev1">&gt; does the latency is reasonable?*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *2.       **Normally, the switch will introduces more than 1.5us switch
</span><br>
<span class="quotelev1">&gt; time! Using accelio, a mellanox released opensource rdma library, it will
</span><br>
<span class="quotelev1">&gt; take at least 4 us rtt latency to do simpe ping-pong test. So 5 us MPI
</span><br>
<span class="quotelev1">&gt; latency (TCP/IP and RoCE) above is rather unbelievable&#226;&#128;&#166;  *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *3.       **The fact that the tcp/ip transport and roce RDMA transport
</span><br>
<span class="quotelev1">&gt; acquire same latency  is so puzzling..  *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Before deeply understanding what happened inside the MPI benchmark, can
</span><br>
<span class="quotelev1">&gt; show us some suggestion? Does the mpirun command works correctly here? *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *It must has some mistakes about this test, pls correct me,. *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Eg: tcp syn&amp;sync ack latency:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Thanks *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *-Yanfei*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14400.php">http://www.open-mpi.org/community/lists/devel/2014/03/14400.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14401/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-14401/image001.png" alt="image001.png">
<!-- attachment="image001.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14402.php">Wang,Yanfei(SYS): "[OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14400.php">Wang,Yanfei(SYS): "[OMPI devel] doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14400.php">Wang,Yanfei(SYS): "[OMPI devel] doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14402.php">Wang,Yanfei(SYS): "[OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14402.php">Wang,Yanfei(SYS): "[OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  doubt on latency result with OpenMPI library"</a>
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
