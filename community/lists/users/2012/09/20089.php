<?
$subject_val = "Re: [OMPI users] what is a &quot;node&quot;?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  1 06:41:26 2012" -->
<!-- isoreceived="20120901104126" -->
<!-- sent="Sat, 1 Sep 2012 12:41:22 +0200" -->
<!-- isosent="20120901104122" -->
<!-- name="Zbigniew Koza" -->
<!-- email="zzkoza_at_[hidden]" -->
<!-- subject="Re: [OMPI users] what is a &amp;quot;node&amp;quot;?" -->
<!-- id="CA+dv2NGT26H+yxuXuPQx0Nr-vDSzDBq8f5WLh8Z2nv07wYPB+w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="503FB1BC.1050400_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] what is a &quot;node&quot;?<br>
<strong>From:</strong> Zbigniew Koza (<em>zzkoza_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-01 06:41:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20090.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Previous message:</strong> <a href="20088.php">Andrea Negri: "Re: [OMPI users] users Digest, Vol 2339, Issue 5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20074.php">Gus Correa: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20090.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="20090.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have one more question.
<br>
I wanted to experiment with processor affinity command-line options on my
<br>
ubuntu PC.
<br>
When I use OpenMPI compiled from sourecs a few weeks ago, mpirun returns
<br>
error messages.
<br>
However, the&quot;official&quot; OpenMPI installation on the same machine makes no
<br>
problem.
<br>
Does it mean there's a  bug in OpenMPI-current and I should report a bug?
<br>
<p>=======  1. OpneMPI version: ====
<br>
<p>mpirun -V
<br>
mpirun (Open MPI) 1.9a1r26880
<br>
<p>Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>==== 2. mpirun &quot;offending&quot; command and error report: ===
<br>
<p>zkoza_at_zbyszek:~$ mpirun -np 2 --bind-to-core -bycore --report-bindings
<br>
uptime
<br>
--------------------------------------------------------------------------
<br>
WARNING: a request was made to bind a process. While the system
<br>
supports binding the process itself, at least one node does NOT
<br>
support binding memory to the process location.
<br>
<p>&nbsp;&nbsp;Node:  zbyszek
<br>
<p>This is a warning only; your job will continue, though performance may
<br>
be degraded.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to find the specified executable file, and therefore
<br>
did not launch the job.  This error was first reported for process
<br>
rank 0; it may have occurred for other processes as well.
<br>
<p>NOTE: A common cause for this error is misspelling a mpirun command
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;line parameter option (remember that mpirun interprets the first
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unrecognized command line token as the executable).
<br>
<p>Node:       zbyszek
<br>
Executable: -bycore
<br>
--------------------------------------------------------------------------
<br>
2 total processes failed to start
<br>
<p><p>==== 3. the same mpirun command using standard MPI installation ====
<br>
<p>LD_LIBRARY_PATH=/usr/lib/openmpi /usr/bin/mpirun --path /usr/lib/openmpi
<br>
-np 2 --bind-to-core -bycore --report-bindings uptime
<br>
[zbyszek:03104] [[7637,0],0] odls:default:fork binding child [[7637,1],0]
<br>
to cpus 0001
<br>
[zbyszek:03104] [[7637,0],0] odls:default:fork binding child [[7637,1],1]
<br>
to cpus 0002
<br>
&nbsp;12:25:51 up 21:27,  1 user,  load average: 0.00, 0.01, 0.05
<br>
&nbsp;12:25:51 up 21:27,  1 user,  load average: 0.00, 0.01, 0.05
<br>
<p><p>==== 4. version of standard OpenMPI ===
<br>
<p>zkoza_at_zbyszek:~$ LD_LIBRARY_PATH=/usr/lib/openmpi /usr/bin/mpirun --path
<br>
/usr/lib/openmpi --version
<br>
mpirun (Open MPI) 1.4.3
<br>
<p><p><p>Z Koza
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20089/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20090.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Previous message:</strong> <a href="20088.php">Andrea Negri: "Re: [OMPI users] users Digest, Vol 2339, Issue 5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20074.php">Gus Correa: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20090.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="20090.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
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
