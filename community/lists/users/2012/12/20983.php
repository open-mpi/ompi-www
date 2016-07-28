<?
$subject_val = "[OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 03:16:51 2012" -->
<!-- isoreceived="20121218081651" -->
<!-- sent="Tue, 18 Dec 2012 09:04:00 +0100 (CET)" -->
<!-- isosent="20121218080400" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17" -->
<!-- id="201212180804.qBI840F8001716_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-18 03:04:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20984.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
<li><strong>Previous message:</strong> <a href="20982.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20985.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20985.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20986.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Maybe reply:</strong> <a href="21006.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to install openmpi-1.9a1r27674 on Cygwin-1.7.17 and
<br>
got the following error (gcc-4.5.3).
<br>
<p>...
<br>
&nbsp;&nbsp;CC       path.lo
<br>
../../../openmpi-1.9a1r27668/opal/util/path.c: In function
<br>
&nbsp;&nbsp;'opal_path_df':
<br>
../../../openmpi-1.9a1r27668/opal/util/path.c:578:18: error:
<br>
&nbsp;&nbsp;'buf' undeclared (first use in this function)
<br>
../../../openmpi-1.9a1r27668/opal/util/path.c:578:18: note:
<br>
&nbsp;&nbsp;each undeclared identifier is reported only once for each
<br>
&nbsp;&nbsp;function it appears in
<br>
Makefile:1669: recipe for target `path.lo' failed
<br>
make[3]: *** [path.lo] Error 1
<br>
...
<br>
<p><p>The reason is that &quot;buf&quot; is only declared for some operating
<br>
systems. I added &quot;defined(__CYGWIN__)&quot; in some places and
<br>
was able to compile &quot;path.c&quot;.
<br>
<p><p>hermes util 41 diff path.c path.c.orig
<br>
452c452
<br>
&lt; #elif defined(__linux__) || defined(__CYGWIN__) ||
<br>
&nbsp;&nbsp;defined (__BSD) || (defined(__APPLE__) &amp;&amp; defined(__MACH__))
<br>
<pre>
---
&gt; #elif defined(__linux__) || defined (__BSD) ||
  (defined(__APPLE__) &amp;&amp; defined(__MACH__))
480c480
&lt; #elif defined(__linux__) || defined(__CYGWIN__) ||
  defined (__BSD) || (defined(__APPLE__) &amp;&amp; defined(__MACH__))
---
&gt; #elif defined(__linux__) || defined (__BSD) ||
  (defined(__APPLE__) &amp;&amp; defined(__MACH__))
517c517
&lt; #elif defined(__linux__) || defined(__CYGWIN__)
---
&gt; #elif defined(__linux__)
549c549
&lt; #elif defined(__linux__) || defined(__CYGWIN__) ||
  defined (__BSD) || \
---
&gt; #elif defined(__linux__) || defined (__BSD) ||            \
562c562
&lt; #elif defined(__linux__) || defined (__CYGWIN__) ||
  defined (__BSD) ||       \
---
&gt; #elif defined(__linux__) || defined (__BSD) ||            \
hermes util 42 
Searching for &quot;__linux__&quot; delivered some more files which
must possibly be adapted.
opal/config/opal_check_os_flavors.m4
opal/mca/event/libevent2019/libevent/buffer.c
I assume that the following files do not need any changes
because they are special for Linux or for features which
are not important/available for Cygwin.
configure:    { $as_echo &quot;$as_me:${as_lineno-$LINENO}:
  checking __linux__&quot; &gt;&amp;5
configure:$as_echo_n &quot;checking __linux__... &quot; &gt;&amp;6; }
configure:#ifndef __linux__
configure:      error: this isnt __linux__
test/util/opal_path_nfs.c
opal/asm/base/MIPS.asm:#ifdef __linux__
opal/asm/generated/atomic-mips64el.s:#ifdef __linux__
opal/asm/generated/atomic-mips64-linux.s:#ifdef __linux__
opal/asm/generated/atomic-mips-irix.s:#ifdef __linux__
opal/asm/generated/atomic-mips-linux.s:#ifdef __linux__
ompi/mca/common/verbs/common_verbs_basics.c:#if defined(__linux__)
opal/include/opal/sys/cma.h:#ifdef __linux__
opal/mca/memory/linux/arena.c:#ifdef __linux__
ompi/mca/io/romio/romio/configure:        #ifdef __linux__
ompi/mca/io/romio/romio/configure.in:        #ifdef __linux__
opal/include/opal/sys/mips/atomic.h:#ifdef __linux__
opal/include/opal/sys/mips/atomic.h:#ifdef __linux__
opal/include/opal/sys/mips/atomic.h:#ifdef __linux__
opal/mca/event/libevent2019/libevent/arc4random.c:#ifdef __linux__
ompi/mca/io/romio/romio/adio/ad_lustre/ad_lustre.h:#ifdef __linux__
ompi/mca/io/romio/romio/adio/ad_lustre/ad_lustre.h:#endif /* __linux__ */
Can somebody add __Cygwin__ to all necessary files? Now I get
the following error.
...
Making all in mca/if/windows
make[2]: Entering directory
  `/home/Admin/openmpi/openmpi-1.9-Cygwin.x86.32_gcc/opal/mca/if/windows'
  CC       opal_if_windows.lo
