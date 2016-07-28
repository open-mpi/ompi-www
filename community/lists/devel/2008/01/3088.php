<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 09:20:52 2008" -->
<!-- isoreceived="20080130142052" -->
<!-- sent="Wed, 30 Jan 2008 09:20:45 -0500" -->
<!-- isosent="20080130142045" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307" -->
<!-- id="ea86ce220801300620x276cb674xda7517b8c1030ba_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080130081703.GO11368_at_ltw.loris.tv" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 09:20:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3089.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3087.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3087.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3089.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3089.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3090.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On Jan 30, 2008 3:17 AM, Adrian Knoth &lt;adi_at_[hidden]&gt; wrote:
<br>
[snip]
<br>
<span class="quotelev1">&gt; As mentioned earlier: it's very common to have multiple addresses per
</span><br>
<span class="quotelev1">&gt; interface, and it's the kernel who assigns the source address, so
</span><br>
<span class="quotelev1">&gt; there's nothing one could say about an incoming connection. Only that it
</span><br>
<span class="quotelev1">&gt; could be any of all exported addresses. Any.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is only partially correct.  Yes, by default the Linux kernel will
<br>
fill in the IP header with any of the IP addresses associated with
<br>
the machine, regardless of which NIC the packet will be sent on.
<br>
It was a never ending debate on the Linux Kernel Mailing list as to
<br>
what was the right way to do things... are IP addresses &quot;owned&quot; by
<br>
the machine, or are they &quot;owned&quot; by the NIC?  The kernel defaults
<br>
to the former definition (which is contrary to pretty much every
<br>
other OS on the planet... but the relevant RFCs left both interpretations
<br>
open).  Anyway, there are ways to configure the networking stack of
<br>
the Linux kernel to get the other behavior, so that a packet will be
<br>
guaranteed to have one of the IP addresses associated with the NIC
<br>
that it uses for egress.
<br>
See Documentation/networking/ip-sysctl.txt in your Linux Kernel sources
<br>
for a description of these relevant options:
<br>
&nbsp;&nbsp;arp_filter, arp_announce, arp_ignore
<br>
which are accessed on a live system here:
<br>
&nbsp;&nbsp;/proc/sys/net/ipv4/conf/all/
<br>
<p>I guess if I put in the time, I could create a FAQ entry about it,
<br>
and what values to use... though I am not familiar with any
<br>
equivalent IPv6 settings (or if any exist).
<br>
<pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3089.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3087.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3087.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3089.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3089.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3090.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
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
