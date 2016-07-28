<?
$subject_val = "[OMPI devel] new btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 11:11:04 2011" -->
<!-- isoreceived="20110614151104" -->
<!-- sent="Tue, 14 Jun 2011 11:10:54 -0400" -->
<!-- isosent="20110614151054" -->
<!-- name="Lawrence Stewart" -->
<!-- email="lstewart2_at_[hidden]" -->
<!-- subject="[OMPI devel] new btl" -->
<!-- id="195BBC16-18F2-4E13-A499-76877C7059DF_at_csail.mit.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] new btl<br>
<strong>From:</strong> Lawrence Stewart (<em>lstewart2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-14 11:10:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9369.php">Tim Mattox: "Re: [OMPI devel] new btl"</a>
<li><strong>Previous message:</strong> <a href="9367.php">Josh Hursey: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9369.php">Tim Mattox: "Re: [OMPI devel] new btl"</a>
<li><strong>Reply:</strong> <a href="9369.php">Tim Mattox: "Re: [OMPI devel] new btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I apologize for asking elementary questions, I have spent some time looking through the open-mpi.org site and the list archives, without notable success.
<br>
<p>I am contemplating writing a btl component in order to make OpenMPI work on the fos experimental message-based operating system under construction at csail.  The network semantics provided are reliable, in-order messages to process mailboxes, which may be shared.  This &lt;ought&gt; to be  straightforward, but
<br>
<p>* A search around open-mpi.org did not uncover a &quot;how to write a BTL component&quot; document.  Is there one?
<br>
<p>* A quick survey through .../ompi/mca/btl did not uncover an obvious &quot;example&quot;.  Is there one? Or which existing component is the simplest non-rdma one?  It might be that elan is the simplest,
<br>
based on source lines, but it is a little tricky to untangle the elan-parts from the open-mpi parts.
<br>
<p><p>The other thing I'll have to tackle is figuring out whether fos has enough of the os interfaces needed by the rest of open-mpi, and how to get the job launch machinery working.
<br>
<p>-Larry
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9369.php">Tim Mattox: "Re: [OMPI devel] new btl"</a>
<li><strong>Previous message:</strong> <a href="9367.php">Josh Hursey: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9369.php">Tim Mattox: "Re: [OMPI devel] new btl"</a>
<li><strong>Reply:</strong> <a href="9369.php">Tim Mattox: "Re: [OMPI devel] new btl"</a>
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
