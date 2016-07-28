<?
$subject_val = "Re: [OMPI devel] heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 16:53:16 2008" -->
<!-- isoreceived="20080605205316" -->
<!-- sent="Thu, 5 Jun 2008 16:53:05 -0400 (EDT)" -->
<!-- isosent="20080605205305" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] heterogeneous support" -->
<!-- id="Pine.LNX.4.64.0806051652060.24150_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C092C848-0593-49A7-BAA0-E3A04AEC2BA0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] heterogeneous support<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 16:53:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4099.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="4097.php">Jeff Squyres: "[OMPI devel] heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="4097.php">Jeff Squyres: "[OMPI devel] heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4099.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="4099.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 5 Jun 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I just noticed that heterogeneous MPI support is enabled by default.
</span><br>
<span class="quotelev1">&gt; Do we really want this?  Doesn't it add a little overhead (probably
</span><br>
<span class="quotelev1">&gt; noticeable on shared memory)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd be comfortable with users specifically having to enable
</span><br>
<span class="quotelev1">&gt; heterogeneous support via configure and having [slightly] better out-
</span><br>
<span class="quotelev1">&gt; of-the-box performance for the common (homogeneous) case.
</span><br>
<p>I think it was initially on by default because we didn't have a good way 
<br>
of detecting that the job was heterogeneous when that was setup.  I 
<br>
believe we do now, so it probably makes sense to change the default.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4099.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="4097.php">Jeff Squyres: "[OMPI devel] heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="4097.php">Jeff Squyres: "[OMPI devel] heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4099.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="4099.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous support"</a>
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
