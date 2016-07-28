<?
$subject_val = "[OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 22 22:31:31 2011" -->
<!-- isoreceived="20110423023131" -->
<!-- sent="Sat, 23 Apr 2011 03:31:23 +0100" -->
<!-- isosent="20110423023123" -->
<!-- name="Pablo Lopez Rios" -->
<!-- email="pablomme_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted" -->
<!-- id="4DB239FB.103_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted<br>
<strong>From:</strong> Pablo Lopez Rios (<em>pablomme_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-22 22:31:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16319.php">Reuti: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>Previous message:</strong> <a href="16317.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16319.php">Reuti: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>Reply:</strong> <a href="16319.php">Reuti: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm having a bit of a problem with wrapping mpirun in a script. The 
<br>
script needs to run an MPI job in the background and tail -f the output. 
<br>
Pressing Ctrl+C should stop tail -f, and the MPI job should continue. 
<br>
However mpirun seems to detect the SIGINT that was meant for tail, and 
<br>
kills the job immediately. I've tried workarounds involving nohup, 
<br>
disown, trap, subshells (including calling the script from within 
<br>
itself), etc, to no avail.
<br>
<p>The problem is that this doesn't happen if I run the command directly 
<br>
instead, without mpirun. Attached is a script that reproduces the 
<br>
problem. It runs a simple counting script in the background which takes 
<br>
10 seconds to run, and tails the output. If called with &quot;nompi&quot; as first 
<br>
argument, it will simply run bash -c &quot;$SCRIPT&quot; &gt;&amp; &quot;$out&quot; &amp;, and with 
<br>
&quot;mpi&quot; it will do the same with 'mpirun -np 1' prepended. The output I 
<br>
get is:
<br>
<p><p>$ ./ompi_bug.sh mpi
<br>
mpi:
<br>
1
<br>
2
<br>
3
<br>
4
<br>
^C
<br>
$ ./ompi_bug.sh nompi
<br>
nompi:
<br>
1
<br>
2
<br>
3
<br>
4
<br>
^C
<br>
$ cat output.*
<br>
mpi:
<br>
1
<br>
2
<br>
3
<br>
4
<br>
mpirun: killing job...
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 1222 on node pablomme exited 
<br>
on signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>nompi:
<br>
1
<br>
2
<br>
3
<br>
4
<br>
5
<br>
6
<br>
7
<br>
8
<br>
9
<br>
10
<br>
Done
<br>
<p><p>This convinces me that there is something strange with OpenMPI, since I 
<br>
expect no difference in signal handling when running a simple command 
<br>
with or without mpirun in the middle.
<br>
<p>I've tried looking for options to change this behaviour, but I don't 
<br>
seem to find any. Is there one, preferably in the form of an environment 
<br>
variable? Or is this a bug?
<br>
<p>I'm using OpenMPI v1.4.3 as distributed with Ubuntu 11.04, and also 
<br>
v1.2.8 as distributed with OpenSUSE 11.3.
<br>
<p>Thanks,
<br>
Pablo
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16318/ompi_bug.sh.gz">ompi_bug.sh.gz</a>
</ul>
<!-- attachment="ompi_bug.sh.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16319.php">Reuti: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>Previous message:</strong> <a href="16317.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16319.php">Reuti: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>Reply:</strong> <a href="16319.php">Reuti: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
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
