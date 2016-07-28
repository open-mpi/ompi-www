<?
$subject_val = "Re: [OMPI users] SIGPIPE handling?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 17:51:31 2010" -->
<!-- isoreceived="20101130225131" -->
<!-- sent="Tue, 30 Nov 2010 16:51:26 -0600" -->
<!-- isosent="20101130225126" -->
<!-- name="Jesse Ziser" -->
<!-- email="ziser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGPIPE handling?" -->
<!-- id="4CF57FEE.8090600_at_arlut.utexas.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="26227_1290699308_oAPFZ2Wf003228_3F63E32C-65AD-41C4-A522-6A2CECB7E50C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGPIPE handling?<br>
<strong>From:</strong> Jesse Ziser (<em>ziser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 17:51:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14957.php">Shiqing Fan: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14955.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Maybe in reply to:</strong> <a href="14883.php">Jesse Ziser: "[OMPI users] SIGPIPE handling?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14967.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It turned out I was using development version 1.5.0.  After going back 
<br>
to the release version, I found that there was another problem on my 
<br>
end, which had nothing to do with OpenMPI.  So thanks for the help; all 
<br>
is well.  (And sorry for the belated reply.)
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; After digging around a little, I found that you must be using the OMPI devel trunk as no release version contains this code. I also looked to see why it was done, and found that the concern was with an inadvertent sigpipe that can occur internal to OMPI due to a race condition.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I modified the trunk a little. We will ignore the first few sigpipe errors we get, but will then abort with an appropriate error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 24, 2010, at 5:08 PM, Jesse Ziser wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've noticed that OpenMPI does not seem to detect when something downstream of it fails.  Specifically, I think it does not handle SIGPIPE or pass it down to its young, but it still prints an error message every time it occurs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example, running a command like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun -np 1 ./mpi-cat &lt;/dev/zero | dd bs=1 count=1 &gt;/dev/null
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (where mpi-cat is just a simple program that initializes MPI and then copies its input to its output) hangs after the dd quits, and produces an eternity of repetitions of this error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  [[35845,0],0] reports a SIGPIPE error on fd 13
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am unsure whether this is the intended behavior, but it certainly seems unfortunate from my persepective.  Is there any way to make it exit nicely, preferably with a single error, whenever what it's trying to write to doesn't exist anymore?  I think I could even submit a patch to make it quit on SIGPIPE, if it is agreed that that makes sense.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the source for my mpi-cat example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  int main (int iArgC, char *apArgV [])
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      int iRank;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Init (&amp;iArgC, &amp;apArgV);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Comm_rank (MPI_COMM_WORLD, &amp;iRank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      if (iRank == 0)
</span><br>
<span class="quotelev2">&gt;&gt;      {
</span><br>
<span class="quotelev2">&gt;&gt;          while(1)
</span><br>
<span class="quotelev2">&gt;&gt;              if(putchar(getchar()) &lt; 0)
</span><br>
<span class="quotelev2">&gt;&gt;                  break;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Finalize ();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      return (0);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jesse Ziser
</span><br>
<span class="quotelev2">&gt;&gt; Applied Research Laboratories:
</span><br>
<span class="quotelev2">&gt;&gt; The University of Texas at Austin
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14957.php">Shiqing Fan: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14955.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Maybe in reply to:</strong> <a href="14883.php">Jesse Ziser: "[OMPI users] SIGPIPE handling?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14967.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
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
