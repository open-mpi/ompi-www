<?
$subject_val = "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 14:26:18 2014" -->
<!-- isoreceived="20141028182618" -->
<!-- sent="Tue, 28 Oct 2014 11:26:14 -0700" -->
<!-- isosent="20141028182614" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question" -->
<!-- id="03C3225E-1E5F-44CB-8035-6ACF419BED6E_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj5iQP22a7F-xXi7Sbp8Nc0siUji44bCfGUO5kDnarzp0w_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 14:26:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16112.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Previous message:</strong> <a href="16110.php">Howard Pritchard: "[OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>In reply to:</strong> <a href="16110.php">Howard Pritchard: "[OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16112.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Reply:</strong> <a href="16112.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Oct 28, 2014, at 11:16 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to figure out what broke for pmi configure since now the pmix/cray component
</span><br>
<span class="quotelev1">&gt; doesn't compile any longer in master.
</span><br>
<p>Ouch - sorry about that. I thought the Cray component strictly used the new Cray PMI check (which I didn&#226;&#128;&#153;t touch) - isn&#226;&#128;&#153;t that true?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was happening to look in the s1 and s2 configure.m4's and noticed a AC_REQUIRE
</span><br>
<span class="quotelev1">&gt; for OPAL_CHECK_UGNI.  This doesn't make sense to me.  Maybe these were
</span><br>
<span class="quotelev1">&gt; accidentally copied from the configure.m4 for the cray pmi? 
</span><br>
<p>We may no longer require those as you have separated the Cray check out, but the original problem is that we would pickup the Slurm components on the Cray because we would find pmi.h
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16110.php">http://www.open-mpi.org/community/lists/devel/2014/10/16110.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16112.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Previous message:</strong> <a href="16110.php">Howard Pritchard: "[OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>In reply to:</strong> <a href="16110.php">Howard Pritchard: "[OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16112.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Reply:</strong> <a href="16112.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
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
