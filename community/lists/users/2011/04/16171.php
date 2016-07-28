<?
$subject_val = "Re: [OMPI users] problem with configure and c++, lib and lib64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 16:35:16 2011" -->
<!-- isoreceived="20110406203516" -->
<!-- sent="Wed, 6 Apr 2011 14:35:06 -0600" -->
<!-- isosent="20110406203506" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with configure and c++, lib and lib64" -->
<!-- id="C9F327AB-8AA2-4B51-9830-61FE376C3279_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="04f101cbf490$9c13c380$d43b4a80$_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with configure and c++, lib and lib64<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 16:35:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16172.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<li><strong>Previous message:</strong> <a href="16170.php">Ralph Castain: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16166.php">Jason Palmer: "[OMPI users] problem with configure and c++, lib and lib64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16173.php">Jason Palmer: "Re: [OMPI users] problem with configure and c++, lib and lib64"</a>
<li><strong>Reply:</strong> <a href="16173.php">Jason Palmer: "Re: [OMPI users] problem with configure and c++, lib and lib64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2011, at 1:27 PM, Jason Palmer wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;m trying again with the 1.4.3 version to use compile openmpi statically with my program &#133; but I&#146;m running into a more basic problem, similar to one I previously encountered and solved using LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The configure script is dying when it tries to run the &#147;simple C++ program&#148;. I define CC, CXX to refer to installed gcc-4.4.3 versions, and F77 and FC to gcc-4.4.3 gfortran, and I set LD_LIBRARY_PATH to be the corresponding gcc-4.4.3-install/lib64.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I didn&#146;t have a problem with the c++ configure last time I tried this &#133; One odd thing is that it seems to be using the lib directory instead of the lib64 directory, despite my setting LD_LIBRARY_FLAGS to lib64, and defining CFLAGS and LDFLAGS to point to the lib64 library as well. I wonder if that is causing the C++ program to fail.
</span><br>
<p>Did you set CXXFLAGS too? I believe that is what gets used for C++ programs, not CFLAGS
<br>
<p>If you don't need c++ bindings, you can always just configure to ignore it.
<br>
<p><p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The relevant output from config.log is pasted below. Thanks very much for your help!  -Jason
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; configure:23457: checking for the C++ compiler vendor
</span><br>
<span class="quotelev1">&gt; configure:23490: /home/jason/gcc-4.4.3-install/bin/g++ -c -DNDEBUG   conftest.cpp &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.cpp:2:2: error: #error &quot;condition defined(__INTEL_COMPILER) || defined(__ICC) not met&quot;
</span><br>
<span class="quotelev1">&gt; conftest.cpp:3: error: 'choke' does not name a type
</span><br>
<span class="quotelev1">&gt; configure:23497: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | #if !( defined(__INTEL_COMPILER) || defined(__ICC) )
</span><br>
<span class="quotelev1">&gt; | #error &quot;condition defined(__INTEL_COMPILER) || defined(__ICC) not met&quot;
</span><br>
<span class="quotelev1">&gt; | choke me
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; configure:23529: /home/jason/gcc-4.4.3-install/bin/g++ -c -DNDEBUG   conftest.cpp &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:23536: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:24651: result: gnu
</span><br>
<span class="quotelev1">&gt; configure:24673: checking if C++ compiler works
</span><br>
<span class="quotelev1">&gt; configure:24754: /home/jason/gcc-4.4.3-install/bin/g++ -o conftest -DNDEBUG   -L/home/jason/gcc-4.4.3-install/lib64 conftest.cpp
</span><br>
<span class="quotelev2">&gt; &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; In file included from /home/jason/gcc-4.4.3-install/lib/gcc/x86_64-unknown-linux-gnu/4.4.3/../../../../include/c++/4.4.3/bits/loca
</span><br>
<span class="quotelev1">&gt; lefwd.h:42,
</span><br>
<span class="quotelev1">&gt;                  from /home/jason/gcc-4.4.3-install/lib/gcc/x86_64-unknown-linux-gnu/4.4.3/../../../../include/c++/4.4.3/string:45
</span><br>
<span class="quotelev1">&gt; ,
</span><br>
<span class="quotelev1">&gt;                  from conftest.cpp:111:
</span><br>
<span class="quotelev1">&gt; /home/jason/gcc-4.4.3-install/lib/gcc/x86_64-unknown-linux-gnu/4.4.3/../../../../include/c++/4.4.3/x86_64-unknown-linux-gnu/bits/c
</span><br>
<span class="quotelev1">&gt; ++locale.h:52: error: 'uselocale' was not declared in this scope
</span><br>
<span class="quotelev1">&gt; /home/jason/gcc-4.4.3-install/lib/gcc/x86_64-unknown-linux-gnu/4.4.3/../../../../include/c++/4.4.3/x86_64-unknown-linux-gnu/bits/c
</span><br>
<span class="quotelev1">&gt; ++locale.h:52: error: invalid type in declaration before ';' token
</span><br>
<span class="quotelev1">&gt; /home/jason/gcc-4.4.3-install/lib/gcc/x86_64-unknown-linux-gnu/4.4.3/../../../../include/c++/4.4.3/x86_64-unknown-linux-gnu/bits/c
</span><br>
<span class="quotelev1">&gt; ++locale.h: In function 'int std::__convert_from_v(__locale_struct* const&amp;, char*, int, const char*, ...)':
</span><br>
<span class="quotelev1">&gt; /home/jason/gcc-4.4.3-install/lib/gcc/x86_64-unknown-linux-gnu/4.4.3/../../../../include/c++/4.4.3/x86_64-unknown-linux-gnu/bits/c
</span><br>
<span class="quotelev1">&gt; ++locale.h:72: error: '__gnu_cxx::__uselocale' cannot be used as a function
</span><br>
<span class="quotelev1">&gt; /home/jason/gcc-4.4.3-install/lib/gcc/x86_64-unknown-linux-gnu/4.4.3/../../../../include/c++/4.4.3/x86_64-unknown-linux-gnu/bits/c
</span><br>
<span class="quotelev1">&gt; ++locale.h:97: error: '__gnu_cxx::__uselocale' cannot be used as a function
</span><br>
<span class="quotelev1">&gt; configure:24758: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: program exited with status 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;1.4.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;Open MPI 1.4.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_MINOR_VERSION 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_RELEASE_DATE &quot;Oct 05, 2010&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_MINOR_VERSION 4
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define ORTE_RELEASE_DATE &quot;Oct 05, 2010&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_MINOR_VERSION 4
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev1">&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_RELEASE_DATE &quot;Oct 05, 2010&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PROGRESS_THREADS 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-unknown-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_GROUP_SPARSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; | #define ORTE_DISABLE_FULL_SUPPORT 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_FT 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_FT_CR 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_WANT_HOME_CONFIG_FILES 1
</span><br>
<span class="quotelev1">&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; | #define OPAL_PACKAGE_STRING &quot;Open MPI jason_at_guessing Distribution&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_IDENT_STRING &quot;1.4.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_OPENIB_PAD_HDR 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC &quot;/home/jason/gcc-4.4.3-install/bin/gcc&quot;
</span><br>
<span class="quotelev1">&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt; | #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_C_HAVE_BUILTIN_PREFETCH 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC_USE_PRAGMA_IDENT 0
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC_USE_IDENT 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC_USE_PRAGMA_COMMENT
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CC_USE_CONST_CHAR_IDENT 0
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_LONG 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_LONG_DOUBLE 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT8_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT16_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT32_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINT64_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_INTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_UINTPTR_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_MODE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_SSIZE_T 1
</span><br>
<span class="quotelev1">&gt; | #define HAVE_PTRDIFF_T 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_SSIZE_T 8
</span><br>
<span class="quotelev1">&gt; | #define SIZEOF_PTRDIFF_T 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_CHAR 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_SHORT 2
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_WCHAR 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_INT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_FLOAT 4
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_DOUBLE 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_LONG_DOUBLE 16
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ALIGNMENT_VOID_P 8
</span><br>
<span class="quotelev1">&gt; | #define OMPI_NEED_C_BOOL 1
</span><br>
<span class="quotelev1">&gt; | #ifndef __cplusplus
</span><br>
<span class="quotelev1">&gt; | #define inline __inline__
</span><br>
<span class="quotelev1">&gt; | #endif
</span><br>
<span class="quotelev1">&gt; | #define restrict __restrict
</span><br>
<span class="quotelev1">&gt; | #define OMPI_ENABLE_MPI_PROFILING 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_HAVE_WEAK_SYMBOLS 1
</span><br>
<span class="quotelev1">&gt; | #define OMPI_CXX &quot;/home/jason/gcc-4.4.3-install/bin/g++&quot;
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | #include &lt;string&gt;
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | std::string foo = &quot;Hello, world&quot;
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:24791: result: no
</span><br>
<span class="quotelev1">&gt; configure:24805: error: Could not run a simple C++ program.  Aborting.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16171/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16172.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.3 and &quot;make distclean&quot; error"</a>
<li><strong>Previous message:</strong> <a href="16170.php">Ralph Castain: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16166.php">Jason Palmer: "[OMPI users] problem with configure and c++, lib and lib64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16173.php">Jason Palmer: "Re: [OMPI users] problem with configure and c++, lib and lib64"</a>
<li><strong>Reply:</strong> <a href="16173.php">Jason Palmer: "Re: [OMPI users] problem with configure and c++, lib and lib64"</a>
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
