<?
$subject_val = "[OMPI users] Problems with program-execution with OpenMPI: Orted: command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 02:56:19 2008" -->
<!-- isoreceived="20080422065619" -->
<!-- sent="Tue, 22 Apr 2008 08:56:10 +0200" -->
<!-- isosent="20080422065610" -->
<!-- name="gildo.rex_at_[hidden]" -->
<!-- email="gildo.rex_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with program-execution with OpenMPI: Orted: command not found" -->
<!-- id="20080422065610.167400_at_gmx.net" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found<br>
<strong>From:</strong> <a href="mailto:gildo.rex_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problems%20with%20program-execution%20with%20OpenMPI:%20Orted:%20command%20not%20found"><em>gildo.rex_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-04-22 02:56:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5432.php">jody: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5430.php">Terry Frankcombe: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5432.php">jody: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5432.php">jody: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5433.php">Doug Reeder: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I wanted to compare MPICH and OpenMPI. MPICH works fine. So I installed OpenMPI the same way (configure, make, make install). The commands are found in the OpenMPI installation directory.
<br>
<p>When I tried to run programs I was a little bit confused, that there seems not to be a default hosts-file like in MPICH. I included it in the command with &quot;--hostfile&quot;.
<br>
<p>When I now want to run my first test with
<br>
<p>&nbsp;&nbsp;mpirun -np 2 --hostfile /home/stephan/mpd.hosts
<br>
<p>I get the error-message:
<br>
<p>&nbsp;&nbsp;orted: command not found
<br>
<p>The &quot;orted&quot;-executable resides as well as the &quot;mpirun&quot;- and &quot;mpiexec&quot;-executables in the directory /home/stephan/openmpi-install. &quot;orted&quot; is also found by &quot;which orted&quot;.
<br>
<p>What might be the problem? How does &quot;orted&quot; work? I'm not conscious about anything equivalent in MPICH...
<br>
<p>Thanks in advance for your help!
<br>
<p>Kind Regards
<br>
<p>Stephan
<br>
<pre>
-- 
Ist Ihr Browser Vista-kompatibel? Jetzt die neuesten 
Browser-Versionen downloaden: <a href="http://www.gmx.net/de/go/browser">http://www.gmx.net/de/go/browser</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5432.php">jody: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5430.php">Terry Frankcombe: "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5432.php">jody: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5432.php">jody: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5433.php">Doug Reeder: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
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
