!******************************************************************************
!     3D GRAVITY INVERSION OF BASEMENT RELIEF (NONLINEAR)
!     A PARALLEL VERY FAST SIMULATED ANNEALING APPROACH 
!******************************************************************************
!     mf : number of data
!     n  : number of model parameters
!..............................................................................
      PROGRAM inv_grav3d_VFSA
      use mpi
      implicit none
      integer, parameter :: nox=28, noy=50
      integer, parameter :: mf=1400, n=1400
      integer :: i,j,k,l,icon,maxtemps,nmov,jtemp,jmov,taskid
      integer, allocatable,dimension (:)   :: nx
      real*8, allocatable, dimension (:)   :: zv,xrec,yrec,xprm,yprm
      real*8, allocatable, dimension (:)   :: gobs,xmod,d
      real*8, allocatable, dimension (:)   :: xmin,xmax,dx,t0
      real*8, allocatable, dimension (:,:) :: xstat,ystat,z
      real*8 :: start_time,end_time,tmp1,temp0
      real*8 :: decay,temp,diftemp
      real*8 :: xx,yy,ran2,dx1,dy,sd,alpha
      integer ierr
!      data    irand/0/

      call MPI_Init(ierr)      ! Initialising MPI
      if (ierr .ne. 0) then
         print*,'Error initialising MPI'
         stop 
      end if


      dx1   =  1.5d0           ! dimension x of the prism base
      dy    =  1.5d0           ! dimension y of the prism base (square base) 
      sd    = -0.67d0          ! density contrast on the surface
      alpha =  0.026d0         ! constant alpha

      allocate(zv(n),xrec(mf),yrec(mf),xprm(n),yprm(n))
      allocate(gobs(mf),xmod(n),d(mf))
      allocate(xstat(noy,nox),ystat(noy,nox),z(noy,nox))
      allocate(xmin(n), xmax(n), dx(n), t0(n), nx(n))

      open(10,file='sinteticoxyz.dat',form='formatted',status='unknown') ! synthetic model file 
      open(20,file='observado.dat',form='formatted',status='unknown')    ! observed data file  
      open(24,file="info_vfsa.dat",form="formatted",status='unknown') ! output file: information of inversion
      open(22,file="fields.dat",form="formatted",status='unknown')    ! output file: gravity field
      open(23,file="zs.dat",form="formatted",status='unknown')        ! output file: depths
!------------------------------------------------------------------------------

!     Reading the file X,Y,Z (true model) and observed gravity

       do i=1,noy
         do k=1,nox
          read(10,*) xstat(i,k),ystat(i,k),z(i,k)
         enddo
       enddo
!
       icon=0
       do i=1,nox
        do j=1,noy
          icon=icon+1
            zv(icon)=    z(j,i)
          xrec(icon)=xstat(j,i)
          yrec(icon)=ystat(j,i)
          xprm(icon)=xstat(j,i)
          yprm(icon)=ystat(j,i)
        enddo
       enddo
!
       icon=0
       do i=1,nox
         do k=1,noy
          icon=icon+1
          read(20,*) tmp1,tmp1,gobs(icon)
         enddo
          read(20,*)
       enddo

!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
!     Initiating the inversion
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

!     Search space

      do i = 1, n
       if(zv(i).eq. 0)then
       xmin(i) =  0.001
       xmax(i) =  0.05
       else
       xmin(i) = 0.8*zv(i)
       xmax(i) = 1.2*zv(i)
       endif
       dx(i) = 0.1
      enddo

!     initial temperature for each parameter

      do i = 1, n
       t0(i) = 10
      enddo

!     initial temperature for acceptance rule

      temp0 = 1000

!     number of temperatures and number of moves per temperature

      maxtemps =15
      nmov = 1

!     Range of variation of the function x

      do i=1,n
       nx(i)=(xmax(i)-xmin(i))/dx(i) + 1
      end do

      decay = 0.9

!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
!     VFSA algorithm (very fast simulated annealing)
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

      call vfsacore(mf,n,nox,noy,dx1,dy,zv,xrec,yrec,xprm,yprm,
     + gobs,xmin,xmax,dx,t0,temp0,maxtemps,nmov,nx,decay,sd,alpha)

      close(10)
      close(20)
      close(22)
      close(23)
      close(24)

      deallocate(zv,xrec,yrec,xprm,yprm)
      deallocate(gobs,xmod,d)
      deallocate(xstat,ystat,z)
      deallocate(xmin, xmax, dx, t0, nx)

      call MPI_Finalize(ierr)

      stop
      end PROGRAM inv_grav3d_VFSA

