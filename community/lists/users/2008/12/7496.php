<?
$subject_val = "Re: [OMPI users] Multicast?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 10:37:34 2008" -->
<!-- isoreceived="20081210153734" -->
<!-- sent="Wed, 10 Dec 2008 10:37:29 -0500" -->
<!-- isosent="20081210153729" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multicast?" -->
<!-- id="528A816D-C547-4DE4-99B7-EA0F230DA6C7_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CCCE568D-AFE7-4BFC-9477-941880602433_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multicast?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 10:37:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7497.php">Aurélien Bouteiller: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>Previous message:</strong> <a href="7495.php">Bernard Secher - SFME/LGLS: "[OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>In reply to:</strong> <a href="7486.php">Brock Palen: "[OMPI users] Multicast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7498.php">Brock Palen: "Re: [OMPI users] Multicast?"</a>
<li><strong>Reply:</strong> <a href="7498.php">Brock Palen: "Re: [OMPI users] Multicast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock,
<br>
<p>Open MPI has a very fancy collective implementation. While we don't  
<br>
use multicast, we dynamically change the algorithm used for the  
<br>
collective based on the number of nodes, the size and type of the  
<br>
message, and eventually the operation involved if any. Moreover, we  
<br>
detect hierarchies, and we can potentially change the algorithms to  
<br>
take advantage of this knowledge.
<br>
<p>If you want more information, please refer to this paper (Flexible  
<br>
collective communication tuning architecture applied to Open MPI) for  
<br>
more information, <a href="http://www.netlib.org/netlib/utk/people/JackDongarra/PAPERS/Flex-collective-euro-pvmmpi-2006.pdf">http://www.netlib.org/netlib/utk/people/JackDongarra/PAPERS/Flex-collective-euro-pvmmpi-2006.pdf</a> 
<br>
.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 9, 2008, at 21:49 , Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Is OpenMPI using Multicast for things like MPI_Bcast() ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some simple tests of really old versions (1.0.2) showed binary tree  
</span><br>
<span class="quotelev1">&gt; type performance, while latter versions gave me the same run time no  
</span><br>
<span class="quotelev1">&gt; matter how many CPU's I used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thus this lead me to believe that something like multicast is in  
</span><br>
<span class="quotelev1">&gt; use.  Is it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
<li><strong>Next message:</strong> <a href="7497.php">Aurélien Bouteiller: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>Previous message:</strong> <a href="7495.php">Bernard Secher - SFME/LGLS: "[OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>In reply to:</strong> <a href="7486.php">Brock Palen: "[OMPI users] Multicast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7498.php">Brock Palen: "Re: [OMPI users] Multicast?"</a>
<li><strong>Reply:</strong> <a href="7498.php">Brock Palen: "Re: [OMPI users] Multicast?"</a>
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
