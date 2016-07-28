<?
$subject_val = "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 10:36:45 2014" -->
<!-- isoreceived="20140109153645" -->
<!-- sent="Thu, 9 Jan 2014 07:36:39 -0800" -->
<!-- isosent="20140109153639" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD" -->
<!-- id="97575B0D-C0FC-4513-A6FF-677F3C8A8921_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52CE5369.6040807_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 10:36:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13626.php">marco atzeri: "Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<li><strong>Previous message:</strong> <a href="13624.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>In reply to:</strong> <a href="13617.php">marco atzeri: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fully concur - just limited by my available time to fix it. Jeff has volunteered to step in, though.
<br>
<p>On Jan 8, 2014, at 11:44 PM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Il 1/9/2014 5:10 AM, Ralph Castain ha scritto:
</span><br>
<span class="quotelev2">&gt;&gt; Actually, as I look at it, the logic escapes me anyway. Basically, you
</span><br>
<span class="quotelev2">&gt;&gt; only have two options - use the vfs struct for Sun, and use fs struct
</span><br>
<span class="quotelev2">&gt;&gt; for everything else. I'm not aware of any other choice, and indeed the
</span><br>
<span class="quotelev2">&gt;&gt; list of all the systems for the latter actually is intended to amount to
</span><br>
<span class="quotelev2">&gt;&gt; &quot;anything else&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I just changed it to an &quot;else&quot; statement in the trunk and scheduled
</span><br>
<span class="quotelev2">&gt;&gt; it for 1.7.4 if it passes muster - see how this works for you.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; please note that there are other similar cases in the same file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in &quot;bool opal_path_nfs&quot; function at row 434 and 462
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the one at 489 is a multiple if with no default case,
</span><br>
<span class="quotelev1">&gt; so the code will fail to perform for any architecture
</span><br>
<span class="quotelev1">&gt; no reported there, like CYGWIN, and it is very hard to notice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In general this type of &quot;ifdefined&quot; around platform
</span><br>
<span class="quotelev1">&gt; are very bad for portability or platform evolution.
</span><br>
<span class="quotelev1">&gt; Adding a new platform will be a hell of work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Autoconf approach to portability &quot;should be&quot; to test
</span><br>
<span class="quotelev1">&gt; for features, not for versions or platform.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
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
<li><strong>Next message:</strong> <a href="13626.php">marco atzeri: "Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<li><strong>Previous message:</strong> <a href="13624.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>In reply to:</strong> <a href="13617.php">marco atzeri: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
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
