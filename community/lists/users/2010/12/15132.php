<?
$subject_val = "Re: [OMPI users] Use of -mca pml csum";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 14 13:49:16 2010" -->
<!-- isoreceived="20101214184916" -->
<!-- sent="Tue, 14 Dec 2010 13:49:09 -0500" -->
<!-- isosent="20101214184909" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Use of -mca pml csum" -->
<!-- id="3C09BEF4-7FEE-427C-8995-8DC165553E33_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4668891D-861C-455E-B8ED-3D8F4BEAE2CC_at_cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Use of -mca pml csum<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-14 13:49:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15133.php">Gilbert Grosdidier: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Previous message:</strong> <a href="15131.php">John Hearns: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>In reply to:</strong> <a href="15120.php">Gilbert Grosdidier: "[OMPI users] Use of -mca pml csum"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15137.php">Gilbert Grosdidier: "[OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15137.php">Gilbert Grosdidier: "[OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IF the checksum on both peers doesn't match, your MPI call will return with an error. This is in addition of Open MPI printing a warning message on the output (which can be silenced with the right mca parameter).
<br>
<p>So, you're supposed to check the return values, and abort if something fishy is going on. A while back we had the dr PML who retransmitted the data in case of checksum errors, but we dropped support due to lack of interest.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 14, 2010, at 04:55 , Gilbert Grosdidier wrote:
<br>
<p><span class="quotelev1">&gt; Bonjour,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Since I'm very suspicious about the condition of the IB network on my cluster,
</span><br>
<span class="quotelev1">&gt; I'm trying to use the csum pml feature of OMPI (1.4.3).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  But I have a question: what happens if the Checksum is different on both ends ?
</span><br>
<span class="quotelev1">&gt; Is there a warning printed, a flag set by the MPI_(I)recv or equivalent,
</span><br>
<span class="quotelev1">&gt; and the application aborting ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Any help appreciated,    Best,    G.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15133.php">Gilbert Grosdidier: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Previous message:</strong> <a href="15131.php">John Hearns: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>In reply to:</strong> <a href="15120.php">Gilbert Grosdidier: "[OMPI users] Use of -mca pml csum"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15137.php">Gilbert Grosdidier: "[OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15137.php">Gilbert Grosdidier: "[OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
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
