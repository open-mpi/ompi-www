<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 25 13:22:29 2006" -->
<!-- isoreceived="20060525172229" -->
<!-- sent="Thu, 25 May 2006 11:01:06 -0600" -->
<!-- isosent="20060525170106" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r10072" -->
<!-- id="DDDE14A4-CE5E-451E-81C5-0AE85C08AC85_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200605251657.k4PGvMjH012500_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-25 13:01:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0896.php">Andre Lichei: "Re: [OMPI devel] behavior of the r2 component"</a>
<li><strong>Previous message:</strong> <a href="0894.php">George Bosilca: "Re: [OMPI devel] behavior of the r2 component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that this is also a problem in the other BTLs, I will be looking  
<br>
at them next... so don't close the ticket.. I will modify it to  
<br>
indicate the other BTL's..
<br>
<p><p>On May 25, 2006, at 10:57 AM, gshipman_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: gshipman
</span><br>
<span class="quotelev1">&gt; Date: 2006-05-25 12:57:14 EDT (Thu, 25 May 2006)
</span><br>
<span class="quotelev1">&gt; New Revision: 10072
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_component.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_frag.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/tcp/btl_tcp_frag.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Allow maximum send size to be less than the eager limit.
</span><br>
<span class="quotelev1">&gt; Instead of figuring out which free list the fragment belongs to  
</span><br>
<span class="quotelev1">&gt; based on size
</span><br>
<span class="quotelev1">&gt; we simply store a pointer to the list which it belongs in the  
</span><br>
<span class="quotelev1">&gt; fragment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was reviewed by Brian and should hit all the branches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp.c	2006-05-25 12:57:14 EDT (Thu,  
</span><br>
<span class="quotelev1">&gt; 25 May 2006)
</span><br>
<span class="quotelev1">&gt; @@ -215,15 +215,7 @@
</span><br>
<span class="quotelev1">&gt;      mca_btl_base_descriptor_t* des)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_frag_t* frag = (mca_btl_tcp_frag_t*)des;
</span><br>
<span class="quotelev1">&gt; -    if(frag-&gt;size == 0) {
</span><br>
<span class="quotelev1">&gt; -        MCA_BTL_TCP_FRAG_RETURN_USER(frag);
</span><br>
<span class="quotelev1">&gt; -    } else if(frag-&gt;size == btl-&gt;btl_eager_limit){
</span><br>
<span class="quotelev1">&gt; -        MCA_BTL_TCP_FRAG_RETURN_EAGER(frag);
</span><br>
<span class="quotelev1">&gt; -    } else if(frag-&gt;size == btl-&gt;btl_max_send_size) {
</span><br>
<span class="quotelev1">&gt; -        MCA_BTL_TCP_FRAG_RETURN_MAX(frag);
</span><br>
<span class="quotelev1">&gt; -    }  else {
</span><br>
<span class="quotelev1">&gt; -        return OMPI_ERR_BAD_PARAM;
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; +    MCA_BTL_TCP_FRAG_RETURN(frag);
</span><br>
<span class="quotelev1">&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_component.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_component.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_component.c	2006-05-25 12:57:14  
</span><br>
<span class="quotelev1">&gt; EDT (Thu, 25 May 2006)
</span><br>
<span class="quotelev1">&gt; @@ -98,7 +98,6 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * utility routines for parameter registration
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; @@ -216,6 +215,7 @@
</span><br>
<span class="quotelev1">&gt;          mca_btl_tcp_param_register_int (&quot;min_send_size&quot;, 64*1024);
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_module.super.btl_max_send_size =
</span><br>
<span class="quotelev1">&gt;          mca_btl_tcp_param_register_int (&quot;max_send_size&quot;, 128*1024);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_module.super.btl_min_rdma_size =
</span><br>
<span class="quotelev1">&gt;          mca_btl_tcp_param_register_int(&quot;min_rdma_size&quot;, 128*1024);
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_module.super.btl_max_rdma_size =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_endpoint.c	2006-05-25 12:57:14  
</span><br>
<span class="quotelev1">&gt; EDT (Thu, 25 May 2006)
</span><br>
<span class="quotelev1">&gt; @@ -606,7 +606,13 @@
</span><br>
<span class="quotelev1">&gt;              frag = btl_endpoint-&gt;endpoint_recv_frag;
</span><br>
<span class="quotelev1">&gt;              if(NULL == frag) {
</span><br>
<span class="quotelev1">&gt;                  int rc;
</span><br>
<span class="quotelev1">&gt; -                MCA_BTL_TCP_FRAG_ALLOC_MAX(frag, rc);
</span><br>
<span class="quotelev1">&gt; +                if(mca_btl_tcp_module.super.btl_max_send_size &gt;
</span><br>
<span class="quotelev1">&gt; +                   mca_btl_tcp_module.super.btl_eager_limit) {
</span><br>
<span class="quotelev1">&gt; +                    MCA_BTL_TCP_FRAG_ALLOC_MAX(frag, rc);
</span><br>
<span class="quotelev1">&gt; +                } else {
</span><br>
<span class="quotelev1">&gt; +                    MCA_BTL_TCP_FRAG_ALLOC_EAGER(frag, rc);
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;                  if(NULL == frag) {
</span><br>
<span class="quotelev1">&gt;                      OPAL_THREAD_UNLOCK(&amp;btl_endpoint- 
</span><br>
<span class="quotelev2">&gt; &gt;endpoint_recv_lock);
</span><br>
<span class="quotelev1">&gt;                      return;
</span><br>
<span class="quotelev1">&gt; @@ -642,7 +648,7 @@
</span><br>
<span class="quotelev1">&gt;                      goto data_still_pending_on_endpoint;
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;  #endif  /* MCA_BTL_TCP_ENDPOINT_CACHE */
</span><br>
<span class="quotelev1">&gt; -                MCA_BTL_TCP_FRAG_RETURN_MAX(frag);
</span><br>
<span class="quotelev1">&gt; +                MCA_BTL_TCP_FRAG_RETURN(frag);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;              OPAL_THREAD_UNLOCK(&amp;btl_endpoint-&gt;endpoint_recv_lock);
</span><br>
<span class="quotelev1">&gt;  #if MCA_BTL_TCP_ENDPOINT_CACHE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_frag.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_frag.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_frag.c	2006-05-25 12:57:14 EDT  
</span><br>
<span class="quotelev1">&gt; (Thu, 25 May 2006)
</span><br>
<span class="quotelev1">&gt; @@ -50,18 +50,21 @@
</span><br>
<span class="quotelev1">&gt;  static void mca_btl_tcp_frag_eager_constructor(mca_btl_tcp_frag_t*  
</span><br>
<span class="quotelev1">&gt; frag)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      frag-&gt;size = mca_btl_tcp_module.super.btl_eager_limit;
</span><br>
<span class="quotelev1">&gt; +    frag-&gt;my_list = &amp;mca_btl_tcp_component.tcp_frag_eager;
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_frag_common_constructor(frag);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static void mca_btl_tcp_frag_max_constructor(mca_btl_tcp_frag_t*  
</span><br>
<span class="quotelev1">&gt; frag)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      frag-&gt;size = mca_btl_tcp_module.super.btl_max_send_size;
</span><br>
<span class="quotelev1">&gt; +    frag-&gt;my_list = &amp;mca_btl_tcp_component.tcp_frag_max;
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_frag_common_constructor(frag);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static void mca_btl_tcp_frag_user_constructor(mca_btl_tcp_frag_t*  
</span><br>
<span class="quotelev1">&gt; frag)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      frag-&gt;size = 0;
</span><br>
<span class="quotelev1">&gt; +    frag-&gt;my_list = &amp;mca_btl_tcp_component.tcp_frag_user;
</span><br>
<span class="quotelev1">&gt;      mca_btl_tcp_frag_common_constructor(frag);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/tcp/btl_tcp_frag.h
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/tcp/btl_tcp_frag.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/tcp/btl_tcp_frag.h	2006-05-25 12:57:14 EDT  
</span><br>
<span class="quotelev1">&gt; (Thu, 25 May 2006)
</span><br>
<span class="quotelev1">&gt; @@ -55,6 +55,7 @@
</span><br>
<span class="quotelev1">&gt;      size_t iov_idx;
</span><br>
<span class="quotelev1">&gt;      size_t size;
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt; +    ompi_free_list_t* my_list;
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  typedef struct mca_btl_tcp_frag_t mca_btl_tcp_frag_t;
</span><br>
<span class="quotelev1">&gt;  OBJ_CLASS_DECLARATION(mca_btl_tcp_frag_t);
</span><br>
<span class="quotelev1">&gt; @@ -86,12 +87,6 @@
</span><br>
<span class="quotelev1">&gt;      frag = (mca_btl_tcp_frag_t*)  
</span><br>
<span class="quotelev1">&gt; item;                                     \
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#define MCA_BTL_TCP_FRAG_RETURN_EAGER 
</span><br>
<span class="quotelev1">&gt; (frag)                                \
</span><br>
<span class="quotelev1">&gt; - 
</span><br>
<span class="quotelev1">&gt; {                                                                      
</span><br>
<span class="quotelev1">&gt;      \
</span><br>
<span class="quotelev1">&gt; -    OMPI_FREE_LIST_RETURN 
</span><br>
<span class="quotelev1">&gt; (&amp;mca_btl_tcp_component.tcp_frag_eager,           \
</span><br>
<span class="quotelev1">&gt; -        (opal_list_item_t*) 
</span><br>
<span class="quotelev1">&gt; (frag));                                        \
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  #define MCA_BTL_TCP_FRAG_ALLOC_MAX(frag,  
</span><br>
<span class="quotelev1">&gt; rc)                               \
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; {                                                                      
</span><br>
<span class="quotelev1">&gt;      \
</span><br>
<span class="quotelev1">&gt;                                                                        
</span><br>
<span class="quotelev1">&gt;       \
</span><br>
<span class="quotelev1">&gt; @@ -100,13 +95,6 @@
</span><br>
<span class="quotelev1">&gt;      frag = (mca_btl_tcp_frag_t*)  
</span><br>
<span class="quotelev1">&gt; item;                                     \
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#define MCA_BTL_TCP_FRAG_RETURN_MAX 
</span><br>
<span class="quotelev1">&gt; (frag)                                  \
</span><br>
<span class="quotelev1">&gt; - 
</span><br>
<span class="quotelev1">&gt; {                                                                      
</span><br>
<span class="quotelev1">&gt;      \
</span><br>
<span class="quotelev1">&gt; -    OMPI_FREE_LIST_RETURN 
</span><br>
<span class="quotelev1">&gt; (&amp;mca_btl_tcp_component.tcp_frag_max,             \
</span><br>
<span class="quotelev1">&gt; -        (opal_list_item_t*) 
</span><br>
<span class="quotelev1">&gt; (frag));                                        \
</span><br>
<span class="quotelev1">&gt; -}
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  #define MCA_BTL_TCP_FRAG_ALLOC_USER(frag,  
</span><br>
<span class="quotelev1">&gt; rc)                              \
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; {                                                                      
</span><br>
<span class="quotelev1">&gt;      \
</span><br>
<span class="quotelev1">&gt;      opal_list_item_t  
</span><br>
<span class="quotelev1">&gt; *item;                                                \
</span><br>
<span class="quotelev1">&gt; @@ -114,9 +102,9 @@
</span><br>
<span class="quotelev1">&gt;      frag = (mca_btl_tcp_frag_t*)  
</span><br>
<span class="quotelev1">&gt; item;                                     \
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#define MCA_BTL_TCP_FRAG_RETURN_USER 
</span><br>
<span class="quotelev1">&gt; (frag)                                 \
</span><br>
<span class="quotelev1">&gt; +#define MCA_BTL_TCP_FRAG_RETURN 
</span><br>
<span class="quotelev1">&gt; (frag)                                      \
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; {                                                                      
</span><br>
<span class="quotelev1">&gt;      \
</span><br>
<span class="quotelev1">&gt; -    OMPI_FREE_LIST_RETURN 
</span><br>
<span class="quotelev1">&gt; (&amp;mca_btl_tcp_component.tcp_frag_user,            \
</span><br>
<span class="quotelev1">&gt; +    OMPI_FREE_LIST_RETURN(frag- 
</span><br>
<span class="quotelev2">&gt; &gt;my_list,                                   \
</span><br>
<span class="quotelev1">&gt;          (opal_list_item_t*) 
</span><br>
<span class="quotelev1">&gt; (frag));                                        \
</span><br>
<span class="quotelev1">&gt;  }
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0896.php">Andre Lichei: "Re: [OMPI devel] behavior of the r2 component"</a>
<li><strong>Previous message:</strong> <a href="0894.php">George Bosilca: "Re: [OMPI devel] behavior of the r2 component"</a>
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
