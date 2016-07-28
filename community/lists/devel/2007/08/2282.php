<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 31 09:04:58 2007" -->
<!-- isoreceived="20070831130458" -->
<!-- sent="Fri, 31 Aug 2007 09:04:35 -0400" -->
<!-- isosent="20070831130435" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Public tmp branches" -->
<!-- id="6003B260-C385-4FE0-8369-E3869A914CED_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46D81035.2090000_at_cs.indiana.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-31 09:04:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2283.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2281.php">Tim Prins: "Re: [OMPI devel] Public tmp branches"</a>
<li><strong>In reply to:</strong> <a href="2281.php">Tim Prins: "Re: [OMPI devel] Public tmp branches"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done.  Public temp branches are now [strongly] encouraged to use /tmp- 
<br>
public.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/16030">https://svn.open-mpi.org/trac/ompi/changeset/16030</a>
<br>
<p><p>On Aug 31, 2007, at 8:57 AM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; That's fine, too.  I don't really care -- /public already exists.  We
</span><br>
<span class="quotelev2">&gt;&gt; can simply rename it to /tmp-public.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's do that. It should (more or less) address all concerns that have
</span><br>
<span class="quotelev1">&gt; been voiced.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 31, 2007, at 8:52 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Why not make /tmp-public and /tmp-private?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Leave /tmp alone. Have all new branches made in one of the two new
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; directories, and as /tmp branches are slowly whacked, we can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (eventually) get rid of /tmp.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm fine with that.  If no one else objects, let's bring this up on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tuesday to make sure everyone is aware and then pick a date to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rename
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; everything (requires a global sync since it will affect anyone who
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; has a current /tmp checkout).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or, to make life really simple, just leave /tmp alone and private.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; create a tmp-public for branches that are not private. That way,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; those of us
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with private tmp branches are unaffected, no global sync's are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; required,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or perhaps that is -too- simple.... ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2283.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2281.php">Tim Prins: "Re: [OMPI devel] Public tmp branches"</a>
<li><strong>In reply to:</strong> <a href="2281.php">Tim Prins: "Re: [OMPI devel] Public tmp branches"</a>
<!-- nextthread="start" -->
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