!..............................................................................
      subroutine vfsacore(mf,n,nox,noy,dx1,dy,zv,xrec,yrec,xprm,yprm,
     +   gobs,xmin,xmax,dx,t0,temp0,maxtemps,nmov,nx,decay,sd,alpha)
!..............................................................................
      use mpi
      implicit none 
      integer :: mf,n,nox,noy
      integer, dimension (MPI_STATUS_SIZE) ::rstatus
      integer, dimension (n)  :: nx
      real*8, dimension (n)   :: xprm,yprm,zv,xmin,xmax
      real*8, dimension (mf)  :: xrec,yrec,gobs,d,xmod
      real*8, dimension (n)   :: t0,dx
      real*8, allocatable,dimension (:) :: xinit,tmp
      real*8, allocatable,dimension (:) :: ztrial

      real*8 :: temp0,decay,temp,arg,pde,sample,walk,etrial
      real*8 :: gr3dprm,sum3,sum4,sum1,sum2,sum41,emodel,edata
      real*8 :: best_edata,ran2,xx,yy,dx1,dy,sd,alpha
      integer :: i,j,k,l,maxtemps,nmov,best_task
      integer :: thistask,numtasks,tag,taskid,jmov
      integer :: jtemp,ierr,irand
      data    irand/0/

      numtasks=0
      taskid=0

      allocate(xinit(n),tmp(n),ztrial(n))

      call MPI_Comm_size(MPI_COMM_WORLD,numtasks,ierr)
      call MPI_Comm_rank(MPI_COMM_WORLD,taskid,ierr)
      thistask=taskid+1


!     Process with rank 0 generates an initial 
!     model and sends it to all processes

      tag=1

      if(thistask .eq. 1)then
       do i=1,n
       xmod(i)=(gobs(i)*sd)/(41.89d0*sd**2 + alpha*gobs(i))
       xinit(i) = xmod(i)
       enddo
       do j=1,numtasks
!        do i = 1, n
!        xmod(i) = sample(xmin(i),dx(i),nx(i),xmin(i),xmax(i))
!        xinit(i) = xmod(i)
!        enddo
!       xmod(i)=(gobs(i)*sd)/(41.89d0*sd**2 + alpha*gobs(i))
        if (j .ne. 1)then
        call MPI_SSEND( xmod, n, MPI_DOUBLE_PRECISION, j-1, 
     +                    tag,MPI_COMM_WORLD, ierr )
        endif
       enddo
      
      else
        call MPI_RECV( xmod, n, MPI_DOUBLE_PRECISION,
     +                 0, tag, MPI_COMM_WORLD,rstatus,ierr )

      endif
      call MPI_BARRIER (MPI_COMM_WORLD,ierr)

!     Error calculation of the initial model 

      sum3 = 0.0
      sum4 = 0.0
      do i = 1, n
       sum3 = sum3 + zv(i)**2
       sum4 = sum4 + (zv(i)-xmod(i))**2
      enddo
      emodel = sqrt(sum4/sum3)*100

      call funcpdf(mf,xmod,xprm,yprm,xrec,yrec,d)
       
!      nfcnev=nfcnev+1
!      nfcnevtot=nfcnevtot+1
!      g_opt=d

      sum1 = 0.0
      sum2 = 0.0
      do i = 1, mf
       sum1 = sum1 + gobs(i)**2
       sum2 = sum2 + (gobs(i) - d(i))**2
      enddo
      edata = sqrt(sum2/sum1)*100

      if(thistask .eq. 1)then
      print *, 'Initial errors',edata,emodel
      print *, ' '
      print *, 'temperatures    field         depth    '
      print *, '   number       error         error    '
      write (24,*) ' '
      write (24,*)'temperatures    field         depth    '  
      write (24,*)'   number       error         error    '
      endif

!     starting the main loop

      do jtemp = 1, maxtemps

        temp = temp0*exp(-decay*(jtemp-1)**0.5)
        do i = 1, n     
        tmp(i) = t0(i)*exp(-decay*(jtemp-1)**0.5)
        enddo

