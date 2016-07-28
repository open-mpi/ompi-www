<?
$subject_val = "[MTT devel] MTT static site problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 13:59:27 2008" -->
<!-- isoreceived="20081223185927" -->
<!-- sent="Tue, 23 Dec 2008 13:59:21 -0500" -->
<!-- isosent="20081223185921" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] MTT static site problem" -->
<!-- id="ED70099A-97B9-4503-8ECE-31921ED1C657_at_cisco.com" -->
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
<strong>Subject:</strong> [MTT devel] MTT static site problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-23 13:59:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0310.php">Jeff Squyres: "Re: [MTT devel] MTT static site problem"</a>
<li><strong>Previous message:</strong> <a href="0308.php">Tim Mattox: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1262"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0310.php">Jeff Squyres: "Re: [MTT devel] MTT static site problem"</a>
<li><strong>Reply:</strong> <a href="0310.php">Jeff Squyres: "Re: [MTT devel] MTT static site problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we have a bit of a problem with the statically-generated data  
<br>
from MTT.
<br>
<p>If you use rsync to mirror the Open MPI web site, you get 3GB of data  
<br>
in the resulting mtt/ directory, approximately 99.99% of which is in  
<br>
mtt/vis/.
<br>
<p>Can we trim the contents of this directory?  We're costing our mirrors  
<br>
a lot of bandwidth and disk space.
<br>
<p>I'm not 100% sure, but I don't think we can just disallow this tree  
<br>
via /etc/rsyncd.conf without first making it look like it was deleted  
<br>
first (so that those who are syncing via rsync will first remove their  
<br>
copies of it)...?
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
<li><strong>Next message:</strong> <a href="0310.php">Jeff Squyres: "Re: [MTT devel] MTT static site problem"</a>
<li><strong>Previous message:</strong> <a href="0308.php">Tim Mattox: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1262"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0310.php">Jeff Squyres: "Re: [MTT devel] MTT static site problem"</a>
<li><strong>Reply:</strong> <a href="0310.php">Jeff Squyres: "Re: [MTT devel] MTT static site problem"</a>
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
