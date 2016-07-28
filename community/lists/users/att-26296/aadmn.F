* PACKAGE AADMIN !" admin: main routine
*
*   [HIS] 97/10/31(jkkim)     SNUGCM 2.0
**************************************************************CCC******
      PROGRAM    AGCM5          !" GCM main program
*
*   [PARAM]
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! CLM module usages !!!!!!!!!!!
        use atmdrvMod       , only : atmdrv, atmdrv_init
        use perf_mod
        use clm_comp !       , only : clm_init0, clm_init1, clm_init2, clm_run1, clm_run2
!        use clmoutMod
#ifdef DYNAMIC
      USE zcdim                 !" # of grid point & wave
      USE zddim                 !" NMDIM
      USE zidim                 !" number of output data
      USE zsdim                 !" saving information (including zpdim.F)
      USE lsmpar
      USE lsmtcv
      USE lsmtvv
      USE lsmvar
      USE ocnvar
      use clm_time_manager !, only : is_last_step, advance_timestep, get_nstep
      use forcing
!      use clm_csmMod ,only : csm_send  !  for CSM model data communication, here used ...
      use clm_atmlnd       , only : clm_mapl2a, clm_l2a, atm_l2a
c KIM [2008/07/11] tokioka constraint
      USE geovv
# ifdef MPI
      USE mpipar                !" parameters for MPI parallilization
      INCLUDE   'mpif.h'        !" user include file for MPI programs
# endif
#else
# include       "zcdim.F"       /* # of grid point & wave */
# include       "zpdim.F"       /* physics etc. */
!# ifdef MPI
!#  error Macro MPI should be set at the same time as DYNAMIC.
!# endif
#endif
#include        "zhdim.F"       /* # of char. in string */
#include        "zccom.F"       /* stand. physical const. */
*
*   [VAR]
* grid value(t) <DYNMCS>  grid value(t+dt)
*
#ifdef DYNAMIC
      REAL, ALLOCATABLE :: GAU(:,:,:)    !" westerly
      REAL, ALLOCATABLE :: GAV(:,:,:)    !" southern wind
      REAL, ALLOCATABLE :: GAT(:,:,:)    !" temperature
      REAL, ALLOCATABLE :: GAPS(:,:)     !" surface pressure
      REAL, ALLOCATABLE :: GAQ(:,:,:,:)  !" humidity etc.
      REAL, ALLOCATABLE :: GRSDIR(:,:,:)  !" direct solar .
#else
      REAL       GAU   ( IDIM, JDIM, KMAX      )  !" westerly
      REAL       GAV   ( IDIM, JDIM, KMAX      )  !" southern wind
      REAL       GAT   ( IDIM, JDIM, KMAX      )  !" temperature
      REAL       GAPS  ( IDIM, JDIM            )  !" surface pressure
      REAL       GAQ   ( IDIM, JDIM, KMAX, NTR )  !" humidity etc.
      REAL       GRSDIR   ( IDIM, JDIM,KMAX )  !" direct SW 
#endif
*
* grid value(t-dt) <DYNMCS>  grid value(t)
*
#ifdef DYNAMIC
      REAL, ALLOCATABLE :: GBU(:,:,:)    !" westerly
      REAL, ALLOCATABLE :: GBV(:,:,:)    !" southern wind
      REAL, ALLOCATABLE :: GBT(:,:,:)    !" temperature
      REAL, ALLOCATABLE :: GBPS(:,:)     !" surface pressure
      REAL, ALLOCATABLE :: GBQ(:,:,:,:)  !" humidity etc.
#else
      REAL       GBU   ( IDIM, JDIM, KMAX      )  !" westerly
      REAL       GBV   ( IDIM, JDIM, KMAX      )  !" southern wind
      REAL       GBT   ( IDIM, JDIM, KMAX      )  !" temperature
      REAL       GBPS  ( IDIM, JDIM            )  !" surface pressure
      REAL       GBQ   ( IDIM, JDIM, KMAX, NTR )  !" humidity etc.
#endif
*
* time etc.
*
      REAL       TIME                  !" time
      INTEGER    ISTEP,nstep                 !" serial No. of step
      REAL       DELT                  !" time step delta(t)
      LOGICAL    OINIT                 !" initializing time or not
      integer   clmlpt                 ! CLM landpoints
*
*   [ONCE]
      REAL       TSTART                !" start t of calculation
      REAL       TEND                  !" finish t of calculation
