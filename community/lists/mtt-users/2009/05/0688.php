<?
$subject_val = "[MTT users] Moving to Mercurial";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 13 12:27:59 2009" -->
<!-- isoreceived="20090513162759" -->
<!-- sent="Wed, 13 May 2009 12:27:54 -0400" -->
<!-- isosent="20090513162754" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] Moving to Mercurial" -->
<!-- id="CD47C318-4797-4E74-B150-ED7C06B299E2_at_cisco.com" -->
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
<strong>Subject:</strong> [MTT users] Moving to Mercurial<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-13 12:27:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0689.php">Keith Matthews: "[MTT users] svn access to the tests"</a>
<li><strong>Previous message:</strong> <a href="0687.php">Jeff Squyres: "Re: [MTT users] MTT account request"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Heads up for all MTT'ers...
<br>
<p>This project will eventually be moving away from Subversion and moving  
<br>
to Mercurial.  We don't have an exact date when this will happen  
<br>
because some infrastructure work needs to occur at Indiana U. first.   
<br>
This infrastructure work is currently ongoing; it *may* be ready in a  
<br>
week or three from now.
<br>
<p>MTT and PLPA are going to be the first two projects (out of the OMPI  
<br>
set of projects) to move over to Mercurial.  To be blunt: we're going  
<br>
to be the guinnea pigs.  Since MTT and PLPA are both pretty small  
<br>
projects, it was estimated that the impact of moving these two  
<br>
projects would be small, even if there are problems along the way.
<br>
<p>Specifics are TBD, but we'll likely leave MTT's SVN in place for a  
<br>
little while after the switch because production sites are using it  
<br>
for their nightly regression testing.  But once MTT's official  
<br>
development switches to Mercurial, that SVN will become static/read- 
<br>
only.  Once the new Mercurial infrastructure stabilizes, we'll  
<br>
encourage all MTT users to switch to the Mercurial checkout and  
<br>
eventually remove the MTT SVN.
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
<li><strong>Next message:</strong> <a href="0689.php">Keith Matthews: "[MTT users] svn access to the tests"</a>
<li><strong>Previous message:</strong> <a href="0687.php">Jeff Squyres: "Re: [MTT users] MTT account request"</a>
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
