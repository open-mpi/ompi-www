<?
$subject_val = "[OMPI users] OpenMPI 1.6.3 problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 24 15:20:38 2013" -->
<!-- isoreceived="20130924192038" -->
<!-- sent="Tue, 24 Sep 2013 19:20:36 +0000" -->
<!-- isosent="20130924192036" -->
<!-- name="Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor" -->
<!-- email="clifton.W.bryan_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.6.3 problem" -->
<!-- id="8CCCC747FD74954AB8E26B1F2EFBA6E2078E72C4_at_MS-EX2VKS.erdc.dren.mil" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.6.3 problem<br>
<strong>From:</strong> Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor (<em>clifton.W.bryan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-24 15:20:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22718.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>Previous message:</strong> <a href="22716.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22718.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>Reply:</strong> <a href="22718.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>Reply:</strong> <a href="22719.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>Maybe reply:</strong> <a href="22722.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p><p>We are having problems with OpenMPI 1.6.3 - it gives the below error message when trying to run:
<br>
<p><p><p><p><p>$ mpirun -np 32 ./mpi_test.x
<br>
<p><p><p>--------------------------------------------------------------------------
<br>
<p><p><p>WARNING: It appears that your OpenFabrics subsystem is configured to only allow registering part of your physical memory.  This can cause MPI jobs to run with erratic performance, hang, and/or crash.
<br>
<p><p><p><p><p>This may be caused by your OpenFabrics vendor limiting the amount of physical memory that can be registered.  You should investigate the relevant Linux kernel module parameters that control how much physical memory can be registered, and increase them to allow registering all physical memory on your machine.
<br>
<p><p><p><p><p>See this Open MPI FAQ item for more information on these Linux kernel module
<br>
<p><p><p>parameters:
<br>
<p><p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a> &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>&gt;
<br>
<p><p><p><p><p>&nbsp;&nbsp;Local host:              akutilm-0006.ors.hpc.mil
<br>
<p><p><p>&nbsp;&nbsp;Registerable memory:     131072 MiB
<br>
<p><p><p>&nbsp;&nbsp;Total memory:            258542 MiB
<br>
<p><p><p><p><p>Your MPI job will continue, but may be behave poorly and/or hang.
<br>
<p><p><p>--------------------------------------------------------------------------
<br>
<p><p><p>akutilm-0006.ors.hpc.mil
<br>
<p><p><p>akutilm-0006.ors.hpc.mil
<br>
<p><p><p>[akutilm-0006.ors.hpc.mil:10970] 31 more processes have sent help message help-mpi-btl-openib.txt / reg mem limit low [akutilm-0006.ors.hpc.mil:10970] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<p><p><p><p><p>Openmpi 1.4.3 works fine.
<br>
<p><p><p><p><p>Any help would be greatly appreciated.
<br>
<p><p><p><p><p>Thanks,
<br>
<p><p><p>Clif
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22717/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22718.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>Previous message:</strong> <a href="22716.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22718.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>Reply:</strong> <a href="22718.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>Reply:</strong> <a href="22719.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>Maybe reply:</strong> <a href="22722.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
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
