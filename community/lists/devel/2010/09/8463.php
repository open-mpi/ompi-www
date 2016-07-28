<?
$subject_val = "Re: [OMPI devel] openib btl - fatal errors don't abort the job";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  7 16:32:28 2010" -->
<!-- isoreceived="20100907203228" -->
<!-- sent="Tue, 07 Sep 2010 16:32:22 -0400" -->
<!-- isosent="20100907203222" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl - fatal errors don't abort the job" -->
<!-- id="7A54D672-2B3B-4FC1-AB79-254C05490B8A_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="210353C8-9072-46E2-BBE9-2518906214AE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib btl - fatal errors don't abort the job<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-07 16:32:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8464.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8462.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8449.php">Jeff Squyres: "Re: [OMPI devel] openib btl - fatal errors don't abort the job"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 3, 2010, at 8:14 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 1, 2010, at 4:47 PM, Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was wondering what the logic is behind allowing an MPI job to continue in the presence of a fatal qp error?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's a feature...?
</span><br>
<p>The idea was that in some near future we will be able to recover from such kind of error. (reopen qp, etc...)
<br>
But the feature has never been implemented for ompi. 
<br>
(BTW, not sure that it is tree anymore, since SUN/ORACLE pushed some code, that supposed to handle such cases...)
<br>
<p>So, maybe it worth to handle it like device fatal case - abort everything.
<br>
<p>Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8464.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8462.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8449.php">Jeff Squyres: "Re: [OMPI devel] openib btl - fatal errors don't abort the job"</a>
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
