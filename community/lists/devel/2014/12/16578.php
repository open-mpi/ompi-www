<?
$subject_val = "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 21:07:40 2014" -->
<!-- isoreceived="20141213020740" -->
<!-- sent="Fri, 12 Dec 2014 18:07:38 -0800" -->
<!-- isosent="20141213020738" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC" -->
<!-- id="CAAvDA16jvUiNNXqn1q8XDiqWf3ky48PxsiTSXRRnJzYWD5_+9g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7C5F373D-BF1B-4E09-B153-75CF7CFB1EF5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 21:07:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16579.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Previous message:</strong> <a href="16577.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>In reply to:</strong> <a href="16577.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16580.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="16580.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>If preserved at all, the existing code should probably be made to act more
<br>
intelligently when it encounters an unknown escape code.  I would suggest
<br>
advancing the length by some value (say 128?) that should be &quot;big enough&quot;
<br>
and printing a prominent warning.  So, the next time this bug surfaces it
<br>
will be (a) non-fatal and (b) easy to pin down.
<br>
<p>-Paul
<br>
<p>On Fri, Dec 12, 2014 at 5:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Looking at the comments in the code, it appears that the rationale when
</span><br>
<span class="quotelev1">&gt; written was to provide support for REALLY ancient systems that didn't have
</span><br>
<span class="quotelev1">&gt; some of these functions. Since that time, we added a configure check for
</span><br>
<span class="quotelev1">&gt; vsnprintf, so I'm adding Paul/Larry's suggested code, protected by that
</span><br>
<span class="quotelev1">&gt; configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since I suspect the configure check will always pass on any system of
</span><br>
<span class="quotelev1">&gt; interest today, I think this will solve the problem. We can then address
</span><br>
<span class="quotelev1">&gt; the broader question (e.g., do we even need this stuff any more at all?) in
</span><br>
<span class="quotelev1">&gt; a more leisurely way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2014, at 5:42 PM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12 Dec 2014, at 5:22 PM, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HOWEVER, while the patch catches the &quot;%u&quot; case, there are plenty of
</span><br>
<span class="quotelev1">&gt; potential ways to hit the same problem if, for instance, one uses &quot;%zu&quot; for
</span><br>
<span class="quotelev1">&gt; size_t.  Additionally, I've already noted that the code for &quot;%ld&quot;, &quot;%lx&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;%lX&quot;, &quot;%lf&quot; are all currently incorrect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure if it is applicable, but C99 has an &lt;inttypes.h&gt; header which
</span><br>
<span class="quotelev1">&gt; #include's &lt;stdint.h&gt; and provides additional capabilities, such as
</span><br>
<span class="quotelev1">&gt; printf()/scanf() format macros for the types defined in &lt;stdint.h&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16578/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16579.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>Previous message:</strong> <a href="16577.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>In reply to:</strong> <a href="16577.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16580.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="16580.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
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
