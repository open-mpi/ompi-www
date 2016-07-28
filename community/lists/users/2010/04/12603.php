<?
$subject_val = "[OMPI users] openMPI configure/Installing problem on Mac with gnu-gcc-4.4.3 / gnu-gcc-4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 11 23:48:30 2010" -->
<!-- isoreceived="20100412034830" -->
<!-- sent="Sun, 11 Apr 2010 23:48:18 -0400" -->
<!-- isosent="20100412034818" -->
<!-- name="Baowei Liu" -->
<!-- email="bliu520_at_[hidden]" -->
<!-- subject="[OMPI users] openMPI configure/Installing problem on Mac with gnu-gcc-4.4.3 / gnu-gcc-4.5" -->
<!-- id="v2ma5d7282e1004112048nfeb82d08w3f9fe9f3a9d9cda8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openMPI configure/Installing problem on Mac with gnu-gcc-4.4.3 / gnu-gcc-4.5<br>
<strong>From:</strong> Baowei Liu (<em>bliu520_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-11 23:48:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12604.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Previous message:</strong> <a href="12602.php">Ridhi Dua: "[OMPI users] Installing MPE on existing Open-MPI installation for C++ programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12643.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12643.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I installed gnu-gcc-4.4.3 on our Mac and found out openMPI didn't work any
<br>
longer. I tried a lot of things to install openMPI back but failed. I
<br>
installed the new gnu-gcc-4.5 and got similar problem.
<br>
<p>I followed the information on this mailing list and used option &quot;-arch
<br>
x86_64&quot; for compilers to try to get rid of the following error:
<br>
<p>as: more than one -arch option (not allowed, use cc(1) instead)
<br>
make[2]: *** [coll_hierarch.lo] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>I tried two ways:
<br>
<p>1.
<br>
./configure --prefix=/usr/local/openmpi --enable-static CC=gcc FC=gfortran
<br>
F77=gfortran CXX=g++ CFLAGS=&quot;-arch x86_64&quot; CXXFLAGS=&quot;-arch x86_64&quot;
<br>
FCFLAGS=&quot;-m64 -arch x86_64&quot; FFLAGS=&quot;-m64 -arch x86_64&quot; --with-gnu-ld
<br>
<p>Configure failed. It seems the configure doesn't recognize the option
<br>
-arch x86_64
<br>
<p>Then I did
<br>
2.
<br>
export CFLAGS=&quot;-arch x86_64&quot;
<br>
export CXXFLAGS=&quot;-arch x86_64&quot;
<br>
export FCFLAGS=&quot;-m64 -arch x86_64&quot;
<br>
export FFLAGS=&quot;-m64 -arch x86_64&quot;
<br>
export OBJCFLAGS=&quot;-arch x86_64&quot;
<br>
export
<br>
DYLD_LIBRARY_PATH=/usr/local/gcc-4.5/lib/gcc/x86_64-apple-darwin10.2.0/4.6.0/include
<br>
<p>./configure --prefix=/usr/local/openmpi CC=gcc FC=gfortran F77=gfortran
<br>
CXX=g++ --with-gnu-ld
<br>
<p>Configure passed but it gave same making error.
<br>
<p>Any hint?
<br>
<p>Thanks,
<br>
Bill
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12603/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12603/ompi-output_1.tar.bz2">ompi-output_1.tar.bz2</a>
</ul>
<!-- attachment="ompi-output_1.tar.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12603/ompi-output_2.tar.bz2">ompi-output_2.tar.bz2</a>
</ul>
<!-- attachment="ompi-output_2.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12604.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<li><strong>Previous message:</strong> <a href="12602.php">Ridhi Dua: "[OMPI users] Installing MPE on existing Open-MPI installation for C++ programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12643.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12643.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
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
