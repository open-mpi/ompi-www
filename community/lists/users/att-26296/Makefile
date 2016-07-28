SHELL	= /bin/sh

########################################################################
# LINUX MPICH-PGI
########################################################################
#FC	= /home/regcm/mpich/bin/mpif90
#FC	= mpif90
FC	= pgf90
#FC	= /home/regcm/soft/openmpiP/bin/mpif90
#CLMF	= /home/regcm/mpich/bin/mpif90
#CLMF	=/home/regcm/soft/openmpiP/bin/mpif90 
CLMF	=pgf90 
CLMC	= pgcc
LMF=  -c -Mfree -I. -I/home2/ashfaq/onlyclm35/clm3.5/src/csm_share/shr -I/home2/ashfaq/onlyclm35/clm3.5/src/csm_share/eshr -I/home2/ashfaq/onlyclm35/clm3.5/src/utils/timing -I/home2/ashfaq/onlyclm35/clm3.5/src/utils/mct/mpeu -I/home2/ashfaq/onlyclm35/clm3.5/src/utils/mct/mct -I/home2/ashfaq/onlyclm35/clm3.5/src/utils/esmf_wrf_timemgr -I/home2/ashfaq/onlyclm35/clm3.5/src/main -I/clm3.5/src/biogeophys -I/home2/ashfaq/onlyclm35/clm3.5/src/biogeochem -I/home2/ashfaq/onlyclm35/clm3.5/src/riverroute -I/netcdf4/include -I/home2/ashfaq/soft/openmpiP/include  -I/home2/ashfaq/netcdfP/include -DFORTRANUNDERSCORE -DMAXPATCH_PFT=4 -DOFFLINE -DSPMD -DLINUX -i4 -Mdalign -Mextend -byteswapio -O1 
#LMF= -I. -Mfree -DFORTRANUNDERSCORE -DMAXPATCH_PFT=4 -DOFFLINE -DLINUX -i4 -Mdalign -Mextend -O1 -I. -I/home/regcm/soft/netcdf43P/include -L/home/regcm/soft/netcdf43P/lib -lnetcdf -lnetcdff
LMC=-c -I. -I/home2/ashfaq/onlyclm35/clm3.5/src/csm_share/shr -I/home2/ashfaq/onlyclm35/clm3.5/src/csm_share/eshr -I/home2/ashfaq/onlyclm35/clm3.5/src/utils/timing -I/home2/ashfaq/onlyclm35/clm3.5/src/utils/mct/mpeu -I/home2/ashfaq/onlyclm35/clm3.5/src/utils/mct/mct -I/home2/ashfaq/onlyclm35/clm3.5/src/utils/esmf_wrf_timemgr -I/home2/ashfaq/onlyclm35/clm3.5/src/main -I/clm3.5/src/biogeophys -I/home2/ashfaq/onlyclm35/clm3.5/src/biogeochem -I/home2/ashfaq/onlyclm35/clm3.5/src/riverroute -I/netcdf4/include -I/home2/ashfaq/soft/openmpiP/include  -I/home2/ashfaq/netcdfP/include -DFORTRANUNDERSCORE -DMAXPATCH_PFT=4 -DOFFLINE -DSPMD -DLINUX -fast
FFLAGS	= -r8 -Kieee -O3 -I./include -I.
LDFLAGS	= -r8 -Kieee -O3 -I./include -I. -I/home2/ashfaq/netcdfP/include -L/home2/ashfaq/netcdfP/lib -lnetcdf -lnetcdff -L/home2/ashfaq/soft/openmpiP/lib -lmpi
DEFS	= -DOPT_NOCOMMON -DDYNAMIC -DBENCH -DGCM -DENSEMBLE -DDEBUG -DLINUX
# -DDEBUG_ORDER
EXE	= kausp
SYSTEM	= Dec

COMPILE.mod = $(MODFLAGS) $(TARGET_ARCH)

