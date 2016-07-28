<?
$subject_val = "Re: [OMPI users] openmpi/pbsdsh/Torque problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 10:50:48 2011" -->
<!-- isoreceived="20110404145048" -->
<!-- sent="Mon, 4 Apr 2011 08:50:39 -0600" -->
<!-- isosent="20110404145039" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/pbsdsh/Torque problem" -->
<!-- id="17D37E1E-B1EF-4C0D-8F56-24072D7E1926_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTikhPexGuBtMu52Tk2q-ZSBJaW5nUA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 10:50:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16117.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16115.php">Ralph Castain: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16111.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16098.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...yes, I guess we did get off-track then. This soln is exactly what I proposed on the first response to your thread, and was repeated by others later on. :-/
<br>
<p>So long as mpirun is executed on the node where the &quot;sister mom&quot; is located, and as long as your script &quot;B&quot; does -not- include an &quot;mpirun&quot; cmd,  this will work fine.
<br>
<p>On Apr 4, 2011, at 8:38 AM, Laurence Marks wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, I think we may have a mistaken communication here; I assume
</span><br>
<span class="quotelev1">&gt; that the computer where they have disabled rsh and ssh they have
</span><br>
<span class="quotelev1">&gt; &quot;something&quot; to communicate with so we don't need to use pbsdsh. If
</span><br>
<span class="quotelev1">&gt; they don't there is not much a lowly user like me can do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think we can close this, since like many things the answer is
</span><br>
<span class="quotelev1">&gt; &quot;simple&quot; when you find it and I think I have. Forget pbsdsh which
</span><br>
<span class="quotelev1">&gt; seems to be a bit flakey and probably is not being maintained much.
</span><br>
<span class="quotelev1">&gt; Instead, use mpirun to replace ssh. In other words replace
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh A B
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to execute command B on node A by
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --host A bash -c &quot; B &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (with variables appropriately substituted, or with csh instead of
</span><br>
<span class="quotelev1">&gt; bash). Then -x (in OMPI) can be used to export whatever is needed in
</span><br>
<span class="quotelev1">&gt; the environment etc, which pbsdsh lacks, and there should be similarly
</span><br>
<span class="quotelev1">&gt; environment exporting with other MPI. With whatever minor changes are
</span><br>
<span class="quotelev1">&gt; needed for other flavors of MPI I believe this should be 99% robust
</span><br>
<span class="quotelev1">&gt; and portable. This passes the simple test with B of &quot;sleep 600&quot; when
</span><br>
<span class="quotelev1">&gt; terminating the process where the mpirun is launched kills the sleep
</span><br>
<span class="quotelev1">&gt; on a remote node (unlike ssh on some but not all computers).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 4, 2011 at 6:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I apologize - I realized late last night that I had a typo in my recommended command. It should read:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -mca plm rsh -mca plm_rsh_agent pbsdsh -mca ras ^tm --machinefile m1....
</span><br>
<span class="quotelev2">&gt;&gt;                                      ^^^^^^^^^^^^^^^^^^^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, if you know that #procs &lt;= #cores on your nodes, you can greatly improve performance by adding &quot;--bind-to-core&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 3, 2011, at 5:28 PM, Laurence Marks wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And, before someone wonders, while Wien2k is a commercial code it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about 500 Eu for a lifetime licence so this is not the same as Vasp or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gaussian which cost $$$$$. And, I have no financial interest in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code, but like many others help make it better (semi gnu).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sun, Apr 3, 2011 at 6:25 PM, Laurence Marks &lt;L-marks_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks. I will test this tomorrow.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Many people run Wien2k with openmpi as you say, I only became aware of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the issue of Wien2k (and perhaps other codes) leaving orphaned
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes still running a few days ago. I also know someone who wants
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to run Wien2k on a system where both rsh and ssh are banned.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Personally, as I don't want to be banned from the supercomputers I use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I want to find a adequate patch for myself --- and then try and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; persuade the developers to adopt it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sun, Apr 3, 2011 at 6:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 3, 2011, at 4:37 PM, Laurence Marks wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Sun, Apr 3, 2011 at 5:08 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Am 03.04.2011 um 23:59 schrieb David Singleton:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 04/04/2011 12:56 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What I still don't understand is why you are trying to do it this way. Why not just run
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; time mpirun -v -x LD_LIBRARY_PATH -x PATH -np 2 -machinefile .machineN /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_1.def
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; where machineN contains the names of the nodes where you want the MPI apps to execute? mpirun will only execute apps on those nodes, so this accomplishes the same thing as your script - only with a lot less pain.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Your script would just contain a sequence of these commands, each with its number of procs and machinefile as required.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Maybe I missed why this suggestion of forgetting about the ssh/pbsdsh altogether
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; was not feasible?  Just use mpirun (with its great tm support!) to distribute
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI jobs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Wien2k has a two stage startup, e.g. for 16 slots:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; a) start 4 times `ssh` in the background to go to some of the granted nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; b) use there on each node `mpirun` to start processes on the remaining nodes, 3 for each call
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Problems:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1) control `ssh` under Torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2) provide a partially hostlist to `mpirun`, maybe by disabling the default tight integration
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1) The mpi tasks can be started on only one node (Reuti, &quot;setenv
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_REMOTE 0&quot; in parallel_options which was introduced for other
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; reasons in 9.3 and later releases). That seems to be safe and maybe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the only viable method with OMPI as pbsdsh appears to be unable to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; launch mpi tasks correctly (or needs some environmental variables that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I don't know about).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2) This is already done (Reuti, this is .machine0, .machine1 etc. If
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; you need information about setting up the Wien2k file under qsub in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; general, contact me offline or look for Machines2W on the mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; which may be part of the next release, I'm not sure and I don't make
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; those decisions).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, there is another layer that Ruedi did not mention for this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; code which is that some processes also need to be remotely launched to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ensure that the correct scratch directories are used (i.e. local
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; storage which is faster rather than nfs or similar). Maybe pbsdsh can
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; be used for this, I am still testing and I am not sure. It may be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enough to create a script with all important environmental variables
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exported (as they may not all be in .bashrc or .cshrc) although there
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; might be issues making this fully portable. Since there are &gt; 1000
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; licenses of Wien2k, it has to be able to cope with different OS's, and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; not just OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is what I would do, based on my knowledge of OMPI's internals (and I wrote the launchers :-)):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. do not use your script - you don't want all those PBS envars to confuse OMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. mpirun -mca plm rsh -launch-agent pbsdsh -mca ras ^tm --machinefile m1....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This cmd line tells mpirun to use the &quot;rsh/ssh&quot; launcher, but to substitute &quot;pbsdsh&quot; for &quot;ssh&quot;. It also tells it to ignore the PBS_NODEFILE and just use the machinefile for the nodes to be used for that job.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can't swear this will work as I have never verified that pbsdsh and ssh have the same syntax, but I -think- that was true. If so, then this might do what you are attempting.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I know people have run Wien2k with OMPI before - but I have never heard of the problems you are reporting.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A simple example:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; vayu1:~/MPI &gt; qsub -lncpus=24,vmem=24gb,walltime=10:00 -wd -I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; qsub: waiting for job 574900.vu-pbs to start
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; qsub: job 574900.vu-pbs ready
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [dbs900_at_v250 ~/MPI]$ wc -l $PBS_NODEFILE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 24
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [dbs900_at_v250 ~/MPI]$ head -12 $PBS_NODEFILE &gt; m1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [dbs900_at_v250 ~/MPI]$ tail -12 $PBS_NODEFILE &gt; m2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [dbs900_at_v250 ~/MPI]$ mpirun --machinefile m1 ./a2a143 120000 30 &amp; mpirun --machinefile m2 ./pp143
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Check how the processes are distributed ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; vayu1:~ &gt; qps 574900.vu-pbs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Node 0: v250:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  PID S   RSS    VSZ %MEM     TIME %CPU COMMAND
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 11420 S  2104  10396  0.0 00:00:00  0.0 -tcsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 11421 S   620  10552  0.0 00:00:00  0.0 pbs_demux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12471 S  2208  49324  0.0 00:00:00  0.9 /apps/openmpi/1.4.3/bin/mpirun --machinefile m1 ./a2a143 120000 30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12472 S  2116  49312  0.0 00:00:00  0.0 /apps/openmpi/1.4.3/bin/mpirun --machinefile m2 ./pp143
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12535 R 270160 565668  1.0 00:00:02 82.4 ./a2a143 120000 30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12536 R 270032 565536  1.0 00:00:02 81.4 ./a2a143 120000 30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12537 R 270012 565528  1.0 00:00:02 87.3 ./a2a143 120000 30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12538 R 269992 565532  1.0 00:00:02 93.3 ./a2a143 120000 30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12539 R 269980 565516  1.0 00:00:02 81.4 ./a2a143 120000 30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12540 R 270008 565516  1.0 00:00:02 86.3 ./a2a143 120000 30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12541 R 270008 565516  1.0 00:00:02 96.3 ./a2a143 120000 30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12542 R 272064 567568  1.0 00:00:02 91.3 ./a2a143 120000 30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Node 1: v251:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  PID S   RSS    VSZ %MEM     TIME %CPU COMMAND
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10367 S  1872  40648  0.0 00:00:00  0.0 orted -mca ess env -mca orte_ess_jobid 1444413440 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;1444413440.0;tcp://10.1.3.58:37339&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10368 S  1868  40648  0.0 00:00:00  0.0 orted -mca ess env -mca orte_ess_jobid 1444347904 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri &quot;1444347904.0;tcp://10.1.3.58:39610&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10372 R 271112 567556  1.0 00:00:04 74.5 ./a2a143 120000 30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10373 R 271036 567564  1.0 00:00:04 71.5 ./a2a143 120000 30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10374 R 271032 567560  1.0 00:00:04 66.5 ./a2a143 120000 30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10375 R 273112 569612  1.1 00:00:04 68.5 ./a2a143 120000 30
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10378 R 552280 840712  2.2 00:00:04 100 ./pp143
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10379 R 552280 840708  2.2 00:00:04 100 ./pp143
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10380 R 552328 841576  2.2 00:00:04 100 ./pp143
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10381 R 552788 841216  2.2 00:00:04 99.3 ./pp143
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Node 2: v252:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  PID S   RSS    VSZ %MEM     TIME %CPU COMMAND
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10152 S  1908  40780  0.0 00:00:00  0.0 orted -mca ess env -mca orte_ess_jobid 1444347904 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 3 --hnp-uri &quot;1444347904.0;tcp://10.1.3.58:39610&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10156 R 552384 840200  2.2 00:00:07 99.3 ./pp143
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10157 R 551868 839692  2.2 00:00:06 99.3 ./pp143
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10158 R 551400 839184  2.2 00:00:07 100 ./pp143
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10159 R 551436 839184  2.2 00:00:06 98.3 ./pp143
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10160 R 551760 839692  2.2 00:00:07 100 ./pp143
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10161 R 551788 839824  2.2 00:00:07 97.3 ./pp143
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10162 R 552256 840332  2.2 00:00:07 100 ./pp143
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 10163 R 552216 840340  2.2 00:00:07 99.3 ./pp143
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You would have to do something smarter to get correct process binding etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Laurence Marks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Northwestern University
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Research is to see what everybody else has seen, and to think what
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nobody else has thought
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Albert Szent-Gyorgi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Laurence Marks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Northwestern University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Research is to see what everybody else has seen, and to think what
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nobody else has thought
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Albert Szent-Gyorgi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Laurence Marks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Northwestern University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research is to see what everybody else has seen, and to think what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nobody else has thought
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Albert Szent-Gyorgi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Laurence Marks
</span><br>
<span class="quotelev1">&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev1">&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev1">&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev1">&gt; Northwestern University
</span><br>
<span class="quotelev1">&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev1">&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev1">&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev1">&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev1">&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev1">&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev1">&gt; Research is to see what everybody else has seen, and to think what
</span><br>
<span class="quotelev1">&gt; nobody else has thought
</span><br>
<span class="quotelev1">&gt; Albert Szent-Gyorgi
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
<li><strong>Next message:</strong> <a href="16117.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16115.php">Ralph Castain: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16111.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16098.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
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
