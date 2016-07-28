<?
$subject_val = "[OMPI users] Questions regarding MPI_T performance variables and Collective tuning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 13:57:38 2015" -->
<!-- isoreceived="20150422175738" -->
<!-- sent="Wed, 22 Apr 2015 17:57:15 +0000" -->
<!-- isosent="20150422175715" -->
<!-- name="Jerome Vienne" -->
<!-- email="viennej_at_[hidden]" -->
<!-- subject="[OMPI users] Questions regarding MPI_T performance variables and Collective tuning" -->
<!-- id="8455ED68-5F76-4122-A2DF-2C4C554D870E_at_tacc.utexas.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Questions regarding MPI_T performance variables and Collective tuning<br>
<strong>From:</strong> Jerome Vienne (<em>viennej_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 13:57:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26765.php">Galloway, Jack D: "[OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>Previous message:</strong> <a href="26763.php">Howard Pritchard: "Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26771.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions regarding MPI_T performance variables and	Collective tuning"</a>
<li><strong>Reply:</strong> <a href="26771.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions regarding MPI_T performance variables and	Collective tuning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>

<br>
We are currently testing OpenMPI and I would like to ask you few questions related to it.
<br>

<br>
While looking at performance and control variables provided by the MPI_T interface, I was surprised by the impressive number of control variables (1,087 if I am right (with 1.8.4)) but I was also disappointed to see that I was able to get only 2 performance variables.
<br>
I would to know if you are planning to add more Performance variables like number of time an algorithm from a collective was called, or the number of buffer allocated/free etc&#226;&#128;&#166;
<br>

<br>
Regarding collective tuning, I was wondering if you can recommend me a paper/presentation that will provide most of the details. I found some interesting posts (like this one: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25847.php">http://www.open-mpi.org/community/lists/users/2014/11/25847.php</a>) but I am looking for a paper/doc explaining the different modules (basic, tuned, self, hierarchical&#226;&#128;&#166;) and how to set dynamic rules
<br>

<br>
Thanks,
<br>
Jerome
<br>
--
<br>
Jerome Vienne, Ph.D
<br>
Research Associate
<br>
Texas Advanced Computing Center
<br>
The University of Texas at Austin
<br>
(512) 475-9322
<br>
viennej_at_[hidden]&lt;mailto:viennej_at_[hidden]&gt;
<br>

<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26764/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26765.php">Galloway, Jack D: "[OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>Previous message:</strong> <a href="26763.php">Howard Pritchard: "Re: [OMPI users] problem with Java in openmpi-dev-1567-g11e8c20"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26771.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions regarding MPI_T performance variables and	Collective tuning"</a>
<li><strong>Reply:</strong> <a href="26771.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions regarding MPI_T performance variables and	Collective tuning"</a>
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
