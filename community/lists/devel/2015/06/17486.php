<?
$subject_val = "[OMPI devel] master seg fault in CM PML";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 12:29:37 2015" -->
<!-- isoreceived="20150609162937" -->
<!-- sent="Tue, 9 Jun 2015 16:08:53 +0000" -->
<!-- isosent="20150609160853" -->
<!-- name="Friedley, Andrew" -->
<!-- email="andrew.friedley_at_[hidden]" -->
<!-- subject="[OMPI devel] master seg fault in CM PML" -->
<!-- id="0429C22EBDB44040B478F8F77EF14518D1F430_at_ORSMSX114.amr.corp.intel.com" -->
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
<strong>Subject:</strong> [OMPI devel] master seg fault in CM PML<br>
<strong>From:</strong> Friedley, Andrew (<em>andrew.friedley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-09 12:08:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17487.php">George Bosilca: "Re: [OMPI devel] master seg fault in CM PML"</a>
<li><strong>Previous message:</strong> <a href="17485.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Branch for v2.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17487.php">George Bosilca: "Re: [OMPI devel] master seg fault in CM PML"</a>
<li><strong>Reply:</strong> <a href="17487.php">George Bosilca: "Re: [OMPI devel] master seg fault in CM PML"</a>
<li><strong>Reply:</strong> <a href="17488.php">Ralph Castain: "Re: [OMPI devel] master seg fault in CM PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm seeing an issue running various tests from the Intel MPI test suite.  Has anyone else seen this?  Any ideas?  RHEL7, master git hash 090922887b92c9764cc5, no CFLAGS set,  no special configure options.  The mpirun command and output are included below.
<br>
<p>Failure happens with '-mca pml cm -mca mtl psm', but '-mca pml ob1 -mca btl tcp,sm,self' works.
<br>
<p>Thanks,
<br>
<p>Andrew
<br>
<p><p>mpirun -np 6 -H sperf-05,sperf-06 -mca pml cm -mca mtl psm --  `pwd`/src/MPI_Allreduce_loc_c
<br>
<p>MPI_Allreduce_loc_c:127662 terminated with signal 11 at PC=7fde548b7b45 SP=7fff344f8180.  Backtrace:
<br>
MPI_Allreduce_loc_c: opal_convertor.c:566: opal_convertor_prepare_for_recv: Assertion `convertor-&gt;pStack == convertor-&gt;static_stack' failed.
<br>
<p>MPI_Allreduce_loc_c:127663 terminated with signal 6 at PC=7f492a3b35c9 SP=7fffc7374438.  Backtrace:
<br>
<p>MPI_Allreduce_loc_c:127664 terminated with signal 11 at PC=7f3eabe88b45 SP=7fff9e686f70.  Backtrace:
<br>
MPITEST info  (0): Starting MPI_Allreduce_loc() test
<br>
MPI_Allreduce_loc_c: opal_convertor.c:566: opal_convertor_prepare_for_recv: Assertion `convertor-&gt;pStack == convertor-&gt;static_stack' failed.
<br>
<p>MPI_Allreduce_loc_c:8148 terminated with signal 6 at PC=7f5bcafa75c9 SP=7fff65830328.  Backtrace:
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/libopen-pal.so.0(+0x4db45)[0x7f3eabe88b45]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/libopen-pal.so.0(opal_convertor_prepare_for_send+0x2ec)[0x7f3eabe89352]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x2467)[0x7f3ea6dbd467]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x442e)[0x7f3ea6dbf42e]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/libopen-pal.so.0(+0x4db45)[0x7fde548b7b45]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/libopen-pal.so.0(opal_convertor_prepare_for_send+0x2ec)[0x7fde548b8352]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x2467)[0x7fde4f7be467]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x442e)[0x7fde4f7c042e]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(ompi_coll_base_allreduce_intra_recursivedoubling+0x2ac)[0x7fde5553b4fb]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_dec_fixed+0xa8)[0x7fde4e4fecd1]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(ompi_coll_base_allreduce_intra_recursivedoubling+0x2ac)[0x7f3eacb0c4fb]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_dec_fixed+0xa8)[0x7f3ea5afdcd1]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(PMPI_Allreduce+0x3ae)[0x7f3eacaa55e8]
<br>
/lib64/libc.so.6(gsignal+0x39)[0x7f492a3b35c9]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(PMPI_Allreduce+0x3ae)[0x7fde554d45e8]
<br>
/nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4029a5]
<br>
/lib64/libc.so.6(__libc_start_main+0xf5)[0x7fde54eafaf5]
<br>
/nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4019a9]
<br>
/nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4029a5]
<br>
/lib64/libc.so.6(__libc_start_main+0xf5)[0x7f3eac480af5]
<br>
/nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4019a9]
<br>
/lib64/libc.so.6(abort+0x148)[0x7f492a3b4cd8]
<br>
/lib64/libc.so.6(+0x2e536)[0x7f492a3ac536]
<br>
/lib64/libc.so.6(+0x2e5e2)[0x7f492a3ac5e2]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/libopen-pal.so.0(opal_convertor_prepare_for_recv+0x297)[0x7f4929da7f8c]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x24d0)[0x7f4924cbd4d0]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x2bd5)[0x7f4924cbdbd5]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(ompi_coll_base_allreduce_intra_recursivedoubling+0x30c)[0x7f492aa2b55b]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_dec_fixed+0xa8)[0x7f49239fdcd1]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(PMPI_Allreduce+0x3ae)[0x7f492a9c45e8]
<br>
/nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4029a5]
<br>
/lib64/libc.so.6(__libc_start_main+0xf5)[0x7f492a39faf5]
<br>
/nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4019a9]
<br>
/lib64/libc.so.6(gsignal+0x39)[0x7f5bcafa75c9]
<br>
/lib64/libc.so.6(abort+0x148)[0x7f5bcafa8cd8]
<br>
/lib64/libc.so.6(+0x2e536)[0x7f5bcafa0536]
<br>
/lib64/libc.so.6(+0x2e5e2)[0x7f5bcafa05e2]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/libopen-pal.so.0(opal_convertor_prepare_for_recv+0x297)[0x7f5bca99bf8c]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x24d0)[0x7f5bc58be4d0]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_pml_cm.so(+0x2bd5)[0x7f5bc58bebd5]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(ompi_coll_base_allreduce_intra_recursivedoubling+0x30c)[0x7f5bcb61f55b]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_dec_fixed+0xa8)[0x7f5bc45fecd1]
<br>
/nfs/site/home/afriedle/local/ompi-afriedle/lib/libmpi.so.0(PMPI_Allreduce+0x3ae)[0x7f5bcb5b85e8]
<br>
/nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4029a5]
<br>
/lib64/libc.so.6(__libc_start_main+0xf5)[0x7f5bcaf93af5]
<br>
/nfs/site/home/afriedle/apps/intel/src/MPI_Allreduce_loc_c[0x4019a9]
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17487.php">George Bosilca: "Re: [OMPI devel] master seg fault in CM PML"</a>
<li><strong>Previous message:</strong> <a href="17485.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Branch for v2.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17487.php">George Bosilca: "Re: [OMPI devel] master seg fault in CM PML"</a>
<li><strong>Reply:</strong> <a href="17487.php">George Bosilca: "Re: [OMPI devel] master seg fault in CM PML"</a>
<li><strong>Reply:</strong> <a href="17488.php">Ralph Castain: "Re: [OMPI devel] master seg fault in CM PML"</a>
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
