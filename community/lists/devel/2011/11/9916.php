<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  7 10:37:30 2011" -->
<!-- isoreceived="20111107153730" -->
<!-- sent="Mon, 7 Nov 2011 10:37:27 -0500" -->
<!-- isosent="20111107153727" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445" -->
<!-- id="93B5638B-6F9A-4683-8F76-573F0C219AED_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4a43b5e7ac95c173a123cff38b9c965e_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-07 10:37:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<li><strong>Previous message:</strong> <a href="9915.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>In reply to:</strong> <a href="9915.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9921.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9921.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9922.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2011, at 10:16 AM, Nathan T. Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Yes, and I completely agree. I was simply trying to keep it consistent in
</span><br>
<span class="quotelev1">&gt; case there is something I don't know about the heterogeneous case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I increased the size of the 64 bit member because there is no uint128 type.
</span><br>
<p>Ah, I see.
<br>
<p>I would put the other sizes back, at a minimum.  There should be no need to increase those.
<br>
<p>George -- comments?  Should this be a new key fields (128, with 2 uint64_t's)?  If this is only for large messages, is the extra 8 bytes a concern?
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
<li><strong>Next message:</strong> <a href="9917.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25450"</a>
<li><strong>Previous message:</strong> <a href="9915.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>In reply to:</strong> <a href="9915.php">Nathan T. Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9921.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9921.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Reply:</strong> <a href="9922.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
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
