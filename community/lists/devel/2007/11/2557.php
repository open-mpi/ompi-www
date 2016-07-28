<?
$subject_val = "Re: [OMPI devel] accessors to context id and message id's";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 08:38:38 2007" -->
<!-- isoreceived="20071106133838" -->
<!-- sent="Tue, 06 Nov 2007 08:38:34 -0500" -->
<!-- isosent="20071106133834" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] accessors to context id and message id's" -->
<!-- id="47306E5A.3020605_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8F1A2DF8-BAD5-45AF-9B39-F823D25DA31B_at_eecs.utk.edu" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-06 08:38:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2558.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Previous message:</strong> <a href="2556.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>In reply to:</strong> <a href="2556.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2568.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>Reply:</strong> <a href="2568.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; If I understand correctly your question, then we don't need any 
</span><br>
<span class="quotelev1">&gt; extension. Each request has a unique ID (from PERUSE perspective). 
</span><br>
<span class="quotelev1">&gt; However, if I remember well this is only half implemented in our 
</span><br>
<span class="quotelev1">&gt; PERUSE layer (i.e. it works only for expected requests). 
</span><br>
Looking at the peruse macros it looks to be that the unique ID is the 
<br>
base_req address which I imagine rarely matches between processes.
<br>
<span class="quotelev1">&gt; This should be quite easy to fix, if someone invest few hours into it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the context id, a user can always use the c2f function to get the 
</span><br>
<span class="quotelev1">&gt; fortran ID (which for Open MPI is the communicator ID).
</span><br>
<span class="quotelev1">&gt;
</span><br>
Cool, I didn't realize that.
<br>
<p>thanks,
<br>
<p>--td
<br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 5, 2007, at 8:01 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently in order to do message tracing one either has to rely on some
</span><br>
<span class="quotelev2">&gt;&gt; error prone postprocessing of data or replicating some MPI internals up
</span><br>
<span class="quotelev2">&gt;&gt; in the PMPI layer.  It would help Sun's tools group (and I believe U
</span><br>
<span class="quotelev2">&gt;&gt; Dresden also) if Open MPI would create a couple APIs that exoposed the
</span><br>
<span class="quotelev2">&gt;&gt; following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. PML Message ids used for a request
</span><br>
<span class="quotelev2">&gt;&gt; 2. Context id for a specific communicator
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I could see a couple ways of providing this information.  Either by
</span><br>
<span class="quotelev2">&gt;&gt; extending the PERUSE probes or creating actual functions that one would
</span><br>
<span class="quotelev2">&gt;&gt; pass in a request handle or communicator handle to get the appropriate
</span><br>
<span class="quotelev2">&gt;&gt; data back.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is just a thought right now which why this email is not in an RFC
</span><br>
<span class="quotelev2">&gt;&gt; format.  I wanted to get a feel from the community as to the interest in
</span><br>
<span class="quotelev2">&gt;&gt; such APIs and if anyone may have specific issues with us providing such
</span><br>
<span class="quotelev2">&gt;&gt; interfaces.  If the responses seems positive I will follow this message
</span><br>
<span class="quotelev2">&gt;&gt; up with an RFC.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2558.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Previous message:</strong> <a href="2556.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>In reply to:</strong> <a href="2556.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2568.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>Reply:</strong> <a href="2568.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
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
