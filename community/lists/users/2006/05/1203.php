<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  3 09:53:02 2006" -->
<!-- isoreceived="20060503135302" -->
<!-- sent="Wed, 3 May 2006 09:52:48 -0400" -->
<!-- isosent="20060503135248" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Intercomm_merge broken" -->
<!-- id="0E0BD545-2D48-46C4-B171-032193B2CCF0_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF7A7DAE_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-03 09:52:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1204.php">Bert Wesarg: "[OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<li><strong>Previous message:</strong> <a href="1202.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>In reply to:</strong> <a href="1201.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1205.php">Edgar Gabriel: "Re: [OMPI users] MPI_Intercomm_merge broken"</a>
<li><strong>Reply:</strong> <a href="1205.php">Edgar Gabriel: "Re: [OMPI users] MPI_Intercomm_merge broken"</a>
<li><strong>Maybe reply:</strong> <a href="1216.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Intercomm_merge broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Intercomm_merge is broken in OpenMPI 1.1a4r9788 (and likely all  
<br>
versions)
<br>
<p>Details:  the second argument, high, of MPI_Intercomm_merge is a  
<br>
logical in Fortran (pg 216 of Using MPI) and an int in C.  This now  
<br>
correct with regards to the f90 interfaces in OpenMPI 1.1.  The  
<br>
meaning of &quot;high&quot; is as follows (from pg 313 MPI-The Complete  
<br>
Reference):
<br>
<p>If processes in one group provided the value high = false and  
<br>
processes in the other group provided the value high = true then the  
<br>
union orders the &quot;low&quot; group before the &quot;high&quot; group.
<br>
<p>In other words if I have the following:
<br>
&nbsp;&nbsp;MPI process &quot;parent&quot; calls MPI_Intercomm_merge with high = .false.  
<br>
( high = 0 in C)
<br>
&nbsp;&nbsp;MPI process &quot;child&quot; calls MPI_Intercomm_merge with high = .true.  
<br>
(high = 1 in C)
<br>
then in the merged communicator - parent has rank 0 and child has  
<br>
rank 1.  This not happening in my tests on OS X 10.4.6 with g95;  
<br>
however, my two alternative test systems handle this case as I expect  
<br>
-- Debian Linux with MPICH2 1.0.3 (g95) and SGI MPI Library (sgi- 
<br>
mpt-1.10.1-sgi301r1) (Intel Fotran 9.x).
<br>
<p>The following test code is written to use the Fortran 90 interfaces  
<br>
but it can be switched to the include file and fixed format source  
<br>
code (.f) and should compile with both f90 and f77 compilers.  I have  
<br>
not written a C test code.
<br>
<p>Michael
<br>
<p>mpif90 parent4.f90 -o parent4
<br>
mpif90 child4.f90 -o child4
<br>
<p>parent startup:  0  of  1
<br>
a child starting
<br>
parent spawned child process
<br>
child  0 of  1
<br>
parent merge comm:  1 of  2
<br>
ERROR: parent rank incorrect after merge
<br>
ERROR: child rank incorrect after merge
<br>
<p>-- parent4.f90 --
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program parent4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USE MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ierr,size,rank,child,allmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer k, subprocesses
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD,rank,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD,size,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(6,*) 'parent startup: ', rank, ' of ', size
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subprocesses = 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Comm_spawn('child4', MPI_ARGV_NULL,  
<br>
subprocesses,        &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;  MPI_INFO_NULL, 0, MPI_COMM_WORLD, child,  
<br>
MPI_ERRCODES_IGNORE,   &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;  ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(6,*) 'parent spawned child process'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Intercomm_merge( child, .false., allmpi, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(allmpi,rank,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(allmpi,size,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,'(2(A,I3))') 'parent merge comm:',rank, ' of', size
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( rank .ne. 0 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(6,*) 'ERROR: parent rank incorrect after merge'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_FREE(allmpi,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_FREE(child,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
-- child4.f90 --
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program child4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USE MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: ierr,size,rank,parent,rsize,allmpi
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'a child starting'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD,rank,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD,size,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,'(2(A,I3))') 'child',rank,' of', size
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Comm_get_parent(parent,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Intercomm_merge( parent, .true., allmpi, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(allmpi,rank,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(allmpi,size,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( rank .eq. 0 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(6,*) 'ERROR: child rank incorrect after merge'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_FREE(allmpi,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_FREE(parent,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,'(2(A,I3),A)') 'child',rank,' of',size,' exiting'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
------------------------------------
<br>
<p>On May 2, 2006, at 11:54 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Ok -- let me know what you find.  I just checked and the code *looks*
</span><br>
<span class="quotelev1">&gt; right to me, but that doesn't mean that there isn't some deeper
</span><br>
<span class="quotelev1">&gt; implication that I'm missing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, May 02, 2006 6:05 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] openmpi-1.0.2 configure problem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My test codes compile fine but I'm fairly certain the logical is
</span><br>
<span class="quotelev2">&gt;&gt; being handled incorrectly.  When I merge two comm's with one having
</span><br>
<span class="quotelev2">&gt;&gt; high=.false. and the other high=.true., the latter should go
</span><br>
<span class="quotelev2">&gt;&gt; into the
</span><br>
<span class="quotelev2">&gt;&gt; higher ranks and the former should contain rank 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll work it over again tomorrow and see if I can create an f77
</span><br>
<span class="quotelev2">&gt;&gt; version or use the mpi.h file and see if I can get a clear
</span><br>
<span class="quotelev2">&gt;&gt; difference
</span><br>
<span class="quotelev2">&gt;&gt; and I'll compare against MPICH2 but someone else should look into
</span><br>
<span class="quotelev2">&gt;&gt; this issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 1, 2006, at 11:57 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just fixed the INTERCOMM_MERGE/logical issue on the trunk
</span><br>
<span class="quotelev2">&gt;&gt; and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branch -- can you give it a whirl there?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ask because this issue is a bug that we fixed on the trunk (and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; therefore v1.1) and didn't back-port it to v1.0.  There's actually
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quite
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a few of these F90 fixes on the trunk/v1.1 branch that we did not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back-port to v1.0 (e.g., most of the other logical fixes) mainly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we thought you were the main consumer of the F90 MPI API (and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; therefore
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it wasn't worth it to back port :-) ).  If you need all
</span><br>
<span class="quotelev2">&gt;&gt; these fixes in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.0, we can spend the time to do the back-port, but would prefer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if possible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Monday, May 01, 2006 6:20 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: [OMPI users] openmpi-1.0.2 configure problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking if FORTRAN compiler supports integer(selected_int_kind
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (2))... yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking size of FORTRAN integer(selected_int_kind(2))... unknown
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: *** Problem running configure test!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: *** See config.log for details.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: *** Cannot continue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Source code: openmpi-1.0.2 stable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OS X 10.4.5 with g95 (Apr 27 2006)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I find this rather surprising given that I have been regularly
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; building nightly snapshots of Open MPI 1.1 and 1.2 (the
</span><br>
<span class="quotelev2">&gt;&gt; other bug is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; preventing me from using them at the moment till either I change my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code or the bugs gets fixed).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1204.php">Bert Wesarg: "[OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<li><strong>Previous message:</strong> <a href="1202.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>In reply to:</strong> <a href="1201.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1205.php">Edgar Gabriel: "Re: [OMPI users] MPI_Intercomm_merge broken"</a>
<li><strong>Reply:</strong> <a href="1205.php">Edgar Gabriel: "Re: [OMPI users] MPI_Intercomm_merge broken"</a>
<li><strong>Maybe reply:</strong> <a href="1216.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Intercomm_merge broken"</a>
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
