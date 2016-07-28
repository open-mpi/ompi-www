<?
$subject_val = "Re: [OMPI users] OMPIO correctnes issues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 07:24:16 2015" -->
<!-- isoreceived="20151209122416" -->
<!-- sent="Wed, 9 Dec 2015 13:24:11 +0100" -->
<!-- isosent="20151209122411" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPIO correctnes issues" -->
<!-- id="56681D6B.1030600_at_itc.rwth-aachen.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5tu6fR4M1cyEtaQgf=baMbHhBXCiJE0Hfb3BzbiT3SsPw_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-09 07:24:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28147.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Previous message:</strong> <a href="28145.php">Gilles Gouaillardet: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>In reply to:</strong> <a href="28145.php">Gilles Gouaillardet: "Re: [OMPI users] OMPIO correctnes issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28147.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Reply:</strong> <a href="28147.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, forgot to mention: 1.10.1
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.10.1
<br>
&nbsp;&nbsp;&nbsp;Open MPI repo revision: v1.10.0-178-gb80f802
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI release date: Nov 03, 2015
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.10.1
<br>
&nbsp;&nbsp;&nbsp;Open RTE repo revision: v1.10.0-178-gb80f802
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open RTE release date: Nov 03, 2015
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.10.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v1.10.0-178-gb80f802
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Nov 03, 2015
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI API: 3.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.10.1
<br>
<p><p>On 12/09/15 11:26, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which OpenMPI version are you using ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for providing a simple reproducer, that will make things much easier from
</span><br>
<span class="quotelev1">&gt; now.
</span><br>
<span class="quotelev1">&gt; (and at first glance, that might not be a very tricky bug)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday, December 9, 2015, Paul Kapinos &lt;kapinos_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:kapinos_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Dear Open MPI developers,
</span><br>
<span class="quotelev1">&gt;     did OMPIO (1) reached 'usable-stable' state?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     As we reported in (2) we had some trouble in building Open MPI with ROMIO,
</span><br>
<span class="quotelev1">&gt;     which fact was hidden by OMPIO implementation stepping into the MPI_IO
</span><br>
<span class="quotelev1">&gt;     breach. The fact 'ROMIO isn't AVBL' was detected after users complained
</span><br>
<span class="quotelev1">&gt;     'MPI_IO don't work as expected with version XYZ of OpenMPI' and further
</span><br>
<span class="quotelev1">&gt;     investigations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Take a look at the attached example. It deliver different result in case of
</span><br>
<span class="quotelev1">&gt;     using ROMIO and OMPIO even with 1 MPI rank on local hard disk, cf. (3).
</span><br>
<span class="quotelev1">&gt;     We've seen more examples of divergent behaviour but this one is quite handy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Is that a bug in OMPIO or did we miss something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Best
</span><br>
<span class="quotelev1">&gt;     Paul Kapinos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1) <a href="http://www.open-mpi.org/faq/?category=ompio">http://www.open-mpi.org/faq/?category=ompio</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2) <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18405.php">http://www.open-mpi.org/community/lists/devel/2015/12/18405.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     3) (ROMIO is default; on local hard drive at node 'cluster')
</span><br>
<span class="quotelev1">&gt;     $ ompi_info  | grep  romio
</span><br>
<span class="quotelev1">&gt;                        MCA io: romio (MCA v2.0.0, API v2.0.0, Component v1.10.1)
</span><br>
<span class="quotelev1">&gt;     $ ompi_info  | grep  ompio
</span><br>
<span class="quotelev1">&gt;                        MCA io: ompio (MCA v2.0.0, API v2.0.0, Component v1.10.1)
</span><br>
<span class="quotelev1">&gt;     $ mpif90 main.f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $ echo hello1234 &gt; out.txt; $MPIEXEC -np 1 -H cluster  ./a.out;
</span><br>
<span class="quotelev1">&gt;       fileOffset, fileSize                    10                    10
</span><br>
<span class="quotelev1">&gt;       fileOffset, fileSize                    26                    26
</span><br>
<span class="quotelev1">&gt;       ierr            0
</span><br>
<span class="quotelev1">&gt;       MPI_MODE_WRONLY,  MPI_MODE_APPEND            4         128
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $ export OMPI_MCA_io=ompio
</span><br>
<span class="quotelev1">&gt;     $ echo hello1234 &gt; out.txt; $MPIEXEC -np 1 -H cluster  ./a.out;
</span><br>
<span class="quotelev1">&gt;       fileOffset, fileSize                     0                    10
</span><br>
<span class="quotelev1">&gt;       fileOffset, fileSize                     0                    16
</span><br>
<span class="quotelev1">&gt;       ierr            0
</span><br>
<span class="quotelev1">&gt;       MPI_MODE_WRONLY,  MPI_MODE_APPEND            4         128
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt;     RWTH Aachen University, IT Center
</span><br>
<span class="quotelev1">&gt;     Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt;     Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28145.php">http://www.open-mpi.org/community/lists/users/2015/12/28145.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, IT Center
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28146/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28147.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Previous message:</strong> <a href="28145.php">Gilles Gouaillardet: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>In reply to:</strong> <a href="28145.php">Gilles Gouaillardet: "Re: [OMPI users] OMPIO correctnes issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28147.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Reply:</strong> <a href="28147.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
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
