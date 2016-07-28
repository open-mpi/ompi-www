<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] glibc malloc hooks going away";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 11 10:11:07 2013" -->
<!-- isoreceived="20130611141107" -->
<!-- sent="Tue, 11 Jun 2013 14:10:57 +0000" -->
<!-- isosent="20130611141057" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] glibc malloc hooks going away" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F679FDF_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyY=8qZ86BndGeEyWMirDRFQPSJugyRipH4bM8o-roFE0w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] glibc malloc hooks going away<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-11 10:10:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12448.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] glibc malloc hooks going away"</a>
<li><strong>Previous message:</strong> <a href="12446.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] glibc malloc hooks going away"</a>
<li><strong>In reply to:</strong> <a href="12446.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] glibc malloc hooks going away"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12448.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] glibc malloc hooks going away"</a>
<li><strong>Reply:</strong> <a href="12448.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] glibc malloc hooks going away"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 11, 2013, at 9:37 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; ubuntu12
</span><br>
<span class="quotelev1">&gt; fedora16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the hooks are there, but marked as &quot;deprecated&quot;
</span><br>
<p>Does that mean they come up with a compiler warning?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 11, 2013 at 4:05 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Jun 10, 2013, at 10:29 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; At least they've finally come to that conclusion.  I look forward to not
</span><br>
<span class="quotelev2">&gt; &gt; shipping a memory allocator with our communication library ;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +1 on that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, that release note was for glibc 2.14.  I just downloaded and built 2.17; it looks like a) the hooks are still there, and b) they're still installed by default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mellanox: did you find a distro that disables the glibc hooks by default?
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12448.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] glibc malloc hooks going away"</a>
<li><strong>Previous message:</strong> <a href="12446.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] glibc malloc hooks going away"</a>
<li><strong>In reply to:</strong> <a href="12446.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] glibc malloc hooks going away"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12448.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] glibc malloc hooks going away"</a>
<li><strong>Reply:</strong> <a href="12448.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] glibc malloc hooks going away"</a>
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
