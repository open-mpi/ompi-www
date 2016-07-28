<?
$subject_val = "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 12:30:45 2012" -->
<!-- isoreceived="20120210173045" -->
<!-- sent="Fri, 10 Feb 2012 10:30:35 -0700" -->
<!-- isosent="20120210173035" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add &amp;quot;virbr0&amp;quot; to [btl|oob]_tcp_if_exclude?" -->
<!-- id="E21DBDAF-F093-49AF-A3DD-ED6448A1FCA5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="25A160E6-CFAF-48B3-87E8-BDCF91CC5E30_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-10 12:30:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10382.php">TERRY DONTJE: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Previous message:</strong> <a href="10380.php">Jeff Squyres: "[OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>In reply to:</strong> <a href="10380.php">Jeff Squyres: "[OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10382.php">TERRY DONTJE: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2012, at 9:50 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; This is an open question to OMPI developers...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like RHEL (and maybe others?) adds the &quot;virbr0&quot; IP interface when Xen is activated.  This IP interface is only used to communicate with the local Xen instance(s); it is not used to communicate over the real network.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In a case that I saw, the interface is created, set to &quot;up&quot;, and is given an IP address in the 192.168.1.x range.  This was done by default -- all the user had done was either say &quot;yes, I want Xen enabled&quot;, or he didn't say he wanted it *disabled* (I'm not sure which).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This causes a problem if you have Xen enabled on multiple machines in an OMPI job.  OMPI will see the 192.168.1.x address and see that it's &quot;up&quot;, so it'll add it to the eligible subnets that can be used.  When OMPI sees that its peer processes also have 192.168.1.x, it'll try to use that network for OOB/BTL traffic -- which will fail, because these are local-only interfaces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should we add &quot;virbr0&quot; to the default value for [btl|oob]_tcp_if_exclude?  
</span><br>
<p>How generic is that name? I've looked and can't find a way to detect a local-only interface, though you might be able to do it via ARP. Looking for a name, though, is pretty hit/miss.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or is there another way to detect that an interface is local-only and should not be used for OOB/BTL communication?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See this post on the user's list:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/lists/users/2012/02/18432.php">http://www.open-mpi.org/community/lists/users/2012/02/18432.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="10382.php">TERRY DONTJE: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Previous message:</strong> <a href="10380.php">Jeff Squyres: "[OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>In reply to:</strong> <a href="10380.php">Jeff Squyres: "[OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10382.php">TERRY DONTJE: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
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
