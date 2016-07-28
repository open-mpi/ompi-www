<?
$subject_val = "[OMPI users] undefined reference to `__intel_sse2_strlen'";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  9 17:25:11 2012" -->
<!-- isoreceived="20121009212511" -->
<!-- sent="Wed, 10 Oct 2012 00:25:06 +0300" -->
<!-- isosent="20121009212506" -->
<!-- name="Thomas Evangelidis" -->
<!-- email="tevang3_at_[hidden]" -->
<!-- subject="[OMPI users] undefined reference to `__intel_sse2_strlen'" -->
<!-- id="CAACvdx0FxeFuhG_G8s+Za2=Pv9b=sG6rULf8A=-HuK5-pGPeTw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] undefined reference to `__intel_sse2_strlen'<br>
<strong>From:</strong> Thomas Evangelidis (<em>tevang3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-09 17:25:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20440.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<li><strong>Previous message:</strong> <a href="20438.php">Jeff Squyres: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20440.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<li><strong>Reply:</strong> <a href="20440.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<li><strong>Maybe reply:</strong> <a href="20445.php">Matthias Jurenz: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>I am trying to compile openmpi 1.6.2 on Fedora 17 64-bit using the intel
<br>
compilers (icc and ifort version 13.0.0) but I am getting an error which I
<br>
cannot trace back. These are the steps I followed:
<br>
<p>./configure CC=icc F77=ifort
<br>
make
<br>
........
<br>
........
<br>
util.o: In function `guess_strlen':
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:45:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:61:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
util.o:/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
<br>
more undefined references to `__intel_sse2_strlen' follow
<br>
util.o: In function `vt_vsnprintf':
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:255:
<br>
undefined reference to `__intel_sse2_strcpy'
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:257:
<br>
undefined reference to `_intel_fast_memcpy'
<br>
util.o: In function `guess_strlen':
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:61:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
util.o:/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
<br>
more undefined references to `__intel_sse2_strlen' follow
<br>
util.o: In function `vt_vsnprintf':
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:255:
<br>
undefined reference to `__intel_sse2_strcpy'
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:257:
<br>
undefined reference to `_intel_fast_memcpy'
<br>
util.o: In function `guess_strlen':
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:61:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
util.o:/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:46:
<br>
more undefined references to `__intel_sse2_strlen' follow
<br>
util.o: In function `vt_strdup':
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:278:
<br>
undefined reference to `__intel_sse2_strcpy'
<br>
util.o: In function `vt_strtrim':
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:286:
<br>
undefined reference to `__intel_sse2_strlen'
<br>
/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool/../../../util/util.c:293:
<br>
undefined reference to `_intel_fast_memcpy'
<br>
collect2: ld returned 1 exit status
<br>
make[7]: *** [opari] Error 1
<br>
make[7]: Leaving directory
<br>
`/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari/tool'
<br>
make[6]: *** [all-recursive] Error 1
<br>
make[6]: Leaving directory
<br>
`/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools/opari'
<br>
make[5]: *** [all-recursive] Error 1
<br>
make[5]: Leaving directory
<br>
`/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt/tools'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory
<br>
`/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt'
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory
<br>
`/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt/vt'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/thomas/Programs/openmpi-1.6.2/ompi/contrib/vt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/thomas/Programs/openmpi-1.6.2/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Can anyone please help me fix it?
<br>
<p>Thanks in advance,
<br>
Thomas
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20439/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20440.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<li><strong>Previous message:</strong> <a href="20438.php">Jeff Squyres: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20440.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<li><strong>Reply:</strong> <a href="20440.php">Jeff Squyres: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<li><strong>Maybe reply:</strong> <a href="20445.php">Matthias Jurenz: "Re: [OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
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
