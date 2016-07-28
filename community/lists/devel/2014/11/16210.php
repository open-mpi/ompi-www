<?
$subject_val = "Re: [OMPI devel] thread-tests hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 12:04:04 2014" -->
<!-- isoreceived="20141105170404" -->
<!-- sent="Wed, 5 Nov 2014 12:03:59 -0500" -->
<!-- isosent="20141105170359" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread-tests hang" -->
<!-- id="CAG4F6z9FLPEqRPpg7J4uVgpcY-eDCubt2Ez_TSezR-AXr2F1vA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CCB61582-B240-4F73-94B2-55DE973A5F4B_at_cisco.com" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 12:03:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16211.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16209.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16208.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16211.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16211.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16212.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this is a pretty significant change in behavior for a minor
<br>
release, Jeff. According to the interested parties:
<br>
<p>&quot;I'm reporting a performance (message rate 16%, latency 3%) regression when
<br>
using PSM that occurred between OMPI v1.6.5 and v1.8.1.  I would guess it
<br>
affects other networks too, but I haven't tested.  The problem stems from
<br>
the --enable-smp-locks and --enable-opal-multi-threads options.&quot;
<br>
<p>So, this has been in effect the entire 1.8 series and now you want to
<br>
significantly alter the behavior. I'm of the opinion that we should live
<br>
with the mistake in the 1.8.x series and provide users with clear guidance
<br>
on the default behavior and advice for disabling the threading support that
<br>
is consistent across this series. 1.9.x is a clean slate.
<br>
<p><p>My $0.02
<br>
<p>Josh
<br>
<p><p>On Wed, Nov 5, 2014 at 11:51 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Nov 5, 2014, at 11:43 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; sorry,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;&quot;now we use only this &quot;--enable-mpi-thread-multiple&quot; and it worked.&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I meant it worked fine before the &quot;configure logic&quot; changes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It went back to the way it was in in the v1.6 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue is that --enable-mpi-thread-multiple carries a performance
</span><br>
<span class="quotelev1">&gt; penalty on the v1.8 branch.  On master, we need to sort these kinds of
</span><br>
<span class="quotelev1">&gt; issues out so that there is no/minimal performance penalty.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16208.php">http://www.open-mpi.org/community/lists/devel/2014/11/16208.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16210/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16211.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16209.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16208.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16211.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16211.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16212.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
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
