<?
$subject_val = "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 10:06:57 2012" -->
<!-- isoreceived="20121218150657" -->
<!-- sent="Tue, 18 Dec 2012 08:06:48 -0700" -->
<!-- isosent="20121218150648" -->
<!-- name="JR Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17" -->
<!-- id="50D08688.4050203_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="682F8449-6C68-4B77-A437-E45985B75E1D_at_cisco.com" -->
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
<strong>From:</strong> JR Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-18 10:06:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20989.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20987.php">Jeff Squyres: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>In reply to:</strong> <a href="20986.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20989.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20989.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20991.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/18/12 6:29 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; This brings up the point again, however, of Windows support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI recently lost its only Windows developer (he moved on to non-HPC things).  This has been discussed on the lists a few times (I honestly don't remember if it was this users list or the devel list), and there hasn't really been anyone who volunteered their time to support Open MPI on Windows.
</span><br>
<p>Definitely this list.
<br>
<p><span class="quotelev1">&gt; We're seriously considering removing all Windows support for 1.7 and beyond (keep in mind that the native Windows support on the SVN trunk and v1.7 branch is very, very out of date and needs some serious work to get working again -- the last working native Windows version is on the v1.6 branch).
</span><br>
<p>Sounds appropriate.  My conversations with Microsoft
<br>
went no where.  Spoke last night with another good
<br>
friend there who worked in their HPC unit when that
<br>
existed.  Microsoft has their own implementation, and
<br>
they see no need for another.
<br>
<p>So, IMO, OpenMPI would have to turn to a different
<br>
group for support.  E.g., Microsoft compatible HPC
<br>
application vendors.  And for that one would need a
<br>
compelling case of being better in, e.g., performance.
<br>
<p>Can this case be made?
<br>
<p>Perhaps there is another way?
<br>
<p>John
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 18, 2012, at 3:04 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to install openmpi-1.9a1r27674 on Cygwin-1.7.17 and
</span><br>
<span class="quotelev2">&gt;&gt; got the following error (gcc-4.5.3).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;   CC       path.lo
</span><br>
<span class="quotelev2">&gt;&gt; ../../../openmpi-1.9a1r27668/opal/util/path.c: In function
</span><br>
<span class="quotelev2">&gt;&gt;   'opal_path_df':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../openmpi-1.9a1r27668/opal/util/path.c:578:18: error:
</span><br>
<span class="quotelev2">&gt;&gt;   'buf' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ../../../openmpi-1.9a1r27668/opal/util/path.c:578:18: note:
</span><br>
<span class="quotelev2">&gt;&gt;   each undeclared identifier is reported only once for each
</span><br>
<span class="quotelev2">&gt;&gt;   function it appears in
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:1669: recipe for target `path.lo' failed
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [path.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason is that &quot;buf&quot; is only declared for some operating
</span><br>
<span class="quotelev2">&gt;&gt; systems. I added &quot;defined(__CYGWIN__)&quot; in some places and
</span><br>
<span class="quotelev2">&gt;&gt; was able to compile &quot;path.c&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hermes util 41 diff path.c path.c.orig
</span><br>
<span class="quotelev2">&gt;&gt; 452c452
</span><br>
<span class="quotelev2">&gt;&gt; &lt; #elif defined(__linux__) || defined(__CYGWIN__) ||
</span><br>
<span class="quotelev2">&gt;&gt;   defined (__BSD) || (defined(__APPLE__) &amp;&amp; defined(__MACH__))
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #elif defined(__linux__) || defined (__BSD) ||
</span><br>
<span class="quotelev2">&gt;&gt;   (defined(__APPLE__) &amp;&amp; defined(__MACH__))
</span><br>
<span class="quotelev2">&gt;&gt; 480c480
</span><br>
<span class="quotelev2">&gt;&gt; &lt; #elif defined(__linux__) || defined(__CYGWIN__) ||
</span><br>
<span class="quotelev2">&gt;&gt;   defined (__BSD) || (defined(__APPLE__) &amp;&amp; defined(__MACH__))
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #elif defined(__linux__) || defined (__BSD) ||
</span><br>
<span class="quotelev2">&gt;&gt;   (defined(__APPLE__) &amp;&amp; defined(__MACH__))
</span><br>
<span class="quotelev2">&gt;&gt; 517c517
</span><br>
<span class="quotelev2">&gt;&gt; &lt; #elif defined(__linux__) || defined(__CYGWIN__)
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #elif defined(__linux__)
</span><br>
<span class="quotelev2">&gt;&gt; 549c549
</span><br>
<span class="quotelev2">&gt;&gt; &lt; #elif defined(__linux__) || defined(__CYGWIN__) ||
</span><br>
<span class="quotelev2">&gt;&gt;   defined (__BSD) || \
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #elif defined(__linux__) || defined (__BSD) ||            \
</span><br>
<span class="quotelev2">&gt;&gt; 562c562
</span><br>
<span class="quotelev2">&gt;&gt; &lt; #elif defined(__linux__) || defined (__CYGWIN__) ||
</span><br>
<span class="quotelev2">&gt;&gt;   defined (__BSD) ||       \
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #elif defined(__linux__) || defined (__BSD) ||            \
</span><br>
<span class="quotelev2">&gt;&gt; hermes util 42
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Searching for &quot;__linux__&quot; delivered some more files which
</span><br>
<span class="quotelev2">&gt;&gt; must possibly be adapted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal/config/opal_check_os_flavors.m4
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/event/libevent2019/libevent/buffer.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I assume that the following files do not need any changes
</span><br>
<span class="quotelev2">&gt;&gt; because they are special for Linux or for features which
</span><br>
<span class="quotelev2">&gt;&gt; are not important/available for Cygwin.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:    { $as_echo &quot;$as_me:${as_lineno-$LINENO}:
</span><br>
<span class="quotelev2">&gt;&gt;   checking __linux__&quot; &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; configure:$as_echo_n &quot;checking __linux__... &quot; &gt;&amp;6; }
</span><br>
<span class="quotelev2">&gt;&gt; configure:#ifndef __linux__
</span><br>
<span class="quotelev2">&gt;&gt; configure:      error: this isnt __linux__
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; test/util/opal_path_nfs.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal/asm/base/MIPS.asm:#ifdef __linux__
</span><br>
<span class="quotelev2">&gt;&gt; opal/asm/generated/atomic-mips64el.s:#ifdef __linux__
</span><br>
<span class="quotelev2">&gt;&gt; opal/asm/generated/atomic-mips64-linux.s:#ifdef __linux__
</span><br>
<span class="quotelev2">&gt;&gt; opal/asm/generated/atomic-mips-irix.s:#ifdef __linux__
</span><br>
<span class="quotelev2">&gt;&gt; opal/asm/generated/atomic-mips-linux.s:#ifdef __linux__
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/common/verbs/common_verbs_basics.c:#if defined(__linux__)
</span><br>
<span class="quotelev2">&gt;&gt; opal/include/opal/sys/cma.h:#ifdef __linux__
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/memory/linux/arena.c:#ifdef __linux__
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/io/romio/romio/configure:        #ifdef __linux__
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/io/romio/romio/configure.in:        #ifdef __linux__
</span><br>
<span class="quotelev2">&gt;&gt; opal/include/opal/sys/mips/atomic.h:#ifdef __linux__
</span><br>
<span class="quotelev2">&gt;&gt; opal/include/opal/sys/mips/atomic.h:#ifdef __linux__
</span><br>
<span class="quotelev2">&gt;&gt; opal/include/opal/sys/mips/atomic.h:#ifdef __linux__
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/event/libevent2019/libevent/arc4random.c:#ifdef __linux__
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/io/romio/romio/adio/ad_lustre/ad_lustre.h:#ifdef __linux__
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/io/romio/romio/adio/ad_lustre/ad_lustre.h:#endif /* __linux__ */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can somebody add __Cygwin__ to all necessary files? Now I get
</span><br>
<span class="quotelev2">&gt;&gt; the following error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/if/windows
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt;   `/home/Admin/openmpi/openmpi-1.9-Cygwin.x86.32_gcc/opal/mca/if/windows'
</span><br>
<span class="quotelev2">&gt;&gt;   CC       opal_if_windows.lo
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-1.9a1r27674/opal/mca/if/windows/opal_if_windows.c:
</span><br>
<span class="quotelev2">&gt;&gt;   In function 'if_windows_open':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-1.9a1r27674/opal/mca/if/windows/opal_if_windows.c:58:5:
</span><br>
<span class="quotelev2">&gt;&gt;   error: 'SOCKET' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-1.9a1r27674/opal/mca/if/windows/opal_if_windows.c:58:5:
</span><br>
<span class="quotelev2">&gt;&gt;   note: each undeclared identifier is reported only once for each function
</span><br>
<span class="quotelev2">&gt;&gt;   it appears in
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it necessary to use windows sockets directly or is it possible
</span><br>
<span class="quotelev2">&gt;&gt; to use something similar to Linux sockets? Cygwin supports sockets
</span><br>
<span class="quotelev2">&gt;&gt; (based on Windows sockets as far as I know) and very often uses
</span><br>
<span class="quotelev2">&gt;&gt; similar interfaces as Linux. Which file is responsible for the
</span><br>
<span class="quotelev2">&gt;&gt; selection of &quot;opal_if_windows.c&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I added the following constants to /usr/include/cygwin/shm.h before
</span><br>
<span class="quotelev2">&gt;&gt; I started to build openmpi-1.9a1r27674.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff /usr/include/cygwin/shm.h /usr/include/cygwin/shm.h.orig
</span><br>
<span class="quotelev2">&gt;&gt; 29,34d28
</span><br>
<span class="quotelev2">&gt;&gt; &lt; /* Permission definitions                   */
</span><br>
<span class="quotelev2">&gt;&gt; &lt; #define SHM_R   0400    /* read permission  */
</span><br>
<span class="quotelev2">&gt;&gt; &lt; #define SHM_W   0200    /* write permission */
</span><br>
<span class="quotelev2">&gt;&gt; &lt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I used the following commands to configure Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/usr/local/jdk1.7.0&quot; is a link to my Java installation
</span><br>
<span class="quotelev2">&gt;&gt; on Windows 7.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cd /usr/local
</span><br>
<span class="quotelev2">&gt;&gt; ln -s /cygdrive/c/Program\ Files\ \(x86\)/jdk1.7.0 jdk1.7.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../openmpi-1.9a1r27674/configure --prefix=/usr/local/openmpi-1.9 \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-jdk-bindir=/usr/local/jdk1.7.0/bin \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-jdk-headers=/usr/local/jdk1.7.0/include \
</span><br>
<span class="quotelev2">&gt;&gt;   JAVA_HOME=/usr/local/jdk1.7.0 \
</span><br>
<span class="quotelev2">&gt;&gt;   LDFLAGS=&quot;-m32 -Wl,--export-all-symbols -no-undefined&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32&quot; FCFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   OBJC_INCLUDE_PATH=&quot;&quot; OPENMPI_HOME=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-mpi-java \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-opal-multi-threads \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-threads=posix \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt;&gt;   --without-verbs \
</span><br>
<span class="quotelev2">&gt;&gt;   --without-udapl \
</span><br>
<span class="quotelev2">&gt;&gt;   --without-sctp \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-wrapper-cflags=-m32 \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-debug \
</span><br>
<span class="quotelev2">&gt;&gt;   --disable-mca-dso \
</span><br>
<span class="quotelev2">&gt;&gt;   --without-cs-fs \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-contrib-no-build=vt,libompitrace \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-mca-no-build=memory_mallopt,paffinity,installdirs-windows,timer-windows \
</span><br>
<span class="quotelev2">&gt;&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would be great, if I could get a working Open MPI version with
</span><br>
<span class="quotelev2">&gt;&gt; Java interface on Cygwin. Thank you very much for any help in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20989.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20987.php">Jeff Squyres: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>In reply to:</strong> <a href="20986.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20989.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20989.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20991.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
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
