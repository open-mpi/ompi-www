<?
$subject_val = "Re: [OMPI users] MPI on MacOS Lion help";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 19:10:06 2011" -->
<!-- isoreceived="20111104231006" -->
<!-- sent="Fri, 4 Nov 2011 18:09:58 -0500" -->
<!-- isosent="20111104230958" -->
<!-- name="Charles Shelor" -->
<!-- email="cfshelor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI on MacOS Lion help" -->
<!-- id="7F6A8256-8BCE-46F8-AAE4-DC7038BF1C05_at_sbcglobal.net" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAD9B897.80BE%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> Charles Shelor (<em>cfshelor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 19:09:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17713.php">David Turner: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17711.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp	for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17710.php">Barrett, Brian W: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just checked my laptop (also running Lion) and I do have gcc at /usr/bin and it is linked to /usr/bin/gcc-4.2.  I just checked again on my Mac Pro and there is no gcc in /usr/bin although there is a /usr/bin/gcc-3.3, probably left over from an earlier OS or Xcode.  I downloaded and installed Xcode 4.2 and that returned gcc to /usr/lib.  I successfully ran
<br>
<p>Now Xcode 4.2 does not recognize:  #include &lt;openmp&gt;
<br>
<p>I know this is an MPI forum rather than OpenMP, but I was wondering if anyone knew how to get OpenMP working in Xcode 4.2.  The statement worked fine in Xcode 3.6.x
<br>
<p>Thanks again for the help!
<br>
<p>Charles
<br>
<p><p>On Nov 4, 2011, at 4:41 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; I think you have something wrong with your Xcode install; on my Lion
</span><br>
<span class="quotelev1">&gt; machine, gcc is installed in /usr/bin as always.  Also, on OS X, you
</span><br>
<span class="quotelev1">&gt; should never have to set LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/4/11 3:36 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just glancing at the output, it appears to be finding a different gcc
</span><br>
<span class="quotelev2">&gt;&gt; that isn't Lion compatible. I know people have been forgetting to clear
</span><br>
<span class="quotelev2">&gt;&gt; out all their old installed software, and so you can pick old things up.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Try setting your path and ld_library_path variables to point at the Xcode
</span><br>
<span class="quotelev2">&gt;&gt; gcc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 4, 2011, at 3:08 PM, Charles Shelor wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had downloaded and installed OpenMPI on my Mac OS-X 10.6 machine a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; few months ago.  I ran the configure and install commands from the FAQ
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with no problems.  I recently upgraded to Max OS-X 10.7 (Lion) and now
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when I run mpicc it cannot find the standard C library headers (stdio.h,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std lib.h&#138;)  I had noticed that I had to modify my path to point to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Xcode gcc executable, /Developer/usr/bin/gcc, (I believe 10.6 included
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc in /usr/bin, but 10.7 does not appear to include it there now).  So
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I figured that I could just reinstall OpenMPI and it would be able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; locate the new libraries.  However, during the &quot;configure&quot; operation I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; received the messages below.  I normally use the Apple Xcode IDE for my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initial code development and then compile using mpicc from a terminal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; window.  gcc also fails to find the standard libraries from the command
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line.  Is there an environment variable that I should set that tells gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where the libraries are located?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Charles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == Compiler and preprocessor tests
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** C compiler and preprocessor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for style of include used by make... GNU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for gcc... gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for C compiler default output file name...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: in `/Downloads/openmpi-1.4.3':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: C compiler cannot create executables
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See `config.log' for more details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is what I think is the relevant output from 'config.log'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:6362: $? = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:6369: gcc -v &gt;&amp;5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Target: i686-apple-darwin10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configured with: /var/tmp/gcc/gcc-5666.3~6/src/configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-checking --enable-werror --prefix=/usr --mandir=/share/man
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-languages=c,objc,c++,obj-c++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --program-transform-name=/^[cg][^.-]*$/s/$/-4.2/ --with-slibdir=/usr/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --build=i686-apple-darwin10 --program-prefix=i686-apple-darwin10-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --host=x86_64-apple-darwin10 --target=i686-apple-darwin10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-gxx-include-dir=/include/c++/4.2.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc version 4.2.1 (Apple Inc. build 5666) (dot 3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:6373: $? = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:6380: gcc -V &gt;&amp;5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc-4.2: argument to `-V' is missing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:6384: $? = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:6407: checking for C compiler default output file name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:6429: gcc -DNDEBUG    conftest.c  &gt;&amp;5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld: library not found for -lcrt1.10.6.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:6433: $? = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:6471: result:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: failed program was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define PACKAGE_VERSION &quot;1.4.3&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define PACKAGE_STRING &quot;Open MPI 1.4.3&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_MINOR_VERSION 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_RELEASE_VERSION 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_VERSION &quot;3&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_RELEASE_DATE &quot;Oct 05, 2010&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define ORTE_MINOR_VERSION 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define ORTE_RELEASE_VERSION 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define ORTE_VERSION &quot;3&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define ORTE_RELEASE_DATE &quot;Oct 05, 2010&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OPAL_MINOR_VERSION 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OPAL_RELEASE_VERSION 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OPAL_VERSION &quot;3&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OPAL_RELEASE_DATE &quot;Oct 05, 2010&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_ENABLE_PROGRESS_THREADS 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_ARCH &quot;x86_64-apple-darwin11.2.0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_GROUP_SPARSE 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define ORTE_DISABLE_FULL_SUPPORT 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OPAL_ENABLE_FT 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OPAL_ENABLE_FT_CR 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_WANT_HOME_CONFIG_FILES 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OPAL_PACKAGE_STRING &quot;Open MPI charles_at_Charles.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Distribution&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OPAL_IDENT_STRING &quot;1.4.3&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define OMPI_OPENIB_PAD_HDR 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | main ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |   ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |   return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:6477: error: in `/Downloads/openmpi-1.4.3':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:6480: error: C compiler cannot create executables
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See `config.log' for more details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="17713.php">David Turner: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17711.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp	for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17710.php">Barrett, Brian W: "Re: [OMPI users] MPI on MacOS Lion help"</a>
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
