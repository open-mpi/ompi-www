<?
$subject_val = "Re: [OMPI devel] Remaining MTT errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 12 01:00:17 2015" -->
<!-- isoreceived="20150912050017" -->
<!-- sent="Sat, 12 Sep 2015 14:00:16 +0900" -->
<!-- isosent="20150912050016" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Remaining MTT errors" -->
<!-- id="CAAkFZ5s75ZoWDkM6POZ9O9xwuAXYt_fnzL93zsFyG_fc_Fn5xg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="57E76D97-6CD4-4318-BB52-0F67782EE705_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Remaining MTT errors<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-12 01:00:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18016.php">Ralph Castain: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Previous message:</strong> <a href="18014.php">Ralph Castain: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>In reply to:</strong> <a href="18013.php">Ralph Castain: "[OMPI devel] Remaining MTT errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18016.php">Ralph Castain: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Reply:</strong> <a href="18016.php">Ralph Castain: "Re: [OMPI devel] Remaining MTT errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>at first glance, these errors look unrelated to PMIx.
<br>
I noticed a bunch of bind() failure.
<br>
based on your command line, I guess you are not running your job via a
<br>
batch manager,
<br>
and I would guess not all unix sockets are always cleaned up.
<br>
(or this is an old bug and you did not manually clean your nodes when it
<br>
was fixed)
<br>
<p>the neighbor_allgather_self failure is discussed at
<br>
<a href="https://github.com/open-mpi/ompi/pull/790">https://github.com/open-mpi/ompi/pull/790</a>
<br>
<p>I will have a look at the op related failure on Monday
<br>
(looks like a MPI conformance issue unrelated to PMIx)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, September 12, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ve closed all the holes I can find in the PMIx integration, and things
</span><br>
<span class="quotelev1">&gt; look pretty good overall. There are a handful of failures still being seen
</span><br>
<span class="quotelev1">&gt; - most of them involving what appear to be unrelated code. I&#226;&#128;&#153;m not entirely
</span><br>
<span class="quotelev1">&gt; sure I understand the source of the errors, and could really use some help
</span><br>
<span class="quotelev1">&gt; to determine (a) if these are in any way related to PMIx, and if so (b) how.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The errors from my MTT run are here:
</span><br>
<span class="quotelev1">&gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2256">http://mtt.open-mpi.org/index.php?do_redir=2256</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help diagnosing these problems would be greatly appreciated
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18015/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18016.php">Ralph Castain: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Previous message:</strong> <a href="18014.php">Ralph Castain: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>In reply to:</strong> <a href="18013.php">Ralph Castain: "[OMPI devel] Remaining MTT errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18016.php">Ralph Castain: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Reply:</strong> <a href="18016.php">Ralph Castain: "Re: [OMPI devel] Remaining MTT errors"</a>
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
