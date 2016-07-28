<?
$subject_val = "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 0.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 06:30:15 2010" -->
<!-- isoreceived="20100428103015" -->
<!-- sent="Wed, 28 Apr 2010 06:29:38 -0400" -->
<!-- isosent="20100428102938" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 0." -->
<!-- id="4BD80E12.9060306_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="p2p67ee8d951004272347ua97757ddhf80d0202e59e76f0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 0.<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 06:29:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12834.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Previous message:</strong> <a href="12832.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>In reply to:</strong> <a href="12829.php">kishore kumar: "[OMPI users] MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 0."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12834.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does the &quot;NODE 0: no room for lattice&quot; message have any significance?  
<br>
Could it be that for whatever reason the application is running out of 
<br>
memory?
<br>
<p>--td
<br>
<p>kishore kumar wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am trying to run SPEC MPI 2007 workload on a quad-core machine. 
</span><br>
<span class="quotelev1">&gt; However getting this error message. I also tried to use hostfile 
</span><br>
<span class="quotelev1">&gt; option by specifying localhost slots=4, but still getting the 
</span><br>
<span class="quotelev1">&gt; following error. Please help me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $mpirun  --mca btl tcp,sm,self -np 4 su3imp_base.solaris
</span><br>
<span class="quotelev1">&gt; SU3 with improved KS action
</span><br>
<span class="quotelev1">&gt; Microcanonical simulation with refreshing
</span><br>
<span class="quotelev1">&gt; MIMD version 6
</span><br>
<span class="quotelev1">&gt; Machine =
</span><br>
<span class="quotelev1">&gt; R algorithm
</span><br>
<span class="quotelev1">&gt; type 0 for no prompts  or 1 for prompts
</span><br>
<span class="quotelev1">&gt; nflavors 2
</span><br>
<span class="quotelev1">&gt; nx 30
</span><br>
<span class="quotelev1">&gt; ny 30
</span><br>
<span class="quotelev1">&gt; nz 56
</span><br>
<span class="quotelev1">&gt; nt 84
</span><br>
<span class="quotelev1">&gt; iseed 1234
</span><br>
<span class="quotelev1">&gt; LAYOUT = Hypercubes, options = EVENFIRST,
</span><br>
<span class="quotelev1">&gt; NODE 0: no room for lattice
</span><br>
<span class="quotelev1">&gt; termination: Tue Apr 27 23:41:44 2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Termination: node 0, status = 1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 17239 on
</span><br>
<span class="quotelev1">&gt; node cache-aware exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Kishore Kumar Pusukuri
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cs.ucr.edu/~kishore">http://www.cs.ucr.edu/~kishore</a> &lt;<a href="http://www.cs.ucr.edu/%7Ekishore">http://www.cs.ucr.edu/%7Ekishore</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12833/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-12833/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12834.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Previous message:</strong> <a href="12832.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>In reply to:</strong> <a href="12829.php">kishore kumar: "[OMPI users] MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 0."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12834.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
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
