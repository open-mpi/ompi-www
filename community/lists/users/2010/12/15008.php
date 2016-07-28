<?
$subject_val = "[OMPI users] Segmentation fault in mca_pml_ob1.so";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  6 09:51:32 2010" -->
<!-- isoreceived="20101206145132" -->
<!-- sent="Mon, 6 Dec 2010 15:51:07 +0100" -->
<!-- isosent="20101206145107" -->
<!-- name="Grzegorz Maj" -->
<!-- email="maju3_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault in mca_pml_ob1.so" -->
<!-- id="AANLkTinXTdPyB8NtnNTc+e75DJ57RGTqzaVyBsVP7358_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault in mca_pml_ob1.so<br>
<strong>From:</strong> Grzegorz Maj (<em>maju3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-06 09:51:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15009.php">Peter Kjellström: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="15007.php">Hicham Mouline: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15023.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>Reply:</strong> <a href="15023.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm using mkl scalapack in my project. Recently, I was trying to run
<br>
my application on new set of nodes. Unfortunately, when I try to
<br>
execute more than about 20 processes, I get segmentation fault.
<br>
<p>[compn7:03552] *** Process received signal ***
<br>
[compn7:03552] Signal: Segmentation fault (11)
<br>
[compn7:03552] Signal code: Address not mapped (1)
<br>
[compn7:03552] Failing at address: 0x20b2e68
<br>
[compn7:03552] [ 0] /lib64/libpthread.so.0(+0xf3c0) [0x7f46e0fc33c0]
<br>
[compn7:03552] [ 1]
<br>
/home/gmaj/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0xd577)
<br>
[0x7f46dd093577]
<br>
[compn7:03552] [ 2]
<br>
/home/gmaj/lib/openmpi/lib/openmpi/mca_btl_tcp.so(+0x5b4c)
<br>
[0x7f46dc5edb4c]
<br>
[compn7:03552] [ 3]
<br>
/home/gmaj/lib/openmpi/lib/libopen-pal.so.0(+0x1dbe8) [0x7f46e0679be8]
<br>
[compn7:03552] [ 4]
<br>
(home/gmaj/lib/openmpi/lib/libopen-pal.so.0(opal_progress+0xa1)
<br>
[0x7f46e066dbf1]
<br>
[compn7:03552] [ 5]
<br>
/home/gmaj/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x5945)
<br>
[0x7f46dd08b945]
<br>
[compn7:03552] [ 6]
<br>
/home/gmaj/lib/openmpi/lib/libmpi.so.0(MPI_Send+0x6a) [0x7f46e0b4f10a]
<br>
[compn7:03552] [ 7] /home/gmaj/matrix/matrix(BI_Ssend+0x21) [0x49cc11]
<br>
[compn7:03552] [ 8] /home/gmaj/matrix/matrix(BI_IdringBR+0x79) [0x49c579]
<br>
[compn7:03552] [ 9] /home/gmaj/matrix/matrix(ilp64_Cdgebr2d+0x221) [0x495bb1]
<br>
[compn7:03552] [10] /home/gmaj/matrix/matrix(Cdgebr2d+0xd0) [0x47ffb0]
<br>
[compn7:03552] [11]
<br>
/home/gmaj/lib/intel_mkl/current/lib/em64t/libmkl_scalapack_ilp64.so(PB_CInV2+0x1304)
<br>
[0x7f46e27f5124]
<br>
[compn7:03552] *** End of error message ***
<br>
<p>This error appears during some scalapack computation. My processes do
<br>
some mpi communication before this error appears.
<br>
<p>I found out, that by modifying btl_tcp_eager_limit and
<br>
btl_tcp_max_send_size parameters, I can run more processes - the
<br>
smaller those values are, the more processes I can run. Unfortunately,
<br>
by this method I've succeeded to run up to 30 processes, which is
<br>
still far to small.
<br>
<p>Some clue may be what valgrind says:
<br>
<p>==3894== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
==3894==    at 0x82D009B: writev (in /lib64/libc-2.12.90.so)
<br>
==3894==    by 0xBA2136D: mca_btl_tcp_frag_send (in
<br>
/home/gmaj/lib/openmpi/lib/openmpi/mca_btl_tcp.so)
<br>
==3894==    by 0xBA203D0: mca_btl_tcp_endpoint_send (in
<br>
/home/gmaj/lib/openmpi/lib/openmpi/mca_btl_tcp.so)
<br>
==3894==    by 0xB003583: mca_pml_ob1_send_request_start_rdma (in
<br>
/home/gmaj/lib/openmpi/lib/openmpi/mca_pml_ob1.so)
<br>
==3894==    by 0xAFFA7C9: mca_pml_ob1_send (in
<br>
/home/gmaj/lib/openmpi/lib/openmpi/mca_pml_ob1.so)
<br>
==3894==    by 0x6D4B109: PMPI_Send (in /home/gmaj/lib/openmpi/lib/libmpi.so.0)
<br>
==3894==    by 0x49CC10: BI_Ssend (in /home/gmaj/matrix/matrix)
<br>
==3894==    by 0x49C578: BI_IdringBR (in /home/gmaj/matrix/matrix)
<br>
==3894==    by 0x495BB0: ilp64_Cdgebr2d (in /home/gmaj/matrix/matrix)
<br>
==3894==    by 0x47FFAF: Cdgebr2d (in /home/gmaj/matrix/matrix)
<br>
==3894==    by 0x51B38E0: PB_CInV2 (in
<br>
/home/gmaj/lib/intel_mkl/10.2.6/lib/em64t/libmkl_scalapack_ilp64.so)
<br>
==3894==    by 0x51DB89B: PB_CpgemmAB (in
<br>
/home/gmaj/lib/intel_mkl/10.2.6/lib/em64t/libmkl_scalapack_ilp64.so)
<br>
==3894==  Address 0xadecdce is 461,886 bytes inside a block of size
<br>
527,544 alloc'd
<br>
==3894==    at 0x4C2615D: malloc (vg_replace_malloc.c:195)
<br>
==3894==    by 0x6D0BBA3: ompi_free_list_grow (in
<br>
/home/gmaj/lib/openmpi/lib/libmpi.so.0)
<br>
==3894==    by 0xBA1E1A4: mca_btl_tcp_component_init (in
<br>
/home/gmaj/lib/openmpi/lib/openmpi/mca_btl_tcp.so)
<br>
==3894==    by 0x6D5C909: mca_btl_base_select (in
<br>
/home/gmaj/lib/openmpi/lib/libmpi.so.0)
<br>
==3894==    by 0xB40E950: mca_bml_r2_component_init (in
<br>
/home/gmaj/lib/openmpi/lib/openmpi/mca_bml_r2.so)
<br>
==3894==    by 0x6D5C07E: mca_bml_base_init (in
<br>
/home/gmaj/lib/openmpi/lib/libmpi.so.0)
<br>
==3894==    by 0xAFF8A0E: mca_pml_ob1_component_init (in
<br>
/home/gmaj/lib/openmpi/lib/openmpi/mca_pml_ob1.so)
<br>
==3894==    by 0x6D663B2: mca_pml_base_select (in
<br>
/home/gmaj/lib/openmpi/lib/libmpi.so.0)
<br>
==3894==    by 0x6D25D20: ompi_mpi_init (in
<br>
/home/gmaj/lib/openmpi/lib/libmpi.so.0)
<br>
==3894==    by 0x6D45987: PMPI_Init_thread (in
<br>
/home/gmaj/lib/openmpi/lib/libmpi.so.0)
<br>
==3894==    by 0x42490A: MPI::Init_thread(int&amp;, char**&amp;, int)
<br>
(functions_inln.h:150)
<br>
==3894==    by 0x41F483: main (matrix.cpp:83)
<br>
<p>I've tried to configure open-mpi with option --without-memory-manager,
<br>
but it didn't help.
<br>
<p>I can successfully run exactly the same application on other machines,
<br>
having the number of nodes even over 800.
<br>
<p>Does anyone have any idea how to further debug this issue? Any help
<br>
would be appreciated.
<br>
<p>Thanks,
<br>
Grzegorz Maj
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15009.php">Peter Kjellström: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="15007.php">Hicham Mouline: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15023.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>Reply:</strong> <a href="15023.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
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
