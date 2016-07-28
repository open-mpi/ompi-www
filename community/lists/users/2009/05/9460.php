<?
$subject_val = "Re: [OMPI users] OpenMPI installation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 12:35:21 2009" -->
<!-- isoreceived="20090528163521" -->
<!-- sent="Thu, 28 May 2009 19:35:15 +0300" -->
<!-- isosent="20090528163515" -->
<!-- name="&#214;&#239;&#223;&#226;&#239;&#242; &#202;&#239;&#245;&#234;&#239;&#245;&#226;&#223;&#237;&#231;&#242;" -->
<!-- email="fivoskouk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI installation" -->
<!-- id="375605620905280935q7d84d462s9290212ba0de6c60_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A1C082C.6010208_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> &#214;&#239;&#223;&#226;&#239;&#242; &#202;&#239;&#245;&#234;&#239;&#245;&#226;&#223;&#237;&#231;&#242; (<em>fivoskouk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-28 12:35:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9461.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9459.php">Joe Griffin: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
<li><strong>In reply to:</strong> <a href="9425.php">Gus Correa: "Re: [OMPI users] OpenMPI installation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you vey much for your response Gus, unfortunately I was in a trip for
<br>
some time thats why I didnt reply immediately. I will try your suggestion.
<br>
<p>2009/5/26 Gus Correa &lt;gus_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi Fivoskouk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't use Ubuntu.
</span><br>
<span class="quotelev1">&gt; However, we install OpenMPI from source with no problem on CentOS, Fedora,
</span><br>
<span class="quotelev1">&gt; etc. All configuration options are available this way.
</span><br>
<span class="quotelev1">&gt; Works with gnu (gcc,g++,gfortran), Intel, PGI, etc.
</span><br>
<span class="quotelev1">&gt; We've been using 1.3.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suggestion:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Install the Ubuntu gfortran, gcc, g++ packages, if anyone is missing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Install OpenMPI from source.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **Read their README file and the FAQs,
</span><br>
<span class="quotelev1">&gt; they are an excellent source of information for new users.**
</span><br>
<span class="quotelev1">&gt; Most likely all your questions are already answered there,
</span><br>
<span class="quotelev1">&gt; a simple search will tell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use the configure script --prefix option to choose the installation
</span><br>
<span class="quotelev1">&gt; directory.  Preferably a NFS mounted directory (if you are on a cluster),
</span><br>
<span class="quotelev1">&gt; and certainly not /usr or /usr/local, to avoid overwritting other MPIs that
</span><br>
<span class="quotelev1">&gt; may be there already.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configure will also take the compilers of your choice, for instance:
</span><br>
<span class="quotelev1">&gt; Csh: setenv F90 gfortran; setenv CC ...
</span><br>
<span class="quotelev1">&gt; Bash: export F90=gfortran; export CC=...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then:
</span><br>
<span class="quotelev1">&gt; configure --prefix=/installation/dir ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Ifort is the Intel Fortran compiler.
</span><br>
<span class="quotelev1">&gt; If you have it and want to use it instead of gfortran,
</span><br>
<span class="quotelev1">&gt; you can try to replace gfortran above by the full path name to ifort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) After you install OpenMPI, use full path names to mpicc, mpif90,
</span><br>
<span class="quotelev1">&gt; mpiexec, etc, to avoid confusion with other MPIs in your system.
</span><br>
<span class="quotelev1">&gt; Or set you PATH variable on your .cshrc/.bashrc
</span><br>
<span class="quotelev1">&gt; to find the OpenMPI bin directory first.
</span><br>
<span class="quotelev1">&gt; Csh (.cshrc/.tcshrc): setenv PATH /openmpi-dir/bin:${PATH}
</span><br>
<span class="quotelev1">&gt; Bash (.bashrc): export PATH=/openmpi-dir/bin:${PATH}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fivoskouk wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi everyone,
</span><br>
<span class="quotelev2">&gt;&gt; I want to install OpenMPI on my Ubuntu 8.10 64bit PC. My first attempt to
</span><br>
<span class="quotelev2">&gt;&gt; install it was through the ubuntu package manager. From the synaptic manager
</span><br>
<span class="quotelev2">&gt;&gt; I found, downloaded and installed OpenMPI 1.2.7 version. Unfortunately the
</span><br>
<span class="quotelev2">&gt;&gt; installation package did not allow any configuration options in order to
</span><br>
<span class="quotelev2">&gt;&gt; define the desired compilers as F77,F90 etc and when I type mpif77 for
</span><br>
<span class="quotelev2">&gt;&gt; example I get the message
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev2">&gt;&gt; Fortran 77 support.  As such, the mpif77 compiler is non-functional.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to uninstall this version of the MPI but I was not able to
</span><br>
<span class="quotelev2">&gt;&gt; completely remove it. To explain what I mean : after removing it through the
</span><br>
<span class="quotelev2">&gt;&gt; synaptic manager when I type the mpirun command in terminal I get the same
</span><br>
<span class="quotelev2">&gt;&gt; message as above. Can anyone tell me what files do I have to remove so that
</span><br>
<span class="quotelev2">&gt;&gt; I can completely clean my PC from that version and install an other version
</span><br>
<span class="quotelev2">&gt;&gt; which will allow customizations? Alternatively is there any way to define
</span><br>
<span class="quotelev2">&gt;&gt; the compilers after the MPI installation?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now regarding a new clean installation of OpenMPI  : What version do you
</span><br>
<span class="quotelev2">&gt;&gt; suggest me install on my pc? Is the latest version (1.3.2) stable enough?
</span><br>
<span class="quotelev2">&gt;&gt; As far as I have read in the readme/ installation documents to install the
</span><br>
<span class="quotelev2">&gt;&gt; version 1.3.2 I have to run the ./configure command adding the
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/installation/location and F77=77 fortran compiler ,etc (where
</span><br>
<span class="quotelev2">&gt;&gt; fortran compiler is just the compilers name e.g. ifort not its location on
</span><br>
<span class="quotelev2">&gt;&gt; the filesystem) and after that make all install, is that correct? Can I
</span><br>
<span class="quotelev2">&gt;&gt; install OpenMPI at any directory or should I install it in the compiler's
</span><br>
<span class="quotelev2">&gt;&gt; installation path?
</span><br>
<span class="quotelev2">&gt;&gt;  Do I have to make any other customization in the .bashrc in order OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; to operate? If yes what do I have to add ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am a relatively new user in linux so detailed instruction would be
</span><br>
<span class="quotelev2">&gt;&gt; appreciated. I am looking fowrward hearing from anyone who could help.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9460/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9461.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9459.php">Joe Griffin: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
<li><strong>In reply to:</strong> <a href="9425.php">Gus Correa: "Re: [OMPI users] OpenMPI installation"</a>
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
