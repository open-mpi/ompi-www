<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 14:07:28 2010" -->
<!-- isoreceived="20100303190728" -->
<!-- sent="Wed, 03 Mar 2010 14:06:53 -0500" -->
<!-- isosent="20100303190653" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762" -->
<!-- id="7CB13E9D-BC00-4197-8742-3D025C8F6253_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8385C835-ADBB-4A2D-A63E-7FD43AF04D17_at_cisco.com" -->
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
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 14:06:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7524.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Previous message:</strong> <a href="7522.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>In reply to:</strong> <a href="7522.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7524.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Reply:</strong> <a href="7524.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2010, at 1:24 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I'm not sure I agree with change #1.  I understand in principle why the change was made, but I'm uncomfortable with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. The individual entries now behave like pseudo-regexp's rather that strict matching.  We used strict matching before this for a reason.  If we want to allow regexp-like behavior, then I think we should enable that with special characters -- that's the customary/usual way to do it.
</span><br>
<p>The history of this particular piece of code is that it used to use strncmp.  George Bosilca changed it last summer, incidental to a larger change (r21652).  The commit comment was not particularly illuminating on this issue, in my opinion:
<br>
<p><a href="http://www.open-mpi.org/hg/hgwebdir.cgi/ompi-svn-mirror/rev/bde31d3db7ba">http://www.open-mpi.org/hg/hgwebdir.cgi/ompi-svn-mirror/rev/bde31d3db7ba</a>
<br>
<p><span class="quotelev1">&gt; 2. All other &lt;foo&gt;_in|exclude behavior in ompi is strict matching, not prefix matching.  I'm uncomfortable with the disparity.
</span><br>
<p>That turns out not to be the case.  Look in btl_tcp_proc.c/mca_btl_tcp_retrieve_local_interfaces.
<br>
<p><span class="quotelev1">&gt; Additionally, if loopback is now handled properly via change #2, shouldn't the default value for the btl_tcp_if_exclude parameter now be empty?
</span><br>
<p>That's a good question.  Enabling the &quot;lo&quot; interface results in intra-node messages being striped across that interface in addition to the others on a system.  I don't know what impact that would have, if any.
<br>
<p><span class="quotelev1">&gt; Actually -- thinking about this a little more, does opal_net_islocalhost() guarantee to work on peer interfaces?  
</span><br>
<p>It looks to see whether the IP address is (v4) 127.0.0.1, or (v6) ::1.  I believe that these values are dictated by the relevant RFCs (but I haven't looked to make sure).
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7524.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Previous message:</strong> <a href="7522.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>In reply to:</strong> <a href="7522.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7524.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Reply:</strong> <a href="7524.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
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
