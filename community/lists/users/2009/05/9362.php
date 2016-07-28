<?
$subject_val = "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 11:31:22 2009" -->
<!-- isoreceived="20090518153122" -->
<!-- sent="Mon, 18 May 2009 11:31:16 -0400" -->
<!-- isosent="20090518153116" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile" -->
<!-- id="4034E6EE-86B4-4172-B1F6-7E5172A627BD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="30876C39-5029-4773-A324-6069E7318389_at_swarthmore.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 11:31:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9363.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Previous message:</strong> <a href="9361.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9360.php">John Boccio: "[OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9363.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Reply:</strong> <a href="9363.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check first to make sure you're using the mpif90 in /usr/local/ 
<br>
openmpi-1.3/bin -- OS X ships with an Open MPI installation that does  
<br>
not include F90 support.  The default OS X Open MPI install may be in  
<br>
your PATH before the Open MPI you just installed in /usr/local.
<br>
<p><p>On May 18, 2009, at 10:13 AM, John Boccio wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to use mpif90 for some work on a parallel cluster for galaxy- 
</span><br>
<span class="quotelev1">&gt; galaxy collision research.
</span><br>
<span class="quotelev1">&gt; I am certainly not an expert in using UNIX to compile big packages  
</span><br>
<span class="quotelev1">&gt; like openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have list below all (I hope) relevant information and included  
</span><br>
<span class="quotelev1">&gt; output files(compressed) as an attachment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; John Boccio
</span><br>
<span class="quotelev1">&gt; boccio_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; Swarthmore College
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is g95 and xcode info.
</span><br>
<span class="quotelev1">&gt; Using openmpi-1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mac OSX Leopard 10.5.7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g95 from www.g95.com
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g95 -v
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target:
</span><br>
<span class="quotelev1">&gt; Configured with: ../configure --enable-languages=c
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.0.3 (g95 0.92!) Oct 18 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xcode311_2517_developerdvd.dmg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sudo ./configure --enable-mpi-f77 --enable-mpi-f90 F77=&quot;/usr/bin/ 
</span><br>
<span class="quotelev1">&gt; g95&quot; FC=&quot;/usr/bin/g95&quot; &gt; config.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sudo make clean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sudo make clean prefix=/usr/local/openmpi-1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sudo make &gt; make.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sudo make install prefix=/usr/local/openmpi-1.3 &gt; make-install.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3/bin/mpif90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; files included in attachment   ompi-output.tar.gz :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; config.out
</span><br>
<span class="quotelev1">&gt; config.status
</span><br>
<span class="quotelev1">&gt; config.log
</span><br>
<span class="quotelev1">&gt; Makefile
</span><br>
<span class="quotelev1">&gt; make.out
</span><br>
<span class="quotelev1">&gt; make-install.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.gz&gt;&lt;ATT11623955.htm&gt;
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9363.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Previous message:</strong> <a href="9361.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9360.php">John Boccio: "[OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9363.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Reply:</strong> <a href="9363.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
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
