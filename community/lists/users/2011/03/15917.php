<?
$subject_val = "[OMPI users] Problems with openmpi-1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 20 22:43:44 2011" -->
<!-- isoreceived="20110321024344" -->
<!-- sent="Sun, 20 Mar 2011 19:43:37 -0700" -->
<!-- isosent="20110321024337" -->
<!-- name="Amos Leffler" -->
<!-- email="amosleffler_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with openmpi-1.4.3" -->
<!-- id="AANLkTikW5opHPf0YdZQfrDVk24UarKopQNO1Yj4TRX0R_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problems with openmpi-1.4.3<br>
<strong>From:</strong> Amos Leffler (<em>amosleffler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-20 22:43:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15918.php">David Zhang: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15916.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15918.php">David Zhang: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="15918.php">David Zhang: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="15919.php">Gustavo Correa: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have been having problems getting openmpi-1.4.3 with Linux
<br>
under SUSE 11.3.  I have put the following entries in .bashrc:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PATH:                         /opt/openmpi/bin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LD_LIBRARY_PATH     /opt/openmpi/lib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alias    ifort='opt/intel/bin/ifort'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alias   libopen-pal.so.0:=/usr/lib/libopen-pal.so.0
<br>
The file appears to run properly under the configure command:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure   CC=gcc   CXX=g++   F77=ifort
<br>
F90=ifort      --prefix=/opt/openmpi
<br>
and using    make all install.  However, running an example such as:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc hello_c.c -o hello_c it gives the result:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc: error while loading shared libraries:
<br>
libopen-pal.so.0: cannot open shared object file: No such file or
<br>
directory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;At this point I am stumped and any thouughts would be much
<br>
appreciated.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amos Leffler
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15918.php">David Zhang: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15916.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15918.php">David Zhang: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="15918.php">David Zhang: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="15919.php">Gustavo Correa: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
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
