<?
$subject_val = "Re: [OMPI users] BLCR not found";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 08:43:36 2008" -->
<!-- isoreceived="20080917124336" -->
<!-- sent="Wed, 17 Sep 2008 08:43:34 -0400" -->
<!-- isosent="20080917124334" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLCR not found" -->
<!-- id="9AD20CB8-3A93-4EFB-886B-FDA4EB542B61_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5f76eef60809170444h3d538d23m6288d10f1c5b0a45_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-09-17 08:43:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6573.php">Christophe Spaggiari: "Re: [OMPI users] mpirun hang"</a>
<li><strong>Previous message:</strong> <a href="6571.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6569.php">Santolo Felaco: "Re: [OMPI users] BLCR not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6598.php">Santolo Felaco: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Reply:</strong> <a href="6598.php">Santolo Felaco: "Re: [OMPI users] BLCR not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the configure script is picking up the wrong lib- 
<br>
directory (/home/osa/blcr/lib64 instead of /home/osa/blcr/lib):
<br>
&nbsp;&nbsp;&nbsp;gcc -o conftest -O3 -DNDEBUG -finline-functions -fno-strict- 
<br>
aliasing -pthread \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-I/home/osa/blcr/include   -L/home/osa/blcr/lib64 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;conftest.c -lcr  -lnsl -lutil  -lm
<br>
&nbsp;&nbsp;&nbsp;/usr/bin/ld: cannot find -lcr
<br>
<p>I'll try to reproduce and work up a patch. In the mean time you may  
<br>
check to make sure that the BLCR path is set correctly in your $PATH  
<br>
and $LD_LIBRARY_PATH.
<br>
<p>Josh
<br>
<p><p>On Sep 17, 2008, at 7:44 AM, Santolo Felaco wrote:
<br>
<p><span class="quotelev1">&gt; This is the zipped file config.log
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
<li><strong>Next message:</strong> <a href="6573.php">Christophe Spaggiari: "Re: [OMPI users] mpirun hang"</a>
<li><strong>Previous message:</strong> <a href="6571.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only)	for	configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6569.php">Santolo Felaco: "Re: [OMPI users] BLCR not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6598.php">Santolo Felaco: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Reply:</strong> <a href="6598.php">Santolo Felaco: "Re: [OMPI users] BLCR not found"</a>
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
