<?
$subject_val = "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 09:37:39 2009" -->
<!-- isoreceived="20090624133739" -->
<!-- sent="Wed, 24 Jun 2009 09:37:35 -0400" -->
<!-- isosent="20090624133735" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband" -->
<!-- id="F3DF91A7-132D-4972-9DEC-03471AC21DC1_at_nrl.navy.mil" -->
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
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 09:37:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9699.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9697.php">Jeff Squyres: "Re: [OMPI users] Adjust the polling frequency in ompi ?"</a>
<li><strong>In reply to:</strong> <a href="9692.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9699.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9699.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 23, 2009, at 6:19 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jim, list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On my OpenMPI 1.3.2 ompi_info -config gives:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wrapper extra LIBS: -lrdmacm -libverbs -ltorque -lnuma -ldl -Wl,-- 
</span><br>
<span class="quotelev1">&gt; export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yours doesn't seem to have the IB libraries: -lrdmacm -libverbs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I would guess your OpenMPI 1.3.2 build doesn't have IB support.
</span><br>
<p>The second of these statements doesn't follow from the first.
<br>
<p>My &quot;ompi_info -config&quot; returns
<br>
<p>ompi_info -config | grep LIBS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build LIBS: -lnsl -lutil  -lm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic -lnsl -lutil - 
<br>
lm -ldl
<br>
<p>But it does have openib
<br>
<p>ompi_info | grep openib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: openib (MCA v2.0, API v2.0, Component v1.3.2)
<br>
<p>and osu_bibw returns
<br>
<p># OSU MPI Bi-Directional Bandwidth Test v3.0
<br>
# Size     Bi-Bandwidth (MB/s)
<br>
4194304                1717.43
<br>
<p>which it's sure not getting over ethernet.  I think Jeff Squyres' test
<br>
(ompi_info | grep openib) must be more definitive.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9699.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9697.php">Jeff Squyres: "Re: [OMPI users] Adjust the polling frequency in ompi ?"</a>
<li><strong>In reply to:</strong> <a href="9692.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2 forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9699.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>Reply:</strong> <a href="9699.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
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
