<?
$subject_val = "[OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 14:20:18 2015" -->
<!-- isoreceived="20150313182018" -->
<!-- sent="Fri, 13 Mar 2015 12:20:13 -0600" -->
<!-- isosent="20150313182013" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="[OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228" -->
<!-- id="55032A5D.10008_at_cora.nwra.com" -->
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
<strong>Subject:</strong> [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-13 14:20:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17132.php">George Bosilca: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<li><strong>Previous message:</strong> <a href="17130.php">Atchley, Scott: "Re: [OMPI devel] BML changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17132.php">George Bosilca: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<li><strong>Reply:</strong> <a href="17132.php">George Bosilca: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<li><strong>Reply:</strong> <a href="17152.php">Nathan Hjelm: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We currently have openmpi-1.8.4-99-20150228 built in Fedora Rawhide.  I'm now
<br>
seeing crashes/hangs when running the netcdf test suite on i686.  Crashes include:
<br>
<p><p>[mock1:23702] *** An error occurred in MPI_Allreduce
<br>
[mock1:23702] *** reported by process [3653173249,1]
<br>
[mock1:23702] *** on communicator MPI COMMUNICATOR 7 DUP FROM 6
<br>
[mock1:23702] *** MPI_ERR_IN_STATUS: error code in status
<br>
[mock1:23702] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will
<br>
now abort,
<br>
[mock1:23702] ***    and potentially your MPI job)
<br>
<p>and a similar one in MPI_Bcast.
<br>
<p>Hangs (100%cpu) seem to be in opal_condition_wait() -&gt; opal_progress() calling
<br>
both mca_pml_ob1_progress and mca_btl_vader_component_progress.
<br>
<p>#0  mca_btl_vader_check_fboxes () at btl_vader_fbox.h:192
<br>
#1  mca_btl_vader_component_progress () at btl_vader_component.c:694
<br>
#2  0xf3971b69 in opal_progress () at runtime/opal_progress.c:187
<br>
#3  0xf40b4695 in opal_condition_wait (c=&lt;optimized out&gt;, m=&lt;optimized out&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../opal/threads/condition.h:78
<br>
#4  ompi_request_default_wait_all (count=6, requests=&lt;optimized out&gt;,
<br>
statuses=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at request/req_wait.c:281
<br>
#5  0xf28bb5e7 in ompi_coll_tuned_alltoall_intra_basic_linear
<br>
(sbuf=sbuf_at_entry=0xf7a2d328,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;scount=scount_at_entry=1, sdtype=sdtype_at_entry=0xf4148240 &lt;ompi_mpi_int&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rbuf=rbuf_at_entry=0xf7af1920, rcount=rcount_at_entry=1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rdtype=rdtype_at_entry=0xf4148240 &lt;ompi_mpi_int&gt;, comm=comm_at_entry=0xf7b051d8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;module=module_at_entry=0xf7a2b4d0) at coll_tuned_alltoall.c:700
<br>
#6  0xf28b4d08 in ompi_coll_tuned_alltoall_intra_dec_fixed (sbuf=0xf7a2d328,
<br>
scount=1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sdtype=0xf4148240 &lt;ompi_mpi_int&gt;, rbuf=0xf7af1920, rcount=1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rdtype=0xf4148240 &lt;ompi_mpi_int&gt;, comm=0xf7b051d8, module=0xf7a2b4d0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at coll_tuned_decision_fixed.c:130
<br>
#7  0xf40c7899 in PMPI_Alltoall (sendbuf=sendbuf_at_entry=0xf7a2d328,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendcount=sendcount_at_entry=1, sendtype=sendtype_at_entry=0xf4148240
<br>
&lt;ompi_mpi_int&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;recvbuf=recvbuf_at_entry=0xf7af1920, recvcount=recvcount_at_entry=1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;recvtype=recvtype_at_entry=0xf4148240 &lt;ompi_mpi_int&gt;, comm=0xf7b051d8) at
<br>
palltoall.c:111
<br>
#8  0xe9780da0 in ADIOI_Calc_others_req (fd=fd_at_entry=0xf7b12640,
<br>
count_my_req_procs=1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count_my_req_per_proc=0xf7a2d328, my_req=0xf7b00750, nprocs=4, myrank=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count_others_req_procs_ptr=count_others_req_procs_ptr_at_entry=0xffbea6e8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;others_req_ptr=others_req_ptr_at_entry=0xffbea6cc) at
<br>
adio/common/ad_aggregate.c:453
<br>
#9  0xe9796a14 in ADIOI_GEN_WriteStridedColl (fd=0xf7b12640, buf=0xf7aa0148,
<br>
count=2440,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;datatype=0xf4148840 &lt;ompi_mpi_byte&gt;, file_ptr_type=100, offset=0,
<br>
status=0xffbea8b8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;error_code=0xffbea790) at adio/common/ad_write_coll.c:192
<br>
#10 0xe97779e0 in MPIOI_File_write_all (fh=fh_at_entry=0xf7b12640,
<br>
offset=offset_at_entry=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;file_ptr_type=file_ptr_type_at_entry=100, buf=buf_at_entry=0xf7aa0148,
<br>
count=count_at_entry=2440,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;datatype=datatype_at_entry=0xf4148840 &lt;ompi_mpi_byte&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;myname=myname_at_entry=0xe97a9a1c &lt;myname.9354&gt; &quot;MPI_FILE_WRITE_AT_ALL&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;status=status_at_entry=0xffbea8b8) at mpi-io/write_all.c:116
<br>
#11 0xe9778176 in mca_io_romio_dist_MPI_File_write_at_all (fh=0xf7b12640,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;offset=offset_at_entry=0, buf=buf_at_entry=0xf7aa0148, count=count_at_entry=2440,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;datatype=datatype_at_entry=0xf4148840 &lt;ompi_mpi_byte&gt;,
<br>
status=status_at_entry=0xffbea8b8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at mpi-io/write_atall.c:55
<br>
#12 0xe9770bcc in mca_io_romio_file_write_at_all (fh=0xf7aa27c8, offset=0,
<br>
buf=0xf7aa0148,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count=2440, datatype=0xf4148840 &lt;ompi_mpi_byte&gt;, status=0xffbea8b8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at src/io_romio_file_write.c:61
<br>
#13 0xf40ff3ce in PMPI_File_write_at_all (fh=0xf7aa27c8, offset=0,
<br>
buf=buf_at_entry=0xf7aa0148,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count=count_at_entry=2440, e=0xf4148840 &lt;ompi_mpi_byte&gt;,
<br>
status=status_at_entry=0xffbea8b8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at pfile_write_at_all.c:75
<br>
#14 0xf437a43c in H5FD_mpio_write (_file=_file_at_entry=0xf7b074a8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type=type_at_entry=H5FD_MEM_DRAW, dxpl_id=167772177, addr=31780,
<br>
size=size_at_entry=2440,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf=buf_at_entry=0xf7aa0148) at ../../src/H5FDmpio.c:1840
<br>
#15 0xf4375cd5 in H5FD_write (file=0xf7b074a8, dxpl=0xf7a47d20,
<br>
type=H5FD_MEM_DRAW,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;addr=31780, size=size_at_entry=2440, buf=buf_at_entry=0xf7aa0148) at
<br>
../../src/H5FDint.c:245
<br>
#16 0xf4360932 in H5F__accum_write (fio_info=fio_info_at_entry=0xffbea9d4,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type=type_at_entry=H5FD_MEM_DRAW, addr=31780, size=size_at_entry=2440,
<br>
buf=buf_at_entry=0xf7aa0148)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../src/H5Faccum.c:824
<br>
#17 0xf436430c in H5F_block_write (f=0xf7a31860,
<br>
type=type_at_entry=H5FD_MEM_DRAW, addr=31780,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size=size_at_entry=2440, dxpl_id=167772177, buf=0xf7aa0148) at
<br>
../../src/H5Fio.c:170
<br>
#18 0xf43413ee in H5D__mpio_select_write (io_info=0xffbeab60,
<br>
type_info=0xffbeab1c,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_buf_count=2440, file_space=0x0, mem_space=0x0) at ../../src/H5Dmpio.c:296
<br>
#19 0xf4341f33 in H5D__final_collective_io (mpi_buf_type=0xffbeaa7c,
<br>
mpi_file_type=0xffbeaa78,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_buf_count=&lt;optimized out&gt;, type_info=0xffbeab1c, io_info=0xffbeab60)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../src/H5Dmpio.c:1444
<br>
#20 H5D__inter_collective_io (mem_space=0xf7a38120, file_space=0xf7a55590,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type_info=0xffbeab1c, io_info=0xffbeab60) at ../../src/H5Dmpio.c:1400
<br>
#21 H5D__contig_collective_write (io_info=0xffbeab60, type_info=0xffbeab1c,
<br>
nelmts=610,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;file_space=0xf7a55590, mem_space=0xf7a38120, fm=0xffbeace0) at
<br>
../../src/H5Dmpio.c:528
<br>
#22 0xf433ae8d in H5D__write (buf=0xf7aa0148, dxpl_id=167772177,
<br>
file_space=0xf7a55590,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mem_space=0xf7a38120, mem_type_id=-140159600, dataset=0xf7a3eb40) at
<br>
../../src/H5Dio.c:787
<br>
#23 H5D__pre_write (dset=dset_at_entry=0xf7a3eb40, direct_write=&lt;optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mem_type_id=mem_type_id_at_entry=50331747, mem_space=mem_space_at_entry=0xf7a38120,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;file_space=0xf7a55590, dxpl_id=dxpl_id_at_entry=167772177,
<br>
buf=buf_at_entry=0xf7aa0148)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../src/H5Dio.c:351
<br>
#24 0xf433b74c in H5Dwrite (dset_id=83886085, mem_type_id=50331747,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mem_space_id=mem_space_id_at_entry=67108867,
<br>
file_space_id=file_space_id_at_entry=67108866,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dxpl_id=dxpl_id_at_entry=167772177, buf=buf_at_entry=0xf7aa0148) at
<br>
../../src/H5Dio.c:270
<br>
#25 0xf466b603 in nc4_put_vara (nc=0xf7a05c58, ncid=ncid_at_entry=65536,
<br>
varid=varid_at_entry=3,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;startp=startp_at_entry=0xffbf6a08, countp=countp_at_entry=0xffbf6a10,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mem_nc_type=mem_nc_type_at_entry=5, is_long=is_long_at_entry=0,
<br>
data=data_at_entry=0xf7a07c40)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../libsrc4/nc4hdf.c:788
<br>
#26 0xf4673c55 in nc4_put_vara_tc (mem_type_is_long=0, op=0xf7a07c40,
<br>
countp=0xffbf6a10,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;startp=0xffbf6a08, mem_type=5, varid=3, ncid=65536) at
<br>
../../libsrc4/nc4var.c:1429
<br>
#27 NC4_put_vara (ncid=65536, varid=3, startp=0xffbf6a08, countp=0xffbf6a10,
<br>
op=0xf7a07c40,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;memtype=5) at ../../libsrc4/nc4var.c:1565
<br>
#28 0xf460a377 in NC_put_vara (ncid=ncid_at_entry=65536, varid=varid_at_entry=3,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;start=start_at_entry=0xffbf6a08, edges=edges_at_entry=0xffbf6a10,
<br>
value=value_at_entry=0xf7a07c40,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;memtype=memtype_at_entry=5) at ../../libdispatch/dvarput.c:79
<br>
#29 0xf460b541 in nc_put_vara_float (ncid=65536, varid=3, startp=0xffbf6a08,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;countp=0xffbf6a10, op=0xf7a07c40) at ../../libdispatch/dvarput.c:655
<br>
#30 0xf77d06ed in test_pio_2d (cache_size=67108864, facc_type=8192,
<br>
access_flag=1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0xf414d800 &lt;ompi_mpi_comm_world&gt;, info=0xf4154240
<br>
&lt;ompi_mpi_info_null&gt;, mpi_size=4,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_rank=0, chunk_size=0xffbf76f4) at ../../nc_test4/tst_nc4perf.c:96
<br>
#31 0xf77cfdb1 in main (argc=1, argv=0xffbf7804) at
<br>
../../nc_test4/tst_nc4perf.c:299
<br>
<p><p>Any suggests as to where to look next would be greatly appreciated.
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder/CoRA Office             FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17132.php">George Bosilca: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<li><strong>Previous message:</strong> <a href="17130.php">Atchley, Scott: "Re: [OMPI devel] BML changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17132.php">George Bosilca: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<li><strong>Reply:</strong> <a href="17132.php">George Bosilca: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<li><strong>Reply:</strong> <a href="17152.php">Nathan Hjelm: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
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
