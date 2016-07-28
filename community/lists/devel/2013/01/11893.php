<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 16:01:18 2013" -->
<!-- isoreceived="20130104210118" -->
<!-- sent="Fri, 4 Jan 2013 13:01:11 -0800" -->
<!-- isosent="20130104210111" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime" -->
<!-- id="FD334978-BC33-4E09-B40D-DC46BDF2A52B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130104205025.8644F1602FC_at_tiger.crest.iu.edu" -->
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
<strong>Date:</strong> 2013-01-04 16:01:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11894.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>Previous message:</strong> <a href="11892.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk: ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11894.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>Reply:</strong> <a href="11894.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whoa - that function is used, I believe, to retrieve the pointer to the hostname info in the ompi_proc_t
<br>
<p><p>On Jan 4, 2013, at 12:50 PM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev1">&gt; Date: 2013-01-04 15:50:25 EST (Fri, 04 Jan 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 27744
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27744">https://svn.open-mpi.org/trac/ompi/changeset/27744</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Remove the unnecessary ompi_modex_recv_pointer function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/runtime/ompi_module_exchange.c |    22 ----------------------                  
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/runtime/ompi_module_exchange.h |     5 -----                                   
</span><br>
<span class="quotelev1">&gt;   2 files changed, 0 insertions(+), 27 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/runtime/ompi_module_exchange.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/runtime/ompi_module_exchange.c	Fri Jan  4 15:47:25 2013	(r27743)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/runtime/ompi_module_exchange.c	2013-01-04 15:50:25 EST (Fri, 04 Jan 2013)	(r27744)
</span><br>
<span class="quotelev1">&gt; @@ -90,28 +90,6 @@
</span><br>
<span class="quotelev1">&gt;     return rc;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -/* return a pointer to the data, but don't create a new copy of it */
</span><br>
<span class="quotelev1">&gt; -int ompi_modex_recv_pointer(const mca_base_component_t *component,
</span><br>
<span class="quotelev1">&gt; -                            const ompi_proc_t *proc,
</span><br>
<span class="quotelev1">&gt; -                            void **buffer, opal_data_type_t type)
</span><br>
<span class="quotelev1">&gt; -{
</span><br>
<span class="quotelev1">&gt; -    int rc;
</span><br>
<span class="quotelev1">&gt; -    char *name = mca_base_component_to_string(component);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* set defaults */
</span><br>
<span class="quotelev1">&gt; -    *buffer = NULL;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    if (NULL == name) {
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; -    /* the fetch_poointer API returns a pointer to the data */
</span><br>
<span class="quotelev1">&gt; -    rc = orte_db.fetch_pointer(&amp;proc-&gt;proc_name, name, buffer, type);
</span><br>
<span class="quotelev1">&gt; -    free(name);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    return rc;
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; ompi_modex_send_string(const char* key,
</span><br>
<span class="quotelev1">&gt;                        const void *buffer, size_t size)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/runtime/ompi_module_exchange.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/runtime/ompi_module_exchange.h	Fri Jan  4 15:47:25 2013	(r27743)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/runtime/ompi_module_exchange.h	2013-01-04 15:50:25 EST (Fri, 04 Jan 2013)	(r27744)
</span><br>
<span class="quotelev1">&gt; @@ -191,11 +191,6 @@
</span><br>
<span class="quotelev1">&gt;                                   const ompi_proc_t *source_proc,
</span><br>
<span class="quotelev1">&gt;                                   void **buffer, size_t *size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -OMPI_DECLSPEC int ompi_modex_recv_pointer(const mca_base_component_t *component,
</span><br>
<span class="quotelev1">&gt; -                                          const ompi_proc_t *proc,
</span><br>
<span class="quotelev1">&gt; -                                          void **buffer, opal_data_type_t type);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;  * Receive a buffer from a given peer
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11894.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>Previous message:</strong> <a href="11892.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27739 - in trunk: ompi/mca/btl/sm ompi/mca/common/sm ompi/mca/mpool/sm opal/mca/shmem opal/mca/shmem/mmap opal/mca/shmem/posix opal/mca/shmem/sysv opal/mca/shmem/windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11894.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
<li><strong>Reply:</strong> <a href="11894.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27744 - trunk/ompi/runtime"</a>
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
