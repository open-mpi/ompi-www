<?
$subject_val = "Re: [OMPI devel] RTLD_GLOBAL question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 16:55:52 2014" -->
<!-- isoreceived="20141201215552" -->
<!-- sent="Mon, 1 Dec 2014 21:55:51 +0000" -->
<!-- isosent="20141201215551" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTLD_GLOBAL question" -->
<!-- id="EFB840D6-226C-4979-917F-C0AF044B97F3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj6+0o0Znh_c=V22=3mUTRSHhRvHnuazTf=FJbttUJ8CEw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTLD_GLOBAL question<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-01 16:55:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16382.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16380.php">Howard Pritchard: "[OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="16380.php">Howard Pritchard: "[OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16382.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Reply:</strong> <a href="16382.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 1, 2014, at 4:07 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; There has been some discussion of end case situations with use of dlopen
</span><br>
<span class="quotelev1">&gt; in the ompi mca framework that can lead to unresolved symbols when
</span><br>
<span class="quotelev1">&gt; subsequent shared libraries are dlopen'd that might needs symbols from
</span><br>
<span class="quotelev1">&gt; a library that had been opened previously.  Yes these libraries should be
</span><br>
<span class="quotelev1">&gt; doing something like a second dlopen of the lib they are dependent on,
</span><br>
<span class="quotelev1">&gt; but that's a different story involving other software projects outside of
</span><br>
<span class="quotelev1">&gt; ompi.
</span><br>
<p>Those other projects should be fixed.  OMPI should not be the compromise location where we compensate for other projects that do not obey proper linking semantics.
<br>
<p>Can you cite some specific examples?
<br>
<p><span class="quotelev1">&gt; The default with the mca framework dlopen'ing of component libraries
</span><br>
<span class="quotelev1">&gt; is not to use RTLD_GLOBAL, and there does not currently appear to be a way
</span><br>
<span class="quotelev1">&gt; to change this behavior at runtime.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a reason for avoiding use of RTLD_GLOBAL in libltdl's use of dlopen?
</span><br>
<p>Yes.
<br>
<p>There's at least two reasons that I can think of off the top of my head:
<br>
<p>1. It's the Right Thing to do.  I.e., we shouldn't pollute the general namespace with symbols from dependent libraries.
<br>
<p>2. We've had specific user requests to not pollute the general namespace.  One specific case was because we use an embedded copy of libevent, and another MPI-based program also uses libevent.  If we didn't keep libevent in a private namespace, Bad Things (i.e., symbol clashes) would occur.
<br>
<p><span class="quotelev1">&gt; Would it be okay to add RTLD_GLOBAL to the default module_flags used
</span><br>
<span class="quotelev1">&gt; in the vm_open - modulo detection of the definition of RTLD_GLOBAL at
</span><br>
<span class="quotelev1">&gt; compile time.
</span><br>
<p>No.
<br>
<p><span class="quotelev1">&gt;  Perhaps adding a way with an env. or config option to not
</span><br>
<span class="quotelev1">&gt; enable RTLD_GLOBAL by default?
</span><br>
<p>This just seems like a bad path to go down.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16382.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16380.php">Howard Pritchard: "[OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="16380.php">Howard Pritchard: "[OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16382.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Reply:</strong> <a href="16382.php">Ralph Castain: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
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
