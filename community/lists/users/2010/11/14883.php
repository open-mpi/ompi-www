<?
$subject_val = "[OMPI users] SIGPIPE handling?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 19:08:40 2010" -->
<!-- isoreceived="20101125000840" -->
<!-- sent="Wed, 24 Nov 2010 18:08:35 -0600" -->
<!-- isosent="20101125000835" -->
<!-- name="Jesse Ziser" -->
<!-- email="ziser_at_[hidden]" -->
<!-- subject="[OMPI users] SIGPIPE handling?" -->
<!-- id="4CEDA903.9000702_at_arlut.utexas.edu" -->
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
<strong>Subject:</strong> [OMPI users] SIGPIPE handling?<br>
<strong>From:</strong> Jesse Ziser (<em>ziser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 19:08:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14884.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Previous message:</strong> <a href="14882.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14884.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Reply:</strong> <a href="14884.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Reply:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Maybe reply:</strong> <a href="14956.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14967.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I've noticed that OpenMPI does not seem to detect when something 
<br>
downstream of it fails.  Specifically, I think it does not handle 
<br>
SIGPIPE or pass it down to its young, but it still prints an error 
<br>
message every time it occurs.
<br>
<p>For example, running a command like this:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np 1 ./mpi-cat &lt;/dev/zero | dd bs=1 count=1 &gt;/dev/null
<br>
<p>(where mpi-cat is just a simple program that initializes MPI and then 
<br>
copies its input to its output) hangs after the dd quits, and produces 
<br>
an eternity of repetitions of this error message:
<br>
<p>&nbsp;&nbsp;&nbsp;[[35845,0],0] reports a SIGPIPE error on fd 13
<br>
<p>I am unsure whether this is the intended behavior, but it certainly 
<br>
seems unfortunate from my persepective.  Is there any way to make it 
<br>
exit nicely, preferably with a single error, whenever what it's trying 
<br>
to write to doesn't exist anymore?  I think I could even submit a patch 
<br>
to make it quit on SIGPIPE, if it is agreed that that makes sense.
<br>
<p>Here's the source for my mpi-cat example:
<br>
<p>&nbsp;&nbsp;&nbsp;#include &lt;stdio.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;#include &lt;mpi.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;int main (int iArgC, char *apArgV [])
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int iRank;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init (&amp;iArgC, &amp;apArgV);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;iRank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (iRank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(putchar(getchar()) &lt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize ();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (0);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p><p>Thank you,
<br>
<p>Jesse Ziser
<br>
Applied Research Laboratories:
<br>
The University of Texas at Austin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14884.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Previous message:</strong> <a href="14882.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14884.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Reply:</strong> <a href="14884.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Reply:</strong> <a href="14886.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Maybe reply:</strong> <a href="14956.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14967.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
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
