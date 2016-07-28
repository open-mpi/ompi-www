<?
$subject_val = "Re: [OMPI users] Problem with MPI_Wtime()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 15 10:51:32 2011" -->
<!-- isoreceived="20110915145132" -->
<!-- sent="Thu, 15 Sep 2011 16:51:27 +0200" -->
<!-- isosent="20110915145127" -->
<!-- name="Ghislain Lartigue" -->
<!-- email="ghislain.lartigue_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Wtime()" -->
<!-- id="C1CAE307-254D-4DBE-B307-500C9602DE19_at_coria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E720DB9.6010300_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Wtime()<br>
<strong>From:</strong> Ghislain Lartigue (<em>ghislain.lartigue_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-15 10:51:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17310.php">vedaprakash subramanian: "Re: [OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>Previous message:</strong> <a href="17308.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17307.php">Eugene Loh: "Re: [OMPI users] Problem with MPI_Wtime()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 15 sept. 2011 &#224; 16:37, Eugene Loh a &#233;crit :
<br>
<p><span class="quotelev1">&gt; On 9/15/2011 5:51 AM, Ghislain Lartigue wrote:
</span><br>
<span class="quotelev2">&gt;&gt; start_0 = MPI_Wtime()
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; start_1 = MPI_Wtime()
</span><br>
<span class="quotelev2">&gt;&gt; call foo()
</span><br>
<span class="quotelev2">&gt;&gt; end_1 = MPI_Wtime()
</span><br>
<span class="quotelev2">&gt;&gt; write(*,*) &quot;timer1 = &quot;,end1-start1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; start_2 = MPI_Wtime()
</span><br>
<span class="quotelev2">&gt;&gt; call bar()
</span><br>
<span class="quotelev2">&gt;&gt; end_2 = MPI_Wtime()
</span><br>
<span class="quotelev2">&gt;&gt; write(*,*) &quot;timer2 = &quot;,end2-start2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; end_0 = MPI_Wtime()
</span><br>
<span class="quotelev2">&gt;&gt; write(*,*) &quot;timer0 = &quot;,end0-start0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ==================================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I run my code on a &quot;small&quot; number of processors, I find that timer0=timer1+timer2 with a very good precision (less than 1%).
</span><br>
<span class="quotelev2">&gt;&gt; However, as I increase the number of processors, this is not true any more: I can have 10%, 20% or even more discrepancy!
</span><br>
<span class="quotelev2">&gt;&gt; The more processor I use, the bigger errors are observed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Obviously, my code is much bigger than the simple example above, but the principle is exactly the same.
</span><br>
<span class="quotelev1">&gt; In the simple example, if timer0 is much bigger than timer1+timer2, we'd be inclined to attribute extra time to the timer calls or the write statements... in any case, to time spent between end_1 and start_2 or between end_2 and end_0.  
</span><br>
<p><p>=&gt; no this can not be, the time spent in the timers and the write operation is very small compared to the overall code (as indicated by the result on 1proc)
<br>
<p><span class="quotelev1">&gt; Are you sure in the actual code there are no substantial operations in those sections?  
</span><br>
<p>=&gt; I am sure of that (same reason as above)
<br>
<p><span class="quotelev1">&gt; Also, is it possible your processes are not running during some of those times?  
</span><br>
<p>=&gt; No idea... What do you have in mind precisely?
<br>
<p><span class="quotelev1">&gt; Are you oversubscribing?  
</span><br>
<p>=&gt; No way...
<br>
<p><span class="quotelev1">&gt; Also, instead of printing out endX-startX, how about writing out endX and startX individually so you get all six timestamps and can see in greater detail where the discrepancy is arising.
</span><br>
<p>=&gt; This is a good idea: I will try that...
<br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17310.php">vedaprakash subramanian: "Re: [OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>Previous message:</strong> <a href="17308.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17307.php">Eugene Loh: "Re: [OMPI users] Problem with MPI_Wtime()"</a>
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
