<?
$subject_val = "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 26 10:39:19 2014" -->
<!-- isoreceived="20140526143919" -->
<!-- sent="Mon, 26 May 2014 16:39:17 +0200" -->
<!-- isosent="20140526143917" -->
<!-- name="Alain Miniussi" -->
<!-- email="alain.miniussi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs" -->
<!-- id="53835215.7020103_at_oca.eu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ED39F398-7D66-4EA9-855E-56145219F7B4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs<br>
<strong>From:</strong> Alain Miniussi (<em>alain.miniussi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-26 10:39:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24482.php">Gustavo Correa: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24480.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>In reply to:</strong> <a href="24479.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24483.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Reply:</strong> <a href="24483.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Did that too, with the same result:
<br>
<p>[alainm_at_tagir mpi]$ mpirun -n 1 ./a.out
<br>
[tagir:05123] *** Process received signal ***
<br>
[tagir:05123] Signal: Floating point exception (8)
<br>
[tagir:05123] Signal code: Integer divide-by-zero (1)
<br>
[tagir:05123] Failing at address: 0x2adb507b3d9f
<br>
[tagir:05123] [ 0] /lib64/libpthread.so.0[0x30f920f710]
<br>
[tagir:05123] [ 1] 
<br>
/softs/openmpi-1.8.1-intel13/lib/openmpi/mca_btl_openib.so(mca_btl_openib_add_procs+0xe9f)[0x2adb507b3d9f]
<br>
[tagir:05123] [ 2] 
<br>
/softs/openmpi-1.8.1-intel13/lib/openmpi/mca_bml_r2.so(+0x1481)[0x2adb505a7481]
<br>
[tagir:05123] [ 3] 
<br>
/softs/openmpi-1.8.1-intel13/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xa8)[0x2adb51af02f8]
<br>
[tagir:05123] [ 4] 
<br>
/softs/openmpi-1.8.1-intel13/lib/libmpi.so.1(ompi_mpi_init+0x9f6)[0x2adb4b78b236]
<br>
[tagir:05123] [ 5] 
<br>
/softs/openmpi-1.8.1-intel13/lib/libmpi.so.1(MPI_Init+0xef)[0x2adb4b7ad74f]
<br>
[tagir:05123] [ 6] ./a.out[0x400dd1]
<br>
[tagir:05123] [ 7] /lib64/libc.so.6(__libc_start_main+0xfd)[0x30f8a1ed1d]
<br>
[tagir:05123] [ 8] ./a.out[0x400cc9]
<br>
[tagir:05123] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 5123 on node tagir exited on 
<br>
signal 13 (Broken pipe).
<br>
--------------------------------------------------------------------------
<br>
[alainm_at_tagir mpi]$
<br>
<p><p>do you want me to try a gcc build ?
<br>
<p>Alain
<br>
<p>On 26/05/2014 16:09, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Strange - I note that you are running these as singletons. Can you try running it under mpirun?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; just to see if it is the singleton that is causing the problem, or something in the openib btl itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 26, 2014, at 6:59 AM, Alain Miniussi &lt;alain.miniussi_at_oca.eu&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a failure with the following minimalistic testcase:
</span><br>
<span class="quotelev2">&gt;&gt; $: more ./test.c
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; $: mpicc -v
</span><br>
<span class="quotelev2">&gt;&gt; icc version 13.1.1 (gcc version 4.4.7 compatibility)
</span><br>
<span class="quotelev2">&gt;&gt; $: mpicc ./test.c
</span><br>
<span class="quotelev2">&gt;&gt; $: ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; [tagir:02855] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [tagir:02855] Signal: Floating point exception (8)
</span><br>
<span class="quotelev2">&gt;&gt; [tagir:02855] Signal code: Integer divide-by-zero (1)
</span><br>
<span class="quotelev2">&gt;&gt; [tagir:02855] Failing at address: 0x2aef6e5b2d9f
</span><br>
<span class="quotelev2">&gt;&gt; [tagir:02855] [ 0] /lib64/libpthread.so.0[0x30f920f710]
</span><br>
<span class="quotelev2">&gt;&gt; [tagir:02855] [ 1] /softs/openmpi-1.8.1-intel13/lib/openmpi/mca_btl_openib.so(mca_btl_openib_add_procs+0xe9f)[0x2aef6e5b2d9f]
</span><br>
<span class="quotelev2">&gt;&gt; [tagir:02855] [ 2] /softs/openmpi-1.8.1-intel13/lib/openmpi/mca_bml_r2.so(+0x1481)[0x2aef6e3a6481]
</span><br>
<span class="quotelev2">&gt;&gt; [tagir:02855] [ 3] /softs/openmpi-1.8.1-intel13/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xa8)[0x2aef6f8ef2f8]
</span><br>
<span class="quotelev2">&gt;&gt; [tagir:02855] [ 4] /softs/openmpi-1.8.1-intel13/lib/libmpi.so.1(ompi_mpi_init+0x9f6)[0x2aef69572236]
</span><br>
<span class="quotelev2">&gt;&gt; [tagir:02855] [ 5] /softs/openmpi-1.8.1-intel13/lib/libmpi.so.1(MPI_Init+0xef)[0x2aef6959474f]
</span><br>
<span class="quotelev2">&gt;&gt; [tagir:02855] [ 6] ./a.out[0x400dd1]
</span><br>
<span class="quotelev2">&gt;&gt; [tagir:02855] [ 7] /lib64/libc.so.6(__libc_start_main+0xfd)[0x30f8a1ed1d]
</span><br>
<span class="quotelev2">&gt;&gt; [tagir:02855] [ 8] ./a.out[0x400cc9]
</span><br>
<span class="quotelev2">&gt;&gt; [tagir:02855] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; $:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Versions info:
</span><br>
<span class="quotelev2">&gt;&gt; $: mpicc -v
</span><br>
<span class="quotelev2">&gt;&gt; icc version 13.1.1 (gcc version 4.4.7 compatibility)
</span><br>
<span class="quotelev2">&gt;&gt; $: ldd ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;     linux-vdso.so.1 =&gt;  (0x00007fffbb197000)
</span><br>
<span class="quotelev2">&gt;&gt;     libmpi.so.1 =&gt; /softs/openmpi-1.8.1-intel13/lib/libmpi.so.1 (0x00002b20262ee000)
</span><br>
<span class="quotelev2">&gt;&gt;     libm.so.6 =&gt; /lib64/libm.so.6 (0x00000030f8e00000)
</span><br>
<span class="quotelev2">&gt;&gt;     libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00000030ff200000)
</span><br>
<span class="quotelev2">&gt;&gt;     libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00000030f9200000)
</span><br>
<span class="quotelev2">&gt;&gt;     libc.so.6 =&gt; /lib64/libc.so.6 (0x00000030f8a00000)
</span><br>
<span class="quotelev2">&gt;&gt;     libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00000030f9600000)
</span><br>
<span class="quotelev2">&gt;&gt;     libopen-rte.so.7 =&gt; /softs/openmpi-1.8.1-intel13/lib/libopen-rte.so.7 (0x00002b202660d000)
</span><br>
<span class="quotelev2">&gt;&gt;     libopen-pal.so.6 =&gt; /softs/openmpi-1.8.1-intel13/lib/libopen-pal.so.6 (0x00002b20268a1000)
</span><br>
<span class="quotelev2">&gt;&gt;     libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00002b2026ba6000)
</span><br>
<span class="quotelev2">&gt;&gt;     librt.so.1 =&gt; /lib64/librt.so.1 (0x00000030f9e00000)
</span><br>
<span class="quotelev2">&gt;&gt;     libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003109800000)
</span><br>
<span class="quotelev2">&gt;&gt;     libutil.so.1 =&gt; /lib64/libutil.so.1 (0x000000310aa00000)
</span><br>
<span class="quotelev2">&gt;&gt;     libimf.so =&gt; /softs/intel/composer_xe_2013.3.163/compiler/lib/intel64/libimf.so (0x00002b2026db0000)
</span><br>
<span class="quotelev2">&gt;&gt;     libsvml.so =&gt; /softs/intel/composer_xe_2013.3.163/compiler/lib/intel64/libsvml.so (0x00002b202726d000)
</span><br>
<span class="quotelev2">&gt;&gt;     libirng.so =&gt; /softs/intel/composer_xe_2013.3.163/compiler/lib/intel64/libirng.so (0x00002b2027c37000)
</span><br>
<span class="quotelev2">&gt;&gt;     libintlc.so.5 =&gt; /softs/intel/composer_xe_2013.3.163/compiler/lib/intel64/libintlc.so.5 (0x00002b2027e3e000)
</span><br>
<span class="quotelev2">&gt;&gt;     /lib64/ld-linux-x86-64.so.2 (0x00000030f8600000)
</span><br>
<span class="quotelev2">&gt;&gt; $:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to goole the issue, and saw something regarding an old vectorization bug with intel compiler, but that was a lonng time ago and seemed to be fixed for 1.6.x.
</span><br>
<span class="quotelev2">&gt;&gt; Also, &quot;make check&quot; went fine ???
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Alain
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
---
Alain
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24482.php">Gustavo Correa: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24480.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>In reply to:</strong> <a href="24479.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24483.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Reply:</strong> <a href="24483.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
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
