<?
$subject_val = "Re: [OMPI devel] trunk failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 07:24:47 2014" -->
<!-- isoreceived="20140602112447" -->
<!-- sent="Mon, 2 Jun 2014 14:24:45 +0300" -->
<!-- isosent="20140602112445" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk failure" -->
<!-- id="CAAO1KybHPfVYG+cAN60L9WTAii2NAkUZENOy2E3yqqmU91EPYw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5vFkcm-jUJy890XG_f=eiYqdy+26o0o1Qq0mMiMkTt0gA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-06-02 07:24:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14945.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14943.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14939.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14945.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14945.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
This fix &quot;orte_rtc_base_select: skip a RTC module if it has a zero
<br>
priority&quot; did not help and jenkins stilll fails as before.
<br>
The ompi was configured:
<br>
--with-platform=contrib/platform/mellanox/optimized --with-ompi-param-check
<br>
--enable-picky --with-knem --with-mxm --with-fca
<br>
<p>The run was on single node:
<br>
<p>$/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun
<br>
-np 8 -mca btl sm,tcp
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi
<br>
[vegas12:13834] *** Process received signal ***
<br>
[vegas12:13834] Signal: Segmentation fault (11)
<br>
[vegas12:13834] Signal code: Address not mapped (1)
<br>
[vegas12:13834] Failing at address: (nil)
<br>
[vegas12:13834] [ 0] /lib64/libpthread.so.0[0x3937c0f500]
<br>
[vegas12:13834] [ 1] /lib64/libc.so.6(fgets+0x2d)[0x3937466f2d]
<br>
[vegas12:13834] [ 2]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_rtc_freq.so(+0x1f3f)[0x7ffff41f5f3f]
<br>
[vegas12:13834] [ 3]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_rtc_freq.so(+0x279b)[0x7ffff41f679b]
<br>
[vegas12:13834] [ 4]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-rte.so.0(orte_rtc_base_select+0xe6)[0x7ffff7ddc036]
<br>
[vegas12:13834] [ 5]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_ess_hnp.so(+0x4056)[0x7ffff725b056]
<br>
[vegas12:13834] [ 6]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-rte.so.0(orte_init+0x174)[0x7ffff7d97254]
<br>
[vegas12:13834] [ 7]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(orterun+0x863)[0x404613]
<br>
[vegas12:13834] [ 8]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(main+0x20)[0x4039e4]
<br>
[vegas12:13834] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]
<br>
[vegas12:13834] [10]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun[0x403909]
<br>
[vegas12:13834] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
<p><p><p><p>On Mon, Jun 2, 2014 at 10:19 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mike and Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i could not find a simple workaround.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for the time being, i commited r31926 and invite those who face a similar
</span><br>
<span class="quotelev1">&gt; issue to use the following workaround :
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
<span class="quotelev1">&gt; On Mon, Jun 2, 2014 at 3:45 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in orte/mca/rtc/freq/rtc_freq.c at line 187
</span><br>
<span class="quotelev2">&gt;&gt; fp = fopen(filename, &quot;r&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; and filename is &quot;/sys/devices/system/cpu/cpu0/cpufreq/scaling_governor&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; there is no error check, so if fp is NULL, orte_getline() will call
</span><br>
<span class="quotelev2">&gt;&gt; fgets() that will crash.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14939.php">http://www.open-mpi.org/community/lists/devel/2014/06/14939.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14944/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14945.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14943.php">Gilles Gouaillardet: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14939.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14945.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14945.php">Mike Dubman: "Re: [OMPI devel] trunk failure"</a>
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
