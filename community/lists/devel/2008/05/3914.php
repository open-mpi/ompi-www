<?
$subject_val = "[OMPI devel] openib btl code review";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 17:39:59 2008" -->
<!-- isoreceived="20080514213959" -->
<!-- sent="Wed, 14 May 2008 17:39:44 -0400" -->
<!-- isosent="20080514213944" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openib btl code review" -->
<!-- id="608E7B83-C20A-4D1E-99CE-7229FECDCCCE_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] openib btl code review<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-14 17:39:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3915.php">Torje Henriksen: "[OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>Previous message:</strong> <a href="3913.php">Brad Benton: "Re: [OMPI devel] v1.3 Feature Freeze in effect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3920.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>Reply:</strong> <a href="3920.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1285">https://svn.open-mpi.org/trac/ompi/ticket/1285</a> turned out to be more  
<br>
complicated than expected (of course).  The startup in the openib btl  
<br>
mixes resource discovery and initialization (vs. doing discovery,  
<br>
deciding which hcas/ports/lids to use, initializing them, and then  
<br>
assigning resources to them), which made the whole &quot;putting the BSRQ  
<br>
receive_queues value in the INI file&quot; a bit more difficult than  
<br>
expected -- the code got a bit hairy.  I would appreciate some more  
<br>
eyes on this code before I commit it; thanks.
<br>
---------
<br>
<p>The attached patch solves two problems:
<br>
<p>- allow receive_queues to be specified in the INI file
<br>
- detect when multiple different receive_queues are specified and  
<br>
gracefully abort
<br>
<p>However, accomplishing these goals ran into multiple difficulties.  By  
<br>
putting receive_queues in the INI file:
<br>
<p>1. we may not find the value until we've already traversed multiple HCAs
<br>
2. we may find multiple different receive_queues values
<br>
<p>But since the openib btl initializes as it discovers each HCA/port/LID  
<br>
(including the BSRQ data), if we find a new receive_queues value late  
<br>
in the discovery process, then all the BSRQ data that was previously  
<br>
initialized will likely be invalid.  So I had to pull all the BSRQ  
<br>
initialization out until after the rest of the discovery /  
<br>
initialization process.
<br>
<p>Additionally, note that if the user specifies the MCA parameter  
<br>
btl_openib_receive_queues, it trumps whatever was in the INI file.  So  
<br>
in this case, there can never be a receive_queues conflict.
<br>
<p>The attached patch does the following (Jon wrote part of this, too):
<br>
<p>- some random style cleanup
<br>
- fix a few minor memory leaks
<br>
- adapt _ini.c to accept the &quot;receive_queues&quot; field in the file
<br>
- move 90% of _setup_qps() from _ini.c to _component.c
<br>
- move what was left of _setup_qps() into the main  
<br>
_register_mca_params() function
<br>
- adapt init_one_hca() to detect conflicting receive_queues values  
<br>
from the INI file
<br>
- after the _component.c loop calling init_one_hca():
<br>
&nbsp;&nbsp;&nbsp;- call setup_qps() to parse the final receive_queues string value
<br>
&nbsp;&nbsp;&nbsp;- traverse all resulting btls and initialize their HCAs (if they  
<br>
weren't already): setup some lists and call prepare_hca_for_use()
<br>
<p>I tested this code on a dual-HCA system where I artificially put in  
<br>
differing receive_queues values in the INI file for the two different  
<br>
types of HCAs that I have and it all seemed to work.  But I'd  
<br>
appreciate some more eyes on the code to sanity check.
<br>
<p>If I hear nothing back by COB tomorrow, I'll commit.  Thanks.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems


</pre>
<p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3914/receive-queues.patch">receive-queues.patch</a>
</ul>
<!-- attachment="receive-queues.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3915.php">Torje Henriksen: "[OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>Previous message:</strong> <a href="3913.php">Brad Benton: "Re: [OMPI devel] v1.3 Feature Freeze in effect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3920.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>Reply:</strong> <a href="3920.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
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
