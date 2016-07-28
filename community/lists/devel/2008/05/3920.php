<?
$subject_val = "Re: [OMPI devel] openib btl code review";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 08:14:39 2008" -->
<!-- isoreceived="20080515121439" -->
<!-- sent="Thu, 15 May 2008 08:14:29 -0400" -->
<!-- isosent="20080515121429" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl code review" -->
<!-- id="C1A663F4-8AF8-47F9-921D-40998AB0B80A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="608E7B83-C20A-4D1E-99CE-7229FECDCCCE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib btl code review<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-15 08:14:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3921.php">Gleb Natapov: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>Previous message:</strong> <a href="3919.php">Torje Henriksen: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>In reply to:</strong> <a href="3914.php">Jeff Squyres: "[OMPI devel] openib btl code review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3921.php">Gleb Natapov: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>Reply:</strong> <a href="3921.php">Gleb Natapov: "Re: [OMPI devel] openib btl code review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha tells me he'll be able to review the patch next week, so I'll  
<br>
wait to commit until then.  I added the patch to the ticket, just so  
<br>
that it doesn't get lost.
<br>
<p>Any other reviewers would be welcome...  :-)
<br>
<p>On May 14, 2008, at 5:39 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1285">https://svn.open-mpi.org/trac/ompi/ticket/1285</a> turned out to be more  
</span><br>
<span class="quotelev1">&gt; complicated than expected (of course).  The startup in the openib  
</span><br>
<span class="quotelev1">&gt; btl mixes resource discovery and initialization (vs. doing  
</span><br>
<span class="quotelev1">&gt; discovery, deciding which hcas/ports/lids to use, initializing them,  
</span><br>
<span class="quotelev1">&gt; and then assigning resources to them), which made the whole &quot;putting  
</span><br>
<span class="quotelev1">&gt; the BSRQ receive_queues value in the INI file&quot; a bit more difficult  
</span><br>
<span class="quotelev1">&gt; than expected -- the code got a bit hairy.  I would appreciate some  
</span><br>
<span class="quotelev1">&gt; more eyes on this code before I commit it; thanks.
</span><br>
<span class="quotelev1">&gt; ---------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attached patch solves two problems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - allow receive_queues to be specified in the INI file
</span><br>
<span class="quotelev1">&gt; - detect when multiple different receive_queues are specified and  
</span><br>
<span class="quotelev1">&gt; gracefully abort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, accomplishing these goals ran into multiple difficulties.   
</span><br>
<span class="quotelev1">&gt; By putting receive_queues in the INI file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. we may not find the value until we've already traversed multiple  
</span><br>
<span class="quotelev1">&gt; HCAs
</span><br>
<span class="quotelev1">&gt; 2. we may find multiple different receive_queues values
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But since the openib btl initializes as it discovers each HCA/port/ 
</span><br>
<span class="quotelev1">&gt; LID (including the BSRQ data), if we find a new receive_queues value  
</span><br>
<span class="quotelev1">&gt; late in the discovery process, then all the BSRQ data that was  
</span><br>
<span class="quotelev1">&gt; previously initialized will likely be invalid.  So I had to pull all  
</span><br>
<span class="quotelev1">&gt; the BSRQ initialization out until after the rest of the discovery /  
</span><br>
<span class="quotelev1">&gt; initialization process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, note that if the user specifies the MCA parameter  
</span><br>
<span class="quotelev1">&gt; btl_openib_receive_queues, it trumps whatever was in the INI file.   
</span><br>
<span class="quotelev1">&gt; So in this case, there can never be a receive_queues conflict.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attached patch does the following (Jon wrote part of this, too):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - some random style cleanup
</span><br>
<span class="quotelev1">&gt; - fix a few minor memory leaks
</span><br>
<span class="quotelev1">&gt; - adapt _ini.c to accept the &quot;receive_queues&quot; field in the file
</span><br>
<span class="quotelev1">&gt; - move 90% of _setup_qps() from _ini.c to _component.c
</span><br>
<span class="quotelev1">&gt; - move what was left of _setup_qps() into the main  
</span><br>
<span class="quotelev1">&gt; _register_mca_params() function
</span><br>
<span class="quotelev1">&gt; - adapt init_one_hca() to detect conflicting receive_queues values  
</span><br>
<span class="quotelev1">&gt; from the INI file
</span><br>
<span class="quotelev1">&gt; - after the _component.c loop calling init_one_hca():
</span><br>
<span class="quotelev1">&gt;  - call setup_qps() to parse the final receive_queues string value
</span><br>
<span class="quotelev1">&gt;  - traverse all resulting btls and initialize their HCAs (if they  
</span><br>
<span class="quotelev1">&gt; weren't already): setup some lists and call prepare_hca_for_use()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tested this code on a dual-HCA system where I artificially put in  
</span><br>
<span class="quotelev1">&gt; differing receive_queues values in the INI file for the two  
</span><br>
<span class="quotelev1">&gt; different types of HCAs that I have and it all seemed to work.  But  
</span><br>
<span class="quotelev1">&gt; I'd appreciate some more eyes on the code to sanity check.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I hear nothing back by COB tomorrow, I'll commit.  Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; &lt;receive-queues.patch&gt;&lt;mime-attachment.txt&gt;&lt;mime-attachment.txt&gt;
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
<li><strong>Next message:</strong> <a href="3921.php">Gleb Natapov: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>Previous message:</strong> <a href="3919.php">Torje Henriksen: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>In reply to:</strong> <a href="3914.php">Jeff Squyres: "[OMPI devel] openib btl code review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3921.php">Gleb Natapov: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>Reply:</strong> <a href="3921.php">Gleb Natapov: "Re: [OMPI devel] openib btl code review"</a>
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
