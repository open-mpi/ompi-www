<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 14 12:33:14 2006" -->
<!-- isoreceived="20060314173314" -->
<!-- sent="Tue, 14 Mar 2006 11:33:08 -0600" -->
<!-- isosent="20060314173308" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_connect and singleton init" -->
<!-- id="20060314173308.GA4010_at_mcs.anl.gov" -->
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
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-14 12:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0854.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Previous message:</strong> <a href="0852.php">Robert Latham: "[OMPI users] comm_join and singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0855.php">Edgar Gabriel: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
<li><strong>Reply:</strong> <a href="0855.php">Edgar Gabriel: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
In playing around with process management routines, I found another
<br>
issue.  This one might very well be operator error, or something
<br>
implementation specific.
<br>
<p>I've got two processes (a and b), linked with openmpi, but started
<br>
independently (no mpiexec).  
<br>
<p>- A starts up and calls MPI_Init
<br>
- A calls MPI_Open_port, prints out the port name to stdout, then
<br>
&nbsp;&nbsp;calls MPI_Comm_accept and blocks.
<br>
- B takes as a command line argument the port
<br>
&nbsp;&nbsp;name printed out by A.  It calls MPI_Init and then and passes that
<br>
&nbsp;&nbsp;port name to MPI_Comm_connect
<br>
- B gets the following error:
<br>
<p>[leela.mcs.anl.gov:04177] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch
<br>
in file ../../../orte/dps/dps_unpack.c at line 121
<br>
[leela.mcs.anl.gov:04177] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch
<br>
in file ../../../orte/dps/dps_unpack.c at line 95
<br>
[leela.mcs.anl.gov:04177] *** An error occurred in MPI_Comm_connect
<br>
[leela.mcs.anl.gov:04177] *** on communicator MPI_COMM_WORLD
<br>
[leela.mcs.anl.gov:04177] *** MPI_ERR_UNKNOWN: unknown error
<br>
[leela.mcs.anl.gov:04177] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[leela.mcs.anl.gov:04177] [0,0,0] ORTE_ERROR_LOG: Not found in file
<br>
../../../../../orte/mca/pls/base/pls_base_proxy.c at line 183
<br>
<p>- A is still waiting for someone to connect to it.
<br>
<p>Did I pass MPI port strings between programs the correct way, or is
<br>
MPI_Publish_name/MPI_Lookup_name the prefered way to pass around this
<br>
information?
<br>
<p>Thanks
<br>
==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Labs, IL USA                B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0854.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Previous message:</strong> <a href="0852.php">Robert Latham: "[OMPI users] comm_join and singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0855.php">Edgar Gabriel: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
<li><strong>Reply:</strong> <a href="0855.php">Edgar Gabriel: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
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
