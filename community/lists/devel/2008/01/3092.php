<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 12:05:59 2008" -->
<!-- isoreceived="20080130170559" -->
<!-- sent="Wed, 30 Jan 2008 12:05:50 -0500" -->
<!-- isosent="20080130170550" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307" -->
<!-- id="C54E934B-B80A-4C6A-8436-D56C4613FB70_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5C3F9869-6746-4307-8781-5BDA59EB5D12_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 12:05:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3093.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3091.php">Bogdan Costescu: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3090.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3093.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3093.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is the real issue behind this whole discussion ? With one or  
<br>
multiple IP addresses by interface the connection step will work. Now  
<br>
I can see a benefit of having multiple socket over the same link (and  
<br>
it's already implemented in Open MPI), but I don't see the interest of  
<br>
using multiple IP in this case.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 30, 2008, at 9:37 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Is one possible solution to have Open MPI mark in the packet where the
</span><br>
<span class="quotelev1">&gt; incoming connection is coming from?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 30, 2008, at 9:20 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 30, 2008 3:17 AM, Adrian Knoth &lt;adi_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; [snip]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As mentioned earlier: it's very common to have multiple addresses  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; per
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface, and it's the kernel who assigns the source address, so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there's nothing one could say about an incoming connection. Only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could be any of all exported addresses. Any.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is only partially correct.  Yes, by default the Linux kernel  
</span><br>
<span class="quotelev2">&gt;&gt; will
</span><br>
<span class="quotelev2">&gt;&gt; fill in the IP header with any of the IP addresses associated with
</span><br>
<span class="quotelev2">&gt;&gt; the machine, regardless of which NIC the packet will be sent on.
</span><br>
<span class="quotelev2">&gt;&gt; It was a never ending debate on the Linux Kernel Mailing list as to
</span><br>
<span class="quotelev2">&gt;&gt; what was the right way to do things... are IP addresses &quot;owned&quot; by
</span><br>
<span class="quotelev2">&gt;&gt; the machine, or are they &quot;owned&quot; by the NIC?  The kernel defaults
</span><br>
<span class="quotelev2">&gt;&gt; to the former definition (which is contrary to pretty much every
</span><br>
<span class="quotelev2">&gt;&gt; other OS on the planet... but the relevant RFCs left both
</span><br>
<span class="quotelev2">&gt;&gt; interpretations
</span><br>
<span class="quotelev2">&gt;&gt; open).  Anyway, there are ways to configure the networking stack of
</span><br>
<span class="quotelev2">&gt;&gt; the Linux kernel to get the other behavior, so that a packet will be
</span><br>
<span class="quotelev2">&gt;&gt; guaranteed to have one of the IP addresses associated with the NIC
</span><br>
<span class="quotelev2">&gt;&gt; that it uses for egress.
</span><br>
<span class="quotelev2">&gt;&gt; See Documentation/networking/ip-sysctl.txt in your Linux Kernel
</span><br>
<span class="quotelev2">&gt;&gt; sources
</span><br>
<span class="quotelev2">&gt;&gt; for a description of these relevant options:
</span><br>
<span class="quotelev2">&gt;&gt; arp_filter, arp_announce, arp_ignore
</span><br>
<span class="quotelev2">&gt;&gt; which are accessed on a live system here:
</span><br>
<span class="quotelev2">&gt;&gt; /proc/sys/net/ipv4/conf/all/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess if I put in the time, I could create a FAQ entry about it,
</span><br>
<span class="quotelev2">&gt;&gt; and what values to use... though I am not familiar with any
</span><br>
<span class="quotelev2">&gt;&gt; equivalent IPv6 settings (or if any exist).
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3092/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3093.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3091.php">Bogdan Costescu: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3090.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3093.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3093.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
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
