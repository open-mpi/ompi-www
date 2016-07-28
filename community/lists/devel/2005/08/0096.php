<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  8 14:11:40 2005" -->
<!-- isoreceived="20050808191140" -->
<!-- sent="Mon, 8 Aug 2005 13:11:32 -0600" -->
<!-- isosent="20050808191132" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re:  [PATCH] for ompi_free_list.c" -->
<!-- id="ba46c11afd7df1efadd4ae4721f8906b_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050808133805.GG16361_at_minantech.com" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-08 14:11:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0097.php">Galen Shipman: "Re:  [PATCH] wrong variable type in OpenIB."</a>
<li><strong>Previous message:</strong> <a href="0095.php">Jeff Squyres: "New command line option: -gmca"</a>
<li><strong>In reply to:</strong> <a href="0086.php">Gleb Natapov: "[PATCH] for ompi_free_list.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Changes are in the trunk
<br>
<p>Thanks,
<br>
<p>Gaeln
<br>
On Aug 8, 2005, at 7:38 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Included patch fixes bugs in ompi_free_list in the case ompi_free_list 
</span><br>
<span class="quotelev1">&gt; was
</span><br>
<span class="quotelev1">&gt; created with NULL class and/or mpool parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/class/ompi_free_list.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/class/ompi_free_list.c	(revision 6760)
</span><br>
<span class="quotelev1">&gt; +++ ompi/class/ompi_free_list.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -75,7 +75,7 @@ int ompi_free_list_grow(ompi_free_list_t
</span><br>
<span class="quotelev1">&gt;      unsigned char* ptr;
</span><br>
<span class="quotelev1">&gt;      size_t i;
</span><br>
<span class="quotelev1">&gt;      size_t mod;
</span><br>
<span class="quotelev1">&gt; -    mca_mpool_base_registration_t* user_out;
</span><br>
<span class="quotelev1">&gt; +    mca_mpool_base_registration_t* user_out = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (flist-&gt;fl_max_to_alloc &gt; 0 &amp;&amp; flist-&gt;fl_num_allocated + 
</span><br>
<span class="quotelev1">&gt; num_elements &gt; flist-&gt;fl_max_to_alloc)
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERR_TEMP_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; @@ -97,7 +97,10 @@ int ompi_free_list_grow(ompi_free_list_t
</span><br>
<span class="quotelev1">&gt;          item-&gt;user_data = user_out;
</span><br>
<span class="quotelev1">&gt;          if (NULL != flist-&gt;fl_elem_class) {
</span><br>
<span class="quotelev1">&gt;              OBJ_CONSTRUCT_INTERNAL(item, flist-&gt;fl_elem_class);
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +	    OBJ_CONSTRUCT (&amp;item-&gt;super, opal_list_item_t);
</span><br>
<span class="quotelev1">&gt; +	}
</span><br>
<span class="quotelev1">&gt; +	
</span><br>
<span class="quotelev1">&gt;          opal_list_append(&amp;(flist-&gt;super), &amp;(item-&gt;super));
</span><br>
<span class="quotelev1">&gt;          ptr += flist-&gt;fl_elem_size;
</span><br>
<span class="quotelev1">&gt;      }
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0097.php">Galen Shipman: "Re:  [PATCH] wrong variable type in OpenIB."</a>
<li><strong>Previous message:</strong> <a href="0095.php">Jeff Squyres: "New command line option: -gmca"</a>
<li><strong>In reply to:</strong> <a href="0086.php">Gleb Natapov: "[PATCH] for ompi_free_list.c"</a>
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
