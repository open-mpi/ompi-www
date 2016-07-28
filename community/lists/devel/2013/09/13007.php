<?
$subject_val = "[OMPI devel] Trunk appears broken";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 27 15:25:24 2013" -->
<!-- isoreceived="20130927192524" -->
<!-- sent="Fri, 27 Sep 2013 19:23:17 +0000" -->
<!-- isosent="20130927192317" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk appears broken" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A2DE3D883_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk appears broken<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-27 15:23:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13008.php">Ralph Castain: "Re: [OMPI devel] Trunk appears broken"</a>
<li><strong>Previous message:</strong> <a href="13006.php">George Bosilca: "Re: [OMPI devel] neighborhood collectives issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13008.php">Ralph Castain: "Re: [OMPI devel] Trunk appears broken"</a>
<li><strong>Reply:</strong> <a href="13008.php">Ralph Castain: "Re: [OMPI devel] Trunk appears broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And for once, it's not our fault. Hooray!
<br>
<p>--- make all -j 8 result_stdout/result_stderr ---
<br>
&nbsp;&nbsp;CC       libvt_mpi_la-vt_iowrap.lo
<br>
vt_mpiwrap.c:7058: error: conflicting types for 'MPI_File_write_shared'
<br>
/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1367: note: previous declaration of 'MPI_File_write_shared' was here
<br>
In file included from vt_mpiwrap.c:7101:
<br>
<p>vt_mpiwrap.gen.c:421: error: conflicting types for 'MPI_Cart_rank'
<br>
&nbsp;&nbsp;CC       libvt_mpi_la-vt_iowrap_helper.lo
<br>
vt_mpiwrap.gen.c:1071: error: conflicting types for 'MPI_Get_count'
<br>
vt_mpiwrap.gen.c:1113: error: conflicting types for 'MPI_Get_elements'
<br>
vt_mpiwrap.gen.c:1283: error: conflicting types for 'MPI_Graph_map'
<br>
/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1433: note: previous declaration of 'MPI_Graph_map' was here
<br>
vt_mpiwrap.gen.c:1591: error: conflicting types for 'MPI_Group_translate_ranks'
<br>
/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1462: note: previous declaration of 'MPI_Group_translate_ranks' was here
<br>
vt_mpiwrap.gen.c:1863: error: conflicting types for 'MPI_Pack'
<br>
/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1561: note: previous declaration of 'MPI_Pack' was here
<br>
vt_mpiwrap.gen.c:2029: error: conflicting types for 'MPI_Test_cancelled'
<br>
/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1653: note: previous declaration of 'MPI_Test_cancelled' was here
<br>
vt_mpiwrap.gen.c:2371: error: conflicting types for 'MPI_Type_indexed'
<br>
/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1731: note: previous declaration of 'MPI_Type_indexed' was here
<br>
vt_mpiwrap.gen.c:2623: error: conflicting types for 'MPI_Unpack'
<br>
/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1751: note: previous declaration of 'MPI_Unpack' was here
<br>
vt_mpiwrap.gen.c:2997: error: conflicting types for 'MPI_Pack_external'
<br>
vt_mpiwrap.gen.c:3039: error: conflicting types for 'MPI_Pack_external_size'
<br>
In file included from vt_mpiwrap.c:7101:
<br>
<p>vt_mpiwrap.gen.c:3165: error: conflicting types for 'MPI_Type_create_hindexed'
<br>
vt_mpiwrap.gen.c:3249: error: conflicting types for 'MPI_Type_create_indexed_block'
<br>
/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1684: note: previous declaration of 'MPI_Type_create_indexed_block' was here
<br>
vt_mpiwrap.gen.c:3333: error: conflicting types for 'MPI_Type_create_struct'
<br>
vt_mpiwrap.gen.c:3375: error: conflicting types for 'MPI_Type_create_subarray'
<br>
vt_mpiwrap.gen.c:3501: error: conflicting types for 'MPI_Unpack_external'
<br>
vt_mpiwrap.gen.c:3897: error: conflicting types for 'MPI_Comm_set_name'
<br>
vt_mpiwrap.gen.c:4445: error: conflicting types for 'MPI_Type_set_name'
<br>
vt_mpiwrap.gen.c:4741: error: conflicting types for 'MPI_Win_set_name'  CC       libvt_mpi_la-vt_libwrap.lo
<br>
/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1790: note: previous declaration of 'MPI_Win_set_name' was here
<br>
vt_mpiwrap.gen.c:5345: error: conflicting types for 'MPI_File_set_view'
<br>
vt_mpiwrap.gen.c:5749: error: conflicting types for 'MPI_Register_datarep'
<br>
/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1591: note: previous declaration of 'MPI_Register_datarep' was here
<br>
&nbsp;&nbsp;CC       libvt_mpi_la-vt_mallocwrap.lo
<br>
make[5]: *** [libvt_mpi_la-vt_mpiwrap.lo] Error 1
<br>
make[5]: *** Waiting for unfinished jobs....
<br>
&nbsp;&nbsp;CC       libvt_mpi_la-vt_mpifile.lo
<br>
make[5]: Leaving directory `/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/vtlib'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory `/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Joshua S. Ladd, PhD
<br>
HPC Algorithms Engineer
<br>
Mellanox Technologies
<br>
<p>Email: joshual_at_[hidden]&lt;mailto:joshual_at_[hidden]&gt;
<br>
Cell: +1 (865) 258 - 8898
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13007/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13008.php">Ralph Castain: "Re: [OMPI devel] Trunk appears broken"</a>
<li><strong>Previous message:</strong> <a href="13006.php">George Bosilca: "Re: [OMPI devel] neighborhood collectives issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13008.php">Ralph Castain: "Re: [OMPI devel] Trunk appears broken"</a>
<li><strong>Reply:</strong> <a href="13008.php">Ralph Castain: "Re: [OMPI devel] Trunk appears broken"</a>
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