########################################################################
# NEC SUPER-UX 
########################################################################
#FC	= mpif90
#FFLAGS	= -Wf'-A idbl4 -pvctl vwork=stack' -Cvopt -I./include
#LDFLAGS	= -Wf'-A idbl4 -pvctl vwork=stack'
#DEFS	= -DOPT_NOCOMMON -DDYNAMIC -DMPI -DSYS_SX -DBENCH
##	-DDEBUG_ORDER
#EXE	= ../../exe/snugcm.mpi
#SYSTEM	= SX5

########################################################################

MODDIR	= ./include
ZCDIM	= zcdim.mod
ZCDIMSRC= ${MODDIR}/${ZCDIM:.mod=.F}
ZDDIM	= zddim.mod
ZDDIMSRC= ${MODDIR}/${ZDDIM:.mod=.F}
ZIDIM	= zidim.mod
ZIDIMSRC= ${MODDIR}/${ZIDIM:.mod=.F}
ZSDIM	= zsdim.mod
ZSDIMSRC= ${MODDIR}/${ZSDIM:.mod=.F}
OCNPAR	 = ocnpar.mod
OCNPARSRC= ${MODDIR}/${OCNPAR:.mod=.F}
OCNVAR	 = ocnvar.mod
OCNVARSRC= ${MODDIR}/${OCNVAR:.mod=.F}
LSMPAR	 = lsmpar.mod
LSMPARSRC= ${MODDIR}/${LSMPAR:.mod=.F}
LSMTCV	 = lsmtcv.mod
LSMTCVSRC= ${MODDIR}/${LSMTCV:.mod=.F}
LSMTVV	 = lsmtvv.mod
LSMTVVSRC= ${MODDIR}/${LSMTVV:.mod=.F}
LSMVAR	 = lsmvar.mod
LSMVARSRC= ${MODDIR}/${LSMVAR:.mod=.F}
PBLVD	 = pblvd.mod
PBLVDSRC = ${MODDIR}/${PBLVD:.mod=.F}
ZRADIM   = zradim.mod
ZRADIMSRC= ${MODDIR}/${ZRADIM:.mod=.F}
GEOVV    = geovv.mod
GEOVVSRC= ${MODDIR}/${GEOVV:.mod=.F}

DYNAMIC_SRC= \
	${ZCDIMSRC}  ${ZDDIMSRC}  ${ZIDIMSRC}  ${ZSDIMSRC} \
	${OCNPARSRC} ${OCNVARSRC} ${LSMPARSRC} \
	${LSMTCVSRC} ${LSMTVVSRC} ${LSMVARSRC} \
	${PBLVDSRC}  ${ZRADIM}    ${GEOVVSRC}
DYNAMIC_MOD= \
	${ZCDIM}  ${ZDDIM}  ${ZIDIM}  ${ZSDIM} \
	${OCNPAR} ${OCNVAR} ${LSMPAR} \
	${LSMTCV} ${LSMTVV} ${LSMVAR} \
	${PBLVD}  ${ZRADIM} ${GEOVV}
DYNAMIC_OBJ= \
	${ZCDIM:.mod=.o}  ${ZDDIM:.mod=.o}  ${ZIDIM:.mod=.o}  ${ZSDIM:.mod=.o}\
	${OCNPAR:.mod=.o} ${OCNVAR:.mod=.o} ${LSMPAR:.mod=.o} \
	${LSMTCV:.mod=.o} ${LSMTVV:.mod=.o} ${LSMVAR:.mod=.o} \
	${PBLVD:.mod=.o}  ${ZRADIM:.mod=.o} ${GEOVV:.mod=.o}  \

SYSDIR	= ./sysdep
SYSOBJ	= y${SYSTEM}.o
SYSSRC	= ${SYSDIR}/${SYSOBJ:.o=.F}

MODDIR	= ./include
MPIPAR	= mpipar.mod
MPIPARSRC= ${MODDIR}/${MPIPAR:.mod=.F}
MPI_OBJ	= ${MPIPAR:.mod=.o} \
	mpisub.o
