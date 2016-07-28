<?
$subject_val = "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 07:32:41 2015" -->
<!-- isoreceived="20150701113241" -->
<!-- sent="Wed, 1 Jul 2015 20:32:40 +0900" -->
<!-- isosent="20150701113240" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Testing of &amp;quot;OMP_PROC_BIND value is invalid&amp;quot; errors" -->
<!-- id="CAAkFZ5vQVP31m2S=WxsTm_07V3+Yub4tpXbPKaSDVSY4rsqY8w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57odHOrEfrLbjMGd1Lh=YkAZg_7LLawCQWDc22Mwohe8gtQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 07:32:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17580.php">Paul Hargrove: "[OMPI devel] error in test/threads/opal_condition.c"</a>
<li><strong>Previous message:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>In reply to:</strong> <a href="17576.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17577.php">Joshua Ladd: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Paul concern was about cross compilation
<br>
(e.g. no AC_TRY_RUN ...)
<br>
<p>fwiw, fortran bindings cannot be built &quot;as is&quot; when cross compiling ompi
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, July 1, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Given the description, I suspect that any MPI application should be
</span><br>
<span class="quotelev1">&gt; sufficient to test it - it appears that PGI is adding some OpenMP-specific
</span><br>
<span class="quotelev1">&gt; code checks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not saying it is isolated solely to PGI, nor am I pointing fingers at
</span><br>
<span class="quotelev1">&gt; them - I'm only saying that is the only compiler for which we've heard
</span><br>
<span class="quotelev1">&gt; there is a problem. We don't see problems under GCC (which is what I
</span><br>
<span class="quotelev1">&gt; normally use) or Intel (which I also checked, though I don't typically use
</span><br>
<span class="quotelev1">&gt; it). Likewise, we haven't seen any issues reported by any other MTT tester,
</span><br>
<span class="quotelev1">&gt; including Absoft. So this doesn't seem to be a pervasive issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd be interested in your results, and would appreciate your input. I
</span><br>
<span class="quotelev1">&gt; haven't yet decided on the best configure logic to use here - in a perfect
</span><br>
<span class="quotelev1">&gt; world, one could test for OMP_PROC_BIND, and indeed we may try something
</span><br>
<span class="quotelev1">&gt; like that with an AC_TRY_RUN to see if it will catch it. A little tricky to
</span><br>
<span class="quotelev1">&gt; test for an issue with a particular envar, so if we can isolate that it is
</span><br>
<span class="quotelev1">&gt; a specific compiler or compiler version that is the source of the problem,
</span><br>
<span class="quotelev1">&gt; that would be easier to resolve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 1, 2015 at 3:02 AM, Paul Hargrove &lt;phhargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','phhargrove_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 1, 2015 at 12:05 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now that we know there is an issue with one compiler, and it is isolated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to just that compiler, we can easily use configure.m4 to protect against
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it. I'll add that protection here shortly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One cannot possibly know for certain that &quot;it is isolated to just that
</span><br>
<span class="quotelev2">&gt;&gt; one compiler&quot; unless one has tried *every* compiler.  So, I hope the
</span><br>
<span class="quotelev2">&gt;&gt; configure-based solution is &quot;stronger&quot; than black-listing PGI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since we are told the PGI problem occurs at runtime, not compile time, I
</span><br>
<span class="quotelev2">&gt;&gt; am curious just what solution you have in mind for the PGI compilers
</span><br>
<span class="quotelev2">&gt;&gt; targeting Cray compute nodes (or cross-compilation in general) where you
</span><br>
<span class="quotelev2">&gt;&gt; can't expect to test the runtime behavior.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I have a moment in the next couple days, I can try master on many
</span><br>
<span class="quotelev2">&gt;&gt; versions of PGI, and some XLC, PathScale and Open64 compilers that are
</span><br>
<span class="quotelev2">&gt;&gt; probably not covered by MTT (though I've not looked) as well as Sun, Intel,
</span><br>
<span class="quotelev2">&gt;&gt; Gnu and Clang compilers.  Absent any other instructions, I am going to
</span><br>
<span class="quotelev2">&gt;&gt; assume, based on Howard's emails, that examples/ring_c.c is sufficient to
</span><br>
<span class="quotelev2">&gt;&gt; reproduce using pgi-12.9 on NERSC's Carver.  I would, however, appreciate
</span><br>
<span class="quotelev2">&gt;&gt; somebody first confirming for me that such testing is helpful in some way.
</span><br>
<span class="quotelev2">&gt;&gt; I am not going to bother if the data I collect is going to be discarded.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','PHHargrove_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17575.php">http://www.open-mpi.org/community/lists/devel/2015/07/17575.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17579/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17580.php">Paul Hargrove: "[OMPI devel] error in test/threads/opal_condition.c"</a>
<li><strong>Previous message:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>In reply to:</strong> <a href="17576.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17577.php">Joshua Ladd: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
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
