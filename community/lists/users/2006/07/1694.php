<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 28 17:18:21 2006" -->
<!-- isoreceived="20060728211821" -->
<!-- sent="Fri, 28 Jul 2006 17:18:09 -0400" -->
<!-- isosent="20060728211809" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI running os SMP cluster" -->
<!-- id="C0EFF751.BC2D%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6130BFEC-B215-4E3C-AA92-14D69FB22EAE_at_ieee.org" -->
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
<strong>Date:</strong> 2006-07-28 17:18:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1695.php">Jeff Squyres: "Re: [OMPI users] Runtime Error"</a>
<li><strong>Previous message:</strong> <a href="1693.php">Jeff Squyres: "Re: [OMPI users] Error sending large number of small messages"</a>
<li><strong>In reply to:</strong> <a href="1682.php">Michael Kluskens: "Re: [OMPI users] Open-MPI running os SMP cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/26/06 5:55 PM, &quot;Michael Kluskens&quot; &lt;mklus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; How is the message passing of Open-MPI implemented when I have
</span><br>
<span class="quotelev2">&gt;&gt; say 4 nodes with 4 processors (SMP) each, nodes connected by a gigabit
</span><br>
<span class="quotelev2">&gt;&gt; ethernet ?... in other words, how does it manage SMP nodes when I
</span><br>
<span class="quotelev2">&gt;&gt; want to use all CPUs, but each with its own process. Does it take
</span><br>
<span class="quotelev2">&gt;&gt; any advantage of the SMP at each node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Someone can give you a more complete/correct answer but I'll give you
</span><br>
<span class="quotelev1">&gt; my understanding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All communication in OpenMPI is handled via the MCA module (term?)
</span><br>
<p>We call them &quot;components&quot; or &quot;plugins&quot;; a &quot;module&quot; is typically an instance
<br>
of those plugins (e.g., if you have 2 ethernet NICs with TCP interfaces,
<br>
you'll get 2 instances -- modules -- of the TCP BTL component).
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; self - process communicating with itself
</span><br>
<span class="quotelev1">&gt; sm - ... via shared memory to other processes
</span><br>
<span class="quotelev1">&gt; tcp - ... via tcp
</span><br>
<span class="quotelev1">&gt; openib - ... via Infiniband OpenIB stack
</span><br>
<span class="quotelev1">&gt; gm &amp; mx - ... via Myrinet GM/MX
</span><br>
<span class="quotelev1">&gt; mvapi - ... via Infiniband Mellanox Verbs
</span><br>
<p>All correct.
<br>
<p><span class="quotelev1">&gt; If you launch your process so that four processes are on a node then
</span><br>
<span class="quotelev1">&gt; those would use shared memory to communicate.
</span><br>
<p>Also correct.
<br>
<p>Just chiming in with verifications!  :-)
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
<li><strong>Next message:</strong> <a href="1695.php">Jeff Squyres: "Re: [OMPI users] Runtime Error"</a>
<li><strong>Previous message:</strong> <a href="1693.php">Jeff Squyres: "Re: [OMPI users] Error sending large number of small messages"</a>
<li><strong>In reply to:</strong> <a href="1682.php">Michael Kluskens: "Re: [OMPI users] Open-MPI running os SMP cluster"</a>
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
