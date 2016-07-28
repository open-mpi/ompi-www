<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 16:43:25 2007" -->
<!-- isoreceived="20070712204325" -->
<!-- sent="Thu, 12 Jul 2007 14:43:11 -0600" -->
<!-- isosent="20070712204311" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI_FREE_LIST improvements" -->
<!-- id="555A4238-7364-415C-ACEE-BF85986486A6_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-07-12 16:43:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1871.php">Ralph H Castain: "[OMPI devel] Major reduction in ORTE"</a>
<li><strong>Previous message:</strong> <a href="1869.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  Orte update"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In working on my changes in the ib_multifrag branch I modified the  
<br>
ompi_free_list.
<br>
The change enables a free list to have a bit more personality than  
<br>
what is dictated by the type of the item on the free list. The  
<br>
overall problem was that we often use different free list item types  
<br>
to simply distinguish sizes of the free list item. In an ideal world  
<br>
we would just have constructors that accepted arguments. There are  
<br>
numerous problems with this approach, but mostly it would require a  
<br>
major change to the object system, don't think we want that. So  
<br>
instead I modified the free list to allow for an optional &quot;post  
<br>
constructor&quot; initialization function to be run on each free list item  
<br>
which includes optional opaque data to be passed to the  
<br>
initialization routine.
<br>
<p>Here is the signature of the initialization routine:
<br>
<p><p>typedef void (*ompi_free_list_item_init_fn_t) (struct  
<br>
ompi_free_list_item_t*, void* ctx);
<br>
<p><p>I also added two new items to the free list struct:
<br>
<p>struct ompi_free_list_t
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.............
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_item_init_fn_t item_init;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void* ctx;
<br>
};
<br>
<p><p><p><p>The current ompi_free_list_init function didn't change at all,  
<br>
instead I added these optional params to ompi_free_list_init_ex:
<br>
<p>OMPI_DECLSPEC int ompi_free_list_init_ex(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_t *free_list,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t element_size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t alignment,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_class_t* element_class,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int num_elements_to_alloc,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int max_elements_to_alloc,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int num_elements_per_alloc,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct mca_mpool_base_module_t*,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_item_init_fn_t item_init,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *ctx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
<p><p>So all the free list does is run the function specified by  
<br>
&quot;item_init&quot; on created free list item (after calling  
<br>
OBJ_CONSTRUCT_INTERNAL)
<br>
<p><p>For those that don't need this new functionality, simply pass two  
<br>
NULL's to ompi_free_lint_init_ex :
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_init_ex(&amp;btl-&gt;udapl_frag_eager,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sizeof(mca_btl_udapl_frag_eager_t) +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_udapl_component.udapl_eager_frag_size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_udapl_component.udapl_buffer_alignment,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CLASS(mca_btl_udapl_frag_eager_t),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_udapl_component.udapl_free_list_num,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_udapl_component.udapl_free_list_max,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_udapl_component.udapl_free_list_inc,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl-&gt;super.btl_mpool,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL);
<br>
<p><p>Again, if you are using ompi_free_list_init you won't be affected.
<br>
<p><p>I think this functionality makes sense, it reduced the number of  
<br>
different free list item types in the OpenIB BTL and allows me to  
<br>
have numerous free lists of the same item type but with slightly  
<br>
different characteristics.
<br>
<p>Here is an example of how I use this in the OpenIB BTL:
<br>
<p>init_data = (mca_btl_openib_frag_init_data_t*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;malloc(sizeof(mca_btl_openib_frag_init_data_t));
<br>
<p>&nbsp;&nbsp;&nbsp;init_data-&gt;length = length;
<br>
&nbsp;&nbsp;&nbsp;init_data-&gt;type = MCA_BTL_OPENIB_FRAG_SEND_USER;
<br>
&nbsp;&nbsp;&nbsp;init_data-&gt;order = mca_btl_openib_component.rdma_qp;
<br>
&nbsp;&nbsp;&nbsp;init_data-&gt;list = &amp;openib_btl-&gt;send_user_free;
<br>
<p>ompi_free_list_init_ex( &amp;openib_btl-&gt;send_user_free,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;length,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CLASS 
<br>
(mca_btl_openib_send_user_frag_t),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
mca_btl_openib_component.ib_free_list_num,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
mca_btl_openib_component.ib_free_list_max,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
mca_btl_openib_component.ib_free_list_inc,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_frag_init,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void*)init_data))
<br>
<p><p><p><p>Thanks,
<br>
<p>Galen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1871.php">Ralph H Castain: "[OMPI devel] Major reduction in ORTE"</a>
<li><strong>Previous message:</strong> <a href="1869.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  Orte update"</a>
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
