<?
$subject_val = "[OMPI users] MPICH2 is working OpenMPI Not";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 18 09:23:41 2010" -->
<!-- isoreceived="20100718132341" -->
<!-- sent="Sun, 18 Jul 2010 17:23:37 +0400" -->
<!-- isosent="20100718132337" -->
<!-- name="Bibrak Qamar" -->
<!-- email="bibrakc_at_[hidden]" -->
<!-- subject="[OMPI users] MPICH2 is working OpenMPI Not" -->
<!-- id="AANLkTilPhBeGkhwrnIsaDLJmC6FQ-Q-inE_BxzyJXQA1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPICH2 is working OpenMPI Not<br>
<strong>From:</strong> Bibrak Qamar (<em>bibrakc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-18 09:23:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13694.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13692.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13699.php">Scott Atchley: "Re: [OMPI users] MPICH2 is working OpenMPI Not"</a>
<li><strong>Reply:</strong> <a href="13699.php">Scott Atchley: "Re: [OMPI users] MPICH2 is working OpenMPI Not"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have developed a code which I tested on MPICH2, it working fine.
<br>
<p>But when I compile and run it with OpenMPI, its not working.
<br>
<p>The result of the program with the errors by OpenMPI is below ..
<br>
<p>--------------
<br>
<p><p>bibrak_at_barq:~/XXX&gt; mpirun -np 4 ./exec 98
<br>
<p><p>warning:regcache incompatible with malloc
<br>
warning:regcache incompatible with malloc
<br>
warning:regcache incompatible with malloc
<br>
warning:regcache incompatible with malloc
<br>
Send count -- &gt;&gt; 25
<br>
Send count -- &gt;&gt; 25
<br>
Send count -- &gt;&gt; 24
<br>
Send count -- &gt;&gt; 24
<br>
Dis -- &gt;&gt; 0
<br>
Dis -- &gt;&gt; 25
<br>
Dis -- &gt;&gt; 50
<br>
Dis -- &gt;&gt; 74
<br>
<p><p><p><p>&nbsp;0 d[0] = -14.025975
<br>
&nbsp;1 d[0] = -14.025975
<br>
-- 1 --
<br>
&nbsp;2 d[0] = -14.025975
<br>
-- 2 --
<br>
-- 0 --
<br>
&nbsp;3 d[0] = -14.025975
<br>
&nbsp;--3 --
<br>
[barq:27118] *** Process received signal ***
<br>
[barq:27118] Signal: Segmentation fault (11)
<br>
[barq:27118] Signal code: Address not mapped (1)
<br>
[barq:27118] Failing at address: 0x51681f96
<br>
[barq:27121] *** Process received signal ***
<br>
[barq:27121] Signal: Segmentation fault (11)
<br>
[barq:27121] Signal code: Address not mapped (1)
<br>
[barq:27121] Failing at address: 0x77b5685
<br>
[barq:27118] [ 0] [0xffffe410]
<br>
[barq:27118] [ 1] /lib/libc.so.6(cfree+0x9c) [0xb7d20f3c]
<br>
[barq:27118] [ 2] ./exec(main+0x2214) [0x804ad8d]
<br>
[barq:27118] [ 3] /lib/libc.so.6(__libc_start_main+0xe5) [0xb7cc9705]
<br>
[barq:27121] [ 0] [0xffffe410]
<br>
[barq:27121] [ 1] /lib/libc.so.6(cfree+0x9c) [0xb7d0ef3c]
<br>
[barq:27121] [ 2] ./exec(main+0x2214) [0x804ad8d]
<br>
[barq:27121] [ 3] /lib/libc.so.6(__libc_start_main+0xe5) [0xb7cb7705]
<br>
[barq:27121] [ 4] ./exec [0x8048b01]
<br>
[barq:27121] *** End of error message ***
<br>
[barq:27118] [ 4] ./exec [0x8048b01]
<br>
[barq:27118] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 3 with PID 27121 on node barq exited on
<br>
signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
[barq:27120] *** Process received signal ***
<br>
[barq:27120] Signal: Segmentation fault (11)
<br>
[barq:27120] Signal code: Address not mapped (1)
<br>
[barq:27120] Failing at address: 0x4bd1ca3e
<br>
[barq:27120] [ 0] [0xffffe410]
<br>
[barq:27120] [ 1] /lib/libc.so.6(cfree+0x9c) [0xb7c97f3c]
<br>
[barq:27120] [ 2] ./exec(main+0x2214) [0x804ad8d]
<br>
[barq:27120] [ 3] /lib/libc.so.6(__libc_start_main+0xe5) [0xb7c40705]
<br>
[barq:27120] [ 4] ./exec [0x8048b01]
<br>
[barq:27120] *** End of error message ***
<br>
<p><p>----------------
<br>
<p>Because of the warning:regcache incompatible with malloc warning I did
<br>
<span class="quotelev1">&gt;  bibrak_at_barq:~/XXX&gt; export MX_RCACHE=2
</span><br>
<p>And now ignored the warning, but the error still remains
<br>
<p>I shall appreciate any help.
<br>
<p>Bibrak Qamar
<br>
NUST-SEECS
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13693/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13694.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13692.php">Anton Shterenlikht: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13699.php">Scott Atchley: "Re: [OMPI users] MPICH2 is working OpenMPI Not"</a>
<li><strong>Reply:</strong> <a href="13699.php">Scott Atchley: "Re: [OMPI users] MPICH2 is working OpenMPI Not"</a>
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
