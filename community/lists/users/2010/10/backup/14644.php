<?
$subject_val = "[OMPI users] Need Help for understand heat equation 2D mpi solving version";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 02:34:03 2010" -->
<!-- isoreceived="20101029063403" -->
<!-- sent="Fri, 29 Oct 2010 08:33:58 +0200" -->
<!-- isosent="20101029063358" -->
<!-- name="christophe petit" -->
<!-- email="christophe.petit09_at_[hidden]" -->
<!-- subject="[OMPI users] Need Help for understand heat equation 2D mpi solving version" -->
<!-- id="AANLkTin6uj5mSCBaH5EeaXwmxHmOz+wPUQXMLsHCGAH9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Need Help for understand heat equation 2D mpi solving version<br>
<strong>From:</strong> christophe petit (<em>christophe.petit09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 02:33:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14645.php">Siegmar Gross: "[OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11"</a>
<li><strong>Previous message:</strong> <a href="14643.php">Jack Bryan: "[OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14653.php">Eugene Loh: "Re: [OMPI users] Need Help for understand heat equation 2D mpi solving version"</a>
<li><strong>Reply:</strong> <a href="14653.php">Eugene Loh: "Re: [OMPI users] Need Help for understand heat equation 2D mpi solving version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;Hello,
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am still trying to understand the parallelized version of the heat
</span><br>
<span class="quotelev1">&gt; equation 2D solving that we saw at school. In order to explain my problem, i
</span><br>
<span class="quotelev1">&gt; need to list the main code :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   9       program heat
</span><br>
<span class="quotelev1">&gt;  10
</span><br>
<span class="quotelev1">&gt; !**************************************************************************
</span><br>
<span class="quotelev1">&gt;  11 !
</span><br>
<span class="quotelev1">&gt;  12 !   This program solves the heat equation on the unit square
</span><br>
<span class="quotelev1">&gt; [0,1]x[0,1]
</span><br>
<span class="quotelev1">&gt;  13 !        | du/dt - Delta(u) = 0
</span><br>
<span class="quotelev1">&gt;  14 !        |  u/gamma = cste
</span><br>
<span class="quotelev1">&gt;  15 !   by implementing a explicit scheme.
</span><br>
<span class="quotelev1">&gt;  16 !   The discretization is done using a 5 point finite difference scheme
</span><br>
<span class="quotelev1">&gt;  17 !   and the domain is decomposed into sub-domains.
</span><br>
<span class="quotelev1">&gt;  18 !   The PDE is discretized using a 5 point finite difference scheme
</span><br>
<span class="quotelev1">&gt;  19 !   over a (x_dim+2)*(x_dim+2) grid including the end points
</span><br>
<span class="quotelev1">&gt;  20 !   correspond to the boundary points that are stored.
</span><br>
<span class="quotelev1">&gt;  21 !
</span><br>
<span class="quotelev1">&gt;  22 !   The data on the whole domain are stored in
</span><br>
<span class="quotelev1">&gt;  23 !   the following way :
</span><br>
<span class="quotelev1">&gt;  24 !
</span><br>
<span class="quotelev1">&gt;  25 !    y
</span><br>
<span class="quotelev1">&gt;  26 !           ------------------------------------
</span><br>
<span class="quotelev1">&gt;  27 !    d      |                                  |
</span><br>
<span class="quotelev1">&gt;  28 !    i      |                                  |
</span><br>
<span class="quotelev1">&gt;  29 !    r      |                                  |
</span><br>
<span class="quotelev1">&gt;  30 !    e      |                                  |
</span><br>
<span class="quotelev1">&gt;  31 !    c      |                                  |
</span><br>
<span class="quotelev1">&gt;  32 !    t      |                                  |
</span><br>
<span class="quotelev1">&gt;  33 !    i      | x20                              |
</span><br>
<span class="quotelev1">&gt;  34 !    o /\   |                                  |
</span><br>
<span class="quotelev1">&gt;  35 !    n  |   | x10                              |
</span><br>
<span class="quotelev1">&gt;  36 !       |   |                                  |
</span><br>
<span class="quotelev1">&gt;  37 !       |   | x00  x01 x02 ...                 |
</span><br>
<span class="quotelev1">&gt;  38 !       |   ------------------------------------
</span><br>
<span class="quotelev1">&gt;  39 !        -------&gt; x direction  x(*,j)
</span><br>
<span class="quotelev1">&gt;  40 !
</span><br>
<span class="quotelev1">&gt;  41 !   The boundary conditions are stored in the following submatrices
</span><br>
<span class="quotelev1">&gt;  42 !
</span><br>
<span class="quotelev1">&gt;  43 !
</span><br>
<span class="quotelev1">&gt;  44 !        x(1:x_dim, 0)          ---&gt; left   temperature
</span><br>
<span class="quotelev1">&gt;  45 !        x(1:x_dim, x_dim+1)    ---&gt; right  temperature
</span><br>
<span class="quotelev1">&gt;  46 !        x(0, 1:x_dim)          ---&gt; top    temperature
</span><br>
<span class="quotelev1">&gt;  47 !        x(x_dim+1, 1:x_dim)    ---&gt; bottom temperature
</span><br>
<span class="quotelev1">&gt;  48 !
</span><br>
<span class="quotelev1">&gt;  49
</span><br>
<span class="quotelev1">&gt; !**************************************************************************
</span><br>
<span class="quotelev1">&gt;  50       implicit none
</span><br>
<span class="quotelev1">&gt;  51       include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;  52 ! size of the discretization
</span><br>
<span class="quotelev1">&gt;  53       integer :: x_dim, nb_iter
</span><br>
<span class="quotelev1">&gt;  54       double precision, allocatable :: x(:,:),b(:,:),x0(:,:)
</span><br>
<span class="quotelev1">&gt;  55       double precision  :: dt, h, epsilon
</span><br>
<span class="quotelev1">&gt;  56       double precision  :: resLoc, result, t, tstart, tend
</span><br>
<span class="quotelev1">&gt;  57 !
</span><br>
<span class="quotelev1">&gt;  58       integer :: i,j
</span><br>
<span class="quotelev1">&gt;  59       integer :: step, maxStep
</span><br>
<span class="quotelev1">&gt;  60       integer :: size_x, size_y, me, x_domains,y_domains
</span><br>
<span class="quotelev1">&gt;  61       integer :: iconf(5), size_x_glo
</span><br>
<span class="quotelev1">&gt;  62       double precision conf(2)
</span><br>
<span class="quotelev1">&gt;  63 !
</span><br>
<span class="quotelev1">&gt;  64 ! MPI variables
</span><br>
<span class="quotelev1">&gt;  65       integer :: nproc, infompi, comm, comm2d, lda, ndims
</span><br>
<span class="quotelev1">&gt;  66       INTEGER, DIMENSION(2)  :: dims
</span><br>
<span class="quotelev1">&gt;  67       LOGICAL, DIMENSION(2)  :: periods
</span><br>
<span class="quotelev1">&gt;  68       LOGICAL, PARAMETER     :: reorganisation = .false.
</span><br>
<span class="quotelev1">&gt;  69       integer :: row_type
</span><br>
<span class="quotelev1">&gt;  70       integer, parameter :: nbvi=4
</span><br>
<span class="quotelev1">&gt;  71       integer, parameter :: S=1, E=2, N=3, W=4
</span><br>
<span class="quotelev1">&gt;  72       integer, dimension(4) :: neighBor
</span><br>
<span class="quotelev1">&gt;  73
</span><br>
<span class="quotelev1">&gt;  74 !
</span><br>
<span class="quotelev1">&gt;  75       intrinsic abs
</span><br>
<span class="quotelev1">&gt;  76 !
</span><br>
<span class="quotelev1">&gt;  77 !
</span><br>
<span class="quotelev1">&gt;  78       call MPI_INIT(infompi)
</span><br>
<span class="quotelev1">&gt;  79       comm = MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;  80       call MPI_COMM_SIZE(comm,nproc,infompi)
</span><br>
<span class="quotelev1">&gt;  81       call MPI_COMM_RANK(comm,me,infompi)
</span><br>
<span class="quotelev1">&gt;  82 !
</span><br>
<span class="quotelev1">&gt;  83 !
</span><br>
<span class="quotelev1">&gt;  84       if (me.eq.0) then
</span><br>
<span class="quotelev1">&gt;  85           call readparam(iconf, conf)
</span><br>
<span class="quotelev1">&gt;  86       endif
</span><br>
<span class="quotelev1">&gt;  87       call MPI_BCAST(iconf,5,MPI_INTEGER,0,comm,infompi)
</span><br>
<span class="quotelev1">&gt;  88       call MPI_BCAST(conf,2,MPI_DOUBLE_PRECISION,0,comm,infompi)
</span><br>
<span class="quotelev1">&gt;  89 !
</span><br>
<span class="quotelev1">&gt;  90       size_x    = iconf(1)
</span><br>
<span class="quotelev1">&gt;  91       size_y    = iconf(1)
</span><br>
<span class="quotelev1">&gt;  92       x_domains = iconf(3)
</span><br>
<span class="quotelev1">&gt;  93       y_domains = iconf(4)
</span><br>
<span class="quotelev1">&gt;  94       maxStep   = iconf(5)
</span><br>
<span class="quotelev1">&gt;  95       dt        = conf(1)
</span><br>
<span class="quotelev1">&gt;  96       epsilon   = conf(2)
</span><br>
<span class="quotelev1">&gt;  97 !
</span><br>
<span class="quotelev1">&gt;  98       size_x_glo = x_domains*size_x+2
</span><br>
<span class="quotelev1">&gt;  99       h      = 1.0d0/dble(size_x_glo)
</span><br>
<span class="quotelev1">&gt; 100       dt     = 0.25*h*h
</span><br>
<span class="quotelev1">&gt; 101 !
</span><br>
<span class="quotelev1">&gt; 102 !
</span><br>
<span class="quotelev1">&gt; 103       lda = size_y+2
</span><br>
<span class="quotelev1">&gt; 104       allocate(x(0:size_y+1,0:size_x+1))
</span><br>
<span class="quotelev1">&gt; 105       allocate(x0(0:size_y+1,0:size_x+1))
</span><br>
<span class="quotelev1">&gt; 106       allocate(b(0:size_y+1,0:size_x+1))
</span><br>
<span class="quotelev1">&gt; 107 !
</span><br>
<span class="quotelev1">&gt; 108 ! Create 2D cartesian grid
</span><br>
<span class="quotelev1">&gt; 109       periods(:) = .false.
</span><br>
<span class="quotelev1">&gt; 110
</span><br>
<span class="quotelev1">&gt; 111       ndims = 2
</span><br>
<span class="quotelev1">&gt; 112       dims(1)=x_domains
</span><br>
<span class="quotelev1">&gt; 113       dims(2)=y_domains
</span><br>
<span class="quotelev1">&gt; 114       CALL MPI_CART_CREATE(MPI_COMM_WORLD, ndims, dims, periods, &amp;
</span><br>
<span class="quotelev1">&gt; 115         reorganisation,comm2d,infompi)
</span><br>
<span class="quotelev1">&gt; 116 !
</span><br>
<span class="quotelev1">&gt; 117 ! Identify neighbors
</span><br>
<span class="quotelev1">&gt; 118 !
</span><br>
<span class="quotelev1">&gt; 119       NeighBor(:) = MPI_PROC_NULL
</span><br>
<span class="quotelev1">&gt; 120 ! Left/West and right/Est neigbors
</span><br>
<span class="quotelev1">&gt; 121       CALL MPI_CART_SHIFT(comm2d,0,1,NeighBor(W),NeighBor(E),infompi)
</span><br>
<span class="quotelev1">&gt; 122
</span><br>
<span class="quotelev1">&gt; 123       print *,'mpi_proc_null=', MPI_PROC_NULL
</span><br>
<span class="quotelev1">&gt; 124       print *,'rang=', me
</span><br>
<span class="quotelev1">&gt; 125       print *, 'ici premier mpi_cart_shift : neighbor(w)=',NeighBor(W)
</span><br>
<span class="quotelev1">&gt; 126       print *, 'ici premier mpi_cart_shift : neighbor(e)=',NeighBor(E)
</span><br>
<span class="quotelev1">&gt; 127
</span><br>
<span class="quotelev1">&gt; 128 ! Bottom/South and Upper/North neigbors
</span><br>
<span class="quotelev1">&gt; 129       CALL MPI_CART_SHIFT(comm2d,1,1,NeighBor(S),NeighBor(N),infompi)
</span><br>
<span class="quotelev1">&gt; 130
</span><br>
<span class="quotelev1">&gt; 131
</span><br>
<span class="quotelev1">&gt; 132       print *, 'ici deuxieme mpi_cart_shift : neighbor(s)=',NeighBor(S)
</span><br>
<span class="quotelev1">&gt; 133       print *, 'ici deuxieme mpi_cart_shift : neighbor(n)=',NeighBor(N)
</span><br>
<span class="quotelev1">&gt; 134
</span><br>
<span class="quotelev1">&gt; 135
</span><br>
<span class="quotelev1">&gt; 136
</span><br>
<span class="quotelev1">&gt; 137 !
</span><br>
<span class="quotelev1">&gt; 138 ! Create row data type to coimmunicate with South and North neighbors
</span><br>
<span class="quotelev1">&gt; 139 !
</span><br>
<span class="quotelev1">&gt; 140       CALL MPI_TYPE_VECTOR(size_x, 1, size_y+2, MPI_DOUBLE_PRECISION,
</span><br>
<span class="quotelev1">&gt; row_type,infompi)
</span><br>
<span class="quotelev1">&gt; 141       CALL MPI_TYPE_COMMIT(row_type, infompi)
</span><br>
<span class="quotelev1">&gt; 142 !
</span><br>
<span class="quotelev1">&gt; 143 ! initialization
</span><br>
<span class="quotelev1">&gt; 144 !
</span><br>
<span class="quotelev1">&gt; 145       call initvalues(x0, b, size_x+1, size_x )
</span><br>
<span class="quotelev1">&gt; 146 !
</span><br>
<span class="quotelev1">&gt; 147 ! Update the boundaries
</span><br>
<span class="quotelev1">&gt; 148 !
</span><br>
<span class="quotelev1">&gt; 149       call updateBound(x0,size_x,size_x, NeighBor, comm2d, row_type)
</span><br>
<span class="quotelev1">&gt; 150
</span><br>
<span class="quotelev1">&gt; 151       step = 0
</span><br>
<span class="quotelev1">&gt; 152       t    = 0.0
</span><br>
<span class="quotelev1">&gt; 153 !
</span><br>
<span class="quotelev1">&gt; 154       tstart = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; 155 ! REPEAT
</span><br>
<span class="quotelev1">&gt; 156  10   continue
</span><br>
<span class="quotelev1">&gt; 157 !
</span><br>
<span class="quotelev1">&gt; 158          step = step + 1
</span><br>
<span class="quotelev1">&gt; 159          t    = t + dt
</span><br>
<span class="quotelev1">&gt; 160 ! perform one step of the explicit scheme
</span><br>
<span class="quotelev1">&gt; 161          call Explicit(x0,x,b, size_x+1, size_x, size_x, dt, h, resLoc)
</span><br>
<span class="quotelev1">&gt; 162 ! update the partial solution along the interface
</span><br>
<span class="quotelev1">&gt; 163          call updateBound(x0,size_x,size_x, NeighBor, comm2d, row_type)
</span><br>
<span class="quotelev1">&gt; 164 ! Check the distance between two iterates
</span><br>
<span class="quotelev1">&gt; 165          call MPI_ALLREDUCE(resLoc,result,1, MPI_DOUBLE_PRECISION,
</span><br>
<span class="quotelev1">&gt; MPI_SUM,comm,infompi)
</span><br>
<span class="quotelev1">&gt; 166          result= sqrt(result)
</span><br>
<span class="quotelev1">&gt; 167 !
</span><br>
<span class="quotelev1">&gt; 168          if (me.eq.0) write(*,1002) t,result
</span><br>
<span class="quotelev1">&gt; 169 !
</span><br>
<span class="quotelev1">&gt; 170        if ((result.gt.epsilon).and.(step.lt.maxStep)) goto 10
</span><br>
<span class="quotelev1">&gt; 171 !
</span><br>
<span class="quotelev1">&gt; 172 ! UNTIL &quot;Convergence&quot;
</span><br>
<span class="quotelev1">&gt; 173 !
</span><br>
<span class="quotelev1">&gt; 174        tend = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; 175        if (me.eq.0) then
</span><br>
<span class="quotelev1">&gt; 176          write(*,*)
</span><br>
<span class="quotelev1">&gt; 177          write(*,*) ' Convergence after ', step,' steps '
</span><br>
<span class="quotelev1">&gt; 178          write(*,*) '      Problem size              ',
</span><br>
<span class="quotelev1">&gt; size_x*x_domains*size_y*y_domains
</span><br>
<span class="quotelev1">&gt; 179          write(*,*) ' Wall Clock                     ', tend-tstart
</span><br>
<span class="quotelev1">&gt; 180
</span><br>
<span class="quotelev1">&gt; 181 !
</span><br>
<span class="quotelev1">&gt; 182 ! Print the solution at each point of the grid
</span><br>
<span class="quotelev1">&gt; 183 !
</span><br>
<span class="quotelev1">&gt; 184          write(*,*)
</span><br>
<span class="quotelev1">&gt; 185          write(*,*) ' Computed solution '
</span><br>
<span class="quotelev1">&gt; 186          write(*,*)
</span><br>
<span class="quotelev1">&gt; 187          do 30, j=size_x+1,0,-1
</span><br>
<span class="quotelev1">&gt; 188             write(*,1000)(x0(j,i),i=0,size_x+1)
</span><br>
<span class="quotelev1">&gt; 189  30      continue
</span><br>
<span class="quotelev1">&gt; 190        endif
</span><br>
<span class="quotelev1">&gt; 191 !
</span><br>
<span class="quotelev1">&gt; 192       call MPI_FINALIZE(infompi)
</span><br>
<span class="quotelev1">&gt; 193 !
</span><br>
<span class="quotelev1">&gt; 194       deallocate(x)
</span><br>
<span class="quotelev1">&gt; 195       deallocate(x0)
</span><br>
<span class="quotelev1">&gt; 196       deallocate(b)
</span><br>
<span class="quotelev1">&gt; 197 !
</span><br>
<span class="quotelev1">&gt; 198 ! Formats available to display the computed values on the grid
</span><br>
<span class="quotelev1">&gt; 199 !
</span><br>
<span class="quotelev1">&gt; 200 1000  format(100(1x, f7.3))
</span><br>
<span class="quotelev1">&gt; 201 1001  format(100(1x, e7.3))
</span><br>
<span class="quotelev1">&gt; 202 1002   format(' At time ',E8.2,' Norm ', E8.2)
</span><br>
<span class="quotelev1">&gt; 203
</span><br>
<span class="quotelev1">&gt; 204 !
</span><br>
<span class="quotelev1">&gt; 205       stop
</span><br>
<span class="quotelev1">&gt; 206       end
</span><br>
<span class="quotelev1">&gt; 207 !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The routine &quot;Explicit&quot; at line 161 allows to compute  the domain 2D ( the
</span><br>
<span class="quotelev1">&gt; values of Temperature are stocked in vector &quot;x&quot; : x(1:size_x,1:size_y)) with
</span><br>
<span class="quotelev1">&gt; the following scheme :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ! The stencil of the explicit operator for the heat equation
</span><br>
<span class="quotelev1">&gt; ! on a regular rectangular grid using a five point finite difference
</span><br>
<span class="quotelev1">&gt; ! scheme in space is
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt; !                     |                + 1
</span><br>
<span class="quotelev1">&gt;      |
</span><br>
<span class="quotelev1">&gt; !                     |
</span><br>
<span class="quotelev1">&gt;       |
</span><br>
<span class="quotelev1">&gt; !dt/(h*h) *      | +1      -4 + h*h/dt                   + 1    |
</span><br>
<span class="quotelev1">&gt; !                     |
</span><br>
<span class="quotelev1">&gt;      |
</span><br>
<span class="quotelev1">&gt; !                     |               + 1
</span><br>
<span class="quotelev1">&gt;   |
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt;       diag = - 4.0 + h*h/dt
</span><br>
<span class="quotelev1">&gt;       weight =  dt/(h*h)
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt; ! perform an explicit update on the points within the domain
</span><br>
<span class="quotelev1">&gt;         do 20, j=1,size_x
</span><br>
<span class="quotelev1">&gt;           do 30, i=1,size_y
</span><br>
<span class="quotelev1">&gt;              x(i,j) = weight *( x0(i-1,j) + x0(i+1,j)  &amp;
</span><br>
<span class="quotelev1">&gt;                         + x0(i,j-1) + x0(i,j+1) +x0(i,j)*diag)
</span><br>
<span class="quotelev1">&gt;  30       continue
</span><br>
<span class="quotelev1">&gt;  20     continue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The routine &quot;updateBound&quot; updates the bound values like this :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1 !*******************************************************************
</span><br>
<span class="quotelev1">&gt;   2 SUBROUTINE updateBound(x, size_x, size_y, NeighBor, comm2d, row_type)
</span><br>
<span class="quotelev1">&gt;   3
</span><br>
<span class="quotelev1">&gt;   4 !*****************************************************************
</span><br>
<span class="quotelev1">&gt;   5    include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;   6 !
</span><br>
<span class="quotelev1">&gt;   7   INTEGER size_x, size_y
</span><br>
<span class="quotelev1">&gt;   8 !Iterate
</span><br>
<span class="quotelev1">&gt;   9   double precision,  dimension(0:size_y+1,0:size_x+1) :: x
</span><br>
<span class="quotelev1">&gt;  10 !Type row_type
</span><br>
<span class="quotelev1">&gt;  11   INTEGER :: row_type
</span><br>
<span class="quotelev1">&gt;  12   integer, parameter :: nbvi=4
</span><br>
<span class="quotelev1">&gt;  13   integer, parameter :: S=1, E=2, N=3, W=4
</span><br>
<span class="quotelev1">&gt;  14   integer, dimension(4) :: neighBor
</span><br>
<span class="quotelev1">&gt;  15 !
</span><br>
<span class="quotelev1">&gt;  16   INTEGER  :: infompi, comm2d
</span><br>
<span class="quotelev1">&gt;  17   INTEGER :: flag
</span><br>
<span class="quotelev1">&gt;  18   INTEGER, DIMENSION(MPI_STATUS_SIZE)    :: status
</span><br>
<span class="quotelev1">&gt;  19
</span><br>
<span class="quotelev1">&gt;  20 !********* North/South communication
</span><br>
<span class="quotelev1">&gt; ************************************
</span><br>
<span class="quotelev1">&gt;  21   flag = 1
</span><br>
<span class="quotelev1">&gt;  22   !Send my boundary to North and receive from South
</span><br>
<span class="quotelev1">&gt;  23   CALL MPI_SENDRECV(x(size_y, 1), 1, row_type ,neighBor(N),flag, &amp;
</span><br>
<span class="quotelev1">&gt;  24                      x(0,1), 1, row_type,neighbor(S),flag, &amp;
</span><br>
<span class="quotelev1">&gt;  25                      comm2d, status, infompi)
</span><br>
<span class="quotelev1">&gt;  26
</span><br>
<span class="quotelev1">&gt;  27   !Send my boundary to South and receive from North
</span><br>
<span class="quotelev1">&gt;  28   CALL MPI_SENDRECV(x(1,1), 1, row_type ,neighbor(S),flag, &amp;
</span><br>
<span class="quotelev1">&gt;  29                      x(size_y+1,1), 1, row_type ,neighbor(N),flag, &amp;
</span><br>
<span class="quotelev1">&gt;  30                      comm2d, status, infompi)
</span><br>
<span class="quotelev1">&gt;  31
</span><br>
<span class="quotelev1">&gt;  32 !********* Est/West communication ************************************
</span><br>
<span class="quotelev1">&gt;  33   flag = 2
</span><br>
<span class="quotelev1">&gt;  34   !Send my boundary to West and receive from Est
</span><br>
<span class="quotelev1">&gt;  35   CALL MPI_SENDRECV(x(1,1),  size_y, MPI_DOUBLE_PRECISION, neighbor(W),
</span><br>
<span class="quotelev1">&gt; flag, &amp;
</span><br>
<span class="quotelev1">&gt;  36                      x(1, size_x+1),  size_y,
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE_PRECISION,neighbor(E), flag, &amp;
</span><br>
<span class="quotelev1">&gt;  37                      comm2d, status, infompi)
</span><br>
<span class="quotelev1">&gt;  38
</span><br>
<span class="quotelev1">&gt;  39   !Send my boundary to Est and receive from West
</span><br>
<span class="quotelev1">&gt;  40   CALL MPI_SENDRECV( x(1,size_x), size_y, MPI_DOUBLE_PRECISION,
</span><br>
<span class="quotelev1">&gt; neighbor(E), flag, &amp;
</span><br>
<span class="quotelev1">&gt;  41                      x(1,0),size_y, MPI_DOUBLE_PRECISION, neighbor(W),
</span><br>
<span class="quotelev1">&gt; flag, &amp;
</span><br>
<span class="quotelev1">&gt;  42                      comm2d, status, infompi)
</span><br>
<span class="quotelev1">&gt;  43
</span><br>
<span class="quotelev1">&gt;  44 END SUBROUTINE updateBound
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am confused between the shift of the values near to the bounds done by
</span><br>
<span class="quotelev1">&gt; the &quot;updateBound&quot; routine  and the main loop (at line 161 in main code)
</span><br>
<span class="quotelev1">&gt; which calls the routine &quot;Explicit&quot;.
</span><br>
<span class="quotelev1">&gt; For a given process (say number 1) ( i use 4 here for execution), i send to
</span><br>
<span class="quotelev1">&gt; the east process (3) the penultimate column left column, to the north
</span><br>
<span class="quotelev1">&gt; process (0) the penultimate row top ,and to the others (mpi_proc_null=-2)
</span><br>
<span class="quotelev1">&gt; the penultimate right column and the bottom row. But how the 4  processes
</span><br>
<span class="quotelev1">&gt; are synchronous ? I don't understand too why all the processes go through
</span><br>
<span class="quotelev1">&gt; the solving piece of code calling the &quot;Explicit&quot; routine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here'i the sequential version of this simulation :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  49       program heat
</span><br>
<span class="quotelev1">&gt;  50       implicit none
</span><br>
<span class="quotelev1">&gt;  51 ! size of the discretization
</span><br>
<span class="quotelev1">&gt;  52       integer size_x, maxStep
</span><br>
<span class="quotelev1">&gt;  53       integer lda
</span><br>
<span class="quotelev1">&gt;  54       double precision, allocatable:: x(:,:),b(:,:), x0(:,:)
</span><br>
<span class="quotelev1">&gt;  55       double precision dt, h, result, epsilon
</span><br>
<span class="quotelev1">&gt;  56
</span><br>
<span class="quotelev1">&gt;  57 ! index loop
</span><br>
<span class="quotelev1">&gt;  58       integer i,j, step
</span><br>
<span class="quotelev1">&gt;  59       double precision t
</span><br>
<span class="quotelev1">&gt;  60 !
</span><br>
<span class="quotelev1">&gt;  61       intrinsic abs
</span><br>
<span class="quotelev1">&gt;  62 !
</span><br>
<span class="quotelev1">&gt;  63 !
</span><br>
<span class="quotelev1">&gt;  64       print *,' Size of the square '
</span><br>
<span class="quotelev1">&gt;  65       read(*,*) size_x
</span><br>
<span class="quotelev1">&gt;  66       h       = 1.0/(size_x+1)
</span><br>
<span class="quotelev1">&gt;  67       dt      = 0.25*h*h
</span><br>
<span class="quotelev1">&gt;  68       maxStep = 100
</span><br>
<span class="quotelev1">&gt;  69       print *, 'Max. number of steps '
</span><br>
<span class="quotelev1">&gt;  70       read(*,*) maxStep
</span><br>
<span class="quotelev1">&gt;  71       epsilon = 1.d-8
</span><br>
<span class="quotelev1">&gt;  72 !
</span><br>
<span class="quotelev1">&gt;  73       allocate(x(0:size_x+1,0:size_x+1))
</span><br>
<span class="quotelev1">&gt;  74       allocate(x0(0:size_x+1,0:size_x+1))
</span><br>
<span class="quotelev1">&gt;  75       allocate(b(0:size_x+1,0:size_x+1))
</span><br>
<span class="quotelev1">&gt;  76 !
</span><br>
<span class="quotelev1">&gt;  77 !
</span><br>
<span class="quotelev1">&gt;  78 ! initialization
</span><br>
<span class="quotelev1">&gt;  79 !
</span><br>
<span class="quotelev1">&gt;  80       call initvalues(x0, b, size_x+1, size_x )
</span><br>
<span class="quotelev1">&gt;  81 !
</span><br>
<span class="quotelev1">&gt;  82       step = 0
</span><br>
<span class="quotelev1">&gt;  83       t    = 0.0
</span><br>
<span class="quotelev1">&gt;  84 ! REPEAT
</span><br>
<span class="quotelev1">&gt;  85  10   continue
</span><br>
<span class="quotelev1">&gt;  86 !
</span><br>
<span class="quotelev1">&gt;  87          step = step + 1
</span><br>
<span class="quotelev1">&gt;  88          t    = t + dt
</span><br>
<span class="quotelev1">&gt;  89 !
</span><br>
<span class="quotelev1">&gt;  90          call Explicit(x0, x, b, size_x+1, size_x, size_x, dt, &amp;
</span><br>
<span class="quotelev1">&gt;  91             h, result)
</span><br>
<span class="quotelev1">&gt;  92          result = sqrt(result)
</span><br>
<span class="quotelev1">&gt;  93        if ((result.gt.epsilon).and.(step.lt.maxStep)) goto 10
</span><br>
<span class="quotelev1">&gt;  94 !
</span><br>
<span class="quotelev1">&gt;  95         write(*,*)
</span><br>
<span class="quotelev1">&gt;  96         write(*,*) ' Convergence after ', step,' steps '
</span><br>
<span class="quotelev1">&gt;  97         write(*,*) '      Problem size              ',  size_x*size_x
</span><br>
<span class="quotelev1">&gt;  98 !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for this long post but i would like to clarify my problem as much as
</span><br>
<span class="quotelev1">&gt; it was possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any explanation would help me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14644/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14645.php">Siegmar Gross: "[OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 with Oracle/Sun C 5.11"</a>
<li><strong>Previous message:</strong> <a href="14643.php">Jack Bryan: "[OMPI users] open MPI please recommend a debugger for open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14653.php">Eugene Loh: "Re: [OMPI users] Need Help for understand heat equation 2D mpi solving version"</a>
<li><strong>Reply:</strong> <a href="14653.php">Eugene Loh: "Re: [OMPI users] Need Help for understand heat equation 2D mpi solving version"</a>
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
