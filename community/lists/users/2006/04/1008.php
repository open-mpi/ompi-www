<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 18:19:28 2006" -->
<!-- isoreceived="20060410221928" -->
<!-- sent="Mon, 10 Apr 2006 18:19:16 -0400" -->
<!-- isosent="20060410221916" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] ORTE errors" -->
<!-- id="FA5A8EEA-25F9-4E71-B8A4-F42CA29E898D_at_ieee.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2006-04-10 18:19:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1009.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
<li><strong>Previous message:</strong> <a href="1007.php">David Daniel: "Re: [OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1009.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
<li><strong>Reply:</strong> <a href="1009.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The ORTE errors again, these are new and different errors.  Tested as  
<br>
of  OpenMPI 1.1a1r9596.
<br>
<p>[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
soh_base_get_proc_soh.c at line 80
<br>
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
oob_base_xcast.c at line 108
<br>
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
rmgr_base_stage_gate.c at line 276
<br>
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
soh_base_get_proc_soh.c at line 80
<br>
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
oob_base_xcast.c at line 108
<br>
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
<br>
rmgr_base_stage_gate.c at line 276
<br>
<p>This test was run using OpenMPI 1.1 built on OS X 10.4.6 with g95  
<br>
from 4/9/06.  Past experience was that the ORTE errors were  
<br>
independent of OS and compiler.  Attached sample codes generated  
<br>
these errors.  They use MPI_SPAWN and MPI_BCAST (most vendors MPI's  
<br>
can't run this test case).
<br>
<p>Michael
<br>
<p><p><p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1008/parent.f90">parent.f90</a>
</ul>
<!-- attachment="parent.f90" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1008/child.f90">child.f90</a>
</ul>
<!-- attachment="child.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1009.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
<li><strong>Previous message:</strong> <a href="1007.php">David Daniel: "Re: [OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1009.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
<li><strong>Reply:</strong> <a href="1009.php">Ralph Castain: "Re: [OMPI users] ORTE errors"</a>
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
