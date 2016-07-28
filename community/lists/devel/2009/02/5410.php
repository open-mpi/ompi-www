<?
$subject_val = "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 19:02:50 2009" -->
<!-- isoreceived="20090213000250" -->
<!-- sent="Thu, 12 Feb 2009 16:02:44 -0800" -->
<!-- isosent="20090213000244" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bugs and unexpected values in returned errors classes" -->
<!-- id="7486E2A4-F6AD-4BE4-AC6E-DF59635DC8CF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40902110824i17d10aqf07764c2a5862c0a_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-02-12 19:02:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5411.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5409.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5398.php">Lisandro Dalcin: "[OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5423.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5423.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5424.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/12/7212.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 11, 2009, at 8:24 AM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; Below a list of stuff that I've got by running mpi4py testsuite. Never
</span><br>
<span class="quotelev1">&gt; reported them before just because some of them are not actually
</span><br>
<span class="quotelev1">&gt; errors, but anyway, I want to raise the discussion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Likely bugs (regarding my interpretation of the MPI standard)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) When passing MPI_REQUEST_NULL, MPI_Request_free() DO NOT fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) When passing MPI_REQUEST_NULL, MPI_Cancel() DO NOT fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) When passing MPI_REQUEST_NULL, MPI_Request_get_status() DO NOT  
</span><br>
<span class="quotelev1">&gt; fail.
</span><br>
<p>I agree with all of these; I'm not sure why we allowed  
<br>
MPI_REQUEST_NULL.  I double checked LAM/MPI -- it errors in all of  
<br>
these cases.  So OMPI now does, too.
<br>
<p><span class="quotelev1">&gt; 4)  When passing MPI_WIN_NULL, MPI_Win_get_errhandler() and
</span><br>
<span class="quotelev1">&gt; MPI_Win_set_errhandler()  DO NOT fail.
</span><br>
<p>I was a little more dubious here; the param checking code was  
<br>
specifically checking for MPI_WIN_NULL and not classifying it as an  
<br>
error.  Digging to find out why we did that, the best that I can come  
<br>
up with is that it is *not* an error to call MPI_File_set| 
<br>
get_errhandler on MPI_FILE_NULL (to set behavior for what happens when  
<br>
FILE_OPEN fails); I'm *guessing* that we simply copied the _File_ code  
<br>
to the _Win_ code and forgot to remove that extra check.
<br>
<p>I can't find anything in MPI-2.1 that says it is legal to call set|get  
<br>
errhandler on MPI_WIN_NULL.  I checked LAM as well; LAM errors in this  
<br>
case.  So I made this now be an error in OMPI as well.
<br>
<p>Do you need these in the 1.3 series?  Or are you ok waiting for 1.4  
<br>
(assuming 1.4 takes significantly less time to release than 1.3 :-) ).
<br>
<p><span class="quotelev1">&gt; - Unexpected errors classes (at least for me)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) When passing MPI_COMM_NULL, MPI_Comm_get_errhandler() fails with
</span><br>
<span class="quotelev1">&gt; MPI_ERR_ARG. I would expect MPI_ERR_COMM.
</span><br>
<p>I don't have a strong feeling on this one; I think you could probably  
<br>
argue either way.  That being said, we haven't paid too close  
<br>
attention to the error values that we return.  Unfortunately, I don't  
<br>
think there's much standardization between different MPI  
<br>
implementations, unless they share a common code ancestry.
<br>
<p><span class="quotelev1">&gt; 2) MPI_Type_free() fails with MPI_ERR_INTERN when passing predefined
</span><br>
<span class="quotelev1">&gt; datatypes like MPI_INT or MPI_FLOAT. I would expect MPI_ERR_TYPE.
</span><br>
<p>Ya, that seems weird.  Fixed.
<br>
<p><span class="quotelev1">&gt; - Controversial (I'm even fine with the current behavior)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) MPI_Info_get_nthkey(info, n) returns MPI_ERR_INFO_KEY when &quot;n&quot; is
</span><br>
<span class="quotelev1">&gt; larger that the number of keys. Perhaps MPI_ERR_ARG would be more
</span><br>
<span class="quotelev1">&gt; appropriate? A possible rationale would be that the error is not
</span><br>
<span class="quotelev1">&gt; related to the contents of a 'key' string, but an out of range value
</span><br>
<span class="quotelev1">&gt; for &quot;n&quot;.
</span><br>
<p>I don't have a particular opinion on this one.
<br>
<p><span class="quotelev1">&gt; That's all. Sorry for being so pedantic :-) and not offering help for
</span><br>
<span class="quotelev1">&gt; the patches, but I'm really busy.
</span><br>
<p><p>No worries; this stuff is great.  Thanks -- and keep it coming!  (we  
<br>
usually remember to cite people who submit stuff like this; e.g., <a href="https://svn.open-mpi.org/trac/ompi/changeset/20537">https://svn.open-mpi.org/trac/ompi/changeset/20537</a> 
<br>
&nbsp;&nbsp;and <a href="https://svn.open-mpi.org/trac/ompi/changeset/20538">https://svn.open-mpi.org/trac/ompi/changeset/20538</a>).
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
<li><strong>Next message:</strong> <a href="5411.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5409.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5398.php">Lisandro Dalcin: "[OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5423.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5423.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5424.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/12/7212.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
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
