<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 14 07:18:10 2006" -->
<!-- isoreceived="20061014111810" -->
<!-- sent="Fri, 13 Oct 2006 13:37:56 -0700" -->
<!-- isosent="20061013203756" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular" -->
<!-- id="BB6A645D-1DAE-4C0E-AC34-65508256BDA6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40610090841p170b9bf6i2c60f18b8df21d09_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-13 16:37:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1118.php">Jeff Squyres: "Re: [OMPI devel] Something broken using Persistent Requests"</a>
<li><strong>Previous message:</strong> <a href="1116.php">Jeff Squyres: "Re: [OMPI devel] Segment Faults in MPI_INIT"</a>
<li><strong>In reply to:</strong> <a href="1101.php">Lisandro Dalcin: "[OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 9, 2006, at 8:41 AM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; Looking at MPI-2 errata document,
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpi-forum.org/docs/errata-20-2.html">http://www.mpi-forum.org/docs/errata-20-2.html</a>, is says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Page 61, after line 36. Add the following (paralleling the errata  
</span><br>
<span class="quotelev1">&gt; to MPI-1.1):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_{COMM,WIN,FILE}_GET_ERRHANDLER behave as if a new error handler
</span><br>
<span class="quotelev1">&gt; object is created. That is, once the error handler is no longer
</span><br>
<span class="quotelev1">&gt; needed, MPI_ERRHANDLER_FREE should be called with the error handler
</span><br>
<span class="quotelev1">&gt; returned from MPI_ERRHANDLER_GET or MPI_{COMM,WIN,FILE}_GET_ERRHANDLER
</span><br>
<span class="quotelev1">&gt; to mark the error handler for deallocation. This provides behavior
</span><br>
<span class="quotelev1">&gt; similar to that of MPI_COMM_GROUP and MPI_GROUP_FREE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, is seems that OMPI does not currently follow this specification.
</span><br>
<span class="quotelev1">&gt; Any plans to change this? Or it will not go in?
</span><br>
<p>I'm not sure what you mean here -- OMPI currently increases the  
<br>
reference count on the errhandlers returned by COM|WIN| 
<br>
FILE_GET_ERRHANDLER (ERRHANDLER_GET is a synonym for  
<br>
COMM_GET_ERRHANDLER).  So when you call ERRHANDLER_FREE, it decreases  
<br>
the refcount, and if the refcount is 0, it actually frees the error  
<br>
handler (the user's handle is always set to ERRHANDLER_NULL,  
<br>
regardless of whether the reference count went to 0 or not).
<br>
<p>Remember, too, that all communications increase the refcount on the  
<br>
associated communicator's errhandler.  So even if you ERRHANDLER_FREE  
<br>
an errhandler, if it's still associated with an ongoing  
<br>
communication, the back-end object won't be freed right away.
<br>
<p>Can you cite a specific example of what you're trying to do and how  
<br>
OMPI is doing it wrong?
<br>
<p><span class="quotelev1">&gt; Additionaly, I've noted that MPI_File_get_errhandler fails with
</span><br>
<span class="quotelev1">&gt; MPI_ERR_FILE is passed file handle is MPI_FILE_NULL. However, I
</span><br>
<span class="quotelev1">&gt; undersand (regarding the standard) this is the handle to query to
</span><br>
<span class="quotelev1">&gt; get/set/reset the default error handler for new files... I think
</span><br>
<span class="quotelev1">&gt; MPI_File_{get|set}_errhandler should accept MPI_FILE_NULL handle. Am I
</span><br>
<span class="quotelev1">&gt; right?
</span><br>
<p>By MPI-2:9.7, you are exactly correct.  OMPI currently allows  
<br>
MPI_FILE_SET_ERRHANDLER(MPI_FILE_NULL, ...) (there's even an explicit  
<br>
reference to MPI-2:9.7 in a comment in the source), but it looks like  
<br>
an oversight that we don't allow MPI_FILE_GET_ERRHANDLER 
<br>
(MPI_FILE_NULL, ...).  I will fix.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1118.php">Jeff Squyres: "Re: [OMPI devel] Something broken using Persistent Requests"</a>
<li><strong>Previous message:</strong> <a href="1116.php">Jeff Squyres: "Re: [OMPI devel] Segment Faults in MPI_INIT"</a>
<li><strong>In reply to:</strong> <a href="1101.php">Lisandro Dalcin: "[OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular"</a>
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
