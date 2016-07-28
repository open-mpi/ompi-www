<?
$subject_val = "Re: [OMPI users] Does MPI_Bsend always use the buffer?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 10:33:46 2007" -->
<!-- isoreceived="20071211153346" -->
<!-- sent="Tue, 11 Dec 2007 17:33:38 +0200" -->
<!-- isosent="20071211153338" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does MPI_Bsend always use the buffer?" -->
<!-- id="20071211153338.GD3360_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3EE2ABBCFEA761449CF76DF1BB73E1C50E5E8080_at_pusehe0o.eh.pweh.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Does MPI_Bsend always use the buffer?<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 10:33:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4638.php">George Bosilca: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Previous message:</strong> <a href="4636.php">Bradley, Peter C. (MIS/CFD): "[OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>In reply to:</strong> <a href="4636.php">Bradley, Peter C. (MIS/CFD): "[OMPI users] Does MPI_Bsend always use the buffer?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4638.php">George Bosilca: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Reply:</strong> <a href="4638.php">George Bosilca: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 11, 2007 at 10:27:32AM -0500, Bradley, Peter C. (MIS/CFD) wrote:
<br>
<span class="quotelev1">&gt; In OpenMPI, does MPI_Bsend always copy the message to the user-specified
</span><br>
<span class="quotelev1">&gt; buffer, or will it avoid the copy in situations where it knows the send can
</span><br>
<span class="quotelev1">&gt; complete?
</span><br>
If the message size if smaller than eager limit Open MPI will not use
<br>
user-specified buffer for it.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4638.php">George Bosilca: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Previous message:</strong> <a href="4636.php">Bradley, Peter C. (MIS/CFD): "[OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>In reply to:</strong> <a href="4636.php">Bradley, Peter C. (MIS/CFD): "[OMPI users] Does MPI_Bsend always use the buffer?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4638.php">George Bosilca: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
<li><strong>Reply:</strong> <a href="4638.php">George Bosilca: "Re: [OMPI users] Does MPI_Bsend always use the buffer?"</a>
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
