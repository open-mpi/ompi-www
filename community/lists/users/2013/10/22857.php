<?
$subject_val = "Re: [OMPI users] MPI SGE and IB don't work together";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 28 10:38:33 2013" -->
<!-- isoreceived="20131028143833" -->
<!-- sent="Mon, 28 Oct 2013 15:38:24 +0100" -->
<!-- isosent="20131028143824" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI SGE and IB don't work together" -->
<!-- id="51FCD3A8-2D5D-429A-A2C7-B7AE1352C6CA_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1FD0DF2D-5CBC-43FB-8746-E3D5700DE574_at_kaust.edu.sa" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI SGE and IB don't work together<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-28 10:38:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22858.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL]  RDMA question"</a>
<li><strong>Previous message:</strong> <a href="22856.php">Ralph Castain: "Re: [OMPI users] MPI SGE and IB don't work together"</a>
<li><strong>In reply to:</strong> <a href="22853.php">Luigi  Cavallo: "[OMPI users] MPI SGE and IB don't work together"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 28.10.2013 um 14:58 schrieb Luigi Cavallo:
<br>
<p><span class="quotelev1">&gt; we are facing problems with openmpi under sge on a cluster equipped with QLogic IB HCAs.  Working off sge, openmpi works perfectly, we can dispatch the job as we want, no warning/error messages at all.  If we do the same under sge, even the hello-world program crashes. The main issue is PSM related, as you can see from the error message attached at the end of this email.  We solved this issue by switching off  PSM, basically using 2 possible strategies. Either adding --mca  mtl ^psm  at the mpirun command, or setting the env variable OMPI_MCA_pml ob1.  This way jobs under SGE runs properly.  Any preference for one or the two options we found to switch off PSM ?
</span><br>
<p>So, Open MPI was build &quot;--with-sge&quot;? There is an option in the &quot;execd_params&quot; setting to increase the memory: S_MEMORYLOCKED, H_MEMORYLOCKED, S_LOCKS, H_LOCKS (`man sge_conf`) which is often necessary for IB.
<br>
<p><p><span class="quotelev1">&gt; However, we would really like to understand why we have this PSM error when we run under SGE, since the IB performance without PSM is of course deteriorated.  We asked SGE users list, but nothing smart from them.
</span><br>
<p><p>Which list do you refer to - the one at <a href="http://gridengine.org">http://gridengine.org</a>?
<br>
<p><p><span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; [c1bay2:31113] mca: base: component_find: unable to open /opt/share/mpi-openmpi/1.4.3-icc-11.1/el6/x86_64/lib/openmpi/mca_ras_lsf: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
</span><br>
<p>Is the same version of Open MPI available on all machines and the first one in $LD_LIBRARY_PATH resp. $PATH to be targeted?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; c1bay2.31114Driver initialization failure on /dev/ipath (err=23)
</span><br>
<span class="quotelev1">&gt; c1bay2.31116Driver initialization failure on /dev/ipath (err=23)
</span><br>
<span class="quotelev1">&gt; c1bay2.31117Driver initialization failure on /dev/ipath (err=23)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; PSM was unable to open an endpoint. Please make sure that the network link is
</span><br>
<span class="quotelev1">&gt; active on the node and the hardware is functioning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Error: Failure in initializing endpoint
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; c1bay2.31115Driver initialization failure on /dev/ipath (err=23)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [c1bay2:31114] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------- END OF error file from sge ------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This message and its contents including attachments are intended solely for the original recipient. If you are not the intended recipient or have received this message in error, please notify me immediately and delete this message from your computer system. Any unauthorized use or distribution is prohibited. Please consider the environment before printing this email.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22858.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL]  RDMA question"</a>
<li><strong>Previous message:</strong> <a href="22856.php">Ralph Castain: "Re: [OMPI users] MPI SGE and IB don't work together"</a>
<li><strong>In reply to:</strong> <a href="22853.php">Luigi  Cavallo: "[OMPI users] MPI SGE and IB don't work together"</a>
<!-- nextthread="start" -->
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
