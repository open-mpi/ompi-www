<?
$subject_val = "Re: [OMPI devel] Add child to another parent.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 18:11:51 2011" -->
<!-- isoreceived="20110324221151" -->
<!-- sent="Thu, 24 Mar 2011 16:11:42 -0600" -->
<!-- isosent="20110324221142" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Add child to another parent." -->
<!-- id="BB04A53A-1810-4D7C-8D52-3E20BE720A15_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimpwpLQDa9PEG20PJDXqUO4p8aopkDSjb04hoM__at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Add child to another parent.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 18:11:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9131.php">Jeff Squyres: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9129.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>In reply to:</strong> <a href="9129.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9141.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Reply:</strong> <a href="9141.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 24, 2011, at 3:57 PM, Hugo Meyer wrote:
<br>
<p><span class="quotelev1">&gt; 2011/3/24 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; You really don't want to do it that way - you'll create a major confusion in mpirun and the other daemons about who is where. Have you looked at the code in orte/mca/errmgr/hnp/errmgr_hnp.c, line 1573 and following?
</span><br>
<span class="quotelev1">&gt; I did not look at that, but i will do it right now. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ability to relocate a failed child process is already in the trunk - it only requires turning &quot;on&quot; with an --enable-recovery flag at runtime if you don't need the checkpoint/restart support. If you do need C/R, you can use that too (just requires some configure flags).
</span><br>
<span class="quotelev1">&gt; About this, i'm needing C/R support, because what i'm trying to do is to restart a process in another node(as a child of the orted residing there) from a previous checkpoint .I will take a look to the relocation feature that you are mentioning and try to use it.
</span><br>
<p>From what you've described before, I suspect all you'll need to do is add some code in orte/mca/odls/base/odls_base_default_fns.c that (a) checks to see if a process in the launch message is being relocated (the construct_child_list code does that already), and then (b) sends the required info to all local child processes so they can take appropriate action.
<br>
<p>Failure detection, re-launch, etc. have all been taken care of for you.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the least, the cited code should provide guidance on how to correctly restart procs if you need your own errmgr module for other reasons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again thanks Ralph, you have been very helpful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9130/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9131.php">Jeff Squyres: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9129.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>In reply to:</strong> <a href="9129.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9141.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Reply:</strong> <a href="9141.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
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
