<?
$subject_val = "[OMPI users] MPI on MacOS Lion help";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 17:09:00 2011" -->
<!-- isoreceived="20111104210900" -->
<!-- sent="Fri, 4 Nov 2011 16:08:54 -0500" -->
<!-- isosent="20111104210854" -->
<!-- name="Charles Shelor" -->
<!-- email="cfshelor_at_[hidden]" -->
<!-- subject="[OMPI users] MPI on MacOS Lion help" -->
<!-- id="0BEF051F-D36C-47A3-8E39-9B9FF5C16445_at_sbcglobal.net" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] MPI on MacOS Lion help<br>
<strong>From:</strong> Charles Shelor (<em>cfshelor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 17:08:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17709.php">Ralph Castain: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<li><strong>Previous message:</strong> <a href="17707.php">Rushton Martin: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17709.php">Ralph Castain: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<li><strong>Reply:</strong> <a href="17709.php">Ralph Castain: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had downloaded and installed OpenMPI on my Mac OS-X 10.6 machine a few months ago.  I ran the configure and install commands from the FAQ with no problems.  I recently upgraded to Max OS-X 10.7 (Lion) and now when I run mpicc it cannot find the standard C library headers (stdio.h, std lib.h&#133;)  I had noticed that I had to modify my path to point to the Xcode gcc executable, /Developer/usr/bin/gcc, (I believe 10.6 included gcc in /usr/bin, but 10.7 does not appear to include it there now).  So I figured that I could just reinstall OpenMPI and it would be able to locate the new libraries.  However, during the &quot;configure&quot; operation I received the messages below.  I normally use the Apple Xcode IDE for my initial code development and then compile using mpicc from a terminal window.  gcc also fails to find the standard libraries from the command line.  Is there an environment variable that I should set that tells gcc where the libraries are located?
<br>
<p>Thank you!
<br>
<p>Charles
<br>
&nbsp;
<br>
<p>============================================================================
<br>
== Compiler and preprocessor tests
<br>
============================================================================
<br>
<p>*** C compiler and preprocessor
<br>
checking for style of include used by make... GNU
<br>
checking for gcc... gcc
<br>
checking for C compiler default output file name... 
<br>
configure: error: in `/Downloads/openmpi-1.4.3':
<br>
configure: error: C compiler cannot create executables
<br>
See `config.log' for more details.
<br>
<p><p><p>Here is what I think is the relevant output from 'config.log'
<br>
<p><p><p>configure:6362: $? = 0
<br>
configure:6369: gcc -v &gt;&amp;5
<br>
Using built-in specs.
<br>
Target: i686-apple-darwin10
<br>
Configured with: /var/tmp/gcc/gcc-5666.3~6/src/configure --disable-checking --enable-werror --prefix=/usr --mandir=/share/man --enable-languages=c,objc,c++,obj-c++ --program-transform-name=/^[cg][^.-]*$/s/$/-4.2/ --with-slibdir=/usr/lib --build=i686-apple-darwin10 --program-prefix=i686-apple-darwin10- --host=x86_64-apple-darwin10 --target=i686-apple-darwin10 --with-gxx-include-dir=/include/c++/4.2.1
<br>
Thread model: posix
<br>
gcc version 4.2.1 (Apple Inc. build 5666) (dot 3)
<br>
configure:6373: $? = 0
<br>
configure:6380: gcc -V &gt;&amp;5
<br>
gcc-4.2: argument to `-V' is missing
<br>
configure:6384: $? = 1
<br>
configure:6407: checking for C compiler default output file name
<br>
configure:6429: gcc -DNDEBUG    conftest.c  &gt;&amp;5
<br>
ld: library not found for -lcrt1.10.6.o
<br>
collect2: ld returned 1 exit status
<br>
configure:6433: $? = 1
<br>
configure:6471: result: 
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
| #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
| #define PACKAGE_VERSION &quot;1.4.3&quot;
<br>
| #define PACKAGE_STRING &quot;Open MPI 1.4.3&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
| #define OMPI_MAJOR_VERSION 1
<br>
| #define OMPI_MINOR_VERSION 4
<br>
| #define OMPI_RELEASE_VERSION 3
<br>
| #define OMPI_GREEK_VERSION &quot;&quot;
<br>
| #define OMPI_VERSION &quot;3&quot;
<br>
| #define OMPI_RELEASE_DATE &quot;Oct 05, 2010&quot;
<br>
| #define ORTE_MAJOR_VERSION 1
<br>
| #define ORTE_MINOR_VERSION 4
<br>
| #define ORTE_RELEASE_VERSION 3
<br>
| #define ORTE_GREEK_VERSION &quot;&quot;
<br>
| #define ORTE_VERSION &quot;3&quot;
<br>
| #define ORTE_RELEASE_DATE &quot;Oct 05, 2010&quot;
<br>
| #define OPAL_MAJOR_VERSION 1
<br>
| #define OPAL_MINOR_VERSION 4
<br>
| #define OPAL_RELEASE_VERSION 3
<br>
| #define OPAL_GREEK_VERSION &quot;&quot;
<br>
| #define OPAL_VERSION &quot;3&quot;
<br>
| #define OPAL_RELEASE_DATE &quot;Oct 05, 2010&quot;
<br>
| #define OMPI_ENABLE_PROGRESS_THREADS 0
<br>
| #define OMPI_ARCH &quot;x86_64-apple-darwin11.2.0&quot;
<br>
| #define OMPI_ENABLE_MEM_DEBUG 0
<br>
| #define OMPI_ENABLE_MEM_PROFILE 0
<br>
| #define OMPI_ENABLE_DEBUG 0
<br>
| #define OMPI_GROUP_SPARSE 0
<br>
| #define OMPI_WANT_MPI_CXX_SEEK 1
<br>
| #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
| #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
| #define OMPI_WANT_PERUSE 0
<br>
| #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
| #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 0
<br>
| #define OPAL_ENABLE_TRACE 0
<br>
| #define ORTE_DISABLE_FULL_SUPPORT 0
<br>
| #define OPAL_ENABLE_FT 0
<br>
| #define OPAL_ENABLE_FT_CR 0
<br>
| #define OMPI_WANT_HOME_CONFIG_FILES 1
<br>
| #define OPAL_ENABLE_IPV6 1
<br>
| #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
<br>
| #define OPAL_PACKAGE_STRING &quot;Open MPI charles_at_Charles.local Distribution&quot;
<br>
| #define OPAL_IDENT_STRING &quot;1.4.3&quot;
<br>
| #define OMPI_OPENIB_PAD_HDR 0
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| 
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:6477: error: in `/Downloads/openmpi-1.4.3':
<br>
configure:6480: error: C compiler cannot create executables
<br>
See `config.log' for more details.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17709.php">Ralph Castain: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<li><strong>Previous message:</strong> <a href="17707.php">Rushton Martin: "Re: [OMPI users] UC EXTERNAL: Re: How to set up state-less node /tmpfor OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17709.php">Ralph Castain: "Re: [OMPI users] MPI on MacOS Lion help"</a>
<li><strong>Reply:</strong> <a href="17709.php">Ralph Castain: "Re: [OMPI users] MPI on MacOS Lion help"</a>
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
