<?
$subject_val = "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 13:01:48 2008" -->
<!-- isoreceived="20081208180148" -->
<!-- sent="Mon, 08 Dec 2008 10:05:15 -0800" -->
<!-- isosent="20081208180515" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="493D61DB.1030007_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="493CF490.3030706_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 13:05:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7463.php">Tim Mattox: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="7461.php">Barry Rountree: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>In reply to:</strong> <a href="7450.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7466.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7466.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jens wrote:
<br>
<p><span class="quotelev1">&gt;Hi Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I would like to run a paraview-server all time on our cluster (even
</span><br>
<span class="quotelev1">&gt;though it is not in use 24h) - but this would simply result in some kind
</span><br>
<span class="quotelev1">&gt;of &quot;heating-thread&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Even though it has (in theory) no impact on the node performace (which
</span><br>
<span class="quotelev1">&gt;is part of a grid-engine), it would simply result in some kind of
</span><br>
<span class="quotelev1">&gt;&quot;heating-thread&quot; which is not a nice idea.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Further (and you can test this), it doesn't yield 100% effectively.  
<br>
E.g., even if you had other processes ready and eager to consume the 
<br>
CPU, it seems (based on my tests) that a waiting/yielding OMPI process 
<br>
won't give up the CPU very well.  E.g., maybe only 50%.
<br>
<p>An MPI implementation could be more cautious.  E.g., it could put a 
<br>
process to sleep and poll only occasionally for in-coming messages or 
<br>
have some other way of waking up when needed.
<br>
<p>The trade-offs are:
<br>
<p>*) the more you give up the CPU, the longer it takes to wake up
<br>
*) the more control over this trade off you give to the user, the more 
<br>
the user needs to understand the tradeoffs
<br>
*) the more control you want to allow, the more complex the MPI 
<br>
implementation
<br>
<p>Regarding the last one, I think OMPI only allows aggressive or else 
<br>
yield.  No sleep.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7463.php">Tim Mattox: "Re: [OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="7461.php">Barry Rountree: "Re: [OMPI users] How to force eager behavior during Isend?"</a>
<li><strong>In reply to:</strong> <a href="7450.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7466.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7466.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
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
