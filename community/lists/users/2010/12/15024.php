<?
$subject_val = "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  7 09:38:32 2010" -->
<!-- isoreceived="20101207143832" -->
<!-- sent="Tue, 07 Dec 2010 09:38:41 -0500" -->
<!-- isosent="20101207143841" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in mca_pml_ob1.so" -->
<!-- id="4CFE46F1.5000705_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimZwnJNSJ62LSdOZjOgNYjB02eBgiG1S3jAYXOQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-07 09:38:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15025.php">Ralph Castain: "Re: [OMPI users] Interaction with boost::asio"</a>
<li><strong>Previous message:</strong> <a href="15023.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>In reply to:</strong> <a href="15023.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15027.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>Reply:</strong> <a href="15027.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not sure this has anything to do with your problem but if you look 
<br>
at the stack entry for PMPI_Recv I noticed the buf has a value of 0.  
<br>
Shouldn't that be an address?
<br>
<p>Does your code fail if the MPI library is built with -g?  If it does 
<br>
fail the same way, the next step I would do would be to walk up the 
<br>
stack and try and figure out where the sendreq address is coming from 
<br>
because supposedly it is that address that is not mapped according to 
<br>
the original stack.
<br>
<p>--td
<br>
<p>On 12/07/2010 08:29 AM, Grzegorz Maj wrote:
<br>
<span class="quotelev1">&gt; Some update on this issue. I've attached gdb to the crashing
</span><br>
<span class="quotelev1">&gt; application and I got:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_send_request_put (sendreq=0x130c480, btl=0xc49850,
</span><br>
<span class="quotelev1">&gt; hdr=0xd10e60) at pml_ob1_sendreq.c:1231
</span><br>
<span class="quotelev1">&gt; 1231	pml_ob1_sendreq.c: No such file or directory.
</span><br>
<span class="quotelev1">&gt; 	in pml_ob1_sendreq.c
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  mca_pml_ob1_send_request_put (sendreq=0x130c480, btl=0xc49850,
</span><br>
<span class="quotelev1">&gt; hdr=0xd10e60) at pml_ob1_sendreq.c:1231
</span><br>
<span class="quotelev1">&gt; #1  0x00007fc55bf31693 in mca_btl_tcp_endpoint_recv_handler (sd=&lt;value
</span><br>
<span class="quotelev1">&gt; optimized out&gt;, flags=&lt;value optimized out&gt;, user=&lt;value optimized
</span><br>
<span class="quotelev1">&gt; out&gt;) at btl_tcp_endpoint.c:718
</span><br>
<span class="quotelev1">&gt; #2  0x00007fc55fff7de4 in event_process_active (base=0xc1daf0,
</span><br>
<span class="quotelev1">&gt; flags=2) at event.c:651
</span><br>
<span class="quotelev1">&gt; #3  opal_event_base_loop (base=0xc1daf0, flags=2) at event.c:823
</span><br>
<span class="quotelev1">&gt; #4  0x00007fc55ffe9ff1 in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev1">&gt; #5  0x00007fc55c9d7115 in opal_condition_wait (addr=&lt;value optimized
</span><br>
<span class="quotelev1">&gt; out&gt;, count=&lt;value optimized out&gt;, datatype=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev1">&gt; src=&lt;value optimized out&gt;, tag=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev1">&gt;      comm=&lt;value optimized out&gt;, status=0xcc6100) at
</span><br>
<span class="quotelev1">&gt; ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt; #6  ompi_request_wait_completion (addr=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev1">&gt; count=&lt;value optimized out&gt;, datatype=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev1">&gt; src=&lt;value optimized out&gt;, tag=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev1">&gt;      comm=&lt;value optimized out&gt;, status=0xcc6100) at
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/request/request.h:375
</span><br>
<span class="quotelev1">&gt; #7  mca_pml_ob1_recv (addr=&lt;value optimized out&gt;, count=&lt;value
</span><br>
<span class="quotelev1">&gt; optimized out&gt;, datatype=&lt;value optimized out&gt;, src=&lt;value optimized
</span><br>
<span class="quotelev1">&gt; out&gt;, tag=&lt;value optimized out&gt;, comm=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev1">&gt;      status=0xcc6100) at pml_ob1_irecv.c:104
</span><br>
<span class="quotelev1">&gt; #8  0x00007fc560511260 in PMPI_Recv (buf=0x0, count=12884048,
</span><br>
<span class="quotelev1">&gt; type=0xd10410, source=-1, tag=0, comm=0xd0daa0, status=0xcc6100) at
</span><br>
<span class="quotelev1">&gt; precv.c:75
</span><br>
<span class="quotelev1">&gt; #9  0x000000000049cc43 in BI_Srecv ()
</span><br>
<span class="quotelev1">&gt; #10 0x000000000049c555 in BI_IdringBR ()
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000495ba1 in ilp64_Cdgebr2d ()
</span><br>
<span class="quotelev1">&gt; #12 0x000000000047ffa0 in Cdgebr2d ()
</span><br>
<span class="quotelev1">&gt; #13 0x00007fc5621da8e1 in PB_CInV2 () from
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/intel_mkl/current/lib/em64t/libmkl_scalapack_ilp64.so
</span><br>
<span class="quotelev1">&gt; #14 0x00007fc56220289c in PB_CpgemmAB () from
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/intel_mkl/current/lib/em64t/libmkl_scalapack_ilp64.so
</span><br>
<span class="quotelev1">&gt; #15 0x00007fc5622b28fd in pdgemm_ () from
</span><br>
<span class="quotelev1">&gt; /home/gmaj/lib/intel_mkl/current/lib/em64t/libmkl_scalapack_ilp64.so
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So this looks like the line responsible for segmentation fault is:
</span><br>
<span class="quotelev1">&gt; mca_bml_base_endpoint_t *bml_endpoint = sendreq-&gt;req_endpoint;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I repeated it several times: always crashes in the same line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no idea what to do with this. Again, any help would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Grzegorz Maj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/12/6 Grzegorz Maj&lt;maju3_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I'm using mkl scalapack in my project. Recently, I was trying to run
</span><br>
<span class="quotelev2">&gt;&gt; my application on new set of nodes. Unfortunately, when I try to
</span><br>
<span class="quotelev2">&gt;&gt; execute more than about 20 processes, I get segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] Failing at address: 0x20b2e68
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] [ 0] /lib64/libpthread.so.0(+0xf3c0) [0x7f46e0fc33c0]
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0xd577)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f46dd093577]
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_btl_tcp.so(+0x5b4c)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f46dc5edb4c]
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/libopen-pal.so.0(+0x1dbe8) [0x7f46e0679be8]
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; (home/gmaj/lib/openmpi/lib/libopen-pal.so.0(opal_progress+0xa1)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f46e066dbf1]
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_pml_ob1.so(+0x5945)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f46dd08b945]
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/libmpi.so.0(MPI_Send+0x6a) [0x7f46e0b4f10a]
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] [ 7] /home/gmaj/matrix/matrix(BI_Ssend+0x21) [0x49cc11]
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] [ 8] /home/gmaj/matrix/matrix(BI_IdringBR+0x79) [0x49c579]
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] [ 9] /home/gmaj/matrix/matrix(ilp64_Cdgebr2d+0x221) [0x495bb1]
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] [10] /home/gmaj/matrix/matrix(Cdgebr2d+0xd0) [0x47ffb0]
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] [11]
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/intel_mkl/current/lib/em64t/libmkl_scalapack_ilp64.so(PB_CInV2+0x1304)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f46e27f5124]
</span><br>
<span class="quotelev2">&gt;&gt; [compn7:03552] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This error appears during some scalapack computation. My processes do
</span><br>
<span class="quotelev2">&gt;&gt; some mpi communication before this error appears.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found out, that by modifying btl_tcp_eager_limit and
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_max_send_size parameters, I can run more processes - the
</span><br>
<span class="quotelev2">&gt;&gt; smaller those values are, the more processes I can run. Unfortunately,
</span><br>
<span class="quotelev2">&gt;&gt; by this method I've succeeded to run up to 30 processes, which is
</span><br>
<span class="quotelev2">&gt;&gt; still far to small.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some clue may be what valgrind says:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==3894== Syscall param writev(vector[...]) points to uninitialised byte(s)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    at 0x82D009B: writev (in /lib64/libc-2.12.90.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0xBA2136D: mca_btl_tcp_frag_send (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_btl_tcp.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0xBA203D0: mca_btl_tcp_endpoint_send (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_btl_tcp.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0xB003583: mca_pml_ob1_send_request_start_rdma (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0xAFFA7C9: mca_pml_ob1_send (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0x6D4B109: PMPI_Send (in /home/gmaj/lib/openmpi/lib/libmpi.so.0)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0x49CC10: BI_Ssend (in /home/gmaj/matrix/matrix)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0x49C578: BI_IdringBR (in /home/gmaj/matrix/matrix)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0x495BB0: ilp64_Cdgebr2d (in /home/gmaj/matrix/matrix)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0x47FFAF: Cdgebr2d (in /home/gmaj/matrix/matrix)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0x51B38E0: PB_CInV2 (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/intel_mkl/10.2.6/lib/em64t/libmkl_scalapack_ilp64.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0x51DB89B: PB_CpgemmAB (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/intel_mkl/10.2.6/lib/em64t/libmkl_scalapack_ilp64.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==  Address 0xadecdce is 461,886 bytes inside a block of size
</span><br>
<span class="quotelev2">&gt;&gt; 527,544 alloc'd
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    at 0x4C2615D: malloc (vg_replace_malloc.c:195)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0x6D0BBA3: ompi_free_list_grow (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/libmpi.so.0)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0xBA1E1A4: mca_btl_tcp_component_init (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_btl_tcp.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0x6D5C909: mca_btl_base_select (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/libmpi.so.0)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0xB40E950: mca_bml_r2_component_init (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_bml_r2.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0x6D5C07E: mca_bml_base_init (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/libmpi.so.0)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0xAFF8A0E: mca_pml_ob1_component_init (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0x6D663B2: mca_pml_base_select (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/libmpi.so.0)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0x6D25D20: ompi_mpi_init (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/libmpi.so.0)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0x6D45987: PMPI_Init_thread (in
</span><br>
<span class="quotelev2">&gt;&gt; /home/gmaj/lib/openmpi/lib/libmpi.so.0)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0x42490A: MPI::Init_thread(int&amp;, char**&amp;, int)
</span><br>
<span class="quotelev2">&gt;&gt; (functions_inln.h:150)
</span><br>
<span class="quotelev2">&gt;&gt; ==3894==    by 0x41F483: main (matrix.cpp:83)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried to configure open-mpi with option --without-memory-manager,
</span><br>
<span class="quotelev2">&gt;&gt; but it didn't help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can successfully run exactly the same application on other machines,
</span><br>
<span class="quotelev2">&gt;&gt; having the number of nodes even over 800.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have any idea how to further debug this issue? Any help
</span><br>
<span class="quotelev2">&gt;&gt; would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Grzegorz Maj
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15024/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15024/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15025.php">Ralph Castain: "Re: [OMPI users] Interaction with boost::asio"</a>
<li><strong>Previous message:</strong> <a href="15023.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>In reply to:</strong> <a href="15023.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15027.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>Reply:</strong> <a href="15027.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
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
