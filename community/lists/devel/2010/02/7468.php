<?
$subject_val = "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 13:05:36 2010" -->
<!-- isoreceived="20100223180536" -->
<!-- sent="Tue, 23 Feb 2010 13:05:29 -0500" -->
<!-- isosent="20100223180529" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning" -->
<!-- id="7796B622-3040-40D7-AFEB-6BB15E5A7C45_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="236B18D117B37C449E470367EFCEC00303B6F146777E_at_EXCHMB.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-23 13:05:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7469.php">Greg Watson: "[OMPI devel] question about pids"</a>
<li><strong>Previous message:</strong> <a href="7467.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7467.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7470.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 23, 2010, at 12:58 PM, Graham, Richard L. wrote:
<br>
<p><span class="quotelev1">&gt; Will we still have the option to build individual libraries, is we opt for this ?
</span><br>
<p>You will still have individual libraries; it's just that libopen-rte will include libopen-pal, and libmpi will include libopen-rte (which will include libopen-pal).
<br>
<p>Do you need something different?
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
<li><strong>Next message:</strong> <a href="7469.php">Greg Watson: "[OMPI devel] question about pids"</a>
<li><strong>Previous message:</strong> <a href="7467.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7467.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7470.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
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
