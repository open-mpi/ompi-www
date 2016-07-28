<?
$subject_val = "[OMPI devel] Question about MCA_BTL_DES_SEND_ALWAYS_CALLBACK";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 08:42:55 2010" -->
<!-- isoreceived="20100113134255" -->
<!-- sent="Wed, 13 Jan 2010 08:42:29 -0500" -->
<!-- isosent="20100113134229" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Question about MCA_BTL_DES_SEND_ALWAYS_CALLBACK" -->
<!-- id="4B4DCDC5.5010500_at_Sun.COM" -->
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
<strong>Subject:</strong> [OMPI devel] Question about MCA_BTL_DES_SEND_ALWAYS_CALLBACK<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-13 08:42:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7314.php">Jeff Squyres: "[OMPI devel] #2163: 1.5 blocker"</a>
<li><strong>Previous message:</strong> <a href="7312.php">Ralph Castain: "Re: [OMPI devel] How can I achieve node fail over"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Group:
<br>
<p>In the openib BTL, there is a some code that gets executed upon a 
<br>
completion event.  One of the things that happens is we call the 
<br>
callback function of the descriptor.  I notice that with coalesced 
<br>
fragments, we do not check the MCA_BTL_DES_SEND_ALWAYS_CALLBACK flag 
<br>
prior to issuing the callback.  Does anyone know why we do not do that 
<br>
check?
<br>
<p>In normal operation, I have never seen an issue with this.  However, 
<br>
with some of the failover work I am doing, I ended up triggering a SEGV 
<br>
when I tried to call a non-existent callback.  Here is the code snippet 
<br>
from btl_openib_component.c in the trunk. (this may not be very 
<br>
readable)  At line 2902 we do not check the flag, but at line 2911 we do.
<br>
<p><p>2896case IBV_WC_SEND:
<br>
2897 OPAL_OUTPUT((-1, &quot;Got WC: RDMA_WRITE or SEND&quot;));
<br>
2898 if(openib_frag_type(des) == MCA_BTL_OPENIB_FRAG_SEND) {
<br>
2899  opal_list_item_t *i;
<br>
2900  while((i = 
<br>
opal_list_remove_first(&amp;to_send_frag(des)-&gt;coalesced_frags))) {
<br>
2901   btl_ownership = (to_base_frag(i)-&gt;base.des_flags &amp; 
<br>
MCA_BTL_DES_FLAGS_BTL_OWNERSHIP);
<br>
2902   to_base_frag(i)-&gt;base.des_cbfunc(&amp;openib_btl-&gt;super, endpoint,
<br>
2903              &amp;to_base_frag(i)-&gt;base, OMPI_SUCCESS);
<br>
2904   if( btl_ownership ) {
<br>
2905     mca_btl_openib_free(&amp;openib_btl-&gt;super, &amp;to_base_frag(i)-&gt;base);
<br>
2906   }
<br>
2907  }
<br>
2908 }
<br>
2909 /* Process a completed send/put/get */
<br>
2910 btl_ownership = (des-&gt;des_flags &amp; MCA_BTL_DES_FLAGS_BTL_OWNERSHIP);
<br>
2911 if (des-&gt;des_flags &amp; MCA_BTL_DES_SEND_ALWAYS_CALLBACK) {
<br>
2912   des-&gt;des_cbfunc(&amp;openib_btl-&gt;super, endpoint, des,OMPI_SUCCESS);
<br>
2913 }
<br>
2914 if( btl_ownership ) {
<br>
2915   mca_btl_openib_free(&amp;openib_btl-&gt;super, des);
<br>
2916 }
<br>
2917
<br>
<p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7314.php">Jeff Squyres: "[OMPI devel] #2163: 1.5 blocker"</a>
<li><strong>Previous message:</strong> <a href="7312.php">Ralph Castain: "Re: [OMPI devel] How can I achieve node fail over"</a>
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
