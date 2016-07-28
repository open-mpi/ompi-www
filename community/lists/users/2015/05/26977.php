<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 09:21:32 2015" -->
<!-- isoreceived="20150529132132" -->
<!-- sent="Fri, 29 May 2015 22:21:29 +0900" -->
<!-- isosent="20150529132129" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Raspberry Pi 2" -->
<!-- id="CAAkFZ5uUdoCSGnMD3CAJhHv-PqL=UNJ+m-Fo8xwPU-YvFgeyFQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55685760.90303_at_att.net" -->
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
<strong>Date:</strong> 2015-05-29 09:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26978.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="26976.php">Jeff Layton: "[OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="26976.php">Jeff Layton: "[OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26978.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="26978.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>shall I assume you made a typo and wrote CCFLAGS instead of CFLAGS ?
<br>
<p>also, can you double check the flags are correctly passed to the assembler
<br>
with
<br>
cd opal/asm
<br>
make -n atomic-asm.lo
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, May 29, 2015, Jeff Layton &lt;laytonjb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Good morning,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm building OpenMPI from source on a Raspberry Pi 2 and
</span><br>
<span class="quotelev1">&gt; I've hit an error. The error is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev1">&gt;   CPPAS    atomic-asm.lo
</span><br>
<span class="quotelev1">&gt; atomic-asm.S: Assembler messages:
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:7: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:15: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:23: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:55: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:70: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:86: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev1">&gt; `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:91: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev1">&gt; `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:107: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev1">&gt; `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:112: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev1">&gt; `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:115: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:130: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev1">&gt; `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:135: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:136: Error: selected processor does not support ARM mode
</span><br>
<span class="quotelev1">&gt; `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev1">&gt; Makefile:1608: recipe for target 'atomic-asm.lo' failed
</span><br>
<span class="quotelev1">&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/asm'
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
<span class="quotelev1">&gt; I was doing some googling and I saw where I need to specify
</span><br>
<span class="quotelev1">&gt; CCFLAGS when I run configure but I want to make 100% sure
</span><br>
<span class="quotelev1">&gt; I have the right arguments. Can anyone help?
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
<span class="quotelev1">&gt; P.S. I'd rather build OpenMPI from source rather than use the pre-built
</span><br>
<span class="quotelev1">&gt; packages in the Raspbian repository.
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26976.php">http://www.open-mpi.org/community/lists/users/2015/05/26976.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26977/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26978.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="26976.php">Jeff Layton: "[OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="26976.php">Jeff Layton: "[OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26978.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="26978.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
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
