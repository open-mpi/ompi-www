<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  7 08:57:50 2006" -->
<!-- isoreceived="20061007125750" -->
<!-- sent="Sat, 07 Oct 2006 08:57:43 -0400" -->
<!-- isosent="20061007125743" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A -pernode behavior using torque and openmpi" -->
<!-- id="C14D1C87.29F63%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="347180497203A942A6AA82C85846CBC9034F5FCF_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-07 08:57:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1950.php">Jeff Squyres: "Re: [OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2"</a>
<li><strong>Previous message:</strong> <a href="1948.php">Jeff Squyres: "Re: [OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support"</a>
<li><strong>In reply to:</strong> <a href="1941.php">Maestas, Christopher Daniel: "[OMPI users] A -pernode behavior using torque and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1951.php">Ralph Castain: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
<li><strong>Reply:</strong> <a href="1951.php">Ralph Castain: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI does not currently have an option to effect this kind of behavior.
<br>
It basically assumes that you are going to ask for the right number of slots
<br>
for your job.
<br>
<p>I'll file a ticket for a future enhancement to add this behavior.
<br>
<p><p>On 10/6/06 11:25 AM, &quot;Maestas, Christopher Daniel&quot; &lt;cdmaest_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was wondering if openmpi had a -pernode like behavior similar to osc
</span><br>
<span class="quotelev1">&gt; mpiexec ....
</span><br>
<span class="quotelev1">&gt; mpiexec -pernode mpi_hello
</span><br>
<span class="quotelev1">&gt; Would launch N mpi processes on N nodes ... No more no less.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Openmpi already will try and run N*2 nodes if you don't specify -np
</span><br>
<span class="quotelev1">&gt; mpirun -np mpi_hello
</span><br>
<span class="quotelev1">&gt; Launches N*2 mpi processes on N nodes (when using torque and 2ppn
</span><br>
<span class="quotelev1">&gt; specified in your nodes file).  This is good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried:
</span><br>
<span class="quotelev1">&gt; $ mpirun -nooversubscribe mpi_hello
</span><br>
<span class="quotelev1">&gt; [dn172:09406] [0,0,0] ORTE_ERROR_LOG: All the slots on a given node have
</span><br>
<span class="quotelev1">&gt; been used in file rmaps_rr.c at line 116
</span><br>
<span class="quotelev1">&gt; [dn172:09406] [0,0,0] ORTE_ERROR_LOG: All the slots on a given node have
</span><br>
<span class="quotelev1">&gt; been used in file rmaps_rr.c at line 392
</span><br>
<span class="quotelev1">&gt; [dn172:09406] [0,0,0] ORTE_ERROR_LOG: All the slots on a given node have
</span><br>
<span class="quotelev1">&gt; been used in file rmgr_urm.c at line 428
</span><br>
<span class="quotelev1">&gt; [dn172:09406] mpirun: spawn failed with errno=-126
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's our env:
</span><br>
<span class="quotelev1">&gt; $ env | grep ^OM
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_mvapi_ib_timeout=18
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_mvapi_use_eager_rdma=0
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_rmaps_base_schedule_policy=node
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_mvapi_ib_retry_count=15
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_oob_tcp_include=eth0
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mpi_keep_hostnames=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This helps us to simply launch scripts to be generic enough to run on
</span><br>
<span class="quotelev1">&gt; 1ppn and 2ppn studies pretty easily.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; echo &quot;Running hello world&quot;
</span><br>
<span class="quotelev1">&gt; mpiexec -pernode mpi_hello
</span><br>
<span class="quotelev1">&gt; echo &quot;Running hello world 2ppn&quot;
</span><br>
<span class="quotelev1">&gt; mpiexec mpi_hello
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -cdm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1950.php">Jeff Squyres: "Re: [OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2"</a>
<li><strong>Previous message:</strong> <a href="1948.php">Jeff Squyres: "Re: [OMPI users] Building Open MPI 1.1.1 on OS X with ifort and icc support"</a>
<li><strong>In reply to:</strong> <a href="1941.php">Maestas, Christopher Daniel: "[OMPI users] A -pernode behavior using torque and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1951.php">Ralph Castain: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
<li><strong>Reply:</strong> <a href="1951.php">Ralph Castain: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
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
