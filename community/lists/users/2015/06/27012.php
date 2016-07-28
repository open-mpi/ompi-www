<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 10:49:50 2015" -->
<!-- isoreceived="20150601144950" -->
<!-- sent="Mon, 1 Jun 2015 14:49:48 +0000" -->
<!-- isosent="20150601144948" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Raspberry Pi 2" -->
<!-- id="6429AF2D-4C91-4FFF-833D-27E9B9064830_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="5569BE63.2020100_at_att.net" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-01 10:49:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27013.php">Alejandro: "[OMPI users] Bug report: Message queues debugging not working"</a>
<li><strong>Previous message:</strong> <a href="27011.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/05/27002.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27050.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27050.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 30, 2015, at 9:42 AM, Jeff Layton &lt;laytonjb_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error happens during the configure step before compiling.
</span><br>
<p>Hmm -- I'm confused.  You show output from &quot;make&quot; in your previous mails...?
<br>
<p><span class="quotelev1">&gt; However, I ran the make command as you indicated and I'm
</span><br>
<span class="quotelev1">&gt; attaching the output to this email.
</span><br>
<p>Ok, thanks.  Here's the problematic compile command:
<br>
<p>-----
<br>
gcc -std=gnu99 -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../oshmem/include -I../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen -I../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen -I../.. -I/work/pi/src/openmpi-1.8.5/opal/mca/hwloc/hwloc191/hwloc/include -I/work/pi/src/openmpi-1.8.5/opal/mca/event/libevent2021/libevent -I/work/pi/src/openmpi-1.8.5/opal/mca/event/libevent2021/libevent/include -march=armv7 -MT atomic-asm.lo -MD -MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S  -fPIC -DPIC -o .libs/atomic-asm.o
<br>
-----
<br>
<p>Stripping out the -D's and -I's which aren't important for this discussion, we're left with:
<br>
<p>-----
<br>
gcc -std=gnu99 -march=armv7 -MT atomic-asm.lo -MD -MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S  -fPIC -DPIC -o .libs/atomic-asm.o
<br>
-----
<br>
<p>So it looks like the -march=armv7 is, indeed, the problematic switch.
<br>
<p>FWIW, a few lines above it, this line succeeded:
<br>
<p>-----
<br>
gcc -std=gnu99 -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../oshmem/include -I../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen -I../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen -I../.. -I/work/pi/src/openmpi-1.8.5/opal/mca/hwloc/hwloc191/hwloc/include -I/work/pi/src/openmpi-1.8.5/opal/mca/event/libevent2021/libevent -I/work/pi/src/openmpi-1.8.5/opal/mca/event/libevent2021/libevent/include -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -MT asm.lo -MD -MP -MF .deps/asm.Tpo -c asm.c  -fPIC -DPIC -o .libs/asm.o
<br>
-----
<br>
<p>Which, as you notice, does *not* have the -march=armv7 token (because it's compiling a C file, not an assembly file).
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; I used the configure flag CCASFLAGS=-march=armv7-a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not sure if that is correct or not. I'm guessing I'm using the wrong
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; architecture for the Pi 2. Suggestions?
</span><br>
<p>What happens if you don't supply CCASFLAGS at all?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27013.php">Alejandro: "[OMPI users] Bug report: Message queues debugging not working"</a>
<li><strong>Previous message:</strong> <a href="27011.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/05/27002.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27050.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27050.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
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
