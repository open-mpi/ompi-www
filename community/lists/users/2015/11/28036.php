<?
$subject_val = "Re: [OMPI users] static OpenMPI with GNU";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 13 11:42:46 2015" -->
<!-- isoreceived="20151113164246" -->
<!-- sent="Fri, 13 Nov 2015 16:42:40 +0000" -->
<!-- isosent="20151113164240" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] static OpenMPI with GNU" -->
<!-- id="582f466805824a4c854b4167fec71c46_at_HQMAIL102.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="e01d85f9cee94ac8a4753bc21f525ad8_at_MAILBOX2.umb.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] static OpenMPI with GNU<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-13 11:42:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28037.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
<li><strong>Previous message:</strong> <a href="28035.php">Ilias Miroslav: "[OMPI users] static OpenMPI with GNU"</a>
<li><strong>In reply to:</strong> <a href="28035.php">Ilias Miroslav: "[OMPI users] static OpenMPI with GNU"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A workaround is to add &#226;&#128;&#147;disable-vt to your configure line if you do not care about having vampirtrace support.
<br>
Not a solution, but might help you make progress.
<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ilias Miroslav
<br>
Sent: Friday, November 13, 2015 11:30 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] static OpenMPI with GNU
<br>

<br>

<br>
Greeting,
<br>

<br>

<br>

<br>
I am trying to compile the static version of OpenMPI, with GNU.
<br>

<br>

<br>

<br>
The configuration command :
<br>

<br>

<br>
milias_at_[hidden]:~/bin/openmpi-1.10.1-gnu-static/openmpi-1.10.1/../configure&lt;mailto:milias_at_[hidden]:~/bin/openmpi-1.10.1-gnu-static/openmpi-1.10.1/../configure&gt; --prefix=/home/milias/bin/openmpi-1.10.1-gnu-static  CXX=g++ CC=gcc F77=gfortran FC=gfortran  LDFLAGS=&quot;--static&quot; LIBS=&quot;-ldl -lrt&quot; --disable-shared --enable-static
<br>

<br>
But the compilation end with error below.
<br>

<br>
I though that the -lrt should fix it (/usr/lib64/librt.a), but no way. Any help please ?
<br>
&#226;&#128;&#139;
<br>
Miro
<br>

<br>
make[10]: Entering directory `/home/milias/bin/openmpi-1.10.1-gnu-static/openmpi-1.10.1/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
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

<br>

<br>

<br>

<br>

<br>

<br>

<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28036/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28037.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
<li><strong>Previous message:</strong> <a href="28035.php">Ilias Miroslav: "[OMPI users] static OpenMPI with GNU"</a>
<li><strong>In reply to:</strong> <a href="28035.php">Ilias Miroslav: "[OMPI users] static OpenMPI with GNU"</a>
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
