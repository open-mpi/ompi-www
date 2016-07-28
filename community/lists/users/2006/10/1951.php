<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  7 15:53:33 2006" -->
<!-- isoreceived="20061007195333" -->
<!-- sent="Sat, 07 Oct 2006 13:53:27 -0600" -->
<!-- isosent="20061007195327" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A -pernode behavior using torque and openmpi" -->
<!-- id="C14D61D7.4077%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C14D1C87.29F63%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-07 15:53:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1952.php">ALI PILATIN: "[OMPI users] process status to detect failure"</a>
<li><strong>Previous message:</strong> <a href="1950.php">Jeff Squyres: "Re: [OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2"</a>
<li><strong>In reply to:</strong> <a href="1949.php">Jeff Squyres: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This feature is now available on the trunk - syntax is &quot;-pernode&quot;.
<br>
<p>In the absence of the number of procs:
<br>
<p>&quot;bynode&quot; will launch on all *slots*, with the processes mapped on a bynode
<br>
basis
<br>
<p>&quot;byslot&quot; will launch on all *slots*, with procs mapped on a byslot basis.
<br>
<p>&quot;pernode&quot; will launch one proc/node across all nodes.
<br>
<p><p><p>On 10/7/06 6:57 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI does not currently have an option to effect this kind of behavior.
</span><br>
<span class="quotelev1">&gt; It basically assumes that you are going to ask for the right number of slots
</span><br>
<span class="quotelev1">&gt; for your job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll file a ticket for a future enhancement to add this behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/6/06 11:25 AM, &quot;Maestas, Christopher Daniel&quot; &lt;cdmaest_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was wondering if openmpi had a -pernode like behavior similar to osc
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec ....
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -pernode mpi_hello
</span><br>
<span class="quotelev2">&gt;&gt; Would launch N mpi processes on N nodes ... No more no less.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Openmpi already will try and run N*2 nodes if you don't specify -np
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np mpi_hello
</span><br>
<span class="quotelev2">&gt;&gt; Launches N*2 mpi processes on N nodes (when using torque and 2ppn
</span><br>
<span class="quotelev2">&gt;&gt; specified in your nodes file).  This is good.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried:
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -nooversubscribe mpi_hello
</span><br>
<span class="quotelev2">&gt;&gt; [dn172:09406] [0,0,0] ORTE_ERROR_LOG: All the slots on a given node have
</span><br>
<span class="quotelev2">&gt;&gt; been used in file rmaps_rr.c at line 116
</span><br>
<span class="quotelev2">&gt;&gt; [dn172:09406] [0,0,0] ORTE_ERROR_LOG: All the slots on a given node have
</span><br>
<span class="quotelev2">&gt;&gt; been used in file rmaps_rr.c at line 392
</span><br>
<span class="quotelev2">&gt;&gt; [dn172:09406] [0,0,0] ORTE_ERROR_LOG: All the slots on a given node have
</span><br>
<span class="quotelev2">&gt;&gt; been used in file rmgr_urm.c at line 428
</span><br>
<span class="quotelev2">&gt;&gt; [dn172:09406] mpirun: spawn failed with errno=-126
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's our env:
</span><br>
<span class="quotelev2">&gt;&gt; $ env | grep ^OM
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_mvapi_ib_timeout=18
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_mvapi_use_eager_rdma=0
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_rmaps_base_schedule_policy=node
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_mvapi_ib_retry_count=15
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_oob_tcp_include=eth0
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_mpi_keep_hostnames=1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This helps us to simply launch scripts to be generic enough to run on
</span><br>
<span class="quotelev2">&gt;&gt; 1ppn and 2ppn studies pretty easily.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;Running hello world&quot;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -pernode mpi_hello
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;Running hello world 2ppn&quot;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec mpi_hello
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -cdm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1952.php">ALI PILATIN: "[OMPI users] process status to detect failure"</a>
<li><strong>Previous message:</strong> <a href="1950.php">Jeff Squyres: "Re: [OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2"</a>
<li><strong>In reply to:</strong> <a href="1949.php">Jeff Squyres: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
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
