<?
$subject_val = "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  7 08:29:27 2010" -->
<!-- isoreceived="20101207132927" -->
<!-- sent="Tue, 7 Dec 2010 14:29:00 +0100" -->
<!-- isosent="20101207132900" -->
<!-- name="Grzegorz Maj" -->
<!-- email="maju3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in mca_pml_ob1.so" -->
<!-- id="AANLkTimZwnJNSJ62LSdOZjOgNYjB02eBgiG1S3jAYXOQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinXTdPyB8NtnNTc+e75DJ57RGTqzaVyBsVP7358_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in mca_pml_ob1.so<br>
<strong>From:</strong> Grzegorz Maj (<em>maju3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-07 08:29:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15024.php">Terry Dontje: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>Previous message:</strong> <a href="15022.php">Hannes Brandst&#228;tter-M&#252;ller: "[OMPI users] Interaction with boost::asio"</a>
<li><strong>In reply to:</strong> <a href="15008.php">Grzegorz Maj: "[OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15024.php">Terry Dontje: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>Reply:</strong> <a href="15024.php">Terry Dontje: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some update on this issue. I've attached gdb to the crashing
<br>
application and I got:
<br>
<p>-----
<br>
Program received signal SIGSEGV, Segmentation fault.
<br>
mca_pml_ob1_send_request_put (sendreq=0x130c480, btl=0xc49850,
<br>
hdr=0xd10e60) at pml_ob1_sendreq.c:1231
<br>
1231	pml_ob1_sendreq.c: No such file or directory.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in pml_ob1_sendreq.c
<br>
(gdb) bt
<br>
#0  mca_pml_ob1_send_request_put (sendreq=0x130c480, btl=0xc49850,
<br>
hdr=0xd10e60) at pml_ob1_sendreq.c:1231
<br>
#1  0x00007fc55bf31693 in mca_btl_tcp_endpoint_recv_handler (sd=&lt;value
<br>
optimized out&gt;, flags=&lt;value optimized out&gt;, user=&lt;value optimized
<br>
out&gt;) at btl_tcp_endpoint.c:718
<br>
#2  0x00007fc55fff7de4 in event_process_active (base=0xc1daf0,
<br>
flags=2) at event.c:651
<br>
#3  opal_event_base_loop (base=0xc1daf0, flags=2) at event.c:823
<br>
#4  0x00007fc55ffe9ff1 in opal_progress () at runtime/opal_progress.c:189
<br>
#5  0x00007fc55c9d7115 in opal_condition_wait (addr=&lt;value optimized
<br>
out&gt;, count=&lt;value optimized out&gt;, datatype=&lt;value optimized out&gt;,
<br>
src=&lt;value optimized out&gt;, tag=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=&lt;value optimized out&gt;, status=0xcc6100) at
<br>
../../../../opal/threads/condition.h:99
<br>
#6  ompi_request_wait_completion (addr=&lt;value optimized out&gt;,
<br>
count=&lt;value optimized out&gt;, datatype=&lt;value optimized out&gt;,
<br>
src=&lt;value optimized out&gt;, tag=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=&lt;value optimized out&gt;, status=0xcc6100) at
<br>
../../../../ompi/request/request.h:375
<br>
#7  mca_pml_ob1_recv (addr=&lt;value optimized out&gt;, count=&lt;value
<br>
optimized out&gt;, datatype=&lt;value optimized out&gt;, src=&lt;value optimized
<br>
out&gt;, tag=&lt;value optimized out&gt;, comm=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;status=0xcc6100) at pml_ob1_irecv.c:104
<br>
#8  0x00007fc560511260 in PMPI_Recv (buf=0x0, count=12884048,
<br>
type=0xd10410, source=-1, tag=0, comm=0xd0daa0, status=0xcc6100) at
<br>
precv.c:75
<br>
#9  0x000000000049cc43 in BI_Srecv ()
<br>
#10 0x000000000049c555 in BI_IdringBR ()
<br>
#11 0x0000000000495ba1 in ilp64_Cdgebr2d ()
<br>
#12 0x000000000047ffa0 in Cdgebr2d ()
<br>
#13 0x00007fc5621da8e1 in PB_CInV2 () from
<br>
/home/gmaj/lib/intel_mkl/current/lib/em64t/libmkl_scalapack_ilp64.so
<br>
#14 0x00007fc56220289c in PB_CpgemmAB () from
<br>
/home/gmaj/lib/intel_mkl/current/lib/em64t/libmkl_scalapack_ilp64.so
<br>
#15 0x00007fc5622b28fd in pdgemm_ () from
<br>
/home/gmaj/lib/intel_mkl/current/lib/em64t/libmkl_scalapack_ilp64.so
<br>
-----
<br>
<p>So this looks like the line responsible for segmentation fault is:
<br>
mca_bml_base_endpoint_t *bml_endpoint = sendreq-&gt;req_endpoint;
<br>
<p>I repeated it several times: always crashes in the same line.
<br>
<p>I have no idea what to do with this. Again, any help would be appreciated.
<br>
<p>Thanks,
<br>
Grzegorz Maj
<br>
<p><p><p>2010/12/6 Grzegorz Maj &lt;maju3_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm using mkl scalapack in my project. Recently, I was trying to run
</span><br>
<span class="quotelev1">&gt; my application on new set of nodes. Unfortunately, when I try to
</span><br>
<span class="quotelev1">&gt; execute more than about 20 processes, I get segmentation fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compn7:03552] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [compn7:03552] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [compn7:03552] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [compn7:03552] Failing at address: 0x20b2e68
</span><br>
<span class="quotelev1">&gt; [compn7:03552] [ 0] /lib64/libpthread.so.0(+0xf3c0) [0x7f46e0fc33c0]
</span><br>
<span class="quotelev1">&gt; [compn7:03552] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0xd577)
</span><br>
<span class="quotelev1">&gt; [0x7f46dd093577]
</span><br>
<span class="quotelev1">&gt; [compn7:03552] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_btl_tcp.so(+0x5b4c)
</span><br>
<span class="quotelev1">&gt; [0x7f46dc5edb4c]
</span><br>
<span class="quotelev1">&gt; [compn7:03552] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/libopen-pal.so.0(+0x1dbe8) [0x7f46e0679be8]
</span><br>
<span class="quotelev1">&gt; [compn7:03552] [ 4]
</span><br>
<span class="quotelev1">&gt; (home/gmaj/lib/openmpi/lib/libopen-pal.so.0(opal_progress+0xa1)
</span><br>
<span class="quotelev1">&gt; [0x7f46e066dbf1]
</span><br>
<span class="quotelev1">&gt; [compn7:03552] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x5945)
</span><br>
<span class="quotelev1">&gt; [0x7f46dd08b945]
</span><br>
<span class="quotelev1">&gt; [compn7:03552] [ 6]
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/libmpi.so.0(MPI_Send+0x6a) [0x7f46e0b4f10a]
</span><br>
<span class="quotelev1">&gt; [compn7:03552] [ 7] /home/gmaj/matrix/matrix(BI_Ssend+0x21) [0x49cc11]
</span><br>
<span class="quotelev1">&gt; [compn7:03552] [ 8] /home/gmaj/matrix/matrix(BI_IdringBR+0x79) [0x49c579]
</span><br>
<span class="quotelev1">&gt; [compn7:03552] [ 9] /home/gmaj/matrix/matrix(ilp64_Cdgebr2d+0x221) [0x495bb1]
</span><br>
<span class="quotelev1">&gt; [compn7:03552] [10] /home/gmaj/matrix/matrix(Cdgebr2d+0xd0) [0x47ffb0]
</span><br>
<span class="quotelev1">&gt; [compn7:03552] [11]
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/intel_mkl/current/lib/em64t/libmkl_scalapack_ilp64.so(PB_CInV2+0x1304)
</span><br>
<span class="quotelev1">&gt; [0x7f46e27f5124]
</span><br>
<span class="quotelev1">&gt; [compn7:03552] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error appears during some scalapack computation. My processes do
</span><br>
<span class="quotelev1">&gt; some mpi communication before this error appears.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found out, that by modifying btl_tcp_eager_limit and
</span><br>
<span class="quotelev1">&gt; btl_tcp_max_send_size parameters, I can run more processes - the
</span><br>
<span class="quotelev1">&gt; smaller those values are, the more processes I can run. Unfortunately,
</span><br>
<span class="quotelev1">&gt; by this method I've succeeded to run up to 30 processes, which is
</span><br>
<span class="quotelev1">&gt; still far to small.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some clue may be what valgrind says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==3894== Syscall param writev(vector[...]) points to uninitialised byte(s)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;at 0x82D009B: writev (in /lib64/libc-2.12.90.so)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0xBA2136D: mca_btl_tcp_frag_send (in
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_btl_tcp.so)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0xBA203D0: mca_btl_tcp_endpoint_send (in
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_btl_tcp.so)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0xB003583: mca_pml_ob1_send_request_start_rdma (in
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0xAFFA7C9: mca_pml_ob1_send (in
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0x6D4B109: PMPI_Send (in /home/gmaj/lib/openmpi/lib/libmpi.so.0)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0x49CC10: BI_Ssend (in /home/gmaj/matrix/matrix)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0x49C578: BI_IdringBR (in /home/gmaj/matrix/matrix)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0x495BB0: ilp64_Cdgebr2d (in /home/gmaj/matrix/matrix)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0x47FFAF: Cdgebr2d (in /home/gmaj/matrix/matrix)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0x51B38E0: PB_CInV2 (in
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/intel_mkl/10.2.6/lib/em64t/libmkl_scalapack_ilp64.so)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0x51DB89B: PB_CpgemmAB (in
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/intel_mkl/10.2.6/lib/em64t/libmkl_scalapack_ilp64.so)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160;Address 0xadecdce is 461,886 bytes inside a block of size
</span><br>
<span class="quotelev1">&gt; 527,544 alloc'd
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;at 0x4C2615D: malloc (vg_replace_malloc.c:195)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0x6D0BBA3: ompi_free_list_grow (in
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/libmpi.so.0)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0xBA1E1A4: mca_btl_tcp_component_init (in
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_btl_tcp.so)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0x6D5C909: mca_btl_base_select (in
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/libmpi.so.0)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0xB40E950: mca_bml_r2_component_init (in
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0x6D5C07E: mca_bml_base_init (in
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/libmpi.so.0)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0xAFF8A0E: mca_pml_ob1_component_init (in
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0x6D663B2: mca_pml_base_select (in
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/libmpi.so.0)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0x6D25D20: ompi_mpi_init (in
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/libmpi.so.0)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0x6D45987: PMPI_Init_thread (in
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/openmpi/lib/libmpi.so.0)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0x42490A: MPI::Init_thread(int&amp;, char**&amp;, int)
</span><br>
<span class="quotelev1">&gt; (functions_inln.h:150)
</span><br>
<span class="quotelev1">&gt; ==3894== &#160; &#160;by 0x41F483: main (matrix.cpp:83)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried to configure open-mpi with option --without-memory-manager,
</span><br>
<span class="quotelev1">&gt; but it didn't help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can successfully run exactly the same application on other machines,
</span><br>
<span class="quotelev1">&gt; having the number of nodes even over 800.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any idea how to further debug this issue? Any help
</span><br>
<span class="quotelev1">&gt; would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Grzegorz Maj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15024.php">Terry Dontje: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>Previous message:</strong> <a href="15022.php">Hannes Brandst&#228;tter-M&#252;ller: "[OMPI users] Interaction with boost::asio"</a>
<li><strong>In reply to:</strong> <a href="15008.php">Grzegorz Maj: "[OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15024.php">Terry Dontje: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>Reply:</strong> <a href="15024.php">Terry Dontje: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
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
