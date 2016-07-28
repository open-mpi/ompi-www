<?
$subject_val = "Re: [OMPI devel] trunk failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 08:03:13 2014" -->
<!-- isoreceived="20140602120313" -->
<!-- sent="Mon, 2 Jun 2014 15:03:11 +0300" -->
<!-- isosent="20140602120311" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk failure" -->
<!-- id="CAAO1KyYqu+i9KBpxRDQW6pOL5gD7r+2+SMcCaCqJUqn2e3-opw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5t_iafO6=fCpSrd3mb1Q525YdBedAzjqm2KSsWX255dyg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-06-02 08:03:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14949.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14947.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>In reply to:</strong> <a href="14947.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14949.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14949.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
The jenkins took your commit and applied automatically, I tried with mca
<br>
flag later.
<br>
Also, we don`t have /sys/devices/system/cpu/cpu0/cpufreq/scaling_governor
<br>
in our system, the cpuspeed daemon is off by default on all our nodes.
<br>
<p><p>Regards
<br>
M
<br>
<p><p>On Mon, Jun 2, 2014 at 3:00 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mike,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; did you apply the patch *and* mpirun --mca rtc_freq_priority 0 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *both* are required (--mca rtc_freq_priority 0 is not enough without the
</span><br>
<span class="quotelev1">&gt; patch)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you please confirm there is no /sys/devices/system/cpu/cpu0/cpufreq/scaling_governor
</span><br>
<span class="quotelev1">&gt; (pseudo) file on your system ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if this still does not work for you, then this might be a different issue
</span><br>
<span class="quotelev1">&gt; i was unable to reproduce.
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
<span class="quotelev1">&gt; On Mon, Jun 2, 2014 at 8:26 PM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; more info, specifying --mca rtc_freq_priority 0 explicitly, generates
</span><br>
<span class="quotelev2">&gt;&gt; different kind of fail:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; -np 8 -mca btl sm,tcp --mca rtc_freq_priority 0
</span><br>
<span class="quotelev2">&gt;&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi
</span><br>
<span class="quotelev2">&gt;&gt; [vegas12:13887] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [vegas12:13887] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [vegas12:13887] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [vegas12:13887] Failing at address: 0x20
</span><br>
<span class="quotelev2">&gt;&gt; [vegas12:13887] [ 0] /lib64/libpthread.so.0[0x3937c0f500]
</span><br>
<span class="quotelev2">&gt;&gt; [vegas12:13887] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-rte.so.0(orte_plm_base_post_launch+0x90)[0x7ffff7dcbe50]
</span><br>
<span class="quotelev2">&gt;&gt; [vegas12:13887] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-pal.so.0(opal_libevent2021_event_base_loop+0x8bc)[0x7ffff7b1076c]
</span><br>
<span class="quotelev2">&gt;&gt; [vegas12:13887] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(orterun+0x126d)[0x40501d]
</span><br>
<span class="quotelev2">&gt;&gt; [vegas12:13887] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(main+0x20)[0x4039e4]
</span><br>
<span class="quotelev2">&gt;&gt; [vegas12:13887] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]
</span><br>
<span class="quotelev2">&gt;&gt; [vegas12:13887] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun[0x403909]
</span><br>
<span class="quotelev2">&gt;&gt; [vegas12:13887] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jun 2, 2014 at 2:24 PM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This fix &quot;orte_rtc_base_select: skip a RTC module if it has a zero
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priority&quot; did not help and jenkins stilll fails as before.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ompi was configured:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-platform=contrib/platform/mellanox/optimized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-ompi-param-check --enable-picky --with-knem --with-mxm --with-fca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The run was on single node:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun -np 8 -mca btl sm,tcp /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] Failing at address: (nil)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] [ 0] /lib64/libpthread.so.0[0x3937c0f500]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] [ 1] /lib64/libc.so.6(fgets+0x2d)[0x3937466f2d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] [ 2] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_rtc_freq.so(+0x1f3f)[0x7ffff41f5f3f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] [ 3] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_rtc_freq.so(+0x279b)[0x7ffff41f679b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] [ 4] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-rte.so.0(orte_rtc_base_select+0xe6)[0x7ffff7ddc036]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] [ 5] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_ess_hnp.so(+0x4056)[0x7ffff725b056]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] [ 6] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-rte.so.0(orte_init+0x174)[0x7ffff7d97254]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] [ 7] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(orterun+0x863)[0x404613]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] [ 8] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(main+0x20)[0x4039e4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] [10] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun[0x403909]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [vegas12:13834] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Jun 2, 2014 at 10:19 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mike and Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i could not find a simple workaround.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for the time being, i commited r31926 and invite those who face a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; similar issue to use the following workaround :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export OMPI_MCA_rtc_freq_priority=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* or mpirun --mca rtc_freq_priority 0 ... */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Jun 2, 2014 at 3:45 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in orte/mca/rtc/freq/rtc_freq.c at line 187
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fp = fopen(filename, &quot;r&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and filename is &quot;/sys/devices/system/cpu/cpu0/cpufreq/scaling_governor&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; there is no error check, so if fp is NULL, orte_getline() will call
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fgets() that will crash.
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
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14939.php">http://www.open-mpi.org/community/lists/devel/2014/06/14939.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14945.php">http://www.open-mpi.org/community/lists/devel/2014/06/14945.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14947.php">http://www.open-mpi.org/community/lists/devel/2014/06/14947.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14948/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14949.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14947.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>In reply to:</strong> <a href="14947.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14949.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14949.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
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
