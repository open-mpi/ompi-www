<?
$subject_val = "[OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 21 15:38:59 2011" -->
<!-- isoreceived="20111121203859" -->
<!-- sent="Mon, 21 Nov 2011 14:38:55 -0600" -->
<!-- isosent="20111121203855" -->
<!-- name="Bruce Foster" -->
<!-- email="bef_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2" -->
<!-- id="000001cca88d$96ecfaf0$c4c6f0d0$_at_northwestern.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2<br>
<strong>From:</strong> Bruce Foster (<em>bef_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-21 15:38:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10008.php">Lukas Razik: "[OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10006.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10013.php">Jeff Squyres: "Re: [OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2"</a>
<li><strong>Reply:</strong> <a href="10013.php">Jeff Squyres: "Re: [OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I configured the 1.4.4 release with the following:
<br>
<p>&nbsp;
<br>
<p>#!/bin/sh
<br>
<p>&nbsp;
<br>
<p>NUVER=1.4.4
<br>
<p>&nbsp;
<br>
<p>rm -f config.cache
<br>
<p>rm -f NUInstall.configure
<br>
<p>&nbsp;
<br>
<p>#/bef/OpenMPI/openmpi-${NUVER}/configure \
<br>
<p>../../openmpi-${NUVER}/configure \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/opt/openmpi/GNU \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-tm=/usr/pbs \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-static \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-dlopen \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--build=x86_64-redhat-linux-gnu \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--host=x86_64-redhat-linux-gnu \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--target=x86_64-redhat-linux-gnu \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&gt;&amp;1 | tee NUInstall.configure
<br>
<p>&nbsp;
<br>
<p>I don't see any problems in the configuration output. However, when I try to
<br>
make the results, there is an explicit reference to release 1.4.2, and the
<br>
make fails:
<br>
<p>&nbsp;
<br>
<p>[root_at_seldon GNU]# more NUInstall.make.all
<br>
<p>Making all in config
<br>
<p>make[1]: Entering directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/config'
<br>
<p>make[1]: Nothing to be done for `all'.
<br>
<p>make[1]: Leaving directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/config'
<br>
<p>Making all in contrib
<br>
<p>make[1]: Entering directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/contrib'
<br>
<p>make[1]: Nothing to be done for `all'.
<br>
<p>make[1]: Leaving directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/contrib'
<br>
<p>Making all in opal
<br>
<p>make[1]: Entering directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/opal'
<br>
<p>Making all in include
<br>
<p>make[2]: Entering directory
<br>
`/sscc/opt/Apps/OpenMPI/Configs/GNU/opal/include'
<br>
<p>make  all-am
<br>
<p>make[3]: Entering directory
<br>
`/sscc/opt/Apps/OpenMPI/Configs/GNU/opal/include'
<br>
<p>make[3]: Leaving directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/opal/include'
<br>
<p>make[2]: Leaving directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/opal/include'
<br>
<p>Making all in asm
<br>
<p>make[2]: Entering directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/opal/asm'
<br>
<p>make[2]: *** No rule to make target
<br>
`../../../../openmpi-1.4.2/opal/asm/asm.c', needed 
<br>
<p>by `asm.lo'.  Stop.
<br>
<p>make[2]: Leaving directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/opal/asm'
<br>
<p>make[1]: *** [all-recursive] Error 1
<br>
<p>make[1]: Leaving directory `/sscc/opt/Apps/OpenMPI/Configs/GNU/opal'
<br>
<p>make: *** [all-recursive] Error 1
<br>
<p>&nbsp;
<br>
<p>Looking at the configured opal/asm directory, there's a bad symlink to the
<br>
1.4.2 release:
<br>
<p>&nbsp;
<br>
<p>[bef_at_seldon GNU]# cd opal/asm
<br>
<p>[bef_at_seldon asm]# ls -l
<br>
<p>total 199
<br>
<p>-rw-r--r-- 1 bef bef   264 May  5  2010 asm.lo
<br>
<p>-rw-r--r-- 1 bef bef   935 May  5  2010 asm.o
<br>
<p>-rw-r--r-- 1 bef bef   285 May  5  2010 atomic-asm.lo
<br>
<p>-rw-r--r-- 1 bef bef  1115 May  5  2010 atomic-asm.o
<br>
<p>lrwxrwxrwx 1 bef bef    65 May  5  2010 atomic-asm.S -&gt;
<br>
../../../../openmpi-1.4.2/opal/asm/generated/atomic-amd64-linux.s
<br>
<p>-rw-r--r-- 1 bef bef   873 May  5  2010 libasm.la
<br>
<p>-rw-r--r-- 1 bef bef 54526 Oct 14 16:19 Makefile
<br>
<p>&nbsp;
<br>
<p>Bruce
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10007/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10008.php">Lukas Razik: "[OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10006.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10013.php">Jeff Squyres: "Re: [OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2"</a>
<li><strong>Reply:</strong> <a href="10013.php">Jeff Squyres: "Re: [OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2"</a>
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
