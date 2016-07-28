<?
$subject_val = "Re: [OMPI users] Regarding MPI programming";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 11:11:19 2012" -->
<!-- isoreceived="20120423151119" -->
<!-- sent="Mon, 23 Apr 2012 10:11:15 -0500" -->
<!-- isosent="20120423151115" -->
<!-- name="Jim Dinan" -->
<!-- email="dinan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding MPI programming" -->
<!-- id="4F957113.5010403_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAN601uO7-ON4MjiJkVLGOZ1mbTXvtwSOjLjj=-UqZuE0gn8_fA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jim Dinan (<em>dinan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-23 11:11:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19072.php">Jeffrey Squyres: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>Previous message:</strong> <a href="19070.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>In reply to:</strong> <a href="19069.php">Constantinos Makassikis: "Re: [OMPI users] Regarding MPI programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19072.php">Jeffrey Squyres: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>Reply:</strong> <a href="19072.php">Jeffrey Squyres: "Re: [OMPI users] Regarding MPI programming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might also be able to use MPI_Probe() to get the status of the 
<br>
incoming message and query the size before posting the MPI_Recv() operation.
<br>
<p>&nbsp;&nbsp;~Jim.
<br>
<p>On 4/23/12 6:41 AM, Constantinos Makassikis wrote:
<br>
<span class="quotelev1">&gt; Assuming the type of the elements in the array is known, you'll probably
</span><br>
<span class="quotelev1">&gt; have to do it in two steps:
</span><br>
<span class="quotelev1">&gt; 1) Broadcast the number of elements in the array
</span><br>
<span class="quotelev1">&gt; 2) Broadcast the array itself
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Constantinos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 23, 2012 at 12:41 PM, seshendra seshu &lt;seshu199_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:seshu199_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;     I am using stacks , where i stored my sub arrays in stacks and i
</span><br>
<span class="quotelev1">&gt;     need send the sub arrays to all the nodes but i have know idea what
</span><br>
<span class="quotelev1">&gt;     is the size of array present in stack so how can i receive the data
</span><br>
<span class="quotelev1">&gt;     using MPI_recv with out knowing the size of a array. can any please
</span><br>
<span class="quotelev1">&gt;     help me in solving this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;       WITH REGARDS
</span><br>
<span class="quotelev1">&gt;     M.L.N.Seshendra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="19072.php">Jeffrey Squyres: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>Previous message:</strong> <a href="19070.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>In reply to:</strong> <a href="19069.php">Constantinos Makassikis: "Re: [OMPI users] Regarding MPI programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19072.php">Jeffrey Squyres: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>Reply:</strong> <a href="19072.php">Jeffrey Squyres: "Re: [OMPI users] Regarding MPI programming"</a>
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
