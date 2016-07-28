<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 16:24:11 2013" -->
<!-- isoreceived="20130104212411" -->
<!-- sent="Fri, 4 Jan 2013 13:24:04 -0800" -->
<!-- isosent="20130104212404" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime" -->
<!-- id="B162CEAF-A0E1-4F7B-9624-91C62BB12EB2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="37BD4EF6-E0A8-459D-8E8D-28EF9AE0C324_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-04 16:24:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11898.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>Previous message:</strong> <a href="11896.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>In reply to:</strong> <a href="11896.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11898.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>Reply:</strong> <a href="11898.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've had zero luck using that approach in the past - finding a function that has been removed is hard, to say the least. The modex_recv area contains a balanced set of functions that includes both send/recv for each class of API. It was done that way to make it easy for developers to use whatever they needed - otherwise, people tend to write code directly into their local areas.
<br>
<p>I'd prefer to have some currently-unused function that completes the set. Or let's set a policy and go thru every class and framework defined in opal/orte/ompi and remove all APIs that aren't currently used - after all, we can restore those from svn someday too, can't we?
<br>
<p><p>On Jan 4, 2013, at 1:18 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This function now belong to our svn history, and will therefore be resurrected as soon as the need for it become essential. Until then, there is no real value of having such a function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 4, 2013, at 22:08 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I guess it's actually the &quot;recv_string_pointer&quot; function that is used for this purpose, but I'd rather not just willy-nilly prune functions out of the code base because they aren't currently used. If we apply that criteria, a lot of functions that are there for future and/or historical reasons would be eliminated - and eventually likely restored.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't see how this function hurt anyone - other than esthetics, is there a reason why this particular function must be removed?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 4, 2013, at 1:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Whoa - that function is used, I believe, to retrieve the pointer to the hostname info in the ompi_proc_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 4, 2013, at 12:50 PM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2013-01-04 15:50:25 EST (Fri, 04 Jan 2013)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 27744
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27744">https://svn.open-mpi.org/trac/ompi/changeset/27744</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Remove the unnecessary ompi_modex_recv_pointer function.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/ompi/runtime/ompi_module_exchange.c |    22 ----------------------                  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/ompi/runtime/ompi_module_exchange.h |     5 -----                                   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 files changed, 0 insertions(+), 27 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/ompi/runtime/ompi_module_exchange.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/ompi/runtime/ompi_module_exchange.c	Fri Jan  4 15:47:25 2013	(r27743)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/runtime/ompi_module_exchange.c	2013-01-04 15:50:25 EST (Fri, 04 Jan 2013)	(r27744)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -90,28 +90,6 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -/* return a pointer to the data, but don't create a new copy of it */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -int ompi_modex_recv_pointer(const mca_base_component_t *component,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                            const ompi_proc_t *proc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                            void **buffer, opal_data_type_t type)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -{
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    int rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    char *name = mca_base_component_to_string(component);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    /* set defaults */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    *buffer = NULL;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    if (NULL == name) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    /* the fetch_poointer API returns a pointer to the data */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    rc = orte_db.fetch_pointer(&amp;proc-&gt;proc_name, name, buffer, type);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    free(name);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_modex_send_string(const char* key,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     const void *buffer, size_t size)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/ompi/runtime/ompi_module_exchange.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/ompi/runtime/ompi_module_exchange.h	Fri Jan  4 15:47:25 2013	(r27743)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/runtime/ompi_module_exchange.h	2013-01-04 15:50:25 EST (Fri, 04 Jan 2013)	(r27744)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -191,11 +191,6 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                const ompi_proc_t *source_proc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                                void **buffer, size_t *size);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -OMPI_DECLSPEC int ompi_modex_recv_pointer(const mca_base_component_t *component,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                                          const ompi_proc_t *proc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                                          void **buffer, opal_data_type_t type);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /**
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Receive a buffer from a given peer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="11898.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>Previous message:</strong> <a href="11896.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>In reply to:</strong> <a href="11896.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11898.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>Reply:</strong> <a href="11898.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
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
