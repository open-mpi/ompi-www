<?
$subject_val = "Re: [OMPI devel] opal_verbs_want_fork_support question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 19:02:11 2015" -->
<!-- isoreceived="20150227000211" -->
<!-- sent="Thu, 26 Feb 2015 19:02:10 -0500" -->
<!-- isosent="20150227000210" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_verbs_want_fork_support question" -->
<!-- id="CAMJJpkW7YgsSh+n8vPsnXKBETO1kQT5Y4k+ZZ7jY_NBNT2xGMQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWwnJjqJsa7Gb_ucWnXU0ma4FJLtKK5rPXbcxuHZwNW9g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-26 19:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17067.php">Paul Hargrove: "[OMPI devel] mtl:psm configury build broken in master"</a>
<li><strong>Previous message:</strong> <a href="17065.php">Rolf vandeVaart: "[OMPI devel] BML changes"</a>
<li><strong>In reply to:</strong> <a href="17063.php">George Bosilca: "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the mess, it took me few commits and few cleanups to have it back
<br>
in a workable state (and without other pending work from my own branches).
<br>
<p>I also changed the naming of few MCA parameters to reflect upon their
<br>
location (OPAL and common and verbs). However, I create the corresponding
<br>
synonyms (and marked them as deprecated).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, Feb 26, 2015 at 5:15 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; A better fix is underway. One that will be checked on a verbs-enabled
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 26, 2015 at 5:08 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like <a href="https://github.com/open-mpi/ompi/pull/415">https://github.com/open-mpi/ompi/pull/415</a> was merged
</span><br>
<span class="quotelev2">&gt;&gt; before it was ready.  George then did some commits to try and fix things,
</span><br>
<span class="quotelev2">&gt;&gt; but I still don't think they were right.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I put some comments on #415 after it was merged; I don't know if they got
</span><br>
<span class="quotelev2">&gt;&gt; mailed out or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Feb 26, 2015, at 4:52 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Folks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Just tried to build a fresh head of master and am getting
</span><br>
<span class="quotelev2">&gt;&gt; opal_verbs_want_fork_support as undefined symbol when trying to build opal
</span><br>
<span class="quotelev2">&gt;&gt; lib.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Any ideas on where this should go?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It would be nice to get jenkins checking everything, or at least a
</span><br>
<span class="quotelev2">&gt;&gt; light weight travis check.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Howard
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17060.php">http://www.open-mpi.org/community/lists/devel/2015/02/17060.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17062.php">http://www.open-mpi.org/community/lists/devel/2015/02/17062.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17066/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17067.php">Paul Hargrove: "[OMPI devel] mtl:psm configury build broken in master"</a>
<li><strong>Previous message:</strong> <a href="17065.php">Rolf vandeVaart: "[OMPI devel] BML changes"</a>
<li><strong>In reply to:</strong> <a href="17063.php">George Bosilca: "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
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
