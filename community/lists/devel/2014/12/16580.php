<?
$subject_val = "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 21:30:56 2014" -->
<!-- isoreceived="20141213023056" -->
<!-- sent="Fri, 12 Dec 2014 18:30:52 -0800" -->
<!-- isosent="20141213023052" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC" -->
<!-- id="B8AA0FBA-7259-4019-9ECB-9C8884FFF014_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA16jvUiNNXqn1q8XDiqWf3ky48PxsiTSXRRnJzYWD5_+9g_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 21:30:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16581.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>Previous message:</strong> <a href="16579.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>In reply to:</strong> <a href="16578.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suspect we&#146;ll just remove it, but I want to give the other developers a chance to chime in before doing so.
<br>
<p><span class="quotelev1">&gt; On Dec 12, 2014, at 6:07 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If preserved at all, the existing code should probably be made to act more intelligently when it encounters an unknown escape code.  I would suggest advancing the length by some value (say 128?) that should be &quot;big enough&quot; and printing a prominent warning.  So, the next time this bug surfaces it will be (a) non-fatal and (b) easy to pin down.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 12, 2014 at 5:46 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Looking at the comments in the code, it appears that the rationale when written was to provide support for REALLY ancient systems that didn&#146;t have some of these functions. Since that time, we added a configure check for vsnprintf, so I&#146;m adding Paul/Larry&#146;s suggested code, protected by that configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since I suspect the configure check will always pass on any system of interest today, I think this will solve the problem. We can then address the broader question (e.g., do we even need this stuff any more at all?) in a more leisurely way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 12, 2014, at 5:42 PM, Larry Baker &lt;baker_at_[hidden] &lt;mailto:baker_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 12 Dec 2014, at 5:22 PM, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOWEVER, while the patch catches the &quot;%u&quot; case, there are plenty of potential ways to hit the same problem if, for instance, one uses &quot;%zu&quot; for size_t.  Additionally, I've already noted that the code for &quot;%ld&quot;, &quot;%lx&quot;, &quot;%lX&quot;, &quot;%lf&quot; are all currently incorrect.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if it is applicable, but C99 has an &lt;inttypes.h&gt; header which #include's &lt;stdint.h&gt; and provides additional capabilities, such as printf()/scanf() format macros for the types defined in &lt;stdint.h&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Larry Baker
</span><br>
<span class="quotelev2">&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev2">&gt;&gt; 650-329-5608 &lt;tel:650-329-5608&gt;
</span><br>
<span class="quotelev2">&gt;&gt; baker_at_[hidden] &lt;mailto:baker_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16578.php">http://www.open-mpi.org/community/lists/devel/2014/12/16578.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16580/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16581.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>Previous message:</strong> <a href="16579.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc3] REGRESSION: connection problem on (multi-homed) Solaris host"</a>
<li><strong>In reply to:</strong> <a href="16578.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
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
