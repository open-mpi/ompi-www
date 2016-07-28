<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 13 00:14:47 2006" -->
<!-- isoreceived="20060213051447" -->
<!-- sent="Mon, 13 Feb 2006 00:14:50 -0500 (Eastern Standard Time)" -->
<!-- isosent="20060213051450" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4" -->
<!-- id="Pine.WNT.4.64.0602130009300.3856_at_bosilca" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-13 00:14:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0648.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0646.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>In reply to:</strong> <a href="0636.php">James Conway: "[OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
James,
<br>
<p>I not 100% sure but I think I might know what's wrong. I can reproduce 
<br>
something similar (oddly it does not happens all the time) if I activate 
<br>
my firewall and let all the trafic through (ie. accept all connections). 
<br>
In few words, I think the firewall (even when disabled) introduce some 
<br>
delays in the setup stage of the TCP connection and we &quot;kind of&quot; lose one 
<br>
of the messages. Let me find a high delay cluster and I will take a look.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Fri, 10 Feb 2006, James Conway wrote:
<br>
<p><span class="quotelev1">&gt; I have copied the &quot;MPI Tutorial: The cannonical ring program&quot; from
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using Mac OSX 10.4.4 and gcc 4.0.1 on both systems, with OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.0.1 installed (compiled from sources). The small tutorial code is
</span><br>
<span class="quotelev1">&gt; below (I hope its OK to include here), with the few printf mods that
</span><br>
<span class="quotelev1">&gt; I made.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0648.php">Andy Vierstraete: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0646.php">James Conway: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>In reply to:</strong> <a href="0636.php">James Conway: "[OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- nextthread="start" -->
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
