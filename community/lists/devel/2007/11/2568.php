<?
$subject_val = "Re: [OMPI devel] accessors to context id and message id's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 18:01:52 2007" -->
<!-- isoreceived="20071107230152" -->
<!-- sent="Wed, 7 Nov 2007 18:01:41 -0500" -->
<!-- isosent="20071107230141" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] accessors to context id and message id's" -->
<!-- id="A8776995-9FFD-4BDC-9A4C-2DC9729F8453_at_EECS.UTK.EDU" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47306E5A.3020605_at_sun.com" -->
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
<strong>Date:</strong> 2007-11-07 18:01:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2569.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2567.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2557.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2586.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>Reply:</strong> <a href="2586.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 6, 2007, at 8:38 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If I understand correctly your question, then we don't need any
</span><br>
<span class="quotelev2">&gt;&gt; extension. Each request has a unique ID (from PERUSE perspective).
</span><br>
<span class="quotelev2">&gt;&gt; However, if I remember well this is only half implemented in our
</span><br>
<span class="quotelev2">&gt;&gt; PERUSE layer (i.e. it works only for expected requests).
</span><br>
<span class="quotelev1">&gt; Looking at the peruse macros it looks to be that the unique ID is the
</span><br>
<span class="quotelev1">&gt; base_req address which I imagine rarely matches between processes.
</span><br>
<p>That's a completely different topic. If what you need is a unique ID  
<br>
for each request between processes, in other words, a unique ID for  
<br>
each message, then here is the way to go. Use the same information as  
<br>
the MPI matching logic, i.e. (comm_id, remote, tag) to create an  
<br>
identifier for each message. It will not be unique as multiple  
<br>
messages can generate the same ID, but you can generate a unique ID  
<br>
per messages with easy tricks.
<br>
<p>The PERUSE standard requires that the ID is unique for each process,  
<br>
and for the lifetime of the request. It does not require that the ID  
<br>
be unique across processes. And this is why we're using the base_req  
<br>
as an ID.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This should be quite easy to fix, if someone invest few hours into  
</span><br>
<span class="quotelev2">&gt;&gt; it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the context id, a user can always use the c2f function to get the
</span><br>
<span class="quotelev2">&gt;&gt; fortran ID (which for Open MPI is the communicator ID).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Cool, I didn't realize that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 5, 2007, at 8:01 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Currently in order to do message tracing one either has to rely on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error prone postprocessing of data or replicating some MPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internals up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the PMPI layer.  It would help Sun's tools group (and I believe U
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dresden also) if Open MPI would create a couple APIs that exoposed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. PML Message ids used for a request
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Context id for a specific communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I could see a couple ways of providing this information.  Either by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extending the PERUSE probes or creating actual functions that one  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pass in a request handle or communicator handle to get the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appropriate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data back.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is just a thought right now which why this email is not in an  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RFC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; format.  I wanted to get a feel from the community as to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interest in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such APIs and if anyone may have specific issues with us providing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interfaces.  If the responses seems positive I will follow this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; up with an RFC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2568/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2569.php">Tim Prins: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2567.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2557.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2586.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>Reply:</strong> <a href="2586.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
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