!    number of movements

        do jmov = 1, nmov
!         icon=icon+1

        do i = 1, n     
        ztrial(i) = walk(xmod(i),dx(i),xmin(i),xmax(i),tmp(i))
        enddo
        
        call funcpdf(mf,ztrial,xprm,yprm,xrec,yrec,d) !calculate the field for ztrial
!        nfcnev=nfcnev+1

        sum2 = 0.0
        do i = 1, mf
         sum2 = sum2 + (gobs(i) - d(i))**2
        enddo

        etrial = sqrt(sum2/sum1)*100

!       if etrial < emod, accept the new model

        if(etrial.lt.edata) then
        edata = etrial
        do i = 1, n
         xmod(i) = ztrial(i)
        enddo

        go to 1000
        endif

!       ? accept even though etrial > emod

        arg=(etrial-edata)/temp
        if(arg.gt. 1.e6) then
        pde = 1.e-3 
        else
        pde = exp(-arg)
        endif
        if(pde.gt.ran2(irand)) then
        edata = etrial
        do i = 1, n
         xmod(i) = ztrial(i)
        enddo

        go to 1000
!       move rejected
        else
        go to 1000
        end if
1000    continue

        enddo

      call MPI_BARRIER (MPI_COMM_WORLD,ierr)

      best_task=0
!      new_best=0
      tag=1

!     Process with rank 0 receives edata from 
!     all other processes

      if(thistask .gt. 1)then

        call MPI_SSEND( edata, 1, MPI_DOUBLE_PRECISION, 0, 
     +                    tag,MPI_COMM_WORLD, ierr )
      else
        best_task=thistask
        best_edata=edata
        do j=2,numtasks
  
         call MPI_RECV( edata, 1, MPI_DOUBLE_PRECISION,
     +            j-1, tag, MPI_COMM_WORLD,rstatus,ierr )
         if (ierr .ne. 0) then
             print*,'Error receiving edata from process'
             stop 
         end if

         if(edata .lt. best_edata)then
          best_edata=edata
          best_task=j
         endif
        enddo
        edata=best_edata
      endif
      call MPI_BARRIER (MPI_COMM_WORLD,ierr)
!     Process with rank 0 comunicates which process was best

      tag=2
      if(thistask .eq. 1)then

       do j=2,numtasks
        call MPI_SSEND( best_task, 1, MPI_INTEGER, j-1, 
     +                    tag,MPI_COMM_WORLD, ierr )
       enddo

      else
         
       call MPI_RECV( best_task, 1, MPI_INTEGER,
     +            0, tag, MPI_COMM_WORLD,rstatus,ierr )
       if (ierr .ne. 0) then
          print*,'Error receiving best_task from master'
          stop 
       end if
      endif
      call MPI_BARRIER (MPI_COMM_WORLD,ierr)
!     best process sends the best xmod and edata to 
!     other processes

      tag=3
      if(thistask .eq. best_task)then
       do j=1,numtasks
        if(j .ne. best_task)then
         call MPI_SSEND( xmod, n, MPI_DOUBLE_PRECISION, j-1, 
     +                    tag,MPI_COMM_WORLD, ierr )
         call MPI_SSEND( edata, 1, MPI_INTEGER, j-1, 
     +                    tag,MPI_COMM_WORLD, ierr )
        endif
       enddo
      else if(thistask .ne. best_task)then
        call MPI_RECV( xmod, n, MPI_DOUBLE_PRECISION,
     +     best_task-1, tag, MPI_COMM_WORLD,rstatus,ierr )
         if (ierr .ne. 0) then
             print*,'Error receiving xmod from best process'
             stop 
         end if
        call MPI_RECV( edata, 1, MPI_INTEGER,
     +     best_task-1, tag, MPI_COMM_WORLD,rstatus,ierr )
         if (ierr .ne. 0) then
             print*,'Error receiving edata from best process'
             stop 
         end if
      endif
      call MPI_BARRIER (MPI_COMM_WORLD,ierr)
	 
!     error calculation of the model

       sum4 = 0.0
       sum3 = 0.0
       do i = 1, n
        sum3 = sum3 + zv(i)**2
        sum4 = sum4 + (zv(i)-xmod(i))**2
       enddo
       sum4 = sqrt(sum4/sum3)*100

