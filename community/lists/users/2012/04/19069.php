<?
$subject_val = "Re: [OMPI users] Regarding MPI programming";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 07:41:58 2012" -->
<!-- isoreceived="20120423114158" -->
<!-- sent="Mon, 23 Apr 2012 13:41:54 +0200" -->
<!-- isosent="20120423114154" -->
<!-- name="Constantinos Makassikis" -->
<!-- email="cmakassikis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding MPI programming" -->
<!-- id="CAN601uO7-ON4MjiJkVLGOZ1mbTXvtwSOjLjj=-UqZuE0gn8_fA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJ_xm3CF8A1t3i7977=iE9HP=rfhEioCod5OHxpwo6Q1PJb1_A_at_mail.gmail.com" -->
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
<strong>From:</strong> Constantinos Makassikis (<em>cmakassikis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-23 07:41:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19070.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Previous message:</strong> <a href="19068.php">seshendra seshu: "[OMPI users] Regarding MPI programming"</a>
<li><strong>In reply to:</strong> <a href="19068.php">seshendra seshu: "[OMPI users] Regarding MPI programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19071.php">Jim Dinan: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>Reply:</strong> <a href="19071.php">Jim Dinan: "Re: [OMPI users] Regarding MPI programming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Assuming the type of the elements in the array is known, you'll probably
<br>
have to do it in two steps:
<br>
1) Broadcast the number of elements in the array
<br>
2) Broadcast the array itself
<br>
<p><p>HTH,
<br>
<p><pre>
--
Constantinos
On Mon, Apr 23, 2012 at 12:41 PM, seshendra seshu &lt;seshu199_at_[hidden]&gt;wrote:
&gt; Hi,
&gt; I am using stacks , where i stored my sub arrays in stacks and i need send
&gt; the sub arrays to all the nodes but i have know idea what is the size of
&gt; array present in stack so how can i receive the data using MPI_recv with
&gt; out knowing the size of a array. can any please help me in solving this.
&gt;
&gt;
&gt; --
&gt;  WITH REGARDS
&gt; M.L.N.Seshendra
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19069/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19070.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Previous message:</strong> <a href="19068.php">seshendra seshu: "[OMPI users] Regarding MPI programming"</a>
<li><strong>In reply to:</strong> <a href="19068.php">seshendra seshu: "[OMPI users] Regarding MPI programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19071.php">Jim Dinan: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>Reply:</strong> <a href="19071.php">Jim Dinan: "Re: [OMPI users] Regarding MPI programming"</a>
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
