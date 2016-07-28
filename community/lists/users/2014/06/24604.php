<?
$subject_val = "[OMPI users] openmpi linking problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 13:14:25 2014" -->
<!-- isoreceived="20140609171425" -->
<!-- sent="Mon, 9 Jun 2014 18:14:25 +0100" -->
<!-- isosent="20140609171425" -->
<!-- name="Sergii Veremieiev" -->
<!-- email="s.veremieiev_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi linking problem" -->
<!-- id="CAHaow__UzUC+=EOJfnG5cPGcjmn+QtCLt3fatNTzGDyZYJh_sw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] openmpi linking problem<br>
<strong>From:</strong> Sergii Veremieiev (<em>s.veremieiev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-09 13:14:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24605.php">Tim Prince: "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>Previous message:</strong> <a href="24603.php">Nathan Hjelm: "Re: [OMPI users] Compiling OpenMPI 1.8.1 for Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24605.php">Tim Prince: "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>Reply:</strong> <a href="24605.php">Tim Prince: "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>Reply:</strong> <a href="24606.php">Marco Atzeri: "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>Reply:</strong> <a href="24703.php">Sergii Veremieiev: "[OMPI users] Fwd: openmpi linking problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Sir/Madam,
<br>
<p>I'm trying to link a C/FORTRAN code on Cygwin with Open MPI 1.7.5 and GCC
<br>
4.8.2:
<br>
<p>mpicxx ./lib/Multigrid.o ./lib/GridFE.o ./lib/Data.o ./lib/GridFD.o
<br>
./lib/Parameters.o ./lib/MtInt.o ./lib/MtPol.o ./lib/MtDob.o -o
<br>
Test_cygwin_openmpi_gcc  -L./external/MUMPS/lib -ldmumps_cygwin_openmpi_gcc
<br>
-lmumps_common_cygwin_openmpi_gcc -lpord_cygwin_openmpi_gcc
<br>
-L./external/ParMETIS -lparmetis_cygwin_openmpi_gcc
<br>
-lmetis_cygwin_openmpi_gcc -L./external/SCALAPACK
<br>
-lscalapack_cygwin_openmpi_gcc -L./external/BLACS/LIB
<br>
-lblacs-0_cygwin_openmpi_gcc -lblacsF77init-0_cygwin_openmpi_gcc
<br>
-lblacsCinit-0_cygwin_openmpi_gcc -lblacs-0_cygwin_openmpi_gcc
<br>
-L./external/BLAS -lblas_cygwin_openmpi_gcc -lmpi -lgfortran
<br>
<p>The following error messages are returned:
<br>
<p>./external/MUMPS/lib/libdmumps_cygwin_openmpi_gcc.a(dmumps_part3.o): In
<br>
function `dmumps_127_':
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:6068:
<br>
undefined reference to `mpi_send_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:6068:(.text+0x1d3):
<br>
relocation truncated to fit: R_X86_64_PC32 against undefined symbol
<br>
`mpi_send_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:6077:
<br>
undefined reference to `mpi_send_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:6077:(.text+0x2b8):
<br>
relocation truncated to fit: R_X86_64_PC32 against undefined symbol
<br>
`mpi_send_'
<br>
./external/MUMPS/lib/libdmumps_cygwin_openmpi_gcc.a(dmumps_part3.o): In
<br>
function `dmumps_244_':
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:2046:
<br>
undefined reference to `mpi_allreduce_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:2046:(.text+0xda62):
<br>
relocation truncated to fit: R_X86_64_PC32 against undefined symbol
<br>
`mpi_allreduce_'
<br>
./external/MUMPS/lib/libdmumps_cygwin_openmpi_gcc.a(dmumps_part3.o): In
<br>
function `dmumps_269_':
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:2123:
<br>
undefined reference to `mpi_unpack_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:2123:(.text+0xdebe):
<br>
relocation truncated to fit: R_X86_64_PC32 against undefined symbol
<br>
`mpi_unpack_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:2126:
<br>
undefined reference to `mpi_unpack_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:2126:(.text+0xdef6):
<br>
relocation truncated to fit: R_X86_64_PC32 against undefined symbol
<br>
`mpi_unpack_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:2129:
<br>
undefined reference to `mpi_unpack_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:2129:(.text+0xdf2e):
<br>
relocation truncated to fit: R_X86_64_PC32 against undefined symbol
<br>
`mpi_unpack_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:2132:
<br>
undefined reference to `mpi_unpack_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:2132:(.text+0xdf66):
<br>
relocation truncated to fit: R_X86_64_PC32 against undefined symbol
<br>
`mpi_unpack_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:2135:
<br>
undefined reference to `mpi_unpack_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:2135:(.text+0xdf9e):
<br>
relocation truncated to fit: R_X86_64_PC32 against undefined symbol
<br>
`mpi_unpack_'
<br>
./external/MUMPS/lib/libdmumps_cygwin_openmpi_gcc.a(dmumps_part3.o):/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:2160:
<br>
more undefined references to `mpi_unpack_' follow
<br>
./external/MUMPS/lib/libdmumps_cygwin_openmpi_gcc.a(dmumps_part3.o): In
<br>
function `dmumps_269_':
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:2160:(.text+0xe3ec):
<br>
relocation truncated to fit: R_X86_64_PC32 against undefined symbol
<br>
`mpi_unpack_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:2176:(.text+0xeb3c):
<br>
relocation truncated to fit: R_X86_64_PC32 against undefined symbol
<br>
`mpi_unpack_'
<br>
./external/MUMPS/lib/libdmumps_cygwin_openmpi_gcc.a(dmumps_part3.o): In
<br>
function `dmumps_126_':
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:5747:
<br>
undefined reference to `mpi_bcast_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:5747:(.text+0x1b0f1):
<br>
additional relocation overflows omitted from the output
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:5842:
<br>
undefined reference to `mpi_probe_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:5854:
<br>
undefined reference to `mpi_get_count_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:5857:
<br>
undefined reference to `mpi_recv_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:5988:
<br>
undefined reference to `mpi_recv_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:5997:
<br>
undefined reference to `mpi_recv_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:5847:
<br>
undefined reference to `mpi_get_count_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:5850:
<br>
undefined reference to `mpi_recv_'
<br>
./external/MUMPS/lib/libdmumps_cygwin_openmpi_gcc.a(dmumps_part3.o): In
<br>
function `dmumps_f77_':
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part3.F:6305:
<br>
undefined reference to `mpi_bcast_'
<br>
./external/MUMPS/lib/libdmumps_cygwin_openmpi_gcc.a(dmumps_part1.o): In
<br>
function `dmumps_280_':
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part1.F:5345:
<br>
undefined reference to `mpi_get_count_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part1.F:5356:
<br>
undefined reference to `mpi_recv_'
<br>
./external/MUMPS/lib/libdmumps_cygwin_openmpi_gcc.a(dmumps_part1.o): In
<br>
function `dmumps_322_':
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part1.F:4962:
<br>
undefined reference to `mpi_unpack_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part1.F:5144:
<br>
undefined reference to `mpi_recv_'
<br>
./external/MUMPS/lib/libdmumps_cygwin_openmpi_gcc.a(dmumps_part1.o): In
<br>
function `dmumps_264_':
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part1.F:4024:
<br>
undefined reference to `mpi_unpack_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part1.F:4026:
<br>
undefined reference to `mpi_unpack_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part1.F:4034:
<br>
undefined reference to `mpi_unpack_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part1.F:4091:
<br>
undefined reference to `mpi_unpack_'
<br>
/cygdrive/d/Sergey/Research/Codes/Thinfilmsolver/external/MUMPS/src/dmumps_part1.F:4095:
<br>
undefined reference to `mpi_unpack_'
<br>
<p><p>Could you please advise me what further libraries should I include on
<br>
linking? Thank you.
<br>
<p>Best regards,
<br>
<p>Sergii
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24604/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24605.php">Tim Prince: "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>Previous message:</strong> <a href="24603.php">Nathan Hjelm: "Re: [OMPI users] Compiling OpenMPI 1.8.1 for Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24605.php">Tim Prince: "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>Reply:</strong> <a href="24605.php">Tim Prince: "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>Reply:</strong> <a href="24606.php">Marco Atzeri: "Re: [OMPI users] openmpi linking problem"</a>
<li><strong>Reply:</strong> <a href="24703.php">Sergii Veremieiev: "[OMPI users] Fwd: openmpi linking problem"</a>
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
