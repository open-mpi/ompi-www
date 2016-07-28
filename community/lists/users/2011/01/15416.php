<?
$subject_val = "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 25 06:32:17 2011" -->
<!-- isoreceived="20110125113217" -->
<!-- sent="Tue, 25 Jan 2011 06:32:03 -0500" -->
<!-- isosent="20110125113203" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?" -->
<!-- id="4D3EB4B3.70609_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="28685.35713.qm_at_web36707.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-25 06:32:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15417.php">Reuti: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>Previous message:</strong> <a href="15415.php">Will Glover: "[OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>In reply to:</strong> <a href="15415.php">Will Glover: "[OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15417.php">Reuti: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>Reply:</strong> <a href="15417.php">Reuti: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/25/2011 02:17 AM, Will Glover wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I tried a google/mailing list search for this but came up with nothing, so here goes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any level of automation between open mpi's dynamic process management and the SGE queue manager?
</span><br>
<span class="quotelev1">&gt; In particular, can I make a call to mpi_comm_spawn and have SGE dynamically increase the number of slots?
</span><br>
<span class="quotelev1">&gt; This seems a little far fetched, but it would be really useful if this is possible.  My application is 'restricted' to coarse-grain task parallelism and involves a work load that varies significantly during runtime (between 1 and ~100 parallel tasks).  Dynamic process management would maintain an optimal number of processors and reduce idling.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
This is an interesting idea but no integration has been done that would 
<br>
allow an MPI job to request more slots.
<br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15416/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15416/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15417.php">Reuti: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>Previous message:</strong> <a href="15415.php">Will Glover: "[OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>In reply to:</strong> <a href="15415.php">Will Glover: "[OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15417.php">Reuti: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
<li><strong>Reply:</strong> <a href="15417.php">Reuti: "Re: [OMPI users] openmpi's mpi_comm_spawn integrated with sge?"</a>
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
