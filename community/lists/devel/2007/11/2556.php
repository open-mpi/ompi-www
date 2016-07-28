<?
$subject_val = "Re: [OMPI devel] accessors to context id and message id's";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 22:23:36 2007" -->
<!-- isoreceived="20071106032336" -->
<!-- sent="Mon, 5 Nov 2007 11:39:41 -0500" -->
<!-- isosent="20071105163941" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] accessors to context id and message id's" -->
<!-- id="8F1A2DF8-BAD5-45AF-9B39-F823D25DA31B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="472F1413.5080902_at_sun.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 11:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2557.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>Previous message:</strong> <a href="2555.php">Tim Prins: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>In reply to:</strong> <a href="2545.php">Terry Dontje: "[OMPI devel] accessors to context id and message id's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2557.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>Reply:</strong> <a href="2557.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I understand correctly your question, then we don't need any  
<br>
extension. Each request has a unique ID (from PERUSE perspective).  
<br>
However, if I remember well this is only half implemented in our  
<br>
PERUSE layer (i.e. it works only for expected requests). This should  
<br>
be quite easy to fix, if someone invest few hours into it.
<br>
<p>For the context id, a user can always use the c2f function to get the  
<br>
fortran ID (which for Open MPI is the communicator ID).
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 5, 2007, at 8:01 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Currently in order to do message tracing one either has to rely on  
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev1">&gt; error prone postprocessing of data or replicating some MPI internals  
</span><br>
<span class="quotelev1">&gt; up
</span><br>
<span class="quotelev1">&gt; in the PMPI layer.  It would help Sun's tools group (and I believe U
</span><br>
<span class="quotelev1">&gt; Dresden also) if Open MPI would create a couple APIs that exoposed the
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. PML Message ids used for a request
</span><br>
<span class="quotelev1">&gt; 2. Context id for a specific communicator
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could see a couple ways of providing this information.  Either by
</span><br>
<span class="quotelev1">&gt; extending the PERUSE probes or creating actual functions that one  
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev1">&gt; pass in a request handle or communicator handle to get the appropriate
</span><br>
<span class="quotelev1">&gt; data back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is just a thought right now which why this email is not in an RFC
</span><br>
<span class="quotelev1">&gt; format.  I wanted to get a feel from the community as to the  
</span><br>
<span class="quotelev1">&gt; interest in
</span><br>
<span class="quotelev1">&gt; such APIs and if anyone may have specific issues with us providing  
</span><br>
<span class="quotelev1">&gt; such
</span><br>
<span class="quotelev1">&gt; interfaces.  If the responses seems positive I will follow this  
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev1">&gt; up with an RFC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2556/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2557.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>Previous message:</strong> <a href="2555.php">Tim Prins: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>In reply to:</strong> <a href="2545.php">Terry Dontje: "[OMPI devel] accessors to context id and message id's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2557.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>Reply:</strong> <a href="2557.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
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
