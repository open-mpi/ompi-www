<?
$subject_val = "Re: [MTT devel] MTT static site problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 14:29:55 2008" -->
<!-- isoreceived="20081223192955" -->
<!-- sent="Tue, 23 Dec 2008 14:29:49 -0500" -->
<!-- isosent="20081223192949" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT static site problem" -->
<!-- id="76A3D408-A859-4FFE-AF9E-EED891619438_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ED70099A-97B9-4503-8ECE-31921ED1C657_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTT static site problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-23 14:29:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/02/0311.php">Mike Dubman: "[MTT devel] visual reports for mtt"</a>
<li><strong>Previous message:</strong> <a href="0309.php">Jeff Squyres: "[MTT devel] MTT static site problem"</a>
<li><strong>In reply to:</strong> <a href="0309.php">Jeff Squyres: "[MTT devel] MTT static site problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check that; I got DongInn to exclude /mtt/vis via the rsyncd.conf file  
<br>
and I confirmed that it'll delete that whole tree on those who are  
<br>
using rsync to mirror the Open MPI site.
<br>
<p>Problem solved...
<br>
<p><p>On Dec 23, 2008, at 1:59 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I think we have a bit of a problem with the statically-generated  
</span><br>
<span class="quotelev1">&gt; data from MTT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you use rsync to mirror the Open MPI web site, you get 3GB of  
</span><br>
<span class="quotelev1">&gt; data in the resulting mtt/ directory, approximately 99.99% of which  
</span><br>
<span class="quotelev1">&gt; is in mtt/vis/.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can we trim the contents of this directory?  We're costing our  
</span><br>
<span class="quotelev1">&gt; mirrors a lot of bandwidth and disk space.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not 100% sure, but I don't think we can just disallow this tree  
</span><br>
<span class="quotelev1">&gt; via /etc/rsyncd.conf without first making it look like it was  
</span><br>
<span class="quotelev1">&gt; deleted first (so that those who are syncing via rsync will first  
</span><br>
<span class="quotelev1">&gt; remove their copies of it)...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/02/0311.php">Mike Dubman: "[MTT devel] visual reports for mtt"</a>
<li><strong>Previous message:</strong> <a href="0309.php">Jeff Squyres: "[MTT devel] MTT static site problem"</a>
<li><strong>In reply to:</strong> <a href="0309.php">Jeff Squyres: "[MTT devel] MTT static site problem"</a>
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
