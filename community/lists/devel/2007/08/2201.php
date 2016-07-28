<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 22 10:21:22 2007" -->
<!-- isoreceived="20070822142122" -->
<!-- sent="Wed, 22 Aug 2007 10:22:24 -0400" -->
<!-- isosent="20070822142224" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches" -->
<!-- id="46CC46A0.6070105_at_sun.com" -->
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
<strong>From:</strong> Terry D. Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-22 10:22:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2202.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2200.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2204.php">Rainer Keller: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>Reply:</strong> <a href="2204.php">Rainer Keller: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought I would run this by the group before trying to unravel the 
<br>
code and figure out how to fix the problem.  It looks to me from some 
<br>
experiementation that when a process matches an unexpected message that 
<br>
the PERUSE framework incorrectly fires a 
<br>
PERUSE_COMM_MSG_MATCH_POSTED_REQ in addition to a 
<br>
PERUSE_COMM_REQ_MATCH_UNEX event.  I believe this is wrong that the 
<br>
former event should not be fired in this case.
<br>
<p>If the above assumption is true I think the problem arises because 
<br>
PERUSE_COMM_MSG_MATCH_POSTED_REQ event is fired in function 
<br>
mca_pml_ob1_recv_request_progress which is called by 
<br>
mca_pml_ob1_recv_request_match_specific when a match of an unexpected 
<br>
message has occurred.  I am wondering if the 
<br>
PERUSE_COMM_MSG_MATCH_POSTED_REQ event should be moved to a more posted 
<br>
queue centric routine something like mca_pml_ob1_recv_frag_match?
<br>
<p>Suggestions...thoughts?
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2202.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2200.php">Tim Prins: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2204.php">Rainer Keller: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>Reply:</strong> <a href="2204.php">Rainer Keller: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
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
