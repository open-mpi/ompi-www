<?
$subject_val = "Re: [OMPI users] BLCR not found";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 06:57:48 2008" -->
<!-- isoreceived="20080918105748" -->
<!-- sent="Thu, 18 Sep 2008 12:57:43 +0200" -->
<!-- isosent="20080918105743" -->
<!-- name="Santolo Felaco" -->
<!-- email="ahuramazda10_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLCR not found" -->
<!-- id="5f76eef60809180357o75e99c3dw6d5f9d2fe6a38e0f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9AD20CB8-3A93-4EFB-886B-FDA4EB542B61_at_open-mpi.org" -->
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
<strong>From:</strong> Santolo Felaco (<em>ahuramazda10_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-18 06:57:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6599.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6597.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6572.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6669.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Reply:</strong> <a href="6669.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, Thanks.
<br>
<p>2008/9/17 Josh Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; It looks like the configure script is picking up the wrong lib-directory
</span><br>
<span class="quotelev1">&gt; (/home/osa/blcr/lib64 instead of /home/osa/blcr/lib):
</span><br>
<span class="quotelev1">&gt;  gcc -o conftest -O3 -DNDEBUG -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; -pthread \
</span><br>
<span class="quotelev1">&gt;    -I/home/osa/blcr/include   -L/home/osa/blcr/lib64 \
</span><br>
<span class="quotelev1">&gt;    conftest.c -lcr  -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt;  /usr/bin/ld: cannot find -lcr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try to reproduce and work up a patch. In the mean time you may check
</span><br>
<span class="quotelev1">&gt; to make sure that the BLCR path is set correctly in your $PATH and
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH.
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
<span class="quotelev1">&gt;  This is the zipped file config.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2008/9/17 Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send me a zip'ed up version of the config.log from your build?
</span><br>
<span class="quotelev2">&gt;&gt; That will help in determining what went wrong with configure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 17, 2008, at 6:09 AM, Santolo Felaco wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, I want to install openmpi-1.3. I have invoked ./configure --with-ft=cr
</span><br>
<span class="quotelev2">&gt;&gt; --enable-ft-thread --enable-mpi-threads --with-blcr=/home/osa/blcr/
</span><br>
<span class="quotelev2">&gt;&gt; --enable-progress-threads
</span><br>
<span class="quotelev2">&gt;&gt; This is error message that show:
</span><br>
<span class="quotelev2">&gt;&gt;  BLCR support requested but not found.  Perhaps you need to specify the
</span><br>
<span class="quotelev2">&gt;&gt; location of the BLCR libraries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have installed blcr in /home/osa/blcr, I report the list of directory
</span><br>
<span class="quotelev2">&gt;&gt; blcr:
</span><br>
<span class="quotelev2">&gt;&gt; .:
</span><br>
<span class="quotelev2">&gt;&gt; bin  include  lib  libexec  man
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./bin:
</span><br>
<span class="quotelev2">&gt;&gt; cr_checkpoint  cr_restart  cr_run
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./include:
</span><br>
<span class="quotelev2">&gt;&gt; blcr_common.h  blcr_errcodes.h  blcr_ioctl.h  blcr_proc.h  libcr.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./lib:
</span><br>
<span class="quotelev2">&gt;&gt; blcr      libcr_omit.la  libcr_omit.so.0      libcr_run.la libcr_run.so.0      libcr.so    libcr.so.0.4.1
</span><br>
<span class="quotelev2">&gt;&gt; libcr.la  libcr_omit.so  libcr_omit.so.0.4.1  libcr_run.so
</span><br>
<span class="quotelev2">&gt;&gt;  libcr_run.so.0.4.1  libcr.so.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./lib/blcr:
</span><br>
<span class="quotelev2">&gt;&gt; 2.6.24-16-generic
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./lib/blcr/2.6.24-16-generic:
</span><br>
<span class="quotelev2">&gt;&gt; blcr_imports.ko  blcr.ko  blcr_vmadump.ko
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./libexec:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./man:
</span><br>
<span class="quotelev2">&gt;&gt; man1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./man/man1:
</span><br>
<span class="quotelev2">&gt;&gt; cr_checkpoint.1  cr_restart.1  cr_run.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Help me, please
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
<span class="quotelev2">&gt;&gt; &lt;config.tar&gt;_______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6598/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6599.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6597.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6572.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6669.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Reply:</strong> <a href="6669.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
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
