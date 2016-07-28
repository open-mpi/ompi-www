<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 19 18:47:00 2007" -->
<!-- isoreceived="20070619224700" -->
<!-- sent="Tue, 19 Jun 2007 15:46:53 -0700" -->
<!-- isosent="20070619224653" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="[OMPI users] error -- libtool unsupported hardcode properties" -->
<!-- id="46785CDD.7000906_at_open-mpi.org" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-19 18:46:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3509.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Previous message:</strong> <a href="3507.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3509.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Reply:</strong> <a href="3509.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to build Open MPI v1.2.2 with gcc/g++/g77 3.4.4 and pathf90 
<br>
v2.4 on a linux system, and see this error when compiling ompi_info:
<br>
<p>/bin/sh ../../../libtool --tag=CXX --mode=link g++  -g -O2 
<br>
-finline-functions -pthread  -export-dynamic   -o ompi_info 
<br>
components.o ompi_info.o output.o param.o version.o 
<br>
../../../ompi/libmpi.la -lnsl -lutil  -lm
<br>
libtool: link: unsupported hardcode properties
<br>
libtool: link: See the libtool documentation for more information.
<br>
libtool: link: Fatal configuration error.
<br>
make[2]: *** [ompi_info] Error 1
<br>
make[2]: Leaving directory 
<br>
`/g/g21/afriedle/work/ompibuild/openmpi-1.2.2/ompi/tools/ompi_info'
<br>
make[1]: *** [all-recursive] Error 1
<br>
<p>Google didn't turn anything up.  Strange thing is, gcc 3.4.5 works just 
<br>
fine on this system.  I'm using this to build:
<br>
<p>export CC=gcc
<br>
export CXX=g++
<br>
export F77=g77
<br>
export FC=pathf90
<br>
export CFLAGS=&quot;-g -O2&quot;
<br>
export CXXFLAGS=&quot;-g -O2&quot;
<br>
export FFLAGS=&quot;-fno-second-underscore -g -O2&quot;
<br>
export FCFLAGS=&quot;-fno-second-underscore -g -O2&quot;
<br>
export PREFIX=$ROOT/gnudbg
<br>
<p>./configure --prefix=$PREFIX --enable-debug --enable-mpi-f77 
<br>
--enable-mpi-f90 --with-openib=/usr
<br>
<p>I've attached the config.log.. any ideas?
<br>
<p>Andrew
<br>
<p>
<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3508/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3509.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Previous message:</strong> <a href="3507.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3509.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Reply:</strong> <a href="3509.php">Jeff Squyres: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
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
