<?
$subject_val = "[OMPI devel] Issue with 2.0.0rc3, singleton init";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 09:56:03 2016" -->
<!-- isoreceived="20160616135603" -->
<!-- sent="Thu, 16 Jun 2016 16:55:41 +0300" -->
<!-- isosent="20160616135541" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Issue with 2.0.0rc3, singleton init" -->
<!-- id="CAEcYPwB1vFRq33gDa9vVs-vBMsr6YOfmnR18meu8vrQomFDOsA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Issue with 2.0.0rc3, singleton init<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-16 09:55:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19117.php">Lisandro Dalcin: "[OMPI devel] MPI_Group_intersection: malloc(0) warning with 2.0.0rc3"</a>
<li><strong>Previous message:</strong> <a href="19115.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19118.php">Howard Pritchard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>Reply:</strong> <a href="19118.php">Howard Pritchard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
./configure --prefix=/home/devel/mpi/openmpi/2.0.0rc3 --enable-debug
<br>
--enable-mem-debug
<br>
<p><a href="https://bitbucket.org/mpi4py/mpi4py/src/master/demo/helloworld.c">https://bitbucket.org/mpi4py/mpi4py/src/master/demo/helloworld.c</a>
<br>
<p>$ mpicc helloworld.c
<br>
<p>$ mpiexec -n 1 ./a.out
<br>
Hello, World! I am process 0 of 1 on kw14821.
<br>
<p>$ ./a.out
<br>
[kw14821:31370] *** Process received signal ***
<br>
[kw14821:31370] Signal: Segmentation fault (11)
<br>
[kw14821:31370] Signal code: Address not mapped (1)
<br>
[kw14821:31370] Failing at address: 0xf8
<br>
[kw14821:31370] [ 0] /lib64/libpthread.so.0(+0x10a00)[0x7fc816196a00]
<br>
[kw14821:31370] [ 1]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-pal.so.20(opal_libevent2022_event_priority_set+0xcb)[0x7fc81584c7db]
<br>
[kw14821:31370] [ 2]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_rml_oob.so(orte_rml_oob_recv_buffer_nb+0x154)[0x7fc81277f95f]
<br>
[kw14821:31370] [ 3]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_grpcomm_direct.so(+0x17c2)[0x7fc81469f7c2]
<br>
[kw14821:31370] [ 4]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_grpcomm_base_select+0x17b)[0x7fc815b522e9]
<br>
[kw14821:31370] [ 5]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_ess_base_app_setup+0x985)[0x7fc815b4cafe]
<br>
[kw14821:31370] [ 6]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_ess_singleton.so(+0x37e2)[0x7fc81429c7e2]
<br>
[kw14821:31370] [ 7]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_init+0x2d2)[0x7fc815b05b27]
<br>
[kw14821:31370] [ 8]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/libmpi.so.20(ompi_mpi_init+0x31b)[0x7fc8163fbecf]
<br>
[kw14821:31370] [ 9]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/libmpi.so.20(PMPI_Init_thread+0x7f)[0x7fc81642feae]
<br>
[kw14821:31370] [10] ./a.out[0x4008f3]
<br>
[kw14821:31370] [11] /lib64/libc.so.6(__libc_start_main+0xf0)[0x7fc815de5580]
<br>
[kw14821:31370] [12] ./a.out[0x4007e9]
<br>
[kw14821:31370] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
<p><p>$ valgrind -q ./a.out
<br>
==31396== Conditional jump or move depends on uninitialised value(s)
<br>
==31396==    at 0x5A9D4CA: opal_value_unload (dss_load_unload.c:291)
<br>
==31396==    by 0x74B6378: rte_init (ess_singleton_module.c:260)
<br>
==31396==    by 0x57A2B26: orte_init (orte_init.c:226)
<br>
==31396==    by 0x4E8CECE: ompi_mpi_init (ompi_mpi_init.c:501)
<br>
==31396==    by 0x4EC0EAD: PMPI_Init_thread (pinit_thread.c:69)
<br>
==31396==    by 0x4008F2: main (in /home/dalcinl/Devel/mpi4py-dev/demo/a.out)
<br>
==31396==
<br>
==31396== Invalid read of size 4
<br>
==31396==    at 0x5AEE7DB: opal_libevent2022_event_priority_set (event.c:1859)
<br>
==31396==    by 0x8FD195E: orte_rml_oob_recv_buffer_nb (rml_oob_recv.c:74)
<br>
==31396==    by 0x70AE7C1: init (grpcomm_direct.c:78)
<br>
==31396==    by 0x57EF2E8: orte_grpcomm_base_select (grpcomm_base_select.c:87)
<br>
==31396==    by 0x57E9AFD: orte_ess_base_app_setup (ess_base_std_app.c:223)
<br>
==31396==    by 0x74B67E1: rte_init (ess_singleton_module.c:323)
<br>
==31396==    by 0x57A2B26: orte_init (orte_init.c:226)
<br>
==31396==    by 0x4E8CECE: ompi_mpi_init (ompi_mpi_init.c:501)
<br>
==31396==    by 0x4EC0EAD: PMPI_Init_thread (pinit_thread.c:69)
<br>
==31396==    by 0x4008F2: main (in /home/dalcinl/Devel/mpi4py-dev/demo/a.out)
<br>
==31396==  Address 0xf8 is not stack'd, malloc'd or (recently) free'd
<br>
==31396==
<br>
[kw14821:31396] *** Process received signal ***
<br>
[kw14821:31396] Signal: Segmentation fault (11)
<br>
[kw14821:31396] Signal code: Address not mapped (1)
<br>
[kw14821:31396] Failing at address: 0xf8
<br>
[kw14821:31396] [ 0] /lib64/libpthread.so.0(+0x10a00)[0x51bea00]
<br>
[kw14821:31396] [ 1]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-pal.so.20(opal_libevent2022_event_priority_set+0xcb)[0x5aee7db]
<br>
[kw14821:31396] [ 2]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_rml_oob.so(orte_rml_oob_recv_buffer_nb+0x154)[0x8fd195f]
<br>
[kw14821:31396] [ 3]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_grpcomm_direct.so(+0x17c2)[0x70ae7c2]
<br>
[kw14821:31396] [ 4]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_grpcomm_base_select+0x17b)[0x57ef2e9]
<br>
[kw14821:31396] [ 5]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_ess_base_app_setup+0x985)[0x57e9afe]
<br>
[kw14821:31396] [ 6]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_ess_singleton.so(+0x37e2)[0x74b67e2]
<br>
[kw14821:31396] [ 7]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_init+0x2d2)[0x57a2b27]
<br>
[kw14821:31396] [ 8]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/libmpi.so.20(ompi_mpi_init+0x31b)[0x4e8cecf]
<br>
[kw14821:31396] [ 9]
<br>
/home/devel/mpi/openmpi/2.0.0rc3/lib/libmpi.so.20(PMPI_Init_thread+0x7f)[0x4ec0eae]
<br>
[kw14821:31396] [10] ./a.out[0x4008f3]
<br>
[kw14821:31396] [11] /lib64/libc.so.6(__libc_start_main+0xf0)[0x53ec580]
<br>
[kw14821:31396] [12] ./a.out[0x4007e9]
<br>
[kw14821:31396] *** End of error message ***
<br>
==31396==
<br>
==31396== Process terminating with default action of signal 11 (SIGSEGV)
<br>
==31396==  Access not within mapped region at address 0xF8
<br>
==31396==    at 0x5AEE7DB: opal_libevent2022_event_priority_set (event.c:1859)
<br>
==31396==    by 0x8FD195E: orte_rml_oob_recv_buffer_nb (rml_oob_recv.c:74)
<br>
==31396==    by 0x70AE7C1: init (grpcomm_direct.c:78)
<br>
==31396==    by 0x57EF2E8: orte_grpcomm_base_select (grpcomm_base_select.c:87)
<br>
==31396==    by 0x57E9AFD: orte_ess_base_app_setup (ess_base_std_app.c:223)
<br>
==31396==    by 0x74B67E1: rte_init (ess_singleton_module.c:323)
<br>
==31396==    by 0x57A2B26: orte_init (orte_init.c:226)
<br>
==31396==    by 0x4E8CECE: ompi_mpi_init (ompi_mpi_init.c:501)
<br>
==31396==    by 0x4EC0EAD: PMPI_Init_thread (pinit_thread.c:69)
<br>
==31396==    by 0x4008F2: main (in /home/dalcinl/Devel/mpi4py-dev/demo/a.out)
<br>
==31396==  If you believe this happened as a result of a stack
<br>
==31396==  overflow in your program's main thread (unlikely but
<br>
==31396==  possible), you can try to increase the size of the
<br>
==31396==  main thread stack using the --main-stacksize= flag.
<br>
==31396==  The main thread stack size used in this run was 8720384.
<br>
Killed
<br>
<p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Extreme Computing Research Center (ECRC)
King Abdullah University of Science and Technology (KAUST)
<a href="http://ecrc.kaust.edu.sa/">http://ecrc.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 0109
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19117.php">Lisandro Dalcin: "[OMPI devel] MPI_Group_intersection: malloc(0) warning with 2.0.0rc3"</a>
<li><strong>Previous message:</strong> <a href="19115.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19118.php">Howard Pritchard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>Reply:</strong> <a href="19118.php">Howard Pritchard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
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
