<?
$subject_val = "Re: [OMPI devel] RFC: remove --disable-smp-locks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 11:35:21 2015" -->
<!-- isoreceived="20150107163521" -->
<!-- sent="Wed, 7 Jan 2015 09:35:21 -0700" -->
<!-- isosent="20150107163521" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: remove --disable-smp-locks" -->
<!-- id="20150107163520.GH1467_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkWmfUaCmFb-MZ9wkAENTxKxkwatsL64uD9BDCnpUdnJEg_at_mail.gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-07 11:35:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16756.php">Ralph Castain: "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
<li><strong>Previous message:</strong> <a href="16754.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>In reply to:</strong> <a href="16743.php">George Bosilca: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Reply:</strong> <a href="16759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this is a good discussion for the Dallas meeting. We can hold
<br>
off on this RFC until then.
<br>
<p>-Nathan
<br>
<p>On Tue, Jan 06, 2015 at 06:16:39PM -0500, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;    On Tue, Jan 6, 2015 at 4:25 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;    &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      My enthusiasm for this was primarily because I thought we had talked
</span><br>
<span class="quotelev1">&gt;      about exactly this issue before (at the last meeting in Chicago?), and
</span><br>
<span class="quotelev1">&gt;      decided that the option is useless -- in part, because it always *must*
</span><br>
<span class="quotelev1">&gt;      be enabled for shared memory correctness.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Is that incorrect?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    This is correct. We need the memory fences and atomic operations for
</span><br>
<span class="quotelev1">&gt;    shared memory in all cases. When thread support is enabled we also need
</span><br>
<span class="quotelev1">&gt;    them in various other places. However, this option also turns on the lock
</span><br>
<span class="quotelev1">&gt;    prefix for the atomic operations, forcing them to always be atomic. I am
</span><br>
<span class="quotelev1">&gt;    not sure that this has no unexpected side-effects on the code.
</span><br>
<span class="quotelev1">&gt;      George.
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Jan 6, 2015, at 4:12 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;      &gt; Successive alteration of the build system made this option less
</span><br>
<span class="quotelev1">&gt;      relevant and especially less meaningful. However, while removing it
</span><br>
<span class="quotelev1">&gt;      sounds like a desirable cleanup, we have to keep in mind that this will
</span><br>
<span class="quotelev1">&gt;      enable all locks and all memory barriers even in cases where they are
</span><br>
<span class="quotelev1">&gt;      not necessary (via OPAL_WANT_SMP_LOCKS).
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Thus, I do not share the enthusiasm of the others. I would prefer to
</span><br>
<span class="quotelev1">&gt;      see an evaluation of the impact on performance, a patch and a little bit
</span><br>
<span class="quotelev1">&gt;      more than 1/2 a day to react to it (the proposed deadline seems to be
</span><br>
<span class="quotelev1">&gt;      today January 6th) before such a drastic change.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;   George.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; On Tue, Jan 6, 2015 at 12:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      wrote:
</span><br>
<span class="quotelev2">&gt;      &gt; +1
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; On Jan 6, 2015, at 9:04 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;      &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; +1
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; On Jan 6, 2015, at 11:55 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      wrote:
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; I agree.  Please remove this config option.
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; 2015-01-06 9:44 GMT-07:00 Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; What: Remove the --disable-smp-locks configure option from master.
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; Why: Use of this option produces incorrect results/undefined
</span><br>
<span class="quotelev1">&gt;      behavior
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; when any shared memory BTL is in use. Since BTL usage is enabled
</span><br>
<span class="quotelev1">&gt;      even
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; when using cm for point-to-point this option can never be safely
</span><br>
<span class="quotelev1">&gt;      used.
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; When: Thurs, Jan 6, 2015
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16736.php">http://www.open-mpi.org/community/lists/devel/2015/01/16736.php</a>
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;      &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16737.php">http://www.open-mpi.org/community/lists/devel/2015/01/16737.php</a>
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; --
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;      &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;      &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16739.php">http://www.open-mpi.org/community/lists/devel/2015/01/16739.php</a>
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;      &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;      &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;      &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;      &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16740.php">http://www.open-mpi.org/community/lists/devel/2015/01/16740.php</a>
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;      &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;      &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;      &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;      &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16741.php">http://www.open-mpi.org/community/lists/devel/2015/01/16741.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      --
</span><br>
<span class="quotelev1">&gt;      Jeff Squyres
</span><br>
<span class="quotelev1">&gt;      jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      devel mailing list
</span><br>
<span class="quotelev1">&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16742.php">http://www.open-mpi.org/community/lists/devel/2015/01/16742.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16743.php">http://www.open-mpi.org/community/lists/devel/2015/01/16743.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16755/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16756.php">Ralph Castain: "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
<li><strong>Previous message:</strong> <a href="16754.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>In reply to:</strong> <a href="16743.php">George Bosilca: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Reply:</strong> <a href="16759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
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
