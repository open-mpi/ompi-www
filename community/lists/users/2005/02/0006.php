<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 15 12:00:18 2005" -->
<!-- isoreceived="20050215170018" -->
<!-- sent="Tue, 15 Feb 2005 08:59:39 -0800" -->
<!-- isosent="20050215165939" -->
<!-- name="Mitch Sukalski" -->
<!-- email="mwsukal_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Thread-safety and daemon initiation" -->
<!-- id="200502150859.40147.mwsukal_at_ca.sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="421219E1.8020008_at_ecmwf.int" -->
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
<strong>From:</strong> Mitch Sukalski (<em>mwsukal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-02-15 11:59:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0007.php">Jeff Squyres: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
<li><strong>Previous message:</strong> <a href="0005.php">George Bosilca: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
<li><strong>In reply to:</strong> <a href="0004.php">Neil Storer: "[O-MPI users] Thread-safety and daemon initiation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Neil,
<br>
<p>Long time, no see! Greetings from rainy San Francisco to rainy Reading!
<br>
<p>Open MPI is designed to be thread-safe using pthread facilities with 
<br>
relatively fine grain access to critical regions. I haven't tried to mix Open 
<br>
MPI with OpenMP, but from what I understand of OpenMP, I believe it should be 
<br>
compatible. 
<br>
<p>As far as start-up mechanisms, Open MPI will support both daemon and 
<br>
daemon-less modes, in a fairly large number of resource reservation/job 
<br>
spawning environments -- rsh/ssh, SLURM, Bproc, RMS, PBS, LSF (either 
<br>
currently on in the works). They are fully componentized and dynamically 
<br>
loadable via the MPI Component Architecture (MCA).
<br>
<p>Cheers,
<br>
<p>Mitch
<br>
<p>On Tuesday 15 February 2005 07:48, Neil Storer wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two queries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Is Open MPI thread-safe (assuming the system-supplied libraries are
</span><br>
<span class="quotelev1">&gt; thread-safe)? In particular will it be possible to call MPI routines
</span><br>
<span class="quotelev1">&gt; from OpenMP regions and will it be possible to use OpenMP directives
</span><br>
<span class="quotelev1">&gt; within MPI tasks?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Does Open MPI use the same mechanism as LAM-MPI's &quot;lamboot&quot; (rsh/ssh)
</span><br>
<span class="quotelev1">&gt; to start daemons on other nodes or is there a different mechanism
</span><br>
<span class="quotelev1">&gt; altogether?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;         Neil Storer
</span><br>
<p><pre>
-- 
Mitch Sukalski &lt;mwsukal_at_[hidden]&gt;
Scalable Computing Research and Development (8961)
Sandia National Laboratories
P.O. Box 969, Mail Stop 9158, Livermore, CA. 94551-0969
office: (925) 294-4713
cell: (925) 337-4212
fax: (925) 294-2400
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0007.php">Jeff Squyres: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
<li><strong>Previous message:</strong> <a href="0005.php">George Bosilca: "Re: [O-MPI users] Thread-safety and daemon initiation"</a>
<li><strong>In reply to:</strong> <a href="0004.php">Neil Storer: "[O-MPI users] Thread-safety and daemon initiation"</a>
<!-- nextthread="start" -->
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
