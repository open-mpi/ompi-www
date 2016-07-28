<?
$subject_val = "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 18:52:05 2009" -->
<!-- isoreceived="20090623225205" -->
<!-- sent="Tue, 23 Jun 2009 18:51:57 -0400" -->
<!-- isosent="20090623225157" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband" -->
<!-- id="ADBDFE23-D461-4A3E-B86F-79D8457A4C49_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A415503.7020107_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 18:51:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9694.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9692.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9692.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9694.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9694.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 23, 2009, at 6:19 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; On my OpenMPI 1.3.2 ompi_info -config gives:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wrapper extra LIBS: -lrdmacm -libverbs -ltorque -lnuma -ldl
</span><br>
<span class="quotelev1">&gt; -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yours doesn't seem to have the IB libraries: -lrdmacm -libverbs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>To check definitively:
<br>
<p>$ ompi_info | grep openib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: openib (MCA v2.0, API v2.0, Component v1.3.2)
<br>
<p>You should see the &quot;btl: openib&quot; line if your Open MPI has OpenFabrics  
<br>
support.  This shows that the openib (OpenFabrics) plugin is installed  
<br>
and at least marginally operating correctly.
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
<li><strong>Next message:</strong> <a href="9694.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9692.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9692.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9694.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9694.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2	forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
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
