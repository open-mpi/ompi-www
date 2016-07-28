<?
$subject_val = "[OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 06:16:34 2011" -->
<!-- isoreceived="20110407101634" -->
<!-- sent="Thu, 07 Apr 2011 12:16:27 +0200" -->
<!-- isosent="20110407101627" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers" -->
<!-- id="4D9D8EFB.4090007_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-07 06:16:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16180.php">Terry Dontje: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16178.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16182.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>Reply:</strong> <a href="16182.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers,
<br>
<p>We tried to build OpenMPI 1.5.3 including Support for Platform LSF using 
<br>
the Sun Studio (=Oracle Solaris Studio now) /12.2 and the configure 
<br>
stage failed.
<br>
<p>1. Used flags:
<br>
<p>./configure --with-lsf --with-openib --with-devel-headers 
<br>
--enable-contrib-no-build=vt --enable-mpi-threads CFLAGS=&quot;-fast 
<br>
-xtarget=nehalem -m64&quot;   CXXFLAGS=&quot;-fast -xtarget=nehalem -m64&quot; 
<br>
FFLAGS=&quot;-fast -xtarget=nehalem&quot; -m64   FCFLAGS=&quot;-fast -xtarget=nehalem 
<br>
-m64&quot;   F77=f95 LDFLAGS=&quot;-fast -xtarget=nehalem -m64&quot; 
<br>
--prefix=/..../openmpi-1.5.3mt/linux64/studio
<br>
<p>(note the Support for LSF enabled by --with-lsf). The compiler envvars 
<br>
are set as following:
<br>
$ echo $CC $FC $CXX
<br>
cc f95 CC
<br>
<p>The compiler info: (cc -V, CC -V)
<br>
cc: Sun C 5.11 Linux_i386 2010/08/13
<br>
CC: Sun C++ 5.11 Linux_i386 2010/08/13
<br>
<p><p>2. The configure error was:
<br>
##############################################
<br>
checking for lsb_launch in -lbat... no
<br>
configure: WARNING: LSF support requested (via --with-lsf) but not found.
<br>
configure: error: Aborting.
<br>
##############################################
<br>
<p><p>3. In the config.log (see the config.log.error) there is more info about 
<br>
the problem. crucial info is:
<br>
##############################################
<br>
/opt/lsf/8.0/linux2.6-glibc2.3-x86_64/lib/libbat.so: undefined reference 
<br>
to `ceil'
<br>
##############################################
<br>
<p>4. Googling vor `ceil' results e.g. in 
<br>
<a href="http://www.cplusplus.com/reference/clibrary/cmath/ceil/">http://www.cplusplus.com/reference/clibrary/cmath/ceil/</a>
<br>
<p>so, the attached ceil.c example file *can* be compiled by &quot;CC&quot; (the 
<br>
Studio C++ compiler), but *cannot* be compiled using &quot;cc&quot; (the Studio C 
<br>
compiler).
<br>
$ CC ceil.c
<br>
$ cc ceil.c
<br>
<p><p>5. Looking into configure.log and searching on `ceil' results: there was 
<br>
a check for the availability of `ceil' for the C compiler (see 
<br>
config.log.ceil). This check says `ceil' is *available* for the &quot;cc&quot; 
<br>
Compiler, which is *wrong*, cf. (4).
<br>
<p>So, is there an error in the configure stage? Or either the checks in 
<br>
config.log.ceil does not rely on the avilability of the `ceil' funcion 
<br>
in the C compiler?
<br>
<p>Best wishes,
<br>
Paul Kapinos
<br>
<p><p><p><p><p><p>P.S. Note in in the past we build many older versions of OpenMPI with no 
<br>
support for LSF and no such problems
<br>
<p><p><p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
configure:84213: cc -o conftest -DNDEBUG  -fast -xtarget=nehalem -m64   -mt -I/home/pk224850/OpenMPI/openmpi-1.5.3_linux64_studio/opal/mca/paffinity/hwloc/hwloc/include   -I/opt/lsf/8.0/include  -fast -xtarget=nehalem -m64    -L/opt/lsf/8.0/linux2.6-glibc2.3-x86_64/lib conftest.c -lbat -llsf -lnsl  -lutil  &gt;&amp;5
<br>
cc: Warning: -xchip=native detection failed, falling back to -xchip=generic
<br>
&quot;conftest.c&quot;, line 568: warning: statement not reached
<br>
/opt/lsf/8.0/linux2.6-glibc2.3-x86_64/lib/libbat.so: undefined reference to `ceil'
<br>
configure:84213: $? = 2
<br>
configure: failed program was:
<br>
| /* confdefs.h */
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.5.3&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.5.3&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define PACKAGE_URL &quot;&quot;
<br>
| #define OPAL_ARCH &quot;x86_64-unknown-linux-gnu&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define __EXTENSIONS__ 1
<br>
| #define _ALL_SOURCE 1
<br>
| #define _GNU_SOURCE 1
<br>
| #define _POSIX_PTHREAD_SEMANTICS 1
<br>
| #define _TANDEM_SOURCE 1
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 5
<br>
| #define OMPI_RELEASE_VERSION 3
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;3&quot;
<br>
| #define OMPI_RELEASE_DATE &quot;Mar 16, 2011&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 5
<br>
| #define ORTE_RELEASE_VERSION 3
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;3&quot;
<br>
| #define ORTE_RELEASE_DATE &quot;Mar 16, 2011&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 5
<br>
| #define OPAL_RELEASE_VERSION 3
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;3&quot;
<br>
| #define OPAL_RELEASE_DATE &quot;Mar 16, 2011&quot;
<br>
| #define OPAL_ENABLE_MEM_DEBUG 0
<br>
| #define OPAL_ENABLE_MEM_PROFILE 0
<br>
| #define OPAL_ENABLE_DEBUG 0
<br>
| #define OPAL_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OPAL_ENABLE_PTY_SUPPORT 1
<br>
| #define OPAL_ENABLE_HETEROGENEOUS_SUPPORT 0
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define OPAL_ENABLE_FT 0
<br>
| #define OPAL_ENABLE_FT_CR 0
<br>
| #define OPAL_WANT_HOME_CONFIG_FILES 1
<br>
| #define OPAL_ENABLE_IPV6 0
<br>
| #define OPAL_PACKAGE_STRING &quot;Open MPI pk224850_at_[hidden] Distribution&quot;
<br>
| #define OPAL_IDENT_STRING &quot;1.5.3&quot;
<br>
| #define OPAL_MAX_PROCESSOR_NAME 256
<br>
| #define OPAL_MAX_ERROR_STRING 256
<br>
| #define OPAL_MAX_OBJECT_NAME 64
<br>
| #define OPAL_MAX_INFO_KEY 36
<br>
| #define OPAL_MAX_INFO_VAL 256
<br>
| #define OPAL_MAX_PORT_NAME 1024
<br>
| #define OPAL_MAX_DATAREP_STRING 128
<br>
| #define ORTE_DISABLE_FULL_SUPPORT 0
<br>
| #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
<br>
| #define ORTE_ENABLE_MULTICAST 0
<br>
| #define OMPI_WANT_MPI_INTERFACE_WARNING 0
<br>
| #define OMPI_GROUP_SPARSE 0
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_WANT_MPI_CXX_SEEK 1
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OPAL_CC &quot;cc&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define _GNU_SOURCE 1
<br>
| #define OPAL_C_HAVE_BUILTIN_EXPECT 1
<br>
| #define OPAL_C_HAVE_BUILTIN_PREFETCH 0
<br>
| #define OPAL_CC_USE_PRAGMA_IDENT 1
<br>
| #define OPAL_CC_USE_IDENT 0
<br>
| #define OPAL_CC_USE_PRAGMA_COMMENT 
<br>
| #define OPAL_CC_USE_CONST_CHAR_IDENT 0
<br>
| #define HAVE_INT8_T 1
<br>
| #define HAVE_UINT8_T 1
<br>
| #define HAVE_INT16_T 1
<br>
| #define HAVE_UINT16_T 1
<br>
| #define HAVE_INT32_T 1
<br>
| #define HAVE_UINT32_T 1
<br>
| #define HAVE_INT64_T 1
<br>
| #define HAVE_UINT64_T 1
<br>
| #define HAVE_LONG_LONG 1
<br>
| #define HAVE_LONG_DOUBLE 1
<br>
| #define HAVE_FLOAT__COMPLEX 1
<br>
| #define HAVE_DOUBLE__COMPLEX 1
<br>
| #define HAVE_LONG_DOUBLE__COMPLEX 1
<br>
| #define HAVE_INTPTR_T 1
<br>
| #define HAVE_UINTPTR_T 1
<br>
| #define HAVE_MODE_T 1
<br>
| #define HAVE_SSIZE_T 1
<br>
| #define HAVE_PTRDIFF_T 1
<br>
| #define SIZEOF_CHAR 1
<br>
| #define SIZEOF_SHORT 2
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_LONG 8
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define SIZEOF_FLOAT 4
<br>
| #define SIZEOF_DOUBLE 8
<br>
| #define SIZEOF_LONG_DOUBLE 16
<br>
| #define SIZEOF_FLOAT__COMPLEX 8
<br>
| #define SIZEOF_DOUBLE__COMPLEX 16
<br>
| #define SIZEOF_LONG_DOUBLE__COMPLEX 32
<br>
| #define SIZEOF_VOID_P 8
<br>
| #define SIZEOF_SIZE_T 8
<br>
| #define SIZEOF_SSIZE_T 8
<br>
| #define SIZEOF_PTRDIFF_T 8
<br>
| #define SIZEOF_WCHAR_T 4
<br>
| #define OPAL_ALIGNMENT_BOOL 1
<br>
| #define OPAL_ALIGNMENT_INT8 1
<br>
| #define OPAL_ALIGNMENT_INT16 2
<br>
| #define OPAL_ALIGNMENT_INT32 4
<br>
| #define OPAL_ALIGNMENT_INT64 8
<br>
| #define OPAL_ALIGNMENT_CHAR 1
<br>
| #define OPAL_ALIGNMENT_SHORT 2
<br>
| #define OPAL_ALIGNMENT_WCHAR 4
<br>
| #define OPAL_ALIGNMENT_INT 4
<br>
| #define OPAL_ALIGNMENT_LONG 8
<br>
| #define OPAL_ALIGNMENT_LONG_LONG 8
<br>
| #define OPAL_ALIGNMENT_FLOAT 4
<br>
| #define OPAL_ALIGNMENT_DOUBLE 8
<br>
| #define OPAL_ALIGNMENT_LONG_DOUBLE 16
<br>
| #define OPAL_ALIGNMENT_FLOAT_COMPLEX 4
<br>
| #define OPAL_ALIGNMENT_DOUBLE_COMPLEX 8
<br>
| #define OPAL_ALIGNMENT_LONG_DOUBLE_COMPLEX 16
<br>
| #define OPAL_ALIGNMENT_VOID_P 8
<br>
| #define OPAL_NEED_C_BOOL 1
<br>
| #define SIZEOF__BOOL 1
<br>
| #define restrict __restrict__
<br>
| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
| #define OPAL_HAVE_WEAK_SYMBOLS 1
<br>
| #define OPAL_CXX &quot;CC&quot;
<br>
| #define SIZEOF_BOOL 1
<br>
| #define OPAL_ALIGNMENT_CXX_BOOL 1
<br>
| #define OMPI_CXX &quot;CC&quot;
<br>
| #define SIZEOF_BOOL 1
<br>
| #define OPAL_ALIGNMENT_CXX_BOOL 1
<br>
| #define OMPI_HAVE_CXX_EXCEPTION_SUPPORT 0
<br>
| #define OPAL_CXX_USE_PRAGMA_IDENT 1
<br>
| #define OPAL_CXX_USE_IDENT 0
<br>
| #define OPAL_CXX_USE_PRAGMA_COMMENT 
<br>
| #define OPAL_CXX_USE_CONST_CHAR_IDENT 0
<br>
| #define OMPI_CXX_HAVE_BUILTIN_EXPECT 0
<br>
| #define OMPI_CXX_HAVE_BUILTIN_PREFETCH 0
<br>
| #define OMPI_CXX_SUPPORTS_2D_CONST_CAST 1
<br>
| #define OMPI_WANT_CXX_BINDINGS 1
<br>
| #define OPAL_HAVE_ATTRIBUTE 1
<br>
| #define OPAL_HAVE_ATTRIBUTE_ALIGNED 1
<br>
| #define OPAL_HAVE_ATTRIBUTE_ALWAYS_INLINE 1
<br>
| #define OPAL_HAVE_ATTRIBUTE_COLD 0
<br>
| #define OPAL_HAVE_ATTRIBUTE_CONST 1
<br>
| #define OPAL_HAVE_ATTRIBUTE_DEPRECATED 0
<br>
| #define OPAL_HAVE_ATTRIBUTE_DEPRECATED_ARGUMENT 0
<br>
| #define OPAL_HAVE_ATTRIBUTE_FORMAT 0
<br>
| #define OPAL_HAVE_ATTRIBUTE_FORMAT_FUNCPTR 0
<br>
| #define OPAL_HAVE_ATTRIBUTE_HOT 0
<br>
| #define OPAL_HAVE_ATTRIBUTE_MALLOC 1
<br>
| #define OPAL_HAVE_ATTRIBUTE_MAY_ALIAS 0
<br>
| #define OPAL_HAVE_ATTRIBUTE_NO_INSTRUMENT_FUNCTION 0
<br>
| #define OPAL_HAVE_ATTRIBUTE_NONNULL 0
<br>
| #define OPAL_HAVE_ATTRIBUTE_NORETURN 1
<br>
| #define OPAL_HAVE_ATTRIBUTE_NORETURN_FUNCPTR 0
<br>
| #define OPAL_HAVE_ATTRIBUTE_PACKED 1
<br>
| #define OPAL_HAVE_ATTRIBUTE_PURE 1
<br>
| #define OPAL_HAVE_ATTRIBUTE_SENTINEL 0
<br>
| #define OPAL_HAVE_ATTRIBUTE_UNUSED 0
<br>
| #define OPAL_HAVE_ATTRIBUTE_VISIBILITY 1
<br>
| #define OPAL_HAVE_ATTRIBUTE_WARN_UNUSED_RESULT 0
<br>
| #define OPAL_HAVE_ATTRIBUTE_WEAK_ALIAS 0
<br>
| #define OPAL_BUILD_PLATFORM_COMPILER_FAMILYID 7
<br>
| #define OPAL_BUILD_PLATFORM_COMPILER_FAMILYNAME SUN
<br>
| #define OPAL_BUILD_PLATFORM_COMPILER_VERSION 20752
<br>
| #define OPAL_BUILD_PLATFORM_COMPILER_VERSION_STR 0x5110
<br>
| #define OPAL_WANT_SMP_LOCKS 1
<br>
| #define OPAL_ASM_TEXT &quot;.text&quot;
<br>
| #define OPAL_ASM_GLOBAL &quot;.globl&quot;
<br>
| #define OPAL_ASM_LABEL_SUFFIX &quot;:&quot;
<br>
| #define OPAL_ASM_GSYM &quot;&quot;
<br>
| #define OPAL_ASM_LSYM &quot;.L&quot;
<br>
| #define OPAL_ASM_TYPE &quot;@&quot;
<br>
| #define OPAL_ASM_SIZE &quot;1&quot;
<br>
| #define OPAL_ASM_ALIGN_LOG 
<br>
| #define OPAL_ASM_SUPPORT_64BIT 1
<br>
| #define OPAL_C_GCC_INLINE_ASSEMBLY 1
<br>
| #define OPAL_C_DEC_INLINE_ASSEMBLY 0
<br>
| #define OPAL_C_XLC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_GCC_INLINE_ASSEMBLY 1
<br>
| #define OMPI_CXX_DEC_INLINE_ASSEMBLY 0
<br>
| #define OMPI_CXX_XLC_INLINE_ASSEMBLY 0
<br>
| #define OPAL_ASSEMBLY_FORMAT &quot;default-.text-.globl-:--.L-_at_-1-0-1-1-0&quot;
<br>
| #define OPAL_ASSEMBLY_ARCH OMPI_AMD64
<br>
| #define OPAL_HAVE_ASM_FILE 1
<br>
| #define OMPI_F77_DOUBLE_UNDERSCORE 0
<br>
| #define OMPI_F77_SINGLE_UNDERSCORE 1
<br>
| #define OMPI_F77_CAPS 0
<br>
| #define OMPI_F77_PLAIN 0
<br>
| #define OMPI_WANT_F77_BINDINGS 1
<br>
| #define OMPI_F77 &quot;f95&quot;
<br>
| #define ompi_fortran_bogus_type_t int
<br>
| #define OMPI_HAVE_FORTRAN_CHARACTER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_CHARACTER 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_CHARACTER 1
<br>
| #define ompi_fortran_character_t char
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL 4
<br>
| #define ompi_fortran_logical_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL1 1
<br>
| #define ompi_fortran_logical1_t char
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL2 2
<br>
| #define ompi_fortran_logical2_t short
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL4 4
<br>
| #define ompi_fortran_logical4_t int
<br>
| #define OMPI_HAVE_FORTRAN_LOGICAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_LOGICAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_LOGICAL8 8
<br>
| #define ompi_fortran_logical8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER 4
<br>
| #define ompi_fortran_integer_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER1 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER1 1
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER1 1
<br>
| #define ompi_fortran_integer1_t char
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER2 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER2 2
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER2 2
<br>
| #define ompi_fortran_integer2_t short
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER4 4
<br>
| #define ompi_fortran_integer4_t int
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER8 8
<br>
| #define ompi_fortran_integer8_t long long
<br>
| #define OMPI_HAVE_FORTRAN_INTEGER16 0
<br>
| #define OMPI_SIZEOF_FORTRAN_INTEGER16 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_INTEGER16 4
<br>
| #define ompi_fortran_integer16_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL 4
<br>
| #define ompi_fortran_real_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL2 0
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL2 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL2 4
<br>
| #define ompi_fortran_real2_t ompi_fortran_bogus_type_t
<br>
| #define OMPI_HAVE_FORTRAN_REAL4 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL4 4
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL4 4
<br>
| #define ompi_fortran_real4_t float
<br>
| #define OMPI_HAVE_FORTRAN_REAL8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL8 8
<br>
| #define ompi_fortran_real8_t double
<br>
| #define OMPI_HAVE_FORTRAN_REAL16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_REAL16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_REAL16 16
<br>
| #define ompi_fortran_real16_t long double
<br>
| #define OMPI_REAL16_MATCHES_C 0
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_PRECISION 8
<br>
| #define ompi_fortran_double_precision_t double
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX 4
<br>
| #define OMPI_HAVE_FORTRAN_DOUBLE_COMPLEX 1
<br>
| #define OMPI_SIZEOF_FORTRAN_DOUBLE_COMPLEX 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_DOUBLE_COMPLEX 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX8 8
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX8 4
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX16 16
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX16 8
<br>
| #define OMPI_HAVE_FORTRAN_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_FORTRAN_COMPLEX32 32
<br>
| #define OMPI_ALIGNMENT_FORTRAN_COMPLEX32 16
<br>
| #define OMPI_FORTRAN_HANDLE_MAX ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
| #define OMPI_FORTRAN_VALUE_TRUE 1
<br>
| #define OMPI_WANT_F90_BINDINGS 1
<br>
| #define OMPI_F90 &quot;f95&quot;
<br>
| #define OMPI_HAVE_F90_CHARACTER 1
<br>
| #define OMPI_SIZEOF_F90_CHARACTER 1
<br>
| #define OMPI_HAVE_F90_LOGICAL 1
<br>
| #define OMPI_SIZEOF_F90_LOGICAL 4
<br>
| #define OMPI_HAVE_F90_LOGICAL1 1
<br>
| #define OMPI_SIZEOF_F90_LOGICAL1 1
<br>
| #define OMPI_HAVE_F90_LOGICAL2 1
<br>
| #define OMPI_SIZEOF_F90_LOGICAL2 2
<br>
| #define OMPI_HAVE_F90_LOGICAL4 1
<br>
| #define OMPI_SIZEOF_F90_LOGICAL4 4
<br>
| #define OMPI_HAVE_F90_LOGICAL8 1
<br>
| #define OMPI_SIZEOF_F90_LOGICAL8 8
<br>
| #define OMPI_HAVE_F90_INTEGER 1
<br>
| #define OMPI_SIZEOF_F90_INTEGER 4
<br>
| #define OMPI_HAVE_F90_INTEGER1 1
<br>
| #define OMPI_SIZEOF_F90_INTEGER1 1
<br>
| #define OMPI_HAVE_F90_INTEGER2 1
<br>
| #define OMPI_SIZEOF_F90_INTEGER2 2
<br>
| #define OMPI_HAVE_F90_INTEGER4 1
<br>
| #define OMPI_SIZEOF_F90_INTEGER4 4
<br>
| #define OMPI_HAVE_F90_INTEGER8 1
<br>
| #define OMPI_SIZEOF_F90_INTEGER8 8
<br>
| #define OMPI_HAVE_F90_INTEGER16 0
<br>
| #define OMPI_SIZEOF_F90_INTEGER16 4
<br>
| #define OMPI_HAVE_F90_REAL 1
<br>
| #define OMPI_SIZEOF_F90_REAL 4
<br>
| #define OMPI_HAVE_F90_REAL2 0
<br>
| #define OMPI_SIZEOF_F90_REAL2 4
<br>
| #define OMPI_HAVE_F90_REAL4 1
<br>
| #define OMPI_SIZEOF_F90_REAL4 4
<br>
| #define OMPI_HAVE_F90_REAL8 1
<br>
| #define OMPI_SIZEOF_F90_REAL8 8
<br>
| #define OMPI_HAVE_F90_REAL16 1
<br>
| #define OMPI_SIZEOF_F90_REAL16 16
<br>
| #define OMPI_HAVE_F90_DOUBLE_PRECISION 1
<br>
| #define OMPI_SIZEOF_F90_DOUBLE_PRECISION 8
<br>
| #define OMPI_HAVE_F90_COMPLEX 1
<br>
| #define OMPI_SIZEOF_F90_COMPLEX 8
<br>
| #define OMPI_HAVE_F90_COMPLEX8 1
<br>
| #define OMPI_SIZEOF_F90_COMPLEX8 8
<br>
| #define OMPI_HAVE_F90_COMPLEX16 1
<br>
| #define OMPI_SIZEOF_F90_COMPLEX16 16
<br>
| #define OMPI_HAVE_F90_COMPLEX32 1
<br>
| #define OMPI_SIZEOF_F90_COMPLEX32 32
<br>
| #define OMPI_HAVE_F90_DOUBLE_COMPLEX 1
<br>
| #define OMPI_SIZEOF_F90_DOUBLE_COMPLEX 16
<br>
| #define HAVE_ALLOCA_H 1
<br>
| #define HAVE_AIO_H 1
<br>
| #define HAVE_ARPA_INET_H 1
<br>
| #define HAVE_DIRENT_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define HAVE_EXECINFO_H 1
<br>
| #define HAVE_ERR_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_GRP_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_LIBGEN_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_NETDB_H 1
<br>
| #define HAVE_NETINET_IN_H 1
<br>
| #define HAVE_NETINET_TCP_H 1
<br>
| #define HAVE_POLL_H 1
<br>
| #define HAVE_PTHREAD_H 1
<br>
| #define HAVE_PTY_H 1
<br>
| #define HAVE_PWD_H 1
<br>
| #define HAVE_SCHED_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_STDDEF_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_STROPTS_H 1
<br>
| #define HAVE_SYS_FCNTL_H 1
<br>
| #define HAVE_SYS_IPC_H 1
<br>
| #define HAVE_SYS_IOCTL_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_SYS_MOUNT_H 1
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_QUEUE_H 1
<br>
| #define HAVE_SYS_RESOURCE_H 1
<br>
| #define HAVE_SYS_SELECT_H 1
<br>
| #define HAVE_SYS_SOCKET_H 1
<br>
| #define HAVE_STDARG_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_SYS_STATFS_H 1
<br>
| #define HAVE_SYS_STATVFS_H 1
<br>
| #define HAVE_SYS_TIME_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_UIO_H 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_SYS_VFS_H 1
<br>
| #define HAVE_SYS_WAIT_H 1
<br>
| #define HAVE_SYSLOG_H 1
<br>
| #define HAVE_TIME_H 1
<br>
| #define HAVE_TERMIOS_H 1
<br>
| #define HAVE_ULIMIT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_UTMP_H 1
<br>
| #define HAVE_MALLOC_H 1
<br>
| #define HAVE_IFADDRS_H 1
<br>
| #define HAVE_SYS_SYSCTL_H 1
<br>
| #define HAVE_REGEX_H 1
<br>
| #define HAVE_NET_IF_H 1
<br>
| #define HAVE_STDBOOL_H 1
<br>
| #define OPAL_USE_STDBOOL_H 1
<br>
| #define SIZEOF_PID_T 4
<br>
| #define HAVE_SOCKLEN_T 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN 1
<br>
| #define HAVE_STRUCT_SOCKADDR_IN6 1
<br>
| #define HAVE_STRUCT_SOCKADDR_STORAGE 1
<br>
| #define HAVE_DECL_AF_UNSPEC 1
<br>
| #define HAVE_DECL_PF_UNSPEC 1
<br>
| #define HAVE_DECL_AF_INET6 1
<br>
| #define HAVE_DECL_PF_INET6 1
<br>
| #define OPAL_HAVE_SA_RESTART 1
<br>
| #define HAVE_STRUCT_DIRENT_D_TYPE 1
<br>
| #define HAVE_SIGINFO_T_SI_FD 1
<br>
| #define HAVE_SIGINFO_T_SI_BAND 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_LIBNSL 1
<br>
| #define HAVE_SCHED_YIELD 1
<br>
| #define HAVE_DIRNAME 1
<br>
| #define HAVE_CEIL 1
<br>
| #define HAVE_ASPRINTF 1
<br>
| #define HAVE_SNPRINTF 1
<br>
| #define HAVE_VASPRINTF 1
<br>
| #define HAVE_VSNPRINTF 1
<br>
| #define HAVE_OPENPTY 1
<br>
| #define HAVE_ISATTY 1
<br>
| #define HAVE_GETPWUID 1
<br>
| #define HAVE_FORK 1
<br>
| #define HAVE_WAITPID 1
<br>
| #define HAVE_EXECVE 1
<br>
| #define HAVE_PIPE 1
<br>
| #define HAVE_PTSNAME 1
<br>
| #define HAVE_SETSID 1
<br>
| #define HAVE_MMAP 1
<br>
| #define HAVE_TCGETPGRP 1
<br>
| #define HAVE_POSIX_MEMALIGN 1
<br>
| #define HAVE_STRSIGNAL 1
<br>
| #define HAVE_SYSCONF 1
<br>
| #define HAVE_SYSLOG 1
<br>
| #define HAVE_REGEXEC 1
<br>
| #define HAVE_REGFREE 1
<br>
| #define HAVE_SOCKETPAIR 1
<br>
| #define HAVE_USLEEP 1
<br>
| #define HAVE_MKFIFO 1
<br>
| #define HAVE_UNIX_BYTESWAP 1
<br>
| #define OPAL_HAVE_VA_COPY 1
<br>
| #define OPAL_HAVE_UNDERSCORE_VA_COPY 1
<br>
| #define HAVE_DECL___FUNC__ 1
<br>
| #define OMPI_MPI_OFFSET_TYPE long long
<br>
| #define OPAL_PTRDIFF_TYPE ptrdiff_t
<br>
| #define OMPI_OFFSET_DATATYPE MPI_LONG_LONG
<br>
| #define OPAL_HAVE__SC_NPROCESSORS_ONLN 1
<br>
| #define OPAL_HAVE_BROKEN_QSORT 0
<br>
| #define OPAL_ALIGN_WORD_SIZE_INTEGERS 0
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK_NP 1
<br>
| #define OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK 1
<br>
| #define OPAL_HAVE_SOLARIS_THREADS 0
<br>
| #define OPAL_HAVE_POSIX_THREADS 1
<br>
| #define OPAL_THREADS_HAVE_DIFFERENT_PIDS 0
<br>
| #define OPAL_ENABLE_MPI_THREADS 1
<br>
| #define OPAL_ENABLE_PROGRESS_THREADS 0
<br>
| #define OPAL_ENABLE_FT_THREAD 0
<br>
| #define YYTEXT_POINTER 1
<br>
| #define ORTE_CLEAN_PS_CMD &quot;ps -A -o fname,pid,user&quot;
<br>
| #define HAVE_DECL_RLIMIT_NPROC 1
<br>
| #define HAVE_DECL_RLIMIT_MEMLOCK 1
<br>
| #define HAVE_EXECINFO_H 1
<br>
| #define HAVE_BACKTRACE 1
<br>
| #define HAVE_DECL_MPOL_MF_MOVE 0
<br>
| #define OMPI_WANT_MEMCHECKER 0
<br>
| #define OMPI_MEMCHECKER_HAVE_COMPONENT 
<br>
| #define MCA_memcpy_IMPLEMENTATION_HEADER &quot;opal/mca/memcpy/base/memcpy_base_default.h&quot;
<br>
| #define HAVE_DECL_SBRK 1
<br>
| #define HAVE_SYSCALL 1
<br>
| #define HAVE_DLSYM 1
<br>
| #define MEMORY_LINUX_PTMALLOC2 1
<br>
| #define HAVE_STROPTS_H 1
<br>
| #define MEMORY_LINUX_UMMUNOTIFY 0
<br>
| #define OMPI_MEMORY_HAVE_COMPONENT 1
<br>
| #define MCA_memory_IMPLEMENTATION_HEADER &quot;opal/mca/memory/base/empty.h&quot;
<br>
| #define HWLOC_SYM_PREFIX opal_paffinity_
<br>
| #define HWLOC_SYM_PREFIX_CAPS OPAL_PAFFINITY_
<br>
| #define HWLOC_SYM_TRANSFORM 1
<br>
| #define _HPUX_SOURCE 1
<br>
| #define SIZEOF_VOID_P 8
<br>
| #define HWLOC_LINUX_SYS 1
<br>
| #define HWLOC_X86_64_ARCH 1
<br>
| #define SIZEOF_UNSIGNED_LONG 8
<br>
| #define HWLOC_SIZEOF_UNSIGNED_LONG 8
<br>
| #define SIZEOF_UNSIGNED_INT 4
<br>
| #define HWLOC_SIZEOF_UNSIGNED_INT 4
<br>
| #define HWLOC_HAVE_ATTRIBUTE 1
<br>
| #define HWLOC_HAVE_ATTRIBUTE_ALIGNED 1
<br>
| #define HWLOC_HAVE_ATTRIBUTE_ALWAYS_INLINE 1
<br>
| #define HWLOC_HAVE_ATTRIBUTE_COLD 0
<br>
| #define HWLOC_HAVE_ATTRIBUTE_CONST 1
<br>
| #define HWLOC_HAVE_ATTRIBUTE_DEPRECATED 0
<br>
| #define HWLOC_HAVE_ATTRIBUTE_FORMAT 0
<br>
| #define HWLOC_HAVE_ATTRIBUTE_HOT 0
<br>
| #define HWLOC_HAVE_ATTRIBUTE_MALLOC 1
<br>
| #define HWLOC_HAVE_ATTRIBUTE_MAY_ALIAS 0
<br>
| #define HWLOC_HAVE_ATTRIBUTE_NO_INSTRUMENT_FUNCTION 0
<br>
| #define HWLOC_HAVE_ATTRIBUTE_NONNULL 0
<br>
| #define HWLOC_HAVE_ATTRIBUTE_NORETURN 1
<br>
| #define HWLOC_HAVE_ATTRIBUTE_PACKED 1
<br>
| #define HWLOC_HAVE_ATTRIBUTE_PURE 1
<br>
| #define HWLOC_HAVE_ATTRIBUTE_SENTINEL 0
<br>
| #define HWLOC_HAVE_ATTRIBUTE_UNUSED 0
<br>
| #define HWLOC_HAVE_ATTRIBUTE_WARN_UNUSED_RESULT 0
<br>
| #define HWLOC_HAVE_ATTRIBUTE_WEAK_ALIAS 1
<br>
| #define HWLOC_C_HAVE_VISIBILITY 0
<br>
| #define __hwloc_inline __inline__
<br>
| #define HAVE_STRNCASECMP 1
<br>
| #define hwloc_strncasecmp strncasecmp
<br>
| #define HAVE_STRFTIME 1
<br>
| #define HAVE_SETLOCALE 1
<br>
| #define HWLOC_HAVE_STDINT_H 1
<br>
| #define HAVE_SYS_MMAN_H 1
<br>
| #define HAVE_DECL__SC_NPROCESSORS_ONLN 1
<br>
| #define HAVE_DECL__SC_NPROCESSORS_CONF 1
<br>
| #define HAVE_DECL__SC_NPROC_ONLN 0
<br>
| #define HAVE_DECL__SC_NPROC_CONF 0
<br>
| #define HAVE_DECL__SC_LARGE_PAGESIZE 0
<br>
| #define HAVE_SYS_PARAM_H 1
<br>
| #define HAVE_SYS_SYSCTL_H 1
<br>
| #define HAVE_DECL_CTL_HW 0
<br>
| #define HAVE_DECL_HW_NCPU 0
<br>
| #define HAVE_SYSCTL 1
<br>
| #define HAVE_PTHREAD_T 1
<br>
| #define hwloc_pid_t pid_t
<br>
| #define hwloc_thread_t pthread_t
<br>
| #define HWLOC_HAVE_CPU_SET 1
<br>
| #define HAVE_FFS 1
<br>
| #define HWLOC_HAVE_DECL_FFS 1
<br>
| #define HWLOC_HAVE_FFS 1
<br>
| #define HAVE_FFSL 1
<br>
| #define HWLOC_HAVE_DECL_FFSL 1
<br>
| #define HWLOC_HAVE_FFSL 1
<br>
| #define HAVE_OPENAT 1
<br>
| #define HAVE_MALLOC_H 1
<br>
| #define HAVE_GETPAGESIZE 1
<br>
| #define HAVE_MEMALIGN 1
<br>
| #define HAVE_POSIX_MEMALIGN 1
<br>
| #define HAVE_SYS_UTSNAME_H 1
<br>
| #define HAVE_UNAME 1
<br>
| #define HAVE_NUMAIF_H 1
<br>
| #define HWLOC_HAVE_SET_MEMPOLICY 1
<br>
| #define HWLOC_HAVE_MBIND 1
<br>
| #define HWLOC_HAVE_MIGRATE_PAGES 1
<br>
| #define HAVE_DECL_PTHREAD_SETAFFINITY_NP 1
<br>
| #define HAVE_DECL_PTHREAD_GETAFFINITY_NP 1
<br>
| #define HWLOC_HAVE_CPUID 1
<br>
| #define PAFFINITY_HWLOC_HWLOC_VERSION &quot;internal v1.1.1&quot;
<br>
| #define HAVE_DECL_HZ 1
<br>
| #define MCA_timer_IMPLEMENTATION_HEADER &quot;opal/mca/timer/linux/timer_linux.h&quot;
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| /* Override any GCC internal prototype to avoid an error.
<br>
|    Use char because int might match the return type of a GCC
<br>
|    builtin and then its argument prototype would still apply.  */
<br>
| #ifdef __cplusplus
<br>
| extern &quot;C&quot;
<br>
| #endif
<br>
| char lsb_launch ();
<br>
| int
<br>
| main ()
<br>
| {
<br>
| return lsb_launch ();
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:84222: result: no
<br>
configure:84690: WARNING: LSF support requested (via --with-lsf) but not found.
<br>
configure:84692: error: Aborting.
<br>
<p>

<p>
configure:55000: checking if we need -lm for ceil
<br>
configure:55046: cc -o conftest -DNDEBUG  -fast -xtarget=nehalem -m64     -fast -xtarget=nehalem -m64   conftest.c -lnsl  -lutil &gt;&amp;5
<br>
cc: Warning: -xchip=native detection failed, falling back to -xchip=generic
<br>
&quot;conftest.c&quot;, line 455: warning: statement not reached
<br>
configure:55046: $? = 0
<br>
configure:55104: result: no
<br>
configure:55115: checking for ceil
<br>
configure:55115: cc -o conftest -DNDEBUG  -fast -xtarget=nehalem -m64     -fast -xtarget=nehalem -m64   conftest.c -lnsl  -lutil &gt;&amp;5
<br>
cc: Warning: -xchip=native detection failed, falling back to -xchip=generic
<br>
&quot;conftest.c&quot;, line 455: warning: statement not reached
<br>
configure:55115: $? = 0
<br>
configure:55115: result: yes<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16179/ceil.c">ceil.c</a>
</ul>
<!-- attachment="ceil.c" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16179/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16180.php">Terry Dontje: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16178.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16182.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>Reply:</strong> <a href="16182.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
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
