<?
$subject_val = "Re: [OMPI users] Problem with openmpi and infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 18:29:15 2009" -->
<!-- isoreceived="20090107232915" -->
<!-- sent="Wed, 07 Jan 2009 23:28:52 +0000" -->
<!-- isosent="20090107232852" -->
<!-- name="Biagio Lucini" -->
<!-- email="B.Lucini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with openmpi and infiniband" -->
<!-- id="49653AB4.9070806_at_swansea.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990901032211s24fe4446s3a641daf56de0960_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-01-07 18:28:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7663.php">gaurav gupta: "[OMPI users] Need help in setting up openmpi on multiple clusters"</a>
<li><strong>Previous message:</strong> <a href="7661.php">Gregor Dschung: "Re: [OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint"</a>
<li><strong>In reply to:</strong> <a href="7628.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7679.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7679.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The test was in fact ok, I have also verified it on 30 processors. 
<br>
Meanwhile I tried OMPI1.3RC2, with which the application fails on 
<br>
infiniband, I hope this will give some clue (or at least be useful to 
<br>
finalise the release of OpenMPI 1.3). I remind the mailing list that I 
<br>
use the OFED 1.2.5 release. The only change with respect the last time 
<br>
is the use of OMPI1.3RC2 instead of 1.2.8. To avoid boring the mailing 
<br>
list, I don't repeat details I have already provided (like the command 
<br>
line parameters) on which we seem to have agreed that there is no 
<br>
problem. However, if you want to know more, please ask.
<br>
<p>The error file as produced by SGE is attached.
<br>
<p>Thanks,
<br>
Biagio
<br>
<p>Lenny Verkhovsky wrote:
<br>
<span class="quotelev1">&gt; Hi,  just to make sure,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you wrote in the previous mail that you tested IMB-MPI1 and it
</span><br>
<span class="quotelev1">&gt; &quot;reports for the last test&quot; ...., and the results are for
</span><br>
<span class="quotelev1">&gt; &quot;processes=6&quot;, since you have 4 and 8 core machines, this test could
</span><br>
<span class="quotelev1">&gt; be run on the same 8 core machine over shared memory and not over
</span><br>
<span class="quotelev1">&gt; Infiniband, as you suspected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can rerun the IMB-MPI1 test with -mca btl self,openib to be sure
</span><br>
<span class="quotelev1">&gt; that the test does not use shared memory or tcp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/24/08, Biagio Lucini &lt;B.Lucini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Biagio Lucini wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am new to this list, where I hope to find a solution for a problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that I have been having for quite a longtime.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I run various versions of openmpi (from 1.1.2 to 1.2.8) on a cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with Infiniband interconnects that I use and administer at the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time. The openfabric stac is OFED-1.2.5, the compilers gcc 4.2 and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Intel. The queue manager is SGE 6.0u8.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you use OpenMPI version that is included in OFED ? Did you was able
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to run basic OFED/OMPI tests/benchmarks between two nodes ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  yes to both questions: the OMPI version is the one that comes with OFED
</span><br>
<span class="quotelev2">&gt;&gt; (1.1.2-1) and the basic tests run fine. For instance, IMB-MPI1 (which is
</span><br>
<span class="quotelev2">&gt;&gt; more than basic, as far as I can see) reports for the last test:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  # Benchmarking Barrier
</span><br>
<span class="quotelev2">&gt;&gt;  # #processes = 6
</span><br>
<span class="quotelev2">&gt;&gt;  #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;   #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev2">&gt;&gt;          1000        22.93        22.95        22.94
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  for the openib,self btl (6 processes, all processes on different nodes)
</span><br>
<span class="quotelev2">&gt;&gt;  and
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  # Benchmarking Barrier
</span><br>
<span class="quotelev2">&gt;&gt;  # #processes = 6
</span><br>
<span class="quotelev2">&gt;&gt;  #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;   #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev2">&gt;&gt;          1000       191.30       191.42       191.34
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  for the tcp,self btl (same test)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  No anomalies for other tests (ping-pong, all-to-all etc.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;  Biagio
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --
</span><br>
<span class="quotelev2">&gt;&gt;  =========================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Dr. Biagio Lucini
</span><br>
<span class="quotelev2">&gt;&gt;  Department of Physics, Swansea University
</span><br>
<span class="quotelev2">&gt;&gt;  Singleton Park, SA2 8PP Swansea (UK)
</span><br>
<span class="quotelev2">&gt;&gt;  Tel. +44 (0)1792 602284
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  =========================================================
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;  users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;  users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>
<br><p>
[[5963,1],13][btl_openib_component.c:2893:handle_wc] from node24 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
<br>
[[5963,1],12][btl_openib_component.c:2893:handle_wc] from node23 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
<br>
[[5963,1],8][btl_openib_component.c:2893:handle_wc] from node9 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
<br>
[[5963,1],11][btl_openib_component.c:2893:handle_wc] from node20 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
<br>
[[5963,1],9][btl_openib_component.c:2893:handle_wc] from node18 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
<br>
[[5963,1],4][btl_openib_component.c:2893:handle_wc] from node13 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
<br>
[[5963,1],3][btl_openib_component.c:2893:handle_wc] from node12 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
<br>
[[5963,1],6][btl_openib_component.c:2893:handle_wc] from node15 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
<br>
[[5963,1],1][btl_openib_component.c:2893:handle_wc] from node10 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
<br>
[[5963,1],7][btl_openib_component.c:2893:handle_wc] from node16 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
<br>
[[5963,1],5][btl_openib_component.c:2893:handle_wc] from node14 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
<br>
[[5963,1],10][btl_openib_component.c:2893:handle_wc] from node21 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
<br>
[[5963,1],14][btl_openib_component.c:2893:handle_wc] from node19 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
<br>
[[5963,1],2][btl_openib_component.c:2893:handle_wc] from node10 to: node11 error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR status number 13 for wr_id 37779456 opcode 0 qp_idx 0
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
<p>&nbsp;&nbsp;Local host:   node24
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
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 4 with PID 18133 on
<br>
node node13.cluster exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
[node11:21331] 13 more processes have sent help message help-mpi-btl-openib.txt / pp rnr retry exceeded
<br>
[node11:21331] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7663.php">gaurav gupta: "[OMPI users] Need help in setting up openmpi on multiple clusters"</a>
<li><strong>Previous message:</strong> <a href="7661.php">Gregor Dschung: "Re: [OMPI users] Open MPI 1.3rc2: Restarting from a checkpoint"</a>
<li><strong>In reply to:</strong> <a href="7628.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7679.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7679.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
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
