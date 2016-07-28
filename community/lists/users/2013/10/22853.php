<?
$subject_val = "[OMPI users] MPI SGE and IB don't work together";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 28 09:58:38 2013" -->
<!-- isoreceived="20131028135838" -->
<!-- sent="Mon, 28 Oct 2013 13:58:35 +0000" -->
<!-- isosent="20131028135835" -->
<!-- name="Luigi  Cavallo" -->
<!-- email="Luigi.Cavallo_at_[hidden]" -->
<!-- subject="[OMPI users] MPI SGE and IB don't work together" -->
<!-- id="1FD0DF2D-5CBC-43FB-8746-E3D5700DE574_at_kaust.edu.sa" -->
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
<strong>Subject:</strong> [OMPI users] MPI SGE and IB don't work together<br>
<strong>From:</strong> Luigi  Cavallo (<em>Luigi.Cavallo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-28 09:58:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22854.php">Luigi  Cavallo: "[OMPI users] How openmpi processes communicate on a single blade"</a>
<li><strong>Previous message:</strong> <a href="22852.php">Luis Kornblueh: "[OMPI users] RDMA question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22856.php">Ralph Castain: "Re: [OMPI users] MPI SGE and IB don't work together"</a>
<li><strong>Reply:</strong> <a href="22856.php">Ralph Castain: "Re: [OMPI users] MPI SGE and IB don't work together"</a>
<li><strong>Reply:</strong> <a href="22857.php">Reuti: "Re: [OMPI users] MPI SGE and IB don't work together"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>we are facing problems with openmpi under sge on a cluster equipped with QLogic IB HCAs.  Working off sge, openmpi works perfectly, we can dispatch the job as we want, no warning/error messages at all.  If we do the same under sge, even the hello-world program crashes. The main issue is PSM related, as you can see from the error message attached at the end of this email.  We solved this issue by switching off  PSM, basically using 2 possible strategies. Either adding --mca  mtl ^psm  at the mpirun command, or setting the env variable OMPI_MCA_pml ob1.  This way jobs under SGE runs properly.  Any preference for one or the two options we found to switch off PSM ?
<br>
<p>However, we would really like to understand why we have this PSM error when we run under SGE, since the IB performance without PSM is of course deteriorated.  We asked SGE users list, but nothing smart from them.  Wondering if this list can help.
<br>
<p>Thanks,
<br>
Luigi
<br>
<p><p>--------- BEGINNING OF error file from sge ------------
<br>
Loading module gcc version 4.6.0
<br>
Initial gcc version: 4.4.6
<br>
Current gcc version: 4.6.0
<br>
Loading module icc version 11.1.075
<br>
Current icc version: none
<br>
Current icc version: 11.1
<br>
Loading module ifort version 11.1.075
<br>
Current ifort version: none
<br>
Current ifort version: 11.1
<br>
Loading module for compilers-extra
<br>
Extra compiler modules now loaded
<br>
Loading module mpi-openmpi version 1.4.3-icc-11.1
<br>
Current mpi-openmpi version: 1.4.3
<br>
[c1bay2:31113] mca: base: component_find: unable to open /opt/share/mpi-openmpi/1.4.3-icc-11.1/el6/x86_64/lib/openmpi/mca_ess_lsf: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
<br>
[c1bay2:31113] mca: base: component_find: unable to open /opt/share/mpi-openmpi/1.4.3-icc-11.1/el6/x86_64/lib/openmpi/mca_plm_lsf: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
<br>
[c1bay2:31113] mca: base: component_find: unable to open /opt/share/mpi-openmpi/1.4.3-icc-11.1/el6/x86_64/lib/openmpi/mca_ras_lsf: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
<br>
c1bay2.31114Driver initialization failure on /dev/ipath (err=23)
<br>
c1bay2.31116Driver initialization failure on /dev/ipath (err=23)
<br>
c1bay2.31117Driver initialization failure on /dev/ipath (err=23)
<br>
--------------------------------------------------------------------------
<br>
PSM was unable to open an endpoint. Please make sure that the network link is
<br>
active on the node and the hardware is functioning.
<br>
<p>&nbsp;Error: Failure in initializing endpoint
<br>
--------------------------------------------------------------------------
<br>
c1bay2.31115Driver initialization failure on /dev/ipath (err=23)
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;PML add procs failed
<br>
&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
[c1bay2:31114] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
<p>--------- END OF error file from sge ------------
<br>
<p><p>________________________________
<br>
<p>This message and its contents including attachments are intended solely for the original recipient. If you are not the intended recipient or have received this message in error, please notify me immediately and delete this message from your computer system. Any unauthorized use or distribution is prohibited. Please consider the environment before printing this email.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22853/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22854.php">Luigi  Cavallo: "[OMPI users] How openmpi processes communicate on a single blade"</a>
<li><strong>Previous message:</strong> <a href="22852.php">Luis Kornblueh: "[OMPI users] RDMA question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22856.php">Ralph Castain: "Re: [OMPI users] MPI SGE and IB don't work together"</a>
<li><strong>Reply:</strong> <a href="22856.php">Ralph Castain: "Re: [OMPI users] MPI SGE and IB don't work together"</a>
<li><strong>Reply:</strong> <a href="22857.php">Reuti: "Re: [OMPI users] MPI SGE and IB don't work together"</a>
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
