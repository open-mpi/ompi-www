<?
$subject_val = "[OMPI devel] svn commit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 15:09:51 2009" -->
<!-- isoreceived="20090213200951" -->
<!-- sent="Fri, 13 Feb 2009 12:08:53 -0800" -->
<!-- isosent="20090213200853" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] svn commit" -->
<!-- id="4995D355.2050004_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] svn commit<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 15:08:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5416.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
<li><strong>Previous message:</strong> <a href="5414.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5416.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
<li><strong>Reply:</strong> <a href="5416.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having trouble figuring out how to put my changes back to the trunk.
<br>
<p>I've been looking at the wiki pages, but don't really see the one last 
<br>
piece that I need of this puzzle.  I've used 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial</a> to get me through 
<br>
these steps:
<br>
<p>svn check-out of trunk to make an svn workspace on milliways
<br>
turn this also into an hg repository
<br>
bring hg workspace over to a local (Sun) workspace
<br>
make changes
<br>
hg commit and push back to milliways
<br>
<p>Now, two questions:
<br>
<p>1) Why don't I see my changes on milliways?  If I look at a file I 
<br>
changed in my local workspace, I don't see that change when I look at 
<br>
the same file on milliways.  However, if I do a fresh hg clone from the 
<br>
milliways workspace, I do see the changes.  So, somehow my changes are 
<br>
on milliways, but only in a way that hg sees them.
<br>
<p>2) How do I get the changes from my milliways svn/hg workspace back into 
<br>
the trunk?
<br>
<p>The workspace on milliways is /u/eloh/hg/sm_latency in case that matters.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5416.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
<li><strong>Previous message:</strong> <a href="5414.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5416.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
<li><strong>Reply:</strong> <a href="5416.php">Ralph Castain: "Re: [OMPI devel] svn commit"</a>
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
