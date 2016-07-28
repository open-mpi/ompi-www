<?
$subject_val = "Re: [OMPI users] Adjust the polling frequency in ompi ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 21:13:22 2009" -->
<!-- isoreceived="20090624011322" -->
<!-- sent="Tue, 23 Jun 2009 21:13:15 -0400" -->
<!-- isosent="20090624011315" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Adjust the polling frequency in ompi ?" -->
<!-- id="F16F3263-1039-4DE1-95D6-F3CB26E1EC64_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A414C60.40603_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Adjust the polling frequency in ompi ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 21:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9698.php">Noam Bernstein: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9696.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	toOpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet insteadof	using	Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9690.php">Hsing-bung Chen: "[OMPI users] Adjust the polling frequency in ompi ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 23, 2009, at 5:42 PM, Hsing-bung Chen wrote:
<br>
<p><span class="quotelev1">&gt; FYI,
</span><br>
<span class="quotelev1">&gt; Is  this the right way to adjust the polling frequency in ompi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Which polling rate are you trying to adjust?  And why (I'm just  
<br>
curious)?
<br>
<p>This particular polling rate is slightly complicated.  Think of it as  
<br>
how often we progress file descriptor-based communications when *not*  
<br>
using TCP as an MPI transport (e.g., when using OpenFabrics, we poll  
<br>
file descriptors very infrequently -- but we still poll OpenFabrics  
<br>
completion queues hard for progress; there's no way to &quot;dial that  
<br>
down&quot;, so to speak).
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
<li><strong>Next message:</strong> <a href="9698.php">Noam Bernstein: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9696.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	toOpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet insteadof	using	Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9690.php">Hsing-bung Chen: "[OMPI users] Adjust the polling frequency in ompi ?"</a>
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
