<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 05:57:28 2010" -->
<!-- isoreceived="20101118105728" -->
<!-- sent="Thu, 18 Nov 2010 05:57:31 -0500" -->
<!-- isosent="20101118105731" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="4CE5069B.60502_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="34DA4D1A-4F11-40FA-AA18-6956A6ADA470_at_warwick.ac.uk" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 05:57:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14826.php">Hicham Mouline: "[OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14824.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14821.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14827.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14827.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I believe this solves the mystery.  In short OGE and ORTE both 
<br>
work.  In the linear:1 case the job is exiting because there are not 
<br>
enough resources for the orte binding to work, which actually makes 
<br>
sense.  In the linear:2 case I think we've proven that we are binding to 
<br>
the right amount of resources and to the correct physical resources at 
<br>
the process level.
<br>
<p>In the case you do not do pass bind-to-core to mpirun with a qsub using  
<br>
linear:2 the processes on the same node will actually bind to the same 
<br>
two cores.  The only way to determine this is to run something that 
<br>
prints out the binding from the system.  There is no way to do this via 
<br>
OMPI because it only reports binding when you are requesting mpirun to 
<br>
do some type of binding (like -bind-to-core or -bind-to-socket.
<br>
<p>In the linear:1 case with no binding I think you are having the 
<br>
processes on the same node run on the same core.   Which is exactly what 
<br>
you are asking for I believe.
<br>
<p>So I believe we understand what is going on with the binding and it 
<br>
makes sense to me.  As far as the allocation issue of slots vs. cores 
<br>
and trying to not overallocate cores I believe the new allocation rule 
<br>
make sense to do but I'll let you hash that out with Daniel.
<br>
<p>In summary I don't believe there is any OMPI bugs related to what we've 
<br>
seen and the OGE issue is just the allocation issue, right?
<br>
<p>--td
<br>
<p><p>On 11/18/2010 01:32 AM, Chris Jewell wrote:
<br>
<span class="quotelev3">&gt;&gt;&gt; Perhaps if someone could run this test again with --report-bindings --leave-session-attached and provide -all- output we could verify that analysis and clear up the confusion?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, however I bet you we still won't see output.
</span><br>
<span class="quotelev1">&gt; Actually, it seems we do get more output!  Results of 'qsub -pe mpi 8 -binding linear:2 myScript.com'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 'mpirun -mca ras_gridengine_verbose 100 -report-bindings --leave-session-attached -bycore -bind-to-core ./unterm'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [exec1:06504] System has detected external process binding to cores 0028
</span><br>
<span class="quotelev1">&gt; [exec1:06504] ras:gridengine: JOB_ID: 59467
</span><br>
<span class="quotelev1">&gt; [exec1:06504] ras:gridengine: PE_HOSTFILE: /usr/sge/default/spool/exec1/active_jobs/59467.1/pe_hostfile
</span><br>
<span class="quotelev1">&gt; [exec1:06504] ras:gridengine: exec1.cluster.stats.local: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev1">&gt; [exec1:06504] ras:gridengine: exec3.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec1:06504] ras:gridengine: exec2.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec1:06504] ras:gridengine: exec7.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec1:06504] ras:gridengine: exec4.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec1:06504] ras:gridengine: exec5.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec1:06504] ras:gridengine: exec6.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec1:06504] [[59608,0],0] odls:default:fork binding child [[59608,1],0] to cpus 0008
</span><br>
<span class="quotelev1">&gt; [exec1:06504] [[59608,0],0] odls:default:fork binding child [[59608,1],1] to cpus 0020
</span><br>
<span class="quotelev1">&gt; [exec3:20248] [[59608,0],1] odls:default:fork binding child [[59608,1],2] to cpus 0008
</span><br>
<span class="quotelev1">&gt; [exec4:26792] [[59608,0],4] odls:default:fork binding child [[59608,1],5] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [exec2:32462] [[59608,0],2] odls:default:fork binding child [[59608,1],3] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [exec7:09833] [[59608,0],3] odls:default:fork binding child [[59608,1],4] to cpus 0002
</span><br>
<span class="quotelev1">&gt; [exec5:10834] [[59608,0],5] odls:default:fork binding child [[59608,1],6] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [exec6:04230] [[59608,0],6] odls:default:fork binding child [[59608,1],7] to cpus 0001
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AHHA!  Now I get the following if I use 'qsub -pe mpi 8 -binding linear:1 myScript.com' with the above mpirun command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [exec1:06552] System has detected external process binding to cores 0020
</span><br>
<span class="quotelev1">&gt; [exec1:06552] ras:gridengine: JOB_ID: 59468
</span><br>
<span class="quotelev1">&gt; [exec1:06552] ras:gridengine: PE_HOSTFILE: /usr/sge/default/spool/exec1/active_jobs/59468.1/pe_hostfile
</span><br>
<span class="quotelev1">&gt; [exec1:06552] ras:gridengine: exec1.cluster.stats.local: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev1">&gt; [exec1:06552] ras:gridengine: exec3.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec1:06552] ras:gridengine: exec2.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec1:06552] ras:gridengine: exec7.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec1:06552] ras:gridengine: exec4.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec1:06552] ras:gridengine: exec5.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec1:06552] ras:gridengine: exec6.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to start the specified application as it encountered an error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error name: Unknown error: 1
</span><br>
<span class="quotelev1">&gt; Node: exec1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [exec1:06552] [[59432,0],0] odls:default:fork binding child [[59432,1],0] to cpus 0020
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Not enough processors were found on the local host to meet the requested
</span><br>
<span class="quotelev1">&gt; binding action:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Local host:        exec1
</span><br>
<span class="quotelev1">&gt;    Action requested:  bind-to-core
</span><br>
<span class="quotelev1">&gt;    Application name:  ./unterm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please revise the request and try again.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [exec4:26816] [[59432,0],4] odls:default:fork binding child [[59432,1],5] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [exec3:20345] [[59432,0],1] odls:default:fork binding child [[59432,1],2] to cpus 0020
</span><br>
<span class="quotelev1">&gt; [exec2:32486] [[59432,0],2] odls:default:fork binding child [[59432,1],3] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [exec7:09921] [[59432,0],3] odls:default:fork binding child [[59432,1],4] to cpus 0002
</span><br>
<span class="quotelev1">&gt; [exec6:04257] [[59432,0],6] odls:default:fork binding child [[59432,1],7] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [exec5:10861] [[59432,0],5] odls:default:fork binding child [[59432,1],6] to cpus 0001
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps clear up the confusion!  Please say it does, my head hurts...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr Chris Jewell
</span><br>
<span class="quotelev1">&gt; Department of Statistics
</span><br>
<span class="quotelev1">&gt; University of Warwick
</span><br>
<span class="quotelev1">&gt; Coventry
</span><br>
<span class="quotelev1">&gt; CV4 7AL
</span><br>
<span class="quotelev1">&gt; UK
</span><br>
<span class="quotelev1">&gt; Tel: +44 (0)24 7615 0778
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14825/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14825/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14826.php">Hicham Mouline: "[OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14824.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14821.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14827.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14827.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
