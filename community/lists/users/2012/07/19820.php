<?
$subject_val = "[OMPI users] Mpi_leave_pinned=1 is thread safe?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 25 01:16:50 2012" -->
<!-- isoreceived="20120725051650" -->
<!-- sent="Wed, 25 Jul 2012 14:14:20 +0900" -->
<!-- isosent="20120725051420" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] Mpi_leave_pinned=1 is thread safe?" -->
<!-- id="OF5312E466.CDFDABB2-ON49257A46.001A10BE-49257A46.001CFD35_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI users] Mpi_leave_pinned=1 is thread safe?<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Mpi_leave_pinned=1%20is%20thread%20safe?"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-07-25 01:14:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19821.php">Kumar, Sudhir: "Re: [OMPI users] Fortran90 Bindings"</a>
<li><strong>Previous message:</strong> <a href="19819.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/19884.php">tmishima_at_[hidden]: "Re: [OMPI users] Mpi_leave_pinned=1 is thread safe?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/19884.php">tmishima_at_[hidden]: "Re: [OMPI users] Mpi_leave_pinned=1 is thread safe?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear openmpi developers,
<br>
I have been developing our hybrid(MPI+OpenMP) application using openmpi
<br>
for five years.
<br>
<p>This time, I tyied to install a new function, which is c++ based multi-
<br>
threaded library and it heavily repeats new and delete objects in each
<br>
thread.
<br>
<p>Our application is so called &quot;MPI_THREAD_FUNNELED&quot;, and openmpi-1.6
<br>
is built using --with-tm --with-openib --disable-ipv6.
<br>
<p>My trouble is that it works very well with &quot;--mca mpi_leave_pinned 0&quot;
<br>
but, when mpi_leave_pinned is enabled, it often causes segfault like below.
<br>
<p>I note that it works fine on Windows multi-threaded platform combined
<br>
with mpich2. Furthermore, regarding multi-thread(none MPI) version,
<br>
it also works fine enven on linux environment.
<br>
<p>#0  0x00002b36f1ab35fa in malloc_consolidate (av=0x2aaab0c00020)
<br>
at ./malloc.c:4556
<br>
#1  0x00002b36f1ab34d9 in opal_memory_ptmalloc2_int_free
<br>
(av=0x2aaab0c00020, mem=0x2aaab0c00a70) at ./malloc.c:4453
<br>
#2  0x00002b36f1ab1ce2 in opal_memory_ptmalloc2_free (mem=0x2aaab0c00a70)
<br>
at ./malloc.c:3511
<br>
#3  0x00002b36f1ab0ca9 in opal_memory_linux_free_hook
<br>
(__ptr=0x2aaab0c00a70, caller=0xa075c8) at ./hooks.c:705
<br>
#4  0x00000037b4a758a7 in free () from /lib64/libc.so.6
<br>
#5  0x0000000000a075c8 in CErrorReporter&lt;std::basic_ostringstream&lt;char,
<br>
std::char_traits&lt;char&gt;, std::allocator&lt;char&gt; &gt; &gt;
<br>
::Clear ()
<br>
#6  0x0000000000a01eec in IPhreeqc::AccumulateLine ()
<br>
#7  0x0000000000a01180 in AccumulateLine ()
<br>
#8  0x0000000000a0078e in accumulatelinef_ ()
<br>
#9  0x0000000000576ce6 in initial_conditions_ () at ./PHREEQC-model.f:307
<br>
#10 0x0000000000577b3a in iphreeqc_main_ () at ./PHREEQC-model.f:505
<br>
#11 0x0000000000577fa1 in basicphreeqc_ () at ./PHREEQC-model.f:944
<br>
#12 0x00000000004b492a in phrqbl_ () at ./MULTI-COM.f:8371
<br>
#13 0x00000000004aa6e9 in smxmknp：ｑois_ () at ./MULTI-COM.f:5112
<br>
#14 0x00000000004a2c5e in solvenpois_ () at ./MULTI-COM.f:4276
<br>
#15 0x000000000049e731 in solducom_ () at ./MULTI-COM.f:3782
<br>
#16 0x000000000048b60c in MAIN () at ./MULTI-COM.f:1208
<br>
#17 0x0000000000481350 in main ()
<br>
#18 0x00000037b4a1d974 in __libc_start_main () from /lib64/libc.so.6
<br>
#19 0x0000000000481259 in _start ()
<br>
<p>Best regard,
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19821.php">Kumar, Sudhir: "Re: [OMPI users] Fortran90 Bindings"</a>
<li><strong>Previous message:</strong> <a href="19819.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/19884.php">tmishima_at_[hidden]: "Re: [OMPI users] Mpi_leave_pinned=1 is thread safe?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/19884.php">tmishima_at_[hidden]: "Re: [OMPI users] Mpi_leave_pinned=1 is thread safe?"</a>
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
