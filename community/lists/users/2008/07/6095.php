<?
$subject_val = "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 20 10:54:59 2008" -->
<!-- isoreceived="20080720145459" -->
<!-- sent="Sun, 20 Jul 2008 10:58:00 -0400" -->
<!-- isosent="20080720145800" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks" -->
<!-- id="48835278.4060805_at_scalableinformatics.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48834F9C.3020308_at_scalableinformatics.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks<br>
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-20 10:58:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6096.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>Previous message:</strong> <a href="6094.php">Joe Landman: "[OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>In reply to:</strong> <a href="6094.php">Joe Landman: "[OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6096.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>Reply:</strong> <a href="6096.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Joe Landman wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) using btl to turn off sm and openib, generates lots of these messages:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [c1-8][0,1,4][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect] 
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<p>[...]
<br>
<p><span class="quotelev1">&gt; No route to host at -e line 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is wrong, all the nodes are visible from all the other nodes on a 
</span><br>
<span class="quotelev1">&gt; private subnet. For example:
</span><br>
<p>ok, fixed this.  Turns out we have ipoib going, and one adapter needed 
<br>
to be brought down and back up.  Now the tcp version appears to be 
<br>
running, though I do get the strange hangs after a random (never the 
<br>
same) number of iterations.
<br>
<p>Given that the hangs are random, and don't appear to happen at the same 
<br>
time step but a similar place in the code, suggests to me that something 
<br>
may be amiss in the MPI_Waitsome function.  Possible a completion was 
<br>
posted and due to buffer sizes, fell off the scoreboard.
<br>
<p>Any thoughts?
<br>
<p><pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics LLC,
email: landman_at_[hidden]
web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
        <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
phone: +1 734 786 8423
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6096.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>Previous message:</strong> <a href="6094.php">Joe Landman: "[OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>In reply to:</strong> <a href="6094.php">Joe Landman: "[OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6096.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>Reply:</strong> <a href="6096.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
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
