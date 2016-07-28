<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 18:31:51 2006" -->
<!-- isoreceived="20060410223151" -->
<!-- sent="Mon, 10 Apr 2006 16:31:45 -0600" -->
<!-- isosent="20060410223145" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE errors" -->
<!-- id="443ADCD1.2040409_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FA5A8EEA-25F9-4E71-B8A4-F42CA29E898D_at_ieee.org" -->
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
<strong>Date:</strong> 2006-04-10 18:31:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1010.php">Audet, Martin: "[OMPI users] Incorrect behavior for attributes attached to MPI_COMM_SELF."</a>
<li><strong>Previous message:</strong> <a href="1008.php">Michael Kluskens: "[OMPI users] ORTE errors"</a>
<li><strong>In reply to:</strong> <a href="1008.php">Michael Kluskens: "[OMPI users] ORTE errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1013.php">Michael Kluskens: "Re: [OMPI users] ORTE errors"</a>
<li><strong>Reply:</strong> <a href="1013.php">Michael Kluskens: "Re: [OMPI users] ORTE errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Was this the only output you received? If so, then it looks like your
parent process never gets to spawn and bcast - you should have seen
your write statements first, yes?<br>
<br>
Ralph<br>
<br>
<br>
Michael Kluskens wrote:
<blockquote cite="midFA5A8EEA-25F9-4E71-B8A4-F42CA29E898D@ieee.org"
 type="cite">The ORTE errors again, these are new and different
errors.&nbsp; Tested as of&nbsp; OpenMPI 1.1a1r9596.
  <br>
  <br>
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file
base/soh_base_get_proc_soh.c at line 80
  <br>
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file
base/oob_base_xcast.c at line 108
  <br>
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file
base/rmgr_base_stage_gate.c at line 276
  <br>
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file
base/soh_base_get_proc_soh.c at line 80
  <br>
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file
base/oob_base_xcast.c at line 108
  <br>
[host:10198] [0,0,0] ORTE_ERROR_LOG: Not found in file
base/rmgr_base_stage_gate.c at line 276
  <br>
  <br>
This test was run using OpenMPI 1.1 built on OS X 10.4.6 with g95 from
4/9/06.&nbsp; Past experience was that the ORTE errors were independent of
OS and compiler.&nbsp; Attached sample codes generated these errors.&nbsp; They
use MPI_SPAWN and MPI_BCAST (most vendors MPI's can't run this test
case).
  <br>
  <br>
Michael
  <br>
  <br>
  <br>
  <pre wrap="">
<hr size="4" width="90%">
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1010.php">Audet, Martin: "[OMPI users] Incorrect behavior for attributes attached to MPI_COMM_SELF."</a>
<li><strong>Previous message:</strong> <a href="1008.php">Michael Kluskens: "[OMPI users] ORTE errors"</a>
<li><strong>In reply to:</strong> <a href="1008.php">Michael Kluskens: "[OMPI users] ORTE errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1013.php">Michael Kluskens: "Re: [OMPI users] ORTE errors"</a>
<li><strong>Reply:</strong> <a href="1013.php">Michael Kluskens: "Re: [OMPI users] ORTE errors"</a>
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
