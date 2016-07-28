<?
$subject_val = "[OMPI users] Fwd: an error when running MPI on 2 machines";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  9 14:02:47 2013" -->
<!-- isoreceived="20130209190247" -->
<!-- sent="Sat, 9 Feb 2013 14:02:43 -0500" -->
<!-- isosent="20130209190243" -->
<!-- name="Paul Gribelyuk" -->
<!-- email="paul.quant_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: an error when running MPI on 2 machines" -->
<!-- id="77084785-D232-4591-BCCD-9956544423E2_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BB91F23D-175D-4148-839D-81517FAA6AE6_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: an error when running MPI on 2 machines<br>
<strong>From:</strong> Paul Gribelyuk (<em>paul.quant_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-09 14:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21342.php">Ralph Castain: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Previous message:</strong> <a href="21340.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21363.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: an error when running MPI on 2 machines"</a>
<li><strong>Reply:</strong> <a href="21363.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: an error when running MPI on 2 machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am getting the following stacktrace when running a simple hello world MPI C++ program on 2 machines:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mini:mpi_cw paul$ mpirun --prefix /usr/local/Cellar/open-mpi/1.6.3 --hostfile hosts_home -np 2 ./pi 1000000
</span><br>
<span class="quotelev1">&gt; rank and name: 0 aka mini.local
</span><br>
<span class="quotelev1">&gt; [home-mini:12175] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [home-mini:12175] Signal: Segmentation fault: 11 (11)
</span><br>
<span class="quotelev1">&gt; [home-mini:12175] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [home-mini:12175] Failing at address: 0x1042e0000
</span><br>
<span class="quotelev1">&gt; [home-mini:12175] [ 0] 2   libsystem_c.dylib                   0x00007fff94050cfa _sigtramp + 26
</span><br>
<span class="quotelev1">&gt; [home-mini:12175] [ 1] 3   mca_btl_tcp.so                      0x000000010397092c best_addr + 2620
</span><br>
<span class="quotelev1">&gt; [home-mini:12175] [ 2] 4   pi                                  0x0000000103649d24 start + 52
</span><br>
<span class="quotelev1">&gt; [home-mini:12175] [ 3] 5   ???                                 0x0000000000000002 0x0 + 2
</span><br>
<span class="quotelev1">&gt; [home-mini:12175] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; rank: 0 sum: 1.85459
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 12175 on node home-mini.local exited on signal 11 (Segmentation fault: 11).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get a similar result even when I don't use --prefix since the .bashrc file on the remote machine is correctly pointing to PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help with this seg fault is greatly appreciated.  Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21342.php">Ralph Castain: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Previous message:</strong> <a href="21340.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem with rankfiles in openmpi-1.6.4rc3]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21363.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: an error when running MPI on 2 machines"</a>
<li><strong>Reply:</strong> <a href="21363.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: an error when running MPI on 2 machines"</a>
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
