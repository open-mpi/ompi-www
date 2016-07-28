<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May  4 22:26:56 2006" -->
<!-- isoreceived="20060505022656" -->
<!-- sent="Thu, 4 May 2006 22:26:44 -0400" -->
<!-- isosent="20060505022644" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Intercomm_merge broken" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF7A8586_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] MPI_Intercomm_merge broken" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-04 22:26:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1217.php">Dries Kimpe: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="1215.php">Marcelo Souza: "[OMPI users] Open MPI 1.0.2 Slackware Package"</a>
<li><strong>Maybe in reply to:</strong> <a href="1203.php">Michael Kluskens: "[OMPI users] MPI_Intercomm_merge broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed to both v1.1 and v1.0 -- will be in all snapshots tomorrow.
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, May 04, 2006 7:31 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Intercomm_merge broken
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael, I think you are right, the logic is exactly switched in our 
</span><br>
<span class="quotelev1">&gt; code. I'll commit a fix on the trunk, and I assume that this fix will 
</span><br>
<span class="quotelev1">&gt; also be backported to v1.1. and maybe v1.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael Kluskens wrote:
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Intercomm_merge is broken in OpenMPI 1.1a4r9788 (and 
</span><br>
<span class="quotelev1">&gt; likely all  
</span><br>
<span class="quotelev2">&gt; &gt; versions)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Details:  the second argument, high, of MPI_Intercomm_merge is a  
</span><br>
<span class="quotelev2">&gt; &gt; logical in Fortran (pg 216 of Using MPI) and an int in C.  
</span><br>
<span class="quotelev1">&gt; This now  
</span><br>
<span class="quotelev2">&gt; &gt; correct with regards to the f90 interfaces in OpenMPI 1.1.  The  
</span><br>
<span class="quotelev2">&gt; &gt; meaning of &quot;high&quot; is as follows (from pg 313 MPI-The Complete  
</span><br>
<span class="quotelev2">&gt; &gt; Reference):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If processes in one group provided the value high = false and  
</span><br>
<span class="quotelev2">&gt; &gt; processes in the other group provided the value high = true 
</span><br>
<span class="quotelev1">&gt; then the  
</span><br>
<span class="quotelev2">&gt; &gt; union orders the &quot;low&quot; group before the &quot;high&quot; group.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In other words if I have the following:
</span><br>
<span class="quotelev2">&gt; &gt;   MPI process &quot;parent&quot; calls MPI_Intercomm_merge with high 
</span><br>
<span class="quotelev1">&gt; = .false.  
</span><br>
<span class="quotelev2">&gt; &gt; ( high = 0 in C)
</span><br>
<span class="quotelev2">&gt; &gt;   MPI process &quot;child&quot; calls MPI_Intercomm_merge with high = .true.  
</span><br>
<span class="quotelev2">&gt; &gt; (high = 1 in C)
</span><br>
<span class="quotelev2">&gt; &gt; then in the merged communicator - parent has rank 0 and child has  
</span><br>
<span class="quotelev2">&gt; &gt; rank 1.  This not happening in my tests on OS X 10.4.6 with g95;  
</span><br>
<span class="quotelev2">&gt; &gt; however, my two alternative test systems handle this case 
</span><br>
<span class="quotelev1">&gt; as I expect  
</span><br>
<span class="quotelev2">&gt; &gt; -- Debian Linux with MPICH2 1.0.3 (g95) and SGI MPI Library (sgi- 
</span><br>
<span class="quotelev2">&gt; &gt; mpt-1.10.1-sgi301r1) (Intel Fotran 9.x).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The following test code is written to use the Fortran 90 
</span><br>
<span class="quotelev1">&gt; interfaces  
</span><br>
<span class="quotelev2">&gt; &gt; but it can be switched to the include file and fixed format source  
</span><br>
<span class="quotelev2">&gt; &gt; code (.f) and should compile with both f90 and f77 
</span><br>
<span class="quotelev1">&gt; compilers.  I have  
</span><br>
<span class="quotelev2">&gt; &gt; not written a C test code.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Michael
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpif90 parent4.f90 -o parent4
</span><br>
<span class="quotelev2">&gt; &gt; mpif90 child4.f90 -o child4
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; parent startup:  0  of  1
</span><br>
<span class="quotelev2">&gt; &gt; a child starting
</span><br>
<span class="quotelev2">&gt; &gt; parent spawned child process
</span><br>
<span class="quotelev2">&gt; &gt; child  0 of  1
</span><br>
<span class="quotelev2">&gt; &gt; parent merge comm:  1 of  2
</span><br>
<span class="quotelev2">&gt; &gt; ERROR: parent rank incorrect after merge
</span><br>
<span class="quotelev2">&gt; &gt; ERROR: child rank incorrect after merge
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- parent4.f90 --
</span><br>
<span class="quotelev2">&gt; &gt;        program parent4
</span><br>
<span class="quotelev2">&gt; &gt;        USE MPI
</span><br>
<span class="quotelev2">&gt; &gt;        implicit none
</span><br>
<span class="quotelev2">&gt; &gt;        integer ierr,size,rank,child,allmpi
</span><br>
<span class="quotelev2">&gt; &gt;        integer k, subprocesses
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_INIT(ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_COMM_RANK(MPI_COMM_WORLD,rank,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_COMM_SIZE(MPI_COMM_WORLD,size,ierr)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        write(6,*) 'parent startup: ', rank, ' of ', size
</span><br>
<span class="quotelev2">&gt; &gt;        subprocesses = 1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_Comm_spawn('child4', MPI_ARGV_NULL,  
</span><br>
<span class="quotelev2">&gt; &gt; subprocesses,        &amp;
</span><br>
<span class="quotelev2">&gt; &gt;       &amp;  MPI_INFO_NULL, 0, MPI_COMM_WORLD, child,  
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ERRCODES_IGNORE,   &amp;
</span><br>
<span class="quotelev2">&gt; &gt;       &amp;  ierr )
</span><br>
<span class="quotelev2">&gt; &gt;        write(6,*) 'parent spawned child process'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_Intercomm_merge( child, .false., allmpi, ierr )
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_COMM_RANK(allmpi,rank,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_COMM_SIZE(allmpi,size,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        write(*,'(2(A,I3))') 'parent merge comm:',rank, ' of', size
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        if ( rank .ne. 0 ) then
</span><br>
<span class="quotelev2">&gt; &gt;          write(6,*) 'ERROR: parent rank incorrect after merge'
</span><br>
<span class="quotelev2">&gt; &gt;        end if
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_COMM_FREE(allmpi,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_COMM_FREE(child,ierr)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        end
</span><br>
<span class="quotelev2">&gt; &gt; -- child4.f90 --
</span><br>
<span class="quotelev2">&gt; &gt;        program child4
</span><br>
<span class="quotelev2">&gt; &gt;        USE MPI
</span><br>
<span class="quotelev2">&gt; &gt;        implicit none
</span><br>
<span class="quotelev2">&gt; &gt;        integer :: ierr,size,rank,parent,rsize,allmpi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        write(*,*) 'a child starting'
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_INIT(ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_COMM_RANK(MPI_COMM_WORLD,rank,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_COMM_SIZE(MPI_COMM_WORLD,size,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        write(*,'(2(A,I3))') 'child',rank,' of', size
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_Comm_get_parent(parent,ierr)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_Intercomm_merge( parent, .true., allmpi, ierr )
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_COMM_RANK(allmpi,rank,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_COMM_SIZE(allmpi,size,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        if ( rank .eq. 0 ) then
</span><br>
<span class="quotelev2">&gt; &gt;          write(6,*) 'ERROR: child rank incorrect after merge'
</span><br>
<span class="quotelev2">&gt; &gt;        end if
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_COMM_FREE(allmpi,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_COMM_FREE(parent,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;        call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        write(*,'(2(A,I3),A)') 'child',rank,' of',size,' exiting'
</span><br>
<span class="quotelev2">&gt; &gt;        end
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 2, 2006, at 11:54 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Ok -- let me know what you find.  I just checked and the 
</span><br>
<span class="quotelev1">&gt; code *looks*
</span><br>
<span class="quotelev3">&gt; &gt;&gt;right to me, but that doesn't mean that there isn't some deeper
</span><br>
<span class="quotelev3">&gt; &gt;&gt;implication that I'm missing.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;[mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Sent: Tuesday, May 02, 2006 6:05 PM
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;To: Open MPI Users
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Subject: Re: [OMPI users] openmpi-1.0.2 configure problem
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;My test codes compile fine but I'm fairly certain the logical is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;being handled incorrectly.  When I merge two comm's with one having
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;high=.false. and the other high=.true., the latter should go
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;into the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;higher ranks and the former should contain rank 0.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;I'll work it over again tomorrow and see if I can create an f77
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;version or use the mpi.h file and see if I can get a clear
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;difference
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;and I'll compare against MPICH2 but someone else should look into
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;this issue.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Michael
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;On May 1, 2006, at 11:57 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;I just fixed the INTERCOMM_MERGE/logical issue on the trunk
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;and the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;v1.1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;branch -- can you give it a whirl there?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;I ask because this issue is a bug that we fixed on the trunk (and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;therefore v1.1) and didn't back-port it to v1.0.  There's actually
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;quite
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;a few of these F90 fixes on the trunk/v1.1 branch that we did not
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;back-port to v1.0 (e.g., most of the other logical fixes) mainly
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;because
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;we thought you were the main consumer of the F90 MPI API (and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;therefore
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;it wasn't worth it to back port :-) ).  If you need all
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;these fixes in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;v1.0, we can spend the time to do the back-port, but would prefer
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;not to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;if possible.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;[mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;Sent: Monday, May 01, 2006 6:20 PM
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;Subject: [OMPI users] openmpi-1.0.2 configure problem
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;checking if FORTRAN compiler supports integer(selected_int_kind
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;(2))... yes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;checking size of FORTRAN integer(selected_int_kind(2))... unknown
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;configure: WARNING: *** Problem running configure test!
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;configure: WARNING: *** See config.log for details.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;configure: error: *** Cannot continue.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;Source code: openmpi-1.0.2 stable
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;OS X 10.4.5 with g95 (Apr 27 2006)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;I find this rather surprising given that I have been regularly
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;building nightly snapshots of Open MPI 1.1 and 1.2 (the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;other bug is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;preventing me from using them at the moment till either 
</span><br>
<span class="quotelev1">&gt; I change my
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;code or the bugs gets fixed).
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="1217.php">Dries Kimpe: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="1215.php">Marcelo Souza: "[OMPI users] Open MPI 1.0.2 Slackware Package"</a>
<li><strong>Maybe in reply to:</strong> <a href="1203.php">Michael Kluskens: "[OMPI users] MPI_Intercomm_merge broken"</a>
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
