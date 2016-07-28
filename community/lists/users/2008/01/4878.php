<?
$subject_val = "[OMPI users] Topology functions from MPI 1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 18:42:41 2008" -->
<!-- isoreceived="20080124234241" -->
<!-- sent="Thu, 24 Jan 2008 16:42:34 -0700" -->
<!-- isosent="20080124234234" -->
<!-- name="David Souther" -->
<!-- email="davidsouther_at_[hidden]" -->
<!-- subject="[OMPI users] Topology functions from MPI 1.1" -->
<!-- id="a45d2cb70801241542t324f3097tfa702f7e304161c2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Topology functions from MPI 1.1<br>
<strong>From:</strong> David Souther (<em>davidsouther_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 18:42:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4879.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4877.php">Tim Mattox: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI users] Topology functions from MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI users] Topology functions from MPI 1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>My name is David Souther, and I am a student working on a parallel
<br>
processing research project at Rocky Mountain College. We need to attach
<br>
topology information to our processes, but the assertions we have been
<br>
making about the MPI Topology mechanism seem to be false.
<br>
<p>We would like to do something similar to the following:
<br>
<p>Node 0 &lt;---&gt; Node 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;V
<br>
Node 2
<br>
<p>That is, Node 0 can talk to Node 1 and 2, and Node 1 can talk to Node 0, but
<br>
Node 2 can't talk to anyone. From what I understand, the code to do that
<br>
would look like:
<br>
...
<br>
MPI_Comm graph_comm;
<br>
int nodes = 3;
<br>
int indexes[] = {2, 3, 3};
<br>
int edges[] = {1, 2, 0};
<br>
MPI_Graph_create(MPI_COMM_WORLD, nodes, indexes, edges, 0, &amp;graph_comm);
<br>
...
<br>
<p>That is how, with my understanding, I would build that graph.
<br>
<p>Then, the following pseudocode  would work:
<br>
<p>if(rank == 0)
<br>
MPI_SEND(&quot;Message&quot;, To Rank 1, graph_comm)
<br>
if(rank == 1)
<br>
MPI_RECV(buffer, From Rank 0, graph_comm)
<br>
<p>but this would not (It would throw an error, maybe?):
<br>
<p>if(rank == 2)
<br>
MPI_SEND(&quot;Message&quot;, To Rank 0, graph_comm)
<br>
if(rank == 0)
<br>
MPI_RECV(buffer, From Rank 2, graph_comm)
<br>
<p><p>Anyway, the point is, that doesn't work/happen. The messages simply send and
<br>
receive as if they were all in the global communicator (MPI_COMM_WORLD).
<br>
<p>So, I have two questions: could (and how do I make) this work?
<br>
<p>And, If I'm going at this entirely the wrong way, what is a good use for the
<br>
topology mechanism?
<br>
<p>Thank you so much for your time!
<br>
<p><pre>
-- 
-DS
-------------------------
David Souther
1511 Poly Dr
Billings, MT, 59102
(406) 545-9223
<a href="http://www.davidsouther.com">http://www.davidsouther.com</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4878/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4879.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4877.php">Tim Mattox: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI users] Topology functions from MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI users] Topology functions from MPI 1.1"</a>
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
