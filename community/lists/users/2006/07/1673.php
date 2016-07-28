<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 18:27:12 2006" -->
<!-- isoreceived="20060720222712" -->
<!-- sent="Thu, 20 Jul 2006 18:26:57 -0400" -->
<!-- isosent="20060720222657" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BTL devices" -->
<!-- id="C0E57B71.B1AF%jsquyres_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7D5C1BFE-A814-464C-9EDA-E81CE457276C_at_ieee.org" -->
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
<strong>Date:</strong> 2006-07-20 18:26:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1674.php">Jeff Squyres: "Re: [OMPI users] What Really Happens During OpenMPI MPI_INIT?"</a>
<li><strong>Previous message:</strong> <a href="1672.php">Jeff Squyres: "Re: [OMPI users] MPI_Finalize runtime error"</a>
<li><strong>In reply to:</strong> <a href="1620.php">Michael Kluskens: "[OMPI users] BTL devices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1477.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fw: OpenMPI version 1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/14/06 10:40 AM, &quot;Michael Kluskens&quot; &lt;mkluskens_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've looked through the documentation but I haven't found the
</span><br>
<span class="quotelev1">&gt; discussion about what each BTL device is, for example, I have:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA btl: self (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<p>This is the &quot;loopback&quot; Open MPI device.  It is used exclusively for sending
<br>
and receiving from one process to the same process.  I.e., message passing
<br>
is effected by memcpy's in the same process -- no network is involved (not
<br>
even shared memory, because it's within a single process).
<br>
<p>We do this not for optimization, but rather for software engineering reasons
<br>
-- by having a &quot;self&quot; BTL, all the other BTLs can assume that they never
<br>
have to handle the special case of &quot;sending/receiving to self&quot;.
<br>
<p><span class="quotelev1">&gt; MCA btl: sm (MCA v1.0, API v1.0, Component v1.2)
</span><br>
<p>This is shared memory.  It is used to communicate between processes on the
<br>
same node.
<br>
<p><span class="quotelev1">&gt; MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<p>I think this one is pretty obvious.  ;-)
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; I found a PDF presentation that describes a few:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#128; tcp - TCP/IP
</span><br>
<span class="quotelev1">&gt; &#128; openib &#173; Infiniband OpenIB Stack
</span><br>
<span class="quotelev1">&gt; &#128; gm/mx- Myrinet GM/MX
</span><br>
<span class="quotelev1">&gt; &#128; mvapi - Infiniband Mellanox Verbs
</span><br>
<span class="quotelev1">&gt; &#128; sm - Shared Memory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there any others I may see when interacting with other people's
</span><br>
<span class="quotelev1">&gt; computers?
</span><br>
<p>These are the main ones for now.  There may be more in the future.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; I assume that if a machine has Myrinet and I don't see MCA btl: gm or
</span><br>
<span class="quotelev1">&gt; MCA btl: mx then I have to explain the problem to the sysadm's.
</span><br>
<p>Correct.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; The second question is should I see both gm &amp; mx, or only one or the
</span><br>
<span class="quotelev1">&gt; other.
</span><br>
<p>Probably just one or the other; I *believe* that you cannot have both
<br>
installed on the same node.  That being said, you can have the *support
<br>
libraries* for both installed on the same node and therefore Open MPI can
<br>
build support for it and show that those btl's exist in the output of
<br>
ompi_info.  But only one will *run* at a time.
<br>
<p>Sorry for the delay on the answer -- hope this helps!
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1674.php">Jeff Squyres: "Re: [OMPI users] What Really Happens During OpenMPI MPI_INIT?"</a>
<li><strong>Previous message:</strong> <a href="1672.php">Jeff Squyres: "Re: [OMPI users] MPI_Finalize runtime error"</a>
<li><strong>In reply to:</strong> <a href="1620.php">Michael Kluskens: "[OMPI users] BTL devices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1477.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fw: OpenMPI version 1.1"</a>
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
