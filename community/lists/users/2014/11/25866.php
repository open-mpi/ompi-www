<?
$subject_val = "[OMPI users] OpenMPI 1.6.5 &amp; 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 15:13:35 2014" -->
<!-- isoreceived="20141125201335" -->
<!-- sent="Tue, 25 Nov 2014 15:13:18 -0500" -->
<!-- isosent="20141125201318" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.6.5 &amp;amp; 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close" -->
<!-- id="5474E2DE.8020607_at_giref.ulaval.ca" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.6.5 &amp; 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-25 15:13:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25867.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 &amp; 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="25865.php">George Bosilca: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25867.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 &amp; 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="25867.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 &amp; 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have random segmentation violations (signal 11) in the mentioned 
<br>
function when testing MPI I/O calls with 2 processes on a single 
<br>
machine.  Most of the time (1499/1500), it works perfectly.
<br>
<p>here are the call stacks (for 1.6.3) on processes:
<br>
====================
<br>
process 0:
<br>
====================
<br>
#0  0x00000035374cf287 in sched_yield () from /lib64/libc.so.6
<br>
#1  0x00007ff73d158f4f in opal_progress () at runtime/opal_progress.c:220
<br>
#2  0x00007ff73d0a6fc5 in opal_condition_wait (count=2, 
<br>
requests=0x7fffe3ef7ca0, statuses=0x7fffe3ef7c70) at 
<br>
../opal/threads/condition.h:99
<br>
#3  ompi_request_default_wait_all (count=2, requests=0x7fffe3ef7ca0, 
<br>
statuses=0x7fffe3ef7c70) at request/req_wait.c:263
<br>
#4  0x00007ff7348d365e in ompi_coll_tuned_sendrecv_actual (sendbuf=0x0, 
<br>
scount=0, sdatatype=0x7ff73d3c0cc0, dest=1, stag=-16, recvbuf=&lt;value 
<br>
optimized out&gt;, rcount=0, rdatatype=0x7ff73d3c0cc0, source=1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rtag=-16, comm=0x5c21a50, status=0x0) at coll_tuned_util.c:54
<br>
#5  0x00007ff7348db8ff in ompi_coll_tuned_barrier_intra_two_procs 
<br>
(comm=&lt;value optimized out&gt;, module=&lt;value optimized out&gt;) at 
<br>
coll_tuned_barrier.c:256
<br>
#6  0x00007ff73d0b42d2 in PMPI_Barrier (comm=0x5c21a50) at pbarrier.c:70
<br>
#7  0x00007ff7302a549c in mca_io_romio_dist_MPI_File_close 
<br>
(mpi_fh=0x47d9e70) at close.c:62
<br>
#8  0x00007ff73d0a15fe in file_destructor (file=0x4d7b270) at 
<br>
file/file.c:273
<br>
#9  0x00007ff73d0a1519 in opal_obj_run_destructors (file=0x7fffe3ef8bb0) 
<br>
at ../opal/class/opal_object.h:448
<br>
#10 ompi_file_close (file=0x7fffe3ef8bb0) at file/file.c:146
<br>
#11 0x00007ff73d0ce868 in PMPI_File_close (fh=0x7fffe3ef8bb0) at 
<br>
pfile_close.c:59
<br>
<p>====================
<br>
process 1:
<br>
====================
<br>
...
<br>
#9  &lt;signal handler called&gt;
<br>
#10 0x00000035374784fd in _int_free () from /lib64/libc.so.6
<br>
#11 0x00007f37d777e493 in mca_io_romio_dist_MPI_File_close 
<br>
(mpi_fh=0x4d41c90) at close.c:55
<br>
#12 0x00007f37e457a5fe in file_destructor (file=0x4dbc9b0) at 
<br>
file/file.c:273
<br>
#13 0x00007f37e457a519 in opal_obj_run_destructors (file=0x7fff7c2c94b0) 
<br>
at ../opal/class/opal_object.h:448
<br>
#14 ompi_file_close (file=0x7fff7c2c94b0) at file/file.c:146
<br>
#15 0x00007f37e45a7868 in PMPI_File_close (fh=0x7fff7c2c94b0) at 
<br>
pfile_close.c:59
<br>
...
<br>
<p>The problematic free is:
<br>
<p>55              ADIOI_Free((fh)-&gt;shared_fp_fname);
<br>
<p>Here are the values in the &quot;fh&quot; structure on both processes:
<br>
<p>====================
<br>
process 0:
<br>
====================
<br>
&nbsp;&nbsp;{cookie = 2487376, fd_sys = 12, fd_direct = -1, direct_read = 53, 
<br>
direct_write = 1697919538, d_mem = 3158059, d_miniosz = 1702127872, 
<br>
fp_ind = 11, fp_sys_posn = -1, fns = 0x7ff7304b2280, comm = 0x5c21a50,
<br>
&nbsp;&nbsp;&nbsp;agg_comm = 0x7ff73d3d4120, is_open = 1, is_agg = 1,
<br>
&nbsp;&nbsp;&nbsp;filename = 0x4d103a0 
<br>
&quot;/pmi/cmpbib/compilation_BIB_gcc_redhat_lance_validation/COMPILE_AUTO/TestValidation/Ressources/dev/Test.NormesEtProjectionChamp/Ressources.champscalhermite2dordre5incarete_elemtri_2proc/Resultats.Etal&quot;..., 
<br>
file_system = 152, access_mode = 2, disp = 0, etype = 0x7ff73d3c0cc0, 
<br>
filetype = 0x7ff73d3c0cc0, etype_size = 1, hints = 0x4cffde0, info = 
<br>
0x5377610, split_coll_count = 0, split_status = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SOURCE = 1681024372, MPI_TAG = 1919185519, MPI_ERROR = 
<br>
1852388709, _cancelled = 1701994851, _ucount = 8389473197092726132}, 
<br>
split_datatype = 0x636f7270325f6972,
<br>
&nbsp;&nbsp;&nbsp;shared_fp_fname = 0x4d01810 &quot;\330\376x75&quot;, shared_fp_fd = 0x0, 
<br>
async_count = 0, perm = -1, atomicity = 0, fortran_handle = -1, 
<br>
err_handler = 0x7ff73d3d55c0, fs_ptr = 0x0, file_realm_st_offs = 0x0,
<br>
&nbsp;&nbsp;&nbsp;file_realm_types = 0x0, my_cb_nodes_index = 0}
<br>
<p><p>====================
<br>
process 1:
<br>
====================
<br>
print *fh
<br>
$4 = {cookie = 2487376, fd_sys = 12, fd_direct = -1, direct_read = 0, 
<br>
direct_write = 1697919538, d_mem = 3158059, d_miniosz = 1702127872, 
<br>
fp_ind = 11, fp_sys_posn = -1, fns = 0x7f37d798b280, comm = 0x4db8060,
<br>
&nbsp;&nbsp;&nbsp;agg_comm = 0x7f37e48ad120, is_open = 1, is_agg = 0,
<br>
&nbsp;&nbsp;&nbsp;filename = 0x4d52b30 
<br>
&quot;/pmi/cmpbib/compilation_BIB_gcc_redhat_lance_validation/COMPILE_AUTO/TestValidation/Ressources/dev/Test.NormesEtProjectionChamp/Ressources.champscalhermite2dordre5incarete_elemtri_2proc/Resultats.Etal&quot;..., 
<br>
file_system = 152, access_mode = 2, disp = 0, etype = 0x7f37e4899cc0, 
<br>
filetype = 0x7f37e4899cc0, etype_size = 1, hints = 0x45c5250, info = 
<br>
0x4d46750, split_coll_count = 0, split_status = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SOURCE = 1681024372, MPI_TAG = 1919185519, MPI_ERROR = 
<br>
1852388709, _cancelled = 1701994851, _ucount = 168}, split_datatype = 
<br>
0x7f37e489b0c0,
<br>
&nbsp;&nbsp;&nbsp;shared_fp_fname = 0x4806e20 
<br>
&quot;/pmi/cmpbib/compilation_BIB_gcc_redhat_lance_validation/COMPILE_AUTO/TestValidation/Ressources/dev/Test.NormesEtProjectionChamp/Ressources.champscalhermite2dordre5incarete_elemtri_2proc/Resultats.Etal&quot;..., 
<br>
shared_fp_fd = 0x0, async_count = 0, perm = -1, atomicity = 0, 
<br>
fortran_handle = -1, err_handler = 0x7f37e48ae5c0, fs_ptr = 0x0, 
<br>
file_realm_st_offs = 0x0, file_realm_types = 0x0,
<br>
&nbsp;&nbsp;&nbsp;my_cb_nodes_index = -1}
<br>
<p><p>For OpenMPI 1.6.5, I have also the problem occuring small number of times.
<br>
<p>Here is the error, reported by gcc on process 1:
<br>
<p>*** Error in 
<br>
`/home/mefpp_ericc/GIREF/bin/Test.NormesEtProjectionChamp.dev': free(): 
<br>
invalid next size (normal): 0x000000000471cbc0 ***
<br>
======= Backtrace: =========
<br>
/lib64/libc.so.6(+0x7afc6)[0x7f1082edffc6]
<br>
/lib64/libc.so.6(+0x7bd43)[0x7f1082ee0d43]
<br>
/opt/openmpi-1.6.5/lib64/libmpi.so.1(+0x630a1)[0x7f10847260a1]
<br>
/opt/openmpi-1.6.5/lib64/libmpi.so.1(ompi_info_free+0x41)[0x7f10847264f1]
<br>
/opt/openmpi-1.6.5/lib64/libmpi.so.1(PMPI_Info_free+0x47)[0x7f108473fd17]
<br>
/opt/openmpi-1.6.5/lib64/openmpi/mca_io_romio.so(ADIO_Close+0x186)[0x7f107665f666]
<br>
/opt/openmpi-1.6.5/lib64/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_close+0xf3)[0x7f107667fde3]
<br>
/opt/openmpi-1.6.5/lib64/libmpi.so.1(+0x60856)[0x7f1084723856]
<br>
/opt/openmpi-1.6.5/lib64/libmpi.so.1(ompi_file_close+0x41)[0x7f1084723d71]
<br>
/opt/openmpi-1.6.5/lib64/libmpi.so.1(PMPI_File_close+0x78)[0x7f1084750588]
<br>
<p>What can be wrong?  Is that fixed/changed in newer releases of OpenMPI?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25867.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 &amp; 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="25865.php">George Bosilca: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25867.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 &amp; 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="25867.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 &amp; 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
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
