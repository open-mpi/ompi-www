<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 15:28:47 2015" -->
<!-- isoreceived="20150610192847" -->
<!-- sent="Wed, 10 Jun 2015 15:28:39 -0400" -->
<!-- isosent="20150610192839" -->
<!-- name="Jeff Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Raspberry Pi 2" -->
<!-- id="55788FE7.9020700_at_att.net" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55777F2C.5050002_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building OpenMPI on Raspberry Pi 2<br>
<strong>From:</strong> Jeff Layton (<em>laytonjb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-10 15:28:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27086.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Previous message:</strong> <a href="27084.php">Ralph Castain: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>In reply to:</strong> <a href="27066.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27062.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>I installed the 4.8 series of compilers on the Pi 2 (gcc, g++, and 
<br>
gfortran).
<br>
I did a fresh untar of openmpi-1.8.5. I set the environment variables
<br>
CC, CXX, and FC to point to the 4.8 compilers. However, the build failed
<br>
again.
<br>
<p>Making all in config
<br>
make[1]: Entering directory '/work/pi/src/openmpi-1.8.5/config'
<br>
make[1]: Nothing to be done for 'all'.
<br>
make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/config'
<br>
Making all in contrib
<br>
make[1]: Entering directory '/work/pi/src/openmpi-1.8.5/contrib'
<br>
make[1]: Nothing to be done for 'all'.
<br>
make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/contrib'
<br>
Making all in opal
<br>
make[1]: Entering directory '/work/pi/src/openmpi-1.8.5/opal'
<br>
Making all in include
<br>
make[2]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/include'
<br>
make  all-am
<br>
make[3]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/include'
<br>
make[3]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/include'
<br>
make[2]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/include'
<br>
Making all in asm
<br>
make[2]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/asm'
<br>
&nbsp;&nbsp;&nbsp;CC       asm.lo
<br>
rm -f atomic-asm.S
<br>
ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.S
<br>
&nbsp;&nbsp;&nbsp;CPPAS    atomic-asm.lo
<br>
atomic-asm.S: Assembler messages:
<br>
atomic-asm.S:7: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:15: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:23: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:55: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:70: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:86: Error: selected processor does not support ARM mode 
<br>
`ldrexd r4,r5,[r0]'
<br>
atomic-asm.S:91: Error: selected processor does not support ARM mode 
<br>
`strexd r1,r6,r7,[r0]'
<br>
atomic-asm.S:107: Error: selected processor does not support ARM mode 
<br>
`ldrexd r4,r5,[r0]'
<br>
atomic-asm.S:112: Error: selected processor does not support ARM mode 
<br>
`strexd r1,r6,r7,[r0]'
<br>
atomic-asm.S:115: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:130: Error: selected processor does not support ARM mode 
<br>
`ldrexd r4,r5,[r0]'
<br>
atomic-asm.S:135: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:136: Error: selected processor does not support ARM mode 
<br>
`strexd r1,r6,r7,[r0]'
<br>
Makefile:1608: recipe for target 'atomic-asm.lo' failed
<br>
make[2]: *** [atomic-asm.lo] Error 1
<br>
make[2]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/asm'
<br>
Makefile:2149: recipe for target 'all-recursive' failed
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal'
<br>
Makefile:1698: recipe for target 'all-recursive' failed
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p>I checked the gcc build:
<br>
<p>pi_at_raspberrypi /work/pi/src/openmpi-1.8.5 $ gcc-4.8 -v
<br>
Using built-in specs.
<br>
COLLECT_GCC=gcc-4.8
<br>
COLLECT_LTO_WRAPPER=/usr/lib/gcc/arm-linux-gnueabihf/4.8/lto-wrapper
<br>
Target: arm-linux-gnueabihf
<br>
Configured with: ../src/configure -v --with-pkgversion='Raspbian 
<br>
4.8.2-21~rpi3rpi1' 
<br>
--with-bugurl=file:///usr/share/doc/gcc-4.8/README.Bugs 
<br>
--enable-languages=c,c++,java,go,d,fortran,objc,obj-c++ --prefix=/usr 
<br>
--program-suffix=-4.8 --enable-shared --enable-linker-build-id 
<br>
--libexecdir=/usr/lib --without-included-gettext --enable-threads=posix 
<br>
--with-gxx-include-dir=/usr/include/c++/4.8 --libdir=/usr/lib 
<br>
--enable-nls --with-sysroot=/ --enable-clocale=gnu 
<br>
--enable-libstdcxx-debug --enable-libstdcxx-time=yes 
<br>
--enable-gnu-unique-object --disable-libmudflap --disable-libitm 
<br>
--disable-libquadmath --enable-plugin --with-system-zlib 
<br>
--disable-browser-plugin --enable-java-awt=gtk --enable-gtk-cairo 
<br>
--with-java-home=/usr/lib/jvm/java-1.5.0-gcj-4.8-armhf/jre 
<br>
--enable-java-home 
<br>
--with-jvm-root-dir=/usr/lib/jvm/java-1.5.0-gcj-4.8-armhf 
<br>
--with-jvm-jar-dir=/usr/lib/jvm-exports/java-1.5.0-gcj-4.8-armhf 
<br>
--with-arch-directory=arm --with-ecj-jar=/usr/share/java/eclipse-ecj.jar 
<br>
--enable-objc-gc --enable-multiarch --disable-sjlj-exceptions 
<br>
--with-arch=armv6 --with-fpu=vfp --with-float=hard 
<br>
--enable-checking=release --build=arm-linux-gnueabihf 
<br>
--host=arm-linux-gnueabihf --target=arm-linux-gnueabihf
<br>
Thread model: posix
<br>
gcc version 4.8.2 (Raspbian 4.8.2-21~rpi3rpi1)
<br>
<p><p>Looks like it was built with armv6 again. (ugh)
<br>
<p>I also checked the Makefile to ensure I was using the correct compilers:
<br>
<p>AWK = mawk
<br>
BASH = /bin/bash
<br>
CC = /usr/bin/gcc-4.8 -std=gnu99
<br>
CCAS = /usr/bin/gcc-4.8 -std=gnu99
<br>
CCASDEPMODE = depmode=gcc3
<br>
CCASFLAGS = -O3 -DNDEBUG -finline-functions -fno-strict-aliasing
<br>
CCDEPMODE = depmode=gcc3
<br>
CFLAGS = -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
<br>
CFLAGS_WITHOUT_OPTFLAGS =  -DNDEBUG -fno-strict-aliasing -pthread
<br>
CLEANFILES = *~ .\#*
<br>
CONFIGURE_DEPENDENCIES = $(top_srcdir)/VERSION
<br>
CPP = /usr/bin/gcc-4.8 -E
<br>
CPPFLAGS = -I$(top_srcdir) 
<br>
-I/work/pi/src/openmpi-1.8.5/opal/mca/hwloc/hwloc191/h
<br>
wloc/include 
<br>
-I/work/pi/src/openmpi-1.8.5/opal/mca/event/libevent2021/libevent -I/w
<br>
ork/pi/src/openmpi-1.8.5/opal/mca/event/libevent2021/libevent/include
<br>
CXX = /usr/bin/g++-4.8
<br>
CXXCPP = /usr/bin/g++-4.8 -E
<br>
CXXCPPFLAGS = -I$(top_srcdir)
<br>
CXXDEPMODE = depmode=gcc3
<br>
CXXFLAGS = -O3 -DNDEBUG -finline-functions -pthread
<br>
CYGPATH_W = echo
<br>
DEBUGGER_CFLAGS = -g
<br>
DEFS = -DHAVE_CONFIG_H
<br>
DEPDIR = .deps
<br>
DLLTOOL = false
<br>
DSYMUTIL =
<br>
DUMPBIN =
<br>
ECHO_C =
<br>
ECHO_N = -n
<br>
ECHO_T =
<br>
EGREP = /bin/grep -E
<br>
EXEEXT =
<br>
FC = /usr/bin/gfortran-4.8
<br>
FCFLAGS =
<br>
FCFLAGS_f =
<br>
FCFLAGS_f90 =
<br>
FFLAGS =
<br>
FGREP = /bin/grep -F
<br>
GREP = /bin/grep
<br>
<p><p>Thanks!
<br>
<p>Jeff
<br>
<p><p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Raspbian is built for armv6
</span><br>
<span class="quotelev1">&gt; (unlike linaro which is built for armv7)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that being said, you are running on an armv7 cpu, so i am not sure 
</span><br>
<span class="quotelev1">&gt; &quot;cross-compiling&quot;
</span><br>
<span class="quotelev1">&gt; is appropriate. (e.g. if you run a 32 bits gcc binary on an x86_64 os 
</span><br>
<span class="quotelev1">&gt; to build a x86_64 binary,
</span><br>
<span class="quotelev1">&gt; is this called cross compilation ?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my guess is raspbian gcc 4.6 is not able to compile for armv7, even 
</span><br>
<span class="quotelev1">&gt; with some extra flags.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you try
</span><br>
<span class="quotelev1">&gt; sudo apt-get install gcc-4.8 g++-4.8
</span><br>
<span class="quotelev1">&gt; and configure with CC=gcc48 CXX=g++48
</span><br>
<span class="quotelev1">&gt; (or whatever the gcc 4.8 compiler name is)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if that works, i will think of updating configure so it fails with an 
</span><br>
<span class="quotelev1">&gt; understandable error message
</span><br>
<span class="quotelev1">&gt; when building for armv6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/10/2015 2:18 AM, Jeff Layton wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was looking in Raspbian a little and do you know what I found?
</span><br>
<span class="quotelev2">&gt;&gt; When I do &quot;gcc -v&quot; it says it was built with &quot;--with-arch=armv6&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Since I'm trying to compile on a Pi 2, doesn't this mean I'm
</span><br>
<span class="quotelev2">&gt;&gt; cross-compiling?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btw, did you try a pI 1 before a pi2 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I checked some forums, and you will likely have to upgrade gcc to 4.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a simpler option could be linaro 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://www.raspberrypi.org/forums/viewtopic.php?f=56&amp;t=98997">https://www.raspberrypi.org/forums/viewtopic.php?f=56&amp;t=98997</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tuesday, June 9, 2015, Gilles Gouaillardet 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;gilles.gouaillardet_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     can you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     gcc -march=armv7-a foo.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On Tuesday, June 9, 2015, Jeff Layton &lt;laytonjb_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','laytonjb_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I'm not cross-compiling - I'm building on the Pi 2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I'm not sure how to check if gcc can generate armv7 code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I'm using Raspbian and I'm just using the default compilers
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         that come with it (I think it's gcc 4.6.3).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             dmb is available only on ARMv7 (Pi 2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             if i remember correctly, you are building Open MPI on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ARMv7 as well (Pi 2),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             so this is not a cross compilation issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             if you configure with -march=armv7, the relevant log is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             -I../../opal/include -I../../orte/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             -I../../ompi/include -I../../oshmem/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             -I../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             -I../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             -I../..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             -I/work/pi/src/openmpi-1.8.5/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             -I/work/pi/src/openmpi-1.8.5/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             -I/work/pi/src/openmpi-1.8.5/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             -march=armv7 -MT atomic-asm.lo -MD -MP -MF
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             .deps/atomic-asm.Tpo -c atomic-asm.S  -fPIC -DPIC -o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             .libs/atomic-asm.o^M
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             atomic-asm.S:1:0: error: target CPU does not support ARM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             mode
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             which is very puzzling ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             can you confirm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             1) you are not cross compiling
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             2) your gcc can generate code for armv7 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             On 6/9/2015 1:48 AM, Jeff Layton wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Sorry - I was traveling for a week and didn't have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 to the RPi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     What happens if you don't supply CCASFLAGS at all?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 The output from &quot;make&quot; is below. It died when it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 tried to compile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-local. It says the processor doesn't support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 ARM mode &quot;dmb&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 pi_at_raspberrypi /work/pi/src/openmpi-1.8.5 $ make
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Making all in config
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[1]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/config'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[1]: Nothing to be done for 'all'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/config'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Making all in contrib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[1]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/contrib'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[1]: Nothing to be done for 'all'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/contrib'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Making all in opal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[1]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Making all in include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[2]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make  all-am
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[3]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[3]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Making all in asm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[2]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   CC       asm.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 rm -f atomic-asm.S
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 ln -s &quot;../../opal/asm/generated/atomic-local.s&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-asm.S
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   CPPAS    atomic-asm.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-asm.S: Assembler messages:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-asm.S:7: Error: selected processor does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-asm.S:15: Error: selected processor does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-asm.S:23: Error: selected processor does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-asm.S:55: Error: selected processor does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-asm.S:70: Error: selected processor does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-asm.S:86: Error: selected processor does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 support ARM mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-asm.S:91: Error: selected processor does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 support ARM mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-asm.S:107: Error: selected processor does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 support ARM mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-asm.S:112: Error: selected processor does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 support ARM mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-asm.S:115: Error: selected processor does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-asm.S:130: Error: selected processor does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 support ARM mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-asm.S:135: Error: selected processor does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 atomic-asm.S:136: Error: selected processor does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 support ARM mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Makefile:1608: recipe for target 'atomic-asm.lo' failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Makefile:2149: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Makefile:1698: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27085/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27086.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>Previous message:</strong> <a href="27084.php">Ralph Castain: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>In reply to:</strong> <a href="27066.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27062.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
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
