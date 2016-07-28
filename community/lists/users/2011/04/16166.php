<?
$subject_val = "[OMPI users] problem with configure and c++, lib and lib64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 15:27:10 2011" -->
<!-- isoreceived="20110406192710" -->
<!-- sent="Wed, 6 Apr 2011 12:27:02 -0700" -->
<!-- isosent="20110406192702" -->
<!-- name="Jason Palmer" -->
<!-- email="japalmer29_at_[hidden]" -->
<!-- subject="[OMPI users] problem with configure and c++, lib and lib64" -->
<!-- id="04f101cbf490$9c13c380$d43b4a80$_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] problem with configure and c++, lib and lib64<br>
<strong>From:</strong> Jason Palmer (<em>japalmer29_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 15:27:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16167.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16165.php">David Gunter: "[OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16171.php">Ralph Castain: "Re: [OMPI users] problem with configure and c++, lib and lib64"</a>
<li><strong>Reply:</strong> <a href="16171.php">Ralph Castain: "Re: [OMPI users] problem with configure and c++, lib and lib64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;
<br>
<p>I'm trying again with the 1.4.3 version to use compile openmpi statically
<br>
with my program . but I'm running into a more basic problem, similar to one
<br>
I previously encountered and solved using LD_LIBRARY_PATH.
<br>
<p>&nbsp;
<br>
<p>The configure script is dying when it tries to run the &quot;simple C++ program&quot;.
<br>
I define CC, CXX to refer to installed gcc-4.4.3 versions, and F77 and FC to
<br>
gcc-4.4.3 gfortran, and I set LD_LIBRARY_PATH to be the corresponding
<br>
gcc-4.4.3-install/lib64.
<br>
<p>&nbsp;
<br>
<p>I didn't have a problem with the c++ configure last time I tried this . One
<br>
odd thing is that it seems to be using the lib directory instead of the
<br>
lib64 directory, despite my setting LD_LIBRARY_FLAGS to lib64, and defining
<br>
CFLAGS and LDFLAGS to point to the lib64 library as well. I wonder if that
<br>
is causing the C++ program to fail.
<br>
<p>&nbsp;
<br>
<p>The relevant output from config.log is pasted below. Thanks very much for
<br>
your help!  -Jason
<br>
<p>&nbsp;
<br>
<p>configure:23457: checking for the C++ compiler vendor
<br>
<p>configure:23490: /home/jason/gcc-4.4.3-install/bin/g++ -c -DNDEBUG
<br>
conftest.cpp &gt;&amp;5
<br>
<p>conftest.cpp:2:2: error: #error &quot;condition defined(__INTEL_COMPILER) ||
<br>
defined(__ICC) not met&quot;
<br>
<p>conftest.cpp:3: error: 'choke' does not name a type
<br>
<p>configure:23497: $? = 1
<br>
<p>configure: failed program was:
<br>
<p>| #if !( defined(__INTEL_COMPILER) || defined(__ICC) )
<br>
<p>| #error &quot;condition defined(__INTEL_COMPILER) || defined(__ICC) not met&quot;
<br>
<p>| choke me
<br>
<p>| #endif
<br>
<p>configure:23529: /home/jason/gcc-4.4.3-install/bin/g++ -c -DNDEBUG
<br>
conftest.cpp &gt;&amp;5
<br>
<p>configure:23536: $? = 0
<br>
<p>configure:24651: result: gnu
<br>
<p>configure:24673: checking if C++ compiler works
<br>
<p>configure:24754: /home/jason/gcc-4.4.3-install/bin/g++ -o conftest -DNDEBUG
<br>
-L/home/jason/gcc-4.4.3-install/lib64 conftest.cpp
<br>
<p><span class="quotelev1">&gt;&amp;5
</span><br>
<p>In file included from
<br>
/home/jason/gcc-4.4.3-install/lib/gcc/x86_64-unknown-linux-gnu/4.4.3/../../.
<br>
./../include/c++/4.4.3/bits/loca
<br>
<p>lefwd.h:42,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/home/jason/gcc-4.4.3-install/lib/gcc/x86_64-unknown-linux-gnu/4.4.3/../../.
<br>
./../include/c++/4.4.3/string:45
<br>
<p>,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from conftest.cpp:111:
<br>
<p>/home/jason/gcc-4.4.3-install/lib/gcc/x86_64-unknown-linux-gnu/4.4.3/../../.
<br>
./../include/c++/4.4.3/x86_64-unknown-linux-gnu/bits/c
<br>
<p>++locale.h:52: error: 'uselocale' was not declared in this scope
<br>
<p>/home/jason/gcc-4.4.3-install/lib/gcc/x86_64-unknown-linux-gnu/4.4.3/../../.
<br>
./../include/c++/4.4.3/x86_64-unknown-linux-gnu/bits/c
<br>
<p>++locale.h:52: error: invalid type in declaration before ';' token
<br>
<p>/home/jason/gcc-4.4.3-install/lib/gcc/x86_64-unknown-linux-gnu/4.4.3/../../.
<br>
./../include/c++/4.4.3/x86_64-unknown-linux-gnu/bits/c
<br>
<p>++locale.h: In function 'int std::__convert_from_v(__locale_struct* const&amp;,
<br>
char*, int, const char*, ...)':
<br>
<p>/home/jason/gcc-4.4.3-install/lib/gcc/x86_64-unknown-linux-gnu/4.4.3/../../.
<br>
./../include/c++/4.4.3/x86_64-unknown-linux-gnu/bits/c
<br>
<p>++locale.h:72: error: '__gnu_cxx::__uselocale' cannot be used as a function
<br>
<p>/home/jason/gcc-4.4.3-install/lib/gcc/x86_64-unknown-linux-gnu/4.4.3/../../.
<br>
./../include/c++/4.4.3/x86_64-unknown-linux-gnu/bits/c
<br>
<p>++locale.h:97: error: '__gnu_cxx::__uselocale' cannot be used as a function
<br>
<p>configure:24758: $? = 1
<br>
<p>configure: program exited with status 1
<br>
<p>configure: failed program was:
<br>
<p>| /* confdefs.h.  */
<br>
<p>| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
<p>| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
<p>| #define PACKAGE_VERSION &quot;1.4.3&quot;
<br>
<p>| #define PACKAGE_STRING &quot;Open MPI 1.4.3&quot;
<br>
<p>| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
<p>| #define OMPI_MAJOR_VERSION 1
<br>
<p>| #define OMPI_MINOR_VERSION 4
<br>
<p>| #define OMPI_RELEASE_VERSION 3
<br>
<p>| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
<p>| #define OMPI_VERSION &quot;3&quot;
<br>
<p>| #define OMPI_RELEASE_DATE &quot;Oct 05, 2010&quot;
<br>
<p>| #define ORTE_MAJOR_VERSION 1
<br>
<p>| #define ORTE_MINOR_VERSION 4
<br>
<p>| #define ORTE_RELEASE_VERSION 3
<br>
<p>| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
<p>| #define ORTE_VERSION &quot;3&quot;
<br>
<p>| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
<p>| #define ORTE_VERSION &quot;3&quot;
<br>
<p>| #define ORTE_RELEASE_DATE &quot;Oct 05, 2010&quot;
<br>
<p>| #define OPAL_MAJOR_VERSION 1
<br>
<p>| #define OPAL_MINOR_VERSION 4
<br>
<p>| #define OPAL_RELEASE_VERSION 3
<br>
<p>| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
<p>| #define OPAL_VERSION &quot;3&quot;
<br>
<p>| #define OPAL_RELEASE_DATE &quot;Oct 05, 2010&quot;
<br>
<p>| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
<p>| #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
<br>
<p>| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
<p>| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
<p>| #define OMPI_ENABLE_DEBUG 0
<br>
<p>| #define OMPI_GROUP_SPARSE 0
<br>
<p>| #define OMPI_WANT_MPI_CXX_SEEK 1
<br>
<p>| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
<p>| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
<p>| #define OMPI_WANT_PERUSE 0
<br>
<p>| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
<p>| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 0
<br>
<p>| #define OPAL_ENABLE_TRACE 0
<br>
<p>| #define ORTE_DISABLE_FULL_SUPPORT 0
<br>
<p>| #define OPAL_ENABLE_FT 0
<br>
<p>| #define OPAL_ENABLE_FT_CR 0
<br>
<p>| #define OMPI_WANT_HOME_CONFIG_FILES 1
<br>
<p>| #define OPAL_ENABLE_IPV6 1
<br>
<p>| #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
<br>
<p>| #define OPAL_PACKAGE_STRING &quot;Open MPI jason_at_guessing Distribution&quot;
<br>
<p>| #define OPAL_IDENT_STRING &quot;1.4.3&quot;
<br>
<p>| #define OMPI_OPENIB_PAD_HDR 0
<br>
<p>| #define OMPI_CC &quot;/home/jason/gcc-4.4.3-install/bin/gcc&quot;
<br>
<p>| #define STDC_HEADERS 1
<br>
<p>| #define _GNU_SOURCE 1
<br>
<p>| #define OMPI_C_HAVE_BUILTIN_EXPECT 1
<br>
<p>| #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
<br>
<p>| #define OMPI_CC_USE_PRAGMA_IDENT 0
<br>
<p>| #define OMPI_CC_USE_IDENT 1
<br>
<p>| #define OMPI_CC_USE_PRAGMA_COMMENT
<br>
<p>| #define OMPI_CC_USE_CONST_CHAR_IDENT 0
<br>
<p>| #define HAVE_SYS_TYPES_H 1
<br>
<p>| #define HAVE_SYS_STAT_H 1
<br>
<p>| #define HAVE_STDLIB_H 1
<br>
<p>| #define HAVE_STRING_H 1
<br>
<p>| #define HAVE_MEMORY_H 1
<br>
<p>| #define HAVE_STRINGS_H 1
<br>
<p>| #define HAVE_INTTYPES_H 1
<br>
<p>| #define HAVE_STDINT_H 1
<br>
<p>| #define HAVE_UNISTD_H 1
<br>
<p>| #define HAVE_LONG_LONG 1
<br>
<p>| #define HAVE_LONG_DOUBLE 1
<br>
<p>| #define HAVE_INT8_T 1
<br>
<p>| #define HAVE_UINT8_T 1
<br>
<p>| #define HAVE_INT16_T 1
<br>
<p>| #define HAVE_UINT16_T 1
<br>
<p>| #define HAVE_INT32_T 1
<br>
<p>| #define HAVE_UINT32_T 1
<br>
<p>| #define HAVE_INT64_T 1
<br>
<p>| #define HAVE_UINT64_T 1
<br>
<p>| #define HAVE_INTPTR_T 1
<br>
<p>| #define HAVE_UINTPTR_T 1
<br>
<p>| #define HAVE_MODE_T 1
<br>
<p>| #define HAVE_SSIZE_T 1
<br>
<p>| #define HAVE_PTRDIFF_T 1
<br>
<p>| #define SIZEOF_CHAR 1
<br>
<p>| #define SIZEOF_SHORT 2
<br>
<p>| #define SIZEOF_INT 4
<br>
<p>| #define SIZEOF_LONG 8
<br>
<p>| #define SIZEOF_LONG_LONG 8
<br>
<p>| #define SIZEOF_LONG_DOUBLE 16
<br>
<p>| #define SIZEOF_FLOAT 4
<br>
<p>| #define SIZEOF_DOUBLE 8
<br>
<p>| #define SIZEOF_VOID_P 8
<br>
<p>| #define SIZEOF_SIZE_T 8
<br>
<p>| #define SIZEOF_SSIZE_T 8
<br>
<p>| #define SIZEOF_PTRDIFF_T 8
<br>
<p>| #define OMPI_ALIGNMENT_CHAR 1
<br>
<p>| #define OMPI_ALIGNMENT_SHORT 2
<br>
<p>| #define OMPI_ALIGNMENT_WCHAR 4
<br>
<p>| #define OMPI_ALIGNMENT_INT 4
<br>
<p>| #define OMPI_ALIGNMENT_LONG 8
<br>
<p>| #define OMPI_ALIGNMENT_LONG_LONG 8
<br>
<p>| #define OMPI_ALIGNMENT_FLOAT 4
<br>
<p>| #define OMPI_ALIGNMENT_DOUBLE 8
<br>
<p>| #define OMPI_ALIGNMENT_LONG_DOUBLE 16
<br>
<p>| #define OMPI_ALIGNMENT_VOID_P 8
<br>
<p>| #define OMPI_NEED_C_BOOL 1
<br>
<p>| #ifndef __cplusplus
<br>
<p>| #define inline __inline__
<br>
<p>| #endif
<br>
<p>| #define restrict __restrict
<br>
<p>| #define OMPI_ENABLE_MPI_PROFILING 1
<br>
<p>| #define OMPI_HAVE_WEAK_SYMBOLS 1
<br>
<p>| #define OMPI_CXX &quot;/home/jason/gcc-4.4.3-install/bin/g++&quot;
<br>
<p>| /* end confdefs.h.  */
<br>
<p>| #include &lt;string&gt;
<br>
<p>| int
<br>
<p>| main ()
<br>
<p>| {
<br>
<p>| std::string foo = &quot;Hello, world&quot;
<br>
<p>|   ;
<br>
<p>|   return 0;
<br>
<p>| }
<br>
<p>configure:24791: result: no
<br>
<p>configure:24805: error: Could not run a simple C++ program.  Aborting.
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16166/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16167.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16165.php">David Gunter: "[OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16171.php">Ralph Castain: "Re: [OMPI users] problem with configure and c++, lib and lib64"</a>
<li><strong>Reply:</strong> <a href="16171.php">Ralph Castain: "Re: [OMPI users] problem with configure and c++, lib and lib64"</a>
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
