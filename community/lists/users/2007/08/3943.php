<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 06:00:45 2007" -->
<!-- isoreceived="20070829100045" -->
<!-- sent="Wed, 29 Aug 2007 12:59:24 +0300" -->
<!-- isosent="20070829095924" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Basic problems with OpenMPI" -->
<!-- id="20070829095924.GZ25167_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="547db2260708290252q2ca97f2fs96c58fd0d5669f02_at_mail.gmail.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-29 05:59:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3944.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3942.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3942.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3944.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3944.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Aug 29, 2007 at 03:22:54PM +0530, Amit Kumar Saha wrote:
<br>
<span class="quotelev1">&gt; Hi Glib,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i am sending a sample trace of my program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; amit_at_ubuntu-desktop-1:~/mpi-exec$ mpirun --np 3 --hostfile
</span><br>
<span class="quotelev1">&gt; mpi-host-file HellMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; amit_at_debian-desktop-1's password: [ubuntu-desktop-1:28575] [0,0,0]
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [ubuntu-desktop-1:28575] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1164
</span><br>
<span class="quotelev1">&gt; [ubuntu-desktop-1:28575] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt; [ubuntu-desktop-1:28575] ERROR: A daemon on node ubuntu-desktop-2
</span><br>
<span class="quotelev1">&gt; failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [ubuntu-desktop-1:28575] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [ubuntu-desktop-1:28575] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [ubuntu-desktop-1:28575] ERROR: The daemon exited unexpectedly with status 255.
</span><br>
<span class="quotelev1">&gt; [ubuntu-desktop-1:28575] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [ubuntu-desktop-1:28575] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1196
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev1">&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is what I get when i run the program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However when i use &quot;--np 2 &quot; it works perfectly which of course means
</span><br>
<span class="quotelev1">&gt; that it is not a problem with &quot;debian-desktop-1&quot; as the above output
</span><br>
<span class="quotelev1">&gt; may show.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
The above output shows that you have a problem on host ubuntu-desktop-2.
<br>
Have you setup login without a password from ubuntu-desktop-1 to
<br>
ubuntu-desktop-2?
<br>
<p><p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3944.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3942.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3942.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3944.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3944.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
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
