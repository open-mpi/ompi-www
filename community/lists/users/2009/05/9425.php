<?
$subject_val = "Re: [OMPI users] OpenMPI installation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 11:18:22 2009" -->
<!-- isoreceived="20090526151822" -->
<!-- sent="Tue, 26 May 2009 11:18:04 -0400" -->
<!-- isosent="20090526151804" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI installation" -->
<!-- id="4A1C082C.6010208_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="375605620905221102l3984f6dfl883b54cb8d0e9e9b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI installation<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 11:18:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9426.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9424.php">Jeff Squyres: "Re: [OMPI users] Basic Question about MPI"</a>
<li><strong>In reply to:</strong> <a href="9416.php">&#214;&#239;&#223;&#226;&#239;&#242; &#202;&#239;&#245;&#234;&#239;&#245;&#226;&#223;&#237;&#231;&#242;: "[OMPI users] OpenMPI installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9460.php">Φοίβος Κουκουβίνης: "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>Reply:</strong> <a href="9460.php">Φοίβος Κουκουβίνης: "Re: [OMPI users] OpenMPI installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Fivoskouk
<br>
<p>I don't use Ubuntu.
<br>
However, we install OpenMPI from source with no problem on CentOS, 
<br>
Fedora, etc. All configuration options are available this way.
<br>
Works with gnu (gcc,g++,gfortran), Intel, PGI, etc.
<br>
We've been using 1.3.2.
<br>
<p>Suggestion:
<br>
<p>1) Install the Ubuntu gfortran, gcc, g++ packages, if anyone is missing.
<br>
<p>2) Install OpenMPI from source.
<br>
<p>**Read their README file and the FAQs,
<br>
they are an excellent source of information for new users.**
<br>
Most likely all your questions are already answered there,
<br>
a simple search will tell.
<br>
<p>Use the configure script --prefix option to choose the installation 
<br>
directory.  Preferably a NFS mounted directory (if you are on a 
<br>
cluster), and certainly not /usr or /usr/local, to avoid overwritting 
<br>
other MPIs that may be there already.
<br>
<p>Configure will also take the compilers of your choice, for instance:
<br>
Csh: setenv F90 gfortran; setenv CC ...
<br>
Bash: export F90=gfortran; export CC=...
<br>
<p>Then:
<br>
configure --prefix=/installation/dir ...
<br>
<p>3) Ifort is the Intel Fortran compiler.
<br>
If you have it and want to use it instead of gfortran,
<br>
you can try to replace gfortran above by the full path name to ifort.
<br>
<p>4) After you install OpenMPI, use full path names to mpicc, mpif90, 
<br>
mpiexec, etc, to avoid confusion with other MPIs in your system.
<br>
Or set you PATH variable on your .cshrc/.bashrc
<br>
to find the OpenMPI bin directory first.
<br>
Csh (.cshrc/.tcshrc): setenv PATH /openmpi-dir/bin:${PATH}
<br>
Bash (.bashrc): export PATH=/openmpi-dir/bin:${PATH}
<br>
<p><p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Fivoskouk wrote:
<br>
<span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; I want to install OpenMPI on my Ubuntu 8.10 64bit PC. My first attempt 
</span><br>
<span class="quotelev1">&gt; to install it was through the ubuntu package manager. From the synaptic 
</span><br>
<span class="quotelev1">&gt; manager I found, downloaded and installed OpenMPI 1.2.7 version. 
</span><br>
<span class="quotelev1">&gt; Unfortunately the installation package did not allow any configuration 
</span><br>
<span class="quotelev1">&gt; options in order to define the desired compilers as F77,F90 etc and when 
</span><br>
<span class="quotelev1">&gt; I type mpif77 for example I get the message
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt; Fortran 77 support.  As such, the mpif77 compiler is non-functional.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to uninstall this version of the MPI but I was not able to 
</span><br>
<span class="quotelev1">&gt; completely remove it. To explain what I mean : after removing it through 
</span><br>
<span class="quotelev1">&gt; the synaptic manager when I type the mpirun command in terminal I get 
</span><br>
<span class="quotelev1">&gt; the same message as above. Can anyone tell me what files do I have to 
</span><br>
<span class="quotelev1">&gt; remove so that I can completely clean my PC from that version and 
</span><br>
<span class="quotelev1">&gt; install an other version which will allow customizations? Alternatively 
</span><br>
<span class="quotelev1">&gt; is there any way to define the compilers after the MPI installation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now regarding a new clean installation of OpenMPI  : What version do you 
</span><br>
<span class="quotelev1">&gt; suggest me install on my pc? Is the latest version (1.3.2) stable enough?
</span><br>
<span class="quotelev1">&gt; As far as I have read in the readme/ installation documents to install 
</span><br>
<span class="quotelev1">&gt; the version 1.3.2 I have to run the ./configure command adding the 
</span><br>
<span class="quotelev1">&gt; --prefix=/installation/location and F77=77 fortran compiler ,etc (where 
</span><br>
<span class="quotelev1">&gt; fortran compiler is just the compilers name e.g. ifort not its location 
</span><br>
<span class="quotelev1">&gt; on the filesystem) and after that make all install, is that correct? Can 
</span><br>
<span class="quotelev1">&gt; I install OpenMPI at any directory or should I install it in the 
</span><br>
<span class="quotelev1">&gt; compiler's installation path?
</span><br>
<span class="quotelev1">&gt;  Do I have to make any other customization in the .bashrc in order 
</span><br>
<span class="quotelev1">&gt; OpenMPI to operate? If yes what do I have to add ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am a relatively new user in linux so detailed instruction would be 
</span><br>
<span class="quotelev1">&gt; appreciated. I am looking fowrward hearing from anyone who could help.
</span><br>
<span class="quotelev1">&gt; Thanks in advance. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="9426.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9424.php">Jeff Squyres: "Re: [OMPI users] Basic Question about MPI"</a>
<li><strong>In reply to:</strong> <a href="9416.php">&#214;&#239;&#223;&#226;&#239;&#242; &#202;&#239;&#245;&#234;&#239;&#245;&#226;&#223;&#237;&#231;&#242;: "[OMPI users] OpenMPI installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9460.php">Φοίβος Κουκουβίνης: "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>Reply:</strong> <a href="9460.php">Φοίβος Κουκουβίνης: "Re: [OMPI users] OpenMPI installation"</a>
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
