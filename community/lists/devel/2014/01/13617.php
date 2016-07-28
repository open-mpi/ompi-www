<?
$subject_val = "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 02:44:46 2014" -->
<!-- isoreceived="20140109074446" -->
<!-- sent="Thu, 09 Jan 2014 08:44:41 +0100" -->
<!-- isosent="20140109074441" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD" -->
<!-- id="52CE5369.6040807_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E20C2F57-8B96-453F-B367-26F9AD7504B6_at_open-mpi.org" -->
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
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 02:44:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13618.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Previous message:</strong> <a href="13616.php">Paul Hargrove: "[OMPI devel] trunk - broken logic for oshmem:bindings:fort"</a>
<li><strong>In reply to:</strong> <a href="13603.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13625.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13625.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Il 1/9/2014 5:10 AM, Ralph Castain ha scritto:
<br>
<span class="quotelev1">&gt; Actually, as I look at it, the logic escapes me anyway. Basically, you
</span><br>
<span class="quotelev1">&gt; only have two options - use the vfs struct for Sun, and use fs struct
</span><br>
<span class="quotelev1">&gt; for everything else. I'm not aware of any other choice, and indeed the
</span><br>
<span class="quotelev1">&gt; list of all the systems for the latter actually is intended to amount to
</span><br>
<span class="quotelev1">&gt; &quot;anything else&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I just changed it to an &quot;else&quot; statement in the trunk and scheduled
</span><br>
<span class="quotelev1">&gt; it for 1.7.4 if it passes muster - see how this works for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ralph,
<br>
please note that there are other similar cases in the same file
<br>
<p>in &quot;bool opal_path_nfs&quot; function at row 434 and 462
<br>
<p>the one at 489 is a multiple if with no default case,
<br>
so the code will fail to perform for any architecture
<br>
no reported there, like CYGWIN, and it is very hard to notice
<br>
<p>In general this type of &quot;ifdefined&quot; around platform
<br>
are very bad for portability or platform evolution.
<br>
Adding a new platform will be a hell of work.
<br>
<p>The Autoconf approach to portability &quot;should be&quot; to test
<br>
for features, not for versions or platform.
<br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13618.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Previous message:</strong> <a href="13616.php">Paul Hargrove: "[OMPI devel] trunk - broken logic for oshmem:bindings:fort"</a>
<li><strong>In reply to:</strong> <a href="13603.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13625.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13625.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
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
