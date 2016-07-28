<?
$subject_val = "[OMPI devel] MPI_Bcast using TIPC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 06:00:46 2011" -->
<!-- isoreceived="20110927100046" -->
<!-- sent="Tue, 27 Sep 2011 11:43:30 +0200" -->
<!-- isosent="20110927094330" -->
<!-- name="Xin He" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Bcast using TIPC" -->
<!-- id="4E819AC2.2030107_at_ericsson.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Bcast using TIPC<br>
<strong>From:</strong> Xin He (<em>xin.i.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 05:43:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9762.php">George Bosilca: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>Previous message:</strong> <a href="9760.php">Rolf vandeVaart: "[OMPI devel] PRE-RFC: Adding RDMA support for GPU buffers within a node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9762.php">George Bosilca: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>Reply:</strong> <a href="9762.php">George Bosilca: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>Reply:</strong> <a href="9763.php">Jeff Squyres: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>Maybe reply:</strong> <a href="9775.php">Xin He: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>sorry that it takes so long for paper works of TIPC BTL. Hopefully I can 
<br>
get some feedback this week.
<br>
<p>However, I would like to do some work while waiting. For future work, I 
<br>
would like to add TIPC_broadcast
<br>
to support MPI_Bcast. But as I looked into TCP BTL code, I could not 
<br>
find any code doing broadcast. Does
<br>
that mean MPI_Bcast is actually done by sending one by one? In that 
<br>
case, in I want to add actual broadcast
<br>
support, which part should I change, I guess not just adding a BTL but 
<br>
also modify PML as well?
<br>
<p>Thank you in advance!
<br>
<p>/Xin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9762.php">George Bosilca: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>Previous message:</strong> <a href="9760.php">Rolf vandeVaart: "[OMPI devel] PRE-RFC: Adding RDMA support for GPU buffers within a node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9762.php">George Bosilca: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>Reply:</strong> <a href="9762.php">George Bosilca: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>Reply:</strong> <a href="9763.php">Jeff Squyres: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>Maybe reply:</strong> <a href="9775.php">Xin He: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
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
