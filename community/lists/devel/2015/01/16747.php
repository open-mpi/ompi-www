<?
$subject_val = "Re: [OMPI devel] RFC: remove --disable-smp-locks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 04:25:04 2015" -->
<!-- isoreceived="20150107092504" -->
<!-- sent="Wed, 07 Jan 2015 18:25:01 +0900" -->
<!-- isosent="20150107092501" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: remove --disable-smp-locks" -->
<!-- id="54ACFB6D.5070906_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-07 04:25:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16748.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
<li><strong>Previous message:</strong> <a href="16746.php">Ralph Castain: "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<li><strong>In reply to:</strong> <a href="16743.php">George Bosilca: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16750.php">Jeff Squyres (jsquyres): "[OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Reply:</strong> <a href="16750.php">Jeff Squyres (jsquyres): "[OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Talking about thread support ...
<br>
<p>i made a RFC several monthes ago in order to remove the
<br>
--with-threads option from configure
<br>
<p>/* ompi requires pthreads, no more, no less */
<br>
<p>it was accepted, but i could not find the time to implement it ...
<br>
<p>basically, i can see three steps :
<br>
<p>1) remove the --with-threads option from configure, check for pthreads,
<br>
and set the
<br>
OPAL_HAVE_POSIX_THREADS macro to 1
<br>
<p>2) step 1) + remove #ifdef OPAL_HAVE_POSIX_THREADS and remove dead code
<br>
(e.g. #ifndef OPAL_HAVE_POSIX_THREADS)
<br>
<p>3) step 1) + step 2) + remove the OPAL thread abstraction layer
<br>
<p>is it a good idea to implement steps 2) and 3) ?
<br>
i mean, if there is a chance we might support an other threading model
<br>
in the future,
<br>
it might be better to keep some dead code for the time being.
<br>
<p>any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2015/01/07 8:16, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; On Tue, Jan 6, 2015 at 4:25 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My enthusiasm for this was primarily because I thought we had talked about
</span><br>
<span class="quotelev2">&gt;&gt; exactly this issue before (at the last meeting in Chicago?), and decided
</span><br>
<span class="quotelev2">&gt;&gt; that the option is useless -- in part, because it always *must* be enabled
</span><br>
<span class="quotelev2">&gt;&gt; for shared memory correctness.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that incorrect?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; This is correct. We need the memory fences and atomic operations for shared
</span><br>
<span class="quotelev1">&gt; memory in all cases. When thread support is enabled we also need them in
</span><br>
<span class="quotelev1">&gt; various other places. However, this option also turns on the lock prefix
</span><br>
<span class="quotelev1">&gt; for the atomic operations, forcing them to always be atomic. I am not sure
</span><br>
<span class="quotelev1">&gt; that this has no unexpected side-effects on the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 6, 2015, at 4:12 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Successive alteration of the build system made this option less relevant
</span><br>
<span class="quotelev2">&gt;&gt; and especially less meaningful. However, while removing it sounds like a
</span><br>
<span class="quotelev2">&gt;&gt; desirable cleanup, we have to keep in mind that this will enable all locks
</span><br>
<span class="quotelev2">&gt;&gt; and all memory barriers even in cases where they are not necessary (via
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_WANT_SMP_LOCKS).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thus, I do not share the enthusiasm of the others. I would prefer to see
</span><br>
<span class="quotelev2">&gt;&gt; an evaluation of the impact on performance, a patch and a little bit more
</span><br>
<span class="quotelev2">&gt;&gt; than 1/2 a day to react to it (the proposed deadline seems to be today
</span><br>
<span class="quotelev2">&gt;&gt; January 6th) before such a drastic change.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Jan 6, 2015 at 12:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 6, 2015, at 9:04 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 6, 2015, at 11:55 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I agree.  Please remove this config option.
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Why: Use of this option produces incorrect results/undefined behavior
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when any shared memory BTL is in use. Since BTL usage is enabled even
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when using cm for point-to-point this option can never be safely used.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When: Thurs, Jan 6, 2015
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16736.php">http://www.open-mpi.org/community/lists/devel/2015/01/16736.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16737.php">http://www.open-mpi.org/community/lists/devel/2015/01/16737.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16739.php">http://www.open-mpi.org/community/lists/devel/2015/01/16739.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16740.php">http://www.open-mpi.org/community/lists/devel/2015/01/16740.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16741.php">http://www.open-mpi.org/community/lists/devel/2015/01/16741.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16742.php">http://www.open-mpi.org/community/lists/devel/2015/01/16742.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16743.php">http://www.open-mpi.org/community/lists/devel/2015/01/16743.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16747/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16748.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
<li><strong>Previous message:</strong> <a href="16746.php">Ralph Castain: "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<li><strong>In reply to:</strong> <a href="16743.php">George Bosilca: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16750.php">Jeff Squyres (jsquyres): "[OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Reply:</strong> <a href="16750.php">Jeff Squyres (jsquyres): "[OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
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
