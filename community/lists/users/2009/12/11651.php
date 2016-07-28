<?
$subject_val = "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 29 15:29:41 2009" -->
<!-- isoreceived="20091229202941" -->
<!-- sent="Tue, 29 Dec 2009 15:20:50 -0500" -->
<!-- isosent="20091229202050" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..." -->
<!-- id="5E9838FE224683419F586D9DF46A0E254FC624612D_at_MBOX.FLAS.CSI.CUNY.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5E9838FE224683419F586D9DF46A0E254FC62460FF_at_MBOX.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ...<br>
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-29 15:20:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11652.php">Gus Correa: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Previous message:</strong> <a href="11650.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="11611.php">Richard Walsh: "[OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11652.php">Gus Correa: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Reply:</strong> <a href="11652.php">Gus Correa: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Reply:</strong> <a href="11653.php">Joshua Bernstein: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Reply:</strong> <a href="11654.php">Mostyn Lewis: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11712.php">Jeff Squyres: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>Not overwhelmed with responses here ... ;-) ...  No one using PGI 10.0 yet?
<br>
We need it to make use of the GPU compiler directives they are supporting.
<br>
Can some perhaps comment on whether this is the correct way to configure
<br>
for an IB system?  Everything works with Intel and/or if I compile without the
<br>
IB flags.
<br>
<p>Sent the same report to PGI, but seems like the support team there is on
<br>
break for the Holidays.
<br>
<p>Someone else must have seen this as well ... No ... ??
<br>
<p>rbw
<br>
<p>&nbsp;&nbsp;&nbsp;Richard Walsh
<br>
&nbsp;&nbsp;&nbsp;Parallel Applications and Systems Manager
<br>
&nbsp;&nbsp;&nbsp;CUNY HPC Center, Staten Island, NY
<br>
&nbsp;&nbsp;&nbsp;718-982-3319
<br>
&nbsp;&nbsp;&nbsp;612-382-4620
<br>
<p>&nbsp;&nbsp;&nbsp;Mighty the Wizard
<br>
&nbsp;&nbsp;&nbsp;Who found me at sunrise
<br>
&nbsp;&nbsp;&nbsp;Sleeping, and woke me
<br>
&nbsp;&nbsp;&nbsp;And learn'd me Magic!
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Richard Walsh [Richard.Walsh_at_[hidden]]
<br>
Sent: Saturday, December 19, 2009 12:18 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ...
<br>
<p>All,
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>Think green before you print this email.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11652.php">Gus Correa: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Previous message:</strong> <a href="11650.php">Gus Correa: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="11611.php">Richard Walsh: "[OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11652.php">Gus Correa: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Reply:</strong> <a href="11652.php">Gus Correa: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Reply:</strong> <a href="11653.php">Joshua Bernstein: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Reply:</strong> <a href="11654.php">Mostyn Lewis: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11712.php">Jeff Squyres: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
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
