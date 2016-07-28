<?
$subject_val = "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  5 05:55:58 2011" -->
<!-- isoreceived="20110805095558" -->
<!-- sent="Fri, 05 Aug 2011 11:55:51 +0200" -->
<!-- isosent="20110805095551" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI + HWLOC + Static build  issue" -->
<!-- id="4E3BBE27.4050304_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="897D6C20-0382-4A74-955D-2A7C42461F7F_at_cisco.com" -->
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
<strong>Date:</strong> 2011-08-05 05:55:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9610.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9608.php">Jeff Squyres: "Re: [OMPI devel] need help to add a module"</a>
<li><strong>In reply to:</strong> <a href="9605.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9610.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9610.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/08/2011 02:24, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Libtool's -all-static flag probably resolves to some gcc flag(s), right?  Can you just pass those in via CFLAGS / LDFLAGS to configure and then not pass anything in via make?
</span><br>
<p>I only see an additional -static flag on the final program-link gcc
<br>
command-line when -all-static is given to libtool. But if you pass
<br>
LDFLAGS=-static to configure, it's interpreted by libtool and gcc
<br>
doesn't get a -static when linking programs.
<br>
<p><p>Pasha, as a workaround, did you try adding LDFLAGS=-static to the OMPI
<br>
configure line? This seems to fix hwloc libnuma detection problems. But
<br>
I don't know if it will cause other problems for you. Note that you will
<br>
still need LDFLAGS=-all-static on the make command line.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9610.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9608.php">Jeff Squyres: "Re: [OMPI devel] need help to add a module"</a>
<li><strong>In reply to:</strong> <a href="9605.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9610.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9610.php">Jeff Squyres: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
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