*
* value at point
*
#ifdef DYNAMIC
      REAL, ALLOCATABLE :: GDZS(:)     !" surface topography
      REAL, ALLOCATABLE :: ALAT(:)     !" latitude
      REAL, ALLOCATABLE :: DLAT(:)     !" weight of latitude
      REAL, ALLOCATABLE :: ALON(:)     !" longitude
      REAL, ALLOCATABLE :: DLON(:)     !" weight of longitude
      REAL, ALLOCATABLE :: SIG(:)      !" sigma-level (integer)
      REAL, ALLOCATABLE :: SIGM(:)     !" sigma-level (half lev)
      REAL, ALLOCATABLE :: DSIG(:)     !" delta(sigma) (integer)
      REAL, ALLOCATABLE :: DSIGM(:)    !" delta(sigma) (half lev)
#else
      REAL       GDZS  ( IJDIM )       !" surface topography
      REAL       ALAT  ( IJDIM )       !" latitude
      REAL       DLAT  ( IJDIM )       !" weight of latitude
      REAL       ALON  ( IJDIM )       !" longitude
      REAL       DLON  ( IJDIM )       !" weight of longitude
      REAL       SIG   ( KMAX )        !" sigma-level (integer)
      REAL       SIGM  (KMAX+1)        !" sigma-level (half lev)
      REAL       DSIG  ( KMAX )        !" delta(sigma) (integer)
      REAL       DSIGM (KMAX+1)        !" delta(sigma) (half lev)
#endif
*
*   [INTERNAL WORK] 
      INTEGER    IFPAR, JFPAR
      CHARACTER  HTIME*20
      LOGICAL    OQUIT
*
*   [INTERNAL PARM] 
      LOGICAL    OCHECK, OCKALL
      NAMELIST  /NMCHCK/ OCHECK, OCKALL
      DATA       OCHECK, OCKALL / .FALSE., .FALSE. /
#ifdef BENCH
      REAL(KIND=8) :: elapse
# ifdef MPI
      REAL(KIND=8) :: t_start, t_end
# else
      INTEGER :: icount0, icount1, icount_rate, icount_max
# endif
#endif
*
* << SETPUP : initial setting >>
*
       call clminitialize
#ifdef MPI
      CALL MPI_Init ( ierror )
      CALL MPI_Comm_size ( MPI_COMM_WORLD, nprocs, ierror )
      CALL MPI_Comm_rank ( MPI_COMM_WORLD, myrank, ierror )
      IF ( KIND(dummy) == 4 ) THEN
         MY_REAL  = MPI_REAL
         MY_2REAL = MPI_2REAL
      ELSE IF ( KIND(dummy) == 8 ) THEN
         MY_REAL  = MPI_DOUBLE_PRECISION
         MY_2REAL = MPI_2DOUBLE_PRECISION
      ELSE
         WRITE ( 6,* ) "ERROR: KIND(REAL) = ", KIND(dummy)
         CALL MPI_Finalize ( ierror )
         STOP
      END IF
#endif
#ifdef MPI
      IF ( myrank == 0 ) THEN
#endif
      WRITE ( 6,* ) ' @@@ AADMN: AGCM5.4 MAIN 95/01/30'
#ifdef MPI
      END IF
#endif
      CALL YPREP                !" sys.dep. initialization
*
      CALL REWNML ( IFPAR , JFPAR )
#ifdef MPI
      IF ( myrank == 0 ) THEN
         READ   ( IFPAR, NMCHCK, IOSTAT=iostat )
         lcom(1) = OCHECK
         lcom(2) = OCKALL
      END IF
      CALL MPI_Bcast ( iostat, 1, MPI_LOGICAL, 0,
     &     MPI_COMM_WORLD, ierror )
      icount = 2
      CALL MPI_Bcast ( lcom, icount, MPI_LOGICAL, 0,
     &     MPI_COMM_WORLD, ierror )
      IF ( myrank /= 0 ) THEN
         OCHECK = lcom(1)
         OCKALL = lcom(2)
      END IF
      IF ( iostat > 0 ) THEN
         WRITE (6,*) "READ ERROR: NMCHCK"
         CALL MPI_Finalize ( ierror )
         STOP
      END IF
#else
      READ   ( IFPAR, NMCHCK, END=190 )
#endif
  190 WRITE  ( JFPAR, NMCHCK )
*
      CALL CALNDR               !" set treatment of calendar
      CALL PCONST               !" physical constants
      CALL SETPAR               !" time of experiment etc.
     O         ( TSTART, TEND   )
