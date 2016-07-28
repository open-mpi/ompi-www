<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  6 12:32:24 2007" -->
<!-- isoreceived="20071006163224" -->
<!-- sent="Sat, 6 Oct 2007 18:32:19 +0200" -->
<!-- isosent="20071006163219" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sed: 33: ...: unescaped newline inside substitute pattern" -->
<!-- id="C9BE73C8-DC86-4E5E-AD9E-97A97F820B8F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EA5FE000-2390-4572-9902-040814B05CF2_at_san.rr.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-06 12:32:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4162.php">Jeff Squyres: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Previous message:</strong> <a href="4160.php">Jeff Squyres: "Re: [OMPI users] Bad performance - OpenIB 1.2.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/4055.php">Michael Clover: "[OMPI users] sed: 33: ...: unescaped newline inside substitute pattern"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am certainly no mac expert, but this is pretty weird to me.  I  
<br>
build on my MacBook Pro all the time (10.4.10 and same version of  
<br>
Xtools).
<br>
<p>In fact, I just downloaded and built 1.2.3 and built it -- here's a  
<br>
snipit from the configure output:
<br>
<p>-----
<br>
checking for OMPI FCFLAGS...
<br>
checking for OMPI LDFLAGS...   -Wl,-u,_munmap -Wl,- 
<br>
multiply_defined,suppress
<br>
checking for OMPI LIBS...
<br>
checking for OMPI extra include dirs...
<br>
<p>*** Final output
<br>
configure: creating ./config.status
<br>
config.status: creating ompi/include/ompi/version.h
<br>
config.status: creating orte/include/orte/version.h
<br>
config.status: creating opal/include/opal/version.h
<br>
config.status: creating opal/mca/backtrace/Makefile
<br>
....etc.
<br>
-----
<br>
<p>So you can see that it works for me.  :-(
<br>
<p>It looks like your system is tripping up on sed somehow -- do you  
<br>
have an alternate version of sed installed, perhaps?  Here's what I  
<br>
have:
<br>
<p>% where sed
<br>
/usr/bin/sed
<br>
% gmd5sum /usr/bin/sed
<br>
35af2dffa7ff32b54e1840c0e432382d  /usr/bin/sed
<br>
% gsha1sum /usr/bin/sed
<br>
0b37a699bfb458ec29c10d8d9c5df278ee3d9e8b  /usr/bin/sed
<br>
<p><p><p>On Sep 25, 2007, at 9:46 AM, Michael Clover wrote:
<br>
<p><span class="quotelev1">&gt; I have been attempting to compile open-mpi, both 1.2.2 and 1.2.3 on  
</span><br>
<span class="quotelev1">&gt; a new iMac (core 2 duo, 2.4 GHz, OS X 10.4.10), using gfortran as  
</span><br>
<span class="quotelev1">&gt; my fortran compiler, and a very recent Xtools (ld -v gives version  
</span><br>
<span class="quotelev1">&gt; cctools-622.5.obj~13).  I have tried both the full line,
</span><br>
<span class="quotelev1">&gt; configure --prefix=/usr/local/openmpi --disable-mpi-cxx --disable- 
</span><br>
<span class="quotelev1">&gt; mpi-f90 --without-xgrid FC=gfortran
</span><br>
<span class="quotelev1">&gt; as well as a truncated line,
</span><br>
<span class="quotelev1">&gt; configure --prefix=/usr/local/openmpi
</span><br>
<span class="quotelev1">&gt; and switched compilers via
</span><br>
<span class="quotelev1">&gt; setenv FC g95
</span><br>
<span class="quotelev1">&gt; configure --prefix=/usr/local/openmpi --disable-mpi-cxx --disable- 
</span><br>
<span class="quotelev1">&gt; mpi-f90 --without-xgrid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and in all cases, after minutes of working away, get to the point  
</span><br>
<span class="quotelev1">&gt; that someone else got to last year (when it tries to create the  
</span><br>
<span class="quotelev1">&gt; Makefiles, etc) and get the following output (approximately 200  
</span><br>
<span class="quotelev1">&gt; pairs of sed:33 and sed:4's).  This has been happening for over a  
</span><br>
<span class="quotelev1">&gt; week, with reboots every night.  I attach the configure terminal  
</span><br>
<span class="quotelev1">&gt; output as well as the log file (for a 1.2.2 attempt).
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...checking for OMPI LIBS...      -lSystemStubs
</span><br>
<span class="quotelev1">&gt; checking for OMPI extra include dirs...  openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Final output
</span><br>
<span class="quotelev1">&gt; configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/include/ompi/version.h
</span><br>
<span class="quotelev1">&gt; sed: 33: ./confstatkVPvQm/subs-3.sed: unescaped newline inside  
</span><br>
<span class="quotelev1">&gt; substitute pattern
</span><br>
<span class="quotelev1">&gt; sed: 4: ./confstatkVPvQm/subs-4.sed: unescaped newline inside  
</span><br>
<span class="quotelev1">&gt; substitute pattern
</span><br>
<span class="quotelev1">&gt; config.status: creating orte/include/orte/version.h
</span><br>
<span class="quotelev1">&gt; sed: 33: ./confstatkVPvQm/subs-3.sed: unescaped newline inside  
</span><br>
<span class="quotelev1">&gt; substitute pattern
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Clover
</span><br>
<span class="quotelev1">&gt; mclover_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4162.php">Jeff Squyres: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Previous message:</strong> <a href="4160.php">Jeff Squyres: "Re: [OMPI users] Bad performance - OpenIB 1.2.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/4055.php">Michael Clover: "[OMPI users] sed: 33: ...: unescaped newline inside substitute pattern"</a>
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
