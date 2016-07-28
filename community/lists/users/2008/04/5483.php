<?
$subject_val = "[OMPI users] install intel mac with Laopard";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 08:06:36 2008" -->
<!-- isoreceived="20080424120636" -->
<!-- sent="Thu, 24 Apr 2008 21:06:19 +0900" -->
<!-- isosent="20080424120619" -->
<!-- name="Koun SHIRAI" -->
<!-- email="koun_at_[hidden]" -->
<!-- subject="[OMPI users] install intel mac with Laopard" -->
<!-- id="B7FE7B1A-6751-4D78-98CE-924476EFA9F4_at_sanken.osaka-u.ac.jp" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] install intel mac with Laopard<br>
<strong>From:</strong> Koun SHIRAI (<em>koun_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 08:06:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5484.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5482.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Maybe reply:</strong> <a href="5493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Maybe reply:</strong> <a href="5524.php">Warner Yuen: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Dear Sir:
<br>
<p>I think that this problem must be solved, and maybe some information  
<br>
should be given in the archives.  But, I miss the right answer in my  
<br>
searching area, so please allow me to repeat.
<br>
<p>I tried to install openmpi-1.2.5 to a new xserve (Xeon) with Leopard.   
<br>
Intel compiler is used for Fortran.
<br>
<p>My options for configure was
<br>
CC=/usr/bin/gcc-4.0
<br>
CXX=/usr/bin/g++-4.0
<br>
F77=ifort
<br>
along with
<br>
--with-rsh=&quot;ssh -x&quot; --enable-shared --without-cs-fs --without-memory- 
<br>
manager
<br>
<p>Then, I saw an error message.  This says
<br>
<p>checking if C and Fortran 77 are link compatible... no
<br>
**********************************************************************
<br>
* It appears that your Fortran 77 compiler is unable to link against
<br>
* object files created by your C compiler.  This generally indicates
<br>
* either a conflict between the options specified in CFLAGS and FFLAGS
<br>
* or a problem with the local compiler installation.  More
<br>
* information (including exactly what command was given to the
<br>
* compilers and what error resulted when the commands were executed) is
<br>
* available in the config.log file in this directory.
<br>
**********************************************************************
<br>
configure: error: C and Fortran 77 compilers are not link compatible.   
<br>
Can not continue.
<br>
<p>I suppose that the problem is the default selection for the  
<br>
architecture (32 or 64 bit).  I don't know the correct options.  Of  
<br>
course, I like to use 64-bit architecture as far as it works.
<br>
<p>Best regard,
<br>
<p><p>-----------------------
<br>
Koun SHIRAI
<br>
Nanoscience and Nanotechnology Center
<br>
ISIR, Osaka University
<br>
8-1, Mihogaoka, Ibaraki
<br>
Osaka 567-0047, JAPAN
<br>
PH: +81-6-6879-4302
<br>
FAX: +81-6-6879-8539
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5484.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Previous message:</strong> <a href="5482.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Maybe reply:</strong> <a href="5493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Maybe reply:</strong> <a href="5524.php">Warner Yuen: "Re: [OMPI users] install intel mac with Laopard"</a>
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
