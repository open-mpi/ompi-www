<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Aug  7 05:33:02 2005" -->
<!-- isoreceived="20050807103302" -->
<!-- sent="Sun, 7 Aug 2005 13:32:28 +0300" -->
<!-- isosent="20050807103228" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[PATCH] wrong variable type in OpenIB." -->
<!-- id="20050807103228.GA16361_at_minantech.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-07 05:32:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0083.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0081.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0097.php">Galen Shipman: "Re:  [PATCH] wrong variable type in OpenIB."</a>
<li><strong>Reply:</strong> <a href="0097.php">Galen Shipman: "Re:  [PATCH] wrong variable type in OpenIB."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Galen,
<br>
<p>Included patch changes type of returned value from ibv_poll_cq. 
<br>
It should be signed because we check if it is less then zero later 
<br>
in the code.
<br>
<p><p>Index: ompi/mca/btl/openib/btl_openib_component.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib_component.c	(revision 6757)
<br>
+++ ompi/mca/btl/openib/btl_openib_component.c	(working copy)
<br>
@@ -492,8 +492,8 @@ mca_btl_base_module_t** mca_btl_openib_c
<br>
&nbsp;
<br>
&nbsp;int mca_btl_openib_component_progress()
<br>
&nbsp;{
<br>
-    uint32_t i, ne;
<br>
-    int count = 0;
<br>
+    uint32_t i;
<br>
+    int count = 0, ne;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_frag_t* frag; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_endpoint_t* endpoint; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Poll for completions */
<br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0083.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0081.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0097.php">Galen Shipman: "Re:  [PATCH] wrong variable type in OpenIB."</a>
<li><strong>Reply:</strong> <a href="0097.php">Galen Shipman: "Re:  [PATCH] wrong variable type in OpenIB."</a>
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
