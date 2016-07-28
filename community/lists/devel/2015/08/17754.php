<?
$subject_val = "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 15 08:12:27 2015" -->
<!-- isoreceived="20150815121227" -->
<!-- sent="Sat, 15 Aug 2015 12:12:24 +0000" -->
<!-- isosent="20150815121224" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T" -->
<!-- id="9F0917B4-AD6E-4646-B62A-81D814283E87_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="587D9E3A-65DE-4213-AB2A-293BFC10D0B2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-15 08:12:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17755.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="17753.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>In reply to:</strong> <a href="17753.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 15, 2015, at 8:05 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. The current implementation says that the cvar's *value* should not be returned, but perhaps we should be returning its *info* (even after the cvar is no longer available).  That's a good point -- we might need to fix that.  I'll open a github issue.
</span><br>
<p>Actually, no -- after re-reading the example you cited (MPI 3.1, example 14.4 on pages 576-577), I agree: we're already doing the Right thing.
<br>
<p>No need for a github issue.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17755.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>Previous message:</strong> <a href="17753.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
<li><strong>In reply to:</strong> <a href="17753.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] open mpi 1.8.6. MPI_T"</a>
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
