<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3961";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 22 02:59:48 2011" -->
<!-- isoreceived="20111122075948" -->
<!-- sent="Tue, 22 Nov 2011 08:59:42 +0100" -->
<!-- isosent="20111122075942" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3961" -->
<!-- id="4ECB566E.40300_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201111220757.pAM7vuvs013831_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3961<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-22 02:59:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2540.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3964)"</a>
<li><strong>Previous message:</strong> <a href="2538.php">Rayson Ho: "[hwloc-devel] Fwd: Announcing Grid Engine 2011.11 and SC11 demo &amp; presentation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll backport the Sun Studio hidden visibility stuff (r3773 + below) to
<br>
v1.3 unless somebody complains. Terry had to fix it in OMPI already.
<br>
<p>Brice
<br>
<p><p><p>Le 22/11/2011 08:57, bgoglin_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2011-11-22 02:57:54 EST (Tue, 22 Nov 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 3961
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/3961">https://svn.open-mpi.org/trac/hwloc/changeset/3961</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix hwloc_check_visibility.m4 for sun studio compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use -xldscope=hidden instead of -xldscope-hidden as mentioned
</span><br>
<span class="quotelev1">&gt; in the comment right above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks to Terry Dontje for the patch.
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/config/hwloc_check_visibility.m4 |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;    1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/hwloc_check_visibility.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/hwloc_check_visibility.m4	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/hwloc_check_visibility.m4	2011-11-22 02:57:54 EST (Tue, 22 Nov 2011)
</span><br>
<span class="quotelev1">&gt; @@ -84,7 +84,7 @@
</span><br>
<span class="quotelev1">&gt;          case &quot;$hwloc_c_vendor&quot; in
</span><br>
<span class="quotelev1">&gt;          sun)
</span><br>
<span class="quotelev1">&gt;              # Check using Sun Studio -xldscope=hidden flag
</span><br>
<span class="quotelev1">&gt; -            hwloc_add=-xldscope-hidden
</span><br>
<span class="quotelev1">&gt; +            hwloc_add=-xldscope=hidden
</span><br>
<span class="quotelev1">&gt;              CFLAGS=&quot;$CFLAGS_orig $hwloc_add&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;              AC_MSG_CHECKING([if $CC supports -xldscope])
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2540.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3964)"</a>
<li><strong>Previous message:</strong> <a href="2538.php">Rayson Ho: "[hwloc-devel] Fwd: Announcing Grid Engine 2011.11 and SC11 demo &amp; presentation"</a>
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
