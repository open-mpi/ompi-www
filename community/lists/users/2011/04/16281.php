<?
$subject_val = "[OMPI users] Problem compiling OpenMPI on Ubuntu 11.04";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 12:52:45 2011" -->
<!-- isoreceived="20110419165245" -->
<!-- sent="Tue, 19 Apr 2011 09:52:40 -0700" -->
<!-- isosent="20110419165240" -->
<!-- name="Sergiy Bubin" -->
<!-- email="sergb77_at_[hidden]" -->
<!-- subject="[OMPI users] Problem compiling OpenMPI on Ubuntu 11.04" -->
<!-- id="COL110-W166E0DB5158E878E86C509AE900_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04<br>
<strong>From:</strong> Sergiy Bubin (<em>sergb77_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-19 12:52:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16282.php">Ralph Castain: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Previous message:</strong> <a href="16280.php">Ralph Castain: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16282.php">Ralph Castain: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Reply:</strong> <a href="16282.php">Ralph Castain: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Reply:</strong> <a href="16283.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am trying to compile OpenMPI 1.4.3 with Intel compilers (version 12.0 update 2) on my new computer (Ubuntu 11.04 beta2). While running ./configure script seems to be fine, make all generates an error almost at the very beginning (see the attached output_make_all.txt file). For completeness I am also attaching configure.log file.
<br>
<p>I am not sure what that error means:
<br>
<p>make[3]: Entering directory `/home2/bubin/Software/openmpi-1.4.3/opal/libltdl'
<br>
/bin/bash ./libtool  --tag=CC   --mode=compile icc -DHAVE_CONFIG_H -I.  -DLT_CONFIG_H='' -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl   -O3 -DNDEBUG   -fvisibility=hidden -MT dlopen.lo -MD -MP -MF .deps/dlopen.Tpo -c -o dlopen.lo `test -f 'loaders/dlopen.c' || echo './'`loaders/dlopen.c
<br>
libtool: compile:  icc -DHAVE_CONFIG_H -I. &quot;-DLT_CONFIG_H=&quot; -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -fvisibility=hidden -MT dlopen.lo -MD -MP -MF .deps/dlopen.Tpo -c loaders/dlopen.c  -fPIC -DPIC -o .libs/dlopen.o
<br>
/usr/include/linux/errno.h(4): catastrophic error: cannot open source file &quot;asm/errno.h&quot;
<br>
&nbsp;&nbsp;#include 
<br>
<p>I have just tried to compile the same version of OpenMPI with Intel 12.0 on another machine running Ubuntu 9.10 and it went just fine. Also, I recently did it on two other systems running Ubuntu 10.04 and 10.10. Again, no problems we encountered. If anyone could shed some light on my issue that would be very much appreciated.
<br>
<p>Thanks,
<br>
Sergiy
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16282.php">Ralph Castain: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Previous message:</strong> <a href="16280.php">Ralph Castain: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16282.php">Ralph Castain: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Reply:</strong> <a href="16282.php">Ralph Castain: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Reply:</strong> <a href="16283.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
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
