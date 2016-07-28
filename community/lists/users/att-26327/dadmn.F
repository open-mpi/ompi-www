* PACKAGE DADMN !" dynamics: main routine
*"  [HIS] 95/03/15(numaguti) AGCM5.4.01
**********************************************************************
      SUBROUTINE DYNMCS         !"  dynamics
     M         ( GAU   , GAV   , GAT   , GAPS  , GAQ   ,
     M           GBU   , GBV   , GBT   , GBPS  , GBQ   ,
     I           DELT  , OINIT , 
     C           GDZS  , ALON  , DLON  , ALAT  , DLAT  ,
     C           SIG   , SIGM  , DSIG  , DSIGM           )
*
*"              semi-implicit time integration
*"              implicit diffusion
*
*   [PARAM]
#ifdef DYNAMIC
      USE zcdim                 !" # of grid point & wave
#ifdef BULK
      use geovv
#endif
# ifdef MPI
      USE mpipar                !" parameters for MPI parallilization
      include   'mpif.h'        !" user include file for MPI programs
# endif
#else
# include       "zcdim.F"       /* # of grid point & wave */
#endif
#include        "zpdim.F"       /* physics etc. */
#include        "zhdim.F"       /* # of char. in string */
#include        "zccom.F"       /* stand. physical const. */
*
*   [MODIFY]
* grid value(t) <GENGD>  grid value(t+dt)
*
      REAL       GAU   ( IJDIM, KMAX      )  !" westerly u
      REAL       GAV   ( IJDIM, KMAX      )  !" southern wind v
      REAL       GAT   ( IJDIM, KMAX      )  !" temperature T
      REAL       GAPS  ( IJDIM            )  !" surface pressure
      REAL       GAQ   ( IJDIM, KMAX, NTR )  !" humidity etc.
*
* grid value(t-dt) <MOVGD>  grid value(t)
*
      REAL       GBU   ( IJDIM, KMAX      )  !" westerly u
      REAL       GBV   ( IJDIM, KMAX      )  !" southern wind v
      REAL       GBT   ( IJDIM, KMAX      )  !" temperature T
      REAL       GBPS  ( IJDIM            )  !" surface pressure
      REAL       GBQ   ( IJDIM, KMAX, NTR )  !" humidity etc.
*
*   [INPUT]
*
      REAL       DELT                      !" time step delta(t)
      LOGICAL    OINIT                     !" initialized condition ?
      REAL       GDZS  ( IJDIM )           !" surface topography
      REAL       ALON  ( IJDIM )           !" longitude
      REAL       DLON  ( IJDIM )           !" weight of longitude
      REAL       ALAT  ( IJDIM )           !" latitude
      REAL       DLAT  ( IJDIM )           !" weight of latitude
      REAL       SIG   ( KMAX )            !" sigma-level (integer)
      REAL       SIGM  (KMAX+1)            !" sigma-level (half lev)
      REAL       DSIG  ( KMAX )            !" delta(sigma) (integer)
      REAL       DSIGM (KMAX+1)            !" delta(sigma) (half lev)
*
*   [INTERNAL WORK]
      REAL     GTUA  ( IJDIM, KMAX   )     !" tend. of u adv.
      REAL     GTVA  ( IJDIM, KMAX   )     !" tend. merid.adv. V
      REAL     GTKE  ( IJDIM, KMAX   )     !" kinetic energy term KE
      REAL     GTUT  ( IJDIM, KMAX   )     !" zonal adv. of temp.
      REAL     GTVT  ( IJDIM, KMAX   )     !" merid. adv. of temp.
      REAL     GTT   ( IJDIM, KMAX   )     !" tend. term of T
      REAL     GTPI  ( IJDIM         )     !" tend. term of p
      REAL     GSIGD ( IJDIM, KMAX+1 )     !" tendency of sigma
      REAL     GPID  ( IJDIM         )     !" tendency of pai
      REAL     GTUQ  ( IJDIM, KMAX, NTR )  !" zonal advection Uq
      REAL     GTVQ  ( IJDIM, KMAX, NTR )  !" meridional advection Vq
      REAL     GTQ   ( IJDIM, KMAX, NTR )  !" tend. of q
      REAL     GDOMG ( IJDIM, KMAX      )  !" p-veolocity
*
      INTEGER    IFPAR, JFPAR, IJ, K, M
      REAL       DELI
*
*   [INTERNAL PARM] 
      LOGICAL    OCHECK, OCKALL
      NAMELIST  /NMCHKD/ OCHECK, OCKALL
      DATA       OCHECK, OCKALL / .FALSE., .FALSE. /
c     SAVE       OCHECK, OCKALL
c
      LOGICAL    OFIRST
      DATA       OFIRST / .TRUE. /
      SAVE       OFIRST
*
      IF ( OFIRST ) THEN
         WRITE ( 6,* ) ' @@@ DADMN: DYNAMICS CONTROL 97/09/29'
         OFIRST = .FALSE.
