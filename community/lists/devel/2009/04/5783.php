<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 20:56:07 2009" -->
<!-- isoreceived="20090402005607" -->
<!-- sent="Wed, 1 Apr 2009 20:56:00 -0400" -->
<!-- isosent="20090402005600" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="B515B1CD-9AA8-4FDC-88FD-D950679A080A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="778C7D38-3E44-423A-AC54-F65B139FF32A_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 20:56:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5784.php">Eugene Loh: "[OMPI devel] trac 1857:  SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5782.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 2009 released"</a>
<li><strong>In reply to:</strong> <a href="5780.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5751.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 1, 2009, at 6:58 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; IIRC, we certainly used to unlink the file after init. Are you sure
</span><br>
<span class="quotelev1">&gt; somebody changed that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It looks like we unlink() it during btl sm component close  
<br>
(effectively during MPI_FINALIZE), not before.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5784.php">Eugene Loh: "[OMPI devel] trac 1857:  SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5782.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 2009 released"</a>
<li><strong>In reply to:</strong> <a href="5780.php">Ralph Castain: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5751.php">Patrick Geoffray: "Re: [OMPI devel] SM init failures"</a>
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
