<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Feb 12 17:24:00 2006" -->
<!-- isoreceived="20060212222400" -->
<!-- sent="Sun, 12 Feb 2006 17:23:50 -0500" -->
<!-- isosent="20060212222350" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4" -->
<!-- id="056BB5A1-8EA7-4331-8116-17926783B7A7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="744DC83F-CA0D-462C-95D8-D97B49E374A2_at_pitt.edu" -->
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
<strong>Date:</strong> 2006-02-12 17:23:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0646.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0644.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] Strange errors when using open-mpi"</a>
<li><strong>In reply to:</strong> <a href="0636.php">James Conway: "[OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0646.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0646.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2006, at 12:18 PM, James Conway wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Open MPI uses random port numbers for all it's communication.
</span><br>
<span class="quotelev2">&gt;&gt; (etc)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the explanation. I will live with the open Firewall, and
</span><br>
<span class="quotelev1">&gt; look at the ipfw docs for writing a script.
</span><br>
<p>That may be somewhat difficult.  We previously looked into making LAM/ 
<br>
MPI work behind firewalls and ran into some unexpected issues -- the  
<br>
short version was that, at least for the way LAM was setup, even if  
<br>
you could restrict the port numbers that LAM would choose for its TCP  
<br>
communications, you had to have a virtual host out in front of the  
<br>
firewall that would relay the traffic to the appropriate internal  
<br>
host.  Specifically, you had to have an IP address out in front of  
<br>
the firewall for each host so that it would route to the appropriate  
<br>
back-end instance of the MPI application on the appropriate host.
<br>
<p>The real solution here is to have Open MPI be able to route its TCP  
<br>
communications around through multiple hosts instead of assuming that  
<br>
it is always talking directly to the target host.  (LAM actually had  
<br>
the run-time layer version of that implemented eons ago, but we've  
<br>
never used it -- and more changes would be needed up at the TCP layer  
<br>
to do the same thing)
<br>
<p>We have not yet added any TCP routing capabilities in Open MPI.  It's  
<br>
on the long-range to-do list (meaning: several of us have talked  
<br>
about it and agree that it's a good idea, but no one has committed to  
<br>
any timeframe as to when it would be done).  Contributions from the  
<br>
community would be greatly appreciated.  :-)
<br>
<p><span class="quotelev1">&gt; Now I have a more &quot;core&quot; OpenMPI problem, which may be just
</span><br>
<span class="quotelev1">&gt; unfamiliarity on my part. I seem to have the environment variables
</span><br>
<span class="quotelev1">&gt; set up alright though - the code runs, but doesn't complete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have copied the &quot;MPI Tutorial: The cannonical ring program&quot; from
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.lam-mpi.org/tutorials/">http://www.lam-mpi.org/tutorials/</a>&gt;. It compiles and runs fine on the
</span><br>
<span class="quotelev1">&gt; localhost (one CPU, one or more MPI processes). If I copy it to a
</span><br>
<span class="quotelev1">&gt; remotehost, it does one round of passing the 'tag' then stalls. I
</span><br>
<span class="quotelev1">&gt; modified the print statements a bit to see where in the code it
</span><br>
<span class="quotelev1">&gt; stalls, but the loop hasn't changed. This is what I see happening:
</span><br>
<span class="quotelev1">&gt; 1. Process 0 successfully kicks off the pass-around by sending the
</span><br>
<span class="quotelev1">&gt; tag to the next process (1), and then enters the loop where it waits
</span><br>
<span class="quotelev1">&gt; for the tag to come back.
</span><br>
<span class="quotelev1">&gt; 2. Process 1 enters the loop, receives the tag and passes it on (back
</span><br>
<span class="quotelev1">&gt; to process 0 since this is a ring of 2 players only).
</span><br>
<span class="quotelev1">&gt; 3. Process 0 successfully receives the tag, decrements it, and calls
</span><br>
<span class="quotelev1">&gt; the next send (MPI_Send) but it doesn't return from this. I have a
</span><br>
<span class="quotelev1">&gt; print statement right after (with fflush) but there is no output. The
</span><br>
<span class="quotelev1">&gt; CPU is maxed out on both the local and remote hosts, I assume some
</span><br>
<span class="quotelev1">&gt; kind of polling.
</span><br>
<span class="quotelev1">&gt; 4. Needless to say, Process 1 never reports receipt of the tag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Output (with a little re-ordering to make sense) is:
</span><br>
<span class="quotelev1">&gt;     mpirun --hostfile my_mpi_hosts --np 2 mpi_test1
</span><br>
<span class="quotelev1">&gt;     Process rank 0: size = 2
</span><br>
<span class="quotelev1">&gt;     Process rank 1: size = 2
</span><br>
<span class="quotelev1">&gt;     Enter the number of times around the ring: 5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Process 0 doing first send of '4' to 1
</span><br>
<span class="quotelev1">&gt;     Process 0 finished sending, now entering loop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Process 0 waiting to receive from 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Process 1 waiting to receive from 0
</span><br>
<span class="quotelev1">&gt;     Process 1 received '4' from 0
</span><br>
<span class="quotelev1">&gt;     Process 1 sending '4' to 0
</span><br>
<span class="quotelev1">&gt;     Process 1 finished sending
</span><br>
<span class="quotelev1">&gt;     Process 1 waiting to receive from 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Process 0 received '4' from 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 decremented num
</span><br>
<span class="quotelev1">&gt;     Process 0 sending '3' to 1
</span><br>
<span class="quotelev1">&gt;     !---- nothing more - hangs at 100% cpu until ctrl-
</span><br>
<span class="quotelev1">&gt;     !---- should see &quot;Process 0 finished sending&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since process 0 succeeds in calling MPI_Send before the loop, and in
</span><br>
<span class="quotelev1">&gt; calling MPI_Recv at the start of the loop, the communications appear
</span><br>
<span class="quotelev1">&gt; to be working. Likewise, process 1 succeeds in receiving and sending
</span><br>
<span class="quotelev1">&gt; within the loop. However, if its significant, these calls work one
</span><br>
<span class="quotelev1">&gt; time for each process - the second time MPI_Send is called by process
</span><br>
<span class="quotelev1">&gt; 0, there is a hang.
</span><br>
<p>Well that is definitely odd.  The fact that the first send finishes  
<br>
and the second does not is quite fishy.  A few questions:
<br>
<p>- Have you absolutely entirely disabled all firewalling between the  
<br>
two hosts?
<br>
- Do you have only one TCP interface on both machines?  If you have  
<br>
more than one, we can try telling Open MPI to ignore one of them.
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
<li><strong>Next message:</strong> <a href="0646.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0644.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] Strange errors when using open-mpi"</a>
<li><strong>In reply to:</strong> <a href="0636.php">James Conway: "[OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0646.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0646.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
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
