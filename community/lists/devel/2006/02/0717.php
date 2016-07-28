<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  7 10:25:27 2006" -->
<!-- isoreceived="20060207152527" -->
<!-- sent="Tue, 7 Feb 2006 17:24:16 +0200" -->
<!-- isosent="20060207152416" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="question about {min,max}_{send,rdma}_size" -->
<!-- id="20060207152416.GF21440_at_minantech.com" -->
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
<strong>Date:</strong> 2006-02-07 10:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0718.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0716.php">Ralph H. Castain: "New data support subsystem for ORTE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Galen,
<br>
<p>&nbsp;I have a question about {min,max}_{send,rdma}_size btl parameters.
<br>
Can you explain to me what is the meaning of each of them. I thought I
<br>
understand but it seams I was wrong :).
<br>
<p>I thought that one RDMA transfer cannot be bigger then max_rdma_size and
<br>
if application tries to send buffer bigger than that the transaction
<br>
will be split to several RDMA operation. But my test shows this is not
<br>
the case.
<br>
<p>By the way I think the following should be applied:
<br>
<p><p>Index: btl_openib_component.c
<br>
===================================================================
<br>
--- btl_openib_component.c	(revision 8901)
<br>
+++ btl_openib_component.c	(working copy)
<br>
@@ -195,7 +195,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024*1024, (int*) &amp;mca_btl_openib_module.super.btl_min_rdma_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_param_register_int(&quot;max_rdma_size&quot;, &quot;maximium rdma size&quot;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024*1024, (int*) &amp;mca_btl_openib_module.super.btl_max_rdma_size); 
<br>
-    mca_btl_openib_param_register_int(&quot;flags&quot;, &quot;BTL flags, SEND=0, PUT=1, GET=2&quot;, 
<br>
+    mca_btl_openib_param_register_int(&quot;flags&quot;, &quot;BTL flags, SEND=1, PUT=2, GET=4&quot;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_FLAGS_PUT, (int*) &amp;mca_btl_openib_module.super.btl_flags); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_param_register_int(&quot;bandwidth&quot;, &quot;Approximate maximum bandwidth of interconnect&quot;, 
<br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0718.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0716.php">Ralph H. Castain: "New data support subsystem for ORTE"</a>
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
