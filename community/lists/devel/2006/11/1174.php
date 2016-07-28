<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 12 20:59:58 2006" -->
<!-- isoreceived="20061113015958" -->
<!-- sent="Mon, 13 Nov 2006 03:00:32 +0100" -->
<!-- isosent="20061113020032" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="[OMPI devel] memory leak caused by possibly wrong initialization in ompi_ddt_duplicate()" -->
<!-- id="20061113020032.GA12220_at_hex.inf-ra.uni-jena.de" -->
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
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-12 21:00:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1175.php">Ralph Castain: "Re: [OMPI devel] valgrind messages important?"</a>
<li><strong>Previous message:</strong> <a href="1173.php">Thomas Peiselt: "Re: [OMPI devel] valgrind messages important?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1176.php">George Bosilca: "Re: [OMPI devel] memory leak caused by possibly wrong initialization in ompi_ddt_duplicate()"</a>
<li><strong>Reply:</strong> <a href="1176.php">George Bosilca: "Re: [OMPI devel] memory leak caused by possibly wrong initialization in ompi_ddt_duplicate()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>one of our projects recently exposed severe memory leakage when using
<br>
ROMIO to write a complex derived datatype (a struct made of other
<br>
structs) to a file. From our code we distilled the attached short
<br>
program to reproduce the leak.
<br>
<p>After some Valgrind sessions, it appears as if the memcpy in
<br>
ompi_ddt_duplicate() is a bit overhasty, as it does copy the old
<br>
type's reference counter, too. 
<br>
<p>I don't know if this is the right way to fix it, but if I apply the
<br>
patch below to ompi the leak is fixed.
<br>
<p>Cheers!
<br>
-Andreas
<br>
<p><p>diff -ru openmpi-1.1.1/ompi/datatype/dt_create_dup.c
<br>
openmpi-1.1.1-fixed/ompi/datatype/dt_create_dup.c
<br>
--- openmpi-1.1.1/ompi/datatype/dt_create_dup.c 2006-06-14
<br>
21:56:41.000000000 +0200
<br>
+++ openmpi-1.1.1-fixed/ompi/datatype/dt_create_dup.c   2006-11-13
<br>
00:35:03.000000000 +0100
<br>
@@ -33,6 +33,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int32_t old_index = pdt-&gt;d_f_to_c_index;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memcpy( pdt, oldType, sizeof(ompi_datatype_t) );
<br>
+    ((opal_object_t *)pdt)-&gt;obj_reference_count = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pdt-&gt;desc.desc = temp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pdt-&gt;flags &amp;= (~DT_FLAG_PREDEFINED);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* ompi_ddt_create() creates a new f_to_c index that was saved
<br>
<p><p><p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1174/memleak_fileio.cc">memleak_fileio.cc</a>
</ul>
<!-- attachment="memleak_fileio.cc" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1174/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1175.php">Ralph Castain: "Re: [OMPI devel] valgrind messages important?"</a>
<li><strong>Previous message:</strong> <a href="1173.php">Thomas Peiselt: "Re: [OMPI devel] valgrind messages important?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1176.php">George Bosilca: "Re: [OMPI devel] memory leak caused by possibly wrong initialization in ompi_ddt_duplicate()"</a>
<li><strong>Reply:</strong> <a href="1176.php">George Bosilca: "Re: [OMPI devel] memory leak caused by possibly wrong initialization in ompi_ddt_duplicate()"</a>
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
