<?
$subject_val = "[OMPI devel] Erroneous test?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 17 17:22:58 2015" -->
<!-- isoreceived="20150717212258" -->
<!-- sent="Fri, 17 Jul 2015 14:22:53 -0700" -->
<!-- isosent="20150717212253" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Erroneous test?" -->
<!-- id="D1D35B19-5F51-4C00-ACE4-841C31D1F2DE_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Erroneous test?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-17 17:22:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17657.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>Previous message:</strong> <a href="17655.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17661.php">Gilles Gouaillardet: "Re: [OMPI devel] Erroneous test?"</a>
<li><strong>Reply:</strong> <a href="17661.php">Gilles Gouaillardet: "Re: [OMPI devel] Erroneous test?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I keep getting segfault errors when testing 1.10, while others say the tests are passing for them. The tests are in the onesided area, but I don&#226;&#128;&#153;t believe they necessarily are a onesided issue.
<br>
<p>Specifically, the tests (e.g., test_start1.c) call MPI_Win_set_errhandler with a NULL argument for the first parameter (MPI_win). Looking at the code for that function, I see this:
<br>
<p>int MPI_Win_set_errhandler(MPI_Win win, MPI_Errhandler errhandler) 
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Errhandler tmp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OPAL_CR_NOOP_PROGRESS();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_PARAM_CHECK) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ERR_INIT_FINALIZE(FUNC_NAME);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ompi_win_invalid(win)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_WIN,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FUNC_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (NULL == errhandler ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_ERRHANDLER_NULL == errhandler ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(OMPI_ERRHANDLER_TYPE_WIN != errhandler-&gt;eh_mpi_object_type &amp;&amp; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_ERRHANDLER_TYPE_PREDEFINED != errhandler-&gt;eh_mpi_object_type) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERRHANDLER_INVOKE(win, MPI_ERR_ARG, FUNC_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Prepare the new error handler */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RETAIN(errhandler);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Ditch the old errhandler, and decrement its refcount.  On 64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bits environments we have to make sure the reading of the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error_handler became atomic. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp = win-&gt;error_handler;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} while (!OPAL_ATOMIC_CMPSET(&amp;(win-&gt;error_handler), tmp, errhandler));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(tmp);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* All done */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return MPI_SUCCESS;
<br>
}
<br>
<p>If someone built with &#226;&#128;&#148;with-mpi-param-check=always or runtime, then this function will return an error when given the NULL argument. Otherwise, it will definitely segfault. According to the configure output, this option is supposed to default to &#226;&#128;&#156;runtime&#226;&#128;&#157;. I don&#226;&#128;&#153;t set it in my configury, so I would have thought this was the case. And when I look at the config.log, I see:
<br>
<p>configure:10401: checking if want run-time MPI parameter checking
<br>
configure:10425: result: runtime
<br>
<p><p>However, what I&#226;&#128;&#153;m seeing implies that this is *not* the case - i.e., we aren&#226;&#128;&#153;t checking MPI params, and hence I am crashing. Does anyone have any thoughts on what could be going on? Is this test itself even correct?
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17657.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>Previous message:</strong> <a href="17655.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17661.php">Gilles Gouaillardet: "Re: [OMPI devel] Erroneous test?"</a>
<li><strong>Reply:</strong> <a href="17661.php">Gilles Gouaillardet: "Re: [OMPI devel] Erroneous test?"</a>
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
