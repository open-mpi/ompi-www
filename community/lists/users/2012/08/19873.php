<?
$subject_val = "Re: [OMPI users] Mpi_leave_pinned=1 is thread safe?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  2 02:33:37 2012" -->
<!-- isoreceived="20120802063337" -->
<!-- sent="Thu, 2 Aug 2012 15:31:22 +0900" -->
<!-- isosent="20120802063122" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpi_leave_pinned=1 is thread safe?" -->
<!-- id="OFEFDF173B.7360A64B-ON49257A4E.00207474-49257A4E.00240566_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="OF5312E466.CDFDABB2-ON49257A46.001A10BE-49257A46.001CFD35_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Mpi_leave_pinned=1%20is%20thread%20safe?"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-08-02 02:31:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19874.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>Previous message:</strong> <a href="19872.php">Dmitry N. Mikushin: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>In reply to:</strong> <a href="../../2012/07/19809.php">tmishima_at_[hidden]: "[OMPI users] Mpi_leave_pinned=1 is thread safe?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear openmpi developers
<br>
<p>Unfortunately, there's no reply, but I have been continuing test run.
<br>
Then, as far as I checked, there's no segfault with mpi_leave_pinned=0 or
<br>
OMP_NUM_THREADS &lt; 4. On the other hand, when I set mpi_leave_pinned=1
<br>
(and OMP_NUM_THREADS&gt;=4), I often get segfault.
<br>
<p>Because most of segfaults occur in opal_memory_ptmalloc2 as shown below,
<br>
I doubt that the cause of segfault is openmpi's memory management in
<br>
multi-thread. I ask you to investigate this problem again.
<br>
<p>Best regards,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Dear openmpi developers,
</span><br>
<span class="quotelev1">&gt; I have been developing our hybrid(MPI+OpenMP) application using openmpi
</span><br>
<span class="quotelev1">&gt; for five years.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This time, I tyied to install a new function, which is c++ based multi-
</span><br>
<span class="quotelev1">&gt; threaded library and it heavily repeats new and delete objects in each
</span><br>
<span class="quotelev1">&gt; thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our application is so called &quot;MPI_THREAD_FUNNELED&quot;, and openmpi-1.6
</span><br>
<span class="quotelev1">&gt; is built using --with-tm --with-openib --disable-ipv6.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My trouble is that it works very well with &quot;--mca mpi_leave_pinned 0&quot;
</span><br>
<span class="quotelev1">&gt; but, when mpi_leave_pinned is enabled, it often causes segfault like
</span><br>
below.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I note that it works fine on Windows multi-threaded platform combined
</span><br>
<span class="quotelev1">&gt; with mpich2. Furthermore, regarding multi-thread(none MPI) version,
</span><br>
<span class="quotelev1">&gt; it also works fine enven on linux environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00002b36f1ab35fa in malloc_consolidate (av=0x2aaab0c00020)
</span><br>
<span class="quotelev1">&gt; at ./malloc.c:4556
</span><br>
<span class="quotelev1">&gt; #1  0x00002b36f1ab34d9 in opal_memory_ptmalloc2_int_free
</span><br>
<span class="quotelev1">&gt; (av=0x2aaab0c00020, mem=0x2aaab0c00a70) at ./malloc.c:4453
</span><br>
<span class="quotelev1">&gt; #2  0x00002b36f1ab1ce2 in opal_memory_ptmalloc2_free (mem=0x2aaab0c00a70)
</span><br>
<span class="quotelev1">&gt; at ./malloc.c:3511
</span><br>
<span class="quotelev1">&gt; #3  0x00002b36f1ab0ca9 in opal_memory_linux_free_hook
</span><br>
<span class="quotelev1">&gt; (__ptr=0x2aaab0c00a70, caller=0xa075c8) at ./hooks.c:705
</span><br>
<span class="quotelev1">&gt; #4  0x00000037b4a758a7 in free () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #5  0x0000000000a075c8 in CErrorReporter&lt;std::basic_ostringstream&lt;char,
</span><br>
<span class="quotelev1">&gt; std::char_traits&lt;char&gt;, std::allocator&lt;char&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; ::Clear ()
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000a01eec in IPhreeqc::AccumulateLine ()
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000a01180 in AccumulateLine ()
</span><br>
<span class="quotelev1">&gt; #8  0x0000000000a0078e in accumulatelinef_ ()
</span><br>
<span class="quotelev1">&gt; #9  0x0000000000576ce6 in initial_conditions_ () at ./PHREEQC-model.f:307
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000577b3a in iphreeqc_main_ () at ./PHREEQC-model.f:505
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000577fa1 in basicphreeqc_ () at ./PHREEQC-model.f:944
</span><br>
<span class="quotelev1">&gt; #12 0x00000000004b492a in phrqbl_ () at ./MULTI-COM.f:8371
</span><br>
<span class="quotelev1">&gt; #13 0x00000000004aa6e9 in smxmknp：ｑois_ () at ./MULTI-COM.f:5112
</span><br>
<span class="quotelev1">&gt; #14 0x00000000004a2c5e in solvenpois_ () at ./MULTI-COM.f:4276
</span><br>
<span class="quotelev1">&gt; #15 0x000000000049e731 in solducom_ () at ./MULTI-COM.f:3782
</span><br>
<span class="quotelev1">&gt; #16 0x000000000048b60c in MAIN () at ./MULTI-COM.f:1208
</span><br>
<span class="quotelev1">&gt; #17 0x0000000000481350 in main ()
</span><br>
<span class="quotelev1">&gt; #18 0x00000037b4a1d974 in __libc_start_main () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #19 0x0000000000481259 in _start ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regard,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19874.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>Previous message:</strong> <a href="19872.php">Dmitry N. Mikushin: "Re: [OMPI users] bug in CUDA support for dual-processor systems?"</a>
<li><strong>In reply to:</strong> <a href="../../2012/07/19809.php">tmishima_at_[hidden]: "[OMPI users] Mpi_leave_pinned=1 is thread safe?"</a>
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
