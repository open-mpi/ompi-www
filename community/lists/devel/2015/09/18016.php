<?
$subject_val = "Re: [OMPI devel] Remaining MTT errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 12 01:29:34 2015" -->
<!-- isoreceived="20150912052934" -->
<!-- sent="Fri, 11 Sep 2015 22:29:30 -0700" -->
<!-- isosent="20150912052930" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Remaining MTT errors" -->
<!-- id="9DD21777-BC90-4CB4-9F61-BE6BDE74281F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5s75ZoWDkM6POZ9O9xwuAXYt_fnzL93zsFyG_fc_Fn5xg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-12 01:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Previous message:</strong> <a href="18015.php">Gilles Gouaillardet: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>In reply to:</strong> <a href="18015.php">Gilles Gouaillardet: "Re: [OMPI devel] Remaining MTT errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18018.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Remaining MTT errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Sep 11, 2015, at 10:00 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; at first glance, these errors look unrelated to PMIx.
</span><br>
<span class="quotelev1">&gt; I noticed a bunch of bind() failure.
</span><br>
<span class="quotelev1">&gt; based on your command line, I guess you are not running your job via a batch manager,
</span><br>
<span class="quotelev1">&gt; and I would guess not all unix sockets are always cleaned up.
</span><br>
<p>Yeah, the no-disconnect test was causing mpirun to segfault, which meant that the sockets weren&#226;&#128;&#153;t cleaned up. So eventually I&#226;&#128;&#153;d hit a case where they collided. Simply blowing away the session directory tree resolves the problem.
<br>
<p><span class="quotelev1">&gt; (or this is an old bug and you did not manually clean your nodes when it was fixed)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the neighbor_allgather_self failure is discussed at <a href="https://github.com/open-mpi/ompi/pull/790">https://github.com/open-mpi/ompi/pull/790</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/790">https://github.com/open-mpi/ompi/pull/790</a>&gt;
</span><br>
Ah, indeed - thanks!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will have a look at the op related failure on Monday
</span><br>
<span class="quotelev1">&gt; (looks like a MPI conformance issue unrelated to PMIx)
</span><br>
<p>Again, thanks!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Saturday, September 12, 2015, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ve closed all the holes I can find in the PMIx integration, and things look pretty good overall. There are a handful of failures still being seen - most of them involving what appear to be unrelated code. I&#226;&#128;&#153;m not entirely sure I understand the source of the errors, and could really use some help to determine (a) if these are in any way related to PMIx, and if so (b) how.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The errors from my MTT run are here:  <a href="http://mtt.open-mpi.org/index.php?do_redir=2256">http://mtt.open-mpi.org/index.php?do_redir=2256</a> &lt;<a href="http://mtt.open-mpi.org/index.php?do_redir=2256">http://mtt.open-mpi.org/index.php?do_redir=2256</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help diagnosing these problems would be greatly appreciated
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18015.php">http://www.open-mpi.org/community/lists/devel/2015/09/18015.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18016/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Previous message:</strong> <a href="18015.php">Gilles Gouaillardet: "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>In reply to:</strong> <a href="18015.php">Gilles Gouaillardet: "Re: [OMPI devel] Remaining MTT errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18018.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Remaining MTT errors"</a>
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
