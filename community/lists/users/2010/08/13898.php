<?
$subject_val = "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  3 01:40:24 2010" -->
<!-- isoreceived="20100803054024" -->
<!-- sent="Mon, 02 Aug 2010 22:38:43 -0700" -->
<!-- isosent="20100803053843" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop" -->
<!-- id="4C57AB63.6010303_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinOHPsExxt7vC7nLmvZgi=6eXAXrGOajx3CPFSC_at_mail.gmail.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-03 01:38:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13899.php">Simone Pellegrini: "[OMPI users] Implementing a new BTL module in MCA"</a>
<li><strong>Previous message:</strong> <a href="13897.php">Terry Frankcombe: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13845.php">christophe petit: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
christophe petit wrote:
<blockquote
 cite="midAANLkTinOHPsExxt7vC7nLmvZgi=6eXAXrGOajx3CPFSC@mail.gmail.com"
 type="cite">Thanks for your answers, <br>
  <br>
the execution of this parallel program works fine at my work, but we
used MPICH2. I thought this will run with OPEN-MPI too.<br>
</blockquote>
<br>
In your input deck, how big are x_domains and y_domains -- that is,
iconf(3) and iconf(4)?&nbsp; Do they have to be changed if you change the
number of processes you run on?&nbsp; Off hand, it looks like
x_domains*y_domains = iconf(3)*iconf(4) should equal nproc.&nbsp; If you can
run with nproc=1 and don't change the input deck, you won't be able to
run on nproc/=1.<br>
<br>
Given that the problem is in MPI_Cart_shift, could you produce a much
smaller program that illustrates the error you're trying to understand?<br>
<blockquote
 cite="midAANLkTinOHPsExxt7vC7nLmvZgi=6eXAXrGOajx3CPFSC@mail.gmail.com"
 type="cite"><br>
Here is the f90 source where MPI_CART_SHIFT is called :<br>
  <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; program heat<br>
!**************************************************************************<br>
!<br>
!&nbsp;&nbsp; This program solves the heat equation on the unit square [0,1]x[0,1]<br>
!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | du/dt - Delta(u) = 0<br>
!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp; u/gamma = cste<br>
!&nbsp;&nbsp; by implementing a explicit scheme.<br>
!&nbsp;&nbsp; The discretization is done using a 5 point finite difference scheme<br>
!&nbsp;&nbsp; and the domain is decomposed into sub-domains. <br>
!&nbsp;&nbsp; The PDE is discretized using a 5 point finite difference scheme<br>
!&nbsp;&nbsp; over a (x_dim+2)*(x_dim+2) grid including the end points<br>
!&nbsp;&nbsp; correspond to the boundary points that are stored. <br>
!<br>
!&nbsp;&nbsp; The data on the whole domain are stored in<br>
!&nbsp;&nbsp; the following way :<br>
!<br>
!&nbsp;&nbsp;&nbsp; y<br>
!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ------------------------------------<br>
!&nbsp;&nbsp;&nbsp; d&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |<br>
!&nbsp;&nbsp;&nbsp; i&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |<br>
!&nbsp;&nbsp;&nbsp; r&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |<br>
!&nbsp;&nbsp;&nbsp; e&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |<br>
!&nbsp;&nbsp;&nbsp; c&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |<br>
!&nbsp;&nbsp;&nbsp; t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |<br>
!&nbsp;&nbsp;&nbsp; i&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | x20&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |<br>
!&nbsp;&nbsp;&nbsp; o /\&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |<br>
!&nbsp;&nbsp;&nbsp; n&nbsp; |&nbsp;&nbsp; | x10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |<br>
!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |<br>
!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp; | x00&nbsp; x01 x02 ...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |<br>
!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp; ------------------------------------<br>
!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -------&gt; x direction&nbsp; x(*,j)<br>
!<br>
!&nbsp;&nbsp; The boundary conditions are stored in the following submatrices<br>
!<br>
!<br>
!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; x(1:x_dim, 0)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ---&gt; left&nbsp;&nbsp; temperature<br>
!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; x(1:x_dim, x_dim+1)&nbsp;&nbsp;&nbsp; ---&gt; right&nbsp; temperature<br>
!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; x(0, 1:x_dim)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ---&gt; top&nbsp;&nbsp;&nbsp; temperature<br>
!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; x(x_dim+1, 1:x_dim)&nbsp;&nbsp;&nbsp; ---&gt; bottom temperature<br>
!<br>
!**************************************************************************<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; implicit none<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; include 'mpif.h'<br>
! size of the discretization<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; integer :: x_dim, nb_iter<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; double precision, allocatable :: x(:,:),b(:,:),x0(:,:)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; double precision&nbsp; :: dt, h, epsilon<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; double precision&nbsp; :: resLoc, result, t, tstart, tend<br>
! <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; integer :: i,j<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; integer :: step, maxStep<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; integer :: size_x, size_y, me, x_domains,y_domains<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; integer :: iconf(5), size_x_glo<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; double precision conf(2)<br>
!&nbsp; <br>
! MPI variables<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; integer :: nproc, infompi, comm, comm2d, lda, ndims<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; INTEGER, DIMENSION(2)&nbsp; :: dims<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; LOGICAL, DIMENSION(2)&nbsp; :: periods<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; LOGICAL, PARAMETER&nbsp;&nbsp;&nbsp;&nbsp; :: reorganisation = .false.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; integer :: row_type<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; integer, parameter :: nbvi=4<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; integer, parameter :: S=1, E=2, N=3, W=4<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; integer, dimension(4) :: neighBor<br>
  <br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; intrinsic abs<br>
