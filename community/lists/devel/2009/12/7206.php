<?
$subject_val = "Re: [OMPI devel] Question about ompi_proc_t";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 12:30:42 2009" -->
<!-- isoreceived="20091208173042" -->
<!-- sent="Tue, 8 Dec 2009 12:30:27 -0500" -->
<!-- isosent="20091208173027" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about ompi_proc_t" -->
<!-- id="E8F63ADE-1373-421F-9B54-F81B65D3B27E_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A8623741-F8C5-4F5E-AE02-777C6D04FEF7_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 12:30:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7207.php">George Bosilca: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Previous message:</strong> <a href="7205.php">Jeff Squyres: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>In reply to:</strong> <a href="7205.php">Jeff Squyres: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7208.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a better solution ;) Implemented in r22277.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 8, 2009, at 12:17 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 8, 2009, at 12:05 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Both of these types (mca_pml_endpoint_t and mca_pml_base_endpoint_t) are meaningless, they can safely be replaced by void*. We have them clearly typed (but with just for the sake of understanding, so one can easily figure out what is supposed to be stored in this specific field. As such, we can remove one of them (mca_pml_base_endpoint_t) and use the other one (mca_pml_endpoint_t) everywhere.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would probably be good to put this in a comment somewhere in the code base.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7207.php">George Bosilca: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Previous message:</strong> <a href="7205.php">Jeff Squyres: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>In reply to:</strong> <a href="7205.php">Jeff Squyres: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7208.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Question about ompi_proc_t"</a>
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
