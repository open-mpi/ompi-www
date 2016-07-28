<?
$subject_val = "Re: [OMPI devel] Add child to another parent.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 17:57:20 2011" -->
<!-- isoreceived="20110324215720" -->
<!-- sent="Thu, 24 Mar 2011 22:57:16 +0100" -->
<!-- isosent="20110324215716" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Add child to another parent." -->
<!-- id="AANLkTimpwpLQDa9PEG20PJDXqUO4p8aopkDSjb04hoM__at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DD59B41C-C3FA-4B90-B651-49C0F7B0AED3_at_open-mpi.org" -->
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
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 17:57:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9130.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9128.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9127.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9130.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Reply:</strong> <a href="9130.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2011/3/24 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; You really don't want to do it that way - you'll create a major confusion
</span><br>
<span class="quotelev1">&gt; in mpirun and the other daemons about who is where. Have you looked at the
</span><br>
<span class="quotelev1">&gt; code in orte/mca/errmgr/hnp/errmgr_hnp.c, line 1573 and following?
</span><br>
<span class="quotelev1">&gt;
</span><br>
I did not look at that, but i will do it right now.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ability to relocate a failed child process is already in the trunk - it
</span><br>
<span class="quotelev1">&gt; only requires turning &quot;on&quot; with an --enable-recovery flag at runtime if you
</span><br>
<span class="quotelev1">&gt; don't need the checkpoint/restart support. If you do need C/R, you can use
</span><br>
<span class="quotelev1">&gt; that too (just requires some configure flags).
</span><br>
<span class="quotelev1">&gt;
</span><br>
About this, i'm needing C/R support, because what i'm trying to do is to
<br>
restart a process in another node(as a child of the orted residing there)
<br>
from a previous checkpoint .I will take a look to the relocation feature
<br>
that you are mentioning and try to use it.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the least, the cited code should provide guidance on how to correctly
</span><br>
<span class="quotelev1">&gt; restart procs if you need your own errmgr module for other reasons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Again thanks Ralph, you have been very helpful.
<br>
<p>Best regards.
<br>
<p>Hugo Meyer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9129/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9130.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9128.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9127.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9130.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Reply:</strong> <a href="9130.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
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
