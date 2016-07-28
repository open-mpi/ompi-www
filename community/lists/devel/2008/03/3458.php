<?
$subject_val = "[OMPI devel] Switching away from SVN?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 16:24:20 2008" -->
<!-- isoreceived="20080318202420" -->
<!-- sent="Tue, 18 Mar 2008 16:23:57 -0400" -->
<!-- isosent="20080318202357" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Switching away from SVN?" -->
<!-- id="4F623749-2CF4-406C-B9F6-E13AA880FF4B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Switching away from SVN?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 16:23:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3459.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3457.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3465.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3465.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's been loosely proposed that we switch away from SVN into a  
<br>
different system.  This probably warrants some discussion to a) figure  
<br>
out if we want to move, and b) *if* we want to move, which system  
<br>
should we move to?  One has system been proposed: Mercurial -- several  
<br>
OMPI developers are using it with good success.  I know that some OMPI  
<br>
developers use Git, too.  Are there other systems that we should  
<br>
consider?
<br>
<p>Primary reasons for doing the switch are:
<br>
<p>- distributed repositories are attractive/useful
<br>
- git/Mercurial branching and merging are *way* better than SVN
<br>
&nbsp;&nbsp;&nbsp;--&gt; note that SVN v1.5 is supposed to be *much* better than v1.4
<br>
<p>Primary reasons for staying with SVN are:
<br>
<p>- aside from branching/merging, SVN works pretty well
<br>
- branching/merging is not &quot;bad&quot; in SVN (but if you used git/hg, you  
<br>
know it can be much, much better)
<br>
<p>This is likely not a near-term issue, but we might as well start some  
<br>
low-frequency discussions about it.  Several issues would need to be  
<br>
figured out if we decide to switch away from SVN:
<br>
<p>- integration with trac
<br>
- integration with user/account management
<br>
- how to import all the SVN history to the new system
<br>
- ...and probably others
<br>
<p>This might make a good topic for the next post-MPI-Forum meeting in  
<br>
Chicago: have someone stand up and give a 30 min overview of each  
<br>
system (Mercurial, Git, ...?) and we can have developer-level  
<br>
discussions (and hands-on testing) of the various systems to see what  
<br>
we like / don't like.
<br>
<p>If this sounds like a reasonable idea, let's figure out who wants to  
<br>
speak about the systems, etc.
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
<li><strong>Next message:</strong> <a href="3459.php">Jeff Squyres: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3457.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3465.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3465.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
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
