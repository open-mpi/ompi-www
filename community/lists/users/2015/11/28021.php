<?
$subject_val = "Re: [OMPI users] Failure detection";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  7 11:22:34 2015" -->
<!-- isoreceived="20151107162234" -->
<!-- sent="Sat, 7 Nov 2015 08:22:28 -0800" -->
<!-- isosent="20151107162228" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Failure detection" -->
<!-- id="D6046B70-9265-4F2D-9424-3F6BA3554D1E_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="563E0D8B.9070500_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Failure detection<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-07 11:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28022.php">Cristian Camilo Ruiz Sanabria: "Re: [OMPI users] Failure detection"</a>
<li><strong>Previous message:</strong> <a href="28020.php">Cristian RUIZ: "[OMPI users] Failure detection"</a>
<li><strong>In reply to:</strong> <a href="28020.php">Cristian RUIZ: "[OMPI users] Failure detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28022.php">Cristian Camilo Ruiz Sanabria: "Re: [OMPI users] Failure detection"</a>
<li><strong>Reply:</strong> <a href="28022.php">Cristian Camilo Ruiz Sanabria: "Re: [OMPI users] Failure detection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, that certainly isn&#226;&#128;&#153;t the normal behavior. I suspect it has to do with the nature of the VM TCP connection, though there is something very strange about your output. The BTL message indicates that an MPI job is already running. Yet your subsequent ORTE error message indicates we are still trying to start the daemons, which means we can&#226;&#128;&#153;t have started the MPI job.
<br>
<p>So something is clearly confused.
<br>
<p><p><span class="quotelev1">&gt; On Nov 7, 2015, at 6:41 AM, Cristian RUIZ &lt;cristian.ruiz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was studying how OpenMPI reacts to failures. I have a virtual infrastructure where failures can be emulated by turning off a given VM.
</span><br>
<span class="quotelev1">&gt; Depending on the way the VM is turned off the 'mpirun' will be notified,
</span><br>
<span class="quotelev1">&gt; either because it receives a signal or because  some timeout is reached.
</span><br>
<span class="quotelev1">&gt; In both cases failures are detected after some minutes. I did some test
</span><br>
<span class="quotelev1">&gt; with the NAS benchmarks and I got the following output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node-5][[12114,1],5][btl_tcp_frag.c:237:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; [node-4][[12114,1],4][btl_tcp_frag.c:237:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, after some minutes I got another message like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;  one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;  settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;  Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;  Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev1">&gt;  (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However the 'mpirun' does not terminate (after a least 30 minutes). The execution is blocked even though a failure is detected. Is this a normal behavior of &quot;mpirun&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI version:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_node-0:~# mpirun --version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.8.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I appreciate your help
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28020.php">http://www.open-mpi.org/community/lists/users/2015/11/28020.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28022.php">Cristian Camilo Ruiz Sanabria: "Re: [OMPI users] Failure detection"</a>
<li><strong>Previous message:</strong> <a href="28020.php">Cristian RUIZ: "[OMPI users] Failure detection"</a>
<li><strong>In reply to:</strong> <a href="28020.php">Cristian RUIZ: "[OMPI users] Failure detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28022.php">Cristian Camilo Ruiz Sanabria: "Re: [OMPI users] Failure detection"</a>
<li><strong>Reply:</strong> <a href="28022.php">Cristian Camilo Ruiz Sanabria: "Re: [OMPI users] Failure detection"</a>
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
