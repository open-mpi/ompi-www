<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 13 08:33:06 2007" -->
<!-- isoreceived="20070313123306" -->
<!-- sent="Tue, 13 Mar 2007 13:32:53 +0100" -->
<!-- isosent="20070313123253" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] signal handling (part 2)" -->
<!-- id="54770F74-69A7-43FC-B5E0-558E51605BC9_at_staff.uni-marburg.de" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C21B142D.1FB1%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-13 08:32:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2791.php">Ralph H Castain: "Re: [OMPI users] Orted freezes on launch of application"</a>
<li><strong>Previous message:</strong> <a href="2789.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>In reply to:</strong> <a href="2783.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2793.php">Olesen, Mark: "Re: [OMPI users] signal handling (part 2)"</a>
<li><strong>Maybe reply:</strong> <a href="2793.php">Olesen, Mark: "Re: [OMPI users] signal handling (part 2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 12.03.2007 um 21:29 schrieb Ralph Castain:
<br>
<p><span class="quotelev2">&gt;&gt; But now we are going beyond Mark's initial problem.
</span><br>
<p>Back to the initial problem: suspending a parallel job in SGE leads to:
<br>
<p>19924  1786 19924 S     \_ sge_shepherd-45250 -bg
<br>
19926 19924 19926 Ts    |   \_ /bin/sh /var/spool/sge/node39/ 
<br>
job_scripts/45250
<br>
19927 19926 19926 T     |       \_ mpirun -np 4 /home/reuti/mpihello
<br>
19928 19927 19926 T     |           \_ qrsh -inherit -noshell - 
<br>
nostdin -V node39 /home/reuti/local/openmpi-1.2rc3/bin/orted --no- 
<br>
daemonize --bootpr
<br>
19934 19928 19926 T     |           |   \_ /usr/sge/utilbin/lx24-x86/ 
<br>
rsh -n -p 36878 node39 exec '/usr/sge/utilbin/lx24-x86/qrsh_starter'  
<br>
'/var/spo
<br>
19929 19927 19926 T     |           \_ qrsh -inherit -noshell - 
<br>
nostdin -V node44 /home/reuti/local/openmpi-1.2rc3/bin/orted --no- 
<br>
daemonize --bootpr
<br>
19935 19929 19926 T     |           |   \_ /usr/sge/utilbin/lx24-x86/ 
<br>
rsh -n -p 55907 node44 exec '/usr/sge/utilbin/lx24-x86/qrsh_starter'  
<br>
'/var/spo
<br>
19930 19927 19926 T     |           \_ qrsh -inherit -noshell - 
<br>
nostdin -V node41 /home/reuti/local/openmpi-1.2rc3/bin/orted --no- 
<br>
daemonize --bootpr
<br>
19939 19930 19926 T     |           |   \_ /usr/sge/utilbin/lx24-x86/ 
<br>
rsh -n -p 59798 node41 exec '/usr/sge/utilbin/lx24-x86/qrsh_starter'  
<br>
'/var/spo
<br>
19931 19927 19926 T     |           \_ qrsh -inherit -noshell - 
<br>
nostdin -V node38 /home/reuti/local/openmpi-1.2rc3/bin/orted --no- 
<br>
daemonize --bootpr
<br>
19938 19931 19926 T     |               \_ /usr/sge/utilbin/lx24-x86/ 
<br>
rsh -n -p 35136 node38 exec '/usr/sge/utilbin/lx24-x86/qrsh_starter'  
<br>
'/var/spo
<br>
19932  1786 19932 S     \_ sge_shepherd-45250 -bg
<br>
19933 19932 19933 Ss        \_ /usr/sge/utilbin/lx24-x86/rshd -l
<br>
19936 19933 19936 S             \_ /usr/sge/utilbin/lx24-x86/ 
<br>
qrsh_starter /var/spool/sge/node39/active_jobs/45250.1/1.node39 noshell
<br>
19937 19936 19937 S                 \_ /home/reuti/local/ 
<br>
openmpi-1.2rc3/bin/orted --no-daemonize --bootproxy 1 --name 0.0.1 -- 
<br>
num_procs 5 --vpid_st
<br>
19940 19937 19937 R                     \_ /home/reuti/mpihello
<br>
<p>The job is still running, and only the master task is stopped. This  
<br>
is by design in SGE, and the parallel lib should handle it on it's  
<br>
own. So I request the warnings with -notify in the qsub:
<br>
<p>mpirun: Forwarding signal 10 to jobmpirun noticed that job rank 0  
<br>
with PID 20526 on node node39 exited on signal 10 (User defined  
<br>
signal 1).
<br>
[node39:20513] ERROR: A daemon on node node39 failed to start as  
<br>
expected.
<br>
[node39:20513] ERROR: There may be more information available from
<br>
[node39:20513] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[node39:20513] ERROR: If the problem persists, please restart the
<br>
[node39:20513] ERROR: Grid Engine PE job
<br>
[node39:20513] The daemon received a signal 10.
<br>
[node39:20513] ERROR: A daemon on node node42 failed to start as  
<br>
expected.
<br>
[node39:20513] ERROR: There may be more information available from
<br>
[node39:20513] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[node39:20513] ERROR: If the problem persists, please restart the
<br>
[node39:20513] ERROR: Grid Engine PE job
<br>
[node39:20513] The daemon received a signal 10.
<br>
<p>Which Mark already found. The USR1/2 by default terminate the  
<br>
application. So I put into my mpihello.c to ignore the signal:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;signal(SIGUSR1, SIG_IGN);
<br>
<p>(yes, the old style should be ok for only ignore and terminate)
<br>
<p>mpirun: Forwarding signal 10 to job[node39:20765] ERROR: A daemon on  
<br>
node node39 failed to start as expected.
<br>
[node39:20765] ERROR: There may be more information available from
<br>
[node39:20765] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[node39:20765] ERROR: If the problem persists, please restart the
<br>
[node39:20765] ERROR: Grid Engine PE job
<br>
[node39:20765] The daemon received a signal 10.
<br>
[node39:20765] ERROR: A daemon on node node38 failed to start as  
<br>
expected.
<br>
[node39:20765] ERROR: There may be more information available from
<br>
[node39:20765] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[node39:20765] ERROR: If the problem persists, please restart the
<br>
[node39:20765] ERROR: Grid Engine PE job
<br>
[node39:20765] The daemon received a signal 10.
<br>
[node39:20765] ERROR: A daemon on node node40 failed to start as  
<br>
expected.
<br>
[node39:20765] ERROR: There may be more information available from
<br>
[node39:20765] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[node39:20765] ERROR: If the problem persists, please restart the
<br>
[node39:20765] ERROR: Grid Engine PE job
<br>
[node39:20765] The daemon received a signal 10.
<br>
[node39:20765] ERROR: A daemon on node node44 failed to start as  
<br>
expected.
<br>
[node39:20765] ERROR: There may be more information available from
<br>
[node39:20765] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[node39:20765] ERROR: If the problem persists, please restart the
<br>
[node39:20765] ERROR: Grid Engine PE job
<br>
[node39:20765] The daemon received a signal 10.
<br>
<p>And now the odd thing: the jobscript (with the mpirun) is gone on the  
<br>
head node of this parallel job, but all the spawned qrsh processes  
<br>
are still there:
<br>
<p>#!/bin/sh
<br>
trap '' usr1
<br>
export PATH=/home/reuti/local/openmpi-1.2rc3/bin:$PATH
<br>
mpirun -np $NSLOTS ~/mpihello
<br>
<p><p>20771  1786 20771 S     \_ sge_shepherd-45258 -bg
<br>
20772 20771 20772 Ss        \_ /usr/sge/utilbin/lx24-x86/rshd -l
<br>
20775 20772 20775 S             \_ /usr/sge/utilbin/lx24-x86/ 
<br>
qrsh_starter /var/spool/sge/node39/active_jobs/45258.1/1.node39 noshell
<br>
20776 20775 20776 S                 \_ /home/reuti/local/ 
<br>
openmpi-1.2rc3/bin/orted --no-daemonize --bootproxy 1 --name 0.0.1 -- 
<br>
num_procs 5 --vpid_st
<br>
20778 20776 20776 R                     \_ /home/reuti/mpihello
<br>
<p><p>So in the SGE case: usr1 should be caught by the mpirun (and not  
<br>
terminate it), which will notify the daemons to stop each ones child  
<br>
processes. This would simulate a real suspend, performed by OpenMPI.
<br>
<p>Same might be true for usr2 as warning for a sigkill, but this is not  
<br>
really necessary, as this can also be performed by SGE.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; avoid seeing any signals from your terminal. When you issue a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal, mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; picks it up and forwards it to your application processes via the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemons - the ORTE daemons, however, do *not* look at that signal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pass it along.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As for timing, all we do is pass STOP to the OpenMPI application
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's up to the local system as to what happens when a &quot;kill - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; STOP&quot; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issued. It was always my impression that the system stopped process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; execution immediately under that signal, but with some allowance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the old
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kernel vs user space issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Once all the processes have terminated, mpirun tells the daemons to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; go ahead
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and exit. That's the only way the daemons get terminated in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you tell us something about your system? Is this running under
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what kind of OS, how was OpenMPI configured, etc?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 3/12/07 1:26 PM, &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 12.03.2007 um 19:55 schrieb Ralph Castain:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'll have to look into it - I suspect this is simply an erroneous
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and that no daemon is actually being started.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm not entirely sure I understand what's happening, though, in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; your code.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Are you saying that mpirun starts some number of application
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; run merrily along, and then qsub sends out USR1/2 signals followed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; by STOP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and then KILL in an effort to abort the job? So the application
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; don't normally terminate, but instead are killed via these  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; signals?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you specify -notify in SGE with the qsub, then jobs are  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; warned by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the sge_shepered (parent if the job) during execution, so that they
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could perfom some proper shutdown action, before they are really
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stopped/killed:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for suspend: USR1 -wait-defined-time- STOP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for kill: USR2 -wait-defined-time- KILL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Worth to be noted: the signals are sent to the complete  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processgroup
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of the job created by the jobscript and mpirun, but not to each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon which is created by the internal qrsh on any of the slave
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes! This should be orte's duty.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Question is also: are OpenMPI jobs surviving a STOP for some  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all, or will there be timing issues due to communication timeouts?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HTH - Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Just want to ensure I understand the scenario here as that is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; obviously unique to GE.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 3/12/07 9:42 AM, &quot;Olesen, Mark&quot; &lt;Mark.Olesen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm testing openmpi 1.2rc1 with GridEngine 6.0u9 and ran into
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; interesting
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; behaviour when using the qsub -notify option.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; With -notify, USR1 and USR2 are sent X seconds before sending  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; STOP
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and KILL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; signals, respectively.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When the USR2 signal is sent to the process group with the mpirun
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; process, I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; receive an error message about not being able to start a daemon:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun: Forwarding signal 12 to job[dealc12:18212] ERROR: A  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; daemon
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on node
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; dealc12 failed to start as expected.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: There may be more information available  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: the 'qstat -t' command on the Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tasks.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: If the problem persists, please restart  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dealc12:18212] The daemon received a signal 12.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: A daemon on node dealc20 failed to  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; start as
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; expected.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: There may be more information available  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: the 'qstat -t' command on the Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tasks.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: If the problem persists, please restart  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dealc12:18212] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [dealc12:18212] The daemon received a signal 12.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The job eventually stops, but the mpirun process itself continues
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to live
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (just the ppid changes).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; According to orte(1)/Signal Propagation, USR1 and USR2 should be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; propagated
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to all processes in the job (which seems to be happening), but  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; why
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; daemon start being attempted and the mpirun not being stopped?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /mark
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This e-mail message and any attachments may contain legally
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; privileged,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; confidential or proprietary Information, or information otherwise
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; protected by
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; law of ArvinMeritor, Inc., its affiliates, or third parties. This
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; notice
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; serves as marking of its &#132;Confidential&#137; status as defined in any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; confidentiality agreements concerning the sender and  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; recipient. If
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; you are not
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the intended recipient(s), or the employee or agent responsible
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for delivery
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of this message to the intended recipient(s), you are hereby
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; notified that any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; dissemination, distribution or copying of this e-mail message is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; strictly
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; prohibited. If you have received this message in error, please
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; immediately
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; notify the sender and delete this e-mail message from your
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; computer.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2791.php">Ralph H Castain: "Re: [OMPI users] Orted freezes on launch of application"</a>
<li><strong>Previous message:</strong> <a href="2789.php">Reuti: "Re: [OMPI users] signal handling"</a>
<li><strong>In reply to:</strong> <a href="2783.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2793.php">Olesen, Mark: "Re: [OMPI users] signal handling (part 2)"</a>
<li><strong>Maybe reply:</strong> <a href="2793.php">Olesen, Mark: "Re: [OMPI users] signal handling (part 2)"</a>
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
