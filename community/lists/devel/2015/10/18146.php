<?
$subject_val = "Re: [OMPI devel] opal_progress() and finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 14:49:06 2015" -->
<!-- isoreceived="20151006184906" -->
<!-- sent="Wed, 7 Oct 2015 00:19:01 +0530" -->
<!-- isosent="20151006184901" -->
<!-- name="Nysal Jan K A" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_progress() and finalize" -->
<!-- id="CAMQsnoYLquPjvqC++6r6nd358ShMiziMxCbk7Ok2dGPJ=_ukjg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6656656B-5073-4DE7-9558-52598D001711_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_progress() and finalize<br>
<strong>From:</strong> Nysal Jan K A (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 14:49:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18147.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Previous message:</strong> <a href="18145.php">Ralph Castain: "Re: [OMPI devel] opal_progress() and finalize"</a>
<li><strong>In reply to:</strong> <a href="18145.php">Ralph Castain: "Re: [OMPI devel] opal_progress() and finalize"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply Ralph. Best wishes for your surgery and recuperation.
<br>
<p>Regards
<br>
--Nysal
<br>
<p>On Wed, Oct 7, 2015 at 12:08 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You hit upon a problem that Jeff and I were talking about yesterday. Both
</span><br>
<span class="quotelev1">&gt; master and 2.x need to be fixed. The problem is a little more subtle as
</span><br>
<span class="quotelev1">&gt; direct launch under non-PMIx systems doesn&#226;&#128;&#153;t have access to a non-blocking
</span><br>
<span class="quotelev1">&gt; fence, and thus there is no way to call progress while waiting for the
</span><br>
<span class="quotelev1">&gt; barrier to complete. I&#226;&#128;&#153;ve proposed a solution, but I&#226;&#128;&#153;m out for a day or two
</span><br>
<span class="quotelev1">&gt; (eye surgery this morning) and won&#226;&#128;&#153;t get a chance to fix it right away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 6, 2015, at 11:17 AM, Nysal Jan K A &lt;jnysal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In v1.8 there is a RTE barrier in finalize.
</span><br>
<span class="quotelev1">&gt; OMPI_LAZY_WAIT_FOR_COMPLETION waits for the barrier to complete. Internally
</span><br>
<span class="quotelev1">&gt; opal_progress() is invoked. In the master branch we call PMIX fence
</span><br>
<span class="quotelev1">&gt; instead. PMIX_WAIT_FOR_COMPLETION seems to only call usleep. How will ompi
</span><br>
<span class="quotelev1">&gt; progress outstanding operations ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev2">&gt; &gt; --Nysal
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18144.php">http://www.open-mpi.org/community/lists/devel/2015/10/18144.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18145.php">http://www.open-mpi.org/community/lists/devel/2015/10/18145.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18146/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18147.php">Gilles Gouaillardet: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<li><strong>Previous message:</strong> <a href="18145.php">Ralph Castain: "Re: [OMPI devel] opal_progress() and finalize"</a>
<li><strong>In reply to:</strong> <a href="18145.php">Ralph Castain: "Re: [OMPI devel] opal_progress() and finalize"</a>
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