#ifdef MPI
      ALLOCATE ( my_jmax    (0:nprocs-1) )
      ALLOCATE ( my_kpt   (3,0:nprocs-1), my_lpt   (3,0:nprocs-1) )
      ALLOCATE ( my_kdispl(2,0:nprocs-1), my_ldispl(2,0:nprocs-1) )
      ALLOCATE ( my_jh      (0:nprocs-1), my_jhdispl (0:nprocs-1) )
      ALLOCATE ( scounts    (0:nprocs-1), sdispls    (0:nprocs-1) )
      ALLOCATE ( rcounts    (0:nprocs-1), rdispls    (0:nprocs-1) )
      ALLOCATE ( jwho (jmax), jg2l (jmax), jl2g (jmax,0:nprocs-1) )
      ALLOCATE ( istatus (MPI_STATUS_SIZE) )
      CALL setpar_mpi ( JMAX )  !" set parameters for MPI
#endif
#ifdef DYNAMIC
*
* >>> zcdim
!      IMAX   = 128
!      JMAX   =  64
!      KMAX   =  20
!      NMAX   =  42
!      MINT   =   1
      MMAX   = NMAX
      LMAX   = NMAX
      IDIM   = IMAX+1
      JDIM   = JMAX
      KDIM   = KMAX
      IJDIM  = IDIM*JDIM
      IJSDIM = IDIM
      IJKDIM = IJDIM*KDIM
# ifdef MPI
      jmax_local    = my_jmax(myrank)
      jdim_local    = jmax_local
      jdim_global   = jmax_global
      ijdim_global  = IDIM*jdim_global
      ijkdim_global = ijdim_global*KDIM
      ldim  = MAX ( IDIM, jdim_global, KDIM )
      jkdim = MAX ( JDIM, KDIM )
      ALLOCATE ( gdata1d(ldim), buf1d(ldim) )
# endif
      ALLOCATE ( GAU   ( IDIM, JDIM, KMAX      ),
     &           GAV   ( IDIM, JDIM, KMAX      ),
     &           GAT   ( IDIM, JDIM, KMAX      ),
     &           GAPS  ( IDIM, JDIM            ),
     &           GAQ   ( IDIM, JDIM, KMAX, NTR) ,
     &           GRSDIR ( IDIM, JDIM,KMAX ) )
      ALLOCATE ( GBU   ( IDIM, JDIM, KMAX      ),
     &           GBV   ( IDIM, JDIM, KMAX      ),
     &           GBT   ( IDIM, JDIM, KMAX      ),
     &           GBPS  ( IDIM, JDIM            ),
     &           GBQ   ( IDIM, JDIM, KMAX, NTR ) )
      ALLOCATE ( GDZS  ( IJDIM ),
     &           ALAT  ( IJDIM ),
     &           DLAT  ( IJDIM ),
     &           ALON  ( IJDIM ),
     &           DLON  ( IJDIM ),
     &           SIG   ( KMAX ),
     &           SIGM  (KMAX+1),
     &           DSIG  ( KMAX ),
     &           DSIGM (KMAX+1) )
c KIM [2008/07/11] tokioka constraint 
* >>> geovv 
      ALLOCATE ( pblh_save   ( IDIM, JDIM  ))
      ALLOCATE ( stdw_save   ( IDIM, JDIM  ))
      ALLOCATE ( wstar_save  ( IDIM, JDIM  ))
      ALLOCATE ( gdsh_save   ( IDIM, JDIM  ))
      ALLOCATE ( gdqf_save   ( IDIM, JDIM  ))
      ALLOCATE ( tkeout_save ( IDIM, JDIM, KMAX ) )

      allocate (ts_save(idim,jdim))
      allocate (qs_save(idim,jdim))

      pblh_save  = 500. 
      stdw_save  = 0.1
      wstar_save = 0.5 
      gdsh_save  = 10.   
      gdqf_save  = 4.0e-5

      ts_save = 0.
      qs_save = 0.
      clmlpt = 7374
#ifdef BULK
      allocate (omega_save(idim,jdim,kmax))
      omega_save = 0.
      allocate (rino_save(idim,jdim,kmax))
      rino_save = 0.
      allocate (ri_star_save(idim,jdim))
      ri_star_save = 0.
      allocate (cbmf_save(idim,jdim))
      cbmf_save = 0.
#endif

      pblh_save = 300.
      tkeout_save = 0.1

