<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 12:25:12 2006" -->
<!-- isoreceived="20060119172512" -->
<!-- sent="Thu, 19 Jan 2006 18:23:51 +0100" -->
<!-- isosent="20060119172351" -->
<!-- name="Rainer Keller" -->
<!-- email="Keller_at_[hidden]" -->
<!-- subject="Re:  while-loop around opal_condition_wait" -->
<!-- id="200601191823.53285.Keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="979C8604-5F35-4128-A203-C6C1BFD30419_at_cs.utk.edu" -->
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
<strong>From:</strong> Rainer Keller (<em>Keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-19 12:23:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0698.php">Brian Barrett: "Re:  posix threads"</a>
<li><strong>Previous message:</strong> <a href="0696.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="0696.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0699.php">Graham E Fagg: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0699.php">Graham E Fagg: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0701.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
On Thursday 19 January 2006 17:22, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; I was hopping my patch solve the problem completely ... look like
</span><br>
<span class="quotelev1">&gt; it's not the case :( How exactly you get the dead-lock in the
</span><br>
<span class="quotelev1">&gt; mpi_test_suite ? Which configure options ? Only --enable-progress-
</span><br>
<span class="quotelev1">&gt; threads ?
</span><br>
This happens with both --enable-progress-threads and an additional 
<br>
--enable-mpi-threads
<br>
<p>Both hang in the same places:
<br>
Process 0:
<br>
#4  0x40315a56 in pthread_cond_wait@@GLIBC_2.3.2 () 
<br>
from /lib/tls/libpthread.so.0
<br>
#5  0x40222513 in pthread_cond_wait@@GLIBC_2.3.2 () from /lib/tls/libc.so.6
<br>
#6  0x4007d7a2 in opal_condition_wait (c=0x4013c6c0, m=0x4013c720) at 
<br>
condition.h:64
<br>
#7  0x4007d40b in ompi_request_wait_all (count=1, requests=0x80bc1c0, 
<br>
statuses=0x0) at req_wait.c:159
<br>
#8  0x4073083f in ompi_coll_tuned_bcast_intra_basic_linear (buff=0x80c9c90, 
<br>
count=1000, datatype=0x8061de8, root=0, comm=0x80627e0) at 
<br>
coll_tuned_bcast.c:762
<br>
#9  0x4072b002 in ompi_coll_tuned_bcast_intra_dec_fixed (buff=0x80c9c90, 
<br>
count=1000, datatype=0x8061de8, root=0, comm=0x80627e0) at 
<br>
coll_tuned_decision_fixed.c:175
<br>
#10 0x40083dae in PMPI_Bcast (buffer=0x80c9c90, count=1000, 
<br>
datatype=0x8061de8, root=0, comm=0x80627e0) at pbcast.c:88
<br>
#11 0x0804f2cf in tst_coll_bcast_run (env=0xbfffeac0) at tst_coll_bcast.c:74
<br>
#12 0x0804bf21 in tst_test_run_func (env=0xbfffeac0) at tst_tests.c:377
<br>
#13 0x0804a46a in main (argc=7, argv=0xbfffeb74) at mpi_test_suite.c:319
<br>
<p><p>Process 1:
<br>
#4  0x40315a56 in pthread_cond_wait@@GLIBC_2.3.2 () 
<br>
from /lib/tls/libpthread.so.0
<br>
#5  0x40222513 in pthread_cond_wait@@GLIBC_2.3.2 () from /lib/tls/libc.so.6
<br>
#6  0x406941e3 in opal_condition_wait (c=0x4013c6c0, m=0x4013c720) at 
<br>
condition.h:64
<br>
#7  0x406939f2 in mca_pml_ob1_recv (addr=0x80c9c58, count=1000, 
<br>
datatype=0x8061de8, src=0, tag=-17, comm=0x80627e0, status=0x0) at 
<br>
pml_ob1_irecv.c:96
<br>
#8  0x407307a4 in ompi_coll_tuned_bcast_intra_basic_linear (buff=0x80c9c58, 
<br>
count=1000, datatype=0x8061de8, root=0, comm=0x80627e0) at 
<br>
coll_tuned_bcast.c:729
<br>
#9  0x4072b002 in ompi_coll_tuned_bcast_intra_dec_fixed (buff=0x80c9c58, 
<br>
count=1000, datatype=0x8061de8, root=0, comm=0x80627e0) at 
<br>
coll_tuned_decision_fixed.c:175
<br>
#10 0x40083dae in PMPI_Bcast (buffer=0x80c9c58, count=1000, 
<br>
datatype=0x8061de8, root=0, comm=0x80627e0) at pbcast.c:88
<br>
#11 0x0804f2cf in tst_coll_bcast_run (env=0xbfffeac0) at tst_coll_bcast.c:74
<br>
#12 0x0804bf21 in tst_test_run_func (env=0xbfffeac0) at tst_tests.c:377
<br>
#13 0x0804a46a in main (argc=7, argv=0xbfffeb74) at mpi_test_suite.c:319
<br>
<p><p><p>And yes, when I run with the basic-coll, we also hang ,-]
<br>
<p>mpirun -np 2 --mca coll basic ./mpi_test_suite -r FULL -c MPI_COMM_WORLD -d 
<br>
MPI_INT
<br>
<p>#4  0x40315a56 in pthread_cond_wait@@GLIBC_2.3.2 () 
<br>
from /lib/tls/libpthread.so.0
<br>
#5  0x40222513 in pthread_cond_wait@@GLIBC_2.3.2 () from /lib/tls/libc.so.6
<br>
#6  0x406941e3 in opal_condition_wait (c=0x4013c6c0, m=0x4013c720) at 
<br>
condition.h:64
<br>
#7  0x406939f2 in mca_pml_ob1_recv (addr=0x80c4ca0, count=1000, 
<br>
datatype=0x8061de8, src=0, tag=-17, comm=0x80627e0, status=0x0) at 
<br>
pml_ob1_irecv.c:96
<br>
#8  0x4070e402 in mca_coll_basic_bcast_lin_intra (buff=0x80c4ca0, count=1000, 
<br>
datatype=0x8061de8, root=0, comm=0x80627e0) at coll_basic_bcast.c:57
<br>
#9  0x40083dae in PMPI_Bcast (buffer=0x80c4ca0, count=1000, 
<br>
datatype=0x8061de8, root=0, comm=0x80627e0) at pbcast.c:88
<br>
#10 0x0804f2cf in tst_coll_bcast_run (env=0xbfffeab0) at tst_coll_bcast.c:74
<br>
#11 0x0804bf21 in tst_test_run_func (env=0xbfffeab0) at tst_tests.c:377
<br>
#12 0x0804a46a in main (argc=7, argv=0xbfffeb64) at mpi_test_suite.c:319
<br>
<p><p>Now, for what its worth, I ran with helgrind, to check for possible 
<br>
race-conditions, and it spews out:
<br>
==20240== Possible data race writing variable at 0x1D84F46C
<br>
==20240==    at 0x1DA8BE61: mca_oob_tcp_recv (oob_tcp_recv.c:129)
<br>
==20240==    by 0x1D73A636: mca_oob_recv_packed (oob_base_recv.c:69)
<br>
==20240==    by 0x1D73B2B0: mca_oob_xcast (oob_base_xcast.c:133)
<br>
==20240==    by 0x1D511138: ompi_mpi_init (ompi_mpi_init.c:421)
<br>
==20240==  Address 0x1D84F46C is 1020 bytes inside a block of size 3168 
<br>
alloc'd by thread 1
<br>
==20240==    at 0x1D4A80B4: malloc 
<br>
(in /usr/lib/valgrind/vgpreload_helgrind.so)
<br>
==20240==    by 0x1D7DF7BE: opal_free_list_grow (opal_free_list.c:94)
<br>
==20240==    by 0x1D7DF754: opal_free_list_init (opal_free_list.c:79)
<br>
==20240==    by 0x1DA815E3: mca_oob_tcp_component_init (oob_tcp.c:530)
<br>
<p><p>So, this was my initial search for whether we may have races in 
<br>
opal/mpi_free_list....
<br>
<p>CU,
<br>
Rainer
<br>
<pre>
-- 
---------------------------------------------------------------------
Dipl.-Inf. Rainer Keller       email: keller_at_[hidden]
  High Performance Computing     Tel: ++49 (0)711-685 5858
    Center Stuttgart (HLRS)        Fax: ++49 (0)711-685 5832
  POSTAL:Nobelstrasse 19             <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
  ACTUAL:Allmandring 30, R. O.030      AIM:rusraink
  70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0698.php">Brian Barrett: "Re:  posix threads"</a>
<li><strong>Previous message:</strong> <a href="0696.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="0696.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0699.php">Graham E Fagg: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0699.php">Graham E Fagg: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0701.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
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
