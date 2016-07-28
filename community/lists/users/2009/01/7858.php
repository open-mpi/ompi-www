<?
$subject_val = "Re: [OMPI users] Heterogeneous OpenFabrics hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 10:19:14 2009" -->
<!-- isoreceived="20090127151914" -->
<!-- sent="Tue, 27 Jan 2009 16:19:02 +0100" -->
<!-- isosent="20090127151902" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heterogeneous OpenFabrics hardware" -->
<!-- id="200901271619.10948.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="60A24E78-53C6-4D8A-93D6-2CEBC10C51C8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heterogeneous OpenFabrics hardware<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-27 10:19:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7859.php">Ralph Castain: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>Previous message:</strong> <a href="7857.php">Anthony Thevenin: "[OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>In reply to:</strong> <a href="7856.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7861.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="7861.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 27 January 2009, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; It is worth clarifying a point in this discussion that I neglected to
</span><br>
<span class="quotelev1">&gt; mention in my initial post: although Open MPI may not work *by
</span><br>
<span class="quotelev1">&gt; default* with heterogeneous HCAs/RNICs, it is quite possible/likely
</span><br>
<span class="quotelev1">&gt; that if you manually configure Open MPI to use the same verbs/hardware
</span><br>
<span class="quotelev1">&gt; settings across all your HCAs/RNICs (assuming that you use a set of
</span><br>
<span class="quotelev1">&gt; values that is compatible with all your hardware) that MPI jobs
</span><br>
<span class="quotelev1">&gt; spanning multiple different kinds of HCAs or RNICs will work fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See this post on the devel list for a few more details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2009/01/5314.php">http://www.open-mpi.org/community/lists/devel/2009/01/5314.php</a>
</span><br>
<p>So is it correct that each rank will check its HCA-model and then pick up 
<br>
suitable settings for that HCA?
<br>
<p>If so maybe OpenMPI could fall back to a very conservative settings if more 
<br>
than one HCA model was detected among the ranks. Or would this require 
<br>
communication in a stage where that would be complicated and/or ugly?
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7858/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7859.php">Ralph Castain: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>Previous message:</strong> <a href="7857.php">Anthony Thevenin: "[OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>In reply to:</strong> <a href="7856.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7861.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="7861.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
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
