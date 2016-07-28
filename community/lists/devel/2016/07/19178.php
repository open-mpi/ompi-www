<?
$subject_val = "Re: [OMPI devel] RFC: remove --disable-smp-locks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 02:02:18 2016" -->
<!-- isoreceived="20160712060218" -->
<!-- sent="Tue, 12 Jul 2016 11:31:57 +0530" -->
<!-- isosent="20160712060157" -->
<!-- name="Sreenidhi Bharathkar Ramesh" -->
<!-- email="sreenidhi-bharathkar.ramesh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: remove --disable-smp-locks" -->
<!-- id="3527b4c492bf9fcd18ff2f69f6bfa546_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI devel] RFC: remove --disable-smp-locks" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: remove --disable-smp-locks<br>
<strong>From:</strong> Sreenidhi Bharathkar Ramesh (<em>sreenidhi-bharathkar.ramesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 02:01:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19179.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="19177.php">Ben Menadue: "[OMPI devel] MCA_SPML_CALL call in compiled objects"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16736.php">Nathan Hjelm: "[OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19179.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Reply:</strong> <a href="19179.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[ query regarding an old thread ]
<br>
<p>Hi,
<br>
<p>It looks like &quot;--disable-smp-locks&quot; is still available as an option.
<br>
<p>1. Will this be continued or deprecated ?
<br>
<p>2. Under what circumstances would &quot;--disable-smp-locks&quot; be useful ?
<br>
In our experiments on ARM64 platform, it was seen that OSU Micro collective
<br>
benchmarks actually degraded when &quot;--disable-smp-locks&quot; was used.  Hence,
<br>
asking.
<br>
<p>Please let me know.
<br>
<p>Thanks,
<br>
- Sreenidhi.
<br>
<p>----- ----- ----- -----
<br>
<p>Subject: Re: [OMPI devel] RFC: remove --disable-smp-locks
<br>
From: Jeff Squyres (jsquyres) (jsquyres_at_[hidden])
<br>
Date: 2015-01-07 14:14:30
<br>
Added to the wiki / agenda.
<br>
On Jan 7, 2015, at 11:35 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this is a good discussion for the Dallas meeting. We can hold
</span><br>
<span class="quotelev1">&gt; off on this RFC until then.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 06, 2015 at 06:16:39PM -0500, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jan 6, 2015 at 4:25 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My enthusiasm for this was primarily because I thought we had talked
</span><br>
<span class="quotelev2">&gt;&gt; about exactly this issue before (at the last meeting in Chicago?), and
</span><br>
<span class="quotelev2">&gt;&gt; decided that the option is useless -- in part, because it always *must*
</span><br>
<span class="quotelev2">&gt;&gt; be enabled for shared memory correctness.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that incorrect?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is correct. We need the memory fences and atomic operations for
</span><br>
<span class="quotelev2">&gt;&gt; shared memory in all cases. When thread support is enabled we also need
</span><br>
<span class="quotelev2">&gt;&gt; them in various other places. However, this option also turns on the lock
</span><br>
<span class="quotelev2">&gt;&gt; prefix for the atomic operations, forcing them to always be atomic. I am
</span><br>
<span class="quotelev2">&gt;&gt; not sure that this has no unexpected side-effects on the code.
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 6, 2015, at 4:12 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Successive alteration of the build system made this option less
</span><br>
<span class="quotelev2">&gt;&gt; relevant and especially less meaningful. However, while removing it
</span><br>
<span class="quotelev2">&gt;&gt; sounds like a desirable cleanup, we have to keep in mind that this will
</span><br>
<span class="quotelev2">&gt;&gt; enable all locks and all memory barriers even in cases where they are
</span><br>
<span class="quotelev2">&gt;&gt; not necessary (via OPAL_WANT_SMP_LOCKS).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thus, I do not share the enthusiasm of the others. I would prefer to
</span><br>
<span class="quotelev2">&gt;&gt; see an evaluation of the impact on performance, a patch and a little bit
</span><br>
<span class="quotelev2">&gt;&gt; more than 1/2 a day to react to it (the proposed deadline seems to be
</span><br>
<span class="quotelev2">&gt;&gt; today January 6th) before such a drastic change.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Jan 6, 2015 at 12:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 6, 2015, at 9:04 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 6, 2015, at 11:55 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I agree. Please remove this config option.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2015-01-06 9:44 GMT-07:00 Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What: Remove the --disable-smp-locks configure option from master.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Why: Use of this option produces incorrect results/undefined
</span><br>
<span class="quotelev2">&gt;&gt; behavior
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when any shared memory BTL is in use. Since BTL usage is enabled
</span><br>
<span class="quotelev2">&gt;&gt; even
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when using cm for point-to-point this option can never be safely
</span><br>
<span class="quotelev2">&gt;&gt; used.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When: Thurs, Jan 6, 2015
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Nathan
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19179.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="19177.php">Ben Menadue: "[OMPI devel] MCA_SPML_CALL call in compiled objects"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16736.php">Nathan Hjelm: "[OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19179.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Reply:</strong> <a href="19179.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
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
