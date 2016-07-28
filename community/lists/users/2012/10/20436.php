<?
$subject_val = "Re: [OMPI users] Communication Round-trip time";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  9 11:14:02 2012" -->
<!-- isoreceived="20121009151402" -->
<!-- sent="Tue, 9 Oct 2012 15:13:57 +0000" -->
<!-- isosent="20121009151357" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communication Round-trip time" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB71642D9AE_at_FMSMSX107.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87ACB518-1D0B-4CB4-8211-F2B330CE0DE5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Communication Round-trip time<br>
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-09 11:13:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20437.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20435.php">Siegmar Gross: "[OMPI users] question to Datatype.Vector and MPI.COMM_WORLD.Scatter"</a>
<li><strong>In reply to:</strong> <a href="20425.php">Jeff Squyres: "Re: [OMPI users] Communication Round-trip time"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll agree with Jeff that what you propose sounds right for avg. round-trip time.
<br>
<p>Just thought I'd mention that when people talk about the ping-pong latency or MPI latency benchmarks, they are usually referring to 1/2 the round-trip time.  So you compute everything the same as you did, and then divide by 2.  
<br>
<p>But if your professor clearly said round-trip, I'd agree that you need to get a clearer definition of what he's looking for.  Maybe it's units.  If he asked for round-trip time in microseconds, you have to adjust your formula.
<br>
<p>-Tom
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, October 09, 2012 2:58 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Communication Round-trip time
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In general, what you said is &quot;right&quot;... for some definition of &quot;right&quot;.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Usually, benchmarking programs start a timer, do the round trip sends N times,
</span><br>
<span class="quotelev1">&gt; stop the timer, and then divide the total time by N (to get a smoother definition
</span><br>
<span class="quotelev1">&gt; of &quot;average&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But keep in mind that there are many, many factors involved here.  For example,
</span><br>
<span class="quotelev1">&gt; it is also common to do &quot;warmup&quot; round trip communications -- do, say, 100
</span><br>
<span class="quotelev1">&gt; round-trip communications before you start the timer.  This allows MPI to
</span><br>
<span class="quotelev1">&gt; establish connections and do any other startup processing that isn't a factor
</span><br>
<span class="quotelev1">&gt; during steady-state communications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More specifically, the definitions of &quot;right&quot; and &quot;wrong&quot; very much depend on
</span><br>
<span class="quotelev1">&gt; what is in your professor's head.  Every benchmark is different; there are many
</span><br>
<span class="quotelev1">&gt; similar-but-slightly-different benchmark definitions out there.  You'll need to
</span><br>
<span class="quotelev1">&gt; figure out exactly what he is looking for; sorry.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 8, 2012, at 10:59 PM, huydanlin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    I'm currently doing MPI project in NUS University. My professor require me
</span><br>
<span class="quotelev1">&gt; make a monitoring tool to check the connection among processes in Cluster.
</span><br>
<span class="quotelev1">&gt; And also measure communication round-trip time.
</span><br>
<span class="quotelev2">&gt; &gt;    My solution is :
</span><br>
<span class="quotelev2">&gt; &gt; 1. At the source process : start MPI_Send
</span><br>
<span class="quotelev2">&gt; &gt; 2. At the destination process : start MPI_Recv to receive the message from
</span><br>
<span class="quotelev1">&gt; source
</span><br>
<span class="quotelev2">&gt; &gt; 3. At the destination process : start MPI_Send to send immediately the same
</span><br>
<span class="quotelev1">&gt; message to source
</span><br>
<span class="quotelev2">&gt; &gt; 4. At the source process : start MPI_Recv to receive the message from
</span><br>
<span class="quotelev1">&gt; destination
</span><br>
<span class="quotelev2">&gt; &gt;    I start timer( before (1) - t1=MPI_Wtime &amp; after (4) - t2=MPI_Wtime )
</span><br>
<span class="quotelev2">&gt; &gt;    then t2 - t1 is time for communication. I also do (1) to (4) for N times. then i
</span><br>
<span class="quotelev1">&gt; calculate the avg round-trip time by (t2-t1)/N.
</span><br>
<span class="quotelev2">&gt; &gt;    So is it right? Because he tells it 's wrong. And what exactly is the
</span><br>
<span class="quotelev1">&gt; communication round-trip time ?
</span><br>
<span class="quotelev2">&gt; &gt;   Regards and hope to see your reply soon.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="20437.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20435.php">Siegmar Gross: "[OMPI users] question to Datatype.Vector and MPI.COMM_WORLD.Scatter"</a>
<li><strong>In reply to:</strong> <a href="20425.php">Jeff Squyres: "Re: [OMPI users] Communication Round-trip time"</a>
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
