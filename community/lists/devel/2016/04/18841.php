<?
$subject_val = "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 10:10:58 2016" -->
<!-- isoreceived="20160429141058" -->
<!-- sent="Fri, 29 Apr 2016 10:10:57 -0400" -->
<!-- isosent="20160429141057" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?" -->
<!-- id="CAG4F6z-vu2ur8t416XLi4i7mD8J5aCzYxaLq5oJM4=SjTQFE4A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A25FFD6F-400E-4716-9AFF-5E8163D642CF_at_cisco.com" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-29 10:10:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18842.php">Ralph Castain: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Previous message:</strong> <a href="18840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ENOSYS used incorrect in legacy drivers"</a>
<li><strong>In reply to:</strong> <a href="18832.php">Jeff Squyres (jsquyres): "[OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18843.php">Cabral, Matias A: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<li><strong>Reply:</strong> <a href="18843.php">Cabral, Matias A: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Certainly we need to communicate / advertise / evangelize the improvements
<br>
in job launch - the largest and most substantial change between the two
<br>
branches - and provide some best practice guidelines for usage (use direct
<br>
modex for applications with sparse communication patterns and full modex
<br>
for dense.) I would be happy to contribute some paragraphs.
<br>
<p>Obviously, we also need to communicate, reiterate the need to recompile
<br>
codes built against the 1.10 series.
<br>
<p>Best,
<br>
<p>Josh
<br>
<p><p><p>On Thursday, April 28, 2016, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; We're getting darn close to v2.0.0.
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
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
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
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18832.php">http://www.open-mpi.org/community/lists/devel/2016/04/18832.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18841/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18842.php">Ralph Castain: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>Previous message:</strong> <a href="18840.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ENOSYS used incorrect in legacy drivers"</a>
<li><strong>In reply to:</strong> <a href="18832.php">Jeff Squyres (jsquyres): "[OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18843.php">Cabral, Matias A: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<li><strong>Reply:</strong> <a href="18843.php">Cabral, Matias A: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
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
