<?
$subject_val = "[OMPI devel] asm/byteorder.h needed in infiniband/cm.h";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 21 18:45:23 2008" -->
<!-- isoreceived="20080921224523" -->
<!-- sent="Sun, 21 Sep 2008 17:45:19 -0500" -->
<!-- isosent="20080921224519" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="[OMPI devel] asm/byteorder.h needed in infiniband/cm.h" -->
<!-- id="20080921224519.GA1779_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> [OMPI devel] asm/byteorder.h needed in infiniband/cm.h<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-21 18:45:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4675.php">Ralph Castain: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>Previous message:</strong> <a href="4673.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While building the current ompi-trunk on top of OFED-1.4, I hit the following
<br>
build break:
<br>
<p>connect/btl_openib_connect_ibcm.c: In function `ibcm_component_query':
<br>
connect/btl_openib_connect_ibcm.c:766: error: implicit declaration of function `__constant_cpu_to_be64'
<br>
make[2]: *** [connect/btl_openib_connect_ibcm.lo] Error 1
<br>
<p>The line in question is referring to IB_CM_ASSIGN_SERVICE_ID in infiniband/cm.h.
<br>
That file does not include a reference to where __constant_cpu_to_be64 is
<br>
defined.  When I included asm/byteorder.h, everything built fine and all iWARP
<br>
tests passed on OMPI trunk.
<br>
<p>Below is the patch in question.
<br>
<p>Thanks,
<br>
Jon
<br>
<p>Signed-Off-By: Jon Mason &lt;jon_at_[hidden]&gt;
<br>
<p>--- /usr/include/infiniband/cm.h.orig	2008-09-21 15:36:46.000000000 -0700
<br>
+++ /usr/include/infiniband/cm.h	2008-09-21 14:17:43.000000000 -0700
<br>
@@ -38,6 +38,7 @@
<br>
&nbsp;
<br>
&nbsp;#include &lt;infiniband/verbs.h&gt;
<br>
&nbsp;#include &lt;infiniband/sa.h&gt;
<br>
+#include &lt;asm/byteorder.h&gt;
<br>
&nbsp;
<br>
&nbsp;#ifdef __cplusplus
<br>
&nbsp;extern &quot;C&quot; {
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4675.php">Ralph Castain: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>Previous message:</strong> <a href="4673.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
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
