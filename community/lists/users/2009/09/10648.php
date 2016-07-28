<?
$subject_val = "[OMPI users] unable to access or execute";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 19:58:00 2009" -->
<!-- isoreceived="20090914235800" -->
<!-- sent="Tue, 15 Sep 2009 01:57:52 +0200" -->
<!-- isosent="20090914235752" -->
<!-- name="Dominik T&#225;borsk&#253;" -->
<!-- email="bremby_at_[hidden]" -->
<!-- subject="[OMPI users] unable to access or execute" -->
<!-- id="1252972672.4280.4.camel_at_eddy" -->
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
<strong>Subject:</strong> [OMPI users] unable to access or execute<br>
<strong>From:</strong> Dominik T&#225;borsk&#253; (<em>bremby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-14 19:57:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10649.php">Ralph Castain: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Previous message:</strong> <a href="10647.php">Jean Potsam: "[OMPI users] Application hangs when checkpointing application (update)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10649.php">Ralph Castain: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Reply:</strong> <a href="10649.php">Ralph Castain: "Re: [OMPI users] unable to access or execute"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>Since last time I made progress - I compiled openMPI 1.3.3 from sources,
<br>
now I'm trying to run it on one of my nodes. I am using the same
<br>
software on the master, but master is Ubuntu 9.04 (NOT using openMPI
<br>
1.3.2 from repos) and the node is my own Linux system - it lacks many
<br>
features so there might be the source of the problem.
<br>
<p>When I try to run hello world program, it gives me this error:
<br>
<p>$ /openMPI/bin/mpirun
<br>
-hostfile /home/eddy/Dreddux/host.machine5 ./projekty/openMPI/hello/hello
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not
<br>
access
<br>
or execute an executable:
<br>
<p>Executable: ./projekty/openMPI/hello/hello
<br>
Node: machine5
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
<p>The executable is hello world program and is executable. I assume this
<br>
executable doesn't have to be on the node - that would be silly. So, I
<br>
don't understand what am I missing. Any ideas? Please!
<br>
<p>Dominik
<br>
<p>PS: thanks for your time!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10649.php">Ralph Castain: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Previous message:</strong> <a href="10647.php">Jean Potsam: "[OMPI users] Application hangs when checkpointing application (update)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10649.php">Ralph Castain: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>Reply:</strong> <a href="10649.php">Ralph Castain: "Re: [OMPI users] unable to access or execute"</a>
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
