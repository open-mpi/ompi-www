<?
$subject_val = "[OMPI devel] ompi-dmtcp configure options";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 06:06:18 2011" -->
<!-- isoreceived="20110202110618" -->
<!-- sent="Wed, 2 Feb 2011 12:05:58 +0100" -->
<!-- isosent="20110202110558" -->
<!-- name="Javier Martinez Canillas" -->
<!-- email="martinez.javier_at_[hidden]" -->
<!-- subject="[OMPI devel] ompi-dmtcp configure options" -->
<!-- id="AANLkTi=_xnw-Y6rgFMmBZxHH+pxk-os0Lgo4fMQ268MY_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTi=ftqcyUHVjmV5MSENbsVp=3OtwRTS1fhnvosCN_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] ompi-dmtcp configure options<br>
<strong>From:</strong> Javier Martinez Canillas (<em>martinez.javier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 06:05:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8951.php">Jeff Squyres: "Re: [OMPI devel] ompi-dmtcp configure options"</a>
<li><strong>Previous message:</strong> <a href="8949.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8951.php">Jeff Squyres: "Re: [OMPI devel] ompi-dmtcp configure options"</a>
<li><strong>Reply:</strong> <a href="8951.php">Jeff Squyres: "Re: [OMPI devel] ompi-dmtcp configure options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I found this project:
<br>
<p><a href="https://bitbucket.org/jsquyres/ompi-dmtcp2">https://bitbucket.org/jsquyres/ompi-dmtcp2</a>
<br>
<p>that integrates the mtcp checkpoint/restart facility as a OpenMPI
<br>
checkpoint plug-in.
<br>
<p>I tried to compile it but had a few issues. The README, HACKING and
<br>
INSTALL files seems to be an exact copy of the ones found in the
<br>
original OpenMPI branch. So I couldn't find an explanation about how
<br>
to compile and install this project.
<br>
<p>I look at configure script options and execute it with the following options:
<br>
<p>./configure --prefix=/home/jmartinez/datos/master/tools/openmpi-dmtcp/
<br>
--enable-crdebug --with-mtcp=/home/jmartinez/datos/master/tools/dmtcp
<br>
--with-mtcp-libdir=/home/jmartinez/datos/master/tools/dmtcp/lib
<br>
<p>The configure script finish cleanly but after compilation the
<br>
ompi-checkpoint and ompi-restart binaries are not generated.
<br>
<p>When I compile OpenMPI with BLCR support I also use the option
<br>
--with-ft=cr to enable checkpoint/restart fault tolerance support.
<br>
<p>But if I use this option the configure aborts with an error:
<br>
<p>checking whether we are cross compiling... configure: error: in
<br>
`/home/jmartinez/datos/development/ompi-dmtcp2/opal/mca/event/libevent207/libevent':
<br>
configure: error: cannot run C compiled programs.
<br>
If you meant to cross compile, use `--host'.
<br>
See `config.log' for more details.
<br>
configure: /bin/bash './configure' *failed* for
<br>
opal/mca/event/libevent207/libevent
<br>
configure: WARNING: Event library failed to configure
<br>
configure: error: Cannot continue
<br>
<p>Can you please tell me what am I doing wrong? What are the configure
<br>
options to build this OpenMPI fork with mtcp checkpoint/restart
<br>
support?
<br>
<p>Thanks a lot
<br>
<p>Best regards,
<br>
<p>-----------------------------------------
<br>
Javier Mart&#195;&#173;nez Canillas
<br>
(+34) 682 39 81 69
<br>
PhD Student in High Performance Computing
<br>
Computer Architecture and Operating System Department (CAOS)
<br>
Universitat Aut&#195;&#178;noma de Barcelona
<br>
Barcelona, Spain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8951.php">Jeff Squyres: "Re: [OMPI devel] ompi-dmtcp configure options"</a>
<li><strong>Previous message:</strong> <a href="8949.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8951.php">Jeff Squyres: "Re: [OMPI devel] ompi-dmtcp configure options"</a>
<li><strong>Reply:</strong> <a href="8951.php">Jeff Squyres: "Re: [OMPI devel] ompi-dmtcp configure options"</a>
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
