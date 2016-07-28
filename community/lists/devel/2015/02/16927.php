<?
$subject_val = "Re: [OMPI devel] omni-release Github comment bot";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 07:04:34 2015" -->
<!-- isoreceived="20150205120434" -->
<!-- sent="Thu, 5 Feb 2015 12:04:25 +0000" -->
<!-- isosent="20150205120425" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] omni-release Github comment bot" -->
<!-- id="B6FE3D5F-9FE5-4CBC-A12C-01252610DB92_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj6e=NHko42zg1vi6Z+AKGp8b_JnNaR-L7A4hU8PigUfQw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-05 07:04:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16928.php">Mike Dubman: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Previous message:</strong> <a href="16926.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>In reply to:</strong> <a href="16925.php">Howard Pritchard: "Re: [OMPI devel] omni-release Github comment bot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16928.php">Mike Dubman: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Reply:</strong> <a href="16928.php">Mike Dubman: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Reply:</strong> <a href="16935.php">Howard Pritchard: "Re: [OMPI devel] omni-release Github comment bot"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles came up with a cool idea for the OMPIBot (see below).  We can do this idea, but I want to make sure that everyone is ok with it first.
<br>
<p>Consider this scenario:
<br>
<p>1. You create a PR
<br>
2. Over time, it gets reviewed, and then RM approved (i.e., the &quot;reviewed&quot; and &quot;rm-approved&quot; labels are added).
<br>
3. *** But then new commits are pushed to the PR.
<br>
<p>--&gt; Technically, it should really be reviewed again before it is merged.  Here's what Gilles came up with:
<br>
<p>4. The OMPIBot can tell when new commits are pushed, and can:
<br>
&nbsp;&nbsp;&nbsp;4a) remove the &quot;reviewed&quot; label, and
<br>
&nbsp;&nbsp;&nbsp;4b) add the &quot;pushed-back&quot; label
<br>
5. Further, whenever someone adds the &quot;reviewed&quot; label, OMPIBot can automatically remove the &quot;pushed-back&quot; label.
<br>
<p>I.e., when you add commits to an already-reviewed PR, you lose &quot;reviewed&quot;, but you get a positive signal in the form of the &quot;pushed-back&quot; label, reminding you that you need to get it reviewed again.  And when someone reviews it, it automatically removes the &quot;pushed-back&quot; label.
<br>
<p>Finally, here's a question to the RM: if someone pushes new commits to a PR after it has been rm-approved, do you want the rm-approved label removed?  My gut feeling is &quot;no&quot; -- it stays approved.
<br>
<p>Thoughts?
<br>
<p><p><p>On Feb 4, 2015, at 2:26 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt; great stuff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-02-04 5:55 GMT-07:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; OMPI devs --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per lots of previous discussions, you all know that you can't assign labels, milestones, or users to issues/pull requests on the ompi-release repo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles has written a Github bot that will allow you to do these things by inserting special tokens in the text of issues/pull requests/comments.  Here's an example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    This PR fixes problem XYZ.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    label:bug
</span><br>
<span class="quotelev1">&gt;    label:enhancement
</span><br>
<span class="quotelev1">&gt;    milestone:v1.8.5
</span><br>
<span class="quotelev1">&gt;    assign:@jsquyres
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** PLEASE GO TRY IT on the sandbox ompi-release-bot repo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's a fuller explanation of what OMPIBot does, and links to where you can try it out:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi-release-bot/wiki">https://github.com/open-mpi/ompi-release-bot/wiki</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once we get enough people to try it/fix any bugs/etc., we'll deploy it on the ompi-release repo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16924.php">http://www.open-mpi.org/community/lists/devel/2015/02/16924.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16925.php">http://www.open-mpi.org/community/lists/devel/2015/02/16925.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16928.php">Mike Dubman: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Previous message:</strong> <a href="16926.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>In reply to:</strong> <a href="16925.php">Howard Pritchard: "Re: [OMPI devel] omni-release Github comment bot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16928.php">Mike Dubman: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Reply:</strong> <a href="16928.php">Mike Dubman: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Reply:</strong> <a href="16935.php">Howard Pritchard: "Re: [OMPI devel] omni-release Github comment bot"</a>
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
