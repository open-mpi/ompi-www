<?
$subject_val = "[OMPI users] BLCR not found";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 06:09:47 2008" -->
<!-- isoreceived="20080917100947" -->
<!-- sent="Wed, 17 Sep 2008 12:09:43 +0200" -->
<!-- isosent="20080917100943" -->
<!-- name="Santolo Felaco" -->
<!-- email="ahuramazda10_at_[hidden]" -->
<!-- subject="[OMPI users] BLCR not found" -->
<!-- id="5f76eef60809170309r14c3cec1wbd1b74d0a6b3a038_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] BLCR not found<br>
<strong>From:</strong> Santolo Felaco (<em>ahuramazda10_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 06:09:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6565.php">Christophe Spaggiari: "[OMPI users] mpirun hang"</a>
<li><strong>Previous message:</strong> <a href="6563.php">Santolo Felaco: "Re: [OMPI users] Where is ompi-chekpoint?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6568.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Reply:</strong> <a href="6568.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I want to install openmpi-1.3. I have invoked ./configure --with-ft=cr
<br>
--enable-ft-thread --enable-mpi-threads --with-blcr=/home/osa/blcr/
<br>
--enable-progress-threads
<br>
This is error message that show:
<br>
&nbsp;BLCR support requested but not found.  Perhaps you need to specify the
<br>
location of the BLCR libraries.
<br>
<p>I have installed blcr in /home/osa/blcr, I report the list of directory
<br>
blcr:
<br>
.:
<br>
bin  include  lib  libexec  man
<br>
<p>./bin:
<br>
cr_checkpoint  cr_restart  cr_run
<br>
<p>./include:
<br>
blcr_common.h  blcr_errcodes.h  blcr_ioctl.h  blcr_proc.h  libcr.h
<br>
<p>./lib:
<br>
blcr      libcr_omit.la  libcr_omit.so.0      libcr_run.la
<br>
libcr_run.so.0      libcr.so    libcr.so.0.4.1
<br>
libcr.la  libcr_omit.so  libcr_omit.so.0.4.1  libcr_run.so
<br>
libcr_run.so.0.4.1  libcr.so.0
<br>
<p>./lib/blcr:
<br>
2.6.24-16-generic
<br>
<p>./lib/blcr/2.6.24-16-generic:
<br>
blcr_imports.ko  blcr.ko  blcr_vmadump.ko
<br>
<p>./libexec:
<br>
<p>./man:
<br>
man1
<br>
<p>./man/man1:
<br>
cr_checkpoint.1  cr_restart.1  cr_run.1
<br>
<p><p>Help me, please
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6564/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6565.php">Christophe Spaggiari: "[OMPI users] mpirun hang"</a>
<li><strong>Previous message:</strong> <a href="6563.php">Santolo Felaco: "Re: [OMPI users] Where is ompi-chekpoint?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6568.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Reply:</strong> <a href="6568.php">Josh Hursey: "Re: [OMPI users] BLCR not found"</a>
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