!     prints iteration information (temperature)

      if(thistask .eq. 1)then
      print*,dy,dx1,nox,noy,
      print 85, jtemp, edata, sum4
      write(24,85) jtemp, edata, sum4
      endif

      enddo

!     Here ends the main loop

      if (thistask .eq. 1)then
      do i=1,nox
         k=noy*(i-1)+1
         do j=1,noy
           yy=(j-1)*dy
           xx=(i-1)*dx1
           write(22,11) xx,yy,gobs(k),d(k)       !output to gnuplot observed and calculated field
           write(23,11) xx,yy,zv(k),xmod(k)      !output to gnuplot true and estimed depth
           k=k+1
         enddo
        write(22,*)''
        write(23,*)'' 
      enddo        

!
      write (24,*)
      write (24,*)'     true       initial     final'
      write (24,*)'     parameter  parameter   parameter'
      print *, ' '
      print *, '     true       initial     final'
      print *, '     parameter  parameter   parameter'

      do i = 1, n
	write (24,88) i, zv(i), xinit(i),xmod(i)
	print 88,     i, zv(i), xinit(i),xmod(i)
      enddo

!      print *, 'Processing time'
!      write (24,*)''
!      write (24,*) 'Processing time'
!      diftemp= end_time - start_time
!      print *, diftemp
!      write (24,*) diftemp
      endif
     
88    format (i4, 1x, f8.4, 3x, f8.4, 3x, f8.4)
10    format (2(2x,f6.2),2(3x,e15.8))
11    format (2(2x,f6.2),2(3x,f8.4))
85    format (2x,i6,2(5x,f10.5))      

      deallocate(xinit,tmp,ztrial)

      return
      end


!..............................................................................
      subroutine funcpdf(irows,z,xprm,yprm,xrec,yrec,f)
!..............................................................................
!     Subroutine for the calculation of the field f (m) obtained as a summation of 
!     n contributions from rectangular prisms at m points (xi, yj)
!     
!     input:  m,n: number of data and model parameters respectively
!           z2(n): base of the prisms (parameters)
!
!     output: f(m): computed field in m observation points
!..............................................................................
      implicit none 
      integer, parameter :: nox=28, noy=50, m=1400, n=1400
      real*8, dimension (n) :: xprm,yprm,z
      real*8, dimension (m) :: xrec,yrec,f
      real*8 :: dx,dy,sd,alpha,dxby2,dyby2,x,y,zi,y1,y2,dg
      real*8 :: gr3dprm
      integer :: i,j,irows

      dx=1.5d0
      dy=1.5d0
      sd=-0.67d0
      alpha=0.026d0
!
      f=0.d0
      dxby2=dx/2.0
      dyby2=dy/2.0 
       
      do i=1,irows
        do j=1,nox*noy
          y=yprm(j)-yrec(i)
          y1=dyby2+y
          y2=dyby2-y
          x=xprm(j)-xrec(i)
          zi=z(j)
          dg=gr3dprm(x,dxby2,y1,zi,sd,alpha)
          dg=0.5*(dg+gr3dprm(x,dxby2,y2,zi,sd,alpha))
          f(i)=f(i)+dg
        enddo
      enddo
!
      return
      end 
!------------------------------------------------------------------------------
      function sample(xmod,delx,nx,xmin,xmax)
!------------------------------------------------------------------------------
      implicit double precision (A-H,O-Z)
      real*8 sample,xmod,delx,xmin,xmax
      integer nx,ix,irand
      save irand
      data irand/0/
!     get an integerized random sample from xmod
!     this could be simplified or changed
!     note try agin if at xmin or xmax
1     ix = 2.*(ran2(irand)-.5)*nx
      sample = xmod + ix*delx
      if(sample.gt.xmax) goto 1
      if(sample.lt.xmin) goto 1
      return
      end
!------------------------------------------------------------------------------
      function walk(xmod,dx,xmin,xmax,tmp)
!------------------------------------------------------------------------------
      implicit double precision (A-H,O-Z)
      real*8 walk
      save irand
      data irand/0/
!     generate a new state following Ingber ----
      ntry = 1
