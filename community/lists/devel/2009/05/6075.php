<?
$subject_val = "Re: [OMPI devel] possible bug in 1.3.2 sm transport";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 17:20:32 2009" -->
<!-- isoreceived="20090519212032" -->
<!-- sent="Tue, 19 May 2009 15:20:27 -0600" -->
<!-- isosent="20090519212027" -->
<!-- name="Bryan Lally" -->
<!-- email="lally_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bug in 1.3.2 sm transport" -->
<!-- id="4A13229B.4000605_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0BFBBB66-94F8-46F3-AB55-E11B96C05A85_at_cisco.com" -->
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
<strong>Date:</strong> 2009-05-19 17:20:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6076.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Previous message:</strong> <a href="6074.php">Ashley Pittman: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6072.php">Jeff Squyres: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6076.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Reply:</strong> <a href="6076.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 18, 2009, at 11:49 PM, Bryan Lally wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph sent me a platform file and a corresponding .conf file.  I built
</span><br>
<span class="quotelev2">&gt;&gt; ompi from openmpi-1.3.3a1r21223.tar.gz, with these files.  I've been
</span><br>
<span class="quotelev2">&gt;&gt; running my normal tests and have been unable to hang a job yet.  I've
</span><br>
<span class="quotelev2">&gt;&gt; run enough that I don't expect to see a problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's both good and bad.  :-)
</span><br>
<p>Right!
<br>
<p><span class="quotelev1">&gt; Can you point out specifically which platform file is being used?  If 
</span><br>
<span class="quotelev1">&gt; that platform file is changing something from &quot;not working&quot; to 
</span><br>
<span class="quotelev1">&gt; &quot;working&quot;, it bears a bit closer examination to ensure that we aren't 
</span><br>
<span class="quotelev1">&gt; just masking a bug.
</span><br>
<p>Here's what we've found.  It wasn't the platform file as such.  I've
<br>
since built with ./configure and some standard, obvious command line
<br>
switches.  What's then required is to edit the platform configuration
<br>
file, &lt;prefix&gt;/etc/openmpi-mca-params.conf and add:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coll_sync_priority = 100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coll_sync_barrier_before = 1000
<br>
<p><p><p><p><pre>
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
<li><strong>Next message:</strong> <a href="6076.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Previous message:</strong> <a href="6074.php">Ashley Pittman: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6072.php">Jeff Squyres: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6076.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Reply:</strong> <a href="6076.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
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
