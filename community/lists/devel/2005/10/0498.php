<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 27 09:53:23 2005" -->
<!-- isoreceived="20051027145323" -->
<!-- sent="Thu, 27 Oct 2005 08:53:19 -0600" -->
<!-- isosent="20051027145319" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  [PATCH] openib btl." -->
<!-- id="4360E9DF.2020802_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20051027134443.GC30696_at_minantech.com" -->
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
<strong>Date:</strong> 2005-10-27 09:53:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0499.php">Edgar Gabriel: "Re:  [OMPI svn] svn:open-mpi-tests r422"</a>
<li><strong>Previous message:</strong> <a href="0497.php">Gleb Natapov: "[PATCH] openib btl."</a>
<li><strong>In reply to:</strong> <a href="0497.php">Gleb Natapov: "[PATCH] openib btl."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb,
<br>
<p>Thanks! I'll try to apply these today.
<br>
<p>Tim
<br>
<p><p>Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; Return unused entry to free list before trying to allocate new one.
</span><br>
<span class="quotelev1">&gt; Otherwise the code may deadlock.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/btl_openib_component.c	(revision 7878)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/btl_openib_component.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -590,6 +590,7 @@
</span><br>
<span class="quotelev1">&gt;                                                            &amp;frag-&gt;base, 
</span><br>
<span class="quotelev1">&gt;                                                            openib_btl-&gt;ib_reg[frag-&gt;hdr-&gt;tag].cbdata);         
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt; +                OMPI_FREE_LIST_RETURN(&amp;(openib_btl-&gt;recv_free_eager), (opal_list_item_t*) frag); 
</span><br>
<span class="quotelev1">&gt;  #ifdef OMPI_MCA_BTL_OPENIB_HAVE_SRQ
</span><br>
<span class="quotelev1">&gt;                  if(mca_btl_openib_component.use_srq) { 
</span><br>
<span class="quotelev1">&gt;                      OPAL_THREAD_ADD32((int32_t*) &amp;openib_btl-&gt;srr_posted_high, -1); 
</span><br>
<span class="quotelev1">&gt; @@ -601,7 +602,6 @@
</span><br>
<span class="quotelev1">&gt;  #ifdef OMPI_MCA_BTL_OPENIB_HAVE_SRQ
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;  #endif 
</span><br>
<span class="quotelev1">&gt; -                OMPI_FREE_LIST_RETURN(&amp;(openib_btl-&gt;recv_free_eager), (opal_list_item_t*) frag); 
</span><br>
<span class="quotelev1">&gt;                  count++; 
</span><br>
<span class="quotelev1">&gt;                  break; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -683,6 +683,8 @@
</span><br>
<span class="quotelev1">&gt;                                                            &amp;frag-&gt;base, 
</span><br>
<span class="quotelev1">&gt;                                                            openib_btl-&gt;ib_reg[frag-&gt;hdr-&gt;tag].cbdata);         
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt; +                OMPI_FREE_LIST_RETURN(&amp;(openib_btl-&gt;recv_free_max), (opal_list_item_t*) frag); 
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  #ifdef OMPI_MCA_BTL_OPENIB_HAVE_SRQ
</span><br>
<span class="quotelev1">&gt;                  if(mca_btl_openib_component.use_srq) { 
</span><br>
<span class="quotelev1">&gt;                      OPAL_THREAD_ADD32((int32_t*) &amp;openib_btl-&gt;srr_posted_low, -1); 
</span><br>
<span class="quotelev1">&gt; @@ -695,7 +697,6 @@
</span><br>
<span class="quotelev1">&gt;  #ifdef OMPI_MCA_BTL_OPENIB_HAVE_SRQ
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;  #endif 
</span><br>
<span class="quotelev1">&gt; -                OMPI_FREE_LIST_RETURN(&amp;(openib_btl-&gt;recv_free_max), (opal_list_item_t*) frag); 
</span><br>
<span class="quotelev1">&gt;                  count++; 
</span><br>
<span class="quotelev1">&gt;                  break; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
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
<li><strong>Next message:</strong> <a href="0499.php">Edgar Gabriel: "Re:  [OMPI svn] svn:open-mpi-tests r422"</a>
<li><strong>Previous message:</strong> <a href="0497.php">Gleb Natapov: "[PATCH] openib btl."</a>
<li><strong>In reply to:</strong> <a href="0497.php">Gleb Natapov: "[PATCH] openib btl."</a>
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
