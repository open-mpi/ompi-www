<?
$subject_val = "[MTT devel] More GDS questions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 18:23:53 2010" -->
<!-- isoreceived="20100211232353" -->
<!-- sent="Thu, 11 Feb 2010 18:23:46 -0500" -->
<!-- isosent="20100211232346" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] More GDS questions" -->
<!-- id="26AAFE08-06CE-4BBA-AFA3-249F82794AB8_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [MTT devel] More GDS questions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 18:23:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0479.php">Jeff Squyres: "[MTT devel] MTT GDS -- one more..."</a>
<li><strong>Previous message:</strong> <a href="0477.php">Jeff Squyres: "[MTT devel] GDS errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0484.php">Igor Ivanov: "Re: [MTT devel] More GDS questions"</a>
<li><strong>Reply:</strong> <a href="0484.php">Igor Ivanov: "Re: [MTT devel] More GDS questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Igor et al. -- 
<br>
<p>1. I'm not sure you saw Ethan's and my posts from the past day or so about GDS on the mtt-devel list; it just occurred to me that I don't know if you're members of the list or not.  We've posted a few questions and comments that you may not have received if you're not on the list:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/index.php">http://www.open-mpi.org/community/lists/mtt-devel/2010/02/index.php</a>
<br>
<p>2. I'm still looking into the perl syntax error that caused my Big Submit to GDS to fail.  But looking at the Google logs, it looks like at least *some* of my test run results made it up to GDS.  There was a BIG spike in CPU usage (3.2 hours of CPU time!) when it submitted -- see the attached CPU usage graph from the apps dashboard.
<br>
<p>Does anyone know why it takes so much CPU just to submit data to GDS?  3.2 CPU hours is a LOT!
<br>
<p>It makes me a bit concerned that only part of a single Cisco MTT run submit checked through almost half of our daily CPU quota (6.5 CPU hours/day).  Is there any way to reduce the amount of CPU necessary just to submit data?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<img src="http://www.open-mpi.org/community/lists/mtt-devel/att-0478/Second__all_.png" alt="Second__all_.png">
<!-- attachment="Second__all_.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0479.php">Jeff Squyres: "[MTT devel] MTT GDS -- one more..."</a>
<li><strong>Previous message:</strong> <a href="0477.php">Jeff Squyres: "[MTT devel] GDS errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0484.php">Igor Ivanov: "Re: [MTT devel] More GDS questions"</a>
<li><strong>Reply:</strong> <a href="0484.php">Igor Ivanov: "Re: [MTT devel] More GDS questions"</a>
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
