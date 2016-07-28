<?
$subject_val = "Re: [OMPI users] openmpi/pbsdsh/Torque problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 18:08:48 2011" -->
<!-- isoreceived="20110403220848" -->
<!-- sent="Mon, 4 Apr 2011 00:08:31 +0200" -->
<!-- isosent="20110403220831" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/pbsdsh/Torque problem" -->
<!-- id="285C9A76-A61F-4958-AD29-35E8DF2313A4_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D98EDDD.2040405_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi/pbsdsh/Torque problem<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-03 18:08:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16091.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16089.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16089.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16093.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16093.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16094.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 03.04.2011 um 23:59 schrieb David Singleton:
<br>
<p><span class="quotelev1">&gt; On 04/04/2011 12:56 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I still don't understand is why you are trying to do it this way. Why not just run
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; time mpirun -v -x LD_LIBRARY_PATH -x PATH -np 2 -machinefile .machineN /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_1.def
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; where machineN contains the names of the nodes where you want the MPI apps to execute? mpirun will only execute apps on those nodes, so this accomplishes the same thing as your script - only with a lot less pain.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your script would just contain a sequence of these commands, each with its number of procs and machinefile as required.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe I missed why this suggestion of forgetting about the ssh/pbsdsh altogether
</span><br>
<span class="quotelev1">&gt; was not feasible?  Just use mpirun (with its great tm support!) to distribute
</span><br>
<span class="quotelev1">&gt; MPI jobs.
</span><br>
<p>Wien2k has a two stage startup, e.g. for 16 slots:
<br>
<p>a) start 4 times `ssh` in the background to go to some of the granted nodes
<br>
b) use there on each node `mpirun` to start processes on the remaining nodes, 3 for each call
<br>
<p>Problems:
<br>
<p>1) control `ssh` under Torque
<br>
2) provide a partially hostlist to `mpirun`, maybe by disabling the default tight integration
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; A simple example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; vayu1:~/MPI &gt; qsub -lncpus=24,vmem=24gb,walltime=10:00 -wd -I
</span><br>
<span class="quotelev1">&gt; qsub: waiting for job 574900.vu-pbs to start
</span><br>
<span class="quotelev1">&gt; qsub: job 574900.vu-pbs ready
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dbs900_at_v250 ~/MPI]$ wc -l $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; 24
</span><br>
<span class="quotelev1">&gt; [dbs900_at_v250 ~/MPI]$ head -12 $PBS_NODEFILE &gt; m1
</span><br>
<span class="quotelev1">&gt; [dbs900_at_v250 ~/MPI]$ tail -12 $PBS_NODEFILE &gt; m2
</span><br>
<span class="quotelev1">&gt; [dbs900_at_v250 ~/MPI]$ mpirun --machinefile m1 ./a2a143 120000 30 &amp; mpirun --machinefile m2 ./pp143
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check how the processes are distributed ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; vayu1:~ &gt; qps 574900.vu-pbs
</span><br>
<span class="quotelev1">&gt; Node 0: v250:
</span><br>
<span class="quotelev1">&gt;  PID S   RSS    VSZ %MEM     TIME %CPU COMMAND
</span><br>
<span class="quotelev1">&gt; 11420 S  2104  10396  0.0 00:00:00  0.0 -tcsh
</span><br>
<span class="quotelev1">&gt; 11421 S   620  10552  0.0 00:00:00  0.0 pbs_demux
</span><br>
<span class="quotelev1">&gt; 12471 S  2208  49324  0.0 00:00:00  0.9 /apps/openmpi/1.4.3/bin/mpirun --machinefile m1 ./a2a143 120000 30
</span><br>
<span class="quotelev1">&gt; 12472 S  2116  49312  0.0 00:00:00  0.0 /apps/openmpi/1.4.3/bin/mpirun --machinefile m2 ./pp143
</span><br>
<span class="quotelev1">&gt; 12535 R 270160 565668  1.0 00:00:02 82.4 ./a2a143 120000 30
</span><br>
<span class="quotelev1">&gt; 12536 R 270032 565536  1.0 00:00:02 81.4 ./a2a143 120000 30
</span><br>
<span class="quotelev1">&gt; 12537 R 270012 565528  1.0 00:00:02 87.3 ./a2a143 120000 30
</span><br>
<span class="quotelev1">&gt; 12538 R 269992 565532  1.0 00:00:02 93.3 ./a2a143 120000 30
</span><br>
<span class="quotelev1">&gt; 12539 R 269980 565516  1.0 00:00:02 81.4 ./a2a143 120000 30
</span><br>
<span class="quotelev1">&gt; 12540 R 270008 565516  1.0 00:00:02 86.3 ./a2a143 120000 30
</span><br>
<span class="quotelev1">&gt; 12541 R 270008 565516  1.0 00:00:02 96.3 ./a2a143 120000 30
</span><br>
<span class="quotelev1">&gt; 12542 R 272064 567568  1.0 00:00:02 91.3 ./a2a143 120000 30
</span><br>
<span class="quotelev1">&gt; Node 1: v251:
</span><br>
<span class="quotelev1">&gt;  PID S   RSS    VSZ %MEM     TIME %CPU COMMAND
</span><br>
<span class="quotelev1">&gt; 10367 S  1872  40648  0.0 00:00:00  0.0 orted -mca ess env -mca orte_ess_jobid 1444413440 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;1444413440.0;tcp://10.1.3.58:37339&quot;
</span><br>
<span class="quotelev1">&gt; 10368 S  1868  40648  0.0 00:00:00  0.0 orted -mca ess env -mca orte_ess_jobid 1444347904 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri &quot;1444347904.0;tcp://10.1.3.58:39610&quot;
</span><br>
<span class="quotelev1">&gt; 10372 R 271112 567556  1.0 00:00:04 74.5 ./a2a143 120000 30
</span><br>
<span class="quotelev1">&gt; 10373 R 271036 567564  1.0 00:00:04 71.5 ./a2a143 120000 30
</span><br>
<span class="quotelev1">&gt; 10374 R 271032 567560  1.0 00:00:04 66.5 ./a2a143 120000 30
</span><br>
<span class="quotelev1">&gt; 10375 R 273112 569612  1.1 00:00:04 68.5 ./a2a143 120000 30
</span><br>
<span class="quotelev1">&gt; 10378 R 552280 840712  2.2 00:00:04 100 ./pp143
</span><br>
<span class="quotelev1">&gt; 10379 R 552280 840708  2.2 00:00:04 100 ./pp143
</span><br>
<span class="quotelev1">&gt; 10380 R 552328 841576  2.2 00:00:04 100 ./pp143
</span><br>
<span class="quotelev1">&gt; 10381 R 552788 841216  2.2 00:00:04 99.3 ./pp143
</span><br>
<span class="quotelev1">&gt; Node 2: v252:
</span><br>
<span class="quotelev1">&gt;  PID S   RSS    VSZ %MEM     TIME %CPU COMMAND
</span><br>
<span class="quotelev1">&gt; 10152 S  1908  40780  0.0 00:00:00  0.0 orted -mca ess env -mca orte_ess_jobid 1444347904 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 3 --hnp-uri &quot;1444347904.0;tcp://10.1.3.58:39610&quot;
</span><br>
<span class="quotelev1">&gt; 10156 R 552384 840200  2.2 00:00:07 99.3 ./pp143
</span><br>
<span class="quotelev1">&gt; 10157 R 551868 839692  2.2 00:00:06 99.3 ./pp143
</span><br>
<span class="quotelev1">&gt; 10158 R 551400 839184  2.2 00:00:07 100 ./pp143
</span><br>
<span class="quotelev1">&gt; 10159 R 551436 839184  2.2 00:00:06 98.3 ./pp143
</span><br>
<span class="quotelev1">&gt; 10160 R 551760 839692  2.2 00:00:07 100 ./pp143
</span><br>
<span class="quotelev1">&gt; 10161 R 551788 839824  2.2 00:00:07 97.3 ./pp143
</span><br>
<span class="quotelev1">&gt; 10162 R 552256 840332  2.2 00:00:07 100 ./pp143
</span><br>
<span class="quotelev1">&gt; 10163 R 552216 840340  2.2 00:00:07 99.3 ./pp143
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You would have to do something smarter to get correct process binding etc.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16091.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16089.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16089.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16093.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16093.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16094.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
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
