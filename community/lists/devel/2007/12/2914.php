<?
$subject_val = "[OMPI devel] Minor patch for !IPV6_V6ONLY";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 31 23:08:24 2007" -->
<!-- isoreceived="20080101040824" -->
<!-- sent="Mon, 31 Dec 2007 20:05:38 -0800" -->
<!-- isosent="20080101040538" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Minor patch for !IPV6_V6ONLY" -->
<!-- id="4779BC12.20808_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Minor patch for !IPV6_V6ONLY<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-31 23:05:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2915.php">Paul H. Hargrove: "[OMPI devel] patch for building gm btl"</a>
<li><strong>Previous message:</strong> <a href="2913.php">Jeff Squyres: "[OMPI devel] Cisco MTT runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2918.php">Adrian Knoth: "Re: [OMPI devel] Minor patch for !IPV6_V6ONLY"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2918.php">Adrian Knoth: "Re: [OMPI devel] Minor patch for !IPV6_V6ONLY"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just tried today to build the OMPI trunk on an old RH8 box and found 
<br>
that for
<br>
&nbsp;&nbsp;OPAL_WANT_IPV6 &amp;&amp; !defined(IPV6_V6ONLY)
<br>
the file oob_tcp.c fails to compile due to unbalanced braces.
<br>
<p>Swapping an #endif with a closing branc (patch below) fixed the problem 
<br>
for me.
<br>
<p>-Paul
<br>
<p><p>--- orte/mca/oob/tcp/oob_tcp.c  (revision 17027)
<br>
+++ orte/mca/oob/tcp/oob_tcp.c  (working copy)
<br>
@@ -539,8 +539,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;mca_oob_tcp_create_listen: unable to 
<br>
disable v4-mapped addresses\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+#endif /* IPV6_V6ONLY */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-#endif /* IPV6_V6ONLY */
<br>
&nbsp;#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (AF_INET != af_family) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_ERROR;
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2915.php">Paul H. Hargrove: "[OMPI devel] patch for building gm btl"</a>
<li><strong>Previous message:</strong> <a href="2913.php">Jeff Squyres: "[OMPI devel] Cisco MTT runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2918.php">Adrian Knoth: "Re: [OMPI devel] Minor patch for !IPV6_V6ONLY"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2918.php">Adrian Knoth: "Re: [OMPI devel] Minor patch for !IPV6_V6ONLY"</a>
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
