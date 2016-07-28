<?
$subject_val = "Re: [OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 18 18:07:00 2013" -->
<!-- isoreceived="20130318220700" -->
<!-- sent="Mon, 18 Mar 2013 22:06:55 +0000" -->
<!-- isosent="20130318220655" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FB23A4_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43FB1AB4_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-18 18:06:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12207.php">Nathan Hjelm: "[OMPI devel] RFC: MCA system revamp phase 1"</a>
<li><strong>Previous message:</strong> <a href="12205.php">Jeff Squyres (jsquyres): "[OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?"</a>
<li><strong>In reply to:</strong> <a href="12205.php">Jeff Squyres (jsquyres): "[OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Disregard this -- I forgot (and read the configure output wrong) that hwloc will *not* do #2 (i.e., link against libpci) unless you specifically request it via --enable-libpci.
<br>
<p>I'm assuming that we do *not* want to enable that by default (i.e., so that the compiled OMPI installation does not accidentally become GPL tainted).
<br>
<p><p><p>On Mar 18, 2013, at 1:57 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; (*** Sam: please add this to the agenda for tomorrow; thanks ***)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you recall, we recently discovered that hwloc was linking against libpci, which is GPL (not LGPL).  This introduced GPL taint into hwloc, and therefore into Open MPI.  ** Note that we didn't have any released versions of Open MPI that exhibited this behavior, so we're ok.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; New versions of hwloc (e.g., v1.5.2) have been released with support for libpciaccess -- a BSD library that provides the PCI stuff that hwloc needs.  However, hwloc still also provides support for libpci, too.  Right now, hwloc's configury does something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. if libpciaccess is found, use it
</span><br>
<span class="quotelev1">&gt; 2. if libpciaccess is not found, if libpci is found use it
</span><br>
<span class="quotelev1">&gt; 3. if neither are found, disable PCI support
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do we want to allow #2?  (by default, at least)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ask because I don't know if various distros still have libpci installed by default, not libpciaccess (e.g., my RHEL6 installs seem to be configured this way).  Because if they do, then OMPI compiled on those systems will be GPL tainted -- and the user may not know.  In many cases, this may not matter, but this could be a big deal for ISVs or other OMPI-binary distributors.
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
<li><strong>Next message:</strong> <a href="12207.php">Nathan Hjelm: "[OMPI devel] RFC: MCA system revamp phase 1"</a>
<li><strong>Previous message:</strong> <a href="12205.php">Jeff Squyres (jsquyres): "[OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?"</a>
<li><strong>In reply to:</strong> <a href="12205.php">Jeff Squyres (jsquyres): "[OMPI devel] hwloc: libpci vs. libpciaccess - what should OMPI do?"</a>
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
