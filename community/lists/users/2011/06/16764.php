<?
$subject_val = "Re: [OMPI users] openmpi-1.4.3 and pgi-11.6 segfault";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 25 07:26:09 2011" -->
<!-- isoreceived="20110625112609" -->
<!-- sent="Sat, 25 Jun 2011 07:26:03 -0400" -->
<!-- isosent="20110625112603" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.4.3 and pgi-11.6 segfault" -->
<!-- id="480AA17F-A2C0-45BB-9F6D-923819855DAB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C0A4323B-9EE1-4686-AA76-97F53CAF04C9_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.4.3 and pgi-11.6 segfault<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-25 07:26:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16765.php">Jeff Squyres: "Re: [OMPI users] OpenMPI roadmap"</a>
<li><strong>Previous message:</strong> <a href="16763.php">Jeff Squyres: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>In reply to:</strong> <a href="16732.php">Brock Palen: "[OMPI users] openmpi-1.4.3 and pgi-11.6 segfault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ouch.  :-(
<br>
<p>Have you talked to PGI?  If a compiler segv's when compiling OMPI, it's almost always their fault, not ours...
<br>
<p>(sorry to be a weasel here, but there's little we can do if the compiler itself segv's)
<br>
<p><p>On Jun 21, 2011, at 12:58 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone else had issues building 1.4.3 with pgi 11.6?  When I do I get a segfault,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/software/rhel5/openmpi-1.4.3/pgi-11.6 --mandir=/home/software/rhel5/openmpi-1.4.3/pgi-11.6/man --with-tm=/usr/local/torque/ --with-openib --with-psm CC=pgcc CXX=pgCC FC=pgf90 F77=pgf90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[7]: Entering directory `/tmp/openmpi-1.4.3/ompi/contrib/vt/vt/tools/opari/tool'
</span><br>
<span class="quotelev1">&gt; source='handler.cc' object='handler.o' libtool=no \
</span><br>
<span class="quotelev1">&gt; 	DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
</span><br>
<span class="quotelev1">&gt; 	pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o handler.o handler.cc
</span><br>
<span class="quotelev1">&gt; source='ompragma.cc' object='ompragma.o' libtool=no \
</span><br>
<span class="quotelev1">&gt; 	DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
</span><br>
<span class="quotelev1">&gt; 	pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o ompragma.o ompragma.cc
</span><br>
<span class="quotelev1">&gt; source='ompragma_c.cc' object='ompragma_c.o' libtool=no \
</span><br>
<span class="quotelev1">&gt; 	DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
</span><br>
<span class="quotelev1">&gt; 	pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o ompragma_c.o ompragma_c.cc
</span><br>
<span class="quotelev1">&gt; source='ompragma_f.cc' object='ompragma_f.o' libtool=no \
</span><br>
<span class="quotelev1">&gt; 	DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
</span><br>
<span class="quotelev1">&gt; 	pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o ompragma_f.o ompragma_f.cc
</span><br>
<span class="quotelev1">&gt; source='ompregion.cc' object='ompregion.o' libtool=no \
</span><br>
<span class="quotelev1">&gt; 	DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
</span><br>
<span class="quotelev1">&gt; 	pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o ompregion.o ompregion.cc
</span><br>
<span class="quotelev1">&gt; source='opari.cc' object='opari.o' libtool=no \
</span><br>
<span class="quotelev1">&gt; 	DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
</span><br>
<span class="quotelev1">&gt; 	pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o opari.o opari.cc
</span><br>
<span class="quotelev1">&gt; source='process_c.cc' object='process_c.o' libtool=no \
</span><br>
<span class="quotelev1">&gt; 	DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
</span><br>
<span class="quotelev1">&gt; 	pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o process_c.o process_c.cc
</span><br>
<span class="quotelev1">&gt; source='process_f.cc' object='process_f.o' libtool=no \
</span><br>
<span class="quotelev1">&gt; 	DEPDIR=.deps depmode=none /bin/sh ../../../depcomp \
</span><br>
<span class="quotelev1">&gt; 	pgCC -DHAVE_CONFIG_H -I. -I../../..   -D_REENTRANT  -O -DNDEBUG   -c -o process_f.o process_f.cc
</span><br>
<span class="quotelev1">&gt; pgCC-Fatal-/afs/engin.umich.edu/caen/rhel_5/pgi-11.6/linux86-64/11.6/bin/pgcpp1 TERMINATED by signal 11
</span><br>
<span class="quotelev1">&gt; Arguments to /afs/engin.umich.edu/caen/rhel_5/pgi-11.6/linux86-64/11.6/bin/pgcpp1
</span><br>
<span class="quotelev1">&gt; /afs/engin.umich.edu/caen/rhel_5/pgi-11.6/linux86-64/11.6/bin/pgcpp1 --llalign -Dunix -D__unix -D__unix__ -Dlinux -D__linux -D__linux__ -D__NO_MATH_INLINES -D__x86_64__ -D__LONG_MAX__=9223372036854775807L '-D__SIZE_TYPE__=unsigned long int' '-D__PTRDIFF_TYPE__=long int' -D__THROW= -D__extension__= -D__amd64__ -D__SSE__ -D__MMX__ -D__SSE2__ -D__SSE3__ -D__SSSE3__ -D__PGI -I. -I../../.. -DHAVE_CONFIG_H -D_REENTRANT -DNDEBUG -I/afs/engin.umich.edu/caen/rhel_5/pgi-11.6/linux86-64/11.6/include/CC -I/afs/engin.umich.edu/caen/rhel_5/pgi-11.6/linux86-64/11.6/include -I/usr/local/include -I/usr/lib/gcc/x86_64-redhat-linux/4.1.2/include -I/usr/lib/gcc/x86_64-redhat-linux/4.1.2/include -I/usr/include --zc_eh --gnu_version=40102 -D__pgnu_vsn=40102 -q -o /tmp/pgCCD_kbx1IQBbml.il process_f.cc
</span><br>
<span class="quotelev1">&gt; make[7]: *** [process_f.o] Error 127
</span><br>
<span class="quotelev1">&gt; make[7]: Leaving directory `/tmp/openmpi-1.4.3/ompi/contrib/vt/vt/tools/opari/tool'
</span><br>
<span class="quotelev1">&gt; make[6]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory `/tmp/openmpi-1.4.3/ompi/contrib/vt/vt/tools/opari'
</span><br>
<span class="quotelev1">&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `/tmp/openmpi-1.4.3/ompi/contrib/vt/vt/tools'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/tmp/openmpi-1.4.3/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/tmp/openmpi-1.4.3/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/tmp/openmpi-1.4.3/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/tmp/openmpi-1.4.3/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16765.php">Jeff Squyres: "Re: [OMPI users] OpenMPI roadmap"</a>
<li><strong>Previous message:</strong> <a href="16763.php">Jeff Squyres: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>In reply to:</strong> <a href="16732.php">Brock Palen: "[OMPI users] openmpi-1.4.3 and pgi-11.6 segfault"</a>
<!-- nextthread="start" -->
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
