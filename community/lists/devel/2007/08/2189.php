<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 14:10:14 2007" -->
<!-- isoreceived="20070817181014" -->
<!-- sent="Fri, 17 Aug 2007 14:09:53 -0400" -->
<!-- isosent="20070817180953" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Public tmp branches" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF010D2EB9_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI devel] Public tmp branches" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-17 14:09:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2190.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2188.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903"</a>
<li><strong>Maybe in reply to:</strong> <a href="2104.php">Jeff Squyres: "[OMPI devel] Public tmp branches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2277.php">Tim Prins: "Re: [OMPI devel] Public tmp branches"</a>
<li><strong>Reply:</strong> <a href="2277.php">Tim Prins: "Re: [OMPI devel] Public tmp branches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought about both of those (/tmp/private and /tmp/public), but couldn't think of a way to make them work.
<br>
<p>1. If we do /tmp/private, we have to svn mv all the existing trees there which will annoy the developers (but is not a deal-breaker) and make /tmp publicly readable.  But that makes the history of all the private branches public.
<br>
<p>2. If we do /tmp/public, I'm not quite sure how to setup the perms in SH to do that - if we setup /tmp to be 'no read access' for * and /tmp/public to have 'read access' for *, will a non authenticated user be able to reach /tmp/private?
<br>
<p>-jms
<br>
<p>&nbsp;-----Original Message-----
<br>
From: 	Brian Barrett [mailto:bbarrett_at_[hidden]]
<br>
Sent:	Friday, August 17, 2007 11:51 AM Eastern Standard Time
<br>
To:	Open MPI Developers
<br>
Subject:	Re: [OMPI devel] Public tmp branches
<br>
<p>ugh, sorry, I've been busy this week and didn't see a timeout, so a  
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
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2189/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2190.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2188.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15903"</a>
<li><strong>Maybe in reply to:</strong> <a href="2104.php">Jeff Squyres: "[OMPI devel] Public tmp branches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2277.php">Tim Prins: "Re: [OMPI devel] Public tmp branches"</a>
<li><strong>Reply:</strong> <a href="2277.php">Tim Prins: "Re: [OMPI devel] Public tmp branches"</a>
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
