<?
$subject_val = "[OMPI devel] CMR one-sided changes?  (r21134)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 12:41:29 2009" -->
<!-- isoreceived="20090520164129" -->
<!-- sent="Wed, 20 May 2009 12:41:23 -0400" -->
<!-- isosent="20090520164123" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] CMR one-sided changes?  (r21134)" -->
<!-- id="215A613C-9ECE-4085-8F21-2B81E8DDC9F1_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] CMR one-sided changes?  (r21134)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-20 12:41:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6078.php">Jeff Squyres: "[OMPI devel] MTT: added long COMM_SPAWN test"</a>
<li><strong>Previous message:</strong> <a href="6076.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6080.php">Brian Barrett: "Re: [OMPI devel] CMR one-sided changes?  (r21134)"</a>
<li><strong>Reply:</strong> <a href="6080.php">Brian Barrett: "Re: [OMPI devel] CMR one-sided changes?  (r21134)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian: can we CMR over your OSD changes from 30 Apr (r21134)?
<br>
<p>I have noticed an enormous performance difference between the pt2pt  
<br>
and rdma osc components when running the IMB-EXT benchmark over IB:
<br>
<p>&nbsp;&nbsp;&nbsp;- pt2pt: 11+ minutes
<br>
&nbsp;&nbsp;&nbsp;- rdma: 43 seconds
<br>
<p>rdma is the default on the trunk, since r21134 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/21134">https://svn.open-mpi.org/trac/ompi/changeset/21134</a> 
<br>
).  pt2pt is still the default on v1.3.
<br>
<p>There's a conflict in ompi/mca/osc/rdma/osc_rdma_sync.c, so I don't  
<br>
quite know how to proceed...
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
<li><strong>Next message:</strong> <a href="6078.php">Jeff Squyres: "[OMPI devel] MTT: added long COMM_SPAWN test"</a>
<li><strong>Previous message:</strong> <a href="6076.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6080.php">Brian Barrett: "Re: [OMPI devel] CMR one-sided changes?  (r21134)"</a>
<li><strong>Reply:</strong> <a href="6080.php">Brian Barrett: "Re: [OMPI devel] CMR one-sided changes?  (r21134)"</a>
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
