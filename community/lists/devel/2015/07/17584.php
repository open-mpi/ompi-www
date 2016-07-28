<?
$subject_val = "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 11:10:20 2015" -->
<!-- isoreceived="20150701151020" -->
<!-- sent="Wed, 1 Jul 2015 11:10:17 -0400" -->
<!-- isosent="20150701151017" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Testing of &amp;quot;OMP_PROC_BIND value is invalid&amp;quot; errors" -->
<!-- id="CAG4F6z8H4-kJjpD4kRtC==Z1-8DDAtVU74ts0oJAKdrZ8Lsw5w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA14qP_kq23uMCF08eotHtp+dAD7uzBtdbfuwu1bP-tq7rQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-07-01 11:10:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17585.php">Paul Hargrove: "[OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]"</a>
<li><strong>Previous message:</strong> <a href="17583.php">Nathan Hjelm: "Re: [OMPI devel] error in test/threads/opal_condition.c"</a>
<li><strong>In reply to:</strong> <a href="17581.php">Paul Hargrove: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17597.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Reply:</strong> <a href="17597.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the clarification.
<br>
<p>Josh
<br>
<p>On Wed, Jul 1, 2015 at 9:46 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are grossly misinterpreting my position in this.
</span><br>
<span class="quotelev1">&gt; You use my name to support a position I do not agree with.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, I don't do production work at all and have actually never written
</span><br>
<span class="quotelev1">&gt; an MPI application more significant than a class project.
</span><br>
<span class="quotelev1">&gt; Second, anyone who wants to use &quot;master&quot; for production use probably gets
</span><br>
<span class="quotelev1">&gt; what they deserve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe, as Ralph does, that master will occasionally get broken because
</span><br>
<span class="quotelev1">&gt; developers simply cannot test every possible system.
</span><br>
<span class="quotelev1">&gt; I do not think (but could be wrong) that any of the existing Jenkins
</span><br>
<span class="quotelev1">&gt; setups use PGI, and so would not have caught this problem.
</span><br>
<span class="quotelev1">&gt; Nor do I think a human reading an RFC or PR text would have realized that
</span><br>
<span class="quotelev1">&gt; PGI's OMP runtime would react this way.
</span><br>
<span class="quotelev1">&gt; So, it is possible (I cannot be certain, of course) that even had this
</span><br>
<span class="quotelev1">&gt; change been though the RFC and PR processes, the problem would not have
</span><br>
<span class="quotelev1">&gt; been discovered until the MTT runs.
</span><br>
<span class="quotelev1">&gt; As Ralph said, this is why MTT exists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My only issue with Ralph was that he attempted (in my reading) to
</span><br>
<span class="quotelev1">&gt; *dismiss* the problem with &quot;fix it in configure&quot;.
</span><br>
<span class="quotelev1">&gt; I shared some honest concerns about how doing so didn't seem technically
</span><br>
<span class="quotelev1">&gt; possible (at least not in general).
</span><br>
<span class="quotelev1">&gt; My response to Ralph was to pick on those points, and not to support
</span><br>
<span class="quotelev1">&gt; Howard's position regarding how/when/why the code had entered master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 1, 2015 at 3:10 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think your testing is extremely helpful. Even more so with this new
</span><br>
<span class="quotelev2">&gt;&gt; versioning scheme.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Setting OMP envars in ORTE should have been discussed. Considering both
</span><br>
<span class="quotelev2">&gt;&gt; Paul and Howard (key members of our community) use OMP in production
</span><br>
<span class="quotelev2">&gt;&gt; environments with Cray and PGI compilers, it seems a bit odd to me that you
</span><br>
<span class="quotelev2">&gt;&gt; wouldn't give a heads up and consult with someone on this. Not very
</span><br>
<span class="quotelev2">&gt;&gt; community like if you ask me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I support your stance on this, Howard. I don't think it's an
</span><br>
<span class="quotelev2">&gt;&gt; overreaction.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 1, 2015 at 4:02 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jul 1, 2015 at 12:05 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now that we know there is an issue with one compiler, and it is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; isolated to just that compiler, we can easily use configure.m4 to protect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; against it. I'll add that protection here shortly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One cannot possibly know for certain that &quot;it is isolated to just that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one compiler&quot; unless one has tried *every* compiler.  So, I hope the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure-based solution is &quot;stronger&quot; than black-listing PGI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since we are told the PGI problem occurs at runtime, not compile time, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; am curious just what solution you have in mind for the PGI compilers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; targeting Cray compute nodes (or cross-compilation in general) where you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can't expect to test the runtime behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I have a moment in the next couple days, I can try master on many
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions of PGI, and some XLC, PathScale and Open64 compilers that are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probably not covered by MTT (though I've not looked) as well as Sun, Intel,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gnu and Clang compilers.  Absent any other instructions, I am going to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assume, based on Howard's emails, that examples/ring_c.c is sufficient to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reproduce using pgi-12.9 on NERSC's Carver.  I would, however, appreciate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somebody first confirming for me that such testing is helpful in some way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not going to bother if the data I collect is going to be discarded.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17575.php">http://www.open-mpi.org/community/lists/devel/2015/07/17575.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17577.php">http://www.open-mpi.org/community/lists/devel/2015/07/17577.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17581.php">http://www.open-mpi.org/community/lists/devel/2015/07/17581.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17584/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17585.php">Paul Hargrove: "[OMPI devel] Master build failures w/ Studio 12.4 on Linux w/ -m32 [w/ patch]"</a>
<li><strong>Previous message:</strong> <a href="17583.php">Nathan Hjelm: "Re: [OMPI devel] error in test/threads/opal_condition.c"</a>
<li><strong>In reply to:</strong> <a href="17581.php">Paul Hargrove: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17597.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Reply:</strong> <a href="17597.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
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
