<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  6 19:16:23 2007" -->
<!-- isoreceived="20071006231623" -->
<!-- sent="Sat, 6 Oct 2007 16:16:13 -0700" -->
<!-- isosent="20071006231613" -->
<!-- name="Michael Clover" -->
<!-- email="mclover_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)" -->
<!-- id="EDB16910-9063-4103-88B3-528ACAA2B5EC_at_san.rr.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Michael Clover (<em>mclover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-06 19:16:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4166.php">Jeff Squyres: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<li><strong>Previous message:</strong> <a href="4164.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4168.php">Reuti: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>Reply:</strong> <a href="4168.php">Reuti: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was just trying to install openmpi-1.2.4 on a brand new iMac (2.4  
<br>
GHZ Intel Core 2 Duo, 1GB RAM, OSX 10.4.10), having just loaded the  
<br>
xtools environnment.  I am able to successfully run the configure,  
<br>
but make dies instantly:
<br>
<p>configure -prefix=/usr/local/openmpi --disable-mpi-cxx --disable-mpi- 
<br>
f90 --without-xgrid FC=gfortran | tee config.out
<br>
...
<br>
config.status: executing depfiles commands
<br>
config.status: executing libtool commands
<br>
cloverm:~/bin/openmpi-1.2.4:[22]&gt;make -j 4 |&amp; tee make.out
<br>
Makefile:602: *** missing separator.  Stop.
<br>
cloverm:~/bin/openmpi-1.2.4:[23]&gt;ls *.out
<br>
config.out      make.out
<br>
cloverm:~/bin/openmpi-1.2.4:[24]&gt;tar -zcvf ompi-output.tar.gz *.log  
<br>
*.out
<br>
config.log
<br>
config.out
<br>
make.out
<br>
cloverm:~/bin/openmpi-1.2.4:[25]&gt;ld -v
<br>
Apple Computer, Inc. version cctools-622.5.obj~13
<br>
<p>I have copied lines 599-609 from Makefile, so you can see that Make  
<br>
is trying to run gcc, in a way that doesn't look correct
<br>
<p>OMPI_AS_GLOBAL =
<br>
OMPI_AS_LABEL_SUFFIX =
<br>
OMPI_CC_ABSOLUTE =  DISPLAY known
<br>
/usr/bin/gcc
<br>
OMPI_CONFIGURE_DATE = Sat Oct  6 16:05:59 PDT 2007
<br>
OMPI_CONFIGURE_HOST = michael-clovers-computer.local
<br>
OMPI_CONFIGURE_USER = mrc
<br>
OMPI_CXX_ABSOLUTE =  DISPLAY known
<br>
/usr/bin/g++
<br>
OMPI_F77_ABSOLUTE = none
<br>
OMPI_F90_ABSOLUTE = none
<br>
<p><p>I am also attaching the tee'd results, the config.log, and the  
<br>
Makefile that doesn't work:
<br>
<p>cloverm:~/bin/openmpi-1.2.4:[27]&gt;tar -zcvf ompi-output.tar.gz *.log  
<br>
*.out Makefile
<br>
config.log
<br>
config.out
<br>
make.out
<br>
Makefile
<br>
<p>

<br><p>
<p>Michael Clover
<br>
mclover_at_[hidden]
<br>
<p><p><p><p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4165/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4166.php">Jeff Squyres: "Re: [OMPI users] mca_oob_tcp_peer_try_connect: messages"</a>
<li><strong>Previous message:</strong> <a href="4164.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4168.php">Reuti: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>Reply:</strong> <a href="4168.php">Reuti: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
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
