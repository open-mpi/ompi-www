<?
$subject_val = "[OMPI users] OpenMPI installation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 22 14:02:57 2009" -->
<!-- isoreceived="20090522180257" -->
<!-- sent="Fri, 22 May 2009 21:02:32 +0300" -->
<!-- isosent="20090522180232" -->
<!-- name="&#214;&#239;&#223;&#226;&#239;&#242; &#202;&#239;&#245;&#234;&#239;&#245;&#226;&#223;&#237;&#231;&#242;" -->
<!-- email="fivoskouk_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI installation" -->
<!-- id="375605620905221102l3984f6dfl883b54cb8d0e9e9b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI installation<br>
<strong>From:</strong> &#214;&#239;&#223;&#226;&#239;&#242; &#202;&#239;&#245;&#234;&#239;&#245;&#226;&#223;&#237;&#231;&#242; (<em>fivoskouk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-22 14:02:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9417.php">Ben Mayer: "[OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<li><strong>Previous message:</strong> <a href="9415.php">jan: "[OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9425.php">Gus Correa: "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>Reply:</strong> <a href="9425.php">Gus Correa: "Re: [OMPI users] OpenMPI installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
I want to install OpenMPI on my Ubuntu 8.10 64bit PC. My first attempt to
<br>
install it was through the ubuntu package manager. From the synaptic manager
<br>
I found, downloaded and installed OpenMPI 1.2.7 version. Unfortunately the
<br>
installation package did not allow any configuration options in order to
<br>
define the desired compilers as F77,F90 etc and when I type mpif77 for
<br>
example I get the message
<br>
--------------------------------------------------------------------------
<br>
Unfortunately, this installation of Open MPI was not compiled with
<br>
Fortran 77 support.  As such, the mpif77 compiler is non-functional.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>I tried to uninstall this version of the MPI but I was not able to
<br>
completely remove it. To explain what I mean : after removing it through the
<br>
synaptic manager when I type the mpirun command in terminal I get the same
<br>
message as above. Can anyone tell me what files do I have to remove so that
<br>
I can completely clean my PC from that version and install an other version
<br>
which will allow customizations? Alternatively is there any way to define
<br>
the compilers after the MPI installation?
<br>
<p>Now regarding a new clean installation of OpenMPI  : What version do you
<br>
suggest me install on my pc? Is the latest version (1.3.2) stable enough?
<br>
As far as I have read in the readme/ installation documents to install the
<br>
version 1.3.2 I have to run the ./configure command adding the
<br>
--prefix=/installation/location and F77=77 fortran compiler ,etc (where
<br>
fortran compiler is just the compilers name e.g. ifort not its location on
<br>
the filesystem) and after that make all install, is that correct? Can I
<br>
install OpenMPI at any directory or should I install it in the compiler's
<br>
installation path?
<br>
&nbsp;Do I have to make any other customization in the .bashrc in order OpenMPI
<br>
to operate? If yes what do I have to add ?
<br>
<p>I am a relatively new user in linux so detailed instruction would be
<br>
appreciated. I am looking fowrward hearing from anyone who could help.
<br>
Thanks in advance.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9416/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9417.php">Ben Mayer: "[OMPI users] Problem compiling OpenMPI 1.3.2 with Intel 11.0"</a>
<li><strong>Previous message:</strong> <a href="9415.php">jan: "[OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9425.php">Gus Correa: "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>Reply:</strong> <a href="9425.php">Gus Correa: "Re: [OMPI users] OpenMPI installation"</a>
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
