<?
$subject_val = "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 13:47:41 2016" -->
<!-- isoreceived="20160429174741" -->
<!-- sent="Fri, 29 Apr 2016 17:47:36 +0000" -->
<!-- isosent="20160429174736" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?" -->
<!-- id="563D549E-F37F-4F72-A39A-C27733B2A6FD_at_cisco.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-29 13:47:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18846.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<li><strong>Previous message:</strong> <a href="18844.php">Howard Pritchard: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<li><strong>In reply to:</strong> <a href="18843.php">Cabral, Matias A: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18847.php">Ralph Castain: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?"</a>
<li><strong>Reply:</strong> <a href="18847.php">Ralph Castain: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matias --
<br>

<br>
You're probably already in pretty good shape.  If you're following master and the v2.x branch (and you are), then your code is already in good shape.
<br>

<br>
I was thinking mostly for users: transitioning from v1.8/v1.10 series to the v2.x series -- what kinds of user-noticeable things will they see?
<br>

<br>

<br>
<span class="quotelev1">&gt; On Apr 29, 2016, at 12:34 PM, Cabral, Matias A &lt;matias.a.cabral_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about for &#226;&#128;&#156;developers that have not been following the transition from 1.x to 2.0?  Particularly myself J. I started contributing to some specific parts (psm2 mtl) and following changes. However, I don&#226;&#128;&#153;t have details of what is changing in 2.0. I see there could be different level of details in the &#226;&#128;&#156;developer&#226;&#128;&#153;s transition guide book&#226;&#128;&#157;, ranging from architectural change to what pieces were moved where.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _MAC
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Joshua Ladd
</span><br>
<span class="quotelev1">&gt; Sent: Friday, April 29, 2016 7:11 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Certainly we need to communicate / advertise / evangelize the improvements in job launch - the largest and most substantial change between the two branches - and provide some best practice guidelines for usage (use direct modex for applications with sparse communication patterns and full modex for dense.) I would be happy to contribute some paragraphs. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Obviously, we also need to communicate, reiterate the need to recompile codes built against the 1.10 series.  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Best, 
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
<span class="quotelev1">&gt; On Thursday, April 28, 2016, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; We're getting darn close to v2.0.0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What &quot;gotchas&quot; do we need to communicate to users?  I.e., what will people upgrading from v1.8.x/v1.10.x be surprised by?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The most obvious one I can think of is mpirun requiring -np when slots are not specified somehow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What else do we need to communicate?  It would be nice to avoid the confusion users experienced regarding affinity functionality/options when upgrading from v1.6 -&gt; v1.8 (because we didn't communicate these changes well, IMHO).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18832.php">http://www.open-mpi.org/community/lists/devel/2016/04/18832.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18843.php">http://www.open-mpi.org/community/lists/devel/2016/04/18843.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18846.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<li><strong>Previous message:</strong> <a href="18844.php">Howard Pritchard: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<li><strong>In reply to:</strong> <a href="18843.php">Cabral, Matias A: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18847.php">Ralph Castain: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?"</a>
<li><strong>Reply:</strong> <a href="18847.php">Ralph Castain: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?"</a>
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
