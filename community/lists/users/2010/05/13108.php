<?
$subject_val = "Re: [OMPI users] Segmentation fault at program end with 2+ processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 11:10:31 2010" -->
<!-- isoreceived="20100520151031" -->
<!-- sent="Thu, 20 May 2010 11:10:26 -0400" -->
<!-- isosent="20100520151026" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault at program end with 2+ processes" -->
<!-- id="4BF550E2.7050005_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69EABB18-86B3-43C0-BA1E-3EA3E2359649_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault at program end with 2+ processes<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 11:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13109.php">Battalgazi YILDIRIM: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13107.php">Patrick Geoffray: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>In reply to:</strong> <a href="13051.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault at program end with 2+ processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I hope I'm not too late in my reply, and I hope I'm not repeating the
<br>
same solution others have given you.
<br>
<p>I had a similar error in a code a few months ago. The error was this: I
<br>
think I was doing an MPI_Pack/Unpack to send data between nodes. The
<br>
problem was that I was allocating space for a buffer using the wrong
<br>
variable, so there was a buffer size mismatch between the sending and
<br>
receiving nodes.
<br>
<p>When running problem as a single instance, these buffers weren't really
<br>
being used, so the problem never presented itself. It trickier, the
<br>
problem only occurred when the payload exceeded a certain size (number
<br>
of elements in array, or data in packed buffer) when run in parallel.
<br>
<p>I used valgrind, which didn't shed much light on the problem. I finally
<br>
found my error when I tracking down the data size dependency.
<br>
<p>I hope that helps.
<br>
<p>Prentice
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Ouch.  These are the worst kinds of bugs to find.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you attach a debugger to these processes and step through the final death throes of the process, does it provide any additional insight?  I have not infrequently done stuff like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;      int i = 0;
</span><br>
<span class="quotelev1">&gt;      printf(&quot;Process %d ready to attach\n&quot;, getpid());
</span><br>
<span class="quotelev1">&gt;      while (i == 0) sleep(5);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then you get a message indicating which pid to attach to.  When you attach, set the variable i to nonzero and you can continue stepping through the process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 14, 2010, at 10:44 AM, Paul-Michael Agapow wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Apologies for the vague details of the problem I'm about to describe,
</span><br>
<span class="quotelev2">&gt;&gt; but then I only understand it vaguely. Any pointers about the best
</span><br>
<span class="quotelev2">&gt;&gt; directions for further investigation would be appreciated. Lengthy
</span><br>
<span class="quotelev2">&gt;&gt; details follow:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I'm &quot;MPI-izing&quot; a pre-existing C++ program (not mine) and have run
</span><br>
<span class="quotelev2">&gt;&gt; into some weird behaviour. When run under mpiexec, a segmentation
</span><br>
<span class="quotelev2">&gt;&gt; fault is thrown:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % mpiexec -n 2 ./omegamip
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; main.cpp:52: Finished.
</span><br>
<span class="quotelev2">&gt;&gt; Completed 20 of 20 in 0.0695 minutes
</span><br>
<span class="quotelev2">&gt;&gt; [queen:23560] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [queen:23560] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [queen:23560] Signal code:  (128)
</span><br>
<span class="quotelev2">&gt;&gt; [queen:23560] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt; [queen:23560] [ 0] /lib64/libpthread.so.0 [0x3d6a00de80]
</span><br>
<span class="quotelev2">&gt;&gt; [queen:23560] [ 1] /opt/openmpi/lib/libopen-pal.so.0(_int_free+0x40)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2afb1fa43460]
</span><br>
<span class="quotelev2">&gt;&gt; [queen:23560] [ 2] /opt/openmpi/lib/libopen-pal.so.0(free+0xbd) [0x2afb1fa439ad]
</span><br>
<span class="quotelev2">&gt;&gt; [queen:23560] [ 3] ./omegamip(_ZN12omegaMapBaseD2Ev+0x5b) [0x433c2b]
</span><br>
<span class="quotelev2">&gt;&gt; [queen:23560] [ 4] ./omegamip(main+0x18c) [0x415ccc]
</span><br>
<span class="quotelev2">&gt;&gt; [queen:23560] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3d6941d8b4]
</span><br>
<span class="quotelev2">&gt;&gt; [queen:23560] [ 6] ./omegamip(__gxx_personality_v0+0x1e9) [0x40ee59]
</span><br>
<span class="quotelev2">&gt;&gt; [queen:23560] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that job rank 1 with PID 23560 on node
</span><br>
<span class="quotelev2">&gt;&gt; queen.bioinformatics exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right, so I've got a memory overrun or something. Except that when the
</span><br>
<span class="quotelev2">&gt;&gt; program is run in standalone mode, it works fine:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % ./omegamip
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; main.cpp:52: Finished.
</span><br>
<span class="quotelev2">&gt;&gt; Completed 20 of 20 in 0.05970 minutes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right, so there's a difference between my standalone and MPI modes.
</span><br>
<span class="quotelev2">&gt;&gt; Except the the difference between my standalone and MPI versions is
</span><br>
<span class="quotelev2">&gt;&gt; currently nothing but the calls to MPI_Init, MPI_Finalize and some
</span><br>
<span class="quotelev2">&gt;&gt; exploratory calls to MPI_Comm_size and MPI_Comm_rank. (I haven't
</span><br>
<span class="quotelev2">&gt;&gt; gotten as far as coding the problem division.) Also, calling mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; with 1 process always works:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % mpiexec -n 1 ./omegamip
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; main.cpp:52: Finished.
</span><br>
<span class="quotelev2">&gt;&gt; Completed 20 of 20 in 0.05801 minutes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So there's still this segmentation fault. Running valgrind across the
</span><br>
<span class="quotelev2">&gt;&gt; program doesn't show any obvious problems: there was some quirky
</span><br>
<span class="quotelev2">&gt;&gt; pointer arithmetic and some huge blocks of dangling memory, but these
</span><br>
<span class="quotelev2">&gt;&gt; were only leaked at the end of the program (i.e. the original
</span><br>
<span class="quotelev2">&gt;&gt; programmer didn't bother cleaning up at program termination). I've
</span><br>
<span class="quotelev2">&gt;&gt; caught most of those. But the segmentation fault still occurs only
</span><br>
<span class="quotelev2">&gt;&gt; when run under mpiexec with 2 or more processes. And by use of
</span><br>
<span class="quotelev2">&gt;&gt; diagnostic printfs and logging, I can see that it only occurs at the
</span><br>
<span class="quotelev2">&gt;&gt; very end of the program, the very end of main, possibly when
</span><br>
<span class="quotelev2">&gt;&gt; destructors are being automatically called. But again this cleanup
</span><br>
<span class="quotelev2">&gt;&gt; doesn't cause any problems with the standalone or 1 process modes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, any ideas for where to start looking?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; technical details: gcc v4.1.2, C++, mpiexec (OpenRTE) 1.2.7, x86_64,
</span><br>
<span class="quotelev2">&gt;&gt; Red Hat 4.1.2-42
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; Paul-Michael Agapow (paul-michael.agapow (at) hpa.org.uk)
</span><br>
<span class="quotelev2">&gt;&gt; Bioinformatics, Centre for Infections, Health Protection Agency
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Prentice Bisbal
Linux Software Support Specialist/System Administrator
School of Natural Sciences
Institute for Advanced Study
Princeton, NJ
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13109.php">Battalgazi YILDIRIM: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13107.php">Patrick Geoffray: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>In reply to:</strong> <a href="13051.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault at program end with 2+ processes"</a>
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
