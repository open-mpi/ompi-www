<?
$subject_val = "Re: [OMPI devel] Switching away from SVN?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 20:10:24 2008" -->
<!-- isoreceived="20080319001024" -->
<!-- sent="Tue, 18 Mar 2008 20:10:14 -0400" -->
<!-- isosent="20080319001014" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Switching away from SVN?" -->
<!-- id="26B78B15-FE1B-40C5-9CE7-B765DBF8436E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="adahcf3my94.fsf_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Switching away from SVN?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 20:10:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3469.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3467.php">George Bosilca: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>In reply to:</strong> <a href="3465.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3484.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3484.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 18, 2008, at 7:02 PM, Roland Dreier wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Primary reasons for doing the switch are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - distributed repositories are attractive/useful
</span><br>
<span class="quotelev2">&gt;&gt; - git/Mercurial branching and merging are *way* better than SVN
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; note that SVN v1.5 is supposed to be *much* better than v1.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, svn is much slower for lots of things, to the point where it
</span><br>
<span class="quotelev1">&gt; becomes a usability issue.  And supporting disconnected operation (aka
</span><br>
<span class="quotelev1">&gt; &quot;working on a plane&quot;) is another really nice bonus.
</span><br>
<p>This is a good point - I've [briefly] used both git and Mercurial; as  
<br>
part of their &quot;*way* better support for branching and merging&quot; is  
<br>
speed.  A goodly-sized merge in SVN can take an hour or more.  I've  
<br>
done goodly-sized merges in git and hg in seconds (or minutes).
<br>
<p><span class="quotelev2">&gt;&gt; - how to import all the SVN history to the new system
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should not be a big problem -- since svn at least has atomic
</span><br>
<span class="quotelev1">&gt; changesets, you avoid all the pain of parsing cvs repositories, and
</span><br>
<span class="quotelev1">&gt; there fairly mature svn importers for distributed systems.
</span><br>
<p><p>Agreed -- I'm sure it *can* be done; we just have to spend a few  
<br>
cycles to figure out how to do it properly.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3469.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3467.php">George Bosilca: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>In reply to:</strong> <a href="3465.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3484.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3484.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
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
