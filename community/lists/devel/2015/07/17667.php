<?
$subject_val = "Re: [OMPI devel] Erroneous test?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 20 22:21:23 2015" -->
<!-- isoreceived="20150721022123" -->
<!-- sent="Mon, 20 Jul 2015 19:21:18 -0700" -->
<!-- isosent="20150721022118" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Erroneous test?" -->
<!-- id="9C2818A0-1B60-4151-934C-FF7CED1272E5_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55ADA95A.9070206_at_rist.or.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-20 22:21:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17668.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Previous message:</strong> <a href="17666.php">Gilles Gouaillardet: "Re: [OMPI devel] Erroneous test?"</a>
<li><strong>In reply to:</strong> <a href="17666.php">Gilles Gouaillardet: "Re: [OMPI devel] Erroneous test?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was wondering if that was the case - my guess is that it derives from MPICH, and someone blindly copied over the tests without checking.
<br>
<p>Thanks!
<br>
<p><span class="quotelev1">&gt; On Jul 20, 2015, at 7:07 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it seems (google) that MPI_CHECK_ARGS is specific to (at least) cray and sgi mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for openmpi, we need to set
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mpi_param_check=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i updated the onesided test suite and pushed it to the ompi-tests repo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/18/2015 11:57 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ah, I found the root cause of the problem. It appears that whomever wrote the test thought that setting MPI_CHECK_ARGS=1 in the environment would force the param check to be done. However, a quick scan shows that this envar is *never* looked at by OMPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So the question is: did the test writer make a mistake? Or are we supposed to be looking at that envar?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 18, 2015, at 1:59 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yeah, I finally traced it to an MCA param setting in my default param file. I swear, as much as I like our MCA param system, there are times like this when it leaves something to be desired.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sigh. Sorry for the &#147;false&#148; alarm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 17, 2015, at 8:54 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; based on the source code (ompi_mpi_params.c:91) I was expecting a Boolean ompi_mpi_param_check
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Saturday, July 18, 2015, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yep, I checked:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 17, 2015, at 8:00 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I will try to reproduce this.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I guess you already checked the output of ompi_info to confirm params are checked at runtime.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Saturday, July 18, 2015, Ralph Castain &lt;rhc_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I keep getting segfault errors when testing 1.10, while others say the tests are passing for them. The tests are in the onesided area, but I don&#146;t believe they necessarily are a onesided issue.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Specifically, the tests (e.g., test_start1.c) call MPI_Win_set_errhandler with a NULL argument for the first parameter (MPI_win). Looking at the code for that function, I see this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int MPI_Win_set_errhandler(MPI_Win win, MPI_Errhandler errhandler)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     MPI_Errhandler tmp;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     OPAL_CR_NOOP_PROGRESS();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     if (MPI_PARAM_CHECK) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         OMPI_ERR_INIT_FINALIZE(FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         if (ompi_win_invalid(win)) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_WIN,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                           FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         } else if (NULL == errhandler ||
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    MPI_ERRHANDLER_NULL == errhandler ||
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                    (OMPI_ERRHANDLER_TYPE_WIN != errhandler-&gt;eh_mpi_object_type &amp;&amp;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     OMPI_ERRHANDLER_TYPE_PREDEFINED != errhandler-&gt;eh_mpi_object_type) ) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             return OMPI_ERRHANDLER_INVOKE(win, MPI_ERR_ARG, FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     /* Prepare the new error handler */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     OBJ_RETAIN(errhandler);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     /* Ditch the old errhandler, and decrement its refcount.  On 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        bits environments we have to make sure the reading of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        error_handler became atomic. */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     do {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         tmp = win-&gt;error_handler;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     } while (!OPAL_ATOMIC_CMPSET(&amp;(win-&gt;error_handler), tmp, errhandler));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     OBJ_RELEASE(tmp);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     /* All done */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If someone built with &#151;with-mpi-param-check=always or runtime, then this function will return an error when given the NULL argument. Otherwise, it will definitely segfault. According to the configure output, this option is supposed to default to &#147;runtime&#148;. I don&#146;t set it in my configury, so I would have thought this was the case. And when I look at the config.log, I see:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configure:10401: checking if want run-time MPI parameter checking
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configure:10425: result: runtime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, what I&#146;m seeing implies that this is *not* the case - i.e., we aren&#146;t checking MPI params, and hence I am crashing. Does anyone have any thoughts on what could be going on? Is this test itself even correct?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17656.php">http://www.open-mpi.org/community/lists/devel/2015/07/17656.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17656.php">http://www.open-mpi.org/community/lists/devel/2015/07/17656.php</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17661.php">http://www.open-mpi.org/community/lists/devel/2015/07/17661.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17661.php">http://www.open-mpi.org/community/lists/devel/2015/07/17661.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17663.php">http://www.open-mpi.org/community/lists/devel/2015/07/17663.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17663.php">http://www.open-mpi.org/community/lists/devel/2015/07/17663.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17665.php">http://www.open-mpi.org/community/lists/devel/2015/07/17665.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17665.php">http://www.open-mpi.org/community/lists/devel/2015/07/17665.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17666.php">http://www.open-mpi.org/community/lists/devel/2015/07/17666.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17667/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17668.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Previous message:</strong> <a href="17666.php">Gilles Gouaillardet: "Re: [OMPI devel] Erroneous test?"</a>
<li><strong>In reply to:</strong> <a href="17666.php">Gilles Gouaillardet: "Re: [OMPI devel] Erroneous test?"</a>
<!-- nextthread="start" -->
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
