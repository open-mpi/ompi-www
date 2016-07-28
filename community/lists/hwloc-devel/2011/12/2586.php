<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4022";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  9 03:03:49 2011" -->
<!-- isoreceived="20111209080349" -->
<!-- sent="Fri, 09 Dec 2011 09:03:40 +0100" -->
<!-- isosent="20111209080340" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4022" -->
<!-- id="4EE1C0DC.2050807_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201112081919.pB8JJQCt004451_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4022<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-09 03:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2587.php">Brice Goglin: "[hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2585.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.1rc1r4024)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2588.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4022"</a>
<li><strong>Reply:</strong> <a href="2588.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4022"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 08/12/2011 20:19, jsquyres_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2011-12-08 14:19:26 EST (Thu, 08 Dec 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 4022
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4022">https://svn.open-mpi.org/trac/hwloc/changeset/4022</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; There's no need for $HWLOC_PKG_CONFIG -- revert
</span><br>
<span class="quotelev1">&gt; HWLOC_PKG_PROG_PKG_CONFIG to look at $PKG_CONFIG so that hwloc's
</span><br>
<span class="quotelev1">&gt; configure script (in both the embedding and standalone cases) is not
</span><br>
<span class="quotelev1">&gt; different than the rest of the world.. and don't violate the Law of
</span><br>
<span class="quotelev1">&gt; Least Astonishment.
</span><br>
<p>Looks like pkg-config support is broken now, we just get &quot;cannot check
<br>
without pkg-config&quot; everywhere it's used in configure.
<br>
There are still multiple instances of $HWLOC_PKG_CONFIG in our
<br>
config/*.m4, should we replace them as well?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2587.php">Brice Goglin: "[hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2585.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.1rc1r4024)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2588.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4022"</a>
<li><strong>Reply:</strong> <a href="2588.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4022"</a>
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
