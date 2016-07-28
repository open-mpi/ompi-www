<?
$subject_val = "[OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  8 15:40:51 2013" -->
<!-- isoreceived="20131008194051" -->
<!-- sent="Tue, 8 Oct 2013 19:40:50 +0000" -->
<!-- isosent="20131008194050" -->
<!-- name="Gerlach, Charles A." -->
<!-- email="charles.gerlach_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV" -->
<!-- id="0A970F4038D541469E279AD555D8781630C19DF6_at_mbx256-1.adm.swri.edu" -->
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
<strong>Subject:</strong> [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV<br>
<strong>From:</strong> Gerlach, Charles A. (<em>charles.gerlach_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-08 15:40:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22776.php">Jeff Hammond: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Previous message:</strong> <a href="22774.php">Iliev, Hristo: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22776.php">Jeff Hammond: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Reply:</strong> <a href="22776.php">Jeff Hammond: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Reply:</strong> <a href="22780.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have an MPI code that was developed using MPICH1 and OpenMPI before the MPI2 standards became commonplace (before MPI_IN_PLACE was an option).
<br>
<p>So, my code has many examples of GATHERV, AGATHERV and SCATTERV, where I pass the same array in as the SEND_BUF and the RECV_BUF, and this has worked fine for many years.
<br>
<p>Intel MPI and MPICH2 explicitly disallow this behavior according to the MPI2 standard. So, I have gone through and used MPI_IN_PLACE for all the GATHERV/SCATTERVs that used to pass the same array twice. This code now works with MPICH2 and Intel_MPI, but fails with OpenMPI-1.6.5 on multiple platforms and compilers.
<br>
<p>PLATFORM                  COMPILER            SUCCESS? (For at least one simple example)
<br>
------------------------------------------------------------
<br>
SLED 12.3 (x86-64) - Portland group  - fails
<br>
SLED 12.3 (x86-64) - g95                         - fails
<br>
SLED 12.3 (x86-64) - gfortran               - works
<br>
<p>OS X 10.8                 -- intel                        -fails
<br>
<p><p>In every case where OpenMPI fails with the MPI_IN_PLACE code, I can go back to the original code that passes the same array twice instead of using MPI_IN_PLACE, and it is fine.
<br>
<p>I have made a test case doing an individual GATHERV with MPI_IN_PLACE, and it works with OpenMPI.  So it looks like there is some interaction with my code that is causing the problem. I have no idea how to go about trying to debug it.
<br>
<p><p>In summary:
<br>
<p>OpenMPI-1.6.5 crashes my code when I use GATHERV, AGATHERV, and SCATTERV with MPI_IN_PLACE.
<br>
Intel MPI and MPICH2 work with my code when I use GATHERV, AGATHERV, and SCATTERV with MPI_IN_PLACE.
<br>
<p>OpenMPI-1.6.5 works with my code when I pass the same array to SEND_BUF and RECV_BUF instead of using MPI_IN_PLACE for those same GATHERV, AGATHERV, and SCATTERVs.
<br>
<p><p>-Charles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22775/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22776.php">Jeff Hammond: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Previous message:</strong> <a href="22774.php">Iliev, Hristo: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22776.php">Jeff Hammond: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Reply:</strong> <a href="22776.php">Jeff Hammond: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Reply:</strong> <a href="22780.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
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
