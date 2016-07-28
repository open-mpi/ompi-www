<?
$subject_val = "[OMPI users] FW:  LOCAL QP OPERATION ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 20:28:31 2014" -->
<!-- isoreceived="20140312002831" -->
<!-- sent="Wed, 12 Mar 2014 00:28:27 +0000" -->
<!-- isosent="20140312002827" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="[OMPI users] FW:  LOCAL QP OPERATION ERROR" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A3ECED84D_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A3ECECD82_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> [OMPI users] FW:  LOCAL QP OPERATION ERROR<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 20:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23806.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>Previous message:</strong> <a href="23804.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Vince
<br>
<p>Have you tried with a different BTL? In particular, have you tried with the TCP BTL? Please try setting &quot;-mca btl sm,self,tcp&quot; and see if you still run into the issue.  
<br>
<p>How is your OMPI configured?
<br>
<p>Josh
<br>
<p><p><p><span class="quotelev1">&gt; From: Vince Grimes &lt;tom.grimes_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] LOCAL QP OPERATION ERROR
</span><br>
<span class="quotelev1">&gt; Date: March 5, 2014 5:21:51 PM EST
</span><br>
<span class="quotelev1">&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI folks:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	I am having trouble running a specific program (ScalIT, a code produced and maintained by one of the research groups here at TTU) using Infiniband. There is conflicting information that has made it impossible to diagnose the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Other programs (like NWChem) run using OpenMPI over multiple nodes using Infiniband without any problems at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) ScalIT runs on other clusters (and I believe with OpenMPI) without error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) ScalIT runs with OpenMPI on a single node without error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4) ScalIT dies at a particular place with OpenMPI over multiple nodes (20) with OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know whether it is a hardware problem (but other codes work just fine) or a programming error in ScalIT (but it works without modification on other clusters).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error I am getting is:
</span><br>
<span class="quotelev1">&gt; local QP operation err (QPN 0014bc, WQE @ 00009005, CQN 000097, index
</span><br>
<span class="quotelev1">&gt; 2232620)  [ 0] 000014bc  [ 4] 00000000  [ 8] 00000000  [ c] 00000000 
</span><br>
<span class="quotelev1">&gt; [10] 026f3410  [14] 00000000  [18] 00009005  [1c] ff100000 
</span><br>
<span class="quotelev1">&gt; [[44095,1],45][btl_openib_component.c:3492:handle_wc] from 
</span><br>
<span class="quotelev1">&gt; compute-6-13.local to: compute-3-11 error polling LP CQ with status 
</span><br>
<span class="quotelev1">&gt; LOCAL QP OPERATION ERROR status number 2 for wr_id 40c5e00 opcode 0 
</span><br>
<span class="quotelev1">&gt; vendor error 111 qp_idx 0
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- mpirun has exited due to process rank 45 with PID 27168 on node 
</span><br>
<span class="quotelev1">&gt; compute-6-13.local exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in the 
</span><br>
<span class="quotelev1">&gt; job did. This can cause a job to hang indefinitely while it waits for 
</span><br>
<span class="quotelev1">&gt; all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;, 
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to 
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be 
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.6.5 compiled with the Intel 11.1-080 compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; `uname -a` returns &quot;Linux compute-1-1.local 2.6.32-279.14.1.el6.x86_64 #1 SMP Tue Nov 6 23:43:09 UTC 2012 x86_64 x86_64 x86_64 GNU/Linux&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ibv_devinfo returns
</span><br>
<span class="quotelev1">&gt; hca_id: mthca0
</span><br>
<span class="quotelev1">&gt;        transport:                      InfiniBand (0)
</span><br>
<span class="quotelev1">&gt;        fw_ver:                         1.2.0
</span><br>
<span class="quotelev1">&gt;        node_guid:                      0005:ad00:001f:fed8
</span><br>
<span class="quotelev1">&gt;        sys_image_guid:                 0005:ad00:0100:d050
</span><br>
<span class="quotelev1">&gt;        vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;        vendor_part_id:                 25204
</span><br>
<span class="quotelev1">&gt;        hw_ver:                         0xA0
</span><br>
<span class="quotelev1">&gt;        board_id:                       MT_03B0120002
</span><br>
<span class="quotelev1">&gt;        phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt;                port:   1
</span><br>
<span class="quotelev1">&gt;                        state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                        max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                        active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                        sm_lid:                 1
</span><br>
<span class="quotelev1">&gt;                        port_lid:               39
</span><br>
<span class="quotelev1">&gt;                        port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                        link_layer:             IB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help in tracking down the problem is greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; T. Vince Grimes, Ph.D.
</span><br>
<span class="quotelev1">&gt; CCC System Administrator
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Texas Tech University
</span><br>
<span class="quotelev1">&gt; Dept. of Chemistry and Biochemistry (10A) Box 41061 Lubbock, TX
</span><br>
<span class="quotelev1">&gt; 79409-1061
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (806) 834-0813 (voice);     (806) 742-1289 (fax)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23806.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>Previous message:</strong> <a href="23804.php">tmishima_at_[hidden]: "Re: [OMPI users] incorrect verbose output in bind_downwards"</a>
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
