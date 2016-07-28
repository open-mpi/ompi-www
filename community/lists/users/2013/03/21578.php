<?
$subject_val = "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 21 01:32:43 2013" -->
<!-- isoreceived="20130321053243" -->
<!-- sent="Thu, 21 Mar 2013 14:32:21 +0900" -->
<!-- isosent="20130321053221" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8" -->
<!-- id="OFCD790EDF.36741102-ON49257B35.001DCF62-49257B35.001E7408_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="88ECE2FC-9922-4CC6-8C22-9570E49E8BEE_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20modified%20hostfile%20does%20not%20work%20with%20openmpi1.7rc8"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-03-21 01:32:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21579.php">Bruno Cramer: "Re: [OMPI users] mpirun error output"</a>
<li><strong>Previous message:</strong> <a href="21577.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21577.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21583.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21583.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Here is the result on patched openmpi-1.7rc8.
<br>
<p>mpirun -v -np 8 -hostfile pbs_hosts -x OMP_NUM_THREADS
<br>
--display-allocation /home/mishima/Ducom/testbed/mPre m02-ld
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: node06  Num slots: 4    Max slots: 0
<br>
&nbsp;Data for node: node05  Num slots: 4    Max slots: 0
<br>
<p>=================================================================
<br>
[node06.cluster:21149] HOSTFILE: CHECKING FILE NODE node06 VS LIST NODE
<br>
node05
<br>
--------------------------------------------------------------------------
<br>
A hostfile was provided that contains at least one node not
<br>
present in the allocation:
<br>
<p>&nbsp;&nbsp;hostfile:  pbs_hosts
<br>
&nbsp;&nbsp;node:      node06
<br>
<p>If you are operating in a resource-managed environment, then only
<br>
nodes that are in the allocation can be used in the hostfile. You
<br>
may find relative node syntax to be a useful alternative to
<br>
specifying absolute node names see the orte_hosts man page for
<br>
further information.
<br>
--------------------------------------------------------------------------
<br>
<p>Regards,
<br>
Tetsuya
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21579.php">Bruno Cramer: "Re: [OMPI users] mpirun error output"</a>
<li><strong>Previous message:</strong> <a href="21577.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21577.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21583.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21583.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
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
