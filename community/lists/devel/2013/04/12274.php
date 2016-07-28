<?
$subject_val = "Re: [OMPI devel] Using external libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 17 09:02:33 2013" -->
<!-- isoreceived="20130417130233" -->
<!-- sent="Wed, 17 Apr 2013 13:02:28 +0000" -->
<!-- isosent="20130417130228" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using external libevent" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4403AEF5_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="516E2391.2000202_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Using external libevent<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-17 09:02:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12275.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12273.php">Orion Poplawski: "[OMPI devel] Using external libevent"</a>
<li><strong>In reply to:</strong> <a href="12273.php">Orion Poplawski: "[OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12275.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 16, 2013, at 9:22 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm starting to take a look at updating openmpi in Fedora to 1.7.  It looks like openmpi is now bundling a copy of libevent, which is generally forbidden in Fedora.  
</span><br>
<p>FWIW, we've always bundled libevent -- ever since 1.0.  It was made a little more obvious in 1.7 because we shifted some things around in the build system, but it's always been there.
<br>
<p><span class="quotelev1">&gt; Is there any work being done on allowing one to compile against an external libevent library?
</span><br>
<p>We have not done this because OMPI is fairly tied to the specific version of libevent that is bundled.
<br>
<p>Given that OMPI has *always* bundled libevent, how terrible would it be to just let that continue?
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
<li><strong>Next message:</strong> <a href="12275.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12273.php">Orion Poplawski: "[OMPI devel] Using external libevent"</a>
<li><strong>In reply to:</strong> <a href="12273.php">Orion Poplawski: "[OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12275.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
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
