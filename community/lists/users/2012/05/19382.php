<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 25 00:27:27 2012" -->
<!-- isoreceived="20120525042727" -->
<!-- sent="Fri, 25 May 2012 00:27:22 -0400" -->
<!-- isosent="20120525042722" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="B01DF3F3-EB02-41D2-80F9-F032D9621D0C_at_eecs.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3C5FA6A7-3952-4B60-BCE9-EDF87A9FB8E6_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] possible bug exercised by mpi4py<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-25 00:27:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19383.php">Patrick Le Dot: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Previous message:</strong> <a href="19381.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19381.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19384.php">TERRY DONTJE: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19384.php">TERRY DONTJE: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2012, at 23:48 , Dave Goodell wrote:
<br>
<p><span class="quotelev1">&gt; On May 24, 2012, at 10:34 PM CDT, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 24, 2012, at 23:18, Dave Goodell &lt;goodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I take back my prior &quot;right&quot;.  Upon further inspection of the text and the MPICH2 code I believe it to be true that the number of the elements in the recvcounts array must be equal to the size of the LOCAL group.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is quite illogical, but it will not be the first time the standard is lacking some. So, if I understand you correctly, in the case of an intercommunicator a process doesn't know how much data it has to reduce, at least not until it receives the array of recvcounts from the remote group. Weird!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, it knows because of the restriction that $sum_i^n{recvcounts[i]}$ yields the same sum in each group.
</span><br>
<p>I should have read the entire paragraph of the standard &#133; including the rationale. Indeed, the rationale describes exactly what you mentioned.
<br>
<p>Apparently the figure 12 on the following [MPI Forum blessed] link is supposed to clarify any potential misunderstanding regarding the reduce_scatter. Count how many elements are on each side of the intercommunicator ;)
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; The way it's implemented in MPICH2, and the way that makes this make a lot more sense to me, is that you first do intercommunicator reductions to temporary buffers on rank 0 in each group.  Then rank 0 scatters within the local group.  The way I had been thinking about it was to do a local reduction followed by an intercomm scatter, but that isn't what the standard is saying, AFAICS.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19383.php">Patrick Le Dot: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Previous message:</strong> <a href="19381.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19381.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19384.php">TERRY DONTJE: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19384.php">TERRY DONTJE: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
