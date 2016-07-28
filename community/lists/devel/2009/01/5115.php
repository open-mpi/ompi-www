<?
$subject_val = "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 11 21:17:44 2009" -->
<!-- isoreceived="20090112021744" -->
<!-- sent="Sun, 11 Jan 2009 21:17:36 -0500" -->
<!-- isosent="20090112021736" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FLOSS Weekly and comment about Mercurial" -->
<!-- id="C245DA0C-3ECA-4F98-A900-B60FE5664421_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="496A6B34.5020101_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-11 21:17:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<li><strong>Previous message:</strong> <a href="5114.php">Paul Franz: "[OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>In reply to:</strong> <a href="5114.php">Paul Franz: "[OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5120.php">Paul Franz: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>Reply:</strong> <a href="5120.php">Paul Franz: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Paul.  Since I was the one who made the comment, I'll be the  
<br>
one to explain it.  :-)
<br>
<p>The tool in particular that we were looking for is integration with  
<br>
Trac (<a href="http://trac.edgewall.org/">http://trac.edgewall.org/</a>).  We use Trac for all of our bug  
<br>
tracking, and we have a bunch of wiki pages on it as well.  When last  
<br>
we looked (several months ago -- which admittedly may be a little out  
<br>
of date now; see below), the Trac+hg integration was a bit weak.   
<br>
IIRC, Mercurial was still v0.9.something, too (although it's well past  
<br>
v1.0 now).  I have a dim recollection of asking about Trac+hg on the  
<br>
mercurial mailing list at the time (I'm not 100% sure I did, but I  
<br>
*think I did...?).  But regardless of whether I did or not, I remember  
<br>
that we were definitely under the impression that Trac+hg integration  
<br>
would be up to us; we unfortunately didn't (and still don't) have the  
<br>
time/resources to do it. :-(  So we adopted a wait-n-see attitude.
<br>
<p>We then definitively shelved the &quot;let's change repository technology&quot;  
<br>
discussion until after Open MPI v1.3.0 was released.  Unfortunately,  
<br>
releasing OMPI v1.3 took a *lot* longer than we expected.  :-(  If  
<br>
Murphy doesn't rear his head, we'll release v1.3.0 next week.  I think  
<br>
this then opens the door to the discussion of switching repository  
<br>
technologies again.
<br>
<p>That being said, even if the developer community decides &quot;yes, let's  
<br>
move to Mercurial&quot;, it'll probably take us a little while to do so --  
<br>
there's infrastructure changes at Indiana University that would need  
<br>
to occur (our hosting provider), web pages to update, automated  
<br>
scripts to update, etc.  I'm definitely in the &quot;let's switch&quot; camp,  
<br>
but we'll need some careful planning and execution to make it happen.
<br>
<p>FWIW, we do maintain an official Mercurial mirror of the Open MPI SVN  
<br>
repository, and several of us use Mercurial for short- and long-term  
<br>
development branches (merging back to the SVN trunk when done).  See  
<br>
here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/hg/hgwebdir.cgi">http://www.open-mpi.org/hg/hgwebdir.cgi</a>
<br>
<p>And here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial</a>
<br>
<p>So to be honest, I haven't done my homework to see if Trac+hg  
<br>
integration is a solved issue these days.  If it is, it makes our  
<br>
discussions easier.  :-)  If not, that might be somewhere that we need  
<br>
some help.
<br>
<p><p><p>On Jan 11, 2009, at 4:57 PM, Paul Franz wrote:
<br>
<p><span class="quotelev1">&gt; I was listening to FLOSS Weekly and I heard it commented the Open  
</span><br>
<span class="quotelev1">&gt; MPI development team was &quot;waiting for a few more tools to get a  
</span><br>
<span class="quotelev1">&gt; little more mature&quot; before moving completely over to Mercurial. Does  
</span><br>
<span class="quotelev1">&gt; anybody enumerate what is meant by that comment? Is there anything  
</span><br>
<span class="quotelev1">&gt; that the Mercurial community do to help?
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
<li><strong>Next message:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<li><strong>Previous message:</strong> <a href="5114.php">Paul Franz: "[OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>In reply to:</strong> <a href="5114.php">Paul Franz: "[OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5120.php">Paul Franz: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>Reply:</strong> <a href="5120.php">Paul Franz: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
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
