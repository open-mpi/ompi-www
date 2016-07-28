<?
$subject_val = "Re: [OMPI users] SIGPIPE handling?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 16:12:52 2010" -->
<!-- isoreceived="20101201211252" -->
<!-- sent="Wed, 01 Dec 2010 15:12:47 -0600" -->
<!-- isosent="20101201211247" -->
<!-- name="Jesse Ziser" -->
<!-- email="ziser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGPIPE handling?" -->
<!-- id="4CF6BA4F.50004_at_arlut.utexas.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="25279_1291157509_oAUMpiFD032723_4CF57FEE.8090600_at_arlut.utexas.edu" -->
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
<strong>Date:</strong> 2010-12-01 16:12:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14968.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Previous message:</strong> <a href="14966.php">Price, Brian M (N-KCI): "[OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14883.php">Jesse Ziser: "[OMPI users] SIGPIPE handling?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14968.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Reply:</strong> <a href="14968.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Reply:</strong> <a href="14969.php">Jeff Squyres: "Re: [OMPI users] SIGPIPE handling?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, one more question: I don't completely understand the version 
<br>
numbering, but can/will this fix go into 1.5.1 at some point?  I notice 
<br>
that the trunk is labeled as 1.7.
<br>
<p>Thanks again
<br>
<p>Jesse Ziser wrote:
<br>
<span class="quotelev1">&gt; It turned out I was using development version 1.5.0.  After going back 
</span><br>
<span class="quotelev1">&gt; to the release version, I found that there was another problem on my 
</span><br>
<span class="quotelev1">&gt; end, which had nothing to do with OpenMPI.  So thanks for the help; all 
</span><br>
<span class="quotelev1">&gt; is well.  (And sorry for the belated reply.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; After digging around a little, I found that you must be using the OMPI 
</span><br>
<span class="quotelev2">&gt;&gt; devel trunk as no release version contains this code. I also looked to 
</span><br>
<span class="quotelev2">&gt;&gt; see why it was done, and found that the concern was with an 
</span><br>
<span class="quotelev2">&gt;&gt; inadvertent sigpipe that can occur internal to OMPI due to a race 
</span><br>
<span class="quotelev2">&gt;&gt; condition.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I modified the trunk a little. We will ignore the first few sigpipe 
</span><br>
<span class="quotelev2">&gt;&gt; errors we get, but will then abort with an appropriate error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 24, 2010, at 5:08 PM, Jesse Ziser wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've noticed that OpenMPI does not seem to detect when something 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; downstream of it fails.  Specifically, I think it does not handle 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SIGPIPE or pass it down to its young, but it still prints an error 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message every time it occurs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example, running a command like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun -np 1 ./mpi-cat &lt;/dev/zero | dd bs=1 count=1 &gt;/dev/null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (where mpi-cat is just a simple program that initializes MPI and then 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copies its input to its output) hangs after the dd quits, and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; produces an eternity of repetitions of this error message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [[35845,0],0] reports a SIGPIPE error on fd 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am unsure whether this is the intended behavior, but it certainly 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems unfortunate from my persepective.  Is there any way to make it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exit nicely, preferably with a single error, whenever what it's 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trying to write to doesn't exist anymore?  I think I could even 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; submit a patch to make it quit on SIGPIPE, if it is agreed that that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; makes sense.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the source for my mpi-cat example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int main (int iArgC, char *apArgV [])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      int iRank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Init (&amp;iArgC, &amp;apArgV);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Comm_rank (MPI_COMM_WORLD, &amp;iRank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (iRank == 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          while(1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              if(putchar(getchar()) &lt; 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Finalize ();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      return (0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jesse Ziser
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Applied Research Laboratories:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The University of Texas at Austin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="14968.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Previous message:</strong> <a href="14966.php">Price, Brian M (N-KCI): "[OMPI users] Open MPI vs IBM MPI performance help"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14883.php">Jesse Ziser: "[OMPI users] SIGPIPE handling?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14968.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Reply:</strong> <a href="14968.php">Ralph Castain: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Reply:</strong> <a href="14969.php">Jeff Squyres: "Re: [OMPI users] SIGPIPE handling?"</a>
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
