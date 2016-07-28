<?
$subject_val = "Re: [OMPI devel] Add child to another parent.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 25 12:48:58 2011" -->
<!-- isoreceived="20110325164858" -->
<!-- sent="Fri, 25 Mar 2011 17:48:53 +0100" -->
<!-- isosent="20110325164853" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Add child to another parent." -->
<!-- id="AANLkTimJcY1Q_BNY_dFZu+D2mGcR31MKj6bsNPAetbLB_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BB04A53A-1810-4D7C-8D52-3E20BE720A15_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-03-25 12:48:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9142.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9140.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9130.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9142.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Reply:</strong> <a href="9142.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From what you've described before, I suspect all you'll need to do is add
</span><br>
<span class="quotelev1">&gt; some code in orte/mca/odls/base/odls_base_default_fns.c that (a) checks to
</span><br>
<span class="quotelev1">&gt; see if a process in the launch message is being relocated (the
</span><br>
<span class="quotelev1">&gt; construct_child_list code does that already), and then (b) sends the
</span><br>
<span class="quotelev1">&gt; required info to all local child processes so they can take appropriate
</span><br>
<span class="quotelev1">&gt; action.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Failure detection, re-launch, etc. have all been taken care of for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I looked at the code that you mentioned me and i realize that i have two
<br>
possible options, that i'm going to share with you to know your opinion.
<br>
<p>First of all i will let you know my actual situation with the
<br>
implementation. As i'm working in a Fault Tolerant system, but using
<br>
uncoordinated checkpoint i'm taking checkpoints of all my process at
<br>
different time and storing them on the machine where there are residing, but
<br>
i also send this checkpoints to another node (lets call it protector), so if
<br>
this node fails his process should be restarted in the protector that have
<br>
his checkpoints.
<br>
<p>Right now i'm detecting the failure of a process and i know where this
<br>
process should be restarted, and also i have the checkpoint in the
<br>
protector. And i also have the child information of course.
<br>
<p>So, my options are:
<br>
*First Option*
<br>
*
<br>
*
<br>
I detect the failure, and then i use
<br>
orte_errmgr_hnp_base_global_update_state()  with some modifications and the
<br>
hnp_relocate but changing the spawning to make a restart from a checkpoint,
<br>
i suposse that using this, the migration of the process to another node will
<br>
be updated and everyone will know it, because is the hnp who is going to do
<br>
this (is this ok?).
<br>
<p>*Second Option*
<br>
*
<br>
*
<br>
Modify one of the spawn variations(probably the remote_spawn from rsh) in
<br>
the PLM framework and then use the orted_comm to command a remote_spawn in
<br>
the protector, but i don't know here how to update the info so everyone
<br>
knows about the change or how this is managed.
<br>
<p>I might be very wrong in what I said, my apologies if so.
<br>
<p>Thanks a lot for all the help.
<br>
<p>Best regards.
<br>
<p>Hugo Meyer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9141/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9142.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9140.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9130.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9142.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Reply:</strong> <a href="9142.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
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
