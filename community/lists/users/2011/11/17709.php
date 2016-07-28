<?
$subject_val = "Re: [OMPI users] MPI on MacOS Lion help";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 17:36:59 2011" -->
<!-- isoreceived="20111104213659" -->
<!-- sent="Fri, 4 Nov 2011 15:36:50 -0600" -->
<!-- isosent="20111104213650" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI on MacOS Lion help" -->
<!-- id="392166FD-6582-4AB9-8DCB-F72DE6BFD9F8_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="0BEF051F-D36C-47A3-8E39-9B9FF5C16445_at_sbcglobal.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI on MacOS Lion help<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 17:36:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17710.php">Barrett, Brian W: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<li><strong>Previous message:</strong> <a href="17708.php">Charles Shelor: "[OMPI users] MPI on MacOS Lion help"</a>
<li><strong>In reply to:</strong> <a href="17708.php">Charles Shelor: "[OMPI users] MPI on MacOS Lion help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17710.php">Barrett, Brian W: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<li><strong>Reply:</strong> <a href="17710.php">Barrett, Brian W: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just glancing at the output, it appears to be finding a different gcc that isn't Lion compatible. I know people have been forgetting to clear out all their old installed software, and so you can pick old things up.
<br>
<p>Try setting your path and ld_library_path variables to point at the Xcode gcc.
<br>
<p><p>On Nov 4, 2011, at 3:08 PM, Charles Shelor wrote:
<br>
<p><span class="quotelev1">&gt; I had downloaded and installed OpenMPI on my Mac OS-X 10.6 machine a few months ago.  I ran the configure and install commands from the FAQ with no problems.  I recently upgraded to Max OS-X 10.7 (Lion) and now when I run mpicc it cannot find the standard C library headers (stdio.h, std lib.h&#133;)  I had noticed that I had to modify my path to point to the Xcode gcc executable, /Developer/usr/bin/gcc, (I believe 10.6 included gcc in /usr/bin, but 10.7 does not appear to include it there now).  So I figured that I could just reinstall OpenMPI and it would be able to locate the new libraries.  However, during the &quot;configure&quot; operation I received the messages below.  I normally use the Apple Xcode IDE for my initial code development and then compile using mpicc from a terminal window.  gcc also fails to find the standard libraries from the command line.  Is there an environment variable that I should set that tells gcc where the libraries are located?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Charles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; == Compiler and preprocessor tests
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** C compiler and preprocessor
</span><br>
<span class="quotelev1">&gt; checking for style of include used by make... GNU
</span><br>
<span class="quotelev1">&gt; checking for gcc... gcc
</span><br>
<span class="quotelev1">&gt; checking for C compiler default output file name... 
</span><br>
<span class="quotelev1">&gt; configure: error: in `/Downloads/openmpi-1.4.3':
</span><br>
<span class="quotelev1">&gt; configure: error: C compiler cannot create executables
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is what I think is the relevant output from 'config.log'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:6362: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:6369: gcc -v &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: i686-apple-darwin10
</span><br>
<span class="quotelev1">&gt; Configured with: /var/tmp/gcc/gcc-5666.3~6/src/configure --disable-checking --enable-werror --prefix=/usr --mandir=/share/man --enable-languages=c,objc,c++,obj-c++ --program-transform-name=/^[cg][^.-]*$/s/$/-4.2/ --with-slibdir=/usr/lib --build=i686-apple-darwin10 --program-prefix=i686-apple-darwin10- --host=x86_64-apple-darwin10 --target=i686-apple-darwin10 --with-gxx-include-dir=/include/c++/4.2.1
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.2.1 (Apple Inc. build 5666) (dot 3)
</span><br>
<span class="quotelev1">&gt; configure:6373: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:6380: gcc -V &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; gcc-4.2: argument to `-V' is missing
</span><br>
<span class="quotelev1">&gt; configure:6384: $? = 1
</span><br>
<span class="quotelev1">&gt; configure:6407: checking for C compiler default output file name
</span><br>
<span class="quotelev1">&gt; configure:6429: gcc -DNDEBUG    conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ld: library not found for -lcrt1.10.6.o
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; configure:6433: $? = 1
</span><br>
<span class="quotelev1">&gt; configure:6471: result: 
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
<span class="quotelev1">&gt; | #define OMPI_ARCH &quot;x86_64-apple-darwin11.2.0&quot;
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
<span class="quotelev1">&gt; | #define OPAL_PACKAGE_STRING &quot;Open MPI charles_at_Charles.local Distribution&quot;
</span><br>
<span class="quotelev1">&gt; | #define OPAL_IDENT_STRING &quot;1.4.3&quot;
</span><br>
<span class="quotelev1">&gt; | #define OMPI_OPENIB_PAD_HDR 0
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:6477: error: in `/Downloads/openmpi-1.4.3':
</span><br>
<span class="quotelev1">&gt; configure:6480: error: C compiler cannot create executables
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17710.php">Barrett, Brian W: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<li><strong>Previous message:</strong> <a href="17708.php">Charles Shelor: "[OMPI users] MPI on MacOS Lion help"</a>
<li><strong>In reply to:</strong> <a href="17708.php">Charles Shelor: "[OMPI users] MPI on MacOS Lion help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17710.php">Barrett, Brian W: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<li><strong>Reply:</strong> <a href="17710.php">Barrett, Brian W: "Re: [OMPI users] MPI on MacOS Lion help"</a>
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
