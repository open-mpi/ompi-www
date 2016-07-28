<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 14:17:41 2015" -->
<!-- isoreceived="20150529181741" -->
<!-- sent="Fri, 29 May 2015 14:17:39 -0400" -->
<!-- isosent="20150529181739" -->
<!-- name="Jeff Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Raspberry Pi 2" -->
<!-- id="5568AD43.2070608_at_att.net" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMJJpkU39HdZ4QC3nsAJOkXFSZ-SM2tSARnZe8YDde4d40DSUQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-05-29 14:17:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26988.php">Walt Brainerd: "[OMPI users] mpirun"</a>
<li><strong>Previous message:</strong> <a href="26986.php">George Bosilca: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="26986.php">George Bosilca: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="26999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>I changed my configure command to be:
<br>
<p>./configure CCASFLAGS=-march=native
<br>
<p>and I get an error while running configure:
<br>
<p>...
<br>
*** Assembler
<br>
checking dependency style of gcc -std=gnu99... gcc3
<br>
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
<br>
checking the name lister (/usr/bin/nm -B) interface... BSD nm
<br>
checking for fgrep... /bin/grep -F
<br>
checking if need to remove -g from CCASFLAGS... no
<br>
checking whether to enable smp locks... yes
<br>
checking if .proc/endp is needed... no
<br>
checking directive for setting text section... .text
<br>
checking directive for exporting symbols... .globl
<br>
checking for objdump... objdump
<br>
checking if .note.GNU-stack is needed... yes
<br>
checking suffix for labels... :
<br>
checking prefix for global symbol labels... none
<br>
configure: error: Could not determine global symbol label prefix
<br>
<p><p>Not sure why configure failed at this point.
<br>
<p>Thanks!
<br>
<p>Jeff
<br>
<p><p><span class="quotelev1">&gt; As you are not cross-compiling I would expect gcc to use the right 
</span><br>
<span class="quotelev1">&gt; assembly by default. What is happening is you force the native mode 
</span><br>
<span class="quotelev1">&gt; (-march=native) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 29, 2015 at 10:09 AM, Jeff Layton &lt;laytonjb_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:laytonjb_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 05/29/2015 09:35 AM, Jeff Layton wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     oops - yes, CFLAGS. But I also saw this posting:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://www.open-mpi.org/community/lists/users/2013/01/21111.php">https://www.open-mpi.org/community/lists/users/2013/01/21111.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     where CCASFLAGS is used (I assume because for asm). I'm trying
</span><br>
<span class="quotelev2">&gt;&gt;     this flag when I configure Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I tried using the CCASFLAGS flag from the above link and it didn't
</span><br>
<span class="quotelev1">&gt;     work. The error
</span><br>
<span class="quotelev1">&gt;     now reads:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Making all in mca/memory/linux
</span><br>
<span class="quotelev1">&gt;     make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;     '/work/pi/src/openmpi-1.8.5/opal/mca/memory/linux'
</span><br>
<span class="quotelev1">&gt;       CC       memory_linux_component.lo
</span><br>
<span class="quotelev1">&gt;       CC       memory_linux_ptmalloc2.lo
</span><br>
<span class="quotelev1">&gt;       CC       memory_linux_munmap.lo
</span><br>
<span class="quotelev1">&gt;       CC       malloc.lo
</span><br>
<span class="quotelev1">&gt;     /tmp/cc7g4mWi.s: Assembler messages:
</span><br>
<span class="quotelev1">&gt;     /tmp/cc7g4mWi.s:948: Error: selected processor does not support
</span><br>
<span class="quotelev1">&gt;     ARM mode `dmb'
</span><br>
<span class="quotelev1">&gt;     Makefile:1694: recipe for target 'malloc.lo' failed
</span><br>
<span class="quotelev1">&gt;     make[2]: *** [malloc.lo] Error 1
</span><br>
<span class="quotelev1">&gt;     make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;     '/work/pi/src/openmpi-1.8.5/opal/mca/memory/linux'
</span><br>
<span class="quotelev1">&gt;     Makefile:2149: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt;     make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;     make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal'
</span><br>
<span class="quotelev1">&gt;     Makefile:1698: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt;     make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I used the configure flag CCASFLAGS=-march=armv7-a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Not sure if that is correct or not. I'm guessing I'm using the wrong
</span><br>
<span class="quotelev1">&gt;     architecture for the Pi 2. Suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     shall I assume you made a typo and wrote CCFLAGS instead of CFLAGS ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     also, can you double check the flags are correctly passed to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     assembler with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     cd opal/asm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     make -n atomic-asm.lo
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
<span class="quotelev3">&gt;&gt;&gt;     On Friday, May 29, 2015, Jeff Layton &lt;laytonjb_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;mailto:laytonjb_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Good morning,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I'm building OpenMPI from source on a Raspberry Pi 2 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I've hit an error. The error is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         make[2]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           CPPAS    atomic-asm.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         atomic-asm.S: Assembler messages:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         atomic-asm.S:7: Error: selected processor does not support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         atomic-asm.S:15: Error: selected processor does not support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         atomic-asm.S:23: Error: selected processor does not support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         atomic-asm.S:55: Error: selected processor does not support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         atomic-asm.S:70: Error: selected processor does not support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         atomic-asm.S:86: Error: selected processor does not support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ARM mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         atomic-asm.S:91: Error: selected processor does not support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ARM mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         atomic-asm.S:107: Error: selected processor does not support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ARM mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         atomic-asm.S:112: Error: selected processor does not support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ARM mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         atomic-asm.S:115: Error: selected processor does not support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         atomic-asm.S:130: Error: selected processor does not support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ARM mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         atomic-asm.S:135: Error: selected processor does not support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         atomic-asm.S:136: Error: selected processor does not support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ARM mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Makefile:1608: recipe for target 'atomic-asm.lo' failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         make[2]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Makefile:2149: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Makefile:1698: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I was doing some googling and I saw where I need to specify
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         CCFLAGS when I run configure but I want to make 100% sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I have the right arguments. Can anyone help?
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
<span class="quotelev3">&gt;&gt;&gt;         P.S. I'd rather build OpenMPI from source rather than use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         the pre-built
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         packages in the Raspbian repository.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26987/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26988.php">Walt Brainerd: "[OMPI users] mpirun"</a>
<li><strong>Previous message:</strong> <a href="26986.php">George Bosilca: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="26986.php">George Bosilca: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="26999.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
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
