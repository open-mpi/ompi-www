<?
$subject_val = "Re: [OMPI devel] orte_default_hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 11:06:50 2008" -->
<!-- isoreceived="20081215160650" -->
<!-- sent="Mon, 15 Dec 2008 16:06:45 +0000" -->
<!-- isosent="20081215160645" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_default_hostfile" -->
<!-- id="81C8B63C-BFBA-4AF9-A270-3727CFFF6D04_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="37F00A25-592D-4F81-8D82-EB72F91B34F3_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-12-15 11:06:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5069.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Previous message:</strong> <a href="5067.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>In reply to:</strong> <a href="5067.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5069.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Reply:</strong> <a href="5069.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I think mainly because it simplifies installation of ompi for PTP  
<br>
users. Since PTP uses the hostfile to display the system  
<br>
configuration, we're pretty much always going to have one (although  
<br>
PTP does work without it, feedback is more limited). It's much easier  
<br>
for people to add a list of hosts to a file, than have to go and add  
<br>
something to the param file as well (it's hard enough to get them to  
<br>
do the former correctly).
<br>
<p>Greg
<br>
<p>On Dec 15, 2008, at 1:51 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Can you help me understand something here? I'm not opposed to making  
</span><br>
<span class="quotelev1">&gt; the change - just puzzled as to why the value of the default  
</span><br>
<span class="quotelev1">&gt; hostfile name is of concern to Eclipse.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is one reason not to set a default name - it causes us to open  
</span><br>
<span class="quotelev1">&gt; and read that file, even though nobody ever put something in it.  
</span><br>
<span class="quotelev1">&gt; Remember, we distribute and install an empty default hostfile that  
</span><br>
<span class="quotelev1">&gt; contains instructions on how to build one, so it will always exist.  
</span><br>
<span class="quotelev1">&gt; Since the name of the default hostfile can be set in the default MCA  
</span><br>
<span class="quotelev1">&gt; param file, environment, or cmd line, there didn't seem to be any  
</span><br>
<span class="quotelev1">&gt; real reason to define some special name.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It isn't a big deal, though, so I don't really care that much. But I  
</span><br>
<span class="quotelev1">&gt; would like to understand why Eclipse cares so we can factor that  
</span><br>
<span class="quotelev1">&gt; into any future thinking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2008, at 7:11 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From our perspective, it would be good if it could default to the  
</span><br>
<span class="quotelev2">&gt;&gt; old behavior (in 1.3 if possible).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 8, 2008, at 11:42 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't think there was any overt thought given to it, at least  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not on my part. I suspect it came about because (a) the wiki  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; defining hostfile behavior made no mention of the default value,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (b) I may have overlooked the prior default when rewriting that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code, and (c) since we now have default-hostfile as well as  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile, it could be I didn't default the name since it isn't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clear which one should get the default.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I honestly don't remember - this has been in the code base for a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; really long time now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have no iron in this fire - as you know, all of our environs  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here are managed. So I guess I'll throw it out there to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; community:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do we want --default-hostfile to have a default value?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pros: it could be considered a continuation of 1.2's hostfile  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behavior
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cons: we treat hostfile in a totally different way in 1.3. We now  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have two hostfiles: a default that applies to all app_contexts,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and a hostfile that applies to only one app_context. It would seem  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that the default-hostfile best aligns with the old &quot;hostfile&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behavior, but could lead to some confusion in its new usage.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any preferences/thoughts?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 5, 2008, at 9:15 AM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In 1.2.x, the rds_hostfile_path parameter pointed to openmpi- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default-hostfile by default. This parameter has been replaced  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with orte_default_hostfile in 1.3, but now it defaults to &lt;none&gt;.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Was there any particular reason for the default value to change?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5069.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Previous message:</strong> <a href="5067.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>In reply to:</strong> <a href="5067.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5069.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Reply:</strong> <a href="5069.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
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