* >>> zddim
      NMDIM = (MMAX/MINT+1)*(2*(NMAX+1)-MMAX)
     &      - (NMAX-LMAX)/MINT*(NMAX-LMAX+1)
#ifdef MPI
      jmxhf_global = jmax_global/2+1
      jmxhf_local  = jmax_local /2+1
#endif
      JMXHF = JMAX/2+1
* >>> zidim
# ifndef OPT_NHDIM
      NHDIM = NHISGK*IMAX*JMAX*KMAX
     &      + NHISG1*IMAX*JMAX
     &      + NHISZK*JMAX*KMAX
     &      + NHISZ1*JMAX
     &      + NHISZ0
# else      
      NHDIM = OPT_NHDIM
# endif
# ifndef OPT_NRDIM
      NRDIM = NRDAT*IJDIM+JDIM*KDIM+5*IJDIM*KMAX
# else      
      NRDIM = OPT_NRDIM
# endif
# ifdef MPI
      NGDWRK = ijdim_global*(KMAX+KPDIM)
# else
      NGDWRK = IJDIM*(KMAX+KPDIM)
# endif
* >>> zsdim
      NGSBUF = IJDIM*(KMAX+1)*MGSBFK+IJDIM*MGSBF1
* >>> lsmpar
!      lsminfo  = 42
      lsmlon   = IMAX
      lsmlat   = JMAX
!      lpt      = 2843
!      kpt      = 6042
!      msub     = 5
      mpt_sm   = lsmlon*msub
      mpt_lm   = kpt
      mpt      = mpt_sm
      numlv_sm = lsmlat
      numlv_lm = 1
      numlv    = numlv_sm
      atmlon   = idim
      atmlat   = jdim
* >>> lsmtcv
      ALLOCATE (
     &     ixy(lpt), jxy(lpt), ijxy(lpt), klnd(kpt),
     &     kvec(lpt,msub) )
      ALLOCATE ( wsg2g(lpt,msub) )
      ALLOCATE ( ivt(kpt), ist(kpt), isc(kpt) )
      ALLOCATE (
     &     watsat(kpt), hksat (kpt), smpsat(kpt),
     &     bch   (kpt), watdry(kpt), watopt(kpt),
     &     csol  (kpt), tksol (kpt), tkdry (kpt),
     &     sand  (kpt), clay  (kpt),
     &     dzsoi(msl,kpt), zsoi(msl,kpt), root(msl,kpt) )
      ALLOCATE ( lati(kpt), long(kpt) )
      ALLOCATE (
     &     begkpt(lsmlat), numkpt(lsmlat),
     &     beglpt(lsmlat), numlpt(lsmlat) )
* >>> lsmtvv
      ALLOCATE (
     &     h2osno(kpt), h2ocan(kpt), h2osoi(msl,kpt),
     &     tv    (kpt), tg    (kpt), tsoi  (msl,kpt),
     &     moz   (kpt), eah   (kpt), soot  (kpt), hsno  (kpt),
     &     fsno  (kpt), fwet  (kpt), htop  (kpt), tlai  (kpt),
     &     tsai  (kpt), elai  (kpt), esai  (kpt), foln  (kpt),
     &     stemb (kpt), rootb (kpt), soilc (kpt), igs   (kpt),
     &     albd  (mband,kpt), albi  (mband,kpt),
     &     albgrd(mband,kpt), albgri(mband,kpt),
     &     fabd  (mband,kpt), fabi  (mband,kpt),
     &     ftdd  (mband,kpt), ftid  (mband,kpt),
     &     ftii  (mband,kpt), fsun  (kpt) )
* >>> lsmvar
      ALLOCATE (
     &     pgcm   (kpt), psrf   (kpt), tgcm   (kpt),
     &     qgcm   (kpt), firgcm (kpt), qprecc (kpt),
     &     qprecl (kpt), ugcm   (kpt), vgcm   (kpt),
     &     hgcm   (kpt), thgcm  (kpt), egcm   (kpt),
     &     rhogcm (kpt), co2gcm (kpt), o2gcm  (kpt),
     &     solad(mband,kpt), solai(mband,kpt) )
