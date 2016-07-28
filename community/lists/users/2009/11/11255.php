<?
$subject_val = "Re: [OMPI users] Doubt regarding MPI_GATHER";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 13:48:47 2009" -->
<!-- isoreceived="20091123184847" -->
<!-- sent="Mon, 23 Nov 2009 10:48:35 -0800" -->
<!-- isosent="20091123184835" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Doubt regarding MPI_GATHER" -->
<!-- id="58DBA042-8CF9-4CD5-9ED2-7D7A8E59736B_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B0AC851.40707_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Doubt regarding MPI_GATHER<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 13:48:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11256.php">Jed Brown: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="11254.php">George Bosilca: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="11252.php">Eugene Loh: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI standard provides the MPI_IN_PLACE to handle such situations.  
<br>
If one consider that each node works on the same amount of data, then  
<br>
the following call will do what you're looking for:
<br>
<p>call MPI_Gather( MPI_IN_PLACE, var, MPI_REAL8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a, var, MPI_REAL8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, MPI_COMM_WORLD, ierr )
<br>
<p>For more information about MPI_Gather and the MPI_IN_PLACE please look  
<br>
in the MPI standard version 2.2 at page 143.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Nov 23, 2009, at 09:37 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Anyhow, you can try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call MPI_Gather(a 
</span><br>
<span class="quotelev1">&gt; (istart),var,MPI_REAL8,a,var,MPI_REAL8,0,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Strictly speaking, this is not correct since the send and receive  
</span><br>
<span class="quotelev1">&gt; buffers overlap.  So, the real thing to do is to declare a full  
</span><br>
<span class="quotelev1">&gt; array a(1:n) (only necessary on the root rank 0) and a &quot;local&quot; array  
</span><br>
<span class="quotelev1">&gt; a_local(istart:iend) on each process.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11256.php">Jed Brown: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="11254.php">George Bosilca: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="11252.php">Eugene Loh: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
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
