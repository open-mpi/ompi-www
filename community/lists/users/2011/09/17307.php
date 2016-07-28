<?
$subject_val = "Re: [OMPI users] Problem with MPI_Wtime()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 15 10:37:56 2011" -->
<!-- isoreceived="20110915143756" -->
<!-- sent="Thu, 15 Sep 2011 07:37:45 -0700" -->
<!-- isosent="20110915143745" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Wtime()" -->
<!-- id="4E720DB9.6010300_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="79BDB6B8-FB47-405B-B7CE-D975455E499E_at_coria.fr" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-15 10:37:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17308.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17306.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17305.php">Ghislain Lartigue: "[OMPI users] Problem with MPI_Wtime()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17309.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_Wtime()"</a>
<li><strong>Reply:</strong> <a href="17309.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_Wtime()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/15/2011 5:51 AM, Ghislain Lartigue wrote:
<br>
<span class="quotelev1">&gt; start_0 = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; start_1 = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; call foo()
</span><br>
<span class="quotelev1">&gt; end_1 = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; write(*,*) &quot;timer1 = &quot;,end1-start1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; start_2 = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; call bar()
</span><br>
<span class="quotelev1">&gt; end_2 = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; write(*,*) &quot;timer2 = &quot;,end2-start2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end_0 = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; write(*,*) &quot;timer0 = &quot;,end0-start0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run my code on a &quot;small&quot; number of processors, I find that timer0=timer1+timer2 with a very good precision (less than 1%).
</span><br>
<span class="quotelev1">&gt; However, as I increase the number of processors, this is not true any more: I can have 10%, 20% or even more discrepancy!
</span><br>
<span class="quotelev1">&gt; The more processor I use, the bigger errors are observed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously, my code is much bigger than the simple example above, but the principle is exactly the same.
</span><br>
In the simple example, if timer0 is much bigger than timer1+timer2, we'd 
<br>
be inclined to attribute extra time to the timer calls or the write 
<br>
statements... in any case, to time spent between end_1 and start_2 or 
<br>
between end_2 and end_0.  Are you sure in the actual code there are no 
<br>
substantial operations in those sections?  Also, is it possible your 
<br>
processes are not running during some of those times?  Are you 
<br>
oversubscribing?  Also, instead of printing out endX-startX, how about 
<br>
writing out endX and startX individually so you get all six timestamps 
<br>
and can see in greater detail where the discrepancy is arising.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17308.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17306.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17305.php">Ghislain Lartigue: "[OMPI users] Problem with MPI_Wtime()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17309.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_Wtime()"</a>
<li><strong>Reply:</strong> <a href="17309.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_Wtime()"</a>
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
