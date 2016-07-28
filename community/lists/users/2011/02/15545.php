<?
$subject_val = "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 19:49:42 2011" -->
<!-- isoreceived="20110210004942" -->
<!-- sent="Wed, 9 Feb 2011 19:49:41 -0500 (EST)" -->
<!-- isosent="20110210004941" -->
<!-- name="Jeremiah Willcock" -->
<!-- email="jewillco_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?" -->
<!-- id="alpine.LRH.2.00.1102091949040.21880_at_flowerpot.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.LRH.2.00.1102091939001.21880_at_flowerpot.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?<br>
<strong>From:</strong> Jeremiah Willcock (<em>jewillco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-09 19:49:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15546.php">Tena Sakai: "[OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15544.php">Jeremiah Willcock: "[OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="15544.php">Jeremiah Willcock: "[OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15552.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="15552.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 9 Feb 2011, Jeremiah Willcock wrote:
<br>
<p><span class="quotelev1">&gt; I get the following Open MPI error from 1.4.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI COMMUNICATOR 3 SPLIT FROM 0
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_IN_STATUS: error code in status
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (hostname and port removed from each line).  There is no MPI_Status returned 
</span><br>
<span class="quotelev1">&gt; by MPI_Bcast, so I don't know what the error is?  Is this something that 
</span><br>
<span class="quotelev1">&gt; people have seen before?
</span><br>
<p>For the record, this appears to be caused by specifying inconsistent data 
<br>
sizes on the different ranks in the broadcast operation.  The error 
<br>
message could still be improved, though.
<br>
<p>-- Jeremiah Willcock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15546.php">Tena Sakai: "[OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15544.php">Jeremiah Willcock: "[OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="15544.php">Jeremiah Willcock: "[OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15552.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="15552.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
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
