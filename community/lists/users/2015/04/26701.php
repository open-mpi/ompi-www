<?
$subject_val = "[OMPI users] Build error with gcc-4.9.2?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 17:21:05 2015" -->
<!-- isoreceived="20150413212105" -->
<!-- sent="Mon, 13 Apr 2015 15:21:03 -0600" -->
<!-- isosent="20150413212103" -->
<!-- name="John Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="[OMPI users] Build error with gcc-4.9.2?" -->
<!-- id="552C333F.5070805_at_txcorp.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Build error with gcc-4.9.2?<br>
<strong>From:</strong> John Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-13 17:21:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26702.php">Novosielski, Ryan: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>Previous message:</strong> <a href="26700.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26702.php">Novosielski, Ryan: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>Reply:</strong> <a href="26702.php">Novosielski, Ryan: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am seeing:
<br>
<p><p>Making all in tools/ompi_info
<br>
make[2]: Entering directory 
<br>
`/scr_devlinux/cary/vorpalall/builds/openmpi-1.8.4/static/ompi/tools/ompi_info'
<br>
&nbsp;&nbsp;&nbsp;CC       ompi_info.o
<br>
&nbsp;&nbsp;&nbsp;CC       param.o
<br>
&nbsp;&nbsp;&nbsp;CCLD     ompi_info
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
<p><p>using
<br>
<p>$ gcc --version
<br>
gcc (GCC) 4.9.2
<br>
<p>and openmpi configured with
<br>
<p>&nbsp;&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;&nbsp;--disable-shared \
<br>
&nbsp;&nbsp;&nbsp;--with-pic \
<br>
&nbsp;&nbsp;&nbsp;--disable-dlopen \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;--with-valgrind=/path/valgrind \
<br>
&nbsp;&nbsp;&nbsp;--disable-vt
<br>
<p>Thoughts?
<br>
<p>Thx...J
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26702.php">Novosielski, Ryan: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>Previous message:</strong> <a href="26700.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26702.php">Novosielski, Ryan: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
<li><strong>Reply:</strong> <a href="26702.php">Novosielski, Ryan: "Re: [OMPI users] Build error with gcc-4.9.2?"</a>
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
