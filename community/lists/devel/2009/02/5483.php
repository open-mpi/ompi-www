<?
$subject_val = "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 11:43:54 2009" -->
<!-- isoreceived="20090219164354" -->
<!-- sent="Thu, 19 Feb 2009 11:43:48 -0500" -->
<!-- isosent="20090219164348" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bugs and unexpected values in returned errors classes" -->
<!-- id="FF4A3AEA-5476-4F3B-90DD-EE90F7B48A8E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B0DEE4DC-346C-4EEB-83D6-94EBEE046263_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] possible bugs and unexpected values in returned errors classes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 11:43:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5484.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5482.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5481.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5484.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5484.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 19, 2009, at 10:47 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I fail to find anything about this on the MPI Standard.
</span><br>
<p>MPI doesn't define any errors, does it?  :-)  I think it falls into  
<br>
the category of &quot;MPI tells you what to do&quot; and doesn't define what  
<br>
happens if you don't do that.  MPI_*_SET_ERRHANDLER says you have to  
<br>
pass an errhandler handle.  If you pass an invalid one (to include  
<br>
NULL or MPI_ERRHANDLER_NULL), it's an undefined error.
<br>
<p><span class="quotelev1">&gt; For me passing the NULL error handle to any kind of set handler  
</span><br>
<span class="quotelev1">&gt; function should not be an error. It should means that you prefer to  
</span><br>
<span class="quotelev1">&gt; not have any error handler triggered on the object.
</span><br>
<p>You want MPI to have *no* error mechanism defined for a given  
<br>
communicator/file/window?  That seems kinda broken.  Indeed, what you  
<br>
describe sounds a lot like MPI_ERRORS_RETURN -- meaning that you *do*  
<br>
have to set something specifically to get the error handler to  
<br>
effectively be a no-op (not NULL).
<br>
<p>To be clear: MPI_ERRHANDLER_NULL is described as an invalid error  
<br>
handler.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5484.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5482.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5481.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5484.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5484.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
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
