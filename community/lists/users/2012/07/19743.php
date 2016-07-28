<?
$subject_val = "Re: [OMPI users] scatterv displacement unit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 21:20:53 2012" -->
<!-- isoreceived="20120707012053" -->
<!-- sent="Fri, 06 Jul 2012 21:20:43 -0400" -->
<!-- isosent="20120707012043" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scatterv displacement unit" -->
<!-- id="4FF78EEB.6060206_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B1F95E7AB5A6BE4F8AEA927D3C338FAF37793B45_at_CSGMBX202W.pu.win.princeton.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] scatterv displacement unit<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-06 21:20:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19744.php">Ammar Ahmad Awan: "[OMPI users] Difference between read and write performance"</a>
<li><strong>Previous message:</strong> <a href="19742.php">Ryan S. Davis: "[OMPI users] scatterv displacement unit"</a>
<li><strong>In reply to:</strong> <a href="19742.php">Ryan S. Davis: "[OMPI users] scatterv displacement unit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/06/2012 05:27 PM, Ryan S. Davis wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to scatter data from the master process to the others using
</span><br>
<span class="quotelev1">&gt; scatterv and my own datatype that maps out the blocks of data in memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that I dont know what unit size the function (scatterv)
</span><br>
<span class="quotelev1">&gt; is using to measure displacements in. I assume that it is using the
</span><br>
<span class="quotelev1">&gt; extent of the user-defined datatype, but I need
</span><br>
<span class="quotelev1">&gt; to specify the displacements in bytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, if I specify a displacement of 2 from the sendbuffer, does
</span><br>
<span class="quotelev1">&gt; this mean 2 bytes
</span><br>
<span class="quotelev1">&gt; or 2*MPI_Type_size() or 2*MPI_Type_extent()? The man page isn't very
</span><br>
<span class="quotelev1">&gt; clear on this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that there is function MPI_Type_hindexed, that accepts
</span><br>
<span class="quotelev1">&gt; displacements measured is bytes
</span><br>
<span class="quotelev1">&gt; when creating new datatypes.
</span><br>
<span class="quotelev1">&gt; Is there something similar for scatterv/gatherv?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<p>Hi Ryan
<br>
<p>I think MPI multiplies the displacement values by the type extent,
<br>
to get the buffer addresses being scattered.
<br>
So, if I understood your question right, the
<br>
answer is:  the second address will be 2*MPI_Type_extent()
<br>
bytes away from the sendbuffer initial address.
<br>
<p>MPI, The Complete Reference, Vol. 1, 2nd Edition,
<br>
by M. Snir et al.,  p. 212-
<br>
<p>&quot; MPI_Scatterv
<br>
...
<br>
The outcome is as if the root executed n send operations,
<br>
MPI_Send(sendbuf+displs[i].extent(sendtype), sendcounts[i], sendtype, i, 
<br>
...), i=0 to n-1, and each process executed a receive,
<br>
MPI_Recv(recvbuf, recvcount, recvtype, root,...).&quot;
<br>
<p>There is a similar description/clarification
<br>
for MPI_Gatherv on pp 202-209, and examples with
<br>
user defined types.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19744.php">Ammar Ahmad Awan: "[OMPI users] Difference between read and write performance"</a>
<li><strong>Previous message:</strong> <a href="19742.php">Ryan S. Davis: "[OMPI users] scatterv displacement unit"</a>
<li><strong>In reply to:</strong> <a href="19742.php">Ryan S. Davis: "[OMPI users] scatterv displacement unit"</a>
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
