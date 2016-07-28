<?
$subject_val = "Re: [OMPI devel] orte_default_hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 12:05:51 2008" -->
<!-- isoreceived="20081215170551" -->
<!-- sent="Mon, 15 Dec 2008 10:05:43 -0700" -->
<!-- isosent="20081215170543" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_default_hostfile" -->
<!-- id="74A467A0-70B4-47A4-93DE-62118FFEF0D8_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="81C8B63C-BFBA-4AF9-A270-3727CFFF6D04_at_computer.org" -->
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
<strong>Date:</strong> 2008-12-15 12:05:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5070.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Previous message:</strong> <a href="5068.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>In reply to:</strong> <a href="5068.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5070.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Reply:</strong> <a href="5070.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&lt;laugh&gt; can't argue with that logic! I'll make the change and file the  
<br>
CMR.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Dec 15, 2008, at 9:06 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think mainly because it simplifies installation of ompi for PTP  
</span><br>
<span class="quotelev1">&gt; users. Since PTP uses the hostfile to display the system  
</span><br>
<span class="quotelev1">&gt; configuration, we're pretty much always going to have one (although  
</span><br>
<span class="quotelev1">&gt; PTP does work without it, feedback is more limited). It's much  
</span><br>
<span class="quotelev1">&gt; easier for people to add a list of hosts to a file, than have to go  
</span><br>
<span class="quotelev1">&gt; and add something to the param file as well (it's hard enough to get  
</span><br>
<span class="quotelev1">&gt; them to do the former correctly).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2008, at 1:51 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you help me understand something here? I'm not opposed to  
</span><br>
<span class="quotelev2">&gt;&gt; making the change - just puzzled as to why the value of the default  
</span><br>
<span class="quotelev2">&gt;&gt; hostfile name is of concern to Eclipse.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is one reason not to set a default name - it causes us to  
</span><br>
<span class="quotelev2">&gt;&gt; open and read that file, even though nobody ever put something in  
</span><br>
<span class="quotelev2">&gt;&gt; it. Remember, we distribute and install an empty default hostfile  
</span><br>
<span class="quotelev2">&gt;&gt; that contains instructions on how to build one, so it will always  
</span><br>
<span class="quotelev2">&gt;&gt; exist. Since the name of the default hostfile can be set in the  
</span><br>
<span class="quotelev2">&gt;&gt; default MCA param file, environment, or cmd line, there didn't seem  
</span><br>
<span class="quotelev2">&gt;&gt; to be any real reason to define some special name.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It isn't a big deal, though, so I don't really care that much. But  
</span><br>
<span class="quotelev2">&gt;&gt; I would like to understand why Eclipse cares so we can factor that  
</span><br>
<span class="quotelev2">&gt;&gt; into any future thinking.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 12, 2008, at 7:11 AM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From our perspective, it would be good if it could default to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; old behavior (in 1.3 if possible).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 8, 2008, at 11:42 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't think there was any overt thought given to it, at least  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not on my part. I suspect it came about because (a) the wiki  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; defining hostfile behavior made no mention of the default value,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (b) I may have overlooked the prior default when rewriting that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code, and (c) since we now have default-hostfile as well as  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostfile, it could be I didn't default the name since it isn't  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; clear which one should get the default.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I honestly don't remember - this has been in the code base for a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; really long time now.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have no iron in this fire - as you know, all of our environs  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; here are managed. So I guess I'll throw it out there to the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; community:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do we want --default-hostfile to have a default value?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Pros: it could be considered a continuation of 1.2's hostfile  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; behavior
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cons: we treat hostfile in a totally different way in 1.3. We now  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have two hostfiles: a default that applies to all app_contexts,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and a hostfile that applies to only one app_context. It would  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seem that the default-hostfile best aligns with the old  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;hostfile&quot; behavior, but could lead to some confusion in its new  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; usage.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any preferences/thoughts?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 5, 2008, at 9:15 AM, Greg Watson wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In 1.2.x, the rds_hostfile_path parameter pointed to openmpi- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; default-hostfile by default. This parameter has been replaced  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with orte_default_hostfile in 1.3, but now it defaults to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;none&gt;. Was there any particular reason for the default value to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; change?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5070.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Previous message:</strong> <a href="5068.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>In reply to:</strong> <a href="5068.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5070.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
<li><strong>Reply:</strong> <a href="5070.php">Ralph Castain: "Re: [OMPI devel] orte_default_hostfile"</a>
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
