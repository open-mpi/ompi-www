<?
$subject_val = "[OMPI users] btl_openib_cpc_include rdmacm questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 17:03:12 2011" -->
<!-- isoreceived="20110420210312" -->
<!-- sent="Wed, 20 Apr 2011 17:03:06 -0400" -->
<!-- isosent="20110420210306" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] btl_openib_cpc_include rdmacm questions" -->
<!-- id="4B297C66-9CCF-4410-865E-65D80B8802B8_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] btl_openib_cpc_include rdmacm questions<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-20 17:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16299.php">Dave Love: "[OMPI users] using openib and psm together"</a>
<li><strong>Previous message:</strong> <a href="16297.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16304.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="16304.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16425.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We managed to have another user hit the bug that causes collectives (this time MPI_Bcast() ) to hang on IB that was fixed by setting:
<br>
<p>btl_openib_cpc_include rdmacm
<br>
<p>My question is if we set this to the default on our system with an environment variable does it introduce any performance or other issues we should be aware of?
<br>
<p>Is there a reason we should not use rdmacm?
<br>
<p>Thanks!
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16299.php">Dave Love: "[OMPI users] using openib and psm together"</a>
<li><strong>Previous message:</strong> <a href="16297.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16304.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="16304.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16425.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
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
