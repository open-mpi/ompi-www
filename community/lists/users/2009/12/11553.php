<?
$subject_val = "[OMPI users] Debugging spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 06:06:59 2009" -->
<!-- isoreceived="20091216110659" -->
<!-- sent="Wed, 16 Dec 2009 12:06:53 +0100" -->
<!-- isosent="20091216110653" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] Debugging spawned processes" -->
<!-- id="9b0da5ce0912160306m392fdc6p8f8bfd2bf30427d3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Debugging spawned processes<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 06:06:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11554.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11552.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11554.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Reply:</strong> <a href="11554.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Reply:</strong> <a href="11605.php">Ashley Pittman: "Re: [OMPI users] Debugging spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
Until now i always wrote applications for which the number of processes
<br>
was given on the command line with -np.
<br>
To debug these applications i wrote a script, run_gdb.sh which basically
<br>
open a xterm and starts gdb in it for my application.
<br>
This allowed me to have a window for each of the processes being debugged.
<br>
<p>Now, however, i write my first application in which additional processes are
<br>
being spawned. My question is now: how can i open xterm windows in which
<br>
gdb runs for the spawned processes?
<br>
<p>The only way i can think of is to pass my script run_gdb.sh into the argv
<br>
parameters of MPI_Spawn.
<br>
Would this be correct?
<br>
If yes, what about other parameters passed to the spawning process, such as
<br>
environment variables passed via -x? Are they being passed to the spawned
<br>
processes as well? In my case this would be necessary so that processes
<br>
on other machine will get the $DISPLAY environment variable in order to
<br>
display their xterms with gdb on my workstation.
<br>
<p>Another negative point would be the need to change the argv parameters
<br>
every time one switches between debugging and normal running.
<br>
<p>Has anybody got some hints on how to debug spawned processes?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11554.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11552.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11554.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Reply:</strong> <a href="11554.php">Ralph Castain: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Reply:</strong> <a href="11605.php">Ashley Pittman: "Re: [OMPI users] Debugging spawned processes"</a>
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
