<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 11 08:42:13 2006" -->
<!-- isoreceived="20060411124213" -->
<!-- sent="Tue, 11 Apr 2006 08:42:00 -0400" -->
<!-- isosent="20060411124200" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE errors" -->
<!-- id="18A164E4-F384-49BB-A23D-544742805F46_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="443ADCD1.2040409_at_lanl.gov" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-11 08:42:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1014.php">Jeffrey B. Layton: "[OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>Previous message:</strong> <a href="1012.php">Lee D. Peterson: "[OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>In reply to:</strong> <a href="1009.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1015.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
<li><strong>Reply:</strong> <a href="1015.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 10, 2006, at 6:31 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Was this the only output you received? If so, then it looks like  
</span><br>
<span class="quotelev1">&gt; your parent process never gets to spawn and bcast - you should have  
</span><br>
<span class="quotelev1">&gt; seen your write statements first, yes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<p>I only listed the ORTE errors, I get the correct output, complete as  
<br>
follows:
<br>
<p>parent:  0  of  1
<br>
parent: How many processes total?
<br>
2
<br>
parent: Calling MPI_Comm_spawn to start  1  subprocesses.
<br>
parent: Calling MPI_BCAST with btest =  17 .  child =  3
<br>
child 0 of 1:  Parent 3
<br>
[host:00258] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
soh_base_get_proc_soh.c at line 80
<br>
[host:00258] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
oob_base_xcast.c at line 108
<br>
[host:00258] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
rmgr_base_stage_gate.c at line 276
<br>
[host:00258] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
soh_base_get_proc_soh.c at line 80
<br>
[host:00258] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
oob_base_xcast.c at line 108
<br>
[host:00258] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
rmgr_base_stage_gate.c at line 276
<br>
child 0 of 1:  Receiving   17 from parent
<br>
Maximum user memory allocated: 0
<br>
<p>Michael
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Kluskens wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The ORTE errors again, these are new and different errors.  Tested  
</span><br>
<span class="quotelev2">&gt;&gt; as of  OpenMPI 1.1a1r9596.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
</span><br>
<span class="quotelev2">&gt;&gt; soh_base_get_proc_soh.c at line 80
</span><br>
<span class="quotelev2">&gt;&gt; [host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
</span><br>
<span class="quotelev2">&gt;&gt; oob_base_xcast.c at line 108
</span><br>
<span class="quotelev2">&gt;&gt; [host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
</span><br>
<span class="quotelev2">&gt;&gt; rmgr_base_stage_gate.c at line 276
</span><br>
<span class="quotelev2">&gt;&gt; [host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
</span><br>
<span class="quotelev2">&gt;&gt; soh_base_get_proc_soh.c at line 80
</span><br>
<span class="quotelev2">&gt;&gt; [host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
</span><br>
<span class="quotelev2">&gt;&gt; oob_base_xcast.c at line 108
</span><br>
<span class="quotelev2">&gt;&gt; [host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
</span><br>
<span class="quotelev2">&gt;&gt; rmgr_base_stage_gate.c at line 276
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This test was run using OpenMPI 1.1 built on OS X 10.4.6 with g95  
</span><br>
<span class="quotelev2">&gt;&gt; from 4/9/06.  Past experience was that the ORTE errors were  
</span><br>
<span class="quotelev2">&gt;&gt; independent of OS and compiler.  Attached sample codes generated  
</span><br>
<span class="quotelev2">&gt;&gt; these errors.  They use MPI_SPAWN and MPI_BCAST (most vendors  
</span><br>
<span class="quotelev2">&gt;&gt; MPI's can't run this test case).
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1014.php">Jeffrey B. Layton: "[OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>Previous message:</strong> <a href="1012.php">Lee D. Peterson: "[OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>In reply to:</strong> <a href="1009.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1015.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
<li><strong>Reply:</strong> <a href="1015.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
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
