<?
$subject_val = "Re: [OMPI devel] trunk failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 09:34:28 2014" -->
<!-- isoreceived="20140602133428" -->
<!-- sent="Mon, 2 Jun 2014 16:34:26 +0300" -->
<!-- isosent="20140602133426" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk failure" -->
<!-- id="CAAO1KyZweiwt+OfdrAfiNYDcUtLeC+9ZwRGdywq7nCy-5CQHvw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5tnppGWWhc0nVq-Kq3NBzuKEX868SiR3EQVBY=EZJ5m_w_at_mail.gmail.com" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-02 09:34:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14951.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14949.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>In reply to:</strong> <a href="14949.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14951.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14951.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun
<br>
-np 8 -mca btl sm,tcp --mca rtc_freq_priority 0
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempiProgram
<br>
terminated with signal 11, Segmentation fault.
<br>
<p><p>#0  orte_plm_base_post_launch (fd=&lt;value optimized out&gt;, args=&lt;value
<br>
optimized out&gt;, cbdata=0x7393b0) at base/plm_base_launch_support.c:607
<br>
607             opal_event_evtimer_del(timer-&gt;ev);
<br>
Missing separate debuginfos, use: debuginfo-install
<br>
glibc-2.12-1.107.el6.x86_64 libgcc-4.4.7-3.el6.x86_64
<br>
libpciaccess-0.13.1-2.el6.x86_64 numactl-2.0.7-6.el6.x86_64
<br>
(gdb) bt
<br>
#0  orte_plm_base_post_launch (fd=&lt;value optimized out&gt;, args=&lt;value
<br>
optimized out&gt;, cbdata=0x7393b0) at base/plm_base_launch_support.c:607
<br>
#1  0x00007ffff7b1076c in event_process_active_single_queue (base=0x630d30,
<br>
flags=&lt;value optimized out&gt;) at event.c:1367
<br>
#2  event_process_active (base=0x630d30, flags=&lt;value optimized out&gt;) at
<br>
event.c:1437
<br>
#3  opal_libevent2021_event_base_loop (base=0x630d30, flags=&lt;value
<br>
optimized out&gt;) at event.c:1645
<br>
#4  0x000000000040501d in orterun (argc=10, argv=0x7fffffffe208) at
<br>
orterun.c:1080
<br>
#5  0x00000000004039e4 in main (argc=10, argv=0x7fffffffe208) at main.c:13
<br>
<p><p>On Mon, Jun 2, 2014 at 3:31 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; OK,
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
<span class="quotelev1">&gt; then i can only review the code and hope i can find the root cause of the
</span><br>
<span class="quotelev1">&gt; error i am unable to reproduce in my environment
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
<span class="quotelev1">&gt; On Mon, Jun 2, 2014 at 9:03 PM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; The jenkins took your commit and applied automatically, I tried with mca
</span><br>
<span class="quotelev2">&gt;&gt; flag later.
</span><br>
<span class="quotelev2">&gt;&gt; Also, we don`t have /sys/devices/system/cpu/cpu0/cpufreq/scaling_governor
</span><br>
<span class="quotelev2">&gt;&gt; in our system, the cpuspeed daemon is off by default on all our nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; M
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jun 2, 2014 at 3:00 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mike,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; did you apply the patch *and* mpirun --mca rtc_freq_priority 0 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *both* are required (--mca rtc_freq_priority 0 is not enough without the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patch)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can you please confirm there is no /sys/devices/system/cpu/cpu0/cpufreq/scaling_governor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (pseudo) file on your system ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if this still does not work for you, then this might be a different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue i was unable to reproduce.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in this case, could you run mpirun under gdb and send a gdb stack trace ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Jun 2, 2014 at 8:26 PM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more info, specifying --mca rtc_freq_priority 0 explicitly, generates
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different kind of fail:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -np 8 -mca btl sm,tcp --mca rtc_freq_priority 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vegas12:13887] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vegas12:13887] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vegas12:13887] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vegas12:13887] Failing at address: 0x20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vegas12:13887] [ 0] /lib64/libpthread.so.0[0x3937c0f500]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vegas12:13887] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-rte.so.0(orte_plm_base_post_launch+0x90)[0x7ffff7dcbe50]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vegas12:13887] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-pal.so.0(opal_libevent2021_event_base_loop+0x8bc)[0x7ffff7b1076c]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vegas12:13887] [ 3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(orterun+0x126d)[0x40501d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vegas12:13887] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(main+0x20)[0x4039e4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vegas12:13887] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vegas12:13887] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun[0x403909]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [vegas12:13887] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Jun 2, 2014 at 2:24 PM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This fix &quot;orte_rtc_base_select: skip a RTC module if it has a zero
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; priority&quot; did not help and jenkins stilll fails as before.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The ompi was configured:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --with-platform=contrib/platform/mellanox/optimized
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --with-ompi-param-check --enable-picky --with-knem --with-mxm --with-fca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The run was on single node:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun -np 8 -mca btl sm,tcp /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] [ 0] /lib64/libpthread.so.0[0x3937c0f500]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] [ 1] /lib64/libc.so.6(fgets+0x2d)[0x3937466f2d]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] [ 2] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_rtc_freq.so(+0x1f3f)[0x7ffff41f5f3f]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] [ 3] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_rtc_freq.so(+0x279b)[0x7ffff41f679b]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] [ 4] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-rte.so.0(orte_rtc_base_select+0xe6)[0x7ffff7ddc036]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] [ 5] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_ess_hnp.so(+0x4056)[0x7ffff725b056]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] [ 6] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-rte.so.0(orte_init+0x174)[0x7ffff7d97254]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] [ 7] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(orterun+0x863)[0x404613]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] [ 8] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(main+0x20)[0x4039e4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] [10] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun[0x403909]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [vegas12:13834] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mon, Jun 2, 2014 at 10:19 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Mike and Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; i could not find a simple workaround.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for the time being, i commited r31926 and invite those who face a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; similar issue to use the following workaround :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export OMPI_MCA_rtc_freq_priority=0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /* or mpirun --mca rtc_freq_priority 0 ... */
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mon, Jun 2, 2014 at 3:45 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; in orte/mca/rtc/freq/rtc_freq.c at line 187
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; fp = fopen(filename, &quot;r&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and filename is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;/sys/devices/system/cpu/cpu0/cpufreq/scaling_governor&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; there is no error check, so if fp is NULL, orte_getline() will call
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; fgets() that will crash.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14939.php">http://www.open-mpi.org/community/lists/devel/2014/06/14939.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14945.php">http://www.open-mpi.org/community/lists/devel/2014/06/14945.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14947.php">http://www.open-mpi.org/community/lists/devel/2014/06/14947.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14948.php">http://www.open-mpi.org/community/lists/devel/2014/06/14948.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14949.php">http://www.open-mpi.org/community/lists/devel/2014/06/14949.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14950/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14951.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14949.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>In reply to:</strong> <a href="14949.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14951.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14951.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
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
