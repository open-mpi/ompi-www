<?
$subject_val = "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 21:15:20 2009" -->
<!-- isoreceived="20091103021520" -->
<!-- sent="Mon, 2 Nov 2009 21:15:15 -0500" -->
<!-- isosent="20091103021515" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification" -->
<!-- id="1C01B5D9-AED4-431F-9963-31F905C7DB08_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="20091026114011.2ebfd140_at_lilo" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 21:15:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7071.php">Jeff Squyres: "Re: [OMPI devel] mpool rdma deadlock"</a>
<li><strong>Previous message:</strong> <a href="7069.php">Jeff Squyres: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/7021.php">Christopher Yeoh: "[OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7090.php">Christopher Yeoh: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<li><strong>Reply:</strong> <a href="7090.php">Christopher Yeoh: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 25, 2009, at 9:10 PM, Christopher Yeoh wrote:
<br>
<p><span class="quotelev1">&gt; I've been running some threaded test suites against OpenMPI and was
</span><br>
<span class="quotelev1">&gt; just wanting to clarify something in the specification and how OpenMPI
</span><br>
<span class="quotelev1">&gt; implements it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sorry for the delay in replying (my inbox has become a disaster lately  
<br>
-- please don't be shy about pinging us again if you don't get an  
<br>
answer!  Or get Brad to kick us; whichever works better ;-) ).
<br>
<p><span class="quotelev1">&gt; One page 360 of the 2.1 spec there is (in reference to
</span><br>
<span class="quotelev1">&gt; mpi_grequest_start query function):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Advice to users. query_fn must not set the error field of status
</span><br>
<span class="quotelev1">&gt;      since query_fn may be called by MPI_WAIT or MPI_TEST, in which
</span><br>
<span class="quotelev1">&gt;      case the error field of status should not change. The MPI library
</span><br>
<span class="quotelev1">&gt;      knows the &#147;context&#148; in which query_fn is invoked and can decide
</span><br>
<span class="quotelev1">&gt;      correctly when to put in the error field of status the returned
</span><br>
<span class="quotelev1">&gt;      error code. (End of advice to users.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So presumably this means that you just return an error code in the
</span><br>
<span class="quotelev1">&gt; return value of query function. But in ompi/request/req_wait.c there  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* return status.  If it's a generalized request, we *have* to
</span><br>
<span class="quotelev1">&gt;       invoke the query_fn, even if the user procided STATUS_IGNORE.
</span><br>
<span class="quotelev1">&gt;       MPI-2:8.2. */
</span><br>
<span class="quotelev1">&gt;     if (OMPI_REQUEST_GEN == req-&gt;req_type) {
</span><br>
<span class="quotelev1">&gt;         ompi_grequest_invoke_query(req, &amp;req-&gt;req_status);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which ignores the value returned by the quesry function. And it just
</span><br>
<span class="quotelev1">&gt; uses the MPI_ERROR value in the status object instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So is this just incorrect on the part of OpenMPI? Am happy to  
</span><br>
<span class="quotelev1">&gt; provide a
</span><br>
<span class="quotelev1">&gt; patch if its not right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I had to go re-read that whole section on generalized requests; I  
<br>
agree with your analysis.  Could you open a ticket and submit a  
<br>
patch?  You might want to look at the back ends to MPI_TEST[_ANY] and  
<br>
MPI_WAIT_ANY as well (if you haven't already).
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7071.php">Jeff Squyres: "Re: [OMPI devel] mpool rdma deadlock"</a>
<li><strong>Previous message:</strong> <a href="7069.php">Jeff Squyres: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/7021.php">Christopher Yeoh: "[OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7090.php">Christopher Yeoh: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<li><strong>Reply:</strong> <a href="7090.php">Christopher Yeoh: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
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