*  >>>>>>> CLM var
       ALLOCATE (
     I           GDTAUXc(clmlpt),GDTAUYc(clmlpt),
     I           GDSHc(clmlpt),GDLHc(clmlpt),GDQFc(clmlpt,1),
     I           RFLXLGc(clmlpt),RSDIRc(8256),RNDIRc(129,64),
     I           RSDIFc(129,64),RNDIFc(129,64),
     I           RFLXLDc(129,64), RFLXLUc(clmlpt), DRFLXLc(clmlpt),
     I            GDTRGc(clmlpt) , GDSSTc(clmlpt) ,
     I            GDUc(129,64)   , GDVc  (129,64) ,Tclm(129,64),
     I            ctgcm(129,64)   ,  GDTc(8256)  ,crsdir(129,64),
     I           GDQc(129,64,1)   , GDPc(129,64)   , GDPMc(129,64)  ,
     I            GDZc(129,64)   , GDZMc (129,64) ,
     I           GPRCCc(129,64) , GPRCLc(129,64) , GSNWCc(clmlpt) , 
     I           GSNWLc(clmlpt), clmtref(128,64) ,clmt1(8256),
     I            clmsense(128,64),clms(8256),clmsp(129),clme(8256),
     I            clmalbd(8256)) 
      ALLOCATE (
     &     taux (kpt), tauy (kpt), fire (kpt), fsh  (kpt),
     &     fcev (kpt), fgev (kpt), fctr (kpt), trad (kpt),
     &     tsa  (kpt), fpsn (kpt), frm  (kpt), frg  (kpt),
     &     fmicr(kpt), fco2 (kpt), fira (kpt), fgr  (kpt),
     &     fsm  (kpt), tam  (kpt), tah  (kpt), fsa  (kpt),
     &     fsr  (kpt), ndvi (kpt), frmf (kpt), dmi  (kpt) )

      ALLOCATE (
     &     bevap(kpt), btran(kpt), rsw  (kpt), qsoil(kpt),
     &     qvege(kpt), qvegt(kpt), qintr(kpt), qcdew(kpt),
     &     qceva(kpt), qsnow(kpt), qfros(kpt), qsubl(kpt),
     &     qmelt(kpt), qinfl(kpt), qseva(kpt), qtran(kpt),
     &     qdrai(kpt), qover(kpt), qdrip(kpt), qsdew(kpt) )
* >>> ocnvar
      ALLOCATE (
     &     wgocn  (ijdim), tsocn  (ijdim),
     &     wgice  (ijdim), tsice  (ijdim,plevmx),
     &     hsice  (ijdim), hsnow  (ijdim) )
      ALLOCATE (
     &     seaasdir (ijdim), seaaldir (ijdim),
     &     seaasdif (ijdim), seaaldif (ijdim),
     &     sicasdir (ijdim), sicaldir (ijdim),
     &     sicasdif (ijdim), sicaldif (ijdim) )
#endif
*
      CALL SETCOR                      !" value at point
     O         ( ALON  , DLON  ,
     O           ALAT  , DLAT  ,
     O           SIG   , DSIG  ,
     O           SIGM  , DSIGM  )
* 
      CALL SETZS                       !" surface topography
     O         ( GDZS  )
*
      CALL RDSTRT                      !" read initial data
     O         ( GAU   , GAV   , GAT   , GAPS  , GAQ   , 
     O           GBU   , GBV   , GBT   , GBPS  , GBQ   , 
     O           TIME  , OINIT ,
     I           TSTART                                  )
*
      CALL SETTIM                      !" adjust time
     I         ( TIME  )
*
      CALL ACHKV
     I         ( GAU   , GAV   , GAT   , GAPS  , GAQ   , 
     I           'start GA'    , .TRUE.                  )
      CALL ACHKV
     I         ( GBU   , GBV   , GBT   , GBPS  , GBQ   , 
     I           'start GB'    , .TRUE.                  )
*
      ISTEP = 0

!!!!!!!!!!!!!!!! CALLING CLM
!!!!!!!!!!!!!!! Initializing CLM !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
!      if(masterproc)write (6,*)'Attempting to set up atmospheric grid '
!          call atmdrv_init()
!      if(masterproc)write(6,*)'Successfully set up atmospheric grid '
!          call t_stopf('init')
*
* << LOOP : <************* main loop >>
*
#ifdef BENCH
# ifdef MPI
      CALL MPI_Barrier ( MPI_COMM_WORLD, ierror )
      t_start = MPI_Wtime()
# else
      CALL SYSTEM_CLOCK ( icount0, icount_rate, icount_max )
# endif
#endif
 5000 CONTINUE
*
         ISTEP = ISTEP + 1
         CALL CPERPO ( .FALSE. )
         CALL CSS2CC ( HTIME, TIME )
         CALL CPERPO ( .TRUE.  )
         WRITE (6,*) ' *** STEP=', ISTEP, ' TIME=', HTIME
