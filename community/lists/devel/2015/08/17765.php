<?
$subject_val = "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 17:09:25 2015" -->
<!-- isoreceived="20150819210925" -->
<!-- sent="Wed, 19 Aug 2015 21:09:22 +0000" -->
<!-- isosent="20150819210922" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?" -->
<!-- id="5FC731D7-0947-43D3-94B6-3EFC46ADABB6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEGOymB_ExX3C7PbAGd07uWL6HOu8UuyGVeMDJFEWu-F5GE4TA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-19 17:09:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17766.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<li><strong>Previous message:</strong> <a href="17764.php">Todd Kordenbrock: "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>In reply to:</strong> <a href="17764.php">Todd Kordenbrock: "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17769.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Reply:</strong> <a href="17769.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 19, 2015, at 5:01 PM, Todd Kordenbrock &lt;thkgcode_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The linker error that Paul posted isn't an OFI MTL specific linker line.  It is the linker line for otfmerge-mpi from VampirTrace package.  Portals4 just shows up as an external library the same as OFI or torque.
</span><br>
<p>Ah, right you are -- and those are there because of --enable-static --disable-shared.  So: all is good there.
<br>
<p><span class="quotelev1">&gt; As far as the 3 occurrences of the Portals4 path in that linker line, it breaks down as one -L and two -rpath.  I think the -rpath shows up twice because Portals4 depends on libev.so which is installed in the same place as libportals.so and you get one -rpath for each lib.  I'll see if that can be deduped.
</span><br>
<p>K.  Not a huge deal, but would be nice to fix up.
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
<li><strong>Next message:</strong> <a href="17766.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 build failure Solaris/x86 + gcc"</a>
<li><strong>Previous message:</strong> <a href="17764.php">Todd Kordenbrock: "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>In reply to:</strong> <a href="17764.php">Todd Kordenbrock: "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17769.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
<li><strong>Reply:</strong> <a href="17769.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - cannot build libfabic support static?"</a>
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
