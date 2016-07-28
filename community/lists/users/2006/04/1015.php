<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 11 11:32:21 2006" -->
<!-- isoreceived="20060411153221" -->
<!-- sent="Tue, 11 Apr 2006 09:32:15 -0600" -->
<!-- isosent="20060411153215" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE errors" -->
<!-- id="443BCBFF.9070702_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="18A164E4-F384-49BB-A23D-544742805F46_at_ieee.org" -->
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
<strong>Date:</strong> 2006-04-11 11:32:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1016.php">David Daniel: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="1014.php">Jeffrey B. Layton: "[OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>In reply to:</strong> <a href="1013.php">Michael Kluskens: "Re: [OMPI users] ORTE errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Thanks Michael - we're looking into it and will get back to you shortly.<br>
<br>
Ralph<br>
<br>
<br>
Michael Kluskens wrote:
<blockquote cite="mid18A164E4-F384-49BB-A23D-544742805F46@ieee.org"
 type="cite">
  <pre wrap="">On Apr 10, 2006, at 6:31 PM, Ralph Castain wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">Was this the only output you received? If so, then it looks like  
your parent process never gets to spawn and bcast - you should have  
seen your write statements first, yes?

Ralph
    </pre>
  </blockquote>
  <pre wrap=""><!---->
I only listed the ORTE errors, I get the correct output, complete as  
follows:

parent:  0  of  1
parent: How many processes total?
2
parent: Calling MPI_Comm_spawn to start  1  subprocesses.
parent: Calling MPI_BCAST with btest =  17 .  child =  3
child 0 of 1:  Parent 3
[host:00258] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
soh_base_get_proc_soh.c at line 80
[host:00258] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
oob_base_xcast.c at line 108
[host:00258] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
rmgr_base_stage_gate.c at line 276
[host:00258] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
soh_base_get_proc_soh.c at line 80
[host:00258] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
oob_base_xcast.c at line 108
[host:00258] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
rmgr_base_stage_gate.c at line 276
child 0 of 1:  Receiving   17 from parent
Maximum user memory allocated: 0

Michael


  </pre>
  <blockquote type="cite">
    <pre wrap="">Michael Kluskens wrote:
    </pre>
    <blockquote type="cite">
      <pre wrap="">The ORTE errors again, these are new and different errors.  Tested  
as of  OpenMPI 1.1a1r9596.

[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
soh_base_get_proc_soh.c at line 80
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
oob_base_xcast.c at line 108
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
rmgr_base_stage_gate.c at line 276
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
soh_base_get_proc_soh.c at line 80
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
oob_base_xcast.c at line 108
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file base/ 
rmgr_base_stage_gate.c at line 276

This test was run using OpenMPI 1.1 built on OS X 10.4.6 with g95  
from 4/9/06.  Past experience was that the ORTE errors were  
independent of OS and compiler.  Attached sample codes generated  
these errors.  They use MPI_SPAWN and MPI_BCAST (most vendors  
MPI's can't run this test case).
      </pre>
    </blockquote>
  </blockquote>
  <pre wrap=""><!---->_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1016.php">David Daniel: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="1014.php">Jeffrey B. Layton: "[OMPI users] Problem running code with OpenMPI-1.0.1"</a>
<li><strong>In reply to:</strong> <a href="1013.php">Michael Kluskens: "Re: [OMPI users] ORTE errors"</a>
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
