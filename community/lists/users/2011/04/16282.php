<?
$subject_val = "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 13:35:58 2011" -->
<!-- isoreceived="20110419173558" -->
<!-- sent="Tue, 19 Apr 2011 11:35:48 -0600" -->
<!-- isosent="20110419173548" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04" -->
<!-- id="C8C51D65-0196-4B7B-ADEF-01A725347BE5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="COL110-W166E0DB5158E878E86C509AE900_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-19 13:35:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16283.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Previous message:</strong> <a href="16281.php">Sergiy Bubin: "[OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>In reply to:</strong> <a href="16281.php">Sergiy Bubin: "[OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16288.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Reply:</strong> <a href="16288.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nothing was attached, but I doubt they would help anyway. This looks like a missing header file in Ubuntu, or else one that got moved and needs a different path.
<br>
<p>Where is asm/errno.h, and how was it included in /usr/include/linux/errno.h? Best I can figure is it got put in some non-standard place, and you'll need to add a -I to your CPPFLAGS to find it.
<br>
<p><p>On Apr 19, 2011, at 10:52 AM, Sergiy Bubin wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to compile OpenMPI 1.4.3 with Intel compilers (version 12.0 update 2) on my new computer (Ubuntu 11.04 beta2). While running ./configure script seems to be fine, make all generates an error almost at the very beginning (see the attached output_make_all.txt file). For completeness I am also attaching configure.log file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure what that error means:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home2/bubin/Software/openmpi-1.4.3/opal/libltdl'
</span><br>
<span class="quotelev1">&gt; /bin/bash ./libtool  --tag=CC   --mode=compile icc -DHAVE_CONFIG_H -I.  -DLT_CONFIG_H='' -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl   -O3 -DNDEBUG   -fvisibility=hidden -MT dlopen.lo -MD -MP -MF .deps/dlopen.Tpo -c -o dlopen.lo `test -f 'loaders/dlopen.c' || echo './'`loaders/dlopen.c
</span><br>
<span class="quotelev1">&gt; libtool: compile:  icc -DHAVE_CONFIG_H -I. &quot;-DLT_CONFIG_H=&quot; -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -fvisibility=hidden -MT dlopen.lo -MD -MP -MF .deps/dlopen.Tpo -c loaders/dlopen.c  -fPIC -DPIC -o .libs/dlopen.o
</span><br>
<span class="quotelev1">&gt; /usr/include/linux/errno.h(4): catastrophic error: cannot open source file &quot;asm/errno.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have just tried to compile the same version of OpenMPI with Intel 12.0 on another machine running Ubuntu 9.10 and it went just fine. Also, I recently did it on two other systems running Ubuntu 10.04 and 10.10. Again, no problems we encountered. If anyone could shed some light on my issue that would be very much appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sergiy
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16283.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Previous message:</strong> <a href="16281.php">Sergiy Bubin: "[OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>In reply to:</strong> <a href="16281.php">Sergiy Bubin: "[OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16288.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Reply:</strong> <a href="16288.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
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
