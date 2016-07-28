<?
$subject_val = "Re: [OMPI users] mpi prorg fails (big data)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  2 09:04:08 2014" -->
<!-- isoreceived="20140702130408" -->
<!-- sent="Wed, 2 Jul 2014 06:03:49 -0700" -->
<!-- isosent="20140702130349" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi prorg fails (big data)" -->
<!-- id="5C3DF478-7930-4035-A902-FAC2472998E7_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53A95373.2040504_at_bgc-jena.mpg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi prorg fails (big data)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-02 09:03:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24741.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Previous message:</strong> <a href="24739.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24695.php">Dr.Peer-Joachim Koch: "[OMPI users] mpi prorg fails (big data)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would suggest having him look at the core file with a debugger and see where it fails. Sounds like he has a memory corruption problem.
<br>
<p><p>On Jun 24, 2014, at 3:31 AM, Dr.Peer-Joachim Koch &lt;pkoch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; one of our cluster users reported a problem with openmpi.
</span><br>
<span class="quotelev1">&gt; He created a short sample (just a few lines) which will start and
</span><br>
<span class="quotelev1">&gt; crash after a short time.
</span><br>
<span class="quotelev1">&gt; We only see &quot;Fatal error in PMPI_Gather: Other MPI error&quot; - no further details.
</span><br>
<span class="quotelev1">&gt; He is using an intel fortran compiler with a self compiled openmpi (just tested 1.8.1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've know nearly nothing about mpi(openmpi) so I'm asking at this forum.
</span><br>
<span class="quotelev1">&gt; Has anybody some idea ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Peer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------makefile----------
</span><br>
<span class="quotelev1">&gt; OPTIONS=-assume byterecl -fpp -allow nofpp_comments -free
</span><br>
<span class="quotelev1">&gt; DEBUG=-g -d-lines -check -debug -debug-parameters -fpe0 -traceback
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; all:
</span><br>
<span class="quotelev1">&gt;        rm -f JeDi globe_mod.mod JeDi.out jedi_restart
</span><br>
<span class="quotelev1">&gt;        $(SOURCE) ; mpif90 $(OPTIONS) $(DEBUG) -o JeDi globe.f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------globe.f90---------------------
</span><br>
<span class="quotelev1">&gt;      program globe
</span><br>
<span class="quotelev1">&gt;      use mpi
</span><br>
<span class="quotelev1">&gt;      implicit none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      integer :: mpinfo  = 0
</span><br>
<span class="quotelev1">&gt;      integer :: myworld = 0
</span><br>
<span class="quotelev1">&gt;      integer :: mypid   = 0
</span><br>
<span class="quotelev1">&gt;      integer :: npro    = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; !     * The comments give some conditions required to reproduce the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; !     * If the program runs at two hosts, the error message is shown two times
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      integer, parameter :: vv_g_d1 = 2432
</span><br>
<span class="quotelev1">&gt;      integer, parameter :: vv_p_d1 = vv_g_d1 / 16  ! requires 16 CPUs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      integer, parameter :: out_d1  = 2418  ! requires &gt;=2416 (vv_g_d1 - 16)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      integer, parameter :: d2 = 5001 !  requires &gt;=4282 @ ii=30 / &gt;=6682 @ ii=20 (depends on number of loops, but this limit can change for unknown reason)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      integer :: ii, jj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      real    :: vv_p(vv_p_d1,d2)
</span><br>
<span class="quotelev1">&gt;      real,allocatable :: vv_g(:,:)
</span><br>
<span class="quotelev1">&gt; !     * requires the definition of the variable for write to be defined below vv_g(:,:)
</span><br>
<span class="quotelev1">&gt;      real    :: out(out_d1,d2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      vv_p(:,:) = 0.0
</span><br>
<span class="quotelev1">&gt;      out(:,:) = 0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      call mpi_init(mpinfo)
</span><br>
<span class="quotelev1">&gt;      myworld = MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;      call mpi_comm_size(myworld, npro, mpinfo)
</span><br>
<span class="quotelev1">&gt; !     * The problem requires 16 CPUs
</span><br>
<span class="quotelev1">&gt;      if (npro .ne. 16) then; write(*,*) &quot;Works only with 16 CPUs&quot;; stop; endif
</span><br>
<span class="quotelev1">&gt;      call mpi_comm_rank(myworld, mypid, mpinfo)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      if (mypid == 0) then
</span><br>
<span class="quotelev1">&gt;        open(11, FILE='jedi_restart', STATUS='replace', FORM='unformatted')
</span><br>
<span class="quotelev1">&gt;      endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      write(6,*) &quot;test1&quot;,mypid ; flush(6)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      do ii = 1, 25  ! number of loops depends on field size
</span><br>
<span class="quotelev1">&gt;        allocate(vv_g(vv_g_d1,d2))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        do jj = 1, d2
</span><br>
<span class="quotelev1">&gt;          call mpi_gather(vv_p(1,jj), vv_p_d1, MPI_REAL, vv_g(1,jj), vv_p_d1, MPI_REAL, 0, myworld, mpinfo)
</span><br>
<span class="quotelev1">&gt;        enddo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        if (mypid == 0) then; write(11) out; flush(11); endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        deallocate(vv_g)
</span><br>
<span class="quotelev1">&gt;      enddo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      write(6,*) &quot;test2&quot;,mypid ; flush(6)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      if (mypid == 0) close(11)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      call mpi_barrier(myworld, mpinfo)
</span><br>
<span class="quotelev1">&gt;      call mpi_finalize(mpinfo)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      end
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------end globe.f90----------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Mit freundlichem Gru&#223;
</span><br>
<span class="quotelev1">&gt;    Peer-Joachim Koch
</span><br>
<span class="quotelev1">&gt; _________________________________________________________
</span><br>
<span class="quotelev1">&gt; Max-Planck-Institut f&#252;r Biogeochemie
</span><br>
<span class="quotelev1">&gt; Dr. Peer-Joachim Koch
</span><br>
<span class="quotelev1">&gt; Hans-Kn&#246;ll Str.10            Telefon: ++49 3641 57-6705
</span><br>
<span class="quotelev1">&gt; D-07745 Jena                 Telefax: ++49 3641 57-7705
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;pkoch.vcf&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24695.php">http://www.open-mpi.org/community/lists/users/2014/06/24695.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24741.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Previous message:</strong> <a href="24739.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24695.php">Dr.Peer-Joachim Koch: "[OMPI users] mpi prorg fails (big data)"</a>
<!-- nextthread="start" -->
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
