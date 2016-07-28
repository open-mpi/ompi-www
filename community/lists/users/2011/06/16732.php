<?
$subject_val = "[OMPI users] openmpi-1.4.3 and pgi-11.6 segfault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 21 12:58:56 2011" -->
<!-- isoreceived="20110621165856" -->
<!-- sent="Tue, 21 Jun 2011 12:58:50 -0400" -->
<!-- isosent="20110621165850" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.4.3 and pgi-11.6 segfault" -->
<!-- id="C0A4323B-9EE1-4686-AA76-97F53CAF04C9_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.4.3 and pgi-11.6 segfault<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-21 12:58:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16733.php">Thorsten Schuett: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>Previous message:</strong> <a href="16731.php">Addepalli, Srirangam V: "Re: [OMPI users] Problems on large clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16764.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.4.3 and pgi-11.6 segfault"</a>
<li><strong>Reply:</strong> <a href="16764.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.4.3 and pgi-11.6 segfault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has anyone else had issues building 1.4.3 with pgi 11.6?  When I do I get a segfault,
<br>
<p>./configure --prefix=/home/software/rhel5/openmpi-1.4.3/pgi-11.6 --mandir=/home/software/rhel5/openmpi-1.4.3/pgi-11.6/man --with-tm=/usr/local/torque/ --with-openib --with-psm CC=pgcc CXX=pgCC FC=pgf90 F77=pgf90
<br>
<p><p>make[7]: Entering directory `/tmp/openmpi-1.4.3/ompi/contrib/vt/vt/tools/opari/tool'
<br>
source='handler.cc' object='handler.o' libtool=no \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o handler.o handler.cc
<br>
source='ompragma.cc' object='ompragma.o' libtool=no \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o ompragma.o ompragma.cc
<br>
source='ompragma_c.cc' object='ompragma_c.o' libtool=no \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o ompragma_c.o ompragma_c.cc
<br>
source='ompragma_f.cc' object='ompragma_f.o' libtool=no \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o ompragma_f.o ompragma_f.cc
<br>
source='ompregion.cc' object='ompregion.o' libtool=no \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o ompregion.o ompregion.cc
<br>
source='opari.cc' object='opari.o' libtool=no \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o opari.o opari.cc
<br>
source='process_c.cc' object='process_c.o' libtool=no \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o process_c.o process_c.cc
<br>
source='process_f.cc' object='process_f.o' libtool=no \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o process_f.o process_f.cc
<br>
pgCC-Fatal-/afs/engin.umich.edu/caen/rhel_5/pgi-11.6/linux86-64/11.6/bin/pgcpp1 TERMINATED by signal 11
<br>
Arguments to /afs/engin.umich.edu/caen/rhel_5/pgi-11.6/linux86-64/11.6/bin/pgcpp1
<br>
/afs/engin.umich.edu/caen/rhel_5/pgi-11.6/linux86-64/11.6/bin/pgcpp1 --llalign -Dunix -D__unix -D__unix__ -Dlinux -D__linux -D__linux__ -D__NO_MATH_INLINES -D__x86_64__ -D__LONG_MAX__=9223372036854775807L '-D__SIZE_TYPE__=unsigned long int' '-D__PTRDIFF_TYPE__=long int' -D__THROW= -D__extension__= -D__amd64__ -D__SSE__ -D__MMX__ -D__SSE2__ -D__SSE3__ -D__SSSE3__ -D__PGI -I. -I../../.. -DHAVE_CONFIG_H -D_REENTRANT -DNDEBUG -I/afs/engin.umich.edu/caen/rhel_5/pgi-11.6/linux86-64/11.6/include/CC -I/afs/engin.umich.edu/caen/rhel_5/pgi-11.6/linux86-64/11.6/include -I/usr/local/include -I/usr/lib/gcc/x86_64-redhat-linux/4.1.2/include -I/usr/lib/gcc/x86_64-redhat-linux/4.1.2/include -I/usr/include --zc_eh --gnu_version=40102 -D__pgnu_vsn=40102 -q -o /tmp/pgCCD_kbx1IQBbml.il process_f.cc
<br>
make[7]: *** [process_f.o] Error 127
<br>
make[7]: Leaving directory `/tmp/openmpi-1.4.3/ompi/contrib/vt/vt/tools/opari/tool'
<br>
make[6]: *** [all-recursive] Error 1
<br>
make[6]: Leaving directory `/tmp/openmpi-1.4.3/ompi/contrib/vt/vt/tools/opari'
<br>
make[5]: *** [all-recursive] Error 1
<br>
make[5]: Leaving directory `/tmp/openmpi-1.4.3/ompi/contrib/vt/vt/tools'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory `/tmp/openmpi-1.4.3/ompi/contrib/vt/vt'
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory `/tmp/openmpi-1.4.3/ompi/contrib/vt/vt'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/tmp/openmpi-1.4.3/ompi/contrib/vt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/tmp/openmpi-1.4.3/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16733.php">Thorsten Schuett: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>Previous message:</strong> <a href="16731.php">Addepalli, Srirangam V: "Re: [OMPI users] Problems on large clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16764.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.4.3 and pgi-11.6 segfault"</a>
<li><strong>Reply:</strong> <a href="16764.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.4.3 and pgi-11.6 segfault"</a>
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
