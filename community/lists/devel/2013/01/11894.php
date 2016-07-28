<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 16:08:32 2013" -->
<!-- isoreceived="20130104210832" -->
<!-- sent="Fri, 4 Jan 2013 13:08:25 -0800" -->
<!-- isosent="20130104210825" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime" -->
<!-- id="57363247-B6E7-4315-8E45-01DD8700FA24_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FD334978-BC33-4E09-B40D-DC46BDF2A52B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-01-04 16:08:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11895.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk: ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows"</a>
<li><strong>Previous message:</strong> <a href="11893.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>In reply to:</strong> <a href="11893.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11896.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>Reply:</strong> <a href="11896.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess it's actually the &quot;recv_string_pointer&quot; function that is used for this purpose, but I'd rather not just willy-nilly prune functions out of the code base because they aren't currently used. If we apply that criteria, a lot of functions that are there for future and/or historical reasons would be eliminated - and eventually likely restored.
<br>
<p>I don't see how this function hurt anyone - other than esthetics, is there a reason why this particular function must be removed?
<br>
<p><p>On Jan 4, 2013, at 1:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Whoa - that function is used, I believe, to retrieve the pointer to the hostname info in the ompi_proc_t
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 4, 2013, at 12:50 PM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2013-01-04 15:50:25 EST (Fri, 04 Jan 2013)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 27744
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27744">https://svn.open-mpi.org/trac/ompi/changeset/27744</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Remove the unnecessary ompi_modex_recv_pointer function.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/runtime/ompi_module_exchange.c |    22 ----------------------                  
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/runtime/ompi_module_exchange.h |     5 -----                                   
</span><br>
<span class="quotelev2">&gt;&gt;  2 files changed, 0 insertions(+), 27 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/runtime/ompi_module_exchange.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/runtime/ompi_module_exchange.c	Fri Jan  4 15:47:25 2013	(r27743)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/runtime/ompi_module_exchange.c	2013-01-04 15:50:25 EST (Fri, 04 Jan 2013)	(r27744)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -90,28 +90,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;    return rc;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -/* return a pointer to the data, but don't create a new copy of it */
</span><br>
<span class="quotelev2">&gt;&gt; -int ompi_modex_recv_pointer(const mca_base_component_t *component,
</span><br>
<span class="quotelev2">&gt;&gt; -                            const ompi_proc_t *proc,
</span><br>
<span class="quotelev2">&gt;&gt; -                            void **buffer, opal_data_type_t type)
</span><br>
<span class="quotelev2">&gt;&gt; -{
</span><br>
<span class="quotelev2">&gt;&gt; -    int rc;
</span><br>
<span class="quotelev2">&gt;&gt; -    char *name = mca_base_component_to_string(component);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* set defaults */
</span><br>
<span class="quotelev2">&gt;&gt; -    *buffer = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    if (NULL == name) {
</span><br>
<span class="quotelev2">&gt;&gt; -        return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -    
</span><br>
<span class="quotelev2">&gt;&gt; -    /* the fetch_poointer API returns a pointer to the data */
</span><br>
<span class="quotelev2">&gt;&gt; -    rc = orte_db.fetch_pointer(&amp;proc-&gt;proc_name, name, buffer, type);
</span><br>
<span class="quotelev2">&gt;&gt; -    free(name);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    return rc;
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; int
</span><br>
<span class="quotelev2">&gt;&gt; ompi_modex_send_string(const char* key,
</span><br>
<span class="quotelev2">&gt;&gt;                       const void *buffer, size_t size)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/runtime/ompi_module_exchange.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/runtime/ompi_module_exchange.h	Fri Jan  4 15:47:25 2013	(r27743)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/runtime/ompi_module_exchange.h	2013-01-04 15:50:25 EST (Fri, 04 Jan 2013)	(r27744)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -191,11 +191,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;                                  const ompi_proc_t *source_proc,
</span><br>
<span class="quotelev2">&gt;&gt;                                  void **buffer, size_t *size);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -OMPI_DECLSPEC int ompi_modex_recv_pointer(const mca_base_component_t *component,
</span><br>
<span class="quotelev2">&gt;&gt; -                                          const ompi_proc_t *proc,
</span><br>
<span class="quotelev2">&gt;&gt; -                                          void **buffer, opal_data_type_t type);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; /**
</span><br>
<span class="quotelev2">&gt;&gt; * Receive a buffer from a given peer
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11895.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk: ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows"</a>
<li><strong>Previous message:</strong> <a href="11893.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>In reply to:</strong> <a href="11893.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11896.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>Reply:</strong> <a href="11896.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
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
