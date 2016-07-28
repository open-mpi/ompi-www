<?
$subject_val = "[OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 13 18:48:04 2016" -->
<!-- isoreceived="20160613224804" -->
<!-- sent="Mon, 13 Jun 2016 17:47:33 -0500" -->
<!-- isosent="20160613224733" -->
<!-- name="Jason Maldonis" -->
<!-- email="maldonis_at_[hidden]" -->
<!-- subject="[OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2" -->
<!-- id="CA+LevYKTe3-=CN-LPbguTWaeGDY090-K3E2=LLkEAtRhPWyJ6g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2<br>
<strong>From:</strong> Jason Maldonis (<em>maldonis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-13 18:47:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29426.php">Jason Maldonis: "[OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29424.php">Gilles Gouaillardet: "Re: [OMPI users] Openib Selection and Dual Port ConnectX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29427.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="29427.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am using OpenMPI 1.10.2 compiled with Intel. I am trying to get the
<br>
spawn functionality
<br>
to work inside a for loop, but continue to get the error &quot;too many retries
<br>
sending message to &lt;addr&gt;, giving up&quot; somewhere down the line in the for
<br>
loop, seemingly because the processors are not being fully freed when
<br>
disconnecting/finishing. I found the orte/test/mpi/loop_spawn.c
<br>
&lt;<a href="https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c">https://github.com/open-mpi/ompi/blob/master/orte/test/mpi/loop_spawn.c</a>&gt;
<br>
example/test,
<br>
and it has the exact same problem. I also found this
<br>
&lt;<a href="https://www.open-mpi.org/community/lists/devel/2016/04/18814.php">https://www.open-mpi.org/community/lists/devel/2016/04/18814.php</a>&gt; mailing
<br>
list post from ~ a month and a half ago.
<br>
<p>Is this PR (<a href="https://github.com/open-mpi/ompi/pull/1473">https://github.com/open-mpi/ompi/pull/1473</a>) about the same
<br>
issue I am having (ie the loop_spawn example not working)? If so, do you
<br>
know if we can downgrade to e.g. 1.10.1 or another version? Or is there
<br>
another solution to fix this bug until you get a new release out (or is one
<br>
coming shortly to fix this maybe?)?
<br>
<p>Below is the output of the loop_spawn test on our university's cluster,
<br>
which I know very little about in terms of architecture but can get
<br>
information if it's helpful. The large group of people who manage this
<br>
cluster are very good.
<br>
<p>Thanks for your time.
<br>
<p>Jason
<br>
<p>mpiexec -np 5 loop_spawn
<br>
parent*******************************
<br>
parent: Launching MPI*
<br>
parent*******************************
<br>
parent: Launching MPI*
<br>
parent*******************************
<br>
parent: Launching MPI*
<br>
parent*******************************
<br>
parent: Launching MPI*
<br>
parent*******************************
<br>
parent: Launching MPI*
<br>
parent: MPI_Comm_spawn #0 return : 0
<br>
parent: MPI_Comm_spawn #0 return : 0
<br>
parent: MPI_Comm_spawn #0 return : 0
<br>
parent: MPI_Comm_spawn #0 return : 0
<br>
parent: MPI_Comm_spawn #0 return : 0
<br>
Child: launch
<br>
Child merged rank = 5, size = 6
<br>
parent: MPI_Comm_spawn #0 rank 4, size 6
<br>
parent: MPI_Comm_spawn #0 rank 0, size 6
<br>
parent: MPI_Comm_spawn #0 rank 2, size 6
<br>
parent: MPI_Comm_spawn #0 rank 3, size 6
<br>
parent: MPI_Comm_spawn #0 rank 1, size 6
<br>
Child 329941: exiting
<br>
parent: MPI_Comm_spawn #1 return : 0
<br>
parent: MPI_Comm_spawn #1 return : 0
<br>
parent: MPI_Comm_spawn #1 return : 0
<br>
parent: MPI_Comm_spawn #1 return : 0
<br>
parent: MPI_Comm_spawn #1 return : 0
<br>
Child: launch
<br>
parent: MPI_Comm_spawn #1 rank 0, size 6
<br>
parent: MPI_Comm_spawn #1 rank 2, size 6
<br>
parent: MPI_Comm_spawn #1 rank 1, size 6
<br>
parent: MPI_Comm_spawn #1 rank 3, size 6
<br>
Child merged rank = 5, size = 6
<br>
parent: MPI_Comm_spawn #1 rank 4, size 6
<br>
Child 329945: exiting
<br>
parent: MPI_Comm_spawn #2 return : 0
<br>
parent: MPI_Comm_spawn #2 return : 0
<br>
parent: MPI_Comm_spawn #2 return : 0
<br>
parent: MPI_Comm_spawn #2 return : 0
<br>
parent: MPI_Comm_spawn #2 return : 0
<br>
Child: launch
<br>
parent: MPI_Comm_spawn #2 rank 3, size 6
<br>
parent: MPI_Comm_spawn #2 rank 0, size 6
<br>
parent: MPI_Comm_spawn #2 rank 2, size 6
<br>
Child merged rank = 5, size = 6
<br>
parent: MPI_Comm_spawn #2 rank 1, size 6
<br>
parent: MPI_Comm_spawn #2 rank 4, size 6
<br>
Child 329949: exiting
<br>
parent: MPI_Comm_spawn #3 return : 0
<br>
parent: MPI_Comm_spawn #3 return : 0
<br>
parent: MPI_Comm_spawn #3 return : 0
<br>
parent: MPI_Comm_spawn #3 return : 0
<br>
parent: MPI_Comm_spawn #3 return : 0
<br>
Child: launch
<br>
[node:port?] too many retries sending message to &lt;addr&gt;, giving up
<br>
-------------------------------------------------------
<br>
Child job 5 terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec detected that one or more processes exited with non-zero
<br>
status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[...],0]
<br>
&nbsp;&nbsp;Exit code:    255
<br>
--------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29425/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29426.php">Jason Maldonis: "[OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29424.php">Gilles Gouaillardet: "Re: [OMPI users] Openib Selection and Dual Port ConnectX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29427.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Reply:</strong> <a href="29427.php">Ralph Castain: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
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
