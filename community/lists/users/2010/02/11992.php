<?
$subject_val = "[OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 12:39:52 2010" -->
<!-- isoreceived="20100203173952" -->
<!-- sent="Wed, 3 Feb 2010 18:39:23 +0100" -->
<!-- isosent="20100203173923" -->
<!-- name="T. Farago" -->
<!-- email="farago1_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)" -->
<!-- id="2401d8be1002030939t470aa7c4yb7c03d280d0d6cef_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2401d8be1002030758ia6b3948qbae374700bd6ab39_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)<br>
<strong>From:</strong> T. Farago (<em>farago1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-03 12:39:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11993.php">Shiqing Fan: "Re: [OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)"</a>
<li><strong>Previous message:</strong> <a href="11991.php">Damien Hocking: "[OMPI users] CMake-Windows build of 1.41 with Fortran bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11993.php">Shiqing Fan: "Re: [OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)"</a>
<li><strong>Reply:</strong> <a href="11993.php">Shiqing Fan: "Re: [OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just checked out OpenMPI trunk (3 feb 2010) after continuing my
<br>
adventures from the 19th of January
<br>
(<a href="http://www.open-mpi.org/community/lists/users/2010/01/11810.php">http://www.open-mpi.org/community/lists/users/2010/01/11810.php</a>,
<br>
&quot;Win32 compilation broken (MSVC2008, OpenMPI1.4.1)&quot;)
<br>
<p>Every time I try to get even a simple mpi application to compile I get
<br>
linker errors (in this case about _ompi_mpi_double, _ompi_mpi_int and
<br>
_omp_mpi_comm_world being unresolved external symbols) even when
<br>
libmpi.lib and libmpi_cxx.lib are added as additional dependencies).
<br>
<p>Hell, even the most simple:
<br>
#include &lt;mpi.h&gt;
<br>
#pragma comment(lib, &quot;libmpi.lib&quot;)
<br>
int main(int argc, char* argv[]) {
<br>
&nbsp;&nbsp;int n = 0;
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;n);
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>gives a linker error when using shared libraries about
<br>
_ompi_mpi_comm_world. The symbol is defined however in libmpi.lib, as
<br>
witnessed by dumpbin. /me is really confused now.
<br>
<p>While looking through the code of openmpi I came across a few
<br>
interesting warnings, see below:
<br>
<p>warning C4013: 'opal_event_warn' undefined; assuming extern returning
<br>
int	opal\event\WIN32-Code\win32.c	168
<br>
warning C4700: uninitialized local variable 'headdir'
<br>
used	orte\util\hnp_contact.c	239
<br>
<p>warning LNK4049: locally defined symbol _ompi_cr_continue_like_restart
<br>
imported	btl_sm.obj
<br>
warning LNK4049: locally defined symbol _ompi_cr_continue_like_restart
<br>
imported	pml_ob1.obj
<br>
warning LNK4217: locally defined symbol _ompi_cr_continue_like_restart
<br>
imported in function _mca_bml_r2_ft_event bml_r2_ft.obj
<br>
warning LNK4217: locally defined symbol _ompi_cr_continue_like_restart
<br>
imported in function _mca_mpool_sm_module_init mpool_sm_module.obj
<br>
<p>warning C4273: '_isatty' : inconsistent dll linkage	show_help_lex.c
<br>
warning C4273: '_isatty' : inconsistent dll linkage	keyval_lex.c
<br>
warning C4273: 'MPI::ARGV_NULL' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	147
<br>
warning C4273: 'MPI::ARGVS_NULL' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	148
<br>
warning C4273: 'MPI::BAND' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	123
<br>
warning C4273: 'MPI::BOOL' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	107
<br>
warning C4273: 'MPI::BOR' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	124
<br>
warning C4273: 'MPI::BOTTOM' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	45
<br>
warning C4273: 'MPI::BXOR' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	125
<br>
warning C4273: 'MPI::BYTE' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	66
<br>
warning C4273: 'MPI::CHAR' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	54
<br>
warning C4273: 'MPI::COMM_NULL' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	137
<br>
warning C4273: 'MPI::COMM_SELF' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	114
<br>
warning C4273: 'MPI::COMM_WORLD' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	113
<br>
warning C4273: 'MPI::COMPLEX' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	108
<br>
warning C4273: 'MPI::DATATYPE_NULL' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	138
<br>
warning C4273: 'MPI::DOUBLE' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	64
<br>
warning C4273: 'MPI::DOUBLE_COMPLEX' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	109
<br>
warning C4273: 'MPI::DOUBLE_INT' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	72
<br>
warning C4273: 'MPI::ERRHANDLER_NULL' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	141
<br>
warning C4273: 'MPI::ERRORS_ARE_FATAL' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	49
<br>
warning C4273: 'MPI::ERRORS_RETURN' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	50
<br>
warning C4273: 'MPI::ERRORS_THROW_EXCEPTIONS' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	51
<br>
warning C4273: 'MPI::FILE_NULL' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	143
<br>
warning C4273: 'MPI::FLOAT' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	63
<br>
warning C4273: 'MPI::FLOAT_INT' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	71
<br>
warning C4273: 'MPI::GROUP_EMPTY' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	151
<br>
warning C4273: 'MPI::GROUP_NULL' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	132
<br>
warning C4273: 'MPI::IN_PLACE' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	46
<br>
warning C4273: 'MPI::INFO_NULL' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	134
<br>
warning C4273: 'MPI::INT' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	56
<br>
warning C4273: 'MPI::LAND' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	126
<br>
warning C4273: 'MPI::LB' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	155
<br>
warning C4273: 'MPI::LONG' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	57
<br>
warning C4273: 'MPI::LONG_DOUBLE' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	65
<br>
warning C4273: 'MPI::LONG_DOUBLE_COMPLEX' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	110
<br>
warning C4273: 'MPI::LONG_DOUBLE_INT' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	76
<br>
warning C4273: 'MPI::LONG_INT' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	73
<br>
warning C4273: 'MPI::LONG_LONG' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	104
<br>
warning C4273: 'MPI::LOR' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	127
<br>
warning C4273: 'MPI::LXOR' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	128
<br>
warning C4273: 'MPI::MAX' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	117
<br>
warning C4273: 'MPI::MAXLOC' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	121
<br>
warning C4273: 'MPI::MIN' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	118
<br>
warning C4273: 'MPI::MINLOC' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	122
<br>
warning C4273: 'MPI::OP_NULL' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	140
<br>
warning C4273: 'MPI::PACKED' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	67
<br>
warning C4273: 'MPI::PROD' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	120
<br>
warning C4273: 'MPI::REPLACE' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	129
<br>
warning C4273: 'MPI::REQUEST_NULL' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	139
<br>
warning C4273: 'MPI::SHORT' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	55
<br>
warning C4273: 'MPI::SHORT_INT' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	75
<br>
warning C4273: 'MPI::SIGNED_CHAR' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	58
<br>
warning C4273: 'MPI::SUM' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	119
<br>
warning C4273: 'MPI::TWOINT' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	74
<br>
warning C4273: 'MPI::UB' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	154
<br>
warning C4273: 'MPI::UNSIGNED' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	61
<br>
warning C4273: 'MPI::UNSIGNED_CHAR' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	59
<br>
warning C4273: 'MPI::UNSIGNED_LONG' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	62
<br>
warning C4273: 'MPI::UNSIGNED_LONG_LONG' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	103
<br>
warning C4273: 'MPI::UNSIGNED_SHORT' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	60
<br>
warning C4273: 'MPI::WCHAR' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	68
<br>
warning C4273: 'MPI::WIN_NULL' : inconsistent dll
<br>
linkage	ompi\mpi\cxx\mpicxx.cc	133
<br>
warning C4273: 'MPIR_Breakpoint' : inconsistent dll
<br>
linkage	orte\tools\orterun\debuggers.c	732
<br>
warning C4273: 'ompi_cr_continue_like_restart' : inconsistent dll
<br>
linkage	ompi\runtime\ompi_cr.c	71
<br>
warning C4273: 'ompi_info_component_map_t_class' : inconsistent dll
<br>
linkage	ompi\tools\ompi_info\components.c	141
<br>
warning C4273: 'orterun_globals' : inconsistent dll
<br>
linkage	orte\tools\orterun\orterun.c	130
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11993.php">Shiqing Fan: "Re: [OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)"</a>
<li><strong>Previous message:</strong> <a href="11991.php">Damien Hocking: "[OMPI users] CMake-Windows build of 1.41 with Fortran bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11993.php">Shiqing Fan: "Re: [OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)"</a>
<li><strong>Reply:</strong> <a href="11993.php">Shiqing Fan: "Re: [OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)"</a>
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
