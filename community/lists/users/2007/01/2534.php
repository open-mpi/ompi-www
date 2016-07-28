<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 24 11:04:55 2007" -->
<!-- isoreceived="20070124160455" -->
<!-- sent="Wed, 24 Jan 2007 18:04:36 +0200" -->
<!-- isosent="20070124160436" -->
<!-- name="Olli-Pekka Lehto" -->
<!-- email="oplehto_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nodes are oversubscribed in 1.1.1" -->
<!-- id="45B78394.4090201_at_csc.fi" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="45B7753D.4070504_at_Sun.COM" -->
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
<strong>From:</strong> Olli-Pekka Lehto (<em>oplehto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-24 11:04:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2535.php">Geoff Galitz: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2533.php">Tim Campbell: "Re: [OMPI users] rsh or ssh"</a>
<li><strong>In reply to:</strong> <a href="2530.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2535.php">Geoff Galitz: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pak Lui wrote:
<br>
<span class="quotelev1">&gt; Geoff Galitz wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On the following system:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;OpenMPI 1.1.1
</span><br>
<span class="quotelev2">&gt;&gt;SGE 6.0 (with tight integration)
</span><br>
<span class="quotelev2">&gt;&gt;Scientific Linux 4.3
</span><br>
<span class="quotelev2">&gt;&gt;Dual Dual-Core Opterons
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;MPI jobs are oversubscribing to the nodes.  No matter where jobs are  
</span><br>
<span class="quotelev2">&gt;&gt;launched by the scheduler, they always stack up on the first node  
</span><br>
<span class="quotelev2">&gt;&gt;(node00) and continue to stack even though the system load exceeds 6  
</span><br>
<span class="quotelev2">&gt;&gt;(on a 4 processor box).  Eeach node is defined as 4 slots with 4 max  
</span><br>
<span class="quotelev2">&gt;&gt;slots.  The MPI jobs launch via &quot;mpirun -np (some-number-of- 
</span><br>
<span class="quotelev2">&gt;&gt;processors)&quot; from within the scheduler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Geoff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think we first start having SGE support in 1.2, not in 1.1.1. Unless 
</span><br>
<span class="quotelev1">&gt; you did some modification on your own to include the gridengine ras/pls 
</span><br>
<span class="quotelev1">&gt; modules from v1.2, you probably are not using the SGE tight integration. 
</span><br>
<p><p>I've experimented a bit with backporting the 1.2 gridengine tight 
<br>
integration modules to 1.1* and it seems to work nicely.
<br>
<p>If you're feeling adventurous here are some unofficial packages and 
<br>
information related to this:
<br>
<p><a href="http://staff.csc.fi/~oplehto/openmpi-gridengine/">http://staff.csc.fi/~oplehto/openmpi-gridengine/</a>
<br>
<p>Olli-Pekka
<br>
<pre>
-- 
Olli-Pekka Lehto, Systems Specialist, Systems Services, CSC
PO Box 405 02101 Espoo, Finland; tel +358 9 457 2215, fax +358 9 4572302
CSC is the Finnish IT Center for Science, www.csc.fi,
e-mail: Olli-Pekka.Lehto_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2535.php">Geoff Galitz: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2533.php">Tim Campbell: "Re: [OMPI users] rsh or ssh"</a>
<li><strong>In reply to:</strong> <a href="2530.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2535.php">Geoff Galitz: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
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
