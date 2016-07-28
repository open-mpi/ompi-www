<?
$subject_val = "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 12:49:17 2015" -->
<!-- isoreceived="20150410164917" -->
<!-- sent="Fri, 10 Apr 2015 09:49:12 -0700" -->
<!-- isosent="20150410164912" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?" -->
<!-- id="1894B1D7-91DE-445E-8C88-3C6F7FB0DDAC_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="338BFB93-558B-42F1-8401-CD5A92BD917C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-10 12:49:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26669.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26667.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>In reply to:</strong> <a href="26667.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Had time to think about this a bit, and I believe you are absolutely correct about the ABI - I think we accidentally broke that guarantee in the 1.8 series with this version check. It shouldn&#226;&#128;&#153;t have been that strict. The revised algo is the correct one.
<br>
<p>Sorry for the error - just completely slipped by us. I&#226;&#128;&#153;ll ensure it is corrected going forward.
<br>
<p><p><span class="quotelev1">&gt; On Apr 10, 2015, at 7:59 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ve got an updated patch that adds the desired &#226;&#128;&#156;skip version check&#226;&#128;&#157; in the queue - should be committed in the next hour or so. Will be in the next nightly 1.8.5 tarball
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 10, 2015, at 7:26 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I realize there are still longer term issues, but we haven&#226;&#128;&#153;t resolved how we want to handle those yet. The ABI promise is solely at the MPI interface, not the internal ones. Defining version compatibility at that level is the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can add a suppression param, though it may not totally resolve the problem (e.g., the security protocol might change). Still, it may take things a little further.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 10, 2015, at 6:57 AM, Alan Wild &lt;alan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry I didn't get back to your right away.  1) I'm on the digest, 2) not real familiar with git and 3) just learned the hard way how to update the build to work with the latest versions of automake, autoconf, and libtool. :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, I believe the patch is an improvement.  Looking at it, I can tell you are now checking the first three characters.  I know the plan is to go to 1.9 and then 2.0, but if the numbering ever went more like the linux kernel into, say, a 2.10.0 release then your number of characters would be off.  Also, doesn't the current ABI promise allow 1.7 to be compatible with 1.8? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Personally, I'm fine with the solution, but I wanted to point out the potential shortcoming(s) should an issue arise again.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One other thought, maybe this is an case where the code should emit a warning (that could be suppressed with a command line parameter) when the versions aren't identical?   Certainly if the versions are outside the &quot;allowed&quot; range (whatever you determine that to be) should be an error and a refused connection, but rather than silently accepting mixed versions (which you indicated has caused problems in the past would be to warn of a potential issue (and users could then consciously suppress the warning if they are fine with it).  Food for thought.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, the patch didn't actually solve my particular problem (yet, anyway) because the vendor application statically linked 1.8.3 into their executable.  (I honestly didn't realize it when I made my previous post).  So the code on their side of the connection is still rejecting the connection:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [arwild1_at_hplcslsp2 ~]$ mpirun -n 6 -H localhost vendor_mpi_app
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hplcslsp2:23064] [[44148,1],0] tcp_peer_recv_connect_ack: received different version from [[44148,0],0]: 1.8.5rc2 instead of 1.8.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hplcslsp2:23065] [[44148,1],1] tcp_peer_recv_connect_ack: received different version from [[44148,0],0]: 1.8.5rc2 instead of 1.8.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hplcslsp2:23067] [[44148,1],2] tcp_peer_recv_connect_ack: received different version from [[44148,0],0]: 1.8.5rc2 instead of 1.8.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hplcslsp2:23069] [[44148,1],3] tcp_peer_recv_connect_ack: received different version from [[44148,0],0]: 1.8.5rc2 instead of 1.8.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hplcslsp2:23071] [[44148,1],4] tcp_peer_recv_connect_ack: received different version from [[44148,0],0]: 1.8.5rc2 instead of 1.8.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I believe if I can get the vendor to adopt this patch (or at least dynamically link) the patch should help alleviate the need to stay in lock-step version for version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Alan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26669.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26667.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>In reply to:</strong> <a href="26667.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
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
