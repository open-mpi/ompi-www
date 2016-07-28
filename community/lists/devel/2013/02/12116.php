<?
$subject_val = "Re: [OMPI devel] hwloc using libpci: GPL issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 09:45:00 2013" -->
<!-- isoreceived="20130206144500" -->
<!-- sent="Wed, 06 Feb 2013 15:44:55 +0100" -->
<!-- isosent="20130206144455" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hwloc using libpci: GPL issue" -->
<!-- id="51126C67.303_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CC963B_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hwloc using libpci: GPL issue<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-06 09:44:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12117.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc using libpci: GPL issue"</a>
<li><strong>Previous message:</strong> <a href="12115.php">Jeff Squyres (jsquyres): "[OMPI devel] hwloc using libpci: GPL issue"</a>
<li><strong>In reply to:</strong> <a href="12115.php">Jeff Squyres (jsquyres): "[OMPI devel] hwloc using libpci: GPL issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12117.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc using libpci: GPL issue"</a>
<li><strong>Reply:</strong> <a href="12117.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc using libpci: GPL issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you already use hwloc's PCI objects in OMPI v1.7 ?
<br>
<p>Brice
<br>
<p><p><p><p>Le 06/02/2013 15:39, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; BEFORE YOU PANIC: this only affects Open MPI v1.7 (which is not yet released) and the OMPI SVN trunk (which is also, obviously, not released).  ***OMPI v1.6.x is unaffected/not GPL tainted***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the full details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was just discovered yesterday that libpci, which hwloc links against for PCI device detection, is GPL (not LGPL).  IANAL / this is not legal advice, but my humble understanding is that this introduces GPL taint to hwloc.  And since OMPI links in hwloc, it is also tainted.  This is problematic for vendors who want to ship binaries linked against Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * The as-yet-unreleased OMPI v1.7 (and trunk) embeds hwloc v1.5.1, and utilizes hwloc PCI device detection (thereby linking in libpci).  Bad.
</span><br>
<span class="quotelev1">&gt;  * The OMPI v1.6 series embeds hwloc v1.3.2, and explicitly disables hwloc's PCI device detection (thereby NOT linking in libpci) because of compatibility problems with Solaris.  Good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, from a released-version perspective, I think OMPI is in the clear.  However, we can't release 1.7 until this is fixed.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The good news is that within hours of discovering the issue, the hwloc guys issued a preliminary patch to change hwloc to use libpciaccess (vs. libpci), which is BSD-licensed.  They are working on firming up this patch in order to release new versions of hwloc to remove the default-build options of libpci/GPL taint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will update OMPI's SVN trunk and submit a v1.7 CMR when this is ready.  I imagine it will take at least a few days.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12117.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc using libpci: GPL issue"</a>
<li><strong>Previous message:</strong> <a href="12115.php">Jeff Squyres (jsquyres): "[OMPI devel] hwloc using libpci: GPL issue"</a>
<li><strong>In reply to:</strong> <a href="12115.php">Jeff Squyres (jsquyres): "[OMPI devel] hwloc using libpci: GPL issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12117.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc using libpci: GPL issue"</a>
<li><strong>Reply:</strong> <a href="12117.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc using libpci: GPL issue"</a>
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
