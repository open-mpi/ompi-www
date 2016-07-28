<?
$subject_val = "[OMPI users] Problems with compilig of OpenMPI 1.2.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 12:03:47 2008" -->
<!-- isoreceived="20080829160347" -->
<!-- sent="Fri, 29 Aug 2008 18:03:39 +0200" -->
<!-- isosent="20080829160339" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with compilig of OpenMPI 1.2.7" -->
<!-- id="48B81DDB.6070706_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] Problems with compilig of OpenMPI 1.2.7<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-29 12:03:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6447.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>Previous message:</strong> <a href="6445.php">Rolf Vandevaart: "Re: [OMPI users] Continuous poll/select using btl sm	(svn	1.4a1r18899)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6447.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>Reply:</strong> <a href="6447.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>Reply:</strong> <a href="6449.php">Jeff Squyres: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I just tried to install the 1.2.7 version of OpenMPI alongside to our 
<br>
used 1.2.5 and 1.2.6.
<br>
<p>Because we use gcc, intel, studio and pgi compilers on three OSes 
<br>
(Linux, Solaris/Sparc/ Solaris/Opteron), we have at least 15 Versions to 
<br>
compile (not all compilers are available everywere). Some versions are 
<br>
configured and compiled well (so, I don't check them yet, but they 
<br>
compiled and installed...)
<br>
<p>But 8 of versions beraks the compilation with some crude error messages. 
<br>
Mostly there were logs like
<br>
<p>&quot;/usr/include/infiniband/kern-abi.h&quot;, line 144: zero-sized struct/union
<br>
&quot;btl_openib_component.c&quot;, line 293: warning: syntax error:  empty 
<br>
declaration
<br>
<p><p>Six of 8 broken versions stopped the compilation on the file 
<br>
./ompi/mpi/cxx/mpicxx.cc
<br>
<p>+++++++++++++++++++++++++
<br>
......
<br>
Making all in cxx
<br>
gmake[3]: Entering directory 
<br>
`/rwthfs/rz/cluster/home/pk224850/OpenMPI/openmpi-1.2.7_SolX86_studio/ompi/mpi/cxx'
<br>
source='mpicxx.cc' object='mpicxx.lo' libtool=yes \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/bash ../../../config/depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/bash ../../../libtool --tag=CXX   --mode=compile CC 
<br>
-DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include 
<br>
-I../../../ompi/include  -DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 
<br>
-DOMPI_SKIP_MPICXX=1 -I../../..    -DNDEBUG -O2 -m64 -mt -c -o mpicxx.lo 
<br>
mpicxx.cc
<br>
libtool: compile:  CC -DHAVE_CONFIG_H -I. -I../../../opal/include 
<br>
-I../../../orte/include -I../../../ompi/include 
<br>
-DOMPI_BUILDING_CXX_BINDINGS_LIBRARY=1 -DOMPI_SKIP_MPICXX=1 -I../../.. 
<br>
-DNDEBUG -O2 -m64 -mt -c mpicxx.cc  -KPIC -DPIC -o .libs/mpicxx.o
<br>
&quot;mpicxx.cc&quot;, line 293: Error: A declaration does not specify a tag or an 
<br>
identifier.
<br>
&quot;mpicxx.cc&quot;, line 293: Error: Use &quot;;&quot; to terminate declarations.
<br>
&quot;mpicxx.cc&quot;, line 293: Error: A declaration was expected instead of &quot;0x01&quot;.
<br>
3 Error(s) detected
<br>
.......
<br>
+++++++++++++++++++++++++
<br>
<p><p>So, it seems to me, there is somewhat nasty with one or more 
<br>
declarations  somewhere...
<br>
<p>Does somebody have any idea what I am doing wrong? Or maybe there is an 
<br>
bug in 1.2.7?
<br>
<p><p>Best regards
<br>
Paul Kapinos
<br>
<p><p>P.S. I Used quite straght forward configuretion like following:
<br>
<p>./configure --enable-static --with-devel-headers CFLAGS=&quot;-O2 -m64&quot; 
<br>
CXXFLAGS=&quot;-O2 -m64&quot; F77=f77 FFLAGS=&quot;-O2 -m64&quot; FCFLAGS=&quot;-O2 -m64&quot; 
<br>
LDFLAGS=&quot;-O2 -m64&quot; --prefix=/rwthfs/rz/SW/MPI/openmpi-1.2.7/solx8664/studio
<br>
<p><p>Of course other versions (32bit, other compiler) are configured with 
<br>
adapted settings ;-) The very same settings applied to 1.2.5 and 1.2.6 
<br>
does not produce any problems in the past.
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6446/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6447.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>Previous message:</strong> <a href="6445.php">Rolf Vandevaart: "Re: [OMPI users] Continuous poll/select using btl sm	(svn	1.4a1r18899)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6447.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>Reply:</strong> <a href="6447.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>Reply:</strong> <a href="6449.php">Jeff Squyres: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
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
