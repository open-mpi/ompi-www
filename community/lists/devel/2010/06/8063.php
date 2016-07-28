<?
$subject_val = "Re: [OMPI devel] v1.5 .so version numbers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  8 07:30:12 2010" -->
<!-- isoreceived="20100608113012" -->
<!-- sent="Tue, 8 Jun 2010 07:30:07 -0400" -->
<!-- isosent="20100608113007" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 .so version numbers" -->
<!-- id="8789DCE2-5707-46BB-B05A-DB5377CB4F97_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6F1004B9-0C2B-4657-9332-89A601D96429_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5 .so version numbers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-08 07:30:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8064.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>Previous message:</strong> <a href="8062.php">George Bosilca: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<li><strong>In reply to:</strong> <a href="8062.php">George Bosilca: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 7, 2010, at 10:29 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; How did we ended up with the following situation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -libmca_common_sm_so_version=1:0:0
</span><br>
<span class="quotelev1">&gt; -libmca_common_mx_so_version=0:0:0
</span><br>
<span class="quotelev1">&gt; +libmca_common_sm_so_version=2:0:0
</span><br>
<span class="quotelev1">&gt; +libmca_common_mx_so_version=1:0:0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where the same type of component (common sm and mx here) have different version numbers?
</span><br>
<p>I forget the exact issue -- at some point during the 1.3/1.4 series, we made changes to libcommon_sm.so.  IIRC, the interfaces entirely changed.  Hence, the first number went to 1.
<br>
<p>Similar changes did not happen to libcommon_mx.so, so it stayed 0:0:0.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8064.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>Previous message:</strong> <a href="8062.php">George Bosilca: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<li><strong>In reply to:</strong> <a href="8062.php">George Bosilca: "Re: [OMPI devel] v1.5 .so version numbers"</a>
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
