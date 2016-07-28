<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 01:32:47 2010" -->
<!-- isoreceived="20101118063247" -->
<!-- sent="Thu, 18 Nov 2010 06:32:37 +0000" -->
<!-- isosent="20101118063237" -->
<!-- name="Chris Jewell" -->
<!-- email="chris.jewell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="34DA4D1A-4F11-40FA-AA18-6956A6ADA470_at_warwick.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinDDEGBw4PXzrKDvnwFqig-pPam+gbHC87hWGSd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts<br>
<strong>From:</strong> Chris Jewell (<em>chris.jewell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 01:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14822.php">George Markomanolis: "[OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages"</a>
<li><strong>Previous message:</strong> <a href="14820.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>In reply to:</strong> <a href="14817.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14825.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14825.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps if someone could run this test again with --report-bindings --leave-session-attached and provide -all- output we could verify that analysis and clear up the confusion?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, however I bet you we still won't see output.
</span><br>
<p>Actually, it seems we do get more output!  Results of 'qsub -pe mpi 8 -binding linear:2 myScript.com'
<br>
<p>with
<br>
<p>'mpirun -mca ras_gridengine_verbose 100 -report-bindings --leave-session-attached -bycore -bind-to-core ./unterm'
<br>
<p>[exec1:06504] System has detected external process binding to cores 0028
<br>
[exec1:06504] ras:gridengine: JOB_ID: 59467
<br>
[exec1:06504] ras:gridengine: PE_HOSTFILE: /usr/sge/default/spool/exec1/active_jobs/59467.1/pe_hostfile
<br>
[exec1:06504] ras:gridengine: exec1.cluster.stats.local: PE_HOSTFILE shows slots=2
<br>
[exec1:06504] ras:gridengine: exec3.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec1:06504] ras:gridengine: exec2.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec1:06504] ras:gridengine: exec7.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec1:06504] ras:gridengine: exec4.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec1:06504] ras:gridengine: exec5.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec1:06504] ras:gridengine: exec6.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec1:06504] [[59608,0],0] odls:default:fork binding child [[59608,1],0] to cpus 0008
<br>
[exec1:06504] [[59608,0],0] odls:default:fork binding child [[59608,1],1] to cpus 0020
<br>
[exec3:20248] [[59608,0],1] odls:default:fork binding child [[59608,1],2] to cpus 0008
<br>
[exec4:26792] [[59608,0],4] odls:default:fork binding child [[59608,1],5] to cpus 0001
<br>
[exec2:32462] [[59608,0],2] odls:default:fork binding child [[59608,1],3] to cpus 0001
<br>
[exec7:09833] [[59608,0],3] odls:default:fork binding child [[59608,1],4] to cpus 0002
<br>
[exec5:10834] [[59608,0],5] odls:default:fork binding child [[59608,1],6] to cpus 0001
<br>
[exec6:04230] [[59608,0],6] odls:default:fork binding child [[59608,1],7] to cpus 0001
<br>
<p>AHHA!  Now I get the following if I use 'qsub -pe mpi 8 -binding linear:1 myScript.com' with the above mpirun command:
<br>
<p>[exec1:06552] System has detected external process binding to cores 0020
<br>
[exec1:06552] ras:gridengine: JOB_ID: 59468
<br>
[exec1:06552] ras:gridengine: PE_HOSTFILE: /usr/sge/default/spool/exec1/active_jobs/59468.1/pe_hostfile
<br>
[exec1:06552] ras:gridengine: exec1.cluster.stats.local: PE_HOSTFILE shows slots=2
<br>
[exec1:06552] ras:gridengine: exec3.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec1:06552] ras:gridengine: exec2.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec1:06552] ras:gridengine: exec7.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec1:06552] ras:gridengine: exec4.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec1:06552] ras:gridengine: exec5.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
[exec1:06552] ras:gridengine: exec6.cluster.stats.local: PE_HOSTFILE shows slots=1
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to start the specified application as it encountered an error:
<br>
<p>Error name: Unknown error: 1
<br>
Node: exec1
<br>
<p>when attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
[exec1:06552] [[59432,0],0] odls:default:fork binding child [[59432,1],0] to cpus 0020
<br>
--------------------------------------------------------------------------
<br>
Not enough processors were found on the local host to meet the requested
<br>
binding action:
<br>
<p>&nbsp;&nbsp;Local host:        exec1
<br>
&nbsp;&nbsp;Action requested:  bind-to-core
<br>
&nbsp;&nbsp;Application name:  ./unterm
<br>
<p>Please revise the request and try again.
<br>
--------------------------------------------------------------------------
<br>
[exec4:26816] [[59432,0],4] odls:default:fork binding child [[59432,1],5] to cpus 0001
<br>
[exec3:20345] [[59432,0],1] odls:default:fork binding child [[59432,1],2] to cpus 0020
<br>
[exec2:32486] [[59432,0],2] odls:default:fork binding child [[59432,1],3] to cpus 0001
<br>
[exec7:09921] [[59432,0],3] odls:default:fork binding child [[59432,1],4] to cpus 0002
<br>
[exec6:04257] [[59432,0],6] odls:default:fork binding child [[59432,1],7] to cpus 0001
<br>
[exec5:10861] [[59432,0],5] odls:default:fork binding child [[59432,1],6] to cpus 0001
<br>
<p><p><p>Hope that helps clear up the confusion!  Please say it does, my head hurts...
<br>
<p>Chris
<br>
<p><p><pre>
--
Dr Chris Jewell
Department of Statistics
University of Warwick
Coventry
CV4 7AL
UK
Tel: +44 (0)24 7615 0778
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14822.php">George Markomanolis: "[OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages"</a>
<li><strong>Previous message:</strong> <a href="14820.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>In reply to:</strong> <a href="14817.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14825.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14825.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
