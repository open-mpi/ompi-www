<?
$subject_val = "Re: [OMPI devel] orte_default_hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 08:51:11 2008" -->
<!-- isoreceived="20081215135111" -->
<!-- sent="Mon, 15 Dec 2008 06:51:04 -0700" -->
<!-- isosent="20081215135104" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_default_hostfile" -->
<!-- id="37F00A25-592D-4F81-8D82-EB72F91B34F3_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AC7A76E3-703C-4E17-AC22-7BEE66D2A03B_at_computer.org" -->
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
<strong>Date:</strong> 2008-12-15 08:51:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5068.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Previous message:</strong> <a href="5066.php">Ralph Castain: "[OMPI devel] All_Reduce scaling?"</a>
<li><strong>In reply to:</strong> <a href="5050.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5068.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Reply:</strong> <a href="5068.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you help me understand something here? I'm not opposed to making  
<br>
the change - just puzzled as to why the value of the default hostfile  
<br>
name is of concern to Eclipse.
<br>
<p>There is one reason not to set a default name - it causes us to open  
<br>
and read that file, even though nobody ever put something in it.  
<br>
Remember, we distribute and install an empty default hostfile that  
<br>
contains instructions on how to build one, so it will always exist.  
<br>
Since the name of the default hostfile can be set in the default MCA  
<br>
param file, environment, or cmd line, there didn't seem to be any real  
<br>
reason to define some special name.
<br>
<p>It isn't a big deal, though, so I don't really care that much. But I  
<br>
would like to understand why Eclipse cares so we can factor that into  
<br>
any future thinking.
<br>
<p>Ralph
<br>
<p><p><p>On Dec 12, 2008, at 7:11 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; From our perspective, it would be good if it could default to the  
</span><br>
<span class="quotelev1">&gt; old behavior (in 1.3 if possible).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 8, 2008, at 11:42 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think there was any overt thought given to it, at least not  
</span><br>
<span class="quotelev2">&gt;&gt; on my part. I suspect it came about because (a) the wiki defining  
</span><br>
<span class="quotelev2">&gt;&gt; hostfile behavior made no mention of the default value, (b) I may  
</span><br>
<span class="quotelev2">&gt;&gt; have overlooked the prior default when rewriting that code, and (c)  
</span><br>
<span class="quotelev2">&gt;&gt; since we now have default-hostfile as well as hostfile, it could be  
</span><br>
<span class="quotelev2">&gt;&gt; I didn't default the name since it isn't clear which one should get  
</span><br>
<span class="quotelev2">&gt;&gt; the default.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I honestly don't remember - this has been in the code base for a  
</span><br>
<span class="quotelev2">&gt;&gt; really long time now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have no iron in this fire - as you know, all of our environs here  
</span><br>
<span class="quotelev2">&gt;&gt; are managed. So I guess I'll throw it out there to the community:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; do we want --default-hostfile to have a default value?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pros: it could be considered a continuation of 1.2's hostfile  
</span><br>
<span class="quotelev2">&gt;&gt; behavior
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cons: we treat hostfile in a totally different way in 1.3. We now  
</span><br>
<span class="quotelev2">&gt;&gt; have two hostfiles: a default that applies to all app_contexts, and  
</span><br>
<span class="quotelev2">&gt;&gt; a hostfile that applies to only one app_context. It would seem that  
</span><br>
<span class="quotelev2">&gt;&gt; the default-hostfile best aligns with the old &quot;hostfile&quot; behavior,  
</span><br>
<span class="quotelev2">&gt;&gt; but could lead to some confusion in its new usage.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any preferences/thoughts?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 5, 2008, at 9:15 AM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In 1.2.x, the rds_hostfile_path parameter pointed to openmpi- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default-hostfile by default. This parameter has been replaced with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_default_hostfile in 1.3, but now it defaults to &lt;none&gt;. Was  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there any particular reason for the default value to change?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5068.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Previous message:</strong> <a href="5066.php">Ralph Castain: "[OMPI devel] All_Reduce scaling?"</a>
<li><strong>In reply to:</strong> <a href="5050.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5068.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Reply:</strong> <a href="5068.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
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
