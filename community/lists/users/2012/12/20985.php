<?
$subject_val = "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 05:46:06 2012" -->
<!-- isoreceived="20121218104606" -->
<!-- sent="Tue, 18 Dec 2012 11:45:57 +0100" -->
<!-- isosent="20121218104557" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17" -->
<!-- id="50D04965.9000207_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201212180804.qBI840F8001716_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-18 05:45:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20986.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20984.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
<li><strong>In reply to:</strong> <a href="20983.php">Siegmar Gross: "[OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20986.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/18/2012 9:04 AM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to install openmpi-1.9a1r27674 on Cygwin-1.7.17 and
</span><br>
<span class="quotelev1">&gt; got the following error (gcc-4.5.3).
</span><br>
<p>Hi Siegmar
<br>
for the time being, I just released 1.6.3 packages
<br>
<p><a href="http://cygwin.com/ml/cygwin-announce/2012-11/msg00016.html">http://cygwin.com/ml/cygwin-announce/2012-11/msg00016.html</a>
<br>
<a href="http://cygwin.com/ml/cygwin-announce/2012-12/msg00013.html">http://cygwin.com/ml/cygwin-announce/2012-12/msg00013.html</a>
<br>
<p>look on that patches and build methodology as starting point.
<br>
You can download the source package with cygwin setup.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;    CC       path.lo
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.9a1r27668/opal/util/path.c: In function
</span><br>
<span class="quotelev1">&gt;    'opal_path_df':
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.9a1r27668/opal/util/path.c:578:18: error:
</span><br>
<span class="quotelev1">&gt;    'buf' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-1.9a1r27668/opal/util/path.c:578:18: note:
</span><br>
<span class="quotelev1">&gt;    each undeclared identifier is reported only once for each
</span><br>
<span class="quotelev1">&gt;    function it appears in
</span><br>
<span class="quotelev1">&gt; Makefile:1669: recipe for target `path.lo' failed
</span><br>
<span class="quotelev1">&gt; make[3]: *** [path.lo] Error 1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason is that &quot;buf&quot; is only declared for some operating
</span><br>
<span class="quotelev1">&gt; systems. I added &quot;defined(__CYGWIN__)&quot; in some places and
</span><br>
<span class="quotelev1">&gt; was able to compile &quot;path.c&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hermes util 41 diff path.c path.c.orig
</span><br>
<span class="quotelev1">&gt; 452c452
</span><br>
<span class="quotelev1">&gt; &lt; #elif defined(__linux__) || defined(__CYGWIN__) ||
</span><br>
<span class="quotelev1">&gt;    defined (__BSD) || (defined(__APPLE__) &amp;&amp; defined(__MACH__))
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; #elif defined(__linux__) || defined (__BSD) ||
</span><br>
<span class="quotelev1">&gt;    (defined(__APPLE__) &amp;&amp; defined(__MACH__))
</span><br>
<span class="quotelev1">&gt; 480c480
</span><br>
<span class="quotelev1">&gt; &lt; #elif defined(__linux__) || defined(__CYGWIN__) ||
</span><br>
<span class="quotelev1">&gt;    defined (__BSD) || (defined(__APPLE__) &amp;&amp; defined(__MACH__))
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; #elif defined(__linux__) || defined (__BSD) ||
</span><br>
<span class="quotelev1">&gt;    (defined(__APPLE__) &amp;&amp; defined(__MACH__))
</span><br>
<span class="quotelev1">&gt; 517c517
</span><br>
<span class="quotelev1">&gt; &lt; #elif defined(__linux__) || defined(__CYGWIN__)
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; #elif defined(__linux__)
</span><br>
<span class="quotelev1">&gt; 549c549
</span><br>
<span class="quotelev1">&gt; &lt; #elif defined(__linux__) || defined(__CYGWIN__) ||
</span><br>
<span class="quotelev1">&gt;    defined (__BSD) || \
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; #elif defined(__linux__) || defined (__BSD) ||            \
</span><br>
<span class="quotelev1">&gt; 562c562
</span><br>
<span class="quotelev1">&gt; &lt; #elif defined(__linux__) || defined (__CYGWIN__) ||
</span><br>
<span class="quotelev1">&gt;    defined (__BSD) ||       \
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; #elif defined(__linux__) || defined (__BSD) ||            \
</span><br>
<span class="quotelev1">&gt; hermes util 42
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Searching for &quot;__linux__&quot; delivered some more files which
</span><br>
<span class="quotelev1">&gt; must possibly be adapted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal/config/opal_check_os_flavors.m4
</span><br>
<span class="quotelev1">&gt; opal/mca/event/libevent2019/libevent/buffer.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume that the following files do not need any changes
</span><br>
<span class="quotelev1">&gt; because they are special for Linux or for features which
</span><br>
<span class="quotelev1">&gt; are not important/available for Cygwin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:    { $as_echo &quot;$as_me:${as_lineno-$LINENO}:
</span><br>
<span class="quotelev1">&gt;    checking __linux__&quot; &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:$as_echo_n &quot;checking __linux__... &quot; &gt;&amp;6; }
</span><br>
<span class="quotelev1">&gt; configure:#ifndef __linux__
</span><br>
<span class="quotelev1">&gt; configure:      error: this isnt __linux__
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; test/util/opal_path_nfs.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal/asm/base/MIPS.asm:#ifdef __linux__
</span><br>
<span class="quotelev1">&gt; opal/asm/generated/atomic-mips64el.s:#ifdef __linux__
</span><br>
<span class="quotelev1">&gt; opal/asm/generated/atomic-mips64-linux.s:#ifdef __linux__
</span><br>
<span class="quotelev1">&gt; opal/asm/generated/atomic-mips-irix.s:#ifdef __linux__
</span><br>
<span class="quotelev1">&gt; opal/asm/generated/atomic-mips-linux.s:#ifdef __linux__
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi/mca/common/verbs/common_verbs_basics.c:#if defined(__linux__)
</span><br>
<span class="quotelev1">&gt; opal/include/opal/sys/cma.h:#ifdef __linux__
</span><br>
<span class="quotelev1">&gt; opal/mca/memory/linux/arena.c:#ifdef __linux__
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi/mca/io/romio/romio/configure:        #ifdef __linux__
</span><br>
<span class="quotelev1">&gt; ompi/mca/io/romio/romio/configure.in:        #ifdef __linux__
</span><br>
<span class="quotelev1">&gt; opal/include/opal/sys/mips/atomic.h:#ifdef __linux__
</span><br>
<span class="quotelev1">&gt; opal/include/opal/sys/mips/atomic.h:#ifdef __linux__
</span><br>
<span class="quotelev1">&gt; opal/include/opal/sys/mips/atomic.h:#ifdef __linux__
</span><br>
<span class="quotelev1">&gt; opal/mca/event/libevent2019/libevent/arc4random.c:#ifdef __linux__
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi/mca/io/romio/romio/adio/ad_lustre/ad_lustre.h:#ifdef __linux__
</span><br>
<span class="quotelev1">&gt; ompi/mca/io/romio/romio/adio/ad_lustre/ad_lustre.h:#endif /* __linux__ */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can somebody add __Cygwin__ to all necessary files? Now I get
</span><br>
<span class="quotelev1">&gt; the following error.
</span><br>
<p>First we need to verify that it is the right road.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Making all in mca/if/windows
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/home/Admin/openmpi/openmpi-1.9-Cygwin.x86.32_gcc/opal/mca/if/windows'
</span><br>
<span class="quotelev1">&gt;    CC       opal_if_windows.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.9a1r27674/opal/mca/if/windows/opal_if_windows.c:
</span><br>
<span class="quotelev1">&gt;    In function 'if_windows_open':
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.9a1r27674/opal/mca/if/windows/opal_if_windows.c:58:5:
</span><br>
<span class="quotelev1">&gt;    error: 'SOCKET' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.9a1r27674/opal/mca/if/windows/opal_if_windows.c:58:5:
</span><br>
<span class="quotelev1">&gt;    note: each undeclared identifier is reported only once for each function
</span><br>
<span class="quotelev1">&gt;    it appears in
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<p>This is not, as you should not mix cygwin and windows program
<br>
as it will unlikely work.
<br>
(Except if you really know what you are doing).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it necessary to use windows sockets directly or is it possible
</span><br>
<span class="quotelev1">&gt; to use something similar to Linux sockets? Cygwin supports sockets
</span><br>
<span class="quotelev1">&gt; (based on Windows sockets as far as I know) and very often uses
</span><br>
<span class="quotelev1">&gt; similar interfaces as Linux. Which file is responsible for the
</span><br>
<span class="quotelev1">&gt; selection of &quot;opal_if_windows.c&quot;?
</span><br>
<p>Not needed.
<br>
Configure options used for cygwin 1.6.3-4 package
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-Wl,--export-all-symbols -no-undefined&quot;  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mca-dso \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-sysv-shmem \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-udapl \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-cs-fs \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-param_check=always \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt,libompitrace \
<br>
&nbsp;
<br>
--enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I added the following constants to /usr/include/cygwin/shm.h before
</span><br>
<span class="quotelev1">&gt; I started to build openmpi-1.9a1r27674.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff /usr/include/cygwin/shm.h /usr/include/cygwin/shm.h.orig
</span><br>
<span class="quotelev1">&gt; 29,34d28
</span><br>
<span class="quotelev1">&gt; &lt; /* Permission definitions                   */
</span><br>
<span class="quotelev1">&gt; &lt; #define SHM_R   0400    /* read permission  */
</span><br>
<span class="quotelev1">&gt; &lt; #define SHM_W   0200    /* write permission */
</span><br>
<span class="quotelev1">&gt; &lt;
</span><br>
<p>Don't do that, that compiles does not mean that it will work.
<br>
Look on SHM.patch used on cygwin openmpi-1.6.3-4 package;
<br>
please note however that this functionality will require a running
<br>
cygserver process and it can be avoided.
<br>
As default I disabled it.
<br>
<a href="http://cygwin.com/ml/cygwin-apps/2012-11/msg00020.html">http://cygwin.com/ml/cygwin-apps/2012-11/msg00020.html</a>
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the following commands to configure Open MPI.
</span><br>
<span class="quotelev1">&gt; &quot;/usr/local/jdk1.7.0&quot; is a link to my Java installation
</span><br>
<span class="quotelev1">&gt; on Windows 7.
</span><br>
<p>Windows Java is not cygwin aware...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd /usr/local
</span><br>
<span class="quotelev1">&gt; ln -s /cygdrive/c/Program\ Files\ \(x86\)/jdk1.7.0 jdk1.7.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.9a1r27674/configure --prefix=/usr/local/openmpi-1.9 \
</span><br>
<span class="quotelev1">&gt;    --with-jdk-bindir=/usr/local/jdk1.7.0/bin \
</span><br>
<span class="quotelev1">&gt;    --with-jdk-headers=/usr/local/jdk1.7.0/include \
</span><br>
<span class="quotelev1">&gt;    JAVA_HOME=/usr/local/jdk1.7.0 \
</span><br>
<span class="quotelev1">&gt;    LDFLAGS=&quot;-m32 -Wl,--export-all-symbols -no-undefined&quot; \
</span><br>
<span class="quotelev1">&gt;    CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;    CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32&quot; FCFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev1">&gt;    CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;    CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;    C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;    OBJC_INCLUDE_PATH=&quot;&quot; OPENMPI_HOME=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;    --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;    --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;    --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;    --enable-opal-multi-threads \
</span><br>
<span class="quotelev1">&gt;    --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;    --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;    --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;    --without-verbs \
</span><br>
<span class="quotelev1">&gt;    --without-udapl \
</span><br>
<span class="quotelev1">&gt;    --without-sctp \
</span><br>
<span class="quotelev1">&gt;    --with-wrapper-cflags=-m32 \
</span><br>
<span class="quotelev1">&gt;    --enable-debug \
</span><br>
<span class="quotelev1">&gt;    --disable-mca-dso \
</span><br>
<span class="quotelev1">&gt;    --without-cs-fs \
</span><br>
<span class="quotelev1">&gt;    --enable-contrib-no-build=vt,libompitrace \
</span><br>
<span class="quotelev1">&gt;    --enable-mca-no-build=memory_mallopt,paffinity,installdirs-windows,timer-windows \
</span><br>
<span class="quotelev1">&gt;    |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be great, if I could get a working Open MPI version with
</span><br>
<span class="quotelev1">&gt; Java interface on Cygwin. Thank you very much for any help in advance.
</span><br>
<p>First you need to build jdk for cygwin
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20986.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20984.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Problems with shared libraries while launching jobs"</a>
<li><strong>In reply to:</strong> <a href="20983.php">Siegmar Gross: "[OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20986.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
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
