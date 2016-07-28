<?
$subject_val = "[OMPI devel] MPI implementation requirements for low-layer network APIs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 14:48:33 2014" -->
<!-- isoreceived="20140108194833" -->
<!-- sent="Wed, 8 Jan 2014 19:48:29 +0000" -->
<!-- isosent="20140108194829" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI implementation requirements for low-layer network APIs" -->
<!-- id="0C42690F-FEB8-43E9-A14A-503CD7E4FF4D_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI implementation requirements for low-layer network APIs<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 14:48:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13593.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Previous message:</strong> <a href="13591.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - static link failure on NetBSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version:
<br>
==============
<br>
<p>Sean Hefty from Intel is soliciting feedback from the MPI community about what MPI needs from a new low-level networking API (that hopes to be the successor to libibverbs).  He has asked me to gather this feedback and present it to the OpenFabrics &quot;libfabric&quot; working group on January 21.
<br>
<p>Please a) unicast email to me what you would like to convey to this working group by COB next Tuesday (January 14), and/or b) sign up on the Doodle below to join a webex to review the collected feedback before I present it to the OpenFabrics working group.  Due to the short turnaround, I picked several days at the end of next week:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://doodle.com/44uea5v38euu6smh">http://doodle.com/44uea5v38euu6smh</a>
<br>
<p><p>More detail:
<br>
============
<br>
<p>As some of you may already be aware, Sean Hefty at Intel is leading an effort in the OpenFabrics community to basically re-design the network layer API for userspace to talk directly with hardware.  Sean has been presenting his vision of this new &quot;libfabric&quot; for a little while now; he even hosted a BOF about it at SC'13.  You can think of it as &quot;verbs 2.0&quot;, but it's really quite a bit more than that:
<br>
<p>a) it's starting the API over from scratch
<br>
b) there's no implicit design requirements for InfiniBand
<br>
c) there's no need to be API/ABI compatible with current generations of the libibverbs API
<br>
<p>One of the major explicit goals of libfabric is to support MPI well.  Bad memory registration support is probably the easiest-to-discuss verbs complaint that we MPI developers have had over the years, but there are other areas where verbs is lacking, too.
<br>
<p>Now is the chance for us to voice MPI's requirements.  
<br>
<p>Here's my plan:
<br>
<p>1. I have many opinions in this area, and I know many of you do, too.  Please send me your opinions and feedback in whatever format you'd prefer:
<br>
<p>- email/text
<br>
- slides
<br>
- word documents
<br>
- pictures of whiteboards with notes
<br>
- ...etc.
<br>
<p>NOTE: The OpenFabrics working group is basically assuming that we can all rattle off the tops of our heads what MPI wants (which is probably a good assumption), so please send your feedback by COB Tuesday, January 14, 2014.
<br>
<p>2. I'll take all this feedback and assemble it into a cohesive story/set of slides.
<br>
<p>3. I'll then host a webex late next week (signup on the Doodle so that we can find a time that works for the most people) to both go over the slides from the feedback received so far as well as solicit any further feedback from people on the call.
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://doodle.com/44uea5v38euu6smh">http://doodle.com/44uea5v38euu6smh</a>
<br>
<p>4. Finally, I'll take the results of discussion from the webex and present the final slides to the OpenFabrics working group on Jan 21.
<br>
<p>Your input would be greatly appreciated.  Many thanks for your time.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13593.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Previous message:</strong> <a href="13591.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - static link failure on NetBSD"</a>
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
