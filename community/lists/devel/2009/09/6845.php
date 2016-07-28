<?
$subject_val = "Re: [OMPI devel] RFC: IPv6 support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 09:57:48 2009" -->
<!-- isoreceived="20090917135748" -->
<!-- sent="Thu, 17 Sep 2009 09:57:43 -0400" -->
<!-- isosent="20090917135743" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: IPv6 support" -->
<!-- id="3B1C6DF5-5453-41BF-82B8-DA6F562681DF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="235E0E3A-F91A-42F2-8FFA-C0FBAB0511B4_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 09:57:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6846.php">Ralph Castain: "Re: [OMPI devel] RFC: IPv6 support"</a>
<li><strong>Previous message:</strong> <a href="6844.php">Ralph Castain: "[OMPI devel] RFC: IPv6 support"</a>
<li><strong>In reply to:</strong> <a href="6844.php">Ralph Castain: "[OMPI devel] RFC: IPv6 support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6846.php">Ralph Castain: "Re: [OMPI devel] RFC: IPv6 support"</a>
<li><strong>Reply:</strong> <a href="6846.php">Ralph Castain: "Re: [OMPI devel] RFC: IPv6 support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 16, 2009, at 11:53 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: change the IPv6 configuration option to enable IPv6 if and only
</span><br>
<span class="quotelev1">&gt; if specifically requested
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>At configure or run-time?
<br>
<p>I [marginally] prefer a run-time determination.   E.g., if we can test  
<br>
at run-time &quot;ipv6 wasn't specifically requested, so try to open an  
<br>
ipv6 socket, and if it fails, just silently ignore it and disable ipv6  
<br>
support&quot; and &quot;ipv6 was specifically requested, so try to open an ipv6  
<br>
socket; if it fails, error&quot;.
<br>
<p>But I'm not going to be the one coding this, so I'd also be happy with  
<br>
changing the configure-time option default.  I just thought I'd throw  
<br>
out that request...  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6846.php">Ralph Castain: "Re: [OMPI devel] RFC: IPv6 support"</a>
<li><strong>Previous message:</strong> <a href="6844.php">Ralph Castain: "[OMPI devel] RFC: IPv6 support"</a>
<li><strong>In reply to:</strong> <a href="6844.php">Ralph Castain: "[OMPI devel] RFC: IPv6 support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6846.php">Ralph Castain: "Re: [OMPI devel] RFC: IPv6 support"</a>
<li><strong>Reply:</strong> <a href="6846.php">Ralph Castain: "Re: [OMPI devel] RFC: IPv6 support"</a>
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
