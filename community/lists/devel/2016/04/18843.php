<?
$subject_val = "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 12:34:40 2016" -->
<!-- isoreceived="20160429163440" -->
<!-- sent="Fri, 29 Apr 2016 16:34:20 +0000" -->
<!-- isosent="20160429163420" -->
<!-- name="Cabral, Matias A" -->
<!-- email="matias.a.cabral_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?" -->
<!-- id="39196F20B4590A4A8337B6A6F7F0FD8D85402205_at_FMSMSX102.amr.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAG4F6z-vu2ur8t416XLi4i7mD8J5aCzYxaLq5oJM4=SjTQFE4A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?<br>
<strong>From:</strong> Cabral, Matias A (<em>matias.a.cabral_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-29 12:34:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18844.php">Howard Pritchard: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<li><strong>Previous message:</strong> <a href="18842.php">Ralph Castain: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>In reply to:</strong> <a href="18841.php">Joshua Ladd: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18844.php">Howard Pritchard: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<li><strong>Reply:</strong> <a href="18844.php">Howard Pritchard: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<li><strong>Reply:</strong> <a href="18845.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about for &#226;&#128;&#156;developers that have not been following the transition from 1.x to 2.0?  Particularly myself &#226;&#152;&#186;. I started contributing to some specific parts (psm2 mtl) and following changes. However, I don&#226;&#128;&#153;t have details of what is changing in 2.0. I see there could be different level of details in the &#226;&#128;&#156;developer&#226;&#128;&#153;s transition guide book&#226;&#128;&#157;, ranging from architectural change to what pieces were moved where.
<br>

<br>
Thanks,
<br>

<br>
_MAC
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Joshua Ladd
<br>
Sent: Friday, April 29, 2016 7:11 AM
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Subject: Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?
<br>

<br>
Certainly we need to communicate / advertise / evangelize the improvements in job launch - the largest and most substantial change between the two branches - and provide some best practice guidelines for usage (use direct modex for applications with sparse communication patterns and full modex for dense.) I would be happy to contribute some paragraphs.
<br>

<br>
Obviously, we also need to communicate, reiterate the need to recompile codes built against the 1.10 series.
<br>

<br>
Best,
<br>

<br>
Josh
<br>

<br>

<br>

<br>
On Thursday, April 28, 2016, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
We're getting darn close to v2.0.0.
<br>

<br>
What &quot;gotchas&quot; do we need to communicate to users?  I.e., what will people upgrading from v1.8.x/v1.10.x be surprised by?
<br>

<br>
The most obvious one I can think of is mpirun requiring -np when slots are not specified somehow.
<br>

<br>
What else do we need to communicate?  It would be nice to avoid the confusion users experienced regarding affinity functionality/options when upgrading from v1.6 -&gt; v1.8 (because we didn't communicate these changes well, IMHO).
<br>

<br>
--
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]&lt;javascript:;&gt;
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;javascript:;&gt;
<br>
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18832.php">http://www.open-mpi.org/community/lists/devel/2016/04/18832.php</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18843/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18844.php">Howard Pritchard: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<li><strong>Previous message:</strong> <a href="18842.php">Ralph Castain: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>In reply to:</strong> <a href="18841.php">Joshua Ladd: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18844.php">Howard Pritchard: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<li><strong>Reply:</strong> <a href="18844.php">Howard Pritchard: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<li><strong>Reply:</strong> <a href="18845.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?"</a>
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
