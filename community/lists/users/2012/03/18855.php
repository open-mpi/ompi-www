<?
$subject_val = "[OMPI users] Can not run a parallel job on all the nodes in the cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 27 17:46:31 2012" -->
<!-- isoreceived="20120327214631" -->
<!-- sent="Tue, 27 Mar 2012 22:46:26 +0100" -->
<!-- isosent="20120327214626" -->
<!-- name="Hameed Alzahrani" -->
<!-- email="ibn_aibaan_at_[hidden]" -->
<!-- subject="[OMPI users] Can not run a parallel job on all the nodes in the cluster" -->
<!-- id="COL105-W71FD29AE798E83FC1ED459D4A0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Can not run a parallel job on all the nodes in the cluster<br>
<strong>From:</strong> Hameed Alzahrani (<em>ibn_aibaan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-27 17:46:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18856.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Previous message:</strong> <a href="18854.php">Jeffrey Squyres: "Re: [OMPI users] oMPI hang with IB question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18856.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Reply:</strong> <a href="18856.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>When I run any parallel job I get the answer just from the submitting node even when I tried to benchmark the cluster using LINPACK but it look like the job just working on the submitting node is there a way to make openMPI send the job equally to all the nodes depending on the number of processor in the current mode even if I specify that the job should use 8 processor it look like openMPI use the submitting node 4 processors instead of using the other processors. I tried also --host but it does not work correctly in benchmarking the cluster so does any one use openMPI in benchmarking a cluster or does any one knows how to make openMPI divids the parallel job equally to every processor on the cluster.
<br>
<p>Regards, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18855/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18856.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Previous message:</strong> <a href="18854.php">Jeffrey Squyres: "Re: [OMPI users] oMPI hang with IB question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18856.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Reply:</strong> <a href="18856.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
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
