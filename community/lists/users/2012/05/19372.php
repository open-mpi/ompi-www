<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 11:40:57 2012" -->
<!-- isoreceived="20120524154057" -->
<!-- sent="Thu, 24 May 2012 11:40:52 -0400" -->
<!-- isosent="20120524154052" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="9DA8CCA3-B2CE-4BC7-82D2-904539C5BB8F_at_eecs.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AD9BDC79-7E81-4160-BA8B-E52E1B5AAEAA_at_cisco.com" -->
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
<strong>Date:</strong> 2012-05-24 11:40:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19373.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19371.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19370.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19373.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19373.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2012, at 11:22 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 24, 2012, at 11:10 AM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I checked them all, and I found SCATTERV, GATHERV, and REDUCE_SCATTER all had the issue.  Now fixed on the trunk, and will be in 1.6.1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please be careful with REDUCE_SCATTER[_BLOCK] . My understanding of
</span><br>
<span class="quotelev2">&gt;&gt; the MPI standard is that the the length of the recvcounts array is the
</span><br>
<span class="quotelev2">&gt;&gt; local group size
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://www.mpi-forum.org/docs/mpi22-report/node113.htm#Node113">http://www.mpi-forum.org/docs/mpi22-report/node113.htm#Node113</a>)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I read that this morning and it made my head hurt.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I read it to be: reduce the data in the local group, scatter the results to the remote group.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As such, the reduce COUNT is sum(recvcounts), and is used for the reduction in the local group.  Then use recvcounts to scatter it to the remote group.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#133;right?
</span><br>
<p>Right, you reduce locally but you scatter remotely. As such the size of the recvcounts buffer is the remote size. As in the local group you do a reduce (where every process participate with the same amount of data) you only need a total count which in this case is the sum of all recvcounts. This requirement is enforced by the fact that the input buffer is of size sum of all recvcounts, which make sense only if you know the remote group receives counts.
<br>
<p>I don't see much difference with the other collective. The generic behavior is that you apply the operation on the local group but the result is moved into the remote group.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19373.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19371.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19370.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19373.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19373.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
