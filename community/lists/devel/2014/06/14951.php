<?
$subject_val = "Re: [OMPI devel] trunk failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 09:49:49 2014" -->
<!-- isoreceived="20140602134949" -->
<!-- sent="Mon, 2 Jun 2014 06:49:45 -0700" -->
<!-- isosent="20140602134945" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk failure" -->
<!-- id="CFA0F7D2-45F1-4F99-8208-73EE5EBE5857_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyZweiwt+OfdrAfiNYDcUtLeC+9ZwRGdywq7nCy-5CQHvw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk failure<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-02 09:49:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14952.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14950.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
<li><strong>In reply to:</strong> <a href="14950.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14956.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14956.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys
<br>
<p>I'm awake now and will take a look at this - thanks
<br>
Ralph
<br>
<p>On Jun 2, 2014, at 6:34 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun -np 8 -mca btl sm,tcp --mca rtc_freq_priority 0 /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempiProgram terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  orte_plm_base_post_launch (fd=&lt;value optimized out&gt;, args=&lt;value optimized out&gt;, cbdata=0x7393b0) at base/plm_base_launch_support.c:607
</span><br>
<span class="quotelev1">&gt; 607             opal_event_evtimer_del(timer-&gt;ev);
</span><br>
<span class="quotelev1">&gt; Missing separate debuginfos, use: debuginfo-install glibc-2.12-1.107.el6.x86_64 libgcc-4.4.7-3.el6.x86_64 libpciaccess-0.13.1-2.el6.x86_64 numactl-2.0.7-6.el6.x86_64
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  orte_plm_base_post_launch (fd=&lt;value optimized out&gt;, args=&lt;value optimized out&gt;, cbdata=0x7393b0) at base/plm_base_launch_support.c:607
</span><br>
<span class="quotelev1">&gt; #1  0x00007ffff7b1076c in event_process_active_single_queue (base=0x630d30, flags=&lt;value optimized out&gt;) at event.c:1367
</span><br>
<span class="quotelev1">&gt; #2  event_process_active (base=0x630d30, flags=&lt;value optimized out&gt;) at event.c:1437
</span><br>
<span class="quotelev1">&gt; #3  opal_libevent2021_event_base_loop (base=0x630d30, flags=&lt;value optimized out&gt;) at event.c:1645
</span><br>
<span class="quotelev1">&gt; #4  0x000000000040501d in orterun (argc=10, argv=0x7fffffffe208) at orterun.c:1080
</span><br>
<span class="quotelev1">&gt; #5  0x00000000004039e4 in main (argc=10, argv=0x7fffffffe208) at main.c:13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 2, 2014 at 3:31 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; OK,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; please send me a clean gdb backtrace :
</span><br>
<span class="quotelev1">&gt; ulimit -c unlimited
</span><br>
<span class="quotelev1">&gt; /* this should generate a core */
</span><br>
<span class="quotelev1">&gt; mpirun ...
</span><br>
<span class="quotelev1">&gt; gdb mpirun core...
</span><br>
<span class="quotelev1">&gt; bt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if no core
</span><br>
<span class="quotelev1">&gt; gdb mpirun
</span><br>
<span class="quotelev1">&gt; r -np ... --mca ... ...
</span><br>
<span class="quotelev1">&gt; and after the crash
</span><br>
<span class="quotelev1">&gt; bt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then i can only review the code and hope i can find the root cause of the error i am unable to reproduce in my environment
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 2, 2014 at 9:03 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; The jenkins took your commit and applied automatically, I tried with mca flag later.
</span><br>
<span class="quotelev1">&gt; Also, we don`t have /sys/devices/system/cpu/cpu0/cpufreq/scaling_governor in our system, the cpuspeed daemon is off by default on all our nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 2, 2014 at 3:00 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Mike,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; did you apply the patch *and* mpirun --mca rtc_freq_priority 0 ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *both* are required (--mca rtc_freq_priority 0 is not enough without the patch)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can you please confirm there is no /sys/devices/system/cpu/cpu0/cpufreq/scaling_governor (pseudo) file on your system ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if this still does not work for you, then this might be a different issue i was unable to reproduce.
</span><br>
<span class="quotelev1">&gt; in this case, could you run mpirun under gdb and send a gdb stack trace ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 2, 2014 at 8:26 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; more info, specifying --mca rtc_freq_priority 0 explicitly, generates different kind of fail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun -np 8 -mca btl sm,tcp --mca rtc_freq_priority 0 /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi
</span><br>
<span class="quotelev1">&gt; [vegas12:13887] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [vegas12:13887] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [vegas12:13887] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [vegas12:13887] Failing at address: 0x20
</span><br>
<span class="quotelev1">&gt; [vegas12:13887] [ 0] /lib64/libpthread.so.0[0x3937c0f500]
</span><br>
<span class="quotelev1">&gt; [vegas12:13887] [ 1] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-rte.so.0(orte_plm_base_post_launch+0x90)[0x7ffff7dcbe50]
</span><br>
<span class="quotelev1">&gt; [vegas12:13887] [ 2] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-pal.so.0(opal_libevent2021_event_base_loop+0x8bc)[0x7ffff7b1076c]
</span><br>
<span class="quotelev1">&gt; [vegas12:13887] [ 3] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(orterun+0x126d)[0x40501d]
</span><br>
<span class="quotelev1">&gt; [vegas12:13887] [ 4] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(main+0x20)[0x4039e4]
</span><br>
<span class="quotelev1">&gt; [vegas12:13887] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]
</span><br>
<span class="quotelev1">&gt; [vegas12:13887] [ 6] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun[0x403909]
</span><br>
<span class="quotelev1">&gt; [vegas12:13887] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 2, 2014 at 2:24 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; This fix &quot;orte_rtc_base_select: skip a RTC module if it has a zero priority&quot; did not help and jenkins stilll fails as before.
</span><br>
<span class="quotelev1">&gt; The ompi was configured:
</span><br>
<span class="quotelev1">&gt; --with-platform=contrib/platform/mellanox/optimized --with-ompi-param-check --enable-picky --with-knem --with-mxm --with-fca
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The run was on single node:
</span><br>
<span class="quotelev1">&gt; $/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun -np 8 -mca btl sm,tcp /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] [ 0] /lib64/libpthread.so.0[0x3937c0f500]
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] [ 1] /lib64/libc.so.6(fgets+0x2d)[0x3937466f2d]
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] [ 2] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_rtc_freq.so(+0x1f3f)[0x7ffff41f5f3f]
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] [ 3] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_rtc_freq.so(+0x279b)[0x7ffff41f679b]
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] [ 4] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-rte.so.0(orte_rtc_base_select+0xe6)[0x7ffff7ddc036]
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] [ 5] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_ess_hnp.so(+0x4056)[0x7ffff725b056]
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] [ 6] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-rte.so.0(orte_init+0x174)[0x7ffff7d97254]
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] [ 7] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(orterun+0x863)[0x404613]
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] [ 8] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(main+0x20)[0x4039e4]
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] [10] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun[0x403909]
</span><br>
<span class="quotelev1">&gt; [vegas12:13834] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 2, 2014 at 10:19 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Mike and Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i could not find a simple workaround.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for the time being, i commited r31926 and invite those who face a similar issue to use the following workaround :
</span><br>
<span class="quotelev1">&gt; export OMPI_MCA_rtc_freq_priority=0
</span><br>
<span class="quotelev1">&gt; /* or mpirun --mca rtc_freq_priority 0 ... */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 2, 2014 at 3:45 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; in orte/mca/rtc/freq/rtc_freq.c at line 187
</span><br>
<span class="quotelev1">&gt; fp = fopen(filename, &quot;r&quot;);
</span><br>
<span class="quotelev1">&gt; and filename is &quot;/sys/devices/system/cpu/cpu0/cpufreq/scaling_governor&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there is no error check, so if fp is NULL, orte_getline() will call fgets() that will crash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14939.php">http://www.open-mpi.org/community/lists/devel/2014/06/14939.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14945.php">http://www.open-mpi.org/community/lists/devel/2014/06/14945.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14947.php">http://www.open-mpi.org/community/lists/devel/2014/06/14947.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14948.php">http://www.open-mpi.org/community/lists/devel/2014/06/14948.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14949.php">http://www.open-mpi.org/community/lists/devel/2014/06/14949.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14950.php">http://www.open-mpi.org/community/lists/devel/2014/06/14950.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14951/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14952.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14950.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
<li><strong>In reply to:</strong> <a href="14950.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14956.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14956.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
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
