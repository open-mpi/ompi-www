<?
$subject_val = "Re: [hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 21:11:11 2009" -->
<!-- isoreceived="20091104021111" -->
<!-- sent="Tue, 3 Nov 2009 21:11:06 -0500" -->
<!-- isosent="20091104021106" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="4D4681ED-7D2B-4800-B870-C38B34412530_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091104020928.GH4580_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-03 21:11:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0326.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1281)"</a>
<li><strong>Previous message:</strong> <a href="0324.php">Samuel Thibault: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="0324.php">Samuel Thibault: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It was using the wrong autotools (older stuff).  I just fixed it and  
<br>
re-ran -- let's see if it works now.
<br>
<p>On Nov 3, 2009, at 9:09 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; MPI Team, le Tue 03 Nov 2009 21:01:23 -0500, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev2">&gt; &gt;        ./autogen.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, sorry, it is. Mmmm how is it running
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; autoreconf: running: aclocal --force -I config
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while autoreconf was passed -I m4?  I've just tried from a fresh
</span><br>
<span class="quotelev1">&gt; checkout and didn't have the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0326.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1281)"</a>
<li><strong>Previous message:</strong> <a href="0324.php">Samuel Thibault: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="0324.php">Samuel Thibault: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
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
