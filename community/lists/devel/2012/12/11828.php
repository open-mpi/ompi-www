<?
$subject_val = "[OMPI devel] Collective SM memory affinity possible error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 07:02:04 2012" -->
<!-- isoreceived="20121204120204" -->
<!-- sent="Tue, 4 Dec 2012 13:01:58 +0100" -->
<!-- isosent="20121204120158" -->
<!-- name="Juan A. Rico" -->
<!-- email="jarico_at_[hidden]" -->
<!-- subject="[OMPI devel] Collective SM memory affinity possible error" -->
<!-- id="F722F189-EB71-4463-AABE-94BA4373B6CE_at_unex.es" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Collective SM memory affinity possible error<br>
<strong>From:</strong> Juan A. Rico (<em>jarico_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-04 07:01:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11829.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv	ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>Previous message:</strong> <a href="11827.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am studying the collective SM code and I think that there is a small error in the code related to how the memory affinity is achieved. I attach a patch file (from subversion revision 27653), I hope it can be useful:
<br>
<p>Index: coll_sm_module.c
<br>
===================================================================
<br>
--- coll_sm_module.c	(revisi&#243;n: 27653)
<br>
+++ coll_sm_module.c	(copia de trabajo)
<br>
@@ -434,7 +434,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;maffinity[j].mbs_len = c-&gt;sm_fragment_size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;maffinity[j].mbs_start_addr = 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-&gt;mcb_data_index[i].mcbmi_data +
<br>
-            (rank * c-&gt;sm_control_size);
<br>
+            (rank * c-&gt;sm_fragment_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;++j;
<br>
&nbsp;#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>Regards,
<br>
Juan A. Rico
<br>
<p><p><p><p>__________________________________
<br>
Juan Antonio Rico Gallego
<br>
Dept. Computer Systems Engineering and Telematics
<br>
University of Extremadura
<br>
E. U. Polit&#233;cnica
<br>
10003, C&#225;ceres
<br>
Tlf.: (+34) 927 25 7200 ext. 51655
<br>
jarico_at_[hidden]
<br>
<a href="http://gim.unex.es/azequiampi">http://gim.unex.es/azequiampi</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11829.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk:	ompi/mca/btl/openib ompi/mca/btl/wv	ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>Previous message:</strong> <a href="11827.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml	opal/util/keyval orte/mca/rmaps/rank_file"</a>
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
