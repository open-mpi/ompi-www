<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 24 21:27:48 2005" -->
<!-- isoreceived="20050825022748" -->
<!-- sent="Wed, 24 Aug 2005 21:27:46 -0500" -->
<!-- isosent="20050825022746" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="Re:  processor affinity" -->
<!-- id="20050825022746.GI1685_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ec5f979974089881fd1cf60de9597546_at_open-mpi.org" -->
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
<strong>From:</strong> Troy Benjegerdes (<em>hozer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-24 21:27:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0224.php">Timothy S. Woodall: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0222.php">Troy Benjegerdes: "OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0158.php">Jeff Squyres: "processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0226.php">Jeff Squyres: "Re:  processor affinity"</a>
<li><strong>Reply:</strong> <a href="0226.php">Jeff Squyres: "Re:  processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Aug 16, 2005 at 12:25:32PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Processor affinity is now implemented.  You must ask for it via the MCA 
</span><br>
<span class="quotelev1">&gt; param &quot;mpi_paffinity_alone&quot;.  If this parameter is set to a nonzero 
</span><br>
<span class="quotelev1">&gt; value, OMPI will assume that its job is alone on the nodes that it is 
</span><br>
<span class="quotelev1">&gt; running on, and, if you have not oversubscribed the node, will bind MPI 
</span><br>
<span class="quotelev1">&gt; processes to processors, starting with processor ID 0 (i.e., 
</span><br>
<span class="quotelev1">&gt; effectively bindings MPI processes to the processor number equivalent 
</span><br>
<span class="quotelev1">&gt; to their relative VPID on that node).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know how this works out for everyone; thanks.
</span><br>
<p>Any thoughts on how to support NUMA with something like this? On the
<br>
dual opteron w/DDR IB systems I've got, I'm seeing a big perfomance
<br>
difference that primarily depends on which node the memory is on.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0224.php">Timothy S. Woodall: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0222.php">Troy Benjegerdes: "OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0158.php">Jeff Squyres: "processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0226.php">Jeff Squyres: "Re:  processor affinity"</a>
<li><strong>Reply:</strong> <a href="0226.php">Jeff Squyres: "Re:  processor affinity"</a>
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
