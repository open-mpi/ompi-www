<?
$subject_val = "Re: [OMPI users] Failure detection";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  7 16:52:06 2015" -->
<!-- isoreceived="20151107215206" -->
<!-- sent="Sat, 7 Nov 2015 22:52:02 +0100 (CET)" -->
<!-- isosent="20151107215202" -->
<!-- name="Cristian Camilo Ruiz Sanabria" -->
<!-- email="cristian.ruiz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Failure detection" -->
<!-- id="62360473.42038208.1446933122041.JavaMail.zimbra_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="D6046B70-9265-4F2D-9424-3F6BA3554D1E_at_open-mpi.org" -->
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
<strong>From:</strong> Cristian Camilo Ruiz Sanabria (<em>cristian.ruiz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-07 16:52:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28023.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-650-gb0365f9"</a>
<li><strong>Previous message:</strong> <a href="28021.php">Ralph Castain: "Re: [OMPI users] Failure detection"</a>
<li><strong>In reply to:</strong> <a href="28021.php">Ralph Castain: "Re: [OMPI users] Failure detection"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for answering. I tested again, this time using a real cluster where I have the possibility of rebooting the machines at will. I run a test using 32 machines running a MPI process per machine and during the execution I rebooted one of the machines and I found the same behavior: OpenMPI detects the failure but it blocks and the process has to be killed manually. This is the output:
<br>
<p>root_at_graphene-30:~# mpirun --mca btl self,sm,tcp --machinefile machine_file cg.B.32 
<br>
<p>&nbsp;NAS Parallel Benchmarks 3.3 -- CG Benchmark
<br>
<p>&nbsp;Size:      75000
<br>
&nbsp;Iterations:    75
<br>
&nbsp;Number of active processes:    32
<br>
&nbsp;Number of nonzeroes per row:       13
<br>
&nbsp;Eigenvalue shift: .600E+02
<br>
<p>&nbsp;&nbsp;&nbsp;iteration           ||r||                 zeta
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1       0.13257071746643E-12    59.9994751578754
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2       0.54021441387552E-15    21.7627846142538
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3       0.57508155930725E-15    22.2876617043225
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4       0.58907101679580E-15    22.5230738188352
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5       0.59342235842271E-15    22.6275390653890
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6       0.59736634325665E-15    22.6740259189537
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7       0.60192883908490E-15    22.6949056826254
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8       0.59984965235397E-15    22.7044023166871
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9       0.60134110898017E-15    22.7087834345616
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10       0.59805179779153E-15    22.7108351397172
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11       0.60025777990273E-15    22.7118107121337
<br>
[graphene-108.nancy.grid5000.fr][[1821,1],15][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
[graphene-58.nancy.grid5000.fr][[1821,1],9][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
[graphene-20.nancy.grid5000.fr][[1821,1],10][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
[graphene-20.nancy.grid5000.fr][[1821,1],10][btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect] connect() to 172.16.64.67 failed: Connection refused (111)
<br>
<p>I have the same behavior with versions: 1.8.5 that I compiled myself with the options by default and version 1.6.5 installed through Debian packages.
<br>
<p><p>----- Mail original -----
<br>
<span class="quotelev1">&gt; De: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#195;&#128;: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Envoy&#195;&#169;: Samedi 7 Novembre 2015 17:22:28
</span><br>
<span class="quotelev1">&gt; Objet: Re: [OMPI users] Failure detection
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, that certainly isn&#226;&#128;&#153;t the normal behavior. I suspect it has to do with the
</span><br>
<span class="quotelev1">&gt; nature of the VM TCP connection, though there is something very strange
</span><br>
<span class="quotelev1">&gt; about your output. The BTL message indicates that an MPI job is already
</span><br>
<span class="quotelev1">&gt; running. Yet your subsequent ORTE error message indicates we are still
</span><br>
<span class="quotelev1">&gt; trying to start the daemons, which means we can&#226;&#128;&#153;t have started the MPI job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So something is clearly confused.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 7, 2015, at 6:41 AM, Cristian RUIZ &lt;cristian.ruiz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I was studying how OpenMPI reacts to failures. I have a virtual
</span><br>
<span class="quotelev2">&gt; &gt; infrastructure where failures can be emulated by turning off a given VM.
</span><br>
<span class="quotelev2">&gt; &gt; Depending on the way the VM is turned off the 'mpirun' will be notified,
</span><br>
<span class="quotelev2">&gt; &gt; either because it receives a signal or because  some timeout is reached.
</span><br>
<span class="quotelev2">&gt; &gt; In both cases failures are detected after some minutes. I did some test
</span><br>
<span class="quotelev2">&gt; &gt; with the NAS benchmarks and I got the following output:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [node-5][[12114,1],5][btl_tcp_frag.c:237:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)
</span><br>
<span class="quotelev2">&gt; &gt; [node-4][[12114,1],4][btl_tcp_frag.c:237:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Then, after some minutes I got another message like this:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev2">&gt; &gt; This usually is caused by:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev2">&gt; &gt;  one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt;  settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev2">&gt; &gt;  Please verify your allocation and authorities.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; * the inability to write startup files into /tmp
</span><br>
<span class="quotelev2">&gt; &gt; (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev2">&gt; &gt;  Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev2">&gt; &gt;  (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; However the 'mpirun' does not terminate (after a least 30 minutes). The
</span><br>
<span class="quotelev2">&gt; &gt; execution is blocked even though a failure is detected. Is this a normal
</span><br>
<span class="quotelev2">&gt; &gt; behavior of &quot;mpirun&quot;?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI version:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; root_at_node-0:~# mpirun --version
</span><br>
<span class="quotelev2">&gt; &gt; mpirun (Open MPI) 1.8.5
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I appreciate your help
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28020.php">http://www.open-mpi.org/community/lists/users/2015/11/28020.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28021.php">http://www.open-mpi.org/community/lists/users/2015/11/28021.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28023.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-650-gb0365f9"</a>
<li><strong>Previous message:</strong> <a href="28021.php">Ralph Castain: "Re: [OMPI users] Failure detection"</a>
<li><strong>In reply to:</strong> <a href="28021.php">Ralph Castain: "Re: [OMPI users] Failure detection"</a>
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
