<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 11 10:24:07 2013" -->
<!-- isoreceived="20130611142407" -->
<!-- sent="Tue, 11 Jun 2013 14:24:02 +0000" -->
<!-- isosent="20130611142402" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F67A1D1_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="776EF90C-9D26-4585-ADFB-721D2BA59FE1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-11 10:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12450.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>Previous message:</strong> <a href="12448.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] glibc malloc hooks going away"</a>
<li><strong>Maybe in reply to:</strong> <a href="12442.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 10, 2013, at 9:05 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That being said, that release note was for glibc 2.14.  I just downloaded and built 2.17; it looks like a) the hooks are still there, and b) they're still installed by default.
</span><br>
<p>Ah -- I see what happened.  glibc marked the hook interfaces with compiler attributes for &quot;deprecated&quot; starting with glibc 2.14.
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
<li><strong>Next message:</strong> <a href="12450.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>Previous message:</strong> <a href="12448.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] glibc malloc hooks going away"</a>
<li><strong>Maybe in reply to:</strong> <a href="12442.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
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