123   continue
      arand = ran2(irand)
      ayy = 0.0
      dif = arand - 0.5
      if (dif.lt.0.0) ayy = -1.0
      if (dif.ge.0.0) ayy = +1.0
      pwr = abs(2*arand-1.)
      yy = ayy*tmp*( (1+1/tmp)**pwr - 1.)
      xmod1 = xmod + yy*(xmax-xmin)
      if (xmod1.lt.xmin.or.xmod1.gt.xmax) then
      ntry = ntry + 1
      if(ntry.lt.100) go to 123
      end if
      walk = xmod1
      return
      end
!------------------------------------------------------------------------------
      function ran2(idum)
!------------------------------------------------------------------------------
      implicit double precision (A-H,O-Z)
      real*8 ran2
!     This is a random number generator from numerical recipes.
      parameter (m=714025,ia=1366,ic=150889,rm=1.4005112e-6)
      dimension ir(1000)
      data iff /0/
!      print*,'idum=',idum
      if(idum.lt.0.or.iff.eq.0)then
      iff=1
      idum=mod(ic-idum,m)
      do 11 j=1,97
      idum=mod(ia*idum+ic,m)
      ir(j)=idum
11    continue
      idum=mod(ia*idum+ic,m)
      iy=idum
      endif
!      print*,'iy=',iy,'idum=',idum,'m=',m
      j=1+(97*iy)/m
!      print*,'j=',j
!     if(j.gt.97.or.j.lt.1)pause
      iy=ir(j)
      ran2=iy*rm
      idum=mod(ia*idum+ic,m)
      ir(j)=idum
      return
      end
!----------------------------------------------------------------------------
      function ran1(idum)
!----------------------------------------------------------------------------
      implicit double precision (A-H,O-Z)
      INTEGER idum,IM1,IM2,IMM1,IA1,IA2,IQ1,IQ2,IR1,IR2,NTAB,NDIV
      REAL*8 ran2,AM,EPS,RNMX
      PARAMETER (IM1=2147483563,IM2=2147483399,AM=1./IM1,IMM1=IM1-1,
     *IA1=40014,IA2=40692,IQ1=53668,IQ2=52774,IR1=12211,IR2=3791,
     *NTAB=32,NDIV=1+IMM1/NTAB,EPS=1.2e-7,RNMX=1.-EPS)
      INTEGER idum2,j,k,iv(NTAB),iy
      SAVE iv,iy,idum2
      DATA idum2/123456789/, iv/NTAB*0/, iy/0/
      if (idum.le.0) then
        idum=max(-idum,1)
        idum2=idum
        do 11 j=NTAB+8,1,-1
          k=idum/IQ1
          idum=IA1*(idum-k*IQ1)-k*IR1
          if (idum.lt.0) idum=idum+IM1
          if (j.le.NTAB) iv(j)=idum
11      continue
        iy=iv(1)
      endif
      k=idum/IQ1
      idum=IA1*(idum-k*IQ1)-k*IR1
      if (idum.lt.0) idum=idum+IM1
      k=idum2/IQ2
      idum2=IA2*(idum2-k*IQ2)-k*IR2
      if (idum2.lt.0) idum2=idum2+IM2
      j=1+iy/NDIV
      iy=iv(j)-idum2
      iv(j)=idum
      if(iy.lt.1)iy=iy+IMM1
      ran1=min(AM*iy,RNMX)
      return
      end   
!------------------------------------------------------------------------------
!     GR3DPRM COMPUTES THE THEORETICAL GRAVITY ANOMALY OF 3-D 
!             RECTANGULAR/SQUARE BLOCK.                                                                    
!                                                                           
!     INPUT:                                                                    
!
!     X          : DISTANCE TO THE GRID NODE (KM)                            
!     T          : HALF GRID NODE SPACING ALONG X-AXIS(KM)                      
!     Y          : SUM OF HALF GRID NODE SPACING AND DISTANCE OF THE CENTRE OF  
!                  A 3-D BLOCK ALONG THE Y-AXIS.                                
!     Z          : DEPTH TO THE BOTTOM OF A 3-D BLOCK (KM)                       
!     SD         : SURFACE DENSITY CONTRAST (GM/CC)                              
!     ALPHA      : CONSTANT OF THE PARABOLIC DENSITY FUNCTION (GM/CC/KM)        
!     DC         : MULTIPLICATION FACTOR                                        
!
!     OUTPUT:                                                                   
!
!     GR3DPRM    : CALCULATED GRAVITY ANOMALY(MGAL)                             
!------------------------------------------------------------------------------
      function gr3dprm (x,t,y,z,sd,a)
