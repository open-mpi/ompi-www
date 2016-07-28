<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec 13 18:15:35 2006" -->
<!-- isoreceived="20061213231535" -->
<!-- sent="Wed, 13 Dec 2006 18:15:22 -0500" -->
<!-- isosent="20061213231522" -->
<!-- name="Dennis McRitchie" -->
<!-- email="dmcr_at_[hidden]" -->
<!-- subject="[OMPI users] Multiple definition of `malloc' and other symbols when doing static builds with mpif90" -->
<!-- id="5927226A3D285F40AB95CA2A3D2369D4C7A7DA_at_EXCLUSTER.pu.win.princeton.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Dennis McRitchie (<em>dmcr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-13 18:15:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2361.php">Dirk J. Evers: "[OMPI users] OMPI tested on Solaris 10 for AMD CPUs?"</a>
<li><strong>Previous message:</strong> <a href="2359.php">Allen Barnett: "[OMPI users] Relocating an Installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2369.php">Brian W. Barrett: "Re: [OMPI users] Multiple definition of `malloc' and other symbols when doing static builds with mpif90"</a>
<li><strong>Reply:</strong> <a href="2369.php">Brian W. Barrett: "Re: [OMPI users] Multiple definition of `malloc' and other symbols when doing static builds with mpif90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When creating a static build of an MPI program, I get a number of fatal
<br>
error messages, as listed below. They are all regarding conflicts
<br>
between duplicate definitions and different sizes of malloc, free,
<br>
realloc, etc. for the RHEL4 and openmpi versions of these functions. I
<br>
could build openmpi with --without-memorymanager, but we are using
<br>
infiniband and need the memory manager features.
<br>
<p>I am using openmpi v1.1.2 built against the Intel fortran compiler v9.1
<br>
on RHEL4.
<br>
<p>&quot;/usr/local/openmpi-intel/bin/mpif90 -showme&quot; returns:
<br>
<p>ifort -I/usr/local/openmpi-1.1.2-intel/include -pthread
<br>
-I/usr/local/openmpi-1.1.2-intel/lib
<br>
-L/usr/local/openmpi-1.1.2-intel/lib -lmpi_f90 -lmpi -lorte -lopal -lrt
<br>
-lpbs -ldl -Wl,--export-dynamic -lnsl -lutil -ldl
<br>
<p>The offending line is the one that links the program. I've added the -v
<br>
option so you can see all the utilities invoked below.
<br>
<p>Is there any way to prevent this behavior?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dennis
<br>
----------------------------------------------------
<br>
<p>/usr/local/openmpi-intel/bin/mpif90 -v -traceback -mp -warn all -module
<br>
mod -X -I. -static  -g   -o OFDFT  obj/dcstep.o  obj/dcsrch.o
<br>
obj/F77flush.o  obj/Constants.o  obj/Timer.o  obj/Fourier.o
<br>
obj/MathFunctions.o  obj/DataTypes.o  obj/GridUtilities.o  obj/System.o
<br>
obj/Output.o  obj/Ewald.o  obj/FunctionalDataStruct.o
<br>
obj/FunctionalPotential.o  obj/FunctionalKinetic.o  obj/Calculator.o
<br>
obj/DiscretizePDE.o  obj/DiscretizeOFDFT.o  obj/Multigrid.o
<br>
obj/MultigridOptimizers.o  obj/CellOptimizers.o  obj/IonOptimizers.o
<br>
obj/RhoOptimizers.o  obj/Optimizer.o  obj/ReadInputFiles.o
<br>
obj/InitializeInputs.o  obj/OFDFT.o -L/usr/local/intel/lib -lrfftw_mpi
<br>
-lfftw_mpi -lrfftw -lfftw
<br>
Version 9.1
<br>
/opt/intel/fc/9.1.039/bin/fortcom    -mP1OPT_version=910
<br>
-mGLOB_source_language=GLOB_SOURCE_LANGUAGE_F90 -mGLOB_tune_for_fort
<br>
-mGLOB_use_fort_dope_vector -mP2OPT_static_promotion
<br>
-mP1OPT_print_version=FALSE -mP3OPT_use_mspp_call_convention
<br>
-mCG_use_gas_got_workaround=F -mP2OPT_align_option_used=TRUE
<br>
&quot;-mGLOB_options_string=-I/usr/local/openmpi-1.1.2-intel/include
<br>
-I/usr/local/openmpi-1.1.2-intel/lib -I. -pthread -v -traceback -mp
<br>
-warn all -module mod -X -static -g -o OFDFT -L/usr/local/intel/lib
<br>
-lrfftw_mpi -lfftw_mpi -lrfftw -lfftw
<br>
-L/usr/local/openmpi-1.1.2-intel/lib -lmpi_f90 -lmpi -lorte -lopal -lrt
<br>
-lpbs -ldl -Wl,--export-dynamic -lnsl -lutil -ldl&quot;
<br>
-mGLOB_cxx_limited_range=FALSE -mGLOB_traceback
<br>
-mP3OPT_emit_line_numbers -mGLOB_debug_target=GLOB_DEBUG_TARGET_ALL
<br>
-mGLOB_debug_format=GLOB_DEBUG_FORMAT_DWARF20
<br>
-mGLOB_as_output_backup_file_name=/tmp/ifortABDp1Pas_.s
<br>
-mGLOB_machine_model=GLOB_MACHINE_MODEL_IA32_NONE
<br>
-mGLOB_use_base_pointer -mGLOB_maintain_precision
<br>
-mGLOB_precision_mask=0xffffffff -mP2OPT_subs_out_of_bound=FALSE
<br>
-mIPOPT_ninl_user_level=2 -mIPOPT_activate -mP2OPT_hlo -mIPOPT_link
<br>
-mIPOPT_ipo_activate -mIPOPT_ipo_mo_activate -mIPOPT_ipo_mo_nfiles=1
<br>
-mIPOPT_source_files_list=/tmp/ifortighInHlst
<br>
-mIPOPT_short_data_info=/tmp/ifort0zku2Ysdata
<br>
-mIPOPT_link_script_file=/tmp/ifort4SghHgscript -mIPOPT_global_data
<br>
&quot;-mIPOPT_link_version=2.15.92.0.220040927&quot;
<br>
&quot;-mIPOPT_cmdline_link=&quot;/usr/lib/gcc/i386-redhat-linux/3.4.6/../../../crt
<br>
1.o&quot; &quot;/usr/lib/gcc/i386-redhat-linux/3.4.6/../../../crti.o&quot;
<br>
&quot;/usr/lib/gcc/i386-redhat-linux/3.4.6/crtbeginT.o&quot; &quot;-static&quot; &quot;-m&quot;
<br>
&quot;elf_i386&quot; &quot;-o&quot; &quot;OFDFT&quot; &quot;/opt/intel/fc/9.1.039/lib/for_main.o&quot;
<br>
&quot;obj/dcstep.o&quot; &quot;obj/dcsrch.o&quot; &quot;obj/F77flush.o&quot; &quot;obj/Constants.o&quot;
<br>
&quot;obj/Timer.o&quot; &quot;obj/Fourier.o&quot; &quot;obj/MathFunctions.o&quot; &quot;obj/DataTypes.o&quot;
<br>
&quot;obj/GridUtilities.o&quot; &quot;obj/System.o&quot; &quot;obj/Output.o&quot; &quot;obj/Ewald.o&quot;
<br>
&quot;obj/FunctionalDataStruct.o&quot; &quot;obj/FunctionalPotential.o&quot;
<br>
&quot;obj/FunctionalKinetic.o&quot; &quot;obj/Calculator.o&quot; &quot;obj/DiscretizePDE.o&quot;
<br>
&quot;obj/DiscretizeOFDFT.o&quot; &quot;obj/Multigrid.o&quot; &quot;obj/MultigridOptimizers.o&quot;
<br>
&quot;obj/CellOptimizers.o&quot; &quot;obj/IonOptimizers.o&quot; &quot;obj/RhoOptimizers.o&quot;
<br>
&quot;obj/Optimizer.o&quot; &quot;obj/ReadInputFiles.o&quot;&quot;obj/InitializeInputs.o&quot;
<br>
&quot;obj/OFDFT.o&quot; &quot;-L/usr/local/intel/lib&quot; &quot;-lrfftw_mpi&quot; &quot;-lfftw_mpi&quot;
<br>
&quot;-lrfftw&quot; &quot;-lfftw&quot; &quot;-L/usr/local/openmpi-1.1.2-intel/lib&quot; &quot;-lmpi_f90&quot;
<br>
&quot;-lmpi&quot; &quot;-lorte&quot; &quot;-lopal&quot; &quot;-lrt&quot; &quot;-lpbs&quot; &quot;-ldl&quot; &quot;--export-dynamic&quot;
<br>
&quot;-lnsl&quot; &quot;-lutil&quot; &quot;-ldl&quot; &quot;-L/opt/intel/fc/9.1.039/lib&quot;
<br>
&quot;-L/usr/lib/gcc/i386-redhat-linux/3.4.6/&quot;
<br>
&quot;-L/usr/lib/gcc/i386-redhat-linux/3.4.6/../../../&quot; &quot;-lifport&quot;
<br>
&quot;-lifcoremt&quot; &quot;-limf&quot; &quot;-lm&quot; &quot;-lipgo&quot; &quot;-lpthread&quot; &quot;-lirc&quot; &quot;-ldl&quot; &quot;-lc&quot;
<br>
&quot;-lgcc&quot; &quot;-lgcc_eh&quot; &quot;-lirc_s&quot; &quot;-ldl&quot; &quot;-lc&quot;
<br>
&quot;/usr/lib/gcc/i386-redhat-linux/3.4.6/crtend.o&quot;
<br>
&quot;/usr/lib/gcc/i386-redhat-linux/3.4.6/../../../crtn.o&quot;&quot; -mIPOPT_save_il0
<br>
-mIPOPT_il_in_obj -mIPOPT_ipo_activate_warn=FALSE
<br>
-mIPOPT_obj_output_file_name=/tmp/ipo_ifortobAc47.o
<br>
&quot;-mGLOB_linker_version=2.15.92.0.2 20040927&quot;
<br>
-mP3OPT_asm_target=P3OPT_ASM_TARGET_GAS
<br>
-mGLOB_obj_output_file=/tmp/ipo_ifortobAc47.o
<br>
-mP1OPT_source_file_name=/tmp/ipo_ifortobAc47.f obj/dcstep.o
<br>
obj/dcsrch.o obj/F77flush.o obj/Constants.o obj/Timer.o obj/Fourier.o
<br>
obj/MathFunctions.o obj/DataTypes.o obj/GridUtilities.o obj/System.o
<br>
obj/Output.o obj/Ewald.o obj/FunctionalDataStruct.o
<br>
obj/FunctionalPotential.o obj/FunctionalKinetic.o obj/Calculator.o
<br>
obj/DiscretizePDE.o obj/DiscretizeOFDFT.o obj/Multigrid.o
<br>
obj/MultigridOptimizers.o obj/CellOptimizers.o obj/IonOptimizers.o
<br>
obj/RhoOptimizers.o obj/Optimizer.o obj/ReadInputFiles.o
<br>
obj/InitializeInputs.o obj/OFDFT.o
<br>
-mIPOPT_object_files=/tmp/ifortUc3WIptxt
<br>
ld    /usr/lib/gcc/i386-redhat-linux/3.4.6/../../../crt1.o
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../../crti.o
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/crtbeginT.o -static -melf_i386 -o
<br>
OFDFT /opt/intel/fc/9.1.039/lib/for_main.o obj/dcstep.o obj/dcsrch.o
<br>
obj/F77flush.o obj/Constants.o obj/Timer.o obj/Fourier.o
<br>
obj/MathFunctions.o obj/DataTypes.o obj/GridUtilities.o obj/System.o
<br>
obj/Output.o obj/Ewald.o obj/FunctionalDataStruct.o
<br>
obj/FunctionalPotential.o obj/FunctionalKinetic.o obj/Calculator.o
<br>
obj/DiscretizePDE.o obj/DiscretizeOFDFT.o obj/Multigrid.o
<br>
obj/MultigridOptimizers.o obj/CellOptimizers.o obj/IonOptimizers.o
<br>
obj/RhoOptimizers.o obj/Optimizer.o obj/ReadInputFiles.o
<br>
obj/InitializeInputs.o obj/OFDFT.o -L/usr/local/intel/lib -lrfftw_mpi
<br>
-lfftw_mpi -lrfftw -lfftw -L/usr/local/openmpi-1.1.2-intel/lib -lmpi_f90
<br>
-lmpi -lorte -lopal -lrt -lpbs -ldl --export-dynamic -lnsl -lutil -ldl
<br>
-L/opt/intel/fc/9.1.039/lib -L/usr/lib/gcc/i386-redhat-linux/3.4.6/
<br>
-L/usr/lib/gcc/i386-redhat-linux/3.4.6/../../../ -lifport -lifcoremt
<br>
-limf -lm -lipgo -lpthread -lirc -ldl -lc -lgcc -lgcc_eh -lirc_s -ldl
<br>
-lc /usr/lib/gcc/i386-redhat-linux/3.4.6/crtend.o
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../../crtn.o
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(ltdl.o)(.text+0xb1): In
<br>
function `sys_dl_open':
<br>
: warning: Using 'dlopen' in statically linked applications requires at
<br>
runtime the shared libraries from the glibc version used for linking
<br>
/usr/local/openmpi-1.1.2-intel/lib/liborte.a(sys_info.o)(.text+0x12b):
<br>
In function `orte_sys_info':
<br>
: warning: Using 'getpwuid' in statically linked applications requires
<br>
at runtime theshared libraries from the glibc version used for linking
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(if.o)(.text+0x44d): In
<br>
function `opal_ifislocal':
<br>
: warning: Using 'gethostbyname' in statically linked applications
<br>
requires at runtime the shared libraries from the glibc version used for
<br>
linking
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)(.text+0x
<br>
14fc): In function `free':
<br>
: multiple definition of `free'
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o)(.text+0x602):
<br>
first defined here
<br>
ld: Warning: size of symbol `free' changed from 196 in
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o) to 175 in
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)(.text+0x
<br>
3058): In function `malloc':
<br>
: multiple definition of `malloc'
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o)(.text+0x6c6):
<br>
first defined here
<br>
ld: Warning: size of symbol `malloc' changed from 328 in
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o) to 373 in
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)(.text+0x
<br>
360c): In function `realloc':
<br>
: multiple definition of `realloc'
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o)(.text+0x48e):
<br>
first defined here
<br>
ld: Warning: size of symbol `realloc' changed from 372 in
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o) to 667 in
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)(.text+0x
<br>
424): In function `_int_new_arena':
<br>
: multiple definition of `_int_new_arena'
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o)(.text+0x9aa):
<br>
first defined here
<br>
ld: Warning: size of symbol `_int_new_arena' changed from 392 in
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o) to 180 in
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)(.text+0x
<br>
dbc): In function `_int_free':
<br>
: multiple definition of `_int_free'
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o)(.text+0x1bda)
<br>
: first defined here
<br>
ld: Warning: size of symbol `_int_free' changed from 318 in
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o) to 1658 in
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)(.text+0x
<br>
15ac): In function `_int_malloc':
<br>
: multiple definition of `_int_malloc'
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o)(.text+0xc48):
<br>
first defined here
<br>
ld: Warning: size of symbol `_int_malloc' changed from 1358 in
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o) to 3101 in
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)(.text+0x
<br>
229c): In function `_int_memalign':
<br>
: multiple definition of `_int_memalign'
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o)(.text+0x2020)
<br>
: first defined here
<br>
ld: Warning: size of symbol `_int_memalign' changed from 520 in
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o) to 413 in
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)(.text+0x
<br>
243c): In function `_int_valloc':
<br>
: multiple definition of `_int_valloc'
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o)(.text+0x3148)
<br>
: first defined here
<br>
ld: Warning: size of symbol `_int_valloc' changed from 56 in
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o) to 63 in
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)(.text+0x
<br>
25b0): In function `_int_realloc':
<br>
: multiple definition of `_int_realloc'
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o)(.text+0x18c8)
<br>
: first defined here
<br>
ld: Warning: size of symbol `_int_realloc' changed from 786 in
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o) to 1065 in
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)(.text+0x
<br>
38a8): In function `__malloc_check_init':
<br>
: multiple definition of `__malloc_check_init'
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o)(.text+0x3f74)
<br>
: first defined here
<br>
ld: Warning: size of symbol `__malloc_check_init' changed from 136 in
<br>
/usr/local/openmpi-1.1.2-intel/lib/libopal.a(lt1-malloc.o) to 154 in
<br>
/usr/lib/gcc/i386-redhat-linux/3.4.6/../../..//libc.a(malloc.o)
<br>
rm /tmp/ifortKvfupQgnudirs
<br>
<p>rm /tmp/ifortUc3WIptxt
<br>
<p>rm /tmp/ifortighInHlst
<br>
<p>rm /tmp/ifort0zku2Ysdata
<br>
<p>rm /tmp/ifort4SghHgscript
<br>
<p>rm /tmp/ipo_ifortobAc47.o
<br>
<p>rm /tmp/ifortU0T4lygas
<br>
<p>rm /tmp/ifortABDp1Pas_.s
<br>
<p>rm /tmp/ifortcqBMG7ldashv
<br>
<p>rm /tmp/ifortQFeRmpgnudirs
<br>
<p>rm /tmp/ifortgAJO3Garg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2361.php">Dirk J. Evers: "[OMPI users] OMPI tested on Solaris 10 for AMD CPUs?"</a>
<li><strong>Previous message:</strong> <a href="2359.php">Allen Barnett: "[OMPI users] Relocating an Installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2369.php">Brian W. Barrett: "Re: [OMPI users] Multiple definition of `malloc' and other symbols when doing static builds with mpif90"</a>
<li><strong>Reply:</strong> <a href="2369.php">Brian W. Barrett: "Re: [OMPI users] Multiple definition of `malloc' and other symbols when doing static builds with mpif90"</a>
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
