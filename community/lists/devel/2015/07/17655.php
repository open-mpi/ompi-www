<?
$subject_val = "Re: [OMPI devel] race condition in finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 17 10:04:14 2015" -->
<!-- isoreceived="20150717140414" -->
<!-- sent="Fri, 17 Jul 2015 07:04:10 -0700" -->
<!-- isosent="20150717140410" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in finalize" -->
<!-- id="B4C85838-13E4-4F9A-B292-53BA2F2A1A46_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5vTZNEjfGw=WSPq5cFd8OW7O8YbEDoyBkVEQLAK+AY98g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] race condition in finalize<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-17 10:04:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17656.php">Ralph Castain: "[OMPI devel] Erroneous test?"</a>
<li><strong>Previous message:</strong> <a href="17654.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1 available for testing"</a>
<li><strong>In reply to:</strong> <a href="17652.php">Gilles Gouaillardet: "[OMPI devel] race condition in finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17668.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Reply:</strong> <a href="17668.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It&#226;&#128;&#153;s probably a race condition caused by uniting the ORTE and OPAL async threads, though I can&#226;&#128;&#153;t confirm that yet.
<br>
<p><span class="quotelev1">&gt; On Jul 17, 2015, at 3:11 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noticed several errors such as <a href="http://mtt.open-mpi.org/index.php?do_redir=2244">http://mtt.open-mpi.org/index.php?do_redir=2244</a> &lt;<a href="http://mtt.open-mpi.org/index.php?do_redir=2244">http://mtt.open-mpi.org/index.php?do_redir=2244</a>&gt;
</span><br>
<span class="quotelev1">&gt; that did not make any sense to me (at first glance)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was able to attach one process when the issue occurs.
</span><br>
<span class="quotelev1">&gt; the sigsegv occurs in thread 2, while thread 1 is invoking ompi_rte_finalize.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All I can think is a scenario in which the progress thread (aka thread 2) is still dealing with some memory that was just freed/unmapped/corrupted by the main thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I empirically noticed the error is more likely to occur when there are many tasks on one node
</span><br>
<span class="quotelev1">&gt; e.g. mpirun --oversubscribe -np 32 a.out
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17652.php">http://www.open-mpi.org/community/lists/devel/2015/07/17652.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17655/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17656.php">Ralph Castain: "[OMPI devel] Erroneous test?"</a>
<li><strong>Previous message:</strong> <a href="17654.php">Ralph Castain: "Re: [OMPI devel] v1.10.0rc1 available for testing"</a>
<li><strong>In reply to:</strong> <a href="17652.php">Gilles Gouaillardet: "[OMPI devel] race condition in finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17668.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Reply:</strong> <a href="17668.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in finalize"</a>
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
