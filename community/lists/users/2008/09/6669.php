<?
$subject_val = "Re: [OMPI users] BLCR not found";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 15:51:26 2008" -->
<!-- isoreceived="20080922195126" -->
<!-- sent="Mon, 22 Sep 2008 15:51:23 -0400" -->
<!-- isosent="20080922195123" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLCR not found" -->
<!-- id="D6A45092-16DB-417E-B243-4E21A196A6D2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5f76eef60809180357o75e99c3dw6d5f9d2fe6a38e0f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] BLCR not found<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 15:51:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6670.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Previous message:</strong> <a href="6668.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>In reply to:</strong> <a href="6598.php">Santolo Felaco: "Re: [OMPI users] BLCR not found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have committed a patch (r19607) to clean up the BLCR configure  
<br>
logic. It should be in tonight's tarball of the trunk. I've requested  
<br>
that this fix be moved to v1.3, but that is going to take a day or so  
<br>
to process.
<br>
<p>This patch adds a new configure option '--with-blcr-libdir' which lets  
<br>
you specify the directory in which the BLCR libraries are installed.  
<br>
So something like the following may work for you:
<br>
&nbsp;&nbsp;./configure --with-ft=cr --enable-ft-thread --enable-mpi-threads \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-blcr=/home/osa/blcr/ --with-blcr-libdir=/home/osa/blcr/lib
<br>
<p>Let me know if that fixes your configure problem.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Sep 18, 2008, at 6:57 AM, Santolo Felaco wrote:
<br>
<p><span class="quotelev1">&gt; Ok, Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/9/17 Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; It looks like the configure script is picking up the wrong lib- 
</span><br>
<span class="quotelev1">&gt; directory (/home/osa/blcr/lib64 instead of /home/osa/blcr/lib):
</span><br>
<span class="quotelev1">&gt;  gcc -o conftest -O3 -DNDEBUG -finline-functions -fno-strict- 
</span><br>
<span class="quotelev1">&gt; aliasing -pthread \
</span><br>
<span class="quotelev1">&gt;    -I/home/osa/blcr/include   -L/home/osa/blcr/lib64 \
</span><br>
<span class="quotelev1">&gt;    conftest.c -lcr  -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt;  /usr/bin/ld: cannot find -lcr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try to reproduce and work up a patch. In the mean time you may  
</span><br>
<span class="quotelev1">&gt; check to make sure that the BLCR path is set correctly in your $PATH  
</span><br>
<span class="quotelev1">&gt; and $LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2008, at 7:44 AM, Santolo Felaco wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the zipped file config.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/9/17 Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Can you send me a zip'ed up version of the config.log from your  
</span><br>
<span class="quotelev1">&gt; build? That will help in determining what went wrong with configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2008, at 6:09 AM, Santolo Felaco wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, I want to install openmpi-1.3. I have invoked ./configure --with- 
</span><br>
<span class="quotelev1">&gt; ft=cr --enable-ft-thread --enable-mpi-threads --with-blcr=/home/osa/ 
</span><br>
<span class="quotelev1">&gt; blcr/ --enable-progress-threads
</span><br>
<span class="quotelev1">&gt; This is error message that show:
</span><br>
<span class="quotelev1">&gt;  BLCR support requested but not found.  Perhaps you need to specify  
</span><br>
<span class="quotelev1">&gt; the location of the BLCR libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed blcr in /home/osa/blcr, I report the list of  
</span><br>
<span class="quotelev1">&gt; directory blcr:
</span><br>
<span class="quotelev1">&gt; .:
</span><br>
<span class="quotelev1">&gt; bin  include  lib  libexec  man
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./bin:
</span><br>
<span class="quotelev1">&gt; cr_checkpoint  cr_restart  cr_run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./include:
</span><br>
<span class="quotelev1">&gt; blcr_common.h  blcr_errcodes.h  blcr_ioctl.h  blcr_proc.h  libcr.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./lib:
</span><br>
<span class="quotelev1">&gt; blcr      libcr_omit.la  libcr_omit.so.0      libcr_run.la   
</span><br>
<span class="quotelev1">&gt; libcr_run.so.0      libcr.so    libcr.so.0.4.1
</span><br>
<span class="quotelev1">&gt; libcr.la  libcr_omit.so  libcr_omit.so.0.4.1  libcr_run.so   
</span><br>
<span class="quotelev1">&gt; libcr_run.so.0.4.1  libcr.so.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./lib/blcr:
</span><br>
<span class="quotelev1">&gt; 2.6.24-16-generic
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./lib/blcr/2.6.24-16-generic:
</span><br>
<span class="quotelev1">&gt; blcr_imports.ko  blcr.ko  blcr_vmadump.ko
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./libexec:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./man:
</span><br>
<span class="quotelev1">&gt; man1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./man/man1:
</span><br>
<span class="quotelev1">&gt; cr_checkpoint.1  cr_restart.1  cr_run.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Help me, please
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
<span class="quotelev1">&gt; &lt;config.tar&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="6670.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Previous message:</strong> <a href="6668.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>In reply to:</strong> <a href="6598.php">Santolo Felaco: "Re: [OMPI users] BLCR not found"</a>
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
