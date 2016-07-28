<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  7 16:49:45 2006" -->
<!-- isoreceived="20061207214945" -->
<!-- sent="Thu, 7 Dec 2006 13:49:38 -0800" -->
<!-- isosent="20061207214938" -->
<!-- name="Reese Faucette" -->
<!-- email="reese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] myrinet problems on OSX" -->
<!-- id="01d501c71a49$97f02120$58c31fac_at_bart" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] myrinet problems on OSX" -->
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
<strong>From:</strong> Reese Faucette (<em>reese_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-07 16:49:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2328.php">Aaron McDonough: "[OMPI users]  OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>Previous message:</strong> <a href="2326.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is due to a problem in (void *)-&gt;(uint64_t_ conversion in OMPI.  The following patch fixes the problem, as would an appropriate cast of pval, I suspect.  The problem is an inappropriate use of ompi_ptr_t.  I would guess that other uses of lval might be suspect also (such as in the Portals code), since lval might be undefined after assigning pval on a 32 bit system.
<br>
<p>After applying this patch, HPCC runs fine on OSX.
<br>
<p>regards,
<br>
-reese
<br>
<p>--- ompi/mca/btl/gm/btl_gm.c
<br>
+++ ompi/mca/btl/gm/btl_gm.c
<br>
@@ -774,7 +774,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* post the put descriptor */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gm_put(gm_btl-&gt;port,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;des-&gt;des_src-&gt;seg_addr.pval,
<br>
+#if GM_SIZEOF_VOID_P == 4
<br>
+        des-&gt;des_dst-&gt;seg_addr.ival,
<br>
+#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;des-&gt;des_dst-&gt;seg_addr.lval,
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;des-&gt;des_src-&gt;seg_len,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GM_LOW_PRIORITY,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint-&gt;endpoint_addr.node_id,
<br>
@@ -816,7 +820,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* post the put descriptor */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gm_put(gm_btl-&gt;port,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;des-&gt;des_src-&gt;seg_addr.pval,
<br>
+#if GM_SIZEOF_VOID_P == 4
<br>
+        des-&gt;des_dst-&gt;seg_addr.ival,
<br>
+#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;des-&gt;des_dst-&gt;seg_addr.lval,
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;des-&gt;des_src-&gt;seg_len,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GM_LOW_PRIORITY,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endpoint-&gt;endpoint_addr.node_id,
<br>
@@ -919,7 +927,11 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* post get put descriptor */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gm_get(gm_btl-&gt;port,
<br>
+#if GM_SIZEOF_VOID_P == 4
<br>
+        des-&gt;des_dst-&gt;seg_addr.ival,
<br>
+#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;des-&gt;des_dst-&gt;seg_addr.lval,
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;des-&gt;des_src-&gt;seg_addr.pval,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;des-&gt;des_src-&gt;seg_len,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GM_LOW_PRIORITY,
<br>
@@ -962,7 +974,11 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* post get put descriptor */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gm_get(gm_btl-&gt;port,
<br>
+#if GM_SIZEOF_VOID_P == 4
<br>
+        des-&gt;des_dst-&gt;seg_addr.ival,
<br>
+#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;des-&gt;des_dst-&gt;seg_addr.lval,
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;des-&gt;des_src-&gt;seg_addr.pval,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;des-&gt;des_src-&gt;seg_len,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GM_LOW_PRIORITY,
<br>
<p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2327/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2328.php">Aaron McDonough: "[OMPI users]  OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>Previous message:</strong> <a href="2326.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
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
