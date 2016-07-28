<?
$subject_val = "Re: [OMPI users] OpenMPI build configure error on Windows 7 / MinGW";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 18 11:16:42 2012" -->
<!-- isoreceived="20120418151642" -->
<!-- sent="Wed, 18 Apr 2012 11:16:37 -0400" -->
<!-- isosent="20120418151637" -->
<!-- name="Anton Morgan" -->
<!-- email="amorgan.cartech_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI build configure error on Windows 7 / MinGW" -->
<!-- id="CALC7Yaggw5r=9W6QfAaGBAK1k9=QqupjPCWJZt32UC=dmuLY+w_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI build configure error on Windows 7 / MinGW<br>
<strong>From:</strong> Anton Morgan (<em>amorgan.cartech_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-18 11:16:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19043.php">Jeffrey Squyres: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="19041.php">Kjell-Arne Solli: "[OMPI users] OpenMPI build configure error on Windows 7 / MinGW"</a>
<li><strong>In reply to:</strong> <a href="19041.php">Kjell-Arne Solli: "[OMPI users] OpenMPI build configure error on Windows 7 / MinGW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19360.php">Shiqing Fan: "Re: [OMPI users] ***UNCHECKED*** OpenMPI build configure error on Windows 7 / MinGW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm just user, but i wanted to give a heads up on using cywin/mingw
<br>
environment on Windows 7 64-bit.
<br>
<p>I would refer to:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2012/04/18959.php">http://www.open-mpi.org/community/lists/users/2012/04/18959.php</a> in regards
<br>
to an issue with mpi_send/mpi_receive using this environment.
<br>
<p>Now I installed OpenMPI 1.5.5 binary and did not compile it, so maybe if
<br>
you can get it to compile in this environment it might shed light to my
<br>
issue. Otherwise you might run into a similar issue. I have a simple mpi
<br>
hello world with a makefile in the my thread so that might help you also.
<br>
<p>-AMorgan
<br>
<p>On Wed, Apr 18, 2012 at 10:45 AM, Kjell-Arne Solli &lt;
<br>
Kjell-Arne.Solli_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have trouble building an OpenMPI environment on Windows 7 -64bit for use
</span><br>
<span class="quotelev1">&gt; by simulation software written for Linux-environment, please help. ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use a single workstation with two processors (sums up to 12 cores). The
</span><br>
<span class="quotelev1">&gt; HP-MPI environment is already present for some other software (installed
</span><br>
<span class="quotelev1">&gt; from binaries).****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed MinGW/MSYS with GCC compiler suite, and the simulation
</span><br>
<span class="quotelev1">&gt; software is compiled and runs in serial mode ok. I have also tried to
</span><br>
<span class="quotelev1">&gt; compile the F77 source code of the simulation software in Windows (using
</span><br>
<span class="quotelev1">&gt; Silverfrost FTN95 or Microsoft Visualstudio trial version), but there was a
</span><br>
<span class="quotelev1">&gt; lot of compilation errors, despite &#145;standard Fortran F77&#146;. It is not my
</span><br>
<span class="quotelev1">&gt; code &#150; I&#146;m only a user &#150; so I must stick to the GNU compilers.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried to install the Windows binary of OpenMPI 1.5.4 (64bit) which
</span><br>
<span class="quotelev1">&gt; installs ok. The compilation of the simulation software failed since the
</span><br>
<span class="quotelev1">&gt; compiler wrappers assumed the Intel fortran compiler and its format of
</span><br>
<span class="quotelev1">&gt; options, plus &#145;libraries not found&#146;.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, OpenMPI version 1.5.5 is downloaded and unpacked to directory
</span><br>
<span class="quotelev1">&gt; c:\openmpi-1.5.5\ and I run the configure script inside a MinGW-shell from
</span><br>
<span class="quotelev1">&gt; directory c:\OpenMPI\ where I want to build.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &#145;configure&#146; part seems to run ok, but error is encountered in the
</span><br>
<span class="quotelev1">&gt; &#145;Compiler and preprocessor tests&#146; part,****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the last lines are:****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of char... 1****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of short... 2****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of int... 4****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of long... 4****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of long long... 8****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of float... 4****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of double... 8****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of long double... 12****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of float _Complex... 8****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of double _Complex... configure: error: in `/c/openmpi':****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: error: cannot compute sizeof (double _Complex)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The config.log file,
</span><br>
<span class="quotelev1">&gt; the last lines are:****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_CHAR 1****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_SHORT 2****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_INT 4****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_LONG 4****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_LONG_LONG 8****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_FLOAT 4****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_DOUBLE 8****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_LONG_DOUBLE 12****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SIZEOF_FLOAT__COMPLEX 8****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: exit 77****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure screen output (file configure.output) and the log file
</span><br>
<span class="quotelev1">&gt; (config.log) are attached in file config.output.tar.bz2.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Previous attempts to install OpenMPI include:****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using CMake version 2.8, OpenMPI version 1.4.4, using the GCC compilers &gt;
</span><br>
<span class="quotelev1">&gt; lots of errors****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using CMake version 2.8, OpenMPI version 1.4.4, using VisualStudio2010
</span><br>
<span class="quotelev1">&gt; (trial version) solution files &gt; lots of errors****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI version 1.4.4, running configure script inside MinGW shell,
</span><br>
<span class="quotelev1">&gt; followed by make all and make install &gt; failed during make install step.
</span><br>
<span class="quotelev1">&gt; Possibly some errors during configure which I didn&#146;t understand.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kind regards****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Kjell-Arne*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
*AMorgan*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19042/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19043.php">Jeffrey Squyres: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="19041.php">Kjell-Arne Solli: "[OMPI users] OpenMPI build configure error on Windows 7 / MinGW"</a>
<li><strong>In reply to:</strong> <a href="19041.php">Kjell-Arne Solli: "[OMPI users] OpenMPI build configure error on Windows 7 / MinGW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19360.php">Shiqing Fan: "Re: [OMPI users] ***UNCHECKED*** OpenMPI build configure error on Windows 7 / MinGW"</a>
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
