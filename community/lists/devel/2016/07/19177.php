<?
$subject_val = "[OMPI devel] MCA_SPML_CALL call in compiled objects";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 00:08:52 2016" -->
<!-- isoreceived="20160712040852" -->
<!-- sent="Tue, 12 Jul 2016 14:08:42 +1000" -->
<!-- isosent="20160712040842" -->
<!-- name="Ben Menadue" -->
<!-- email="ben.menadue_at_[hidden]" -->
<!-- subject="[OMPI devel] MCA_SPML_CALL call in compiled objects" -->
<!-- id="008701d1dbf3$140d3200$3c279600$_at_nci.org.au" -->
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
<strong>Subject:</strong> [OMPI devel] MCA_SPML_CALL call in compiled objects<br>
<strong>From:</strong> Ben Menadue (<em>ben.menadue_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 00:08:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19178.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="19176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19198.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MCA_SPML_CALL call in compiled objects"</a>
<li><strong>Reply:</strong> <a href="19198.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MCA_SPML_CALL call in compiled objects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Looks like there's a #include missing from
<br>
oshmem/shmem/fortran/shmem_put_nb_f.c. It's causing MCA_SPML_CALL to show up
<br>
as an undefined symbol, even though it's a macro (among other things). The
<br>
#include is in shmem_get_nb_f.c but not ..._put_...
<br>
<p>Patch against master (0e433ea):
<br>
<p>$ git diff
<br>
diff --git a/oshmem/shmem/fortran/shmem_put_nb_f.c
<br>
b/oshmem/shmem/fortran/shmem_put_nb_f.c
<br>
index 3acff9c..acfb22d 100644
<br>
--- a/oshmem/shmem/fortran/shmem_put_nb_f.c
<br>
+++ b/oshmem/shmem/fortran/shmem_put_nb_f.c
<br>
@@ -13,6 +13,7 @@
<br>
&nbsp;#include &quot;oshmem/include/shmem.h&quot;
<br>
&nbsp;#include &quot;oshmem/shmem/shmem_api_logger.h&quot;
<br>
&nbsp;#include &quot;oshmem/runtime/runtime.h&quot;
<br>
+#include &quot;oshmem/mca/spml/spml.h&quot;
<br>
&nbsp;#include &quot;ompi/datatype/ompi_datatype.h&quot;
<br>
&nbsp;#include &quot;stdio.h&quot;
<br>
<p><p>Cheers,
<br>
Ben
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19178.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="19176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19198.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MCA_SPML_CALL call in compiled objects"</a>
<li><strong>Reply:</strong> <a href="19198.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MCA_SPML_CALL call in compiled objects"</a>
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
