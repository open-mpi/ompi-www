<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 16 19:43:20 2007" -->
<!-- isoreceived="20070316234320" -->
<!-- sent="Fri, 16 Mar 2007 18:42:22 -0500" -->
<!-- isosent="20070316234222" -->
<!-- name="Marius Schamschula" -->
<!-- email="marius_at_[hidden]" -->
<!-- subject="[OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9" -->
<!-- id="82367DB0-EBC6-4438-BBC2-D7896318633E_at_physics.aamu.edu" -->
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
<strong>From:</strong> Marius Schamschula (<em>marius_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-16 19:42:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack"</a>
<li><strong>Previous message:</strong> <a href="2818.php">Erik Deumens: "[OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2824.php">Jeff Squyres: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<li><strong>Reply:</strong> <a href="2824.php">Jeff Squyres: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<li><strong>Reply:</strong> <a href="2842.php">Brian Barrett: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I was building open-mpi 1.2 on my G4 running Mac OS X 10.3.9 and had  
<br>
a build failure with the following:
<br>
<p>depbase=`echo runtime/ompi_mpi_preconnect.lo | sed 's|[^/]*$|.deps/ 
<br>
&amp;|;s|\.lo$||'`; \
<br>
if /bin/sh ../libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H -I.  
<br>
-I. -I../opal/include -I../orte/include -I../ompi/include -I../ompi/ 
<br>
include   -I..  -D_REENTRANT  -O3 -DNDEBUG -finline-functions -fno- 
<br>
strict-aliasing  -MT runtime/ompi_mpi_preconnect.lo -MD -MP -MF  
<br>
&quot;$depbase.Tpo&quot; -c -o runtime/ompi_mpi_preconnect.lo runtime/ 
<br>
ompi_mpi_preconnect.c; \
<br>
then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;;  
<br>
exit 1; fi
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I. -I../opal/include -I../ 
<br>
orte/include -I../ompi/include -I../ompi/include -I.. -D_REENTRANT - 
<br>
O3 -DNDEBUG -finline-functions -fno-strict-aliasing -MT runtime/ 
<br>
ompi_mpi_preconnect.lo -MD -MP -MF runtime/.deps/ 
<br>
ompi_mpi_preconnect.Tpo -c runtime/ompi_mpi_preconnect.c  -fno-common  
<br>
-DPIC -o runtime/.libs/ompi_mpi_preconnect.o
<br>
runtime/ompi_mpi_preconnect.c: In function  
<br>
`ompi_init_do_oob_preconnect':
<br>
runtime/ompi_mpi_preconnect.c:74: error: storage size of `msg' isn't  
<br>
known
<br>
make[2]: *** [runtime/ompi_mpi_preconnect.lo] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>$ gcc -v
<br>
Reading specs from /usr/libexec/gcc/darwin/ppc/3.3/specs
<br>
Thread model: posix
<br>
gcc version 3.3 20030304 (Apple Computer, Inc. build 1495)
<br>
<p>$ g77 -v
<br>
Reading specs from /usr/local/lib/gcc/powerpc-apple-darwin7.3.0/3.5.0/ 
<br>
specs
<br>
Configured with: ../gcc/configure --enable-threads=posix --enable- 
<br>
languages=f77
<br>
Thread model: posix
<br>
gcc version 3.5.0 20040429 (experimental)
<br>
<p>(g77 from hpc.sf.net)
<br>
<p><p>Note: I had no such problem under Mac OS X 10.4.9 with my ppc and x86  
<br>
builds. However, I did notice that the configure script did not  
<br>
detect g95 from g95.org correctly:
<br>
<p>*** Fortran 90/95 compiler
<br>
checking for gfortran... no
<br>
checking for f95... no
<br>
checking for fort... no
<br>
checking for xlf95... no
<br>
checking for ifort... no
<br>
checking for ifc... no
<br>
checking for efc... no
<br>
checking for pgf95... no
<br>
checking for lf95... no
<br>
checking for f90... no
<br>
checking for xlf90... no
<br>
checking for pgf90... no
<br>
checking for epcf90... no
<br>
checking whether we are using the GNU Fortran compiler... no
<br>
<p>configure --help doesn't give any hint about specifying F95.
<br>
<p>TIA,
<br>
<p>Marius
<br>
<pre>
--
Marius Schamschula,  Alabama A &amp; M University, Department of Physics
     The Center for Hydrology Soil Climatology and Remote Sensing
    <a href="http://optics.physics.aamu.edu/">http://optics.physics.aamu.edu/</a> - <a href="http://www.physics.aamu.edu/">http://www.physics.aamu.edu/</a>
           <a href="http://wx.aamu.edu/">http://wx.aamu.edu/</a> - <a href="http://www.aamu.edu/hscars/">http://www.aamu.edu/hscars/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2819/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2820.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack"</a>
<li><strong>Previous message:</strong> <a href="2818.php">Erik Deumens: "[OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2824.php">Jeff Squyres: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<li><strong>Reply:</strong> <a href="2824.php">Jeff Squyres: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<li><strong>Reply:</strong> <a href="2842.php">Brian Barrett: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
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
