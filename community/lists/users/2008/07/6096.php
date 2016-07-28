<?
$subject_val = "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 20 11:52:22 2008" -->
<!-- isoreceived="20080720155222" -->
<!-- sent="Sun, 20 Jul 2008 11:55:23 -0400" -->
<!-- isosent="20080720155523" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks" -->
<!-- id="48835FEB.6070605_at_scalableinformatics.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48835278.4060805_at_scalableinformatics.com" -->
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
<strong>Date:</strong> 2008-07-20 11:55:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6097.php">mariognu-outside_at_[hidden]: "[OMPI users] Error run mpiexec"</a>
<li><strong>Previous message:</strong> <a href="6095.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>In reply to:</strong> <a href="6095.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6119.php">Jeff Squyres: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>Reply:</strong> <a href="6119.php">Jeff Squyres: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
update 2:  (its like I am talking to myself ... :) must start using 
<br>
decaf ...)
<br>
<p>Joe Landman wrote:
<br>
<span class="quotelev1">&gt; Joe Landman wrote:
</span><br>
<p>[...]
<br>
<p><span class="quotelev1">&gt; ok, fixed this.  Turns out we have ipoib going, and one adapter needed 
</span><br>
<span class="quotelev1">&gt; to be brought down and back up.  Now the tcp version appears to be 
</span><br>
<span class="quotelev1">&gt; running, though I do get the strange hangs after a random (never the 
</span><br>
<span class="quotelev1">&gt; same) number of iterations.
</span><br>
<p>ok, turned off ipoib (OFED 1.2 on this cluster), and disabled ib0 as a 
<br>
tcp port.  Now, the --mca btl ^openib,sm setting results in a working 
<br>
code.
<br>
<p>This said, we have had no issues in the past with other codes on this 
<br>
cluster running them with OpenMPI on infiniband, over ipoib, or tcp, or 
<br>
shared memory.  It appears that this code's use of MPI_Waitsome when 
<br>
using openib simply fails.  When we use the same thing with two tcp 
<br>
ports (ipoib and gigabit), it fails at random iterations.  Yet when we 
<br>
turn off ipoib, it works (as long as we turn off openib as well).
<br>
<p>I am not sure why we have to turn off the sm (shared memory), but 
<br>
without it, the code also fails.
<br>
<p>FWIW:  I stuck a few simple
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time_mpi	= MPI_WTIME()
<br>
<p>calls in before the MPI_Waitsome calls, to see if this was some sort of 
<br>
timing issue that I could play with.
<br>
<p>We don't need ipoib up.  It was simply a convenient way to test the IB 
<br>
network without working hard.  So I have turned it off for the moment.
<br>
<p>Other MPI codes (with simple send/receives) work fine over openib and 
<br>
other btls.
<br>
<p><p><p>Joe
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
<li><strong>Next message:</strong> <a href="6097.php">mariognu-outside_at_[hidden]: "[OMPI users] Error run mpiexec"</a>
<li><strong>Previous message:</strong> <a href="6095.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>In reply to:</strong> <a href="6095.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6119.php">Jeff Squyres: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>Reply:</strong> <a href="6119.php">Jeff Squyres: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
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
