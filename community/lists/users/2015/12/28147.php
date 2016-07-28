<?
$subject_val = "Re: [OMPI users] OMPIO correctnes issues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 09:07:00 2015" -->
<!-- isoreceived="20151209140700" -->
<!-- sent="Wed, 9 Dec 2015 08:06:54 -0600" -->
<!-- isosent="20151209140654" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPIO correctnes issues" -->
<!-- id="5668357E.5050801_at_central.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56681D6B.1030600_at_itc.rwth-aachen.de" -->
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
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-09 09:06:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28148.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Previous message:</strong> <a href="28146.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>In reply to:</strong> <a href="28146.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28148.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Reply:</strong> <a href="28148.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will look at your test case and see what is going on in ompio. That 
<br>
being said, the vast number of fixes and improvements that went into 
<br>
ompio over the last two years were not back ported to the 1.8 (and thus 
<br>
1.10) series, since it would have required changes to the interfaces of 
<br>
the frameworks involved (and thus would have violated one of rules of 
<br>
Open MPI release series) . Anyway, if there is a simple fix for your 
<br>
test case for the 1.10 series, I am happy to provide a patch. It might 
<br>
take me a day or two however.
<br>
<p>Edgar
<br>
<p>On 12/9/2015 6:24 AM, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; Sorry, forgot to mention: 1.10.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Open MPI: 1.10.1
</span><br>
<span class="quotelev1">&gt;     Open MPI repo revision: v1.10.0-178-gb80f802
</span><br>
<span class="quotelev1">&gt;      Open MPI release date: Nov 03, 2015
</span><br>
<span class="quotelev1">&gt;                   Open RTE: 1.10.1
</span><br>
<span class="quotelev1">&gt;     Open RTE repo revision: v1.10.0-178-gb80f802
</span><br>
<span class="quotelev1">&gt;      Open RTE release date: Nov 03, 2015
</span><br>
<span class="quotelev1">&gt;                       OPAL: 1.10.1
</span><br>
<span class="quotelev1">&gt;         OPAL repo revision: v1.10.0-178-gb80f802
</span><br>
<span class="quotelev1">&gt;          OPAL release date: Nov 03, 2015
</span><br>
<span class="quotelev1">&gt;                    MPI API: 3.0.0
</span><br>
<span class="quotelev1">&gt;               Ident string: 1.10.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/09/15 11:26, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which OpenMPI version are you using ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for providing a simple reproducer, that will make things much easier from
</span><br>
<span class="quotelev2">&gt;&gt; now.
</span><br>
<span class="quotelev2">&gt;&gt; (and at first glance, that might not be a very tricky bug)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday, December 9, 2015, Paul Kapinos &lt;kapinos_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:kapinos_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Dear Open MPI developers,
</span><br>
<span class="quotelev2">&gt;&gt;      did OMPIO (1) reached 'usable-stable' state?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      As we reported in (2) we had some trouble in building Open MPI with ROMIO,
</span><br>
<span class="quotelev2">&gt;&gt;      which fact was hidden by OMPIO implementation stepping into the MPI_IO
</span><br>
<span class="quotelev2">&gt;&gt;      breach. The fact 'ROMIO isn't AVBL' was detected after users complained
</span><br>
<span class="quotelev2">&gt;&gt;      'MPI_IO don't work as expected with version XYZ of OpenMPI' and further
</span><br>
<span class="quotelev2">&gt;&gt;      investigations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Take a look at the attached example. It deliver different result in case of
</span><br>
<span class="quotelev2">&gt;&gt;      using ROMIO and OMPIO even with 1 MPI rank on local hard disk, cf. (3).
</span><br>
<span class="quotelev2">&gt;&gt;      We've seen more examples of divergent behaviour but this one is quite handy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Is that a bug in OMPIO or did we miss something?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Best
</span><br>
<span class="quotelev2">&gt;&gt;      Paul Kapinos
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      1) <a href="http://www.open-mpi.org/faq/?category=ompio">http://www.open-mpi.org/faq/?category=ompio</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      2) <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18405.php">http://www.open-mpi.org/community/lists/devel/2015/12/18405.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      3) (ROMIO is default; on local hard drive at node 'cluster')
</span><br>
<span class="quotelev2">&gt;&gt;      $ ompi_info  | grep  romio
</span><br>
<span class="quotelev2">&gt;&gt;                         MCA io: romio (MCA v2.0.0, API v2.0.0, Component v1.10.1)
</span><br>
<span class="quotelev2">&gt;&gt;      $ ompi_info  | grep  ompio
</span><br>
<span class="quotelev2">&gt;&gt;                         MCA io: ompio (MCA v2.0.0, API v2.0.0, Component v1.10.1)
</span><br>
<span class="quotelev2">&gt;&gt;      $ mpif90 main.f90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      $ echo hello1234 &gt; out.txt; $MPIEXEC -np 1 -H cluster  ./a.out;
</span><br>
<span class="quotelev2">&gt;&gt;        fileOffset, fileSize                    10                    10
</span><br>
<span class="quotelev2">&gt;&gt;        fileOffset, fileSize                    26                    26
</span><br>
<span class="quotelev2">&gt;&gt;        ierr            0
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_MODE_WRONLY,  MPI_MODE_APPEND            4         128
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      $ export OMPI_MCA_io=ompio
</span><br>
<span class="quotelev2">&gt;&gt;      $ echo hello1234 &gt; out.txt; $MPIEXEC -np 1 -H cluster  ./a.out;
</span><br>
<span class="quotelev2">&gt;&gt;        fileOffset, fileSize                     0                    10
</span><br>
<span class="quotelev2">&gt;&gt;        fileOffset, fileSize                     0                    16
</span><br>
<span class="quotelev2">&gt;&gt;        ierr            0
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_MODE_WRONLY,  MPI_MODE_APPEND            4         128
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      --
</span><br>
<span class="quotelev2">&gt;&gt;      Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev2">&gt;&gt;      RWTH Aachen University, IT Center
</span><br>
<span class="quotelev2">&gt;&gt;      Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt;      Tel: +49 241/80-24915
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28145.php">http://www.open-mpi.org/community/lists/users/2015/12/28145.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28148.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Previous message:</strong> <a href="28146.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>In reply to:</strong> <a href="28146.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28148.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Reply:</strong> <a href="28148.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
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
