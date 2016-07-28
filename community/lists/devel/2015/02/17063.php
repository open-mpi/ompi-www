<?
$subject_val = "Re: [OMPI devel] opal_verbs_want_fork_support question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 17:15:37 2015" -->
<!-- isoreceived="20150226221537" -->
<!-- sent="Thu, 26 Feb 2015 17:15:35 -0500" -->
<!-- isosent="20150226221535" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_verbs_want_fork_support question" -->
<!-- id="CAMJJpkWwnJjqJsa7Gb_ucWnXU0ma4FJLtKK5rPXbcxuHZwNW9g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5F2C936E-7D74-468C-9162-F58D710FAE45_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_verbs_want_fork_support question<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 17:15:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17064.php">Paul Hargrove: "[OMPI devel] printf format warnings on master"</a>
<li><strong>Previous message:</strong> <a href="17062.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
<li><strong>In reply to:</strong> <a href="17062.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17066.php">George Bosilca: "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
<li><strong>Reply:</strong> <a href="17066.php">George Bosilca: "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A better fix is underway. One that will be checked on a verbs-enabled
<br>
environment.
<br>
<p>&nbsp;&nbsp;George
<br>
<p><p>On Thu, Feb 26, 2015 at 5:08 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Howard --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like <a href="https://github.com/open-mpi/ompi/pull/415">https://github.com/open-mpi/ompi/pull/415</a> was merged before
</span><br>
<span class="quotelev1">&gt; it was ready.  George then did some commits to try and fix things, but I
</span><br>
<span class="quotelev1">&gt; still don't think they were right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I put some comments on #415 after it was merged; I don't know if they got
</span><br>
<span class="quotelev1">&gt; mailed out or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 26, 2015, at 4:52 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just tried to build a fresh head of master and am getting
</span><br>
<span class="quotelev1">&gt; opal_verbs_want_fork_support as undefined symbol when trying to build opal
</span><br>
<span class="quotelev1">&gt; lib.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas on where this should go?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It would be nice to get jenkins checking everything, or at least a light
</span><br>
<span class="quotelev1">&gt; weight travis check.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17060.php">http://www.open-mpi.org/community/lists/devel/2015/02/17060.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17062.php">http://www.open-mpi.org/community/lists/devel/2015/02/17062.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17063/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17064.php">Paul Hargrove: "[OMPI devel] printf format warnings on master"</a>
<li><strong>Previous message:</strong> <a href="17062.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
<li><strong>In reply to:</strong> <a href="17062.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17066.php">George Bosilca: "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
<li><strong>Reply:</strong> <a href="17066.php">George Bosilca: "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
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
