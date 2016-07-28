<?
$subject_val = "Re: [OMPI devel] RFC: IPv6 support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 10:04:08 2009" -->
<!-- isoreceived="20090917140408" -->
<!-- sent="Thu, 17 Sep 2009 08:03:59 -0600" -->
<!-- isosent="20090917140359" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: IPv6 support" -->
<!-- id="5183C330-ECA4-4307-A22D-3D7DB7184105_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3B1C6DF5-5453-41BF-82B8-DA6F562681DF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: IPv6 support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 10:03:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6847.php">Jeff Squyres: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="6845.php">Jeff Squyres: "Re: [OMPI devel] RFC: IPv6 support"</a>
<li><strong>In reply to:</strong> <a href="6845.php">Jeff Squyres: "Re: [OMPI devel] RFC: IPv6 support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6913.php">Ralph Castain: "[OMPI devel] RFC: IPv6 support ***REMINDER***"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 17, 2009, at 7:57 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 16, 2009, at 11:53 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: change the IPv6 configuration option to enable IPv6 if and only
</span><br>
<span class="quotelev2">&gt;&gt; if specifically requested
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At configure or run-time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I [marginally] prefer a run-time determination.   E.g., if we can  
</span><br>
<span class="quotelev1">&gt; test at run-time &quot;ipv6 wasn't specifically requested, so try to open  
</span><br>
<span class="quotelev1">&gt; an ipv6 socket, and if it fails, just silently ignore it and disable  
</span><br>
<span class="quotelev1">&gt; ipv6 support&quot; and &quot;ipv6 was specifically requested, so try to open  
</span><br>
<span class="quotelev1">&gt; an ipv6 socket; if it fails, error&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I'm not going to be the one coding this, so I'd also be happy  
</span><br>
<span class="quotelev1">&gt; with changing the configure-time option default.  I just thought I'd  
</span><br>
<span class="quotelev1">&gt; throw out that request...  :-)
</span><br>
<p>If we have a volunteer to code and maintain it, then I don't care.  
<br>
Unfortunately, we don't appear to have anyone interested in  
<br>
maintaining the overall ipv6 support, so my proposal is to turn it off  
<br>
at configure time.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li><strong>Next message:</strong> <a href="6847.php">Jeff Squyres: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="6845.php">Jeff Squyres: "Re: [OMPI devel] RFC: IPv6 support"</a>
<li><strong>In reply to:</strong> <a href="6845.php">Jeff Squyres: "Re: [OMPI devel] RFC: IPv6 support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6913.php">Ralph Castain: "[OMPI devel] RFC: IPv6 support ***REMINDER***"</a>
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
