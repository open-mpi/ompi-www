<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar 24 08:30:52 2007" -->
<!-- isoreceived="20070324123052" -->
<!-- sent="Sat, 24 Mar 2007 08:30:09 -0400" -->
<!-- isosent="20070324123009" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Failure to launch on a remote node.  SSH problem?" -->
<!-- id="F599F62F-A8EB-499C-9CC3-751920F6BC93_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F686F95A98314D4AB5404238E779C94C85E2E3_at_miaa01-mail01.ad.gd-ais.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-24 08:30:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2912.php">Jeff Squyres: "Re: [OMPI users] install error"</a>
<li><strong>Previous message:</strong> <a href="2910.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>In reply to:</strong> <a href="2902.php">Walker, David T.: "[OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2914.php">David Burns: "Re: [OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 23, 2007, at 1:58 PM, Walker, David T. wrote:
<br>
<p><span class="quotelev1">&gt; I am presently trying to get OpenMPI up and running on a small cluster
</span><br>
<span class="quotelev1">&gt; of MacPros (dual dual-core Xeons) using TCP. Opne MPI was compiled  
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt; the intel Fortran Compiler (9.1) and gcc.  When I try to launch a  
</span><br>
<span class="quotelev1">&gt; job on
</span><br>
<span class="quotelev1">&gt; a remote node, orted starts on the remote node but then times out.   
</span><br>
<span class="quotelev1">&gt; I am
</span><br>
<span class="quotelev1">&gt; guessing that the problem is SSH related.  Any thoughts?
</span><br>
<p>When I hear scenarios like this, the first thought that comes into my  
<br>
head is: firewall issues.  Open MPI requires the ability to open  
<br>
random TCP ports from all hosts used in the MPI job.  Have you  
<br>
disabled the firewalls between all machines, or specifically allowed  
<br>
those machines to open random TCP sockets between each other?
<br>
<p><span class="quotelev1">&gt; node01 1246% mpirun --debug-daemons -hostfile machinefile -np 5
</span><br>
<span class="quotelev1">&gt; Hello_World_Fortran
</span><br>
<span class="quotelev1">&gt;  Calling MPI_INIT
</span><br>
<span class="quotelev1">&gt;  Calling MPI_INIT
</span><br>
<span class="quotelev1">&gt;  Calling MPI_INIT
</span><br>
<span class="quotelev1">&gt;  Calling MPI_INIT
</span><br>
<span class="quotelev1">&gt; [node03:02422] [0,0,1]-[0,0,0] mca_oob_tcp_peer_send_blocking: send()
</span><br>
<span class="quotelev1">&gt; failed with errno=57
</span><br>
<p>This error message supports the above theory (that there is a  
<br>
firewall / port blocking software package in the way) -- the remote  
<br>
daemon tried to open a socket back to mpirun and failed.
<br>
<p><span class="quotelev1">&gt; [node01.local:21427] ERROR: A daemon on node node03 failed to start as
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<p>This is [effectively] mpirun reporting that it timed out while  
<br>
waiting for the remote orted to call back and say &quot;I'm here!&quot;.
<br>
<p>Check your firewall / port blocking settings and see if disabling /  
<br>
selectively allowing trust between your machines solves the issue.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2912.php">Jeff Squyres: "Re: [OMPI users] install error"</a>
<li><strong>Previous message:</strong> <a href="2910.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>In reply to:</strong> <a href="2902.php">Walker, David T.: "[OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2914.php">David Burns: "Re: [OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
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
