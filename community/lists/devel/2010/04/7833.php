<?
$subject_val = "[OMPI devel] shared library versions in 1.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 09:01:41 2010" -->
<!-- isoreceived="20100428130141" -->
<!-- sent="Wed, 28 Apr 2010 09:01:31 -0400" -->
<!-- isosent="20100428130131" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] shared library versions in 1.4.2" -->
<!-- id="0DEDF2A3-EB73-4206-B057-22264D97DAF3_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] shared library versions in 1.4.2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 09:01:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7834.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7832.php">Jeff Squyres: "[OMPI devel] 1.4.2 NEWS file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I propose the following for 1.4.2.  Can someone double check this?
<br>
<p><p>Index: VERSION
<br>
===================================================================
<br>
--- VERSION	(revision 23057)
<br>
+++ VERSION	(working copy)
<br>
@@ -70,17 +70,19 @@
<br>
&nbsp;# be affected by changes to inlined functions in OMPI's
<br>
&nbsp;# header-file-based C++ bindings implementation.
<br>
&nbsp;
<br>
-# 5. The ORTE and OPAL libraries will change versions when their
<br>
-# public interfaces change (as relative to the layer(s) above them).
<br>
-# None of the ORTE and OPAL interfaces are public to MPI applications,
<br>
-# but they are &quot;public&quot; within the OMPI code base and select 3rd party
<br>
-# software packages.
<br>
+# 5. For the v1.4 series, we have decided not to change the version
<br>
+# numbers for libopen-rte.so and libopen-pal.so because of deep voodo
<br>
+# linker reasons.  This policy is only in effect for the v1.4 series;
<br>
+# the v1.5 series will update libopen-rte.so/libopen-pal.so version
<br>
+# numbers as appropriate.  This policy change will unfortunately cause
<br>
+# an ABI breakage for MPI applications between the v1.4 and v1.5
<br>
+# series -- sorry folks!  :-(
<br>
&nbsp;
<br>
&nbsp;# Version numbers are described in the Libtool current:revision:age
<br>
&nbsp;# format.
<br>
&nbsp;
<br>
-libmpi_so_version=0:1:0
<br>
-libmpi_cxx_so_version=0:0:0
<br>
+libmpi_so_version=0:2:0
<br>
+libmpi_cxx_so_version=0:1:0
<br>
&nbsp;libmpi_f77_so_version=0:0:0
<br>
&nbsp;libmpi_f90_so_version=0:0:0
<br>
&nbsp;libopen_rte_so_version=0:0:0
<br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7834.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7832.php">Jeff Squyres: "[OMPI devel] 1.4.2 NEWS file"</a>
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
