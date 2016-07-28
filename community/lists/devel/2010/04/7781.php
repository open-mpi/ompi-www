<?
$subject_val = "Re: [OMPI devel] RFC: Change PML error handler signature";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 21 11:35:35 2010" -->
<!-- isoreceived="20100421153535" -->
<!-- sent="Wed, 21 Apr 2010 11:34:53 -0400" -->
<!-- isosent="20100421153453" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Change PML error handler signature" -->
<!-- id="C78AC240-CCF2-4850-AF5B-DBF91C69EE79_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BCF14B8.1000607_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Change PML error handler signature<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-21 11:34:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7782.php">Jeff Squyres: "[OMPI devel] New OMPI MPI extension"</a>
<li><strong>Previous message:</strong> <a href="7780.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23014"</a>
<li><strong>In reply to:</strong> <a href="7779.php">Rolf vandeVaart: "[OMPI devel] RFC: Change PML error handler signature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7784.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Reply:</strong> <a href="7784.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The current error system follows a different design. There are basically two ways to report errors, per peer or global. The per-peer can only be triggered by a specific send or receive, and is based on the value of the last argument on the callbacks. Such errors, clearly indicated which is the peer and what is the message when such error have been detected. The second way is global, not peer related, and was supposed to be used more for local errors (such as this specific BTL is now down). As a result, this kind of errors is supposed to unlink all peers connected through the BTL, and this is why the ompi_proc_t is not part of the arguments list.
<br>
<p>If you change the signature of this function, this will change the design. And I'm not sure it make it more consistent. How do we report that a BTL is now completely down and all peers connected through it have to be relinked through another BTL?
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Apr 21, 2010, at 11:07 , Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; WHAT:
</span><br>
<span class="quotelev1">&gt; Add two arguments to the mca_pml_ob1_error_handler to make it more useful for BTLs that may take advantage of that feature.  Adding an ompi_proc_t pointer and a char pointer.  This is what the new signature looks like.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void mca_pml_ob1_error_handler(
</span><br>
<span class="quotelev1">&gt;       struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev1">&gt;       int32_t flags, ompi_proc_t *errproc, char *btlname) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY:
</span><br>
<span class="quotelev1">&gt; There are times when the BTL wants to notify the PML not only that it had an error, but also the endpoint the error occurred on.  In addition, we add a string so the BTL can put descriptive information like which interface had the error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: ompi/mca/pml/pml_ob1.c
</span><br>
<span class="quotelev1">&gt;               ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MORE DETAILS:
</span><br>
<span class="quotelev1">&gt; I just want to expand the function signature by two variables.  Not that currently the only place the callback is used is in the openib BTL.  And when the callback is called, it just aborts the program.  So this has no effect whatsoever on the current library.  I will also fix the signature in the other PMLs to keep things consistent. 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Monday, April 26, 2010 (as this is a minor change)
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
<li><strong>Next message:</strong> <a href="7782.php">Jeff Squyres: "[OMPI devel] New OMPI MPI extension"</a>
<li><strong>Previous message:</strong> <a href="7780.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23014"</a>
<li><strong>In reply to:</strong> <a href="7779.php">Rolf vandeVaart: "[OMPI devel] RFC: Change PML error handler signature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7784.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Reply:</strong> <a href="7784.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
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
