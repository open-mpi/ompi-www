<?
$subject_val = "Re: [OMPI devel] RFC: Change PML error handler signature";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 11:48:05 2010" -->
<!-- isoreceived="20100423154805" -->
<!-- sent="Fri, 23 Apr 2010 11:47:56 -0400" -->
<!-- isosent="20100423154756" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Change PML error handler signature" -->
<!-- id="5E89B6E6-8357-4AA8-B68E-BCCAD6C65752_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BCF3A7C.5080400_at_oracle.com" -->
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
<strong>Date:</strong> 2010-04-23 11:47:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7802.php">Ralph Castain: "[OMPI devel] OMPI 1.4.2rc1 warnings"</a>
<li><strong>Previous message:</strong> <a href="7800.php">George Bosilca: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>In reply to:</strong> <a href="7784.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7945.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7945.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The keyword here is consolidation. It's not about violating the initial design, it is more about keeping the design consistent. I think this change is good from an overall perspective, but now we have two ways to report similar types of problems. In other words, I don't see how we can fail sending or receiving a message from a peer, without having to recreate the connection to it. In same time, as we don't track the fragments in the PML, the fact that the BTL reports back an error on each fragment is good as it gives us the opportunity to know what exactly we have to redo.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Apr 21, 2010, at 13:48 , Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; Hi George:
</span><br>
<span class="quotelev1">&gt; To report that an entire BTL is down, one just sets the ompi_proc_t argument is set to NULL.  That is how I was using it.  That means the mca_pml_ob1_error_handler could see that it is NULL, and map out the entire BTL.  BTLs can set the ompi_proc_t if they want and the PML is free to use or ignore it if it wants.  This allows us to handle errors that may occur on a receive but that we would not want to error out the entire BTL, but just a single connection.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that make this change better?  Or am I still violating the general design.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/21/10 11:34, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The current error system follows a different design. There are basically two ways to report errors, per peer or global. The per-peer can only be triggered by a specific send or receive, and is based on the value of the last argument on the callbacks. Such errors, clearly indicated which is the peer and what is the message when such error have been detected. The second way is global, not peer related, and was supposed to be used more for local errors (such as this specific BTL is now down). As a result, this kind of errors is supposed to unlink all peers connected through the BTL, and this is why the ompi_proc_t is not part of the arguments list.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you change the signature of this function, this will change the design. And I'm not sure it make it more consistent. How do we report that a BTL is now completely down and all peers connected through it have to be relinked through another BTL?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 21, 2010, at 11:07 , Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Add two arguments to the mca_pml_ob1_error_handler to make it more useful for BTLs that may take advantage of that feature.  Adding an ompi_proc_t pointer and a char pointer.  This is what the new signature looks like.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void mca_pml_ob1_error_handler(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       int32_t flags, ompi_proc_t *errproc, char *btlname) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are times when the BTL wants to notify the PML not only that it had an error, but also the endpoint the error occurred on.  In addition, we add a string so the BTL can put descriptive information like which interface had the error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: ompi/mca/pml/pml_ob1.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MORE DETAILS:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just want to expand the function signature by two variables.  Not that currently the only place the callback is used is in the openib BTL.  And when the callback is called, it just aborts the program.  So this has no effect whatsoever on the current library.  I will also fix the signature in the other PMLs to keep things consistent. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: Monday, April 26, 2010 (as this is a minor change)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="7802.php">Ralph Castain: "[OMPI devel] OMPI 1.4.2rc1 warnings"</a>
<li><strong>Previous message:</strong> <a href="7800.php">George Bosilca: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>In reply to:</strong> <a href="7784.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7945.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7945.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
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
