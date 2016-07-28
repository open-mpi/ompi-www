<?
$subject_val = "[OMPI users] OpenMPI build configure error on Windows 7 / MinGW";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 18 10:45:50 2012" -->
<!-- isoreceived="20120418144550" -->
<!-- sent="Wed, 18 Apr 2012 16:45:41 +0200" -->
<!-- isosent="20120418144541" -->
<!-- name="Kjell-Arne Solli" -->
<!-- email="Kjell-Arne.Solli_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI build configure error on Windows 7 / MinGW" -->
<!-- id="47CFDAD3BBD4F94D9EA3B68DD4987DC788C2F061EB_at_SBS.domain.local" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI build configure error on Windows 7 / MinGW<br>
<strong>From:</strong> Kjell-Arne Solli (<em>Kjell-Arne.Solli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-18 10:45:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19042.php">Anton Morgan: "Re: [OMPI users] OpenMPI build configure error on Windows 7 / MinGW"</a>
<li><strong>Previous message:</strong> <a href="19040.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19042.php">Anton Morgan: "Re: [OMPI users] OpenMPI build configure error on Windows 7 / MinGW"</a>
<li><strong>Reply:</strong> <a href="19042.php">Anton Morgan: "Re: [OMPI users] OpenMPI build configure error on Windows 7 / MinGW"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19360.php">Shiqing Fan: "Re: [OMPI users] ***UNCHECKED*** OpenMPI build configure error on Windows 7 / MinGW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have trouble building an OpenMPI environment on Windows 7 -64bit for use by simulation software written for Linux-environment, please help.
<br>
<p>I use a single workstation with two processors (sums up to 12 cores). The HP-MPI environment is already present for some other software (installed from binaries).
<br>
<p>I have installed MinGW/MSYS with GCC compiler suite, and the simulation software is compiled and runs in serial mode ok. I have also tried to compile the F77 source code of the simulation software in Windows (using Silverfrost FTN95 or Microsoft Visualstudio trial version), but there was a lot of compilation errors, despite 'standard Fortran F77'. It is not my code - I'm only a user - so I must stick to the GNU compilers.
<br>
<p>I have tried to install the Windows binary of OpenMPI 1.5.4 (64bit) which installs ok. The compilation of the simulation software failed since the compiler wrappers assumed the Intel fortran compiler and its format of options, plus 'libraries not found'.
<br>
<p>Now, OpenMPI version 1.5.5 is downloaded and unpacked to directory c:\openmpi-1.5.5\ and I run the configure script inside a MinGW-shell from directory c:\OpenMPI\ where I want to build.
<br>
<p>The 'configure' part seems to run ok, but error is encountered in the 'Compiler and preprocessor tests' part,
<br>
the last lines are:
<br>
checking size of char... 1
<br>
checking size of short... 2
<br>
checking size of int... 4
<br>
checking size of long... 4
<br>
checking size of long long... 8
<br>
checking size of float... 4
<br>
checking size of double... 8
<br>
checking size of long double... 12
<br>
checking size of float _Complex... 8
<br>
checking size of double _Complex... configure: error: in `/c/openmpi':
<br>
configure: error: cannot compute sizeof (double _Complex)
<br>
See `config.log' for more details
<br>
<p>The config.log file,
<br>
the last lines are:
<br>
#define SIZEOF_CHAR 1
<br>
#define SIZEOF_SHORT 2
<br>
#define SIZEOF_INT 4
<br>
#define SIZEOF_LONG 4
<br>
#define SIZEOF_LONG_LONG 8
<br>
#define SIZEOF_FLOAT 4
<br>
#define SIZEOF_DOUBLE 8
<br>
#define SIZEOF_LONG_DOUBLE 12
<br>
#define SIZEOF_FLOAT__COMPLEX 8
<br>
<p>configure: exit 77
<br>
<p>The configure screen output (file configure.output) and the log file (config.log) are attached in file config.output.tar.bz2.
<br>
<p>Previous attempts to install OpenMPI include:
<br>
Using CMake version 2.8, OpenMPI version 1.4.4, using the GCC compilers &gt; lots of errors
<br>
Using CMake version 2.8, OpenMPI version 1.4.4, using VisualStudio2010 (trial version) solution files &gt; lots of errors
<br>
OpenMPI version 1.4.4, running configure script inside MinGW shell, followed by make all and make install &gt; failed during make install step. Possibly some errors during configure which I didn't understand.
<br>
<p>kind regards
<br>
<p>Kjell-Arne
<br>
<p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19041/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19041/config.output.tar.bz2">config.output.tar.bz2</a>
</ul>
<!-- attachment="config.output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19042.php">Anton Morgan: "Re: [OMPI users] OpenMPI build configure error on Windows 7 / MinGW"</a>
<li><strong>Previous message:</strong> <a href="19040.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19042.php">Anton Morgan: "Re: [OMPI users] OpenMPI build configure error on Windows 7 / MinGW"</a>
<li><strong>Reply:</strong> <a href="19042.php">Anton Morgan: "Re: [OMPI users] OpenMPI build configure error on Windows 7 / MinGW"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19360.php">Shiqing Fan: "Re: [OMPI users] ***UNCHECKED*** OpenMPI build configure error on Windows 7 / MinGW"</a>
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
