<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 15:04:32 2010" -->
<!-- isoreceived="20100303200432" -->
<!-- sent="Wed, 3 Mar 2010 15:04:27 -0500" -->
<!-- isosent="20100303200427" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762" -->
<!-- id="7734D287-FF25-4637-ACF6-597D255F125D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7CB13E9D-BC00-4197-8742-3D025C8F6253_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 15:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7525.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Previous message:</strong> <a href="7523.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>In reply to:</strong> <a href="7523.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7525.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Reply:</strong> <a href="7525.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Reply:</strong> <a href="7526.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2010, at 2:06 PM, Iain Bason wrote:
<br>
<p><span class="quotelev2">&gt; &gt; 1. The individual entries now behave like pseudo-regexp's rather that strict matching.  We used strict matching before this for a reason.  If we want to allow regexp-like behavior, then I think we should enable that with special characters -- that's the customary/usual way to do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The history of this particular piece of code is that it used to use strncmp.  George Bosilca changed it last summer, incidental to a larger change (r21652).  The commit comment was not particularly illuminating on this issue, in my opinion:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/ompi-svn-mirror/rev/bde31d3db7ba">http://www.open-mpi.org/hg/hgwebdir.cgi/ompi-svn-mirror/rev/bde31d3db7ba</a>
</span><br>
<p>You're right -- it's not illuminating... :-\
<br>
<p><span class="quotelev2">&gt; &gt; 2. All other &lt;foo&gt;_in|exclude behavior in ompi is strict matching, not prefix matching.  I'm uncomfortable with the disparity.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That turns out not to be the case.  Look in btl_tcp_proc.c/mca_btl_tcp_retrieve_local_interfaces.
</span><br>
<p>Mmmm... good point.  I was thinking specifically of the if_in|exclude behavior in the openib BTL.  That uses strcmp, not strncmp.  Here's a complete list:
<br>
<p>ompi_info --param all all --parsable | grep include | grep :value:
<br>
mca:opal:base:param:opal_event_include:value:pollmca:btl:ofud:param:btl_ofud_if_include:value:
<br>
mca:btl:openib:param:btl_openib_if_include:value:
<br>
mca:btl:openib:param:btl_openib_ipaddr_include:value:mca:btl:openib:param:btl_openib_cpc_include:value:
<br>
mca:btl:sctp:param:btl_sctp_if_include:value:
<br>
mca:btl:tcp:param:btl_tcp_if_include:value:
<br>
mca:btl:base:param:btl_base_include:value:
<br>
mca:oob:tcp:param:oob_tcp_if_include:value:
<br>
<p>Do we know what these others do?  I only checked openib_if_*clude -- it's strcmp.
<br>
<p><span class="quotelev2">&gt; &gt; Additionally, if loopback is now handled properly via change #2, shouldn't the default value for the btl_tcp_if_exclude parameter now be empty?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's a good question.  Enabling the &quot;lo&quot; interface results in intra-node messages being striped across that interface in addition to the others on a system.  I don't know what impact that would have, if any.
</span><br>
<p>sm and self should still be prioritized above it, right?  If so, we should be ok.
<br>
<p>However, I think you're right that the addition of striping across lo* in addition to the other interfaces might have an unknown effect.
<br>
<p>Here's a random question -- if a user does not use the sm btl, would sending messages through lo for on-node communication be potentially better than sending it through a real device, given that that real device may be far away (in the NUMA sense of &quot;far&quot;)?  I.e., are OS's typically smart enough to know that loopback traffic may be able to stay local to the NUMA node, vs. sending it out to a device and back?  Or are OS's smart enough to know that if the both ends of a TCP socket are on the same node -- regardless of what IP interface they use -- and if both processes are on the same NUMA locality, that the data can stay local and not have to make a round trip to the device?
<br>
<p>(I admit that this is a fairly corner case -- doing on-node communication but *not* using the sm btl...)
<br>
<p><span class="quotelev2">&gt; &gt; Actually -- thinking about this a little more, does opal_net_islocalhost() guarantee to work on peer interfaces? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks to see whether the IP address is (v4) 127.0.0.1, or (v6) ::1.  I believe that these values are dictated by the relevant RFCs (but I haven't looked to make sure).
</span><br>
<p>Good enough -- thanks!  (I was thinking that it might be checking interfaces, not IP addrs -- so 127.x checking should be fine here)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7525.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Previous message:</strong> <a href="7523.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>In reply to:</strong> <a href="7523.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7525.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Reply:</strong> <a href="7525.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Reply:</strong> <a href="7526.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
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
