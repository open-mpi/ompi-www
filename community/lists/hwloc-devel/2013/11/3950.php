<?
$subject_val = "Re: [hwloc-devel] Relationship between Cario and X11";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  1 10:08:04 2013" -->
<!-- isoreceived="20131101140804" -->
<!-- sent="Fri, 1 Nov 2013 15:07:59 +0100" -->
<!-- isosent="20131101140759" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Relationship between Cario and X11" -->
<!-- id="20131101140759.GV7325_at_type.youpi.perso.aquilenet.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F9A2F59_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Relationship between Cario and X11<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-01 10:07:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3951.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Previous message:</strong> <a href="3949.php">Jeff Squyres (jsquyres): "[hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>In reply to:</strong> <a href="3949.php">Jeff Squyres (jsquyres): "[hwloc-devel] Relationship between Cario and X11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3951.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3951.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Jeff Squyres (jsquyres), le Fri 01 Nov 2013 14:59:03 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I notice that we have an explicit dependency between Cairo and X11 in configure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any reason for this?
</span><br>
<p>I think if there was any it's now gone.
<br>
<p><span class="quotelev1">&gt; Indeed, I manually disabled this extra check in configure, and I can still seem to use Cairo in lstopo (e.g., generate PDFs and PNGs).
</span><br>
<p>So the source code is already fine with it, good!
<br>
<p><span class="quotelev1">&gt; Are there some platforms where linking Cairo depends on X11?
</span><br>
<p>Possibly, but I believe it is hidden, or at least all handled by
<br>
pkg-config, and so we don't care. Of course we need X11 for our x11
<br>
backend (which also happens to be using cairo).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3951.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Previous message:</strong> <a href="3949.php">Jeff Squyres (jsquyres): "[hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>In reply to:</strong> <a href="3949.php">Jeff Squyres (jsquyres): "[hwloc-devel] Relationship between Cario and X11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3951.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3951.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
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
