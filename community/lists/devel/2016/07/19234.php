<?
$subject_val = "Re: [OMPI devel] Migration of mailman mailing lists";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 18 12:12:04 2016" -->
<!-- isoreceived="20160718161204" -->
<!-- sent="Mon, 18 Jul 2016 16:12:01 +0000" -->
<!-- isosent="20160718161201" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Migration of mailman mailing lists" -->
<!-- id="F5BFBDE3-2F1F-41CB-877B-429C3752E5C3_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="6ECF7C57-493B-4BAD-B575-DE736CB5F64C_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Migration of mailman mailing lists<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-18 12:12:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19235.php">Emani, Murali: "[OMPI devel] Change compiler"</a>
<li><strong>Previous message:</strong> <a href="19233.php">Brice Goglin: "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<li><strong>In reply to:</strong> <a href="19233.php">Brice Goglin: "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19238.php">Christopher Samuel: "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Roger.
<br>

<br>
<span class="quotelev1">&gt; On Jul 18, 2016, at 12:05 PM, Brice Goglin &lt;brice.goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, kill all netloc lists.
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 18 juillet 2016 17:43:49 UTC+02:00, Josh Hursey &lt;jjhursey_at_[hidden]&gt; a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt; Now that netloc has rolled into hwloc, I think it is safe to kill the netloc lists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mtt-devel-core and mtt-annouce should be kept. They probably need to be cleaned. But the hope is that we release MTT at some point in the near-ish future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 18, 2016 at 10:20 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; We're progressing in the migration plans.  Next up is the mailing lists.  The first step is to determine which lists to migrate, and which to delete (because they're now no longer necessary, anyway).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are the lists we plan to keep/migrate, and the lists we plan to delete/not migrate -- if you know of any list we mis-classified, please let us know ASAP.  We plan to start this migration as early as Tuesday afternoon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lists that we want to keep:
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Admin
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Announce
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Devel
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Devel-core
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Hwloc-announce
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Hwloc-commits -- gitdub sends to this list; KEEP
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Hwloc-devel
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Hwloc-users
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Mirrors
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Mtt-commits
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Mtt-devel
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Mtt-results -- daily MTT results sent to this list; KEEP
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Mtt-users
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Ompi-commits -- gitdub sends to this list; KEEP
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lists that we know that we do not want to migrate:
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Bugs -- Trac used to send to this list; it&#226;&#128;&#153;s now moot and can be killed.
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Docs -- kill?
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; mtt-announce -- kill?
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; mtt-devel-core -- kill?
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Netloc-announce -- kill?
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Netloc-bugs -- kill?
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Netloc-commits -- kill?
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Netloc-devel -- kill?
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Netloc-users -- kill?
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; ompi-user-docs-bugs -- kill?
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; ompi-user-docs-svn -- kill?
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; otpo-bugs -- kill?
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; otpo-svn -- kill?
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; otpo-users -- kill?
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Any glassbottom list
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Any orcm list
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#162; Any pmix list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19231.php">http://www.open-mpi.org/community/lists/devel/2016/07/19231.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19232.php">http://www.open-mpi.org/community/lists/devel/2016/07/19232.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19233.php">http://www.open-mpi.org/community/lists/devel/2016/07/19233.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19235.php">Emani, Murali: "[OMPI devel] Change compiler"</a>
<li><strong>Previous message:</strong> <a href="19233.php">Brice Goglin: "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<li><strong>In reply to:</strong> <a href="19233.php">Brice Goglin: "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19238.php">Christopher Samuel: "Re: [OMPI devel] Migration of mailman mailing lists"</a>
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
