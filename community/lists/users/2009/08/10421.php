<?
$subject_val = "[OMPI users] --rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 16:53:11 2009" -->
<!-- isoreceived="20090818205311" -->
<!-- sent="Tue, 18 Aug 2009 15:53:06 -0500" -->
<!-- isosent="20090818205306" -->
<!-- name="Nulik Nol" -->
<!-- email="nuliknol_at_[hidden]" -->
<!-- subject="[OMPI users] --rankfile" -->
<!-- id="1c92aaf50908181353j1c5e819cq18751bc1cdc4fc0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] --rankfile<br>
<strong>From:</strong> Nulik Nol (<em>nuliknol_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 16:53:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10422.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>Previous message:</strong> <a href="10420.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10427.php">jody: "Re: [OMPI users] --rankfile"</a>
<li><strong>Reply:</strong> <a href="10427.php">jody: "Re: [OMPI users] --rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
i get this error when i use --rankfile,
<br>
&quot;There are not enough slots available in the system to satisfy the 2 slots&quot;
<br>
what could be the problem? I have tried using '*' for 'slot' param and
<br>
many other configs without any luck. Wihtout --rankfile everything
<br>
works fine. Will appriciate any help.
<br>
<p>master waver # cat neat.hostfile
<br>
n64 max-slots=1 slots=1
<br>
master max-slots=1 slots=1
<br>
master waver # cat neat.rankfile
<br>
rank 0=n64 slot=0
<br>
rank 1=master slot=0
<br>
master waver # mpirun  --rankfile neat.rankfile --hostfile
<br>
neat.hostfile -n 2 /tmp/neat
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 2 slots
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/tmp/neat
<br>
<p>Either request fewer slots for your application, or make more slots available
<br>
for use.
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>master waver # mpirun   --hostfile neat.hostfile -n 2 /tmp/neat
<br>
entering master main loop
<br>
recieved msg from 1
<br>
unknown message 0
<br>
^Cmpirun: killing job...
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 13064 on node master
<br>
exited on signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
2 total processes killed (some possibly by mpirun during cleanup)
<br>
mpirun: clean termination accomplished
<br>
<p>master waver #
<br>
<p><p><pre>
-- 
==================================
The power of zero is infinite
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10422.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>Previous message:</strong> <a href="10420.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10427.php">jody: "Re: [OMPI users] --rankfile"</a>
<li><strong>Reply:</strong> <a href="10427.php">jody: "Re: [OMPI users] --rankfile"</a>
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
