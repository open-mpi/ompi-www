<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 27 10:19:43 2005" -->
<!-- isoreceived="20051027151943" -->
<!-- sent="Thu, 27 Oct 2005 11:19:35 -0400" -->
<!-- isosent="20051027151935" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] HPL and OpenMpi RC3" -->
<!-- id="68ed5f8be615dc7574113985860cdaac_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4355C5B0.8010504_at_sympatico.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-27 10:19:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0241.php">Troy Telford: "[O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Previous message:</strong> <a href="0239.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>In reply to:</strong> <a href="0208.php">Allan Menezes: "[O-MPI users] HPL and OpenMpi RC3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0274.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0274.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 19, 2005, at 12:04 AM, Allan Menezes wrote:
<br>
<p><span class="quotelev1">&gt; We've done linpack runs recently w/ Infiniband, which result in 
</span><br>
<span class="quotelev1">&gt; performance
</span><br>
<span class="quotelev1">&gt; comparable to mvapich, but not w/ the tcp port. Can you try running w/ 
</span><br>
<span class="quotelev1">&gt; an
</span><br>
<span class="quotelev1">&gt; earlier version, specify on the command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca pml teg
</span><br>
<span class="quotelev1">&gt; Hi Tim,
</span><br>
<span class="quotelev1">&gt;   I tried the same cluster (16 node x86) with the switches -mca pml 
</span><br>
<span class="quotelev1">&gt; teg and I get good performance of 24.52Gflops at N=22500
</span><br>
<span class="quotelev1">&gt; and Block size NB=120.
</span><br>
<span class="quotelev1">&gt; My command line now looks like :
</span><br>
<span class="quotelev1">&gt; a1&gt; mpirun -mca pls_rsh_orted /home/allan/openmpi/bin/orted -mca pml 
</span><br>
<span class="quotelev1">&gt; teg -hostile aa -np 16 ./xhpl
</span><br>
<span class="quotelev1">&gt; hostfile = aa, containing the addresses of the 16 machines.
</span><br>
<span class="quotelev1">&gt; I am using a GS116 16 port netgear Gigabit ethernet switch with Gnet 
</span><br>
<span class="quotelev1">&gt; realtek gig ethernet cards
</span><br>
<span class="quotelev1">&gt; Why, PLEASE, do these switches pml teg make such a difference? It's 
</span><br>
<span class="quotelev1">&gt; 2.6 times more performance in GFlops than what I was getting without 
</span><br>
<span class="quotelev1">&gt; them.
</span><br>
<span class="quotelev1">&gt; I tried version rc3 and not an earlier version.
</span><br>
<span class="quotelev1">&gt; Thank you very much for your assistance!
</span><br>
<p>Sorry for the delay in replying to this...
<br>
<p>The &quot;pml teg&quot; switch tells Open MPI to use the 2nd generation TCP 
<br>
implementation rather than the 3rd generation TCP.  More specifically, 
<br>
the &quot;PML&quot; is the point-to-point management layer.  There are 2 
<br>
different components for this -- teg (2nd generation) and ob1 (3rd 
<br>
generation).  &quot;ob1&quot; is the default; specifying &quot;--mca pml teg&quot; tells 
<br>
Open MPI to use the &quot;teg&quot; component instead of ob1.
<br>
<p>Note, however, that teg and ob1 know nothing about TCP -- it's the 2nd 
<br>
order implications that make the difference here.  teg and ob1 use 
<br>
different back-end components to talk across networks:
<br>
<p>- teg uses PTL components (point-to-point transport layer -- 2nd gen)
<br>
- ob1 uses BTL components (byte transfer layer -- 3rd gen)
<br>
<p>We obviously have TCP implementations for both the PTL and BTL.  
<br>
Considerable time was spent optimizing the TCP PTL (i.e., 2nd gen).  
<br>
Unfortunately, as yet, little time has been spent optimizing the TCP 
<br>
BTL (i.e., 3rd gen) -- it was a simple port, nothing more.
<br>
<p>We have spent the majority of our time, so far, optimizing the Myrinet 
<br>
and Infiniband BTLs (therefore showing that excellent performance is 
<br>
achievable in the BTLs).  However, I'm quite disappointed by the TCP 
<br>
BTL performance -- it sounds like we have a protocol mismatch that is 
<br>
arbitrarily slowing everything down, and something that needs to be 
<br>
fixed before 1.0 (it's not a problem with the BTL design, since IB and 
<br>
Myrinet performance is quite good -- just a problem/bug in the TCP 
<br>
implementation of the BTL).  That much performance degradation is 
<br>
clearly unacceptable.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0241.php">Troy Telford: "[O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Previous message:</strong> <a href="0239.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>In reply to:</strong> <a href="0208.php">Allan Menezes: "[O-MPI users] HPL and OpenMpi RC3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0274.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0274.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
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
