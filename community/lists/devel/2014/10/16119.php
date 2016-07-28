<?
$subject_val = "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 16:11:09 2014" -->
<!-- isoreceived="20141028201109" -->
<!-- sent="Tue, 28 Oct 2014 13:11:05 -0700" -->
<!-- isosent="20141028201105" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question" -->
<!-- id="CAAvDA15Wdqa_E0zt9Oz2yZYWpWJ6O+EUh1i_8jG9B-Dw5T-5Ng_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="384C7AFA-5113-46AE-97CA-58B98AC2015B_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 16:11:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16120.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Previous message:</strong> <a href="16118.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>In reply to:</strong> <a href="16117.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Oct 28, 2014 at 12:20 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 28, 2014, at 12:17 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Cray's at NERSC have *both* pmi_cray.h and pmi.h (and pmi2.h as well).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand that - I was questioning if that is universally true or not.
</span><br>
<span class="quotelev1">&gt; IF we are guaranteed that nobody with a Cray ever renames pmi_cray.h to
</span><br>
<span class="quotelev1">&gt; pmi.h, THEN your check will be fine. Otherwise, we can't trust it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I seem to recall that the earlier Crays, at least, didn't have this
</span><br>
<span class="quotelev1">&gt; naming distinction - or at least, not at LANL. Hence my question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Fair enough.
<br>
I would say anybody moving or renaming files provided by Cray gets what
<br>
they deserve. However, since I have no way to confirm older or future
<br>
systems, I cannot answer your question with an affirmative.
<br>
<p>What about checking for the presence of pmi_cray_ext.h?
<br>
Is that any better?
<br>
<p>So, if one is not going to trust ANY filenames, one might instead see if
<br>
pmi.h and libpmi.* provide Cray's extensions.  If there are Cray extensions
<br>
used by OPAL/ORTE/OMPI, then checking for those would be &quot;the right way&quot;
<br>
anyway.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16119/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16120.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>Previous message:</strong> <a href="16118.php">Howard Pritchard: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
<li><strong>In reply to:</strong> <a href="16117.php">Ralph Castain: "Re: [OMPI devel] configure.m4 for pmix/s1 and pmix/s2 question"</a>
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
