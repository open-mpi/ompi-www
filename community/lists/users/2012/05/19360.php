<?
$subject_val = "Re: [OMPI users] ***UNCHECKED*** OpenMPI build configure error on Windows 7 / MinGW";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 06:19:18 2012" -->
<!-- isoreceived="20120524101918" -->
<!-- sent="Thu, 24 May 2012 12:19:55 +0200" -->
<!-- isosent="20120524101955" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ***UNCHECKED*** OpenMPI build configure error on Windows 7 / MinGW" -->
<!-- id="4FBE0B4B.4070905_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47CFDAD3BBD4F94D9EA3B68DD4987DC788C2F061EB_at_SBS.domain.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] ***UNCHECKED*** OpenMPI build configure error on Windows 7 / MinGW<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 06:19:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19361.php">Shiqing Fan: "Re: [OMPI users] scope of MPI_publish/Lookup_name of openmpi on windows 7"</a>
<li><strong>Previous message:</strong> <a href="19359.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19041.php">Kjell-Arne Solli: "[OMPI users] OpenMPI build configure error on Windows 7 / MinGW"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Kjell-Arne,
<br>
<p>The released installed is configured only with Intel Fortran compiler, 
<br>
it won't work with other Fortran compilers. If you want to stick with 
<br>
GNU compilers, you probably could try GNU f77 or g95. But anyway, the 
<br>
MinGW build is only experimental, there still might be runtime issues.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2012-04-18 4:45 PM, Kjell-Arne Solli wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have trouble building an OpenMPI environment on Windows 7 -64bit for 
</span><br>
<span class="quotelev1">&gt; use by simulation software written for Linux-environment, please help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use a single workstation with two processors (sums up to 12 cores). 
</span><br>
<span class="quotelev1">&gt; The HP-MPI environment is already present for some other software 
</span><br>
<span class="quotelev1">&gt; (installed from binaries).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed MinGW/MSYS with GCC compiler suite, and the 
</span><br>
<span class="quotelev1">&gt; simulation software is compiled and runs in serial mode ok. I have 
</span><br>
<span class="quotelev1">&gt; also tried to compile the F77 source code of the simulation software 
</span><br>
<span class="quotelev1">&gt; in Windows (using Silverfrost FTN95 or Microsoft Visualstudio trial 
</span><br>
<span class="quotelev1">&gt; version), but there was a lot of compilation errors, despite 'standard 
</span><br>
<span class="quotelev1">&gt; Fortran F77'. It is not my code -- I'm only a user -- so I must stick 
</span><br>
<span class="quotelev1">&gt; to the GNU compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried to install the Windows binary of OpenMPI 1.5.4 (64bit) 
</span><br>
<span class="quotelev1">&gt; which installs ok. The compilation of the simulation software failed 
</span><br>
<span class="quotelev1">&gt; since the compiler wrappers assumed the Intel fortran compiler and its 
</span><br>
<span class="quotelev1">&gt; format of options, plus 'libraries not found'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, OpenMPI version 1.5.5 is downloaded and unpacked to directory 
</span><br>
<span class="quotelev1">&gt; c:\openmpi-1.5.5\ and I run the configure script inside a MinGW-shell 
</span><br>
<span class="quotelev1">&gt; from directory c:\OpenMPI\ where I want to build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 'configure' part seems to run ok, but error is encountered in the 
</span><br>
<span class="quotelev1">&gt; 'Compiler and preprocessor tests' part,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the last lines are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of char... 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of short... 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of int... 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of long... 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of long long... 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of float... 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of double... 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of long double... 12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of float _Complex... 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of double _Complex... configure: error: in `/c/openmpi':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: error: cannot compute sizeof (double _Complex)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The config.log file,
</span><br>
<span class="quotelev1">&gt; the last lines are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_CHAR 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_SHORT 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_LONG 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_FLOAT 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_DOUBLE 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_LONG_DOUBLE 12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_FLOAT__COMPLEX 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: exit 77
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure screen output (file configure.output) and the log file 
</span><br>
<span class="quotelev1">&gt; (config.log) are attached in file config.output.tar.bz2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Previous attempts to install OpenMPI include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using CMake version 2.8, OpenMPI version 1.4.4, using the GCC 
</span><br>
<span class="quotelev1">&gt; compilers &gt; lots of errors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using CMake version 2.8, OpenMPI version 1.4.4, using VisualStudio2010 
</span><br>
<span class="quotelev1">&gt; (trial version) solution files &gt; lots of errors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI version 1.4.4, running configure script inside MinGW shell, 
</span><br>
<span class="quotelev1">&gt; followed by make all and make install &gt; failed during make install 
</span><br>
<span class="quotelev1">&gt; step. Possibly some errors during configure which I didn't understand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Kjell-Arne*
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
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19360/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19361.php">Shiqing Fan: "Re: [OMPI users] scope of MPI_publish/Lookup_name of openmpi on windows 7"</a>
<li><strong>Previous message:</strong> <a href="19359.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19041.php">Kjell-Arne Solli: "[OMPI users] OpenMPI build configure error on Windows 7 / MinGW"</a>
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
