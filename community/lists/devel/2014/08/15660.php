<?
$subject_val = "Re: [OMPI devel] RFC: Merge PMIx branch to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 10:14:22 2014" -->
<!-- isoreceived="20140816141422" -->
<!-- sent="Sat, 16 Aug 2014 07:14:14 -0700" -->
<!-- isosent="20140816141414" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Merge PMIx branch to trunk" -->
<!-- id="5B024B07-7CA1-4DDE-9B1E-9BD7028A8589_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="770EAB93-D23B-48BA-8AB8-98CBA878C3F3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Merge PMIx branch to trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-16 10:14:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15661.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>Previous message:</strong> <a href="15659.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<li><strong>In reply to:</strong> <a href="15659.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 16, 2014, at 5:00 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 14, 2014, at 10:44 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * Replaced the current ORTE grpcomm daemon-based collective operation with an integrated PMIx server, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph: can you explain what the &quot;integrated PMIx server&quot; is?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that something within the orted, or is that a new per-server service that needs to be started when the server boots up?
</span><br>
<p>&quot;Integrated&quot; means &quot;within the orted&quot;
<br>
<p>The point I was trying to make is that PMI (of whatever flavor) requires a server. Some implement that as a separate daemon, but we are implementing it as an integrated service within the orted itself.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15659.php">http://www.open-mpi.org/community/lists/devel/2014/08/15659.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15661.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>Previous message:</strong> <a href="15659.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<li><strong>In reply to:</strong> <a href="15659.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Merge PMIx branch to trunk"</a>
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
