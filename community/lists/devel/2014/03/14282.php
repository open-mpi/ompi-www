<?
$subject_val = "[OMPI devel] RFC: Add two new verbose outputs to BML layer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 17:16:46 2014" -->
<!-- isoreceived="20140303221646" -->
<!-- sent="Mon, 3 Mar 2014 14:16:43 -0800" -->
<!-- isosent="20140303221643" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Add two new verbose outputs to BML layer" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3601A069F03_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Add two new verbose outputs to BML layer<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 17:16:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14283.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14281.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Add two new verbose outputs to BML layer
<br>
<p>WHY: There are times that I really want to know which BTLs are being used.  These verbose outputs can help with that.
<br>
<p>WHERE: ompi/mca/bml/r2/bml_r2.c
<br>
<p>TIMEOUT: COB Friday, 7 March 2014
<br>
<p>MORE DETAIL: I have run into some cases where I have added to add some opal_outputs to figure out what is going on with respect to which BTLs are selected.  I thought it would be nice to make it part of the verbose output.  The entire change is below.
<br>
<p>Index: ompi/mca/bml/r2/bml_r2.c
<br>
===================================================================
<br>
--- ompi/mca/bml/r2/bml_r2.c  (revision 30911)
<br>
+++ ompi/mca/bml/r2/bml_r2.c               (working copy)
<br>
@@ -14,6 +14,7 @@
<br>
&nbsp;&nbsp;*                         reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2008-2009 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 2013      Intel, Inc. All rights reserved
<br>
+ * Copyright (c) 2014      NVIDIA Corporation.  All rights reserved.
<br>
&nbsp;&nbsp;* $COPYRIGHT$
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* Additional copyrights may follow
<br>
@@ -250,10 +251,24 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* skip this btl if the exclusivity is less than the previous */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(bml_btl-&gt;btl-&gt;btl_exclusivity &gt; btl-&gt;btl_exclusivity) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl-&gt;btl_del_procs(btl, 1, &amp;proc, &amp;btl_endpoints[p]);
<br>
+                        opal_output_verbose(20, ompi_bml_base_framework.framework_output,
<br>
+                                            &quot;mca: bml: Not using %s btl to %s on node %s &quot;
<br>
+                                            &quot;because %s btl has higher exclusivity (%d &gt; %d)&quot;,
<br>
+                                            btl-&gt;btl_component-&gt;btl_version.mca_component_name,
<br>
+                                            OMPI_NAME_PRINT(&amp;proc-&gt;proc_name), proc-&gt;proc_hostname,
<br>
+                                            bml_btl-&gt;btl-&gt;btl_component-&gt;btl_version.mca_component_name,
<br>
+                                            bml_btl-&gt;btl-&gt;btl_exclusivity,
<br>
+                                            btl-&gt;btl_exclusivity);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>+                opal_output_verbose(5, ompi_bml_base_framework.framework_output,
<br>
+                                    &quot;mca: bml: Using %s btl to %s on node %s&quot;,
<br>
+                                    btl-&gt;btl_component-&gt;btl_version.mca_component_name,
<br>
+                                    OMPI_NAME_PRINT(&amp;proc-&gt;proc_name),
<br>
+                                    proc-&gt;proc_hostname);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* cache the endpoint on the proc */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bml_btl = mca_bml_base_btl_array_insert(&amp;bml_endpoint-&gt;btl_send);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bml_btl-&gt;btl = btl;
<br>
<p><p><p><p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14282/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14283.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14281.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
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
