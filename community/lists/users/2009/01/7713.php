<?
$subject_val = "Re: [OMPI users] Problem with openmpi and infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 12:23:40 2009" -->
<!-- isoreceived="20090115172340" -->
<!-- sent="Thu, 15 Jan 2009 17:22:27 +0000" -->
<!-- isosent="20090115172227" -->
<!-- name="Biagio Lucini" -->
<!-- email="B.Lucini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with openmpi and infiniband" -->
<!-- id="496F70D3.6030803_at_swansea.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="64E87DCD-C3DF-403C-97DD-358C132EAFD2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with openmpi and infiniband<br>
<strong>From:</strong> Biagio Lucini (<em>B.Lucini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-15 12:22:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7714.php">Hana Milani: "Re: [OMPI users] mpirun (signal 15 Termination)"</a>
<li><strong>Previous message:</strong> <a href="7712.php">Jeff Dusenberry: "[OMPI users] delay in launch?"</a>
<li><strong>In reply to:</strong> <a href="7679.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jan 7, 2009, at 6:28 PM, Biagio Lucini wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[5963,1],13][btl_openib_component.c:2893:handle_wc] from node24 to:
</span><br>
<span class="quotelev2">&gt;&gt; node11 error polling LP CQ with status RECEIVER NOT READY RETRY
</span><br>
<span class="quotelev2">&gt;&gt; EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah! If we're dealing a RNR retry exceeded, this is *usually* a physical
</span><br>
<span class="quotelev1">&gt; layer problem on the IB fabric.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you run a complete layer 0 / physical set of diagnostics on the
</span><br>
<span class="quotelev1">&gt; fabric to know that it is completely working properly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Once again, apologies for the delayed answer, but I always need to find 
<br>
a free spot to perform checks without disrupting the activity of the 
<br>
other users, who seem to be happy with the present status (this includes 
<br>
the other users of infiniband).
<br>
<p>What I have done is to run the Intel MPI Benchmark in a stress-mode over 
<br>
40 nodes and then on exactly the same nodes my code. The errors for my 
<br>
code are attached. I do not attach the Intel benchmark file, since it is 
<br>
100k and might upset someone, but I can send it on request. If I pick a 
<br>
random test:
<br>
<p>#-----------------------------------------------------------------------------
<br>
# Benchmarking Exchange 
<br>
<p># #processes = 40 
<br>
<p>#-----------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec] 
<br>
Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000        19.70        20.37        19.87 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000        12.80        13.61        13.25 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0.28
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000        12.94        13.73        13.39 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0.56
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000        12.93        13.24        13.14 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1.15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000        12.46        12.89        12.65 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2.37
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000        14.59        15.35        15.00 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;3.98
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000        12.83        13.42        13.26 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;9.09
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000        13.17        13.49        13.31 
<br>
&nbsp;&nbsp;&nbsp;18.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000        13.83        14.40        14.20 
<br>
&nbsp;&nbsp;&nbsp;33.90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000        16.47        17.34        16.89 
<br>
&nbsp;&nbsp;&nbsp;56.33
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000        22.72        23.29        22.99 
<br>
&nbsp;&nbsp;&nbsp;83.85
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000        35.09        36.30        35.72 
<br>
&nbsp;&nbsp;107.62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000        71.28        72.46        71.91 
<br>
&nbsp;&nbsp;107.81
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000       139.78       141.55       140.72 
<br>
&nbsp;&nbsp;110.38
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000       237.86       240.13       239.10 
<br>
&nbsp;&nbsp;130.14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000       481.37       486.15       484.10 
<br>
&nbsp;&nbsp;128.56
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000       864.89       872.48       869.35 
<br>
&nbsp;&nbsp;143.27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640      1607.97      1629.53      1620.19 
<br>
&nbsp;&nbsp;153.42
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320      3106.92      3196.91      3160.10 
<br>
&nbsp;&nbsp;156.40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160      5970.66      6333.02      6185.35 
<br>
&nbsp;&nbsp;157.90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80     16322.10     18509.40     17627.17 
<br>
&nbsp;&nbsp;108.05
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40     31194.17     40981.73     37056.97 
<br>
&nbsp;&nbsp;&nbsp;97.60
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20     38023.90     77308.80     61021.08 
<br>
&nbsp;&nbsp;103.48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10     20423.82    143447.80     84832.93 
<br>
&nbsp;&nbsp;111.54
<br>
------------------------------------------------------------------
<br>
<p><p>As you can see, the Intel benchmark runs fine on this set
<br>
of nodes; I have been running it for a few hours without any problem. On 
<br>
the other hands, my job still has this problem. To recap:
<br>
both are compiled with openmpi, the benchmark looks fine and my job
<br>
refuses to establish communication among processes without giving any 
<br>
error message with OMPI 1.2.x (various x) while gives the attached error 
<br>
message with 1.3rc2.
<br>
<p>I have tried ibcheckerrors, which reports:
<br>
<p>#warn: counter SymbolErrors = 65535     (threshold 10)
<br>
#warn: counter LinkDowned = 20  (threshold 10)
<br>
#warn: counter XmtDiscards = 65535      (threshold 100)
<br>
Error check on lid 1 (MT47396 Infiniscale-III Mellanox Technologies) 
<br>
port all:  FAILED
<br>
#warn: counter SymbolErrors = 65535     (threshold 10)
<br>
Error check on lid 1 (MT47396 Infiniscale-III Mellanox Technologies) 
<br>
port 10:  FAILED
<br>
# Checked Switch: nodeguid 0x000b8cffff002347 with failure
<br>
#warn: counter XmtDiscards = 65535      (threshold 100)
<br>
Error check on lid 1 (MT47396 Infiniscale-III Mellanox Technologies) 
<br>
port 1:  FAILED
<br>
<p>## Summary: 25 nodes checked, 0 bad nodes found
<br>
##          48 ports checked, 2 ports have errors beyond threshold
<br>
<p>Admittedly, not encouraging. The output of ibnetdiscover is attached.
<br>
<p>I should had that the cluster (including infiniband) is currently being 
<br>
used. Unfortunately, my experience with infiniband is not adequate to
<br>
<p>Any further clue on possible problems is very welcome.
<br>
<p>Many thanks for your attention,
<br>
Biagio
<br>
<p><pre>
-- 
=========================================================
Dr. Biagio Lucini				
Department of Physics, Swansea University
Singleton Park, SA2 8PP Swansea (UK)
Tel. +44 (0)1792 602284
=========================================================

</pre>
<p>
[node17:25443] mca_common_sm_mmap_init: open /tmp/10955.1.gold/openmpi-sessions-kstrings_at_node17_0/10802/1/shared_mem_pool.node17 failed with errno=2
<br>
[node21:28610] mca_common_sm_mmap_init: open /tmp/10955.1.gold/openmpi-sessions-kstrings_at_node21_0/10802/1/shared_mem_pool.node21 failed with errno=2
<br>
[node10:29396] mca_common_sm_mmap_init: open /tmp/10955.1.gold/openmpi-sessions-kstrings_at_node10_0/10802/1/shared_mem_pool.node10 failed with errno=2
<br>
[node24:02084] mca_common_sm_mmap_init: open /tmp/10955.1.gold/openmpi-sessions-kstrings_at_node24_0/10802/1/shared_mem_pool.node24 failed with errno=2
<br>
[node19:01502] mca_common_sm_mmap_init: open /tmp/10955.1.gold/openmpi-sessions-kstrings_at_node19_0/10802/1/shared_mem_pool.node19 failed with errno=2
<br>
[node12:31509] mca_common_sm_mmap_init: open /tmp/10955.1.gold/openmpi-sessions-kstrings_at_node12_0/10802/1/shared_mem_pool.node12 failed with errno=2
<br>
[node22:10933] mca_common_sm_mmap_init: open /tmp/10955.1.gold/openmpi-sessions-kstrings_at_node22_0/10802/1/shared_mem_pool.node22 failed with errno=2
<br>
[node23:18518] mca_common_sm_mmap_init: open /tmp/10955.1.gold/openmpi-sessions-kstrings_at_node23_0/10802/1/shared_mem_pool.node23 failed with errno=2
<br>
[node9:26098] mca_common_sm_mmap_init: open /tmp/10955.1.gold/openmpi-sessions-kstrings_at_node9_0/10802/1/shared_mem_pool.node9 failed with errno=2
<br>
[node16:27655] mca_common_sm_mmap_init: open /tmp/10955.1.gold/openmpi-sessions-kstrings_at_node16_0/10802/1/shared_mem_pool.node16 failed with errno=2
<br>
[node15:27478] mca_common_sm_mmap_init: open /tmp/10955.1.gold/openmpi-sessions-kstrings_at_node15_0/10802/1/shared_mem_pool.node15 failed with errno=2
<br>
[node18:21742] mca_common_sm_mmap_init: open /tmp/10955.1.gold/openmpi-sessions-kstrings_at_node18_0/10802/1/shared_mem_pool.node18 failed with errno=2
<br>
[[10802,1],32][btl_openib_component.c:2893:handle_wc] from node21 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37784704 opcode 0 qp_idx 0
<br>
--------------------------------------------------------------------------
<br>
The OpenFabrics &quot;receiver not ready&quot; retry count on a per-peer
<br>
connection between two MPI processes has been exceeded.  In general,
<br>
this should not happen because Open MPI uses flow control on per-peer
<br>
connections to ensure that receivers are always ready when data is
<br>
sent.
<br>
<p>This error usually means one of two things:
<br>
<p>1. There is something awry within the network fabric itself.  
<br>
2. A bug in Open MPI has caused flow control to malfunction.
<br>
&nbsp;
<br>
error has occurred; it has been observed that rebooting or removing a
<br>
particular host from the job can sometimes resolve this issue.
<br>
<p>Below is some information about the host that raised the error and the
<br>
peer to which it was connected:
<br>
<p>&nbsp;&nbsp;Local host:   node21
<br>
&nbsp;&nbsp;Local device: mthca0
<br>
&nbsp;&nbsp;Peer host:    node11
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
[[10802,1],36][btl_openib_component.c:2893:handle_wc] from node19 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37784704 opcode 0 qp_idx 0
<br>
[[10802,1],1][btl_openib_component.c:2893:handle_wc] from node9 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37784704 opcode 0 qp_idx 0
<br>
[[10802,1],38][btl_openib_component.c:2893:handle_wc] from node20 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37784704 opcode 0 qp_idx 0
<br>
[[10802,1],35][btl_openib_component.c:2893:handle_wc] from node23 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37784704 opcode 0 qp_idx 0
<br>
[[10802,1],10][btl_openib_component.c:2893:handle_wc] from node15 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37784704 opcode 0 qp_idx 0
<br>
[[10802,1],14][btl_openib_component.c:2893:handle_wc] from node14 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37784704 opcode 0 qp_idx 0
<br>
[[10802,1],33][btl_openib_component.c:2893:handle_wc] from node21 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37784704 opcode 0 qp_idx 0
<br>
[[10802,1],12][btl_openib_component.c:2893:handle_wc] from node18 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37784704 opcode 0 qp_idx 0
<br>
[[10802,1],6][btl_openib_component.c:2893:handle_wc] from node13 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37784704 opcode 0 qp_idx 0
<br>
[[10802,1],3][btl_openib_component.c:2893:handle_wc] from node16 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37784704 opcode 0 qp_idx 0
<br>
[[10802,1],37][btl_openib_component.c:2893:handle_wc] from node19 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37784704 opcode 0 qp_idx 0
<br>
[[10802,1],18][btl_openib_component.c:2893:handle_wc] from node10 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37784704 opcode 0 qp_idx 0
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 32 with PID 28610 on
<br>
node node21.cluster exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[[10802,1],16][btl_openib_component.c:2893:handle_wc] from node12 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37784704 opcode 0 qp_idx 0
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
[node11:28202] [[10802,0],0]-[[10802,0],2] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
[node11:28202] [[10802,0],0]-[[10802,0],11] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[node11:28202] [[10802,0],0]-[[10802,0],3] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[node11:28202] [[10802,0],0]-[[10802,0],13] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[node11:28202] [[10802,0],0]-[[10802,0],4] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
[node11:28202] 13 more processes have sent help message help-mpi-btl-openib.txt / pp rnr retry exceeded
<br>
[node11:28202] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
<p>
<br><p>
#
<br>
# Topology file: generated on Thu Jan 15 14:53:53 2009
<br>
#
<br>
# Max of 2 hops discovered
<br>
# Initiated from node 0002c90200268638 port 0002c90200268639
<br>
<p>vendid=0x2c9
<br>
devid=0xb924
<br>
sysimgguid=0xb8cffff002347
<br>
switchguid=0xb8cffff002347
<br>
Switch	24 &quot;S-000b8cffff002347&quot;		# &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; base port 0 lid 1 lmc 0
<br>
[24]	&quot;H-0002c90200267924&quot;[1]		# &quot;node24 HCA-1&quot; lid 18
<br>
[23]	&quot;H-0002c9020026771c&quot;[1]		# &quot;node23 HCA-1&quot; lid 17
<br>
[22]	&quot;H-0002c90200268648&quot;[1]		# &quot;node22 HCA-1&quot; lid 16
<br>
[20]	&quot;H-0002c90200267774&quot;[1]		# &quot;node20 HCA-1&quot; lid 14
<br>
[19]	&quot;H-0002c9020026796c&quot;[1]		# &quot;node19 HCA-1&quot; lid 13
<br>
[18]	&quot;H-0002c90200230e48&quot;[1]		# &quot;node18 HCA-1&quot; lid 12
<br>
[17]	&quot;H-0002c9020021de24&quot;[1]		# &quot;node17 HCA-1&quot; lid 11
<br>
[16]	&quot;H-0002c90200230dd4&quot;[1]		# &quot;node16 HCA-1&quot; lid 10
<br>
[15]	&quot;H-0002c9020022b38c&quot;[1]		# &quot;node15 HCA-1&quot; lid 121
<br>
[14]	&quot;H-0002c9020022b3b8&quot;[1]		# &quot;node14 HCA-1&quot; lid 5
<br>
[13]	&quot;H-0002c9020025420c&quot;[1]		# &quot;node13 HCA-1&quot; lid 6
<br>
[12]	&quot;H-0002c9020022b398&quot;[1]		# &quot;node12 HCA-1&quot; lid 97
<br>
[11]	&quot;H-0002c9020022b3b0&quot;[1]		# &quot;node11 HCA-1&quot; lid 89
<br>
[10]	&quot;H-0002c9020022b3c8&quot;[1]		# &quot;node10 HCA-1&quot; lid 81
<br>
[9]	&quot;H-0002c9020022b330&quot;[1]		# &quot;node9 HCA-1&quot; lid 73
<br>
[8]	&quot;H-0002c9020022b3cc&quot;[1]		# &quot;node8 HCA-1&quot; lid 65
<br>
[7]	&quot;H-0002c9020022b3dc&quot;[1]		# &quot;node7 HCA-1&quot; lid 3
<br>
[6]	&quot;H-0002c9020022b334&quot;[1]		# &quot;node6 HCA-1&quot; lid 4
<br>
[5]	&quot;H-0002c9020022b3a4&quot;[1]		# &quot;node5 HCA-1&quot; lid 41
<br>
[4]	&quot;H-0002c9020022b380&quot;[1]		# &quot;node4 HCA-1&quot; lid 33
<br>
[3]	&quot;H-0002c9020020d75c&quot;[1]		# &quot;node3 HCA-1&quot; lid 25
<br>
[2]	&quot;H-0002c902002140ac&quot;[1]		# &quot;node2 HCA-1&quot; lid 2
<br>
[1]	&quot;H-0002c9020020d604&quot;[1]		# &quot;node1 HCA-1&quot; lid 9
<br>
[21]	&quot;H-0002c90200268638&quot;[1]		# &quot;node21 HCA-1&quot; lid 15
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c90200267927
<br>
caguid=0x2c90200267924
<br>
Ca	1 &quot;H-0002c90200267924&quot;		# &quot;node24 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[24]		# lid 18 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020026771f
<br>
caguid=0x2c9020026771c
<br>
Ca	1 &quot;H-0002c9020026771c&quot;		# &quot;node23 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[23]		# lid 17 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020026864b
<br>
caguid=0x2c90200268648
<br>
Ca	1 &quot;H-0002c90200268648&quot;		# &quot;node22 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[22]		# lid 16 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c90200267777
<br>
caguid=0x2c90200267774
<br>
Ca	1 &quot;H-0002c90200267774&quot;		# &quot;node20 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[20]		# lid 14 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020026796f
<br>
caguid=0x2c9020026796c
<br>
Ca	1 &quot;H-0002c9020026796c&quot;		# &quot;node19 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[19]		# lid 13 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c90200230e4b
<br>
caguid=0x2c90200230e48
<br>
Ca	1 &quot;H-0002c90200230e48&quot;		# &quot;node18 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[18]		# lid 12 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020021de27
<br>
caguid=0x2c9020021de24
<br>
Ca	1 &quot;H-0002c9020021de24&quot;		# &quot;node17 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[17]		# lid 11 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c90200230dd7
<br>
caguid=0x2c90200230dd4
<br>
Ca	1 &quot;H-0002c90200230dd4&quot;		# &quot;node16 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[16]		# lid 10 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020022b38f
<br>
caguid=0x2c9020022b38c
<br>
Ca	1 &quot;H-0002c9020022b38c&quot;		# &quot;node15 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[15]		# lid 121 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020022b3bb
<br>
caguid=0x2c9020022b3b8
<br>
Ca	1 &quot;H-0002c9020022b3b8&quot;		# &quot;node14 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[14]		# lid 5 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020025420f
<br>
caguid=0x2c9020025420c
<br>
Ca	1 &quot;H-0002c9020025420c&quot;		# &quot;node13 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[13]		# lid 6 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020022b39b
<br>
caguid=0x2c9020022b398
<br>
Ca	1 &quot;H-0002c9020022b398&quot;		# &quot;node12 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[12]		# lid 97 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020022b3b3
<br>
caguid=0x2c9020022b3b0
<br>
Ca	1 &quot;H-0002c9020022b3b0&quot;		# &quot;node11 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[11]		# lid 89 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020022b3cb
<br>
caguid=0x2c9020022b3c8
<br>
Ca	1 &quot;H-0002c9020022b3c8&quot;		# &quot;node10 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[10]		# lid 81 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020022b333
<br>
caguid=0x2c9020022b330
<br>
Ca	1 &quot;H-0002c9020022b330&quot;		# &quot;node9 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[9]		# lid 73 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020022b3cf
<br>
caguid=0x2c9020022b3cc
<br>
Ca	1 &quot;H-0002c9020022b3cc&quot;		# &quot;node8 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[8]		# lid 65 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020022b3df
<br>
caguid=0x2c9020022b3dc
<br>
Ca	1 &quot;H-0002c9020022b3dc&quot;		# &quot;node7 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[7]		# lid 3 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020022b337
<br>
caguid=0x2c9020022b334
<br>
Ca	1 &quot;H-0002c9020022b334&quot;		# &quot;node6 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[6]		# lid 4 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020022b3a7
<br>
caguid=0x2c9020022b3a4
<br>
Ca	1 &quot;H-0002c9020022b3a4&quot;		# &quot;node5 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[5]		# lid 41 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020022b383
<br>
caguid=0x2c9020022b380
<br>
Ca	1 &quot;H-0002c9020022b380&quot;		# &quot;node4 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[4]		# lid 33 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020020d75f
<br>
caguid=0x2c9020020d75c
<br>
Ca	1 &quot;H-0002c9020020d75c&quot;		# &quot;node3 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[3]		# lid 25 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c902002140af
<br>
caguid=0x2c902002140ac
<br>
Ca	1 &quot;H-0002c902002140ac&quot;		# &quot;node2 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[2]		# lid 2 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020020d607
<br>
caguid=0x2c9020020d604
<br>
Ca	1 &quot;H-0002c9020020d604&quot;		# &quot;node1 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[1]		# lid 9 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<p>vendid=0x2c9
<br>
devid=0x6274
<br>
sysimgguid=0x2c9020026863b
<br>
caguid=0x2c90200268638
<br>
Ca	1 &quot;H-0002c90200268638&quot;		# &quot;node21 HCA-1&quot;
<br>
[1]	&quot;S-000b8cffff002347&quot;[21]		# lid 15 lmc 0 &quot;MT47396 Infiniscale-III Mellanox Technologies&quot; lid 1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7714.php">Hana Milani: "Re: [OMPI users] mpirun (signal 15 Termination)"</a>
<li><strong>Previous message:</strong> <a href="7712.php">Jeff Dusenberry: "[OMPI users] delay in launch?"</a>
<li><strong>In reply to:</strong> <a href="7679.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
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
