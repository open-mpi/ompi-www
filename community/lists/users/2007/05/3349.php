<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 31 12:09:17 2007" -->
<!-- isoreceived="20070531160917" -->
<!-- sent="Thu, 31 May 2007 18:09:11 +0200" -->
<!-- isosent="20070531160911" -->
<!-- name="Kees Verstoep" -->
<!-- email="versto_at_[hidden]" -->
<!-- subject="[OMPI users] mixing MX and TCP" -->
<!-- id="465EF327.70600_at_cs.vu.nl" -->
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
<strong>From:</strong> Kees Verstoep (<em>versto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-31 12:09:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3350.php">Christian Kauhaus: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3348.php">Marcin Skoczylas: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3350.php">Christian Kauhaus: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3350.php">Christian Kauhaus: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3422.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3452.php">Kees Verstoep: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am currently experimenting with OpenMPI in a multi-cluster setting
<br>
where each cluster has its private Myri-10G/MX network besides TCP.
<br>
Somehow I was under the assumption that OpenMPI would dynamically find
<br>
out the details of this configuration, and use MX where possible
<br>
(i.e., intra cluster), and TCP elsewhere.
<br>
But from some initial testing it appears OpenMPI-1.2.1 assumes global
<br>
connectivity over MX when every particpating host supports MX.
<br>
I see MX rather than tcp-level connections between clusters being
<br>
tried, which across clusters fails in mx_connect/mx_isend (at the
<br>
moment there is no inter-cluster support in MX itself).  Besides &quot;mx&quot;,
<br>
I do include &quot;tcp&quot; in the network option lists of course.
<br>
<p>Is this just something that is not yet supported in the current
<br>
release, or does it work by providing some extra parameters?
<br>
I have not started digging in the code yet.
<br>
<p>Thanks!
<br>
Kees Verstoep
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3350.php">Christian Kauhaus: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3348.php">Marcin Skoczylas: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3350.php">Christian Kauhaus: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3350.php">Christian Kauhaus: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3422.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3452.php">Kees Verstoep: "Re: [OMPI users] mixing MX and TCP"</a>
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
