<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  7 18:55:09 2011" -->
<!-- isoreceived="20111107235509" -->
<!-- sent="Mon, 7 Nov 2011 18:55:04 -0500" -->
<!-- isosent="20111107235504" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445" -->
<!-- id="BD0A1FED-460B-48EB-B322-4B2C0C31AB64_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADDAA1E.9768%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-07 18:55:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9926.php">George Bosilca: "[OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9924.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>In reply to:</strong> <a href="9923.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2011, at 17:34 , Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; I'm not sure why they called it vader, but vader is a fairly straight
</span><br>
<span class="quotelev1">&gt; forward shared memory BTL.  It differs from sm in two important ways: 1)
</span><br>
<span class="quotelev1">&gt; it uses the XPMEM driver instead of SysV for shared memory and 2) it uses
</span><br>
<span class="quotelev1">&gt; the the Nemesis queue structure from MPICH instead of ring buffers.  XPMEM
</span><br>
<span class="quotelev1">&gt; allows you to map large quantities of memory from other processes into
</span><br>
<span class="quotelev1">&gt; your memory space, so you can do single copy for long messages, and the
</span><br>
<span class="quotelev1">&gt; Nemesis queue seems to give better scaling on our larger SMPs.  The Vader
</span><br>
<span class="quotelev1">&gt; BTL does not require the 128 bit keys.
</span><br>
<p>Brian,
<br>
<p>Is there any data you can share to corroborate the scalability statement? No visible impact on the performance? 
<br>
<p>Nemesis way or ours was a hot topic for a long time ...
<br>
<p>&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9926.php">George Bosilca: "[OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9924.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>In reply to:</strong> <a href="9923.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
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
