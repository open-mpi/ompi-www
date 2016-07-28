<?
$subject_val = "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  5 11:14:16 2011" -->
<!-- isoreceived="20110805151416" -->
<!-- sent="Fri, 5 Aug 2011 11:14:11 -0400" -->
<!-- isosent="20110805151411" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI + HWLOC + Static build  issue" -->
<!-- id="2FD93B47-8875-4FF6-8BEA-B3039AAE2143_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E3BBE27.4050304_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI + HWLOC + Static build  issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-05 11:14:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9611.php">Jeff Squyres: "[OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Previous message:</strong> <a href="9609.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9609.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 5, 2011, at 5:55 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Libtool's -all-static flag probably resolves to some gcc flag(s), right?  Can you just pass those in via CFLAGS / LDFLAGS to configure and then not pass anything in via make?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I only see an additional -static flag on the final program-link gcc
</span><br>
<span class="quotelev1">&gt; command-line when -all-static is given to libtool. But if you pass
</span><br>
<span class="quotelev1">&gt; LDFLAGS=-static to configure, it's interpreted by libtool and gcc
</span><br>
<span class="quotelev1">&gt; doesn't get a -static when linking programs.
</span><br>
<p>Well, that's certainly yucky.  As a *guess*, this sounds like this is an artifact of Libtool not having a distinct namespace for its CLI arguments (i.e., Libtool assuming that &quot;-static&quot; is intended as a Libtool argument, not a compiler/linker argument).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9611.php">Jeff Squyres: "[OMPI devel] Uninitialized ORTE epoch values"</a>
<li><strong>Previous message:</strong> <a href="9609.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9609.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
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
