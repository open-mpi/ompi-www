<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 30 06:46:45 2015" -->
<!-- isoreceived="20150530104645" -->
<!-- sent="Sat, 30 May 2015 10:46:33 +0000" -->
<!-- isosent="20150530104633" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Raspberry Pi 2" -->
<!-- id="2760AEEF-D1F4-496F-884A-E0FC1E14C737_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="5568AD43.2070608_at_att.net" -->
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
<strong>Date:</strong> 2015-05-30 06:46:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27000.php">Alexander Droste: "[OMPI users] MPI-Checker - Static Analyzer"</a>
<li><strong>Previous message:</strong> <a href="26998.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26987.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27002.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27002.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the output of &quot;make V=1&quot;?
<br>
<p>That will show the exact command line that is being used to build that file.
<br>
<p><p><span class="quotelev1">&gt; On May 29, 2015, at 2:17 PM, Jeff Layton &lt;laytonjb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I changed my configure command to be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure CCASFLAGS=-march=native
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and I get an error while running configure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; *** Assembler
</span><br>
<span class="quotelev1">&gt; checking dependency style of gcc -std=gnu99... gcc3
</span><br>
<span class="quotelev1">&gt; checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
</span><br>
<span class="quotelev1">&gt; checking the name lister (/usr/bin/nm -B) interface... BSD nm
</span><br>
<span class="quotelev1">&gt; checking for fgrep... /bin/grep -F
</span><br>
<span class="quotelev1">&gt; checking if need to remove -g from CCASFLAGS... no
</span><br>
<span class="quotelev1">&gt; checking whether to enable smp locks... yes
</span><br>
<span class="quotelev1">&gt; checking if .proc/endp is needed... no
</span><br>
<span class="quotelev1">&gt; checking directive for setting text section... .text
</span><br>
<span class="quotelev1">&gt; checking directive for exporting symbols... .globl
</span><br>
<span class="quotelev1">&gt; checking for objdump... objdump
</span><br>
<span class="quotelev1">&gt; checking if .note.GNU-stack is needed... yes
</span><br>
<span class="quotelev1">&gt; checking suffix for labels... :
</span><br>
<span class="quotelev1">&gt; checking prefix for global symbol labels... none
</span><br>
<span class="quotelev1">&gt; configure: error: Could not determine global symbol label prefix
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure why configure failed at this point.
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
<span class="quotelev2">&gt;&gt; As you are not cross-compiling I would expect gcc to use the right assembly by default. What is happening is you force the native mode (-march=native) ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, May 29, 2015 at 10:09 AM, Jeff Layton &lt;laytonjb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 05/29/2015 09:35 AM, Jeff Layton wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oops - yes, CFLAGS. But I also saw this posting:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://www.open-mpi.org/community/lists/users/2013/01/21111.php">https://www.open-mpi.org/community/lists/users/2013/01/21111.php</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where CCASFLAGS is used (I assume because for asm). I'm trying
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this flag when I configure Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried using the CCASFLAGS flag from the above link and it didn't work. The error
</span><br>
<span class="quotelev2">&gt;&gt; now reads:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/memory/linux
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/mca/memory/linux'
</span><br>
<span class="quotelev2">&gt;&gt;   CC       memory_linux_component.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       memory_linux_ptmalloc2.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       memory_linux_munmap.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       malloc.lo
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/cc7g4mWi.s: Assembler messages:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/cc7g4mWi.s:948: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:1694: recipe for target 'malloc.lo' failed
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [malloc.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/mca/memory/linux'
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
<span class="quotelev2">&gt;&gt; I used the configure flag CCASFLAGS=-march=armv7-a
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if that is correct or not. I'm guessing I'm using the wrong
</span><br>
<span class="quotelev2">&gt;&gt; architecture for the Pi 2. Suggestions?
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shall I assume you made a typo and wrote CCFLAGS instead of CFLAGS ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; also, can you double check the flags are correctly passed to the assembler with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cd opal/asm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make -n atomic-asm.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Friday, May 29, 2015, Jeff Layton &lt;laytonjb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Good morning,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm building OpenMPI from source on a Raspberry Pi 2 and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've hit an error. The error is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CPPAS    atomic-asm.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S: Assembler messages:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:7: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:15: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:23: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:55: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:70: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:86: Error: selected processor does not support ARM mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:91: Error: selected processor does not support ARM mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:107: Error: selected processor does not support ARM mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:112: Error: selected processor does not support ARM mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:115: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:130: Error: selected processor does not support ARM mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:135: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:136: Error: selected processor does not support ARM mode `strexd r1,r6,r7,[r0]'
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
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was doing some googling and I saw where I need to specify
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CCFLAGS when I run configure but I want to make 100% sure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have the right arguments. Can anyone help?
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
<span class="quotelev4">&gt;&gt;&gt;&gt; P.S. I'd rather build OpenMPI from source rather than use the pre-built
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; packages in the Raspbian repository.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26987.php">http://www.open-mpi.org/community/lists/users/2015/05/26987.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27000.php">Alexander Droste: "[OMPI users] MPI-Checker - Static Analyzer"</a>
<li><strong>Previous message:</strong> <a href="26998.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26987.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27002.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27002.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
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
