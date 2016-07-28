<?
$subject_val = "Re: [OMPI users] MPI_Test without deallocation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 19:34:37 2009" -->
<!-- isoreceived="20090325233437" -->
<!-- sent="Wed, 25 Mar 2009 16:34:06 -0700" -->
<!-- isosent="20090325233406" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Test without deallocation" -->
<!-- id="49CABF6E.1070807_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49CABCF3.5070905_at_cs.utah.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Test without deallocation<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 19:34:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8592.php">Justin: "Re: [OMPI users] MPI_Test without deallocation"</a>
<li><strong>Previous message:</strong> <a href="8590.php">Justin: "Re: [OMPI users] MPI_Test without deallocation"</a>
<li><strong>In reply to:</strong> <a href="8590.php">Justin: "Re: [OMPI users] MPI_Test without deallocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8592.php">Justin: "Re: [OMPI users] MPI_Test without deallocation"</a>
<li><strong>Reply:</strong> <a href="8592.php">Justin: "Re: [OMPI users] MPI_Test without deallocation"</a>
<li><strong>Reply:</strong> <a href="8593.php">Richard Treumann: "Re: [OMPI users] MPI_Test without deallocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If an MPI_Irecv has already been posted, and a single message is sent 
<br>
to the receiver, then will an MPI_Probe return that there is no 
<br>
message waiting to be received? The message has already been received 
<br>
by the MPI_Irecv. It's the MPI_Request object of the MPI_Irecv call 
<br>
that needs to be probed, but MPI_Test has the side effect of also 
<br>
deallocating the MPI_Request object.
<br>
<p>Cheers,
<br>
Shaun
<br>
<p>Justin wrote:
<br>
<span class="quotelev1">&gt; Have you tried MPI_Probe?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Justin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shaun Jackman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Is there a function similar to MPI_Test that doesn't deallocate the 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Request object? I would like to test if a message has been 
</span><br>
<span class="quotelev2">&gt;&gt; received (MPI_Irecv), check its tag, and dispatch the MPI_Request to 
</span><br>
<span class="quotelev2">&gt;&gt; another function based on that tag.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Shaun
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8592.php">Justin: "Re: [OMPI users] MPI_Test without deallocation"</a>
<li><strong>Previous message:</strong> <a href="8590.php">Justin: "Re: [OMPI users] MPI_Test without deallocation"</a>
<li><strong>In reply to:</strong> <a href="8590.php">Justin: "Re: [OMPI users] MPI_Test without deallocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8592.php">Justin: "Re: [OMPI users] MPI_Test without deallocation"</a>
<li><strong>Reply:</strong> <a href="8592.php">Justin: "Re: [OMPI users] MPI_Test without deallocation"</a>
<li><strong>Reply:</strong> <a href="8593.php">Richard Treumann: "Re: [OMPI users] MPI_Test without deallocation"</a>
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
