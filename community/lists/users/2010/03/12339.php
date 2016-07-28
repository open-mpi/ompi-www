<?
$subject_val = "[OMPI users] openib BTL and MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 17:08:22 2010" -->
<!-- isoreceived="20100312220822" -->
<!-- sent="Fri, 12 Mar 2010 17:08:20 -0500" -->
<!-- isosent="20100312220820" -->
<!-- name="Nick Edmonds" -->
<!-- email="ngedmond_at_[hidden]" -->
<!-- subject="[OMPI users] openib BTL and MPI_THREAD_MULTIPLE" -->
<!-- id="16ADBB0B-B28E-459B-812E-673378FA4C26_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> [OMPI users] openib BTL and MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> Nick Edmonds (<em>ngedmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 17:08:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12340.php">vaibhav dutt: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Previous message:</strong> <a href="12338.php">Prentice Bisbal: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12345.php">Jeff Squyres: "Re: [OMPI users] openib BTL and MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="12345.php">Jeff Squyres: "Re: [OMPI users] openib BTL and MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Currently the openib BTL silently refuses to run when MPI_THREAD_MULTIPLE is specified (ompi/mca/btl/openib/btl_openib_component.c:2367 in the current trunk, r22822) which leads to confusing (to some people) error messages such as:
<br>
<p>PML add procs failed  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
<p>Would it be possible to provide a warning/error indicating that the BTL failed to load, and why?  The logical next question would be, is anyone working on an openib BTL that supports MPI_THREAD_MULTIPLE?  I'm currently stuck using IPoIB which is obviously undesirable from a performance standpoint.
<br>
<p>Thanks in advance for any information anyone can provide.
<br>
<p>Cheers,
<br>
Nick
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12339/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12340.php">vaibhav dutt: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Previous message:</strong> <a href="12338.php">Prentice Bisbal: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12345.php">Jeff Squyres: "Re: [OMPI users] openib BTL and MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="12345.php">Jeff Squyres: "Re: [OMPI users] openib BTL and MPI_THREAD_MULTIPLE"</a>
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
