<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 09:35:04 2015" -->
<!-- isoreceived="20150529133504" -->
<!-- sent="Fri, 29 May 2015 09:35:02 -0400" -->
<!-- isosent="20150529133502" -->
<!-- name="Jeff Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Raspberry Pi 2" -->
<!-- id="55686B06.208_at_att.net" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5uUdoCSGnMD3CAJhHv-PqL=UNJ+m-Fo8xwPU-YvFgeyFQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-05-29 09:35:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26979.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26977.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="26977.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26981.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="26981.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>oops - yes, CFLAGS. But I also saw this posting:
<br>
<p><a href="https://www.open-mpi.org/community/lists/users/2013/01/21111.php">https://www.open-mpi.org/community/lists/users/2013/01/21111.php</a>
<br>
<p>where CCASFLAGS is used (I assume because for asm). I'm trying
<br>
this flag when I configure Open MPI.
<br>
<p>Thanks!
<br>
<p>Jeff
<br>
<p><p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shall I assume you made a typo and wrote CCFLAGS instead of CFLAGS ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; also, can you double check the flags are correctly passed to the 
</span><br>
<span class="quotelev1">&gt; assembler with
</span><br>
<span class="quotelev1">&gt; cd opal/asm
</span><br>
<span class="quotelev1">&gt; make -n atomic-asm.lo
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
<span class="quotelev1">&gt; On Friday, May 29, 2015, Jeff Layton &lt;laytonjb_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:laytonjb_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Good morning,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'm building OpenMPI from source on a Raspberry Pi 2 and
</span><br>
<span class="quotelev1">&gt;     I've hit an error. The error is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     make[2]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev1">&gt;       CPPAS    atomic-asm.lo
</span><br>
<span class="quotelev1">&gt;     atomic-asm.S: Assembler messages:
</span><br>
<span class="quotelev1">&gt;     atomic-asm.S:7: Error: selected processor does not support ARM
</span><br>
<span class="quotelev1">&gt;     mode `dmb'
</span><br>
<span class="quotelev1">&gt;     atomic-asm.S:15: Error: selected processor does not support ARM
</span><br>
<span class="quotelev1">&gt;     mode `dmb'
</span><br>
<span class="quotelev1">&gt;     atomic-asm.S:23: Error: selected processor does not support ARM
</span><br>
<span class="quotelev1">&gt;     mode `dmb'
</span><br>
<span class="quotelev1">&gt;     atomic-asm.S:55: Error: selected processor does not support ARM
</span><br>
<span class="quotelev1">&gt;     mode `dmb'
</span><br>
<span class="quotelev1">&gt;     atomic-asm.S:70: Error: selected processor does not support ARM
</span><br>
<span class="quotelev1">&gt;     mode `dmb'
</span><br>
<span class="quotelev1">&gt;     atomic-asm.S:86: Error: selected processor does not support ARM
</span><br>
<span class="quotelev1">&gt;     mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev1">&gt;     atomic-asm.S:91: Error: selected processor does not support ARM
</span><br>
<span class="quotelev1">&gt;     mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev1">&gt;     atomic-asm.S:107: Error: selected processor does not support ARM
</span><br>
<span class="quotelev1">&gt;     mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev1">&gt;     atomic-asm.S:112: Error: selected processor does not support ARM
</span><br>
<span class="quotelev1">&gt;     mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev1">&gt;     atomic-asm.S:115: Error: selected processor does not support ARM
</span><br>
<span class="quotelev1">&gt;     mode `dmb'
</span><br>
<span class="quotelev1">&gt;     atomic-asm.S:130: Error: selected processor does not support ARM
</span><br>
<span class="quotelev1">&gt;     mode `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev1">&gt;     atomic-asm.S:135: Error: selected processor does not support ARM
</span><br>
<span class="quotelev1">&gt;     mode `dmb'
</span><br>
<span class="quotelev1">&gt;     atomic-asm.S:136: Error: selected processor does not support ARM
</span><br>
<span class="quotelev1">&gt;     mode `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev1">&gt;     Makefile:1608: recipe for target 'atomic-asm.lo' failed
</span><br>
<span class="quotelev1">&gt;     make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev1">&gt;     make[2]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/asm'
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
<span class="quotelev1">&gt;     I was doing some googling and I saw where I need to specify
</span><br>
<span class="quotelev1">&gt;     CCFLAGS when I run configure but I want to make 100% sure
</span><br>
<span class="quotelev1">&gt;     I have the right arguments. Can anyone help?
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
<span class="quotelev1">&gt;     P.S. I'd rather build OpenMPI from source rather than use the
</span><br>
<span class="quotelev1">&gt;     pre-built
</span><br>
<span class="quotelev1">&gt;     packages in the Raspbian repository.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/05/26976.php">http://www.open-mpi.org/community/lists/users/2015/05/26976.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26977.php">http://www.open-mpi.org/community/lists/users/2015/05/26977.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26978/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26979.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26977.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>In reply to:</strong> <a href="26977.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26981.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="26981.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
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
