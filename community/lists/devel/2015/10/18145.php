<?
$subject_val = "Re: [OMPI devel] opal_progress() and finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 14:39:04 2015" -->
<!-- isoreceived="20151006183904" -->
<!-- sent="Tue, 6 Oct 2015 11:38:58 -0700" -->
<!-- isosent="20151006183858" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_progress() and finalize" -->
<!-- id="6656656B-5073-4DE7-9558-52598D001711_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMQsnoZYckzn45Q4JeiECpOoTckJT03eEJYNzTbwtn+eL1iCiA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 14:38:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18146.php">Nysal Jan K A: "Re: [OMPI devel] opal_progress() and finalize"</a>
<li><strong>Previous message:</strong> <a href="18144.php">Nysal Jan K A: "[OMPI devel] opal_progress() and finalize"</a>
<li><strong>In reply to:</strong> <a href="18144.php">Nysal Jan K A: "[OMPI devel] opal_progress() and finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18146.php">Nysal Jan K A: "Re: [OMPI devel] opal_progress() and finalize"</a>
<li><strong>Reply:</strong> <a href="18146.php">Nysal Jan K A: "Re: [OMPI devel] opal_progress() and finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You hit upon a problem that Jeff and I were talking about yesterday. Both master and 2.x need to be fixed. The problem is a little more subtle as direct launch under non-PMIx systems doesn&#226;&#128;&#153;t have access to a non-blocking fence, and thus there is no way to call progress while waiting for the barrier to complete. I&#226;&#128;&#153;ve proposed a solution, but I&#226;&#128;&#153;m out for a day or two (eye surgery this morning) and won&#226;&#128;&#153;t get a chance to fix it right away.
<br>
<p><p><span class="quotelev1">&gt; On Oct 6, 2015, at 11:17 AM, Nysal Jan K A &lt;jnysal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In v1.8 there is a RTE barrier in finalize. OMPI_LAZY_WAIT_FOR_COMPLETION waits for the barrier to complete. Internally opal_progress() is invoked. In the master branch we call PMIX fence instead. PMIX_WAIT_FOR_COMPLETION seems to only call usleep. How will ompi progress outstanding operations ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; --Nysal
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18144.php">http://www.open-mpi.org/community/lists/devel/2015/10/18144.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18146.php">Nysal Jan K A: "Re: [OMPI devel] opal_progress() and finalize"</a>
<li><strong>Previous message:</strong> <a href="18144.php">Nysal Jan K A: "[OMPI devel] opal_progress() and finalize"</a>
<li><strong>In reply to:</strong> <a href="18144.php">Nysal Jan K A: "[OMPI devel] opal_progress() and finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18146.php">Nysal Jan K A: "Re: [OMPI devel] opal_progress() and finalize"</a>
<li><strong>Reply:</strong> <a href="18146.php">Nysal Jan K A: "Re: [OMPI devel] opal_progress() and finalize"</a>
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
