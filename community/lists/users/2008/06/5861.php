<?
$subject_val = "[OMPI users] Problem with getting started";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 11 12:55:48 2008" -->
<!-- isoreceived="20080611165548" -->
<!-- sent="Wed, 11 Jun 2008 18:52:52 +0200" -->
<!-- isosent="20080611165252" -->
<!-- name="Manuel Freiberger" -->
<!-- email="manuel.freiberger_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with getting started" -->
<!-- id="200806111852.52047.manuel.freiberger_at_tugraz.at" -->
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
<strong>Subject:</strong> [OMPI users] Problem with getting started<br>
<strong>From:</strong> Manuel Freiberger (<em>manuel.freiberger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-11 12:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5862.php">twurgl_at_[hidden]: "[OMPI users] locked  memory problem"</a>
<li><strong>Previous message:</strong> <a href="5860.php">jody: "[OMPI users] orted runs on host, but doesn't seem to communicate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5865.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started"</a>
<li><strong>Reply:</strong> <a href="5865.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started"</a>
<li><strong>Reply:</strong> <a href="5866.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everybody!
<br>
<p>First of all I wanted to point out that I'm beginner regarding openMPI and all 
<br>
I try to achieve is to get a simple program working on two PCs.
<br>
So far I've installed openMPI 1.2.6 on two PCs (one running OpenSUSE 10.2, the 
<br>
other one Gentoo).
<br>
I set up two identical users on both systems and made sure that I can make an 
<br>
SSH connection between them using private/public key authentication.
<br>
<p>Next I ran the command
<br>
&nbsp;&nbsp;mpirun -np 2 --hostfile myhosts uptime
<br>
which gave the result
<br>
&nbsp;&nbsp;6:41pm  up 1 day  5:16,  4 users,  load average: 0.00, 0.07, 0.17
<br>
&nbsp;18:43:45 up  7:36,  6 users,  load average: 0.00, 0.02, 0.05
<br>
so I concluded that MPI should work in principle.
<br>
<p>Next I tried the following code which I copied from Boost.MPI:
<br>
---- snip
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;if (rank == 0)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Rank 0 is going to send&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int value = 17;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int result = MPI_Send(&amp;value, 1, MPI_INT, 1, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (result == MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Rank 0 OK!&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else if (rank == 1)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Rank 1 is waiting for answer&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int value;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int result = MPI_Recv(&amp;value, 1, MPI_INT, 0, 0, MPI_COMM_WORLD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (result == MPI_SUCCESS &amp;&amp; value == 17)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Rank 1 OK!&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
---- snap
<br>
<p>Starting a parallel job using
<br>
&nbsp;&nbsp;mpirun -np 2 --hostfile myhosts mpi-test
<br>
I get the answer
<br>
&nbsp;&nbsp;Rank 0 is going to send
<br>
&nbsp;&nbsp;Rank 1 is waiting for answer
<br>
&nbsp;&nbsp;Rank 0 OK!
<br>
and than the program locks. So the strange thing is that obviously the 
<br>
recv()-command is blocking, which is what I do not understand.
<br>
<p>Could anybody provide some hints, where I should start looking for the 
<br>
mistake? Any help is welcome!
<br>
<p>Best regards,
<br>
Manuel
<br>
<p><pre>
-- 
Manuel Freiberger
Institute of Medical Engineering
Graz University of Technology
manuel.freiberger_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5862.php">twurgl_at_[hidden]: "[OMPI users] locked  memory problem"</a>
<li><strong>Previous message:</strong> <a href="5860.php">jody: "[OMPI users] orted runs on host, but doesn't seem to communicate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5865.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started"</a>
<li><strong>Reply:</strong> <a href="5865.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started"</a>
<li><strong>Reply:</strong> <a href="5866.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
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
