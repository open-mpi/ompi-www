<?
$subject_val = "Re: [OMPI devel] Libtool for 1.3 / trunk builds";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 19 16:07:56 2008" -->
<!-- isoreceived="20080319200756" -->
<!-- sent="Wed, 19 Mar 2008 16:07:39 -0400" -->
<!-- isosent="20080319200739" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Libtool for 1.3 / trunk builds" -->
<!-- id="347A7283-ADDD-4A05-AD74-6FFC669526DF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0803191504010.9736_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Libtool for 1.3 / trunk builds<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-19 16:07:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3480.php">Muhammad Atif: "Re: [OMPI devel] xensocket btl and migration"</a>
<li><strong>Previous message:</strong> <a href="3478.php">Brian W. Barrett: "Re: [OMPI devel] Libtool for 1.3 / trunk builds"</a>
<li><strong>In reply to:</strong> <a href="3478.php">Brian W. Barrett: "Re: [OMPI devel] Libtool for 1.3 / trunk builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3481.php">Ralf Wildenhues: "Re: [OMPI devel] Libtool for 1.3 / trunk builds"</a>
<li><strong>Reply:</strong> <a href="3481.php">Ralf Wildenhues: "Re: [OMPI devel] Libtool for 1.3 / trunk builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 19, 2008, at 4:05 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; True - I have no objection to waiting for 2.2.1 or 1.3 to be branched,
</span><br>
<span class="quotelev1">&gt; whichever comes first.  The main point is that under no circumstance
</span><br>
<span class="quotelev1">&gt; should 1.3 be shipped with the same 2.1a pre-release as 1.2 uses --  
</span><br>
<span class="quotelev1">&gt; it's
</span><br>
<span class="quotelev1">&gt; time to migrate to something stable.
</span><br>
<p>Cool; I think we're agreed.  Just for simplicity; let's do whatever  
<br>
comes first: LT hits 2.2.1 (or 2.2.2?  I don't know their numbering  
<br>
scheme) or we branch for v1.3.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 19 Mar 2008, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Should we wait for the next LT point release?  I see a fair amount of
</span><br>
<span class="quotelev2">&gt;&gt; activity on the bugs-libtool list; I think they're planning a new
</span><br>
<span class="quotelev2">&gt;&gt; release within the next few weeks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (I think we will want to go to the LT point release when it comes  
</span><br>
<span class="quotelev2">&gt;&gt; out;
</span><br>
<span class="quotelev2">&gt;&gt; I don't really have strong feelings about going to 2.2 now or not)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 19, 2008, at 12:26 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now that Libtool 2.2 has gone stable (2.0 was skipped entirely), it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probably makes sense to update the version of Libtool used to build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nightly tarball and releases for the trunk (and eventually v1.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nightly snapshot we have been using to the stable LT 2.2 release.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've done some testing (ie, I installed LT 2.2 for another project,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nothing in OMPI broke over the last couple of weeks), so I have some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; confidence this should be a smooth transition.  If the group decides
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is a good idea, someone at IU would just have to install the new LT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version and change some symlinks and it should all just work...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="3480.php">Muhammad Atif: "Re: [OMPI devel] xensocket btl and migration"</a>
<li><strong>Previous message:</strong> <a href="3478.php">Brian W. Barrett: "Re: [OMPI devel] Libtool for 1.3 / trunk builds"</a>
<li><strong>In reply to:</strong> <a href="3478.php">Brian W. Barrett: "Re: [OMPI devel] Libtool for 1.3 / trunk builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3481.php">Ralf Wildenhues: "Re: [OMPI devel] Libtool for 1.3 / trunk builds"</a>
<li><strong>Reply:</strong> <a href="3481.php">Ralf Wildenhues: "Re: [OMPI devel] Libtool for 1.3 / trunk builds"</a>
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
