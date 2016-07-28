<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 13:51:09 2015" -->
<!-- isoreceived="20150529175109" -->
<!-- sent="Fri, 29 May 2015 13:51:07 -0400" -->
<!-- isosent="20150529175107" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Raspberry Pi 2" -->
<!-- id="CAMJJpkU39HdZ4QC3nsAJOkXFSZ-SM2tSARnZe8YDde4d40DSUQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5568731A.9000800_at_att.net" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-29 13:51:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26987.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="26985.php">Blosch, Edwin L: "Re: [OMPI users] How can I discover valid values for MCA parameters?"</a>
<li><strong>In reply to:</strong> <a href="26981.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26987.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="26987.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As you are not cross-compiling I would expect gcc to use the right assembly
<br>
by default. What is happening is you force the native mode (-march=native) ?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Fri, May 29, 2015 at 10:09 AM, Jeff Layton &lt;laytonjb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  On 05/29/2015 09:35 AM, Jeff Layton wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried using the CCASFLAGS flag from the above link and it didn't work.
</span><br>
<span class="quotelev1">&gt; The error
</span><br>
<span class="quotelev1">&gt; now reads:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in mca/memory/linux
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; '/work/pi/src/openmpi-1.8.5/opal/mca/memory/linux'
</span><br>
<span class="quotelev1">&gt;   CC       memory_linux_component.lo
</span><br>
<span class="quotelev1">&gt;   CC       memory_linux_ptmalloc2.lo
</span><br>
<span class="quotelev1">&gt;   CC       memory_linux_munmap.lo
</span><br>
<span class="quotelev1">&gt;   CC       malloc.lo
</span><br>
<span class="quotelev1">&gt; /tmp/cc7g4mWi.s: Assembler messages:
</span><br>
<span class="quotelev1">&gt; /tmp/cc7g4mWi.s:948: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev1">&gt; `dmb'
</span><br>
<span class="quotelev1">&gt; Makefile:1694: recipe for target 'malloc.lo' failed
</span><br>
<span class="quotelev1">&gt; make[2]: *** [malloc.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; '/work/pi/src/openmpi-1.8.5/opal/mca/memory/linux'
</span><br>
<span class="quotelev1">&gt; Makefile:2149: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal'
</span><br>
<span class="quotelev1">&gt; Makefile:1698: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the configure flag CCASFLAGS=-march=armv7-a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure if that is correct or not. I'm guessing I'm using the wrong
</span><br>
<span class="quotelev1">&gt; architecture for the Pi 2. Suggestions?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  shall I assume you made a typo and wrote CCFLAGS instead of CFLAGS ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  also, can you double check the flags are correctly passed to the
</span><br>
<span class="quotelev1">&gt; assembler with
</span><br>
<span class="quotelev1">&gt; cd opal/asm
</span><br>
<span class="quotelev1">&gt; make -n atomic-asm.lo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, May 29, 2015, Jeff Layton &lt;laytonjb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good morning,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm building OpenMPI from source on a Raspberry Pi 2 and
</span><br>
<span class="quotelev2">&gt;&gt; I've hit an error. The error is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev2">&gt;&gt;   CPPAS    atomic-asm.lo
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.S: Assembler messages:
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.S:7: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.S:15: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.S:23: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.S:55: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.S:70: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.S:86: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev2">&gt;&gt; `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.S:91: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev2">&gt;&gt; `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.S:107: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev2">&gt;&gt; `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.S:112: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev2">&gt;&gt; `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.S:115: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev2">&gt;&gt; `dmb'
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.S:130: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev2">&gt;&gt; `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.S:135: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev2">&gt;&gt; `dmb'
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.S:136: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev2">&gt;&gt; `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:1608: recipe for target 'atomic-asm.lo' failed
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:2149: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal'
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:1698: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was doing some googling and I saw where I need to specify
</span><br>
<span class="quotelev2">&gt;&gt; CCFLAGS when I run configure but I want to make 100% sure
</span><br>
<span class="quotelev2">&gt;&gt; I have the right arguments. Can anyone help?
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
<span class="quotelev2">&gt;&gt; P.S. I'd rather build OpenMPI from source rather than use the pre-built
</span><br>
<span class="quotelev2">&gt;&gt; packages in the Raspbian repository.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26981.php">http://www.open-mpi.org/community/lists/users/2015/05/26981.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26986/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26987.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="26985.php">Blosch, Edwin L: "Re: [OMPI users] How can I discover valid values for MCA parameters?"</a>
<li><strong>In reply to:</strong> <a href="26981.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26987.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="26987.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
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
