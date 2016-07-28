<?
$subject_val = "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 05:37:03 2014" -->
<!-- isoreceived="20140527093703" -->
<!-- sent="Tue, 27 May 2014 11:37:00 +0200" -->
<!-- isosent="20140527093700" -->
<!-- name="Alain Miniussi" -->
<!-- email="alain.miniussi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs" -->
<!-- id="53845CBC.8060306_at_oca.eu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B08C380B-5894-44B9-B652-5AB253EC618E_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2014-05-27 05:37:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24487.php">Alain Miniussi: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24485.php">Filippo Spiga: "[OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>In reply to:</strong> <a href="24482.php">Gustavo Correa: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>Yes I did, with the same result on each process. Actually the problem 
<br>
was spotted on a real code although I just posted the minimal version.
<br>
<p>Alain
<br>
<p>On 26/05/2014 17:14, Gustavo Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Alain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -np 2 ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note: mpicc to compile, mpiexec to execute.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 26, 2014, at 9:59 AM, Alain Miniussi wrote:
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
<li><strong>Next message:</strong> <a href="24487.php">Alain Miniussi: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24485.php">Filippo Spiga: "[OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>In reply to:</strong> <a href="24482.php">Gustavo Correa: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
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
