<?
$subject_val = "Re: [OMPI devel] [devel-core] RFC: extend MTL API";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 07:08:28 2011" -->
<!-- isoreceived="20110705110828" -->
<!-- sent="Tue, 5 Jul 2011 13:08:14 +0200" -->
<!-- isosent="20110705110814" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] RFC: extend MTL API" -->
<!-- id="EBF4D72A-1112-48E0-BDFE-83BC948005CD_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTinun+5N1TWKoT5g7z_VqJijC7qUrw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [devel-core] RFC: extend MTL API<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 07:08:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9473.php">Colon, Joseanibal: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>Previous message:</strong> <a href="9471.php">Xin He: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="9452.php">Mike Dubman: "[OMPI devel] RFC: extend MTL API"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9508.php">Barrett, Brian W: "Re: [OMPI devel] [devel-core] RFC: extend MTL API"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The request make perfect sense.
<br>
<p>I have a suggestion regarding the implementation: please add the two new functions to the exported MTL structure in each MTL (like in the attached patch for MX).
<br>
<p>Index: ompi/mca/mtl/mx/mtl_mx.c
<br>
===================================================================
<br>
--- ompi/mca/mtl/mx/mtl_mx.c	(revision 24855)
<br>
+++ ompi/mca/mtl/mx/mtl_mx.c	(working copy)
<br>
@@ -59,7 +59,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mtl_mx_irecv,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_mtl_mx_iprobe,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-        ompi_mtl_mx_cancel
<br>
+        ompi_mtl_mx_cancel,
<br>
+        NULL,
<br>
+        NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}    
<br>
&nbsp;};
<br>
<p><p>Thanks,
<br>
&nbsp;&nbsp;george.
<br>
<p>On Jul 1, 2011, at 16:45 , Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Adding communicator add/delete callbacks to MTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: MTL will be able to separate messages on different contexts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: On trunk (later on v1.5 as well), Tuesday telconf, 5 July 2011
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Tuesday telconf, 12 July 2011
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DETAILS:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  Currently MTLs do no handle communicator contexts in any special way,
</span><br>
<span class="quotelev1">&gt; they only add the context id to the tag selection of the underlying 
</span><br>
<span class="quotelev1">&gt; messaging meachinsm. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  We would like to enable an MTL to maintain its own context data
</span><br>
<span class="quotelev1">&gt; per-communicator. This way an MTL will be able to queue incoming eager 
</span><br>
<span class="quotelev1">&gt; messages and rendezvous requests per-communicator basis.
</span><br>
<span class="quotelev1">&gt;  The MTL will be allowed to override comm-&gt;c_pml_comm member, 
</span><br>
<span class="quotelev1">&gt; since it's unused in pml_cm anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff -r 0f757f8f3efb -r 8fcf276ee527 ompi/mca/mtl/mtl.h
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/mtl/mtl.h Thu Jun 30 14:13:33 2011 +0300
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/mtl/mtl.h Fri Jul 01 13:54:20 2011 +0300
</span><br>
<span class="quotelev1">&gt; @@ -355,6 +355,34 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt; + * Downcall from PML layer when a new communicator is created.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * @param comm  Communicator
</span><br>
<span class="quotelev1">&gt; + * @return      OMPI_SUCCESS or failure status.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Provides the MTL the opportunity to initialize/cache a data structure
</span><br>
<span class="quotelev1">&gt; + * on the communicator.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +typedef int (*mca_mtl_base_module_add_comm_fn_t)(
</span><br>
<span class="quotelev1">&gt; +                          struct mca_mtl_base_module_t* mtl,
</span><br>
<span class="quotelev1">&gt; +                          struct ompi_communicator_t* comm);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt; + * Downcall from PML layer when a communicator is destroyed.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * @param comm  Communicator
</span><br>
<span class="quotelev1">&gt; + * @return      OMPI_SUCCESS or failure status.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Provides the MTL the opportunity to cleanup any datastructures
</span><br>
<span class="quotelev1">&gt; + * associated with the communicator.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +typedef int (*mca_mtl_base_module_del_comm_fn_t)(
</span><br>
<span class="quotelev1">&gt; +                          struct mca_mtl_base_module_t* mtl,
</span><br>
<span class="quotelev1">&gt; +                          struct ompi_communicator_t* comm);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**
</span><br>
<span class="quotelev1">&gt;   * MTL module interface functions and attributes.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  struct mca_mtl_base_module_t {
</span><br>
<span class="quotelev1">&gt; @@ -368,7 +396,6 @@
</span><br>
<span class="quotelev1">&gt;      mca_mtl_base_module_add_procs_fn_t   mtl_add_procs;
</span><br>
<span class="quotelev1">&gt;      mca_mtl_base_module_del_procs_fn_t   mtl_del_procs;
</span><br>
<span class="quotelev1">&gt;      mca_mtl_base_module_finalize_fn_t    mtl_finalize;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;      mca_mtl_base_module_send_fn_t        mtl_send;
</span><br>
<span class="quotelev1">&gt;      mca_mtl_base_module_isend_fn_t       mtl_isend;
</span><br>
<span class="quotelev1">&gt;      mca_mtl_base_module_irecv_fn_t       mtl_irecv;
</span><br>
<span class="quotelev1">&gt; @@ -376,6 +403,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      /* Optional MTL functions */
</span><br>
<span class="quotelev1">&gt;      mca_mtl_base_module_cancel_fn_t      mtl_cancel;
</span><br>
<span class="quotelev1">&gt; +    mca_mtl_base_module_add_comm_fn_t    mtl_add_comm;
</span><br>
<span class="quotelev1">&gt; +    mca_mtl_base_module_del_comm_fn_t    mtl_del_comm;
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  typedef struct mca_mtl_base_module_t mca_mtl_base_module_t;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; diff -r 0f757f8f3efb -r 8fcf276ee527 ompi/mca/pml/cm/pml_cm.c
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/pml/cm/pml_cm.c Thu Jun 30 14:13:33 2011 +0300
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/pml/cm/pml_cm.c Fri Jul 01 13:54:20 2011 +0300
</span><br>
<span class="quotelev1">&gt; @@ -82,14 +82,22 @@
</span><br>
<span class="quotelev1">&gt;  int
</span><br>
<span class="quotelev1">&gt;  mca_pml_cm_add_comm(ompi_communicator_t* comm)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; +    int ret;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      /* should never happen, but it was, so check */
</span><br>
<span class="quotelev1">&gt;      if (comm-&gt;c_contextid &gt; ompi_pml_cm.super.pml_max_contextid) {
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    /* setup our per-communicator data */
</span><br>
<span class="quotelev1">&gt; +    /* initialize per-communicator data. MTLs may override this. */
</span><br>
<span class="quotelev1">&gt;      comm-&gt;c_pml_comm = NULL;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    /* notify the MTL about the added communicator */
</span><br>
<span class="quotelev1">&gt; +    if ((NULL != ompi_mtl-&gt;mtl_add_comm) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        (OMPI_SUCCESS != (ret = OMPI_MTL_CALL(add_comm(ompi_mtl, comm))))) {
</span><br>
<span class="quotelev1">&gt; +        return ret;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -97,8 +105,13 @@
</span><br>
<span class="quotelev1">&gt;  int
</span><br>
<span class="quotelev1">&gt;  mca_pml_cm_del_comm(ompi_communicator_t* comm)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    /* clean up our per-communicator data */
</span><br>
<span class="quotelev1">&gt; -    comm-&gt;c_pml_comm = NULL;
</span><br>
<span class="quotelev1">&gt; +    int ret;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* notify the MTL about the deleted communicator */
</span><br>
<span class="quotelev1">&gt; +    if ((NULL != ompi_mtl-&gt;mtl_del_comm) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +        (OMPI_SUCCESS != (ret = OMPI_MTL_CALL(del_comm(ompi_mtl, comm))))) {
</span><br>
<span class="quotelev1">&gt; +        return ret;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel-core mailing list
</span><br>
<span class="quotelev1">&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9473.php">Colon, Joseanibal: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>Previous message:</strong> <a href="9471.php">Xin He: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="9452.php">Mike Dubman: "[OMPI devel] RFC: extend MTL API"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9508.php">Barrett, Brian W: "Re: [OMPI devel] [devel-core] RFC: extend MTL API"</a>
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