MPI_SRC	= ${MPI_OBJ:.o=.F}
MPI_MOD	= ${MPIPAR}

OBJS	= \
shr_kind_mod.o\
clm_varpar.o\
spmdMod.o\
shr_mpi_mod.o\
shr_sys_mod.o\
abortutils.o\
nanMod.o\
domainMod.o\
clmtype.o\
forcing.o\
shr_const_mod.o\
clm_varcon.o\
subgridAveMod.o\
ESMF_FractionMod.o\
ESMF_BaseMod.o\
ESMF_BaseTimeMod.o\
ESMF_CalendarMod.o\
ESMF_TimeIntervalMod.o\
ESMF_TimeMod.o\
ESMF_AlarmMod.o\
ESMF_ClockMod.o\
ESMF_AlarmClockMod.o\
ESMF_Stubs.o\
ESMF_Mod.o\
clm_varctl.o\
m_stdio.o\
m_ioutil.o\
m_chars.o\
m_flow.o\
m_mpif.o\
m_realkinds.o\
m_mpif90.o\
m_dropdead.o\
m_mpout.o\
m_die.o\
m_mall.o\
m_String.o\
m_rankMerge.o\
m_IndexBin_logical.o\
m_Permuter.o\
m_IndexBin_char.o\
m_MergeSorts.o\
m_IndexBin_integer.o\
m_SortingTools.o\
m_List.o\
m_TraceBack.o\
m_AttrVect.o\
m_GlobalMap.o\
m_GlobalSegMap.o\
m_AttrVectComms.o\
m_SparseMatrix.o\
m_SparseMatrixDecomp.o\
m_SparseMatrixComms.o\
m_Navigator.o\
m_GlobalToLocal.o\
m_SparseMatrixToMaps.o\
m_MCTWorld.o\
m_ConvertMaps.o\
m_ExchangeMaps.o\
m_Router.o\
m_Rearranger.o\
m_SparseMatrixPlus.o\
m_MatAttrVectMul.o\
m_GeneralGrid.o\
m_GeneralGridComms.o\
clm_mct_mod.o\
RunoffMod.o\
clm_varsur.o\
subgridMod.o\
decompMod.o\
spmdGathScatMod.o\
ncdio.o\
dio.o\
clm_time_manager.o\
QSatMod.o\
areaMod.o\
clm_atmlnd.o\
BalanceCheckMod.o\
FrictionVelocityMod.o\
BareGroundFluxesMod.o\
shr_orb_mod.o\
SurfaceAlbedoMod.o\
CNSetValueMod.o\
shr_file_mod.o\
fileutils.o\
pftvarcon.o\
STATICEcosysDynMod.o\
DGVMEcosystemDynMod.o\
FracWetMod.o\
filterMod.o\
CNVegStructUpdateMod.o\
pft2colMod.o\
CNSummaryMod.o\
CNAnnualUpdateMod.o\
CNNStateUpdate3Mod.o\
CNC13StateUpdate3Mod.o\
CNNStateUpdate2Mod.o\
CNCStateUpdate1Mod.o\
CNPrecisionControlMod.o\
CNAllocationMod.o\
CNDecompMod.o\
CNCStateUpdate3Mod.o\
CNNDynamicsMod.o\
CNPhenologyMod.o\
CNC13FluxMod.o\
CNC13StateUpdate1Mod.o\
CNBalanceCheckMod.o\
CNNStateUpdate1Mod.o\
C13SummaryMod.o\
CNFireMod.o\
CNCStateUpdate2Mod.o\
CNC13StateUpdate2Mod.o\
CNGapMortalityMod.o\
CNGRespMod.o\
CNMRespMod.o\
CNEcosystemDynMod.o\
initSurfAlbMod.o\
BiogeophysRestMod.o\
Biogeophysics1Mod.o\
TridiagonalMod.o\
SoilTemperatureMod.o\
Biogeophysics2Mod.o\
BiogeophysicsLakeMod.o\
CASAMod.o\
CASAPhenologyMod.o\
CNiniSpecial.o\
CNiniTimeVar.o\
CNrestMod.o\
CanopyFluxesMod.o\
DGVMAllocationMod.o\
DGVMEstablishmentMod.o\
DGVMFireMod.o\
DGVMKillMod.o\
DGVMLightMod.o\
DGVMMortalityMod.o\
DGVMReproductionMod.o\
DGVMTurnoverMod.o\
DGVMMod.o\
DGVMRestMod.o\
DUSTMod.o\
DriverInitMod.o\
Hydrology1Mod.o\
SoilHydrologyMod.o\
SnowHydrologyMod.o\
Hydrology2Mod.o\
HydrologyLakeMod.o\
Meat.o\
perf_mod.o\
RtmMod.o\
SurfaceRadiationMod.o\
VOCEmissionMod.o\
accumulMod.o\
accFldsMod.o\
surfrdMod.o\
forcPass.o\
atmdrvMod.o\
shr_timer_mod.o\
shr_cal_mod.o\
shr_string_mod.o\
eshr_rc_mod.o\
eshr_estate_mod.o\
shr_ncio_mod.o\
eshr_timemgr_mod.o\
pftdynMod.o\
iobinary.o\
histFileMod.o\
clm_csmMod.o\
subgridRestMod.o\
restFileMod.o\
inicFileMod.o\
ndepFileMod.o\
driver.o\
initGridCellsMod.o\
shr_inputinfo_mod.o\
controlMod.o\
histFldsMod.o\
mkarbinitMod.o\
clmtypeInitMod.o\
initializeMod.o\
clm_varorb.o\
clm_comp.o\
collective.o\
comm.o\
do_close_dispose.o\
eshr_inputinfo_mod.o\
f_wrappers.o\
fort.o\
get_zeits.o\
getdatetime.o\
gptl.o\
gptl_papi.o\
gptlutil.o\
group.o\
handles.o\
iniTimeConst.o\
list.o\
m_Transfer.o\
m_inpak90.o\
mct_mod.o\
lnd_comp_mct.o\
m_Accumulator.o\
m_AccumulatorComms.o\
m_AttrVectReduce.o\
m_StrTemplate.o\
m_FileResolv.o\
m_Filename.o\
m_GlobalSegMapComms.o\
m_Merge.o\
m_SpatialIntegralV.o\
m_SpatialIntegral.o\
m_zeit.o\
mpi.o\
recv.o\
req.o\
rtcrate.o\
scam_setlatlonidx.o\
send.o\
shr_date_mod.o\
shr_alarm_mod.o\
shr_flux_mod.o\
shr_jlcp.o\
shr_map_mod.o\
shr_msg_mod.o\
shr_ncread_mod.o\
shr_stream_mod.o\
shr_tInterp_mod.o\
shr_vmath_fwrap.o\
shr_vmath_mod.o\
snowdp2lev.o\
system_messages.o\
threadutil.o\
time.o\
wrf_error_fatal.o\
wrf_message.o\
clminitialize.o\
clmatmdrv.o\
clmrun.o\
clmoutMod.o\
program_off.o\
clmflux.o\
clmalb.o\
	aadmn.o		aparm.o		apcon.o		\
	aquit.o		asetc.o		asetl.o		\
	asets.o		astep.o		astrt.o		\
	dadmn.o		dadvn.o		ddiag.o		\
	ddifc.o		ddump.o		dg2wd.o		\
	dgdyn.o						\
	dgeng.o		dhydr.o		dintg.o		\
	dmfix.o		dmtrx.o		dsetc.o		\
	dsetv.o		dsphe.o		dstep.o		\
	dterm.o		dvect.o		dvtmp.o		\
	iavrg.o		icord.o		idiag.o		\
	ifopn.o		igtio.o		igzio.o		\
	ihdef.o		ihist.o		ihsub.o		\
	irdat.o		irwgd.o		is2po.o		\
	pmisc.o		pdadj.o		psave.o		\
	pradi.o		pigwd.o		prcon.o		\
	padmn.o		pstep.o		pgbnd.o		\
	pbldf.o		pmlsc.o		pcuma.o		\
	pradt.o		plrad.o		psrad.o		\
	pshlc.o		prtnd.o		ucloc.o		\
	ucaln.o		ufftp.o		umtlu.o		\
	usphe.o		uspst.o		usubs.o		\
	pstrt.o		plsfc.o		plalb.o		\
	plblk.o		pldrv.o		pleco.o		\
	plh2o.o		plini.o		plsur.o		\
	plocn.o		kimcs.o         forceA.o        
