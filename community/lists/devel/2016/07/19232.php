<?
$subject_val = "Re: [OMPI devel] Migration of mailman mailing lists";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 18 11:43:51 2016" -->
<!-- isoreceived="20160718154351" -->
<!-- sent="Mon, 18 Jul 2016 10:43:49 -0500" -->
<!-- isosent="20160718154349" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Migration of mailman mailing lists" -->
<!-- id="CAANzjEnKJtxfhb9W7You2_2gnwXJCk84wS3xNh0Pd5OMGsFydg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EC9899CA-EFF8-49AB-A469-739854A87245_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-18 11:43:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19233.php">Brice Goglin: "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<li><strong>Previous message:</strong> <a href="19231.php">Jeff Squyres (jsquyres): "[OMPI devel] Migration of mailman mailing lists"</a>
<li><strong>In reply to:</strong> <a href="19231.php">Jeff Squyres (jsquyres): "[OMPI devel] Migration of mailman mailing lists"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19233.php">Brice Goglin: "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<li><strong>Reply:</strong> <a href="19233.php">Brice Goglin: "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now that netloc has rolled into hwloc, I think it is safe to kill the
<br>
netloc lists.
<br>
<p>mtt-devel-core and mtt-annouce should be kept. They probably need to be
<br>
cleaned. But the hope is that we release MTT at some point in the near-ish
<br>
future.
<br>
<p>On Mon, Jul 18, 2016 at 10:20 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We're progressing in the migration plans.  Next up is the mailing lists.
</span><br>
<span class="quotelev1">&gt; The first step is to determine which lists to migrate, and which to delete
</span><br>
<span class="quotelev1">&gt; (because they're now no longer necessary, anyway).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are the lists we plan to keep/migrate, and the lists we plan to
</span><br>
<span class="quotelev1">&gt; delete/not migrate -- if you know of any list we mis-classified, please let
</span><br>
<span class="quotelev1">&gt; us know ASAP.  We plan to start this migration as early as Tuesday
</span><br>
<span class="quotelev1">&gt; afternoon.
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19231.php">http://www.open-mpi.org/community/lists/devel/2016/07/19231.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19232/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19233.php">Brice Goglin: "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<li><strong>Previous message:</strong> <a href="19231.php">Jeff Squyres (jsquyres): "[OMPI devel] Migration of mailman mailing lists"</a>
<li><strong>In reply to:</strong> <a href="19231.php">Jeff Squyres (jsquyres): "[OMPI devel] Migration of mailman mailing lists"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19233.php">Brice Goglin: "Re: [OMPI devel] Migration of mailman mailing lists"</a>
<li><strong>Reply:</strong> <a href="19233.php">Brice Goglin: "Re: [OMPI devel] Migration of mailman mailing lists"</a>
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
