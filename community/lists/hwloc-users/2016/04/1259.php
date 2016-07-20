<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.3rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 16 18:27:33 2016" -->
<!-- isoreceived="20160416222733" -->
<!-- sent="Sun, 17 Apr 2016 00:27:22 +0200" -->
<!-- isosent="20160416222722" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.3rc1 released" -->
<!-- id="2f2f14e3-2a3e-cc71-eeb9-d40cfa50c809_at_gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="570E1282.9090702_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.3rc1 released<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-16 18:27:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1260.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/03/1258.php">Brice Goglin: "[hwloc-users] anybody still has access to Itanium?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 13/04/2016 11:33, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the first
</span><br>
<span class="quotelev1">&gt; release candidate of v1.11.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v1.11.3 addresses all known bugs in the v1.11 series. It also brings
</span><br>
<span class="quotelev1">&gt; many small improvements (those that shouldn't wait until the future 2.0
</span><br>
<span class="quotelev1">&gt; release is ready).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Brice,
<br>
attached patches used for cygwin build
<br>
<p>hwloc-1.11.3rc1-1.src.patch
<br>
to properly use gethostname on cygwin system
<br>
<p>hwloc-pkconfig.patch
<br>
to properly install pkconfig on cygwin.
<br>
For a general usage it should be re-formulated, but I have not
<br>
found a obvious way.
<br>
<p>Regards
<br>
Marco
<br>
<p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1259/hwloc-1.11.3rc1-1.src.patch">hwloc-1.11.3rc1-1.src.patch</a>
</ul>
<!-- attachment="hwloc-1.11.3rc1-1.src.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1259/hwloc-pkconfig.patch">hwloc-pkconfig.patch</a>
</ul>
<!-- attachment="hwloc-pkconfig.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1260.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/03/1258.php">Brice Goglin: "[hwloc-users] anybody still has access to Itanium?"</a>
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
