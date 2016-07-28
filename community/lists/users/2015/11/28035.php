<?
$subject_val = "[OMPI users] static OpenMPI with GNU";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 13 11:30:27 2015" -->
<!-- isoreceived="20151113163027" -->
<!-- sent="Fri, 13 Nov 2015 16:30:21 +0000" -->
<!-- isosent="20151113163021" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="[OMPI users] static OpenMPI with GNU" -->
<!-- id="e01d85f9cee94ac8a4753bc21f525ad8_at_MAILBOX2.umb.sk" -->
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
<strong>Subject:</strong> [OMPI users] static OpenMPI with GNU<br>
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-13 11:30:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28036.php">Rolf vandeVaart: "Re: [OMPI users] static OpenMPI with GNU"</a>
<li><strong>Previous message:</strong> <a href="28034.php">Ralph Castain: "Re: [OMPI users] Odd pipe error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28036.php">Rolf vandeVaart: "Re: [OMPI users] static OpenMPI with GNU"</a>
<li><strong>Reply:</strong> <a href="28036.php">Rolf vandeVaart: "Re: [OMPI users] static OpenMPI with GNU"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greeting,
<br>
<p><p>I am trying to compile the static version of OpenMPI, with GNU.
<br>
<p><p>The configuration command :
<br>
<p><p>milias_at_[hidden]:~/bin/openmpi-1.10.1-gnu-static/openmpi-1.10.1/../configure --prefix=/home/milias/bin/openmpi-1.10.1-gnu-static  CXX=g++ CC=gcc F77=gfortran FC=gfortran  LDFLAGS=&quot;--static&quot; LIBS=&quot;-ldl -lrt&quot; --disable-shared --enable-static
<br>
<p>But the compilation end with error below.
<br>
<p>I though that the -lrt should fix it (/usr/lib64/librt.a), but no way. Any help please ?
<br>
?
<br>
Miro
<br>
<p>make[10]: Entering directory `/home/milias/bin/openmpi-1.10.1-gnu-static/openmpi-1.10.1/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
<br>
&nbsp;&nbsp;CC       otfmerge_mpi-handler.o
<br>
&nbsp;&nbsp;CC       otfmerge_mpi-otfmerge.o
<br>
&nbsp;&nbsp;CCLD     otfmerge-mpi
<br>
/home/milias/bin/openmpi-1.10.1-gnu-static/openmpi-1.10.1/opal/.libs/libopen-pal.a(memory_linux_munmap.o): In function `opal_memory_linux_free_ptmalloc2_munmap':
<br>
memory_linux_munmap.c:(.text+0x3d): undefined reference to `__munmap'
<br>
/home/milias/bin/openmpi-1.10.1-gnu-static/openmpi-1.10.1/opal/.libs/libopen-pal.a(memory_linux_munmap.o): In function `munmap':
<br>
memory_linux_munmap.c:(.text+0x87): undefined reference to `__munmap'
<br>
collect2: ld returned 1 exit status
<br>
make[10]: *** [otfmerge-mpi] Error 1
<br>
<p><p><p><p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28035/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28036.php">Rolf vandeVaart: "Re: [OMPI users] static OpenMPI with GNU"</a>
<li><strong>Previous message:</strong> <a href="28034.php">Ralph Castain: "Re: [OMPI users] Odd pipe error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28036.php">Rolf vandeVaart: "Re: [OMPI users] static OpenMPI with GNU"</a>
<li><strong>Reply:</strong> <a href="28036.php">Rolf vandeVaart: "Re: [OMPI users] static OpenMPI with GNU"</a>
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
