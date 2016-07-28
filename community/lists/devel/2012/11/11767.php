<?
$subject_val = "Re: [OMPI devel] ROMIO code in OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 15:08:54 2012" -->
<!-- isoreceived="20121108200854" -->
<!-- sent="Thu, 8 Nov 2012 15:08:49 -0500" -->
<!-- isosent="20121108200849" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ROMIO code in OMPI" -->
<!-- id="CAHwLALPGtwZjJoqb_uN3963PMS65_aHRHOhY8eqaF8P=_3PA4g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B46B091D-DB59-44CB-B02C-7831E10213D9_at_cs.uh.edu" -->
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
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 15:08:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11768.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Previous message:</strong> <a href="11766.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>In reply to:</strong> <a href="11766.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11768.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Reply:</strong> <a href="11768.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vishwanath,
<br>
<p>Can you point me to the two_phase module code? (I just wanted to make
<br>
sure that we are looking at the same problem.)
<br>
<p>Rayson
<br>
<p>==================================================
<br>
Open Grid Scheduler - The Official Open Source Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p><p>On Thu, Nov 8, 2012 at 1:58 PM, Vishwanath Venkatesan
<br>
&lt;venkates_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I just checked the code for testing 2GB limitation in OMPIO. The code works
</span><br>
<span class="quotelev1">&gt; with OMPIO's  &quot; fcoll dynamic&quot; module. Although it does have the same 2GB
</span><br>
<span class="quotelev1">&gt; limitation with the two_phase module which is based on ROMIO's
</span><br>
<span class="quotelev1">&gt; implementation and the static module. I have a fix for both these modules I
</span><br>
<span class="quotelev1">&gt; will commit them to trunk shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Vish
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vishwanath Venkatesan
</span><br>
<span class="quotelev1">&gt; Graduate Research Assistant
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab
</span><br>
<span class="quotelev1">&gt; Department of Computer Science
</span><br>
<span class="quotelev1">&gt; University of Houston
</span><br>
<span class="quotelev1">&gt; TX, USA
</span><br>
<span class="quotelev1">&gt; www.cs.uh.edu/~venkates
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 7, 2012, at 3:47 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We take snapshots from time to time. We debated whether or not to update
</span><br>
<span class="quotelev1">&gt; again for the 1.7 release, but ultimately decided not to do so - IIRC, none
</span><br>
<span class="quotelev1">&gt; of our developers had the time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are interested and willing to do the update, and perhaps look at
</span><br>
<span class="quotelev1">&gt; removing the limit, that is fine with me! You might check to see if the
</span><br>
<span class="quotelev1">&gt; latest ROMIO can go past 2GB - could be that an update is all that is
</span><br>
<span class="quotelev1">&gt; required.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, you might check with Edgar Gabriel about the ompio component
</span><br>
<span class="quotelev1">&gt; and see if it either supports &gt; 2GB sizes or can also be extended to do so.
</span><br>
<span class="quotelev1">&gt; Might be that a simple change to select that module instead of ROMIO would
</span><br>
<span class="quotelev1">&gt; meet the need.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Appreciate your interest in contributing!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 6, 2012 at 11:55 AM, Rayson Ho &lt;raysonlogin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How is the ROMIO code in Open MPI developed &amp; maintained? Do Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; releases take snapshots of the ROMIO code from time to time from the
</span><br>
<span class="quotelev2">&gt;&gt; ROMIO project, or was the ROMIO code forked a while ago and maintained
</span><br>
<span class="quotelev2">&gt;&gt; separately in Open MPI??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to fix the 2GB limit in the ROMIO code... and that's why
</span><br>
<span class="quotelev2">&gt;&gt; I am asking! :-D
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rayson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==================================================
</span><br>
<span class="quotelev2">&gt;&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Nov 1, 2012 at 6:21 PM, Richard Shaw &lt;jrs65_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Rayson,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Just seen this.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In the end we've worked around it, by creating successive views of the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; file
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that are all else than 2GB and then offsetting them to eventually read
</span><br>
<span class="quotelev3">&gt;&gt; &gt; in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; everything. It's a bit of a pain to keep track of, but it works at the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; moment.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I was intending on following your hints and trying to fix the bug
</span><br>
<span class="quotelev3">&gt;&gt; &gt; myself,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; but I've been short on time so haven't gotten around to it yet.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Richard
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Saturday, 20 October, 2012 at 10:12 AM, Rayson Ho wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Eric,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sounds like it's also related to this problem reported by Scinet back in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; July:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2012/07/19762.php">http://www.open-mpi.org/community/lists/users/2012/07/19762.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; And I think I found the issue, but I still have not followed up with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the ROMIO guys yet. And I was not sure if Scinet was waiting for the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; fix or not - next time I visit U of Toronto, I will see if I can visit
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the Scinet office and meet with the Scinet guys!
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="11768.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Previous message:</strong> <a href="11766.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>In reply to:</strong> <a href="11766.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11768.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Reply:</strong> <a href="11768.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
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
