<?
$subject_val = "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 15:32:53 2011" -->
<!-- isoreceived="20110419193253" -->
<!-- sent="Tue, 19 Apr 2011 12:32:29 -0700" -->
<!-- isosent="20110419193229" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04" -->
<!-- id="BANLkTimV-u2GWjzBsyoJV=fP733hUDq2NA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C6AD07FA-4D80-4A6E-B7F7-31FC7E92CA77_at_cisco.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-19 15:32:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16288.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Previous message:</strong> <a href="16286.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>In reply to:</strong> <a href="16283.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
why can't you install mpi through apt-get?
<br>
<p>On Tue, Apr 19, 2011 at 10:37 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sounds like you have a busted compiler install on this machine -- if
</span><br>
<span class="quotelev1">&gt; /usr/include/linux/errno.h cannot find /usr/include/asm/errno.h, then
</span><br>
<span class="quotelev1">&gt; something is wrong on that machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 19, 2011, at 12:52 PM, Sergiy Bubin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to compile OpenMPI 1.4.3 with Intel compilers (version 12.0
</span><br>
<span class="quotelev1">&gt; update 2) on my new computer (Ubuntu 11.04 beta2). While running ./configure
</span><br>
<span class="quotelev1">&gt; script seems to be fine, make all generates an error almost at the very
</span><br>
<span class="quotelev1">&gt; beginning (see the attached output_make_all.txt file). For completeness I am
</span><br>
<span class="quotelev1">&gt; also attaching configure.log file.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am not sure what that error means:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home2/bubin/Software/openmpi-1.4.3/opal/libltdl'
</span><br>
<span class="quotelev2">&gt; &gt; /bin/bash ./libtool  --tag=CC   --mode=compile icc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt;  -DLT_CONFIG_H='' -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl   -O3
</span><br>
<span class="quotelev1">&gt; -DNDEBUG   -fvisibility=hidden -MT dlopen.lo -MD -MP -MF .deps/dlopen.Tpo -c
</span><br>
<span class="quotelev1">&gt; -o dlopen.lo `test -f 'loaders/dlopen.c' || echo './'`loaders/dlopen.c
</span><br>
<span class="quotelev2">&gt; &gt; libtool: compile:  icc -DHAVE_CONFIG_H -I. &quot;-DLT_CONFIG_H=&quot; -DLTDL -I.
</span><br>
<span class="quotelev1">&gt; -I. -Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -fvisibility=hidden -MT
</span><br>
<span class="quotelev1">&gt; dlopen.lo -MD -MP -MF .deps/dlopen.Tpo -c loaders/dlopen.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev1">&gt; .libs/dlopen.o
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/linux/errno.h(4): catastrophic error: cannot open source
</span><br>
<span class="quotelev1">&gt; file &quot;asm/errno.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  #include
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have just tried to compile the same version of OpenMPI with Intel 12.0
</span><br>
<span class="quotelev1">&gt; on another machine running Ubuntu 9.10 and it went just fine. Also, I
</span><br>
<span class="quotelev1">&gt; recently did it on two other systems running Ubuntu 10.04 and 10.10. Again,
</span><br>
<span class="quotelev1">&gt; no problems we encountered. If anyone could shed some light on my issue that
</span><br>
<span class="quotelev1">&gt; would be very much appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Sergiy
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16287/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16288.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Previous message:</strong> <a href="16286.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>In reply to:</strong> <a href="16283.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
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
