<?
$subject_val = "[OMPI users] openmpi-1.3a1r18241  ompi-restart issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 16:05:07 2008" -->
<!-- isoreceived="20080423200507" -->
<!-- sent="Wed, 23 Apr 2008 13:04:45 -0700" -->
<!-- isosent="20080423200445" -->
<!-- name="Sharon Brunett" -->
<!-- email="sharon_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.3a1r18241  ompi-restart issue" -->
<!-- id="480F965D.9030205_at_cacr.caltech.edu" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.3a1r18241  ompi-restart issue<br>
<strong>From:</strong> Sharon Brunett (<em>sharon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-23 16:04:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5468.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5466.php">Danesh Daroui: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5468.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5468.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5561.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I'm using openmpi-1.3a1r18241 on a 2 node configuration and having troubles with the ompi-restart.  I can successfully ompi-checkpoint and ompi-restart a 1 way mpi code.
<br>
When I try a 2 way job running across 2 nodes, I get
<br>
<p>bash-2.05b$ ompi-restart -verbose ompi_global_snapshot_926.ckpt
<br>
[shc005:01159] Checking for the existence of (/home/sharon/ompi_global_snapshot_926.ckpt)
<br>
[shc005:01159] Restarting from file (ompi_global_snapshot_926.ckpt)
<br>
[shc005:01159]   Exec in self
<br>
Restart failed: Permission denied
<br>
Restart failed: Permission denied 
<br>
<p><p><p>If I try running as root, using the same snapshot file, the code restarts ok, but both tasks and up on the same node, rather than one per node (like the original mpirun).
<br>
<p>I'm using BLCR version 0.6.5.
<br>
I generate checkpoints via 'ompi-checkpoint pid'
<br>
where pid is the pid of the mpirun task below
<br>
<p>mpirun -np 2 -am ft-enable-cr ./xhpl
<br>
<p><p>Thanks very much for any hints you can give on how to resolve either of these problems.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5468.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5466.php">Danesh Daroui: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5468.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5468.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5561.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
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
