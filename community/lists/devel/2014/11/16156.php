<?
$subject_val = "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-198-g68bec0a";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 17:13:12 2014" -->
<!-- isoreceived="20141103221312" -->
<!-- sent="Mon, 3 Nov 2014 14:12:53 -0800" -->
<!-- isosent="20141103221253" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-198-g68bec0a" -->
<!-- id="CAAvDA17oqB1Jvk6pcc0Zc-goAdQCcnk_qyMp689xGKpvy6Wa+A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0271D066-2179-4889-ACAF-E986540FC388_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-198-g68bec0a<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 17:12:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16157.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-198-g68bec0a"</a>
<li><strong>Previous message:</strong> <a href="16155.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>In reply to:</strong> <a href="16146.php">Dave Goodell (dgoodell): "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Nov 3, 2014 at 8:29 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev2">&gt; &gt; btw, is there a push option to abort if that would make github history
</span><br>
<span class="quotelev1">&gt; non linear ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, not really.  There are some options to &quot;pull&quot; to prevent you from
</span><br>
<span class="quotelev1">&gt; creating a merge commit, but the fix when you encounter that situation
</span><br>
<span class="quotelev1">&gt; would simply be to rebase in some fashion, so you might as well just do
</span><br>
<span class="quotelev1">&gt; that every time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The &quot;some options&quot; Dave is referring to is probably
<br>
&nbsp;&nbsp;&nbsp;&nbsp;git pull --ff-only
<br>
I have this aliased to &quot;git ff&quot; and use it instead of &quot;git pull&quot;.
<br>
<p>If your pull would require a merge, this will tell you so and not make any
<br>
changes.
<br>
As Dave says, &quot;git pull --rebase&quot; is *probably* going to be your next step
<br>
if &quot;git pull --ff-only&quot; fails.  However, that is not *always* the case.
<br>
Sometimes you may wish to &quot;stash&quot; or create a new branch for the local
<br>
modifications.
<br>
<p>I prefer &quot;git pull --ff-only&quot; because it allows (some may say &quot;forces&quot;) me
<br>
to examine the situation before I create non-linear history.  Without it,
<br>
imagine what happens when I login to some machine I seldom use, and there
<br>
are local mods from some experiment I had totally forgotten about.
<br>
- If I do a plain &quot;git pull&quot; I get a merge I probably didn't want
<br>
- If I do &quot;git pull --rebase&quot; then my local mods are (silently unless you
<br>
look carefully) rebased on the new tip.
<br>
In either of the above cases I may find myself resolving conflicts for
<br>
changes I didn't even remember making.
<br>
<p>So, I favor &quot;git pull --ff-only&quot; because in the case of no local mods it
<br>
just updates my local repo, and otherwise I get to examine the local
<br>
changes before I let git merge or rebase them.  If you are familiar enough
<br>
with using &quot;stash&quot;, you can even choose to ignore the local changes for now
<br>
and get on with the task at hand.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16156/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16157.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-198-g68bec0a"</a>
<li><strong>Previous message:</strong> <a href="16155.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>In reply to:</strong> <a href="16146.php">Dave Goodell (dgoodell): "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
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
