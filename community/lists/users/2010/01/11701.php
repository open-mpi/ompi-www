<?
$subject_val = "[OMPI users] mpirun hangs with multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 11:56:49 2010" -->
<!-- isoreceived="20100106165649" -->
<!-- sent="Wed, 6 Jan 2010 14:56:23 -0200" -->
<!-- isosent="20100106165623" -->
<!-- name="Marcia Cristina Cera" -->
<!-- email="marcia.cristina.cera_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun hangs with multiple nodes" -->
<!-- id="6546e7be1001060856ya13d681jea4e2fbca6fc0b48_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun hangs with multiple nodes<br>
<strong>From:</strong> Marcia Cristina Cera (<em>marcia.cristina.cera_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-06 11:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11702.php">Tim Miller: "[OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Previous message:</strong> <a href="11700.php">Saurabh T: "[OMPI users] OpenMPI w valgrind: need to recompile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11703.php">Ralph Castain: "Re: [OMPI users] mpirun hangs with multiple nodes"</a>
<li><strong>Reply:</strong> <a href="11703.php">Ralph Castain: "Re: [OMPI users] mpirun hangs with multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using the OpenMPI v1.4a1r22335 to run an MPI application that creates
<br>
dynamically processes.
<br>
The application behavior is like explained in a previous e-mail
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/12/11540.php">http://www.open-mpi.org/community/lists/users/2009/12/11540.php</a>
<br>
<p>The application is launched by a command line such as:
<br>
<p>&nbsp;&nbsp;$ mpirun -hostfile myhosts -np 1 myapp
<br>
<p>myhosts describes 2 nodes:
<br>
node1 slots=8
<br>
node2 slots=8
<br>
<p>My application runs as expected creating dynamic processes into the two
<br>
nodes.
<br>
After compute, all processes (static and dynamic ones) finalizes too --
<br>
confirmed
<br>
looking 'top' and 'ps' commands.
<br>
But, the mpirun remains running and the application never liberate the
<br>
shell.
<br>
I try use mpiexec, but it also hangs.
<br>
If I run locally (without -hostfile), the mpirun does not hang!
<br>
<p>Someone could help me?!
<br>
<p>For awhile, I create a script to kill the mpirun to enable the execution of
<br>
many consecutive mpirun calls,
<br>
but it is not a &quot;beautiful&quot; solution :)
<br>
<p>thanks
<br>
<p>m&#225;rcia
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11701/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11702.php">Tim Miller: "[OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Previous message:</strong> <a href="11700.php">Saurabh T: "[OMPI users] OpenMPI w valgrind: need to recompile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11703.php">Ralph Castain: "Re: [OMPI users] mpirun hangs with multiple nodes"</a>
<li><strong>Reply:</strong> <a href="11703.php">Ralph Castain: "Re: [OMPI users] mpirun hangs with multiple nodes"</a>
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
