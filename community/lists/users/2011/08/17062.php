<?
$subject_val = "Re: [OMPI users] MPI_Spawn and process allocation policy";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 11:09:48 2011" -->
<!-- isoreceived="20110816150948" -->
<!-- sent="Tue, 16 Aug 2011 17:10:30 +0200" -->
<!-- isosent="20110816151030" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Spawn and process allocation policy" -->
<!-- id="4E4A8866.8060203_at_dps.uibk.ac.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="07F37986-1F85-4EAB-AF36-192BEE4ABDB9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Spawn and process allocation policy<br>
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 11:10:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17063.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="17061.php">Hoot Thompson: "Re: [OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
<li><strong>In reply to:</strong> <a href="17059.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17063.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Reply:</strong> <a href="17063.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/16/2011 02:11 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; That should work, then. When you set the &quot;host&quot; property, did you give the same name as was in your machine file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Debug options that might help:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca plm_base_verbose 5 -mca rmaps_base_verbose 5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You'll need to configure --enable-debug to get the output, but that should help tell us what is happening.
</span><br>
To be clear here is the code I am using to spawn the MPI job:
<br>
// create the info object
<br>
MPI_Info info;
<br>
MPI_Info_create(&amp;info);
<br>
MPI_Info_set(info, &quot;host&quot;, const_cast&lt;char*&gt;(hostname.c_str()));
<br>
LOG(ERROR) &lt;&lt; hostname;
<br>
LOG(DEBUG) &lt;&lt; &quot;Invoking task ID '&quot; &lt;&lt; task_id &lt;&lt;&quot;': '&quot; &lt;&lt; exec_name &lt;&lt; &quot;'&quot;;
<br>
<p>MPI_Comm_spawn( const_cast&lt;char*&gt;(exec_name.c_str()), cargs, num_procs,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info, 0, MPI_COMM_SELF, &amp;intercomm, 
<br>
MPI_ERRCODES_IGNORE );
<br>
<p>delete[] cargs;
<br>
MPI_Info_free(&amp;info);
<br>
<p>and here is the log message:
<br>
In this case the MPI_Spaw creates a job with 3 MPI processes. As you can 
<br>
see MPI_Spawn doesn't care about my &quot;host&quot; setting, it just goes ahead 
<br>
and map the processes to node b05 and node b06 which are in my 
<br>
machinefile. (which is the same as before)
<br>
<p>is there any way to overwrite this behaviour?
<br>
<p>DEBUG 14628:R&lt;0&gt; 17:00:13] Spawning new MPI processes...
<br>
DEBUG 14628:R&lt;0&gt; 17:00:13] Serving event 'TASK_CREATED', (number of 
<br>
registered handlers: 1)
<br>
ERROR 14628:R&lt;0&gt; 17:00:13] b01
<br>
DEBUG 14628:R&lt;0&gt; 17:00:13] Invoking task ID '4': './simulator'
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:receive got 
<br>
message from [[34621,1],0]
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:receive job 
<br>
launch command
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:rsh: setting up job 
<br>
[34621,4]
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:setup_job for 
<br>
job [34621,4]
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:claim_slot: 
<br>
created new proc [[34621,4],INVALID]
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:claim_slot 
<br>
mapping proc in job [34621,4] to node b02
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base: adding node 
<br>
b02 to map
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base: mapping 
<br>
proc for job [34621,4] to node b02
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:claim_slot: 
<br>
created new proc [[34621,4],INVALID]
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:claim_slot 
<br>
mapping proc in job [34621,4] to node b01
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base: adding node 
<br>
b01 to map
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base: mapping 
<br>
proc for job [34621,4] to node b01
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:claim_slot: 
<br>
created new proc [[34621,4],INVALID]
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:claim_slot 
<br>
mapping proc in job [34621,4] to node b02
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base: mapping 
<br>
proc for job [34621,4] to node b02
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:compute_usage
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:define_daemons
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] 
<br>
rmaps:base:define_daemons existing daemon [[34621,0],2] already launched
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] 
<br>
rmaps:base:define_daemons existing daemon [[34621,0],1] already launched
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:rsh: no new daemons 
<br>
to launch
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:launch_apps 
<br>
for job [34621,4]
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] 
<br>
plm:base:report_launched for job [34621,4]
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] 
<br>
plm:base:app_report_launch from daemon [[34621,0],0]
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] 
<br>
plm:base:app_report_launch completed processing
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] 
<br>
plm:base:app_report_launch reissuing non-blocking recv
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] 
<br>
plm:base:app_report_launch from daemon [[34621,0],1]
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] 
<br>
plm:base:app_report_launched for proc [[34621,4],1] from daemon 
<br>
[[34621,0],1]: pid 14646 state 2 exit 0
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] 
<br>
plm:base:app_report_launch completed processing
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] 
<br>
plm:base:app_report_launch reissuing non-blocking recv
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] 
<br>
plm:base:app_report_launch from daemon [[34621,0],2]
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] 
<br>
plm:base:app_report_launched for proc [[34621,4],0] from daemon 
<br>
[[34621,0],2]: pid 9803 state 2 exit 0
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] 
<br>
plm:base:app_report_launched for proc [[34621,4],2] from daemon 
<br>
[[34621,0],2]: pid 9804 state 2 exit 0
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] 
<br>
plm:base:app_report_launch completed processing
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] 
<br>
plm:base:report_launched all apps reported
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:launch wiring 
<br>
up iof
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:launch 
<br>
completed for job [34621,4]
<br>
[kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:receive job 
<br>
[34621,4] launched
<br>
<p>cheers, Simone P.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2011, at 5:09 AM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 08/16/2011 12:30 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What version are you using?
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.4.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 16, 2011, at 3:19 AM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am developing a system to manage MPI tasks on top of MPI. The architecture is rather simple, I have a set of scheduler processes which takes care to manage the resources of a node. The idea is to have 1 (or more) of those scheduler allocated on each node of a cluster and then create new MPI processes (on demand) as computation is needed. Allocation of processes is done using MPI_Spawn.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The system now works fine on a single node by allocating the main scheduler using the following mpi command:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --np 1 ./scheduler ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now when I scale to multiple nodes problems with default MPI behaviour starts. For example lets assume I have 2 nodes with 8 cpu cores each. I therefore set up a machine file in the following way:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; s01 slots=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; s02 slots=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and start the node schedulers in the following way:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --np 2 --machinefile machinefile ./scheduler ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This allocates the processes correctly, now the problem starts when I invoke MPI_Spawn. basically MPI spawn also uses the informations from the machinefile and if 4 MPI processes are spawned 2 are allocated in s01 and 2 on s02. What I want is to allocate the processes always in the same node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried to do this by specifying an MPI_Info object which is then passed to the MPI_Spawn routine. I tried to set the &quot;host&quot; property to the hostname of the machine where the scheduler is running but this didn't help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately there is very little documentation on this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for the help,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Simone
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17063.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="17061.php">Hoot Thompson: "Re: [OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
<li><strong>In reply to:</strong> <a href="17059.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17063.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Reply:</strong> <a href="17063.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
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