!<br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_INIT(infompi)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; comm = MPI_COMM_WORLD<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_COMM_SIZE(comm,nproc,infompi)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_COMM_RANK(comm,me,infompi)<br>
!<br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if (me.eq.0) then<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call readparam(iconf, conf)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; endif<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_BCAST(iconf,5,MPI_INTEGER,0,comm,infompi)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_BCAST(conf,2,MPI_DOUBLE_PRECISION,0,comm,infompi)<br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; size_x&nbsp;&nbsp;&nbsp; = iconf(1)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; size_y&nbsp;&nbsp;&nbsp; = iconf(1)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; x_domains = iconf(3)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; y_domains = iconf(4)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; maxStep&nbsp;&nbsp; = iconf(5)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = conf(1)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; epsilon&nbsp;&nbsp; = conf(2)<br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; size_x_glo = x_domains*size_x+2<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; h&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = 1.0d0/dble(size_x_glo)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dt&nbsp;&nbsp;&nbsp;&nbsp; = 0.25*h*h<br>
!<br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lda = size_y+2<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; allocate(x(0:size_y+1,0:size_x+1))<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; allocate(x0(0:size_y+1,0:size_x+1))<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; allocate(b(0:size_y+1,0:size_x+1))<br>
!<br>
! Create 2D cartesian grid<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; periods(:) = .false.<br>
  <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ndims = 2<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dims(1)=x_domains<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dims(2)=y_domains<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CALL MPI_CART_CREATE(MPI_COMM_WORLD, ndims, dims, periods, &amp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; reorganisation,comm2d,infompi)<br>
