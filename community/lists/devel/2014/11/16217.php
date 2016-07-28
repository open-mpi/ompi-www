<?
$subject_val = "Re: [OMPI devel] thread-tests hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 14:04:42 2014" -->
<!-- isoreceived="20141105190442" -->
<!-- sent="Wed, 5 Nov 2014 11:04:39 -0800" -->
<!-- isosent="20141105190439" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread-tests hang" -->
<!-- id="CAAvDA16vuZXNex9B0LBHEbeSzyPwuNazaSiAt=_Q7vZU5pny4A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="273558A5-61EA-4180-B882-D36E518C7C77_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] thread-tests hang<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 14:04:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16218.php">Howard Pritchard: "Re: [OMPI devel] Open MPI Developers F2F Q1 2015 (poll closes on Friday, 7th of November)"</a>
<li><strong>Previous message:</strong> <a href="16216.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI Developers F2F Q1 2015 (poll closes on Friday, 7th of November)"</a>
<li><strong>In reply to:</strong> <a href="16212.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff wrote:
<br>
MPI_THREAD_MULTIPLE support barely works in v1.8.  Why have it on by
<br>
default, especially when there's a performance penalty?
<br>
<p>I think the &quot;barely works&quot; state of threading support is a stronger
<br>
argument for return to the 1.6.x behavior than PSM performance.  Who knows
<br>
what subtle bugs have become &quot;enabled by default&quot;?
<br>
<p>-Paul [Sent from my phone]
<br>
On Nov 5, 2014 9:58 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 5, 2014, at 12:03 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think this is a pretty significant change in behavior for a minor
</span><br>
<span class="quotelev1">&gt; release, Jeff. According to the interested parties:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;I'm reporting a performance (message rate 16%, latency 3%) regression
</span><br>
<span class="quotelev1">&gt; when using PSM that occurred between OMPI v1.6.5 and v1.8.1.  I would guess
</span><br>
<span class="quotelev1">&gt; it affects other networks too, but I haven't tested.  The problem stems
</span><br>
<span class="quotelev1">&gt; from the --enable-smp-locks and --enable-opal-multi-threads options.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right, and we just fixed that problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be clear: the above report is from *before* we fixed the problem, not
</span><br>
<span class="quotelev1">&gt; from *after* we fixed it.  After we fixed it, Intel confirmed that PSM
</span><br>
<span class="quotelev1">&gt; performance went back up to v1.6 levels.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was never in the plan to bring over the
</span><br>
<span class="quotelev1">&gt; enable-THREAD_MULTIPLE-beavhior-by-default functionality to the v1.8
</span><br>
<span class="quotelev1">&gt; branch.  It was a mistake that it got brought over.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, this has been in effect the entire 1.8 series and now you want to
</span><br>
<span class="quotelev1">&gt; significantly alter the behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Put differently: I want to fix the performance bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm of the opinion that we should live with the mistake in the 1.8.x
</span><br>
<span class="quotelev1">&gt; series and provide users with clear guidance on the default behavior and
</span><br>
<span class="quotelev1">&gt; advice for disabling the threading support that is consistent across this
</span><br>
<span class="quotelev1">&gt; series. 1.9.x is a clean slate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I disagree.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE support barely works in v1.8.  Why have it on by
</span><br>
<span class="quotelev1">&gt; default, especially when there's a performance penalty?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16212.php">http://www.open-mpi.org/community/lists/devel/2014/11/16212.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16217/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16218.php">Howard Pritchard: "Re: [OMPI devel] Open MPI Developers F2F Q1 2015 (poll closes on Friday, 7th of November)"</a>
<li><strong>Previous message:</strong> <a href="16216.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI Developers F2F Q1 2015 (poll closes on Friday, 7th of November)"</a>
<li><strong>In reply to:</strong> <a href="16212.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
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
