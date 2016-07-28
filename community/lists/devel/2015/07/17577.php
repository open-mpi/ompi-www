<?
$subject_val = "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 06:10:26 2015" -->
<!-- isoreceived="20150701101026" -->
<!-- sent="Wed, 1 Jul 2015 06:10:24 -0400" -->
<!-- isosent="20150701101024" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Testing of &amp;quot;OMP_PROC_BIND value is invalid&amp;quot; errors" -->
<!-- id="CAG4F6z-W6T7aRuGzzMyBqkD4L8rD8mLkZEneRu4_cOvnEzLGxg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA16c9mPyvHqpEq8fmWp7tP_2PcmTxWbyJFQYr8HNrAXRmg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 06:10:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="17576.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>In reply to:</strong> <a href="17575.php">Paul Hargrove: "[OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Reply:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Reply:</strong> <a href="17581.php">Paul Hargrove: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>I think your testing is extremely helpful. Even more so with this new
<br>
versioning scheme.
<br>
<p>Setting OMP envars in ORTE should have been discussed. Considering both
<br>
Paul and Howard (key members of our community) use OMP in production
<br>
environments with Cray and PGI compilers, it seems a bit odd to me that you
<br>
wouldn't give a heads up and consult with someone on this. Not very
<br>
community like if you ask me.
<br>
<p>I support your stance on this, Howard. I don't think it's an overreaction.
<br>
<p>Josh
<br>
<p><p><p>On Wed, Jul 1, 2015 at 4:02 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 1, 2015 at 12:05 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now that we know there is an issue with one compiler, and it is isolated
</span><br>
<span class="quotelev2">&gt;&gt; to just that compiler, we can easily use configure.m4 to protect against
</span><br>
<span class="quotelev2">&gt;&gt; it. I'll add that protection here shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One cannot possibly know for certain that &quot;it is isolated to just that one
</span><br>
<span class="quotelev1">&gt; compiler&quot; unless one has tried *every* compiler.  So, I hope the
</span><br>
<span class="quotelev1">&gt; configure-based solution is &quot;stronger&quot; than black-listing PGI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since we are told the PGI problem occurs at runtime, not compile time, I
</span><br>
<span class="quotelev1">&gt; am curious just what solution you have in mind for the PGI compilers
</span><br>
<span class="quotelev1">&gt; targeting Cray compute nodes (or cross-compilation in general) where you
</span><br>
<span class="quotelev1">&gt; can't expect to test the runtime behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I have a moment in the next couple days, I can try master on many
</span><br>
<span class="quotelev1">&gt; versions of PGI, and some XLC, PathScale and Open64 compilers that are
</span><br>
<span class="quotelev1">&gt; probably not covered by MTT (though I've not looked) as well as Sun, Intel,
</span><br>
<span class="quotelev1">&gt; Gnu and Clang compilers.  Absent any other instructions, I am going to
</span><br>
<span class="quotelev1">&gt; assume, based on Howard's emails, that examples/ring_c.c is sufficient to
</span><br>
<span class="quotelev1">&gt; reproduce using pgi-12.9 on NERSC's Carver.  I would, however, appreciate
</span><br>
<span class="quotelev1">&gt; somebody first confirming for me that such testing is helpful in some way.
</span><br>
<span class="quotelev1">&gt; I am not going to bother if the data I collect is going to be discarded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17575.php">http://www.open-mpi.org/community/lists/devel/2015/07/17575.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17577/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="17576.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>In reply to:</strong> <a href="17575.php">Paul Hargrove: "[OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Reply:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Reply:</strong> <a href="17581.php">Paul Hargrove: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
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
