<?
$subject_val = "Re: [OMPI devel] 1.8.3 and PSM errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 18:00:10 2014" -->
<!-- isoreceived="20141111230010" -->
<!-- sent="Tue, 11 Nov 2014 18:00:07 -0500" -->
<!-- isosent="20141111230007" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.3 and PSM errors" -->
<!-- id="07351519-86BE-4844-8022-C48A8BAF1C4C_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C442ED7D-D09F-4134-B852-DF6425B6207C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.3 and PSM errors<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 18:00:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16298.php">Howard Pritchard: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16296.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>In reply to:</strong> <a href="16294.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16298.php">Howard Pritchard: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Reply:</strong> <a href="16298.php">Howard Pritchard: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Nov 11, 2014, at 17:13 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More particularly, it looks like add_procs is being called a second time during MPI_Intercomm_create and being passed a process that is already connected (passed into the first add_procs call).  Is that right?  Should the MTL handle multiple add_procs calls with the same proc provided?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid I don't know much about the MTL interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George / Nathan?
</span><br>
<p>The Intercom_create is a funny function, as it can join together two groups of processes that didn&#226;&#128;&#153;t knew each other before. Thus, we have to be conservative in the upper level of the function and provide the entire list of [potentially] new processes to the PML/MTL to add to their known processes. In the case of the PML, this list is then forwarded down to the BTL, where only the new processes are added. Thus, the BTLs support adding multiple time the same process.
<br>
<p>I think a similar mechanism should be added to the MTL. If the process is already known, just mark it as reachable and be done.
<br>
<p>&nbsp;&nbsp;George.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16298.php">Howard Pritchard: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16296.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>In reply to:</strong> <a href="16294.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16298.php">Howard Pritchard: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Reply:</strong> <a href="16298.php">Howard Pritchard: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
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
