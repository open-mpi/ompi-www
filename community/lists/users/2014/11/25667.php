<?
$subject_val = "[OMPI users] ipath_userinit errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 11:35:30 2014" -->
<!-- isoreceived="20141104163530" -->
<!-- sent="Tue, 4 Nov 2014 11:35:29 -0500" -->
<!-- isosent="20141104163529" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="[OMPI users] ipath_userinit errors" -->
<!-- id="CABOsP2NoX1ZJO1C3b4qgOA8ruMJ057m2Acuj9gWhtB3fQW990A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ipath_userinit errors<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 11:35:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25668.php">Saliya Ekanayake: "[OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="25666.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25694.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>Reply:</strong> <a href="25694.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm getting the below message on my cluster(s).  It seems to only
<br>
happen when I try to use more then 64 nodes (16-cores each).  The
<br>
clusters are running RHEL 6.5 with Slurm and Openmpi-1.6.5 with PSM.
<br>
I'm using the OFED versions included with RHEL for infiniband support.
<br>
<p>ipath_userinit: Mismatched user minor version (12) and driver minor
<br>
version (11) while context sharing. Ensure that driver and library are
<br>
from the same release
<br>
<p>I already realize this is a warning message and the jobs complete.
<br>
Another user a little over a year ago had a similar issue that was
<br>
tracked to mismatched ofed versions.  Since i have a diskless cluster
<br>
all my nodes are identical.
<br>
<p>I'm not adverse to thinking there might not be something unique about
<br>
my machine, but since i have two separate machines doing it, I'm not
<br>
really sure where to look to triage the issue and see what might be
<br>
set incorrectly.
<br>
<p>Any thoughts on where to start checking would be helpful, thanks...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25668.php">Saliya Ekanayake: "[OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="25666.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25694.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>Reply:</strong> <a href="25694.php">Friedley, Andrew: "Re: [OMPI users] ipath_userinit errors"</a>
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
