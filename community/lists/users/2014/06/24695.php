<?
$subject_val = "[OMPI users] mpi prorg fails (big data)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 06:31:23 2014" -->
<!-- isoreceived="20140624103123" -->
<!-- sent="Tue, 24 Jun 2014 12:31:15 +0200" -->
<!-- isosent="20140624103115" -->
<!-- name="Dr.Peer-Joachim Koch" -->
<!-- email="pkoch_at_[hidden]" -->
<!-- subject="[OMPI users] mpi prorg fails (big data)" -->
<!-- id="53A95373.2040504_at_bgc-jena.mpg.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] mpi prorg fails (big data)<br>
<strong>From:</strong> Dr.Peer-Joachim Koch (<em>pkoch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-24 06:31:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24696.php">Jeff Squyres (jsquyres): "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24694.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24740.php">Ralph Castain: "Re: [OMPI users] mpi prorg fails (big data)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24740.php">Ralph Castain: "Re: [OMPI users] mpi prorg fails (big data)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>one of our cluster users reported a problem with openmpi.
<br>
He created a short sample (just a few lines) which will start and
<br>
crash after a short time.
<br>
We only see &quot;Fatal error in PMPI_Gather: Other MPI error&quot; - no further 
<br>
details.
<br>
He is using an intel fortran compiler with a self compiled openmpi (just 
<br>
tested 1.8.1).
<br>
<p>I've know nearly nothing about mpi(openmpi) so I'm asking at this forum.
<br>
Has anybody some idea ?
<br>
<p>Thanks, Peer
<br>
<p><p><p>-----------------------makefile----------
<br>
OPTIONS=-assume byterecl -fpp -allow nofpp_comments -free
<br>
DEBUG=-g -d-lines -check -debug -debug-parameters -fpe0 -traceback
<br>
<p>all:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f JeDi globe_mod.mod JeDi.out jedi_restart
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(SOURCE) ; mpif90 $(OPTIONS) $(DEBUG) -o JeDi globe.f90
<br>
<p>--------------------------
<br>
<p>----------------globe.f90---------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program globe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: mpinfo  = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: myworld = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: mypid   = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: npro    = 1
<br>
<p>!     * The comments give some conditions required to reproduce the problem.
<br>
<p>!     * If the program runs at two hosts, the error message is shown two 
<br>
times
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, parameter :: vv_g_d1 = 2432
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, parameter :: vv_p_d1 = vv_g_d1 / 16  ! requires 16 CPUs
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, parameter :: out_d1  = 2418  ! requires &gt;=2416 (vv_g_d1 
<br>
- 16)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, parameter :: d2 = 5001 !  requires &gt;=4282 @ ii=30 / 
<br>
<span class="quotelev1"> &gt;=6682 @ ii=20 (depends on number of loops, but this limit can change 
</span><br>
for unknown reason)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: ii, jj
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real    :: vv_p(vv_p_d1,d2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real,allocatable :: vv_g(:,:)
<br>
!     * requires the definition of the variable for write to be defined 
<br>
below vv_g(:,:)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real    :: out(out_d1,d2)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vv_p(:,:) = 0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;out(:,:) = 0.0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_init(mpinfo)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;myworld = MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_size(myworld, npro, mpinfo)
<br>
!     * The problem requires 16 CPUs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (npro .ne. 16) then; write(*,*) &quot;Works only with 16 CPUs&quot;; 
<br>
stop; endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_rank(myworld, mypid, mpinfo)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mypid == 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;open(11, FILE='jedi_restart', STATUS='replace', FORM='unformatted')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(6,*) &quot;test1&quot;,mypid ; flush(6)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do ii = 1, 25  ! number of loops depends on field size
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(vv_g(vv_g_d1,d2))
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do jj = 1, d2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_gather(vv_p(1,jj), vv_p_d1, MPI_REAL, vv_g(1,jj), 
<br>
vv_p_d1, MPI_REAL, 0, myworld, mpinfo)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mypid == 0) then; write(11) out; flush(11); endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deallocate(vv_g)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(6,*) &quot;test2&quot;,mypid ; flush(6)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mypid == 0) close(11)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_barrier(myworld, mpinfo)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_finalize(mpinfo)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
---------------------------------------------end 
<br>
globe.f90----------------------
<br>
<p><pre>
-- 
Mit freundlichem Gru&#195;&#159;
     Peer-Joachim Koch
_________________________________________________________
Max-Planck-Institut f&#195;&#188;r Biogeochemie
Dr. Peer-Joachim Koch
Hans-Kn&#195;&#182;ll Str.10            Telefon: ++49 3641 57-6705
D-07745 Jena                 Telefax: ++49 3641 57-7705

</pre>
<p>
<p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24695/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24696.php">Jeff Squyres (jsquyres): "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24694.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24740.php">Ralph Castain: "Re: [OMPI users] mpi prorg fails (big data)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24740.php">Ralph Castain: "Re: [OMPI users] mpi prorg fails (big data)"</a>
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
