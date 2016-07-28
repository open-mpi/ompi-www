<?
$subject_val = "[OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 18 16:57:48 2013" -->
<!-- isoreceived="20130318205748" -->
<!-- sent="Mon, 18 Mar 2013 20:57:41 +0000" -->
<!-- isosent="20130318205741" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FB1AB4_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-18 16:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?"</a>
<li><strong>Previous message:</strong> <a href="12204.php">Nilesh Mahajan: "[OMPI devel] Send Recv Bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?"</a>
<li><strong>Reply:</strong> <a href="12206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(*** Sam: please add this to the agenda for tomorrow; thanks ***)
<br>
<p>If you recall, we recently discovered that hwloc was linking against libpci, which is GPL (not LGPL).  This introduced GPL taint into hwloc, and therefore into Open MPI.  ** Note that we didn't have any released versions of Open MPI that exhibited this behavior, so we're ok.
<br>
<p>New versions of hwloc (e.g., v1.5.2) have been released with support for libpciaccess -- a BSD library that provides the PCI stuff that hwloc needs.  However, hwloc still also provides support for libpci, too.  Right now, hwloc's configury does something like this:
<br>
<p>1. if libpciaccess is found, use it
<br>
2. if libpciaccess is not found, if libpci is found use it
<br>
3. if neither are found, disable PCI support
<br>
<p>Do we want to allow #2?  (by default, at least)
<br>
<p>I ask because I don't know if various distros still have libpci installed by default, not libpciaccess (e.g., my RHEL6 installs seem to be configured this way).  Because if they do, then OMPI compiled on those systems will be GPL tainted -- and the user may not know.  In many cases, this may not matter, but this could be a big deal for ISVs or other OMPI-binary distributors.
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
<li><strong>Next message:</strong> <a href="12206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?"</a>
<li><strong>Previous message:</strong> <a href="12204.php">Nilesh Mahajan: "[OMPI devel] Send Recv Bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?"</a>
<li><strong>Reply:</strong> <a href="12206.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?"</a>
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
