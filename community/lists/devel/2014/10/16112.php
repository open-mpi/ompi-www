<?
$subject_val = "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 14:53:30 2014" -->
<!-- isoreceived="20141028185330" -->
<!-- sent="Tue, 28 Oct 2014 12:53:29 -0600" -->
<!-- isosent="20141028185329" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question" -->
<!-- id="CAF1Cqj7t+iAVs0Jr_9aUeZEvCTE=L76zKuu_NFxJ=iPpoks-aA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="03C3225E-1E5F-44CB-8035-6ACF419BED6E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 14:53:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16113.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Previous message:</strong> <a href="16111.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>In reply to:</strong> <a href="16111.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16113.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Reply:</strong> <a href="16113.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Reply:</strong> <a href="16114.php">Paul Hargrove: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p><p>2014-10-28 12:26 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 28, 2014, at 11:16 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to figure out what broke for pmi configure since now the
</span><br>
<span class="quotelev1">&gt; pmix/cray component
</span><br>
<span class="quotelev2">&gt; &gt; doesn't compile any longer in master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ouch - sorry about that. I thought the Cray component strictly used the
</span><br>
<span class="quotelev1">&gt; new Cray PMI check (which I didn&#226;&#128;&#153;t touch) - isn&#226;&#128;&#153;t that true?
</span><br>
<span class="quotelev1">&gt;
</span><br>
That is correct.  Not clear which changes are causing the problem.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was happening to look in the s1 and s2 configure.m4's and noticed a
</span><br>
<span class="quotelev1">&gt; AC_REQUIRE
</span><br>
<span class="quotelev2">&gt; &gt; for OPAL_CHECK_UGNI.  This doesn't make sense to me.  Maybe these were
</span><br>
<span class="quotelev2">&gt; &gt; accidentally copied from the configure.m4 for the cray pmi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We may no longer require those as you have separated the Cray check out,
</span><br>
<span class="quotelev1">&gt; but the original problem is that we would pickup the Slurm components on
</span><br>
<span class="quotelev1">&gt; the Cray because we would find pmi.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oh,  I forgot about that .
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16110.php">http://www.open-mpi.org/community/lists/devel/2014/10/16110.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16111.php">http://www.open-mpi.org/community/lists/devel/2014/10/16111.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16112/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16113.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Previous message:</strong> <a href="16111.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>In reply to:</strong> <a href="16111.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16113.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Reply:</strong> <a href="16113.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Reply:</strong> <a href="16114.php">Paul Hargrove: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
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
