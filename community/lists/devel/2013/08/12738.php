<?
$subject_val = "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 12:46:43 2013" -->
<!-- isoreceived="20130819164643" -->
<!-- sent="Mon, 19 Aug 2013 09:46:39 -0700" -->
<!-- isosent="20130819164639" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC" -->
<!-- id="7E9E4787-5E69-4E84-B6A0-F7A3681E7ED3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="009c01ce9cec$60bd32b0$22379810$_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-19 12:46:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12739.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12737.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi"</a>
<li><strong>In reply to:</strong> <a href="12736.php">Steve Wise: "[OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12739.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know that some of the connect codes moved to the new ompi/mca/common/ofacm area, and that *might* have come over to the 1.7 branch. Not sure of the status of the selection code
<br>
<p><p>On Aug 19, 2013, at 7:57 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just tried to run openmpi-1.7.2 over chelsio's IWARP device, and it no longer works.  It appears
</span><br>
<span class="quotelev1">&gt; that 1.7.2 fails to use the RDMACM CPC.  I guess it is trying to use OOB, which is IB-specific.  If
</span><br>
<span class="quotelev1">&gt; I explicitly specify the RDMACM CPC via '--mca btl_openib_cpc_include rdmacm' then it works.  This
</span><br>
<span class="quotelev1">&gt; is a regression from 1.7.1, I think.  And affects all iWARP devices because iWARP requires the
</span><br>
<span class="quotelev1">&gt; RDMACM CPC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I opened 3726 to track this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/3726">https://svn.open-mpi.org/trac/ompi/ticket/3726</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas what introduced this regression?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Steve.
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
<li><strong>Next message:</strong> <a href="12739.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12737.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r29043 - in trunk: config ompi"</a>
<li><strong>In reply to:</strong> <a href="12736.php">Steve Wise: "[OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12739.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
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
