<?
$subject_val = "Re: [OMPI users] Fwd:  an error when running MPI on 2 machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 22:17:14 2013" -->
<!-- isoreceived="20130212031714" -->
<!-- sent="Mon, 11 Feb 2013 22:17:06 -0500" -->
<!-- isosent="20130212031706" -->
<!-- name="Paul Gribelyuk" -->
<!-- email="paul.quant_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd:  an error when running MPI on 2 machines" -->
<!-- id="0E4422C4-DD4C-4278-95DA-1354D72CE3BC_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="73FBF17E-B088-4007-AD0C-D4EA075D2CCF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd:  an error when running MPI on 2 machines<br>
<strong>From:</strong> Paul Gribelyuk (<em>paul.quant_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 22:17:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21383.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21381.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21363.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: an error when running MPI on 2 machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21385.php">Jeff Squyres (jsquyres): "Re: [OMPI users] an error when running MPI on 2 machines"</a>
<li><strong>Reply:</strong> <a href="21385.php">Jeff Squyres (jsquyres): "Re: [OMPI users] an error when running MPI on 2 machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
Thank you for your email.  The program make an MPI_Reduce call as the only form of explicit communication between machines&#133; I said it was simple because it's effectively a very trivial distributed computation for me to learn MPI.  I am using the same version, by doing &quot;brew install openmpi&quot; on each of the machines.  They're both running the last update of OSX 10.7 but their PATHs and LD_LIBRARY_PATHs might be slightly different.  I am able to run n-way jobs on a single machine.
<br>
<p>UPDATE: I wish I could reproduce the error, because now it's gone and I can run the same program from each machine in the hostfile.  I would still be very interested to know what kind of MPI situations are likely to cause these kinds of seg faults&#133;.
<br>
<p>-Paul
<br>
<p>On Feb 11, 2013, at 8:27 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Can you provide any more detail?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your report looks weird - you said its a simple c++ hello world, but the executable you show is &quot;pi&quot;, which is typically a simple C example program. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you using the same version of open MPI on all nodes?  Are you able to run n way jobs on single nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 9, 2013, at 2:03 PM, &quot;Paul Gribelyuk&quot; &lt;paul.quant_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am getting the following stacktrace when running a simple hello world MPI C++ program on 2 machines:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mini:mpi_cw paul$ mpirun --prefix /usr/local/Cellar/open-mpi/1.6.3 --hostfile hosts_home -np 2 ./pi 1000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank and name: 0 aka mini.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [home-mini:12175] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [home-mini:12175] Signal: Segmentation fault: 11 (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [home-mini:12175] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [home-mini:12175] Failing at address: 0x1042e0000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [home-mini:12175] [ 0] 2   libsystem_c.dylib                   0x00007fff94050cfa _sigtramp + 26
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [home-mini:12175] [ 1] 3   mca_btl_tcp.so                      0x000000010397092c best_addr + 2620
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [home-mini:12175] [ 2] 4   pi                                  0x0000000103649d24 start + 52
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [home-mini:12175] [ 3] 5   ???                                 0x0000000000000002 0x0 + 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [home-mini:12175] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank: 0 sum: 1.85459
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 12175 on node home-mini.local exited on signal 11 (Segmentation fault: 11).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get a similar result even when I don't use --prefix since the .bashrc file on the remote machine is correctly pointing to PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help with this seg fault is greatly appreciated.  Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="21383.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21381.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21363.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: an error when running MPI on 2 machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21385.php">Jeff Squyres (jsquyres): "Re: [OMPI users] an error when running MPI on 2 machines"</a>
<li><strong>Reply:</strong> <a href="21385.php">Jeff Squyres (jsquyres): "Re: [OMPI users] an error when running MPI on 2 machines"</a>
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
