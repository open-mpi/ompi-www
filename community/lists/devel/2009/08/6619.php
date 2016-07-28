<?
$subject_val = "Re: [OMPI devel] RFC: PML/CM priority";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 15:23:09 2009" -->
<!-- isoreceived="20090811192309" -->
<!-- sent="Tue, 11 Aug 2009 15:23:03 -0400 (EDT)" -->
<!-- isosent="20090811192303" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: PML/CM priority" -->
<!-- id="alpine.DEB.1.10.0908111518440.21604_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200908111433.25098.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: PML/CM priority<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 15:23:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6620.php">George Bosilca: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>Previous message:</strong> <a href="6618.php">Rainer Keller: "[OMPI devel] RFC: PML/CM priority"</a>
<li><strong>In reply to:</strong> <a href="6618.php">Rainer Keller: "[OMPI devel] RFC: PML/CM priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6620.php">George Bosilca: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>Reply:</strong> <a href="6620.php">George Bosilca: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 11 Aug 2009, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; When compiling on systems with MX or Portals, we offer MTLs and BTLs.
</span><br>
<span class="quotelev1">&gt; If MTLs are used, the PML/CM is loaded as well as the PML/OB1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question 1: Is favoring OB1 over CM required for any MTL (MX, Portals, PSM)?
</span><br>
<p>George has in the past had srtong feelings on this issue, believing that 
<br>
for MX, OB1 is prefered over CM.  For Portals, it's probably in the noise, 
<br>
but the BTL had been better tested than the MTL, so it was left as the 
<br>
default.  Obviously, PSM is a much better choice on InfiniPath than 
<br>
straight OFED, hence the odd priority bump.
<br>
<p>At this point, I would have no objection to making CM's priority higher 
<br>
for Portals.
<br>
<p><span class="quotelev1">&gt; Question 2: If it is, I would like to reflect this in the default priorities,
</span><br>
<span class="quotelev1">&gt; aka have CM have a priority lower than OB1 and in the case of PSM raising it.
</span><br>
<p>I don't have strong feelings on this one.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6620.php">George Bosilca: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>Previous message:</strong> <a href="6618.php">Rainer Keller: "[OMPI devel] RFC: PML/CM priority"</a>
<li><strong>In reply to:</strong> <a href="6618.php">Rainer Keller: "[OMPI devel] RFC: PML/CM priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6620.php">George Bosilca: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>Reply:</strong> <a href="6620.php">George Bosilca: "Re: [OMPI devel] RFC: PML/CM priority"</a>
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
