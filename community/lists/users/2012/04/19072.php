<?
$subject_val = "Re: [OMPI users] Regarding MPI programming";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 11:53:21 2012" -->
<!-- isoreceived="20120423155321" -->
<!-- sent="Mon, 23 Apr 2012 11:53:17 -0400" -->
<!-- isosent="20120423155317" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding MPI programming" -->
<!-- id="CE6A482F-848C-42DA-9312-C4FCD2E84A40_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F957113.5010403_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding MPI programming<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-23 11:53:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19073.php">Jeffrey Squyres: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>Previous message:</strong> <a href="19071.php">Jim Dinan: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>In reply to:</strong> <a href="19071.php">Jim Dinan: "Re: [OMPI users] Regarding MPI programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19073.php">Jeffrey Squyres: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>Reply:</strong> <a href="19073.php">Jeffrey Squyres: "Re: [OMPI users] Regarding MPI programming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Additionally, the MPI-3 MPI_MPROBE function will definitely help in this area.  We have it implemented in the Open MPI development trunk; it's slated for release in the Open MPI 1.7 series.  Here's a description of MPI_MPROBE:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://blogs.cisco.com/performance/what-is-mpi_mprobe/">http://blogs.cisco.com/performance/what-is-mpi_mprobe/</a>
<br>
<p><p>On Apr 23, 2012, at 11:11 AM, Jim Dinan wrote:
<br>
<p><span class="quotelev1">&gt; You might also be able to use MPI_Probe() to get the status of the incoming message and query the size before posting the MPI_Recv() operation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~Jim.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/23/12 6:41 AM, Constantinos Makassikis wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Assuming the type of the elements in the array is known, you'll probably
</span><br>
<span class="quotelev2">&gt;&gt; have to do it in two steps:
</span><br>
<span class="quotelev2">&gt;&gt; 1) Broadcast the number of elements in the array
</span><br>
<span class="quotelev2">&gt;&gt; 2) Broadcast the array itself
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Constantinos
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 23, 2012 at 12:41 PM, seshendra seshu &lt;seshu199_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:seshu199_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Hi,
</span><br>
<span class="quotelev2">&gt;&gt;    I am using stacks , where i stored my sub arrays in stacks and i
</span><br>
<span class="quotelev2">&gt;&gt;    need send the sub arrays to all the nodes but i have know idea what
</span><br>
<span class="quotelev2">&gt;&gt;    is the size of array present in stack so how can i receive the data
</span><br>
<span class="quotelev2">&gt;&gt;    using MPI_recv with out knowing the size of a array. can any please
</span><br>
<span class="quotelev2">&gt;&gt;    help me in solving this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    --
</span><br>
<span class="quotelev2">&gt;&gt;      WITH REGARDS
</span><br>
<span class="quotelev2">&gt;&gt;    M.L.N.Seshendra
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19073.php">Jeffrey Squyres: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>Previous message:</strong> <a href="19071.php">Jim Dinan: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>In reply to:</strong> <a href="19071.php">Jim Dinan: "Re: [OMPI users] Regarding MPI programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19073.php">Jeffrey Squyres: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>Reply:</strong> <a href="19073.php">Jeffrey Squyres: "Re: [OMPI users] Regarding MPI programming"</a>
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
