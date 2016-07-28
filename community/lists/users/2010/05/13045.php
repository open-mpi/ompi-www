<?
$subject_val = "[OMPI users] Segmentation fault at program end with 2+ processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 14 10:44:54 2010" -->
<!-- isoreceived="20100514144454" -->
<!-- sent="Fri, 14 May 2010 15:44:29 +0100" -->
<!-- isosent="20100514144429" -->
<!-- name="Paul-Michael Agapow" -->
<!-- email="pma+openmpi_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault at program end with 2+ processes" -->
<!-- id="AANLkTikXPa70_N21vJ2EVSU3plbjiQNPtBENRP23w01n_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault at program end with 2+ processes<br>
<strong>From:</strong> Paul-Michael Agapow (<em>pma+openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-14 10:44:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13046.php">ananda.mudar_at_[hidden]: "[OMPI users] ompi-restart fails with &quot;found pid in use&quot;"</a>
<li><strong>Previous message:</strong> <a href="13044.php">Jos&#233; Ignacio Aliaga Estell&#233;s: "[OMPI users] GM + OpenMPI bug ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13051.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault at program end with 2+ processes"</a>
<li><strong>Reply:</strong> <a href="13051.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault at program end with 2+ processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Apologies for the vague details of the problem I'm about to describe,
<br>
but then I only understand it vaguely. Any pointers about the best
<br>
directions for further investigation would be appreciated. Lengthy
<br>
details follow:
<br>
<p>So I'm &quot;MPI-izing&quot; a pre-existing C++ program (not mine) and have run
<br>
into some weird behaviour. When run under mpiexec, a segmentation
<br>
fault is thrown:
<br>
<p>% mpiexec -n 2 ./omegamip
<br>
[...]
<br>
main.cpp:52: Finished.
<br>
Completed 20 of 20 in 0.0695 minutes
<br>
[queen:23560] *** Process received signal ***
<br>
[queen:23560] Signal: Segmentation fault (11)
<br>
[queen:23560] Signal code:  (128)
<br>
[queen:23560] Failing at address: (nil)
<br>
[queen:23560] [ 0] /lib64/libpthread.so.0 [0x3d6a00de80]
<br>
[queen:23560] [ 1] /opt/openmpi/lib/libopen-pal.so.0(_int_free+0x40)
<br>
[0x2afb1fa43460]
<br>
[queen:23560] [ 2] /opt/openmpi/lib/libopen-pal.so.0(free+0xbd) [0x2afb1fa439ad]
<br>
[queen:23560] [ 3] ./omegamip(_ZN12omegaMapBaseD2Ev+0x5b) [0x433c2b]
<br>
[queen:23560] [ 4] ./omegamip(main+0x18c) [0x415ccc]
<br>
[queen:23560] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3d6941d8b4]
<br>
[queen:23560] [ 6] ./omegamip(__gxx_personality_v0+0x1e9) [0x40ee59]
<br>
[queen:23560] *** End of error message ***
<br>
mpiexec noticed that job rank 1 with PID 23560 on node
<br>
queen.bioinformatics exited on signal 11 (Segmentation fault).
<br>
<p>Right, so I've got a memory overrun or something. Except that when the
<br>
program is run in standalone mode, it works fine:
<br>
<p>% ./omegamip
<br>
[...]
<br>
main.cpp:52: Finished.
<br>
Completed 20 of 20 in 0.05970 minutes
<br>
<p>Right, so there's a difference between my standalone and MPI modes.
<br>
Except the the difference between my standalone and MPI versions is
<br>
currently nothing but the calls to MPI_Init, MPI_Finalize and some
<br>
exploratory calls to MPI_Comm_size and MPI_Comm_rank. (I haven't
<br>
gotten as far as coding the problem division.) Also, calling mpiexec
<br>
with 1 process always works:
<br>
<p>% mpiexec -n 1 ./omegamip
<br>
[...]
<br>
main.cpp:52: Finished.
<br>
Completed 20 of 20 in 0.05801 minutes
<br>
<p>So there's still this segmentation fault. Running valgrind across the
<br>
program doesn't show any obvious problems: there was some quirky
<br>
pointer arithmetic and some huge blocks of dangling memory, but these
<br>
were only leaked at the end of the program (i.e. the original
<br>
programmer didn't bother cleaning up at program termination). I've
<br>
caught most of those. But the segmentation fault still occurs only
<br>
when run under mpiexec with 2 or more processes. And by use of
<br>
diagnostic printfs and logging, I can see that it only occurs at the
<br>
very end of the program, the very end of main, possibly when
<br>
destructors are being automatically called. But again this cleanup
<br>
doesn't cause any problems with the standalone or 1 process modes.
<br>
<p>So, any ideas for where to start looking?
<br>
<p>technical details: gcc v4.1.2, C++, mpiexec (OpenRTE) 1.2.7, x86_64,
<br>
Red Hat 4.1.2-42
<br>
<p><pre>
----
Paul-Michael Agapow (paul-michael.agapow (at) hpa.org.uk)
Bioinformatics, Centre for Infections, Health Protection Agency
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13046.php">ananda.mudar_at_[hidden]: "[OMPI users] ompi-restart fails with &quot;found pid in use&quot;"</a>
<li><strong>Previous message:</strong> <a href="13044.php">Jos&#233; Ignacio Aliaga Estell&#233;s: "[OMPI users] GM + OpenMPI bug ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13051.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault at program end with 2+ processes"</a>
<li><strong>Reply:</strong> <a href="13051.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault at program end with 2+ processes"</a>
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
