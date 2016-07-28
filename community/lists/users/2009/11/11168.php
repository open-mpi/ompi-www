<?
$subject_val = "[OMPI users] OFED-1.5rc1 with OpenMPI and IB";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 04:28:38 2009" -->
<!-- isoreceived="20091112092838" -->
<!-- sent="Thu, 12 Nov 2009 10:28:27 +0100" -->
<!-- isosent="20091112092827" -->
<!-- name="Stefan Kuhne" -->
<!-- email="stefan.kuhne_at_[hidden]" -->
<!-- subject="[OMPI users] OFED-1.5rc1 with OpenMPI and IB" -->
<!-- id="4AFBD53B.8040605_at_dialup.fh-aachen.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] OFED-1.5rc1 with OpenMPI and IB<br>
<strong>From:</strong> Stefan Kuhne (<em>stefan.kuhne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 04:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11169.php">Ralph Castain: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Previous message:</strong> <a href="11167.php">RightCFD: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>Reply:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>i try to install a small HPC-cluster for education usage.
<br>
Infiniband is working as well i can ping over IB.
<br>
When i try to run an MPI program i get:
<br>
<p>user_at_head:~/Cluster/hello$ mpirun --hostfile ../Cluster.hosts hello
<br>
--------------------------------------------------------------------------
<br>
WARNING: There was an error initializing an OpenFabrics device.
<br>
<p>&nbsp;&nbsp;&nbsp;Local host:   head
<br>
&nbsp;&nbsp;&nbsp;Local device: mthca0
<br>
--------------------------------------------------------------------------
<br>
Hier ist Job  0 von  1 auf head
<br>
user_at_head:~/Cluster/hello$
<br>
<p>How can i get more information about this error?
<br>
<p>Regards,
<br>
Stefan Kuhne
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11168/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11169.php">Ralph Castain: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Previous message:</strong> <a href="11167.php">RightCFD: "Re: [OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>Reply:</strong> <a href="11170.php">Jeff Squyres: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
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
