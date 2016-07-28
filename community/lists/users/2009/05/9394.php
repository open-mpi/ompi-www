<?
$subject_val = "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 14:08:06 2009" -->
<!-- isoreceived="20090519180806" -->
<!-- sent="Tue, 19 May 2009 14:07:57 -0400" -->
<!-- isosent="20090519180757" -->
<!-- name="John Boccio" -->
<!-- email="boccio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile" -->
<!-- id="6730142D-2731-45EC-98B6-03D6D88DE09B_at_swarthmore.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C7F5CD2F-A1D8-4AC9-8E0C-A6216D547220_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile<br>
<strong>From:</strong> John Boccio (<em>boccio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 14:07:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9395.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Previous message:</strong> <a href="9393.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9377.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9395.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Reply:</strong> <a href="9395.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tired the whole thing again from scratch.
<br>
<p>Here is g95 and xcode info.
<br>
Using openmpi-1.3
<br>
<p>Mac OSX Leopard 10.5.7
<br>
<p>g95 from www.g95.com
<br>
<p>g95 -v
<br>
Using built-in specs.
<br>
Target:
<br>
Configured with: ../configure --enable-languages=c
<br>
Thread model: posix
<br>
gcc version 4.0.3 (g95 0.92!) Oct 18 2008
<br>
<p>xcode311_2517_developerdvd.dmg
<br>
<p>openmpi-1.3
<br>
<p>sudo ./configure --enable-mpi-f77 --enable-mpi-f90 F77=&quot;/usr/bin/g95&quot;  
<br>
FC=&quot;/usr/bin/g95&quot; &gt; config.out
<br>
<p>sudo make clean
<br>
<p>sudo make clean prefix=/usr/local/openmpi-1.3
<br>
<p>sudo make &gt; make.out
<br>
<p>sudo make install prefix=/usr/local/openmpi-1.3 &gt; make-install.out
<br>
<p>/usr/local/openmpi-1.3/bin/mpif90
<br>
<p>--------------------------------------------------------------------------
<br>
Unfortunately, this installation of Open MPI was not compiled with
<br>
Fortran 90 support.  As such, the mpif90 compiler is non-functional.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;****** NEW *******
<br>
/usr/local/openmpi-1.3/bin/ompi_info
<br>
dyld: Symbol not found: _opal_memchecker_base_components_opened
<br>
&nbsp;&nbsp;&nbsp;Referenced from: /usr/local/openmpi-1.3/bin/./ompi_info
<br>
&nbsp;&nbsp;&nbsp;Expected in: /usr/lib/libopen-pal.0.dylib
<br>
<p>Trace/BPT trap
<br>
<p>If, however, I run the ompi_info created in the local directory from  
<br>
the make command
<br>
(without the install option) above I get this instead....
<br>
<p>/Users/Research/g95/may19/openmpi-1.3/ompi/tools/ompi_info/ompi_info
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI root_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r20295
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open MPI release date: Jan 19, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r20295
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open RTE release date: Jan 19, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r20295
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Jan 19, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr/local
<br>
&nbsp;&nbsp;Configured architecture: i386-apple-darwin9.7.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: reality.physics.swarthmore.edu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Tue May 19 13:10:26 EDT 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: reality.physics.swarthmore.edu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Tue May 19 13:26:16 EDT 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: reality.physics.swarthmore.edu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (double underscore)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: /usr/bin/g95
<br>
&nbsp;&nbsp;&nbsp;Fortran77 compiler abs:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: /usr/bin/g95
<br>
&nbsp;&nbsp;&nbsp;Fortran90 compiler abs:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
&nbsp;&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
Symbol visibility support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FT Checkpoint support: no  (checkpoint thread: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: darwin (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.3)
<br>
<p>So something is happening during the make install into /usr/local/ 
<br>
openmpi-1.3.
<br>
Instead of looking for libraries in  /usr/local/openmpi-1.3/lib it
<br>
is looking in /usr/lib.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;******* NEW *********
<br>
files inlcuded:
<br>
<p>config.out
<br>
config.status
<br>
config.log
<br>
Makefile
<br>
make.out
<br>
make-install.out
<br>
<p><p>

<br><p>
<p><p><p>On May 19, 2009, at 7:58 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 18, 2009, at 11:50 AM, John Boccio wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for that comment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I thought that is what I was doing when I used the full path name
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.3/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that not true?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, yes it is -- sorry, I missed that at the end of your output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The tarball you sent doesn't seem to match what you typed in the  
</span><br>
<span class="quotelev1">&gt; mail, however -- there was no --prefix specified when you ran  
</span><br>
<span class="quotelev1">&gt; configure, there was no config.out, etc.  I suspect that you're  
</span><br>
<span class="quotelev1">&gt; somehow using an Open MPI that didn't have F90 support compiled in  
</span><br>
<span class="quotelev1">&gt; somehow -- did you install more than once, perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does ompi_info say?  There should be some lines in there about  
</span><br>
<span class="quotelev1">&gt; F90 support.  Here's mine from an OMPI installed without F90 support:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [4:57] svbu-mpi:~/svn/ompi2 % ompi_info | grep 90
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;     Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt; [4:57] svbu-mpi:~/svn/ompi2 %
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; John Boccio
</span><br>
<span class="quotelev2">&gt;&gt; On May 18, 2009, at 11:31 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Check first to make sure you're using the mpif90 in /usr/local/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; openmpi-1.3/bin -- OS X ships with an Open MPI installation that
</span><br>
<span class="quotelev3">&gt;&gt; &gt; does not include F90 support.  The default OS X Open MPI install  
</span><br>
<span class="quotelev2">&gt;&gt; may
</span><br>
<span class="quotelev3">&gt;&gt; &gt; be in your PATH before the Open MPI you just installed in /usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; local.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On May 18, 2009, at 10:13 AM, John Boccio wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I need to use mpif90 for some work on a parallel cluster for  
</span><br>
<span class="quotelev2">&gt;&gt; galaxy-
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; galaxy collision research.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I am certainly not an expert in using UNIX to compile big packages
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; like openmpi.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I have list below all (I hope) relevant information and included
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; output files(compressed) as an attachment.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thanks for any help,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; John Boccio
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; boccio_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Department of Physics
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Swarthmore College
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Here is g95 and xcode info.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Using openmpi-1.3
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Mac OSX Leopard 10.5.7
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; g95 from www.g95.com
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; g95 -v
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Target:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Configured with: ../configure --enable-languages=c
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thread model: posix
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; gcc version 4.0.3 (g95 0.92!) Oct 18 2008
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; xcode311_2517_developerdvd.dmg
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; openmpi-1.3
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; sudo ./configure --enable-mpi-f77 --enable-mpi-f90 F77=&quot;/usr/bin/
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; g95&quot; FC=&quot;/usr/bin/g95&quot; &gt; config.out
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; sudo make clean
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; sudo make clean prefix=/usr/local/openmpi-1.3
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; sudo make &gt; make.out
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; sudo make install prefix=/usr/local/openmpi-1.3 &gt; make-install.out
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; /usr/local/openmpi-1.3/bin/mpif90
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Fortran 90 support.  As such, the mpif90 compiler is non- 
</span><br>
<span class="quotelev2">&gt;&gt; functional.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; files included in attachment   ompi-output.tar.gz :
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; config.out
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; config.status
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; config.log
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Makefile
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make.out
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make-install.out
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &lt;ompi-output.tar.gz&gt;&lt;ATT11623955.htm&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9394/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9395.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Previous message:</strong> <a href="9393.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9377.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9395.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Reply:</strong> <a href="9395.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
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
