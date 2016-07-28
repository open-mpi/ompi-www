<?
$subject_val = "Re: [OMPI devel] trunk failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 00:19:49 2014" -->
<!-- isoreceived="20140602041949" -->
<!-- sent="Sun, 1 Jun 2014 21:19:45 -0700" -->
<!-- isosent="20140602041945" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk failure" -->
<!-- id="1E021CCC-A3E6-4EF7-A504-A2AB4FA3537B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2C8A1058-4662-453C-ABEC-4DAAF3B2B077_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-06-02 00:19:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14937.php">Gilles Gouaillardet: "[OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="14935.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>In reply to:</strong> <a href="14935.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14938.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14938.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's merrily passing all my MTT tests, so it appears to be fine for me.
<br>
<p>It would help if you provided *some* information along with these reports - like how was this configured, what environment are you running under, how many nodes were you using, etc. Otherwise, it's a totally useless report.
<br>
<p><p>On Jun 1, 2014, at 9:04 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm afraid that tells me absolutely nothing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 1, 2014, at 8:50 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; The trunk hangs after following commits, seems 3-5,7 can be the ones.
</span><br>
<span class="quotelev2">&gt;&gt; Changes
</span><br>
<span class="quotelev2">&gt;&gt; Java-oshmem: update examples 
</span><br>
<span class="quotelev2">&gt;&gt; Java: update javadoc's install locations 
</span><br>
<span class="quotelev2">&gt;&gt; Replace the PML barrier with an RTE barrier for now until we can come up with a better solution for connectionless BTLs.
</span><br>
<span class="quotelev2">&gt;&gt; Per RFC:
</span><br>
<span class="quotelev2">&gt;&gt; Per RFC:
</span><br>
<span class="quotelev2">&gt;&gt; Cleanup the test so it is MPI correct
</span><br>
<span class="quotelev2">&gt;&gt; Cleanup compile issues - missing updates to some plm components and the slurm ras component
</span><br>
<span class="quotelev2">&gt;&gt; The SISGEGV used to print stacktrace, the real reason is a hang.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:46 + timeout -s SIGSEGV 3m /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun -np 8 /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] [ 0] /lib64/libpthread.so.0[0x3937c0f500]
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] [ 1] /lib64/libc.so.6(fgets+0x2d)[0x3937466f2d]
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] [ 2] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_rtc_freq.so(+0x1f3f)[0x7ffff41f5f3f]
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] [ 3] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_rtc_freq.so(+0x279b)[0x7ffff41f679b]
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] [ 4] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-rte.so.0(orte_rtc_base_select+0xd5)[0x7ffff7ddc025]
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] [ 5] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_ess_hnp.so(+0x4056)[0x7ffff725b056]
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] [ 6] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-rte.so.0(orte_init+0x174)[0x7ffff7d97254]
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] [ 7] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(orterun+0x863)[0x404613]
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] [ 8] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(main+0x20)[0x4039e4]
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] [10] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun[0x403909]
</span><br>
<span class="quotelev2">&gt;&gt; 22:39:47 [vegas12:17297] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; M
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14934.php">http://www.open-mpi.org/community/lists/devel/2014/06/14934.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14936/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14937.php">Gilles Gouaillardet: "[OMPI devel] btl/scif: SIGSEGV in MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="14935.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>In reply to:</strong> <a href="14935.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14938.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14938.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk failure"</a>
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