*
* << START : start of step >>
*
         CALL TIMSTP            !" control time
     M         ( DELT  , OINIT ,
     I           TIME  , GAU   , GAV   , ISTEP  )
         CALL HISTRT
*
         CALL SETPSF            !" set output Ps
     I         ( GAPS   )     
         CALL AHSTIN            !" standard data output
     I         ( GAU   , GAV   , GAT   , GAPS  , GAQ   )
*
* << DYNMCS : dynamics >>
* 
#ifndef NODYNAMICS
         CALL CLCSTR ( 'DYNMCS' )
         IF ( OCHECK ) THEN
            CALL ACHKV 
     I         ( GAU   , GAV   , GAT   , GAPS  , GAQ   ,
     I           'before DYNMCS', OCKALL                  )
         ENDIF
         CALL DYNMCS                   !" dynamics
     M         ( GAU   , GAV   , GAT   , GAPS  , GAQ   ,
     M           GBU   , GBV   , GBT   , GBPS  , GBQ   ,
     I           DELT  , OINIT ,
     C           GDZS  , ALON  , DLON  , ALAT  , DLAT  ,
     C           SIG   , SIGM  , DSIG  , DSIGM           )
         CALL CLCEND ( 'DYNMCS' )
#endif
*
* << PHYSCS : physics >>
*
#ifndef NOPHYSICS
         CALL CLCSTR ( 'PHYSCS' )
         IF ( OCHECK ) THEN
            CALL ACHKV 
     I         ( GAU   , GAV   , GAT   , GAPS  , GAQ   ,
     I           'before PHYSCS', OCKALL                 )
         ENDIF
        nstep = ISTEP !get_nstep()
!       call t_startf('atmdrv')
!        call t_stopf('atmdrv')
!          call csm_send()
         CALL PHYSCS                   !" physics
     M         ( GAU   , GAV   , GAT   , GAPS  , GAQ  , 
     I           TIME  , DELT*2, DELT  ,
     C           GDZS  , ALON  , ALAT  ,
     C           SIG   , SIGM  , DSIG  , DSIGM ,GRSDIR )
         CALL CLCEND ( 'PHYSCS' )
!               call clmatmdrv
!        call t_startf('runtotal')
!        do 
        call atmdrv(nstep)
!           call clmrun
        call clm_run1()
        call clm_run2()
! Determine if time to stop
!          call clmout
!             if (is_last_step()) exit

! Increment time step

         call advance_timestep()
!        end do
!         call clmrun 
*
#endif
*
         IF ( .NOT. OINIT ) THEN
*
            CALL STPTIM
     M         ( TIME  ,
     I           DELT    )
*
            CALL TFILT               !" time filter
     M         ( GBU   , GBV   , GBT   , GBPS  , GBQ   ,
     I           GAU   , GAV   , GAT   , GAPS  , GAQ    )
*
            CALL HISTRP
            CALL HISTOU( .FALSE. )     !" output data
*
            CALL QUITCK( OQUIT, TIME  )
            IF ( OQUIT ) THEN
               TEND = TIME
            ENDIF
*
            CALL WRRSTR         !" write to restart file
     I         ( GAU   , GAV   , GAT   , GAPS  , GAQ   ,
     I           GBU   , GBV   , GBT   , GBPS  , GBQ   ,
     I           TIME  , TSTART, TEND                   )
*
         ENDIF
*
* << LEND : end of main loop *************> >>
*
      IF ( .NOT. ( TIME .GE. TEND )  ) GOTO  5000
#ifdef BENCH
# ifdef MPI
      CALL MPI_Barrier ( MPI_COMM_WORLD, ierror )
      t_end = MPI_Wtime()
      elapse = t_end - t_start
# else
      CALL SYSTEM_CLOCK ( icount1, icount_rate, icount_max )
      elapse = (icount1-icount0)/dble(icount_rate)
# endif
#endif
*
      CALL HISTOU( .TRUE. )            !" output data
      CALL CLCOUT                      !" output of CPU time
#ifdef BENCH
      WRITE (6,*) '########### ELAPSE TIME SUMMARY ################'
      WRITE (6, '(" ", A16, 1PE15.6)') ' MAIN LOOP  = ', elapse
#endif
      CALL YFINE                       !" sys.dep. final treatment
       call clmstop
