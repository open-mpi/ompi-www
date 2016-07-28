<?
$subject_val = "[OMPI devel] mca_bml_r2_del_proc_btl()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  3 17:17:50 2011" -->
<!-- isoreceived="20110103221750" -->
<!-- sent="Mon, 03 Jan 2011 14:17:32 -0800" -->
<!-- isosent="20110103221732" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] mca_bml_r2_del_proc_btl()" -->
<!-- id="4D224AFC.6050609_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] mca_bml_r2_del_proc_btl()<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-03 17:17:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8830.php">Shamis, Pavel: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Previous message:</strong> <a href="8828.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8831.php">Jeff Squyres: "Re: [OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<li><strong>Reply:</strong> <a href="8831.php">Jeff Squyres: "Re: [OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<li><strong>Reply:</strong> <a href="8832.php">George Bosilca: "Re: [OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't tell if this is a problem, though I suspect it's a small one 
<br>
even if it's a problem at all.
<br>
<p>In mca_bml_r2_del_proc_btl(), a BTL is removed from the send list and 
<br>
from the RDMA list.
<br>
<p>If the BTL is removed from the send list, the end-point's max send size 
<br>
is recomputed to be the minimum of the max send sizes of the remaining 
<br>
BTLs.  The code looks like this, where I've removed some code to focus 
<br>
on the parts that matter:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* remove btl from send list */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(mca_bml_base_btl_array_remove(&amp;ep-&gt;btl_send, btl)) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* reset max_send_size to the min of all btl's */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(b=0; b&lt; mca_bml_base_btl_array_get_size(&amp;ep-&gt;btl_send); b++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bml_btl = mca_bml_base_btl_array_get_index(&amp;ep-&gt;btl_send, b);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ep_btl = bml_btl-&gt;btl;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ep_btl-&gt;btl_max_send_size &lt; ep-&gt;btl_max_send_size) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ep-&gt;btl_max_send_size = ep_btl-&gt;btl_max_send_size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Shouldn't that inner loop be preceded by initialization of 
<br>
ep-&gt;btl_max_send_size to some very large value (ironically enough, 
<br>
perhaps &quot;-1&quot;)?
<br>
<p>Something similar happens in the same function when the BTL is removed 
<br>
from the RDMA list and  ep-&gt;btl_pipeline_send_length and 
<br>
ep-&gt;btl_send_limit are recomputed.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8830.php">Shamis, Pavel: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Previous message:</strong> <a href="8828.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8831.php">Jeff Squyres: "Re: [OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<li><strong>Reply:</strong> <a href="8831.php">Jeff Squyres: "Re: [OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<li><strong>Reply:</strong> <a href="8832.php">George Bosilca: "Re: [OMPI devel] mca_bml_r2_del_proc_btl()"</a>
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
