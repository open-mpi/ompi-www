<?
$subject_val = "Re: [OMPI devel] orte_default_hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 09:11:53 2008" -->
<!-- isoreceived="20081212141153" -->
<!-- sent="Fri, 12 Dec 2008 09:11:48 -0500" -->
<!-- isosent="20081212141148" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_default_hostfile" -->
<!-- id="AC7A76E3-703C-4E17-AC22-7BEE66D2A03B_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="530AB07E-2B82-45D6-95F4-BD3B5768AB88_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte_default_hostfile<br>
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 09:11:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5051.php">Tim Mattox: "[OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI devel] BML problem?"</a>
<li><strong>In reply to:</strong> <a href="5021.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5067.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Reply:</strong> <a href="5067.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;From our perspective, it would be good if it could default to the old  
<br>
behavior (in 1.3 if possible).
<br>
<p>Thanks,
<br>
Greg
<br>
<p>On Dec 8, 2008, at 11:42 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I don't think there was any overt thought given to it, at least not  
</span><br>
<span class="quotelev1">&gt; on my part. I suspect it came about because (a) the wiki defining  
</span><br>
<span class="quotelev1">&gt; hostfile behavior made no mention of the default value, (b) I may  
</span><br>
<span class="quotelev1">&gt; have overlooked the prior default when rewriting that code, and (c)  
</span><br>
<span class="quotelev1">&gt; since we now have default-hostfile as well as hostfile, it could be  
</span><br>
<span class="quotelev1">&gt; I didn't default the name since it isn't clear which one should get  
</span><br>
<span class="quotelev1">&gt; the default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I honestly don't remember - this has been in the code base for a  
</span><br>
<span class="quotelev1">&gt; really long time now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no iron in this fire - as you know, all of our environs here  
</span><br>
<span class="quotelev1">&gt; are managed. So I guess I'll throw it out there to the community:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do we want --default-hostfile to have a default value?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pros: it could be considered a continuation of 1.2's hostfile behavior
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cons: we treat hostfile in a totally different way in 1.3. We now  
</span><br>
<span class="quotelev1">&gt; have two hostfiles: a default that applies to all app_contexts, and  
</span><br>
<span class="quotelev1">&gt; a hostfile that applies to only one app_context. It would seem that  
</span><br>
<span class="quotelev1">&gt; the default-hostfile best aligns with the old &quot;hostfile&quot; behavior,  
</span><br>
<span class="quotelev1">&gt; but could lead to some confusion in its new usage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any preferences/thoughts?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 5, 2008, at 9:15 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In 1.2.x, the rds_hostfile_path parameter pointed to openmpi- 
</span><br>
<span class="quotelev2">&gt;&gt; default-hostfile by default. This parameter has been replaced with  
</span><br>
<span class="quotelev2">&gt;&gt; orte_default_hostfile in 1.3, but now it defaults to &lt;none&gt;. Was  
</span><br>
<span class="quotelev2">&gt;&gt; there any particular reason for the default value to change?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5051.php">Tim Mattox: "[OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI devel] BML problem?"</a>
<li><strong>In reply to:</strong> <a href="5021.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5067.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Reply:</strong> <a href="5067.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
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
