<?
$subject_val = "[OMPI devel] trunk failure";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  1 23:50:46 2014" -->
<!-- isoreceived="20140602035046" -->
<!-- sent="Mon, 2 Jun 2014 06:50:44 +0300" -->
<!-- isosent="20140602035044" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk failure" -->
<!-- id="CAAO1KybQNV0U0auKyM4iOt1CrPLMAhHSR5cBNzYzTKHP1q-ZBQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] trunk failure<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-01 23:50:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14935.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14933.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14935.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14935.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
The trunk hangs after following commits, seems 3-5,7 can be the ones.
<br>
Changes
<br>
<p>&nbsp;&nbsp;&nbsp;1. Java-oshmem: update examples
<br>
&nbsp;&nbsp;&nbsp;2. Java: update javadoc's install locations
<br>
&nbsp;&nbsp;&nbsp;3. Replace the PML barrier with an RTE barrier for now until we can come
<br>
&nbsp;&nbsp;&nbsp;up with a better solution for connectionless BTLs.
<br>
&nbsp;&nbsp;&nbsp;4. Per RFC:
<br>
&nbsp;&nbsp;&nbsp;5. Per RFC:
<br>
&nbsp;&nbsp;&nbsp;6. Cleanup the test so it is MPI correct
<br>
&nbsp;&nbsp;&nbsp;7. Cleanup compile issues - missing updates to some plm components and
<br>
&nbsp;&nbsp;&nbsp;the slurm ras component
<br>
<p>The SISGEGV used to print stacktrace, the real reason is a hang.
<br>
<p>*22:39:46* + timeout -s SIGSEGV 3m
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun
<br>
-np 8 /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi*22:39:47*
<br>
[vegas12:17297] *** Process received signal ****22:39:47*
<br>
[vegas12:17297] Signal: Segmentation fault (11)*22:39:47*
<br>
[vegas12:17297] Signal code: Address not mapped (1)*22:39:47*
<br>
[vegas12:17297] Failing at address: (nil)*22:39:47* [vegas12:17297] [
<br>
0] /lib64/libpthread.so.0[0x3937c0f500]*22:39:47* [vegas12:17297] [ 1]
<br>
/lib64/libc.so.6(fgets+0x2d)[0x3937466f2d]*22:39:47* [vegas12:17297] [
<br>
2] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_rtc_freq.so(+0x1f3f)[0x7ffff41f5f3f]*22:39:47*
<br>
[vegas12:17297] [ 3]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_rtc_freq.so(+0x279b)[0x7ffff41f679b]*22:39:47*
<br>
[vegas12:17297] [ 4]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-rte.so.0(orte_rtc_base_select+0xd5)[0x7ffff7ddc025]*22:39:47*
<br>
[vegas12:17297] [ 5]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_ess_hnp.so(+0x4056)[0x7ffff725b056]*22:39:47*
<br>
[vegas12:17297] [ 6]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libopen-rte.so.0(orte_init+0x174)[0x7ffff7d97254]*22:39:47*
<br>
[vegas12:17297] [ 7]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(orterun+0x863)[0x404613]*22:39:47*
<br>
[vegas12:17297] [ 8]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun(main+0x20)[0x4039e4]*22:39:47*
<br>
[vegas12:17297] [ 9]
<br>
/lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]*22:39:47*
<br>
[vegas12:17297] [10]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun[0x403909]*22:39:47*
<br>
[vegas12:17297] *** End of error message ***
<br>
<p><p>M
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14934/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14935.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Previous message:</strong> <a href="14933.php">Gilles Gouaillardet: "Re: [OMPI devel] OpenIB/usNIC errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14935.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
<li><strong>Reply:</strong> <a href="14935.php">Ralph Castain: "Re: [OMPI devel] trunk failure"</a>
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
