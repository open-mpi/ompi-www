<?
$subject_val = "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 12:04:56 2016" -->
<!-- isoreceived="20160616160456" -->
<!-- sent="Thu, 16 Jun 2016 16:04:54 +0000" -->
<!-- isosent="20160616160454" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Issue with 2.0.0rc3, singleton init" -->
<!-- id="D3882A14.11993%howardp_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1E7597D8-3422-4E49-AD0C-07BE75D1E93A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Issue with 2.0.0rc3, singleton init<br>
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-16 12:04:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19121.php">Ralph Castain: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>Previous message:</strong> <a href="19119.php">Ralph Castain: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>In reply to:</strong> <a href="19119.php">Ralph Castain: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19121.php">Ralph Castain: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>Reply:</strong> <a href="19121.php">Ralph Castain: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>thanks!  does this impact particular systems or is it general problem.
<br>
<p>Howard
<br>
<p><pre>
--
Howard Pritchard
HPC-DES
Los Alamos National Laboratory
From: devel &lt;devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
Reply-To: Open MPI Developers &lt;devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
Date: Thursday, June 16, 2016 at 10:03 AM
To: Open MPI Developers &lt;devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
Subject: Re: [OMPI devel] Issue with 2.0.0rc3, singleton init
FWIW: I am able to replicate and will provide a patch later today
On Jun 16, 2016, at 8:19 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
Hi Lisandro,
Thanks for giving the rc3 a try.  Could you post the output of ompi_info from your
install to the list?
Thanks,
Howard
2016-06-16 7:55 GMT-06:00 Lisandro Dalcin &lt;dalcinl_at_[hidden]&lt;mailto:dalcinl_at_[hidden]&gt;&gt;:
./configure --prefix=/home/devel/mpi/openmpi/2.0.0rc3 --enable-debug
--enable-mem-debug
<a href="https://bitbucket.org/mpi4py/mpi4py/src/master/demo/helloworld.c">https://bitbucket.org/mpi4py/mpi4py/src/master/demo/helloworld.c</a>
$ mpicc helloworld.c
$ mpiexec -n 1 ./a.out
Hello, World! I am process 0 of 1 on kw14821.
$ ./a.out
[kw14821:31370] *** Process received signal ***
[kw14821:31370] Signal: Segmentation fault (11)
[kw14821:31370] Signal code: Address not mapped (1)
[kw14821:31370] Failing at address: 0xf8
[kw14821:31370] [ 0] /lib64/libpthread.so.0(+0x10a00)[0x7fc816196a00]
[kw14821:31370] [ 1]
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-pal.so.20(opal_libevent2022_event_priority_set+0xcb)[0x7fc81584c7db]
[kw14821:31370] [ 2]
/home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_rml_oob.so(orte_rml_oob_recv_buffer_nb+0x154)[0x7fc81277f95f]
[kw14821:31370] [ 3]
/home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_grpcomm_direct.so(+0x17c2)[0x7fc81469f7c2]
[kw14821:31370] [ 4]
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_grpcomm_base_select+0x17b)[0x7fc815b522e9]
[kw14821:31370] [ 5]
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_ess_base_app_setup+0x985)[0x7fc815b4cafe]
[kw14821:31370] [ 6]
/home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_ess_singleton.so(+0x37e2)[0x7fc81429c7e2]
[kw14821:31370] [ 7]
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_init+0x2d2)[0x7fc815b05b27]
[kw14821:31370] [ 8]
/home/devel/mpi/openmpi/2.0.0rc3/lib/libmpi.so.20(ompi_mpi_init+0x31b)[0x7fc8163fbecf]
[kw14821:31370] [ 9]
/home/devel/mpi/openmpi/2.0.0rc3/lib/libmpi.so.20(PMPI_Init_thread+0x7f)[0x7fc81642feae]
[kw14821:31370] [10] ./a.out[0x4008f3]
[kw14821:31370] [11] /lib64/libc.so.6(__libc_start_main+0xf0)[0x7fc815de5580]
[kw14821:31370] [12] ./a.out[0x4007e9]
[kw14821:31370] *** End of error message ***
Segmentation fault (core dumped)
$ valgrind -q ./a.out
==31396== Conditional jump or move depends on uninitialised value(s)
==31396==    at 0x5A9D4CA: opal_value_unload (dss_load_unload.c:291)
==31396==    by 0x74B6378: rte_init (ess_singleton_module.c:260)
==31396==    by 0x57A2B26: orte_init (orte_init.c:226)
==31396==    by 0x4E8CECE: ompi_mpi_init (ompi_mpi_init.c:501)
==31396==    by 0x4EC0EAD: PMPI_Init_thread (pinit_thread.c:69)
==31396==    by 0x4008F2: main (in /home/dalcinl/Devel/mpi4py-dev/demo/a.out)
==31396==
==31396== Invalid read of size 4
==31396==    at 0x5AEE7DB: opal_libevent2022_event_priority_set (event.c:1859)
==31396==    by 0x8FD195E: orte_rml_oob_recv_buffer_nb (rml_oob_recv.c:74)
==31396==    by 0x70AE7C1: init (grpcomm_direct.c:78)
==31396==    by 0x57EF2E8: orte_grpcomm_base_select (grpcomm_base_select.c:87)
==31396==    by 0x57E9AFD: orte_ess_base_app_setup (ess_base_std_app.c:223)
==31396==    by 0x74B67E1: rte_init (ess_singleton_module.c:323)
==31396==    by 0x57A2B26: orte_init (orte_init.c:226)
==31396==    by 0x4E8CECE: ompi_mpi_init (ompi_mpi_init.c:501)
==31396==    by 0x4EC0EAD: PMPI_Init_thread (pinit_thread.c:69)
==31396==    by 0x4008F2: main (in /home/dalcinl/Devel/mpi4py-dev/demo/a.out)
==31396==  Address 0xf8 is not stack'd, malloc'd or (recently) free'd
==31396==
[kw14821:31396] *** Process received signal ***
[kw14821:31396] Signal: Segmentation fault (11)
[kw14821:31396] Signal code: Address not mapped (1)
[kw14821:31396] Failing at address: 0xf8
[kw14821:31396] [ 0] /lib64/libpthread.so.0(+0x10a00)[0x51bea00]
[kw14821:31396] [ 1]
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-pal.so.20(opal_libevent2022_event_priority_set+0xcb)[0x5aee7db]
[kw14821:31396] [ 2]
/home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_rml_oob.so(orte_rml_oob_recv_buffer_nb+0x154)[0x8fd195f]
[kw14821:31396] [ 3]
/home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_grpcomm_direct.so(+0x17c2)[0x70ae7c2]
[kw14821:31396] [ 4]
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_grpcomm_base_select+0x17b)[0x57ef2e9]
[kw14821:31396] [ 5]
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_ess_base_app_setup+0x985)[0x57e9afe]
[kw14821:31396] [ 6]
/home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_ess_singleton.so(+0x37e2)[0x74b67e2]
[kw14821:31396] [ 7]
/home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_init+0x2d2)[0x57a2b27]
[kw14821:31396] [ 8]
/home/devel/mpi/openmpi/2.0.0rc3/lib/libmpi.so.20(ompi_mpi_init+0x31b)[0x4e8cecf]
[kw14821:31396] [ 9]
/home/devel/mpi/openmpi/2.0.0rc3/lib/libmpi.so.20(PMPI_Init_thread+0x7f)[0x4ec0eae]
[kw14821:31396] [10] ./a.out[0x4008f3]
[kw14821:31396] [11] /lib64/libc.so.6(__libc_start_main+0xf0)[0x53ec580]
[kw14821:31396] [12] ./a.out[0x4007e9]
[kw14821:31396] *** End of error message ***
==31396==
==31396== Process terminating with default action of signal 11 (SIGSEGV)
==31396==  Access not within mapped region at address 0xF8
==31396==    at 0x5AEE7DB: opal_libevent2022_event_priority_set (event.c:1859)
==31396==    by 0x8FD195E: orte_rml_oob_recv_buffer_nb (rml_oob_recv.c:74)
==31396==    by 0x70AE7C1: init (grpcomm_direct.c:78)
==31396==    by 0x57EF2E8: orte_grpcomm_base_select (grpcomm_base_select.c:87)
==31396==    by 0x57E9AFD: orte_ess_base_app_setup (ess_base_std_app.c:223)
==31396==    by 0x74B67E1: rte_init (ess_singleton_module.c:323)
==31396==    by 0x57A2B26: orte_init (orte_init.c:226)
==31396==    by 0x4E8CECE: ompi_mpi_init (ompi_mpi_init.c:501)
==31396==    by 0x4EC0EAD: PMPI_Init_thread (pinit_thread.c:69)
==31396==    by 0x4008F2: main (in /home/dalcinl/Devel/mpi4py-dev/demo/a.out)
==31396==  If you believe this happened as a result of a stack
==31396==  overflow in your program's main thread (unlikely but
==31396==  possible), you can try to increase the size of the
==31396==  main thread stack using the --main-stacksize= flag.
==31396==  The main thread stack size used in this run was 8720384.
Killed
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
<a href="http://www.kaust.edu.sa<http://www.kaust.edu.sa/">http://www.kaust.edu.sa<http://www.kaust.edu.sa/</a>&gt;
Office Phone: +966 12 808-0459&lt;tel:%2B966%2012%20808-0459&gt;
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19116.php">http://www.open-mpi.org/community/lists/devel/2016/06/19116.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19118.php">http://www.open-mpi.org/community/lists/devel/2016/06/19118.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19120/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19121.php">Ralph Castain: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>Previous message:</strong> <a href="19119.php">Ralph Castain: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>In reply to:</strong> <a href="19119.php">Ralph Castain: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19121.php">Ralph Castain: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>Reply:</strong> <a href="19121.php">Ralph Castain: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
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
