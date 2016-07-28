<?
$subject_val = "Re: [hwloc-users] Getting the cache hierarchy";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  6 15:22:56 2010" -->
<!-- isoreceived="20100606192256" -->
<!-- sent="Sun, 06 Jun 2010 21:22:50 +0200" -->
<!-- isosent="20100606192250" -->
<!-- name="Olivier Cessenat" -->
<!-- email="cessenat_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Getting the cache hierarchy" -->
<!-- id="1275852170.13649.76.camel_at_iliana.magic" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20100606181340.GM5358_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Getting the cache hierarchy<br>
<strong>From:</strong> Olivier Cessenat (<em>cessenat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-06 15:22:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0123.php">Olivier Cessenat: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Previous message:</strong> <a href="0121.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for a non graphic	system..."</a>
<li><strong>In reply to:</strong> <a href="0120.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0125.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<li><strong>Reply:</strong> <a href="0125.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My system is &quot;normal&quot; to me : i686 native gcc compiler, but gfortran
<br>
&lt;&lt;
<br>
$ gfortran -dumpversion
<br>
GNU Fortran (GCC) 4.3.0 20071030 (experimental) [trunk revision 129762]
<br>
Copyright (C) 2007 Free Software Foundation, Inc.
<br>
<p>GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
<br>
You may redistribute copies of GNU Fortran
<br>
under the terms of the GNU General Public License.
<br>
For more information about these matters, see the file named COPYING
<br>
$ gcc -dumpversion
<br>
4.3.0
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>Configure full output with gfortran in the path:
<br>
&lt;&lt;
<br>
[root_at_valerie hwloc-1.0.1]# ./configure --enable-debug &amp;&amp; make &amp;&amp; make
<br>
install
<br>
<p>###
<br>
### Configuring hwloc distribution tarball
<br>
### Startup tests
<br>
###
<br>
checking build system type... i686-pc-linux-gnu
<br>
checking host system type... i686-pc-linux-gnu
<br>
checking target system type... i686-pc-linux-gnu
<br>
checking for a BSD-compatible install... /usr/bin/install -c
<br>
checking whether build environment is sane... yes
<br>
checking for a thread-safe mkdir -p... /bin/mkdir -p
<br>
checking for gawk... gawk
<br>
checking whether make sets $(MAKE)... yes
<br>
checking how to create a ustar tar archive... gnutar
<br>
checking for hwloc version... 1.0.1
<br>
checking for gcc... gcc
<br>
checking whether the C compiler works... yes
<br>
checking for C compiler default output file name... a.out
<br>
checking for suffix of executables... 
<br>
checking whether we are cross compiling... no
<br>
checking for suffix of object files... o
<br>
checking whether we are using the GNU C compiler... yes
<br>
checking whether gcc accepts -g... yes
<br>
checking for gcc option to accept ISO C89... none needed
<br>
checking for style of include used by make... GNU
<br>
checking dependency style of gcc... gcc3
<br>
checking whether gcc and cc understand -c and -o together... yes
<br>
checking how to run the C preprocessor... gcc -E
<br>
checking for grep that handles long lines and -e... /bin/grep
<br>
checking for egrep... /bin/grep -E
<br>
checking for ANSI C header files... yes
<br>
checking for sys/types.h... yes
<br>
checking for sys/stat.h... yes
<br>
checking for stdlib.h... yes
<br>
checking for string.h... yes
<br>
checking for memory.h... yes
<br>
checking for strings.h... yes
<br>
checking for inttypes.h... yes
<br>
checking for stdint.h... yes
<br>
checking for unistd.h... yes
<br>
checking minix/config.h usability... no
<br>
checking minix/config.h presence... no
<br>
checking for minix/config.h... no
<br>
checking whether it is safe to define __EXTENSIONS__... yes
<br>
checking for pkg-config... /usr/bin/pkg-config
<br>
checking pkg-config is at least version 0.9.0... yes
<br>
<p>###
<br>
### Configuring hwloc core
<br>
###
<br>
checking hwloc building mode... standalone
<br>
configure: hwloc builddir: /tmp/hwloc-1.0.1
<br>
configure: hwloc srcdir: /tmp/hwloc-1.0.1
<br>
checking if want hwloc maintainer support... enabled
<br>
checking for hwloc directory prefix... (none)
<br>
checking for hwloc symbol prefix... hwloc_
<br>
checking for gcc option to accept ISO C99... -std=gnu99
<br>
checking size of void *... 0
<br>
checking which OS support to include... Linux
<br>
checking which CPU support to include... unknown -- assuming x86_64
<br>
checking whether diff accepts -u... -u
<br>
checking size of unsigned long... 0
<br>
checking size of unsigned int... 0
<br>
checking for __attribute__... yes
<br>
checking for __attribute__(aligned)... yes
<br>
checking for __attribute__(always_inline)... yes
<br>
checking for __attribute__(cold)... yes
<br>
checking for __attribute__(const)... yes
<br>
checking for __attribute__(deprecated)... yes
<br>
checking for __attribute__(format)... no
<br>
checking for __attribute__(hot)... yes
<br>
checking for __attribute__(malloc)... yes
<br>
checking for __attribute__(may_alias)... yes
<br>
checking for __attribute__(no_instrument_function)... yes
<br>
checking for __attribute__(nonnull)... no
<br>
checking for __attribute__(noreturn)... yes
<br>
checking for __attribute__(packed)... yes
<br>
checking for __attribute__(pure)... yes
<br>
checking for __attribute__(sentinel)... no
<br>
checking for __attribute__(unused)... yes
<br>
checking for __attribute__(warn_unused_result)... yes
<br>
checking for __attribute__(weak_alias)... yes
<br>
checking if gcc supports -fvisibility... yes
<br>
checking enable symbol visibility... yes
<br>
configure: WARNING: &quot; -fvisibility=hidden&quot; has been added to hwloc's
<br>
CFLAGS
<br>
checking for inline compatibility keyword... __inline__
<br>
checking for strncasecmp... yes
<br>
checking whether function strncasecmp is declared... yes
<br>
checking for stdint.h... (cached) yes
<br>
checking for wchar_t... yes
<br>
checking for putwc... yes
<br>
checking locale.h usability... no
<br>
checking locale.h presence... yes
<br>
configure: WARNING: locale.h: present but cannot be compiled
<br>
configure: WARNING: locale.h:     check for missing prerequisite
<br>
headers?
<br>
configure: WARNING: locale.h: see the Autoconf documentation
<br>
configure: WARNING: locale.h:     section &quot;Present But Cannot Be
<br>
Compiled&quot;
<br>
configure: WARNING: locale.h: proceeding with the compiler's result
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
configure: WARNING:     ## Report this to
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
checking for locale.h... no
<br>
checking langinfo.h usability... no
<br>
checking langinfo.h presence... yes
<br>
configure: WARNING: langinfo.h: present but cannot be compiled
<br>
configure: WARNING: langinfo.h:     check for missing prerequisite
<br>
headers?
<br>
configure: WARNING: langinfo.h: see the Autoconf documentation
<br>
configure: WARNING: langinfo.h:     section &quot;Present But Cannot Be
<br>
Compiled&quot;
<br>
configure: WARNING: langinfo.h: proceeding with the compiler's result
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
configure: WARNING:     ## Report this to
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
checking for langinfo.h... no
<br>
checking curses.h usability... no
<br>
checking curses.h presence... yes
<br>
configure: WARNING: curses.h: present but cannot be compiled
<br>
configure: WARNING: curses.h:     check for missing prerequisite
<br>
headers?
<br>
configure: WARNING: curses.h: see the Autoconf documentation
<br>
configure: WARNING: curses.h:     section &quot;Present But Cannot Be
<br>
Compiled&quot;
<br>
configure: WARNING: curses.h: proceeding with the compiler's result
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
configure: WARNING:     ## Report this to
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
checking for curses.h... no
<br>
checking for KAFFINITY... no
<br>
checking for PROCESSOR_CACHE_TYPE... no
<br>
checking for CACHE_DESCRIPTOR... no
<br>
checking for LOGICAL_PROCESSOR_RELATIONSHIP... no
<br>
checking for SYSTEM_LOGICAL_PROCESSOR_INFORMATION... no
<br>
checking for GROUP_AFFINITY... no
<br>
checking for PROCESSOR_RELATIONSHIP... no
<br>
checking for NUMA_NODE_RELATIONSHIP... no
<br>
checking for CACHE_RELATIONSHIP... no
<br>
checking for PROCESSOR_GROUP_INFO... no
<br>
checking for GROUP_RELATIONSHIP... no
<br>
checking for SYSTEM_LOGICAL_PROCESSOR_INFORMATION_EX... no
<br>
checking for main in -lgdi32... no
<br>
checking windows.h usability... no
<br>
checking windows.h presence... no
<br>
checking for windows.h... no
<br>
checking sys/lgrp_user.h usability... no
<br>
checking sys/lgrp_user.h presence... no
<br>
checking for sys/lgrp_user.h... no
<br>
checking kstat.h usability... no
<br>
checking kstat.h presence... no
<br>
checking for kstat.h... no
<br>
checking infiniband/verbs.h usability... no
<br>
checking infiniband/verbs.h presence... no
<br>
checking for infiniband/verbs.h... no
<br>
checking whether _SC_NPROCESSORS_ONLN is declared... yes
<br>
checking whether _SC_NPROCESSORS_CONF is declared... yes
<br>
checking whether _SC_NPROC_ONLN is declared... no
<br>
checking whether _SC_NPROC_CONF is declared... no
<br>
checking whether _SC_LARGE_PAGESIZE is declared... no
<br>
checking mach/mach_host.h usability... no
<br>
checking mach/mach_host.h presence... no
<br>
checking for mach/mach_host.h... no
<br>
checking mach/mach_init.h usability... no
<br>
checking mach/mach_init.h presence... no
<br>
checking for mach/mach_init.h... no
<br>
checking sys/param.h usability... no
<br>
checking sys/param.h presence... yes
<br>
configure: WARNING: sys/param.h: present but cannot be compiled
<br>
configure: WARNING: sys/param.h:     check for missing prerequisite
<br>
headers?
<br>
configure: WARNING: sys/param.h: see the Autoconf documentation
<br>
configure: WARNING: sys/param.h:     section &quot;Present But Cannot Be
<br>
Compiled&quot;
<br>
configure: WARNING: sys/param.h: proceeding with the compiler's result
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
configure: WARNING:     ## Report this to
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
checking for sys/param.h... no
<br>
checking for sys/sysctl.h... no
<br>
checking for sysctl... yes
<br>
checking for sysctlbyname... no
<br>
checking for pthread_t... yes
<br>
checking whether function sched_setaffinity is declared... yes
<br>
checking for old prototype of sched_setaffinity... no
<br>
checking for working CPU_SET... yes
<br>
checking for working CPU_SET_S... no
<br>
checking for KERRIGHED... no
<br>
checking for lib... no
<br>
checking for bash... /bin/sh
<br>
checking for ffs... yes
<br>
checking whether function ffs is declared... yes
<br>
checking for ffsl... yes
<br>
checking whether function ffsl is declared... yes
<br>
checking for fls... no
<br>
checking for flsl... no
<br>
checking for clz... no
<br>
checking for clzl... no
<br>
checking for openat... no
<br>
checking whether numa_bitmask_alloc is declared... no
<br>
checking pthread_np.h usability... no
<br>
checking pthread_np.h presence... no
<br>
checking for pthread_np.h... no
<br>
checking whether pthread_setaffinity_np is declared... no
<br>
checking whether pthread_getaffinity_np is declared... no
<br>
checking for sched_setaffinity... yes
<br>
checking for sys/cpuset.h... no
<br>
checking for cpuid... yes
<br>
checking for X... libraries /usr/X11R6/lib, headers /usr/X11R6/include
<br>
<p>###
<br>
### Configuring hwloc documentation
<br>
###
<br>
checking if this is a developer build... no (doxygen generation is
<br>
optional)
<br>
checking for doxygen... no
<br>
checking for pdflatex... /usr/bin/pdflatex
<br>
checking for makeindex... /usr/bin/makeindex
<br>
checking for fig2dev... /usr/X11R6/bin/fig2dev
<br>
checking if can build doxygen docs... no
<br>
checking for w3m... no
<br>
checking for lynx... /usr/bin/lynx
<br>
checking if can build top-level README... yes
<br>
checking if will build doxygen docs... no
<br>
checking if will install doxygen docs... yes
<br>
checking whether to enable &quot;picky&quot; compiler mode... no (default)
<br>
<p>###
<br>
### Configuring hwloc command line utilities
<br>
###
<br>
checking for CAIRO... no
<br>
checking for XML... yes
<br>
checking for xmlNewDoc... yes
<br>
checking for final XML support... yes
<br>
checking for xmllint... xmllint
<br>
<p>###
<br>
### Configuring hwloc tests
<br>
###
<br>
checking for a sed that does not truncate output... /bin/sed
<br>
checking for fgrep... /bin/grep -F
<br>
checking for ld used by gcc... /usr/bin/ld
<br>
checking if the linker (/usr/bin/ld) is GNU ld... yes
<br>
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
<br>
checking the name lister (/usr/bin/nm -B) interface... BSD nm
<br>
checking whether ln -s works... yes
<br>
checking the maximum length of command line arguments... 98304
<br>
checking whether the shell understands some XSI constructs... yes
<br>
checking whether the shell understands &quot;+=&quot;... no
<br>
checking for /usr/bin/ld option to reload object files... -r
<br>
checking for objdump... objdump
<br>
checking how to recognize dependent libraries... pass_all
<br>
checking for ar... ar
<br>
checking for strip... strip
<br>
checking for ranlib... ranlib
<br>
checking command to parse /usr/bin/nm -B output from gcc object... ok
<br>
checking for dlfcn.h... no
<br>
checking for objdir... .libs
<br>
checking if gcc supports -fno-rtti -fno-exceptions... no
<br>
checking for gcc option to produce PIC... -fPIC -DPIC
<br>
checking if gcc PIC flag -fPIC -DPIC works... yes
<br>
checking if gcc static flag -static works... no
<br>
checking if gcc supports -c -o file.o... yes
<br>
checking if gcc supports -c -o file.o... (cached) yes
<br>
checking whether the gcc linker (/usr/bin/ld) supports shared
<br>
libraries... yes
<br>
checking whether -lc should be explicitly linked in... no
<br>
checking dynamic linker characteristics... GNU/Linux ld.so
<br>
checking how to hardcode library paths into programs... immediate
<br>
checking whether stripping libraries is possible... yes
<br>
checking if libtool supports shared libraries... yes
<br>
checking whether to build shared libraries... yes
<br>
checking whether to build static libraries... no
<br>
configure: creating ./config.status
<br>
config.status: creating Makefile
<br>
config.status: creating include/Makefile
<br>
config.status: creating src/Makefile
<br>
config.status: creating doc/Makefile
<br>
config.status: creating doc/doxygen-config.cfg
<br>
config.status: creating utils/Makefile
<br>
config.status: creating hwloc.pc
<br>
config.status: creating tests/Makefile
<br>
config.status: creating tests/linux/Makefile
<br>
config.status: creating tests/xml/Makefile
<br>
config.status: creating tests/ports/Makefile
<br>
config.status: creating tests/linux/gather-topology.sh
<br>
config.status: creating tests/linux/test-topology.sh
<br>
config.status: creating tests/xml/test-topology.sh
<br>
config.status: creating utils/test-hwloc-distrib.sh
<br>
config.status: creating include/private/config.h
<br>
config.status: creating include/hwloc/config.h
<br>
config.status: linking src/topology.c to tests/ports/topology.c
<br>
config.status: linking src/traversal.c to tests/ports/traversal.c
<br>
config.status: linking src/topology-synthetic.c to
<br>
tests/ports/topology-synthetic.c
<br>
config.status: linking src/topology-solaris.c to
<br>
tests/ports/topology-solaris.c
<br>
config.status: linking src/topology-aix.c to tests/ports/topology-aix.c
<br>
config.status: linking src/topology-osf.c to tests/ports/topology-osf.c
<br>
config.status: linking src/topology-windows.c to
<br>
tests/ports/topology-windows.c
<br>
config.status: linking src/topology-darwin.c to
<br>
tests/ports/topology-darwin.c
<br>
config.status: linking src/topology-freebsd.c to
<br>
tests/ports/topology-freebsd.c
<br>
config.status: linking src/topology-hpux.c to
<br>
tests/ports/topology-hpux.c
<br>
config.status: executing depfiles commands
<br>
config.status: executing chmoding-scripts commands
<br>
config.status: executing libtool commands
<br>
Making all in src
<br>
make[1]: Entering directory `/tmp/hwloc-1.0.1/src'
<br>
&nbsp;&nbsp;CC     topology.lo
<br>
In file included from topology.c:17:
<br>
/opt/gfortran/irun/bin/../lib/gcc/i386-pc-linux-gnu/4.3.0/include-fixed/sys/stat.h:345: error: expecte
<br>
d ',' or ';' before '__wur'
<br>
In file included from /tmp/hwloc-1.0.1/include/hwloc.h:17,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from topology.c:21:
<br>
/tmp/hwloc-1.0.1/include/hwloc/config.h:115:2: error: #error &quot;unknown
<br>
size for unsigned long.&quot;
<br>
/tmp/hwloc-1.0.1/include/hwloc/config.h:119:2: error: #error &quot;unknown
<br>
size for unsigned int.&quot;
<br>
topology.c: In function 'hwloc_get_sysctl':
<br>
topology.c:66: warning: implicit declaration of function 'sysctl'
<br>
make[1]: *** [topology.lo] Erreur 1
<br>
make[1]: Leaving directory `/tmp/hwloc-1.0.1/src'
<br>
make: *** [all-recursive] Erreur 1
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>Cheers,
<br>
<p>Olivier.
<br>
<p>Le dimanche 06 juin 2010 &#195;&#160; 20:13 +0200, Samuel Thibault a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Olivier Cessenat, le Sun 06 Jun 2010 19:02:21 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Le dimanche 06 juin 2010 &#195;&#160; 18:39 +0200, Samuel Thibault a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Olivier Cessenat, le Sun 06 Jun 2010 18:14:35 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; In file included from topology.c:17:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /opt/gfortran/irun/bin/../lib/gcc/i386-pc-linux-gnu/4.3.0/include-fixed/sys/stat.h:345: error: expected ',' or ';' before '__wur'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Wow, how odd.  Could you send us the file?  I really wonder what they
</span><br>
<span class="quotelev3">&gt; &gt; &gt; put there that errors out like this.
</span><br>
<span class="quotelev2">&gt; &gt; ==&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, joined. I do not know why this header is used instead of the
</span><br>
<span class="quotelev2">&gt; &gt; standard one... I do not see the connection with gfortran !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't see it either, and I don't see how hwloc could make that line
</span><br>
<span class="quotelev1">&gt; fail. It properly includes &lt;sys/types.h&gt; before including &lt;sys/stat.h&gt;,
</span><br>
<span class="quotelev1">&gt; so at least it respects the standard rules. Your stat.h comes from /opt,
</span><br>
<span class="quotelev1">&gt; maybe you should post the complete output of ./configure to check which
</span><br>
<span class="quotelev1">&gt; mixture of compilers you are using, and maybe try to get odd compilers
</span><br>
<span class="quotelev1">&gt; out from PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; In file included from /tmp/hwloc-1.0.1/include/hwloc.h:17,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                  from topology.c:21:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /tmp/hwloc-1.0.1/include/hwloc/config.h:115:2: error: #error &quot;unknown
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; size for unsigned long.&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; /tmp/hwloc-1.0.1/include/hwloc/config.h:119:2: error: #error &quot;unknown
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; size for unsigned int.&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Could you tell us how much HWLOC_SIZEOF_UNSIGNED_LONG is defined to?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This looks like autoconf wasn't able to properly determine it actually.
</span><br>
<span class="quotelev2">&gt; &gt; ==&gt;
</span><br>
<span class="quotelev2">&gt; &gt; What should I do exactly ? I do not see HWLOC_SIZEOF_UNSIGNED_LONG from
</span><br>
<span class="quotelev2">&gt; &gt; configure ouput.
</span><br>
<span class="quotelev2">&gt; &gt; Here is what find gives:
</span><br>
<span class="quotelev2">&gt; &gt; $ find . -name \*.h -exec grep HWLOC_SIZEOF_UNSIGNED_LONG {} /dev/null
</span><br>
<span class="quotelev2">&gt; &gt; \;
</span><br>
<span class="quotelev2">&gt; &gt; ./include/hwloc/config.h:#define HWLOC_SIZEOF_UNSIGNED_LONG 4
</span><br>
<span class="quotelev2">&gt; &gt; ./include/hwloc/config.h:#define HWLOC_BITS_PER_LONG
</span><br>
<span class="quotelev2">&gt; &gt; (HWLOC_SIZEOF_UNSIGNED_LONG * 8)
</span><br>
<span class="quotelev2">&gt; &gt; ./include/private/config.h:#define HWLOC_SIZEOF_UNSIGNED_LONG 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it's 4.  I fail to see how your compiler could not see that 4*8 is
</span><br>
<span class="quotelev1">&gt; equal to 32..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Oh, by the way, there are some messages provided by configure:
</span><br>
<span class="quotelev2">&gt; &gt; &lt;&lt;
</span><br>
<span class="quotelev2">&gt; &gt; checking locale.h presence... yes
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: locale.h: present but cannot be compiled
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: locale.h:     check for missing prerequisite
</span><br>
<span class="quotelev2">&gt; &gt; headers?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks like your compiler is a cross-compiler or some odd thing like
</span><br>
<span class="quotelev1">&gt; that which autoconf doesn't always correctly handle concerning headers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0123.php">Olivier Cessenat: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Previous message:</strong> <a href="0121.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for a non graphic	system..."</a>
<li><strong>In reply to:</strong> <a href="0120.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0125.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<li><strong>Reply:</strong> <a href="0125.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
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
