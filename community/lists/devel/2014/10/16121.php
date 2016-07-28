<?
$subject_val = "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 16:17:36 2014" -->
<!-- isoreceived="20141028201736" -->
<!-- sent="Tue, 28 Oct 2014 14:17:35 -0600" -->
<!-- isosent="20141028201735" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question" -->
<!-- id="CAF1Cqj63wNZDLVWjVchS85uVnvSdxwq2VV-AjMj3ph3EjyE--g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2B6B2BE5-7C1C-4298-BFEB-B257F39B1B76_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-10-28 16:17:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16122.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Previous message:</strong> <a href="16120.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>In reply to:</strong> <a href="16113.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16114.php">Paul Hargrove: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Ralph,
<br>
<p>I think I found the problem.  Thanks.
<br>
<p>Howard
<br>
<p><p>2014-10-28 12:58 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2014, at 11:53 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-10-28 12:26 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Oct 28, 2014, at 11:16 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Folks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm trying to figure out what broke for pmi configure since now the
</span><br>
<span class="quotelev2">&gt;&gt; pmix/cray component
</span><br>
<span class="quotelev3">&gt;&gt; &gt; doesn't compile any longer in master.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ouch - sorry about that. I thought the Cray component strictly used the
</span><br>
<span class="quotelev2">&gt;&gt; new Cray PMI check (which I didn&#226;&#128;&#153;t touch) - isn&#226;&#128;&#153;t that true?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; That is correct.  Not clear which changes are causing the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah crud - you do indeed use the PMI code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             OPAL_CHECK_PMI([CRAY_PMI], [opal_check_cray_pmi_happy=&quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m afraid I did break you :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Want me to investigate the fix?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I was happening to look in the s1 and s2 configure.m4's and noticed a
</span><br>
<span class="quotelev2">&gt;&gt; AC_REQUIRE
</span><br>
<span class="quotelev3">&gt;&gt; &gt; for OPAL_CHECK_UGNI.  This doesn't make sense to me.  Maybe these were
</span><br>
<span class="quotelev3">&gt;&gt; &gt; accidentally copied from the configure.m4 for the cray pmi?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We may no longer require those as you have separated the Cray check out,
</span><br>
<span class="quotelev2">&gt;&gt; but the original problem is that we would pickup the Slurm components on
</span><br>
<span class="quotelev2">&gt;&gt; the Cray because we would find pmi.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oh,  I forgot about that .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah, I&#226;&#128;&#153;m afraid we do have to retain them because the Cray code does use
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#148;with-pmi and therefore overlaps the Slurm check.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Howard
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16110.php">http://www.open-mpi.org/community/lists/devel/2014/10/16110.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16111.php">http://www.open-mpi.org/community/lists/devel/2014/10/16111.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16112.php">http://www.open-mpi.org/community/lists/devel/2014/10/16112.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16113.php">http://www.open-mpi.org/community/lists/devel/2014/10/16113.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16121/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16122.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Previous message:</strong> <a href="16120.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>In reply to:</strong> <a href="16113.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16114.php">Paul Hargrove: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
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
