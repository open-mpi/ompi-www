<?
$subject_val = "[OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 19:41:26 2011" -->
<!-- isoreceived="20110210004126" -->
<!-- sent="Wed, 9 Feb 2011 19:41:24 -0500 (EST)" -->
<!-- isosent="20110210004124" -->
<!-- name="Jeremiah Willcock" -->
<!-- email="jewillco_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?" -->
<!-- id="alpine.LRH.2.00.1102091939001.21880_at_flowerpot.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?<br>
<strong>From:</strong> Jeremiah Willcock (<em>jewillco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-09 19:41:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15545.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="15543.php">Ralph Castain: "Re: [OMPI users] Mpirun --app option not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15545.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="15545.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get the following Open MPI error from 1.4.1:
<br>
<p>*** An error occurred in MPI_Bcast
<br>
*** on communicator MPI COMMUNICATOR 3 SPLIT FROM 0
<br>
*** MPI_ERR_IN_STATUS: error code in status
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>(hostname and port removed from each line).  There is no MPI_Status 
<br>
returned by MPI_Bcast, so I don't know what the error is?  Is this 
<br>
something that people have seen before?
<br>
<p>-- Jeremiah Willcock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15545.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="15543.php">Ralph Castain: "Re: [OMPI users] Mpirun --app option not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15545.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="15545.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
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
