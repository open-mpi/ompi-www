<?
$subject_val = "Re: [OMPI users] Hide Abort output";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 13:32:39 2010" -->
<!-- isoreceived="20100406173239" -->
<!-- sent="Tue, 6 Apr 2010 19:32:35 +0200 (CEST)" -->
<!-- isosent="20100406173235" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hide Abort output" -->
<!-- id="52503.61.69.2.73.1270575155.squirrel_at_webmail.chalmers.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OFDA920E6F.32DD5DFB-ON852576FD.0051C4C6-852576FD.005288A5_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hide Abort output<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 13:32:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12560.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="12558.php">Jeff Squyres: "Re: [OMPI users] MPI Literature Survey on Multicores"</a>
<li><strong>In reply to:</strong> <a href="12554.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12562.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="12562.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Jeff -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I started a discussion of MPI_Quit on the MPI Forum reflector.  I raised
</span><br>
<span class="quotelev1">&gt; the question because I do not think using MPI_Abort is appropriate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The situation is when  a single task decides the parallel program has
</span><br>
<span class="quotelev1">&gt; arrived at the desired answer and therefore whatever the other tasks are
</span><br>
<span class="quotelev1">&gt; currently doing has become irrelevant.  The other tasks do not know that
</span><br>
<span class="quotelev1">&gt; the answer has been found by one of them so they cannot just call
</span><br>
<span class="quotelev1">&gt; MPI_Finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do we need a clean and portable way for the task that detects that the
</span><br>
<span class="quotelev1">&gt; answer has been found and written out to do a single handed termination of
</span><br>
<span class="quotelev1">&gt; the parallel job?
</span><br>
<p>I'm not Jeff.  But isn't that MPI_Abort with an appropriate errorcode
<br>
argument, provided we can get it to shut up?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12560.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="12558.php">Jeff Squyres: "Re: [OMPI users] MPI Literature Survey on Multicores"</a>
<li><strong>In reply to:</strong> <a href="12554.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12562.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="12562.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
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
