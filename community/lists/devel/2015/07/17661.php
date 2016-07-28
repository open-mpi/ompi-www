<?
$subject_val = "Re: [OMPI devel] Erroneous test?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 17 23:00:18 2015" -->
<!-- isoreceived="20150718030018" -->
<!-- sent="Sat, 18 Jul 2015 12:00:00 +0900" -->
<!-- isosent="20150718030000" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Erroneous test?" -->
<!-- id="CAAkFZ5uU=VquF86X+W+ByYfeF4oFrRoLY6+hPM9zNso3JdvCJw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D1D35B19-5F51-4C00-ACE4-841C31D1F2DE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Erroneous test?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-17 23:00:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17662.php">Ralph Castain: "Re: [OMPI devel] Erroneous test?"</a>
<li><strong>Previous message:</strong> <a href="17660.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>In reply to:</strong> <a href="17656.php">Ralph Castain: "[OMPI devel] Erroneous test?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17662.php">Ralph Castain: "Re: [OMPI devel] Erroneous test?"</a>
<li><strong>Reply:</strong> <a href="17662.php">Ralph Castain: "Re: [OMPI devel] Erroneous test?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I will try to reproduce this.
<br>
I guess you already checked the output of ompi_info to confirm params are
<br>
checked at runtime.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, July 18, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I keep getting segfault errors when testing 1.10, while others say the
</span><br>
<span class="quotelev1">&gt; tests are passing for them. The tests are in the onesided area, but I don&#226;&#128;&#153;t
</span><br>
<span class="quotelev1">&gt; believe they necessarily are a onesided issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, the tests (e.g., test_start1.c) call MPI_Win_set_errhandler
</span><br>
<span class="quotelev1">&gt; with a NULL argument for the first parameter (MPI_win). Looking at the code
</span><br>
<span class="quotelev1">&gt; for that function, I see this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int MPI_Win_set_errhandler(MPI_Win win, MPI_Errhandler errhandler)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Errhandler tmp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     OPAL_CR_NOOP_PROGRESS();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (MPI_PARAM_CHECK) {
</span><br>
<span class="quotelev1">&gt;         OMPI_ERR_INIT_FINALIZE(FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if (ompi_win_invalid(win)) {
</span><br>
<span class="quotelev1">&gt;             return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_WIN,
</span><br>
<span class="quotelev1">&gt;                                           FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;         } else if (NULL == errhandler ||
</span><br>
<span class="quotelev1">&gt;                    MPI_ERRHANDLER_NULL == errhandler ||
</span><br>
<span class="quotelev1">&gt;                    (OMPI_ERRHANDLER_TYPE_WIN !=
</span><br>
<span class="quotelev1">&gt; errhandler-&gt;eh_mpi_object_type &amp;&amp;
</span><br>
<span class="quotelev1">&gt;                     OMPI_ERRHANDLER_TYPE_PREDEFINED !=
</span><br>
<span class="quotelev1">&gt; errhandler-&gt;eh_mpi_object_type) ) {
</span><br>
<span class="quotelev1">&gt;             return OMPI_ERRHANDLER_INVOKE(win, MPI_ERR_ARG, FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Prepare the new error handler */
</span><br>
<span class="quotelev1">&gt;     OBJ_RETAIN(errhandler);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Ditch the old errhandler, and decrement its refcount.  On 64
</span><br>
<span class="quotelev1">&gt;        bits environments we have to make sure the reading of the
</span><br>
<span class="quotelev1">&gt;        error_handler became atomic. */
</span><br>
<span class="quotelev1">&gt;     do {
</span><br>
<span class="quotelev1">&gt;         tmp = win-&gt;error_handler;
</span><br>
<span class="quotelev1">&gt;     } while (!OPAL_ATOMIC_CMPSET(&amp;(win-&gt;error_handler), tmp, errhandler));
</span><br>
<span class="quotelev1">&gt;     OBJ_RELEASE(tmp);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* All done */
</span><br>
<span class="quotelev1">&gt;     return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If someone built with &#226;&#128;&#148;with-mpi-param-check=always or runtime, then this
</span><br>
<span class="quotelev1">&gt; function will return an error when given the NULL argument. Otherwise, it
</span><br>
<span class="quotelev1">&gt; will definitely segfault. According to the configure output, this option is
</span><br>
<span class="quotelev1">&gt; supposed to default to &#226;&#128;&#156;runtime&#226;&#128;&#157;. I don&#226;&#128;&#153;t set it in my configury, so I
</span><br>
<span class="quotelev1">&gt; would have thought this was the case. And when I look at the config.log, I
</span><br>
<span class="quotelev1">&gt; see:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:10401: checking if want run-time MPI parameter checking
</span><br>
<span class="quotelev1">&gt; configure:10425: result: runtime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, what I&#226;&#128;&#153;m seeing implies that this is *not* the case - i.e., we
</span><br>
<span class="quotelev1">&gt; aren&#226;&#128;&#153;t checking MPI params, and hence I am crashing. Does anyone have any
</span><br>
<span class="quotelev1">&gt; thoughts on what could be going on? Is this test itself even correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17656.php">http://www.open-mpi.org/community/lists/devel/2015/07/17656.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17661/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17662.php">Ralph Castain: "Re: [OMPI devel] Erroneous test?"</a>
<li><strong>Previous message:</strong> <a href="17660.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1: build failures w/ PGI-12.10"</a>
<li><strong>In reply to:</strong> <a href="17656.php">Ralph Castain: "[OMPI devel] Erroneous test?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17662.php">Ralph Castain: "Re: [OMPI devel] Erroneous test?"</a>
<li><strong>Reply:</strong> <a href="17662.php">Ralph Castain: "Re: [OMPI devel] Erroneous test?"</a>
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
