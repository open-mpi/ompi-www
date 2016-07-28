<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 09:37:41 2008" -->
<!-- isoreceived="20080130143741" -->
<!-- sent="Wed, 30 Jan 2008 09:37:05 -0500" -->
<!-- isosent="20080130143705" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307" -->
<!-- id="5C3F9869-6746-4307-8781-5BDA59EB5D12_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220801300620x276cb674xda7517b8c1030ba_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 09:37:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3091.php">Bogdan Costescu: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3089.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3088.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3092.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3092.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is one possible solution to have Open MPI mark in the packet where the  
<br>
incoming connection is coming from?
<br>
<p>On Jan 30, 2008, at 9:20 AM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 30, 2008 3:17 AM, Adrian Knoth &lt;adi_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev2">&gt;&gt; As mentioned earlier: it's very common to have multiple addresses per
</span><br>
<span class="quotelev2">&gt;&gt; interface, and it's the kernel who assigns the source address, so
</span><br>
<span class="quotelev2">&gt;&gt; there's nothing one could say about an incoming connection. Only  
</span><br>
<span class="quotelev2">&gt;&gt; that it
</span><br>
<span class="quotelev2">&gt;&gt; could be any of all exported addresses. Any.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is only partially correct.  Yes, by default the Linux kernel will
</span><br>
<span class="quotelev1">&gt; fill in the IP header with any of the IP addresses associated with
</span><br>
<span class="quotelev1">&gt; the machine, regardless of which NIC the packet will be sent on.
</span><br>
<span class="quotelev1">&gt; It was a never ending debate on the Linux Kernel Mailing list as to
</span><br>
<span class="quotelev1">&gt; what was the right way to do things... are IP addresses &quot;owned&quot; by
</span><br>
<span class="quotelev1">&gt; the machine, or are they &quot;owned&quot; by the NIC?  The kernel defaults
</span><br>
<span class="quotelev1">&gt; to the former definition (which is contrary to pretty much every
</span><br>
<span class="quotelev1">&gt; other OS on the planet... but the relevant RFCs left both  
</span><br>
<span class="quotelev1">&gt; interpretations
</span><br>
<span class="quotelev1">&gt; open).  Anyway, there are ways to configure the networking stack of
</span><br>
<span class="quotelev1">&gt; the Linux kernel to get the other behavior, so that a packet will be
</span><br>
<span class="quotelev1">&gt; guaranteed to have one of the IP addresses associated with the NIC
</span><br>
<span class="quotelev1">&gt; that it uses for egress.
</span><br>
<span class="quotelev1">&gt; See Documentation/networking/ip-sysctl.txt in your Linux Kernel  
</span><br>
<span class="quotelev1">&gt; sources
</span><br>
<span class="quotelev1">&gt; for a description of these relevant options:
</span><br>
<span class="quotelev1">&gt;  arp_filter, arp_announce, arp_ignore
</span><br>
<span class="quotelev1">&gt; which are accessed on a live system here:
</span><br>
<span class="quotelev1">&gt;  /proc/sys/net/ipv4/conf/all/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess if I put in the time, I could create a FAQ entry about it,
</span><br>
<span class="quotelev1">&gt; and what values to use... though I am not familiar with any
</span><br>
<span class="quotelev1">&gt; equivalent IPv6 settings (or if any exist).
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3091.php">Bogdan Costescu: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3089.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3088.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3092.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3092.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
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
