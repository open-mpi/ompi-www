<?
$subject_val = "[OMPI devel] Offsite SVN mirrors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 16:33:53 2007" -->
<!-- isoreceived="20071219213353" -->
<!-- sent="Wed, 19 Dec 2007 16:33:46 -0500" -->
<!-- isosent="20071219213346" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Offsite SVN mirrors" -->
<!-- id="579D7290-99E7-4405-ADAC-D89622250005_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Offsite SVN mirrors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-19 16:33:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2887.php">Jeff Squyres: "[OMPI devel] 1.2.5rc2"</a>
<li><strong>Previous message:</strong> <a href="2885.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Outage of the OSL services"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just learned about the &quot;svnsync&quot; command that is available in the  
<br>
SVN 1.4 series.  It lets you maintain a read-only mirror for an entire  
<br>
svn repository.
<br>
<p>I think it would be a good idea to have offsite backups for all of the  
<br>
Open MPI SVN repositories.  Cisco therefore volunteers to svnsync on a  
<br>
daily basis for the following repositories:
<br>
<p>ompi
<br>
ompi-docs
<br>
ompi-tests
<br>
ompi-user-docs
<br>
ompi-www
<br>
<p>These repositories won't be publicly available (i.e., they'll be on  
<br>
the hard disk on my MPI development cluster in the closed engineering  
<br>
lab environment at Cisco), but I'll make them available if/when the  
<br>
community ever needs them.
<br>
<p>Any other takers?  It might be good to have more than one offsite  
<br>
backup, just in case something catastrophic happens.  I think that all  
<br>
this takes is a bunch of disk space (several GB?) and a cron job.
<br>
<p>Rationale: I'm pretty sure that IU also maintains offsite backups, but  
<br>
since disk and bandwidth is fairly cheap (and the bandwidth for  
<br>
incremental backups isn't all that much), having even more backups  
<br>
isn't a bad thing.
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
<li><strong>Next message:</strong> <a href="2887.php">Jeff Squyres: "[OMPI devel] 1.2.5rc2"</a>
<li><strong>Previous message:</strong> <a href="2885.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Outage of the OSL services"</a>
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
