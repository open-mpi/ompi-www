<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 21:43:37 2007" -->
<!-- isoreceived="20070727014337" -->
<!-- sent="Thu, 26 Jul 2007 20:43:28 -0500" -->
<!-- isosent="20070727014328" -->
<!-- name="Mathew Binkley" -->
<!-- email="Mathew.Binkley_at_[hidden]" -->
<!-- subject="[OMPI users] Problem building openmpi 1.2.3 on RHEL 5" -->
<!-- id="46A94DC0.1040402_at_vanderbilt.edu" -->
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
<strong>From:</strong> Mathew Binkley (<em>Mathew.Binkley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-26 21:43:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3776.php">Brian Barrett: "Re: [OMPI users] Problem building openmpi 1.2.3 on RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="3774.php">Dani&#235;l Mantione: "Re: [OMPI users] Open MPI and Pascal Environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3776.php">Brian Barrett: "Re: [OMPI users] Problem building openmpi 1.2.3 on RHEL 5"</a>
<li><strong>Reply:</strong> <a href="3776.php">Brian Barrett: "Re: [OMPI users] Problem building openmpi 1.2.3 on RHEL 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello.  I am trying to build Open-MPI 1.2.3 on RHEL 5 64 bit with
<br>
Myrinet MX support with GCC 4.2.1.
<br>
<p>export CC=gcc           ; export CFLAGS='-O2 -m64'
<br>
export CXX=g++          ; export CXXFLAGS='-O2 -m64'
<br>
export FC=gfortran      ; export FCFLAGS='-O2 -m64'
<br>
export F77=gfortran     ; export F77FLAGS='-O2 -m64'
<br>
<p>make distclean
<br>
<p>./configure CC=$CC CXX=$CXX F77=$F77 FC=$FC                       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/usr/local/openmpi-1.2.3/opteron/gcc-mx  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-tm=/usr/scheduler/torque                   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mx=/usr/mx                                 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mx-libdir=/usr/mx/lib64
<br>
<p>make -j3
<br>
<p>The compile fails after a few minutes with the following error:
<br>
<p>Making install in asm
<br>
make[2]: Entering directory
<br>
`/usr/local/openmpi-1.2.3/opteron/gcc-mx/source/opal/asm'
<br>
depbase=`echo asm.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if /bin/sh ../../libtool --tag=CC --mode=compile gcc
<br>
-DHAVE_CONFIG_H -I. -I. -I../../opal/include -I../../orte/include
<br>
-I../../ompi/include -I../../ompi/include   -I../..    -DNDEBUG -O1 -m64
<br>
-finline-functions -fno-strict-aliasing -pthread -MT asm.lo -MD -MP -MF
<br>
&quot;$depbase.Tpo&quot; -c -o asm.lo asm.c; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f
<br>
&quot;$depbase.Tpo&quot;; exit 1; fi
<br>
../../libtool: line 460: CDPATH: command not found
<br>
libtool: Version mismatch error.  This is libtool 2.1a, but the
<br>
libtool: definition of this LT_INIT comes from an older release.
<br>
libtool: You should recreate aclocal.m4 with macros from libtool 2.1a
<br>
libtool: and run autoconf again.
<br>
make[2]: *** [asm.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/usr/local/openmpi-1.2.3/opteron/gcc-mx/source/opal/asm'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/usr/local/openmpi-1.2.3/opteron/gcc-mx/source/opal'
<br>
make: *** [install-recursive] Error 1
<br>
<p>I have the following automake/autoconf/libtool packages installed on my
<br>
machine:
<br>
<p>libtool-ltdl-1.5.22-6.1
<br>
libtool-1.5.22-6.1
<br>
autoconf213-2.13-12.1
<br>
autoconf-2.59-12
<br>
automake14-1.4p6-13
<br>
automake15-1.5-16
<br>
automake16-1.6.3-8
<br>
automake17-1.7.9-7
<br>
automake-1.9.6-2.1
<br>
<p>Any ideas what's behind the error?
<br>
<p><p>Mat Binkley
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3776.php">Brian Barrett: "Re: [OMPI users] Problem building openmpi 1.2.3 on RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="3774.php">Dani&#235;l Mantione: "Re: [OMPI users] Open MPI and Pascal Environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3776.php">Brian Barrett: "Re: [OMPI users] Problem building openmpi 1.2.3 on RHEL 5"</a>
<li><strong>Reply:</strong> <a href="3776.php">Brian Barrett: "Re: [OMPI users] Problem building openmpi 1.2.3 on RHEL 5"</a>
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
