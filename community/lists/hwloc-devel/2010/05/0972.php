<?
$subject_val = "Re: [hwloc-devel] Requirements for building hwloc with XML support ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 16:37:32 2010" -->
<!-- isoreceived="20100506203732" -->
<!-- sent="Thu, 06 May 2010 22:37:26 +0200" -->
<!-- isosent="20100506203726" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Requirements for building hwloc with XML support ?" -->
<!-- id="4BE32886.10903_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D45958078CD65C429557B4C5F492B6A60770E4EB_at_IS-EX-BEV3.unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Requirements for building hwloc with XML support ?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 16:37:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0973.php">Jeff Squyres: "Re: [hwloc-devel] 1.0rc5 is posted"</a>
<li><strong>Previous message:</strong> <a href="0971.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<li><strong>In reply to:</strong> <a href="0970.php">Christopher Samuel: "[hwloc-devel] Requirements for building hwloc with XML support ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0975.php">Christopher Samuel: "Re: [hwloc-devel] Requirements for building hwloc with XML support ?"</a>
<li><strong>Reply:</strong> <a href="0975.php">Christopher Samuel: "Re: [hwloc-devel] Requirements for building hwloc with XML support ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Redhat-like systems, it's libxml2-devel
<br>
On Debian-like, it's libxml2-dev
<br>
<p>Configure uses the pkgconfig file, something like
<br>
/usr/lib/pkgconfig/libxml-2.0.pc
<br>
<p>In the end, we actually use libxml/parser.h and libxml/tree.h in the code
<br>
<p>Brice
<br>
<p><p><p>On 06/05/2010 20:23, Christopher Samuel wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to figure out what I need to instatll to
</span><br>
<span class="quotelev1">&gt; get configure to believe it can build hwloc with XML
</span><br>
<span class="quotelev1">&gt; support and not getting very far. :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even looking at the configure script and running it
</span><br>
<span class="quotelev1">&gt; with bash -x doesn't seem to shed any light on what
</span><br>
<span class="quotelev1">&gt; it's looking for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any clues please ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;   VLSCI - Victorian Life Sciences Computational Initiative
</span><br>
<span class="quotelev1">&gt;   Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;           <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0972/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0973.php">Jeff Squyres: "Re: [hwloc-devel] 1.0rc5 is posted"</a>
<li><strong>Previous message:</strong> <a href="0971.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<li><strong>In reply to:</strong> <a href="0970.php">Christopher Samuel: "[hwloc-devel] Requirements for building hwloc with XML support ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0975.php">Christopher Samuel: "Re: [hwloc-devel] Requirements for building hwloc with XML support ?"</a>
<li><strong>Reply:</strong> <a href="0975.php">Christopher Samuel: "Re: [hwloc-devel] Requirements for building hwloc with XML support ?"</a>
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
