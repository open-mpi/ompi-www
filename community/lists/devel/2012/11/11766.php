<?
$subject_val = "Re: [OMPI devel] ROMIO code in OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 13:58:47 2012" -->
<!-- isoreceived="20121108185847" -->
<!-- sent="Thu, 8 Nov 2012 12:58:40 -0600" -->
<!-- isosent="20121108185840" -->
<!-- name="Vishwanath Venkatesan" -->
<!-- email="venkates_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ROMIO code in OMPI" -->
<!-- id="B46B091D-DB59-44CB-B02C-7831E10213D9_at_cs.uh.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMD57ofaEUfPOBbJutzJBcAVN0o5js=krSs4EZ68aiZCJK4=EA_at_mail.gmail.com" -->
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
<strong>From:</strong> Vishwanath Venkatesan (<em>venkates_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 13:58:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11767.php">Rayson Ho: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Previous message:</strong> <a href="11765.php">David Singleton: "[OMPI devel] -npersocket in 1.6"</a>
<li><strong>In reply to:</strong> <a href="11760.php">Ralph Castain: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11767.php">Rayson Ho: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Reply:</strong> <a href="11767.php">Rayson Ho: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just checked the code for testing 2GB limitation in OMPIO. The code works with OMPIO's  &quot; fcoll dynamic&quot; module. Although it does have the same 2GB limitation with the two_phase module which is based on ROMIO's implementation and the static module. I have a fix for both these modules I will commit them to trunk shortly. 
<br>
<p>&nbsp;
<br>
Thanks
<br>
Vish
<br>
<p>Vishwanath Venkatesan
<br>
Graduate Research Assistant
<br>
Parallel Software Technologies Lab
<br>
Department of Computer Science
<br>
University of Houston
<br>
TX, USA
<br>
www.cs.uh.edu/~venkates
<br>
<p><p>On Nov 7, 2012, at 3:47 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi Rayson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We take snapshots from time to time. We debated whether or not to update again for the 1.7 release, but ultimately decided not to do so - IIRC, none of our developers had the time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are interested and willing to do the update, and perhaps look at removing the limit, that is fine with me! You might check to see if the latest ROMIO can go past 2GB - could be that an update is all that is required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alternatively, you might check with Edgar Gabriel about the ompio component and see if it either supports &gt; 2GB sizes or can also be extended to do so. Might be that a simple change to select that module instead of ROMIO would meet the need.
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
<span class="quotelev1">&gt; How is the ROMIO code in Open MPI developed &amp; maintained? Do Open MPI
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
<span class="quotelev1">&gt; On Thu, Nov 1, 2012 at 6:21 PM, Richard Shaw &lt;jrs65_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Rayson,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just seen this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the end we've worked around it, by creating successive views of the file
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11766/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11767.php">Rayson Ho: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Previous message:</strong> <a href="11765.php">David Singleton: "[OMPI devel] -npersocket in 1.6"</a>
<li><strong>In reply to:</strong> <a href="11760.php">Ralph Castain: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11767.php">Rayson Ho: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Reply:</strong> <a href="11767.php">Rayson Ho: "Re: [OMPI devel] ROMIO code in OMPI"</a>
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
