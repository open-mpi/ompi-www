<?
$subject_val = "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 08:25:40 2014" -->
<!-- isoreceived="20140808122540" -->
<!-- sent="Fri, 8 Aug 2014 12:25:39 +0000" -->
<!-- isosent="20140808122539" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun 1.5.4  problems when request &amp;gt; 28 slots" -->
<!-- id="54415307-F366-4C71-A532-051EF4C56DD2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293E2D2FD_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 08:25:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24952.php">James Barron: "[OMPI users] Is it possible for independently started processes to connect via ompi-server? (1.8.1)"</a>
<li><strong>Previous message:</strong> <a href="24950.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>In reply to:</strong> <a href="24950.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 8, 2014, at 1:24 AM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Using the &quot;--mca btl tcp,self&quot; switch to mpirun solved all the issues (in addition to
</span><br>
<span class="quotelev1">&gt; the requirement to include the --mca btl_tcp_if_include eth0 switch). I believe
</span><br>
<span class="quotelev1">&gt; the &quot;--mca btl tcp,self&quot; switch limits inter-process communication within a node to using the TCP
</span><br>
<span class="quotelev1">&gt; loopback rather than shared memory.
</span><br>
<p>Correct.  You will not be using shared memory for MPI communication at all -- just TCP.
<br>
<p><span class="quotelev1">&gt; I should also point out that all of the nodes
</span><br>
<span class="quotelev1">&gt; on this cluster feature NUMA architecture.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will using the &quot;--mca btl tcp,self&quot; switch to mpirun result in any degraded performance
</span><br>
<span class="quotelev1">&gt; issues over using shared memory?
</span><br>
<p>Generally yes, but it depends on your application.  If your application does very little MPI communication, then the difference between shared memory and TCP is likely negligible.
<br>
<p>I'd strongly suggest two things:
<br>
<p>- Upgrade to at least Open MPI 1.6.5 (1.8.x would be better, if possible)
<br>
- Run your program through a memory-checking debugger such as Valgrind
<br>
<p>Seg faults like you initially described can be caused by errors in your MPI application itself -- the fact that using TCP only (and not shared memory) avoids the segvs does not mean that the issue is actually fixed; it may well mean that the error is still there, but is happening in a case that doesn't seem to cause enough damage to cause a segv.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24952.php">James Barron: "[OMPI users] Is it possible for independently started processes to connect via ompi-server? (1.8.1)"</a>
<li><strong>Previous message:</strong> <a href="24950.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>In reply to:</strong> <a href="24950.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
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
