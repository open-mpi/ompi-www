<?
$subject_val = "[OMPI users] OpenMPI job launch failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 10:21:51 2013" -->
<!-- isoreceived="20130214152151" -->
<!-- sent="Thu, 14 Feb 2013 10:21:35 -0500" -->
<!-- isosent="20130214152135" -->
<!-- name="Bharath Ramesh" -->
<!-- email="bramesh_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI job launch failures" -->
<!-- id="511D00FF.5070201_at_vt.edu" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI job launch failures<br>
<strong>From:</strong> Bharath Ramesh (<em>bramesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-14 10:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21396.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Previous message:</strong> <a href="21394.php">Shamis, Pavel: "Re: [OMPI users] Which type of collective call is called?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21396.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Reply:</strong> <a href="21396.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On our cluster we are noticing intermediate job launch failure when 
<br>
using OpenMPI. We are currently using OpenMPI-1.6.1 on our cluster and 
<br>
it is integrated with Torque-4.1.3. It failes even for a simple MPI 
<br>
hello world applications. The issue is that orted gets launched on all 
<br>
the nodes but there are a bunch of nodes that dont launch the actual MPI 
<br>
application. There are no errors reported when the job gets killed 
<br>
because the walltime expires. Enabling --debug-daemons doesnt show any 
<br>
errors either. The only difference being that successful runs have 
<br>
MPI_proctable listed and for failures this is absent. Any help in 
<br>
debugging this issue is greatly appreciated.
<br>
<p><pre>
-- 
Bharath

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21395/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21396.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Previous message:</strong> <a href="21394.php">Shamis, Pavel: "Re: [OMPI users] Which type of collective call is called?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21396.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Reply:</strong> <a href="21396.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
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