SRCS	= \
	${DYNAMIC_SRC} ${MPI_SRC} \
	${SYSSRC} ${OBJS:.o=.F}

.SUFFIXES : .mod .o .F .F90 .c

${EXE}	: ${DYNAMIC_MOD} ${DYNAMIC_OBJ} ${MPI_MOD} ${MPI_OBJ} ${SYSOBJ} ${OBJS}
	${FC} ${LDFLAGS} -o ${EXE} ${DYNAMIC_OBJ} ${MPI_OBJ} ${SYSOBJ} ${OBJS}


${ZCDIM}: ${ZCDIMSRC}
	${FC} ${DEFS} ${FFLAGS} -c ${ZCDIMSRC}

${ZDDIM}: ${ZDDIMSRC}
	${FC} ${DEFS} ${FFLAGS} -c ${ZDDIMSRC}

${ZIDIM}: ${ZIDIMSRC}
	${FC} ${DEFS} ${FFLAGS} -c ${ZIDIMSRC}

${ZSDIM}: ${ZSDIMSRC}
	${FC} ${DEFS} ${FFLAGS} -c ${ZSDIMSRC}

${OCNPAR}: ${OCNPARSRC}
	${FC} ${DEFS} ${FFLAGS} -c ${OCNPARSRC}

${OCNVAR}: ${OCNVARSRC}
	${FC} ${DEFS} ${FFLAGS} -c ${OCNVARSRC}

