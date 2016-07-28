<?
$subject_val = "Re: [OMPI users] OpenMPI problem on Fedora Core 12";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 14:22:51 2009" -->
<!-- isoreceived="20091214192251" -->
<!-- sent="Mon, 14 Dec 2009 19:22:43 +0000" -->
<!-- isosent="20091214192243" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI problem on Fedora Core 12" -->
<!-- id="1260818563.5420.287.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5684A68E-2A81-46BD-ABAE-CA33DE16DCE9_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI problem on Fedora Core 12<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-14 14:22:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11532.php">Rahul Nabar: "[OMPI users] Disabling irqbalance service for better performance of MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="11530.php">Eugene Loh: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>In reply to:</strong> <a href="11524.php">Gijsbert Wiesenekker: "[OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11671.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Reply:</strong> <a href="11671.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 2009-12-13 at 19:04 +0100, Gijsbert Wiesenekker wrote:
<br>
<span class="quotelev1">&gt; The following routine gives a problem after some (not reproducible)
</span><br>
<span class="quotelev1">&gt; time on Fedora Core 12. The routine is a CPU usage friendly version of
</span><br>
<span class="quotelev1">&gt; MPI_Barrier.
</span><br>
<p>There are some proposals for Non-blocking collectives before the MPI
<br>
forum currently and I believe a working implementation which can be used
<br>
as a plug-in for OpenMPI, I would urge you to look at these rather than
<br>
try and implement your own.
<br>
<p><span class="quotelev1">&gt; My question is: is there a problem with this routine that I overlooked
</span><br>
<span class="quotelev1">&gt; that somehow did not show up until now
</span><br>
<p>Your code both does all-to-all communication and also uses probe, both
<br>
of these can easily be avoided when implementing Barrier.
<br>
<p><span class="quotelev1">&gt; Is there a way to see which messages have been sent/received/are
</span><br>
<span class="quotelev1">&gt; pending?
</span><br>
<p>Yes, there is a message queue interface allowing tools to peek inside
<br>
the MPI library and see these queues.  That I know of there are three
<br>
tools which use this, either TotalView, DDT or my own tool, padb.
<br>
TotalView and DDT are both full-featured graphical debuggers and
<br>
commercial products, padb is a open-source text based tool.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11532.php">Rahul Nabar: "[OMPI users] Disabling irqbalance service for better performance of MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="11530.php">Eugene Loh: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>In reply to:</strong> <a href="11524.php">Gijsbert Wiesenekker: "[OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11671.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Reply:</strong> <a href="11671.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
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
