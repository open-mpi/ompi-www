<?
$subject_val = "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 12:20:29 2012" -->
<!-- isoreceived="20121218172029" -->
<!-- sent="Tue, 18 Dec 2012 10:20:24 -0700" -->
<!-- isosent="20121218172024" -->
<!-- name="JR Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17" -->
<!-- id="50D0A5D8.6080005_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50D0930A.2060309_at_khubla.com" -->
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
<strong>Date:</strong> 2012-12-18 12:20:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20997.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20995.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>In reply to:</strong> <a href="20991.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20997.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20997.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So a question - why do *you* use (native) OpenMPI on Windows, when
<br>
you could just download HPC Pack?  Was it for any reason related
<br>
to implementation?
<br>
<p>(I may have been one of those 2-3 candidate users, but I actually
<br>
just download HPC Pack.)
<br>
<p>Back to the point of why OpenMPI might be desirable: I agree with
<br>
Jeff that it is not about on-node performance, nor use of the network
<br>
stack.  It would have to be better or more implementations above that
<br>
layer, such as OpenMPI having implementations for some advanced MPI
<br>
methods that are absent in HPC Pack (which I understand has forked
<br>
from MPICH).
<br>
<p>But, yeah, it does seem like the coffin is pretty well shut, otherwise.
<br>
<p>Thx...........John
<br>
<p>On 12/18/12 9:00 AM, Damien wrote:
<br>
<span class="quotelev1">&gt; Proper Windows support of OpenMPI is likely around 20 hours a week. 
</span><br>
<span class="quotelev1">&gt; That can be maintained by a small group, but it's probably too much 
</span><br>
<span class="quotelev1">&gt; for one person unless they're working in Windows HPC every day. When I 
</span><br>
<span class="quotelev1">&gt; posted a couple of weeks back, there were three people (maybe two?) 
</span><br>
<span class="quotelev1">&gt; who responded that they used OpenMPI on Windows regularly, other than me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hate to say it, but against MPICH and the Microsoft and Intel MPICH 
</span><br>
<span class="quotelev1">&gt; versions with probably a few thousand regular users, I think OpenMPI 
</span><br>
<span class="quotelev1">&gt; on native Windows is dead in the water.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 18/12/2012 8:06 AM, JR Cary wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 12/18/12 6:29 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This brings up the point again, however, of Windows support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI recently lost its only Windows developer (he moved on to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-HPC things).  This has been discussed on the lists a few times 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I honestly don't remember if it was this users list or the devel 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list), and there hasn't really been anyone who volunteered their 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time to support Open MPI on Windows.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Definitely this list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We're seriously considering removing all Windows support for 1.7 and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; beyond (keep in mind that the native Windows support on the SVN 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk and v1.7 branch is very, very out of date and needs some 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; serious work to get working again -- the last working native Windows 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version is on the v1.6 branch).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sounds appropriate.  My conversations with Microsoft
</span><br>
<span class="quotelev2">&gt;&gt; went no where.  Spoke last night with another good
</span><br>
<span class="quotelev2">&gt;&gt; friend there who worked in their HPC unit when that
</span><br>
<span class="quotelev2">&gt;&gt; existed.  Microsoft has their own implementation, and
</span><br>
<span class="quotelev2">&gt;&gt; they see no need for another.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, IMO, OpenMPI would have to turn to a different
</span><br>
<span class="quotelev2">&gt;&gt; group for support.  E.g., Microsoft compatible HPC
</span><br>
<span class="quotelev2">&gt;&gt; application vendors.  And for that one would need a
</span><br>
<span class="quotelev2">&gt;&gt; compelling case of being better in, e.g., performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can this case be made?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps there is another way?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; John
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 18, 2012, at 3:04 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried to install openmpi-1.9a1r27674 on Cygwin-1.7.17 and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; got the following error (gcc-4.5.3).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CC       path.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../openmpi-1.9a1r27668/opal/util/path.c: In function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   'opal_path_df':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../openmpi-1.9a1r27668/opal/util/path.c:578:18: error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   'buf' undeclared (first use in this function)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../openmpi-1.9a1r27668/opal/util/path.c:578:18: note:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   each undeclared identifier is reported only once for each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   function it appears in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:1669: recipe for target `path.lo' failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: *** [path.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The reason is that &quot;buf&quot; is only declared for some operating
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; systems. I added &quot;defined(__CYGWIN__)&quot; in some places and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was able to compile &quot;path.c&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hermes util 41 diff path.c path.c.orig
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 452c452
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt; #elif defined(__linux__) || defined(__CYGWIN__) ||
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   defined (__BSD) || (defined(__APPLE__) &amp;&amp; defined(__MACH__))
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #elif defined(__linux__) || defined (__BSD) ||
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   (defined(__APPLE__) &amp;&amp; defined(__MACH__))
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 480c480
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt; #elif defined(__linux__) || defined(__CYGWIN__) ||
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   defined (__BSD) || (defined(__APPLE__) &amp;&amp; defined(__MACH__))
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #elif defined(__linux__) || defined (__BSD) ||
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   (defined(__APPLE__) &amp;&amp; defined(__MACH__))
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 517c517
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt; #elif defined(__linux__) || defined(__CYGWIN__)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #elif defined(__linux__)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 549c549
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt; #elif defined(__linux__) || defined(__CYGWIN__) ||
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   defined (__BSD) || \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #elif defined(__linux__) || defined (__BSD) ||            \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 562c562
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt; #elif defined(__linux__) || defined (__CYGWIN__) ||
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   defined (__BSD) ||       \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #elif defined(__linux__) || defined (__BSD) ||            \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hermes util 42
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Searching for &quot;__linux__&quot; delivered some more files which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; must possibly be adapted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/config/opal_check_os_flavors.m4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/mca/event/libevent2019/libevent/buffer.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I assume that the following files do not need any changes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because they are special for Linux or for features which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are not important/available for Cygwin.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure:    { $as_echo &quot;$as_me:${as_lineno-$LINENO}:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   checking __linux__&quot; &gt;&amp;5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure:$as_echo_n &quot;checking __linux__... &quot; &gt;&amp;6; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure:#ifndef __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure:      error: this isnt __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; test/util/opal_path_nfs.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/asm/base/MIPS.asm:#ifdef __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/asm/generated/atomic-mips64el.s:#ifdef __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/asm/generated/atomic-mips64-linux.s:#ifdef __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/asm/generated/atomic-mips-irix.s:#ifdef __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/asm/generated/atomic-mips-linux.s:#ifdef __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/mca/common/verbs/common_verbs_basics.c:#if defined(__linux__)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/include/opal/sys/cma.h:#ifdef __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/mca/memory/linux/arena.c:#ifdef __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/mca/io/romio/romio/configure:        #ifdef __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/mca/io/romio/romio/configure.in:        #ifdef __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/include/opal/sys/mips/atomic.h:#ifdef __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/include/opal/sys/mips/atomic.h:#ifdef __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/include/opal/sys/mips/atomic.h:#ifdef __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/mca/event/libevent2019/libevent/arc4random.c:#ifdef __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/mca/io/romio/romio/adio/ad_lustre/ad_lustre.h:#ifdef __linux__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/mca/io/romio/romio/adio/ad_lustre/ad_lustre.h:#endif /* 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; __linux__ */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can somebody add __Cygwin__ to all necessary files? Now I get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the following error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in mca/if/windows
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `/home/Admin/openmpi/openmpi-1.9-Cygwin.x86.32_gcc/opal/mca/if/windows' 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CC       opal_if_windows.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../openmpi-1.9a1r27674/opal/mca/if/windows/opal_if_windows.c: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   In function 'if_windows_open':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../openmpi-1.9a1r27674/opal/mca/if/windows/opal_if_windows.c:58:5: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   error: 'SOCKET' undeclared (first use in this function)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../openmpi-1.9a1r27674/opal/mca/if/windows/opal_if_windows.c:58:5: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   note: each undeclared identifier is reported only once for each 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   it appears in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it necessary to use windows sockets directly or is it possible
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to use something similar to Linux sockets? Cygwin supports sockets
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (based on Windows sockets as far as I know) and very often uses
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; similar interfaces as Linux. Which file is responsible for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; selection of &quot;opal_if_windows.c&quot;?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I added the following constants to /usr/include/cygwin/shm.h before
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I started to build openmpi-1.9a1r27674.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; diff /usr/include/cygwin/shm.h /usr/include/cygwin/shm.h.orig
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 29,34d28
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt; /* Permission definitions                   */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt; #define SHM_R   0400    /* read permission  */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt; #define SHM_W   0200    /* write permission */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I used the following commands to configure Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;/usr/local/jdk1.7.0&quot; is a link to my Java installation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on Windows 7.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cd /usr/local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s /cygdrive/c/Program\ Files\ \(x86\)/jdk1.7.0 jdk1.7.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../openmpi-1.9a1r27674/configure --prefix=/usr/local/openmpi-1.9 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --with-jdk-bindir=/usr/local/jdk1.7.0/bin \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --with-jdk-headers=/usr/local/jdk1.7.0/include \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   JAVA_HOME=/usr/local/jdk1.7.0 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   LDFLAGS=&quot;-m32 -Wl,--export-all-symbols -no-undefined&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32&quot; FCFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   OBJC_INCLUDE_PATH=&quot;&quot; OPENMPI_HOME=&quot;&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --enable-mpi-java \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --enable-opal-multi-threads \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --with-threads=posix \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --without-verbs \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --without-udapl \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --without-sctp \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --with-wrapper-cflags=-m32 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --enable-debug \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --disable-mca-dso \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --without-cs-fs \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --enable-contrib-no-build=vt,libompitrace \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-mca-no-build=memory_mallopt,paffinity,installdirs-windows,timer-windows 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It would be great, if I could get a working Open MPI version with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Java interface on Cygwin. Thank you very much for any help in advance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20997.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Previous message:</strong> <a href="20995.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>In reply to:</strong> <a href="20991.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20997.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>Reply:</strong> <a href="20997.php">Damien: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
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
