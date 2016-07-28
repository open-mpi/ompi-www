<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 10:27:37 2008" -->
<!-- isoreceived="20080402142737" -->
<!-- sent="Wed, 2 Apr 2008 17:27:27 +0300" -->
<!-- isosent="20080402142727" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="20080402142727.GD3614_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="168065BB-DC8B-4DD6-B3C0-EB50728F916D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: changes to modex<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 10:27:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3616.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3614.php">Jeff Squyres: "[OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3614.php">Jeff Squyres: "[OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3616.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3616.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 02, 2008 at 10:21:12AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;   * int ompi_modex_proc_send(...): send modex data that is specific to  
</span><br>
<span class="quotelev1">&gt; this process.  It is just about exactly the same as the current API  
</span><br>
<span class="quotelev1">&gt; call (ompi_modex_send).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
[skip]
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   * int ompi_modex_node_send(...): send modex data that is relevant  
</span><br>
<span class="quotelev1">&gt; for all processes in this job on this node.  It is intended that only  
</span><br>
<span class="quotelev1">&gt; one process in a job on a node will call this function.  If more than  
</span><br>
<span class="quotelev1">&gt; one process in a job on a node calls _node_send(), then only one will  
</span><br>
<span class="quotelev1">&gt; &quot;win&quot; (meaning that the data sent by the others will be overwritten).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
In the case of openib BTL what part of modex are you going to send using
<br>
proc_send() and what part using node_send()?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3616.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3614.php">Jeff Squyres: "[OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3614.php">Jeff Squyres: "[OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3616.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3616.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
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