*
#ifdef MPI
      DEALLOCATE ( my_jmax )
      DEALLOCATE ( my_kpt   , my_lpt     )
      DEALLOCATE ( my_kdispl, my_ldispl  )
      DEALLOCATE ( my_jh    , my_jhdispl )
      DEALLOCATE ( scounts  , sdispls    )
      DEALLOCATE ( rcounts  , rdispls    )
      DEALLOCATE ( jwho, jg2l, jl2g )
      DEALLOCATE ( istatus )
      DEALLOCATE ( gdata1d, buf1d )
#endif
#ifdef DYNAMIC
* >>> zcdim
      DEALLOCATE ( GAU, GAV, GAT, GAPS, GAQ,GRSDIR )
      DEALLOCATE ( GBU, GBV, GBT, GBPS, GBQ )
      DEALLOCATE ( GDZS, ALAT, DLAT, ALON, DLON,
     &             SIG, SIGM, DSIG, DSIGM )
* >>> lsmtcv
      DEALLOCATE (
     &     ixy, jxy, ijxy, klnd,
     &     kvec )
      DEALLOCATE ( wsg2g )
      DEALLOCATE ( ivt, ist, isc )
      DEALLOCATE (
     &     watsat, hksat , smpsat,
     &     bch   , watdry, watopt,
     &     csol  , tksol , tkdry ,
     &     sand  , clay  ,
     &     dzsoi , zsoi  , root)
      DEALLOCATE ( lati, long )
      DEALLOCATE (
     &     begkpt, numkpt,
     &     beglpt, numlpt )
* >>> lsmtvv
      DEALLOCATE (
     &     h2osno, h2ocan, h2osoi,
     &     tv    , tg    , tsoi  ,
     &     moz   , eah   , soot  , hsno  ,
     &     fsno  , fwet  , htop  , tlai  ,
     &     tsai  , elai  , esai  , foln  ,
     &     stemb , rootb , soilc , igs   ,
     &     albd  , albi  ,
     &     albgrd, albgri,
     &     fabd  , fabi  ,
     &     ftdd  , ftid  ,
     &     ftii  , fsun  )
* >>> lsmvar
      DEALLOCATE (
     &     pgcm   , psrf   , tgcm   ,
     &     qgcm   , firgcm , qprecc ,
     &     qprecl , ugcm   , vgcm   ,
     &     hgcm   , thgcm  , egcm   ,
     &     rhogcm , co2gcm , o2gcm  ,
     &     solad  , solai  )
          DEALLOCATE ( 
     I           GDTAUXc,GDTAUYc,
     I           GDSHc,GDLHc,GDQFc,
     I           RFLXLGc,RSDIRc,RNDIRc,
     I           RSDIFc,RNDIFc,
     I           RFLXLDc, RFLXLUc, DRFLXLc,
     I            GDTRGc , GDSSTc ,
     I            GDUc   , GDVc   ,Tclm,
     I            ctgcm  ,  GDTc  ,crsdir,
     I           GDQc   , GDPc   , GDPMc  ,
     I            GDZc   , GDZMc  ,
     I           GPRCCc , GPRCLc , GSNWCc , 
     I           GSNWLc,clmtref,clmt1,clms,clmsp,
     I           clme,clmalbd) 

      DEALLOCATE (
     &     taux , tauy , fire , fsh  ,
     &     fcev , fgev , fctr , trad ,
     &     tsa  , fpsn , frm  , frg  ,
     &     fmicr, fco2 , fira , fgr  ,
     &     fsm  , tam  , tah  , fsa  ,
     &     fsr  , ndvi , frmf , dmi  )

      DEALLOCATE (
     &     bevap, btran, rsw  , qsoil,
     &     qvege, qvegt, qintr, qcdew,
     &     qceva, qsnow, qfros, qsubl,
     &     qmelt, qinfl, qseva, qtran,
     &     qdrai, qover, qdrip, qsdew )
* >>> ocnvar
      DEALLOCATE (
     &     wgocn, tsocn,
     &     wgice, tsice,
     &     hsice, hsnow )
      DEALLOCATE (
     &     seaasdir, seaaldir,
     &     seaasdif, seaaldif,
     &     sicasdir, sicaldir,
     &     sicasdif, sicaldif )
* >>> geovv
       deallocate(
     &  pblh_save,
     &  tkeout_save ,
     &  stdw_save, wstar_save, gdsh_save,
     &  gdqf_save, ts_save, qs_save
#ifdef BULK
     &  ,omega_save
     &  ,rino_save
     &  ,ri_star_save
     &  ,cbmf_save
#endif
     & )
