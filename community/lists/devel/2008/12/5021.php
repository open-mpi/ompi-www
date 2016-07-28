<?
$subject_val = "Re: [OMPI devel] orte_default_hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 11:42:44 2008" -->
<!-- isoreceived="20081208164244" -->
<!-- sent="Mon, 8 Dec 2008 09:42:35 -0700" -->
<!-- isosent="20081208164235" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_default_hostfile" -->
<!-- id="530AB07E-2B82-45D6-95F4-BD3B5768AB88_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="78E6789C-ABB2-4A7E-8672-815B3A18E263_at_computer.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 11:42:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5022.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5020.php">Ralph Castain: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>In reply to:</strong> <a href="5015.php">Greg Watson: "[OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5050.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Reply:</strong> <a href="5050.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think there was any overt thought given to it, at least not on  
<br>
my part. I suspect it came about because (a) the wiki defining  
<br>
hostfile behavior made no mention of the default value, (b) I may have  
<br>
overlooked the prior default when rewriting that code, and (c) since  
<br>
we now have default-hostfile as well as hostfile, it could be I didn't  
<br>
default the name since it isn't clear which one should get the default.
<br>
<p>I honestly don't remember - this has been in the code base for a  
<br>
really long time now.
<br>
<p>I have no iron in this fire - as you know, all of our environs here  
<br>
are managed. So I guess I'll throw it out there to the community:
<br>
<p>do we want --default-hostfile to have a default value?
<br>
<p>Pros: it could be considered a continuation of 1.2's hostfile behavior
<br>
<p>Cons: we treat hostfile in a totally different way in 1.3. We now have  
<br>
two hostfiles: a default that applies to all app_contexts, and a  
<br>
hostfile that applies to only one app_context. It would seem that the  
<br>
default-hostfile best aligns with the old &quot;hostfile&quot; behavior, but  
<br>
could lead to some confusion in its new usage.
<br>
<p>Any preferences/thoughts?
<br>
Ralph
<br>
<p>On Dec 5, 2008, at 9:15 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In 1.2.x, the rds_hostfile_path parameter pointed to openmpi-default- 
</span><br>
<span class="quotelev1">&gt; hostfile by default. This parameter has been replaced with  
</span><br>
<span class="quotelev1">&gt; orte_default_hostfile in 1.3, but now it defaults to &lt;none&gt;. Was  
</span><br>
<span class="quotelev1">&gt; there any particular reason for the default value to change?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
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
<li><strong>Next message:</strong> <a href="5022.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5020.php">Ralph Castain: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>In reply to:</strong> <a href="5015.php">Greg Watson: "[OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5050.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Reply:</strong> <a href="5050.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
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
