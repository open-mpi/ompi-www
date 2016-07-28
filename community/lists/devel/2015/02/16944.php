<?
$subject_val = "Re: [OMPI devel] omni-release Github comment bot";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 14:58:52 2015" -->
<!-- isoreceived="20150205195852" -->
<!-- sent="Thu, 5 Feb 2015 21:58:49 +0200" -->
<!-- isosent="20150205195849" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] omni-release Github comment bot" -->
<!-- id="CAAO1KyYD84ka=Y-kmu76nO9bu6+j1-k_S_Ags4KGFhfy+jN3Pw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5DF66BCF-85E3-49D6-B90E-C272CA2B2F3F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] omni-release Github comment bot<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-05 14:58:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16945.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Previous message:</strong> <a href="16943.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>In reply to:</strong> <a href="16943.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] omni-release Github comment bot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16945.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Reply:</strong> <a href="16945.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] omni-release Github comment bot"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
rebase before merge is a good practice/gate used by other code review tools
<br>
(like gerrit).
<br>
<p>it helps to keep git history linear (less merge commits) and takes the most
<br>
recent patch set from PR and have it rebased onto the tip of the
<br>
destination branch. If rebase succeeds (no conflicts) - jenkins will
<br>
smoke-test it and RM will feel more confident that rebased PR is up to date
<br>
with smoke testing and operational/compilable state.
<br>
<p>smoketest/jenkins is not competing with mtt or other forms of testing
<br>
anyway, just brutal indication of project health. :)
<br>
<p><p><p><p>On Thu, Feb 5, 2015 at 9:17 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Thinking about this a little bit, there's a wrinkle: you (the individual
</span><br>
<span class="quotelev1">&gt; developer) will need to give push permissions on your ompi / ompi-release
</span><br>
<span class="quotelev1">&gt; fork to the OMPIBot Github account.  Otherwise, it won't be able to push
</span><br>
<span class="quotelev1">&gt; back to your fork.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thinking about this even more, I'm a little worried about implementing
</span><br>
<span class="quotelev1">&gt; this feature.  It seems to give a lot of credence to the smoke test --
</span><br>
<span class="quotelev1">&gt; i.e., if hello world/ring work, then my patch must work.  I'm not sure
</span><br>
<span class="quotelev1">&gt; that's &quot;enough&quot; to give me confidence that a patch rebased properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 5, 2015, at 2:08 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mike:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This sounds good, but let us get the label/milestone/assign thing going
</span><br>
<span class="quotelev1">&gt; first.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm thinking that the functionality you describe may become a different
</span><br>
<span class="quotelev1">&gt; bot...?  I'm not sure.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Feb 5, 2015, at 9:56 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; yep, exactly.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Thu, Feb 5, 2015 at 2:35 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Feb 5, 2015, at 7:20 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; sounds cool and useful.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; K, thanks.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Also, does it make sense to have &quot;rebase&quot; knob to cause &quot;try rebase if
</span><br>
<span class="quotelev1">&gt; no conflicts&quot; with upstream?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Just to be sure what you mean: something like &quot;rebase:&quot; that will cause
</span><br>
<span class="quotelev1">&gt; the patch set to be rebased to head of master (if there are no conflicts)?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think you're asking because:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - it doesn't make the RM/GK's job easier because github would have
</span><br>
<span class="quotelev1">&gt; already detected this and still kept the &quot;merge&quot; button green on the PR
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - but it would (assumedly) trigger a new Jenkins smoke test, which is
</span><br>
<span class="quotelev1">&gt; the desirable thing here (i.e., it may merge, but it may or may not *work)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is that what you're thinking?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16929.php">http://www.open-mpi.org/community/lists/devel/2015/02/16929.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Kind Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16934.php">http://www.open-mpi.org/community/lists/devel/2015/02/16934.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16941.php">http://www.open-mpi.org/community/lists/devel/2015/02/16941.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16943.php">http://www.open-mpi.org/community/lists/devel/2015/02/16943.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16944/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16945.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Previous message:</strong> <a href="16943.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>In reply to:</strong> <a href="16943.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] omni-release Github comment bot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16945.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Reply:</strong> <a href="16945.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] omni-release Github comment bot"</a>
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
