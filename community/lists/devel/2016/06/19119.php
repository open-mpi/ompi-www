<?
$subject_val = "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 12:03:06 2016" -->
<!-- isoreceived="20160616160306" -->
<!-- sent="Thu, 16 Jun 2016 09:03:01 -0700" -->
<!-- isosent="20160616160301" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Issue with 2.0.0rc3, singleton init" -->
<!-- id="1E7597D8-3422-4E49-AD0C-07BE75D1E93A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj64+RauC2C1d9UqeHQxSU8hvjich3X70HRd=KO8YoCy7w_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-16 12:03:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19120.php">Pritchard Jr., Howard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>Previous message:</strong> <a href="19118.php">Howard Pritchard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>In reply to:</strong> <a href="19118.php">Howard Pritchard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19120.php">Pritchard Jr., Howard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>Reply:</strong> <a href="19120.php">Pritchard Jr., Howard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I am able to replicate and will provide a patch later today
<br>
<p><span class="quotelev1">&gt; On Jun 16, 2016, at 8:19 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Lisandro,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for giving the rc3 a try.  Could you post the output of ompi_info from your
</span><br>
<span class="quotelev1">&gt; install to the list?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2016-06-16 7:55 GMT-06:00 Lisandro Dalcin &lt;dalcinl_at_[hidden] &lt;mailto:dalcinl_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/devel/mpi/openmpi/2.0.0rc3 --enable-debug
</span><br>
<span class="quotelev1">&gt; --enable-mem-debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/mpi4py/mpi4py/src/master/demo/helloworld.c">https://bitbucket.org/mpi4py/mpi4py/src/master/demo/helloworld.c</a> &lt;<a href="https://bitbucket.org/mpi4py/mpi4py/src/master/demo/helloworld.c">https://bitbucket.org/mpi4py/mpi4py/src/master/demo/helloworld.c</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpicc helloworld.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 1 ./a.out
</span><br>
<span class="quotelev1">&gt; Hello, World! I am process 0 of 1 on kw14821.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./a.out
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] Failing at address: 0xf8
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] [ 0] /lib64/libpthread.so.0(+0x10a00)[0x7fc816196a00]
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-pal.so.20(opal_libevent2022_event_priority_set+0xcb)[0x7fc81584c7db]
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_rml_oob.so(orte_rml_oob_recv_buffer_nb+0x154)[0x7fc81277f95f]
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_grpcomm_direct.so(+0x17c2)[0x7fc81469f7c2]
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_grpcomm_base_select+0x17b)[0x7fc815b522e9]
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_ess_base_app_setup+0x985)[0x7fc815b4cafe]
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] [ 6]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_ess_singleton.so(+0x37e2)[0x7fc81429c7e2]
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] [ 7]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_init+0x2d2)[0x7fc815b05b27]
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] [ 8]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/libmpi.so.20(ompi_mpi_init+0x31b)[0x7fc8163fbecf]
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] [ 9]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/libmpi.so.20(PMPI_Init_thread+0x7f)[0x7fc81642feae]
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] [10] ./a.out[0x4008f3]
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] [11] /lib64/libc.so.6(__libc_start_main+0xf0)[0x7fc815de5580]
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] [12] ./a.out[0x4007e9]
</span><br>
<span class="quotelev1">&gt; [kw14821:31370] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ valgrind -q ./a.out
</span><br>
<span class="quotelev1">&gt; ==31396== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==31396==    at 0x5A9D4CA: opal_value_unload (dss_load_unload.c:291)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x74B6378: rte_init (ess_singleton_module.c:260)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x57A2B26: orte_init (orte_init.c:226)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x4E8CECE: ompi_mpi_init (ompi_mpi_init.c:501)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x4EC0EAD: PMPI_Init_thread (pinit_thread.c:69)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x4008F2: main (in /home/dalcinl/Devel/mpi4py-dev/demo/a.out)
</span><br>
<span class="quotelev1">&gt; ==31396==
</span><br>
<span class="quotelev1">&gt; ==31396== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==31396==    at 0x5AEE7DB: opal_libevent2022_event_priority_set (event.c:1859)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x8FD195E: orte_rml_oob_recv_buffer_nb (rml_oob_recv.c:74)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x70AE7C1: init (grpcomm_direct.c:78)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x57EF2E8: orte_grpcomm_base_select (grpcomm_base_select.c:87)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x57E9AFD: orte_ess_base_app_setup (ess_base_std_app.c:223)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x74B67E1: rte_init (ess_singleton_module.c:323)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x57A2B26: orte_init (orte_init.c:226)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x4E8CECE: ompi_mpi_init (ompi_mpi_init.c:501)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x4EC0EAD: PMPI_Init_thread (pinit_thread.c:69)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x4008F2: main (in /home/dalcinl/Devel/mpi4py-dev/demo/a.out)
</span><br>
<span class="quotelev1">&gt; ==31396==  Address 0xf8 is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt; ==31396==
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] Failing at address: 0xf8
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] [ 0] /lib64/libpthread.so.0(+0x10a00)[0x51bea00]
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-pal.so.20(opal_libevent2022_event_priority_set+0xcb)[0x5aee7db]
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_rml_oob.so(orte_rml_oob_recv_buffer_nb+0x154)[0x8fd195f]
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_grpcomm_direct.so(+0x17c2)[0x70ae7c2]
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_grpcomm_base_select+0x17b)[0x57ef2e9]
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] [ 5]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_ess_base_app_setup+0x985)[0x57e9afe]
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] [ 6]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/openmpi/mca_ess_singleton.so(+0x37e2)[0x74b67e2]
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] [ 7]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/libopen-rte.so.20(orte_init+0x2d2)[0x57a2b27]
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] [ 8]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/libmpi.so.20(ompi_mpi_init+0x31b)[0x4e8cecf]
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] [ 9]
</span><br>
<span class="quotelev1">&gt; /home/devel/mpi/openmpi/2.0.0rc3/lib/libmpi.so.20(PMPI_Init_thread+0x7f)[0x4ec0eae]
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] [10] ./a.out[0x4008f3]
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] [11] /lib64/libc.so.6(__libc_start_main+0xf0)[0x53ec580]
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] [12] ./a.out[0x4007e9]
</span><br>
<span class="quotelev1">&gt; [kw14821:31396] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ==31396==
</span><br>
<span class="quotelev1">&gt; ==31396== Process terminating with default action of signal 11 (SIGSEGV)
</span><br>
<span class="quotelev1">&gt; ==31396==  Access not within mapped region at address 0xF8
</span><br>
<span class="quotelev1">&gt; ==31396==    at 0x5AEE7DB: opal_libevent2022_event_priority_set (event.c:1859)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x8FD195E: orte_rml_oob_recv_buffer_nb (rml_oob_recv.c:74)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x70AE7C1: init (grpcomm_direct.c:78)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x57EF2E8: orte_grpcomm_base_select (grpcomm_base_select.c:87)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x57E9AFD: orte_ess_base_app_setup (ess_base_std_app.c:223)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x74B67E1: rte_init (ess_singleton_module.c:323)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x57A2B26: orte_init (orte_init.c:226)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x4E8CECE: ompi_mpi_init (ompi_mpi_init.c:501)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x4EC0EAD: PMPI_Init_thread (pinit_thread.c:69)
</span><br>
<span class="quotelev1">&gt; ==31396==    by 0x4008F2: main (in /home/dalcinl/Devel/mpi4py-dev/demo/a.out)
</span><br>
<span class="quotelev1">&gt; ==31396==  If you believe this happened as a result of a stack
</span><br>
<span class="quotelev1">&gt; ==31396==  overflow in your program's main thread (unlikely but
</span><br>
<span class="quotelev1">&gt; ==31396==  possible), you can try to increase the size of the
</span><br>
<span class="quotelev1">&gt; ==31396==  main thread stack using the --main-stacksize= flag.
</span><br>
<span class="quotelev1">&gt; ==31396==  The main thread stack size used in this run was 8720384.
</span><br>
<span class="quotelev1">&gt; Killed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Extreme Computing Research Center (ECRC)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://ecrc.kaust.edu.sa/">http://ecrc.kaust.edu.sa/</a> &lt;<a href="http://ecrc.kaust.edu.sa/">http://ecrc.kaust.edu.sa/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 0109
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a> &lt;<a href="http://www.kaust.edu.sa/">http://www.kaust.edu.sa/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459 &lt;tel:%2B966%2012%20808-0459&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19116.php">http://www.open-mpi.org/community/lists/devel/2016/06/19116.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/06/19116.php">http://www.open-mpi.org/community/lists/devel/2016/06/19116.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19118.php">http://www.open-mpi.org/community/lists/devel/2016/06/19118.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19119/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19120.php">Pritchard Jr., Howard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>Previous message:</strong> <a href="19118.php">Howard Pritchard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>In reply to:</strong> <a href="19118.php">Howard Pritchard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19120.php">Pritchard Jr., Howard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
<li><strong>Reply:</strong> <a href="19120.php">Pritchard Jr., Howard: "Re: [OMPI devel] Issue with 2.0.0rc3, singleton init"</a>
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
