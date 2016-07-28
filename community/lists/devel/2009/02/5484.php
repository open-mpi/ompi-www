<?
$subject_val = "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 12:01:24 2009" -->
<!-- isoreceived="20090219170124" -->
<!-- sent="Thu, 19 Feb 2009 12:01:18 -0500" -->
<!-- isosent="20090219170118" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bugs and unexpected values in returned errors classes" -->
<!-- id="5C44BD20-1D51-47CA-A225-FE8C06576EDC_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FF4A3AEA-5476-4F3B-90DD-EE90F7B48A8E_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 12:01:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5485.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5483.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5483.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5488.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5488.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see how you reach this conclusion. Based on my reading of the  
<br>
standard, MPI_ERRHANDLER_NULL is a valid error handler defined as &quot;no&quot;  
<br>
errorhandler. Kind of similar with MPI_REQUEST_NULL ...
<br>
<p>Moreover, I don't agree with some of the other changes, more  
<br>
specifically with the one related to the MPI_Request_get_status. Here  
<br>
is a paragraph from the MPI 2.1 standard about MPI_Waitall page 59  
<br>
line 24: &quot;The list may contain null or inactive handles. The call sets  
<br>
to empty the status of each such entry.&quot; This basically tells me that  
<br>
the status of the MPI_REQUEST_NULL should be the empty status (defined  
<br>
in the MPI standard) and not any kind of errors (i.e MPI_ERR_ARG).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 19, 2009, at 11:43 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 19, 2009, at 10:47 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I fail to find anything about this on the MPI Standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI doesn't define any errors, does it?  :-)  I think it falls into  
</span><br>
<span class="quotelev1">&gt; the category of &quot;MPI tells you what to do&quot; and doesn't define what  
</span><br>
<span class="quotelev1">&gt; happens if you don't do that.  MPI_*_SET_ERRHANDLER says you have to  
</span><br>
<span class="quotelev1">&gt; pass an errhandler handle.  If you pass an invalid one (to include  
</span><br>
<span class="quotelev1">&gt; NULL or MPI_ERRHANDLER_NULL), it's an undefined error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For me passing the NULL error handle to any kind of set handler  
</span><br>
<span class="quotelev2">&gt;&gt; function should not be an error. It should means that you prefer to  
</span><br>
<span class="quotelev2">&gt;&gt; not have any error handler triggered on the object.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You want MPI to have *no* error mechanism defined for a given  
</span><br>
<span class="quotelev1">&gt; communicator/file/window?  That seems kinda broken.  Indeed, what  
</span><br>
<span class="quotelev1">&gt; you describe sounds a lot like MPI_ERRORS_RETURN -- meaning that you  
</span><br>
<span class="quotelev1">&gt; *do* have to set something specifically to get the error handler to  
</span><br>
<span class="quotelev1">&gt; effectively be a no-op (not NULL).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be clear: MPI_ERRHANDLER_NULL is described as an invalid error  
</span><br>
<span class="quotelev1">&gt; handler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5485.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5483.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5483.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5488.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5488.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
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
