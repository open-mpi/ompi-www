<?
$subject_val = "[OMPI devel] 32 bit udapl warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 07:51:29 2008" -->
<!-- isoreceived="20080131125129" -->
<!-- sent="Thu, 31 Jan 2008 07:51:26 -0500" -->
<!-- isosent="20080131125126" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] 32 bit udapl warnings" -->
<!-- id="47A1C44E.4000006_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> [OMPI devel] 32 bit udapl warnings<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 07:51:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3099.php">Tim Prins: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3097.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3100.php">Don Kerr: "Re: [OMPI devel] 32 bit udapl warnings"</a>
<li><strong>Reply:</strong> <a href="3100.php">Don Kerr: "Re: [OMPI devel] 32 bit udapl warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am seeing some warnings on the trunk when compiling udapl in 32 bit 
<br>
mode with OFED 1.2.5.1:
<br>
<p>btl_udapl.c: In function 'udapl_reg_mr':
<br>
btl_udapl.c:95: warning: cast from pointer to integer of different size
<br>
btl_udapl.c: In function 'mca_btl_udapl_alloc':
<br>
btl_udapl.c:852: warning: cast from pointer to integer of different size
<br>
btl_udapl.c: In function 'mca_btl_udapl_prepare_src':
<br>
btl_udapl.c:959: warning: cast from pointer to integer of different size
<br>
btl_udapl.c:1008: warning: cast from pointer to integer of different size
<br>
btl_udapl_component.c: In function 'mca_btl_udapl_component_progress':
<br>
btl_udapl_component.c:871: warning: cast from pointer to integer of 
<br>
different size
<br>
btl_udapl_endpoint.c: In function 'mca_btl_udapl_endpoint_write_eager':
<br>
btl_udapl_endpoint.c:130: warning: cast from pointer to integer of 
<br>
different size
<br>
btl_udapl_endpoint.c: In function 'mca_btl_udapl_endpoint_finish_max':
<br>
btl_udapl_endpoint.c:775: warning: cast from pointer to integer of 
<br>
different size
<br>
btl_udapl_endpoint.c: In function 'mca_btl_udapl_endpoint_post_recv':
<br>
btl_udapl_endpoint.c:864: warning: cast from pointer to integer of 
<br>
different size
<br>
btl_udapl_endpoint.c: In function 
<br>
'mca_btl_udapl_endpoint_initialize_control_message':
<br>
btl_udapl_endpoint.c:1012: warning: cast from pointer to integer of 
<br>
different size
<br>
<p><p>Thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3099.php">Tim Prins: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3097.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3100.php">Don Kerr: "Re: [OMPI devel] 32 bit udapl warnings"</a>
<li><strong>Reply:</strong> <a href="3100.php">Don Kerr: "Re: [OMPI devel] 32 bit udapl warnings"</a>
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
