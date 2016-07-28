<?
$subject_val = "Re: [OMPI users] Build error with gcc-4.9.2?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 18:25:27 2015" -->
<!-- isoreceived="20150413222527" -->
<!-- sent="Mon, 13 Apr 2015 18:25:21 -0400" -->
<!-- isosent="20150413222521" -->
<!-- name="Novosielski, Ryan" -->
<!-- email="novosirj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build error with gcc-4.9.2?" -->
<!-- id="FCEDAE52-DFEF-48A3-95B1-02A0FD030CBB_at_ca.rutgers.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="552C333F.5070805_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Build error with gcc-4.9.2?<br>
<strong>From:</strong> Novosielski, Ryan (<em>novosirj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-13 18:25:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26703.php">John Cary: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>Previous message:</strong> <a href="26701.php">John Cary: "[OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>In reply to:</strong> <a href="26701.php">John Cary: "[OMPI users] Build error with gcc-4.9.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26703.php">John Cary: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>Reply:</strong> <a href="26703.php">John Cary: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe I reported same some months back. I don't remember the outcome or whether I got it working. But you're not alone anyway.
<br>

<br>
____ *Note: UMDNJ is now Rutgers-Biomedical and Health Sciences*
<br>
|| \\UTGERS      |---------------------*O*---------------------
<br>
||_// Biomedical | Ryan Novosielski - Senior Technologist
<br>
|| \\ and Health | novosirj_at_[hidden]&lt;mailto:novosirj_at_[hidden]&gt;- 973/972.0922 (2x0922)
<br>
||  \\  Sciences | OIRT/High Perf &amp; Res Comp - MSB C630, Newark
<br>
&nbsp;&nbsp;&nbsp;&nbsp;`'
<br>

<br>
On Apr 13, 2015, at 17:21, John Cary &lt;cary_at_[hidden]&lt;mailto:cary_at_[hidden]&gt;&gt; wrote:
<br>

<br>
I am seeing:
<br>

<br>

<br>
Making all in tools/ompi_info
<br>
make[2]: Entering directory
<br>
`/scr_devlinux/cary/vorpalall/builds/openmpi-1.8.4/static/ompi/tools/ompi_info'
<br>
&nbsp;&nbsp;CC       ompi_info.o
<br>
&nbsp;&nbsp;CC       param.o
<br>
&nbsp;&nbsp;CCLD     ompi_info
<br>
../../../ompi/.libs/libmpi.a(strfns.o): In function `lstat64':
<br>
strfns.c:(.text+0x0): multiple definition of `lstat64'
<br>
../../../ompi/.libs/libmpi.a(register_datarep.o):register_datarep.c:(.text+0x0):
<br>
first defined here
<br>
../../../ompi/.libs/libmpi.a(ad_init.o): In function `lstat64':
<br>
ad_init.c:(.text+0x30): multiple definition of `lstat64'
<br>
../../../ompi/.libs/libmpi.a(register_datarep.o):register_datarep.c:(.text+0x0):
<br>
first defined here
<br>
../../../ompi/.libs/libmpi.a(delete.o): In function `lstat64':
<br>
delete.c:(.text+0x0): multiple definition of `lstat64'
<br>
../../../ompi/.libs/libmpi.a(register_datarep.o):register_datarep.c:(.text+0x0):
<br>
first defined here
<br>
../../../ompi/.libs/libmpi.a(iread.o): In function `lstat64':
<br>
iread.c:(.text+0x0): multiple definition of `lstat64'
<br>
../../../ompi/.libs/libmpi.a(register_datarep.o):register_datarep.c:(.text+0x0):
<br>
first defined here
<br>
../../../ompi/.libs/libmpi.a(iread_at.o): In function `lstat64':
<br>
iread_at.c:(.text+0x0): multiple definition of `lstat64'
<br>
../../../ompi/.libs/libmpi.a(register_datarep.o):register_datarep.c:(.text+0x0):
<br>
first defined here
<br>

<br>

<br>
using
<br>

<br>
$ gcc --version
<br>
gcc (GCC) 4.9.2
<br>

<br>
and openmpi configured with
<br>

<br>
&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;--disable-shared \
<br>
&nbsp;&nbsp;--with-pic \
<br>
&nbsp;&nbsp;--disable-dlopen \
<br>
&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
&nbsp;&nbsp;--with-valgrind=/path/valgrind \
<br>
&nbsp;&nbsp;--disable-vt
<br>

<br>
Thoughts?
<br>

<br>
Thx...J
<br>

<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26701.php">http://www.open-mpi.org/community/lists/users/2015/04/26701.php</a>
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26702/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26703.php">John Cary: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>Previous message:</strong> <a href="26701.php">John Cary: "[OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>In reply to:</strong> <a href="26701.php">John Cary: "[OMPI users] Build error with gcc-4.9.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26703.php">John Cary: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>Reply:</strong> <a href="26703.php">John Cary: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
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
