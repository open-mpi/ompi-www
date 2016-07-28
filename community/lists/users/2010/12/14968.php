<?
$subject_val = "Re: [OMPI users] SIGPIPE handling?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 16:24:29 2010" -->
<!-- isoreceived="20101201212429" -->
<!-- sent="Wed, 1 Dec 2010 14:24:20 -0700" -->
<!-- isosent="20101201212420" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGPIPE handling?" -->
<!-- id="FEF01516-5A65-4897-94B1-05E15421467D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CF6BA4F.50004_at_arlut.utexas.edu" -->
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
<strong>Date:</strong> 2010-12-01 16:24:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14969.php">Jeff Squyres: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Previous message:</strong> <a href="14967.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>In reply to:</strong> <a href="14967.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14969.php">Jeff Squyres: "Re: [OMPI users] SIGPIPE handling?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can schedule it into the 1.5 series, but I don't think it will make 1.5.1 (too close to release). Have to ask...
<br>
<p>On Dec 1, 2010, at 2:12 PM, Jesse Ziser wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, one more question: I don't completely understand the version numbering, but can/will this fix go into 1.5.1 at some point?  I notice that the trunk is labeled as 1.7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jesse Ziser wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It turned out I was using development version 1.5.0.  After going back to the release version, I found that there was another problem on my end, which had nothing to do with OpenMPI.  So thanks for the help; all is well.  (And sorry for the belated reply.)
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After digging around a little, I found that you must be using the OMPI devel trunk as no release version contains this code. I also looked to see why it was done, and found that the concern was with an inadvertent sigpipe that can occur internal to OMPI due to a race condition.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I modified the trunk a little. We will ignore the first few sigpipe errors we get, but will then abort with an appropriate error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 24, 2010, at 5:08 PM, Jesse Ziser wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've noticed that OpenMPI does not seem to detect when something downstream of it fails.  Specifically, I think it does not handle SIGPIPE or pass it down to its young, but it still prints an error message every time it occurs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For example, running a command like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 1 ./mpi-cat &lt;/dev/zero | dd bs=1 count=1 &gt;/dev/null
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (where mpi-cat is just a simple program that initializes MPI and then copies its input to its output) hangs after the dd quits, and produces an eternity of repetitions of this error message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [[35845,0],0] reports a SIGPIPE error on fd 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am unsure whether this is the intended behavior, but it certainly seems unfortunate from my persepective.  Is there any way to make it exit nicely, preferably with a single error, whenever what it's trying to write to doesn't exist anymore?  I think I could even submit a patch to make it quit on SIGPIPE, if it is agreed that that makes sense.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's the source for my mpi-cat example:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main (int iArgC, char *apArgV [])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int iRank;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Init (&amp;iArgC, &amp;apArgV);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_rank (MPI_COMM_WORLD, &amp;iRank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if (iRank == 0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         while(1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             if(putchar(getchar()) &lt; 0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Finalize ();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     return (0);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jesse Ziser
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Applied Research Laboratories:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The University of Texas at Austin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="14969.php">Jeff Squyres: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Previous message:</strong> <a href="14967.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>In reply to:</strong> <a href="14967.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14969.php">Jeff Squyres: "Re: [OMPI users] SIGPIPE handling?"</a>
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