../../../../../openmpi-1.9a1r27674/opal/mca/if/windows/opal_if_windows.c:
  In function 'if_windows_open':
../../../../../openmpi-1.9a1r27674/opal/mca/if/windows/opal_if_windows.c:58:5:
  error: 'SOCKET' undeclared (first use in this function)
../../../../../openmpi-1.9a1r27674/opal/mca/if/windows/opal_if_windows.c:58:5:
  note: each undeclared identifier is reported only once for each function
  it appears in
...
Is it necessary to use windows sockets directly or is it possible
to use something similar to Linux sockets? Cygwin supports sockets
(based on Windows sockets as far as I know) and very often uses
similar interfaces as Linux. Which file is responsible for the
selection of &quot;opal_if_windows.c&quot;?
I added the following constants to /usr/include/cygwin/shm.h before
I started to build openmpi-1.9a1r27674.
diff /usr/include/cygwin/shm.h /usr/include/cygwin/shm.h.orig
29,34d28
&lt; /* Permission definitions                   */
&lt; #define SHM_R   0400    /* read permission  */
&lt; #define SHM_W   0200    /* write permission */
&lt; 
I used the following commands to configure Open MPI.
&quot;/usr/local/jdk1.7.0&quot; is a link to my Java installation
on Windows 7.
cd /usr/local
ln -s /cygdrive/c/Program\ Files\ \(x86\)/jdk1.7.0 jdk1.7.0
../openmpi-1.9a1r27674/configure --prefix=/usr/local/openmpi-1.9 \
  --with-jdk-bindir=/usr/local/jdk1.7.0/bin \
  --with-jdk-headers=/usr/local/jdk1.7.0/include \
  JAVA_HOME=/usr/local/jdk1.7.0 \
  LDFLAGS=&quot;-m32 -Wl,--export-all-symbols -no-undefined&quot; \
  CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
  CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32&quot; FCFLAGS=&quot;-m32&quot; \
  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
  C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
  OBJC_INCLUDE_PATH=&quot;&quot; OPENMPI_HOME=&quot;&quot; \
  --enable-cxx-exceptions \
  --enable-mpi-java \
  --enable-heterogeneous \
  --enable-opal-multi-threads \
  --enable-mpi-thread-multiple \
  --with-threads=posix \
  --with-hwloc=internal \
  --without-verbs \
  --without-udapl \
  --without-sctp \
  --with-wrapper-cflags=-m32 \
  --enable-debug \
  --disable-mca-dso \
  --without-cs-fs \
  --enable-contrib-no-build=vt,libompitrace \
  --enable-mca-no-build=memory_mallopt,paffinity,installdirs-windows,timer-windows \
  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV
It would be great, if I could get a working Open MPI version with
Java interface on Cygwin. Thank you very much for any help in advance.
Kind regards
Siegmar
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20984.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
<li><strong>Previous message:</strong> <a href="20982.php">Jeff Squyres: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20985.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20985.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20986.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Maybe reply:</strong> <a href="21006.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
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
