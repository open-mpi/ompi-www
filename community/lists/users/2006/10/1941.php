<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  6 11:25:45 2006" -->
<!-- isoreceived="20061006152545" -->
<!-- sent="Fri, 6 Oct 2006 09:25:27 -0600" -->
<!-- isosent="20061006152527" -->
<!-- name="Maestas, Christopher Daniel" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="[OMPI users] A -pernode behavior using torque and openmpi" -->
<!-- id="347180497203A942A6AA82C85846CBC9034F5FCF_at_ES23SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Maestas, Christopher Daniel (<em>cdmaest_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-06 11:25:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1942.php">Maestas, Christopher Daniel: "[OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2"</a>
<li><strong>Previous message:</strong> <a href="1940.php">&#197;ke Sandgren: "Re: [OMPI users] Bugs in config tests for threads (1.1.2rc3 at	least)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1949.php">Jeff Squyres: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
<li><strong>Reply:</strong> <a href="1949.php">Jeff Squyres: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I was wondering if openmpi had a -pernode like behavior similar to osc
<br>
mpiexec ....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpiexec -pernode mpi_hello
<br>
Would launch N mpi processes on N nodes ... No more no less.
<br>
<p>Openmpi already will try and run N*2 nodes if you don't specify -np
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np mpi_hello
<br>
Launches N*2 mpi processes on N nodes (when using torque and 2ppn
<br>
specified in your nodes file).  This is good.
<br>
<p>I tried:
<br>
$ mpirun -nooversubscribe mpi_hello
<br>
[dn172:09406] [0,0,0] ORTE_ERROR_LOG: All the slots on a given node have
<br>
been used in file rmaps_rr.c at line 116
<br>
[dn172:09406] [0,0,0] ORTE_ERROR_LOG: All the slots on a given node have
<br>
been used in file rmaps_rr.c at line 392
<br>
[dn172:09406] [0,0,0] ORTE_ERROR_LOG: All the slots on a given node have
<br>
been used in file rmgr_urm.c at line 428
<br>
[dn172:09406] mpirun: spawn failed with errno=-126
<br>
<p>Here's our env:
<br>
$ env | grep ^OM
<br>
OMPI_MCA_btl_mvapi_ib_timeout=18
<br>
OMPI_MCA_btl_mvapi_use_eager_rdma=0
<br>
OMPI_MCA_rmaps_base_schedule_policy=node
<br>
OMPI_MCA_btl_mvapi_ib_retry_count=15
<br>
OMPI_MCA_oob_tcp_include=eth0
<br>
OMPI_MCA_mpi_keep_hostnames=1
<br>
<p>This helps us to simply launch scripts to be generic enough to run on
<br>
1ppn and 2ppn studies pretty easily.
<br>
<p><pre>
----
echo &quot;Running hello world&quot;
mpiexec -pernode mpi_hello 
echo &quot;Running hello world 2ppn&quot;
mpiexec mpi_hello 
---
Thanks,
-cdm
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1942.php">Maestas, Christopher Daniel: "[OMPI users] Orte_error_log w/ ompi 1.1.1 and torque 2.1.2"</a>
<li><strong>Previous message:</strong> <a href="1940.php">&#197;ke Sandgren: "Re: [OMPI users] Bugs in config tests for threads (1.1.2rc3 at	least)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1949.php">Jeff Squyres: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
<li><strong>Reply:</strong> <a href="1949.php">Jeff Squyres: "Re: [OMPI users] A -pernode behavior using torque and openmpi"</a>
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
