<?
$subject_val = "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 13:21:47 2016" -->
<!-- isoreceived="20160429172147" -->
<!-- sent="Fri, 29 Apr 2016 11:21:45 -0600" -->
<!-- isosent="20160429172145" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?" -->
<!-- id="CAF1Cqj7vGuaWUZ_T0Qxxzty=q6Fb9jSQUV13w1D_MawwbrnFoQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="39196F20B4590A4A8337B6A6F7F0FD8D85402205_at_FMSMSX102.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-29 13:21:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18845.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?"</a>
<li><strong>Previous message:</strong> <a href="18843.php">Cabral, Matias A: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<li><strong>In reply to:</strong> <a href="18843.php">Cabral, Matias A: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18846.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<li><strong>Reply:</strong> <a href="18846.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>checkpoint/restart is not supported in this release.
<br>
<p>Does this release work with totalview?  I recall we had some problems,
<br>
and do not remember if they were resolved.
<br>
<p>We may also want to clarify if any PML/MTLs are experimental in this
<br>
release.
<br>
<p>MPI_THREAD_MULTIPLE support.
<br>
<p><p>Howard
<br>
<p><p>2016-04-29 10:34 GMT-06:00 Cabral, Matias A &lt;matias.a.cabral_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; How about for &#226;&#128;&#156;developers that have not been following the transition from
</span><br>
<span class="quotelev1">&gt; 1.x to 2.0?  Particularly myself J. I started contributing to some
</span><br>
<span class="quotelev1">&gt; specific parts (psm2 mtl) and following changes. However, I don&#226;&#128;&#153;t have
</span><br>
<span class="quotelev1">&gt; details of what is changing in 2.0. I see there could be different level of
</span><br>
<span class="quotelev1">&gt; details in the &#226;&#128;&#156;developer&#226;&#128;&#153;s transition guide book&#226;&#128;&#157;, ranging from
</span><br>
<span class="quotelev1">&gt; architectural change to what pieces were moved where.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _MAC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Joshua
</span><br>
<span class="quotelev1">&gt; Ladd
</span><br>
<span class="quotelev1">&gt; *Sent:* Friday, April 29, 2016 7:11 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] 2.0.0 is coming: what do we need to
</span><br>
<span class="quotelev1">&gt; communicate to users?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Certainly we need to communicate / advertise / evangelize the improvements
</span><br>
<span class="quotelev1">&gt; in job launch - the largest and most substantial change between the two
</span><br>
<span class="quotelev1">&gt; branches - and provide some best practice guidelines for usage (use direct
</span><br>
<span class="quotelev1">&gt; modex for applications with sparse communication patterns and full modex
</span><br>
<span class="quotelev1">&gt; for dense.) I would be happy to contribute some paragraphs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously, we also need to communicate, reiterate the need to recompile
</span><br>
<span class="quotelev1">&gt; codes built against the 1.10 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, April 28, 2016, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're getting darn close to v2.0.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What &quot;gotchas&quot; do we need to communicate to users?  I.e., what will people
</span><br>
<span class="quotelev1">&gt; upgrading from v1.8.x/v1.10.x be surprised by?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The most obvious one I can think of is mpirun requiring -np when slots are
</span><br>
<span class="quotelev1">&gt; not specified somehow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What else do we need to communicate?  It would be nice to avoid the
</span><br>
<span class="quotelev1">&gt; confusion users experienced regarding affinity functionality/options when
</span><br>
<span class="quotelev1">&gt; upgrading from v1.6 -&gt; v1.8 (because we didn't communicate these changes
</span><br>
<span class="quotelev1">&gt; well, IMHO).
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18832.php">http://www.open-mpi.org/community/lists/devel/2016/04/18832.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18843.php">http://www.open-mpi.org/community/lists/devel/2016/04/18843.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18844/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18845.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?"</a>
<li><strong>Previous message:</strong> <a href="18843.php">Cabral, Matias A: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<li><strong>In reply to:</strong> <a href="18843.php">Cabral, Matias A: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18846.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<li><strong>Reply:</strong> <a href="18846.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
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
