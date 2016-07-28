<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 31 08:14:03 2007" -->
<!-- isoreceived="20070831121403" -->
<!-- sent="Fri, 31 Aug 2007 08:14:02 -0400" -->
<!-- isosent="20070831121402" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Public tmp branches" -->
<!-- id="46D8060A.4040805_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF010D2EB9_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-31 08:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI devel] Public tmp branches"</a>
<li><strong>Previous message:</strong> <a href="2276.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2189.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Public tmp branches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI devel] Public tmp branches"</a>
<li><strong>Reply:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI devel] Public tmp branches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why not make /tmp-public and /tmp-private?
<br>
<p>Leave /tmp alone. Have all new branches made in one of the two new 
<br>
directories, and as /tmp branches are slowly whacked, we can 
<br>
(eventually) get rid of /tmp.
<br>
<p>Tim
<br>
<p>Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; I thought about both of those (/tmp/private and /tmp/public), but 
</span><br>
<span class="quotelev1">&gt; couldn't think of a way to make them work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. If we do /tmp/private, we have to svn mv all the existing trees there 
</span><br>
<span class="quotelev1">&gt; which will annoy the developers (but is not a deal-breaker) and make 
</span><br>
<span class="quotelev1">&gt; /tmp publicly readable.  But that makes the history of all the private 
</span><br>
<span class="quotelev1">&gt; branches public.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. If we do /tmp/public, I'm not quite sure how to setup the perms in SH 
</span><br>
<span class="quotelev1">&gt; to do that - if we setup /tmp to be 'no read access' for * and 
</span><br>
<span class="quotelev1">&gt; /tmp/public to have 'read access' for *, will a non authenticated user 
</span><br>
<span class="quotelev1">&gt; be able to reach /tmp/private?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From:   Brian Barrett [mailto:bbarrett_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent:   Friday, August 17, 2007 11:51 AM Eastern Standard Time
</span><br>
<span class="quotelev1">&gt; To:     Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject:        Re: [OMPI devel] Public tmp branches
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ugh, sorry, I've been busy this week and didn't see a timeout, so a 
</span><br>
<span class="quotelev1">&gt; response got delayed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I really don't like this format.  public doesn't have any meaning to 
</span><br>
<span class="quotelev1">&gt; it (tmp suggests, well, it's temporary).  I'd rather have /tmp/ and /
</span><br>
<span class="quotelev1">&gt; tmp/private or something like that.  Or /tmp/ and /tmp/public/.  
</span><br>
<span class="quotelev1">&gt; Either way :/.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 17, 2007, at 6:21 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; I didn't really put this in RFC format with a timeout, but no one
</span><br>
<span class="quotelev2">&gt;  &gt; objected, so I have created:
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;       <a href="http://svn.open-mpi.org/svn/ompi/public">http://svn.open-mpi.org/svn/ompi/public</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Developers should feel free to use this tree for public temporary
</span><br>
<span class="quotelev2">&gt;  &gt; branches.  Specifically:
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; - use /tmp if your branch is intended to be private
</span><br>
<span class="quotelev2">&gt;  &gt; - use /public if your branch is intended to be public
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Enjoy.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; On Aug 10, 2007, at 9:50 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; Right now all branches under /tmp are private to the OMPI core group
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; (e.g., to allow unpublished academic work).  However, there are
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; definitely cases where it would be useful to allow public branches
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; when there's development work that is public but not yet ready for
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; the trunk.  Periodically, we go an assign individual permissions to /
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; tmp branches (like I just did to /tmp/vt-integration), but it would
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; be easier if we had a separate tree for public &quot;tmp&quot; branches.
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; Would anyone have an objection if I added /public (or any better name
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; that someone can think of) for tmp-style branches, but that are open
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; for read-only access to the public?
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; --
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;  &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;  &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; --
</span><br>
<span class="quotelev2">&gt;  &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;  &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI devel] Public tmp branches"</a>
<li><strong>Previous message:</strong> <a href="2276.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2189.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Public tmp branches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI devel] Public tmp branches"</a>
<li><strong>Reply:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI devel] Public tmp branches"</a>
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