#endif
#ifdef MPI
      CALL MPI_Finalize( ierror )
#endif
      STOP
      END
***********************************************************************
      SUBROUTINE AHSTIN         !" registration standard history output
     I         ( GDU   , GDV   , GDT   , GDPS  , GDQ   )
*
*   [PARAM] 
#ifdef DYNAMIC
      USE zcdim
#else
# include       "zcdim.F"
#endif
#include        "zpdim.F"       /* physics etc. */
      REAL       GDU   ( IJKDIM )       !" westerly u
      REAL       GDV   ( IJKDIM )       !" southern wind v
      REAL       GDT   ( IJKDIM )       !" temperature
      REAL       GDPS  ( IJDIM  )       !" surface pressure
      REAL       GDQ   ( IJKDIM, NTR )  !" humidity q
*
      CALL     HISTIN
     I       ( GDU, 'U ', 'u-velocity       ' ,'m/s  ', 'ALEV'   )
      CALL     HISTIN
     I       ( GDV, 'V ', 'v-velocity       ' ,'m/s  ', 'ALEV'   )
      CALL     HISTIN
     I       ( GDT, 'T ', 'temperature      ' ,'K    ', 'ALEV'   )
      CALL     HISTIN
     I       ( GDPS,'PS', 'surface pressure ' ,'mb   ', 'ASFC'   )
      CALL     HISTIN
     I       ( GDQ, 'Q ', 'specific humidity' ,'kg/kg', 'ALEV'   )
      IF ( ITL .GE. 2 ) THEN
         CALL     HISTIN
     I       ( GDQ(1,ITL), 'QL', 'liquid water' ,'kg/kg', 'ALEV' )
      ENDIF
*
      RETURN
      END
*********************************************************************
      SUBROUTINE ACHKV          !" valid range monitor
     I         ( GDU   , GDV   , GDT   , GDPS  , GDQ   ,
     I           HLAB  , OALL                            )
*
*   [PARAM]
#ifdef DYNAMIC
      USE zcdim
#else
# include       "zcdim.F"       /* # of grid point & wave */
#endif
#include        "zpdim.F"       /* physics etc. */
*
*   [INPUT] 
      REAL       GDU   ( IJKDIM )      !" westerly u
      REAL       GDV   ( IJKDIM )      !" southern wind v
      REAL       GDT   ( IJKDIM )      !" temperature
      REAL       GDPS  ( IJDIM  )      !" surface pressure
      REAL       GDQ   ( IJKDIM, NTR ) !" humidity q
      CHARACTER  HLAB *(*)
      LOGICAL    OALL
*
      CALL CHKVAL(GDU,     IDIM,JDIM,KMAX, -2.E2, 2.E2,'U' ,HLAB,OALL)
      CALL CHKVAL(GDV,     IDIM,JDIM,KMAX, -2.E2, 2.E2,'V' ,HLAB,OALL)
      CALL CHKVAL(GDT,     IDIM,JDIM,KMAX,  1.E2, 4.E2,'T' ,HLAB,OALL)
      CALL CHKVAL(GDPS,    IDIM,JDIM,1   ,  4.E2,11.E2,'PS',HLAB,OALL)
      CALL CHKVAL(GDQ(1,1),IDIM,JDIM,KMAX,-1.E-3,5.E-2,'Q' ,HLAB,OALL)
      IF ( ITL .GE. 2 ) THEN
        CALL CHKVAL(GDQ(1,ITL),IDIM,JDIM,KMAX,
     &                                    -1.E-3,5.E-2,'QL',HLAB,OALL)
      ENDIF
      IF ( OALL ) THEN
         CALL DIAGP ( GDU,      'GDU',  KMAX,'(G13.5)'  )
         CALL DIAGP ( GDV,      'GDV',  KMAX,'(G13.5)'  )
         CALL DIAGP ( GDT,      'GDT',  KMAX,'(G13.5)'  )
         CALL DIAGP ( GDPS,     'GDPS',   1 ,'(G13.5)'  )
         CALL DIAGP ( GDQ,      'GDQ',  KMAX,'(G13.5)'  )
         IF ( ITL .GE. 2 ) THEN
            CALL DIAGP ( GDQ(1,ITL), 'GDQL', KMAX,'(G13.5)'  )
         ENDIF
      ENDIF
*
      RETURN
      END
