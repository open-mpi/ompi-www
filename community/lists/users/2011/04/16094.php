<?
$subject_val = "Re: [OMPI users] openmpi/pbsdsh/Torque problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 18:37:36 2011" -->
<!-- isoreceived="20110403223736" -->
<!-- sent="Sun, 3 Apr 2011 17:37:30 -0500" -->
<!-- isosent="20110403223730" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/pbsdsh/Torque problem" -->
<!-- id="BANLkTikuSucb-_GZEpFbh9B1S_up1yGOBw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="285C9A76-A61F-4958-AD29-35E8DF2313A4_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Laurence Marks (<em>L-marks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-03 18:37:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16095.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16093.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16090.php">Reuti: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16095.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16095.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Apr 3, 2011 at 5:08 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Am 03.04.2011 um 23:59 schrieb David Singleton:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 04/04/2011 12:56 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I still don't understand is why you are trying to do it this way. Why not just run
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time mpirun -v -x LD_LIBRARY_PATH -x PATH -np 2 -machinefile .machineN /home/lma712/src/Virgin_10.1/lapw1Q_mpi lapw1Q_1.def
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where machineN contains the names of the nodes where you want the MPI apps to execute? mpirun will only execute apps on those nodes, so this accomplishes the same thing as your script - only with a lot less pain.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your script would just contain a sequence of these commands, each with its number of procs and machinefile as required.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe I missed why this suggestion of forgetting about the ssh/pbsdsh altogether
</span><br>
<span class="quotelev2">&gt;&gt; was not feasible? &#194;&#160;Just use mpirun (with its great tm support!) to distribute
</span><br>
<span class="quotelev2">&gt;&gt; MPI jobs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wien2k has a two stage startup, e.g. for 16 slots:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) start 4 times `ssh` in the background to go to some of the granted nodes
</span><br>
<span class="quotelev1">&gt; b) use there on each node `mpirun` to start processes on the remaining nodes, 3 for each call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) control `ssh` under Torque
</span><br>
<span class="quotelev1">&gt; 2) provide a partially hostlist to `mpirun`, maybe by disabling the default tight integration
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>1) The mpi tasks can be started on only one node (Reuti, &quot;setenv
<br>
MPI_REMOTE 0&quot; in parallel_options which was introduced for other
<br>
reasons in 9.3 and later releases). That seems to be safe and maybe
<br>
the only viable method with OMPI as pbsdsh appears to be unable to
<br>
launch mpi tasks correctly (or needs some environmental variables that
<br>
I don't know about).
<br>
2) This is already done (Reuti, this is .machine0, .machine1 etc. If
<br>
you need information about setting up the Wien2k file under qsub in
<br>
general, contact me offline or look for Machines2W on the mailing list
<br>
which may be part of the next release, I'm not sure and I don't make
<br>
those decisions).
<br>
<p>However, there is another layer that Ruedi did not mention for this
<br>
code which is that some processes also need to be remotely launched to
<br>
ensure that the correct scratch directories are used (i.e. local
<br>
storage which is faster rather than nfs or similar). Maybe pbsdsh can
<br>
be used for this, I am still testing and I am not sure. It may be
<br>
enough to create a script with all important environmental variables
<br>
exported (as they may not all be in .bashrc or .cshrc) although there
<br>
might be issues making this fully portable. Since there are &gt; 1000
<br>
licenses of Wien2k, it has to be able to cope with different OS's, and
<br>
not just OMPI.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A simple example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; vayu1:~/MPI &gt; qsub -lncpus=24,vmem=24gb,walltime=10:00 -wd -I
</span><br>
<span class="quotelev2">&gt;&gt; qsub: waiting for job 574900.vu-pbs to start
</span><br>
<span class="quotelev2">&gt;&gt; qsub: job 574900.vu-pbs ready
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [dbs900_at_v250 ~/MPI]$ wc -l $PBS_NODEFILE
</span><br>
<span class="quotelev2">&gt;&gt; 24
</span><br>
<span class="quotelev2">&gt;&gt; [dbs900_at_v250 ~/MPI]$ head -12 $PBS_NODEFILE &gt; m1
</span><br>
<span class="quotelev2">&gt;&gt; [dbs900_at_v250 ~/MPI]$ tail -12 $PBS_NODEFILE &gt; m2
</span><br>
<span class="quotelev2">&gt;&gt; [dbs900_at_v250 ~/MPI]$ mpirun --machinefile m1 ./a2a143 120000 30 &amp; mpirun --machinefile m2 ./pp143
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check how the processes are distributed ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; vayu1:~ &gt; qps 574900.vu-pbs
</span><br>
<span class="quotelev2">&gt;&gt; Node 0: v250:
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;PID S &#194;&#160; RSS &#194;&#160; &#194;&#160;VSZ %MEM &#194;&#160; &#194;&#160; TIME %CPU COMMAND
</span><br>
<span class="quotelev2">&gt;&gt; 11420 S &#194;&#160;2104 &#194;&#160;10396 &#194;&#160;0.0 00:00:00 &#194;&#160;0.0 -tcsh
</span><br>
<span class="quotelev2">&gt;&gt; 11421 S &#194;&#160; 620 &#194;&#160;10552 &#194;&#160;0.0 00:00:00 &#194;&#160;0.0 pbs_demux
</span><br>
<span class="quotelev2">&gt;&gt; 12471 S &#194;&#160;2208 &#194;&#160;49324 &#194;&#160;0.0 00:00:00 &#194;&#160;0.9 /apps/openmpi/1.4.3/bin/mpirun --machinefile m1 ./a2a143 120000 30
</span><br>
<span class="quotelev2">&gt;&gt; 12472 S &#194;&#160;2116 &#194;&#160;49312 &#194;&#160;0.0 00:00:00 &#194;&#160;0.0 /apps/openmpi/1.4.3/bin/mpirun --machinefile m2 ./pp143
</span><br>
<span class="quotelev2">&gt;&gt; 12535 R 270160 565668 &#194;&#160;1.0 00:00:02 82.4 ./a2a143 120000 30
</span><br>
<span class="quotelev2">&gt;&gt; 12536 R 270032 565536 &#194;&#160;1.0 00:00:02 81.4 ./a2a143 120000 30
</span><br>
<span class="quotelev2">&gt;&gt; 12537 R 270012 565528 &#194;&#160;1.0 00:00:02 87.3 ./a2a143 120000 30
</span><br>
<span class="quotelev2">&gt;&gt; 12538 R 269992 565532 &#194;&#160;1.0 00:00:02 93.3 ./a2a143 120000 30
</span><br>
<span class="quotelev2">&gt;&gt; 12539 R 269980 565516 &#194;&#160;1.0 00:00:02 81.4 ./a2a143 120000 30
</span><br>
<span class="quotelev2">&gt;&gt; 12540 R 270008 565516 &#194;&#160;1.0 00:00:02 86.3 ./a2a143 120000 30
</span><br>
<span class="quotelev2">&gt;&gt; 12541 R 270008 565516 &#194;&#160;1.0 00:00:02 96.3 ./a2a143 120000 30
</span><br>
<span class="quotelev2">&gt;&gt; 12542 R 272064 567568 &#194;&#160;1.0 00:00:02 91.3 ./a2a143 120000 30
</span><br>
<span class="quotelev2">&gt;&gt; Node 1: v251:
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;PID S &#194;&#160; RSS &#194;&#160; &#194;&#160;VSZ %MEM &#194;&#160; &#194;&#160; TIME %CPU COMMAND
</span><br>
<span class="quotelev2">&gt;&gt; 10367 S &#194;&#160;1872 &#194;&#160;40648 &#194;&#160;0.0 00:00:00 &#194;&#160;0.0 orted -mca ess env -mca orte_ess_jobid 1444413440 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;1444413440.0;tcp://10.1.3.58:37339&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 10368 S &#194;&#160;1868 &#194;&#160;40648 &#194;&#160;0.0 00:00:00 &#194;&#160;0.0 orted -mca ess env -mca orte_ess_jobid 1444347904 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri &quot;1444347904.0;tcp://10.1.3.58:39610&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 10372 R 271112 567556 &#194;&#160;1.0 00:00:04 74.5 ./a2a143 120000 30
</span><br>
<span class="quotelev2">&gt;&gt; 10373 R 271036 567564 &#194;&#160;1.0 00:00:04 71.5 ./a2a143 120000 30
</span><br>
<span class="quotelev2">&gt;&gt; 10374 R 271032 567560 &#194;&#160;1.0 00:00:04 66.5 ./a2a143 120000 30
</span><br>
<span class="quotelev2">&gt;&gt; 10375 R 273112 569612 &#194;&#160;1.1 00:00:04 68.5 ./a2a143 120000 30
</span><br>
<span class="quotelev2">&gt;&gt; 10378 R 552280 840712 &#194;&#160;2.2 00:00:04 100 ./pp143
</span><br>
<span class="quotelev2">&gt;&gt; 10379 R 552280 840708 &#194;&#160;2.2 00:00:04 100 ./pp143
</span><br>
<span class="quotelev2">&gt;&gt; 10380 R 552328 841576 &#194;&#160;2.2 00:00:04 100 ./pp143
</span><br>
<span class="quotelev2">&gt;&gt; 10381 R 552788 841216 &#194;&#160;2.2 00:00:04 99.3 ./pp143
</span><br>
<span class="quotelev2">&gt;&gt; Node 2: v252:
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;PID S &#194;&#160; RSS &#194;&#160; &#194;&#160;VSZ %MEM &#194;&#160; &#194;&#160; TIME %CPU COMMAND
</span><br>
<span class="quotelev2">&gt;&gt; 10152 S &#194;&#160;1908 &#194;&#160;40780 &#194;&#160;0.0 00:00:00 &#194;&#160;0.0 orted -mca ess env -mca orte_ess_jobid 1444347904 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 3 --hnp-uri &quot;1444347904.0;tcp://10.1.3.58:39610&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 10156 R 552384 840200 &#194;&#160;2.2 00:00:07 99.3 ./pp143
</span><br>
<span class="quotelev2">&gt;&gt; 10157 R 551868 839692 &#194;&#160;2.2 00:00:06 99.3 ./pp143
</span><br>
<span class="quotelev2">&gt;&gt; 10158 R 551400 839184 &#194;&#160;2.2 00:00:07 100 ./pp143
</span><br>
<span class="quotelev2">&gt;&gt; 10159 R 551436 839184 &#194;&#160;2.2 00:00:06 98.3 ./pp143
</span><br>
<span class="quotelev2">&gt;&gt; 10160 R 551760 839692 &#194;&#160;2.2 00:00:07 100 ./pp143
</span><br>
<span class="quotelev2">&gt;&gt; 10161 R 551788 839824 &#194;&#160;2.2 00:00:07 97.3 ./pp143
</span><br>
<span class="quotelev2">&gt;&gt; 10162 R 552256 840332 &#194;&#160;2.2 00:00:07 100 ./pp143
</span><br>
<span class="quotelev2">&gt;&gt; 10163 R 552216 840340 &#194;&#160;2.2 00:00:07 99.3 ./pp143
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You would have to do something smarter to get correct process binding etc.
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Laurence Marks
Department of Materials Science and Engineering
MSE Rm 2036 Cook Hall
2220 N Campus Drive
Northwestern University
Evanston, IL 60208, USA
Tel: (847) 491-3996 Fax: (847) 491-7820
email: L-marks at northwestern dot edu
Web: www.numis.northwestern.edu
Chair, Commission on Electron Crystallography of IUCR
www.numis.northwestern.edu/
Research is to see what everybody else has seen, and to think what
nobody else has thought
Albert Szent-Gyorgi
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16095.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16093.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16090.php">Reuti: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16095.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16095.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
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
