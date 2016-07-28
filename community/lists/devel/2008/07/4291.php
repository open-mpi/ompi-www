<?
$subject_val = "Re: [OMPI devel] Open IB BTL and iWARP";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 17:05:09 2008" -->
<!-- isoreceived="20080709210509" -->
<!-- sent="Wed, 9 Jul 2008 17:04:50 -0400" -->
<!-- isosent="20080709210450" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open IB BTL and iWARP" -->
<!-- id="90DB6A01-9FC8-4DBD-BE89-F0FABF5D0332_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48751AAF.3040006_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open IB BTL and iWARP<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-09 17:04:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4292.php">Ralph Castain: "[OMPI devel] IOF repair"</a>
<li><strong>Previous message:</strong> <a href="4290.php">Don Kerr: "[OMPI devel] Open IB BTL and iWARP"</a>
<li><strong>In reply to:</strong> <a href="4290.php">Don Kerr: "[OMPI devel] Open IB BTL and iWARP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 9, 2008, at 4:08 PM, Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt; Last I looked the OpenIB BTL relied on the short eager rdma buffers  
</span><br>
<span class="quotelev1">&gt; being written in order?   Is this still the case?
</span><br>
<p>The eager rdma optimization relies on the last byte of the short  
<br>
message being written last.  I.e., when we see the last byte in the  
<br>
target buffer, we assume the rest of the message is there.
<br>
<p><span class="quotelev1">&gt; If so, how is this handled when iWARP is underneath the User Verb  
</span><br>
<span class="quotelev1">&gt; API and not Mellonox IB HCAs?
</span><br>
<p>There's an MCA parameter that disables this optimization if the  
<br>
underlying hardware can't provide that guarantee.  We also have this  
<br>
field in the INI file so that specific adapters can disable it  
<br>
automatically if they want/need to.
<br>
<p>Chelsio T3, NetEffect NE020, and NetXen adapters can all provide that  
<br>
guarantee (I asked those vendors).  You can see this in:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/btl/openib/mca-btl-openib-hca-params.ini">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/btl/openib/mca-btl-openib-hca-params.ini</a>
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
<li><strong>Next message:</strong> <a href="4292.php">Ralph Castain: "[OMPI devel] IOF repair"</a>
<li><strong>Previous message:</strong> <a href="4290.php">Don Kerr: "[OMPI devel] Open IB BTL and iWARP"</a>
<li><strong>In reply to:</strong> <a href="4290.php">Don Kerr: "[OMPI devel] Open IB BTL and iWARP"</a>
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
