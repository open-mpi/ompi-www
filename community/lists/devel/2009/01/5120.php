<?
$subject_val = "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 12 23:41:04 2009" -->
<!-- isoreceived="20090113044104" -->
<!-- sent="Mon, 12 Jan 2009 23:40:59 -0500" -->
<!-- isosent="20090113044059" -->
<!-- name="Paul Franz" -->
<!-- email="theandromedan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FLOSS Weekly and comment about Mercurial" -->
<!-- id="496C1B5B.3020505_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C245DA0C-3ECA-4F98-A900-B60FE5664421_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] FLOSS Weekly and comment about Mercurial<br>
<strong>From:</strong> Paul Franz (<em>theandromedan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-12 23:40:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5121.php">Lenny Verkhovsky: "Re: [OMPI devel] size of shared-memory backing file + maffinity"</a>
<li><strong>Previous message:</strong> <a href="5119.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>In reply to:</strong> <a href="5115.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5127.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>Reply:</strong> <a href="5127.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will see what I can do. BTW, what kind of integration are you looking 
<br>
for? Do you just want the changeset to be logged in the Trac bug via a 
<br>
hook that looks at the comment for the appropriate bug number? Or 
<br>
something different?
<br>
<p>Paul Franz
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Greetings Paul.  Since I was the one who made the comment, I'll be the 
</span><br>
<span class="quotelev1">&gt; one to explain it.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The tool in particular that we were looking for is integration with 
</span><br>
<span class="quotelev1">&gt; Trac (<a href="http://trac.edgewall.org/">http://trac.edgewall.org/</a>).  We use Trac for all of our bug 
</span><br>
<span class="quotelev1">&gt; tracking, and we have a bunch of wiki pages on it as well.  When last 
</span><br>
<span class="quotelev1">&gt; we looked (several months ago -- which admittedly may be a little out 
</span><br>
<span class="quotelev1">&gt; of date now; see below), the Trac+hg integration was a bit weak.  
</span><br>
<span class="quotelev1">&gt; IIRC, Mercurial was still v0.9.something, too (although it's well past 
</span><br>
<span class="quotelev1">&gt; v1.0 now).  I have a dim recollection of asking about Trac+hg on the 
</span><br>
<span class="quotelev1">&gt; mercurial mailing list at the time (I'm not 100% sure I did, but I 
</span><br>
<span class="quotelev1">&gt; *think I did...?).  But regardless of whether I did or not, I remember 
</span><br>
<span class="quotelev1">&gt; that we were definitely under the impression that Trac+hg integration 
</span><br>
<span class="quotelev1">&gt; would be up to us; we unfortunately didn't (and still don't) have the 
</span><br>
<span class="quotelev1">&gt; time/resources to do it. :-(  So we adopted a wait-n-see attitude.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We then definitively shelved the &quot;let's change repository technology&quot; 
</span><br>
<span class="quotelev1">&gt; discussion until after Open MPI v1.3.0 was released.  Unfortunately, 
</span><br>
<span class="quotelev1">&gt; releasing OMPI v1.3 took a *lot* longer than we expected.  :-(  If 
</span><br>
<span class="quotelev1">&gt; Murphy doesn't rear his head, we'll release v1.3.0 next week.  I think 
</span><br>
<span class="quotelev1">&gt; this then opens the door to the discussion of switching repository 
</span><br>
<span class="quotelev1">&gt; technologies again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, even if the developer community decides &quot;yes, let's 
</span><br>
<span class="quotelev1">&gt; move to Mercurial&quot;, it'll probably take us a little while to do so -- 
</span><br>
<span class="quotelev1">&gt; there's infrastructure changes at Indiana University that would need 
</span><br>
<span class="quotelev1">&gt; to occur (our hosting provider), web pages to update, automated 
</span><br>
<span class="quotelev1">&gt; scripts to update, etc.  I'm definitely in the &quot;let's switch&quot; camp, 
</span><br>
<span class="quotelev1">&gt; but we'll need some careful planning and execution to make it happen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, we do maintain an official Mercurial mirror of the Open MPI SVN 
</span><br>
<span class="quotelev1">&gt; repository, and several of us use Mercurial for short- and long-term 
</span><br>
<span class="quotelev1">&gt; development branches (merging back to the SVN trunk when done).  See 
</span><br>
<span class="quotelev1">&gt; here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/hg/hgwebdir.cgi">http://www.open-mpi.org/hg/hgwebdir.cgi</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So to be honest, I haven't done my homework to see if Trac+hg 
</span><br>
<span class="quotelev1">&gt; integration is a solved issue these days.  If it is, it makes our 
</span><br>
<span class="quotelev1">&gt; discussions easier.  :-)  If not, that might be somewhere that we need 
</span><br>
<span class="quotelev1">&gt; some help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 11, 2009, at 4:57 PM, Paul Franz wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was listening to FLOSS Weekly and I heard it commented the Open MPI 
</span><br>
<span class="quotelev2">&gt;&gt; development team was &quot;waiting for a few more tools to get a little 
</span><br>
<span class="quotelev2">&gt;&gt; more mature&quot; before moving completely over to Mercurial. Does anybody 
</span><br>
<span class="quotelev2">&gt;&gt; enumerate what is meant by that comment? Is there anything that the 
</span><br>
<span class="quotelev2">&gt;&gt; Mercurial community do to help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5121.php">Lenny Verkhovsky: "Re: [OMPI devel] size of shared-memory backing file + maffinity"</a>
<li><strong>Previous message:</strong> <a href="5119.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>In reply to:</strong> <a href="5115.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5127.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>Reply:</strong> <a href="5127.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
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