!<br>
! Identify neighbors<br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NeighBor(:) = MPI_PROC_NULL<br>
! Left/West and right/Est neigbors<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CALL MPI_CART_SHIFT(comm2d,0,1,NeighBor(W),NeighBor(E),infompi)<br>
! Bottom/South and Upper/North neigbors<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CALL MPI_CART_SHIFT(comm2d,1,1,NeighBor(S),NeighBor(N),infompi)<br>
!<br>
! Create row data type to coimmunicate with South and North neighbors<br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CALL MPI_TYPE_VECTOR(size_x, 1, size_y+2, MPI_DOUBLE_PRECISION,
row_type,infompi)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CALL MPI_TYPE_COMMIT(row_type, infompi)<br>
!<br>
! initialization <br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call initvalues(x0, b, size_x+1, size_x )<br>
!<br>
! Update the boundaries<br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call updateBound(x0,size_x,size_x, NeighBor, comm2d, row_type)<br>
&nbsp;&nbsp;&nbsp; <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; step = 0<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; t&nbsp;&nbsp;&nbsp; = 0.0<br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; tstart = MPI_Wtime()<br>
! REPEAT<br>
&nbsp;10&nbsp;&nbsp; continue<br>
! <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; step = step + 1<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; t&nbsp;&nbsp;&nbsp; = t + dt<br>
! perform one step of the explicit scheme<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call Explicit(x0,x,b, size_x+1, size_x, size_x, dt, h, resLoc)<br>
! update the partial solution along the interface<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call updateBound(x0,size_x,size_x, NeighBor, comm2d, row_type)<br>
! Check the distance between two iterates<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_ALLREDUCE(resLoc,result,1, MPI_DOUBLE_PRECISION,
MPI_SUM,comm,infompi)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; result= sqrt(result)<br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if (me.eq.0) write(*,1002) t,result<br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if ((result.gt.epsilon).and.(step.lt.maxStep)) goto 10<br>
!<br>
! UNTIL "Convergence"<br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; tend = MPI_Wtime()<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if (me.eq.0) then<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; write(*,*)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; write(*,*) ' Convergence after ', step,' steps '<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; write(*,*) '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Problem size&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ',
size_x*x_domains*size_y*y_domains<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; write(*,*) ' Wall Clock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ', tend-tstart<br>
  <br>
!<br>
! Print the solution at each point of the grid<br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; write(*,*)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; write(*,*) ' Computed solution '<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; write(*,*)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; do 30, j=size_x+1,0,-1<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; write(*,1000)(x0(j,i),i=0,size_x+1)<br>
&nbsp;30&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; continue<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; endif<br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_FINALIZE(infompi)<br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; deallocate(x)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; deallocate(x0)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; deallocate(b)<br>
!<br>
! Formats available to display the computed values on the grid<br>
!<br>
1000&nbsp; format(100(1x, f7.3))<br>
1001&nbsp; format(100(1x, e7.3))<br>
1002&nbsp;&nbsp; format(' At time ',E8.2,' Norm ', E8.2)<br>
  <br>
!<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; stop<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; end<br>
!<br>
  <br>
------------------------------------------------------------------------------<br>
  <div class="gmail_quote">2010/7/28 Jeff Squyres <span dir="ltr">&lt;<a
 href="mailto:jsquyres@cisco.com">jsquyres@cisco.com</a>&gt;</span><br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">According
to the error message (especially since it's consistent across 2
different platforms), it looks like you have an error in your
application. &nbsp;Open MPI says that you're using an invalid communicator
when calling MPI_Cart_shift. &nbsp;"Invalid" probably means that it's not a
Cartesian communicator.<br>
    <br>
You might want to double check the definition and requirements of the
MPI_CART_SHIFT function (see the MPI_Cart_shift(3) man page).<br>
    <div>
    <div class="h5"><br>
    <br>
    <br>
On Jul 28, 2010, at 12:28 PM, christophe petit wrote:<br>
    <br>
