<?
$subject_val = "[OMPI devel] fix 2014: Problems in romio";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 09:05:03 2009" -->
<!-- isoreceived="20090909130503" -->
<!-- sent="Wed, 9 Sep 2009 15:04:58 +0200" -->
<!-- isosent="20090909130458" -->
<!-- name="pascal.deveze_at_[hidden]" -->
<!-- email="pascal.deveze_at_[hidden]" -->
<!-- subject="[OMPI devel] fix 2014: Problems in romio" -->
<!-- id="OF94BF1222.4657712B-ONC125762C.0042AB1B_at_fraz.bull.fr" -->
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
<strong>Subject:</strong> [OMPI devel] fix 2014: Problems in romio<br>
<strong>From:</strong> <a href="mailto:pascal.deveze_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20fix%202014:%20Problems%20in%20romio"><em>pascal.deveze_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-09-09 09:04:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6806.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6804.php">Lenny Verkhovsky: "Re: [OMPI devel] Error message improvement"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have seen that ROMIO goes wrong with fix 2014: A lot of ROMIO tests in
<br>
ompi/mca/io/romio/romio/test/ are failing
<br>
For example, with noncontig_coll2:
<br>
<p>[inti15:28259] *** Process received signal ***
<br>
[inti15:28259] Signal: Segmentation fault (11)
<br>
[inti15:28259] Signal code: Address not mapped (1)
<br>
[inti15:28259] Failing at address: (nil)
<br>
[inti15:28259] [ 0] /lib64/libpthread.so.0 [0x3f19c0e4c0]
<br>
[inti15:28259] [ 1]
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/openmpi/mca_btl_openib.so
<br>
[0x2b6640c74d79]
<br>
[inti15:28259] [ 2]
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/openmpi/mca_rml_oob.so
<br>
[0x2b663e2e6e92]
<br>
[inti15:28259] [ 3]
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/openmpi/mca_oob_tcp.so
<br>
[0x2b663e4f8e63]
<br>
[inti15:28259] [ 4]
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/openmpi/mca_oob_tcp.so
<br>
[0x2b663e4ff485]
<br>
[inti15:28259] [ 5]
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/libopen-pal.so.0(opal_event_loop+0x5df)
<br>
&nbsp;[0x2b663d3d92ff]
<br>
[inti15:28259] [ 6]
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/libopen-pal.so.0(opal_progress+0x5e)
<br>
&nbsp;[0x2b663d3ba33e]
<br>
[inti15:28259] [ 7] /home_nfs/devezep/ATLAS/openmpi-default/lib/libmpi.so.0
<br>
[0x2b663ce26624]
<br>
[inti15:28259] [ 8]
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/openmpi/mca_coll_tuned.so
<br>
[0x2b664217fda2]
<br>
[inti15:28259] [ 9]
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/openmpi/mca_coll_tuned.so
<br>
[0x2b6642179966]
<br>
[inti15:28259] [10]
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/libmpi.so.0(MPI_Alltoall+0x6f)
<br>
[0x2b663ce352ef]
<br>
[inti15:28259] [11]
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/openmpi/mca_io_romio.so(ADIOI_Calc_others_req+0x65)
<br>
&nbsp;[0x2aaab1cfc525]
<br>
[inti15:28259] [12]
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/openmpi/mca_io_romio.so(ADIOI_GEN_WriteStridedColl+0x433)
<br>
&nbsp;[0x2aaab1cf0ac3]
<br>
[inti15:28259] [13]
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/openmpi/mca_io_romio.so(MPIOI_File_write_all+0xc0)
<br>
&nbsp;[0x2aaab1d0a8f0]
<br>
[inti15:28259] [14]
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_write_all+0x23)
<br>
&nbsp;[0x2aaab1d0a823]
<br>
[inti15:28259] [15]
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/openmpi/mca_io_romio.so
<br>
[0x2aaab1cedce9]
<br>
[inti15:28259] [16]
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/libmpi.so.0(MPI_File_write_all+0x4e)
<br>
&nbsp;[0x2b663ce64f9e]
<br>
[inti15:28259] [17] ./noncontig_coll2(test_file+0x32b) [0x4034bb]
<br>
[inti15:28259] [18] ./noncontig_coll2(main+0x58b) [0x402d03]
<br>
[inti15:28259] [19] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3f1901d974]
<br>
[inti15:28259] [20] ./noncontig_coll2 [0x4026c9]
<br>
[inti15:28259] *** End of error message ***
<br>
<p>All the ROMIO tests pass without this fix
<br>
<p>Is there a problem in ROMIO with the datatype interface ?
<br>
<p>Pascal
<br>
<p>Here is the export of the corresponding patch:
<br>
<p>hg export 16301
<br>
# HG changeset patch
<br>
# User rusraink
<br>
# Date 1251912841 0
<br>
# Node ID eefd4bd4551969dc7454e63c2f42871cc9376a8f
<br>
# Parent  8aab76743e58474f1341be6f9d0ac9ae338507f1
<br>
&nbsp;- This fixes #2014:
<br>
&nbsp;&nbsp;&nbsp;As noted in
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2009/08/6741.php">http://www.open-mpi.org/community/lists/devel/2009/08/6741.php</a>,
<br>
&nbsp;&nbsp;&nbsp;we do not correctly free a dupped predefined datatype.
<br>
&nbsp;&nbsp;&nbsp;The fix is a bit more involving. See ticket for details.
<br>
&nbsp;&nbsp;&nbsp;Tested with ibm tests and mpi_test_suite (though there's two &quot;old&quot;
<br>
failures
<br>
&nbsp;&nbsp;&nbsp;zero5.c and zero6.c)
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks to Lisandro Dalcin for bringing this up.
<br>
<p>diff -r 8aab76743e58 -r eefd4bd45519 ompi/datatype/ompi_datatype.h
<br>
--- a/ompi/datatype/ompi_datatype.h     Wed Sep 02 11:23:54 2009 +0000
<br>
+++ b/ompi/datatype/ompi_datatype.h     Wed Sep 02 17:34:01 2009 +0000
<br>
@@ -202,11 +202,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_datatype_clone ( &amp;oldType-&gt;super, &amp;new_ompi_datatype-&gt;super);
<br>
<p>+    new_ompi_datatype-&gt;super.flags &amp;= (~OMPI_DATATYPE_FLAG_PREDEFINED);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Set the keyhash to NULL -- copying attributes is *only* done at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the top level (specifically, MPI_TYPE_DUP). */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new_ompi_datatype-&gt;d_keyhash = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new_ompi_datatype-&gt;args = NULL;
<br>
-    strncpy (new_ompi_datatype-&gt;name, oldType-&gt;name, MPI_MAX_OBJECT_NAME);
<br>
+    snprintf (new_ompi_datatype-&gt;name, MPI_MAX_OBJECT_NAME, &quot;Dup %s&quot;,
<br>
+              oldType-&gt;name);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
diff -r 8aab76743e58 -r eefd4bd45519 opal/datatype/opal_datatype_clone.c
<br>
--- a/opal/datatype/opal_datatype_clone.c       Wed Sep 02 11:23:54 2009
<br>
+0000
<br>
+++ b/opal/datatype/opal_datatype_clone.c       Wed Sep 02 17:34:01 2009
<br>
+0000
<br>
@@ -33,9 +33,13 @@
<br>
&nbsp;int32_t opal_datatype_clone( const opal_datatype_t * src_type,
<br>
opal_datatype_t * dest_type )
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int32_t desc_length = src_type-&gt;desc.used + 1;  /* +1 because of the
<br>
fake OPAL_DATATYPE_END_LOOP entry */
<br>
-    dt_elem_desc_t* temp = dest_type-&gt;desc.desc; /* temporary copy of the
<br>
desc pointer */
<br>
+    dt_elem_desc_t* temp = dest_type-&gt;desc.desc;    /* temporary copy of
<br>
the desc pointer */
<br>
<p>-    memcpy( dest_type, src_type, sizeof(opal_datatype_t) );
<br>
+    /* copy _excluding_ the super object, we want to keep the
<br>
cls_destruct_array */
<br>
+    memcpy( dest_type+sizeof(opal_object_t),
<br>
+            src_type+sizeof(opal_object_t),
<br>
+            sizeof(opal_datatype_t)-sizeof(opal_object_t) );
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest_type-&gt;super.obj_reference_count = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest_type-&gt;desc.desc = temp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest_type-&gt;flags &amp;= (~OPAL_DATATYPE_FLAG_PREDEFINED);
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6806.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6804.php">Lenny Verkhovsky: "Re: [OMPI devel] Error message improvement"</a>
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
