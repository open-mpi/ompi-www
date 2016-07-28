<?
$subject_val = "Re: [OMPI devel] accessors to context id and message id's";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 08:50:15 2007" -->
<!-- isoreceived="20071108135015" -->
<!-- sent="Thu, 08 Nov 2007 08:50:08 -0500" -->
<!-- isosent="20071108135008" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] accessors to context id and message id's" -->
<!-- id="47331410.1080909_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A8776995-9FFD-4BDC-9A4C-2DC9729F8453_at_EECS.UTK.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI devel] accessors to context id and message id's<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 08:50:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2587.php">Jeff Squyres: "[OMPI devel] Release wiki pages"</a>
<li><strong>Previous message:</strong> <a href="2585.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>In reply to:</strong> <a href="2568.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 6, 2007, at 8:38 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I understand correctly your question, then we don't need any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extension. Each request has a unique ID (from PERUSE perspective).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, if I remember well this is only half implemented in our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PERUSE layer (i.e. it works only for expected requests).
</span><br>
<span class="quotelev2">&gt;&gt; Looking at the peruse macros it looks to be that the unique ID is the
</span><br>
<span class="quotelev2">&gt;&gt; base_req address which I imagine rarely matches between processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's a completely different topic. If what you need is a unique ID 
</span><br>
<span class="quotelev1">&gt; for each request between processes, in other words, a unique ID for 
</span><br>
<span class="quotelev1">&gt; each message, then here is the way to go. Use the same information as 
</span><br>
<span class="quotelev1">&gt; the MPI matching logic, i.e. (comm_id, remote, tag) to create an 
</span><br>
<span class="quotelev1">&gt; identifier for each message. It will not be unique as multiple 
</span><br>
<span class="quotelev1">&gt; messages can generate the same ID, but you can generate a unique ID 
</span><br>
<span class="quotelev1">&gt; per messages with easy tricks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I understand that one could try and rely on the order of the message 
<br>
being sent and received however this only works if you ultimately 
<br>
capture every message  which is something I would like to avoid.  My 
<br>
hope was to use something already embedded into the library not having 
<br>
to add more crap on top of the library.  This seems like something that 
<br>
would be useful to any tracing utility (like vampir).  However, I 
<br>
imagine the arguement against such a thing is that not all MPI Librarys 
<br>
would support such an ID thus making this a one off.
<br>
<span class="quotelev1">&gt; The PERUSE standard requires that the ID is unique for each process, 
</span><br>
<span class="quotelev1">&gt; and for the lifetime of the request. It does not require that the ID 
</span><br>
<span class="quotelev1">&gt; be unique across processes. And this is why we're using the base_req 
</span><br>
<span class="quotelev1">&gt; as an ID.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I understand that the PERUSE spec did not define the ID to be unique 
<br>
across processes which is why I was surprised by your answer.  Score one 
<br>
for miscommunications.  It would have been nice if the PERUSE committee 
<br>
would have provided an option for an implementation to expose message ids.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This should be quite easy to fix, if someone invest few hours into it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the context id, a user can always use the c2f function to get the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fortran ID (which for Open MPI is the communicator ID).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cool, I didn't realize that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 5, 2007, at 8:01 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Currently in order to do message tracing one either has to rely on 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error prone postprocessing of data or replicating some MPI 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; internals up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the PMPI layer.  It would help Sun's tools group (and I believe U
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dresden also) if Open MPI would create a couple APIs that exoposed the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. PML Message ids used for a request
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. Context id for a specific communicator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I could see a couple ways of providing this information.  Either by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; extending the PERUSE probes or creating actual functions that one 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pass in a request handle or communicator handle to get the appropriate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; data back.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is just a thought right now which why this email is not in an RFC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; format.  I wanted to get a feel from the community as to the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interest in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; such APIs and if anyone may have specific issues with us providing 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; such
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interfaces.  If the responses seems positive I will follow this 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; up with an RFC.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2587.php">Jeff Squyres: "[OMPI devel] Release wiki pages"</a>
<li><strong>Previous message:</strong> <a href="2585.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>In reply to:</strong> <a href="2568.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
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
