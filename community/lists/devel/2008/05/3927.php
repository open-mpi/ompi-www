<?
$subject_val = "Re: [OMPI devel] openib btl code review";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 18 09:46:24 2008" -->
<!-- isoreceived="20080518134624" -->
<!-- sent="Sun, 18 May 2008 16:46:14 +0300" -->
<!-- isosent="20080518134614" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl code review" -->
<!-- id="20080518134614.GR21806_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="44B2091E-0659-47C8-9C69-CA07D3ABD7FE_at_cisco.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-18 09:46:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3928.php">Jeff Squyres: "[OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3926.php">Caciano Machado: "Re: [OMPI devel] PML names OB1, DR and CM"</a>
<li><strong>In reply to:</strong> <a href="3924.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 15, 2008 at 11:58:02PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I updated the patch on <a href="https://svn.open-mpi.org/trac/ompi/ticket/1285">https://svn.open-mpi.org/trac/ompi/ticket/1285</a>  
</span><br>
<span class="quotelev1">&gt; per Gleb's suggestions (I made a few commits tonight with some of the  
</span><br>
<span class="quotelev1">&gt; non-receive-queues-patch-related fixes) and with some fixes for issues  
</span><br>
<span class="quotelev1">&gt; that Nysal found.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please see the most recent patch on the ticket.
</span><br>
Looks good to me.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 15, 2008, at 11:01 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 15, 2008, at 8:46 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Any other reviewers would be welcome...  :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'll look at it next week too.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - some random style cleanup
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - fix a few minor memory leaks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; These two are the only ones that are really separate from the rest.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - adapt _ini.c to accept the &quot;receive_queues&quot; field in the file
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - move 90% of _setup_qps() from _ini.c to _component.c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - move what was left of _setup_qps() into the main
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _register_mca_params() function
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - adapt init_one_hca() to detect conflicting receive_queues values
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; from the INI file
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - after the _component.c loop calling init_one_hca():
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - call setup_qps() to parse the final receive_queues string value
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - traverse all resulting btls and initialize their HCAs (if they
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; weren't already): setup some lists and call prepare_hca_for_use()
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It is better to have separate patch (and commit) for each of these
</span><br>
<span class="quotelev3">&gt; &gt;&gt; items.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Doing review and dialing with bugs is much easier this way.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'll separate out the first two into separate fixes; I can even commit
</span><br>
<span class="quotelev2">&gt; &gt; those because they're pretty harmless and small.  FWIW: all of the
</span><br>
<span class="quotelev2">&gt; &gt; style changes were because I tried several approaches for the
</span><br>
<span class="quotelev2">&gt; &gt; receive_queues stuff before I found one that worked (i.e., I adapted
</span><br>
<span class="quotelev2">&gt; &gt; style of code that I touched, but then ended up reverting everything
</span><br>
<span class="quotelev2">&gt; &gt; except the style changes).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3928.php">Jeff Squyres: "[OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3926.php">Caciano Machado: "Re: [OMPI devel] PML names OB1, DR and CM"</a>
<li><strong>In reply to:</strong> <a href="3924.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
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
