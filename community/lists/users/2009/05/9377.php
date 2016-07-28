<?
$subject_val = "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 07:58:23 2009" -->
<!-- isoreceived="20090519115823" -->
<!-- sent="Tue, 19 May 2009 07:58:17 -0400" -->
<!-- isosent="20090519115817" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile" -->
<!-- id="C7F5CD2F-A1D8-4AC9-8E0C-A6216D547220_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="96D4B4AC-6D03-4FE0-BD8D-F0A76F29A0B5_at_swarthmore.edu" -->
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
<strong>Date:</strong> 2009-05-19 07:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9378.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9376.php">Jeff Squyres: "Re: [OMPI users] Problem installing Dalton with OpenMPI overPelicanHPC"</a>
<li><strong>In reply to:</strong> <a href="9363.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9394.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Reply:</strong> <a href="9394.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 18, 2009, at 11:50 AM, John Boccio wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for that comment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought that is what I was doing when I used the full path name
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3/bin/mpif90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that not true?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ah, yes it is -- sorry, I missed that at the end of your output.
<br>
<p>The tarball you sent doesn't seem to match what you typed in the mail,  
<br>
however -- there was no --prefix specified when you ran configure,  
<br>
there was no config.out, etc.  I suspect that you're somehow using an  
<br>
Open MPI that didn't have F90 support compiled in somehow -- did you  
<br>
install more than once, perchance?
<br>
<p>What does ompi_info say?  There should be some lines in there about  
<br>
F90 support.  Here's mine from an OMPI installed without F90 support:
<br>
<p>[4:57] svbu-mpi:~/svn/ompi2 % ompi_info | grep 90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: no
<br>
&nbsp;&nbsp;Fortran90 bindings size: na
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: none
<br>
&nbsp;&nbsp;&nbsp;Fortran90 compiler abs: none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: no
<br>
[4:57] svbu-mpi:~/svn/ompi2 %
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; John Boccio
</span><br>
<span class="quotelev1">&gt; On May 18, 2009, at 11:31 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Check first to make sure you're using the mpif90 in /usr/local/
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.3/bin -- OS X ships with an Open MPI installation that
</span><br>
<span class="quotelev2">&gt; &gt; does not include F90 support.  The default OS X Open MPI install may
</span><br>
<span class="quotelev2">&gt; &gt; be in your PATH before the Open MPI you just installed in /usr/ 
</span><br>
<span class="quotelev1">&gt; local.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 18, 2009, at 10:13 AM, John Boccio wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I need to use mpif90 for some work on a parallel cluster for  
</span><br>
<span class="quotelev1">&gt; galaxy-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; galaxy collision research.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am certainly not an expert in using UNIX to compile big packages
</span><br>
<span class="quotelev3">&gt; &gt;&gt; like openmpi.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have list below all (I hope) relevant information and included
</span><br>
<span class="quotelev3">&gt; &gt;&gt; output files(compressed) as an attachment.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for any help,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; John Boccio
</span><br>
<span class="quotelev3">&gt; &gt;&gt; boccio_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Department of Physics
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Swarthmore College
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is g95 and xcode info.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Using openmpi-1.3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mac OSX Leopard 10.5.7
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; g95 from www.g95.com
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; g95 -v
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Target:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Configured with: ../configure --enable-languages=c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thread model: posix
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gcc version 4.0.3 (g95 0.92!) Oct 18 2008
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; xcode311_2517_developerdvd.dmg
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; openmpi-1.3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sudo ./configure --enable-mpi-f77 --enable-mpi-f90 F77=&quot;/usr/bin/
</span><br>
<span class="quotelev3">&gt; &gt;&gt; g95&quot; FC=&quot;/usr/bin/g95&quot; &gt; config.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sudo make clean
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sudo make clean prefix=/usr/local/openmpi-1.3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sudo make &gt; make.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sudo make install prefix=/usr/local/openmpi-1.3 &gt; make-install.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/local/openmpi-1.3/bin/mpif90
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fortran 90 support.  As such, the mpif90 compiler is non- 
</span><br>
<span class="quotelev1">&gt; functional.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; files included in attachment   ompi-output.tar.gz :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; config.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; config.status
</span><br>
<span class="quotelev3">&gt; &gt;&gt; config.log
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Makefile
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make-install.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;ompi-output.tar.gz&gt;&lt;ATT11623955.htm&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9378.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9376.php">Jeff Squyres: "Re: [OMPI users] Problem installing Dalton with OpenMPI overPelicanHPC"</a>
<li><strong>In reply to:</strong> <a href="9363.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9394.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Reply:</strong> <a href="9394.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
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
