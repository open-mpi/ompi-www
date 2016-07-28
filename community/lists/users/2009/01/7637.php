<?
$subject_val = "Re: [OMPI users] mpirun hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 19:19:36 2009" -->
<!-- isoreceived="20090106001936" -->
<!-- sent="Mon, 5 Jan 2009 19:19:30 -0500" -->
<!-- isosent="20090106001930" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs" -->
<!-- id="C6C068C2-D645-4FF5-98AF-A24E7C01475C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="492f5c190901051401u4249a7cfq8c302fa1dcd4c44_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hangs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 19:19:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7638.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7636.php">Terry Frankcombe: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>In reply to:</strong> <a href="7635.php">Maciej Kazulak: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7644.php">Ralph Castain: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="7644.php">Ralph Castain: "Re: [OMPI users] mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 5, 2009, at 5:01 PM, Maciej Kazulak wrote:
<br>
<p><span class="quotelev1">&gt; Interesting though. I thought in such a simple scenario shared  
</span><br>
<span class="quotelev1">&gt; memory would be used for IPC (or whatever's fastest) . But nope.  
</span><br>
<span class="quotelev1">&gt; Even with one process still it wants to use TCP/IP to communicate  
</span><br>
<span class="quotelev1">&gt; between mpirun and orted.
</span><br>
<p>Correct -- we only have TCP enabled for MPI process &lt;--&gt; orted  
<br>
communication.  There are several reasons why; the simplest is that  
<br>
this is our &quot;out of band&quot; channel and it is only used to setup and  
<br>
tear down the job.  As such, we don't care that it's a little slower  
<br>
than other possible channels (such as sm).  MPI traffic will use  
<br>
shmem, OpenFabrics-based networks, Myrinet, ...etc.  But not MPI  
<br>
process &lt;--&gt; orted communication.
<br>
<p><span class="quotelev1">&gt; What's even more surprising to me it won't use loopback for that.  
</span><br>
<span class="quotelev1">&gt; Hence my maybe a little bit over-restrictive iptables rules were the  
</span><br>
<span class="quotelev1">&gt; problem. I allowed traffic from 127.0.0.1 to 127.0.0.1 on lo but not  
</span><br>
<span class="quotelev1">&gt; from &lt;eth0_addr&gt; to &lt;eth0_addr&gt; on eth0 and both processes ended up  
</span><br>
<span class="quotelev1">&gt; waiting for IO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I somehow configure it to use something other than TCP/IP here?  
</span><br>
<span class="quotelev1">&gt; Or at least switch it to loopback?
</span><br>
<p>I don't remember how it works in the v1.2 series offhand; I think it's  
<br>
different in the v1.3 series (where all MPI processes *only* talk to  
<br>
the local orted, vs. MPI processes making direct TCP connections back  
<br>
to mpirun and any other MPI process with which it needs to bootstrap  
<br>
other communication channels).  I'm *guessing* that the MPI process &lt;-- 
<br>
<span class="quotelev1"> &gt; orted communication either uses a named unix socket or TCP  
</span><br>
loopback.  Ralph -- can you explain the details?
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
<li><strong>Next message:</strong> <a href="7638.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7636.php">Terry Frankcombe: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>In reply to:</strong> <a href="7635.php">Maciej Kazulak: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7644.php">Ralph Castain: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="7644.php">Ralph Castain: "Re: [OMPI users] mpirun hangs"</a>
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
