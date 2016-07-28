<?
$subject_val = "[OMPI devel] Additional excluded tcp inteface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 09:49:59 2008" -->
<!-- isoreceived="20081107144959" -->
<!-- sent="Fri, 07 Nov 2008 09:49:43 -0500" -->
<!-- isosent="20081107144943" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Additional excluded tcp inteface" -->
<!-- id="49145587.5030108_at_Sun.COM" -->
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
<strong>Subject:</strong> [OMPI devel] Additional excluded tcp inteface<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-07 09:49:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4864.php">Leonardo Fialho: "[OMPI devel] Modex and others"</a>
<li><strong>Previous message:</strong> <a href="4862.php">Jeff Squyres: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4866.php">Adrian Knoth: "Re: [OMPI devel] Additional excluded tcp inteface"</a>
<li><strong>Reply:</strong> <a href="4866.php">Adrian Knoth: "Re: [OMPI devel] Additional excluded tcp inteface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do not think anyone will have a problem with this, but just thought I 
<br>
would mention that I am planning on adding an additional interface to 
<br>
the excluded list for the tcp btl.  I want to add &quot;sppp&quot; to the list. 
<br>
This is an internal interface to one of our servers and needs to be 
<br>
treated like the &quot;lo&quot; interface.
<br>
<p><p><p>Rolf
<br>
<p><p>&nbsp;&nbsp;burpen-cs10-0 186 =&gt;svn diff
<br>
Index: tcp/btl_tcp_component.c
<br>
===================================================================
<br>
--- tcp/btl_tcp_component.c     (revision 19943)
<br>
+++ tcp/btl_tcp_component.c     (working copy)
<br>
@@ -200,7 +200,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_tcp_component.tcp_if_include =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_tcp_param_register_string(&quot;if_include&quot;, NULL, &quot;&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_tcp_component.tcp_if_exclude =
<br>
-      mca_btl_tcp_param_register_string(&quot;if_exclude&quot;, NULL, &quot;lo&quot;);
<br>
+      mca_btl_tcp_param_register_string(&quot;if_exclude&quot;, NULL, &quot;lo,sppp&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_tcp_component.tcp_free_list_num =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_tcp_param_register_int (&quot;free_list_num&quot;, NULL, 8);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_tcp_component.tcp_free_list_max =
<br>
&nbsp;&nbsp;burpen-cs10-0 187 =&gt;
<br>
<p><p><p><pre>
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
<li><strong>Next message:</strong> <a href="4864.php">Leonardo Fialho: "[OMPI devel] Modex and others"</a>
<li><strong>Previous message:</strong> <a href="4862.php">Jeff Squyres: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4866.php">Adrian Knoth: "Re: [OMPI devel] Additional excluded tcp inteface"</a>
<li><strong>Reply:</strong> <a href="4866.php">Adrian Knoth: "Re: [OMPI devel] Additional excluded tcp inteface"</a>
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