${LSMPAR}: ${LSMPARSRC}
	${FC} ${DEFS} ${FFLAGS} -c ${LSMPARSRC}

${LSMTCV}: ${LSMTCVSRC}
	${FC} ${DEFS} ${FFLAGS} -c ${LSMTCVSRC}

${LSMTVV}: ${LSMTVVSRC}
	${FC} ${DEFS} ${FFLAGS} -c ${LSMTVVSRC}

${LSMVAR}: ${LSMVARSRC}
	${FC} ${DEFS} ${FFLAGS} -c ${LSMVARSRC}

${PBLVD}: ${PBLVDSRC}
	${FC} ${DEFS} ${FFLAGS} -c ${PBLVDSRC}

${ZRADIM}: ${ZRADIMSRC}
	${FC} ${DEFS} ${FFLAGS} -c ${ZRADIMSRC}

${GEOVV}: ${GEOVVSRC}
	${FC} ${DEFS} ${FFLAGS} -c ${GEOVVSRC}

${SYSOBJ}: ${SYSSRC}
	${FC} ${DEFS} ${FFLAGS} ${LDFLAGS} -c ${SYSSRC}

${MPIPAR}: ${MPIPARSRC}
	${FC} ${DEFS} ${FFLAGS} -c ${MPIPARSRC}

.F.mod	:
	${FC} ${DEFS} ${FFLAGS} -c $<
.F90.mod	:
	${CLMF} ${LMF}  -c $<
.F90.o	:
	${CLMF} ${LMF}  -c $<
.F.o	:
	${FC} ${DEFS} ${FFLAGS} -c $<
.c.o	:
	${CLMC} ${LMC} -c $<

clean	:
	rm -f *.o *.mod *~ include/*~

distclean : clean
	rm -f ${EXE}
