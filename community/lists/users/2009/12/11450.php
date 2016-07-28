<?
$subject_val = "Re: [OMPI users] Mimicking timeout for MPI_Wait";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  7 10:18:14 2009" -->
<!-- isoreceived="20091207151814" -->
<!-- sent="Mon, 7 Dec 2009 11:13:48 -0400" -->
<!-- isosent="20091207151348" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mimicking timeout for MPI_Wait" -->
<!-- id="20091207151348.GA13751_at_scram" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFF4A6A054.A24B717C-ON85257685.0046CC18-85257685.0049677A_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mimicking timeout for MPI_Wait<br>
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-07 10:13:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11451.php">George Bosilca: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Previous message:</strong> <a href="11449.php">Stefan Kuhne: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>In reply to:</strong> <a href="11448.php">Richard Treumann: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11451.php">George Bosilca: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11451.php">George Bosilca: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Dec 07, 2009 at 08:21:46AM -0500, Richard Treumann wrote:
<br>
<p><span class="quotelev1">&gt; The need for a &quot;better&quot; timeout depends on what else there is for the CPU
</span><br>
<span class="quotelev1">&gt; to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you get creative and shift from {99% MPI_WAIT , 1% OS_idle_process} to
</span><br>
<span class="quotelev1">&gt; {1% MPI_Wait, 99% OS_idle_process} at a cost of only a few extra
</span><br>
<span class="quotelev1">&gt; microseconds added lag on MPI_Wait, you may be pleased by the CPU load
</span><br>
<span class="quotelev1">&gt; statistic but still have have only hurt yourself. Perhaps you have not hurt
</span><br>
<span class="quotelev1">&gt; yourself much but for what? The CPU does not get tired of spinning in
</span><br>
<span class="quotelev1">&gt; MPI_Wait rather than in the OS_idle_process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Most MPI applications run with an essentially dedicated CPU per process.
</span><br>
<p>Not true in our case.  The computer in question (Intel Core i7, one
<br>
cpu, four cores) has several other uses.
<br>
<p>It is a general purpose desktop/server for myself, and potential other
<br>
users.  I edit and compile the MPI application on it.  I read and
<br>
write email from it.  My subversion repositories and server will soon
<br>
be on it.  My Trac server (and Apache2) will soon be on it.
<br>
<p>Now that MPI does not do busy waits, it can do all that, and run 4
<br>
copies of our MPI application.
<br>
<p><span class="quotelev1">&gt; In most MPI applications if even one task is sharing its CPU with
</span><br>
<span class="quotelev1">&gt; other processes, like users doing compiles, the whole job slows down
</span><br>
<span class="quotelev1">&gt; too much.
</span><br>
<p>I have not found that to be the case.
<br>
&nbsp;
<br>
Regards,
<br>
Douglas.
<br>
<pre>
-- 
  Douglas Guptill                       voice: 902-461-9749
  Research Assistant, LSC 4640          email: douglas.guptill_at_[hidden]
  Oceanography Department               fax:   902-494-3877
  Dalhousie University
  Halifax, NS, B3H 4J1, Canada
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11451.php">George Bosilca: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Previous message:</strong> <a href="11449.php">Stefan Kuhne: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>In reply to:</strong> <a href="11448.php">Richard Treumann: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11451.php">George Bosilca: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11451.php">George Bosilca: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
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
