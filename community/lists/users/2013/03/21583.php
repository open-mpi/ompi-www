<?
$subject_val = "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 21 10:47:34 2013" -->
<!-- isoreceived="20130321144734" -->
<!-- sent="Thu, 21 Mar 2013 07:47:26 -0700" -->
<!-- isosent="20130321144726" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8" -->
<!-- id="51FF3D08-0A46-4F12-B760-5D89301D6690_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFCD790EDF.36741102-ON49257B35.001DCF62-49257B35.001E7408_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-21 10:47:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21584.php">Gus Correa: "[OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="21582.php">Siegmar Gross: "[OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175"</a>
<li><strong>In reply to:</strong> <a href="21578.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21589.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21589.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...okay, let's try one more thing. Can you please add the following to your command line:
<br>
<p>-mca ras_base_verbose 5 -mca rmaps_base_verbose 5
<br>
<p>Appreciate your patience. For some reason, we are losing your head node from the allocation when we start trying to map processes. I'm trying to track down where this is happening so we can figure out why.
<br>
<p><p>On Mar 20, 2013, at 10:32 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the result on patched openmpi-1.7rc8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -v -np 8 -hostfile pbs_hosts -x OMP_NUM_THREADS
</span><br>
<span class="quotelev1">&gt; --display-allocation /home/mishima/Ducom/testbed/mPre m02-ld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node06  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev1">&gt; Data for node: node05  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; [node06.cluster:21149] HOSTFILE: CHECKING FILE NODE node06 VS LIST NODE
</span><br>
<span class="quotelev1">&gt; node05
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A hostfile was provided that contains at least one node not
</span><br>
<span class="quotelev1">&gt; present in the allocation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  hostfile:  pbs_hosts
</span><br>
<span class="quotelev1">&gt;  node:      node06
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are operating in a resource-managed environment, then only
</span><br>
<span class="quotelev1">&gt; nodes that are in the allocation can be used in the hostfile. You
</span><br>
<span class="quotelev1">&gt; may find relative node syntax to be a useful alternative to
</span><br>
<span class="quotelev1">&gt; specifying absolute node names see the orte_hosts man page for
</span><br>
<span class="quotelev1">&gt; further information.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="21584.php">Gus Correa: "[OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="21582.php">Siegmar Gross: "[OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175"</a>
<li><strong>In reply to:</strong> <a href="21578.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21589.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21589.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
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
