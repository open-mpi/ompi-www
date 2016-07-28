<?
$subject_val = "Re: [OMPI devel] memory binding";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 16:51:20 2010" -->
<!-- isoreceived="20101215215120" -->
<!-- sent="Thu, 16 Dec 2010 08:51:08 +1100" -->
<!-- isosent="20101215215108" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory binding" -->
<!-- id="4D09384C.9010304_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4BEE6E6-3947-4DC7-9875-F2C74A8EEACB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] memory binding<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 16:51:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8778.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>Previous message:</strong> <a href="8776.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8774.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8778.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>Reply:</strong> <a href="8778.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/14/2010 09:06 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should we add an MCA parameter to switch between BIND and PREFERRED, and perhaps default to BIND?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure BIND should be the default for everyone - memory imbalanced jobs might
</span><br>
<span class="quotelev2">&gt;&gt; page badly in this case.  But, yes, we would like an MCA to choose and allow sites
</span><br>
<span class="quotelev2">&gt;&gt; to select BIND as their default if they wish.  An mpirun option like --bind-to-mem
</span><br>
<span class="quotelev2">&gt;&gt; would need a preferred/affinity alternative and I'm not sure how of a nice notation/
</span><br>
<span class="quotelev2">&gt;&gt; syntax for that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --mca maffinity_libnuma_policy bind|preferred
</span><br>
<p>Yep, that appears to meet the Open MPI standards of maximal verbosity. :-)
<br>
<p>Anything is OK as long as the functionality is there.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can do that for the v1.5 series, if you'd like.  I can't really do it for v1.4 because that series is in &quot;bug fix only&quot; mode.  However, given that we're revamping all of our affinity support, I don't know what the future interface will look like -- so the name may change, or ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That's all fine - much appreciated.
<br>
<p>Cheers,
<br>
David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8778.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>Previous message:</strong> <a href="8776.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8774.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8778.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>Reply:</strong> <a href="8778.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
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
