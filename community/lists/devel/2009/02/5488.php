<?
$subject_val = "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 13:19:01 2009" -->
<!-- isoreceived="20090219181901" -->
<!-- sent="Thu, 19 Feb 2009 13:18:54 -0500" -->
<!-- isosent="20090219181854" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bugs and unexpected values in returned errors classes" -->
<!-- id="158A6357-4E21-4CBF-BBD0-A83B38784570_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="5C44BD20-1D51-47CA-A225-FE8C06576EDC_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-02-19 13:18:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5489.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5487.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5484.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5497.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5497.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 19, 2009, at 12:01 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I don't see how you reach this conclusion. Based on my reading of  
</span><br>
<span class="quotelev1">&gt; the standard, MPI_ERRHANDLER_NULL is a valid error handler defined  
</span><br>
<span class="quotelev1">&gt; as &quot;no&quot; errorhandler. Kind of similar with MPI_REQUEST_NULL ...
</span><br>
<p>It is not valid; MPI specifically defines both of these as invalid  
<br>
handles.
<br>
<p>MPI-2.1 2.5.1 p13:6-11:
<br>
<p>Opaque objects are allocated and deallocated by calls that are  
<br>
specific to each object
<br>
type. These are listed in the sections where the objects are  
<br>
described. The calls accept a
<br>
handle argument of matching type. In an allocate call this is an OUT  
<br>
argument that returns
<br>
a valid reference to the object. In a call to deallocate this is an  
<br>
INOUT argument which
<br>
returns with an &#147;invalid handle&#148; value. MPI provides an &#147;invalid  
<br>
handle&#148; constant for each
<br>
object type. Comparisons to this constant are used to test for  
<br>
validity of the handle.
<br>
<p>And MPI-2.1 8.3.4 p270:26-28 says that MPI_ERRHANDLER_FREE sets the  
<br>
INOUT argument to MPI_ERRHANDLER_NULL.
<br>
<p>Hence, my read is that MPI_ERRHANDLER_NULL is an invalid handle and  
<br>
should therefore invoke an MPI exception if you pass it to  
<br>
MPI_*_SET_ERRHANDLER.
<br>
<p>Am I missing text somewhere that says that MPI_ERRHANDLER_NULL is a  
<br>
valid handle and should effectively be treated the same as  
<br>
MPI_ERRORS_RETURN?
<br>
<p><span class="quotelev1">&gt; Moreover, I don't agree with some of the other changes, more  
</span><br>
<span class="quotelev1">&gt; specifically with the one related to the MPI_Request_get_status.  
</span><br>
<span class="quotelev1">&gt; Here is a paragraph from the MPI 2.1 standard about MPI_Waitall page  
</span><br>
<span class="quotelev1">&gt; 59 line 24: &quot;The list may contain null or inactive handles. The call  
</span><br>
<span class="quotelev1">&gt; sets to empty the status of each such entry.&quot; This basically tells  
</span><br>
<span class="quotelev1">&gt; me that the status of the MPI_REQUEST_NULL should be the empty  
</span><br>
<span class="quotelev1">&gt; status (defined in the MPI standard) and not any kind of errors (i.e  
</span><br>
<span class="quotelev1">&gt; MPI_ERR_ARG).
</span><br>
<p>I agree for MPI_TEST* and MPI_WAIT*.  MPI_REQUEST_NULL is an invalid  
<br>
handle, which is why the specific exception is noted for MPI_TEST* and  
<br>
MPI_WAIT* (at least, that was my understanding).
<br>
<p>But why would you call MPI_REQUEST_GET_STATUS with MPI_REQUEST_NULL?   
<br>
Is there language somewhere that says it is valid to call  
<br>
MPI_REQUEST_GET_STATUS with MPI_REQUEST_NULL?  If not, then I think it  
<br>
falls in the same category as passing MPI_ERRHANDLER_NULL to  
<br>
MPI_*_SET_ERRHANDLER above -- it's an invalid handle, and therefore  
<br>
should generate an MPI exception.
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
<li><strong>Next message:</strong> <a href="5489.php">Jeff Squyres: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5487.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5484.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5497.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5497.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
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
