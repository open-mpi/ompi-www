<?
$subject_val = "[OMPI users] Scalability issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 09:36:28 2010" -->
<!-- isoreceived="20101202143628" -->
<!-- sent="Thu, 2 Dec 2010 15:36:23 +0100" -->
<!-- isosent="20101202143623" -->
<!-- name="Benjamin Toueg" -->
<!-- email="btoueg_at_[hidden]" -->
<!-- subject="[OMPI users] Scalability issue" -->
<!-- id="AANLkTikd3eRSQ2Ftxbeo-eWVb8EO4KP2qCnfdv2BBoHE_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Scalability issue<br>
<strong>From:</strong> Benjamin Toueg (<em>btoueg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 09:36:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14977.php">Jeff Squyres: "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<li><strong>Previous message:</strong> <a href="14975.php">Shiqing Fan: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14980.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Reply:</strong> <a href="14980.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using DRAGON, a neutronic simulation code in FORTRAN77 that has its own
<br>
datastructures. I added a module to send these data structures thanks to
<br>
MPI_SEND / MPI_RECEIVE, and everything worked perfectly for a while.
<br>
<p>Then I had to raise the number of data structures to be sent up to a point
<br>
where my cluster has this bug :
<br>
*** Process received signal ***
<br>
Signal: Segmentation fault (11)
<br>
Signal code: Address not mapped (1)
<br>
Failing at address: 0x2c2579fc0
<br>
[ 0] /lib/libpthread.so.0 [0x7f52d2930410]
<br>
[ 1] /home/toueg/openmpi/lib/openmpi/mca_pml_ob1.so [0x7f52d153fe03]
<br>
[ 2] /home/toueg/openmpi/lib/libmpi.so.0(PMPI_Recv+0x2d2) [0x7f52d3504a1e]
<br>
[ 3] /home/toueg/openmpi/lib/libmpi_f77.so.0(pmpi_recv_+0x10e)
<br>
[0x7f52d36cf9c6]
<br>
<p>*How can I make this error more explicit ?*
<br>
<p>I use the following configuration of openmpi-1.4.3 :
<br>
./configure --enable-debug --prefix=/home/toueg/openmpi CXX=g++ CC=gcc
<br>
F77=gfortran FC=gfortran FLAGS=&quot;-m64 -fdefault-integer-8 -fdefault-real-8
<br>
-fdefault-double-8&quot; FCFLAGS=&quot;-m64 -fdefault-integer-8 -fdefault-real-8
<br>
-fdefault-double-8&quot; --disable-mpi-f90
<br>
<p>Here is the output of mpif77 -v :
<br>
mpif77 for 1.2.7 (release) of : 2005/11/04 11:54:51
<br>
Driving: f77 -L/usr/lib/mpich-mpd/lib -v -lmpich-p4mpd -lpthread -lrt
<br>
-lfrtbegin -lg2c -lm -shared-libgcc
<br>
Lecture des sp&#195;&#169;cification &#195;&#160; partir de
<br>
/usr/lib/gcc/x86_64-linux-gnu/3.4.6/specs
<br>
Configur&#195;&#169; avec: ../src/configure -v --enable-languages=c,c++,f77,pascal
<br>
--prefix=/usr --libexecdir=/usr/lib
<br>
--with-gxx-include-dir=/usr/include/c++/3.4 --enable-shared
<br>
--with-system-zlib --enable-nls --without-included-gettext
<br>
--program-suffix=-3.4 --enable-__cxa_atexit --enable-clocale=gnu
<br>
--enable-libstdcxx-debug x86_64-linux-gnu
<br>
Mod&#195;&#168;le de thread: posix
<br>
version gcc 3.4.6 (Debian 3.4.6-5)
<br>
&nbsp;/usr/lib/gcc/x86_64-linux-gnu/3.4.6/collect2 --eh-frame-hdr -m elf_x86_64
<br>
-dynamic-linker /lib64/ld-linux-x86-64.so.2
<br>
/usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/crt1.o
<br>
/usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/crti.o
<br>
/usr/lib/gcc/x86_64-linux-gnu/3.4.6/crtbegin.o -L/usr/lib/mpich-mpd/lib
<br>
-L/usr/lib/gcc/x86_64-linux-gnu/3.4.6 -L/usr/lib/gcc/x86_64-linux-gnu/3.4.6
<br>
-L/usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib
<br>
-L/usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../.. -L/lib/../lib
<br>
-L/usr/lib/../lib -lmpich-p4mpd -lpthread -lrt -lfrtbegin -lg2c -lm -lgcc_s
<br>
-lgcc -lc -lgcc_s -lgcc /usr/lib/gcc/x86_64-linux-gnu/3.4.6/crtend.o
<br>
/usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/crtn.o
<br>
/usr/lib/gcc/x86_64-linux-gnu/3.4.6/../../../../lib/libfrtbegin.a(frtbegin.o):
<br>
dans la fonction &#226;&#150;&#146; main &#226;&#150;&#146;:
<br>
(.text+0x1e): r&#195;&#169;f&#195;&#169;rence ind&#195;&#169;finie vers &#226;&#150;&#146; MAIN__ &#226;&#150;&#146;
<br>
collect2: ld a retourn&#195;&#169; 1 code d'&#195;&#169;tat d'ex&#195;&#169;cution
<br>
<p>Thanks,
<br>
Benjamin
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14976/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14977.php">Jeff Squyres: "Re: [OMPI users] can't understand the mean of &quot;ofud&quot; in openmpi"</a>
<li><strong>Previous message:</strong> <a href="14975.php">Shiqing Fan: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14980.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Reply:</strong> <a href="14980.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
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
