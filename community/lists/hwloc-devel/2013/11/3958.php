<?
$subject_val = "Re: [hwloc-devel] Relationship between Cario and X11";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  1 11:54:46 2013" -->
<!-- isoreceived="20131101155446" -->
<!-- sent="Fri, 1 Nov 2013 16:54:42 +0100" -->
<!-- isosent="20131101155442" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Relationship between Cario and X11" -->
<!-- id="20131101155442.GA19265_at_type.youpi.perso.aquilenet.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F9A35DA_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-11-01 11:54:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3959.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Previous message:</strong> <a href="3957.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>In reply to:</strong> <a href="3957.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3959.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3959.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres), le Fri 01 Nov 2013 16:33:41 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; There's some funny m4 logic in the CHECK_HEADERS for X11.  Let me make sure I understand the intent:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - X11/Xlib.h: this file is required for X11 support
</span><br>
<span class="quotelev1">&gt; - X11/Xutil.h X11/keysym.h: these files are optional for X11 support (i.e., we can still build X11 support without them, but if we have them, there's extra X11 goodies that can be used)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that correct?  Or do we *require* all 3 header files for X11 support?
</span><br>
<p>We could avoid Xutil.h and keysym.h by disabling the case KeyPress part,
<br>
but I'd rather not: people will wonder why they don't have keyboard
<br>
shortcut, and finding out from ./configure output will not be easy.
<br>
When one has Xlib.h, having Xutil.h and keysym.h is not really far
<br>
anyway.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3959.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Previous message:</strong> <a href="3957.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>In reply to:</strong> <a href="3957.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3959.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
<li><strong>Reply:</strong> <a href="3959.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Relationship between Cario and X11"</a>
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
