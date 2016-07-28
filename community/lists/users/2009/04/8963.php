<?
$subject_val = "Re: [OMPI users] Debugging memory use of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 17:12:30 2009" -->
<!-- isoreceived="20090416211230" -->
<!-- sent="Thu, 16 Apr 2009 14:11:40 -0700" -->
<!-- isosent="20090416211140" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging memory use of Open MPI" -->
<!-- id="49E79F0C.8030907_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49E7957D.2070804_at_bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging memory use of Open MPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 17:11:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8964.php">Min Zhu: "Re: [OMPI users] An mpirun question"</a>
<li><strong>Previous message:</strong> <a href="8962.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8962.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8915.php">Ralph Castain: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What's the rest?  I said the shared-memory area is much smaller, but 
</span><br>
<span class="quotelev2">&gt;&gt; I was confused about which OMPI release I was using.  So, the 
</span><br>
<span class="quotelev2">&gt;&gt; shared-memory area was 128 Mbyte and it was getting mapped in once 
</span><br>
<span class="quotelev2">&gt;&gt; for each process, and so it was counted doubly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there are eight processes running on one host, does each process 
</span><br>
<span class="quotelev1">&gt; allocate one 128 Mbyte shared memory buffer and map in the other seven 
</span><br>
<span class="quotelev1">&gt; 128 Mbyte buffers allocated by the other processes?
</span><br>
<p>No.  The total size for one, single shared file is computed and the 
<br>
lowest rank on the node creates the file and mmaps it in.  Then, the 
<br>
other processes mmap the same file in.
<br>
<p>The code is set up to have different &quot;memory pools&quot;.  E.g., look at 
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm.c#sm_btl_first_time_init">https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm.c#sm_btl_first_time_init</a> 
<br>
.  So, conceivably you could have different buffers on the same node.  
<br>
But in practice it's just one buffer and, in any case, they're always 
<br>
created by the lowest rank.  E.g., 
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/common/sm/common_sm_mmap.c#143">https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/common/sm/common_sm_mmap.c#143</a> 
<br>
.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8964.php">Min Zhu: "Re: [OMPI users] An mpirun question"</a>
<li><strong>Previous message:</strong> <a href="8962.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8962.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8915.php">Ralph Castain: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
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
