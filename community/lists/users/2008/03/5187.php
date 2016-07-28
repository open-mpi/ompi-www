<?
$subject_val = "Re: [OMPI users] MPI_Allreduce()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 10:59:57 2008" -->
<!-- isoreceived="20080313145957" -->
<!-- sent="Thu, 13 Mar 2008 10:59:51 -0400" -->
<!-- isosent="20080313145951" -->
<!-- name="Lawrence Stewart" -->
<!-- email="larry.stewart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce()" -->
<!-- id="47D94167.8000602_at_sicortex.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E2DDE6E8-5EF1-40B3-85B0-1A77CC0A0FBF_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce()<br>
<strong>From:</strong> Lawrence Stewart (<em>larry.stewart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-13 10:59:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5188.php">George Bosilca: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Previous message:</strong> <a href="5186.php">Ashley Pittman: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>In reply to:</strong> <a href="5185.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5188.php">George Bosilca: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt;Yeah, I know what you mean about if you have to use a 'all to all'   
</span><br>
<span class="quotelev1">&gt;use MPI_Alltoall() don't roll your own.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So on paper, alltoall at first glance appears to be:  n*(n-1) -&gt; n^2- 
</span><br>
<span class="quotelev1">&gt;n  -&gt; n^2 (for large n).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Allreduce  appears to be  simplest, n point to points followed by a  
</span><br>
<span class="quotelev1">&gt;bcast().  Which can be simplified to gather + bcast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Last I knew MPI_Bcast() was log(n)  and gather is (n).  So for  
</span><br>
<span class="quotelev1">&gt;allreduce I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;n+log(n)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I guess I am confused how to get alltoall() down from n^2.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
It's important to track both time complexity and space complexity. 
<br>
Collective algorithms have to be functions of message size, rank
<br>
count, and communications latency vs bandwidth tradeoffs.  Probably
<br>
the MPI implementation knows better than the application programmer, but
<br>
that isn't always true...
<br>
<p>Rgarding Alltoall...
<br>
It is only for &quot;sufficiently large messages&quot; that an n**2 implementation
<br>
of Alltoall makes sense.  For example, an Alltoall could be thought of
<br>
as N simultaneous Gather operations (or N scatter).  When the size of
<br>
the items being sent using Alltoall is small, it makes sense to &quot;forward&quot; items through multiple other ranks before they get to where
<br>
they are going. If the size of items going from each rank to each
<br>
other rank is &quot;x&quot;, then Alltoall can be done in logN rounds where in
<br>
each round each rank sends one message of size Nx.  The total data
<br>
communicated with this design is logN*N*Nx, but the total number
<br>
of messages is only NlogN, rather than N**2.  In the limit of large &quot;x&quot;
<br>
of course it is more efficient to send N**2 messages.  The
<br>
tipping point is when the data is large enough that the runtime is 
<br>
bandwidth dominated rather than latency dominated.
<br>
<p>There's a nice paper by the folks at Sandia about using this technique
<br>
for HPCC Random Access, and another one by John Mellor-Crummey
<br>
<p>Using the same idea, Gather for small messages is implemented like
<br>
Reduce with operation &quot;concatenate&quot; and can be done in log steps.
<br>
<p><pre>
-- 
-Larry / Sector IX
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5188.php">George Bosilca: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Previous message:</strong> <a href="5186.php">Ashley Pittman: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>In reply to:</strong> <a href="5185.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5188.php">George Bosilca: "Re: [OMPI users] MPI_Allreduce()"</a>
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
