<?
$subject_val = "[OMPI devel] OMPI Mercurial read-only mirror";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  2 10:51:09 2008" -->
<!-- isoreceived="20080502145109" -->
<!-- sent="Fri, 2 May 2008 10:50:57 -0400" -->
<!-- isosent="20080502145057" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI Mercurial read-only mirror" -->
<!-- id="F2404D4F-B93B-49A5-B034-0357024E91FF_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI Mercurial read-only mirror<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-02 10:50:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3799.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Previous message:</strong> <a href="3797.php">Josh Hursey: "Re: [OMPI devel] MCA component open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3800.php">Terry Dontje: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Reply:</strong> <a href="3800.php">Terry Dontje: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Taking steps towards Mercurial, we have setup a read-only Mercurial  
<br>
mirror of the official OMPI SVN repository:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/ompi-svn-mirror/">http://www.open-mpi.org/hg/hgwebdir.cgi/ompi-svn-mirror/</a>
<br>
<p>Anything you commit to SVN should show up on the HG mirror within 30  
<br>
minutes.
<br>
<p>This mirror is currently *only* the /trunk, /tags, and /branches.  It  
<br>
does not include /tmp, /tmp-public, /vendor, or any other top-level  
<br>
SVN directory.
<br>
<p>The value of this mirror is that you can have distributed HG  
<br>
repositories within your organization and stay in sync with the OMPI  
<br>
SVN trunk (and tags, and branches).  We're still working on a way for  
<br>
OMPI core members to publish their own HG trees.  Ralph and a few  
<br>
others can publish their HG tree now because they were willing to be  
<br>
guinea pigs, but it's not setup for the general case yet -- give us a  
<br>
little more time to get that going.  Since this is a read-only mirror,  
<br>
committing back to SVN is a manual process (e.g., make a patch from  
<br>
your HG tree, apply that patch to an SVN checkout, and then commit).
<br>
<p>Enjoy!
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
<li><strong>Next message:</strong> <a href="3799.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Previous message:</strong> <a href="3797.php">Josh Hursey: "Re: [OMPI devel] MCA component open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3800.php">Terry Dontje: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Reply:</strong> <a href="3800.php">Terry Dontje: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
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
