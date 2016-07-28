<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 09:40:59 2015" -->
<!-- isoreceived="20150609134059" -->
<!-- sent="Tue, 9 Jun 2015 22:40:57 +0900" -->
<!-- isosent="20150609134057" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Raspberry Pi 2" -->
<!-- id="CAAkFZ5uSd1a3btZ07_z5-7p4R7PdjzrAO0k7t7M4ymFGc_wbyg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5udLaqwWWoEaq55Xc6wYT82Yddb1fwtpbUMG8ausn551A_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-09 09:40:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27061.php">Nathan Hjelm: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27059.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="27059.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27063.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27063.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27064.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27065.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>btw, did you try a pI 1 before a pi2 ?
<br>
<p>I checked some forums, and you will likely have to upgrade gcc to 4.8
<br>
<p>a simpler option could be linaro
<br>
<a href="https://www.raspberrypi.org/forums/viewtopic.php?f=56&amp;t=98997">https://www.raspberrypi.org/forums/viewtopic.php?f=56&amp;t=98997</a>
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, June 9, 2015, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you
</span><br>
<span class="quotelev1">&gt; gcc -march=armv7-a foo.c
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
<span class="quotelev1">&gt; On Tuesday, June 9, 2015, Jeff Layton &lt;laytonjb_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','laytonjb_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not cross-compiling - I'm building on the Pi 2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure how to check if gcc can generate armv7 code.
</span><br>
<span class="quotelev2">&gt;&gt; I'm using Raspbian and I'm just using the default compilers
</span><br>
<span class="quotelev2">&gt;&gt; that come with it (I think it's gcc 4.6.3).
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
<span class="quotelev2">&gt;&gt;  Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dmb is available only on ARMv7 (Pi 2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if i remember correctly, you are building Open MPI on ARMv7 as well (Pi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so this is not a cross compilation issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if you configure with -march=armv7, the relevant log is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../opal/include -I../../orte/include -I../../ompi/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../oshmem/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen -I../..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/work/pi/src/openmpi-1.8.5/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/work/pi/src/openmpi-1.8.5/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/work/pi/src/openmpi-1.8.5/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -march=armv7 -MT atomic-asm.lo -MD -MP -MF .deps/atomic-asm.Tpo -c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.S  -fPIC -DPIC -o .libs/atomic-asm.o^M
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.S:1:0: error: target CPU does not support ARM mode
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which is very puzzling ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can you confirm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) you are not cross compiling
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) your gcc can generate code for armv7 ?
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 6/9/2015 1:48 AM, Jeff Layton wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry - I was traveling for a week and didn't have to the RPi.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  What happens if you don't supply CCASFLAGS at all?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The output from &quot;make&quot; is below. It died when it tried to compile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-local. It says the processor doesn't support ARM mode &quot;dmb&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pi_at_raspberrypi /work/pi/src/openmpi-1.8.5 $ make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in config
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Entering directory '/work/pi/src/openmpi-1.8.5/config'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Nothing to be done for 'all'.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/config'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in contrib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Entering directory '/work/pi/src/openmpi-1.8.5/contrib'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Nothing to be done for 'all'.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/contrib'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in opal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Entering directory '/work/pi/src/openmpi-1.8.5/opal'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make  all-am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in asm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CC       asm.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rm -f atomic-asm.S
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.S
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CPPAS    atomic-asm.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S: Assembler messages:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:7: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:15: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:23: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:55: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:70: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:86: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:91: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:107: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:112: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:115: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:130: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:135: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:136: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:1608: recipe for target 'atomic-asm.lo' failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:2149: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:1698: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27050.php">http://www.open-mpi.org/community/lists/users/2015/06/27050.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27055.php">http://www.open-mpi.org/community/lists/users/2015/06/27055.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27058.php">http://www.open-mpi.org/community/lists/users/2015/06/27058.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27060/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27061.php">Nathan Hjelm: "Re: [OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27059.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="27059.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27063.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27063.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27064.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27065.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
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
