<?
$subject_val = "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 29 17:12:20 2009" -->
<!-- isoreceived="20091229221220" -->
<!-- sent="Tue, 29 Dec 2009 14:12:15 -0800" -->
<!-- isosent="20091229221215" -->
<!-- name="Joshua Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..." -->
<!-- id="4B3A7EBF.8010803_at_penguincomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5E9838FE224683419F586D9DF46A0E254FC624612D_at_MBOX.FLAS.CSI.CUNY.EDU" -->
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
<strong>From:</strong> Joshua Bernstein (<em>jbernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-29 17:12:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11654.php">Mostyn Lewis: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Previous message:</strong> <a href="11652.php">Gus Correa: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>In reply to:</strong> <a href="11651.php">Richard Walsh: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11654.php">Mostyn Lewis: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Richard,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I've built our OpenMPI with PGI 10.0 and included OpenIB support. I've verified 
<br>
it works. You'll notice we build with UDAPL and OpenIB, but generally only 
<br>
OpenIB is used.
<br>
<p>Our complete configure flags, and OpenMPI is included with Scyld ClusterWare is 
<br>
shown here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --prefix=%{_prefix} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bindir=&quot;%{_prefix}/${compiler}/bin&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--datarootdir=&quot;%{_prefix}/${compiler}/share&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mandir=&quot;%{_prefix}/man&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--sysconfdir=&quot;%{_sysconfdir}&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--libdir=&quot;%{_libdir}/${compiler}&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--includedir=&quot;%{_includedir}&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mx=/opt/open-mx \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-udapl \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-bproc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-tm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-openib \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-dlopen \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${EXTRA_CONFIG_OPTIONS} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-xgrid --without-slurm --without-loadleveler --without-gm 
<br>
--without-lsf \
<br>
<p>-Joshua Bernstein
<br>
Senior Software Engineer
<br>
Penguin Computing
<br>
<p>Richard Walsh wrote:
<br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not overwhelmed with responses here ... ;-) ...  No one using PGI 10.0 yet?
</span><br>
<span class="quotelev1">&gt; We need it to make use of the GPU compiler directives they are supporting.
</span><br>
<span class="quotelev1">&gt; Can some perhaps comment on whether this is the correct way to configure
</span><br>
<span class="quotelev1">&gt; for an IB system?  Everything works with Intel and/or if I compile without the
</span><br>
<span class="quotelev1">&gt; IB flags.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent the same report to PGI, but seems like the support team there is on
</span><br>
<span class="quotelev1">&gt; break for the Holidays.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Someone else must have seen this as well ... No ... ??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rbw
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Richard Walsh
</span><br>
<span class="quotelev1">&gt;    Parallel Applications and Systems Manager
</span><br>
<span class="quotelev1">&gt;    CUNY HPC Center, Staten Island, NY
</span><br>
<span class="quotelev1">&gt;    718-982-3319
</span><br>
<span class="quotelev1">&gt;    612-382-4620
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Mighty the Wizard
</span><br>
<span class="quotelev1">&gt;    Who found me at sunrise
</span><br>
<span class="quotelev1">&gt;    Sleeping, and woke me
</span><br>
<span class="quotelev1">&gt;    And learn'd me Magic!
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Richard Walsh [Richard.Walsh_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, December 19, 2009 12:18 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Succeeded in overcoming the 'libtool' failure with PGI using
</span><br>
<span class="quotelev1">&gt; the patched snap (thanks Jeff), but now I am running
</span><br>
<span class="quotelev1">&gt; into a down stream problem compiling for our IB clusters.
</span><br>
<span class="quotelev1">&gt; I am using the latest PGI compiler (10.0-1) and the 12-14-09
</span><br>
<span class="quotelev1">&gt; snap of OpenMPI of version 1.4.0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My configure line looks like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./configure CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 --enable-openib-ibcm --with-openib \
</span><br>
<span class="quotelev1">&gt; --prefix=/share/apps/openmpi-pgi/1.4.0 --with-tm=/share/apps/pbs/10.1.0.91350
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error I get during the make at about line 8078 is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../.. -D_REENTRANT -O -DNDEBUG -c connect/btl_openib_connect_xoob.c  -fpic -DPIC -o connect/.libs/btl_openib_connect_xoob.o
</span><br>
<span class="quotelev1">&gt; source='connect/btl_openib_connect_ibcm.c' object='connect/btl_openib_connect_ibcm.lo' libtool=yes \
</span><br>
<span class="quotelev1">&gt; DEPDIR=.deps depmode=none /bin/sh ../../../../config/depcomp \
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../libtool --tag=CC   --mode=compile pgcc -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../../..  -D_REENTRANT  -O -DNDEBUG   -c -o connect/btl_openib_connect_ibcm.lo connect/btl_openib_connect_ibcm.c
</span><br>
<span class="quotelev1">&gt; libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../.. -D_REENTRANT -O -DNDEBUG -c connect/btl_openib_connect_ibcm.c  -fpic -DPIC -o connect/.libs/btl_openib_connect_ibcm.o
</span><br>
<span class="quotelev1">&gt; PGC-S-0040-Illegal use of symbol, __le64 (/usr/include/linux/byteorder/little_endian.h: 43)
</span><br>
<span class="quotelev1">&gt; PGC-W-0156-Type not specified, 'int' assumed (/usr/include/linux/byteorder/little_endian.h: 43)
</span><br>
<span class="quotelev1">&gt; PGC-S-0039-Use of undeclared variable __le64 (/usr/include/linux/byteorder/little_endian.h: 45)
</span><br>
<span class="quotelev1">&gt; PGC-S-0104-Non-numeric operand for multiplicative operator (/usr/include/linux/byteorder/little_endian.h: 45)
</span><br>
<span class="quotelev1">&gt; PGC-S-0040-Illegal use of symbol, __le64 (/usr/include/linux/byteorder/little_endian.h: 47)
</span><br>
<span class="quotelev1">&gt; PGC-S-0040-Illegal use of symbol, __be64 (/usr/include/linux/byteorder/little_endian.h: 67)
</span><br>
<span class="quotelev1">&gt; PGC-W-0156-Type not specified, 'int' assumed (/usr/include/linux/byteorder/little_endian.h: 67)
</span><br>
<span class="quotelev1">&gt; PGC-S-0040-Illegal use of symbol, __be64 (/usr/include/linux/byteorder/little_endian.h: 69)
</span><br>
<span class="quotelev1">&gt; PGC-W-0156-Type not specified, 'int' assumed (/usr/include/linux/byteorder/little_endian.h: 69)PGC-S-0040-Illegal use of symbol, __be64 (/usr/include/linux/byteorder/little_endian.h: 71)
</span><br>
<span class="quotelev1">&gt; PGC-W-0156-Type not specified, 'int' assumed (/usr/include/linux/byteorder/little_endian.h: 71)PGC/x86-64 Linux 10.0-1: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt; make[2]: *** [connect/btl_openib_connect_ibcm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export/apps/openmpi-pgi/1.4.0/build/ompi/mca/btl/openib'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export/apps/openmpi-pgi/1.4.0/build/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compilation with the latest Intel compilers and these 'openib' options completes
</span><br>
<span class="quotelev1">&gt; without issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are my configure options for 'openib' correct?  Has anyone else see this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks much,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Richard Walsh
</span><br>
<span class="quotelev1">&gt; Parallel Applications and Systems Manager
</span><br>
<span class="quotelev1">&gt; CUNY HPC Center, Staten Island, NY
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Mighty the Wizard
</span><br>
<span class="quotelev1">&gt;    Who found me at sunrise
</span><br>
<span class="quotelev1">&gt;    Sleeping, and woke me
</span><br>
<span class="quotelev1">&gt;    And learn'd me Magic!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Think green before you print this email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Think green before you print this email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11654.php">Mostyn Lewis: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Previous message:</strong> <a href="11652.php">Gus Correa: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>In reply to:</strong> <a href="11651.php">Richard Walsh: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11654.php">Mostyn Lewis: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
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
