<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 07:46:32 2010" -->
<!-- isoreceived="20100717114632" -->
<!-- sent="Sat, 17 Jul 2010 07:47:01 -0400" -->
<!-- isosent="20100717114701" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336" -->
<!-- id="AE99FB39-B3BE-4164-8C90-47B64E6902C5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C416A9B.50507_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-17 07:47:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1188.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2343)"</a>
<li><strong>Previous message:</strong> <a href="1186.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<li><strong>In reply to:</strong> <a href="1184.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 17, 2010, at 4:32 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; It also seems to me that XML checks should move from HWLOC_SETUP_UTILS
</span><br>
<span class="quotelev1">&gt; to HWLOC_SETUP_CORE. XML is used inside the core library and some people
</span><br>
<span class="quotelev1">&gt; might use it even when embedded. For instance the MPI launcher could
</span><br>
<span class="quotelev1">&gt; discover node topologies, do stuff with them, store them inside XML
</span><br>
<span class="quotelev1">&gt; files, and let the MPI processes read them later when needed.
</span><br>
<p>I have no objection.
<br>
<p><span class="quotelev1">&gt; Jeff, do you get XML support when building hwloc inside OMPI?
</span><br>
<p>No, but I didn't want it, either.  :-)
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
<li><strong>Next message:</strong> <a href="1188.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2343)"</a>
<li><strong>Previous message:</strong> <a href="1186.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2339"</a>
<li><strong>In reply to:</strong> <a href="1184.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2336"</a>
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