*
         CALL   REWNML ( IFPAR , JFPAR )
#ifdef MPI
         IF ( myrank == 0 ) THEN
            READ   ( IFPAR, NMCHKD, IOSTAT=iostat )
            lcom(1) = OCHECK
            lcom(2) = OCKALL
         END IF
         CALL MPI_Bcast ( iostat, 1, MPI_INTEGER, 0,
     &        MPI_COMM_WORLD, ierror )
         icount = 2
         CALL MPI_Bcast ( lcom, icount, MPI_LOGICAL, 0,
     &        MPI_COMM_WORLD, ierror )
         IF ( myrank /= 0 ) THEN
            OCHECK = lcom(1)
            OCKALL = lcom(2)
         END IF
         IF ( iostat > 0 ) THEN
            WRITE (6,*) "READ ERROR: NMCHKD"
            CALL MPI_Finalize ( ierror )
            STOP
         END IF
#else
         READ   ( IFPAR, NMCHKD, END=190 )
#endif
  190    WRITE  ( JFPAR, NMCHKD )
      ENDIF
*
      CALL FIXMAS
     I         ( GBPS  , GBQ   , DLON  , DLAT  , DSIG   )
*
* << tendency term >>
*
      CALL DYNTRM
     O         ( GTUA  , GTVA  , GTKE  , GTUT  , GTVT  ,
     O           GTT   , GTPI  , GSIGD , GPID  , GTUQ  ,
     O           GTVQ  , GTQ   , GDOMG ,
     I           GAU   , GAV   , GAT   , GAPS  , GAQ   , 
     C           GDZS  , ALAT  , SIG   , SIGM  , DSIG    ) 
*     
* << time integration >>
*
      DELI = 1.0/(2.0*DELT)
      CALL HISTIF
     I   ( GBU,'DUDYN','dynamics u-tendency','m/s**2', 'ALEV',-DELI)
      CALL HISTIF
     I   ( GBV,'DVDYN','dynamics v-tendency','m/s**2', 'ALEV',-DELI)
      CALL HISTIF
     I   ( GBT,'DTDYN','dynamics T-tendency','K/s',    'ALEV',-DELI)
      CALL HISTIF
     I   ( GBPS,'DPDYN','dynamics Ps-tendency','hPa/s','ASFC',-DELI)
      CALL HISTIF
     I   ( GBQ,'DQDYN','dynamics q-tendency','1/s',    'ALEV',-DELI)
      IF ( ITL .GE. 2 ) THEN
         CALL HISTIF
     I (GBQ(1,1,ITL),'DLDYN','dynamics l-tendency','1/s','ALEV',-DELI)
      ENDIF
*
      CALL DYNSTP
     M         ( GAU   , GAV   , GAT   , GAPS  , GAQ   ,
     M           GBU   , GBV   , GBT   , GBPS  , GBQ   ,
     I           GTUA  , GTVA  , GTKE  ,
     I           GTUT  , GTVT  , GTT   , GTPI  ,
     I           GTUQ  , GTVQ  , GTQ   ,
     I           DELT  , OINIT , 
     C           GDZS  , ALAT  , SIG   , SIGM  , DSIG    )
*
      CALL HISTAD ( GAU    , 'DUDYN',  DELI )
      CALL HISTAD ( GAV    , 'DVDYN',  DELI )
      CALL HISTAD ( GAT    , 'DTDYN',  DELI )
      CALL HISTAD ( GAPS   , 'DPDYN',  DELI )
      CALL HISTAD ( GAQ    , 'DQDYN',  DELI )
      IF ( ITL .GE. 2 ) THEN
         CALL HISTAD ( GAQ(1,1,ITL), 'DLDYN',  DELI )
      ENDIF
*
* << adjust >>
*
      CALL MASFIX
     M         ( GAPS  , GAQ   ,
     I           DELT  , DLON  , DLAT  , DSIG  )
*
      IF ( OCHECK ) THEN
         CALL DCHKT             !" valid range monitor
     I         ( GTUA  , GTVA  , GTKE  ,
     I           GTUT  , GTVT  , GTT   , 
     I           GTPI  , GSIGD , GPID  , 
     I           GTUQ  , GTVQ  , GTQ   , OCKALL )
      ENDIF
*
      CALL HISTIN
     I      ( GSIGD, 'SIGD  ', 'sigma-velocity  ' ,'1/s   ', 'AMLEV' )
      CALL HISTIN
     I      ( GPID , 'PID   ', 'pi-tendency     ' ,'1/s   ', 'ASFC'  )
*
      DO 2100 K = 1, KMAX
         DO 2100 IJ = 1, IJDIM
            GSIGD( IJ,K ) = ( GSIGD( IJ,K ) + GPID( IJ )*SIG( K ) )
     &                     *GAPS( IJ ) 
 2100 CONTINUE 