!------------------------------------------------------------------------------
      implicit double precision(a-h,o-z)
      TOG=13.333
      DC=TOG*SD**3
      if(Z.EQ.0.0) then
      Z2=0.0000011
      else
      Z2=Z
      endif
      Z1=0.000001
      AL5=SD-A*Z1
      AL6=SD-A*Z2
      Q1=X+T
      Q2=X-T
      R1=SQRT(Q1**2+Y**2+Z1**2)
      R2=SQRT(Q2**2+Y**2+Z1**2)
      R3=SQRT(Q2**2+Y**2+Z2**2)
      R4=SQRT(Q1**2+Y**2+Z2**2)
      T1=1/A
      T2=(ATAN((Y*Q1)/(Z2*R4)))/AL6-(ATAN((Y*Q1)/(Z1*R1)))/AL5
      TTR1=T1*T2
      TT2=(ATAN((Y*Q2)/(Z2*R3)))/AL6-(ATAN((Y*Q2)/(Z1*R2)))/AL5
      TTR2=T1*TT2
      TER1=TTR1-TTR2
      T3=Y*Q1
      AL8=SQRT((Q1**2+Y**2)*A**2+SD**2)
      T41=A*(2*SD**2+A**2*(Q1**2+Y**2))
      T42=AL8*(Y**2*A**2+SD**2)*(Q1**2*A**2+SD**2)
      T4=T41/T42
      T51=AL5*(A*R4*AL8+AL8**2-SD*AL6)
      T52=AL6*(A*R1*AL8+AL8**2-SD*AL5)
      T5=LOG(T51/T52)
      TER2=T3*T4*T5
      T61=SD/(A*(SD**2+Y**2*A**2))
      T62=ATAN((Y*R4)/(Z2*Q1))-ATAN((Y*R1)/(Z1*Q1))
      TER3=T61*T62
      T71=SD/(A*(SD**2+Q1**2*A**2))
      T72=ATAN((Q1*R4)/(Z2*Y))-ATAN((Q1*R1)/(Z1*Y))
      TER4=T71*T72
      T81=Y/(2*(SD**2+Y**2*A**2))
      T82=LOG(((Q1-R4)*(Q1+R1))/((Q1+R4)*(Q1-R1)))
      TER5=T81*T82
      T91=Q1/(2*(SD**2+Q1**2*A**2))
      T92=LOG(((Y-R4)*(Y+R1))/((Y+R4)*(Y-R1)))
      TER6=T91*T92
      T101=SD/(A*(SD**2+Y**2*A**2))
      T102=ATAN((Y*R3)/(Z2*Q2))-ATAN((Y*R2)/(Z1*Q2))
      TER7=T101*T102
      T111=SD/(A*(SD**2+Q2**2*A**2))
      T112=ATAN((Q2*R3)/(Z2*Y))-ATAN((Q2*R2)/(Z1*Y))
      TER8=T111*T112
      T122=LOG(((Q2-R3)*(Q2+R2))/((Q2+R3)*(Q2-R2)))
      TER9=T81*T122
      T131=Q2/(2*(SD**2+Q2**2*A**2))
      T132=LOG(((Y-R3)*(Y+R2))/((Y+R3)*(Y-R2)))
      TER10=T131*T132
      AL4=SQRT((Q2**2+Y**2)*A**2+SD**2)
      T141=Y*Q2
      T142=A*(2*SD**2+A**2*(Q2**2+Y**2))
      T143=AL4*(Y**2*A**2+SD**2)*(Q2**2*A**2+SD**2)
      T144=AL5*(A*R3*AL4+AL4**2-SD*AL6)
      T145=AL6*(A*R2*AL4+AL4**2-SD*AL5)
      TER11=((T141*T142)/(T143))*LOG(T144/T145)
      G=TER1+TER2-TER3-TER4+TER5+TER6+TER7+TER8-TER9-TER10-TER11
      GR3DPRM=DC*G
      return
      end



