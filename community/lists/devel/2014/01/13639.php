<?
$subject_val = "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 16:30:01 2014" -->
<!-- isoreceived="20140109213001" -->
<!-- sent="Thu, 9 Jan 2014 21:30:00 +0000" -->
<!-- isosent="20140109213000" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD" -->
<!-- id="ECC83A54-A36B-4BE4-BB2E-EB1745DF67B8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="97575B0D-C0FC-4513-A6FF-677F3C8A8921_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 16:30:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13640.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Previous message:</strong> <a href="13638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul H build on Solaris"</a>
<li><strong>In reply to:</strong> <a href="13625.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13641.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13641.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13663.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13665.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed on trunk in <a href="https://svn.open-mpi.org/trac/ompi/changeset/30198">https://svn.open-mpi.org/trac/ompi/changeset/30198</a>.
<br>
<p>I can't test on all the kinds of systems Paul/Marco have, though -- we'll have to see what happens when he tries.
<br>
<p><p>On Jan 9, 2014, at 10:36 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I fully concur - just limited by my available time to fix it. Jeff has volunteered to step in, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 8, 2014, at 11:44 PM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Il 1/9/2014 5:10 AM, Ralph Castain ha scritto:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actually, as I look at it, the logic escapes me anyway. Basically, you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only have two options - use the vfs struct for Sun, and use fs struct
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for everything else. I'm not aware of any other choice, and indeed the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list of all the systems for the latter actually is intended to amount to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;anything else&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I just changed it to an &quot;else&quot; statement in the trunk and scheduled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it for 1.7.4 if it passes muster - see how this works for you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; please note that there are other similar cases in the same file
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; in &quot;bool opal_path_nfs&quot; function at row 434 and 462
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the one at 489 is a multiple if with no default case,
</span><br>
<span class="quotelev2">&gt;&gt; so the code will fail to perform for any architecture
</span><br>
<span class="quotelev2">&gt;&gt; no reported there, like CYGWIN, and it is very hard to notice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In general this type of &quot;ifdefined&quot; around platform
</span><br>
<span class="quotelev2">&gt;&gt; are very bad for portability or platform evolution.
</span><br>
<span class="quotelev2">&gt;&gt; Adding a new platform will be a hell of work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The Autoconf approach to portability &quot;should be&quot; to test
</span><br>
<span class="quotelev2">&gt;&gt; for features, not for versions or platform.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Marco
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13640.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Previous message:</strong> <a href="13638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul H build on Solaris"</a>
<li><strong>In reply to:</strong> <a href="13625.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13641.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13641.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13663.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13665.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
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
