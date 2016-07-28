<?
$subject_val = "Re: [OMPI users] Communication Round-trip time";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  9 05:58:09 2012" -->
<!-- isoreceived="20121009095809" -->
<!-- sent="Tue, 9 Oct 2012 05:58:02 -0400" -->
<!-- isosent="20121009095802" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communication Round-trip time" -->
<!-- id="87ACB518-1D0B-4CB4-8211-F2B330CE0DE5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFAp2dLFJtsg5+LMd0yP59+xA1hXK+6VmthO8Mu83SuVMzsBug_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-09 05:58:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20426.php">kalmun: "[OMPI users] MPI code"</a>
<li><strong>Previous message:</strong> <a href="20424.php">huydanlin: "[OMPI users] Communication Round-trip time"</a>
<li><strong>In reply to:</strong> <a href="20424.php">huydanlin: "[OMPI users] Communication Round-trip time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20436.php">Elken, Tom: "Re: [OMPI users] Communication Round-trip time"</a>
<li><strong>Reply:</strong> <a href="20436.php">Elken, Tom: "Re: [OMPI users] Communication Round-trip time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In general, what you said is &quot;right&quot;... for some definition of &quot;right&quot;.  :-)
<br>
<p>Usually, benchmarking programs start a timer, do the round trip sends N times, stop the timer, and then divide the total time by N (to get a smoother definition of &quot;average&quot;).
<br>
<p>But keep in mind that there are many, many factors involved here.  For example, it is also common to do &quot;warmup&quot; round trip communications -- do, say, 100 round-trip communications before you start the timer.  This allows MPI to establish connections and do any other startup processing that isn't a factor during steady-state communications.
<br>
<p>More specifically, the definitions of &quot;right&quot; and &quot;wrong&quot; very much depend on what is in your professor's head.  Every benchmark is different; there are many similar-but-slightly-different benchmark definitions out there.  You'll need to figure out exactly what he is looking for; sorry.
<br>
<p><p><p>On Oct 8, 2012, at 10:59 PM, huydanlin wrote:
<br>
<p><span class="quotelev1">&gt;    I'm currently doing MPI project in NUS University. My professor require me make a monitoring tool to check the connection among processes in Cluster. And also measure communication round-trip time. 
</span><br>
<span class="quotelev1">&gt;    My solution is : 
</span><br>
<span class="quotelev1">&gt; 1. At the source process : start MPI_Send 
</span><br>
<span class="quotelev1">&gt; 2. At the destination process : start MPI_Recv to receive the message from source
</span><br>
<span class="quotelev1">&gt; 3. At the destination process : start MPI_Send to send immediately the same message to source 
</span><br>
<span class="quotelev1">&gt; 4. At the source process : start MPI_Recv to receive the message from destination 
</span><br>
<span class="quotelev1">&gt;    I start timer( before (1) - t1=MPI_Wtime &amp; after (4) - t2=MPI_Wtime ) 
</span><br>
<span class="quotelev1">&gt;    then t2 - t1 is time for communication. I also do (1) to (4) for N times. then i calculate the avg round-trip time by (t2-t1)/N. 
</span><br>
<span class="quotelev1">&gt;    So is it right? Because he tells it 's wrong. And what exactly is the communication round-trip time ? 
</span><br>
<span class="quotelev1">&gt;   Regards and hope to see your reply soon. 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20426.php">kalmun: "[OMPI users] MPI code"</a>
<li><strong>Previous message:</strong> <a href="20424.php">huydanlin: "[OMPI users] Communication Round-trip time"</a>
<li><strong>In reply to:</strong> <a href="20424.php">huydanlin: "[OMPI users] Communication Round-trip time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20436.php">Elken, Tom: "Re: [OMPI users] Communication Round-trip time"</a>
<li><strong>Reply:</strong> <a href="20436.php">Elken, Tom: "Re: [OMPI users] Communication Round-trip time"</a>
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
