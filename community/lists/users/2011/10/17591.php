<?
$subject_val = "[OMPI users] Technical details of various MPI APIs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 21 14:46:11 2011" -->
<!-- isoreceived="20111021184611" -->
<!-- sent="Fri, 21 Oct 2011 18:45:49 +0000 (UTC)" -->
<!-- isosent="20111021184549" -->
<!-- name="ramu" -->
<!-- email="ramu.kavati_at_[hidden]" -->
<!-- subject="[OMPI users] Technical details of various MPI APIs" -->
<!-- id="loom.20111021T203750-32_at_post.gmane.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Technical details of various MPI APIs<br>
<strong>From:</strong> ramu (<em>ramu.kavati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-21 14:45:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17592.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="17590.php">Jeff Squyres: "Re: [OMPI users] orte_grpcomm_modex failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17700.php">Jeff Squyres: "Re: [OMPI users] Technical details of various MPI APIs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17700.php">Jeff Squyres: "Re: [OMPI users] Technical details of various MPI APIs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am trying to explore more on technical details of MPI APIs defined in OpenMPI
<br>
(for e.g., MPI_Init(), MPI_Barrier(), MPI_Send(), MPI_Recv(), MPI_Waitall(),
<br>
MPI_Finalize() etc) when the MPI Processes are running on Infiniband cluster
<br>
(OFED).  I mean, what are the messages exchanged between MPI processes over IB,
<br>
how does processes identify each other and what messages they exchange to
<br>
identify and what all is needed to trigger data traffic.  Is there any doc/link
<br>
available which describes these details.  Please suggest me. 
<br>
<p>Thanks &amp; Regards,
<br>
Ramu 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17592.php">Pedro Gonnet: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="17590.php">Jeff Squyres: "Re: [OMPI users] orte_grpcomm_modex failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17700.php">Jeff Squyres: "Re: [OMPI users] Technical details of various MPI APIs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17700.php">Jeff Squyres: "Re: [OMPI users] Technical details of various MPI APIs"</a>
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