*
      CALL HISTIN
     I       ( GSIGD, 'OMG   ', 'p-velocity  ' ,'hPa/s', 'AMLEV'  )
*
c     DO K = 1,KMAX
c       gdpmu=amax1(1.,gaps(1)*sigm(k+1))
c       h=(alog(gdpmu         )-alog(gaps(1)*sigm(k)))
c       a=(alog(gdpmu         )-alog(gaps(1)*sig (k)))
c       b=(alog(gaps(1)*sig(k))-alog(gaps(1)*sigm(k)))
c       DO IJ = 1, IJSDIM
c         GDOMG(IJ,K)=GSIGD(IJ,K)*a/h+GSIGD(IJ,K+1)*b/h
c       ENDDO
c     ENDDO
cOMEGA correction 12 NOV. 2001, milee
c KIM [2008/07/11] omega correction
c     DO K=1,KMAX
cDO IJ=1,IJSDIM
c  GDOMG (IJ,K)=GDOMG(IJ,K)*GAPS(IJ)
cENDDO
c     ENDDO
c
      CALL HISTIN
     I       ( GDOMG, 'OMEGA ', 'p-velocity  ' ,'hPa/s', 'ALEV'   )
*
#ifdef BULK
      do k = 1, kmax
        do j = 1, jdim
          do i = 1, idim

            omega_save(i,j,k) = gdomg(idim*(j-1)+i,k)

          enddo
        enddo
      enddo
#endif
      RETURN
      END
**********************************************************************
      SUBROUTINE DCHKT          !" valid range monitor
     I         ( GTUA  , GTVA  , GTKE  ,
     I           GTUT  , GTVT  , GTT   , 
     I           GTPI  , GSIGD , GPID  , 
     I           GTUQ  , GTVQ  , GTQ   , OCKALL )
*
*   [PARAM]
#ifdef DYNAMIC
      USE zcdim                 !" # of grid point & wave
#else
# include       "zcdim.F"       /* # of grid point & wave */
#endif
#include        "zpdim.F"       /* physics etc. */
*
*   [INPUT] 
      REAL     GTUA  ( IJDIM, KMAX   )  !" tend. of u adv.
      REAL     GTVA  ( IJDIM, KMAX   )  !" tend. merid.adv. V
      REAL     GTKE  ( IJDIM, KMAX   )  !" kinetic energy term KE
      REAL     GTUT  ( IJDIM, KMAX   )  !" zonal adv. of temp.
      REAL     GTVT  ( IJDIM, KMAX   )  !" merid. adv. of temp.
      REAL     GTT   ( IJDIM, KMAX   )  !" tend. term of T
      REAL     GTPI  ( IJDIM         )  !" tend. term of p
      REAL     GSIGD ( IJDIM, KMAX+1 )  !" tendency of sigma
      REAL     GPID  ( IJDIM         )  !" tendency of pai
      REAL     GTUQ  ( IJDIM, KMAX, NTR  )  !" zonal advection Uq
      REAL     GTVQ  ( IJDIM, KMAX, NTR  )  !" meridional advection Vq
      REAL     GTQ   ( IJDIM, KMAX, NTR  )  !" tend. of q
      LOGICAL  OCKALL
*
      CALL CHKVAL(GTUA, IDIM,JDIM,KMAX,-1.E0, 1.E0, 'GTUA','D',OCKALL)
      CALL CHKVAL(GTVA, IDIM,JDIM,KMAX,-1.E0, 1.E0, 'GTVA','D',OCKALL)
      CALL CHKVAL(GTKE, IDIM,JDIM,KMAX,-1.E4, 1.E6, 'GTKE','D',OCKALL)
      CALL CHKVAL(GTUT, IDIM,JDIM,KMAX,-1.E4, 1.E4, 'GTUT','D',OCKALL)
      CALL CHKVAL(GTVT, IDIM,JDIM,KMAX,-1.E4, 1.E4, 'GTVT','D',OCKALL)
      CALL CHKVAL(GTT , IDIM,JDIM,KMAX,-1.E-1,1.E-1,'GTDT','D',OCKALL)
      CALL CHKVAL(GTPI, IDIM,JDIM,   1,-1.E-4,1.E-4,'GTPI','D',OCKALL)
      CALL CHKVAL(GSIGD,IDIM,JDIM,KMAX,-1.E-4,1.E-4,'SIGD','D',OCKALL)
      CALL CHKVAL(GPID, IDIM,JDIM,   1,-1.E-4,1.E-4,'GPID','D',OCKALL)
      CALL CHKVAL(GTUQ, IDIM,JDIM,KMAX,-1.E-1,1.E1, 'GTUQ','D',OCKALL)
      CALL CHKVAL(GTVQ, IDIM,JDIM,KMAX,-1.E-1,1.E1, 'GTVQ','D',OCKALL)
      CALL CHKVAL(GTQ , IDIM,JDIM,KMAX,-1.E-4,1.E-4,'GTDQ','D',OCKALL)
*
      RETURN
      END
