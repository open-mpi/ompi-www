<?
$subject_val = "[OMPI devel] hwloc using libpci: GPL issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 09:39:05 2013" -->
<!-- isoreceived="20130206143905" -->
<!-- sent="Wed, 6 Feb 2013 14:39:00 +0000" -->
<!-- isosent="20130206143900" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] hwloc using libpci: GPL issue" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC963B_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] hwloc using libpci: GPL issue<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-06 09:39:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12116.php">Brice Goglin: "Re: [OMPI devel] hwloc using libpci: GPL issue"</a>
<li><strong>Previous message:</strong> <a href="12114.php">George Bosilca: "Re: [OMPI devel] MCA variable system slides and notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12116.php">Brice Goglin: "Re: [OMPI devel] hwloc using libpci: GPL issue"</a>
<li><strong>Reply:</strong> <a href="12116.php">Brice Goglin: "Re: [OMPI devel] hwloc using libpci: GPL issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BEFORE YOU PANIC: this only affects Open MPI v1.7 (which is not yet released) and the OMPI SVN trunk (which is also, obviously, not released).  ***OMPI v1.6.x is unaffected/not GPL tainted***
<br>
<p>Here's the full details:
<br>
<p>It was just discovered yesterday that libpci, which hwloc links against for PCI device detection, is GPL (not LGPL).  IANAL / this is not legal advice, but my humble understanding is that this introduces GPL taint to hwloc.  And since OMPI links in hwloc, it is also tainted.  This is problematic for vendors who want to ship binaries linked against Open MPI.
<br>
<p>&nbsp;* The as-yet-unreleased OMPI v1.7 (and trunk) embeds hwloc v1.5.1, and utilizes hwloc PCI device detection (thereby linking in libpci).  Bad.
<br>
&nbsp;* The OMPI v1.6 series embeds hwloc v1.3.2, and explicitly disables hwloc's PCI device detection (thereby NOT linking in libpci) because of compatibility problems with Solaris.  Good.
<br>
<p>Hence, from a released-version perspective, I think OMPI is in the clear.  However, we can't release 1.7 until this is fixed.  
<br>
<p>The good news is that within hours of discovering the issue, the hwloc guys issued a preliminary patch to change hwloc to use libpciaccess (vs. libpci), which is BSD-licensed.  They are working on firming up this patch in order to release new versions of hwloc to remove the default-build options of libpci/GPL taint.
<br>
<p>I will update OMPI's SVN trunk and submit a v1.7 CMR when this is ready.  I imagine it will take at least a few days.
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
<li><strong>Next message:</strong> <a href="12116.php">Brice Goglin: "Re: [OMPI devel] hwloc using libpci: GPL issue"</a>
<li><strong>Previous message:</strong> <a href="12114.php">George Bosilca: "Re: [OMPI devel] MCA variable system slides and notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12116.php">Brice Goglin: "Re: [OMPI devel] hwloc using libpci: GPL issue"</a>
<li><strong>Reply:</strong> <a href="12116.php">Brice Goglin: "Re: [OMPI devel] hwloc using libpci: GPL issue"</a>
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
