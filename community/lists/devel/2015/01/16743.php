<?
$subject_val = "Re: [OMPI devel] RFC: remove --disable-smp-locks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 18:16:40 2015" -->
<!-- isoreceived="20150106231640" -->
<!-- sent="Tue, 6 Jan 2015 18:16:39 -0500" -->
<!-- isosent="20150106231639" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: remove --disable-smp-locks" -->
<!-- id="CAMJJpkWmfUaCmFb-MZ9wkAENTxKxkwatsL64uD9BDCnpUdnJEg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B3462516-8770-4721-BF25-1EC9B7302205_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-06 18:16:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16744.php">Ralph Castain: "[OMPI devel] libevent updated"</a>
<li><strong>Previous message:</strong> <a href="16742.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>In reply to:</strong> <a href="16742.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16747.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Reply:</strong> <a href="16747.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Reply:</strong> <a href="16749.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Reply:</strong> <a href="16755.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jan 6, 2015 at 4:25 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; My enthusiasm for this was primarily because I thought we had talked about
</span><br>
<span class="quotelev1">&gt; exactly this issue before (at the last meeting in Chicago?), and decided
</span><br>
<span class="quotelev1">&gt; that the option is useless -- in part, because it always *must* be enabled
</span><br>
<span class="quotelev1">&gt; for shared memory correctness.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that incorrect?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is correct. We need the memory fences and atomic operations for shared
<br>
memory in all cases. When thread support is enabled we also need them in
<br>
various other places. However, this option also turns on the lock prefix
<br>
for the atomic operations, forcing them to always be atomic. I am not sure
<br>
that this has no unexpected side-effects on the code.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 6, 2015, at 4:12 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Successive alteration of the build system made this option less relevant
</span><br>
<span class="quotelev1">&gt; and especially less meaningful. However, while removing it sounds like a
</span><br>
<span class="quotelev1">&gt; desirable cleanup, we have to keep in mind that this will enable all locks
</span><br>
<span class="quotelev1">&gt; and all memory barriers even in cases where they are not necessary (via
</span><br>
<span class="quotelev1">&gt; OPAL_WANT_SMP_LOCKS).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thus, I do not share the enthusiasm of the others. I would prefer to see
</span><br>
<span class="quotelev1">&gt; an evaluation of the impact on performance, a patch and a little bit more
</span><br>
<span class="quotelev1">&gt; than 1/2 a day to react to it (the proposed deadline seems to be today
</span><br>
<span class="quotelev1">&gt; January 6th) before such a drastic change.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   George.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Jan 6, 2015 at 12:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; +1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jan 6, 2015, at 9:04 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jan 6, 2015, at 11:55 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I agree.  Please remove this config option.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 2015-01-06 9:44 GMT-07:00 Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; What: Remove the --disable-smp-locks configure option from master.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Why: Use of this option produces incorrect results/undefined behavior
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; when any shared memory BTL is in use. Since BTL usage is enabled even
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; when using cm for point-to-point this option can never be safely used.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; When: Thurs, Jan 6, 2015
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16736.php">http://www.open-mpi.org/community/lists/devel/2015/01/16736.php</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16737.php">http://www.open-mpi.org/community/lists/devel/2015/01/16737.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16739.php">http://www.open-mpi.org/community/lists/devel/2015/01/16739.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16740.php">http://www.open-mpi.org/community/lists/devel/2015/01/16740.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16741.php">http://www.open-mpi.org/community/lists/devel/2015/01/16741.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16742.php">http://www.open-mpi.org/community/lists/devel/2015/01/16742.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16743/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16744.php">Ralph Castain: "[OMPI devel] libevent updated"</a>
<li><strong>Previous message:</strong> <a href="16742.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>In reply to:</strong> <a href="16742.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16747.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Reply:</strong> <a href="16747.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Reply:</strong> <a href="16749.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Reply:</strong> <a href="16755.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
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
