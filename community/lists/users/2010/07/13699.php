<?
$subject_val = "Re: [OMPI users] MPICH2 is working OpenMPI Not";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 19 10:16:16 2010" -->
<!-- isoreceived="20100719141616" -->
<!-- sent="Mon, 19 Jul 2010 10:16:09 -0400" -->
<!-- isosent="20100719141609" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPICH2 is working OpenMPI Not" -->
<!-- id="01E3172F-4B27-4876-BC4D-0AB789D1A19F_at_myri.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTilPhBeGkhwrnIsaDLJmC6FQ-Q-inE_BxzyJXQA1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPICH2 is working OpenMPI Not<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-19 10:16:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13700.php">Anthony Chan: "Re: [OMPI users] MPE logging GUI"</a>
<li><strong>Previous message:</strong> <a href="13698.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="13693.php">Bibrak Qamar: "[OMPI users] MPICH2 is working OpenMPI Not"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bibrak,
<br>
<p>The message about malloc looks like a MX message. Which interconnects did you compile support for?
<br>
<p>If you are using MX, does it appear when you run with:
<br>
<p>$ mpirun --mca pml cm -np 4 ./exec 98
<br>
<p>which uses the MX MTL instead of MX BTL.
<br>
<p>Scott
<br>
<p>On Jul 18, 2010, at 9:23 AM, Bibrak Qamar wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have developed a code which I tested on MPICH2, it working fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when I compile and run it with OpenMPI, its not working.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The result of the program with the errors by OpenMPI is below ..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bibrak_at_barq:~/XXX&gt; mpirun -np 4 ./exec 98
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt; warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt; warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt; warning:regcache incompatible with malloc
</span><br>
<span class="quotelev1">&gt; Send count -- &gt;&gt; 25 
</span><br>
<span class="quotelev1">&gt; Send count -- &gt;&gt; 25 
</span><br>
<span class="quotelev1">&gt; Send count -- &gt;&gt; 24 
</span><br>
<span class="quotelev1">&gt; Send count -- &gt;&gt; 24 
</span><br>
<span class="quotelev1">&gt; Dis -- &gt;&gt; 0 
</span><br>
<span class="quotelev1">&gt; Dis -- &gt;&gt; 25 
</span><br>
<span class="quotelev1">&gt; Dis -- &gt;&gt; 50 
</span><br>
<span class="quotelev1">&gt; Dis -- &gt;&gt; 74 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  0 d[0] = -14.025975 
</span><br>
<span class="quotelev1">&gt;  1 d[0] = -14.025975 
</span><br>
<span class="quotelev1">&gt; -- 1 -- 
</span><br>
<span class="quotelev1">&gt;  2 d[0] = -14.025975 
</span><br>
<span class="quotelev1">&gt; -- 2 -- 
</span><br>
<span class="quotelev1">&gt; -- 0 -- 
</span><br>
<span class="quotelev1">&gt;  3 d[0] = -14.025975 
</span><br>
<span class="quotelev1">&gt;  --3 --
</span><br>
<span class="quotelev1">&gt; [barq:27118] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [barq:27118] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [barq:27118] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [barq:27118] Failing at address: 0x51681f96
</span><br>
<span class="quotelev1">&gt; [barq:27121] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [barq:27121] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [barq:27121] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [barq:27121] Failing at address: 0x77b5685
</span><br>
<span class="quotelev1">&gt; [barq:27118] [ 0] [0xffffe410]
</span><br>
<span class="quotelev1">&gt; [barq:27118] [ 1] /lib/libc.so.6(cfree+0x9c) [0xb7d20f3c]
</span><br>
<span class="quotelev1">&gt; [barq:27118] [ 2] ./exec(main+0x2214) [0x804ad8d]
</span><br>
<span class="quotelev1">&gt; [barq:27118] [ 3] /lib/libc.so.6(__libc_start_main+0xe5) [0xb7cc9705]
</span><br>
<span class="quotelev1">&gt; [barq:27121] [ 0] [0xffffe410]
</span><br>
<span class="quotelev1">&gt; [barq:27121] [ 1] /lib/libc.so.6(cfree+0x9c) [0xb7d0ef3c]
</span><br>
<span class="quotelev1">&gt; [barq:27121] [ 2] ./exec(main+0x2214) [0x804ad8d]
</span><br>
<span class="quotelev1">&gt; [barq:27121] [ 3] /lib/libc.so.6(__libc_start_main+0xe5) [0xb7cb7705]
</span><br>
<span class="quotelev1">&gt; [barq:27121] [ 4] ./exec [0x8048b01]
</span><br>
<span class="quotelev1">&gt; [barq:27121] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [barq:27118] [ 4] ./exec [0x8048b01]
</span><br>
<span class="quotelev1">&gt; [barq:27118] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 3 with PID 27121 on node barq exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [barq:27120] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [barq:27120] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [barq:27120] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [barq:27120] Failing at address: 0x4bd1ca3e
</span><br>
<span class="quotelev1">&gt; [barq:27120] [ 0] [0xffffe410]
</span><br>
<span class="quotelev1">&gt; [barq:27120] [ 1] /lib/libc.so.6(cfree+0x9c) [0xb7c97f3c]
</span><br>
<span class="quotelev1">&gt; [barq:27120] [ 2] ./exec(main+0x2214) [0x804ad8d]
</span><br>
<span class="quotelev1">&gt; [barq:27120] [ 3] /lib/libc.so.6(__libc_start_main+0xe5) [0xb7c40705]
</span><br>
<span class="quotelev1">&gt; [barq:27120] [ 4] ./exec [0x8048b01]
</span><br>
<span class="quotelev1">&gt; [barq:27120] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because of the warning:regcache incompatible with malloc warning I did 
</span><br>
<span class="quotelev2">&gt; &gt;  bibrak_at_barq:~/XXX&gt; export MX_RCACHE=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And now ignored the warning, but the error still remains
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I shall appreciate any help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bibrak Qamar
</span><br>
<span class="quotelev1">&gt; NUST-SEECS
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13700.php">Anthony Chan: "Re: [OMPI users] MPE logging GUI"</a>
<li><strong>Previous message:</strong> <a href="13698.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="13693.php">Bibrak Qamar: "[OMPI users] MPICH2 is working OpenMPI Not"</a>
<!-- nextthread="start" -->
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
