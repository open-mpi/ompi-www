<?
$subject_val = "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 13:06:03 2010" -->
<!-- isoreceived="20100728170603" -->
<!-- sent="Wed, 28 Jul 2010 19:05:57 +0200" -->
<!-- isosent="20100728170557" -->
<!-- name="christophe petit" -->
<!-- email="christophe.petit09_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop" -->
<!-- id="AANLkTinOHPsExxt7vC7nLmvZgi=6eXAXrGOajx3CPFSC_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="31983B2E-73E5-4345-803E-CE87648D8171_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop<br>
<strong>From:</strong> christophe petit (<em>christophe.petit09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 13:05:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13846.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13844.php">Jeff Squyres: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>In reply to:</strong> <a href="13844.php">Jeff Squyres: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13898.php">Eugene Loh: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13898.php">Eugene Loh: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your answers,
<br>
<p>the execution of this parallel program works fine at my work, but we used
<br>
MPICH2. I thought this will run with OPEN-MPI too.
<br>
<p>Here is the f90 source where MPI_CART_SHIFT is called :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program heat
<br>
!**************************************************************************
<br>
!
<br>
!   This program solves the heat equation on the unit square [0,1]x[0,1]
<br>
!        | du/dt - Delta(u) = 0
<br>
!        |  u/gamma = cste
<br>
!   by implementing a explicit scheme.
<br>
!   The discretization is done using a 5 point finite difference scheme
<br>
!   and the domain is decomposed into sub-domains.
<br>
!   The PDE is discretized using a 5 point finite difference scheme
<br>
!   over a (x_dim+2)*(x_dim+2) grid including the end points
<br>
!   correspond to the boundary points that are stored.
<br>
!
<br>
!   The data on the whole domain are stored in
<br>
!   the following way :
<br>
!
<br>
!    y
<br>
!           ------------------------------------
<br>
!    d      |                                  |
<br>
!    i      |                                  |
<br>
!    r      |                                  |
<br>
!    e      |                                  |
<br>
!    c      |                                  |
<br>
!    t      |                                  |
<br>
!    i      | x20                              |
<br>
!    o /\   |                                  |
<br>
!    n  |   | x10                              |
<br>
!       |   |                                  |
<br>
!       |   | x00  x01 x02 ...                 |
<br>
!       |   ------------------------------------
<br>
!        -------&gt; x direction  x(*,j)
<br>
!
<br>
!   The boundary conditions are stored in the following submatrices
<br>
!
<br>
!
<br>
!        x(1:x_dim, 0)          ---&gt; left   temperature
<br>
!        x(1:x_dim, x_dim+1)    ---&gt; right  temperature
<br>
!        x(0, 1:x_dim)          ---&gt; top    temperature
<br>
!        x(x_dim+1, 1:x_dim)    ---&gt; bottom temperature
<br>
!
<br>
!**************************************************************************
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
! size of the discretization
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: x_dim, nb_iter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double precision, allocatable :: x(:,:),b(:,:),x0(:,:)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double precision  :: dt, h, epsilon
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double precision  :: resLoc, result, t, tstart, tend
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: i,j
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: step, maxStep
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: size_x, size_y, me, x_domains,y_domains
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: iconf(5), size_x_glo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double precision conf(2)
<br>
!
<br>
! MPI variables
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: nproc, infompi, comm, comm2d, lda, ndims
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER, DIMENSION(2)  :: dims
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGICAL, DIMENSION(2)  :: periods
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGICAL, PARAMETER     :: reorganisation = .false.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: row_type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, parameter :: nbvi=4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, parameter :: S=1, E=2, N=3, W=4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, dimension(4) :: neighBor
<br>
<p>!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intrinsic abs
<br>
!
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(infompi)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm = MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(comm,nproc,infompi)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(comm,me,infompi)
<br>
!
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (me.eq.0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call readparam(iconf, conf)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_BCAST(iconf,5,MPI_INTEGER,0,comm,infompi)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_BCAST(conf,2,MPI_DOUBLE_PRECISION,0,comm,infompi)
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_x    = iconf(1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_y    = iconf(1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x_domains = iconf(3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y_domains = iconf(4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;maxStep   = iconf(5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dt        = conf(1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;epsilon   = conf(2)
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_x_glo = x_domains*size_x+2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h      = 1.0d0/dble(size_x_glo)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dt     = 0.25*h*h
<br>
!
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lda = size_y+2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(x(0:size_y+1,0:size_x+1))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(x0(0:size_y+1,0:size_x+1))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(b(0:size_y+1,0:size_x+1))
<br>
!
<br>
! Create 2D cartesian grid
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;periods(:) = .false.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ndims = 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dims(1)=x_domains
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dims(2)=y_domains
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_CART_CREATE(MPI_COMM_WORLD, ndims, dims, periods, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reorganisation,comm2d,infompi)
<br>
!
<br>
! Identify neighbors
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NeighBor(:) = MPI_PROC_NULL
<br>
! Left/West and right/Est neigbors
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_CART_SHIFT(comm2d,0,1,NeighBor(W),NeighBor(E),infompi)
<br>
! Bottom/South and Upper/North neigbors
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_CART_SHIFT(comm2d,1,1,NeighBor(S),NeighBor(N),infompi)
<br>
!
<br>
! Create row data type to coimmunicate with South and North neighbors
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_TYPE_VECTOR(size_x, 1, size_y+2, MPI_DOUBLE_PRECISION,
<br>
row_type,infompi)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_TYPE_COMMIT(row_type, infompi)
<br>
!
<br>
! initialization
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call initvalues(x0, b, size_x+1, size_x )
<br>
!
<br>
! Update the boundaries
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call updateBound(x0,size_x,size_x, NeighBor, comm2d, row_type)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;step = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t    = 0.0
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tstart = MPI_Wtime()
<br>
! REPEAT
<br>
&nbsp;10   continue
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;step = step + 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t    = t + dt
<br>
! perform one step of the explicit scheme
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call Explicit(x0,x,b, size_x+1, size_x, size_x, dt, h, resLoc)
<br>
! update the partial solution along the interface
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call updateBound(x0,size_x,size_x, NeighBor, comm2d, row_type)
<br>
! Check the distance between two iterates
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_ALLREDUCE(resLoc,result,1, MPI_DOUBLE_PRECISION,
<br>
MPI_SUM,comm,infompi)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result= sqrt(result)
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (me.eq.0) write(*,1002) t,result
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((result.gt.epsilon).and.(step.lt.maxStep)) goto 10
<br>
!
<br>
! UNTIL &quot;Convergence&quot;
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tend = MPI_Wtime()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (me.eq.0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) ' Convergence after ', step,' steps '
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) '      Problem size              ',
<br>
size_x*x_domains*size_y*y_domains
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) ' Wall Clock                     ', tend-tstart
<br>
<p>!
<br>
! Print the solution at each point of the grid
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) ' Computed solution '
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do 30, j=size_x+1,0,-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,1000)(x0(j,i),i=0,size_x+1)
<br>
&nbsp;30      continue
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(infompi)
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deallocate(x)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deallocate(x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deallocate(b)
<br>
!
<br>
! Formats available to display the computed values on the grid
<br>
!
<br>
1000  format(100(1x, f7.3))
<br>
1001  format(100(1x, e7.3))
<br>
1002   format(' At time ',E8.2,' Norm ', E8.2)
<br>
<p>!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
!
<br>
<p>------------------------------------------------------------------------------
<br>
2010/7/28 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; According to the error message (especially since it's consistent across 2
</span><br>
<span class="quotelev1">&gt; different platforms), it looks like you have an error in your application.
</span><br>
<span class="quotelev1">&gt;  Open MPI says that you're using an invalid communicator when calling
</span><br>
<span class="quotelev1">&gt; MPI_Cart_shift.  &quot;Invalid&quot; probably means that it's not a Cartesian
</span><br>
<span class="quotelev1">&gt; communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to double check the definition and requirements of the
</span><br>
<span class="quotelev1">&gt; MPI_CART_SHIFT function (see the MPI_Cart_shift(3) man page).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2010, at 12:28 PM, christophe petit wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i have a problem concerning the execution of a f90 program (explicitPar)
</span><br>
<span class="quotelev1">&gt; compiled with openmpi-1.4.2. I get nearly the same error on my debian
</span><br>
<span class="quotelev1">&gt; desktop ( AMD Phenom(tm) 9550 Quad-Core Processor) and my mac pro i7 laptop
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; on mac pro i7 :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpiexec -np 2 explicitPar
</span><br>
<span class="quotelev2">&gt; &gt; [macbook-pro-de-fab.livebox.home:48805] *** An error occurred in
</span><br>
<span class="quotelev1">&gt; MPI_Cart_shift
</span><br>
<span class="quotelev2">&gt; &gt; [macbook-pro-de-fab.livebox.home:48805] *** on communicator
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [macbook-pro-de-fab.livebox.home:48805] *** MPI_ERR_COMM: invalid
</span><br>
<span class="quotelev1">&gt; communicator
</span><br>
<span class="quotelev2">&gt; &gt; [macbook-pro-de-fab.livebox.home:48805] *** MPI_ERRORS_ARE_FATAL (your
</span><br>
<span class="quotelev1">&gt; MPI job will now abort)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec has exited due to process rank 1 with PID 48805 on
</span><br>
<span class="quotelev2">&gt; &gt; node macbook-pro-de-fab.livebox.home exiting without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; This may
</span><br>
<span class="quotelev2">&gt; &gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt; &gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; on my debian desktop :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 explicitPar
</span><br>
<span class="quotelev2">&gt; &gt; [pablo:11665] *** An error occurred in MPI_Cart_shift
</span><br>
<span class="quotelev2">&gt; &gt; [pablo:11665] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [pablo:11665] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt; &gt; [pablo:11665] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun has exited due to process rank 1 with PID 11665 on
</span><br>
<span class="quotelev2">&gt; &gt; node pablo exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt; &gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt; &gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have installed openmpi-1.4.2 with the following options :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/usr/local/openmpi --enable-mpi-f77 --enable-mpi-f90
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; with exported variables on bash shell : FC=gfortran F90=gfortran
</span><br>
<span class="quotelev1">&gt; F77=gfortran CC=gcc CXX=g++
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The  installation has been completed, the program compiles fine but i
</span><br>
<span class="quotelev1">&gt; don't understand what's wrong. I note that with a single processor (&quot;mpirun
</span><br>
<span class="quotelev1">&gt; -np 1 explicitPar&quot;), execution works fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My debian desktop is a quad-core, so, theoretically, i can put up to 4
</span><br>
<span class="quotelev1">&gt; for &quot;np&quot; parameter.
</span><br>
<span class="quotelev2">&gt; &gt; On my mac pro i7, i don't know how processors are there, but the &quot;htop&quot;
</span><br>
<span class="quotelev1">&gt; command makes appear 4 cores too.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyone has a solution ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13845/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13846.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13844.php">Jeff Squyres: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>In reply to:</strong> <a href="13844.php">Jeff Squyres: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13898.php">Eugene Loh: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13898.php">Eugene Loh: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
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
