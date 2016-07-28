<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 10:09:42 2015" -->
<!-- isoreceived="20150529140942" -->
<!-- sent="Fri, 29 May 2015 10:09:30 -0400" -->
<!-- isosent="20150529140930" -->
<!-- name="Jeff Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Raspberry Pi 2" -->
<!-- id="5568731A.9000800_at_att.net" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55686B06.208_at_att.net" -->
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
<strong>Date:</strong> 2015-05-29 10:09:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26982.php">Timothy Brown: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26980.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26978.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26986.php">George Bosilca: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="26986.php">George Bosilca: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/29/2015 09:35 AM, Jeff Layton wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; oops - yes, CFLAGS. But I also saw this posting:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/users/2013/01/21111.php">https://www.open-mpi.org/community/lists/users/2013/01/21111.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where CCASFLAGS is used (I assume because for asm). I'm trying
</span><br>
<span class="quotelev1">&gt; this flag when I configure Open MPI.
</span><br>
<p>I tried using the CCASFLAGS flag from the above link and it didn't work. 
<br>
The error
<br>
now reads:
<br>
<p>Making all in mca/memory/linux
<br>
make[2]: Entering directory 
<br>
'/work/pi/src/openmpi-1.8.5/opal/mca/memory/linux'
<br>
&nbsp;&nbsp;&nbsp;CC       memory_linux_component.lo
<br>
&nbsp;&nbsp;&nbsp;CC       memory_linux_ptmalloc2.lo
<br>
&nbsp;&nbsp;&nbsp;CC       memory_linux_munmap.lo
<br>
&nbsp;&nbsp;&nbsp;CC       malloc.lo
<br>
/tmp/cc7g4mWi.s: Assembler messages:
<br>
/tmp/cc7g4mWi.s:948: Error: selected processor does not support ARM mode 
<br>
`dmb'
<br>
Makefile:1694: recipe for target 'malloc.lo' failed
<br>
make[2]: *** [malloc.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
'/work/pi/src/openmpi-1.8.5/opal/mca/memory/linux'
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
<p><p>I used the configure flag CCASFLAGS=-march=armv7-a
<br>
<p>Not sure if that is correct or not. I'm guessing I'm using the wrong
<br>
architecture for the Pi 2. Suggestions?
<br>
<p>Thanks!
<br>
<p>Jeff
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; shall I assume you made a typo and wrote CCFLAGS instead of CFLAGS ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; also, can you double check the flags are correctly passed to the 
</span><br>
<span class="quotelev2">&gt;&gt; assembler with
</span><br>
<span class="quotelev2">&gt;&gt; cd opal/asm
</span><br>
<span class="quotelev2">&gt;&gt; make -n atomic-asm.lo
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
<span class="quotelev2">&gt;&gt; On Friday, May 29, 2015, Jeff Layton &lt;laytonjb_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:laytonjb_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Good morning,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I'm building OpenMPI from source on a Raspberry Pi 2 and
</span><br>
<span class="quotelev2">&gt;&gt;     I've hit an error. The error is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     make[2]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev2">&gt;&gt;       CPPAS    atomic-asm.lo
</span><br>
<span class="quotelev2">&gt;&gt;     atomic-asm.S: Assembler messages:
</span><br>
<span class="quotelev2">&gt;&gt;     atomic-asm.S:7: Error: selected processor does not support ARM
</span><br>
<span class="quotelev2">&gt;&gt;     mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt;     atomic-asm.S:15: Error: selected processor does not support ARM
</span><br>
<span class="quotelev2">&gt;&gt;     mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt;     atomic-asm.S:23: Error: selected processor does not support ARM
</span><br>
<span class="quotelev2">&gt;&gt;     mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt;     atomic-asm.S:55: Error: selected processor does not support ARM
</span><br>
<span class="quotelev2">&gt;&gt;     mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt;     atomic-asm.S:70: Error: selected processor does not support ARM
</span><br>
<span class="quotelev2">&gt;&gt;     mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt;     atomic-asm.S:86: Error: selected processor does not support ARM
</span><br>
<span class="quotelev2">&gt;&gt;     mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt;     atomic-asm.S:91: Error: selected processor does not support ARM
</span><br>
<span class="quotelev2">&gt;&gt;     mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt;     atomic-asm.S:107: Error: selected processor does not support ARM
</span><br>
<span class="quotelev2">&gt;&gt;     mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt;     atomic-asm.S:112: Error: selected processor does not support ARM
</span><br>
<span class="quotelev2">&gt;&gt;     mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt;     atomic-asm.S:115: Error: selected processor does not support ARM
</span><br>
<span class="quotelev2">&gt;&gt;     mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt;     atomic-asm.S:130: Error: selected processor does not support ARM
</span><br>
<span class="quotelev2">&gt;&gt;     mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt;     atomic-asm.S:135: Error: selected processor does not support ARM
</span><br>
<span class="quotelev2">&gt;&gt;     mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt;     atomic-asm.S:136: Error: selected processor does not support ARM
</span><br>
<span class="quotelev2">&gt;&gt;     mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt;     Makefile:1608: recipe for target 'atomic-asm.lo' failed
</span><br>
<span class="quotelev2">&gt;&gt;     make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;     make[2]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev2">&gt;&gt;     Makefile:2149: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev2">&gt;&gt;     make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;     make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal'
</span><br>
<span class="quotelev2">&gt;&gt;     Makefile:1698: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev2">&gt;&gt;     make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I was doing some googling and I saw where I need to specify
</span><br>
<span class="quotelev2">&gt;&gt;     CCFLAGS when I run configure but I want to make 100% sure
</span><br>
<span class="quotelev2">&gt;&gt;     I have the right arguments. Can anyone help?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Jeff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     P.S. I'd rather build OpenMPI from source rather than use the
</span><br>
<span class="quotelev2">&gt;&gt;     pre-built
</span><br>
<span class="quotelev2">&gt;&gt;     packages in the Raspbian repository.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26981/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26982.php">Timothy Brown: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26980.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26978.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26986.php">George Bosilca: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="26986.php">George Bosilca: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
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
