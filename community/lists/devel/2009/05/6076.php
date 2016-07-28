<?
$subject_val = "Re: [OMPI devel] possible bug in 1.3.2 sm transport";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 18:28:03 2009" -->
<!-- isoreceived="20090519222803" -->
<!-- sent="Tue, 19 May 2009 16:27:58 -0600" -->
<!-- isosent="20090519222758" -->
<!-- name="Bryan Lally" -->
<!-- email="lally_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bug in 1.3.2 sm transport" -->
<!-- id="4A13326E.6010708_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A13229B.4000605_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] possible bug in 1.3.2 sm transport<br>
<strong>From:</strong> Bryan Lally (<em>lally_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 18:27:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6077.php">Jeff Squyres: "[OMPI devel] CMR one-sided changes?  (r21134)"</a>
<li><strong>Previous message:</strong> <a href="6075.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>In reply to:</strong> <a href="6075.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6404.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bryan Lally wrote:
<br>
<p><span class="quotelev1">&gt; Here's what we've found.  It wasn't the platform file as such.  I've
</span><br>
<span class="quotelev1">&gt; since built with ./configure and some standard, obvious command line
</span><br>
<span class="quotelev1">&gt; switches.  What's then required is to edit the platform configuration
</span><br>
<span class="quotelev1">&gt; file, &lt;prefix&gt;/etc/openmpi-mca-params.conf and add:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     coll_sync_priority = 100
</span><br>
<span class="quotelev1">&gt;     coll_sync_barrier_before = 1000
</span><br>
<p>Oops.  Hit send a bit before I was ready.
<br>
<p>This has eliminated the problem on two Fedora 9 machines (8 cores and a 
<br>
2 core laptop) and a 4 core Fedora 7 machine.
<br>
<p>Thanks to all who helped get this figured out, particularly Ralph.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Bryan
<br>
<p><pre>
-- 
Bryan Lally, lally_at_[hidden]
505.667.9954
CCS-2
Los Alamos National Laboratory
Los Alamos, New Mexico
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6077.php">Jeff Squyres: "[OMPI devel] CMR one-sided changes?  (r21134)"</a>
<li><strong>Previous message:</strong> <a href="6075.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>In reply to:</strong> <a href="6075.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6404.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
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
