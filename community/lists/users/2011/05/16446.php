<?
$subject_val = "[OMPI users] cputype (7) does not match previous archive members cputype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 12:39:50 2011" -->
<!-- isoreceived="20110504163950" -->
<!-- sent="Wed, 4 May 2011 11:39:44 -0500" -->
<!-- isosent="20110504163944" -->
<!-- name="Paul Cizmas" -->
<!-- email="cizmas_at_[hidden]" -->
<!-- subject="[OMPI users] cputype (7) does not match previous archive members cputype" -->
<!-- id="11D5AF85-3063-4B5B-847C-7F4BCBB553D8_at_tamu.edu" -->
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
<strong>Subject:</strong> [OMPI users] cputype (7) does not match previous archive members cputype<br>
<strong>From:</strong> Paul Cizmas (<em>cizmas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-04 12:39:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16447.php">Jeff Squyres: "Re: [OMPI users] cputype (7) does not match previous archive members cputype"</a>
<li><strong>Previous message:</strong> <a href="16445.php">Eugene Loh: "Re: [OMPI users] configure: mpi-threads disabled by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16447.php">Jeff Squyres: "Re: [OMPI users] cputype (7) does not match previous archive members cputype"</a>
<li><strong>Reply:</strong> <a href="16447.php">Jeff Squyres: "Re: [OMPI users] cputype (7) does not match previous archive members cputype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello:
<br>
<p>I am trying to install OpenMPI1.4.3 on a Mac OS X 10.6.7.
<br>
<p>I was able to install OpenMPI using the command
<br>
<p>./configure --prefix=/opt/openmpi1.4.3GF CC=/sw/bin/gcc-fsf-4.5 CXX=/sw/bin/g++-fsf-4.5 F77=gfortran F90=gfortran
<br>
<p>I then tried to install OpenMPI compiled for -m64 using the command
<br>
<p>./configure --prefix=/opt/openmpi1.4.3GFm64 CC=/sw/bin/gcc-fsf-4.5 CFLAGS=-m64 CXX=/sw/bin/g++-fsf-4.5 CXXFLAGS=-m64 F77=gfortran FFLAGS=-m64 FC=gfortran FCFLAGS=-m64 
<br>
<p>This step worked fine but when I did 
<br>
<p>make all install
<br>
<p>I got the following message:
<br>
<p>++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
<br>
Making all in config
<br>
make[1]: Nothing to be done for `all'.
<br>
Making all in contrib
<br>
make[1]: Nothing to be done for `all'.
<br>
Making all in opal
<br>
Making all in include
<br>
make  all-am
<br>
Making all in libltdl
<br>
make  all-am
<br>
Making all in asm
<br>
depbase=`echo asm.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../libtool --tag=CC   --mode=compile /sw/bin/gcc-fsf-4.5 -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../..  -D_REENTRANT  -O3 -DNDEBUG -m64 -finline-functions -fno-strict-aliasing  -fvisibility=hidden -MT asm.lo -MD -MP -MF $depbase.Tpo -c -o asm.lo asm.c &amp;&amp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv -f $depbase.Tpo $depbase.Plo
<br>
libtool: compile:  /sw/bin/gcc-fsf-4.5 -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -D_REENTRANT -O3 -DNDEBUG -m64 -finline-functions -fno-strict-aliasing -fvisibility=hidden -MT asm.lo -MD -MP -MF .deps/asm.Tpo -c asm.c  -fno-common -DPIC -o .libs/asm.o
<br>
rm -f atomic-asm.S
<br>
ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.S
<br>
depbase=`echo atomic-asm.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../libtool   --mode=compile /sw/bin/gcc-fsf-4.5 -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../..  -D_REENTRANT  -O3 -DNDEBUG -m64 -finline-functions -fno-strict-aliasing -MT atomic-asm.lo -MD -MP -MF $depbase.Tpo -c -o atomic-asm.lo atomic-asm.S &amp;&amp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv -f $depbase.Tpo $depbase.Plo
<br>
libtool: compile:  /sw/bin/gcc-fsf-4.5 -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -D_REENTRANT -O3 -DNDEBUG -m64 -finline-functions -fno-strict-aliasing -MT atomic-asm.lo -MD -MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S  -fno-common -DPIC -o .libs/atomic-asm.o
<br>
/bin/sh ../../libtool --tag=CC   --mode=link /sw/bin/gcc-fsf-4.5  -O3 -DNDEBUG -m64 -finline-functions -fno-strict-aliasing  -fvisibility=hidden  -export-dynamic   -o libasm.la  asm.lo atomic-asm.lo  -lutil  
<br>
libtool: link: rm -fr  .libs/libasm.a .libs/libasm.la
<br>
libtool: link: ar cru .libs/libasm.a .libs/asm.o .libs/atomic-asm.o 
<br>
/usr/bin/ranlib: file: .libs/libasm.a(asm.o) has no symbols
<br>
libtool: link: ranlib .libs/libasm.a
<br>
ranlib: file: .libs/libasm.a(asm.o) has no symbols
<br>
libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libasm.la&quot; &amp;&amp; ln -s &quot;../libasm.la&quot; &quot;libasm.la&quot; )
<br>
Making all in etc
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in event
<br>
Making all in compat
<br>
Making all in sys
<br>
make[4]: Nothing to be done for `all'.
<br>
make[4]: Nothing to be done for `all-am'.
<br>
depbase=`echo event.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../libtool --tag=CC   --mode=compile /sw/bin/gcc-fsf-4.5 -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa  -I../../opal/event/compat -I../..  -D_REENTRANT  -O3 -DNDEBUG -m64 -finline-functions -fno-strict-aliasing  -fvisibility=hidden -MT event.lo -MD -MP -MF $depbase.Tpo -c -o event.lo event.c &amp;&amp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv -f $depbase.Tpo $depbase.Plo
<br>
libtool: compile:  /sw/bin/gcc-fsf-4.5 -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../opal/event/compat -I../.. -D_REENTRANT -O3 -DNDEBUG -m64 -finline-functions -fno-strict-aliasing -fvisibility=hidden -MT event.lo -MD -MP -MF .deps/event.Tpo -c event.c  -fno-common -DPIC -o .libs/event.o
<br>
depbase=`echo log.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../libtool --tag=CC   --mode=compile /sw/bin/gcc-fsf-4.5 -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa  -I../../opal/event/compat -I../..  -D_REENTRANT  -O3 -DNDEBUG -m64 -finline-functions -fno-strict-aliasing  -fvisibility=hidden -MT log.lo -MD -MP -MF $depbase.Tpo -c -o log.lo log.c &amp;&amp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv -f $depbase.Tpo $depbase.Plo
<br>
libtool: compile:  /sw/bin/gcc-fsf-4.5 -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../opal/event/compat -I../.. -D_REENTRANT -O3 -DNDEBUG -m64 -finline-functions -fno-strict-aliasing -fvisibility=hidden -MT log.lo -MD -MP -MF .deps/log.Tpo -c log.c  -fno-common -DPIC -o .libs/log.o
<br>
depbase=`echo evutil.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../libtool --tag=CC   --mode=compile /sw/bin/gcc-fsf-4.5 -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa  -I../../opal/event/compat -I../..  -D_REENTRANT  -O3 -DNDEBUG -m64 -finline-functions -fno-strict-aliasing  -fvisibility=hidden -MT evutil.lo -MD -MP -MF $depbase.Tpo -c -o evutil.lo evutil.c &amp;&amp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv -f $depbase.Tpo $depbase.Plo
<br>
libtool: compile:  /sw/bin/gcc-fsf-4.5 -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../opal/event/compat -I../.. -D_REENTRANT -O3 -DNDEBUG -m64 -finline-functions -fno-strict-aliasing -fvisibility=hidden -MT evutil.lo -MD -MP -MF .deps/evutil.Tpo -c evutil.c  -fno-common -DPIC -o .libs/evutil.o
<br>
/bin/sh ../../libtool --tag=CC   --mode=link /sw/bin/gcc-fsf-4.5  -O3 -DNDEBUG -m64 -finline-functions -fno-strict-aliasing  -fvisibility=hidden  -export-dynamic   -o libevent.la  event.lo log.lo evutil.lo  signal.lo select.lo -lutil  
<br>
libtool: link: rm -fr  .libs/libevent.a .libs/libevent.la
<br>
libtool: link: ar cru .libs/libevent.a .libs/event.o .libs/log.o .libs/evutil.o .libs/signal.o .libs/select.o 
<br>
/usr/bin/ranlib: archive member: .libs/libevent.a(signal.o) cputype (7) does not match previous archive members cputype (16777223) (all members must match)
<br>
/usr/bin/ranlib: archive member: .libs/libevent.a(select.o) cputype (7) does not match previous archive members cputype (16777223) (all members must match)
<br>
libtool: link: ranlib .libs/libevent.a
<br>
ranlib: archive member: .libs/libevent.a(signal.o) cputype (7) does not match previous archive members cputype (16777223) (all members must match)
<br>
ranlib: archive member: .libs/libevent.a(select.o) cputype (7) does not match previous archive members cputype (16777223) (all members must match)
<br>
make[3]: *** [libevent.la] Error 1
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
<br>
<p>It appears that there is a conflict with another archive.  How can I correct this?
<br>
<p>Thank you,
<br>
<p>Paul
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16447.php">Jeff Squyres: "Re: [OMPI users] cputype (7) does not match previous archive members cputype"</a>
<li><strong>Previous message:</strong> <a href="16445.php">Eugene Loh: "Re: [OMPI users] configure: mpi-threads disabled by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16447.php">Jeff Squyres: "Re: [OMPI users] cputype (7) does not match previous archive members cputype"</a>
<li><strong>Reply:</strong> <a href="16447.php">Jeff Squyres: "Re: [OMPI users] cputype (7) does not match previous archive members cputype"</a>
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
