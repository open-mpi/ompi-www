<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 23 12:22:53 2006" -->
<!-- isoreceived="20060223172253" -->
<!-- sent="Thu, 23 Feb 2006 10:22:50 -0700" -->
<!-- isosent="20060223172250" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r9118" -->
<!-- id="43FDEF6A.2050902_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200602230039.k1N0d2iF029386_at_magrathea.osl.iu.edu" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-23 12:22:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/03/0739.php">Andy Selle: "[OMPI devel] C++ bool type reduction failing"</a>
<li><strong>Previous message:</strong> <a href="0737.php">Ralph H. Castain: "Re: [OMPI devel]  Alpha 4 and job state  transitions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Brian...
<br>
<p><p>brbarret_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: brbarret
</span><br>
<span class="quotelev1">&gt; Date: 2006-02-22 19:39:01 -0500 (Wed, 22 Feb 2006)
</span><br>
<span class="quotelev1">&gt; New Revision: 9118
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/communicator/comm.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/base/pml_base_bsend.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/base/pml_base_module_exchange.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/base/pml_base_open.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/dr/pml_dr_comm.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/dr/pml_dr_recvfrag.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/ob1/pml_ob1_comm.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/ob1/pml_ob1_recvfrag.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/pml.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/tools/ompi_info/components.cc
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/tools/ompi_info/ompi_info.cc
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; * finish the TEG/UNIQ/PTL removal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/communicator/comm.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/communicator/comm.c	2006-02-22 21:53:08 UTC (rev 9117)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/communicator/comm.c	2006-02-23 00:39:01 UTC (rev 9118)
</span><br>
<span class="quotelev1">&gt; @@ -34,7 +34,6 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/attribute/attribute.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;ompi/mca/ptl/base/ptl_base_comm.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/request/request.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/base/pml_base_bsend.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/base/pml_base_bsend.h	2006-02-22 21:53:08 UTC (rev 9117)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/base/pml_base_bsend.h	2006-02-23 00:39:01 UTC (rev 9118)
</span><br>
<span class="quotelev1">&gt; @@ -24,7 +24,6 @@
</span><br>
<span class="quotelev1">&gt;  #if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev1">&gt;  extern &quot;C&quot; {
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; -struct mca_ptl_base_send_request_t;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  OMPI_DECLSPEC int mca_pml_base_bsend_init(bool enable_mpi_threads);
</span><br>
<span class="quotelev1">&gt;  OMPI_DECLSPEC int mca_pml_base_bsend_fini(void);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/base/pml_base_module_exchange.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/base/pml_base_module_exchange.c	2006-02-22 21:53:08 UTC (rev 9117)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/base/pml_base_module_exchange.c	2006-02-23 00:39:01 UTC (rev 9118)
</span><br>
<span class="quotelev1">&gt; @@ -402,7 +402,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      OPAL_UNLOCK(&amp;mca_pml_base_modex_lock);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    /* otherwise - subscribe to get this jobid's ptl contact info */
</span><br>
<span class="quotelev1">&gt; +    /* otherwise - subscribe to get this jobid's contact info */
</span><br>
<span class="quotelev1">&gt;      if (ORTE_SUCCESS != (rc = orte_ns.get_jobid(&amp;jobid, name))) {
</span><br>
<span class="quotelev1">&gt;          ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt;          return rc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/base/pml_base_open.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/base/pml_base_open.c	2006-02-22 21:53:08 UTC (rev 9117)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/base/pml_base_open.c	2006-02-23 00:39:01 UTC (rev 9118)
</span><br>
<span class="quotelev1">&gt; @@ -25,7 +25,6 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/constants.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/mca/pml/pml.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/mca/pml/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;ompi/mca/ptl/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * The following file was created by configure.  It contains extern
</span><br>
<span class="quotelev1">&gt; @@ -89,7 +88,4 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      mca_base_param_lookup_string(
</span><br>
<span class="quotelev1">&gt;          mca_base_param_register_string(&quot;pml&quot;,NULL,NULL,NULL,&quot;ob1&quot;), &amp;mca_pml_base_pml);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    /* All done, now let's start the PTLs */
</span><br>
<span class="quotelev1">&gt; -    return mca_ptl_base_open();
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/dr/pml_dr_comm.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/dr/pml_dr_comm.h	2006-02-22 21:53:08 UTC (rev 9117)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/dr/pml_dr_comm.h	2006-02-23 00:39:01 UTC (rev 9118)
</span><br>
<span class="quotelev1">&gt; @@ -23,7 +23,6 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/threads/mutex.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/threads/condition.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;ompi/mca/ptl/ptl.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/proc/proc.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/dr/pml_dr_recvfrag.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/dr/pml_dr_recvfrag.c	2006-02-22 21:53:08 UTC (rev 9117)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/dr/pml_dr_recvfrag.c	2006-02-23 00:39:01 UTC (rev 9118)
</span><br>
<span class="quotelev1">&gt; @@ -254,7 +254,7 @@
</span><br>
<span class="quotelev1">&gt;  do {  \
</span><br>
<span class="quotelev1">&gt;      /* local variables */  \
</span><br>
<span class="quotelev1">&gt;      mca_pml_dr_recv_request_t *specific_recv, *wild_recv; \
</span><br>
<span class="quotelev1">&gt; -    mca_ptl_sequence_t wild_recv_seq, specific_recv_seq;  \
</span><br>
<span class="quotelev1">&gt; +    mca_pml_sequence_t wild_recv_seq, specific_recv_seq;  \
</span><br>
<span class="quotelev1">&gt;      int frag_tag, wild_recv_tag, specific_recv_tag;  \
</span><br>
<span class="quotelev1">&gt;    \
</span><br>
<span class="quotelev1">&gt;      /* initialization */  \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_comm.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_comm.h	2006-02-22 21:53:08 UTC (rev 9117)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_comm.h	2006-02-23 00:39:01 UTC (rev 9118)
</span><br>
<span class="quotelev1">&gt; @@ -23,7 +23,6 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/threads/mutex.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/threads/condition.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;ompi/mca/ptl/ptl.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/class/opal_list.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/proc/proc.h&quot;
</span><br>
<span class="quotelev1">&gt;  #if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_recvfrag.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_recvfrag.c	2006-02-22 21:53:08 UTC (rev 9117)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_recvfrag.c	2006-02-23 00:39:01 UTC (rev 9118)
</span><br>
<span class="quotelev1">&gt; @@ -222,7 +222,7 @@
</span><br>
<span class="quotelev1">&gt;  do {  \
</span><br>
<span class="quotelev1">&gt;      /* local variables */  \
</span><br>
<span class="quotelev1">&gt;      mca_pml_ob1_recv_request_t *specific_recv, *wild_recv; \
</span><br>
<span class="quotelev1">&gt; -    mca_ptl_sequence_t wild_recv_seq, specific_recv_seq;  \
</span><br>
<span class="quotelev1">&gt; +    mca_pml_sequence_t wild_recv_seq, specific_recv_seq;  \
</span><br>
<span class="quotelev1">&gt;      int frag_tag, wild_recv_tag, specific_recv_tag;  \
</span><br>
<span class="quotelev1">&gt;    \
</span><br>
<span class="quotelev1">&gt;      /* initialization */  \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/pml.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/pml.h	2006-02-22 21:53:08 UTC (rev 9117)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/pml.h	2006-02-23 00:39:01 UTC (rev 9118)
</span><br>
<span class="quotelev1">&gt; @@ -72,8 +72,7 @@
</span><br>
<span class="quotelev1">&gt;   * PML component types
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -struct mca_ptl_base_modulet;
</span><br>
<span class="quotelev1">&gt; -struct mca_ptl_addr_t;
</span><br>
<span class="quotelev1">&gt; +typedef uint64_t mca_pml_sequence_t;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  struct mca_pml_proc_t {
</span><br>
<span class="quotelev1">&gt;      opal_list_item_t super;
</span><br>
<span class="quotelev1">&gt; @@ -177,7 +176,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt;   * For non-threaded case, provides MCA the opportunity to
</span><br>
<span class="quotelev1">&gt; - * progress outstanding requests on all ptls.
</span><br>
<span class="quotelev1">&gt; + * progress outstanding requests on all btls.
</span><br>
<span class="quotelev1">&gt;   *
</span><br>
<span class="quotelev1">&gt;   * @return         OMPI_SUCCESS or failure status.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/tools/ompi_info/components.cc
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/tools/ompi_info/components.cc	2006-02-22 21:53:08 UTC (rev 9117)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/tools/ompi_info/components.cc	2006-02-23 00:39:01 UTC (rev 9118)
</span><br>
<span class="quotelev1">&gt; @@ -56,8 +56,6 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/mca/bml/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/mca/rcache/rcache.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/mca/rcache/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;ompi/mca/ptl/ptl.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;ompi/mca/ptl/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/mca/btl/btl.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/mca/btl/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/mca/topo/topo.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -248,11 +246,6 @@
</span><br>
<span class="quotelev1">&gt;    ompi_osc_base_open();
</span><br>
<span class="quotelev1">&gt;    component_map[&quot;osc&quot;] = &amp;ompi_osc_base_open_components;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  /* mca_ptl_base_open() should not be called directly. This call is performed
</span><br>
<span class="quotelev1">&gt; -   * in the PML base open.
</span><br>
<span class="quotelev1">&gt; -   */
</span><br>
<span class="quotelev1">&gt; -  component_map[&quot;ptl&quot;] = &amp;mca_ptl_base_components_opened;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;    mca_btl_base_open();
</span><br>
<span class="quotelev1">&gt;    component_map[&quot;btl&quot;] = &amp;mca_btl_base_components_opened;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/tools/ompi_info/ompi_info.cc
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/tools/ompi_info/ompi_info.cc	2006-02-22 21:53:08 UTC (rev 9117)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/tools/ompi_info/ompi_info.cc	2006-02-23 00:39:01 UTC (rev 9118)
</span><br>
<span class="quotelev1">&gt; @@ -180,7 +180,6 @@
</span><br>
<span class="quotelev1">&gt;    ompi_info::mca_types.push_back(&quot;pml&quot;);
</span><br>
<span class="quotelev1">&gt;    ompi_info::mca_types.push_back(&quot;bml&quot;);
</span><br>
<span class="quotelev1">&gt;    ompi_info::mca_types.push_back(&quot;rcache&quot;);
</span><br>
<span class="quotelev1">&gt; -  ompi_info::mca_types.push_back(&quot;ptl&quot;);
</span><br>
<span class="quotelev1">&gt;    ompi_info::mca_types.push_back(&quot;btl&quot;);
</span><br>
<span class="quotelev1">&gt;    ompi_info::mca_types.push_back(&quot;topo&quot;);
</span><br>
<span class="quotelev1">&gt;    ompi_info::mca_types.push_back(&quot;osc&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/03/0739.php">Andy Selle: "[OMPI devel] C++ bool type reduction failing"</a>
<li><strong>Previous message:</strong> <a href="0737.php">Ralph H. Castain: "Re: [OMPI devel]  Alpha 4 and job state  transitions"</a>
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
