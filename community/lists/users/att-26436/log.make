( cd SRC/MPI ; make  )
make[1]: Entering directory `/pfs/tmp/ijohnson/BLACS/SRC/MPI'
( cd INTERNAL ; make -f ../Makefile I_int "dlvl=/pfs/tmp/ijohnson/BLACS" )
make[2]: Entering directory `/pfs/tmp/ijohnson/BLACS/SRC/MPI/INTERNAL'
mpif77  -c -O0 -fPIC bi_f77_mpi_attr_get.f
mpif77  -c -O0 -fPIC bi_f77_mpi_op_create.f
mpif77  -c -O0 -fPIC bi_f77_mpi_initialized.f
mpif77  -c -O0 -fPIC bi_f77_mpi_test.f
mpif77  -c -O0 -fPIC bi_f77_mpi_testall.f
mpif77  -c -O0 -fPIC bi_f77_get_constants.f
mpif77  -c -O0 -fPIC bi_f77_init.f
ar r /pfs/tmp/ijohnson/BLACS/LIB/blacs_MPI-LINUX-0.a BI_HypBS.o BI_HypBR.o BI_IdringBS.o BI_IdringBR.o BI_MpathBS.o BI_MpathBR.o BI_SringBS.o BI_SringBR.o BI_TreeBS.o BI_TreeBR.o BI_Ssend.o BI_Rsend.o BI_Srecv.o BI_Asend.o BI_Arecv.o BI_TreeComb.o BI_BeComb.o BI_MringComb.o BI_ArgCheck.o BI_TransDist.o BI_GetBuff.o BI_UpdateBuffs.o BI_EmergencyBuff.o BI_BlacsErr.o BI_BlacsWarn.o BI_BlacsAbort.o BI_BuffIsFree.o BI_imvcopy.o BI_smvcopy.o BI_dmvcopy.o BI_ivmcopy.o BI_svmcopy.o BI_dvmcopy.o BI_Pack.o BI_Unpack.o BI_GetMpiGeType.o BI_GetMpiTrType.o BI_ivvsum.o BI_svvsum.o BI_dvvsum.o BI_cvvsum.o BI_zvvsum.o BI_ivvamx.o BI_svvamx.o BI_dvvamx.o BI_cvvamx.o BI_zvvamx.o BI_ivvamx2.o BI_svvamx2.o BI_dvvamx2.o BI_cvvamx2.o BI_zvvamx2.o BI_ivvamn.o BI_svvamn.o BI_dvvamn.o BI_cvvamn.o BI_zvvamn.o BI_ivvamn2.o BI_svvamn2.o BI_dvvamn2.o BI_cvvamn2.o BI_zvvamn2.o BI_iMPI_amx.o BI_sMPI_amx.o BI_dMPI_amx.o BI_cMPI_amx.o BI_zMPI_amx.o BI_iMPI_amx2.o BI_sMPI_amx2.o BI_dMPI_amx2.o BI_cMPI_amx2.o BI_zMPI_amx2.o BI_iMPI_amn.o BI_sMPI_amn.o BI_dMPI_amn.o BI_cMPI_amn.o BI_zMPI_amn.o BI_iMPI_amn2.o BI_sMPI_amn2.o BI_dMPI_amn2.o BI_cMPI_amn2.o BI_zMPI_amn2.o BI_cMPI_sum.o BI_zMPI_sum.o BI_ContxtNum.o BI_GlobalVars.o BI_MPI_F77_to_c_trans_comm.o BI_MPI_C_to_f77_trans_comm.o BI_TransUserComm.o bi_f77_mpi_attr_get.o bi_f77_mpi_op_create.o bi_f77_mpi_initialized.o bi_f77_mpi_test.o bi_f77_mpi_testall.o bi_f77_get_constants.o bi_f77_init.o
make[2]: Leaving directory `/pfs/tmp/ijohnson/BLACS/SRC/MPI/INTERNAL'
rm -f /pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a /pfs/tmp/ijohnson/BLACS/LIB/blacsCinit_MPI-LINUX-0.a
make /pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a
make[2]: Entering directory `/pfs/tmp/ijohnson/BLACS/SRC/MPI'
mpicc  -o Cblacs_pinfo.o -c -O -fPIC -DSYSINC -I/usr/pppl/intel/11-pkgs/openmpi-1.8.4/include    -DBlacsDebugLvl=0      -DCallFromC -DMainInF77 \
                 blacs_pinfo_.c
mpicc  -c -O -fPIC -DSYSINC -I/usr/pppl/intel/11-pkgs/openmpi-1.8.4/include    -DBlacsDebugLvl=0      -DMainInF77 blacs_pinfo_.c
ar r /pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a blacs_pinfo_.o Cblacs_pinfo.o
ar: creating /pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a
ranlib /pfs/tmp/ijohnson/BLACS/LIB/blacsF77init_MPI-LINUX-0.a
make[2]: Leaving directory `/pfs/tmp/ijohnson/BLACS/SRC/MPI'
make /pfs/tmp/ijohnson/BLACS/LIB/blacsCinit_MPI-LINUX-0.a
make[2]: Entering directory `/pfs/tmp/ijohnson/BLACS/SRC/MPI'
mpicc  -o Cblacs_pinfo.o -c -O -fPIC -DSYSINC -I/usr/pppl/intel/11-pkgs/openmpi-1.8.4/include    -DBlacsDebugLvl=0      -DCallFromC -DMainInC \
                 blacs_pinfo_.c
