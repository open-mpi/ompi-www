<?
$subject_val = "[OMPI devel] RFC: Change PML error handler signature";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 21 11:07:56 2010" -->
<!-- isoreceived="20100421150756" -->
<!-- sent="Wed, 21 Apr 2010 11:07:36 -0400" -->
<!-- isosent="20100421150736" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Change PML error handler signature" -->
<!-- id="4BCF14B8.1000607_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Change PML error handler signature<br>
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-21 11:07:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7780.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23014"</a>
<li><strong>Previous message:</strong> <a href="7778.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7781.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Reply:</strong> <a href="7781.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:
<br>
Add two arguments to the mca_pml_ob1_error_handler to make it more 
<br>
useful for BTLs that may take advantage of that feature.  Adding an 
<br>
ompi_proc_t pointer and a char pointer.  This is what the new signature 
<br>
looks like.
<br>
<p>void mca_pml_ob1_error_handler(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_module_t* btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int32_t flags, ompi_proc_t *errproc, char *btlname) {
<br>
<p>WHY:
<br>
There are times when the BTL wants to notify the PML not only that it 
<br>
had an error, but also the endpoint the error occurred on.  In addition, 
<br>
we add a string so the BTL can put descriptive information like which 
<br>
interface had the error.
<br>
<p>WHERE: ompi/mca/pml/pml_ob1.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi/mca/btl/openib/btl_openib_component.c
<br>
<p>MORE DETAILS:
<br>
I just want to expand the function signature by two variables.  Not that 
<br>
currently the only place the callback is used is in the openib BTL.  And 
<br>
when the callback is called, it just aborts the program.  So this has no 
<br>
effect whatsoever on the current library.  I will also fix the signature 
<br>
in the other PMLs to keep things consistent. 
<br>
<p>TIMEOUT: Monday, April 26, 2010 (as this is a minor change)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7780.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23014"</a>
<li><strong>Previous message:</strong> <a href="7778.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7781.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Reply:</strong> <a href="7781.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
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
