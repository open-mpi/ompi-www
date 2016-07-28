<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  7 11:12:43 2006" -->
<!-- isoreceived="20061207161243" -->
<!-- sent="Thu, 7 Dec 2006 11:12:23 -0500" -->
<!-- isosent="20061207161223" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Major revision to the RML/OOB" -->
<!-- id="3ACD7B0A-EDD5-48EC-AA89-DE33005EB0BB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061206145925.GF7117_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-07 11:12:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1225.php">Jens Páll Hafsteinsson: "[OMPI devel] Open MPI on Windows (native)"</a>
<li><strong>Previous message:</strong> <a href="1223.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>In reply to:</strong> <a href="1223.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1226.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Reply:</strong> <a href="1226.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 6, 2006, at 9:59 AM, Adrian Knoth wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The concern is that we want to leave open the possibility of  
</span><br>
<span class="quotelev2">&gt;&gt; putting this
</span><br>
<span class="quotelev2">&gt;&gt; revision into 1.2 since it will have a major performance impact on  
</span><br>
<span class="quotelev2">&gt;&gt; both
</span><br>
<span class="quotelev2">&gt;&gt; startup time and the max cluster size we can support. The IP6 code is
</span><br>
<span class="quotelev2">&gt;&gt; scheduled for 1.3 and we don't know what the performance impact  
</span><br>
<span class="quotelev2">&gt;&gt; will look
</span><br>
<span class="quotelev2">&gt;&gt; like - hence the hesitation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree not to include IPv6 in the v1.2 (you might remove the  
</span><br>
<span class="quotelev1">&gt; configure
</span><br>
<span class="quotelev1">&gt; patch from the v1.2 line, or leave it there without really using it)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If one considers the current v1.2 branch as stable, the trunk could
</span><br>
<span class="quotelev1">&gt; be used for the new v1.3 line.
</span><br>
<p>That's the plan -- once we fork off a branch for a release series,  
<br>
the trunk assumes the identity of the next release series.  Hence,  
<br>
there's branches for 1.0, 1.1, and 1.2, and therefore the trunk is  
<br>
currently the 1.3 series.  Once we branch for 1.3, the trunk will  
<br>
become 1.4.  And so on.
<br>
<p><span class="quotelev1">&gt; I therefore suggest to move the OPAL changes into the trunk,
</span><br>
<span class="quotelev1">&gt; also the small hostfile code (lex code for IPv6) and the btl code.
</span><br>
<p>Can you describe the changes in opal that were made for IPv6?
<br>
<p><span class="quotelev1">&gt; When you've completed all changes to the OOB, we can have a look
</span><br>
<span class="quotelev1">&gt; and do the necessary IPv6 changes afterwards. Though I feel the oob/ 
</span><br>
<span class="quotelev1">&gt; tcp
</span><br>
<span class="quotelev1">&gt; is the hardest part of all (it got the most modifications), I hope
</span><br>
<span class="quotelev1">&gt; that it's possible to copy a lot of the existing patch. Perhaps
</span><br>
<span class="quotelev1">&gt; your rewrite simplifies something.
</span><br>
<p>I don't think that it'll change much in your code (a total guess, but  
<br>
based on what I think needs changing in the oob tcp).  The main  
<br>
things we'll be changing is *when* socket connections are made and  
<br>
how the tcp component gets the contact info for the other procs.
<br>
<p><span class="quotelev1">&gt; I'm currently not developing new code, so at least the IPv6 codebase
</span><br>
<span class="quotelev1">&gt; isn't a moving target.
</span><br>
<p>Excellent.  Thanks for being diligent about this!
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1225.php">Jens Páll Hafsteinsson: "[OMPI devel] Open MPI on Windows (native)"</a>
<li><strong>Previous message:</strong> <a href="1223.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>In reply to:</strong> <a href="1223.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1226.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Reply:</strong> <a href="1226.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
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
