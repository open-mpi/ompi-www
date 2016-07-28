<?
$subject_val = "Re: [OMPI users] Segmentation faults";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 10:58:12 2011" -->
<!-- isoreceived="20110317145812" -->
<!-- sent="Thu, 17 Mar 2011 10:58:02 -0400" -->
<!-- isosent="20110317145802" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation faults" -->
<!-- id="508B3908-4668-46BB-B2AB-13E76E38F0D3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinRPTd2vtQh57JMHJD3vnnJg+a=82GTQMDh1cLJ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation faults<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-17 10:58:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15895.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Previous message:</strong> <a href="15893.php">Craig West: "[OMPI users] gadget2 infiniband openmpi hang"</a>
<li><strong>In reply to:</strong> <a href="15808.php">arep isa: "[OMPI users] Segmentation faults"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.
<br>
<p>You might want to run your code through a debugger, particularly a memory-checking debugger.  Your stack trace shows that it's segv'ing in main(), so it might not be that difficult to find.
<br>
<p><p>On Mar 8, 2011, at 12:48 AM, arep isa wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I need to use Open MPI to distribute 2d-array in the PGM file among 10
</span><br>
<span class="quotelev1">&gt; working computers. Then I need to manipulate each value of the array
</span><br>
<span class="quotelev1">&gt; to get a negative image (255-i) and then print the output back. I'm
</span><br>
<span class="quotelev1">&gt; thinking of using mpi_scatterv and mpi_gatherv to distribute the data.
</span><br>
<span class="quotelev1">&gt; After i compile the program, it got segmentation faults. I dont know
</span><br>
<span class="quotelev1">&gt; what is the problem whether my code wrong or compiler. I integrate the
</span><br>
<span class="quotelev1">&gt; code to read/write pgm from pgm_RW_1.c and the MPI code in exmpi_2.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --I install OPEN MPI version 1.4.1-2 via Synaptic Package Manager on
</span><br>
<span class="quotelev1">&gt; UBUNTU 10.04.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --I compile with        :
</span><br>
<span class="quotelev1">&gt;       mpicc -o exmpi_2 exmpi_2.c
</span><br>
<span class="quotelev1">&gt; --I run for testing (segmentation faults):
</span><br>
<span class="quotelev1">&gt;       mpirun -np 10 ./exmpi_2 2.pgm out.pgm
</span><br>
<span class="quotelev1">&gt; --Then I run with hostfile:
</span><br>
<span class="quotelev1">&gt;       mpirun -np 10 --hostfile .mpi_hostfile ./exmpi_2 2.pgm out.pgm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the error:
</span><br>
<span class="quotelev1">&gt; ____________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; arep_at_ubuntu:~/Desktop/fyp$ mpirun -np 10 ./exmpi_2 2.pgm out.pgm
</span><br>
<span class="quotelev1">&gt; [ubuntu:02948] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [ubuntu:02948] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [ubuntu:02948] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [ubuntu:02948] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [ubuntu:02948] [ 0] [0x792410]
</span><br>
<span class="quotelev1">&gt; [ubuntu:02948] [ 1] ./exmpi_2(main+0x1f6) [0x8048d2a]
</span><br>
<span class="quotelev1">&gt; [ubuntu:02948] [ 2]
</span><br>
<span class="quotelev1">&gt; /lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe6) [0x126bd6]
</span><br>
<span class="quotelev1">&gt; [ubuntu:02948] [ 3] ./exmpi_2() [0x8048aa1]
</span><br>
<span class="quotelev1">&gt; [ubuntu:02948] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 2948 on node ubuntu exited
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ____________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; Here is the input 2.pgm image :
</span><br>
<span class="quotelev1">&gt; <a href="http://orion.math.iastate.edu/burkardt/data/pgm/balloons.pgm">http://orion.math.iastate.edu/burkardt/data/pgm/balloons.pgm</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TQ for your help.
</span><br>
<span class="quotelev1">&gt; &lt;pgmmpi.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15895.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Previous message:</strong> <a href="15893.php">Craig West: "[OMPI users] gadget2 infiniband openmpi hang"</a>
<li><strong>In reply to:</strong> <a href="15808.php">arep isa: "[OMPI users] Segmentation faults"</a>
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
