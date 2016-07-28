<?
$subject_val = "[OMPI users] openmpi/openib problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 19 14:21:46 2008" -->
<!-- isoreceived="20080219192146" -->
<!-- sent="Tue, 19 Feb 2008 13:21:06 -0600" -->
<!-- isosent="20080219192106" -->
<!-- name="jessie puls" -->
<!-- email="pulsj_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi/openib problems" -->
<!-- id="47BB2C22.6020400_at_uni.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47BAD30B.904_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] openmpi/openib problems<br>
<strong>From:</strong> jessie puls (<em>pulsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-19 14:21:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5040.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Previous message:</strong> <a href="5038.php">Tim Prins: "Re: [OMPI users] MPI_Comm_spawn errors"</a>
<li><strong>In reply to:</strong> <a href="5038.php">Tim Prins: "Re: [OMPI users] MPI_Comm_spawn errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5040.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Reply:</strong> <a href="5040.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm having problems getting openmpi to work correctly using verbs on 
<br>
some systems.  It's been working using openib for quite some time, but I 
<br>
need to get it working using verbs for some research I'm doing.  Anyway 
<br>
all seems to be good on the openib side of things.  ibv_devinfo and 
<br>
ibv_devices returns device information, and they are listed as active on 
<br>
each node.  Also all hosts are visible to each other (ibhosts shows a 
<br>
full list).
<br>
<p>The problem I see with openmpi is I have the openib btl, but not the 
<br>
openib mpool, and when looking at the contents of ompi/mca/mpool/ I 
<br>
don't see openib there (sm and rdma are both listed and ompi_info shows 
<br>
they've been included in the build).  Any help would be appreciated.
<br>
<p>Thanks,
<br>
<p>Jessie
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5040.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Previous message:</strong> <a href="5038.php">Tim Prins: "Re: [OMPI users] MPI_Comm_spawn errors"</a>
<li><strong>In reply to:</strong> <a href="5038.php">Tim Prins: "Re: [OMPI users] MPI_Comm_spawn errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5040.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Reply:</strong> <a href="5040.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
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
