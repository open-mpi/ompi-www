<?
$subject_val = "Re: [OMPI users] Connection timed out with multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 17:33:00 2014" -->
<!-- isoreceived="20140226223300" -->
<!-- sent="Wed, 26 Feb 2014 17:33:00 -0500 (EST)" -->
<!-- isosent="20140226223300" -->
<!-- name="Doug Roberts" -->
<!-- email="roberpj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection timed out with multiple nodes" -->
<!-- id="alpine.LRH.2.02.1402261659520.23260_at_localhost.localdomain" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] Connection timed out with multiple nodes" -->
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
<strong>Subject:</strong> Re: [OMPI users] Connection timed out with multiple nodes<br>
<strong>From:</strong> Doug Roberts (<em>roberpj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 17:33:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23676.php">Latham, Robert J.: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23674.php">Latham, Robert J.: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23404.php">Doug Roberts: "[OMPI users] Connection timed out with multiple nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
o I should report there has been an important developement in this
<br>
problem, before anyone spends time on my previous post.  We have
<br>
got the original test program to run without hanging by directly
<br>
connecting the two test compute nodes together (thus bypassing the
<br>
switch) as shown here, where eth2 is still the 10G interface ie)
<br>
<p>[roberpj_at_bro127:~/samples/openmpi/mpi_test] 
<br>
/opt/sharcnet/openmpi/1.6.5/intel-debug/bin/mpirun -np 2 --mca btl 
<br>
tcp,sm,self --mca btl_tcp_if_include eth2 --host bro127,bro128 ./a.out
<br>
Number of processes = 2
<br>
Test repeated 3 times for reliability
<br>
I am process 0 on node bro127
<br>
Run 1 of 3
<br>
P0: Sending to P1
<br>
P0: Waiting to receive from P1
<br>
P0: Received from to P1
<br>
Run 2 of 3
<br>
P0: Sending to P1
<br>
P0: Waiting to receive from P1
<br>
P0: Received from to P1
<br>
Run 3 of 3
<br>
P0: Sending to P1
<br>
P0: Waiting to receive from P1
<br>
P0: Received from to P1
<br>
P0: Done
<br>
I am process 1 on node bro128
<br>
P1: Waiting to receive from to P0
<br>
P1: Sending to to P0
<br>
P1: Waiting to receive from to P0
<br>
P1: Sending to to P0
<br>
P1: Waiting to receive from to P0
<br>
P1: Sending to to P0
<br>
P1: Done
<br>
<p>o This now points to the Netgear XSM7224S 10G switch.  The firmware
<br>
version turns out to be slightly old at 9.0.1.14, so we will update
<br>
it to the latest 9.0.1.29 and then run the test again. I will report
<br>
back the result. In the meantime, if anyone knows of configuration
<br>
setting(s) in the switch that could block openmpi message passing
<br>
then please reply to this comment.  Tx!
<br>
<p><p>---------- Forwarded message ----------
<br>
Date: Tue, 25 Feb 2014 20:07:31 -0500 (EST)
<br>
From: Doug Roberts &lt;roberpj_at_[hidden]&gt;
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Connection timed out with multiple nodes
<br>
<p>Hello again, The &quot;oob_stress&quot; program runs cleanly on each of
<br>
the two test nodes bro127 and bro128 as shown below.  Would
<br>
you say this rules out a problem with the network and switch,
<br>
or is there another test program(s) that should be run next ?
<br>
<p>o eth0 and eth2: without plm_base_verbose
<br>
<p>[roberpj_at_bro127:~/samples/openmpi/oob_stress] mpirun -npernode 1 -mca 
<br>
oob_tcp_if_include eth0 ./oob_stress
<br>
[bro127:02020] Ring 1 message size 10 bytes
<br>
[bro127:02020] [[27318,1],0] Ring 1 completed
<br>
[bro127:02020] Ring 2 message size 100 bytes
<br>
[bro127:02020] [[27318,1],0] Ring 2 completed
<br>
[bro127:02020] Ring 3 message size 1000 bytes
<br>
[bro127:02020] [[27318,1],0] Ring 3 completed
<br>
[roberpj_at_bro127:~/samples/openmpi/oob_stress] mpirun -npernode 1 -mca 
<br>
oob_tcp_if_include eth2 ./oob_stress
<br>
[bro127:02022] Ring 1 message size 10 bytes
<br>
[bro127:02022] [[27312,1],0] Ring 1 completed
<br>
[bro127:02022] Ring 2 message size 100 bytes
<br>
[bro127:02022] [[27312,1],0] Ring 2 completed
<br>
[bro127:02022] Ring 3 message size 1000 bytes
<br>
[bro127:02022] [[27312,1],0] Ring 3 completed
<br>
<p>[roberpj_at_bro128:~/samples/openmpi/oob_stress] mpirun -npernode 1 -mca 
<br>
oob_tcp_if_include eth0 ./oob_stress
<br>
[bro128:04484] Ring 1 message size 10 bytes
<br>
[bro128:04484] [[23046,1],0] Ring 1 completed
<br>
[bro128:04484] Ring 2 message size 100 bytes
<br>
[bro128:04484] [[23046,1],0] Ring 2 completed
<br>
[bro128:04484] Ring 3 message size 1000 bytes
<br>
[bro128:04484] [[23046,1],0] Ring 3 completed
<br>
[roberpj_at_bro128:~/samples/openmpi/oob_stress] mpirun -npernode 1 -mca 
<br>
oob_tcp_if_include eth2 ./oob_stress
<br>
[bro128:04486] Ring 1 message size 10 bytes
<br>
[bro128:04486] [[23040,1],0] Ring 1 completed
<br>
[bro128:04486] Ring 2 message size 100 bytes
<br>
[bro128:04486] [[23040,1],0] Ring 2 completed
<br>
[bro128:04486] Ring 3 message size 1000 bytes
<br>
[bro128:04486] [[23040,1],0] Ring 3 completed
<br>
<p>o eth2: with plm_base_verbose on
<br>
<p>[roberpj_at_bro127:~/samples/openmpi/oob_stress] mpirun -npernode 1 -mca 
<br>
oob_tcp_if_include eth2 -mca plm_base_verbose 5 ./oob_stress
<br>
[bro127:01936] mca:base:select:(  plm) Querying component [rsh]
<br>
[bro127:01936] [[INVALID],INVALID] plm:base:rsh_lookup on agent ssh : rsh path 
<br>
NULL
<br>
[bro127:01936] mca:base:select:(  plm) Query of component [rsh] set priority to 
<br>
10
<br>
[bro127:01936] mca:base:select:(  plm) Querying component [slurm]
<br>
[bro127:01936] mca:base:select:(  plm) Skipping component [slurm]. Query failed 
<br>
to return a module
<br>
[bro127:01936] mca:base:select:(  plm) Querying component [tm]
<br>
[bro127:01936] mca:base:select:(  plm) Skipping component [tm]. Query failed to 
<br>
return a module
<br>
[bro127:01936] mca:base:select:(  plm) Selected component [rsh]
<br>
[bro127:01936] plm:base:set_hnp_name: initial bias 1936 nodename hash 
<br>
3261509427
<br>
[bro127:01936] plm:base:set_hnp_name: final jobfam 27333
<br>
[bro127:01936] [[27333,0],0] plm:base:rsh_setup on agent ssh : rsh path NULL
<br>
[bro127:01936] [[27333,0],0] plm:base:receive start comm
<br>
[bro127:01936] released to spawn
<br>
[bro127:01936] [[27333,0],0] plm:base:setup_job for job [INVALID]
<br>
[bro127:01936] [[27333,0],0] plm:rsh: launching job [27333,1]
<br>
[bro127:01936] [[27333,0],0] plm:rsh: no new daemons to launch
<br>
[bro127:01936] [[27333,0],0] plm:base:launch_apps for job [27333,1]
<br>
[bro127:01936] [[27333,0],0] plm:base:report_launched for job [27333,1]
<br>
[bro127:01936] [[27333,0],0] plm:base:app_report_launch from daemon 
<br>
[[27333,0],0]
<br>
[bro127:01936] [[27333,0],0] plm:base:app_report_launched for proc 
<br>
[[27333,1],0] from daemon [[27333,0],0]: pid 1937 state 4 exit 0
<br>
[bro127:01936] [[27333,0],0] plm:base:app_report_launch completed processing
<br>
[bro127:01936] [[27333,0],0] plm:base:report_launched all apps reported
<br>
[bro127:01936] [[27333,0],0] plm:base:launch wiring up iof
<br>
[bro127:01936] [[27333,0],0] plm:base:launch completed for job [27333,1]
<br>
[bro127:01936] completed spawn for job [27333,1]
<br>
[bro127:01937] Ring 1 message size 10 bytes
<br>
[bro127:01937] [[27333,1],0] Ring 1 completed
<br>
[bro127:01937] Ring 2 message size 100 bytes
<br>
[bro127:01937] [[27333,1],0] Ring 2 completed
<br>
[bro127:01937] Ring 3 message size 1000 bytes
<br>
[bro127:01937] [[27333,1],0] Ring 3 completed
<br>
[bro127:01936] [[27333,0],0] plm:base:receive processing msg
<br>
[bro127:01936] [[27333,0],0] plm:base:receive update proc state command
<br>
[bro127:01936] [[27333,0],0] plm:base:receive got update_proc_state for job 
<br>
[27333,1]
<br>
[bro127:01936] [[27333,0],0] plm:base:receive got update_proc_state for vpid 0 
<br>
state 80 exit_code 0
<br>
[bro127:01936] [[27333,0],0] plm:base:receive updating state for proc 
<br>
[[27333,1],0] current state 10 new state 80
<br>
[bro127:01936] [[27333,0],0] plm:base:check_job_completed for job [27333,1] - 
<br>
num_terminated 1  num_procs 1
<br>
[bro127:01936] [[27333,0],0] plm:base:check_job_completed declared job 
<br>
[27333,1] normally terminated - checking all jobs
<br>
[bro127:01936] [[27333,0],0] releasing procs from node bro127
<br>
[bro127:01936] [[27333,0],0] releasing proc [[27333,1],0] from node bro127
<br>
[bro127:01936] [[27333,0],0] plm:base:check_job_completed all jobs terminated - 
<br>
waking up
<br>
[bro127:01936] [[27333,0],0] plm:base:orted_cmd sending orted_exit commands
<br>
[bro127:01936] [[27333,0],0] plm:base:receive stop comm
<br>
[bro127:01936] [[27333,0],0] plm:base:local:slave:finalize
<br>
<p><p>[roberpj_at_bro128:~/samples/openmpi/oob_stress] mpirun -npernode 1 -mca 
<br>
oob_tcp_if_include eth2 -mca plm_base_verbose 5 ./oob_stress
<br>
[bro128:04462] mca:base:select:(  plm) Querying component [rsh]
<br>
[bro128:04462] [[INVALID],INVALID] plm:base:rsh_lookup on agent ssh : rsh path 
<br>
NULL
<br>
[bro128:04462] mca:base:select:(  plm) Query of component [rsh] set priority to 
<br>
10
<br>
[bro128:04462] mca:base:select:(  plm) Querying component [slurm]
<br>
[bro128:04462] mca:base:select:(  plm) Skipping component [slurm]. Query failed 
<br>
to return a module
<br>
[bro128:04462] mca:base:select:(  plm) Querying component [tm]
<br>
[bro128:04462] mca:base:select:(  plm) Skipping component [tm]. Query failed to 
<br>
return a module
<br>
[bro128:04462] mca:base:select:(  plm) Selected component [rsh]
<br>
[bro128:04462] plm:base:set_hnp_name: initial bias 4462 nodename hash 186663077
<br>
[bro128:04462] plm:base:set_hnp_name: final jobfam 23275
<br>
[bro128:04462] [[23275,0],0] plm:base:rsh_setup on agent ssh : rsh path NULL
<br>
[bro128:04462] [[23275,0],0] plm:base:receive start comm
<br>
[bro128:04462] released to spawn
<br>
[bro128:04462] [[23275,0],0] plm:base:setup_job for job [INVALID]
<br>
[bro128:04462] [[23275,0],0] plm:rsh: launching job [23275,1]
<br>
[bro128:04462] [[23275,0],0] plm:rsh: no new daemons to launch
<br>
[bro128:04462] [[23275,0],0] plm:base:launch_apps for job [23275,1]
<br>
[bro128:04462] [[23275,0],0] plm:base:report_launched for job [23275,1]
<br>
[bro128:04462] [[23275,0],0] plm:base:app_report_launch from daemon 
<br>
[[23275,0],0]
<br>
[bro128:04462] [[23275,0],0] plm:base:app_report_launched for proc 
<br>
[[23275,1],0] from daemon [[23275,0],0]: pid 4463 state 4 exit 0
<br>
[bro128:04462] [[23275,0],0] plm:base:app_report_launch completed processing
<br>
[bro128:04462] [[23275,0],0] plm:base:report_launched all apps reported
<br>
[bro128:04462] [[23275,0],0] plm:base:launch wiring up iof
<br>
[bro128:04462] [[23275,0],0] plm:base:launch completed for job [23275,1]
<br>
[bro128:04462] completed spawn for job [23275,1]
<br>
[bro128:04463] Ring 1 message size 10 bytes
<br>
[bro128:04463] [[23275,1],0] Ring 1 completed
<br>
[bro128:04463] Ring 2 message size 100 bytes
<br>
[bro128:04463] [[23275,1],0] Ring 2 completed
<br>
[bro128:04463] Ring 3 message size 1000 bytes
<br>
[bro128:04463] [[23275,1],0] Ring 3 completed
<br>
[bro128:04462] [[23275,0],0] plm:base:receive processing msg
<br>
[bro128:04462] [[23275,0],0] plm:base:receive update proc state command
<br>
[bro128:04462] [[23275,0],0] plm:base:receive got update_proc_state for job 
<br>
[23275,1]
<br>
[bro128:04462] [[23275,0],0] plm:base:receive got update_proc_state for vpid 0 
<br>
state 80 exit_code 0
<br>
[bro128:04462] [[23275,0],0] plm:base:receive updating state for proc 
<br>
[[23275,1],0] current state 10 new state 80
<br>
[bro128:04462] [[23275,0],0] plm:base:check_job_completed for job [23275,1] - 
<br>
num_terminated 1  num_procs 1
<br>
[bro128:04462] [[23275,0],0] plm:base:check_job_completed declared job 
<br>
[23275,1] normally terminated - checking all jobs
<br>
[bro128:04462] [[23275,0],0] releasing procs from node bro128
<br>
[bro128:04462] [[23275,0],0] releasing proc [[23275,1],0] from node bro128
<br>
[bro128:04462] [[23275,0],0] plm:base:check_job_completed all jobs terminated - 
<br>
waking up
<br>
[bro128:04462] [[23275,0],0] plm:base:orted_cmd sending orted_exit commands
<br>
[bro128:04462] [[23275,0],0] plm:base:receive stop comm
<br>
[bro128:04462] [[23275,0],0] plm:base:local:slave:finalize
<br>
<p><p>---------- Forwarded message ----------
<br>
Date: Fri, 31 Jan 2014 13:55:41 -0800
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Connection timed out with multiple nodes
<br>
<p>The only relevant parts are from the application procs - orterun and the orted 
<br>
don't participate in this exchange and never see the BTLs anyway.
<br>
<p>It looks like there is just something blocking data transfer across eth2 for 
<br>
some reason. I'm afraid I have no idea why - can you run a standard (i.e., 
<br>
non-MPI) test across it?
<br>
<p>For example, I have an oob-stress program in orte/test/system. Try running it
<br>
<p>mpirun -npernode 1 -mca oob_tcp_if_include eth2 ./oob_stress
<br>
<p>and see if anything works. If the out-of-band can't communicate, this won't 
<br>
even start - it'll just hang. If you configure OMPI --enable-debug, you can add 
<br>
-mca plm_base_verbose 5 to watch the launch operation and see if the remote 
<br>
daemon is able to respond.
<br>
<p>My guess is that the answer will be &quot;no&quot; and that this will hang, but that 
<br>
would tell us the problem is in the network and not in the TCP BTL.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23676.php">Latham, Robert J.: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23674.php">Latham, Robert J.: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23404.php">Doug Roberts: "[OMPI users] Connection timed out with multiple nodes"</a>
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
