<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep 29 19:15:53 2007" -->
<!-- isoreceived="20070929231553" -->
<!-- sent="Sat, 29 Sep 2007 19:15:20 -0400" -->
<!-- isosent="20070929231520" -->
<!-- name="James Conway" -->
<!-- email="jxc100_at_[hidden]" -->
<!-- subject="[OMPI users] Make error - MacOSX, Intel v10 compilers and Xgrid MCA" -->
<!-- id="0F646EB0-09CA-4E20-BD09-66CD395EA1DE_at_pitt.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ABC113D4-4E94-4141-BE84-313B9D01D331_at_cisco.com" -->
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
<strong>From:</strong> James Conway (<em>jxc100_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-29 19:15:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI users] Make error - MacOSX, Intel v10 compilers and Xgrid MCA"</a>
<li><strong>Previous message:</strong> <a href="4101.php">Tim Mattox: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>In reply to:</strong> <a href="4017.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Documentation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI users] Make error - MacOSX, Intel v10 compilers and Xgrid MCA"</a>
<li><strong>Reply:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI users] Make error - MacOSX, Intel v10 compilers and Xgrid MCA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(I sent this already, but it didn't appear on the list. The tar- 
<br>
gzipped output from configure and make was over 100kB, so I am  
<br>
sending again without that attached).
<br>
<p>It seems that the XGrid MCA with OpenMPI 1.2.4 does not compile on a  
<br>
Mac/Intel system using the latest Intel compilers (seems to be OK  
<br>
with gcc). I downloaded the latest (Intel v10 20070809) C/C++ and  
<br>
Fortran demos and get the following error when building OpenMPI  
<br>
(output from configure and make are available but possibly too large  
<br>
for the mailing list):
<br>
<p>./configure CC=icc CXX=icpc F77=ifort F90=ifort
<br>
[...ok...]
<br>
make all
<br>
[...]
<br>
/bin/sh ../../../../libtool   --mode=link gcc  -g -O2 -module -avoid- 
<br>
version -framework XGridFoundation -framework Foundation -export- 
<br>
dynamic   -Wl,-u,_munmap -Wl,-multiply_defined,suppress -o  
<br>
mca_pls_xgrid.la -rpath /usr/local/lib/openmpi src/ 
<br>
pls_xgrid_component.lo src/pls_xgrid_module.lo src/ 
<br>
pls_xgrid_client.lo /Users/conway/programs/openMPI/openmpi-1.2.4/orte/ 
<br>
libopen-rte.la /Users/conway/programs/openMPI/openmpi-1.2.4/opal/ 
<br>
libopen-pal.la
<br>
libtool: link: unable to infer tagged configuration
<br>
libtool: link: specify a tag with `--tag'
<br>
make[2]: *** [mca_pls_xgrid.la] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>What I notice here is that despite my specification of the Intel  
<br>
compilers on the configure command line (including the correct c++  
<br>
icpc compiler!) the libtool command that fails seems to be using gcc  
<br>
(... --mode=link gcc ...) on the Xgrid sources. This is part of the  
<br>
Modular Component Architecture (MCA) setup (configure.out) and also  
<br>
uses gcc for the compiles:
<br>
<p>libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include  
<br>
-I../../../../orte/include -I../../../../ompi/include -I/Users/conway/ 
<br>
programs/openMPI/openmpi-1.2.4/include -I../../../.. -D_REENTRANT -g - 
<br>
O2 -MT src/pls_xgrid_module.lo -MD -MP -MF src/.deps/ 
<br>
pls_xgrid_module.Tpo -c src/pls_xgrid_module.m  -fno-common -DPIC -o  
<br>
src/.libs/pls_xgrid_module.o
<br>
<p>I wouldn't expect this, but I can't say if it is intended or not.  
<br>
This particular error can be avoided by excluding xgrid:
<br>
&nbsp;&nbsp;&nbsp;./configure CC=icc CXX=icpc F77=ifort F90=ifort --without-xgrid
<br>
<p>James Conway
<br>
<p><p>PS. Please note that the instructions for collecting install and make  
<br>
information are not quite right, maybe out-of-date. On this page:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
the following instruction is given:
<br>
&nbsp;&nbsp;&nbsp;shell% cp config.log share/include/ompi_config.h $HOME/ompi-output
<br>
There is no &quot;share&quot; directory in the openMPI area, and the file seems  
<br>
instead to be in &quot;ompi&quot;:
<br>
&nbsp;&nbsp;&nbsp;ompi/include/ompi_config.h
<br>
<p>----------------------------------------------------------------------
<br>
James Conway, PhD.,
<br>
Department of Structural Biology
<br>
University of Pittsburgh School of Medicine
<br>
Biomedical Science Tower 3, Room 2047
<br>
3501 5th Ave
<br>
Pittsburgh, PA 15260
<br>
U.S.A.
<br>
Phone: +1-412-383-9847
<br>
Fax:   +1-412-648-8998
<br>
Email: jxc100_at_[hidden]
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI users] Make error - MacOSX, Intel v10 compilers and Xgrid MCA"</a>
<li><strong>Previous message:</strong> <a href="4101.php">Tim Mattox: "Re: [OMPI users] OpenMPI Giving problems when using -mca btl mx, sm, self"</a>
<li><strong>In reply to:</strong> <a href="4017.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Documentation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI users] Make error - MacOSX, Intel v10 compilers and Xgrid MCA"</a>
<li><strong>Reply:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI users] Make error - MacOSX, Intel v10 compilers and Xgrid MCA"</a>
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
