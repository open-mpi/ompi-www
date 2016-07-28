<?
$subject_val = "[OMPI users] glut display 'occasionally' opens";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  6 14:43:03 2010" -->
<!-- isoreceived="20101206194303" -->
<!-- sent="Mon, 6 Dec 2010 12:42:57 -0700" -->
<!-- isosent="20101206194257" -->
<!-- name="brad baker" -->
<!-- email="bl.baker.85_at_[hidden]" -->
<!-- subject="[OMPI users] glut display 'occasionally' opens" -->
<!-- id="AANLkTikUhkrR5OAoWBHnNy8hDNTy3anxNNQ7tV4rf5KB_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] glut display 'occasionally' opens<br>
<strong>From:</strong> brad baker (<em>bl.baker.85_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-06 14:42:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15015.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15013.php">Gus Correa: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15015.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Reply:</strong> <a href="15015.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm working on an mpi application that opens a glut display on each node of
<br>
a small cluster for opengl rendering (each node has its own display). My
<br>
current implementation scales great with mpich2, but I'd like to use openmpi
<br>
infiniband, which is giving me trouble.
<br>
<p>I've had some success with the -x DISPLAY=:0.0 parameter to mpirun, which
<br>
will open the display on up to 2 of my nodes... any 2.  But when I attempt
<br>
to run the application on 4 nodes, the display is *non-deterministic. If any
<br>
open at all process 0 definately will, and sometimes process 3 along with
<br>
that.  I haven't observed much behavior from process 1 or 2.
<br>
<p>My command:
<br>
<p>mpirun -x DISPLAY=:0.0 -np 4 -hostfile ~/openmpi.hosts ./myapp
<br>
<p>I've tried adding the -d option with no success.
<br>
<p>Does anyone have any suggestions or comments?  I'll certainly provide more
<br>
information if required.
<br>
<p>Thanks,
<br>
Brad
<br>
*
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15014/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15015.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15013.php">Gus Correa: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15015.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Reply:</strong> <a href="15015.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
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
