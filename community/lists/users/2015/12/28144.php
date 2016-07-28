<?
$subject_val = "[OMPI users] OMPIO correctnes issues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 04:05:59 2015" -->
<!-- isoreceived="20151209090559" -->
<!-- sent="Wed, 9 Dec 2015 10:05:51 +0100" -->
<!-- isosent="20151209090551" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] OMPIO correctnes issues" -->
<!-- id="5667EEEF.9030607_at_itc.rwth-aachen.de" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] OMPIO correctnes issues<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-09 04:05:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28145.php">Gilles Gouaillardet: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Previous message:</strong> <a href="28143.php">Gilles Gouaillardet: "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28145.php">Gilles Gouaillardet: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Reply:</strong> <a href="28145.php">Gilles Gouaillardet: "Re: [OMPI users] OMPIO correctnes issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developers,
<br>
did OMPIO (1) reached 'usable-stable' state?
<br>
<p>As we reported in (2) we had some trouble in building Open MPI with ROMIO, which 
<br>
fact was hidden by OMPIO implementation stepping into the MPI_IO breach. The 
<br>
fact 'ROMIO isn't AVBL' was detected after users complained 'MPI_IO don't work 
<br>
as expected with version XYZ of OpenMPI' and further investigations.
<br>
<p>Take a look at the attached example. It deliver different result in case of 
<br>
using ROMIO and OMPIO even with 1 MPI rank on local hard disk, cf. (3). We've 
<br>
seen more examples of divergent behaviour but this one is quite handy.
<br>
<p>Is that a bug in OMPIO or did we miss something?
<br>
<p>Best
<br>
Paul Kapinos
<br>
<p><p>1) <a href="http://www.open-mpi.org/faq/?category=ompio">http://www.open-mpi.org/faq/?category=ompio</a>
<br>
<p>2) <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18405.php">http://www.open-mpi.org/community/lists/devel/2015/12/18405.php</a>
<br>
<p>3) (ROMIO is default; on local hard drive at node 'cluster')
<br>
$ ompi_info  | grep  romio
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v2.0.0, API v2.0.0, Component v1.10.1)
<br>
$ ompi_info  | grep  ompio
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: ompio (MCA v2.0.0, API v2.0.0, Component v1.10.1)
<br>
$ mpif90 main.f90
<br>
<p>$ echo hello1234 &gt; out.txt; $MPIEXEC -np 1 -H cluster  ./a.out;
<br>
&nbsp;&nbsp;fileOffset, fileSize                    10                    10
<br>
&nbsp;&nbsp;fileOffset, fileSize                    26                    26
<br>
&nbsp;&nbsp;ierr            0
<br>
&nbsp;&nbsp;MPI_MODE_WRONLY,  MPI_MODE_APPEND            4         128
<br>
<p>$ export OMPI_MCA_io=ompio
<br>
$ echo hello1234 &gt; out.txt; $MPIEXEC -np 1 -H cluster  ./a.out;
<br>
&nbsp;&nbsp;fileOffset, fileSize                     0                    10
<br>
&nbsp;&nbsp;fileOffset, fileSize                     0                    16
<br>
&nbsp;&nbsp;ierr            0
<br>
&nbsp;&nbsp;MPI_MODE_WRONLY,  MPI_MODE_APPEND            4         128
<br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, IT Center
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28144/main.f90">main.f90</a>
</ul>
<!-- attachment="main.f90" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28144/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28145.php">Gilles Gouaillardet: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Previous message:</strong> <a href="28143.php">Gilles Gouaillardet: "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28145.php">Gilles Gouaillardet: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Reply:</strong> <a href="28145.php">Gilles Gouaillardet: "Re: [OMPI users] OMPIO correctnes issues"</a>
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
