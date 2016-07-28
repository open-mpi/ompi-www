<?
$subject_val = "Re: [OMPI devel] openib max_cqe";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  5 15:54:03 2012" -->
<!-- isoreceived="20120705195403" -->
<!-- sent="Thu, 5 Jul 2012 15:53:52 -0400" -->
<!-- isosent="20120705195352" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib max_cqe" -->
<!-- id="86EAE59E-D6F9-4A6D-88CA-E860A7243F1A_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FF5DC6D.8080800_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib max_cqe<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-05 15:53:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11236.php">Jeff Squyres: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Previous message:</strong> <a href="11234.php">TERRY DONTJE: "[OMPI devel] openib max_cqe"</a>
<li><strong>In reply to:</strong> <a href="11234.php">TERRY DONTJE: "[OMPI devel] openib max_cqe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11236.php">Jeff Squyres: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Reply:</strong> <a href="11236.php">Jeff Squyres: "Re: [OMPI devel] openib max_cqe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; So if I do a run of -np 2 across two separate node than the use of the max_cqe of my ib device (4194303) is ok.  Once I go beyond 1 process on the node I start getting the memlocked limits message.  So how much memory does a cqe take?  Is it 1k by any chance?  I ask this because the machine I am running on has 4GB of memory and so I am wondering if I just don't have enough backing memory and if that is so I am wondering how commone of a case this may be?
</span><br>
<p>I mentioned on the call that for Mellanox devices (+OFA verbs) this resource is really cheap. Do you run mellanox hca + OFA verbs ?
<br>
Regards,
<br>
Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11236.php">Jeff Squyres: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Previous message:</strong> <a href="11234.php">TERRY DONTJE: "[OMPI devel] openib max_cqe"</a>
<li><strong>In reply to:</strong> <a href="11234.php">TERRY DONTJE: "[OMPI devel] openib max_cqe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11236.php">Jeff Squyres: "Re: [OMPI devel] openib max_cqe"</a>
<li><strong>Reply:</strong> <a href="11236.php">Jeff Squyres: "Re: [OMPI devel] openib max_cqe"</a>
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
