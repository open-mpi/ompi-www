<?
$subject_val = "Re: [OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 13:12:33 2010" -->
<!-- isoreceived="20100203181233" -->
<!-- sent="Wed, 03 Feb 2010 19:10:38 +0100" -->
<!-- isosent="20100203181038" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)" -->
<!-- id="4B69BC1E.7070107_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2401d8be1002030939t470aa7c4yb7c03d280d0d6cef_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-03 13:10:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11994.php">Shiqing Fan: "Re: [OMPI users] CMake-Windows build of 1.41 with Fortran bindings"</a>
<li><strong>Previous message:</strong> <a href="11992.php">T. Farago: "[OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)"</a>
<li><strong>In reply to:</strong> <a href="11992.php">T. Farago: "[OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I don't think those warnings could cause your linker problem.
<br>
<p>My suggestion is to just use the compiler wrappers that built with Open 
<br>
MPI, there are a few settings that you could have missed in your Visual 
<br>
Studio configurations. To see what compiler/linker options that used in 
<br>
the wrappers, you can simply run the wrapper with option '--showme', 
<br>
e.g. &quot;mpicc --showme&quot;, the output usually looks like:
<br>
<p>---------------------------------------------------------------------------------------------------
<br>
cl.exe /I&quot;C:\Program Files\OpenMPI_v1.4.1-win32\include&quot; /TC /D 
<br>
&quot;OMPI_IMPORTS&quot; /D &quot;OPAL_IMPORTS&quot; /D &quot;ORTE_IMPORTS&quot; /link 
<br>
/LIBPATH:&quot;C:\Program Files\OpenMPI_v1.4.1-win32\lib&quot; libmpid.lib 
<br>
libopen-pald.lib libopen-rted.lib advapi32.lib Ws2_32.lib shlwapi.lib
<br>
---------------------------------------------------------------------------------------------------
<br>
<p>I guess that you probably missed the &quot;Preprocessor definitions&quot;, i.e. 
<br>
&quot;OMPI_IMPORTS&quot;, &quot;OPAL_IMPORTS&quot; and &quot;ORTE_IMPORTS&quot;. If you add them into 
<br>
your Visual Studio configuration, it should work.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p><p>T. Farago wrote:
<br>
<span class="quotelev1">&gt; I just checked out OpenMPI trunk (3 feb 2010) after continuing my
</span><br>
<span class="quotelev1">&gt; adventures from the 19th of January
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/community/lists/users/2010/01/11810.php">http://www.open-mpi.org/community/lists/users/2010/01/11810.php</a>,
</span><br>
<span class="quotelev1">&gt; &quot;Win32 compilation broken (MSVC2008, OpenMPI1.4.1)&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Every time I try to get even a simple mpi application to compile I get
</span><br>
<span class="quotelev1">&gt; linker errors (in this case about _ompi_mpi_double, _ompi_mpi_int and
</span><br>
<span class="quotelev1">&gt; _omp_mpi_comm_world being unresolved external symbols) even when
</span><br>
<span class="quotelev1">&gt; libmpi.lib and libmpi_cxx.lib are added as additional dependencies).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hell, even the most simple:
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #pragma comment(lib, &quot;libmpi.lib&quot;)
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev1">&gt;   int n = 0;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;n);
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gives a linker error when using shared libraries about
</span><br>
<span class="quotelev1">&gt; _ompi_mpi_comm_world. The symbol is defined however in libmpi.lib, as
</span><br>
<span class="quotelev1">&gt; witnessed by dumpbin. /me is really confused now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While looking through the code of openmpi I came across a few
</span><br>
<span class="quotelev1">&gt; interesting warnings, see below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; warning C4013: 'opal_event_warn' undefined; assuming extern returning
</span><br>
<span class="quotelev1">&gt; int	opal\event\WIN32-Code\win32.c	168
</span><br>
<span class="quotelev1">&gt; warning C4700: uninitialized local variable 'headdir'
</span><br>
<span class="quotelev1">&gt; used	orte\util\hnp_contact.c	239
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; warning LNK4049: locally defined symbol _ompi_cr_continue_like_restart
</span><br>
<span class="quotelev1">&gt; imported	btl_sm.obj
</span><br>
<span class="quotelev1">&gt; warning LNK4049: locally defined symbol _ompi_cr_continue_like_restart
</span><br>
<span class="quotelev1">&gt; imported	pml_ob1.obj
</span><br>
<span class="quotelev1">&gt; warning LNK4217: locally defined symbol _ompi_cr_continue_like_restart
</span><br>
<span class="quotelev1">&gt; imported in function _mca_bml_r2_ft_event bml_r2_ft.obj
</span><br>
<span class="quotelev1">&gt; warning LNK4217: locally defined symbol _ompi_cr_continue_like_restart
</span><br>
<span class="quotelev1">&gt; imported in function _mca_mpool_sm_module_init mpool_sm_module.obj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; warning C4273: '_isatty' : inconsistent dll linkage	show_help_lex.c
</span><br>
<span class="quotelev1">&gt; warning C4273: '_isatty' : inconsistent dll linkage	keyval_lex.c
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::ARGV_NULL' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	147
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::ARGVS_NULL' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	148
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::BAND' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	123
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::BOOL' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	107
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::BOR' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	124
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::BOTTOM' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	45
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::BXOR' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	125
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::BYTE' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	66
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::CHAR' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	54
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::COMM_NULL' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	137
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::COMM_SELF' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	114
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::COMM_WORLD' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	113
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::COMPLEX' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	108
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::DATATYPE_NULL' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	138
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::DOUBLE' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	64
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::DOUBLE_COMPLEX' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	109
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::DOUBLE_INT' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	72
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::ERRHANDLER_NULL' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	141
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::ERRORS_ARE_FATAL' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	49
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::ERRORS_RETURN' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	50
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::ERRORS_THROW_EXCEPTIONS' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	51
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::FILE_NULL' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	143
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::FLOAT' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	63
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::FLOAT_INT' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	71
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::GROUP_EMPTY' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	151
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::GROUP_NULL' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	132
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::IN_PLACE' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	46
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::INFO_NULL' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	134
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::INT' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	56
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::LAND' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	126
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::LB' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	155
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::LONG' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	57
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::LONG_DOUBLE' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	65
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::LONG_DOUBLE_COMPLEX' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	110
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::LONG_DOUBLE_INT' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	76
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::LONG_INT' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	73
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::LONG_LONG' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	104
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::LOR' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	127
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::LXOR' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	128
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::MAX' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	117
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::MAXLOC' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	121
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::MIN' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	118
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::MINLOC' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	122
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::OP_NULL' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	140
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::PACKED' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	67
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::PROD' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	120
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::REPLACE' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	129
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::REQUEST_NULL' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	139
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::SHORT' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	55
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::SHORT_INT' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	75
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::SIGNED_CHAR' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	58
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::SUM' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	119
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::TWOINT' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	74
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::UB' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	154
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::UNSIGNED' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	61
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::UNSIGNED_CHAR' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	59
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::UNSIGNED_LONG' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	62
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::UNSIGNED_LONG_LONG' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	103
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::UNSIGNED_SHORT' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	60
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::WCHAR' : inconsistent dll linkage	ompi\mpi\cxx\mpicxx.cc	68
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPI::WIN_NULL' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\mpi\cxx\mpicxx.cc	133
</span><br>
<span class="quotelev1">&gt; warning C4273: 'MPIR_Breakpoint' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	orte\tools\orterun\debuggers.c	732
</span><br>
<span class="quotelev1">&gt; warning C4273: 'ompi_cr_continue_like_restart' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\runtime\ompi_cr.c	71
</span><br>
<span class="quotelev1">&gt; warning C4273: 'ompi_info_component_map_t_class' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	ompi\tools\ompi_info\components.c	141
</span><br>
<span class="quotelev1">&gt; warning C4273: 'orterun_globals' : inconsistent dll
</span><br>
<span class="quotelev1">&gt; linkage	orte\tools\orterun\orterun.c	130
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11994.php">Shiqing Fan: "Re: [OMPI users] CMake-Windows build of 1.41 with Fortran bindings"</a>
<li><strong>Previous message:</strong> <a href="11992.php">T. Farago: "[OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)"</a>
<li><strong>In reply to:</strong> <a href="11992.php">T. Farago: "[OMPI users] OpenMPI Win32, compiling (warnings) and usage (link errors, incorrect 	cmake)"</a>
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
