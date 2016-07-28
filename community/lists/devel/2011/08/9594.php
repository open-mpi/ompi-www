<?
$subject_val = "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 12:18:56 2011" -->
<!-- isoreceived="20110803161856" -->
<!-- sent="Wed, 03 Aug 2011 18:18:49 +0200" -->
<!-- isosent="20110803161849" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI + HWLOC + Static build  issue" -->
<!-- id="4E3974E9.4030006_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D0E429AF-C402-49E5-B84A-85AA2A0476ED_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 12:18:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9595.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9593.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9593.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9601.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9601.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9602.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 03/08/2011 16:47, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Err.. I don't quite understand. How exactly are you configuring? If I
</span><br>
<span class="quotelev1">&gt; do this:
</span><br>
<p>He's using contrib/platform/ornl/ornl_configure_self_contained
<br>
<p>I reproduced here on SLES10 with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./configure --enable-static --disable-shared
<br>
--with-wrapper-ldflags=-static --disable-dlopen --enable-contrib-no-build=vt
<br>
and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make -j 8 orted_LDFLAGS=-all-static all
<br>
<p>Sorry, I mixed LDFLAGS=-static (works in hwloc) and
<br>
--with-wrapper-ldflags=-static (don't know what it exactly does in OMPI,
<br>
but -static doesn't get passed to hwloc checks) indeed
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9595.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9593.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9593.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9601.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9601.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9602.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
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
