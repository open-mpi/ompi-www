<?
$subject_val = "Re: [OMPI devel] RFC: remove --disable-smp-locks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 02:16:43 2016" -->
<!-- isoreceived="20160712061643" -->
<!-- sent="Tue, 12 Jul 2016 11:46:32 +0530" -->
<!-- isosent="20160712061632" -->
<!-- name="Sreenidhi Bharathkar Ramesh" -->
<!-- email="sreenidhi-bharathkar.ramesh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: remove --disable-smp-locks" -->
<!-- id="ed45ff3731256fdf28e5b4e8f98be985_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Date:</strong> 2016-07-12 02:16:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19181.php">Howard Pritchard: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Previous message:</strong> <a href="19179.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My mistake.
<br>
Looks like &quot;--disable-smp-locks&quot; is no longer available in 2.0.x versions.
<br>
<p>Thanks,
<br>
- Sreenidhi.
<br>
<p><p>-----Original Message-----
<br>
From: Sreenidhi Bharathkar Ramesh
<br>
[mailto:sreenidhi-bharathkar.ramesh_at_[hidden]]
<br>
Sent: Tuesday, 12 July, 2016 11:32 AM
<br>
To: 'Open MPI Developers'
<br>
Subject: Re: [OMPI devel] RFC: remove --disable-smp-locks
<br>
<p>[ query regarding an old thread ]
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
<span class="quotelev2">&gt;&gt; about exactly this issue before (at the last meeting in Chicago?),
</span><br>
<span class="quotelev2">&gt;&gt; and decided that the option is useless -- in part, because it always
</span><br>
<span class="quotelev2">&gt;&gt; *must* be enabled for shared memory correctness.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that incorrect?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is correct. We need the memory fences and atomic operations for
</span><br>
<span class="quotelev2">&gt;&gt; shared memory in all cases. When thread support is enabled we also
</span><br>
<span class="quotelev2">&gt;&gt; need them in various other places. However, this option also turns on
</span><br>
<span class="quotelev2">&gt;&gt; the lock prefix for the atomic operations, forcing them to always be
</span><br>
<span class="quotelev2">&gt;&gt; atomic. I am not sure that this has no unexpected side-effects on the
</span><br>
<span class="quotelev2">&gt;&gt; code.
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 6, 2015, at 4:12 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Successive alteration of the build system made this option less
</span><br>
<span class="quotelev2">&gt;&gt; relevant and especially less meaningful. However, while removing it
</span><br>
<span class="quotelev2">&gt;&gt; sounds like a desirable cleanup, we have to keep in mind that this
</span><br>
<span class="quotelev2">&gt;&gt; will enable all locks and all memory barriers even in cases where
</span><br>
<span class="quotelev2">&gt;&gt; they are not necessary (via OPAL_WANT_SMP_LOCKS).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thus, I do not share the enthusiasm of the others. I would prefer to
</span><br>
<span class="quotelev2">&gt;&gt; see an evaluation of the impact on performance, a patch and a little
</span><br>
<span class="quotelev2">&gt;&gt; bit more than 1/2 a day to react to it (the proposed deadline seems
</span><br>
<span class="quotelev2">&gt;&gt; to be today January 6th) before such a drastic change.
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
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 6, 2015, at 11:55 AM, Howard Pritchard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;hppritcha_at_[hidden]&gt;
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
<li><strong>Next message:</strong> <a href="19181.php">Howard Pritchard: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Previous message:</strong> <a href="19179.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
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
