<?
$subject_val = "[OMPI devel] MPI_Grequest_start and MPI_Wait clarification";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 25 21:19:54 2009" -->
<!-- isoreceived="20091026011954" -->
<!-- sent="Mon, 26 Oct 2009 11:40:11 +1030" -->
<!-- isosent="20091026011011" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Grequest_start and MPI_Wait clarification" -->
<!-- id="20091026114011.2ebfd140_at_lilo" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Grequest_start and MPI_Wait clarification<br>
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-25 21:10:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7022.php">Jeff Squyres: "[OMPI devel] RFC: configure / m4 reorganization"</a>
<li><strong>Previous message:</strong> <a href="7020.php">Ralph Castain: "[OMPI devel] Change in 1.3 Gatekeeper for 10/24-11/9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7070.php">Jeff Squyres: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7070.php">Jeff Squyres: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've been running some threaded test suites against OpenMPI and was
<br>
just wanting to clarify something in the specification and how OpenMPI
<br>
implements it.
<br>
<p>One page 360 of the 2.1 spec there is (in reference to
<br>
mpi_grequest_start query function):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Advice to users. query_fn must not set the error field of status
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;since query_fn may be called by MPI_WAIT or MPI_TEST, in which
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case the error field of status should not change. The MPI library
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;knows the &#226;&#128;&#156;context&#226;&#128;&#157; in which query_fn is invoked and can decide
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;correctly when to put in the error field of status the returned
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error code. (End of advice to users.)
<br>
<p>So presumably this means that you just return an error code in the
<br>
return value of query function. But in ompi/request/req_wait.c there is
<br>
<p>&nbsp;&nbsp;&nbsp;/* return status.  If it's a generalized request, we *have* to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;invoke the query_fn, even if the user procided STATUS_IGNORE.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI-2:8.2. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_REQUEST_GEN == req-&gt;req_type) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_grequest_invoke_query(req, &amp;req-&gt;req_status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>which ignores the value returned by the quesry function. And it just
<br>
uses the MPI_ERROR value in the status object instead.
<br>
<p>So is this just incorrect on the part of OpenMPI? Am happy to provide a
<br>
patch if its not right.
<br>
<p>Chris
<br>
<pre>
-- 
cyeoh_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7022.php">Jeff Squyres: "[OMPI devel] RFC: configure / m4 reorganization"</a>
<li><strong>Previous message:</strong> <a href="7020.php">Ralph Castain: "[OMPI devel] Change in 1.3 Gatekeeper for 10/24-11/9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7070.php">Jeff Squyres: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7070.php">Jeff Squyres: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
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
