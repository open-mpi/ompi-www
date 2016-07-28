<?
$subject_val = "Re: [OMPI users] signal 15 (terminated)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 22:15:53 2009" -->
<!-- isoreceived="20090204031553" -->
<!-- sent="Tue, 3 Feb 2009 19:15:47 -0800 (PST)" -->
<!-- isosent="20090204031547" -->
<!-- name="Hana Milani" -->
<!-- email="hana.milani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] signal 15 (terminated)" -->
<!-- id="820470.91725.qm_at_web111211.mail.gq1.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] signal 15 (terminated)" -->
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
<strong>Subject:</strong> Re: [OMPI users] signal 15 (terminated)<br>
<strong>From:</strong> Hana Milani (<em>hana.milani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-03 22:15:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7959.php">John Hearns: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7957.php">Ralph Castain: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Maybe in reply to:</strong> <a href="7943.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7959.php">John Hearns: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Reply:</strong> <a href="7959.php">John Hearns: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Reply:</strong> <a href="7963.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sorry if I didn't answer:
<br>
<p>Have you checked to ensure that the job manager is not killing your job?
<br>
<p>I am not quite sure what you mean by job manager, but, this is the personal computer of mine. Much to my surprise, I have also open suse on my laptop, took the similar procedure then the same message appeared !!!!
<br>
<p>Is there a local system administrator that you can talk to about this?
<br>
<p>Not a very good one, but I asked someone who had seen this message on his own works and this was his answer:
<br>
<p>It means that the program corresponding to the process identifier 2407 (the PID you can find on the second column from the &quot;ps aux&quot; command) running on one of you cluster's node (named linux-4pel) has stopped because it has received the signal SIGTERM (termination signal 15). Sorry if this is a long explanation of things you already know :-). Let's say thay you have a program running on your system ; you can figure out its process ID number nnnnn by doing a &quot;ps aux&quot;. Now if you want to stop it - f.e. because it is out of control - a convenient way is to send a termination request to the process by issuing the &quot;kill -s SIGTERM nnnnn&quot;. Here, openmpi notified to you  that one of the spawned processes has been terminated because it has received the SIGTERM signal and, as a consequence, has stopped all the other distributed processes running on the nodes - as PID 2407 process has acknowledged SIGTERM, openmpi has sent SIGTERM to all the processes associated
<br>
&nbsp;to your parallel run.
<br>
Now ... how to avoid this? I am afraid there is no easy answer. The 2407 process has probably received a SIGTERM from another application - I mean it has not died by accident (a hanging or faulting process exits without invoking the MPI_FINALYZE and produces a different error message). The difficulty is that you have to investigate what application has issued the SIGTERM - what application has told your 2407 process to terminate. If you are working on a cluster managing the MPI distributed processes to the nodes with a resource manager (like SLURM, PBS or Torque), I would check if the manager is not limiting the memory size footprint or the CPU time of the jobs accepted by the linux-4pel computer. It is tricky for me to figure out what could have asked your program to stop ... does it stops immediately or during a long run (CPU time?), with small jobs or large ones (memory?) ; is MPI running on a personal computer or a huge cluster (resource manager?),
<br>
&nbsp;do you have sufficient privileges to have a look on /var/log/messages on linux-4pel? 
<br>
<p>1. The code stops running immediately. 2. The computers are my personal ones and no administrator has limited the 7.9 GiB memory I have. 3. Sequentially the run takes 500-700MiB memory.
<br>
<p>3. Lokking at the message after I executed the run this was the message in /var/log/messages:
<br>
<p>Jan 23 16:24:32 linux-jzqs gdm[2566]: GLib-CRITICAL: g_key_file_get_string: assertion `key_file != NULL' failed
<br>
Jan 23 16:24:32 linux-jzqs gdm[2566]: GLib-CRITICAL: g_key_file_get_string: assertion `key_file != NULL' failed
<br>
Jan 23 16:24:32 linux-jzqs gdm[2566]: GLib-CRITICAL: g_key_file_free: assertion `key_file != NULL' failed
<br>
Jan 23 16:24:33 linux-jzqs seahorse-agent[24718]: Failed to send buffer
<br>
Jan 23 16:24:33 linux-jzqs seahorse-agent[24718]: Failed to send buffer
<br>
Jan 23 16:24:35 linux-jzqs pulseaudio[24742]: main.c: This program is not intended to be run as root (unless --system is specified).
<br>
Jan 23 16:24:35 linux-jzqs pulseaudio[24742]: pid.c: Stale PID file, overwriting.
<br>
Jan 23 16:24:35 linux-jzqs pulseaudio[24743]: main.c: This program is not intended to be run as root (unless --system is specified).
<br>
Jan 23 16:24:35 linux-jzqs pulseaudio[24743]: pid.c: Daemon already running.
<br>
Jan 23 16:24:35 linux-jzqs pulseaudio[24743]: main.c: pa_pid_file_create() failed.
<br>
Jan 23 16:24:35 linux-jzqs pulseaudio[24745]: main.c: This program is not intended to be run as root (unless --system is specified).
<br>
Jan 23 16:24:35 linux-jzqs pulseaudio[24745]: pid.c: Daemon already running.
<br>
Jan 23 16:24:35 linux-jzqs pulseaudio[24745]: main.c: pa_pid_file_create() failed.
<br>
Jan 23 16:24:37 linux-jzqs gconfd (root-24630): Resolved address &quot;xml:readwrite:/root/.gconf&quot; to a writable configuration source at position 0
<br>
Jan 23 16:24:39 linux-jzqs kernel: CPU0 attaching NULL sched-domain.
<br>
Jan 23 16:24:39 linux-jzqs kernel: CPU1 attaching NULL sched-domain.
<br>
Jan 23 16:24:39 linux-jzqs kernel: CPU0 attaching sched-domain:
<br>
Jan 23 16:24:39 linux-jzqs kernel:  domain 0: span 00000000,00000000,00000000,00000003
<br>
Jan 23 16:24:39 linux-jzqs kernel:   groups: 00000000,00000000,00000000,00000001 00000000,00000000,00000000,00000002
<br>
Jan 23 16:24:39 linux-jzqs kernel: CPU1 attaching sched-domain:
<br>
Jan 23 16:24:39 linux-jzqs kernel:  domain 0: span 00000000,00000000,00000000,00000003
<br>
Jan 23 16:24:39 linux-jzqs kernel:   groups: 00000000,00000000,00000000,00000002 00000000,00000000,00000000,00000001
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7958/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7959.php">John Hearns: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7957.php">Ralph Castain: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Maybe in reply to:</strong> <a href="7943.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7959.php">John Hearns: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Reply:</strong> <a href="7959.php">John Hearns: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Reply:</strong> <a href="7963.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
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
