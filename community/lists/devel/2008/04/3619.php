<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 11:13:20 2008" -->
<!-- isoreceived="20080402151320" -->
<!-- sent="Wed, 2 Apr 2008 18:13:11 +0300" -->
<!-- isosent="20080402151311" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="20080402151311.GA17939_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EE439991-E02B-4598-9AE8-BB92552076B5_at_cisco.com" -->
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
<strong>Date:</strong> 2008-04-02 11:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3620.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3618.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3616.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3625.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3625.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 02, 2008 at 10:35:03AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; If we use carto to limit hcas/ports are used on a given host on a per- 
</span><br>
<span class="quotelev1">&gt; proc basis, then we can include some proc_send data to say &quot;this proc  
</span><br>
<span class="quotelev1">&gt; only uses indexes X,Y,Z from the node data&quot;.  The indexes can be  
</span><br>
<span class="quotelev1">&gt; either uint8_ts, or maybe even a variable length bitmap.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
So you propose that each proc will send info (using node_send()) about every
<br>
hca/proc on a host even about those that are excluded from use by the proc
<br>
just in case? And then each proc will have to send additional info (using
<br>
proc_send() this time) to indicate what hcas/ports it is actually using?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3620.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3618.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3616.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3625.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3625.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
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
