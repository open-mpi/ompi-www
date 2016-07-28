<?
$subject_val = "Re: [OMPI users] install intel mac with Laopard";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 10:48:27 2008" -->
<!-- isoreceived="20080424144827" -->
<!-- sent="Thu, 24 Apr 2008 10:48:06 -0400" -->
<!-- isosent="20080424144806" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] install intel mac with Laopard" -->
<!-- id="E7FD839BAFD8CA499213A6EE26F2368004C9EB_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] install intel mac with Laopard" -->
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
<strong>Subject:</strong> Re: [OMPI users] install intel mac with Laopard<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 10:48:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5494.php">Tamer: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] PubSub and MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="5483.php">Koun SHIRAI: "[OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5497.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5497.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5525.php">Michael: "Re: [OMPI users] install intel mac with Laopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You probably want to use all the intel compilers, not just ifort.
<br>
<p>CC=icc
<br>
CXX=icpc
<br>
FC=ifort
<br>
F77=ifort
<br>
<p>-jms
<br>
Sent from my PDA.  No type good.
<br>
<p>&nbsp;-----Original Message-----
<br>
From: 	Koun SHIRAI [mailto:koun_at_[hidden]]
<br>
Sent:	Thursday, April 24, 2008 08:09 AM Eastern Standard Time
<br>
To:	Open MPI Users
<br>
Subject:	[OMPI users] install intel mac with Laopard
<br>
<p>&nbsp;&nbsp;Dear Sir:
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5493/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5494.php">Tamer: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] PubSub and MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="5483.php">Koun SHIRAI: "[OMPI users] install intel mac with Laopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5497.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5497.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Reply:</strong> <a href="5525.php">Michael: "Re: [OMPI users] install intel mac with Laopard"</a>
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
