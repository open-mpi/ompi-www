<?
$subject_val = "Re: [OMPI users] SIGPIPE handling?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 25 10:34:46 2010" -->
<!-- isoreceived="20101125153446" -->
<!-- sent="Thu, 25 Nov 2010 08:34:36 -0700" -->
<!-- isosent="20101125153436" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGPIPE handling?" -->
<!-- id="3F63E32C-65AD-41C4-A522-6A2CECB7E50C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CEDA903.9000702_at_arlut.utexas.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-25 10:34:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14887.php">George Markomanolis: "Re: [OMPI users] users Digest, Vol 1750, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="14885.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<li><strong>In reply to:</strong> <a href="14883.php">Jesse Ziser: "[OMPI users] SIGPIPE handling?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14956.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After digging around a little, I found that you must be using the OMPI devel trunk as no release version contains this code. I also looked to see why it was done, and found that the concern was with an inadvertent sigpipe that can occur internal to OMPI due to a race condition.
<br>
<p>So I modified the trunk a little. We will ignore the first few sigpipe errors we get, but will then abort with an appropriate error.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Nov 24, 2010, at 5:08 PM, Jesse Ziser wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've noticed that OpenMPI does not seem to detect when something downstream of it fails.  Specifically, I think it does not handle SIGPIPE or pass it down to its young, but it still prints an error message every time it occurs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, running a command like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpirun -np 1 ./mpi-cat &lt;/dev/zero | dd bs=1 count=1 &gt;/dev/null
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (where mpi-cat is just a simple program that initializes MPI and then copies its input to its output) hangs after the dd quits, and produces an eternity of repetitions of this error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  [[35845,0],0] reports a SIGPIPE error on fd 13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am unsure whether this is the intended behavior, but it certainly seems unfortunate from my persepective.  Is there any way to make it exit nicely, preferably with a single error, whenever what it's trying to write to doesn't exist anymore?  I think I could even submit a patch to make it quit on SIGPIPE, if it is agreed that that makes sense.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the source for my mpi-cat example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  int main (int iArgC, char *apArgV [])
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      int iRank;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      MPI_Init (&amp;iArgC, &amp;apArgV);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      MPI_Comm_rank (MPI_COMM_WORLD, &amp;iRank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      if (iRank == 0)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt;          while(1)
</span><br>
<span class="quotelev1">&gt;              if(putchar(getchar()) &lt; 0)
</span><br>
<span class="quotelev1">&gt;                  break;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      return (0);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jesse Ziser
</span><br>
<span class="quotelev1">&gt; Applied Research Laboratories:
</span><br>
<span class="quotelev1">&gt; The University of Texas at Austin
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
<li><strong>Next message:</strong> <a href="14887.php">George Markomanolis: "Re: [OMPI users] users Digest, Vol 1750, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="14885.php">Gilbert Grosdidier: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster"</a>
<li><strong>In reply to:</strong> <a href="14883.php">Jesse Ziser: "[OMPI users] SIGPIPE handling?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14956.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
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
