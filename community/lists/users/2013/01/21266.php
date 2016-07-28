<?
$subject_val = "Re: [OMPI users] Checkpointing an MPI application with OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 08:57:12 2013" -->
<!-- isoreceived="20130130135712" -->
<!-- sent="Wed, 30 Jan 2013 13:53:42 +0100" -->
<!-- isosent="20130130125342" -->
<!-- name="Constantinos Makassikis" -->
<!-- email="cmakassikis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing an MPI application with OMPI" -->
<!-- id="CAN601uOA9BUZXdaEKcTZvVyRPKhAHwsBxR02aXHpVcyMBiYauQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A7E7E0DF-B5BD-4CC3-9105-5710AF4CF07D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpointing an MPI application with OMPI<br>
<strong>From:</strong> Constantinos Makassikis (<em>cmakassikis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 07:53:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21267.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Previous message:</strong> <a href="21265.php">Siegmar Gross: "[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21264.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21267.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jan 30, 2013 at 3:02 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your node hardware is the problem, or you decide you do want/need to
</span><br>
<span class="quotelev1">&gt; pursue an FT solution, then you might look at the OMPI-based solutions from
</span><br>
<span class="quotelev1">&gt; parties such as <a href="http://fault-tolerance.org">http://fault-tolerance.org</a> or the MPICH2 folks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Just as Ralph said, you may look into alternatives. From what I have seen,
<br>
MPICH2 provides fault tolerance using BLCR.
<br>
The same goes for Intel's MPI (
<br>
<a href="http://software.intel.com/en-us/forums/topic/296300">http://software.intel.com/en-us/forums/topic/296300</a>). Though not free, you
<br>
may try it during
<br>
a 30-day evaluation period (
<br>
<a href="http://software.intel.com/en-us/intel-mpi-library/">http://software.intel.com/en-us/intel-mpi-library/</a>).
<br>
It can be interesting to see how the two MPI fair wrt to BLCR-based FT.
<br>
<p>Another alternative which may be worth considering is DMTCP (
<br>
<a href="http://dmtcp.sourceforge.net/">http://dmtcp.sourceforge.net/</a>) from Northeastern University
<br>
for which there has been an interesting podcast recently (
<br>
<a href="http://www.rce-cast.com/Podcast/rce-76-distributed-multithreaded-checkpointing.html">http://www.rce-cast.com/Podcast/rce-76-distributed-multithreaded-checkpointing.html</a>)
<br>
:-)
<br>
<p>Finally, depending on the application, you may be interested in adding
<br>
checkpoint-based fault tolerance at the application level with the help of
<br>
libraries such as SCR (<a href="http://sourceforge.net/projects/scalablecr/">http://sourceforge.net/projects/scalablecr/</a>). Though
<br>
you'll need to spend some time modifying the application source code,
<br>
it may be better than system-level based alternatives in the long run.
<br>
<p><pre>
--
Constantinos
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21266/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21267.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Previous message:</strong> <a href="21265.php">Siegmar Gross: "[OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21264.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21267.php">Maxime Boissonneault: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
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
