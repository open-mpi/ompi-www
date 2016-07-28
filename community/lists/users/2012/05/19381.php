<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 23:49:14 2012" -->
<!-- isoreceived="20120525034914" -->
<!-- sent="Thu, 24 May 2012 22:48:55 -0500" -->
<!-- isosent="20120525034855" -->
<!-- name="Dave Goodell" -->
<!-- email="goodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="3C5FA6A7-3952-4B60-BCE9-EDF87A9FB8E6_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8A74B1D6-E5F6-42BF-9BFA-21BD5C2A6910_at_eecs.utk.edu" -->
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
<strong>From:</strong> Dave Goodell (<em>goodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 23:48:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19382.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19380.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19380.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19382.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19382.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2012, at 10:34 PM CDT, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; On May 24, 2012, at 23:18, Dave Goodell &lt;goodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I take back my prior &quot;right&quot;.  Upon further inspection of the text and the MPICH2 code I believe it to be true that the number of the elements in the recvcounts array must be equal to the size of the LOCAL group.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is quite illogical, but it will not be the first time the standard is lacking some. So, if I understand you correctly, in the case of an intercommunicator a process doesn't know how much data it has to reduce, at least not until it receives the array of recvcounts from the remote group. Weird!
</span><br>
<p>No, it knows because of the restriction that $sum_i^n{recvcounts[i]}$ yields the same sum in each group.
<br>
<p>The way it's implemented in MPICH2, and the way that makes this make a lot more sense to me, is that you first do intercommunicator reductions to temporary buffers on rank 0 in each group.  Then rank 0 scatters within the local group.  The way I had been thinking about it was to do a local reduction followed by an intercomm scatter, but that isn't what the standard is saying, AFAICS.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19382.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19380.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19380.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19382.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19382.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