&gt; hello,<br>
&gt;<br>
&gt; i have a problem concerning the execution of a f90 program
(explicitPar) compiled with openmpi-1.4.2. I get nearly the same error
on my debian desktop ( AMD Phenom(tm) 9550 Quad-Core Processor) and my
mac pro i7 laptop :<br>
&gt;<br>
&gt; on mac pro i7 :<br>
&gt;<br>
&gt; $ mpiexec -np 2 explicitPar<br>
&gt; [macbook-pro-de-fab.livebox.home:48805] *** An error occurred in
MPI_Cart_shift<br>
&gt; [macbook-pro-de-fab.livebox.home:48805] *** on communicator
MPI_COMM_WORLD<br>
&gt; [macbook-pro-de-fab.livebox.home:48805] *** MPI_ERR_COMM: invalid
communicator<br>
&gt; [macbook-pro-de-fab.livebox.home:48805] *** MPI_ERRORS_ARE_FATAL
(your MPI job will now abort)<br>
&gt;
--------------------------------------------------------------------------<br>
&gt; mpiexec has exited due to process rank 1 with PID 48805 on<br>
&gt; node macbook-pro-de-fab.livebox.home exiting without calling
"finalize". This may<br>
&gt; have caused other processes in the application to be<br>
&gt; terminated by signals sent by mpiexec (as reported here).<br>
&gt;<br>
&gt;
---------------------------------------------------------------------------<br>
&gt;<br>
&gt; on my debian desktop :<br>
&gt;<br>
&gt; mpirun -np 2 explicitPar<br>
&gt; [pablo:11665] *** An error occurred in MPI_Cart_shift<br>
&gt; [pablo:11665] *** on communicator MPI_COMM_WORLD<br>
&gt; [pablo:11665] *** MPI_ERR_COMM: invalid communicator<br>
&gt; [pablo:11665] *** MPI_ERRORS_ARE_FATAL (your MPI job will now
abort)<br>
&gt;
--------------------------------------------------------------------------<br>
&gt; mpirun has exited due to process rank 1 with PID 11665 on<br>
&gt; node pablo exiting without calling "finalize". This may<br>
&gt; have caused other processes in the application to be<br>
&gt; terminated by signals sent by mpirun (as reported here).<br>
&gt;
--------------------------------------------------------------------------<br>
&gt;<br>
&gt;<br>
&gt; I have installed openmpi-1.4.2 with the following options :<br>
&gt;<br>
&gt; ./configure --prefix=/usr/local/openmpi --enable-mpi-f77
--enable-mpi-f90<br>
&gt;<br>
&gt; with exported variables on bash shell : FC=gfortran F90=gfortran
F77=gfortran CC=gcc CXX=g++<br>
&gt;<br>
&gt; The &nbsp;installation has been completed, the program compiles fine
but i don't understand what's wrong. I note that with a single
processor ("mpirun -np 1 explicitPar"), execution works fine.<br>
&gt;<br>
&gt; My debian desktop is a quad-core, so, theoretically, i can put up
to 4 for "np" parameter.<br>
&gt; On my mac pro i7, i don't know how processors are there, but the
"htop" command makes appear 4 cores too.<br>
&gt;<br>
&gt; Anyone has a solution ?<br>
&gt;<br>
&gt; Regards.<br>
&gt;<br>
&gt;<br>
&gt;<br>
&gt;<br>
&gt;<br>
&gt;<br>
&gt;<br>
    </div>
    </div>
    <div class="im">&gt; _______________________________________________<br>
&gt; users mailing list<br>
&gt; <a href="mailto:users@open-mpi.org">users@open-mpi.org</a><br>
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users"
 target="_blank">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
    <br>
    <br>
    </div>
    <font color="#888888">--<br>
Jeff Squyres<br>
    <a href="mailto:jsquyres@cisco.com">jsquyres@cisco.com</a><br>
For corporate legal information go to:<br>
    <a href="http://www.cisco.com/web/about/doing_business/legal/cri/"
 target="_blank">http://www.cisco.com/web/about/doing_business/legal/cri/</a><br>
    </font>
    <div>
    <div class="h5"><br>
    <br>
_______________________________________________<br>
users mailing list<br>
    <a href="mailto:users@open-mpi.org">users@open-mpi.org</a><br>
    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users"
 target="_blank">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
    </div>
    </div>
  </blockquote>
  </div>
  <br>
  <pre wrap="">
<hr size="4" width="90%">
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></pre>
</blockquote>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13899.php">Simone Pellegrini: "[OMPI users] Implementing a new BTL module in MCA"</a>
<li><strong>Previous message:</strong> <a href="13897.php">Terry Frankcombe: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13845.php">christophe petit: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
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
