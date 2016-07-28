<?
$subject_val = "Re: [OMPI devel] RFC: Change PML error handler signature";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 21 13:49:00 2010" -->
<!-- isoreceived="20100421174900" -->
<!-- sent="Wed, 21 Apr 2010 13:48:44 -0400" -->
<!-- isosent="20100421174844" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Change PML error handler signature" -->
<!-- id="4BCF3A7C.5080400_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C78AC240-CCF2-4850-AF5B-DBF91C69EE79_at_eecs.utk.edu" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-21 13:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7785.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>Previous message:</strong> <a href="7783.php">Jeff Squyres: "[OMPI devel] Cisco MTT testing"</a>
<li><strong>In reply to:</strong> <a href="7781.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7801.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Reply:</strong> <a href="7801.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George:
<br>
To report that an entire BTL is down, one just sets the ompi_proc_t 
<br>
argument is set to NULL.  That is how I was using it.  That means the 
<br>
mca_pml_ob1_error_handler could see that it is NULL, and map out the 
<br>
entire BTL.  BTLs can set the ompi_proc_t if they want and the PML is 
<br>
free to use or ignore it if it wants.  This allows us to handle errors 
<br>
that may occur on a receive but that we would not want to error out the 
<br>
entire BTL, but just a single connection.
<br>
<p>Does that make this change better?  Or am I still violating the general 
<br>
design.
<br>
<p>Rolf
<br>
<p>On 04/21/10 11:34, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The current error system follows a different design. There are basically two ways to report errors, per peer or global. The per-peer can only be triggered by a specific send or receive, and is based on the value of the last argument on the callbacks. Such errors, clearly indicated which is the peer and what is the message when such error have been detected. The second way is global, not peer related, and was supposed to be used more for local errors (such as this specific BTL is now down). As a result, this kind of errors is supposed to unlink all peers connected through the BTL, and this is why the ompi_proc_t is not part of the arguments list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you change the signature of this function, this will change the design. And I'm not sure it make it more consistent. How do we report that a BTL is now completely down and all peers connected through it have to be relinked through another BTL?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 21, 2010, at 11:07 , Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; WHAT:
</span><br>
<span class="quotelev2">&gt;&gt; Add two arguments to the mca_pml_ob1_error_handler to make it more useful for BTLs that may take advantage of that feature.  Adding an ompi_proc_t pointer and a char pointer.  This is what the new signature looks like.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; void mca_pml_ob1_error_handler(
</span><br>
<span class="quotelev2">&gt;&gt;       struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev2">&gt;&gt;       int32_t flags, ompi_proc_t *errproc, char *btlname) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY:
</span><br>
<span class="quotelev2">&gt;&gt; There are times when the BTL wants to notify the PML not only that it had an error, but also the endpoint the error occurred on.  In addition, we add a string so the BTL can put descriptive information like which interface had the error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: ompi/mca/pml/pml_ob1.c
</span><br>
<span class="quotelev2">&gt;&gt;               ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MORE DETAILS:
</span><br>
<span class="quotelev2">&gt;&gt; I just want to expand the function signature by two variables.  Not that currently the only place the callback is used is in the openib BTL.  And when the callback is called, it just aborts the program.  So this has no effect whatsoever on the current library.  I will also fix the signature in the other PMLs to keep things consistent. 
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: Monday, April 26, 2010 (as this is a minor change)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7784/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7785.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>Previous message:</strong> <a href="7783.php">Jeff Squyres: "[OMPI devel] Cisco MTT testing"</a>
<li><strong>In reply to:</strong> <a href="7781.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7801.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Reply:</strong> <a href="7801.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
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
