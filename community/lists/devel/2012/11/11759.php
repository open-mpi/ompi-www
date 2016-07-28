<?
$subject_val = "[OMPI devel] ROMIO code in OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 14:55:35 2012" -->
<!-- isoreceived="20121106195535" -->
<!-- sent="Tue, 6 Nov 2012 14:55:30 -0500" -->
<!-- isosent="20121106195530" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="[OMPI devel] ROMIO code in OMPI" -->
<!-- id="CAHwLALMkpFbn5t1Rc7zLbfKwh64NMKy89kGvkRqEH=DdpZXM8w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] ROMIO code in OMPI<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-06 14:55:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11760.php">Ralph Castain: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Previous message:</strong> <a href="11758.php">George Bosilca: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11760.php">Ralph Castain: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Reply:</strong> <a href="11760.php">Ralph Castain: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How is the ROMIO code in Open MPI developed &amp; maintained? Do Open MPI
<br>
releases take snapshots of the ROMIO code from time to time from the
<br>
ROMIO project, or was the ROMIO code forked a while ago and maintained
<br>
separately in Open MPI??
<br>
<p>I would like to fix the 2GB limit in the ROMIO code... and that's why
<br>
I am asking! :-D
<br>
<p>Rayson
<br>
<p>==================================================
<br>
Open Grid Scheduler - The Official Open Source Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p><p>On Thu, Nov 1, 2012 at 6:21 PM, Richard Shaw &lt;jrs65_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Rayson,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just seen this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the end we've worked around it, by creating successive views of the file
</span><br>
<span class="quotelev1">&gt; that are all else than 2GB and then offsetting them to eventually read in
</span><br>
<span class="quotelev1">&gt; everything. It's a bit of a pain to keep track of, but it works at the
</span><br>
<span class="quotelev1">&gt; moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was intending on following your hints and trying to fix the bug myself,
</span><br>
<span class="quotelev1">&gt; but I've been short on time so haven't gotten around to it yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Saturday, 20 October, 2012 at 10:12 AM, Rayson Ho wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like it's also related to this problem reported by Scinet back in
</span><br>
<span class="quotelev1">&gt; July:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/07/19762.php">http://www.open-mpi.org/community/lists/users/2012/07/19762.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I think I found the issue, but I still have not followed up with
</span><br>
<span class="quotelev1">&gt; the ROMIO guys yet. And I was not sure if Scinet was waiting for the
</span><br>
<span class="quotelev1">&gt; fix or not - next time I visit U of Toronto, I will see if I can visit
</span><br>
<span class="quotelev1">&gt; the Scinet office and meet with the Scinet guys!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11760.php">Ralph Castain: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Previous message:</strong> <a href="11758.php">George Bosilca: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11760.php">Ralph Castain: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Reply:</strong> <a href="11760.php">Ralph Castain: "Re: [OMPI devel] ROMIO code in OMPI"</a>
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
