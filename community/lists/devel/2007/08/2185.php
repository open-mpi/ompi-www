<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 11:50:59 2007" -->
<!-- isoreceived="20070817155059" -->
<!-- sent="Fri, 17 Aug 2007 09:50:45 -0600" -->
<!-- isosent="20070817155045" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Public tmp branches" -->
<!-- id="15422A6C-0F39-427C-8CAE-6A598AE06536_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="497F3FEC-024E-4FE4-B4C0-A11DF4F87F13_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-17 11:50:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2186.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903"</a>
<li><strong>Previous message:</strong> <a href="2184.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on	Debian	GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2176.php">Jeff Squyres: "Re: [OMPI devel] Public tmp branches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2189.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Public tmp branches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ugh, sorry, I've been busy this week and didn't see a timeout, so a  
<br>
response got delayed.
<br>
<p>I really don't like this format.  public doesn't have any meaning to  
<br>
it (tmp suggests, well, it's temporary).  I'd rather have /tmp/ and / 
<br>
tmp/private or something like that.  Or /tmp/ and /tmp/public/.   
<br>
Either way :/.
<br>
<p>Brian
<br>
<p><p>On Aug 17, 2007, at 6:21 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I didn't really put this in RFC format with a timeout, but no one
</span><br>
<span class="quotelev1">&gt; objected, so I have created:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	<a href="http://svn.open-mpi.org/svn/ompi/public">http://svn.open-mpi.org/svn/ompi/public</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Developers should feel free to use this tree for public temporary
</span><br>
<span class="quotelev1">&gt; branches.  Specifically:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - use /tmp if your branch is intended to be private
</span><br>
<span class="quotelev1">&gt; - use /public if your branch is intended to be public
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Enjoy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2007, at 9:50 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right now all branches under /tmp are private to the OMPI core group
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., to allow unpublished academic work).  However, there are
</span><br>
<span class="quotelev2">&gt;&gt; definitely cases where it would be useful to allow public branches
</span><br>
<span class="quotelev2">&gt;&gt; when there's development work that is public but not yet ready for
</span><br>
<span class="quotelev2">&gt;&gt; the trunk.  Periodically, we go an assign individual permissions to /
</span><br>
<span class="quotelev2">&gt;&gt; tmp branches (like I just did to /tmp/vt-integration), but it would
</span><br>
<span class="quotelev2">&gt;&gt; be easier if we had a separate tree for public &quot;tmp&quot; branches.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would anyone have an objection if I added /public (or any better name
</span><br>
<span class="quotelev2">&gt;&gt; that someone can think of) for tmp-style branches, but that are open
</span><br>
<span class="quotelev2">&gt;&gt; for read-only access to the public?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2186.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903"</a>
<li><strong>Previous message:</strong> <a href="2184.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on	Debian	GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2176.php">Jeff Squyres: "Re: [OMPI devel] Public tmp branches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2189.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Public tmp branches"</a>
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
