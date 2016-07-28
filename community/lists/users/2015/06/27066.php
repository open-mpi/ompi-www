<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 20:05:04 2015" -->
<!-- isoreceived="20150610000504" -->
<!-- sent="Wed, 10 Jun 2015 09:05:00 +0900" -->
<!-- isosent="20150610000500" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Raspberry Pi 2" -->
<!-- id="55777F2C.5050002_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55771FED.1010006_at_att.net" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-09 20:05:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27067.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27065.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="27065.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27085.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27085.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Raspbian is built for armv6
<br>
(unlike linaro which is built for armv7)
<br>
<p>that being said, you are running on an armv7 cpu, so i am not sure 
<br>
&quot;cross-compiling&quot;
<br>
is appropriate. (e.g. if you run a 32 bits gcc binary on an x86_64 os to 
<br>
build a x86_64 binary,
<br>
is this called cross compilation ?)
<br>
<p>my guess is raspbian gcc 4.6 is not able to compile for armv7, even with 
<br>
some extra flags.
<br>
<p>can you try
<br>
sudo apt-get install gcc-4.8 g++-4.8
<br>
and configure with CC=gcc48 CXX=g++48
<br>
(or whatever the gcc 4.8 compiler name is)
<br>
<p>if that works, i will think of updating configure so it fails with an 
<br>
understandable error message
<br>
when building for armv6
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 6/10/2015 2:18 AM, Jeff Layton wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was looking in Raspbian a little and do you know what I found?
</span><br>
<span class="quotelev1">&gt; When I do &quot;gcc -v&quot; it says it was built with &quot;--with-arch=armv6&quot;.
</span><br>
<span class="quotelev1">&gt; Since I'm trying to compile on a Pi 2, doesn't this mean I'm
</span><br>
<span class="quotelev1">&gt; cross-compiling?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btw, did you try a pI 1 before a pi2 ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I checked some forums, and you will likely have to upgrade gcc to 4.8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a simpler option could be linaro 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.raspberrypi.org/forums/viewtopic.php?f=56&amp;t=98997">https://www.raspberrypi.org/forums/viewtopic.php?f=56&amp;t=98997</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday, June 9, 2015, Gilles Gouaillardet 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles.gouaillardet_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     can you
</span><br>
<span class="quotelev2">&gt;&gt;     gcc -march=armv7-a foo.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Tuesday, June 9, 2015, Jeff Layton &lt;laytonjb_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','laytonjb_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I'm not cross-compiling - I'm building on the Pi 2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I'm not sure how to check if gcc can generate armv7 code.
</span><br>
<span class="quotelev2">&gt;&gt;         I'm using Raspbian and I'm just using the default compilers
</span><br>
<span class="quotelev2">&gt;&gt;         that come with it (I think it's gcc 4.6.3).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Jeff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             dmb is available only on ARMv7 (Pi 2)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             if i remember correctly, you are building Open MPI on
</span><br>
<span class="quotelev2">&gt;&gt;             ARMv7 as well (Pi 2),
</span><br>
<span class="quotelev2">&gt;&gt;             so this is not a cross compilation issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             if you configure with -march=armv7, the relevant log is
</span><br>
<span class="quotelev2">&gt;&gt;             libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev2">&gt;&gt;             -I../../opal/include -I../../orte/include
</span><br>
<span class="quotelev2">&gt;&gt;             -I../../ompi/include -I../../oshmem/include
</span><br>
<span class="quotelev2">&gt;&gt;             -I../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
</span><br>
<span class="quotelev2">&gt;&gt;             -I../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev2">&gt;&gt;             -I../..
</span><br>
<span class="quotelev2">&gt;&gt;             -I/work/pi/src/openmpi-1.8.5/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev2">&gt;&gt;             -I/work/pi/src/openmpi-1.8.5/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev2">&gt;&gt;             -I/work/pi/src/openmpi-1.8.5/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev2">&gt;&gt;             -march=armv7 -MT atomic-asm.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt;&gt;             .deps/atomic-asm.Tpo -c atomic-asm.S  -fPIC -DPIC -o
</span><br>
<span class="quotelev2">&gt;&gt;             .libs/atomic-asm.o^M
</span><br>
<span class="quotelev2">&gt;&gt;             atomic-asm.S:1:0: error: target CPU does not support ARM mode
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             which is very puzzling ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             can you confirm
</span><br>
<span class="quotelev2">&gt;&gt;             1) you are not cross compiling
</span><br>
<span class="quotelev2">&gt;&gt;             2) your gcc can generate code for armv7 ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On 6/9/2015 1:48 AM, Jeff Layton wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Sorry - I was traveling for a week and didn't have to
</span><br>
<span class="quotelev2">&gt;&gt;                 the RPi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     What happens if you don't supply CCASFLAGS at all?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 The output from &quot;make&quot; is below. It died when it
</span><br>
<span class="quotelev2">&gt;&gt;                 tried to compile
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-local. It says the processor doesn't support
</span><br>
<span class="quotelev2">&gt;&gt;                 ARM mode &quot;dmb&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Jeff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 pi_at_raspberrypi /work/pi/src/openmpi-1.8.5 $ make
</span><br>
<span class="quotelev2">&gt;&gt;                 Making all in config
</span><br>
<span class="quotelev2">&gt;&gt;                 make[1]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/config'
</span><br>
<span class="quotelev2">&gt;&gt;                 make[1]: Nothing to be done for 'all'.
</span><br>
<span class="quotelev2">&gt;&gt;                 make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/config'
</span><br>
<span class="quotelev2">&gt;&gt;                 Making all in contrib
</span><br>
<span class="quotelev2">&gt;&gt;                 make[1]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/contrib'
</span><br>
<span class="quotelev2">&gt;&gt;                 make[1]: Nothing to be done for 'all'.
</span><br>
<span class="quotelev2">&gt;&gt;                 make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/contrib'
</span><br>
<span class="quotelev2">&gt;&gt;                 Making all in opal
</span><br>
<span class="quotelev2">&gt;&gt;                 make[1]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal'
</span><br>
<span class="quotelev2">&gt;&gt;                 Making all in include
</span><br>
<span class="quotelev2">&gt;&gt;                 make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev2">&gt;&gt;                 make  all-am
</span><br>
<span class="quotelev2">&gt;&gt;                 make[3]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev2">&gt;&gt;                 make[3]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev2">&gt;&gt;                 make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev2">&gt;&gt;                 Making all in asm
</span><br>
<span class="quotelev2">&gt;&gt;                 make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev2">&gt;&gt;                   CC       asm.lo
</span><br>
<span class="quotelev2">&gt;&gt;                 rm -f atomic-asm.S
</span><br>
<span class="quotelev2">&gt;&gt;                 ln -s &quot;../../opal/asm/generated/atomic-local.s&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-asm.S
</span><br>
<span class="quotelev2">&gt;&gt;                   CPPAS    atomic-asm.lo
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-asm.S: Assembler messages:
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-asm.S:7: Error: selected processor does not
</span><br>
<span class="quotelev2">&gt;&gt;                 support ARM mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-asm.S:15: Error: selected processor does not
</span><br>
<span class="quotelev2">&gt;&gt;                 support ARM mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-asm.S:23: Error: selected processor does not
</span><br>
<span class="quotelev2">&gt;&gt;                 support ARM mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-asm.S:55: Error: selected processor does not
</span><br>
<span class="quotelev2">&gt;&gt;                 support ARM mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-asm.S:70: Error: selected processor does not
</span><br>
<span class="quotelev2">&gt;&gt;                 support ARM mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-asm.S:86: Error: selected processor does not
</span><br>
<span class="quotelev2">&gt;&gt;                 support ARM mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-asm.S:91: Error: selected processor does not
</span><br>
<span class="quotelev2">&gt;&gt;                 support ARM mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-asm.S:107: Error: selected processor does not
</span><br>
<span class="quotelev2">&gt;&gt;                 support ARM mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-asm.S:112: Error: selected processor does not
</span><br>
<span class="quotelev2">&gt;&gt;                 support ARM mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-asm.S:115: Error: selected processor does not
</span><br>
<span class="quotelev2">&gt;&gt;                 support ARM mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-asm.S:130: Error: selected processor does not
</span><br>
<span class="quotelev2">&gt;&gt;                 support ARM mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-asm.S:135: Error: selected processor does not
</span><br>
<span class="quotelev2">&gt;&gt;                 support ARM mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt;                 atomic-asm.S:136: Error: selected processor does not
</span><br>
<span class="quotelev2">&gt;&gt;                 support ARM mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt;                 Makefile:1608: recipe for target 'atomic-asm.lo' failed
</span><br>
<span class="quotelev2">&gt;&gt;                 make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;                 make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev2">&gt;&gt;                 Makefile:2149: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev2">&gt;&gt;                 make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;                 make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;                 '/work/pi/src/openmpi-1.8.5/opal'
</span><br>
<span class="quotelev2">&gt;&gt;                 Makefile:1698: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev2">&gt;&gt;                 make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27065.php">http://www.open-mpi.org/community/lists/users/2015/06/27065.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27066/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27067.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27065.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="27065.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27085.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27085.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
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
