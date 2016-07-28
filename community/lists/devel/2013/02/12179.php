<?
$subject_val = "Re: [OMPI devel] RFC: Remove pml/csum";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 12:06:59 2013" -->
<!-- isoreceived="20130228170659" -->
<!-- sent="Thu, 28 Feb 2013 09:06:50 -0800" -->
<!-- isosent="20130228170650" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove pml/csum" -->
<!-- id="8E8EBA18-EA55-4C5C-8D85-162C9107CEE7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="011701ce15d3$12121220$36363660$_at_wattsys.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove pml/csum<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-28 12:06:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Previous message:</strong> <a href="12178.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>In reply to:</strong> <a href="12177.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Remove pml/csum"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The component was required to resolve a problem on a specific cluster that was never observed elsewhere. That cluster is now being decommissioned, so no point in maintaining the support for it.
<br>
<p><p>On Feb 28, 2013, at 8:45 AM, &quot;Kenneth A. Lloyd&quot; &lt;kenneth.lloyd_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is that because end-to-end checksums don't match?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, February 27, 2013 10:54 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] RFC: Remove pml/csum
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What: svn rm the csum PML component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: We will no longer be maintaining this component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: Today @ 5:00 PM. This is a notification only for the component's
</span><br>
<span class="quotelev1">&gt; removal. If anyone cares about it let me know and I will spare it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there any other ob1 clones which should go away? I am finishing the
</span><br>
<span class="quotelev1">&gt; update to move from mca_base_param_* to mca_base_var_* and the less I have
</span><br>
<span class="quotelev1">&gt; to do the better.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; No virus found in this message.
</span><br>
<span class="quotelev1">&gt; Checked by AVG - www.avg.com
</span><br>
<span class="quotelev1">&gt; Version: 2013.0.2899 / Virus Database: 2641/6136 - Release Date: 02/27/13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Previous message:</strong> <a href="12178.php">Pavel Mezentsev: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>In reply to:</strong> <a href="12177.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Remove pml/csum"</a>
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
