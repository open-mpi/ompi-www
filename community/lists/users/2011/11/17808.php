<?
$subject_val = "[OMPI users] Shared memory optimizations in OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 22 01:09:56 2011" -->
<!-- isoreceived="20111122060956" -->
<!-- sent="Tue, 22 Nov 2011 01:09:31 -0500" -->
<!-- isosent="20111122060931" -->
<!-- name="Shamik Ganguly" -->
<!-- email="shamikg_at_[hidden]" -->
<!-- subject="[OMPI users] Shared memory optimizations in OMPI" -->
<!-- id="CAFQkOS5d547tp6iax4tGViFNDHYjEy+z2m=Fc+cs-93FY_onAw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFQkOS5BsROQGR2sbecKM9MEOo4kmn+5fwM-bztbymRP1Gkrdg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Shared memory optimizations in OMPI<br>
<strong>From:</strong> Shamik Ganguly (<em>shamikg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-22 01:09:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17809.php">Jeff Squyres: "Re: [OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers"</a>
<li><strong>Previous message:</strong> <a href="17807.php">Jeff Squyres: "Re: [OMPI users] numactl with torque cpusets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17810.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Reply:</strong> <a href="17810.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Maybe reply:</strong> <a href="17811.php">Shamik Ganguly: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I want to trace when the MPI  library prevents an MPI_Send from going to
<br>
the socket and makes it access shared memory because the target node is on
<br>
the same chip (CMP). I want to use PIN to trace this. Can you please give
<br>
me some pointers about which functions are taking this decision so that I
<br>
can instrument the appropriate library calls in PIN?
<br>
<p>Regards,
<br>
<pre>
-- 
Shamik Ganguly
2nd year, MS (CSE-Hardware), University of Michigan, Ann Arbor
B.Tech.(E&amp;ECE), IITKGP (2008)
P.S.- I am resending this since I had posted this from a different email id
from what I subscribed with, I hope there is no duplication.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17808/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17809.php">Jeff Squyres: "Re: [OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers"</a>
<li><strong>Previous message:</strong> <a href="17807.php">Jeff Squyres: "Re: [OMPI users] numactl with torque cpusets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17810.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Reply:</strong> <a href="17810.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Maybe reply:</strong> <a href="17811.php">Shamik Ganguly: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
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
