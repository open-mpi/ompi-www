<?
$subject_val = "[OMPI users] Job does not quit even when the simulation dies";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 21:01:58 2007" -->
<!-- isoreceived="20071107020158" -->
<!-- sent="Tue, 6 Nov 2007 21:01:45 -0500" -->
<!-- isosent="20071107020145" -->
<!-- name="Teng Lin" -->
<!-- email="teng.lin_at_[hidden]" -->
<!-- subject="[OMPI users] Job does not quit even when the simulation dies" -->
<!-- id="63646F1C-29EC-4577-AE41-BAE2A1F669E2_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Teng Lin (<em>teng.lin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-06 21:01:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4419.php">Jeff Squyres: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>Previous message:</strong> <a href="4417.php">Jeff Squyres: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
<li><strong>Reply:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>Just realize I have a job run for a long time, while some of the nodes  
<br>
already die. Is there any way to ask other nodes to quit ?
<br>
<p><p>[kyla-0-1.local:09741] mca_btl_tcp_frag_send: writev failed with  
<br>
errno=104
<br>
[kyla-0-1.local:09742] mca_btl_tcp_frag_send: writev failed with  
<br>
errno=104
<br>
<p>The FAQ does mention it is related  to :
<br>
&nbsp;&nbsp;Connection reset by peer: These types of errors usually occur after  
<br>
MPI_INIT has completed, and typically indicate that an MPI process has  
<br>
died unexpectedly (e.g., due to a seg fault). The specific error  
<br>
message indicates that a peer MPI process tried to write to the now- 
<br>
dead MPI process and failed.
<br>
<p>Thanks,
<br>
Teng
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4419.php">Jeff Squyres: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>Previous message:</strong> <a href="4417.php">Jeff Squyres: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
<li><strong>Reply:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
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
