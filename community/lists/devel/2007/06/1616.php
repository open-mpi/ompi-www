<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 12:04:29 2007" -->
<!-- isoreceived="20070605160429" -->
<!-- sent="Tue, 5 Jun 2007 12:03:55 -0400" -->
<!-- isosent="20070605160355" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Multi-NIC support" -->
<!-- id="F009D5E6-DD78-4F79-A9B5-EDB117A1405E_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 12:03:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1617.php">Gleb Natapov: "Re: [OMPI devel] Multi-NIC support"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1615.php">Ralph Campbell: "[OMPI devel] request help debugging openmpi on openib/ipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1617.php">Gleb Natapov: "Re: [OMPI devel] Multi-NIC support"</a>
<li><strong>Reply:</strong> <a href="1617.php">Gleb Natapov: "Re: [OMPI devel] Multi-NIC support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The multi-NIC support was broken for a while. This patch correct it  
<br>
and take it back to the original performances (sum of bandwidths).  
<br>
The idea behind is to decide in the beginning how to split the  
<br>
message in fragments and their sizes and then only reschedule on the  
<br>
BTLs that complete a fragment. So Instead of using a round-robin over  
<br>
the BTL when we select a new BTL, we keep trace of the last BTL and  
<br>
schedule the new fragment over it.
<br>
<p>This way, we get good performance even when the relative difference  
<br>
between the characteristics of the BTLs are huge. This patch was on  
<br>
my modified versions for a while and it was used on one of our multi- 
<br>
NIC clusters by several users for few months.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><p>

<br><p>
<p><p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1616/multi-nic.patch">multi-nic.patch</a>
</ul>
<!-- attachment="multi-nic.patch" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1616/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1617.php">Gleb Natapov: "Re: [OMPI devel] Multi-NIC support"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1615.php">Ralph Campbell: "[OMPI devel] request help debugging openmpi on openib/ipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1617.php">Gleb Natapov: "Re: [OMPI devel] Multi-NIC support"</a>
<li><strong>Reply:</strong> <a href="1617.php">Gleb Natapov: "Re: [OMPI devel] Multi-NIC support"</a>
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
