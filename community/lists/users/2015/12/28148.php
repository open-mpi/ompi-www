<?
$subject_val = "Re: [OMPI users] OMPIO correctnes issues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 10:16:43 2015" -->
<!-- isoreceived="20151209151643" -->
<!-- sent="Wed, 9 Dec 2015 09:16:38 -0600" -->
<!-- isosent="20151209151638" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPIO correctnes issues" -->
<!-- id="566845D6.1010301_at_central.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5668357E.5050801_at_central.uh.edu" -->
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
<strong>Date:</strong> 2015-12-09 10:16:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28149.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Previous message:</strong> <a href="28147.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>In reply to:</strong> <a href="28147.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28149.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Reply:</strong> <a href="28149.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>I tested your code in master and v1.10 ( on my local machine), and I get 
<br>
for both version of ompio exactly the same (correct) output that you had 
<br>
with romio. However, I also noticed that in the ompio version that is in 
<br>
the v1.10 branch, the MPI_File_get_size function is not implemented on 
<br>
lustre. Did you run your test by any chance on a lustre file system?
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 12/9/2015 8:06 AM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; I will look at your test case and see what is going on in ompio. That
</span><br>
<span class="quotelev1">&gt; being said, the vast number of fixes and improvements that went into
</span><br>
<span class="quotelev1">&gt; ompio over the last two years were not back ported to the 1.8 (and thus
</span><br>
<span class="quotelev1">&gt; 1.10) series, since it would have required changes to the interfaces of
</span><br>
<span class="quotelev1">&gt; the frameworks involved (and thus would have violated one of rules of
</span><br>
<span class="quotelev1">&gt; Open MPI release series) . Anyway, if there is a simple fix for your
</span><br>
<span class="quotelev1">&gt; test case for the 1.10 series, I am happy to provide a patch. It might
</span><br>
<span class="quotelev1">&gt; take me a day or two however.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/9/2015 6:24 AM, Paul Kapinos wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, forgot to mention: 1.10.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    Open MPI: 1.10.1
</span><br>
<span class="quotelev2">&gt;&gt;      Open MPI repo revision: v1.10.0-178-gb80f802
</span><br>
<span class="quotelev2">&gt;&gt;       Open MPI release date: Nov 03, 2015
</span><br>
<span class="quotelev2">&gt;&gt;                    Open RTE: 1.10.1
</span><br>
<span class="quotelev2">&gt;&gt;      Open RTE repo revision: v1.10.0-178-gb80f802
</span><br>
<span class="quotelev2">&gt;&gt;       Open RTE release date: Nov 03, 2015
</span><br>
<span class="quotelev2">&gt;&gt;                        OPAL: 1.10.1
</span><br>
<span class="quotelev2">&gt;&gt;          OPAL repo revision: v1.10.0-178-gb80f802
</span><br>
<span class="quotelev2">&gt;&gt;           OPAL release date: Nov 03, 2015
</span><br>
<span class="quotelev2">&gt;&gt;                     MPI API: 3.0.0
</span><br>
<span class="quotelev2">&gt;&gt;                Ident string: 1.10.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/09/15 11:26, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which OpenMPI version are you using ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks for providing a simple reproducer, that will make things much easier from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and at first glance, that might not be a very tricky bug)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wednesday, December 9, 2015, Paul Kapinos &lt;kapinos_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:kapinos_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Dear Open MPI developers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       did OMPIO (1) reached 'usable-stable' state?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       As we reported in (2) we had some trouble in building Open MPI with ROMIO,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       which fact was hidden by OMPIO implementation stepping into the MPI_IO
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       breach. The fact 'ROMIO isn't AVBL' was detected after users complained
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       'MPI_IO don't work as expected with version XYZ of OpenMPI' and further
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       investigations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Take a look at the attached example. It deliver different result in case of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       using ROMIO and OMPIO even with 1 MPI rank on local hard disk, cf. (3).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       We've seen more examples of divergent behaviour but this one is quite handy.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Is that a bug in OMPIO or did we miss something?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Best
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Paul Kapinos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       1) <a href="http://www.open-mpi.org/faq/?category=ompio">http://www.open-mpi.org/faq/?category=ompio</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       2) <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18405.php">http://www.open-mpi.org/community/lists/devel/2015/12/18405.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       3) (ROMIO is default; on local hard drive at node 'cluster')
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       $ ompi_info  | grep  romio
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          MCA io: romio (MCA v2.0.0, API v2.0.0, Component v1.10.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       $ ompi_info  | grep  ompio
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          MCA io: ompio (MCA v2.0.0, API v2.0.0, Component v1.10.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       $ mpif90 main.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       $ echo hello1234 &gt; out.txt; $MPIEXEC -np 1 -H cluster  ./a.out;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         fileOffset, fileSize                    10                    10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         fileOffset, fileSize                    26                    26
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ierr            0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_MODE_WRONLY,  MPI_MODE_APPEND            4         128
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       $ export OMPI_MCA_io=ompio
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       $ echo hello1234 &gt; out.txt; $MPIEXEC -np 1 -H cluster  ./a.out;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         fileOffset, fileSize                     0                    10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         fileOffset, fileSize                     0                    16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ierr            0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_MODE_WRONLY,  MPI_MODE_APPEND            4         128
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       RWTH Aachen University, IT Center
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Tel: +49 241/80-24915
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28145.php">http://www.open-mpi.org/community/lists/users/2015/12/28145.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="28149.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Previous message:</strong> <a href="28147.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>In reply to:</strong> <a href="28147.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28149.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
<li><strong>Reply:</strong> <a href="28149.php">Paul Kapinos: "Re: [OMPI users] OMPIO correctnes issues"</a>
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
