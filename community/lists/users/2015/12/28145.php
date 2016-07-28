<?
$subject_val = "Re: [OMPI users] OMPIO correctnes issues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 05:27:02 2015" -->
<!-- isoreceived="20151209102702" -->
<!-- sent="Wed, 9 Dec 2015 19:26:59 +0900" -->
<!-- isosent="20151209102659" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPIO correctnes issues" -->
<!-- id="CAAkFZ5tu6fR4M1cyEtaQgf=baMbHhBXCiJE0Hfb3BzbiT3SsPw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5667EEEF.9030607_at_itc.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPIO correctnes issues<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-09 05:26:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28146.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Previous message:</strong> <a href="28144.php">Paul Kapinos: "[OMPI users] OMPIO correctnes issues"</a>
<li><strong>In reply to:</strong> <a href="28144.php">Paul Kapinos: "[OMPI users] OMPIO correctnes issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28146.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Reply:</strong> <a href="28146.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>which OpenMPI version are you using ?
<br>
<p>thanks for providing a simple reproducer, that will make things much easier
<br>
from now.
<br>
(and at first glance, that might not be a very tricky bug)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, December 9, 2015, Paul Kapinos &lt;kapinos_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI developers,
</span><br>
<span class="quotelev1">&gt; did OMPIO (1) reached 'usable-stable' state?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As we reported in (2) we had some trouble in building Open MPI with ROMIO,
</span><br>
<span class="quotelev1">&gt; which fact was hidden by OMPIO implementation stepping into the MPI_IO
</span><br>
<span class="quotelev1">&gt; breach. The fact 'ROMIO isn't AVBL' was detected after users complained
</span><br>
<span class="quotelev1">&gt; 'MPI_IO don't work as expected with version XYZ of OpenMPI' and further
</span><br>
<span class="quotelev1">&gt; investigations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Take a look at the attached example. It deliver different result in case
</span><br>
<span class="quotelev1">&gt; of using ROMIO and OMPIO even with 1 MPI rank on local hard disk, cf. (3).
</span><br>
<span class="quotelev1">&gt; We've seen more examples of divergent behaviour but this one is quite handy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that a bug in OMPIO or did we miss something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) <a href="http://www.open-mpi.org/faq/?category=ompio">http://www.open-mpi.org/faq/?category=ompio</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18405.php">http://www.open-mpi.org/community/lists/devel/2015/12/18405.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) (ROMIO is default; on local hard drive at node 'cluster')
</span><br>
<span class="quotelev1">&gt; $ ompi_info  | grep  romio
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v2.0.0, API v2.0.0, Component v1.10.1)
</span><br>
<span class="quotelev1">&gt; $ ompi_info  | grep  ompio
</span><br>
<span class="quotelev1">&gt;                   MCA io: ompio (MCA v2.0.0, API v2.0.0, Component v1.10.1)
</span><br>
<span class="quotelev1">&gt; $ mpif90 main.f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ echo hello1234 &gt; out.txt; $MPIEXEC -np 1 -H cluster  ./a.out;
</span><br>
<span class="quotelev1">&gt;  fileOffset, fileSize                    10                    10
</span><br>
<span class="quotelev1">&gt;  fileOffset, fileSize                    26                    26
</span><br>
<span class="quotelev1">&gt;  ierr            0
</span><br>
<span class="quotelev1">&gt;  MPI_MODE_WRONLY,  MPI_MODE_APPEND            4         128
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ export OMPI_MCA_io=ompio
</span><br>
<span class="quotelev1">&gt; $ echo hello1234 &gt; out.txt; $MPIEXEC -np 1 -H cluster  ./a.out;
</span><br>
<span class="quotelev1">&gt;  fileOffset, fileSize                     0                    10
</span><br>
<span class="quotelev1">&gt;  fileOffset, fileSize                     0                    16
</span><br>
<span class="quotelev1">&gt;  ierr            0
</span><br>
<span class="quotelev1">&gt;  MPI_MODE_WRONLY,  MPI_MODE_APPEND            4         128
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, IT Center
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28145/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28146.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Previous message:</strong> <a href="28144.php">Paul Kapinos: "[OMPI users] OMPIO correctnes issues"</a>
<li><strong>In reply to:</strong> <a href="28144.php">Paul Kapinos: "[OMPI users] OMPIO correctnes issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28146.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Reply:</strong> <a href="28146.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
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
