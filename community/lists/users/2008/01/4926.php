<?
$subject_val = "[OMPI users] Question about MPI_Waitany";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 13:32:12 2008" -->
<!-- isoreceived="20080130183212" -->
<!-- sent="Wed, 30 Jan 2008 19:32:07 +0100" -->
<!-- isosent="20080130183207" -->
<!-- name="Francisco Jes&#250;s Mart&#237;nez Serrano" -->
<!-- email="franjesus_at_[hidden]" -->
<!-- subject="[OMPI users] Question about MPI_Waitany" -->
<!-- id="8e3e1e8e0801301032n2d73b7d2ic12274275a986879_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Question about MPI_Waitany<br>
<strong>From:</strong> Francisco Jes&#250;s Mart&#237;nez Serrano (<em>franjesus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 13:32:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4927.php">Edgar Gabriel: "Re: [OMPI users] Question about MPI_Waitany"</a>
<li><strong>Previous message:</strong> <a href="4925.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian package of open mpi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4927.php">Edgar Gabriel: "Re: [OMPI users] Question about MPI_Waitany"</a>
<li><strong>Reply:</strong> <a href="4927.php">Edgar Gabriel: "Re: [OMPI users] Question about MPI_Waitany"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Users,
<br>
<p>the man page for MPI_Waitany states that
<br>
<p>&quot;The array_of_requests list *may contain null* or inactive handles. If
<br>
the list contains no active handles (list has length  zero  or all
<br>
entries are null or inactive), then the call returns immediately with
<br>
index = MPI_UNDEFINED, and an empty status.&quot;
<br>
<p>I've been having problems with Open MPI and a code that runs fine with
<br>
LAM, I have managed to trace it to a call to MPI_Waitany with some
<br>
requests set to null (but properly allocated).
<br>
<p>The current trunk code for ompi/mpi/c/waitany.c states:
<br>
<p>int MPI_Waitany(int count, MPI_Request *requests, int *index,
<br>
MPI_Status *status)
<br>
{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OPAL_CR_TEST_CHECKPOINT_READY();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if ( MPI_PARAM_CHECK ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i, rc = MPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ERR_INIT_FINALIZE(FUNC_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((NULL == requests) &amp;&amp; (0 != count)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_ERR_REQUEST;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; count; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == requests[i]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_ERR_REQUEST;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((NULL == index) || (0 &gt; count)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_ERR_ARG;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ERRHANDLER_CHECK(rc, MPI_COMM_WORLD, rc, FUNC_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
(...)
<br>
<p><span class="quotelev1">&gt;From what I understand in this code, if any of the requests is NULL
</span><br>
then an MPI_ERR_REQUEST error will be issued.
<br>
<p>Is this a limitation of Open MPI (i.e. further processing of this
<br>
query will result in an error if a request is null), or a simple bug?
<br>
Of course, I could be mistaken... :-)
<br>
<p>Cheers!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4927.php">Edgar Gabriel: "Re: [OMPI users] Question about MPI_Waitany"</a>
<li><strong>Previous message:</strong> <a href="4925.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian package of open mpi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4927.php">Edgar Gabriel: "Re: [OMPI users] Question about MPI_Waitany"</a>
<li><strong>Reply:</strong> <a href="4927.php">Edgar Gabriel: "Re: [OMPI users] Question about MPI_Waitany"</a>
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
