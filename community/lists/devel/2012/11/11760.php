<?
$subject_val = "Re: [OMPI devel] ROMIO code in OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 04:47:49 2012" -->
<!-- isoreceived="20121107094749" -->
<!-- sent="Wed, 7 Nov 2012 01:47:44 -0800" -->
<!-- isosent="20121107094744" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ROMIO code in OMPI" -->
<!-- id="CAMD57ofaEUfPOBbJutzJBcAVN0o5js=krSs4EZ68aiZCJK4=EA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHwLALMkpFbn5t1Rc7zLbfKwh64NMKy89kGvkRqEH=DdpZXM8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ROMIO code in OMPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 04:47:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11761.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file"</a>
<li><strong>Previous message:</strong> <a href="11759.php">Rayson Ho: "[OMPI devel] ROMIO code in OMPI"</a>
<li><strong>In reply to:</strong> <a href="11759.php">Rayson Ho: "[OMPI devel] ROMIO code in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11766.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Reply:</strong> <a href="11766.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rayson
<br>
<p>We take snapshots from time to time. We debated whether or not to update
<br>
again for the 1.7 release, but ultimately decided not to do so - IIRC, none
<br>
of our developers had the time.
<br>
<p>If you are interested and willing to do the update, and perhaps look at
<br>
removing the limit, that is fine with me! You might check to see if the
<br>
latest ROMIO can go past 2GB - could be that an update is all that is
<br>
required.
<br>
<p>Alternatively, you might check with Edgar Gabriel about the ompio component
<br>
and see if it either supports &gt; 2GB sizes or can also be extended to do so.
<br>
Might be that a simple change to select that module instead of ROMIO would
<br>
meet the need.
<br>
<p>Appreciate your interest in contributing!
<br>
Ralph
<br>
<p><p>On Tue, Nov 6, 2012 at 11:55 AM, Rayson Ho &lt;raysonlogin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; How is the ROMIO code in Open MPI developed &amp; maintained? Do Open MPI
</span><br>
<span class="quotelev1">&gt; releases take snapshots of the ROMIO code from time to time from the
</span><br>
<span class="quotelev1">&gt; ROMIO project, or was the ROMIO code forked a while ago and maintained
</span><br>
<span class="quotelev1">&gt; separately in Open MPI??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to fix the 2GB limit in the ROMIO code... and that's why
</span><br>
<span class="quotelev1">&gt; I am asking! :-D
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 1, 2012 at 6:21 PM, Richard Shaw &lt;jrs65_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Rayson,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just seen this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the end we've worked around it, by creating successive views of the
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev2">&gt; &gt; that are all else than 2GB and then offsetting them to eventually read in
</span><br>
<span class="quotelev2">&gt; &gt; everything. It's a bit of a pain to keep track of, but it works at the
</span><br>
<span class="quotelev2">&gt; &gt; moment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was intending on following your hints and trying to fix the bug myself,
</span><br>
<span class="quotelev2">&gt; &gt; but I've been short on time so haven't gotten around to it yet.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Richard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Saturday, 20 October, 2012 at 10:12 AM, Rayson Ho wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Eric,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sounds like it's also related to this problem reported by Scinet back in
</span><br>
<span class="quotelev2">&gt; &gt; July:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2012/07/19762.php">http://www.open-mpi.org/community/lists/users/2012/07/19762.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And I think I found the issue, but I still have not followed up with
</span><br>
<span class="quotelev2">&gt; &gt; the ROMIO guys yet. And I was not sure if Scinet was waiting for the
</span><br>
<span class="quotelev2">&gt; &gt; fix or not - next time I visit U of Toronto, I will see if I can visit
</span><br>
<span class="quotelev2">&gt; &gt; the Scinet office and meet with the Scinet guys!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11760/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11761.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27574 - trunk/orte/mca/rmaps/rank_file"</a>
<li><strong>Previous message:</strong> <a href="11759.php">Rayson Ho: "[OMPI devel] ROMIO code in OMPI"</a>
<li><strong>In reply to:</strong> <a href="11759.php">Rayson Ho: "[OMPI devel] ROMIO code in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11766.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Reply:</strong> <a href="11766.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
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
