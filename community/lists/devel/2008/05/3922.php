<?
$subject_val = "Re: [OMPI devel] openib btl code review";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 11:02:04 2008" -->
<!-- isoreceived="20080515150204" -->
<!-- sent="Thu, 15 May 2008 11:01:42 -0400" -->
<!-- isosent="20080515150142" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl code review" -->
<!-- id="8D867833-2487-47F0-A6BE-35448930EE7E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080515124629.GN21806_at_minantech.com" -->
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
<strong>Date:</strong> 2008-05-15 11:01:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3923.php">Caciano Machado: "[OMPI devel] PML names OB1, DR and CM"</a>
<li><strong>Previous message:</strong> <a href="3921.php">Gleb Natapov: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>In reply to:</strong> <a href="3921.php">Gleb Natapov: "Re: [OMPI devel] openib btl code review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3924.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>Reply:</strong> <a href="3924.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 15, 2008, at 8:46 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Any other reviewers would be welcome...  :-)
</span><br>
<span class="quotelev1">&gt; I'll look at it next week too.
</span><br>
<p>Thanks.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; - some random style cleanup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - fix a few minor memory leaks
</span><br>
<p>These two are the only ones that are really separate from the rest.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; - adapt _ini.c to accept the &quot;receive_queues&quot; field in the file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - move 90% of _setup_qps() from _ini.c to _component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - move what was left of _setup_qps() into the main
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _register_mca_params() function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - adapt init_one_hca() to detect conflicting receive_queues values
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the INI file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - after the _component.c loop calling init_one_hca():
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - call setup_qps() to parse the final receive_queues string value
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - traverse all resulting btls and initialize their HCAs (if they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; weren't already): setup some lists and call prepare_hca_for_use()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; It is better to have separate patch (and commit) for each of these  
</span><br>
<span class="quotelev1">&gt; items.
</span><br>
<span class="quotelev1">&gt; Doing review and dialing with bugs is much easier this way.
</span><br>
<p><p>I'll separate out the first two into separate fixes; I can even commit  
<br>
those because they're pretty harmless and small.  FWIW: all of the  
<br>
style changes were because I tried several approaches for the  
<br>
receive_queues stuff before I found one that worked (i.e., I adapted  
<br>
style of code that I touched, but then ended up reverting everything  
<br>
except the style changes).
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
<li><strong>Next message:</strong> <a href="3923.php">Caciano Machado: "[OMPI devel] PML names OB1, DR and CM"</a>
<li><strong>Previous message:</strong> <a href="3921.php">Gleb Natapov: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>In reply to:</strong> <a href="3921.php">Gleb Natapov: "Re: [OMPI devel] openib btl code review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3924.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
<li><strong>Reply:</strong> <a href="3924.php">Jeff Squyres: "Re: [OMPI devel] openib btl code review"</a>
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
