<?
$subject_val = "Re: [OMPI users] BLCR not found";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 07:44:43 2008" -->
<!-- isoreceived="20080917114443" -->
<!-- sent="Wed, 17 Sep 2008 13:44:36 +0200" -->
<!-- isosent="20080917114436" -->
<!-- name="Santolo Felaco" -->
<!-- email="ahuramazda10_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLCR not found" -->
<!-- id="5f76eef60809170444h3d538d23m6288d10f1c5b0a45_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="76F25AB3-52EE-4AB6-B686-07D2D8494D9A_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-09-17 07:44:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6570.php">George Bosilca: "Re: [OMPI users] mpirun hang"</a>
<li><strong>Previous message:</strong> <a href="6568.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>In reply to:</strong> <a href="6568.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6572.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Reply:</strong> <a href="6572.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is the zipped file config.log
<br>
<p>2008/9/17 Josh Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Can you send me a zip'ed up version of the config.log from your build? That
</span><br>
<span class="quotelev1">&gt; will help in determining what went wrong with configure.
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
<span class="quotelev1">&gt;  Hi, I want to install openmpi-1.3. I have invoked ./configure --with-ft=cr
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
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6569/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6569/config.tar">config.tar</a>
</ul>
<!-- attachment="config.tar" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6570.php">George Bosilca: "Re: [OMPI users] mpirun hang"</a>
<li><strong>Previous message:</strong> <a href="6568.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>In reply to:</strong> <a href="6568.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6572.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Reply:</strong> <a href="6572.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
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
