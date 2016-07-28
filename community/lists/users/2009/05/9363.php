<?
$subject_val = "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 11:50:41 2009" -->
<!-- isoreceived="20090518155041" -->
<!-- sent="Mon, 18 May 2009 11:50:33 -0400" -->
<!-- isosent="20090518155033" -->
<!-- name="John Boccio" -->
<!-- email="boccio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile" -->
<!-- id="96D4B4AC-6D03-4FE0-BD8D-F0A76F29A0B5_at_swarthmore.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4034E6EE-86B4-4172-B1F6-7E5172A627BD_at_cisco.com" -->
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
<strong>Date:</strong> 2009-05-18 11:50:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9364.php">Iain Bason: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Previous message:</strong> <a href="9362.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>In reply to:</strong> <a href="9362.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9377.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Reply:</strong> <a href="9377.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for that comment.
<br>
<p>I thought that is what I was doing when I used the full path name
<br>
<p>/usr/local/openmpi-1.3/bin/mpif90
<br>
<p>Is that not true?
<br>
<p>John Boccio
<br>
On May 18, 2009, at 11:31 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Check first to make sure you're using the mpif90 in /usr/local/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3/bin -- OS X ships with an Open MPI installation that  
</span><br>
<span class="quotelev1">&gt; does not include F90 support.  The default OS X Open MPI install may  
</span><br>
<span class="quotelev1">&gt; be in your PATH before the Open MPI you just installed in /usr/local.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 18, 2009, at 10:13 AM, John Boccio wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I need to use mpif90 for some work on a parallel cluster for galaxy- 
</span><br>
<span class="quotelev2">&gt;&gt; galaxy collision research.
</span><br>
<span class="quotelev2">&gt;&gt; I am certainly not an expert in using UNIX to compile big packages  
</span><br>
<span class="quotelev2">&gt;&gt; like openmpi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have list below all (I hope) relevant information and included  
</span><br>
<span class="quotelev2">&gt;&gt; output files(compressed) as an attachment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any help,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; John Boccio
</span><br>
<span class="quotelev2">&gt;&gt; boccio_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Department of Physics
</span><br>
<span class="quotelev2">&gt;&gt; Swarthmore College
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is g95 and xcode info.
</span><br>
<span class="quotelev2">&gt;&gt; Using openmpi-1.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mac OSX Leopard 10.5.7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g95 from www.g95.com
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g95 -v
</span><br>
<span class="quotelev2">&gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev2">&gt;&gt; Target:
</span><br>
<span class="quotelev2">&gt;&gt; Configured with: ../configure --enable-languages=c
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt; gcc version 4.0.3 (g95 0.92!) Oct 18 2008
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; xcode311_2517_developerdvd.dmg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sudo ./configure --enable-mpi-f77 --enable-mpi-f90 F77=&quot;/usr/bin/ 
</span><br>
<span class="quotelev2">&gt;&gt; g95&quot; FC=&quot;/usr/bin/g95&quot; &gt; config.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sudo make clean
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sudo make clean prefix=/usr/local/openmpi-1.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sudo make &gt; make.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sudo make install prefix=/usr/local/openmpi-1.3 &gt; make-install.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi-1.3/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev2">&gt;&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; files included in attachment   ompi-output.tar.gz :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; config.out
</span><br>
<span class="quotelev2">&gt;&gt; config.status
</span><br>
<span class="quotelev2">&gt;&gt; config.log
</span><br>
<span class="quotelev2">&gt;&gt; Makefile
</span><br>
<span class="quotelev2">&gt;&gt; make.out
</span><br>
<span class="quotelev2">&gt;&gt; make-install.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi-output.tar.gz&gt;&lt;ATT11623955.htm&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9364.php">Iain Bason: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Previous message:</strong> <a href="9362.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>In reply to:</strong> <a href="9362.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9377.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Reply:</strong> <a href="9377.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
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
