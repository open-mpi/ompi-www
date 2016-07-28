<?
$subject_val = "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND /	MPI_RECV";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  8 13:52:56 2009" -->
<!-- isoreceived="20090208185256" -->
<!-- sent="08 Feb 2009 18:52:52 +0000" -->
<!-- isosent="20090208185252" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND /	MPI_RECV" -->
<!-- id="Prayer.1.3.1.0902081852520.24753_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="440F9158-CA39-4517-A31F-574F05A70AF1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND /	MPI_RECV<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-08 13:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5389.php">Greg Koenig: "[OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
<li><strong>Previous message:</strong> <a href="5387.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>In reply to:</strong> <a href="5387.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 7 2009, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;On Feb 7, 2009, at 12:23 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That is significantly higher than I would have expected for a single  
</span><br>
<span class="quotelev2">&gt;&gt; function call.  When I did all the component tests a couple years  
</span><br>
<span class="quotelev2">&gt;&gt; ago, a function call into a shared library was about 5ns on an Intel  
</span><br>
<span class="quotelev2">&gt;&gt; Xeon (pre-Core 2 design) and about 2.5 on an AMD Opteron.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Good; I'm not crazy for thinking that this is a little too obvious --  
</span><br>
<span class="quotelev1">&gt;it smells like I did something wrong.  Could someone eyeball these  
</span><br>
<span class="quotelev1">&gt;files and see if I missed anything obvious:
</span><br>
<p>At the risk of telling grandmothers how to suck eggs, have you tried
<br>
with with different compilers, different systems and/or adding a few
<br>
irrelevant (but not optimisable-out) declarations or statements?
<br>
<p>That sort of phenomenon is exactly what happens when you trip over a
<br>
cache problem - e.g. running out of cache associativity.  It can also
<br>
occur because of pipeline drain (e.g. branch misprediction) problems.
<br>
Neither of those would be found by eyeballing the code - you would at
<br>
least have to eyeball the assembler.
<br>
<p><p>Regards,
<br>
Nick Maclaren,
<br>
University of Cambridge Computing Service,
<br>
New Museums Site, Pembroke Street, Cambridge CB2 3QH, England.
<br>
Email:  nmm1_at_[hidden]
<br>
Tel.:  +44 1223 334761    Fax:  +44 1223 334679
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5389.php">Greg Koenig: "[OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
<li><strong>Previous message:</strong> <a href="5387.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
<li><strong>In reply to:</strong> <a href="5387.php">Jeff Squyres: "Re: [OMPI devel] RFC: [slightly] Optimize Fortran MPI_SEND / MPI_RECV"</a>
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
