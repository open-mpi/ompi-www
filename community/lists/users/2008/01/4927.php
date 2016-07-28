<?
$subject_val = "Re: [OMPI users] Question about MPI_Waitany";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 13:41:40 2008" -->
<!-- isoreceived="20080130184140" -->
<!-- sent="Wed, 30 Jan 2008 12:41:38 -0600" -->
<!-- isosent="20080130184138" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about MPI_Waitany" -->
<!-- id="47A0C4E2.7070307_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8e3e1e8e0801301032n2d73b7d2ic12274275a986879_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about MPI_Waitany<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 13:41:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4928.php">Francisco Jesús Martínez Serrano: "Re: [OMPI users] Question about MPI_Waitany"</a>
<li><strong>Previous message:</strong> <a href="4926.php">Francisco Jes&#250;s Mart&#237;nez Serrano: "[OMPI users] Question about MPI_Waitany"</a>
<li><strong>In reply to:</strong> <a href="4926.php">Francisco Jes&#250;s Mart&#237;nez Serrano: "[OMPI users] Question about MPI_Waitany"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4928.php">Francisco Jesús Martínez Serrano: "Re: [OMPI users] Question about MPI_Waitany"</a>
<li><strong>Reply:</strong> <a href="4928.php">Francisco Jesús Martínez Serrano: "Re: [OMPI users] Question about MPI_Waitany"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you are mixing up two different things here: a NULL pointer is 
<br>
invalid, and thus Open MPI has to raise an error. If a request is 
<br>
MPI_REQUEST_NULL, that's perfectly legal according to the standard. 
<br>
However MPI_REQUEST_NULL is not a NULL pointer, its a well defined value.
<br>
<p>Francisco Jes&#250;s Mart&#237;nez Serrano wrote:
<br>
<span class="quotelev1">&gt; Hello Users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the man page for MPI_Waitany states that
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;The array_of_requests list *may contain null* or inactive handles. If
</span><br>
<span class="quotelev1">&gt; the list contains no active handles (list has length  zero  or all
</span><br>
<span class="quotelev1">&gt; entries are null or inactive), then the call returns immediately with
</span><br>
<span class="quotelev1">&gt; index = MPI_UNDEFINED, and an empty status.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been having problems with Open MPI and a code that runs fine with
</span><br>
<span class="quotelev1">&gt; LAM, I have managed to trace it to a call to MPI_Waitany with some
</span><br>
<span class="quotelev1">&gt; requests set to null (but properly allocated).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The current trunk code for ompi/mpi/c/waitany.c states:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int MPI_Waitany(int count, MPI_Request *requests, int *index,
</span><br>
<span class="quotelev1">&gt; MPI_Status *status)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     OPAL_CR_TEST_CHECKPOINT_READY();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if ( MPI_PARAM_CHECK ) {
</span><br>
<span class="quotelev1">&gt;         int i, rc = MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;         OMPI_ERR_INIT_FINALIZE(FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;         if ((NULL == requests) &amp;&amp; (0 != count)) {
</span><br>
<span class="quotelev1">&gt;             rc = MPI_ERR_REQUEST;
</span><br>
<span class="quotelev1">&gt;         } else {
</span><br>
<span class="quotelev1">&gt;             for (i = 0; i &lt; count; i++) {
</span><br>
<span class="quotelev1">&gt;                 if (NULL == requests[i]) {
</span><br>
<span class="quotelev1">&gt;                     rc = MPI_ERR_REQUEST;
</span><br>
<span class="quotelev1">&gt;                     break;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         if ((NULL == index) || (0 &gt; count)) {
</span><br>
<span class="quotelev1">&gt;             rc = MPI_ERR_ARG;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         OMPI_ERRHANDLER_CHECK(rc, MPI_COMM_WORLD, rc, FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;From what I understand in this code, if any of the requests is NULL
</span><br>
<span class="quotelev1">&gt; then an MPI_ERR_REQUEST error will be issued.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a limitation of Open MPI (i.e. further processing of this
</span><br>
<span class="quotelev1">&gt; query will result in an error if a request is null), or a simple bug?
</span><br>
<span class="quotelev1">&gt; Of course, I could be mistaken... :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4928.php">Francisco Jesús Martínez Serrano: "Re: [OMPI users] Question about MPI_Waitany"</a>
<li><strong>Previous message:</strong> <a href="4926.php">Francisco Jes&#250;s Mart&#237;nez Serrano: "[OMPI users] Question about MPI_Waitany"</a>
<li><strong>In reply to:</strong> <a href="4926.php">Francisco Jes&#250;s Mart&#237;nez Serrano: "[OMPI users] Question about MPI_Waitany"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4928.php">Francisco Jesús Martínez Serrano: "Re: [OMPI users] Question about MPI_Waitany"</a>
<li><strong>Reply:</strong> <a href="4928.php">Francisco Jesús Martínez Serrano: "Re: [OMPI users] Question about MPI_Waitany"</a>
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