mpicc  -c -O -fPIC -DSYSINC -I/usr/pppl/intel/11-pkgs/openmpi-1.8.4/include    -DBlacsDebugLvl=0      -DMainInC blacs_pinfo_.c
ar r /pfs/tmp/ijohnson/BLACS/LIB/blacsCinit_MPI-LINUX-0.a blacs_pinfo_.o Cblacs_pinfo.o
ar: creating /pfs/tmp/ijohnson/BLACS/LIB/blacsCinit_MPI-LINUX-0.a
ranlib /pfs/tmp/ijohnson/BLACS/LIB/blacsCinit_MPI-LINUX-0.a
make[2]: Leaving directory `/pfs/tmp/ijohnson/BLACS/SRC/MPI'
ar r /pfs/tmp/ijohnson/BLACS/LIB/blacs_MPI-LINUX-0.a igesd2d_.o sgesd2d_.o dgesd2d_.o cgesd2d_.o zgesd2d_.o itrsd2d_.o strsd2d_.o dtrsd2d_.o ctrsd2d_.o ztrsd2d_.o igerv2d_.o sgerv2d_.o dgerv2d_.o cgerv2d_.o zgerv2d_.o itrrv2d_.o strrv2d_.o dtrrv2d_.o ctrrv2d_.o ztrrv2d_.o igebs2d_.o sgebs2d_.o dgebs2d_.o cgebs2d_.o zgebs2d_.o igebr2d_.o sgebr2d_.o dgebr2d_.o cgebr2d_.o zgebr2d_.o itrbs2d_.o strbs2d_.o dtrbs2d_.o ctrbs2d_.o ztrbs2d_.o itrbr2d_.o strbr2d_.o dtrbr2d_.o ctrbr2d_.o ztrbr2d_.o igsum2d_.o sgsum2d_.o dgsum2d_.o cgsum2d_.o zgsum2d_.o igamx2d_.o sgamx2d_.o dgamx2d_.o cgamx2d_.o zgamx2d_.o igamn2d_.o sgamn2d_.o dgamn2d_.o cgamn2d_.o zgamn2d_.o blacs_setup_.o blacs_set_.o blacs_get_.o blacs_abort_.o blacs_exit_.o blacs_pnum_.o blacs_pcoord_.o ksendid_.o krecvid_.o kbsid_.o kbrid_.o dcputime00_.o dwalltime00_.o blacs_gridinit_.o blacs_gridmap_.o blacs_freebuff_.o blacs_gridexit_.o blacs_gridinfo_.o blacs_barrier_.o sys2blacs_handle_.o free_blacs_system_handle_.o blacs2sys_handle_.o igesd2d_.C sgesd2d_.C dgesd2d_.C cgesd2d_.C zgesd2d_.C itrsd2d_.C strsd2d_.C dtrsd2d_.C ctrsd2d_.C ztrsd2d_.C igerv2d_.C sgerv2d_.C dgerv2d_.C cgerv2d_.C zgerv2d_.C itrrv2d_.C strrv2d_.C dtrrv2d_.C ctrrv2d_.C ztrrv2d_.C igebs2d_.C sgebs2d_.C dgebs2d_.C cgebs2d_.C zgebs2d_.C igebr2d_.C sgebr2d_.C dgebr2d_.C cgebr2d_.C zgebr2d_.C itrbs2d_.C strbs2d_.C dtrbs2d_.C ctrbs2d_.C ztrbs2d_.C itrbr2d_.C strbr2d_.C dtrbr2d_.C ctrbr2d_.C ztrbr2d_.C igsum2d_.C sgsum2d_.C dgsum2d_.C cgsum2d_.C zgsum2d_.C igamx2d_.C sgamx2d_.C dgamx2d_.C cgamx2d_.C zgamx2d_.C igamn2d_.C sgamn2d_.C dgamn2d_.C cgamn2d_.C zgamn2d_.C blacs_setup_.C blacs_set_.C blacs_get_.C blacs_abort_.C blacs_exit_.C blacs_pnum_.C blacs_pcoord_.C ksendid_.C krecvid_.C kbsid_.C kbrid_.C dcputime00_.C dwalltime00_.C Cblacs_gridinit_.C Cblacs_gridmap_.C Cblacs_freebuff_.C Cblacs_gridexit_.C Cblacs_gridinfo_.C Cblacs_barrier_.C Csys2blacs_handle_.C Cfree_blacs_system_handle_.C Cblacs2sys_handle_.C
ranlib /pfs/tmp/ijohnson/BLACS/LIB/blacs_MPI-LINUX-0.a
make[1]: Leaving directory `/pfs/tmp/ijohnson/BLACS/SRC/MPI'
