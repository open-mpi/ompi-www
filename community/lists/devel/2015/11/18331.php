<?
$subject_val = "[OMPI devel] Broken master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 09:13:57 2015" -->
<!-- isoreceived="20151105141357" -->
<!-- sent="Thu, 5 Nov 2015 14:13:53 +0000" -->
<!-- isosent="20151105141353" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Broken master" -->
<!-- id="1446731955700.55805_at_nvidia.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Broken master<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-05 09:13:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18332.php">Ralph Castain: "Re: [OMPI devel] Broken master"</a>
<li><strong>Previous message:</strong> <a href="18330.php">Rolf vandeVaart (via Doodle): "[OMPI devel] Open MPI Weely Meetings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18332.php">Ralph Castain: "Re: [OMPI devel] Broken master"</a>
<li><strong>Reply:</strong> <a href="18332.php">Ralph Castain: "Re: [OMPI devel] Broken master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph:
<br>
<p>Just an FYI that the following change broke the use of --host on master last night.
<br>
<p><p>[rvandevaart_at_drossetti-ivy4 ompi-master-rolfv]$ git bisect bad
<br>
169c44258d5c98870872b77166390d4f9a81105e is the first bad commit
<br>
commit 169c44258d5c98870872b77166390d4f9a81105e
<br>
Author: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Date:   Tue Nov 3 19:00:28 2015 -0800
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Fix missing check
<br>
<p><p>[rvandevaart_at_drossetti-ivy4 src]$ mpirun -host drossetti-ivy4 -np 2 MPI_Isend_ator_c
<br>
[drossetti-ivy4:28764] *** Process received signal ***
<br>
[drossetti-ivy4:28764] Signal: Segmentation fault (11)
<br>
[drossetti-ivy4:28764] Signal code: Address not mapped (1)
<br>
[drossetti-ivy4:28764] Failing at address: 0x347976692d69
<br>
[drossetti-ivy4:28764] [ 0] /lib64/libpthread.so.0(+0xf710)[0x7f633fa42710]
<br>
[drossetti-ivy4:28764] [ 1] /ivylogin/home/rvandevaart/ompi-repos/ompi-master-rolfv/dbg/lib/libopen-pal.so.0(+0x7b1c2)[0x7f63409821c2]
<br>
[drossetti-ivy4:28764] [ 2] /ivylogin/home/rvandevaart/ompi-repos/ompi-master-rolfv/dbg/lib/libopen-pal.so.0(opal_argv_split+0x25)[0x7f63409821fb]
<br>
[drossetti-ivy4:28764] [ 3] /ivylogin/home/rvandevaart/ompi-repos/ompi-master-rolfv/dbg/lib/libopen-rte.so.0(orte_util_add_dash_host_nodes+0x143)[0x7f6340c82830]
<br>
[drossetti-ivy4:28764] [ 4] /ivylogin/home/rvandevaart/ompi-repos/ompi-master-rolfv/dbg/lib/libopen-rte.so.0(orte_plm_base_setup_virtual_machine+0x1008)[0x7f6340cccc86]
<br>
[drossetti-ivy4:28764] [ 5] /ivylogin/home/rvandevaart/ompi-repos/ompi-master-rolfv/dbg/lib/openmpi/mca_plm_rsh.so(+0x68b1)[0x7f633dc008b1]
<br>
[drossetti-ivy4:28764] [ 6] /ivylogin/home/rvandevaart/ompi-repos/ompi-master-rolfv/dbg/lib/libopen-pal.so.0(opal_libevent2022_event_base_loop+0x53c)[0x7f63409a070c]
<br>
[drossetti-ivy4:28764] [ 7] mpirun[0x4050a1]
<br>
[drossetti-ivy4:28764] [ 8] mpirun[0x4034a4]
<br>
[drossetti-ivy4:28764] [ 9] /lib64/libc.so.6(__libc_start_main+0xfd)[0x7f633f6bdd1d]
<br>
[drossetti-ivy4:28764] [10] mpirun[0x4033c9]
<br>
[drossetti-ivy4:28764] *** End of error message ***
<br>
Segmentation fault
<br>
[rvandevaart_at_drossetti-ivy4 src]$
<br>
<p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18331/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18332.php">Ralph Castain: "Re: [OMPI devel] Broken master"</a>
<li><strong>Previous message:</strong> <a href="18330.php">Rolf vandeVaart (via Doodle): "[OMPI devel] Open MPI Weely Meetings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18332.php">Ralph Castain: "Re: [OMPI devel] Broken master"</a>
<li><strong>Reply:</strong> <a href="18332.php">Ralph Castain: "Re: [OMPI devel] Broken master"</a>
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
