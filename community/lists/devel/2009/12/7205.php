<?
$subject_val = "Re: [OMPI devel] Question about ompi_proc_t";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 12:17:33 2009" -->
<!-- isoreceived="20091208171733" -->
<!-- sent="Tue, 8 Dec 2009 12:17:27 -0500" -->
<!-- isosent="20091208171727" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about ompi_proc_t" -->
<!-- id="A8623741-F8C5-4F5E-AE02-777C6D04FEF7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A448700C-98E9-44DC-A141-38763B30164D_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question about ompi_proc_t<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 12:17:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7206.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Previous message:</strong> <a href="7204.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>In reply to:</strong> <a href="7204.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7206.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Reply:</strong> <a href="7206.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 8, 2009, at 12:05 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Both of these types (mca_pml_endpoint_t and mca_pml_base_endpoint_t) are meaningless, they can safely be replaced by void*. We have them clearly typed (but with just for the sake of understanding, so one can easily figure out what is supposed to be stored in this specific field. As such, we can remove one of them (mca_pml_base_endpoint_t) and use the other one (mca_pml_endpoint_t) everywhere.
</span><br>
<p>It would probably be good to put this in a comment somewhere in the code base.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7206.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Previous message:</strong> <a href="7204.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>In reply to:</strong> <a href="7204.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7206.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Reply:</strong> <a href="7206.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
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
