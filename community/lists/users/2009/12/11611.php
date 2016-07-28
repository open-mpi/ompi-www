<?
$subject_val = "[OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 19 12:21:55 2009" -->
<!-- isoreceived="20091219172155" -->
<!-- sent="Sat, 19 Dec 2009 12:18:04 -0500" -->
<!-- isosent="20091219171804" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="[OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..." -->
<!-- id="5E9838FE224683419F586D9DF46A0E254FC62460FF_at_MBOX.FLAS.CSI.CUNY.EDU" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ...<br>
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-19 12:18:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11612.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Previous message:</strong> <a href="11610.php">Ricardo Reis: "Re: [OMPI users] MPI-IO, providing buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11651.php">Richard Walsh: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Reply:</strong> <a href="11651.php">Richard Walsh: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>Succeeded in overcoming the 'libtool' failure with PGI using
<br>
the patched snap (thanks Jeff), but now I am running
<br>
into a down stream problem compiling for our IB clusters.
<br>
I am using the latest PGI compiler (10.0-1) and the 12-14-09
<br>
snap of OpenMPI of version 1.4.0.
<br>
<p>My configure line looks like this:
<br>
<p>$ ./configure CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 --enable-openib-ibcm --with-openib \
<br>
--prefix=/share/apps/openmpi-pgi/1.4.0 --with-tm=/share/apps/pbs/10.1.0.91350
<br>
<p>The error I get during the make at about line 8078 is:
<br>
<p>libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../.. -D_REENTRANT -O -DNDEBUG -c connect/btl_openib_connect_xoob.c  -fpic -DPIC -o connect/.libs/btl_openib_connect_xoob.o
<br>
source='connect/btl_openib_connect_ibcm.c' object='connect/btl_openib_connect_ibcm.lo' libtool=yes \
<br>
DEPDIR=.deps depmode=none /bin/sh ../../../../config/depcomp \
<br>
/bin/sh ../../../../libtool --tag=CC   --mode=compile pgcc -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../../..  -D_REENTRANT  -O -DNDEBUG   -c -o connect/btl_openib_connect_ibcm.lo connect/btl_openib_connect_ibcm.c
<br>
libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../.. -D_REENTRANT -O -DNDEBUG -c connect/btl_openib_connect_ibcm.c  -fpic -DPIC -o connect/.libs/btl_openib_connect_ibcm.o
<br>
PGC-S-0040-Illegal use of symbol, __le64 (/usr/include/linux/byteorder/little_endian.h: 43)
<br>
PGC-W-0156-Type not specified, 'int' assumed (/usr/include/linux/byteorder/little_endian.h: 43)
<br>
PGC-S-0039-Use of undeclared variable __le64 (/usr/include/linux/byteorder/little_endian.h: 45)
<br>
PGC-S-0104-Non-numeric operand for multiplicative operator (/usr/include/linux/byteorder/little_endian.h: 45)
<br>
PGC-S-0040-Illegal use of symbol, __le64 (/usr/include/linux/byteorder/little_endian.h: 47)
<br>
PGC-S-0040-Illegal use of symbol, __be64 (/usr/include/linux/byteorder/little_endian.h: 67)
<br>
PGC-W-0156-Type not specified, 'int' assumed (/usr/include/linux/byteorder/little_endian.h: 67)
<br>
PGC-S-0040-Illegal use of symbol, __be64 (/usr/include/linux/byteorder/little_endian.h: 69)
<br>
PGC-W-0156-Type not specified, 'int' assumed (/usr/include/linux/byteorder/little_endian.h: 69)PGC-S-0040-Illegal use of symbol, __be64 (/usr/include/linux/byteorder/little_endian.h: 71)
<br>
PGC-W-0156-Type not specified, 'int' assumed (/usr/include/linux/byteorder/little_endian.h: 71)PGC/x86-64 Linux 10.0-1: compilation completed with severe errors
<br>
make[2]: *** [connect/btl_openib_connect_ibcm.lo] Error 1
<br>
make[2]: Leaving directory `/export/apps/openmpi-pgi/1.4.0/build/ompi/mca/btl/openib'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export/apps/openmpi-pgi/1.4.0/build/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Compilation with the latest Intel compilers and these 'openib' options completes
<br>
without issue.
<br>
<p>Are my configure options for 'openib' correct?  Has anyone else see this?
<br>
<p>Thanks much,
<br>
<p><p>Richard Walsh
<br>
Parallel Applications and Systems Manager
<br>
CUNY HPC Center, Staten Island, NY
<br>
<p>&nbsp;&nbsp;&nbsp;Mighty the Wizard
<br>
&nbsp;&nbsp;&nbsp;Who found me at sunrise
<br>
&nbsp;&nbsp;&nbsp;Sleeping, and woke me
<br>
&nbsp;&nbsp;&nbsp;And learn'd me Magic!
<br>
<p>Think green before you print this email.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11612.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Previous message:</strong> <a href="11610.php">Ricardo Reis: "Re: [OMPI users] MPI-IO, providing buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11651.php">Richard Walsh: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Reply:</strong> <a href="11651.php">Richard Walsh: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
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
